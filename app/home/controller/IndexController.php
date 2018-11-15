<?php
/**
 * JYmusic音乐管理系统 PHP version 5.4+
 *
 * @version     2.0
 * @author      战神~~巴蒂 <jyuucn@163.com>
 * @license     http://jyuu.cn/license [未经授权严禁私自出售，否者承担法律责任]
 * @copyright   2014 - 2017 JYmusic
 */

namespace app\home\controller;

use Goutte\Client;
use GuzzleHttp\Client as Guzzle;
use think\Request;
use app\services\Utils;

class IndexController extends HomeController
{
    /**
     * 首页展示
     * @return \think\Response
     */
    public function index()
    {
        return $this->fetch('index');
    }
    
    public function demo()
    {
        $url = 'http://dl.stream.qqmusic.qq.com/C200002dA3uK1AjHrt.m4a?vkey=CB411BCC8CD28C3DBA10A6BD26B6AE5C3E91CBDAC231A3AA9D7162FBEB9D26E1E5DF1B0684CAF55514F9F41719694A84873CEBCFA509EB1F&amp;guid=243643382&amp;uid=0&amp;fromtag=30';
        
		halt(Utils::base64UrlSafeEncode($url));
		
		//preg_match('/(*?)\=(*?)/', $str, $string);
    }
    
    public function miss(Request $request)
    {
        $path = $request->path();
        if (empty($path)) {
            return $this->index();
        }

        $tpl     = rtrim($request->path(), '/');
        $suffix  = config('template.view_suffix') ?: 'html';
        $tplPath = config('template.view_path') . str_replace('/', config('template.view_depr'), $tpl) . '.' . $suffix;

        if (is_file($tplPath)) {
            return $this->fetch($tplPath);
        }
        abort(404, lang(404));
    }
}
