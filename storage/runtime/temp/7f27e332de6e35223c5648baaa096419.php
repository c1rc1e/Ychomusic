<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:55:"D:\PHPTutorial\WWW/app/install\view\index\complete.html";i:1501972497;s:52:"D:\PHPTutorial\WWW\app\install\view\public\base.html";i:1501967989;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>JYmusic安装程序</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Le styles -->
        <link href="/public/static/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="/public/static/libs/jymusic/css/jy.css" rel="stylesheet">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="/public/static/libs/html5shiv-printshiv.min.js"></script>
        <![endif]-->
        <script src="/public/static/libs/jquery/jquery-1.10.2.min.js"></script>
        <script type="text/javascript">
            (function() {window.JY = {"root": "<?php echo \think\Request::instance()->root(); ?>","public": "/public","deep": "<?php echo config('pathinfo_depr'); ?>","model": [<?php echo config('url_model'); ?>, "<?php echo config('url_html_suffix'); ?>"]}})();
        </script>
        <script src="/public/static/libs/jymusic/js/app.js"></script>
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
					<img height="50" src="/public/static/images/logo.png"></a>
					<span>在线安装</span>
				</h3>
      		</div>
      		
	      	<div class="row">
	        	<div class="col-md-4 left-info">
	        		
				  	<hr>
				  	
    <a class="btn btn-primary btn-large" href="/admin.php">登录后台</a>
    <a class="btn btn-success btn-large" href="/index.php">访问首页</a>

	        	</div>
	        	<div class="col-md-8">
	        		<div class="jumbotron">
	        		
    <h3>完成</h3>
	<p class="alert alert-danger">请务必删除网站根目录下install.php</p>
    <p><?php if(\think\Session::get('update') == '1'): ?>升级<?php else: ?>安装<?php endif; ?></a>完成！</p>
	<?php if(isset($info)): ?>
	<?php echo $info; endif; ?>

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
