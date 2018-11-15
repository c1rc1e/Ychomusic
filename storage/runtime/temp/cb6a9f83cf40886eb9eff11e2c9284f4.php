<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:51:"D:\PHPTutorial\WWW/app/admin\view\songs\create.html";i:1503725683;s:50:"D:\PHPTutorial\WWW\app\admin\view\public\base.html";i:1540553179;s:53:"D:\PHPTutorial\WWW\app\admin\view\public\sidebar.html";i:1497743216;s:50:"D:\PHPTutorial\WWW\app\admin\view\public\tool.html";i:1500709188;}*/ ?>
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
<link type="text/css" href="/public/static/libs/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />

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
        <h2 class="panel-title"><b><?php echo isset($info['id'])?'编辑':'新增'; ?>歌曲</b></h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <form  class="form-horizontal clearfix form-submit" role="form"  action="<?php echo isset($info['id'])? url('update') : url('save'); ?>">
        		<div class="col-md-8">
        			<div class="row">
                        <div class="form-group">
                            <label class="col-md-2 control-label">歌曲名称</label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" value="<?php echo (isset($info['name']) && ($info['name'] !== '')?$info['name']:''); ?>">
                                <span class="help-block">名称不能为空</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">所属艺人</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="hidden" name="artist_id" value="<?php echo (isset($info['artist_id']) && ($info['artist_id'] !== '')?$info['artist_id']:0); ?>" class="form-control">
                                    <input type="text" value="<?php echo (isset($info['artist_name']) && ($info['artist_name'] !== '')?$info['artist_name']:''); ?>" name="artist_name" class="form-control" placeholder="选择艺人">
                                    <span class="input-group-btn">
                                    <button type="button" title="选择所属艺人" class="btn btn-primary open-find-modal" data-url="<?php echo url('artist/read'); ?>">
                                        <i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                            <label class="col-sm-2 control-label">所属专辑</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="hidden" name="album_id" value="<?php echo (isset($info['album_id']) && ($info['album_id'] !== '')?$info['album_id']:0); ?>" class="form-control">
                                    <input type="text" value="<?php echo (isset($info['album_name']) && ($info['album_name'] !== '')?$info['album_name']:''); ?>" name="album_name" class="form-control" placeholder="选择所属专辑">
                                    <span class="input-group-btn">
                                    <button type="button" title="选择所属专辑" class="btn btn-primary open-find-modal" data-url="<?php echo url('album/read'); ?>">
                                        <i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">所属分类</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="genre_id">
                                    <option value="0">--选择分类--</option>
                                    <?php $_result=get_genre_tree('', '', true);if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$genre): $mod = ($i % 2 );++$i;?>
                                    <option <?php if(isset($info['genre_id'])): if($info['genre_id'] == $genre['id']): ?> selected='selected'<?php endif; endif; ?> value="<?php echo $genre['id']; ?>"><?php echo $genre['title_show']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>

                            <label class="col-sm-2 control-label">所属用户</label>
                            <div class="col-sm-4">
                                <input type="hidden" name="up_uname" class="form-control"  value="<?php echo (isset($info['up_uname']) && ($info['up_uname'] !== '')?$info['up_uname']:''); ?>">
                                <input type="text" name="up_uid" class="form-control"  value="<?php echo (isset($info['up_uid']) && ($info['up_uid'] !== '')?$info['up_uid']:'1'); ?>"  placeholder="填写用户id">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">歌曲标签</label>
                            <div class="col-md-8">
                                <div class="input-group">

                                    <input type="text" name="tags" value="<?php echo (isset($info['tags']) && ($info['tags'] !== '')?$info['tags']:''); ?>"  placeholder="添加标签"/>

                                    <button type="button" title="选择所属标签" class="btn btn-primary open-find-modal ml-10" data-url="<?php echo url('tags/read'); ?>">
                                        <i class="fa fa-search"></i>
                                        搜索标签
                                    </button>

                                </div>
                                <span class="help-block">可以填写Enter键确认，不存在将会自动新增,最多6个</span>
                            </div>
                            <div class="col-md-2">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">所属服务器</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="select-server" name="extend[server_id]">
                                    <option value="0">选择服务器</option>
                                    <?php $_result=get_server();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ss): $mod = ($i % 2 );++$i;?>
                                    <option <?php if(isset($info['extend']['server_id'])): if($info['extend']['server_id'] == $ss['id']): ?> selected='selected'<?php endif; endif; ?> value="<?php echo $ss['id']; ?>"><?php echo $ss['name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>

        				<div class="form-group">
        					<label class="col-md-2 control-label">试听地址</label>
        					<div class="col-md-10">
        						<div class="bootstrap-filestyle input-group">
                                    <input type="hidden" id="listen-file-id" name="extend[listen_file_id]" value="<?php echo (isset($info['extend']['listen_file_id']) && ($info['extend']['listen_file_id'] !== '')?$info['extend']['listen_file_id']:''); ?>">
        							<input type="text" id="listen-file-path" name="extend[listen_url]" class="form-control" value="<?php echo (isset($info['extend']['listen_url']) && ($info['extend']['listen_url'] !== '')?$info['extend']['listen_url']:''); ?>" placeholder="可以填写外链地址">
        							<span class="input-group-btn">
        								<label class="btn btn-default fileinput-button">
        									<span class="icon-span-filestyle glyphicon glyphicon-folder-open"></span>
        									<span class="buttonText">选择文件</span>
                                            <input id="upload-listen" type="file" name="files[]" multiple
                                                data-file-type="audio"
                                                data-upload-type="listen"
                                                data-target-id="#listen-file-id"
                                                data-target-path="#listen-file-path">
                                        </label>
        							</span>
        						</div>
        					</div>
        				</div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">下载地址</label>
                            <div class="col-md-10">
                                <div class="bootstrap-filestyle input-group">
                                    <input type="hidden" id="down-file-id" name="extend[down_file_id]" value="<?php echo (isset($info['extend']['down_file_id']) && ($info['extend']['down_file_id'] !== '')?$info['extend']['down_file_id']:''); ?>">
                                    <input type="text" id="down-file-path" name="extend[down_url]" class="form-control" value="<?php echo (isset($info['extend']['down_url']) && ($info['extend']['down_url'] !== '')?$info['extend']['down_url']:''); ?>" placeholder="可以填写外链地址">
                                    <span class="input-group-btn">
                                        <label class="btn btn-default fileinput-button">
                                            <span class="glyphicon glyphicon-folder-open"></span>
                                            <span class="buttonText">选择文件</span>
                                            <input id="upload-down" type="file" name="files[]" multiple
                                            data-file-type="audio"
                                            data-upload-type="down"
                                            data-target-id="#down-file-id"
                                            data-target-path="#down-file-path">
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">封面地址</label>
                            <div class="col-md-10">
                                <div class="bootstrap-filestyle input-group">
                                    <input type="hidden" id="cover-file-id" name="cover_id" value="<?php echo (isset($info['cover_id']) && ($info['cover_id'] !== '')?$info['cover_id']:''); ?>">
                                    <input type="text" id="cover-file-path" class="form-control" name="cover_url" value="<?php echo (isset($info['cover_url']) && ($info['cover_url'] !== '')?$info['cover_url']:''); ?>" placeholder="可以填写外链地址">
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
                            <label class="col-sm-2 control-label">下载所需金币</label>
                            <div class="col-sm-3">
                                <input type="text" name="extend[down_rule][coin]" class="form-control"  value="<?php echo (isset($info['extend']['down_rule']['coin']) && ($info['extend']['down_rule']['coin'] !== '')?$info['extend']['down_rule']['coin']:'0'); ?>"  placeholder="">
                            </div>
                            <label class="col-sm-2 control-label">下载所需积分</label>
                            <div class="col-sm-3">
                                <input type="text" name="extend[down_rule][score]" class="form-control"  value="<?php echo (isset($info['extend']['down_rule']['score']) && ($info['extend']['down_rule']['score'] !== '')?$info['extend']['down_rule']['score']:'0'); ?>"  placeholder="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label text-right col-lg-2">下载所需用户组</label>
                            <div class="col-lg-10">
                                <?php if(isset($info['extend']['down_rule']['group'])): ?>
                                <label class="checkbox-inline i-checkboxs">
                                    <input type="checkbox" <?php if(isset($info['extend']['down_rule']['group']) && in_array(0, $info['extend']['down_rule']['group'])): ?>checked=""<?php endif; ?> name="extend[down_rule][group][]" value="0">允许游客
                                </label>
                                <?php $_5bd326aeb1df6=get_user_groups(); if(is_array($_5bd326aeb1df6) || $_5bd326aeb1df6 instanceof \think\Collection || $_5bd326aeb1df6 instanceof \think\Paginator): if( count($_5bd326aeb1df6)==0 ) : echo "" ;else: foreach($_5bd326aeb1df6 as $k=>$vo): ?>
                                <label class="checkbox-inline i-checkboxs">
                                    <input type="checkbox" <?php if(isset($info['extend']['down_rule']['group']) && in_array($vo['id'], $info['extend']['down_rule']['group'])): ?>checked=""<?php endif; ?> name="extend[down_rule][group][]" value="<?php echo $vo['id']; ?>">允许<?php echo $vo['name']; ?>
                                </label>
                                <?php endforeach; endif; else: echo "" ;endif; else: ?>
                                <label class="checkbox-inline i-checkboxs">
                                    <input type="checkbox" name="extend[down_rule][group][]" value="0">允许游客
                                </label>
                                <?php $_5bd326aeb1df6=get_user_groups(); if(is_array($_5bd326aeb1df6) || $_5bd326aeb1df6 instanceof \think\Collection || $_5bd326aeb1df6 instanceof \think\Paginator): if( count($_5bd326aeb1df6)==0 ) : echo "" ;else: foreach($_5bd326aeb1df6 as $k=>$vo): ?>
                                <label class="checkbox-inline i-checkboxs">
                                    <input type="checkbox" checked="" name="extend[down_rule][group][]" value="<?php echo $vo['id']; ?>">允许<?php echo $vo['name']; ?>
                                </label>
                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                <P class="help-block">只要设置金币或者积分游客下载勾选无效</P>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label text-right col-lg-2">歌曲推荐位</label>
                            <div class="col-lg-10">
                                <?php if(isset($info)): $_5bd326aeb1df6=config('music_position'); if(is_array($_5bd326aeb1df6) || $_5bd326aeb1df6 instanceof \think\Collection || $_5bd326aeb1df6 instanceof \think\Paginator): if( count($_5bd326aeb1df6)==0 ) : echo "" ;else: foreach($_5bd326aeb1df6 as $k=>$vo): ?>
                                <label class="checkbox-inline i-checkboxs">
                                    <input type="checkbox" name="position[]" <?php if($k & $info['position']): ?>checked="checked"<?php endif; ?> value="<?php echo $k; ?>"><?php echo $vo; ?>
                                </label>
                                <?php endforeach; endif; else: echo "" ;endif; else: $_5bd326aeb1df6=config('music_position'); if(is_array($_5bd326aeb1df6) || $_5bd326aeb1df6 instanceof \think\Collection || $_5bd326aeb1df6 instanceof \think\Paginator): if( count($_5bd326aeb1df6)==0 ) : echo "" ;else: foreach($_5bd326aeb1df6 as $k=>$vo): ?>
                                <label class="checkbox-inline i-checkboxs">
                                    <input type="checkbox" name="position[]" value="<?php echo $k; ?>"><?php echo $vo; ?>
                                </label>
                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                <span class="help-block">可选择多个推荐位</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">歌词</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="extend[lrc]" rows="5"><?php echo (isset($info['extend']['lrc']) && ($info['extend']['lrc'] !== '')?$info['extend']['lrc']:''); ?></textarea>
                                <span class="help-block">可填写歌词URL地址</span>
                            </div>
                        </div>

                        <!--div class="form-group">
                            <label class="col-md-2 control-label">歌曲简介</label>
                            <div class="col-md-10">
                                <textarea class="form-control" id="song-introduce" rows="5" name="extend[introduce]"><?php echo (isset($info['extend']['introduce']) && ($info['extend']['introduce'] !== '')?$info['extend']['introduce']:''); ?>
                                </textarea>
                            </div>
                        </div-->
                    </div>
                    <input type="hidden" name="id" value="<?php echo (isset($info['id']) && ($info['id'] !== '')?$info['id']:''); ?>">
                    <input type="hidden" name="status" value="<?php echo (isset($info['status']) && ($info['status'] !== '')?$info['status']:'1'); ?>">
                    <input type="hidden" name="extend[mid]" value="<?php echo (isset($info['id']) && ($info['id'] !== '')?$info['id']:''); ?>">
                    <div class="form-group">
                        <div class="col-md-offset-2 col-lg-6 text-left">
                            <button onclick="" type="button"
                                    class="btn btn-default btn-return">
                                <i class=" icon-arrow-left16 position-right"></i>返回上页
                            </button>
                            <button type="submit" class="btn btn-primary" type="submit">
                                确认提交<i class="icon-arrow-right16 position-right"></i>
                            </button>
                        </div>
                    </div>
        		</div>

        		<div class="col-md-4">
        			<div class="row">
                        <div class="form-group">
                            <label class="col-md-3 control-label">试听次数</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="listens" value="<?php echo (isset($info['listens']) && ($info['listens'] !== '')?$info['listens']:''); ?>">
                            </div>

                            <label class="col-md-3 control-label">下载次数</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="download" value="<?php echo (isset($info['download']) && ($info['download'] !== '')?$info['download']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">收藏次数</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="favtimes" value="<?php echo (isset($info['favtimes']) && ($info['favtimes'] !== '')?$info['favtimes']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">顶次数</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="digg" value="<?php echo (isset($info['favtimes']) && ($info['favtimes'] !== '')?$info['favtimes']:''); ?>">
                            </div>

                            <label class="col-md-3 control-label">踩次数</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="bury" value="<?php echo (isset($info['favtimes']) && ($info['favtimes'] !== '')?$info['favtimes']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">原唱</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="sing" value="<?php echo (isset($info['sing']) && ($info['sing'] !== '')?$info['sing']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">作词</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="lyrics" value="<?php echo (isset($info['lyrics']) && ($info['lyrics'] !== '')?$info['lyrics']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">作曲</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="composer" value="<?php echo (isset($info['composer']) && ($info['composer'] !== '')?$info['composer']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">编曲</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="midi" value="<?php echo (isset($info['midi']) && ($info['midi'] !== '')?$info['midi']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">网盘下载地址</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="extend[disk_url]" value="<?php echo (isset($info['extend']['disk_url']) && ($info['extend']['disk_url'] !== '')?$info['extend']['disk_url']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">网盘密码</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="extend[disk_pass]" value="<?php echo (isset($info['extend']['disk_pass']) && ($info['extend']['disk_pass'] !== '')?$info['extend']['disk_pass']:''); ?>">
                            </div>
                        </div>

                        <!--div class="form-group hidden">
                            <label class="col-md-3 control-label">文件大小</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="down-file-size" name="extend[file_size]" value="<?php echo (isset($info['extend']['file_size']) && ($info['extend']['file_size'] !== '')?$info['extend']['file_size']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group hidden">
                            <label class="col-md-3 control-label">文件bit</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="down-file-bit" name="extend[bitrate]" value="<?php echo (isset($info['extend']['bitrate']) && ($info['extend']['bitrate'] !== '')?$info['extend']['bitrate']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group hidden">
                            <label class="col-md-3 control-label">播放时长</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="down-play-time" name="extend[bitrate]" value="<?php echo (isset($info['extend']['play_time']) && ($info['extend']['play_time'] !== '')?$info['extend']['play_time']:''); ?>">
                            </div>
                        </div-->
                    </div>
                </div>
            </form>

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
    
<script type="text/javascript" src="/public/static/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("input[name='tags']").tagsinput({
        maxTags: 6,
        maxChars: 40
    });
});
</script>
<?php echo hook('file', ['wiget'=>'Uplaod', 'is_admin' => true, 'element' => ['#upload-listen','#upload-down', '#upload-cover']]); ?>

