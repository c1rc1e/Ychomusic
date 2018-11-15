<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:63:"D:\PHPTutorial\WWW\resources\web\default\home\music_detail.html";i:1516261137;s:64:"D:\PHPTutorial\WWW\resources\web\default\home\public_common.html";i:1540551673;s:64:"D:\PHPTutorial\WWW\resources\web\default\home\public_header.html";i:1540542982;s:64:"D:\PHPTutorial\WWW\resources\web\default\home\public_footer.html";i:1540552015;}*/ ?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <title>Ycho music 音乐网</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta content="telephone=no" name="format-detection">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="Ycho music">
    <?php echo hook('pageMeta'); ?>
   <link type="image/x-ico; charset=binary" rel="Ycho music" href="/jy-icon.png">
    <!--Css-->
    <link rel="stylesheet" type="text/css" href="/public/static/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/static/libs/jymusic/css/jy.css?1.0.0">
    <link rel="stylesheet" type="text/css" href="/resources/web/default/assets/css/plugs.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="/resources/web/default/assets/css/style.css" media="all">
    
<link rel="stylesheet" href="/resources/web/default/assets/css/play.css?1.0" type="text/css" />

    <!--js-->
    <script src="/public/static/libs/jquery/jquery-2.0.3.min.js"></script>
    <script src="/public/static/libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        (function() {window.JY = {"root": "<?php echo \think\Request::instance()->root(); ?>", "public": "/public", "domains" : {"home":"<?php echo url('home/Index/index'); ?>", "api" : "<?php echo url('api/v1.Index/index', '', false); ?>","user" : "<?php echo url('user/Index/index', '', false); ?>","article" : "<?php echo url('article/Index/index', '', false); ?>","mobile" : "<?php echo config('domain_list.mobile'); ?>"},"deep": "<?php echo config('pathinfo_depr'); ?>","model": ["<?php echo config('url_model'); ?>", "<?php echo config('url_html_suffix'); ?>"],"user_active_url" : "<?php echo url('user/Auth/active'); ?>"}})();
    </script>
</head>

