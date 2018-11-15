<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:52:"D:\PHPTutorial\WWW/app/install\view\index\step2.html";i:1501959288;s:52:"D:\PHPTutorial\WWW\app\install\view\public\base.html";i:1501967989;}*/ ?>
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
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
		安装数据库
		</div>
	</div>
		
	<div class="bs-example">
	    <ol style="margin-bottom: 5px;" class="breadcrumb">
	      	<li> <a href="javascript:;">协议</a></li>
	      	<li><a href="javascript:;">检测</a></li>
	      	<li class="active">配置</li>
	      	<li><a href="javascript:;"><?php if(\think\Session::get('update') == '1'): ?>升级<?php else: ?>安装<?php endif; ?></a></li>
	      	<li><a href="javascript:;">完成</a></li>
	    </ol>
	</div>

				  	<hr>
				  	
    <a class="btn btn-success btn-large" href="<?php echo url('step1'); ?>">上一步</a>
    <button id="submit" type="button" class="btn btn-primary btn-large">下一步</button>

	        	</div>
	        	<div class="col-md-8">
	        		<div class="jumbotron">
	        		
    <form action="<?php echo url('create'); ?>"  method="post" id="iform" target="_self" class="form-horizontal">
        <div class="create-database">
            <h4>数据库连接信息</h4>

            <input type="hidden" name="db[]" value="mysql" >
            <div class="form-group form-group-sm">
            	<label class="col-sm-2 control-label">服务器</label>
                <div class="col-sm-4">
                	<input type="text" name="db[hostname]" class="form-control" value="127.0.0.1">
                </div>
                <div class="col-sm-10 col-sm-offset-2">
					<span class="help-block">数据库服务器IP，一般为127.0.0.1,如果无法连接请尝试localhost</span>
				</div>
            </div>
            <div class="form-group form-group-sm">
            	<label class="col-sm-2 control-label">数据库名</label>
                <div class="col-sm-4">
                	<input type="text" name="db[database]" class="form-control" value="">
            	</div>
            </div>
            <div class="form-group form-group-sm">
            	<label class="col-sm-2 control-label">数据库用户名</label>
                <div class="col-sm-4">
                	<input type="text" name="db[username]" class="form-control" value="">
            	</div>
            </div>
            <div class="form-group form-group-sm">
            	<label class="col-sm-2 control-label">数据库密码</label>
                <div class="col-sm-4">
                	<input type="password" name="db[password]" class="form-control" value="">
            	</div>
            </div>

            <div class="form-group form-group-sm">
            	<label class="col-sm-2 control-label">数据库端口</label>
                <div class="col-sm-2">
                	<input type="text" name="db[hostport]" class="form-control" value="3306">
                </div>
                <span>数据库服务连接端口，一般为3306</span>
            </div>

            <div class="form-group form-group-sm">
            	<label class="col-sm-2 control-label">数据表前缀</label>
                <div class="col-sm-2">
                	<input type="text" name="db[prefix]" class="form-control" value="jy_">
                </div>
                <span>同一个数据库运行多个系统时请修改为不同的前缀</span>
            </div>
        </div>

        <div class="create-database">
            <h4>创始人帐号信息</h4>
            <div class="form-group form-group-sm">
            	<label class="col-sm-2 control-label">用户名</label>
                <div class="col-sm-4">
                	<input type="text" name="admin[username]" class="form-control" value="admin">
               	</div>
            </div>
            <div class="form-group form-group-sm">
            	<label class="col-sm-2 control-label">密码</label>
                <div class="col-sm-4">
                	<input type="password" name="admin[password]" class="form-control" value="">
               	</div>
            </div>
            <div class="form-group form-group-sm">
            	<label class="col-sm-2 control-label">确认密码</label>
                <div class="col-sm-4">
                	<input type="password" name="admin[repassword]" class="form-control" value="">
                </div>
            </div>
            <div class="form-group form-group-sm">
            	<label class="col-sm-2 control-label">邮箱</label>
                <div class="col-sm-4">
                	<input type="text" name="admin[email]" class="form-control" value="admin@admin.com">
                </div>
                <span>请填写正确的邮箱便于收取提醒邮件</span>
            </div>
        </div>
    </form>
	<script type="text/javascript">
	$(function(){
		$('#submit').click(function(e){
			e.preventDefault();
			var form	= $('#iform');
			$.post(form.attr('action'),form.serialize(),function(data){
				if (data.code){
                    $.Notify.msg('配置正确，即将跳转到下一步', 1);
					setTimeout(function(){
						window.location.href=data.url;
					}, 1500);
				}else{
                    $.Notify.msg(data.msg, 0, 5);
				}
			})		
		});
	})
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