</body>

</html>
<?php else: ?> 
<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title"><b><?php echo isset($info['id'])?'编辑':'新增'; ?>歌曲</b></h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <form  class="form-horizontal clearfix form-submit" role="form"  action="<?php echo isset($info['id'])? url('update') : url('save'); ?>">
        		<div class="col-md-8">
        			<div class="row">
                        <div class="form-group">
                            <label class="col-md-2 control-label">歌曲名称</label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" value="<?php echo (isset($info['name']) && ($info['name'] !== '')?$info['name']:''); ?>">
                                <span class="help-block">名称不能为空</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">所属艺人</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="hidden" name="artist_id" value="<?php echo (isset($info['artist_id']) && ($info['artist_id'] !== '')?$info['artist_id']:0); ?>" class="form-control">
                                    <input type="text" value="<?php echo (isset($info['artist_name']) && ($info['artist_name'] !== '')?$info['artist_name']:''); ?>" name="artist_name" class="form-control" placeholder="选择艺人">
                                    <span class="input-group-btn">
                                    <button type="button" title="选择所属艺人" class="btn btn-primary open-find-modal" data-url="<?php echo url('artist/read'); ?>">
                                        <i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                            <label class="col-sm-2 control-label">所属专辑</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="hidden" name="album_id" value="<?php echo (isset($info['album_id']) && ($info['album_id'] !== '')?$info['album_id']:0); ?>" class="form-control">
                                    <input type="text" value="<?php echo (isset($info['album_name']) && ($info['album_name'] !== '')?$info['album_name']:''); ?>" name="album_name" class="form-control" placeholder="选择所属专辑">
                                    <span class="input-group-btn">
                                    <button type="button" title="选择所属专辑" class="btn btn-primary open-find-modal" data-url="<?php echo url('album/read'); ?>">
                                        <i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">所属分类</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="genre_id">
                                    <option value="0">--选择分类--</option>
                                    <?php $_result=get_genre_tree('', '', true);if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$genre): $mod = ($i % 2 );++$i;?>
                                    <option <?php if(isset($info['genre_id'])): if($info['genre_id'] == $genre['id']): ?> selected='selected'<?php endif; endif; ?> value="<?php echo $genre['id']; ?>"><?php echo $genre['title_show']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>

                            <label class="col-sm-2 control-label">所属用户</label>
                            <div class="col-sm-4">
                                <input type="hidden" name="up_uname" class="form-control"  value="<?php echo (isset($info['up_uname']) && ($info['up_uname'] !== '')?$info['up_uname']:''); ?>">
                                <input type="text" name="up_uid" class="form-control"  value="<?php echo (isset($info['up_uid']) && ($info['up_uid'] !== '')?$info['up_uid']:'1'); ?>"  placeholder="填写用户id">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">歌曲标签</label>
                            <div class="col-md-8">
                                <div class="input-group">

                                    <input type="text" name="tags" value="<?php echo (isset($info['tags']) && ($info['tags'] !== '')?$info['tags']:''); ?>"  placeholder="添加标签"/>

                                    <button type="button" title="选择所属标签" class="btn btn-primary open-find-modal ml-10" data-url="<?php echo url('tags/read'); ?>">
                                        <i class="fa fa-search"></i>
                                        搜索标签
                                    </button>

                                </div>
                                <span class="help-block">可以填写Enter键确认，不存在将会自动新增,最多6个</span>
                            </div>
                            <div class="col-md-2">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">所属服务器</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="select-server" name="extend[server_id]">
                                    <option value="0">选择服务器</option>
                                    <?php $_result=get_server();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ss): $mod = ($i % 2 );++$i;?>
                                    <option <?php if(isset($info['extend']['server_id'])): if($info['extend']['server_id'] == $ss['id']): ?> selected='selected'<?php endif; endif; ?> value="<?php echo $ss['id']; ?>"><?php echo $ss['name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>

        				<div class="form-group">
        					<label class="col-md-2 control-label">试听地址</label>
        					<div class="col-md-10">
        						<div class="bootstrap-filestyle input-group">
                                    <input type="hidden" id="listen-file-id" name="extend[listen_file_id]" value="<?php echo (isset($info['extend']['listen_file_id']) && ($info['extend']['listen_file_id'] !== '')?$info['extend']['listen_file_id']:''); ?>">
        							<input type="text" id="listen-file-path" name="extend[listen_url]" class="form-control" value="<?php echo (isset($info['extend']['listen_url']) && ($info['extend']['listen_url'] !== '')?$info['extend']['listen_url']:''); ?>" placeholder="可以填写外链地址">
        							<span class="input-group-btn">
        								<label class="btn btn-default fileinput-button">
        									<span class="icon-span-filestyle glyphicon glyphicon-folder-open"></span>
        									<span class="buttonText">选择文件</span>
                                            <input id="upload-listen" type="file" name="files[]" multiple
                                                data-file-type="audio"
                                                data-upload-type="listen"
                                                data-target-id="#listen-file-id"
                                                data-target-path="#listen-file-path">
                                        </label>
        							</span>
        						</div>
        					</div>
        				</div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">下载地址</label>
                            <div class="col-md-10">
                                <div class="bootstrap-filestyle input-group">
                                    <input type="hidden" id="down-file-id" name="extend[down_file_id]" value="<?php echo (isset($info['extend']['down_file_id']) && ($info['extend']['down_file_id'] !== '')?$info['extend']['down_file_id']:''); ?>">
                                    <input type="text" id="down-file-path" name="extend[down_url]" class="form-control" value="<?php echo (isset($info['extend']['down_url']) && ($info['extend']['down_url'] !== '')?$info['extend']['down_url']:''); ?>" placeholder="可以填写外链地址">
                                    <span class="input-group-btn">
                                        <label class="btn btn-default fileinput-button">
                                            <span class="glyphicon glyphicon-folder-open"></span>
                                            <span class="buttonText">选择文件</span>
                                            <input id="upload-down" type="file" name="files[]" multiple
                                            data-file-type="audio"
                                            data-upload-type="down"
                                            data-target-id="#down-file-id"
                                            data-target-path="#down-file-path">
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">封面地址</label>
                            <div class="col-md-10">
                                <div class="bootstrap-filestyle input-group">
                                    <input type="hidden" id="cover-file-id" name="cover_id" value="<?php echo (isset($info['cover_id']) && ($info['cover_id'] !== '')?$info['cover_id']:''); ?>">
                                    <input type="text" id="cover-file-path" class="form-control" name="cover_url" value="<?php echo (isset($info['cover_url']) && ($info['cover_url'] !== '')?$info['cover_url']:''); ?>" placeholder="可以填写外链地址">
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
                            <label class="col-sm-2 control-label">下载所需金币</label>
                            <div class="col-sm-3">
                                <input type="text" name="extend[down_rule][coin]" class="form-control"  value="<?php echo (isset($info['extend']['down_rule']['coin']) && ($info['extend']['down_rule']['coin'] !== '')?$info['extend']['down_rule']['coin']:'0'); ?>"  placeholder="">
                            </div>
                            <label class="col-sm-2 control-label">下载所需积分</label>
                            <div class="col-sm-3">
                                <input type="text" name="extend[down_rule][score]" class="form-control"  value="<?php echo (isset($info['extend']['down_rule']['score']) && ($info['extend']['down_rule']['score'] !== '')?$info['extend']['down_rule']['score']:'0'); ?>"  placeholder="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label text-right col-lg-2">下载所需用户组</label>
                            <div class="col-lg-10">
                                <?php if(isset($info['extend']['down_rule']['group'])): ?>
                                <label class="checkbox-inline i-checkboxs">
                                    <input type="checkbox" <?php if(isset($info['extend']['down_rule']['group']) && in_array(0, $info['extend']['down_rule']['group'])): ?>checked=""<?php endif; ?> name="extend[down_rule][group][]" value="0">允许游客
                                </label>
                                <?php $_5bd326aea3396=get_user_groups(); if(is_array($_5bd326aea3396) || $_5bd326aea3396 instanceof \think\Collection || $_5bd326aea3396 instanceof \think\Paginator): if( count($_5bd326aea3396)==0 ) : echo "" ;else: foreach($_5bd326aea3396 as $k=>$vo): ?>
                                <label class="checkbox-inline i-checkboxs">
                                    <input type="checkbox" <?php if(isset($info['extend']['down_rule']['group']) && in_array($vo['id'], $info['extend']['down_rule']['group'])): ?>checked=""<?php endif; ?> name="extend[down_rule][group][]" value="<?php echo $vo['id']; ?>">允许<?php echo $vo['name']; ?>
                                </label>
                                <?php endforeach; endif; else: echo "" ;endif; else: ?>
                                <label class="checkbox-inline i-checkboxs">
                                    <input type="checkbox" name="extend[down_rule][group][]" value="0">允许游客
                                </label>
                                <?php $_5bd326aea3396=get_user_groups(); if(is_array($_5bd326aea3396) || $_5bd326aea3396 instanceof \think\Collection || $_5bd326aea3396 instanceof \think\Paginator): if( count($_5bd326aea3396)==0 ) : echo "" ;else: foreach($_5bd326aea3396 as $k=>$vo): ?>
                                <label class="checkbox-inline i-checkboxs">
                                    <input type="checkbox" checked="" name="extend[down_rule][group][]" value="<?php echo $vo['id']; ?>">允许<?php echo $vo['name']; ?>
                                </label>
                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                <P class="help-block">只要设置金币或者积分游客下载勾选无效</P>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label text-right col-lg-2">歌曲推荐位</label>
                            <div class="col-lg-10">
                                <?php if(isset($info)): $_5bd326aea3396=config('music_position'); if(is_array($_5bd326aea3396) || $_5bd326aea3396 instanceof \think\Collection || $_5bd326aea3396 instanceof \think\Paginator): if( count($_5bd326aea3396)==0 ) : echo "" ;else: foreach($_5bd326aea3396 as $k=>$vo): ?>
                                <label class="checkbox-inline i-checkboxs">
                                    <input type="checkbox" name="position[]" <?php if($k & $info['position']): ?>checked="checked"<?php endif; ?> value="<?php echo $k; ?>"><?php echo $vo; ?>
                                </label>
                                <?php endforeach; endif; else: echo "" ;endif; else: $_5bd326aea3396=config('music_position'); if(is_array($_5bd326aea3396) || $_5bd326aea3396 instanceof \think\Collection || $_5bd326aea3396 instanceof \think\Paginator): if( count($_5bd326aea3396)==0 ) : echo "" ;else: foreach($_5bd326aea3396 as $k=>$vo): ?>
                                <label class="checkbox-inline i-checkboxs">
                                    <input type="checkbox" name="position[]" value="<?php echo $k; ?>"><?php echo $vo; ?>
                                </label>
                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                <span class="help-block">可选择多个推荐位</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">歌词</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="extend[lrc]" rows="5"><?php echo (isset($info['extend']['lrc']) && ($info['extend']['lrc'] !== '')?$info['extend']['lrc']:''); ?></textarea>
                                <span class="help-block">可填写歌词URL地址</span>
                            </div>
                        </div>

                        <!--div class="form-group">
                            <label class="col-md-2 control-label">歌曲简介</label>
                            <div class="col-md-10">
                                <textarea class="form-control" id="song-introduce" rows="5" name="extend[introduce]"><?php echo (isset($info['extend']['introduce']) && ($info['extend']['introduce'] !== '')?$info['extend']['introduce']:''); ?>
                                </textarea>
                            </div>
                        </div-->
                    </div>
                    <input type="hidden" name="id" value="<?php echo (isset($info['id']) && ($info['id'] !== '')?$info['id']:''); ?>">
                    <input type="hidden" name="status" value="<?php echo (isset($info['status']) && ($info['status'] !== '')?$info['status']:'1'); ?>">
                    <input type="hidden" name="extend[mid]" value="<?php echo (isset($info['id']) && ($info['id'] !== '')?$info['id']:''); ?>">
                    <div class="form-group">
                        <div class="col-md-offset-2 col-lg-6 text-left">
                            <button onclick="" type="button"
                                    class="btn btn-default btn-return">
                                <i class=" icon-arrow-left16 position-right"></i>返回上页
                            </button>
                            <button type="submit" class="btn btn-primary" type="submit">
                                确认提交<i class="icon-arrow-right16 position-right"></i>
                            </button>
                        </div>
                    </div>
        		</div>

        		<div class="col-md-4">
        			<div class="row">
                        <div class="form-group">
                            <label class="col-md-3 control-label">试听次数</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="listens" value="<?php echo (isset($info['listens']) && ($info['listens'] !== '')?$info['listens']:''); ?>">
                            </div>

                            <label class="col-md-3 control-label">下载次数</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="download" value="<?php echo (isset($info['download']) && ($info['download'] !== '')?$info['download']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">收藏次数</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="favtimes" value="<?php echo (isset($info['favtimes']) && ($info['favtimes'] !== '')?$info['favtimes']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">顶次数</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="digg" value="<?php echo (isset($info['favtimes']) && ($info['favtimes'] !== '')?$info['favtimes']:''); ?>">
                            </div>

                            <label class="col-md-3 control-label">踩次数</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="bury" value="<?php echo (isset($info['favtimes']) && ($info['favtimes'] !== '')?$info['favtimes']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">原唱</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="sing" value="<?php echo (isset($info['sing']) && ($info['sing'] !== '')?$info['sing']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">作词</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="lyrics" value="<?php echo (isset($info['lyrics']) && ($info['lyrics'] !== '')?$info['lyrics']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">作曲</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="composer" value="<?php echo (isset($info['composer']) && ($info['composer'] !== '')?$info['composer']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">编曲</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="midi" value="<?php echo (isset($info['midi']) && ($info['midi'] !== '')?$info['midi']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">网盘下载地址</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="extend[disk_url]" value="<?php echo (isset($info['extend']['disk_url']) && ($info['extend']['disk_url'] !== '')?$info['extend']['disk_url']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">网盘密码</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="extend[disk_pass]" value="<?php echo (isset($info['extend']['disk_pass']) && ($info['extend']['disk_pass'] !== '')?$info['extend']['disk_pass']:''); ?>">
                            </div>
                        </div>

                        <!--div class="form-group hidden">
                            <label class="col-md-3 control-label">文件大小</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="down-file-size" name="extend[file_size]" value="<?php echo (isset($info['extend']['file_size']) && ($info['extend']['file_size'] !== '')?$info['extend']['file_size']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group hidden">
                            <label class="col-md-3 control-label">文件bit</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="down-file-bit" name="extend[bitrate]" value="<?php echo (isset($info['extend']['bitrate']) && ($info['extend']['bitrate'] !== '')?$info['extend']['bitrate']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group hidden">
                            <label class="col-md-3 control-label">播放时长</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="down-play-time" name="extend[bitrate]" value="<?php echo (isset($info['extend']['play_time']) && ($info['extend']['play_time'] !== '')?$info['extend']['play_time']:''); ?>">
                            </div>
                        </div-->
                    </div>
                </div>
            </form>

        </div>
	</div>
</div>

 <?php endif; ?>