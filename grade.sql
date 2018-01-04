-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 01 月 04 日 03:18
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `grade`
--
CREATE DATABASE IF NOT EXISTS `grade` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `grade`;

-- --------------------------------------------------------

--
-- 表的结构 `base_course`
--

DROP TABLE IF EXISTS `base_course`;
CREATE TABLE IF NOT EXISTS `base_course` (
  `bc_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(20) NOT NULL,
  `credit` int(11) NOT NULL,
  `teacher` varchar(20) NOT NULL,
  `tno` int(5) NOT NULL,
  `major` varchar(20) NOT NULL,
  PRIMARY KEY (`bc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='基础课程表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `base_course`
--

INSERT INTO `base_course` (`bc_id`, `course_name`, `credit`, `teacher`, `tno`, `major`) VALUES
(1, 'php入门到放弃', 4, '小明', 110, '网络工程'),
(2, '课程设计', 2, '老师1', 10001, '物联网'),
(3, '编程的智慧', 3, '胡小生', 10007, '网络工程'),
(4, '算法导论', 4, '小智', 10006, '网络工程');

-- --------------------------------------------------------

--
-- 表的结构 `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `major` varchar(20) NOT NULL,
  `class` int(4) NOT NULL,
  `academy` varchar(20) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='班级表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `class`
--

INSERT INTO `class` (`class_id`, `major`, `class`, `academy`) VALUES
(1, '网络工程', 1, '电信学院'),
(2, '网络工程', 2, '电信学院'),
(3, '电子信息工程', 1, '电信学院'),
(4, '电子信息工程', 2, '电信学院'),
(5, '物联网', 1, '电信学院'),
(6, '物联网', 2, '电信学院'),
(7, '计算机科学与技术', 1, '电信学院'),
(8, '计算机科学与技术', 2, '电信学院');

-- --------------------------------------------------------

--
-- 表的结构 `class_grade`
--

DROP TABLE IF EXISTS `class_grade`;
CREATE TABLE IF NOT EXISTS `class_grade` (
  `c_id` int(11) NOT NULL COMMENT '课程id',
  `class_id` int(11) NOT NULL COMMENT '班级id',
  `avg_grade` float NOT NULL COMMENT '平均成绩',
  `max_grade` float NOT NULL COMMENT '最高成绩',
  `min_grade` float NOT NULL COMMENT '最小成绩',
  `pass_rate` float NOT NULL COMMENT '及格率',
  `is_base` tinyint(2) NOT NULL,
  PRIMARY KEY (`class_id`,`c_id`,`is_base`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='班级成绩表';

--
-- 转存表中的数据 `class_grade`
--

INSERT INTO `class_grade` (`c_id`, `class_id`, `avg_grade`, `max_grade`, `min_grade`, `pass_rate`, `is_base`) VALUES
(1, 1, 66.4286, 92, 28, 50, 0),
(1, 1, 68.7143, 92, 28, 100, 1),
(3, 1, 73.6667, 92, 56, 100, 1),
(4, 1, 67, 92, 28, 0, 1),
(1, 7, 17, 17, 17, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `credit` int(11) NOT NULL COMMENT '学分',
  `course_name` varchar(20) NOT NULL,
  `teacher` varchar(20) NOT NULL,
  `tno` int(5) NOT NULL COMMENT '工号',
  `major` varchar(20) NOT NULL DEFAULT '不限',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='课程表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `course`
--

INSERT INTO `course` (`c_id`, `credit`, `course_name`, `teacher`, `tno`, `major`) VALUES
(1, 2, '健康人生', '小白', 10002, '不限'),
(2, 2, 'phontstop入门', '雷克萨', 10003, '不限'),
(3, 2, '篮球选修', '钟无艳', 10003, '不限'),
(4, 2, '瑜伽', '蔡佳亚', 10004, '不限'),
(5, 4, '长跑', '不猜', 10006, '不限'),
(6, 4, '健身舞', '蔡亚', 10007, '不限');

-- --------------------------------------------------------

--
-- 表的结构 `course_choose`
--

DROP TABLE IF EXISTS `course_choose`;
CREATE TABLE IF NOT EXISTS `course_choose` (
  `s_id` int(11) NOT NULL COMMENT '学生id',
  `c_id` int(11) NOT NULL COMMENT '课程id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='选课表';

--
-- 转存表中的数据 `course_choose`
--

INSERT INTO `course_choose` (`s_id`, `c_id`) VALUES
(2, 1),
(3, 1),
(3, 4),
(3, 5),
(4, 1),
(4, 2),
(5, 3),
(5, 4);

-- --------------------------------------------------------

--
-- 表的结构 `grade`
--

DROP TABLE IF EXISTS `grade`;
CREATE TABLE IF NOT EXISTS `grade` (
  `s_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `usual_score` float NOT NULL,
  `final_score` float NOT NULL,
  `is_base` tinyint(2) NOT NULL COMMENT '是否基础课',
  `credit` int(3) NOT NULL,
  `totality` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`c_id`,`s_id`,`is_base`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='成绩表';

--
-- 转存表中的数据 `grade`
--

INSERT INTO `grade` (`s_id`, `c_id`, `course_name`, `usual_score`, `final_score`, `is_base`, `credit`, `totality`, `class_id`) VALUES
(2, 1, '健康人生', 89, 66, 0, 3, 73, 1),
(2, 1, 'php入门到放弃', 99, 89, 1, 4, 92, 1),
(3, 1, '健康人生', 56, 0, 0, 1, 17, 7),
(4, 1, '健康人生', 67, 12, 0, 1, 28, 1),
(4, 1, 'php入门到放弃', 67, 67, 1, 3, 67, 1),
(5, 1, 'php入门到放弃', 57, 78, 1, 3, 72, 1),
(2, 3, '编程的智慧', 58, 76, 1, 3, 71, 1),
(4, 3, '编程的智慧', 78, 78, 1, 3, 78, 1),
(2, 4, '算法导论', 55, 55, 1, 2, 55, 1);

--
-- 触发器 `grade`
--
DROP TRIGGER IF EXISTS `tr_afterinsert_on_grade`;
DELIMITER //
CREATE TRIGGER `tr_afterinsert_on_grade` AFTER INSERT ON `grade`
 FOR EACH ROW begin
set @avg =NULL;
set @max =NULL;
set @min =NULL;
set @pass = NULL;
select 100*sum(case when totality>=60 then 1 else 0 end)/count(*) INTO @pass from grade where class_id = new.class_id and c_id = new.c_id and is_base = new.is_base;
select avg(totality), max(totality),min(totality) into @avg,@max,@min from grade where class_id = new.class_id;
INSERT INTO class_grade( class_id, c_id, avg_grade, max_grade, min_grade,pass_rate,is_base ) VALUES (new.class_id, new.c_id,@avg,@max,@min,@pass, new.is_base) ON DUPLICATE KEY UPDATE avg_grade = @avg, max_grade=@max,min_grade=@min,pass_rate=@pass;
end
//
DELIMITER ;
DROP TRIGGER IF EXISTS `tr_afterupdate_on _grade`;
DELIMITER //
CREATE TRIGGER `tr_afterupdate_on _grade` AFTER UPDATE ON `grade`
 FOR EACH ROW begin
set @avg =NULL;
set @max =NULL;
set @min =NULL;
set @pass = NULL;
select 100*sum(case when totality>=60 then 1 else 0 end)/count(*) INTO @pass from grade where class_id = new.class_id and c_id = new.c_id and is_base = new.is_base;
select avg(totality), max(totality),min(totality) into @avg,@max,@min from grade where class_id = new.class_id;
INSERT INTO class_grade( class_id, c_id, avg_grade, max_grade, min_grade,pass_rate,is_base ) VALUES (new.class_id, new.c_id,@avg,@max,@min,@pass, new.is_base) ON DUPLICATE KEY UPDATE avg_grade = @avg, max_grade=@max,min_grade=@min,pass_rate=@pass;
end
//
DELIMITER ;
DROP TRIGGER IF EXISTS `tr_beforeinsert_on_grade`;
DELIMITER //
CREATE TRIGGER `tr_beforeinsert_on_grade` BEFORE INSERT ON `grade`
 FOR EACH ROW begin
set new.totality = (new.usual_score*3 + new.final_score*7)/10;
set new.credit = 4.0* (new.totality/100.0);
end
//
DELIMITER ;
DROP TRIGGER IF EXISTS `tr_beforeupdate_on _grade`;
DELIMITER //
CREATE TRIGGER `tr_beforeupdate_on _grade` BEFORE UPDATE ON `grade`
 FOR EACH ROW BEGIN 
SET new.totality = ( new.usual_score *3 + new.final_score *7 ) /10;

SET new.credit = 4.0 * ( new.totality / 100.0 ) ;

END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `no` int(11) NOT NULL COMMENT '学号',
  `major` varchar(20) NOT NULL COMMENT '专业',
  `class` int(11) NOT NULL COMMENT '班级',
  `name` varchar(20) NOT NULL COMMENT '姓名',
  `academy` varchar(10) NOT NULL COMMENT '学院',
  `time` int(4) NOT NULL COMMENT '入学年级',
  `sex` char(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='学生信息表' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `no`, `major`, `class`, `name`, `academy`, `time`, `sex`) VALUES
(2, 2017001, '网络工程', 1, '邱旭权', '', 1514367420, '男'),
(3, 2017002, '计算机科学与技术', 1, '李逍遥', '', 0, '男'),
(4, 2017003, '网络工程', 1, '张三丰', '', 0, '男'),
(5, 2017004, '网络工程', 1, '小龙女', '', 0, '女'),
(8, 2017005, '电子信息工程', 1, '路飞', '', 0, '男'),
(9, 2017006, '计算机科学与技术', 1, '索隆', '', 0, '男'),
(10, 2017009, '网络工程', 1, 'aaa', '', 0, '男');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `tno` int(5) NOT NULL COMMENT '工号',
  `sex` char(4) NOT NULL,
  PRIMARY KEY (`t_id`),
  UNIQUE KEY `tno` (`tno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='老师表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`t_id`, `name`, `tno`, `sex`) VALUES
(1, '老师1', 10001, '男'),
(2, '老师2', 10002, '女'),
(3, '老师3', 10003, '男'),
(4, '老师4', 10004, '女'),
(5, '老师5', 10005, '男'),
(6, '老师6', 10006, '女'),
(7, '老师7', 10007, '男'),
(8, '老师8', 10008, '女');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `password` char(32) NOT NULL,
  `user_name` varchar(12) NOT NULL,
  `type` varchar(12) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `number` (`number`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `number`, `password`, `user_name`, `type`) VALUES
(1, 1, '202cb962ac59075b964b07152d234b70', '旭权', '学生');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
