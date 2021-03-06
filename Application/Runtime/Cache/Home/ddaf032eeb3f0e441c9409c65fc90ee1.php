<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link href="/tp3/Public/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/tp3/Public/static/h-ui/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="/tp3/Public/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/tp3/Public/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script><![endif]-->
<title>登录</title>
<meta name="keywords" content="">
<meta name="description" content="">
</head>
<body>
<div class="container">
  <div class="header">
    <div class="page-header">
      <h1>学生成绩管理系统 <small>登录页面</small></h1>
    </div>
  </div>

  <div class="loginWraper">
  	<div id="loginform" class="loginBox">
  		<form class="form form-horizontal" action="<?php echo U('public/checkLogin');?>" method="post">
  			<div class="row cl">
  				<label class="form-label col-md-4"><i class="Hui-iconfont">&#xe60d;</i></label>
  				<div class="formControls col-md-4">
  					<input id="" name="number" type="text" placeholder="账户" class="input-text size-L">
  				</div>
  			</div>
  			<div class="row cl">
  				<label class="form-label col-md-4"><i class="Hui-iconfont">&#xe60e;</i></label>
  				<div class="formControls col-md-4">
  					<input id="" name="password" type="password" placeholder="密码" class="input-text size-L">
  				</div>
  			</div>
  			<div class="row cl">
  				<div class="formControls col-md-4 col-md-offset-5">
  					<input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
  					<input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
  				</div>
  			</div>
  		</form>
  	</div>
  </div>
</div>


<script type="text/javascript" src="/tp3/Public/ib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/tp3/Public/static/h-ui/js/H-ui.js"></script>

</body>
</html>