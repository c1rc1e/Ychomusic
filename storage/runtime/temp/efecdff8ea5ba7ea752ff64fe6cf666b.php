<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:66:"D:\PHPTutorial\WWW\resources\web\default\user\musician_create.html";i:1512464998;s:64:"D:\PHPTutorial\WWW\resources\web\default\user\public_common.html";i:1502370209;s:62:"D:\PHPTutorial\WWW\resources\web\default\user\public_head.html";i:1540551672;s:64:"D:\PHPTutorial\WWW\resources\web\default\user\public_footer.html";i:1540552004;}*/ ?>
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
        <li>
            <a href="<?php echo url("user/Account/upgrade");?>"> 升级用户组</a>
        </li>
		<li class="active">
			<a href="javascript:;">认证音乐人</a>
		</li>
	</ul>
	<div class="tab-content">
		<div id="tab_in" class="tab-pane active">
			<?php if(!empty($musician)): if($musician['status'] == 2): ?>
				<div class="alert alert-warning">
					<p>你的认证正在审核中，请耐心等待...</p>
				</div>
				<?php elseif($musician['status'] == 0): ?>
				<div class="alert alert-danger">
					<p>音乐人认证失败！</p>
				</div>
				<?php else: ?>
				<div class="alert alert-success">
					<p>你已经成功认证为音乐人</p>
				</div>
				<?php endif; else: ?>
			<div class="alert alert-warning">
				<p>感谢你申请认证音乐人，确保你填写的信息真实有效否者不予通过</p>
				<p>认证通过后认证资料将无法修改</p>
			</div>
			<form class="form-horizontal" action="<?php echo url("user/Musician/save");?>" onsubmit="return false;" method="post" id="auth-form">
				<div class="form-body">
				    <div class="form-group">
				    	<label class="col-lg-3 control-label">
				    		音乐人名称<b class="text-danger">*</b>
				    	</label>
                    	<div class="col-lg-4">
							<input type="text" name="artist_name" value="<?php echo (isset($data['artist_name']) && ($data['artist_name'] !== '')?$data['artist_name']:$user['nickname']); ?>" class="form-control">									
						</div>                           
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">认证类型</label>
                        <div class="col-sm-4">
                            <select name="type" class="form-control" >
                                <option selected='selected' value=" ">选择艺人类型</option>
                                <?php $_result=get_artist_types();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$at): $mod = ($i % 2 );++$i;?>
                                <option <?php if(isset($info['type'])): if($info['type'] == $at['id']): ?> selected='selected'<?php endif; endif; ?> value="<?php echo $at['id']; ?>"><?php echo $at['name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>

				    <div class="form-group">
				    	<label class="col-lg-3 control-label">
				    		真实姓名<b class="text-danger">*</b>
				    	</label>
                    	<div class="col-lg-4">
							<input type="text" name="realname" value="<?php echo (isset($data['realname']) && ($data['realname'] !== '')?$data['realname']:''); ?>" class="form-control">
							<span class="help-block">请保证姓名真实有效</span>										
						</div>                           
                    </div>
					
					<div class="form-group">
                   		<label class="col-lg-3 control-label">
                   			身份证号码<b class="text-danger">*</b>
                   		</label>
                    	<div class="col-lg-4">
							<input type="text" name="idcard" value="<?php echo (isset($data['idcard']) && ($data['idcard'] !== '')?$data['idcard']:''); ?>" class="form-control">										
						</div>                           
                    </div>

		            <div class="form-group">
                        <label class="col-md-3 control-label">
                        	身份证正面照片<b class="text-danger">*</b>
                        </label>
                        <div class="col-md-8">
                        	<div id="cover-view"><?php if(isset($data['idcard_img1'])): ?><img height="80" src="<?php echo $data['cover_url']; ?>"><?php endif; ?></div>
                            <div class="bootstrap-filestyle input-group" id="cover-upload-warp">
                                <input type="text" id="attach-file-path" name="idcard_img1" class="form-control" value="<?php echo (isset($data['idcard_img1']) && ($data['idcard_img1'] !== '')?$data['idcard_img1']:''); ?>" placeholder="">
                                <span class="input-group-btn">
                                    <label class="btn btn-default fileinput-button" style="padding: 7px 12px;">
                                        <span class="icon-span-filestyle glyphicon glyphicon-folder-open"></span>
                                        <?php if(isset($data['idcard_img1'])): ?>
										<span class="buttonText">重新上传</span>
                                        <?php else: ?>
                                        <span class="buttonText">选择文件</span>
                                        <?php endif; ?>
                                        <input id="upload-cover" type="file" name="files[]" multiple
                                        data-file-type="image"
                                        data-upload-type="attach"
                                        data-call="imageCall"
                                        data-target-path="#attach-file-path">
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
		            
                   	<div class="form-group">
                   		<label class="col-lg-3 control-label">
                   			手机号码<b class="text-danger">*</b>
                   		</label>
                    	<div class="col-lg-4">
							<input type="text" name="phone" value="<?php echo (isset($data['phone']) && ($data['phone'] !== '')?$data['phone']:''); ?>" class="form-control">	
							<span class="help-block">请填写你的手机</span>							
						</div>                           
                    </div>

                    <div class="form-group form-inline">
						<label class="col-md-3 control-label">
							所在地<b class="text-danger">*</b>
						</label>
						<div class="col-md-9">
							<div id="distpicker">
								<input type="hidden" name="member[location]" value="<?php echo $user['location']; ?>">
								<select name="member[province]" data-province="<?php if(is_string($user['province'])): ?><?php echo $user['province']; endif; ?>" class="form-control"></select>
								<select name="member[city]"  data-city="<?php if(is_string($user['city'])): ?><?php echo $user['city']; endif; ?>" class="form-control"></select>
								<select name="member[district]"  data-district="<?php if(is_string($user['district'])): ?><?php echo $user['district']; endif; ?>" class="form-control"></select>
							</div>
						</div>
					</div>
					
					<input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
                    <div class="form-group">
						<label class="col-md-3 control-label">
							认证理由<b class="text-danger">*</b>
						</label>
	                    <div class="col-md-9">
	                       <textarea class="form-control" name="reason" rows="6" placeholder=""><?php echo (isset($data['reason']) && ($data['reason'] !== '')?$data['reason']:''); ?></textarea>
	                       <span class="help-block">填写认证补充说明</span>
	                    </div>
	                </div>

					<div class="form-group ">
						<div class="col-md-4 col-md-offset-3">
							<button class="btn btn-danger" tagform="#auth-form">确认提交</button>
						</div>
					</div>
				</div>
			</form>
			<?php endif; ?>
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
$.validator.setDefaults({
	submitHandler: function(form) {
		postForm(form);
		return false;		
	}
});
$().ready(function() {
	$("#distpicker").distpicker({
	  	province: "---- 所在省 ----",
	  	city: "---- 所在市 ----",
	  	district: "---- 所在区 ----"
	});
	$("#auth-form").validate({
		rules: {
			artist_name:{
				required: true,
				rangelength:[2,32]
			},
			type:{
				required: true,
				digits: true
			},
			realname:{
				required: true,
				rangelength:[2,32]
			},
			idcard: {
				required: true,
			},
			phone:{
				required: true,
				digits: true
			},
			idcard_img1:{
				required: true,
				rangelength:[10,255]
			},
			reason:{
				required: true,
				rangelength:[10,255]
			}
		},
		messages: {
			artist_name: {
				required: '真实姓名不能为空',
				rangelength:'真实姓名长度2-32个字符'
			},
			type:{
				required: '请选择认证的音乐人类型',
				digits: '请选择认证的音乐人类型'
			},
			realname: {
				required: '真实姓名不能为空',
				rangelength:'真实姓名长度2-32个字符'
			},
			idcard: {
				required: "身份证号码不能为空",
			},
			phone:{
				required: '请填写手机号码',
				digits: '手机号码不正确'
			},
			idcard_img1:{
				required: '请上传身份证照片',
				rangelength:'请上传身份证照片'
			},
			reason:{
				required: '认证理由不能为空',
				rangelength:'认证理由长度10-255个字符'
			}
		}
	});
});
var imageCall = function(res) {
	var file = res.files[0];
	if (file.code == 0) {
		$('#cover-view').html('<img height="80" src="'+file.filepath+'">');
		$('#cover-upload-warp').hide();
	}
}
</script>
<?php echo hook('file', ['wiget'=>'Uplaod', 'element' => ['#upload-listen','#upload-cover']]); ?>

</body>
</html>
