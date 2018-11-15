<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:61:"D:\PHPTutorial\WWW\resources\web\default\user\index_fans.html";i:1502218637;s:63:"D:\PHPTutorial\WWW\resources\web\default\user\index_common.html";i:1522921022;s:62:"D:\PHPTutorial\WWW\resources\web\default\user\public_head.html";i:1540551672;s:64:"D:\PHPTutorial\WWW\resources\web\default\user\public_footer.html";i:1540552004;}*/ ?>
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
		<!--头顶部-->
	<section class="h_top hidden-xs">
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-3 col-sm-4 ">
					<a href="<?php echo url('/'); ?>" class="pull-left logo mt_15">
						<img src="/resources/web/default/assets/images/logo.png" alt="JYmusic">
					</a>
				</div>
				<div class="col-md-5 col-sm-8 t_align_c ">
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
				<div class="col-lg-4 col-md-4 t_align_c d_xs_none">

					<ul class=" clearfix users_nav">
						<li class="user-show">
							<span><i class="jy jy-login"></i></span>
							<span >
								<a href="<?php echo url("user/Auth/login");?>" class=" user-show" id="login_btn">登录</a>
								|
								<a href="<?php echo url("user/Auth/signup");?>" class="reg_btn" >注册</a>
							</span>
						</li>
						<li class="user-hide">
							<span><i class="jy jy-user"></i></span>
							<span id="user-info"></span>
						</li>

						<li>
							<a href="<?php echo url("user/Music/create");?>" class="reg_btn" >
								<span><i class="jy jy-cloud-up"></i></span>
								<span>上传</span>
							</a>
						</li>
						<li>
							<a href="<?php echo url("user/Musician/auth");?>" class="reg_btn" >
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
							<a href="<?php echo url("user/Account/index");?>">
								<span><i class="jy jy-edit"></i></span>
								<span>中心</span>
							</a>
						</li>
						<li id="login_out" class="user-hide">
							<a href="javascript:;" url="<?php echo url("/logout","",true,false);?>">
								<span><i class="jy jy-logout"></i></span>
								<span>退出</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- /头部 -->	
	<section class="content-wrap">
		<div class="zoom-header">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="avatar">
							<img class="a_cover" alt="<?php echo $user['nickname']; ?>" src="<?php echo get_user_avatar($user['uid']); ?>">
						</div>
						<div class="uinfo">
							<h2 class="">
								<?php echo $user['nickname']; ?>
								<img height="20" src="<?php echo $user['group']['icon_url']; ?>">
							</h2>
							<div><?php echo $user['signature']; ?></div>
							<div class="ubtn">							
								
								<a class="btn btn-default on" id="btn-unfollow" style="display: none" data-action="follow" data-uid="<?php echo $user['uid']; ?>">
									<i class="jy jy-user-add on"></i>
									已关注
								</a>		
								<a class="btn btn-default" id="btn-follow"  data-action="follow" data-uid="<?php echo $user['uid']; ?>">
									<i class="jy jy-user-add"></i>
									关注
								</a>
								<?php if(UID != $user['uid']): ?>
								<a class="btn btn-default" data-toggle="modal" data-target="#msgModal" data-whatever="@<?php echo $user['nickname']; ?>">
									<i class="jy jy-edit-f"></i>
									私信
								</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<ul class="clearfix list-ucount">
							<li>
								<strong><?php echo $user['hits']; ?></strong>
								<p>人气</p>
							</li>
							<li>
								<strong><?php echo $user['fans']; ?></strong>
								<p>粉丝</p>
							</li>
							<li class="last">
								<strong class="album-count"><?php echo $user['songs']; ?></strong>
								<p>歌曲</p>
							</li>
							<li class="last">
								<strong class="album-count"><?php echo $user['albums']; ?></strong>
								<p>专辑</p>
							</li>
						</ul>

						<div class="ufx">
							<?php echo hook('pageBody',array('widget'=>'Baidushare')); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container zoom-inner">
			<div class="tabbable-custom zoom-nav">
				<ul class="nav nav-tabs">
					<li <?php if(\think\Request::instance()->action() == 'read'): ?> class="active"<?php endif; ?>>
						<a href="<?php echo url("user/Index/read", ["uid" => $user["uid"]]);?>">首页</a>
					</li>
					<li <?php if(\think\Request::instance()->action() == 'music'): ?> class="active"<?php endif; ?>>
						<a href="<?php echo url("user/Index/music", ["uid" => $user["uid"]]);?>">分享</a>
					</li>
					<li <?php if(\think\Request::instance()->action() == 'album'): ?> class="active"<?php endif; ?>>
						<a href="<?php echo url("user/Index/album", ["uid" => $user["uid"]]);?>">专辑</a>
					</li>
					<!--li <eq name="ACTION_NAME" value="profile"> class="active"</eq>>
						<a href="<?php echo url('home/profile?uid='.$user['uid']); ?>">资料</a>
					</li-->
					<li <?php if(\think\Request::instance()->action() == 'fans'): ?> class="active"<?php endif; ?>>
						<a href="<?php echo url("user/Index/fans", ["uid" => $user["uid"]]);?>">粉丝</a>
					</li>
				</ul>
			</div>
			
