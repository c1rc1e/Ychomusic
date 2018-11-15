<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:64:"D:\PHPTutorial\WWW\resources\web\default\user\setting_index.html";i:1502218637;s:64:"D:\PHPTutorial\WWW\resources\web\default\user\public_common.html";i:1502370209;s:62:"D:\PHPTutorial\WWW\resources\web\default\user\public_head.html";i:1540551672;s:64:"D:\PHPTutorial\WWW\resources\web\default\user\public_footer.html";i:1540552004;}*/ ?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
	<title>Ycho music 音乐网</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta content="telephone=no" name="format-detection">
<meta name="keywords" content="">
<meta name="description" content="">
<link type="image/x-ico; charset=binary" rel="Ycho music" href="/jy-icon.png">
<meta name="author" content="Ycho music 音乐网">
<!--Css-->
<link rel="stylesheet" type="text/css" href="/public/static/libs/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/public/static/libs/jymusic/css/jy.css?1.0.0">
<link rel="stylesheet" type="text/css" href="/resources/web/default/assets/css/plugs.min.css" media="all">
<link rel="stylesheet" type="text/css" href="/resources/web/default/assets/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="/resources/web/default/assets/css/user.css" media="all">
<!--js-->
<script src="/public/static/libs/jquery/jquery-2.0.3.min.js"></script>
<script src="/public/static/libs/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    (function() {window.JY = {"root": "<?php echo \think\Request::instance()->root(); ?>", "public": "/public", "domains" : {"home":"<?php echo url('home/Index/index'); ?>", "api" : "<?php echo url('api/v1.Index/index'); ?>","user" : "<?php echo url('user/Index/index'); ?>","article" : "<?php echo url('article/Index/index'); ?>","mobile" : "<?php echo config('domain_list.mobile'); ?>"},"deep": "<?php echo config('pathinfo_depr'); ?>","model": [<?php echo config('url_model'); ?>, "<?php echo config('url_html_suffix'); ?>"],"user_active_url" : "<?php echo url('user/Auth/active'); ?>"}})();
</script>
	
