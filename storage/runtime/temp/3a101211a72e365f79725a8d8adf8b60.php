<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:52:"D:\PHPTutorial\WWW/app/install\view\index\step3.html";i:1501971384;s:52:"D:\PHPTutorial\WWW\app\install\view\public\base.html";i:1501967989;}*/ ?>
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
	        		
<h4>安装进度</h4>
	<hr>
	<div class="progress">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
		<eq name="Think.session.update" value="1">升级<else/>安装</eq>
		</div>
	</div>
		
	<div class="bs-example">
	    <ol style="margin-bottom: 5px;" class="breadcrumb">
	      	<li><a href="javascript:;">协议</a></li>
	      	<li><a href="javascript:;">检测</a></li>
	      	<li><a href="javascript:;">配置</a></li>
	      	<li class="active"><?php if(\think\Session::get('update') == '1'): ?>升级<?php else: ?>安装<?php endif; ?></li>
	      	<li><a href="javascript:;">完成</a></li>
	    </ol>
	</div>

				  	<hr>
				  	
    <button class="btn btn-warning btn-large disabled">正在<?php if(\think\Session::get('update') == '1'): ?>升级<?php else: ?>安装<?php endif; ?>，请稍后...</button>

	        	</div>
	        	<div class="col-md-8">
	        		<div class="jumbotron">
	        		
    <h4><?php if(\think\Session::get('update') == '1'): ?>升级<?php else: ?>安装<?php endif; ?></h4>
    <div id="show-list" class="install-database">
    </div>
    <script type="text/javascript">
        var list   = $('#show-list');
        var classname = 'text-info';
        function showmsg(msg, classname){
            var li = document.createElement('p'); 
            li.innerHTML = msg;
            classname && li.setAttribute('class', classname);
            list.prepend(li);
            //document.scrollTop += 30;
        }
    </script>

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