<body>
    <!--布局-->
    <div class="wide_layout relative w_xs_auto">
        <!--[if (lt IE 9) | IE 9]>
			<div style="background:#fff;padding:8px 0 10px;">
			<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color pull-left mr_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">注意!这个页面可能不会正确显示。</b> <b>您使用Internet Explorer版本不支持html5。 请使用最新版IE 360/火狐/谷歌等浏览器浏览本站。</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4  bg_scheme_color color_light t_align_c" target="_blank" style="margin-bottom:2px;">立即更新!</a></div></div></div></div>
		<![endif]-->
        <!-- 头部 -->
        <header  class="header">
	<!--头顶部-->
	<section class="h_top hidden-xs">
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-3 col-sm-4">
					<a href="<?php echo url('/'); ?>" class="pull-left logo mt_15">
						<img src="/resources/web/default/assets/images/logo.png" alt="Ycho music">
					</a>
				</div>
				<div class="col-md-4 col-sm-8 t_align_c">
					<div class="search-box mt_15" >
						<form role="search" class="relative type_2" id="search_form" method="get" action="<?php echo url("home/Search/index");?>">
							<input type="text" class="d_none" name="type" value="1" >
							<input type="text" class="full_width" name="keys" placeholder="搜索">
							<button class="search_button tr_all_hover">
								<i class="jy jy-search"></i>
							</button>
						</form>
					</div>
				</div>
				<div class="col-md-5 col-sm-8 t_align_c d_xs_none">
					<ul class=" clearfix users_nav">
						<li class="user-show">
							<span><i class="jy jy-login"></i></span>
							<span >
								<a href="#" class=" user-show" id="login_btn">登录</a>
								|
								<a href="<?php echo url("user/Auth/signup");?>" class="reg_btn" >注册</a>
							</span>
						</li>
						<li class="user-hide">
							<span><i class="jy jy-user"></i></span>
							<span id="user-info"></span>
						</li>

						<li>
							<a target="_user" href="<?php echo url("user/Music/create");?>" class="reg_btn" >
								<span><i class="jy jy-cloud-up"></i></span>
								<span>上传</span>
							</a>
						</li>
						<li>
							<a target="_user" href="<?php echo url("user/Musician/auth");?>" class="reg_btn" >
								<span><i class="jy jy-round-music"></i></span>
								<span>认证</span>
							</a>
						</li>

						<li class="user-hide">
							<a id="upage-url" href="" target="_user">
								<span><i class="jy jy-Profile"></i></span>
								<span>主页</span>
							</a>
						</li>

						<li class="user-hide">
							<a target="_user" href="<?php echo url("user/Account/index");?>">
								<span><i class="jy jy-edit"></i></span>
								<span>设置</span>
							</a>
						</li>
						<li id="login_out" class="user-hide">
							<a target="_user"  href="javascript:;" url="<?php echo url("/logout","",true,false);?>">
								<span><i class="jy jy-logout"></i></span>
								<span>退出</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!--头底部-->
	<section class="h_bot_part">
		<div class="menu_wrap">
			<div class="container">
				<div class="clearfix row">
					<div class="col-xs-4 hidden-md hidden-lg hidden-sm">
						<a href="<?php echo url('/'); ?>" class="pull-left logo p_vr_0">
							<img src="/resources/web/default/assets/images/logo.png" alt="JYmusic">
						</a>
					</div>

					<div class="col-sm-12 col-xs-8">
						<nav role="navigation" >
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed bg_scheme_color mt_0" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
									<span class="sr-only">切换导航</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div id="navbar" class="collapse navbar-collapse ">
								<ul class="nav navbar-nav nav_menu full_width  relative">
									<?php $navModel = new \app\common\model\Channel();$__NAV__ = $navModel->getList([], 20,true,86400);if(is_array($__NAV__) || $__NAV__ instanceof \think\Collection || $__NAV__ instanceof \think\Paginator): if( count($__NAV__)==0 ) : echo "" ;else: foreach($__NAV__ as $key=>$nav): if($nav['pid'] == '0'): ?>
									<li class="t-nav <?php if(!empty($nav['active'])) echo  'current'; ?>">
										<a href="<?php echo $nav['url']; ?>" target="<?php if($nav['target'] == '1'): ?>_top<?php echo $nav['id']; else: ?>_self<?php endif; ?>" class="">
											<?php echo $nav['title']; ?>
										</a>
									</li>
									<?php endif; endforeach; endif; else: echo "" ;endif; ?>
									<em id="cre"></em>
									<li class="relative hidden-sm hidden-xs" id="top_button">
										<a role="button" href="#" class="pt_5 color_light bg_scheme_color">
											<span class="d_inline_middle shop_icon">
												<i class="jy jy-like jy-2x"></i>
												<span class="count tr_delay_hover type_2 circle t_align_c">10</span>
											</span>
											<b>每日推荐</b>
										</a>
										<div class="songs-day-hot top_arrow tr_all_hover ">
											<div class=" sc_header">每日推荐</div>
											<ul class="products_list">
												<?php $param = []; $param["status"]=1;$param["result"] = "v";$param["cache"] = 86400;$param["pos"] = 1;$param["limit"] = 6;$param["order"] = "update_time";$songsModel = isset($songsModel)?$songsModel:new \app\common\model\Songs();$__MUSIC__ = $songsModel->getList($param);if(is_array($__MUSIC__) || $__MUSIC__ instanceof \think\Collection || $__MUSIC__ instanceof \think\Paginator): $__JYLIST__ = $__MUSIC__;if( count($__JYLIST__)==0 ) : echo "" ;else: $i=0; foreach($__JYLIST__ as $key=>$v): ++$i; ?>
												<li>
													<div class="clearfix">
														<div class="pull-left product_description">
															<a class="mb_5 d_block text-ellipsis play_name" target="_play" href="<?php echo $v['url']; ?>"><?php echo $v['artist_name']; ?> - <?php echo $v['name']; ?></a>
														</div>
														<div class="pull-right f_size_big">
															<a class="tr_delay_hover jp-play-me" data-id="<?php echo $v['id']; ?>" href="javascript:;"><i class="jy jy-play"></i></a>
														</div>
													</div>
												</li>
												<?php endforeach; endif; else: echo "" ;endif; ?>
											</ul>
										</div>
									</li>
								</ul>

							</div>
						</nav>
					</div>
				</div>
			</div>

		</div>
	</section>
