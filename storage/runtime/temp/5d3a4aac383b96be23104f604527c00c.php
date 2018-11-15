<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"D:\PHPTutorial\WWW\resources\web\default\user\auth_signup.html";i:1502218637;s:62:"D:\PHPTutorial\WWW\resources\web\default\user\public_head.html";i:1540551672;s:64:"D:\PHPTutorial\WWW\resources\web\default\user\public_footer.html";i:1540552004;}*/ ?>
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

<body>
    <!--头顶部-->
    <header class="header">
        <section class="h_top hidden-xs">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-3 col-sm-4 ">
                        <a href="<?php echo url('/'); ?>" class="pull-left logo mt_15">
                            <img src="/resources/web/default/assets/images/logo.png" alt="JYmusic">
                        </a>
                    </div>
                    <div class="col-md-5 col-sm-8 t_align_c">
                        <div class="search-box mt_15">
                            <form role="search" class="relative type_2" id="search_form" method="get" action="<?php echo url("home/Search/index");?>">
                                <input type="text" class="d_none" name="type" value="songs">
                                <input type="text" class="full_width" name="keys" placeholder="搜索">
                                <button class="search_button tr_all_hover">
									<i class="jy jy-search"></i>
								</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 t_align_c d_xs_none">

                    <ul class=" clearfix users_nav mt_15">
                        <li>
                            <a href="<?php echo url("user/Auth/login");?>" class="btn_8" id="login_btn">登录</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </header>
    <!-- /头部 -->
    <!--布局-->
    <div class="wide_layout relative w_xs_auto">
        <div class="page_content_offset">
            <div class="container">
                <div class="row clearfix">
                    <!--left content column-->
                    <section class="col-sm-6 col-sm-offset-3 login-box">
                        <h2 class="mb_25"><i class="jy jy-unlock mr_20"></i>用户注册</h2>
                        <hr>
                        <p class="mb_10">请完整填写以下信息进行注册。<span class="scheme_color">*</span></p>
                        <form class="form-horizontal no-refresh" method="post" id="signup-form" action="<?php echo url("user/Auth/createUser");?>" onsubmit="return false">
                            <div class="form-group">
                                <label class="col-lg-2 control-label">用户名<span class="scheme_color">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" name="username" class="form-control" required placeholder="4-15个字母、数字等字符">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label">邮箱<span class="scheme_color">*</span></label>
                                <div class="col-lg-8">
                                    <input type="email" name="email" class="form-control" required placeholder="请使用正确的E-mail">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label">密码<span class="scheme_color">*</span></label>
                                <div class="col-lg-8">
                                    <input type="password" id="input-password" class="form-control" name="password" required placeholder="6~18个字符,区分大小写">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label">确认密码<span class="scheme_color">*</span></label>
                                <div class="col-lg-8">
                                    <input type="password" name="repassword" class="form-control" required placeholder="确认密码必须与密码相同">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">验证码<span class="scheme_color">*</span></label>
                                <div class="col-lg-8">
                                    <div class="verify-wrp">
                                        <input type="text" class="form-control" required placeholder="请输入验证码" name="verify">
                                        <img class="verifyimg reloadverify" alt="点击切换" src="<?php echo url("user/Auth/captcha");?>" style="cursor:pointer;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2"></label>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2"></label>
                                <input type="checkbox" id="ais_agree" name="ais_agree" value="on">
                                <label for="checkbox_4">我接受 <a class="color-blue" href="<?php echo url("user/Auth/pact");?>" target="_blank">《<?php echo config('web_site_name'); ?>服务协议》</a></label>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-1 col-sm-10">
                                    <button class="btn_8 mr_20" type="submit">立即注册</button>或者使用第三方登录
                                    <a class="sina-btn " href="<?php echo url("user/oauth/index", ["driver"=>"weibo"]);?>" class="color_dark"><i class="jy jy-sina"></i></a>
                                    <a class="qq-btn" href="<?php echo url("user/oauth/index", ["driver"=>"qq"]);?>" class="color_dark"><i class="jy jy-qq"></i></a>
                                </div>
                            </div>

                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
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
    <script type="text/javascript" src="/public/static/libs/jymusic/js/app.js"></script>
    <script type="text/javascript" src="/public/static/libs/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $.validator.setDefaults({
            submitHandler: function(form) {
                if (!$('#ais_agree').is(':checked')) {
                    $.Notify.msg('请接受协议');
                    return false;
                }
                $.Action.postForm(form, function(res){
                    if (res.code !== 0) {
                        //刷新页面 重新获取token
                        /*setTimeout(function(){
                            window.location.reload();
                        }, 3000)  */
                    }
                });
            }
        });
        $.App.testPwd($('#input-password'));

        $("#signup-form").validate({
            rules: {
                username: {
                    required: true,
                    rangelength: [4, 15],
                    remote: "<?php echo url('user/Auth/validation', ['field' => 'username']); ?>",
                },
                email: {
        			required: true,
        			email: true,
                    remote: "<?php echo url('user/Auth/validation', ['field' => 'email']); ?>",
        		},
                password :{
                    required: true,
                    rangelength:[6,30],
                },
                repassword: {
                    required: true,
                    equalTo: "#input-password"
                },
                verify : "required"
            },
            messages: {
                username: {
                    required: '用户名不能为空',
                    rangelength: '用户名长度4-15个字符',
                    remote :  '用户名被占用'
                },
        		email: {
        			required: "请填写常用邮箱地址",
        			email: "邮箱地址格式不正确",
                    remote: '邮箱已使用'
        		},
                password :{
                    required: '密码不能为空',
                    rangelength: '密码长度6-30个字符',
                },
                repassword: {
                    required: '确认密码不能为空',
                    rangelength: '确认密码长度6-30个字符',
                    equalTo : '两次密码输入不一致'
                },
                verify : "验证码不能为空"
            }
        });

        $(function(){
        	var verifyimg = $(".verifyimg").attr("src");
        	$(".reloadverify").click(function(){
        		if( verifyimg.indexOf('?')>0){
        			$(".verifyimg").attr("src", verifyimg+'&random='+Math.random());
        		}else{
        			$(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
        		}
        	});
        });
    </script>
</body>
</html>
