<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:49:"D:\PHPTutorial\WWW/app/admin\view\tags\index.html";i:1511193149;s:50:"D:\PHPTutorial\WWW\app\admin\view\public\base.html";i:1540553179;s:53:"D:\PHPTutorial\WWW\app\admin\view\public\sidebar.html";i:1497743216;s:50:"D:\PHPTutorial\WWW\app\admin\view\public\tool.html";i:1500709188;}*/ ?>
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
        <h4 class="page-title">标签管理</h4>
    </div>
    <div class="col-sm-4 pull-right text-right text-left-xs m-t-md">
        <form class="searchform" action="<?php echo url(); ?>" id="search-form">
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
    <div class="col-lg-12">
        <div class="btn-toolbar m-t-20" role="toolbar">
            <div class="btn-group">
                <button class="btn btn-primary check-btn" data-target=".check-ids" type="button">
                    全选/反选
                </button>
            </div>

            <div class="btn-group">
                <button aria-expanded="false" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
                    按状态显示
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li class="<?php if($status == 'success'): ?>active<?php endif; ?>">
                        <a class="list-group-item b-0" href="<?php echo url('?status=success'); ?>">
                            <i class="fa fa-circle text-success m-r-10"></i>正常
                        </a>
                    </li>
                    <li class="<?php if($status == 'fail'): ?>active<?php endif; ?>">
                        <a class="list-group-item b-0" href="<?php echo url('?status=fail'); ?>">
                            <i class="fa fa-circle m-r-10"></i>禁用
                        </a>
                    </li>
                    <li class="<?php if($status == 'all'): ?>active<?php endif; ?>">
                        <a class="list-group-item b-0" href="<?php echo url('?status=all'); ?>">
                            <i class="fa fa-circle text-info m-r-10"></i>全部
                        </a>
                    </li>
                </ul>
            </div>

            <div class="btn-group">
                <button aria-expanded="false" class="btn btn-primary waves-effect waves-light dropdown-toggle" data-toggle="dropdown" type="button">
                    按分组显示
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li <?php if(empty($group) || (($group instanceof \think\Collection || $group instanceof \think\Paginator ) && $group->isEmpty())): ?>class="active"<?php endif; ?>>
                        <a href="<?php echo url('index'); ?>">全部</a>
                    </li>
                    <?php $_result=config('tag_group');if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $gk = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gg): $mod = ($gk % 2 );++$gk;?>
                    <li <?php if($group == $gk): ?>class="active"<?php endif; ?>>
                        <a href="<?php echo url('?group='.$gk); ?>"><?php echo $gg; ?></a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                    <li <?php if($group == 'other'): ?>class="active"<?php endif; ?>>
                        <a href="<?php echo url('?group=other'); ?>">其它</a>
                    </li>
                </ul>
            </div>


            <div class="btn-group">
                <a class="btn btn-success open-form-modal" href="<?php echo url('create'); ?>">新增标签</a>
            </div>
            
            <div class="btn-group pull-right">
                <button class="btn btn-warning disable-batch" data-target=".check-ids"  data-url="<?php echo url('setStatus?status=0'); ?>" type="button">
                    禁用
                </button>
                <button class="btn btn-success success-batch" data-tip="" data-target=".check-ids"  data-url="<?php echo url('setStatus?status=1'); ?>" type="button">
                    启用
                </button>
                <button class="btn btn-danger delete-batch" data-tip="" data-target=".check-ids"  data-url="<?php echo url('setStatus?status=-1'); ?>" type="button">
                    删除
                </button>
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
                            <div class="checkbox checkbox-primary checkbox-single m-r-5"></div>
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
                        <th>标签名称</th>
                        <th>标签别名</th>
                        <th>所属组</th>
                        <th>点击量</th>
                        <th>创建日期</th>
                        <th>更新日期</th>
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
                            <i class="fa fa-circle m-l-5 text-<?php echo $statusStyle[$vo['status']]; ?>"></i>
                        </td>                    
                        <td> <?php echo $vo['name']; ?></td>                
                        <td><a href="javascript:vod(0)"><?php echo $vo['alias']; ?></a></td>
                        <td>
                            <a href="javascript:vod(0)">
                            <?php echo isset($groupList[$vo['group']])?$groupList[$vo['group']]: ''; ?>
                            </a>
                        </td>
                        <td><a href="javascript:vod(0)"><?php echo $vo['hits']; ?></a></td>                   
                        <td><?php echo time_format($vo['create_time'],"Y-m-d"); ?></td>
                        <td><?php echo time_format($vo['update_time'],"Y-m-d"); ?></td>
                        <td>
                            <a href="<?php echo url('edit?id='.$vo['id']); ?>" class="table-action-btn open-form-modal">
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
                            <?php endif; ?>
                            <a href="<?php echo url('delete?id='.$vo['id']); ?>" title="<?php echo $vo['name']; ?>" class="table-action-btn ajax-del">
                                <i class="fa fa-times text-danger"></i>
                            </a>
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
$(function ($) {});
</script>

