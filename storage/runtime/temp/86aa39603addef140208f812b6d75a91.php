<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:66:"D:\PHPTutorial\WWW\resources\web\default\user\account_upgrade.html";i:1502490467;s:64:"D:\PHPTutorial\WWW\resources\web\default\user\public_common.html";i:1502370209;s:62:"D:\PHPTutorial\WWW\resources\web\default\user\public_head.html";i:1540551672;s:64:"D:\PHPTutorial\WWW\resources\web\default\user\public_footer.html";i:1540552004;}*/ ?>
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
		<li>
			<a href="<?php echo url("user/Account/index");?>">账户总览</a>
		</li>
		<li>
			<a href="<?php echo url("user/Charge/index");?>">金币充值</a>
		</li>
		<li class="active">
			<a href="javascript:;"> 升级用户组</a>
		</li>
		<li>
			<a href="<?php echo url("user/Musician/auth");?>"> 认证音乐人</a>
		</li>
	</ul>
	<div class="tab-content clearfix">
		<p class="mb_10">你的余额：
            <span class="d_inline_b ml_10 text-danger"><?php echo $user['coin']; ?></span>
			<a class="ml_10 text-info" href="<?php echo url("user/Charge/index");?>">[充值]</a>
        </p>

		<div class="vip-select clearfix">
			<div class="form-group">
				<label class="col-md-2 control-label">选择类型</label>
				<div class="col-md-6">
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $__JYLIST__ = $list;if( count($__JYLIST__)==0 ) : echo "" ;else: $gi=0; foreach($__JYLIST__ as $key=>$vo): ++$gi; ?>
                    <label class="radio-inline">
                    <?php if(isset($list[$user['group']['id']])): ?>
                        <input type="radio" value="<?php echo $vo['id']; ?>" <?php if($user['group']['id'] == $vo['id']): ?>checked="checked"<?php endif; ?> name="group_id"><?php echo $vo['name']; else: ?>
                        <input type="radio" value="<?php echo $vo['id']; ?>" <?php if($gi == '1'): ?>checked="checked"<?php endif; ?> name="group_id"><?php echo $vo['name']; endif; ?>
                    </label>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
            <div class="tab-content group-content clearfix">
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $__JYLIST__ = $list;if( count($__JYLIST__)==0 ) : echo "" ;else: $ti=0; foreach($__JYLIST__ as $key=>$vo): ++$ti; if(isset($list[$user['group']['id']])): ?>
                <div class="tab-pane fade<?php if($user['group']['id'] == $vo['id']): ?> active in<?php endif; ?>" id="group-<?php echo $vo['id']; ?>">
                <?php else: ?>
                <div class="tab-pane fade<?php if($ti == '1'): ?> active in<?php endif; ?>" id="group-<?php echo $vo['id']; ?>">
                <?php endif; ?>
                    <div class="row clearfix mt_20 mb_15">
                        <label class="col-md-2 control-label">
                            <?php if($user['group']['id'] == $vo['id']): ?>续费<?php else: ?>购买<?php endif; ?>
                        </label>
                    </div>
                    <ul class="package-list clearfix">
                        <li data-type="month_coin" class="item active">
                            <a href="javascript:void(0);">
                                <b class="amount">一个月</b>
                                <b class="price"><?php echo $vo['rule']['month_coin']; ?>金币</b>
                            </a>
                        </li>

                        <li  data-type="half_year_coin" class="item">
                            <a href="javascript:void(0);">
                                <b class="amount">半年</b>
                                <b class="price"><?php echo $vo['rule']['half_year_coin']; ?>金币</b>
                            </a>
                        </li>

                        <li data-type="year_coin" class="item">
                            <a href="javascript:void(0);">
                                <b class="amount">一年</b>
                                <b class="price"><?php echo $vo['rule']['year_coin']; ?>金币</b>
                            </a>
                        </li>
                    </ul>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

		</div>

		<div class="vip-select clearfix">
			<div class="vip-content">
				<form class="form-horizontal" action="<?php echo url("user/Account/upgrade");?>" method="post" id="pay-vip-form">
					<input type="hidden" name="pay_type" value="month_coin" />
                    <input type="hidden" name="pay_group" value="" />
					<button class="btn btn-danger" id="pay-vip-btn">确认提交</button>
				</form>
			</div>
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

<script type="text/javascript">
$(function(){
	$('.package-list').find('li').click(function(){
		var payType = $(this).attr('data-type');
		$('input[name=pay_type]').val(payType);
		$(this).addClass('active').siblings().removeClass('active');
	});

	$('#pay-vip-btn').click(function(){
		postForm('#pay-vip-form');
		return	false;
	});
    $('input[name=pay_group]').val($('input[name=group_id]:checked').val());

	$('input[name=group_id]').change(function () {
        var id = $(this).val();
        $('input[name=pay_group]').val(id);
        $('#group-' + id).addClass('active in').siblings().removeClass('active in');
    });
})
</script>

</body>
</html>