</head>
<body id="">
<div class="relative w_xs_auto">
	<header class="header">
		<!--头顶部-->
		<section class="h_top hidden-xs">
			<div class="container user-container">
				<div class="row clearfix">
					<div class="col-md-3 col-sm-4 ">
						<a href="<?php echo url('/'); ?>" class="pull-left logo mt_15">
							<img src="/resources/web/default/assets/images/logo.png" alt="JYmusic">
						</a>
					</div>
					<div class="col-md-5 col-sm-8 t_align_c">
						<div class="search-box mt_15" >
							<form role="search" class="relative type_2" id="search_form" method="get" action="<?php echo url("home/Search/index");?>">
								<input type="text" class="d_none" name="type" value="songs" >
								<input type="text" class="full_width" name="keys" placeholder="搜索">
								<button class="search_button tr_all_hover">
									<i class="jy jy-search"></i>
								</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 t_align_c">
						<ul class=" clearfix users_nav">
							<li>
								<a href="<?php echo url("user/Index/read", ["uid" => $user["uid"]]);?>" class="reg_btn" >
									<span><i class="jy jy-user"></i></span>
									<span id="user-info"><?php echo $login_user['nickname']; ?></span>
								</a>
							</li>

							<li>
								<a href="<?php echo url("user/Music/create");?>" class="reg_btn" >
									<span><i class="jy jy-cloud-up"></i></span>
									<span>上传</span>
								</a>
							</li>

							<li>
								<a id="upage-url" href="<?php echo url("user/Index/read", ["uid" => $user["uid"]]);?>">
									<span><i class="jy jy-Profile"></i></span>
									<span>主页</span>
								</a>
							</li>

							<li>
								<a href="<?php echo url("user/Setting/index");?>">
									<span><i class="jy jy-edit"></i></span>
									<span>设置</span>
								</a>
							</li>
							<li>
								<a id="user-login-out" href="javascript:;" data-url="<?php echo url("user/Auth/logout");?>" >
									<span><i class="jy jy-logout"></i></span>
									<span>退出</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</header>
	<!-- /头部 -->

	<section class="content-wrap">
		
		<div class="container user-container mb_20">
			<div class="row">
				
				<div class="col-md-12">
					<div class="personaltop clearfix">
						<ul class="nav nav-tabs">
							<li class="title">个人中心</li>
							<li <?php if(\think\Request::instance()->controller() == 'Account'): ?>class="active"<?php endif; ?>>
								<a title="我的账户" target="_self" href="<?php echo url("user/Account/index");?>">我的账户</a>
							</li>
							<li <?php if(\think\Request::instance()->controller() == 'Profile'): ?>class="active"<?php endif; ?>>
								<a title="个人资料" target="_self" href="<?php echo url("user/Setting/index");?>">个人资料</a>
							</li>
							<li <?php if(\think\Request::instance()->controller() == 'Music'): ?>class="active"<?php endif; ?>>
								<a title="我的音乐" target="_self" href="<?php echo url("user/Music/index");?>">我的音乐</a>
							</li>
							<li <?php if(\think\Request::instance()->controller() == 'Favs'): ?>class="active"<?php endif; ?>>
								<a title="我的收藏" target="_self" href="<?php echo url("user/Fav/index");?>">我的收藏</a>
							</li>
							<li <?php if(\think\Request::instance()->controller() == 'Relation'): ?>class="active"<?php endif; ?>>
								<a title="我的关系" target="_self" href="<?php echo url("user/Relation/index");?>">我的关系</a>
							</li>
							<li  <?php if(\think\Request::instance()->controller() == 'Album'): ?>class="active"<?php endif; ?>>
								<a title="我的专辑" target="_self" href="<?php echo url("user/Album/index");?>">我的专辑</a>
							</li>
							<li  <?php if(\think\Request::instance()->controller() == 'Message'): ?>class="active"<?php endif; ?>>
								<a title="消息中心" target="_self" href="<?php echo url("user/Message/index");?>">消息中心</a>
							</li>

							<li class="reture">
								<a  href="<?php echo url("user/Music/create");?>">分享音乐</a>
							</li>
						</ul>
					</div>
				</div>
				

				<div class="col-md-3">
					<div class="new-warpl">
						<dl class="user-info">
							<dt>
								<img src="<?php echo $user['avatar']; ?>" alt="<?php echo $user['nickname']; ?>">
							</dt>
					      	<dd class="name"><?php echo $user['nickname']; ?></dd>

							<dd class="hy_no">
								<span>
									<p><?php echo $user['follows']; ?></p>
									<p class="pt_10">关注</p>
								</span>

								<span>
									<p><?php echo $user['fans']; ?></p>
									<p class="pt_10">粉丝</p>
								</span>

								<span class="last">
									<p><?php echo $user['songs']; ?></p>
									<p class="pt_10">分享</p>
								</span>
						    </dd>
						</dl>
					</div>
				</div>

				<div class="col-md-9">
					
