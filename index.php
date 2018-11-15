<?php

 

if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    die('require PHP > 5.4.0 !');
}

// 检测是否安装
if (!is_file(__DIR__ . '/config/database.php')) {
    header('Location: ./install.php');
    exit;
}

// [ 应用入口文件 ]
define('APP_PATH', __DIR__ . '/app/');

define('RUNTIME_PATH', __DIR__ . '/storage/runtime/');

// 加载框架基础文件
require __DIR__ . '/core/base.php';

//加载视图配置文件
$viewConf = require __DIR__ . '/config/view.php';

$detect = new Mobile_Detect;

if ($viewConf['use_wap_view'] && $detect->isMobile()) {
    define('THEM_TYPE', 'wap');
} else {
    define('THEM_TYPE', 'web');
}

define('VIEW_PATH', __DIR__ . DS . 'resources' . DS . THEM_TYPE . DS . $viewConf[THEM_TYPE . '_them']['them_name'] . DS);

$app = new think\App();

// 执行应用
$app::run()->send();
