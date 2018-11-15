<?php
/**
 * JYmusic音乐管理系统
 *
 * @version     2.0
 * @author      战神~~巴蒂 <jyuucn@163.com>
 * @license     http://jyuu.cn [未经授权严禁私自出售，否者承担法律责任]
 * @copyright   2014 - 2017 JYmusic
 */

namespace app\admin\controller;

use think\Request;
use app\common\api\Notice;
use app\common\model\Songs;
use app\common\model\Member;
use app\common\model\SongsExtend;

class SongsController extends AdminController
{
    /**
     * 显示歌曲列表
     * @return \think\response
     */
    public function index()
    {
        $map   = $this->getListMap('name');
        $param = $this->request->param();
        $pos   = ''; $genre  = ''; $rank  = '';
        if (isset($param['genre'])) {
            $genre = intval($param['genre']);
            $map['genre_id'] = intval($genre);
        }
        if (isset($param['pos'])) {
            $pos = intval($param['pos']);
            $map[] = ['exp', "position & {$pos} = {$pos}"];
        }
        if (isset($param['artist'])) {
            $map['artist_id'] = intval($param['artist']);
        }
        if (isset($param['album'])) {
            $map['album_id'] = intval($param['album']);
        }
        if (isset($param['rank'])) {
            $rank = intval($param['rank']);
            $map['rank_id'] = $rank;
        }

        $order = text_filter($this->request->param('order'));
        if (!empty($order)) {
            $order = text_filter($this->request->param('field')) . ' ' . $order;
        }
        cookie('forward_url', $this->request->url());
        $field = 'id,name,genre_id,
            album_id,album_name,artist_id,artist_name,
            rank_id,tags,create_time,update_time,status';
        $list = $this->lists("songs", $map, $order, $field);

        return $this->fetch('', [
            '_list' => $list,
            'genre' => $genre,
            'curpos'=> $pos,
            'rank'=> $rank,
        ]);
    }

    /**
     * 显示创建资源表单页.
     * @return \think\response
     */
    public function create()
    {
        return $this->fetch();
    }

    /**
     * 保存新建的资源
     * @param  $request
     * @return \think\response
     */
    public function save(Request $request)
    {
        $data   = $request->post();
        
        $result = $this->validate($data, 'Songs');
        if (true !== $result) {
            $this->error($result);
        }
        $extend = $data['extend'];
        $result = $this->validate($extend, 'SongsExtend');
        if (true !== $result) {
            $this->error($result);
        }

        $songs = new Songs($data);
        if ($songs->allowField(true)->save()) {
            if ($songs->extend()->save($extend)) {
                //更新标签
                $songs->updateTags();
                if ($songs->up_uid > 0) {
                    Member::updateAttrNum('songs', $songs->up_uid);
                }
                
                $this->success('音乐[' . $songs->name . ']更新成功', cookie('forward_url'));
            }
            $songs->delete();
        }
        $this->error('更新成功失败，请稍后重试');
    }

    /**
     * 显示编辑资源表单页.
     * @param  int  $id
     * @return \think\response
     */
    public function edit($id)
    {
        if (!intval($id)) {
            $this->error('ID参数错误');
        }
        $song = Songs::get($id, 'extend');
        if (!$song) {
            $this->error('音乐不存在');
        }
        $info = $song->getData();
        $info['extend'] = $song->extend->getData();
        $info['extend']['down_rule'] = json_decode($info['extend']['down_rule'], true);
        return $this->fetch('create', ['info' => $info]);
    }

    /**
     * 保存更新的资源
     * @param Request $request
     * @param int    $id
     * @return \think\response
     */
    public function update(Request $request, $id = 0)
    {
        $data = $request->post();
        $result = $this->validate($data, 'Songs');
        
        if (true !== $result) {
            $this->error($result);
        }
        $extend = $data['extend'];
        $result = $this->validate($extend, 'SongsExtend');
        if (true !== $result) {
            $this->error($result);
        }
        $song = new Songs();
        $data = $song->checkUpdateField($data);
        
        $res = $song->isUpdate(true)->allowField(true)->save($data);
        if ($res) {
            $song->updateTags();
        }
        $songExtend = new SongsExtend();
        $res2 = $songExtend->isUpdate(true)->save($extend);
        
        if ($res || $res2) {
            cache('songs_info_list', null);
            $this->success('音乐[' . $song->name . ']修改成功', cookie('forward_url'));
        }
        $this->error('音乐修改失败，请稍后重试');
    }

    /**
     * 设置指定歌曲状体
     * @return \think\response
     */
    public function setStatus()
    {
        return $this->changeStatus('songs');
    }

    /**
     * 删除指定歌曲
     * @return \think\response
     */
    public function delete()
    {
        $ids = $this->request->param('id/a');
        if (empty($ids)) {
            $this->error('请选择要操作的数据');
        }
        $map['id'] = ['in', $ids];
        
        $model = new Songs;
        $list = $model->all($ids);
        if ($model->where($map)->update(['status' => -1])) {
            foreach($list as $song){
                Member::updateAttrNum('songs', $song['up_uid'], false);
            }
            $this->success('歌曲删除成功');
        } else {
            $this->error('歌曲删除失败');
        }
    }

