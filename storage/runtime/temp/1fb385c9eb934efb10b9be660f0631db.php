<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:50:"D:\PHPTutorial\WWW/app/admin\view\index\index.html";i:1540553282;s:50:"D:\PHPTutorial\WWW\app\admin\view\public\base.html";i:1540553179;s:53:"D:\PHPTutorial\WWW\app\admin\view\public\sidebar.html";i:1497743216;s:50:"D:\PHPTutorial\WWW\app\admin\view\public\tool.html";i:1500709188;}*/ ?>
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
                    
<style type="text/css">
	.side-menu {
		display: none;
	}
	.content-page {
	    margin-left: 0;
	}
	.footer {
		left: 0;
	}
</style>
<div class="container-default">
    <div class="row">
		<div class="col-sm-6 col-md-6 col-lg-3">
			<div class="widget-bg-color-icon card-box">
				<div class="bg-icon bg-icon-info pull-left">
					<i class="fa fa-music text-info"></i>
				</div>
				<div class="text-right">
					<?php 
						$songsCount = db('songs')->where('status',1)->count();
					 ?>
					<h3 class="text-dark"><b class="counter"><?php echo $songsCount; ?></b></h3>
					<p class="text-muted">歌曲总数</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<div class="col-sm-6 col-md-6 col-lg-3">
			<div class="widget-bg-color-icon card-box">
				<div class="bg-icon bg-icon-pink pull-left">
					<i class="fa fa-bullseye text-pink"></i>
				</div>
				<div class="text-right">
					<?php 
						$albumCount = db('album')->where('status',1)->count();
					 ?>
					<h3 class="text-dark"><b class="counter"><?php echo $albumCount; ?></b></h3>
					<p class="text-muted">专辑总数</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<div class="col-sm-6 col-md-6 col-lg-3">
			<div class="widget-bg-color-icon card-box">
				<div class="bg-icon bg-icon-purple pull-left">
					<i class="fa fa-user text-purple"></i>
				</div>
				<div class="text-right">
					<?php 
						$userCount = db('member')->where('status', 1)->count();
					 ?>
					<h3 class="text-dark"><b class="counter"><?php echo $userCount; ?></b></h3>
					<p class="text-muted">用户总数</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<div class="col-sm-6 col-md-6 col-lg-3">
			<div class="widget-bg-color-icon card-box">
				<div class="bg-icon bg-icon-success pull-left">
					<i class="fa fa-microphone text-success"></i>
				</div>
				<div class="text-right">
					<?php 
						$artistCount = db('artist')->where('status',1)->count();
					 ?>
					<h3 class="text-dark"><b class="counter"><?php echo $artistCount; ?></b></h3>
					<p class="text-muted">歌手总数</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<div class="row">
        <!-- Transactions -->
        <div class="col-lg-6">
        	<div class="card-box">
				<h4 class="m-t-0 m-b-20 header-title"><b>系统信息</b></h4>

				<div class="nicescroll" tabindex="5001" style="height: 280px; overflow: hidden; outline: none;">
                    <ul class="list-unstyled transaction-list m-r-5">
                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">系统版本</span>
                            <span class="pull-right text-danger">
                            	Ycho music
                            </span>
                            <span class="pull-right text-muted">
                            	Ycho music-V1.0-
                            </span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text">
                            	操作系统
                            </span>
                            <span class="pull-right text-danger tran-price">
                            	<?php echo PHP_OS; ?>
                            </span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">运行环境</span>
                            <span class="pull-right text-muted">
                            	<?php echo $_SERVER['SERVER_SOFTWARE']; ?>
                            </span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">MYSQL版本</span>
                            <?php 
        						$system_info_mysql = db()->query("select version() as v;");
        					 ?>
                            <span class="pull-right text-success tran-price">
								<?php echo $system_info_mysql['0']['v']; ?>
                            </span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text">php上传限制</span>
                            <span class="pull-right text-info tran-price">
                            	<?php echo ini_get('upload_max_filesize'); ?>B
                            </span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text" style="width: 125px;">POST上传限制</span>
                            <span class="pull-right text-info tran-price">
                            	<?php echo ini_get('post_max_size'); ?>B
                            </span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text">脚本执行时间</span>
                            <span class="pull-right text-info tran-price">
                            	<?php echo ini_get('max_execution_time'); ?>秒
                            </span>
                            <span class="clearfix"></span>
                        </li>

                    </ul>
                </div>
			</div>
        </div>

        <!-- CHAT -->
        <div class="col-lg-6">
        	<div class="card-box">
				<h4 class="m-t-0 m-b-20 header-title"><b>产品团队</b></h4>

				<div class="nicescroll" tabindex="5001" style="height: 280px;overflow: hidden; outline: none;">
                    <ul class="list-unstyled transaction-list m-r-5">
                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">设计者</span>
                            <span class="pull-right">
                            	计应1603 袁聪
                            </span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text">
                            	系统名称
                            </span>
                            <span class="pull-right tran-price">
                            	Ycho音乐网
                            </span>
                            <span class="clearfix"></span>
                        </li>
                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">责任声明</span>
                            <span class="pull-right text-danger tran-price">
															该系统所有版权由湖南信息职业技术学院 计应1603班袁聪所有
                            </span>
                            <span class="clearfix"></span>
                        </li>

                    </ul>
                </div>
			</div>
        </div> <!-- end col-->

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
    
