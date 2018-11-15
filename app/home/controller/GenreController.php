<?php
/**
 * JYmusic音乐管理系统
 *
 * @version   2.0
 * @author    战神~~巴蒂 [jyuucn@163.com]
 * @license   http://jyuu.cn [未经授权严禁私自出售，否者承担法律责任]
 * @copyright JYmusic 2014 - 2017
 */

namespace app\home\controller;

use app\common\model\Genre;

class GenreController extends HomeController
{
    /**
     * @return \think\Response
     */
    public function index()
    {
        $this->seoMeta();
        return $this->fetch();
    }

    /**
     * @param string $name
     * @param string $sort
     * @return \think\Response
     */
    public function read($name = '', $sort = '')
    {
        $info = [];
        $map['status'] = 1;
        if (is_numeric($name) && $name > 0) {
            $map['id'] = $name;
            $info = Genre::get($map);
        } elseif (ctype_alnum($name)) {
            $map['alias'] = $name;
            $info = Genre::get($map);
        }
        
        if (empty($info)) {
            $this->error('你查看的分类不存在！');
        }
        
        $this->seoMeta($info);
        return $this->fetch('detail', [
            'data' => $info,
            'sort' => $sort,
            'order' => $this->getOrder($sort)
        ]);
    }
    
    public function order($name = '', $order = '')
    {
        //halt($this->request);
        return $this->read($name, $order);
    }
    
    /**
     * 获取排序字段
     * @param string $order
     * @return string
     */
    protected function getOrder($order = '')
    {
        if (empty($order)) {
            return 'id desc';
        }
        $orders = [
            'listens' => 'listens desc',
            'hot'  => 'listens desc',
            'favtimes'  => 'favtimes desc',
            'fav'  => 'favtimes desc',
            'digg'=> 'digg desc',
            'download'=> 'download desc',
            'down'=> 'download desc',
            'position'=> 'position desc',
            'pos'=> 'position desc',
            'create_time' => 'create_time desc',
            'latest' => 'create_time desc',
            'create' => 'create_time desc',
            'new' => 'create_time desc',
        ];
        return isset($orders[$order])? $orders[$order] : 'id desc';
    }
}
