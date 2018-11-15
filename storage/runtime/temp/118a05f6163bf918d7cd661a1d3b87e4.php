<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"D:\PHPTutorial\WWW\resources\web\default\user\auth_pact.html";i:1502218637;s:62:"D:\PHPTutorial\WWW\resources\web\default\user\public_head.html";i:1540551672;}*/ ?>
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

                    <ul class=" clearfix users_nav mt_15">
                        <li class="user-show">
                            <a href="<?php echo url("user/Auth/signup");?>" class="reg_btn btn_8" >注册</a>
                        </li>
                    </ul>

                </div>
            </div>
        </section>
    </header>
    <div class="wide_layout relative w_xs_auto">
		<div class="page_content_offset">
			<div class="container">	
				<div class="row clearfix">
					<!--搜索列表-->			
					<section class="col-sm-10 col-sm-offset-1" style="line-height:24px">
						<h2 class="text-center mt_20 mb_20"><?php echo config('web_site_name'); ?>服务协议</h2>
						<hr>
						<?php  
						$webname = '<b>'.  config('web_site_name') .'</b>';
						 ?>
					
						<p class="text-warning">请仔细阅读本“使用协议” （以下亦称“本协议”）条款，如你（亦称“用户”）阅读后通过点选本协议下方的“同意”按钮而自愿接受本协议的约束，本协议就构<?php echo $webname; ?>直接有约束力的法律文件.</p>
							<br>
							<br>
							1. 为使用<?php echo $webname; ?>服务上载、传播内容，你必须已经仔细阅读并接受“使用协议”，并且已注册一个有效的、经合法授权的帐号。你对所有上载到<?php echo $webname; ?>上的内容，无论是否由你本人或代表你所创作，负完全的法律责任。 你保证不在<?php echo $webname; ?>上载、传播任何包含淫秽、色情、侵权、反动或其他非法内容的视频及资料。 在使用<?php echo $webname; ?>服务的过程中，你必须始终遵守“使用协议”及其后续不时修订之版本。
							<br>
							<br>2. 用户在<?php echo $webname; ?>上传或发布原创作品及转载作品的，用户保证其对该等作品享有合法著作权/版权或者相应授权，并且用户同意授予<?php echo $webname; ?>对所有上述作品和内容的在全球范围内的免费、不可撤销的、无限期的、并且可转让的非独家使用权许可，<?php echo $webname; ?>有权展示、散布及推广上述作品；
							<br>
							<br>3. 你不得使用<?php echo $webname; ?>提供的服务进行任何非法、淫秽、色情及其他违反公序良俗之活动，包括但不限于非法传销、诈骗、侵权及反动活动等，<?php echo $webname; ?>有权依据自己的独立判断在不事先通知的情况下立即删除此类活动的相关内容、停止从事此类活动的帐号使用；用户在使用<?php echo $webname; ?>服务时必须符合中国有关法规以及其他有关国家和地区的法律规定以及国际法的有关规定。用户不得利用<?php echo $webname; ?>服务制作、发表、复制、传送、传播、储存 违反中国有关的法律和法规的信息，不得为任何非法目的而使用网络服务系统，遵守所有与网络服务有关的网络协议、规定和程序<br>
							<br>4. <?php echo $webname; ?>提供的部分网络服务为收费的网络服务，用户使用收费网络服务需要向<?php echo $webname; ?>支付一定的费用。对于收费的网络服务，<?php echo $webname; ?>会在用户使用之前给予用户明确的提示，只有用户根据提示确认其愿意支付相关费用，用户才能使用该等收费网络服务。如用户拒绝支付相关费用，则<?php echo $webname; ?>有权不向用户提供该等收费网络服务
							<br>
							<br> 5.  <?php echo $webname; ?>无须对任何用户的任何登记资料承担任何责任，包括但不限于鉴别、核实任何登记资料的真实性、正确性、完整性、适用性及/或是否为最新资料的责任。
							<br>
							<br>
							6.<?php echo $webname; ?>对于任何自<?php echo $webname; ?>而获得的信息、内容或者广告宣传等任何资讯，不保证真实、准确和完整性。如果任何单位或者个人通过上述信息而进行任何行为，须自行甄别真伪和谨慎预防风险，否则，无论何种原因，<?php echo $webname; ?>不对任何非与<?php echo $webname; ?>直接发生的交易和/或行为承担任何直接、间接、附带或衍生的损失和责任!
							<br>
							<br>
							<b class="text-danger">特别提示：</b><p class="text-danger">你在进行注册之前，请确保你本人已经完全理解并接受本协议所有条款（尤其是免责条款），否则请不要注册。一旦你正式注册，则表明你已经完全理解并接受本协议所有条款，尤其是免责和责任限制条款。
							<p>
						
					</section>

				</div>
			</div>
		</div>
	</div>
</body>
</html>
