<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:51:"D:\PHPTutorial\WWW/app/admin\view\album\create.html";i:1540618847;s:50:"D:\PHPTutorial\WWW\app\admin\view\public\base.html";i:1540553179;s:53:"D:\PHPTutorial\WWW\app\admin\view\public\sidebar.html";i:1497743216;s:50:"D:\PHPTutorial\WWW\app\admin\view\public\tool.html";i:1500709188;}*/ ?>
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
        <h3 class="panel-title"><?php echo isset($data['id'])?'编辑':'新增'; ?>专辑</h3>
    </div>
    <div class="panel-body">

        <form class="form-horizontal form-fixed form-submit" action="<?php echo isset($info['id'])? url('update') : url('save'); ?>">
            <div class="form-group">
                <label class="col-md-2 col-xs-12 text-right control-label">专辑名称</label>
                <div class="col-md-6 col-xs-12">
                    <input type="text" name="name" class="form-control" value="<?php echo (isset($info['name']) && ($info['name'] !== '')?$info['name']:''); ?>">
                    <span class="help-block">名称不能为空</span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">封面地址</label>
                <div class="col-md-6">
                    <div class="bootstrap-filestyle input-group">
                        <input type="hidden" id="cover-file-id" name="cover_id" value="<?php echo (isset($info['cover_id']) && ($info['cover_id'] !== '')?$info['cover_id']:''); ?>">
                        <input type="text" id="cover-file-path" name="cover_url" class="form-control" value="<?php echo (isset($info['cover_url']) && ($info['cover_url'] !== '')?$info['cover_url']:''); ?>" placeholder="可以填写外链地址">
                        <span class="input-group-btn">
                            <label class="btn btn-default fileinput-button">
                                <span class="icon-span-filestyle glyphicon glyphicon-folder-open"></span>
                                <span class="buttonText">选择文件</span>
                                <input id="upload-cover" type="file" name="files[]" multiple
                                data-file-type="image"
                                data-upload-type="cover"
                                data-target-id="#cover-file-id"
                                data-target-path="#cover-file-path">
                            </label>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">所属艺人</label>
                <div class="col-sm-2">
                    <div class="input-group">
                        <input type="hidden" name="artist_id" value="<?php echo (isset($info['artist_id']) && ($info['artist_id'] !== '')?$info['artist_id']:0); ?>" class="form-control">
                        <input type="text" value="<?php echo (isset($info['artist_name']) && ($info['artist_name'] !== '')?$info['artist_name']:''); ?>" name="artist_name" class="form-control" placeholder="选择艺人">
                        <span class="input-group-btn">
                        <button type="button" title="选择所属艺人" class="btn btn-primary open-find-modal" data-url="<?php echo url('artist/read'); ?>">
                            <i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
                <!-- <label class="col-sm-1 control-label">所属类型</label>
                <div class="col-sm-2">
                    <select name="type_id" class="form-control" >
                        <option selected='selected'>选择专辑类型</option>
                        <?php $_result=get_album_types();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$at): $mod = ($i % 2 );++$i;?>
                        <option <?php if(isset($info['type_id'])): if($info['type_id'] == $at['id']): ?> selected='selected'<?php endif; endif; ?> value="<?php echo $at['id']; ?>"><?php echo $at['name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div> -->
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">所属用户</label>
                <div class="col-sm-2">
                    <input type="text" name="add_uid" placeholder="填写会员ID" class="form-control"  value="<?php echo (isset($info['add_uid']) && ($info['add_uid'] !== '')?$info['add_uid']:''); ?>">
                </div>
                <label class="col-sm-1 control-label">点击量</label>
                <div class="col-sm-2">
                    <input type="text" name="hits" class="form-control"  value="<?php echo (isset($info['hits']) && ($info['hits'] !== '')?$info['hits']:''); ?>">
                </div>

                <label class="col-sm-1 control-label">收藏次数</label>
                <div class="col-sm-2">
                    <input type="text" name="favtimes" class="form-control"  value="<?php echo (isset($info['favtimes']) && ($info['favtimes'] !== '')?$info['favtimes']:''); ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">发布时间</label>
                <div class="col-sm-2">
                    <input type="text" name="pub_time" class="form-control"  value="<?php echo (isset($info['pub_time']) && ($info['pub_time'] !== '')?$info['pub_time']:''); ?>">
                    <span class="help-block">格式：2000-01-01</span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">唱片公司</label>
                <div class="col-sm-6">
                    <input type="text" name="company" class="form-control"  value="<?php echo (isset($info['company']) && ($info['company'] !== '')?$info['company']:''); ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label text-right col-lg-2">专辑推荐位</label>
                <div class="col-lg-8">
                    <?php if(isset($info)): $_5bd3fa6749392=config('album_position'); if(is_array($_5bd3fa6749392) || $_5bd3fa6749392 instanceof \think\Collection || $_5bd3fa6749392 instanceof \think\Paginator): if( count($_5bd3fa6749392)==0 ) : echo "" ;else: foreach($_5bd3fa6749392 as $k=>$vo): ?>
                    <label class="checkbox-inline i-checkboxs">
                        <input type="checkbox" name="position[]" <?php if($k & $info['position']): ?>checked="checked"<?php endif; ?> value="<?php echo $k; ?>"><?php echo $vo; ?>
                    </label>
                    <?php endforeach; endif; else: echo "" ;endif; else: $_5bd3fa6749392=config('album_position'); if(is_array($_5bd3fa6749392) || $_5bd3fa6749392 instanceof \think\Collection || $_5bd3fa6749392 instanceof \think\Paginator): if( count($_5bd3fa6749392)==0 ) : echo "" ;else: foreach($_5bd3fa6749392 as $k=>$vo): ?>
                    <label class="checkbox-inline i-checkboxs">
                        <input type="checkbox" name="position[]" value="<?php echo $k; ?>"><?php echo $vo; ?>
                    </label>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    <span class="help-block">可选择多个推荐位</span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">专辑简介</label>
                <div class="col-md-8">
                    <textarea id="album-introduce" rows="12" class="form-control" name="introduce"><?php echo (isset($info['introduce']) && ($info['introduce'] !== '')?$info['introduce']:''); ?></textarea>
                </div>
            </div>

            <input type="hidden" name="id" value="<?php echo (isset($info['id']) && ($info['id'] !== '')?$info['id']:''); ?>">
            <div class="form-group">
                <div class="col-md-offset-2 col-lg-6 text-left">
                    <button onclick="" type="button"
                            class="btn btn-default btn-return">
                        <i class=" icon-arrow-left16 position-right"></i>返回上页
                    </button>
                    <button type="submit" class="btn btn-primary">
                        确认提交<i class="icon-arrow-right16 position-right"></i>
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
    
<?php echo hook('file', ['wiget'=>'Uplaod', 'is_admin' => true, 'element' => ['#upload-cover']]); ?>
<?php echo hook('articleEdit', ['wiget'=>'wangEditor','is_admin' => true,'element' => 'album-introduce', 'content' =>isset($info) ? $info['introduce'] : '']); ?>

</body>

</html>
<?php else: ?> 
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo isset($data['id'])?'编辑':'新增'; ?>专辑</h3>
    </div>
    <div class="panel-body">

        <form class="form-horizontal form-fixed form-submit" action="<?php echo isset($info['id'])? url('update') : url('save'); ?>">
            <div class="form-group">
                <label class="col-md-2 col-xs-12 text-right control-label">专辑名称</label>
                <div class="col-md-6 col-xs-12">
                    <input type="text" name="name" class="form-control" value="<?php echo (isset($info['name']) && ($info['name'] !== '')?$info['name']:''); ?>">
                    <span class="help-block">名称不能为空</span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">封面地址</label>
                <div class="col-md-6">
                    <div class="bootstrap-filestyle input-group">
                        <input type="hidden" id="cover-file-id" name="cover_id" value="<?php echo (isset($info['cover_id']) && ($info['cover_id'] !== '')?$info['cover_id']:''); ?>">
                        <input type="text" id="cover-file-path" name="cover_url" class="form-control" value="<?php echo (isset($info['cover_url']) && ($info['cover_url'] !== '')?$info['cover_url']:''); ?>" placeholder="可以填写外链地址">
                        <span class="input-group-btn">
                            <label class="btn btn-default fileinput-button">
                                <span class="icon-span-filestyle glyphicon glyphicon-folder-open"></span>
                                <span class="buttonText">选择文件</span>
                                <input id="upload-cover" type="file" name="files[]" multiple
                                data-file-type="image"
                                data-upload-type="cover"
                                data-target-id="#cover-file-id"
                                data-target-path="#cover-file-path">
                            </label>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">所属艺人</label>
                <div class="col-sm-2">
                    <div class="input-group">
                        <input type="hidden" name="artist_id" value="<?php echo (isset($info['artist_id']) && ($info['artist_id'] !== '')?$info['artist_id']:0); ?>" class="form-control">
                        <input type="text" value="<?php echo (isset($info['artist_name']) && ($info['artist_name'] !== '')?$info['artist_name']:''); ?>" name="artist_name" class="form-control" placeholder="选择艺人">
                        <span class="input-group-btn">
                        <button type="button" title="选择所属艺人" class="btn btn-primary open-find-modal" data-url="<?php echo url('artist/read'); ?>">
                            <i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
                <!-- <label class="col-sm-1 control-label">所属类型</label>
                <div class="col-sm-2">
                    <select name="type_id" class="form-control" >
                        <option selected='selected'>选择专辑类型</option>
                        <?php $_result=get_album_types();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$at): $mod = ($i % 2 );++$i;?>
                        <option <?php if(isset($info['type_id'])): if($info['type_id'] == $at['id']): ?> selected='selected'<?php endif; endif; ?> value="<?php echo $at['id']; ?>"><?php echo $at['name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div> -->
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">所属用户</label>
                <div class="col-sm-2">
                    <input type="text" name="add_uid" placeholder="填写会员ID" class="form-control"  value="<?php echo (isset($info['add_uid']) && ($info['add_uid'] !== '')?$info['add_uid']:''); ?>">
                </div>
                <label class="col-sm-1 control-label">点击量</label>
                <div class="col-sm-2">
                    <input type="text" name="hits" class="form-control"  value="<?php echo (isset($info['hits']) && ($info['hits'] !== '')?$info['hits']:''); ?>">
                </div>

                <label class="col-sm-1 control-label">收藏次数</label>
                <div class="col-sm-2">
                    <input type="text" name="favtimes" class="form-control"  value="<?php echo (isset($info['favtimes']) && ($info['favtimes'] !== '')?$info['favtimes']:''); ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">发布时间</label>
                <div class="col-sm-2">
                    <input type="text" name="pub_time" class="form-control"  value="<?php echo (isset($info['pub_time']) && ($info['pub_time'] !== '')?$info['pub_time']:''); ?>">
                    <span class="help-block">格式：2000-01-01</span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">唱片公司</label>
                <div class="col-sm-6">
                    <input type="text" name="company" class="form-control"  value="<?php echo (isset($info['company']) && ($info['company'] !== '')?$info['company']:''); ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label text-right col-lg-2">专辑推荐位</label>
                <div class="col-lg-8">
                    <?php if(isset($info)): $_5bd3fa6749392=config('album_position'); if(is_array($_5bd3fa6749392) || $_5bd3fa6749392 instanceof \think\Collection || $_5bd3fa6749392 instanceof \think\Paginator): if( count($_5bd3fa6749392)==0 ) : echo "" ;else: foreach($_5bd3fa6749392 as $k=>$vo): ?>
                    <label class="checkbox-inline i-checkboxs">
                        <input type="checkbox" name="position[]" <?php if($k & $info['position']): ?>checked="checked"<?php endif; ?> value="<?php echo $k; ?>"><?php echo $vo; ?>
                    </label>
                    <?php endforeach; endif; else: echo "" ;endif; else: $_5bd3fa6749392=config('album_position'); if(is_array($_5bd3fa6749392) || $_5bd3fa6749392 instanceof \think\Collection || $_5bd3fa6749392 instanceof \think\Paginator): if( count($_5bd3fa6749392)==0 ) : echo "" ;else: foreach($_5bd3fa6749392 as $k=>$vo): ?>
                    <label class="checkbox-inline i-checkboxs">
                        <input type="checkbox" name="position[]" value="<?php echo $k; ?>"><?php echo $vo; ?>
                    </label>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    <span class="help-block">可选择多个推荐位</span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">专辑简介</label>
                <div class="col-md-8">
                    <textarea id="album-introduce" rows="12" class="form-control" name="introduce"><?php echo (isset($info['introduce']) && ($info['introduce'] !== '')?$info['introduce']:''); ?></textarea>
                </div>
            </div>

            <input type="hidden" name="id" value="<?php echo (isset($info['id']) && ($info['id'] !== '')?$info['id']:''); ?>">
            <div class="form-group">
                <div class="col-md-offset-2 col-lg-6 text-left">
                    <button onclick="" type="button"
                            class="btn btn-default btn-return">
                        <i class=" icon-arrow-left16 position-right"></i>返回上页
                    </button>
                    <button type="submit" class="btn btn-primary">
                        确认提交<i class="icon-arrow-right16 position-right"></i>
                    </button>
                </div>
            </div>

        </form>

    </div>
</div>
 <?php endif; ?>