</header>

        <!-- /头部 -->
        <!-- 主体 -->
        
<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
            <!--左侧详细页面-->
            <section class="col-sm-8">
                <div class="row clearfix mb_20">
                    <div class="col-sm-4">
                        <div class="photoframe shadow wrapper mb_10">
                            <div class=" thumbnail mb_0">
                                <a  href="javascript:;">
                                    <img src="<?php echo $data['cover_url']; ?>" class="tr_all_hover">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
						
                        <h2 class="pt_10 text-ellipsis">
                            <a class="jp-play-me play" id="one-play" href="javascript:;" data-id="<?php echo $data['id']; ?>">
                                <i class="jy jy-play-f"></i>
                            </a><?php echo !empty($data['artist_name'])?$data['artist_name']. ' - ' : ''; ?> <?php echo $data['name']; ?>
                        </h2>
                        <hr>
                        <!--单曲播放页-->
                        <div class="play">
                            <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                            <div id="jp_container_1" class="jp-audio" onselectstart="return false;">
                                <div class="player" id="play">
                                    <div class="nplay_btn">
                                        <a href="#" class="jp-play">播放</a>
                                        <a href="#" class="jp-pause">暂停</a>
                                    </div>

                                    <div class="player_top" style="display:;">
                                        <div class="nplay_plan">
                                            <div class="nplay_buffered jp-seek-bar" style="width: 0px;"></div>
                                            <div class="nplay_loading_time jp-play-bar" style="width: 0px;"></div>
                                        </div>
                                        <div class="nplay_time">
                                            <em class="jp-current-time">00:00</em>/<em class="jp-duration">00:00</em>
                                        </div>
                                        <div class="nplay_voice">
                                            <a href="#" class="jp-mute" title="静音">静音</a>
                                            <a href="#" class="jp-unmute" title="取消静音">取消静音</a>
                                            <div class="jp-volume-bar">
                                                <div class="jp-volume-bar-value"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="player_error" style="display:none">
                                        <p class="fa_green">无法播放，要Silverlight插件支持，<a href="#">点击下载</a></p>
                                    </div>

                                    <div class="player_down">
                                        <ul>
                                            <li class="player_icon2"><a href="#"><b class="p_ic"></b>人气</a>(<?php echo $data['listens']; ?>)</li>
                                            <li class="player_icon5"><a class="music-action-btn" href="javascript:;" data-id="<?php echo $data['id']; ?>" data-action="fav"><b class="p_ic"></b>收藏</a>(<?php echo $data['favtimes']; ?>)</li>
                                            <li class="player_icon3"><a href="<?php echo $data['down_url']; ?>" target="fav"><b class="p_ic"></b>下载</a>(<?php echo $data['download']; ?>)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/单曲播放页-->
                        <div class="clearfix mt_10 mb_20">
                            <ul class="horizontal_list l_width_divider">
                                 <li class="mr_15">类别:<a href="<?php echo $data['genre_url']; ?>"><?php echo $data['genre_name']; ?></a></li>
                                <li>试听:<?php echo $data['listens']; ?></li>
                            </ul>
                        </div>

                        <div class="clearfix mb_20">
                            <ul class="horizontal_list l_width_divider">
                                <li class="mr_15">专辑:
                                    <a href="<?php echo $data['album_url']; ?>"><?php echo (isset($data['album_name']) && ($data['album_name'] !== '')?$data['album_name']:"单曲"); ?></a>
                                </li>
                                <?php if(!(empty($data['artist_name']) || (($data['artist_name'] instanceof \think\Collection || $data['artist_name'] instanceof \think\Paginator ) && $data['artist_name']->isEmpty()))): ?>
                                <li class="mr_15">歌手:
                                    <a href="<?php echo $data['artist_url']; ?>"><?php echo $data['artist_name']; ?></a>
                                </li>
                                <?php endif; if(!(empty($data['tags']) || (($data['tags'] instanceof \think\Collection || $data['tags'] instanceof \think\Paginator ) && $data['tags']->isEmpty()))): ?>
                                <li class="mr_15">风格标签:
                                    <?php if(is_array($data['tags']) || $data['tags'] instanceof \think\Collection || $data['tags'] instanceof \think\Paginator): $__JYLIST__ = $data['tags'];if( count($__JYLIST__)==0 ) : echo "" ;else: $i=0; foreach($__JYLIST__ as $key=>$tag): ++$i; ?>
                                    <a href="<?php echo $tag['url']; ?>"><?php echo $tag['name']; ?></a>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="clearfix mb_20">
                            <?php echo hook('pageBody', ['widget'=>'share', 'data' => $data]); ?>
                        </div>

                        <ul class="horizontal_list clearfix mb_10">
                            <li class="mr_5">
                                <a href="javascript:;" data-id="<?php echo $data['id']; ?>" class="btn_1 pull-right relative music-action-btn" data-action="fav">
                                    <span class="tooltip tr_all_hover">收藏[<span class="num"><?php echo $data['favtimes']; ?></span>]</span>
                                    <i class="jy jy-fav-music"></i>
                                </a>
                            </li>
                            <li class="mr_5">
                                <a href="javascript:;"  class="btn_1 pull-right relative music-action-btn" data-id="<?php echo $data['id']; ?>" data-action="digg">
                                    <span class="tooltip tr_all_hover">赞[<span class="num"><?php echo $data['digg']; ?></span>]</span>
                                    <i class="jy jy-digg"></i>
                                </a>
                            </li>
                            <li class="mr_5">
                                <a class="down btn_1 pull-right relative tr_delay_hover" target="_down" href="<?php echo $data['down_url']; ?>">
                                    <span class="tooltip tr_all_hover">下载[<span class="num"><?php echo $data['download']; ?></span>]</span>
                                    <i class="jy jy-cloud-down"></i>
                                </a>
                            </li>

                            <li class="pull-right mt_10">
                            <?php $SongsModel = isset($SongsModel)? $SongsModel:new \app\common\model\Songs();$next=$SongsModel->field("id,name")->order("id asc")->where(["status"=>1,"id"=>["gt", $data["id"]]])->find();if(empty($next)): $next= $SongsModel->field("id,name")->order("id asc")->find();endif; $next["url"]=url('/music/'.$next['id']); ?>  
                                <a class="btn_1" href="<?php echo $next['url']; ?>">下一曲</a>
                            
                            </li>

                            <li class="pull-right mr_5 mt_10">
                            <?php $SongsModel = isset($SongsModel)?$SongsModel:new \app\common\model\Songs();$prev= $SongsModel->field("id,name")->order("id DESC")->where(["status"=>1,"id"=>["lt", $data["id"]]])->find();if(empty($prev)): $prev= $SongsModel->field("id,name")->order("id DESC")->find();endif; $prev["url"]=url('/music/'.$prev['id']); ?>  
                            <a class="btn_1" href="<?php echo $prev['url']; ?>">上一曲</a>
                            
                            </li>
                        </ul>
                        <div class="d_inline_middle"><?php echo hook('pageBody',array('widget'=>'Baidushare')); ?></div>

                    </div>
                </div>

                <div class="clearfix">
                    <?php echo hook('contentAfter', ['type'=>'song','id'=>$data['id']]); ?>
                </div>

            </section>
            <aside class="col-sm-4">
                <h2 class="pt_10">最新添加</h2>
                <hr>
                <div class="sidebar_content">
                    <?php $param = []; $param["status"]=1;$param["result"] = "v";$param["limit"] = 15;$param["order"] = "create_time";$songsModel = isset($songsModel)?$songsModel:new \app\common\model\Songs();$__MUSIC__ = $songsModel->getList($param);if(is_array($__MUSIC__) || $__MUSIC__ instanceof \think\Collection || $__MUSIC__ instanceof \think\Paginator): $__JYLIST__ = $__MUSIC__;if( count($__JYLIST__)==0 ) : echo "" ;else: $i=0; foreach($__JYLIST__ as $key=>$v): ++$i; ?>
                    <div class="mb_10 clearfix relative play_box">
                        <div class="row clearfix song_list">
                            <span class="col-sm-7 col-xs-8">
                                <span class="ls_num <?php if($i < '4'): ?>ls_num_top<?php endif; ?>"><?php echo $i; ?></span>
                                 <a class="text-ellipsis" target="_self" title="<?php echo $v['name']; ?>" href="<?php echo $v['url']; ?>"><?php echo $v['name']; ?></a>
                            </span>
                            <span class="col-sm-3 col-xs-4 hidden-xs">
                                <a class="text-ellipsis" href="<?php echo $v['artist_url']; ?>" target=_singer" title="<?php echo $v['artist_name']; ?>"><?php echo $v['artist_name']; ?></a>
                            </span>
                            <span class="col-sm-2 col-xs-4 ls_btns">
                                <a class="jp-play-me" href="<?php echo $v['url']; ?>"><i class="jy jy-play"></i>	</a>
                            </span>
                        </div>
                        <hr class="l_hr">
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </aside>
        </div>
    </div>
