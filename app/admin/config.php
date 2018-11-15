<?php
/**
 * JYmusic音乐管理系统 PHP version 5.4+
 *
 * @version     2.0
 * @author      战神~~巴蒂 <jyuucn@163.com>
 * @license     http://jyuu.cn/license [未经授权严禁私自出售，否者承担法律责任]
 * @copyright   2014 - 2017 JYmusic
 */

/*
 * admin 模块专属配置
 */
$rootPath = get_document_root();

return [
    // +----------------------------------------------------------------------
    // | 模板设置
    // +----------------------------------------------------------------------
    'template'  => [
        // 模板文件名分隔符
        'view_depr'    => DS,
        // 模板引擎普通标签开始标记
        'tpl_begin'    => '{',
        // 模板引擎普通标签结束标记
        'tpl_end'      => '}',
        // 标签库标签开始标记
        'taglib_begin' => '{',
        // 标签库标签结束标记
        'taglib_end'   => '}',
    ],

    'view_replace_str' => [
        '__LIBS__'  => $rootPath . '/public/static/libs',
        '__DIST__'  => $rootPath . '/public/admin/',
        '__ASSET__' => $rootPath . '/public/admin/',
        '__JS__'    => $rootPath . '/public/admin/js',
        '__CSS__'   => $rootPath . '/public/admin/css',
        '__IMG__'   => $rootPath . '/public/admin/images',
    ],

    'session' => [
        // SESSION 前缀
        'prefix'         => 'jy_admin',
        'auto_start'     => true,
    ],

    //异常页面的模板文件
    //超级管理员id
    'user_administrator' => 1,
    //开发者模式
    'develop_mode' => true,
    //通用状态吗
    'status_text' => [
        -1 => '删除',
        0 => '禁用',
        1 => '正常',
        2 => '待审核'
    ],
    //通用状态style类名定义 用于样式表
    'status_style' => [
        -1 => 'danger',
        0 => 'default',
        1 => 'success',
        2 => 'warning'
    ],
    //通用开关状态字段
    'switch_text' => [
        0 => '关闭',
        1 => '开启'
    ],
    //通用状态whether状态字段
    'whether_text' => [
        0 => '否',
        1 => '是'
    ],
    //通用状态是否style类名定义 用于样式表
    'whether_style' => [
        0 => 'danger',
        1 => 'success'
    ],

    //通用状态是否style类名定义 用于样式表
    'text_status' => [
        'all' => ['>',-2],
        'trash' => -1,
        'fail'=> 0,
        'success' => 1,
        'audit' => 2
    ],

    //分页配置
    'paginate'  => [
        'type'      => '\app\services\Paginate',
        'var_page'  => 'page',
        'path'      => '/',
        'list_rows' => 20,
    ],

    //'exception_tmpl'         => APP_PATH . 'admin' . DS . 'view'. DS .'public'. DS .'exception.html',
];
