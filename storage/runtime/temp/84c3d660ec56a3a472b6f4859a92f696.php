<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"D:\PHPTutorial\WWW\JYmusic/app/install\view\index\index.html";i:1501945284;s:60:"D:\PHPTutorial\WWW\JYmusic\app\install\view\public\base.html";i:1501967989;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>JYmusic安装程序</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Le styles -->
        <link href="/JYmusic/public/static/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="/JYmusic/public/static/libs/jymusic/css/jy.css" rel="stylesheet">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="/JYmusic/public/static/libs/html5shiv-printshiv.min.js"></script>
        <![endif]-->
        <script src="/JYmusic/public/static/libs/jquery/jquery-1.10.2.min.js"></script>
        <script type="text/javascript">
            (function() {window.JY = {"root": "<?php echo \think\Request::instance()->root(); ?>","public": "/JYmusic/public","deep": "<?php echo config('pathinfo_depr'); ?>","model": [<?php echo config('url_model'); ?>, "<?php echo config('url_html_suffix'); ?>"]}})();
        </script>
        <script src="/JYmusic/public/static/libs/jymusic/js/app.js"></script>
        <style>
            body {
                font: 14px "microsoft yahei", Helvetica, Tahoma, Arial, sans-serif;
            }
            .container .jumbotron {
                padding: 20px;
            }
            .jumbotron p {
                font-size: 14px;
                line-height:20px;
                color:#292f38;
            }
            .jumbotron p.info {
                color: #31b0d5;
            }
            .jy-check, .jy-del {
                font-size: 18px;
                font-weight: bold;
            }
            .jumbotron p.success,
            .jy-check {
                color: #5cb85c;
            }
            .jumbotron p.error,
            .jy-del {
                color:#c9302c;
            }
            .install-database {
                max-height: 400px;
                overflow: auto;
            }
        </style>
    </head>

    <body>
    	<div class="container">
    		<div class="page-header">
        		<h3>
					<a href="http://jyuu.cn/">
					<img height="50" src="/JYmusic/public/static/images/logo.png"></a>
					<span>在线安装</span>
				</h3>
      		</div>
      		
	      	<div class="row">
	        	<div class="col-md-4 left-info">
	        		
<h4>安装进度</h4>
	<hr>
	<div class="progress">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
		安装协议
		</div>
	</div>
		
	<div class="bs-example">
	    <ol style="margin-bottom: 5px;" class="breadcrumb">
	      	<li class="active">协议</li>
	      	<li><a href="javascript:;">检测</a></li>
	      	<li><a href="javascript:;">配置</a></li>
	      	<li><a href="javascript:;"><eq name="Think.session.update" value="1">升级<else/>安装</eq></a></li>
	      	<li><a href="javascript:;">完成</a></li>
	    </ol>
	</div>

				  	<hr>
				  	
  	<p>
    	<a role="button" href="<?php echo url('index/step1'); ?>" class="btn btn-success">同意并安装</a>
    	<a role="button" href="http://www.jyuu.cn" class="btn btn-danger">退出安装</a>			        	
    </p>

	        	</div>
	        	<div class="col-md-8">
	        		<div class="jumbotron">
	        		
    <h3>安装协议</h3>
    <p class="text-lowercase">
    	感谢您选择JYmusic音乐程序，希望我们的努力能为您提供一个高效快速、强大的站点解决方案。
    	为了你正确并合法使用本程序，请在使用前务必阅读并理解下面的协议条款：<br><br>
    	一、一旦你同意将被视为完全接受本协议。 JYmusic官方拥有本协议的最终解释权！<br><br>
    	二、 协议许可的权利<br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;1. 本协议是您与JYmusic之间关于您使用本产品及服务的法律协议。只要使用JYmusic 的整体或任何部分，未经书面许可，页面页脚处的版权标识（Powered by JYmusic© 2014-<?php echo date('Y'); ?> 保留所有权利） 和JYmusic官方网站（http://www.jyuu.cn）的链接都必须保留，而不能清除或修改。<br><br>
		
		&nbsp;&nbsp;&nbsp;&nbsp;2.本服务条款一旦发生变更, JYmusic将在官网上公布修改内容。修改后的服务条款一旦在网站公布即有效代替原来的服务条款。您可随时登陆官网查阅最新版服务条款。<br><br>
								
		&nbsp;&nbsp;&nbsp;&nbsp;3.您从应用中心下载的应用程序，未经应用程序开发者/所有者的书面许可，不得对其进行反向工程、反向汇编、反向编译等，不得擅自复制、修改、链接、转载、汇编、发表、出版、发展与之有关的衍生产品、作品等。<br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;4.如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。<br><br>

    	三、免责声明<br><br>
    	&nbsp;&nbsp;&nbsp;&nbsp;JYmusic是一款免费开源的程序，仅供交流和学习，严禁用于商业用途，因此带来的后果与本程序作者无关！
    </p>

			      </div>
	        	</div>
	      	</div>
	      	
	      	<hr>
	      	<footer>
        		<p>&copy; Company JYmusic 2014-<?php echo date('Y'); ?></p>
     	 	</footer>
    	</div>
    	
    </body>
</html>
