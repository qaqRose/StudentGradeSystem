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
					<li><a href="<?php echo U('student/add');?>" title="增加学生学生信息">增加学生学生信息</a></li>
					<li><a href="<?php echo U('student/query');?>" title="查询学生学生信息">查询学生学生信息</a></li>
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
		

  	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span class="c-gray en">&gt;</span> 会员列表<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
  	<div class="Hui-article">
  		<article class="cl pd-20">
  			<div class="text-c"> 日期范围：
  				<input type="text" onfocus="selecttime(2)" id="datemin" class="input-text Wdate" style="width:120px;">
  				-
  				<input type="text" onfocus="selecttime(2)" id="datemax" class="input-text Wdate" style="width:120px;">
  				<input type="text" class="input-text" style="width:250px" placeholder="输入会员名称、电话、邮箱" id="" name="">
  				<button type="submit" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
  			</div>
  			<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="<?php echo U('addStudent');?>" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加用户</a></span> <span class="r">共有数据：<strong>88</strong> 条</span> </div>
  			<div class="mt-20">
  				<table class="table table-border table-bordered table-hover table-bg table-sort">
  					<thead>
  						<tr class="text-c">
  							<th width="25"><input type="checkbox" name="" value=""></th>
  							<th width="80">ID</th>
  							<th width="100">用户名</th>
  							<th width="40">性别</th>
  							<th width="130">加入时间</th>
  							<th width="70">状态</th>
  							<th width="100">操作</th>
  						</tr>
  					</thead>
  					<tbody>
              <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr class="text-c">
  							<td><input type="checkbox" value="1" name=""></td>
  							<td><?php echo ($vo["id"]); ?></td>
  							<td><u style="cursor:pointer" class="text-primary"><?php echo ($vo["name"]); ?></u></td>
  							<td><?php echo ($vo["sex"]); ?></td>
  							<td class="text-l"><?php echo ($vo["year"]); ?></td>
  							<td class="td-status"><span class="label label-success radius">已启用</span></td>
  							<td class="td-manage"><a style="text-decoration:none" onClick="member_stop(this,'10001')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a> <a title="编辑" href="javascript:;" onclick="member_edit('编辑','member-add.html','4','','510')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="change_password('修改密码','change-password.html','10001','600','270')" href="javascript:;" title="修改密码"><i class="Hui-iconfont">&#xe63f;</i></a> <a title="删除" href="javascript:;" onclick="member_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
  						</tr><?php endforeach; endif; ?>
  					</tbody>
  				</table>
  			</div>
  		</article>
  	</div>


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
  function selecttime(flag){
      if(flag==1){
          var endTime = $("#countTimeend").val();
          if(endTime != ""){
              WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',maxDate:endTime})}else{
              WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
      }else{
          var startTime = $("#countTimestart").val();
          if(startTime != ""){
              WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',minDate:startTime})}else{
              WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
      }
   }
  </script>



<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>