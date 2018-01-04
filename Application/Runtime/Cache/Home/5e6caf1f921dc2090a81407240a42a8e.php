<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
        a{
          display: block;
        }

    </style>
  </head>
  <body>
      <div class="">
            <h3>学生管理</h3>
            <a href="<?php echo U('student/add');?>">增加学生学生信息</a>
            <a href="<?php echo U('student/query');?>">查询学生学生信息</a>
            <h3>成绩管理</h3>
            <a href="<?php echo U('grade/input');?>">录入成绩信息</a>
            <a href="<?php echo U('grade/classGrade');?>">查看班级成绩</a>
            <a href="<?php echo U('grade/studentGrade');?>">查看学生成绩</a>

            <h3>课程管理</h3>
            <a href="<?php echo U('baseCourse/query');?>">查看课程</a>
            <a href="<?php echo U('baseCourse/add');?>">增加课程</a>

            <h3>选课管理</h3>
            <a href="<?php echo U('grade/query');?>">查看选课信息</a>
            <a href="<?php echo U('grade/add');?>">增加选课信息</a>

      </div>
  </body>
</html>