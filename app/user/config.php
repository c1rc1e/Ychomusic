<?php

$view = include ROOT_PATH . 'config' . DS . 'view.php';
$viewThem = $view[THEM_TYPE . '_them'];

$rootPath = get_document_root();
$themPath = $rootPath . '/resources/' . THEM_TYPE .'/'. $viewThem['them_name'];

return [
    /*视图配置信息*/
    'template'  => [
        'view_path'    => VIEW_PATH . $viewThem['user_view'] . DS,
        'view_depr'    => '_',
        // 模板后缀
        'view_suffix'  => 'html',
        // 预先加载的标签库
        'taglib_pre_load' => 'app\common\taglib\JY',
    ],

    'view_replace_str'  =>  [
        '__TMPL__'  => $themPath,
        '__PUBLIC__'=> $rootPath . '/public',
        '__STATIC__'=> $rootPath . '/public/static',
        '__LIBS__'  => $rootPath . '/public/static/libs',
        '__ASSETS__'=> $themPath . '/' . $viewThem['assets_path'],
        '__JS__'    => $themPath . '/' . $viewThem['assets_path'] .'/js',
        '__CSS__'   => $themPath . '/' . $viewThem['assets_path'] .'/css',
        '__IMG__'   => $themPath . '/' . $viewThem['assets_path'] .'/images',
    ],

    //分页配置
    'paginate' => [
        'type'      => '\app\services\Paginate',
        'var_page'  => 'page',
        'path'      => '/',
        'list_rows' => 20,
    ],
];
