<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:52:"D:\PHPTutorial\WWW/app/install\view\index\step1.html";i:1503207514;s:52:"D:\PHPTutorial\WWW\app\install\view\public\base.html";i:1501967989;}*/ ?>
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
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
		环境检测
		</div>
	</div>
		
	<div class="bs-example">
	    <ol style="margin-bottom: 5px;" class="breadcrumb">
	      	<li> <a href="javascript:;">协议</a></li>
	      	<li class="active">检测</li>
	      	<li><a href="javascript:;">配置</a></li>
	      	<li><a href="javascript:;"><eq name="Think.session.update" value="1">升级<else/>安装</eq></a></li>
	      	<li><a href="javascript:;">完成</a></li>
	    </ol>
	</div>

				  	<hr>
				  	
  	<p>
    	<a role="button" href="<?php echo url('index'); ?>" class="btn btn-success">上一步</a>
    	<a role="button" href="<?php echo url('step2'); ?>" class="btn btn-primary">下一步</a>
    </p>

	        	</div>
	        	<div class="col-md-8">
	        		<div class="jumbotron">
	        		
    <table class="table">
        <caption><h4>运行环境检查</h4></caption>
        <thead>
            <tr>
                <th>项目</th>
                <th>所需配置</th>
                <th>当前配置</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($env) || $env instanceof \think\Collection || $env instanceof \think\Paginator): $i = 0; $__LIST__ = $env;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo $item[0]; ?></td>
                    <td><?php echo $item[1]; ?></td>
                    <td><i class="jy jy-<?php echo $item[4]; ?>">&nbsp;</i><?php echo $item[3]; ?></td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
	<?php if(isset($dirfile)): ?>
    <table class="table">
        <caption><h4>目录、文件权限检查</h4></caption>
        <thead>
            <tr>
                <th>目录/文件</th>
                <th>所需状态</th>
                <th>当前状态</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($dirfile) || $dirfile instanceof \think\Collection || $dirfile instanceof \think\Paginator): $i = 0; $__LIST__ = $dirfile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo $item[3]; ?></td>
                    <td><i class="jy jy-check">&nbsp;</i>可写</td>
                    <td><i class="jy jy-<?php echo $item[2]; ?>">&nbsp;</i><?php echo $item[1]; ?></td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
	<?php endif; ?>
    <table class="table">
        <caption><h4>函数依赖性检查</h4></caption>
        <thead>
            <tr>
                <th>函数名称</th>
                <th>检查结果</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>fileinfo</td>
                <td>
                    <?php if(!extension_loaded('fileinfo')): ?>
                    <span class="text-warning">
                        <i class="jy jy-warning-f"></i>强烈建议开启fileinfo扩展[可以继续安装]
                    </span>
                    <?php else: ?>
                    <i class="jy jy-check">&nbsp;</i>支持
                    <?php endif; ?>
                </td>
            </tr>
            <?php if(is_array($func) || $func instanceof \think\Collection || $func instanceof \think\Paginator): $i = 0; $__LIST__ = $func;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo $item[0]; ?>()</td>
                    <td><i class="jy jy-<?php echo $item[2]; ?>">&nbsp;</i><?php echo $item[1]; ?></td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </tbody>
    </table>

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