</body>

</html>
<?php else: ?> 
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-4">
        <h4 class="page-title">标签管理</h4>
    </div>
    <div class="col-sm-4 pull-right text-right text-left-xs m-t-md">
        <form class="searchform" action="<?php echo url(); ?>" id="search-form">
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
    <div class="col-lg-12">
        <div class="btn-toolbar m-t-20" role="toolbar">
            <div class="btn-group">
                <button class="btn btn-primary check-btn" data-target=".check-ids" type="button">
                    全选/反选
                </button>
            </div>

            <div class="btn-group">
                <button aria-expanded="false" class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
                    按状态显示
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li class="<?php if($status == 'success'): ?>active<?php endif; ?>">
                        <a class="list-group-item b-0" href="<?php echo url('?status=success'); ?>">
                            <i class="fa fa-circle text-success m-r-10"></i>正常
                        </a>
                    </li>
                    <li class="<?php if($status == 'fail'): ?>active<?php endif; ?>">
                        <a class="list-group-item b-0" href="<?php echo url('?status=fail'); ?>">
                            <i class="fa fa-circle m-r-10"></i>禁用
                        </a>
                    </li>
                    <li class="<?php if($status == 'all'): ?>active<?php endif; ?>">
                        <a class="list-group-item b-0" href="<?php echo url('?status=all'); ?>">
                            <i class="fa fa-circle text-info m-r-10"></i>全部
                        </a>
                    </li>
                </ul>
            </div>

            <div class="btn-group">
                <button aria-expanded="false" class="btn btn-primary waves-effect waves-light dropdown-toggle" data-toggle="dropdown" type="button">
                    按分组显示
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li <?php if(empty($group) || (($group instanceof \think\Collection || $group instanceof \think\Paginator ) && $group->isEmpty())): ?>class="active"<?php endif; ?>>
                        <a href="<?php echo url('index'); ?>">全部</a>
                    </li>
                    <?php $_result=config('tag_group');if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $gk = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gg): $mod = ($gk % 2 );++$gk;?>
                    <li <?php if($group == $gk): ?>class="active"<?php endif; ?>>
                        <a href="<?php echo url('?group='.$gk); ?>"><?php echo $gg; ?></a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                    <li <?php if($group == 'other'): ?>class="active"<?php endif; ?>>
                        <a href="<?php echo url('?group=other'); ?>">其它</a>
                    </li>
                </ul>
            </div>


            <div class="btn-group">
                <a class="btn btn-success open-form-modal" href="<?php echo url('create'); ?>">新增标签</a>
            </div>
            
            <div class="btn-group pull-right">
                <button class="btn btn-warning disable-batch" data-target=".check-ids"  data-url="<?php echo url('setStatus?status=0'); ?>" type="button">
                    禁用
                </button>
                <button class="btn btn-success success-batch" data-tip="" data-target=".check-ids"  data-url="<?php echo url('setStatus?status=1'); ?>" type="button">
                    启用
                </button>
                <button class="btn btn-danger delete-batch" data-tip="" data-target=".check-ids"  data-url="<?php echo url('setStatus?status=-1'); ?>" type="button">
                    删除
                </button>
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
                            <div class="checkbox checkbox-primary checkbox-single m-r-5"></div>
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
                        <th>标签名称</th>
                        <th>标签别名</th>
                        <th>所属组</th>
                        <th>点击量</th>
                        <th>创建日期</th>
                        <th>更新日期</th>
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
                            <i class="fa fa-circle m-l-5 text-<?php echo $statusStyle[$vo['status']]; ?>"></i>
                        </td>                    
                        <td> <?php echo $vo['name']; ?></td>                
                        <td><a href="javascript:vod(0)"><?php echo $vo['alias']; ?></a></td>
                        <td>
                            <a href="javascript:vod(0)">
                            <?php echo isset($groupList[$vo['group']])?$groupList[$vo['group']]: ''; ?>
                            </a>
                        </td>
                        <td><a href="javascript:vod(0)"><?php echo $vo['hits']; ?></a></td>                   
                        <td><?php echo time_format($vo['create_time'],"Y-m-d"); ?></td>
                        <td><?php echo time_format($vo['update_time'],"Y-m-d"); ?></td>
                        <td>
                            <a href="<?php echo url('edit?id='.$vo['id']); ?>" class="table-action-btn open-form-modal">
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
                            <?php endif; ?>
                            <a href="<?php echo url('delete?id='.$vo['id']); ?>" title="<?php echo $vo['name']; ?>" class="table-action-btn ajax-del">
                                <i class="fa fa-times text-danger"></i>
                            </a>
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
 <?php endif; ?>