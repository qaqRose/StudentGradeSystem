<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="favicon.ico" >
<link rel="Shortcut Icon" href="favicon.ico" />
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

<title>H-ui.admin v3.0</title>
<meta name="keywords" content="">
<meta name="description" content="">
</head>
<body>
<!--_header 作为公共模版分离出去-->
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">学生成绩管理系统</a>
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
					<li><a href="member-list.html" title="会员列表">查看</a></li>
					<li><a href="member-del.html" title="删除的会员">删除的会员</a></li>
					<li><a href="member-level.html" title="等级管理">等级管理</a></li>
					<li><a href="member-scoreoperation.html" title="积分管理">积分管理</a></li>
					<li><a href="member-record-browse.html" title="浏览记录">浏览记录</a></li>
					<li><a href="member-record-download.html" title="下载记录">下载记录</a></li>
					<li><a href="member-record-share.html" title="分享记录">分享记录</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="admin-role.html" title="角色管理">角色管理</a></li>
					<li><a href="admin-permission.html" title="权限管理">权限管理</a></li>
					<li><a href="admin-list.html" title="管理员列表">管理员列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="system-base.html" title="系统设置">系统设置</a></li>
					<li><a href="system-category.html" title="栏目管理">栏目管理</a></li>
					<li><a href="system-data.html" title="数据字典">数据字典</a></li>
					<li><a href="system-shielding.html" title="屏蔽词">屏蔽词</a></li>
					<li><a href="system-log.html" title="系统日志">系统日志</a></li>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->

<section class="Hui-article-box">
		
  <article class="cl pd-20" style="width:440px; margin:0 auto;">
   <form action="<?php echo U(checkAddStudent);?>" method="post" class="form form-horizontal" id="form-member-add">
     <div class="row cl">
       <label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>姓名</label>
       <div class="formControls col-xs-8 col-sm-9">
         <input type="text" class="input-text" value="" placeholder="" id="user_name" name="user_name">
       </div>
     </div>
     <div class="row cl">
       <label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>性别</label>
       <div class="formControls col-xs-8 col-sm-9 skin-minimal">
         <div class="radio-box">
           <input name="sex" type="radio" id="sex-1" value="男" checked>
           <label for="sex-1">男</label>
         </div>
         <div class="radio-box">
           <input type="radio" id="sex-2" name="sex" value="女">
           <label for="sex-2">女</label>
         </div>
       </div>
     </div>
     <div class="row cl">
       <label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>学号</label>
       <div class="formControls col-xs-8 col-sm-9">
         <input type="text" class="input-text" placeholder="" name="number" id="number">
       </div>
     </div>

     <div class="row cl">
       <label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>入学时间</label>
       <div class="formControls col-xs-8 col-sm-9">
         <input type="text" onfocus="selecttime(2)" id="datemin" name="time" class="input-text Wdate" >
       </div>
     </div>
     <div class="row cl">
       <label class="form-label col-xs-4 col-sm-3">专业</label>
       <div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
         <select class="select" size="1" name="major">
           <option value="" selected>请选择专业</option>
           <option value="网络工程">网络工程</option>
           <option value="计算机信息与科学">计算机信息与科学</option>
           <option value="电子信息工程">电子信息工程</option>
         </select>
         </span> </div>
     </div>
     <div class="row cl">
       <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
         <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
       </div>
     </div>
   </form>
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

  <script type="text/javascript" src="/tp3/Public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
  <script type="text/javascript" src="/tp3/Public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="/tp3/Public/lib/laypage/1.2/laypage.js"></script>
  <script type="text/javascript" src="/tp3/Public/js/common.js"></script>
  <script type="text/javascript">
  $(function(){
  	$('.table-sort').dataTable({
  		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
  		"bStateSave": true,//状态保存
  		"aoColumnDefs": [
  		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
  		  {"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序
  		]
  	});
  	$('.table-sort tbody').on( 'click', 'tr', function () {
  		if ( $(this).hasClass('selected') ) {
  			$(this).removeClass('selected');
  		}
  		else {
  			table.$('tr.selected').removeClass('selected');
  			$(this).addClass('selected');
  		}
  	});
  });
  /*用户-添加*/
  function member_add(title,url,w,h){
  	layer_show(title,url,w,h);
  }
  /*用户-查看*/
  function member_show(title,url,id,w,h){
  	layer_show(title,url,w,h);
  }
  /*用户-停用*/
  function member_stop(obj,id){
  	layer.confirm('确认要停用吗？',function(index){
  		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
  		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
  		$(obj).remove();
  		layer.msg('已停用!',{icon: 5,time:1000});
  	});
  }

  /*用户-启用*/
  function member_start(obj,id){
  	layer.confirm('确认要启用吗？',function(index){
  		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
  		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
  		$(obj).remove();
  		layer.msg('已启用!',{icon: 6,time:1000});
  	});
  }
  /*用户-编辑*/
  function member_edit(title,url,id,w,h){
  	layer_show(title,url,w,h);
  }
  /*密码-修改*/
  function change_password(title,url,id,w,h){
  	layer_show(title,url,w,h);
  }
  /*用户-删除*/
  function member_del(obj,id){
  	layer.confirm('确认要删除吗？',function(index){
  		$(obj).parents("tr").remove();
  		layer.msg('已删除!',{icon:1,time:1000});
  	});
  }

  </script>

<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>