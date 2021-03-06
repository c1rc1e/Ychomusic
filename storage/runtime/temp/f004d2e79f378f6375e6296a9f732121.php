<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:50:"D:\PHPTutorial\WWW/app/admin\view\email\index.html";i:1501178062;s:50:"D:\PHPTutorial\WWW\app\admin\view\public\base.html";i:1540553179;s:53:"D:\PHPTutorial\WWW\app\admin\view\public\sidebar.html";i:1497743216;s:50:"D:\PHPTutorial\WWW\app\admin\view\public\tool.html";i:1500709188;}*/ ?>
<?php if(!request()->isAjax()): ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="JYmusic开源音乐程序" />
    <meta name="author" content="JYmusic开源音乐程序" />
    <title>Ycho music后台管理 | Ycho music 音乐网</title>

    <link rel="shortcut icon" href="/favicon.ico"> 
    <link type="text/css" href="/public/static/libs/fontawesome/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="/public/static/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="/public/admin/css/app.min.css" rel="stylesheet" />
    <link type="text/css" href="/public/admin/css/pages.css" rel="stylesheet" />
    <link type="text/css" href="/public/admin/css/responsive.css" rel="stylesheet" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/public/static/libs/html5shiv.js"></script>
    <script src="/public/static/libs/respond.min.js"></script>
    <script type="text/javascript" src="/public/static/libs/jquery/jquery-1.10.2.min.js"></script>
    <![endif]-->
    <script src="/public/static/libs/modernizr.min.js"></script>
    <script type="text/javascript">
        var JYconf = {
            assetPath: '/public/admin/',
            url: '<?php echo url("index"); ?>',
            url_html_suffix: '<?php echo config("url_html_suffix"); ?>',
            pathinfo_depr: '<?php echo config("pathinfo_depr"); ?>',
            var_pathinfo: '<?php echo config("var_pathinfo"); ?>'
        }
    </script>
    <!--[if gte IE 9]><!-->
    <script type="text/javascript" src="/public/static/libs/jquery/jquery-2.0.3.min.js"></script>
    <!--<![endif]-->
</head>

<body class="fixed-left">
    <!--页面开始-->
    <div id="wrapper">
        <!-- 页面顶部 -->
        <div class="topbar">
            <!-- Logo -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="#" class="logo">
                        <img src="/public/admin/images/jy-icon.png" alt="Ycho music">
                        <span>Ycho music</span>
                    </a>
                </div>
            </div>

            <!-- 手机端按钮 -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left">
                            <button class="button-menu-mobile open-left">
                                <i class="fa fa-reorder"></i>
                            </button>
                            <span class="clearfix"></span>
                        </div>

                        <ul class="nav navbar-nav hidden-xs top-navbar-nav">
                            <?php if(is_array($menu_list['main']) || $menu_list['main'] instanceof \think\Collection || $menu_list['main'] instanceof \think\Paginator): if( count($menu_list['main'])==0 ) : echo "" ;else: foreach($menu_list['main'] as $key=>$vo): ?>
                            <li <?php if(isset($vo['class'])): ?>class="<?php echo $vo['class']; ?>" <?php endif; ?>>
                                <a href="<?php echo url($vo['url']); ?>" title="<?php echo $vo['title']; ?>">
                                    <i class="icon-<?php echo $vo['icon']; ?> position-left"></i> <?php echo $vo['title']; ?>
                                </a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            <li> </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="hidden-xs">
                                <a href="#" class="right-bar-toggle waves-effect waves-light">
                                    <i class="fa fa-gear"></i>
                                </a>
                            </li>
                            <li class="hidden-xs">
                                <a href="#" id="btn-fullscreen" class="waves-effect waves-light">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </li>
                            <li class="hidden-xs">
                                <a href="/" target="_blank" class="waves-effect waves-light">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="/public/admin/images/jy-icon.png" alt="JYmusic" class="img-circle"> </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="open-form-modal" href="<?php echo url('user/profile'); ?>">
                                            <i class="fa fa-asterisk m-r-5"></i> 修改资料
                                        </a>
                                    </li>
                                    <li><a href="javascript:;" id="logout-action">
                                        <i class="fa fa-power-off m-r-5"></i> 退出登录</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- /页面顶部 -->

        <!-- 左侧边栏-->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                 
