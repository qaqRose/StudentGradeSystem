<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark"  href="/tp3/Public/img/favicon.png">
<link rel="Shortcut Icon" href="/tp3/Public/img/favicon.png" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/tp3/Public/lib/html5.js"></script>
<script type="text/javascript" src="/tp3/Public/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/tp3/Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/tp3/Public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/tp3/Public/lib/Hui-iconfont/1.0.8/iconfont.css" />

<link rel="stylesheet" type="text/css" href="/tp3/Public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/tp3/Public/static/h-ui.admin/css/style.css" />


<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script><![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>学生成绩管理系统</title>
<meta name="keywords" content="">
<meta name="description" content="">
</head>
<body>
<!--_header 作为公共模版分离出去-->
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="<?php echo U('index/index');?>">学生成绩管理系统</a>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li><?php echo ($type); ?></li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><?php echo ($user_name); ?> <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;"><?php echo ($user_name); ?></a></li>
							<li><a href="<?php echo U('public/logout');?>">退出</a></li>
						</ul>
					</li>
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<!--/_header 作为公共模版分离出去-->

<!--_menu 作为公共模版分离出去-->
<aside class="Hui-aside">

	<div class="menu_dropdown bk_2">
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 学生管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo U('student/add');?>" title="增加学生学生信息">增加学生信息</a></li>
					<li><a href="<?php echo U('student/query');?>" title="查询学生学生信息">查询学生信息</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 成绩管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo U('grade/input');?>">录入成绩信息</a></li>
					<li><a href="<?php echo U('grade/classGrade');?>">查看班级成绩</a></li>
					<li><a href="<?php echo U('grade/studentGrade');?>">查看学生成绩</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 课程管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo U('baseCourse/query');?>">查看课程</a></li>
					<li><a href="<?php echo U('baseCourse/add');?>">增加课程</a></li>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->

<section class="Hui-article-box">
		
	<div class="Hui-article">
		<article class="cl pd-20">
			<p class="f-20 text-success">欢迎使用 QXQ学生成绩管理系统</p>
			<p>登录次数：18 </p>
			<p>上次登录IP：222.35.131.79.1  上次登录时间：2014-6-14 11:19:55</p>

			<table class="table table-border table-bordered table-bg mt-20">
				<thead>
					<tr>
						<th colspan="2" scope="col">服务器信息</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th width="30%">服务器计算机名</th>
						<td><span id="lbServerName">http://127.0.0.1/</span></td>
					</tr>
							<tr>
								<td>服务器IP地址</td>
								<td>192.168.1.1</td>
					</tr>
							<tr>
								<td>服务器域名</td>
								<td>www.h-ui.net</td>
					</tr>
							<tr>
								<td>服务器端口 </td>
								<td>80</td>
					</tr>
							<tr>
								<td>服务器IIS版本 </td>
								<td>Microsoft-IIS/6.0</td>
					</tr>
							<tr>
								<td>本文件所在文件夹 </td>
								<td>D:\WebSite\HanXiPuTai.com\XinYiCMS.Web\</td>
					</tr>
							<tr>
								<td>服务器操作系统 </td>
								<td>Microsoft Windows NT 5.2.3790 Service Pack 2</td>
					</tr>
							<tr>
								<td>系统所在文件夹 </td>
								<td>C:\WINDOWS\system32</td>
					</tr>
							<tr>
								<td>服务器脚本超时时间 </td>
								<td>30000秒</td>
					</tr>
							<tr>
								<td>服务器的语言种类 </td>
								<td>Chinese (People's Republic of China)</td>
					</tr>

				</tbody>
			</table>
</article>


</section>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/tp3/Public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/tp3/Public/lib/layer/2.4/layer.js"></script>

<script type="text/javascript" src="/tp3/Public/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/tp3/Public/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/tp3/Public/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/tp3/Public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/tp3/Public/static/h-ui.admin/js/H-ui.admin.page.js"></script>

<script type="text/javascript" src="/tp3/Public/js/common.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->

<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>