</div>

        <!-- /主体 -->
        <!-- 底部 -->
        <footer id="footer" >

	<div class="container hidden-xs">
		<div class="row clearfix">
			<div class="col-sm-6">
				<h3>Ycho music音乐网</h3>
				<p>Ycho music是Php+Mysql开发的一款开源的跨平台音乐管理系统,采用国内最优秀php框架thinkphp。程序稳定，易于扩展且具有超强大负载能力，完全可以满足音乐、DJ、音乐分享、音乐资讯站等使用。</p>
			</div>
			<div class="col-sm-2">
				<h3>关于网站</h3>
				<ul class="vertical_list">
					<?php $param = []; $param["status"]=1;$param["result"] = "v";$param["cache"] = 86400;$param["limit"] = 5;$siteModel = isset($siteModel)?$siteModel:new \app\common\model\Site();$__MUSIC__ = $siteModel->getList($param);if(is_array($__MUSIC__) || $__MUSIC__ instanceof \think\Collection || $__MUSIC__ instanceof \think\Paginator): $__JYLIST__ = $__MUSIC__;if( count($__JYLIST__)==0 ) : echo "" ;else: $i=0; foreach($__JYLIST__ as $key=>$v): ++$i; ?>
					<li><a class="tr_delay_hover" href="<?php echo $v['url']; ?>"><?php echo $v['title']; ?></a></li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="col-sm-2">
				<h3>帮助中心</h3>
				<ul class="vertical_list">
					<?php $param = []; $param["status"]=1;$param["result"] = "v";$param["cache"] = 86400;$param["type"] = "help";$param["limit"] = 5;$siteModel = isset($siteModel)?$siteModel:new \app\common\model\Site();$__MUSIC__ = $siteModel->getList($param);if(is_array($__MUSIC__) || $__MUSIC__ instanceof \think\Collection || $__MUSIC__ instanceof \think\Paginator): $__JYLIST__ = $__MUSIC__;if( count($__JYLIST__)==0 ) : echo "" ;else: $i=0; foreach($__JYLIST__ as $key=>$v): ++$i; ?>
					<li><a class="tr_delay_hover" href="<?php echo $v['url']; ?>"><?php echo $v['title']; ?></a></li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
				<div class="col-sm-2">
					<h3>联系我们</h3>
					<ul class="vertical_list">
						<li><i class="jy jy-envelope pull-left"></i></li>
						<li><i class="jy jy-share-square pull-left"></i>QQ: 1033454902</li>
						<li>
							<i class="jy jy-music pull-left"></i>
							<a class="contact_e" href="#">Ycho music</a>
						</li>
					</ul>
				</div>
			</div>
			<hr>
			<div class="row clearfix">
				<!--版权的部分 请务必保留版权 谢谢合作！-->
				<div class="footer_bottom_part col-sm-6 ">
					<p class="pull-left">Powered by <a style="color: #ff7f9a;" >湖南信息职业技术学院计应1603 袁聪</a>&copy; <?php echo date('Y'); ?></p>
					<p class="pull-left">
					<?php echo config('web_site_icp'); ?>
					</p>
				</div>
			
			<div class="col-sm-6 mb_10">
				<!--图标-->
				<ul class="clearfix horizontal_list social_icons pull-right">
					<li class="html5 relative">
						<span class="tooltip tr_all_hover  ">HTML5支持</span>
						<a class=" t_align_c tr_delay_hover " href="javascript:;">
							<i class="jy jy-html5"></i>
						</a>
					</li>
					<li class="css3 ml_5 relative">
						<span class="tooltip tr_all_hover  ">Css3支持</span>
						<a class="  t_align_c tr_delay_hover" href="javascript:;">
							<i class="jy jy-css3"></i>
						</a>
					</li>
					<li class="android ml_5 relative">
						<span class="tooltip tr_all_hover  ">Android支持</span>
						<a class="t_align_c tr_delay_hover" href="javascript:;">
							<i class="jy jy-anzhuo"></i>
						</a>
					</li>
					<li class="iPhone ml_5 relative">
						<span class="tooltip tr_all_hover  ">iPhone支持</span>
						<a class="t_align_c tr_delay_hover" href="javascript:;">
							<i class="jy jy-iphone"></i>
						</a>
					</li>
					<li class="windows-Phone ml_5 relative">
						<span class="tooltip tr_all_hover  ">Windows Phone 8支持</span>
						<a class="  t_align_c tr_delay_hover" href="javascript:;">
							<i class="jy jy-window"></i>
						</a>
					</li>
					<li class="rss ml_5 relative">
						<span class="tooltip tr_all_hover  ">Rss订阅</span>
						<a class="t_align_c tr_delay_hover" href="javascript:;">
							<i class="jy jy-rss"></i>
						</a>
					</li>
				</ul>
			</div>			
		</div>
	
	</div>

