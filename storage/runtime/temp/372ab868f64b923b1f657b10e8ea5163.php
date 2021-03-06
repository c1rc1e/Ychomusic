<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:50:"D:\PHPTutorial\WWW/app/admin\view\login\index.html";i:1540624577;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="JYmusic">
    <title><?php echo $meta_title; ?> | Ycho music- 音乐网</title>
    <link type="text/css" href="/public/static/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="/public/admin/css/login.css" rel="stylesheet">
</head>
<body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>

        <div class="wrapper-page">
            <div class="card-box">
                <div class="panel-heading">
                    <h3 class="text-center"> 登录 <strong class="text-custom">Ycho music</strong></h3>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal m-t-20" action="<?php echo url('access'); ?>">

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="username" required="" placeholder="用户名">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password"  name="password"  required="" placeholder="密码">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                 <div class="verify-warp">
                                    <input type="text" class="form-control" equired="" name="verify"  placeholder="验证码">
                                    <a class="reloadverify" href="javascript:;">
                                        <img class="verifyimg" src="<?php echo url('captcha'); ?>" alt="验证码" />
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> 记住我 </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
                                    登录
                                </button>
                            </div>
                        </div>

                        <div class="form-group m-t-20 m-b-0">
                            <div class="col-sm-12">
                                <a href="http://bbs.jyuu.cn" class="text-dark"><i class="fa fa-lock m-r-5"></i>忘记密码?</a>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>
                        <small>Web music app base on Ycho music<br>© <?php echo date('Y'); ?></small>
                    </p>
                </div>
            </div>

        </div>
    <script type="text/javascript" src="/public/static/libs/jquery/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/public/static/libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/public/static/libs/layer/layer.js"></script>
    <script type="text/javascript" >
    //表单提交
    $(document)
    	.ajaxStart(function(){
    		$("input:submit").val("登录中...");
    	})
    	.ajaxStop(function(){
    		$("input:submit").val("登 录");
    	});
    
    $("form").submit(function(){
    	var self = $(this);
        layer.msg('正在登录，请稍后...', {
            icon: 16,
            shade: 0.01,
            time:30000,
            area: '240px'
        });

    	$.post(self.attr("action"), self.serialize(), success, "json");
    	return false;   
    	function success(data){
            if(data.code){
                layer.msg(data.msg + '页面将自动跳转', {icon: 6});
                setTimeout(function () {
                    window.location.href = data.url;
                },2000);

            } else {
                layer.msg(data.msg, {icon: 5});
                //刷新验证码
                $(".reloadverify").click();
            }
    	}
    });
    
    $(function(){
    	//刷新验证码
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