<div class="tabbable tabbable-custom tabbable-reversed">
	<ul class="nav nav-tabs">
		<li class="active">
			<a data-toggle="tab"  href="#tab_in">基本设置</a>
		</li>
		<li>
			<a data-toggle="tab" id="tab-pwd" href="#tab_pwd">密码设置</a>
		</li>
		<li>
			<a  href="<?php echo url("user/Setting/avatar");?>">头像设置</a>
		</li>
	</ul>
	<div class="tab-content">
		<div class="alert alert-warning avatar-alert alert-dismissable">
			每月能修改<?php echo config('user_send_limit'); ?>次
		</div>
		<div id="tab_in" class="tab-pane active">
			<div class="alert alert-warning d_none"></div>
			<form class="form-horizontal" onsubmit="return false;" action="<?php echo url("user/Setting/update");?>" method="post" id="info-form">
				<div class="form-body">
					<div class="form-group">
						<label class="col-md-3 control-label">用户ID</label>
						<div class="col-md-5">
							<p class="form-control-static"><?php echo $user['uid']; ?></p>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">修改昵称</label>
						<div class="col-md-5">
							<input type="text"  name="nickname" class="form-control" value="<?php echo $user['nickname']; ?>">
							<span class="help-block">昵称：4-32个字符，不能用纯数字或"_"</span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">修改性别</label>
						<div class="col-md-4">
                			<label class="radio-inline">
                                <input type="radio" value="1" <?php if($user['sex'] == '1'): ?>checked="checked"<?php endif; ?> name="sex"> 男
                            </label>
                            <label class="radio-inline">
                                <input type="radio" value="2" <?php if($user['sex'] == '2'): ?>checked="checked"<?php endif; ?>  name="sex"> 女
                            </label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">修改QQ</label>
						<div class="col-md-5">
							<input type="text" name="qq" class="form-control" value="<?php echo $user['qq']; ?>">
						</div>
					</div>

					<div class="form-group form-inline">
						<label class="col-md-3 control-label">修改生日</label>
						<div class="col-md-5">
							<input type="text"  class="form-control" name="birthday" id="birthday" value="<?php echo $user['birthday']; ?>">
							<span class="help-block">格式：1990-10-12</span>
						</div>
					</div>

					<div class="form-group form-inline">
						<label class="col-md-3 control-label">所在地</label>
						<div class="col-md-9">						
							<div id="distpicker">
								<input type="hidden" name="location" value="<?php echo $user['location']; ?>">
							  	<select name="province" data-province="<?php if(is_string($user['province'])): ?><?php echo $user['province']; endif; ?>" class="form-control"></select>
							  	<select name="city"  data-city="<?php if(is_string($user['city'])): ?><?php echo $user['city']; endif; ?>" class="form-control"></select>
							  	<select name="district"  data-district="<?php if(is_string($user['district'])): ?><?php echo $user['district']; endif; ?>" class="form-control"></select>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">自我介绍</label>
	                    <div class="col-md-9">
	                        <textarea class="form-control" name="signature" rows="4" placeholder="请填写签名~~~"><?php echo $user['signature']; ?></textarea>
	                    </div>
	                </div>

					<input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
					<div class="form-group ">
						<div class="col-md-4 col-md-offset-3">
							<button class="btn_8" tagform="#info-form">确认提交</button>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div id="tab_pwd" class="tab-pane">
          	<form class="form-horizontal"  action="<?php echo url("user/Setting/changePwd");?>" id="pwd-form" method="post">
				<div class="form-body">
					<div class="form-group">
						<label class="col-md-3 control-label">旧密码</label>
						<div class="col-md-4">					
							<input type="password" name="oldpassword" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">新密码</label>
						<div class="col-md-4">
							<input type="password" id="inpwd" name="password" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">确认新密码</label>
						<div class="col-md-4">
							<input type="password" name="repassword" class="form-control">
						</div>
					</div>
					<input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
					<div class="form-group ">
						<div class="col-md-4 col-md-offset-3">
							<button class="btn btn-danger" tagform="#pwd-form">确认提交</button>
						</div>
					</div>
				</div>
	    	</form>
		</div>
	</div>
</div>

				</div>

			</div>
		</div>
		
		<!-- /主体 -->
	</section>
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
	<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
		<?php echo config('web_site_stat'); ?>
		
	</div>
</div>
<script type="text/javascript" src="/public/static/libs/jymusic/js/app.js"></script>
<script type="text/javascript" src="/resources/web/default/assets/js/uplugs.js"></script>
<script type="text/javascript" src="/resources/web/default/assets/js/user.js?v=1.0"></script>

<script src="/public/static/libs/distpicker/distpicker.min.js"></script>
<script type="text/javascript">
$().ready(function() {
	$("#distpicker").distpicker({
	  	province: "---- 所在省 ----",
	  	city: "---- 所在市 ----",
	  	district: "---- 所在区 ----"
	});

	if (location.hash == '#tab_pwd'){
		$('#tab-pwd').click();
	}
	$("#info-form").validate({
		rules: {
			nickname:{
				required: true,
				rangelength:[4,32]
			},
			qq: {
				required: true,
				digits: true
			},
			province:{
				required: true,
			},
			city:{
				required: true,
			}
		},
		messages: {
			nickname: {
				required: '昵称不能为空',
				rangelength:'昵称长度4-32个字符'
			},
			qq: {
				required: "请填写QQ号",
				digits: "请输入正确的QQ号"
			},
			province:{
				required: '请选择所在省',
			},
			city:{
				required: '请选择所在市',
				digits: '请正确选择所在市'
			}
		}
	});

	$("#pwd-form").validate({
		rules: {
			oldpassword:{
				required: true,
				rangelength:[5,30]
			},
			password: {
				required: true,
				rangelength:[6,30]
			},
			repassword:{
				equalTo: '#inpwd'
			}
		},
		messages: {
			oldpassword: {
				required: '原密码不能为空',
				rangelength:'密码长度6-30个字符'
			},
			password: {
				required: '新密码不能为空',
				rangelength:'密码长度6-30个字符'
			},
			repassword:{
				equalTo:'两次密码输入不一致'
			}
		}
	});

});
</script>

</body>
</html>