<div class="row">
	<?php $param = []; $param["status"]=1;$param["result"] = "v";$param["uid"] = $user["uid"];$param["limit"] = 60;$memberModel = isset($memberModel)?$memberModel:new \app\common\model\Member();$__MUSIC__ = $memberModel->getFans($param);if(is_array($__MUSIC__) || $__MUSIC__ instanceof \think\Collection || $__MUSIC__ instanceof \think\Paginator): $__JYLIST__ = $__MUSIC__;if( count($__JYLIST__)==0 ) : echo "<p class='text-center'>暂无数据</p>" ;else: $i=0; foreach($__JYLIST__ as $key=>$v): ++$i; ?>
	<div class="col-sm-2">
		<div class="image">
			<a href="<?php echo $v['url']; ?>">
				<img alt="" src="<?php echo $v['avatar']; ?>"></a>
			</div>
		<div class="name"><a href="<?php echo $v['url']; ?>"><?php echo $v['nickname']; ?></a></div>		
	</div>
	<?php endforeach; endif; else: echo "<p class='text-center'>暂无数据</p>" ;endif; ?>
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

<?php if(UID != $user['uid']): ?>
<div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    <h4 class="modal-title" id="exampleModalLabel">发送私信到@<?php echo $user['nickname']; ?></h4>
			</div>
			<div class="modal-body">
			    <form action="<?php echo url('msgcenter/send'); ?>" method="post" id="msg-form">
					<input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
			        <div class="form-group">
			            <label for="message-text" class="control-label">消息内容:</label>
			            <textarea class="form-control" name="content" id="message-text"></textarea>
			        </div>
			        <input type="hidden" class="form-control" name="to_uid" value="<?php echo $user['uid']; ?>">
					<div class="form-group">
			 			<button type="submit" tagform="#msg-form" class="btn btn-success">提交</button>
			 		</div>
			    </form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$().ready(function() {
	$("#msg-form").validate({
		rules: {
			content:{
				required: true,
				rangelength:[2,400]
			},
			to_id: {
				required: true,
				digits: true
			}

		},
		messages: {
			content: {
				required: '信息不能为空',
				rangelength:'信息长度2-400个字符'
			},
			to_uid: {
				required: "无效操作",
				digits: "无效操作"
			}

		}
	});
});
</script>
<?php endif; ?>
<script type="text/javascript" src="/public/static/libs/jymusic/js/app.js"></script>
<script type="text/javascript" src="/resources/web/default/assets/js/uplugs.js"></script>
<script type="text/javascript" src="/resources/web/default/assets/js/user.js?v=1.0"></script>
<script type="text/javascript">
$.App.activeUser(function(res){
    if (res.code == 0) {
        var user = res.result;
        $('#user-info').html('<a href="' + user.url + '">' + user.nickname + '</a>');
        $('#upage-url').attr('href', user.url);
        $('.user-show').hide();
        $('.user-hide').show();
        if ($('.login_btn').size() > 0) {
            $('.login_btn').addClass('disabled').prop('disabled', true);
        }
    }
    return false;
});

if ($.App.isLogin) {
	var followId = $('#btn-follow').data('id');
	$.post($.Url.build('/api/actions/isfollow'), {follow_uid : followId}, 
		function(res){
		    if (res.is_follow) {
		    	$('#btn-follow').hide();
		        $('#btn-unfollow').show();
		    } else {
		        $('#btn-unfollow').hide();
		        $('#btn-follow').show();
		    }
		    return false;
		}
	); 
}
</script>


</body>
</html>