<script type="text/javascript">
    $(function () {

        $.post("<?php echo url('Update/check'); ?>",function(data){
            if (data && data.status === 1){
                var html = '<div style="padding: 10px">发现新更新可用,升级内容:<br>'+data.info+'<br><a  href="<?php echo url('/update/index'); ?>">点此更新</a></div>';
                $.Notify.open(html);
            }
        });
    })
</script>

</body>

</html>
<?php else: ?> 
<style type="text/css">
	.side-menu {
		display: none;
	}
	.content-page {
	    margin-left: 0;
	}
	.footer {
		left: 0;
	}
</style>
<div class="container-default">
    <div class="row">
		<div class="col-sm-6 col-md-6 col-lg-3">
			<div class="widget-bg-color-icon card-box">
				<div class="bg-icon bg-icon-info pull-left">
					<i class="fa fa-music text-info"></i>
				</div>
				<div class="text-right">
					<?php 
						$songsCount = db('songs')->where('status',1)->count();
					 ?>
					<h3 class="text-dark"><b class="counter"><?php echo $songsCount; ?></b></h3>
					<p class="text-muted">歌曲总数</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<div class="col-sm-6 col-md-6 col-lg-3">
			<div class="widget-bg-color-icon card-box">
				<div class="bg-icon bg-icon-pink pull-left">
					<i class="fa fa-bullseye text-pink"></i>
				</div>
				<div class="text-right">
					<?php 
						$albumCount = db('album')->where('status',1)->count();
					 ?>
					<h3 class="text-dark"><b class="counter"><?php echo $albumCount; ?></b></h3>
					<p class="text-muted">专辑总数</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<div class="col-sm-6 col-md-6 col-lg-3">
			<div class="widget-bg-color-icon card-box">
				<div class="bg-icon bg-icon-purple pull-left">
					<i class="fa fa-user text-purple"></i>
				</div>
				<div class="text-right">
					<?php 
						$userCount = db('member')->where('status', 1)->count();
					 ?>
					<h3 class="text-dark"><b class="counter"><?php echo $userCount; ?></b></h3>
					<p class="text-muted">用户总数</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<div class="col-sm-6 col-md-6 col-lg-3">
			<div class="widget-bg-color-icon card-box">
				<div class="bg-icon bg-icon-success pull-left">
					<i class="fa fa-microphone text-success"></i>
				</div>
				<div class="text-right">
					<?php 
						$artistCount = db('artist')->where('status',1)->count();
					 ?>
					<h3 class="text-dark"><b class="counter"><?php echo $artistCount; ?></b></h3>
					<p class="text-muted">歌手总数</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<div class="row">
        <!-- Transactions -->
        <div class="col-lg-6">
        	<div class="card-box">
				<h4 class="m-t-0 m-b-20 header-title"><b>系统信息</b></h4>

				<div class="nicescroll" tabindex="5001" style="height: 280px; overflow: hidden; outline: none;">
                    <ul class="list-unstyled transaction-list m-r-5">
                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">系统版本</span>
                            <span class="pull-right text-danger">
                            	Ycho music
                            </span>
                            <span class="pull-right text-muted">
                            	Ycho music-V1.0-
                            </span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text">
                            	操作系统
                            </span>
                            <span class="pull-right text-danger tran-price">
                            	<?php echo PHP_OS; ?>
                            </span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">运行环境</span>
                            <span class="pull-right text-muted">
                            	<?php echo $_SERVER['SERVER_SOFTWARE']; ?>
                            </span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">MYSQL版本</span>
                            <?php 
        						$system_info_mysql = db()->query("select version() as v;");
        					 ?>
                            <span class="pull-right text-success tran-price">
								<?php echo $system_info_mysql['0']['v']; ?>
                            </span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text">php上传限制</span>
                            <span class="pull-right text-info tran-price">
                            	<?php echo ini_get('upload_max_filesize'); ?>B
                            </span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text" style="width: 125px;">POST上传限制</span>
                            <span class="pull-right text-info tran-price">
                            	<?php echo ini_get('post_max_size'); ?>B
                            </span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text">脚本执行时间</span>
                            <span class="pull-right text-info tran-price">
                            	<?php echo ini_get('max_execution_time'); ?>秒
                            </span>
                            <span class="clearfix"></span>
                        </li>

                    </ul>
                </div>
			</div>
        </div>

        <!-- CHAT -->
        <div class="col-lg-6">
        	<div class="card-box">
				<h4 class="m-t-0 m-b-20 header-title"><b>产品团队</b></h4>

				<div class="nicescroll" tabindex="5001" style="height: 280px;overflow: hidden; outline: none;">
                    <ul class="list-unstyled transaction-list m-r-5">
                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">设计者</span>
                            <span class="pull-right">
                            	计应1603 袁聪
                            </span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text">
                            	系统名称
                            </span>
                            <span class="pull-right tran-price">
                            	Ycho音乐网
                            </span>
                            <span class="clearfix"></span>
                        </li>
                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">责任声明</span>
                            <span class="pull-right text-danger tran-price">
															该系统所有版权由湖南信息职业技术学院 计应1603班袁聪所有
                            </span>
                            <span class="clearfix"></span>
                        </li>

                    </ul>
                </div>
			</div>
        </div> <!-- end col-->

    </div>
</div>
 <?php endif; ?>