<!--- Divider -->
<div id="sidebar-menu">
    <ul class="nav nav-main" id="slider-nav-main" data-ride="collapse">
        <?php if(!(empty($_extra_menu) || (($_extra_menu instanceof \think\Collection || $_extra_menu instanceof \think\Paginator ) && $_extra_menu->isEmpty()))): ?>
        
        <?php echo extra_menu($_extra_menu, $menu_list); endif; if(is_array($menu_list['child']) || $menu_list['child'] instanceof \think\Collection || $menu_list['child'] instanceof \think\Paginator): if( count($menu_list['child'])==0 ) : echo "" ;else: foreach($menu_list['child'] as $key=>$sub_menu): if(!(empty($sub_menu) || (($sub_menu instanceof \think\Collection || $sub_menu instanceof \think\Paginator ) && $sub_menu->isEmpty()))): ?>
        <li class="sub-nav">
            <?php if(!(empty($key) || (($key instanceof \think\Collection || $key instanceof \think\Paginator ) && $key->isEmpty()))): ?>
            <a href="#"  class="waves-effect">
                <i class="fa <?php if(empty($sub_menu[0]['icon']) || (($sub_menu[0]['icon'] instanceof \think\Collection || $sub_menu[0]['icon'] instanceof \think\Paginator ) && $sub_menu[0]['icon']->isEmpty())): ?> fa-list-ul <?php else: ?>fa-<?php echo $sub_menu[0]['icon']; endif; ?>"></i>
                <span class="font-bold"><?php echo $key; ?></span>
            </a>
            <?php endif; ?>
            <ul class="list-unstyled" style="display: block">
                <?php if(is_array($sub_menu) || $sub_menu instanceof \think\Collection || $sub_menu instanceof \think\Paginator): if( count($sub_menu)==0 ) : echo "" ;else: foreach($sub_menu as $key=>$menu): ?>
                <li>
                    <a href="<?php echo url($menu['url']); ?>"  class="auto">
                        <i class="fa fa-angle-right"></i>
                        <span><?php echo $menu['title']; ?></span>
                    </a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </li>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>

<!--<div class="row">
    <div class="sidebar-plan col-xs-10 col-xs-offset-1">
        磁盘使用率
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            </div>
        </div>
        <span class="space">42 GB / 100 GB</span>
    </div>
    </div> -->
    


 
            </div>
        </div>
        <!-- /左侧边栏-->

        <!-- 内容-->
        <div class="content-page">

            <div class="content">
                <div class="container">
                    
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">邮件配置</h3>
    </div>
    <div class="panel-body">

        <form class="form-horizontal form-fixed form-submit" id="mail-form" action="<?php echo url('update'); ?>">

            <div class="form-group">
                <label class="col-sm-2 control-label">邮件发送方式</label>
                <div class="col-sm-2">
                    <select id="form_email_send_type" class="form-control" name="send_type">
                        <option value="smtp" <?php if($config['send_type'] != 'mail'): ?>selected="selected"<?php endif; ?>>远程smtp</option>
                        <option value="mail" <?php if($config['send_type'] == 'mail'): ?>selected="selected"<?php endif; ?>>本地mail</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">SMTP地址</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($config['host']) && ($config['host'] !== '')?$config['host']:'smtp.admin.com'); ?>" name="host">
                    <span class="help-block">发送邮箱的smtp地址，如: smtp.qq.com</span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">是否启用SSL连接</label>
                <div class="col-sm-6">
                    <label class="radio-inline i-radios">
                        <input type="radio" name="ssl" value="1" <?php if($config['ssl'] == 1): ?>checked <?php endif; ?>>是
                    </label>
                    <label class="radio-inline i-radios">
                        <input type="radio" name="ssl" value="0" <?php if($config['ssl']== 0): ?>checked <?php endif; ?>>否
                    </label>
                    <span class="help-block">本地邮件服务器，需要php开启支持ssl</span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">端口</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" style="width:80px" value="<?php echo (isset($config['port']) && ($config['port'] !== '')?$config['port']:'25'); ?>" name="port">
                    <p class="help-block">smtp的端口默认为25。具体请参看各STMP服务商的设置说明 （如果使用Gmail或QQ邮箱，请将端口设为465）</p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">服务器用户名</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($config['account']) && ($config['account'] !== '')?$config['account']:'admin@admin.com'); ?>" name="account">
                    <p class="help-block">邮箱地址请输入完整地址email@email.com格式</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">服务器密码</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control"  value="<?php echo (isset($config['password']) && ($config['password'] !== '')?$config['password']:'admin'); ?>" name="password">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">发送者名称</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($config['sender_name']) && ($config['sender_name'] !== '')?$config['sender_name']:'JYmusic音乐程序'); ?>" name="sender_name">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">发送者邮箱</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($config['sender_email']) && ($config['sender_email'] !== '')?$config['sender_email']:'admin@admin.com'); ?>" name="sender_email">
                    <p class="help-block">邮件中显示的发送者邮箱</p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">测试邮邮箱</label>
                <div class="col-sm-5">
                    <div class="input-group m-t-10">
                        <input type="email" id="example-email" class="form-control" placeholder="填写测试邮箱地址">
                        <span class="input-group-btn">
                            <a id="send-test-email" href="javascript:;" class="btn waves-effect waves-light btn-primary">点击测试发送</a>
                        </span>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <div class="col-md-offset-2 col-lg-6 text-left">
                    <button onclick="" type="button"
                            class="btn btn-default btn-return">
                        <i class=" icon-arrow-left16 position-right"></i>返回上页
                    </button>
                    <button type="submit" class="btn btn-primary" type="submit">
                        确认保存<i class="icon-arrow-right16 position-right"></i>
                    </button>
                </div>
            </div>

        </form>

    </div>
