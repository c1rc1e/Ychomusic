<?php
/**
 * JYmusic音乐管理系统
 *
 * @version     2.0
 * @author      战神~~巴蒂 <jyuucn@163.com>
 * @license     http://jyuu.cn [未经授权严禁私自出售，否者承担法律责任]
 * @copyright   2014 - 2017 JYmusic
 */

namespace app\common\model;

use think\Model;
use think\Url;

class Site extends Model
{
    protected $updateTime = false;

    protected $append = ['url'];

    /** 追加url */
    protected function getUrlAttr($val, $data)
    {
        $name = !empty($data['name']) ? $data['name'] : $data['id'];
        return Url::build('article/Site/read', ['type' => $data['appname'], 'name' => $name]);
    }

    /**
     * 列表
     * @return  Boolean
     */
    public function getList($param = [])
    {
        $map['status']  = 1;
        $map['appname'] = isset($param['type']) ? $param['type'] : 'about';
        return parseTagsList($this, $param, $map);
    }
}