    /**
     * 批量操作
     * @param  string $type
     * @return \think\response
     */
    public function bulk($type = '')
    {
        if ($this->request->isPost() && !empty($type)) {
            return $this->$type();
        } else {
            return $this->fetch('bulk_' . $type);
        }
    }

    /**
     * 批量修改
     * @return \think\response
     */
    protected function changes()
    {
        $post = $this->request->post();
        if (empty($post['ids'])) {
            $this->error('请选择要修改的音乐');
        }
        
        $ids = $post['ids'];
        unset($post['ids']);
        foreach ($post as $key => $value) {
            if (empty($value)) {
                unset($post[$key]);
            } else {
                $post[$key] = text_filter($value);
            }
        }
        
        if (empty($post)) {
            $this->error('没有字段需要更新');
        }
        $res = false;
        if (isset($post['server_id'])) {
            $extend = new SongsExtend();
            $res = $extend->where('mid', 'in', $ids)->update($post);
            unset($post['server_id']);
        }
        if (!empty($post)) {
            $model = new Songs();
            $res = $model->bulkUpdate($post, $ids);
        }
        if ($res) {
            $this->success('更新成功');
        } else {
            $this->error('更新失败');
        }
    }
    
    /**
     * 批量推荐到
     */
    protected function recommend()
    {
        $post = $this->request->post();
        if (empty($post['ids'])) {
            $this->error('请选择要修改的音乐');
        }
        $ids = $post['ids']; unset($post['ids']);
        $update = [];
        $action = '推荐';
        if (intval($post['is_add'])) {
            if (isset($post['position']) && is_array($post['position'])) {
                $pos = 0;
                //将各个推荐位的值相加
                foreach ($post['position'] as $val) {
                    $pos += $val;
                }
                $update['position'] = $pos;
            }
            if (!empty($post['rank_id'])) {
                $update['rank_id'] = $post['rank_id'];
            }
        } else {
            if (!empty($post['is_remove_rank'])) {
                $update['rank_id'] = 0;
            }
            if (!empty($post['is_remove_pos'])) {
                $update['position'] = 0;
            }
            $action = '移除';
        }
    
        if (empty($update)) {
            $this->error('没有字段需要更新');
        }
        
        $map['id'] = ['in', $ids];
        $res = Songs::where($map)->update($update);
        if ($res) {
            $this->success($action.'成功', cookie('forward_url'));
        } else {
            $this->error($action . '失败');
        }
    }

    /**
     * 批量替换
     * @return mixed
     */
    protected function replace()
    {
        $post = $this->request->post();
        if (empty($post['rep_field'])) {
            $this->error('请选择要替换的字段');
        }
        if (empty($post['rep_before'])) {
            $this->error('请填写需要替换的字段');
        }
        $table = $post['rep_field'] != 'name' ? 'songs_extend' : 'songs';
        $table = config('database.prefix') . $table;
        $res   = \think\Db::execute("update {$table} set {$post['rep_field']} = replace({$post['rep_field']},'{$post['rep_before']}','{$post['rep_after']}')");

        if ($res) {
            $this->success('批量替换失败', cookie('forward_url'));
        } else {
            $this->error('批量替换失败');
        }
    }
    
    /**
     * 清空所有数据
     * @return mixed
     */
    public function clear()
    {
        $ids    = !empty($ids)? $ids : $this->request->param('id/a');
        if (empty($ids)) {
            $this->error('请选择要操作的数据');
        }
        
        $model = new Songs();
        if ($model->clear($ids)) {
            $this->success('成功清空回收站', cookie('forward_url'));
        } else {
            $this->error('回收站清空失败');
        }
    }
    
    /**
     * 审核歌曲
     * @param int $id
     * @return \think\response
     */
    public function audit($id = 0)
    {
        $model = new Songs();
        if($this->request->isPost()) {
            $post = $this->request->post();
            $res = $model->isUpdate(true)->allowField(true)->save($post);
            $model->extend()->update($post['extend']);
    
            if ($res) {
                if ($post['status'] == 1) {
                    Member::updateAttrNum('songs', $post['up_uid']);
                    $content = '你上传的音乐[' . $model->name . ']成功通过审核';
                } else {
                    $content = '你上传的音乐[' . $model->name . ']未通过审核';
                    $content .= !empty($post['back_info']) ? ',' . $post['back_info'] : '';
                }
    
                if ($post['up_uid'] > 1) {
                    $notice = (new Notice())->to($post['up_uid'])->title('音乐审核通知');
                    $result = $notice->content($content)->send();
                    if (true !== $result) {
                        $this->success('音乐[' . $model->name . ']审核成功,但是通知发送失败：' . $result, cookie('forward_url'));
                    }
                }
                cache('songs_info_list', null);
                $this->success('音乐[' . $model->name . ']审核成功', cookie('forward_url'));
            }
            
            $this->error('审核修改失败，请稍后重试');
        } else {
            $song = $model->get($id, 'extend');

            !$song && $this->error('审核音乐不存在');
            
            if ($song->status != 2) {
                $this->error('当前音乐无需审核');
            }

            $info = $song->getData();
            $info['extend'] = $song->extend->getData();
            return $this->fetch('', ['info' => $info]);
        }
    }
}