</div>

                </div>
            </div>

            <footer class="clearfix page-footer">
                <div class="row footer">
                    <div class="col-md-6 text-left">
                        Copyright © 2018 <a href="http://jyuu.cn" target="_blank">Ycho music</a> All rights reserved.
                    </div>
                    <div class="col-md-6 text-right">
                        Design and Developed by <a href="http://jyuu.cn" target="_blank">Ycho music</a>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /内容-->
        <!-- Right Sidebar -->
        <div class="side-bar right-bar nicescroll">
            <h4 class="text-center">常用操作</h4>
            <div class="contact-list nicescroll">
                <ul class="list-group contacts-list">
                    <li class="list-group-item">
                        <a class="ajax-get no-refresh"  href="<?php echo url('index/clear?type=page'); ?>">
                            <span class="name">清除数据缓存<small>[前台数据]</small></span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>

                    <li class="list-group-item">
                        <a class="ajax-get no-refresh"  href="<?php echo url('index/clear?type=run'); ?>">
                            <span class="name">清除编译缓存<small>[模板缓存]</small></span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>

                    <li class="list-group-item">
                        <a class="ajax-get no-refresh" href="<?php echo url('index/clear?type=all'); ?>">
                            <span class="name">清除全部缓存<small class="text-warning">[慎用！！]</small></span>
                            <i class="fa fa-circle away"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>

                    <li class="list-group-item">
                        <a href="<?php echo url('songs/create'); ?>">
                            <span class="name">添加歌曲</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>

                    <li class="list-group-item">
                        <a href="<?php echo url('addons/index'); ?>">
                            <span class="name">应用中心</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>

                    <li class="list-group-item">
                        <a target="_blank" href="http://bbs.jyuu.cn/">
                            <span class="name">帮助中心</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>

                </ul>
            </div>
        </div>
        <!-- /Right-bar -->

    </div>
    <!-- /主体内容 -->
    <!-- 工具块 -->
    <!-- 清除缓存 -->
<div class="modal fade" id="clear-cache-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">清除缓存</h4>
            </div>
            <div class="modal-body" data-url="<?php echo url('index/clearCache'); ?>">
                <button type="button" data-clear-type="sys" style="margin-bottom: 5px" class="btn btn-white btn-option1 btn-clear-cache">清除系统缓存</button>
                <button type="button" data-clear-type="cdn" style="margin-bottom: 5px" class="btn btn-white btn-option1 btn-clear-cache">清除CDN缓存</button>
                <button type="button" data-clear-type="all" class="btn btn-white btn-option1 btn-clear-cache">清除全部缓存</button>
            </div>
        </div>
    </div>
</div>
<!-- 清除缓存 -->
<!--顶部提示信息-->
<div id="alerttop" class=""></div>
<div id="custom-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="custom-modal-content"></div> 
    </div>