</footer>
        <!-- /底部 -->
    </div>
    
<script type="text/javascript" src="/public/static/libs/jplayer/jquery.jplayer.min.js"></script>

    <script type="text/javascript" src="/public/static/libs/jymusic/js/app.js?0.1"></script>
    <script type="text/javascript" src="/resources/web/default/assets/js/plugs.min.js"></script>
    <script type="text/javascript" src="/resources/web/default/assets/js/common.js?v=1.0"></script>
    
<script type="text/javascript">
    $(document).ready(function () {
        var playId = '<?php echo $data['id']; ?>';
        var player = $("#jquery_jplayer_1").jPlayer({
            ready: function () {
                var $this = $(this);
                $.get(U("api/songs/"+ playId), function (res) {
                    if (res.code == 0) {
                        var song = res.result;
                        $this.jPlayer("setMedia", {
                            mp3: song.sub.listen_url,
                            title: song.artist_name + ' - ' + song.name
                        });
                        $this.jPlayer("play");
                        $.ajax({
                            url: U("/api/actions/listen"),
                            data: {id: playId},
                            dataType: "jsonp"
                        });
                    }
                }, "json");
            },
            swfPath: JY.PUBLIC + '/static/js/jPlayer', //swfUrl,
            supplied: "mp3",
            volume: "1",
            wmode: "window"
        });
    })
	$.ajax(<?php echo url("","",true,false);?>"},dataType: "jsonp" });
</script>

    <div class="hidden">
        <!-- 用于加载统计代码等隐藏元素 -->
        {block name="hidden"}<?php echo config('web_site_stat'); ?>[/block}
    </div>
    <!--二维码<ul class="social_widgets ">
        <li class="relative d_xs_none">
            <button class="sw_button t_align_c facebook"><i class="jy jy-qrcode"></i></button>
            <div class="sw_content">
                <h3 class="mb_20">扫描二维码</h3>
                <img src="/public/static/images/jyuu.png" alt="JYmusic">
            </div>
        </li>
    </ul>-->
    <!--弹出登录-->
    <div class="popup_wrap d_none" id="login_popup">
        <section class="popup shadow">
            <button class="bg_tr close "><i class="jy jy-remove"></i></button>
            <h3 class="mb_20"><i class="jy jy-login  mr_20"></i> 用户登录</h3>
            <form method="post" action="<?php echo url("user/Auth/loginUser");?>" class="form-horizontal">
                <ul>
                    <li class="mb_15">
                        <label for="username" class="mb_5">用户名</label><br>
                        <input class="form-control" type="text" name="username" id="username" class="full_width">
                    </li>
                    <li class="mb_15">
                        <label for="password" class="mb_5">密码</label><br>
                        <input class="form-control" type="password" name="password" id="password" class="full_width">
                    </li>
                    <?php if(config('verify_off') == '1'): ?>
                    <li class="mb_15">
                        <label class="mb_5">验证码</label><br>
                        <div class="verify-wrp">
                            <input class="form-control" type="text" name="verify" class=" full_width">
                            <img class="verifyimg reloadverify" width="100%" alt="点击切换" src="<?php echo captcha_src(); ?>" style="cursor:pointer;">
                        </div>
                    </li>
                    <script type="text/javascript">
                        $(function() {
                            var verifyimg = $(".verifyimg").attr("src");
                            $(".reloadverify").click(function() {
                                if (verifyimg.indexOf('?') > 0) {
                                    $(".verifyimg").attr("src", verifyimg + '&random=' + Math.random());
                                } else {
                                    $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/, '') + '?' + Math.random());
                                }
                            });
                        });
                    </script>
                    <?php endif; ?>
                    <li class="mb_15">
                        <input type="checkbox" class="pull-left mr_10" checked name="autologin" id="checkbox_10"><label for="checkbox_10">记住我</label>
                        <a class="pull-right" href="<?php echo url("user/Auth/reset");?>" class="color_dark">忘记密码?</a>
                    </li>
                    <li class="clearfix mb_30">
                        <button class="ajax-login-user btn_4 tr_all_hover pull-left bg_scheme_color color_light">登录</button>
                        <a class="sina-btn" href="<?php echo url("user/oauth/index", ["driver"=>"weibo"]);?>" class="color_dark"><i class="jy jy-sina"></i></a>
                        <a class="qq-btn" href="<?php echo url("user/oauth/index", ["driver"=>"qq"]);?>" class="color_dark"><i class="jy jy-qq"></i></a>
                    </li>

                </ul>
            </form>
            <footer class="t_mxs_align_c">
                <h3 class="d_inline_middle  ">新用户注册?</h3>
                <a href="<?php echo url("user/Auth/signup");?>" target="_blank" role="button" class="tr_all_hover ">申请一个新帐号</a>
            </footer>
        </section>
    </div>
    <button id="go_to_top" class="type_2 tr_all_hover animate_ftl">
        <i class="jy jy-rocket"></i>
    </button>
</body>

</html>
