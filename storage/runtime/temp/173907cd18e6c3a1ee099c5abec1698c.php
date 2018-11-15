<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:50:"D:\PHPTutorial\WWW/app/admin\view\songs\index.html";i:1511192700;s:50:"D:\PHPTutorial\WWW\app\admin\view\public\base.html";i:1540553179;s:53:"D:\PHPTutorial\WWW\app\admin\view\public\sidebar.html";i:1497743216;s:50:"D:\PHPTutorial\WWW\app\admin\view\public\tool.html";i:1500709188;}*/ ?>
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
                    
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-4">
        <h4 class="page-title">歌曲管理</h4>
    </div>
    <div class="col-sm-4 pull-right text-right text-left-xs m-t-md">
        <form class="searchform" action="<?php echo url('index'); ?>" id="search-form">
            <div class="input-group">
                <input type="text" class="form-control searchbox" id="search-word" name="keys" placeholder="搜索..." >
                <span class="input-group-btn">
                    <button class="btn btn-default btn-icon" id="search-submit" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <!-- Left sidebar -->
    <div class="col-lg-2 col-md-3">
        <div class="p-10">
            <div class="list-group mail-list m-t-20">
                <a class="list-group-item b-0 <?php if($status == 'success'): ?>active<?php endif; ?>" href="<?php echo url('?status=success'); ?>">
                    <i class="fa fa-circle text-success m-r-10"></i>正常
                </a>
                <a class="list-group-item b-0 <?php if($status == 'audit'): ?>active<?php endif; ?>" href="<?php echo url('?status=audit'); ?>">
                    <i class="fa fa-circle text-warning m-r-10"></i>待审
                </a>
                <a class="list-group-item b-0 <?php if($status == 'fail'): ?>active<?php endif; ?>" href="<?php echo url('?status=fail'); ?>">
                    <i class="fa fa-circle m-r-10"></i>禁用
                </a>
                <a class="list-group-item b-0 <?php if($status == 'trash'): ?>active<?php endif; ?>" href="<?php echo url('?status=trash'); ?>">
                    <i class="fa fa-circle text-danger m-r-10"></i>回收站
                </a>
                <a class="list-group-item b-0 <?php if($status == 'all'): ?>active<?php endif; ?>" href="<?php echo url('?status=all'); ?>">
                    <i class="fa fa-circle text-info m-r-10"></i>全部
                </a>
            </div>

            <h3 class="panel-title m-t-20">音乐分类</h3>
            <div class="list-group b-0 mail-list">
                <?php $_result=get_genre_tree();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a class="list-group-item b-0 <?php if($genre == $vo['id']): ?>active<?php endif; ?>" href="<?php echo url('/songs/index/genre/'.$vo['id']); ?>">
                    <span class="fa fa-list text-warning m-r-10">
                    </span>
                    <?php echo $vo['name']; ?>
                </a>
                <?php if(isset($vo['_child'])): if(is_array($vo['_child']) || $vo['_child'] instanceof \think\Collection || $vo['_child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cl): $mod = ($i % 2 );++$i;?>
                    <a class="list-group-item b-0 m-l-10 <?php if($genre == $cl['id']): ?>active<?php endif; ?>" href="<?php echo url('/songs/index/genre/'.$cl['id']); ?>">
                        <span class="fa fa-angle-right m-r-10">
                        </span>
                        <?php echo $cl['name']; ?>
                    </a>
                    <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
    <!-- End Left sidebar -->
    <!-- Right Sidebar -->
    <div class="col-lg-10 col-md-9">
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-toolbar m-t-20" role="toolbar">
                    <div class="btn-group">
                        <button class="btn btn-primary check-btn" data-target=".check-ids" type="button">
                            全选/反选
                        </button>
                    </div>
                    <div class="btn-group">
                        <button aria-expanded="false" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
                            按推荐位<span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <?php $_5bd2fa4ec414c=config('music_position'); if(is_array($_5bd2fa4ec414c) || $_5bd2fa4ec414c instanceof \think\Collection || $_5bd2fa4ec414c instanceof \think\Paginator): if( count($_5bd2fa4ec414c)==0 ) : echo "" ;else: foreach($_5bd2fa4ec414c as $pk=>$pos): ?>
                            <li <?php if($curpos == $pk): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo url('?pos='.$pk); ?>"><?php echo $pos; ?></a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button aria-expanded="false" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
                            按榜单<span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <?php $_5bd2fa4ec414c=get_ranks(); if(is_array($_5bd2fa4ec414c) || $_5bd2fa4ec414c instanceof \think\Collection || $_5bd2fa4ec414c instanceof \think\Paginator): if( count($_5bd2fa4ec414c)==0 ) : echo "" ;else: foreach($_5bd2fa4ec414c as $rk=>$ranks): ?>
                            <li <?php if($rank == $ranks['id']): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo url('?rank='.$ranks['id']); ?>"><?php echo $ranks['name']; ?></a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button aria-expanded="false" class="btn btn-primary waves-effect waves-light dropdown-toggle" data-toggle="dropdown" type="button">
                            批量
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo url('bulk?type=changes'); ?>" data-target=".check-ids" id="btn-batch-changes" >修改</a>
                            </li>
                            <li>
                              <a href="<?php echo url('bulk?type=replace'); ?>" class="open-form-modal">替换</a>
                            </li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button href="<?php echo url('bulk?type=recommend'); ?>" data-target=".check-ids" id="btn-batch-rec" class="btn btn-default" type="button">
                            推荐到
                        </button>
                    </div>

                    <div class="btn-group">
                        <a class="btn btn-success" href="<?php echo url('create'); ?>">
                            新增歌曲
                        </a>
                    </div>

                    <div class="btn-group pull-right">
                        <button class="btn btn-success success-batch" data-tip="" data-target=".check-ids"  data-url="<?php echo url('setStatus?status=1'); ?>" type="button">
                            启用
                        </button>
                        <?php if(\think\Request::instance()->param('status') == 'trash'): ?>
                        <button class="btn btn-danger clear-batch"  data-target=".check-ids" data-url="<?php echo url('clear'); ?>" type="button">
                            清空回收站
                        </button>
                        <?php else: ?>
                        <button class="btn btn-warning disable-empty" data-target=".check-ids"  data-url="<?php echo url('setStatus?status=0'); ?>" type="button">
                            禁用
                        </button>
                        <button class="btn btn-danger delete-batch" data-tip="" data-target=".check-ids"  data-url="<?php echo url('setStatus?status=-1'); ?>" type="button">
                            删除
                        </button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End row -->
        <div class="panel panel-default m-t-20">
            <div class="panel-body p-0">
                <div class="table-responsive">

                    <table class="table table-hover mails m-0 table table-actions-bar">
                        <thead>
                            <tr>
                                <th width="80">
                                    <div class="checkbox checkbox-primary checkbox-single m-r-5">
                                        
                                    </div>
                                    <div class="btn-group dropdown">
                                        排序
                                        <button type="button" class="btn btn-white btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="<?php echo url('?field=id&order=desc'); ?>">ID倒序</a></li>
                                            <li><a href="<?php echo url('?field=id&order=asc'); ?>">ID正序</a></li>
                                            <li><a href="<?php echo url('?field=create_time&order=desc'); ?>">创建日期倒序</a></li>
                                            <li><a href="<?php echo url('?field=create_time&order=asc'); ?>">创建日期正序</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th>歌曲名称</th>
                                <th>所属歌手</th>
                                <th>所属专辑</th>
                                <th width="80">所属分类</th>
                                <th width="80">创建日期</th>
                                <th width="120">操作</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if(is_array($_list) || $_list instanceof \think\Collection || $_list instanceof \think\Paginator): $i = 0; $__LIST__ = $_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-primary m-r-5">
                                        <input id="checkbox<?php echo $vo['id']; ?>" class="check-ids" name="id[]" type="checkbox" value="<?php echo $vo['id']; ?>">
                                        <label for="checkbox<?php echo $vo['id']; ?>"></label>
                                    </div>     
                                    <i class="fa fa-circle m-l-5 text-<?php echo $statusStyle[$vo['status']]; ?>">
                                    </i>
                                </td>
                                
                                <td><?php echo $vo['name']; ?></td><td>
                                    <a href="<?php echo url('?artist='.$vo['artist_id']); ?>"><?php echo $vo['artist_name']; ?></a>
                                </td>
                                <td><a href="<?php echo url('?album='.$vo['album_id']); ?>"><?php echo $vo['album_name']; ?></a></td>
                                <td>
                                    <a href="<?php echo url('?genre='.$vo['genre_id']); ?>">
                                        <?php $genreInfo = get_simple_info($vo['genre_id'], 'genre'); ?>
                                        <?php echo $genreInfo['name']; ?>
                                    </a>
                                </td>
                                <td><?php echo time_format($vo['create_time'],"Y-m"); ?></td>
                                <td>
                                    <?php if($vo['status'] == '2'): ?>
                                    <a class="table-action-btn open-form-modal" title="审核[<?php echo $vo['name']; ?>]" href="<?php echo url('audit?id='.$vo['id']); ?>">
                                        <i class="fa fa-send text-warning"></i>
                                    </a>
                                    <?php endif; ?>
                                    <a href="<?php echo url('edit?id='.$vo['id']); ?>" title="编辑" class="table-action-btn">
                                        <i class="fa fa-pencil text-info"></i>
                                    </a>
                                    <?php if($vo['status'] == 1): ?>
                                    <a class="table-action-btn ajax-get" title="禁用[<?php echo $vo['name']; ?>]" href="<?php echo url('setStatus?id='.$vo['id'].'&status=0'); ?>">
                                        <i class="fa fa-ban text-warning"></i>
                                    </a>
                                    <?php elseif($vo['status'] == 0): ?>
                                    <a class="table-action-btn ajax-get" title="启用[<?php echo $vo['name']; ?>]" href="<?php echo url('setStatus?id='.$vo['id'].'&status=1'); ?>">
                                        <i class="fa fa-check-circle-o text-success"></i>
                                    </a>
                                    <?php endif; if($vo['status'] != '-1'): ?>
                                    <a href="<?php echo url('setStatus?status=-1&id='.$vo['id']); ?>" title="<?php echo $vo['name']; ?>" class="table-action-btn ajax-del">
                                        <i class="fa fa-times text-danger"></i>
                                    </a>                            
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
            <!-- panel body -->
        </div>
        <!-- panel -->
        <div class="row">
            <div class="col-sm-3">
                <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">     共计<?php echo $_total; ?>条数据
                </div>
            </div>
            <div class="col-sm-9">
                <div class="dataTables_paginate paging_simple_numbers text-right" id="datatable_paginate">
                    <?php echo $_page; ?>
                </div>
            </div>
        </div>
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
    
<div id="batch-replace-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">批量替设置推荐位</h4> 
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label text-right col-lg-2">推荐位</label>
                    <div class="col-lg-10">
                        <?php if(isset($info)): $_5bd2fa4ec414c=config('music_position'); if(is_array($_5bd2fa4ec414c) || $_5bd2fa4ec414c instanceof \think\Collection || $_5bd2fa4ec414c instanceof \think\Paginator): if( count($_5bd2fa4ec414c)==0 ) : echo "" ;else: foreach($_5bd2fa4ec414c as $k=>$vo): ?>
                        <label class="checkbox-inline i-checkboxs">
                            <input type="checkbox" name="position" <?php if($k & $info['position']): ?>checked="checked"<?php endif; ?> value="<?php echo $k; ?>"><?php echo $vo; ?>
                        </label>
                        <?php endforeach; endif; else: echo "" ;endif; else: $_5bd2fa4ec414c=config('music_position'); if(is_array($_5bd2fa4ec414c) || $_5bd2fa4ec414c instanceof \think\Collection || $_5bd2fa4ec414c instanceof \think\Paginator): if( count($_5bd2fa4ec414c)==0 ) : echo "" ;else: foreach($_5bd2fa4ec414c as $k=>$vo): ?>
                        <label class="checkbox-inline i-checkboxs">
                            <input type="checkbox" name="position" value="<?php echo $k; ?>"><?php echo $vo; ?>
                        </label>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?> 
                        <span class="help-block">可选择多个推荐位</span>
                    </div>
                </div>              
            </div> 
        </div> 
    </div>
</div>
<script type="text/javascript">
$(function ($) {
    $(document).on('click', '#btn-batch-replace', function(e) {
        $('#batch-replace-modal').modal('toggle');
    });

    $(document).on('click', '#btn-batch-changes,#btn-batch-rec', function(e) {
        e.preventDefault();
        var $this = $(this);
        var inputs  = $($this.data('target') + ':checked');     
        if (inputs.size() < 1) {
            $.Notify.msg('请至少选中一个');
            return false;
        };

        var ids = [];
        inputs.each(function (e) {
            ids.push($(this).val());
        });

        $.Action.formModal($this, function (dom, form) {
           form.find("input[name=ids]").val(ids.join(','));
        });
    });
});
</script>

</body>

</html>
<?php else: ?> 
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-4">
        <h4 class="page-title">歌曲管理</h4>
    </div>
    <div class="col-sm-4 pull-right text-right text-left-xs m-t-md">
        <form class="searchform" action="<?php echo url('index'); ?>" id="search-form">
            <div class="input-group">
                <input type="text" class="form-control searchbox" id="search-word" name="keys" placeholder="搜索..." >
                <span class="input-group-btn">
                    <button class="btn btn-default btn-icon" id="search-submit" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <!-- Left sidebar -->
    <div class="col-lg-2 col-md-3">
        <div class="p-10">
            <div class="list-group mail-list m-t-20">
                <a class="list-group-item b-0 <?php if($status == 'success'): ?>active<?php endif; ?>" href="<?php echo url('?status=success'); ?>">
                    <i class="fa fa-circle text-success m-r-10"></i>正常
                </a>
                <a class="list-group-item b-0 <?php if($status == 'audit'): ?>active<?php endif; ?>" href="<?php echo url('?status=audit'); ?>">
                    <i class="fa fa-circle text-warning m-r-10"></i>待审
                </a>
                <a class="list-group-item b-0 <?php if($status == 'fail'): ?>active<?php endif; ?>" href="<?php echo url('?status=fail'); ?>">
                    <i class="fa fa-circle m-r-10"></i>禁用
                </a>
                <a class="list-group-item b-0 <?php if($status == 'trash'): ?>active<?php endif; ?>" href="<?php echo url('?status=trash'); ?>">
                    <i class="fa fa-circle text-danger m-r-10"></i>回收站
                </a>
                <a class="list-group-item b-0 <?php if($status == 'all'): ?>active<?php endif; ?>" href="<?php echo url('?status=all'); ?>">
                    <i class="fa fa-circle text-info m-r-10"></i>全部
                </a>
            </div>

            <h3 class="panel-title m-t-20">音乐分类</h3>
            <div class="list-group b-0 mail-list">
                <?php $_result=get_genre_tree();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a class="list-group-item b-0 <?php if($genre == $vo['id']): ?>active<?php endif; ?>" href="<?php echo url('/songs/index/genre/'.$vo['id']); ?>">
                    <span class="fa fa-list text-warning m-r-10">
                    </span>
                    <?php echo $vo['name']; ?>
                </a>
                <?php if(isset($vo['_child'])): if(is_array($vo['_child']) || $vo['_child'] instanceof \think\Collection || $vo['_child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cl): $mod = ($i % 2 );++$i;?>
                    <a class="list-group-item b-0 m-l-10 <?php if($genre == $cl['id']): ?>active<?php endif; ?>" href="<?php echo url('/songs/index/genre/'.$cl['id']); ?>">
                        <span class="fa fa-angle-right m-r-10">
                        </span>
                        <?php echo $cl['name']; ?>
                    </a>
                    <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
    <!-- End Left sidebar -->
    <!-- Right Sidebar -->
    <div class="col-lg-10 col-md-9">
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-toolbar m-t-20" role="toolbar">
                    <div class="btn-group">
                        <button class="btn btn-primary check-btn" data-target=".check-ids" type="button">
                            全选/反选
                        </button>
                    </div>
                    <div class="btn-group">
                        <button aria-expanded="false" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
                            按推荐位<span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <?php $_5bd2fa4ec414c=config('music_position'); if(is_array($_5bd2fa4ec414c) || $_5bd2fa4ec414c instanceof \think\Collection || $_5bd2fa4ec414c instanceof \think\Paginator): if( count($_5bd2fa4ec414c)==0 ) : echo "" ;else: foreach($_5bd2fa4ec414c as $pk=>$pos): ?>
                            <li <?php if($curpos == $pk): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo url('?pos='.$pk); ?>"><?php echo $pos; ?></a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button aria-expanded="false" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
                            按榜单<span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <?php $_5bd2fa4ec414c=get_ranks(); if(is_array($_5bd2fa4ec414c) || $_5bd2fa4ec414c instanceof \think\Collection || $_5bd2fa4ec414c instanceof \think\Paginator): if( count($_5bd2fa4ec414c)==0 ) : echo "" ;else: foreach($_5bd2fa4ec414c as $rk=>$ranks): ?>
                            <li <?php if($rank == $ranks['id']): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo url('?rank='.$ranks['id']); ?>"><?php echo $ranks['name']; ?></a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button aria-expanded="false" class="btn btn-primary waves-effect waves-light dropdown-toggle" data-toggle="dropdown" type="button">
                            批量
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo url('bulk?type=changes'); ?>" data-target=".check-ids" id="btn-batch-changes" >修改</a>
                            </li>
                            <li>
                              <a href="<?php echo url('bulk?type=replace'); ?>" class="open-form-modal">替换</a>
                            </li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button href="<?php echo url('bulk?type=recommend'); ?>" data-target=".check-ids" id="btn-batch-rec" class="btn btn-default" type="button">
                            推荐到
                        </button>
                    </div>

                    <div class="btn-group">
                        <a class="btn btn-success" href="<?php echo url('create'); ?>">
                            新增歌曲
                        </a>
                    </div>

                    <div class="btn-group pull-right">
                        <button class="btn btn-success success-batch" data-tip="" data-target=".check-ids"  data-url="<?php echo url('setStatus?status=1'); ?>" type="button">
                            启用
                        </button>
                        <?php if(\think\Request::instance()->param('status') == 'trash'): ?>
                        <button class="btn btn-danger clear-batch"  data-target=".check-ids" data-url="<?php echo url('clear'); ?>" type="button">
                            清空回收站
                        </button>
                        <?php else: ?>
                        <button class="btn btn-warning disable-empty" data-target=".check-ids"  data-url="<?php echo url('setStatus?status=0'); ?>" type="button">
                            禁用
                        </button>
                        <button class="btn btn-danger delete-batch" data-tip="" data-target=".check-ids"  data-url="<?php echo url('setStatus?status=-1'); ?>" type="button">
                            删除
                        </button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End row -->
        <div class="panel panel-default m-t-20">
            <div class="panel-body p-0">
                <div class="table-responsive">

                    <table class="table table-hover mails m-0 table table-actions-bar">
                        <thead>
                            <tr>
                                <th width="80">
                                    <div class="checkbox checkbox-primary checkbox-single m-r-5">
                                        
                                    </div>
                                    <div class="btn-group dropdown">
                                        排序
                                        <button type="button" class="btn btn-white btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="<?php echo url('?field=id&order=desc'); ?>">ID倒序</a></li>
                                            <li><a href="<?php echo url('?field=id&order=asc'); ?>">ID正序</a></li>
                                            <li><a href="<?php echo url('?field=create_time&order=desc'); ?>">创建日期倒序</a></li>
                                            <li><a href="<?php echo url('?field=create_time&order=asc'); ?>">创建日期正序</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th>歌曲名称</th>
                                <th>所属歌手</th>
                                <th>所属专辑</th>
                                <th width="80">所属分类</th>
                                <th width="80">创建日期</th>
                                <th width="120">操作</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if(is_array($_list) || $_list instanceof \think\Collection || $_list instanceof \think\Paginator): $i = 0; $__LIST__ = $_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-primary m-r-5">
                                        <input id="checkbox<?php echo $vo['id']; ?>" class="check-ids" name="id[]" type="checkbox" value="<?php echo $vo['id']; ?>">
                                        <label for="checkbox<?php echo $vo['id']; ?>"></label>
                                    </div>     
                                    <i class="fa fa-circle m-l-5 text-<?php echo $statusStyle[$vo['status']]; ?>">
                                    </i>
                                </td>
                                
                                <td><?php echo $vo['name']; ?></td><td>
                                    <a href="<?php echo url('?artist='.$vo['artist_id']); ?>"><?php echo $vo['artist_name']; ?></a>
                                </td>
                                <td><a href="<?php echo url('?album='.$vo['album_id']); ?>"><?php echo $vo['album_name']; ?></a></td>
                                <td>
                                    <a href="<?php echo url('?genre='.$vo['genre_id']); ?>">
                                        <?php $genreInfo = get_simple_info($vo['genre_id'], 'genre'); ?>
                                        <?php echo $genreInfo['name']; ?>
                                    </a>
                                </td>
                                <td><?php echo time_format($vo['create_time'],"Y-m"); ?></td>
                                <td>
                                    <?php if($vo['status'] == '2'): ?>
                                    <a class="table-action-btn open-form-modal" title="审核[<?php echo $vo['name']; ?>]" href="<?php echo url('audit?id='.$vo['id']); ?>">
                                        <i class="fa fa-send text-warning"></i>
                                    </a>
                                    <?php endif; ?>
                                    <a href="<?php echo url('edit?id='.$vo['id']); ?>" title="编辑" class="table-action-btn">
                                        <i class="fa fa-pencil text-info"></i>
                                    </a>
                                    <?php if($vo['status'] == 1): ?>
                                    <a class="table-action-btn ajax-get" title="禁用[<?php echo $vo['name']; ?>]" href="<?php echo url('setStatus?id='.$vo['id'].'&status=0'); ?>">
                                        <i class="fa fa-ban text-warning"></i>
                                    </a>
                                    <?php elseif($vo['status'] == 0): ?>
                                    <a class="table-action-btn ajax-get" title="启用[<?php echo $vo['name']; ?>]" href="<?php echo url('setStatus?id='.$vo['id'].'&status=1'); ?>">
                                        <i class="fa fa-check-circle-o text-success"></i>
                                    </a>
                                    <?php endif; if($vo['status'] != '-1'): ?>
                                    <a href="<?php echo url('setStatus?status=-1&id='.$vo['id']); ?>" title="<?php echo $vo['name']; ?>" class="table-action-btn ajax-del">
                                        <i class="fa fa-times text-danger"></i>
                                    </a>                            
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
            <!-- panel body -->
        </div>
        <!-- panel -->
        <div class="row">
            <div class="col-sm-3">
                <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">     共计<?php echo $_total; ?>条数据
                </div>
            </div>
            <div class="col-sm-9">
                <div class="dataTables_paginate paging_simple_numbers text-right" id="datatable_paginate">
                    <?php echo $_page; ?>
                </div>
            </div>
        </div>
    </div>
</div>
 <?php endif; ?>