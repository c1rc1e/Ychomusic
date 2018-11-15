<?php
/**
 * JYmusic音乐管理系统
 *
 * @version     2.0
 * @author      战神~~巴蒂 [jyuucn@163.com]
 * @license     http://jyuu.cn [未经授权严禁私自出售，否者承担法律责任]
 * @copyright   2014 - 2017 JYmusic
 */

namespace app\common\model;

use think\Db;
use think\Url;
use think\Model;

/**
 * @package 艺人模型
 * @author 战神~~巴蒂 <jyuucn@163.com>
 */
class Artist extends Model
{
    /**
     * @var bool 自动写入时间戳
     */
    protected $autoWriteTimestamp = true;

    protected $auto = ['type_name'];
    
    protected $update = ['position'];
    
    protected $append = ['url','song_url','album_url','type_url', 'album_count', 'song_count'];
    
    /** 自动过滤标题 */
    protected function setNameAttr($value)
    {
        return text_filter($value);
    }

    /** 自动获取索引 */
    protected function setIndexAttr($value, $data)
    {
        if (empty($value)) {
            $value = msubstr($data['name'], 0, 1, "utf-8", false);
            if (preg_match("/^[\x7f-\xff]+$/", $value)) {
                //汉字获取拼音
                $pinyin = new \app\services\PinYin();
                $value = $pinyin->convert($value);
            }
            $value =  strtoupper(substr($value, 0, 1));
            $value = ctype_alpha($value) ? $value : 0;
        }
        return $value;
    }

    /** 自动写入艺术家类型 */
    protected function setTypeNameAttr($value, $data)
    {
        if (intval($data['type_id'])) {
            return Db::name('artist_type')->where('id', $data['type_id'])->value('name');
        }
        return $value;
    }

    /** 设置推荐位 */
    protected function setPositionAttr($pos)
    {
        if (is_array($pos)) {
            $newPos = 0;
            //将各个推荐位的值相加
            foreach ($pos as $val) {
                $newPos += $val;
            }
            return $newPos;
        }
        return intval($pos);
    }

    /** 自动过滤 */
    protected function setRegionAttr($value)
    {
        return !empty($value) ? text_filter($value) : '';
    }
    
    /** 获取封面 */
    protected function getCoverUrlAttr($val)
    {
        if (!empty($val) && (0 === strpos($val, 'http'))) {
            return $val;
        }
        return get_cover_url($val, 'artist');
    }
    
    /** 自动写入url */
    protected function getUrlAttr($val, $data)
    {
        return Url::build('home/Artist/read', ['id' => $data['id']]);
    }
    
    /** 获取封面 */
    protected function getSongUrlAttr($val, $data)
    {
        return Url::build('home/Artist/songs', ['id' => $data['id']]);
    }
    
    /** 获取封面 */
    protected function getAlbumUrlAttr($val, $data)
    {
        return Url::build('home/Artist/albums', ['id' => $data['id']]);
    }
    
    protected function getTypeUrlAttr($val)
    {
        if (isset($data['type_id'])) {
            $val = $data['type_id'] > 0? (new ArtistType())->getUrl($data['type_id']) : '';
        }
        return $val;
    }
	
	protected function getAlbumCountAttr($val, $data)
    {
       return Album::where('artist_id',  $data['id'])->count();
    }
	
	protected function getSongCountAttr($val, $data)
    {
       return Songs::where('artist_id',  $data['id'])->count();
    }

    /**
     * [getTypes description]
     * @param  integer $limit
     * @param  string  $field
     * @return mixed
     */
    public function getTypes($limit = 99, $field = "id,name")
    {
        $list = Db::name('artist_type')
            ->field($field)
            ->limit($limit)
            ->cache('artist_type_lists')
            ->select();

        return $list;
    }

    /**
     * 获取专辑列表
     * @param  array  $param  条件
     * @return array
     */
    public function getList($param = [])
    {
        $map['status'] = isset($param['status']) ? intval($param['status']) : 1;

        if (isset($param['pos'])) {
            $pos = intval($param['pos']);
            if ($pos) {
                $map[] = ['exp', "position & {$pos} = {$pos}"];
            } elseif ($param['pos'] == "*" || $param['pos'] == "all") {
                $map['position'] = ["neq", 0];
            }
        }

        if (isset($param['type'])) {
            $map['type_id'] = strpos($param['type'], ',') ? ['in', text_filter($param['type'])] : intval($param['type']);
        }

        if (isset($param['tag'])) {
            $map['id'] = ['in', (new Tags)->getSongIds(text_filter($param['tag']))];
        }
        return parseTagsList($this, $param, $map);
    }
    
    public function getFavList($param =[])
    {
        $limit = isset($param['limit']) ? intval($param['limit']) : 20;
        if (isset($param['page'])) {
            $page = request()->param('page', 1);
            $limit = (($page-1)*$limit) . ',' . $limit;
        }
        
        $where = [];
        if (isset($param['uid'])) {
            $where ['uid']  = $param['uid'];
        }
        
        $sids = db('artist_fav')->where($where)->limit($limit);
        
        if (isset($param['cache'])) {
            $sids = $sids->cache(intval($param['cache']))->column('artist_id');
        } else {
            $sids = $sids->column('artist_id');
        }
        if (!$sids) {
            return null;
        }
        $map['id'] = ['in',  $sids];
        return parseTagsList($this, $param, $map);
    }
    
}