</div>

    <!-- /工具块 -->
    <script type="text/javascript">
        var resizefunc = [];
    </script>
    <script type="text/javascript" src="/public/static/libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/public/static/libs/layer/layer.js"></script>
    <script type="text/javascript" src="/public/admin/js/common.js"></script>
    <script type="text/javascript" src="/public/admin/js/app.js"></script>
    <script type="text/javascript" src="/public/admin/js/page.js"></script>
    
<script type="application/javascript">
    var sendUrl = "<?php echo url('test'); ?>";

    $('#send-test-email').click(function () {
        var testMail = $('#example-email').val();
        if (!$.trim(testMail)) {
            $.Notify.topMsg('请填写测试邮件发送地址');
            return ;
        }
        var query = $('#mail-form').serialize() + '&test_email=' + testMail;

        $.Notify.loading('正在发送测试邮件...');
        $.post(sendUrl, query, function (res) {
            $.Notify.close();
            if (res.code) {
                $.Notify.topMsg('测试邮件发送成功', 'success');
            } else {
                $.Notify.topMsg('测试邮件发送失败' + res.msg);
            }

        });
    })
</script>

</body>

</html>
<?php else: ?> 
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">邮件配置</h3>
    </div>
    <div class="panel-body">

        <form class="form-horizontal form-fixed form-submit" id="mail-form" action="<?php echo url('update'); ?>">

            <div class="form-group">
                <label class="col-sm-2 control-label">邮件发送方式</label>
                <div class="col-sm-2">
                    <select id="form_email_send_type" class="form-control" name="send_type">
                        <option value="smtp" <?php if($config['send_type'] != 'mail'): ?>selected="selected"<?php endif; ?>>远程smtp</option>
                        <option value="mail" <?php if($config['send_type'] == 'mail'): ?>selected="selected"<?php endif; ?>>本地mail</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">SMTP地址</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($config['host']) && ($config['host'] !== '')?$config['host']:'smtp.admin.com'); ?>" name="host">
                    <span class="help-block">发送邮箱的smtp地址，如: smtp.qq.com</span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">是否启用SSL连接</label>
                <div class="col-sm-6">
                    <label class="radio-inline i-radios">
                        <input type="radio" name="ssl" value="1" <?php if($config['ssl'] == 1): ?>checked <?php endif; ?>>是
                    </label>
                    <label class="radio-inline i-radios">
                        <input type="radio" name="ssl" value="0" <?php if($config['ssl']== 0): ?>checked <?php endif; ?>>否
                    </label>
                    <span class="help-block">本地邮件服务器，需要php开启支持ssl</span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">端口</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" style="width:80px" value="<?php echo (isset($config['port']) && ($config['port'] !== '')?$config['port']:'25'); ?>" name="port">
                    <p class="help-block">smtp的端口默认为25。具体请参看各STMP服务商的设置说明 （如果使用Gmail或QQ邮箱，请将端口设为465）</p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">服务器用户名</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($config['account']) && ($config['account'] !== '')?$config['account']:'admin@admin.com'); ?>" name="account">
                    <p class="help-block">邮箱地址请输入完整地址email@email.com格式</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">服务器密码</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control"  value="<?php echo (isset($config['password']) && ($config['password'] !== '')?$config['password']:'admin'); ?>" name="password">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">发送者名称</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($config['sender_name']) && ($config['sender_name'] !== '')?$config['sender_name']:'JYmusic音乐程序'); ?>" name="sender_name">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">发送者邮箱</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?php echo (isset($config['sender_email']) && ($config['sender_email'] !== '')?$config['sender_email']:'admin@admin.com'); ?>" name="sender_email">
                    <p class="help-block">邮件中显示的发送者邮箱</p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">测试邮邮箱</label>
                <div class="col-sm-5">
                    <div class="input-group m-t-10">
                        <input type="email" id="example-email" class="form-control" placeholder="填写测试邮箱地址">
                        <span class="input-group-btn">
                            <a id="send-test-email" href="javascript:;" class="btn waves-effect waves-light btn-primary">点击测试发送</a>
                        </span>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <div class="col-md-offset-2 col-lg-6 text-left">
                    <button onclick="" type="button"
                            class="btn btn-default btn-return">
                        <i class=" icon-arrow-left16 position-right"></i>返回上页
                    </button>
                    <button type="submit" class="btn btn-primary" type="submit">
                        确认保存<i class="icon-arrow-right16 position-right"></i>
                    </button>
                </div>
            </div>

        </form>

    </div>
</div>
 <?php endif; ?>