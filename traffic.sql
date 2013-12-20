-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2013 年 12 月 20 日 13:36
-- 服务器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `traffic`
--

-- --------------------------------------------------------

--
-- 表的结构 `brief`
--

CREATE TABLE IF NOT EXISTS `brief` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carnum` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `time` datetime NOT NULL,
  `deal` varchar(10) NOT NULL DEFAULT '否',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `brief`
--

INSERT INTO `brief` (`id`, `carnum`, `type`, `time`, `deal`) VALUES
(1, '黑A88888', '不系安全带', '2013-12-20 12:46:56', '是'),
(2, '黑A88888', '闯红灯', '2013-12-20 12:49:50', '否'),
(3, '黑A11111', '酒驾', '2013-12-20 12:51:08', '否'),
(4, '黑A66666', '闯红灯', '2013-12-20 12:51:42', '是'),
(5, '黑A88889', '超速', '2013-12-20 12:53:40', '否');

-- --------------------------------------------------------

--
-- 表的结构 `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `drivingnum` varchar(20) NOT NULL,
  `carnum` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `car`
--

INSERT INTO `car` (`id`, `drivingnum`, `carnum`) VALUES
(1, '11111', '黑A88888'),
(2, '11111', '黑A11111'),
(3, '22222', '黑A66666');

-- --------------------------------------------------------

--
-- 表的结构 `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `fine` int(11) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `detail`
--

INSERT INTO `detail` (`id`, `bid`, `year`, `month`, `day`, `score`, `fine`, `content`) VALUES
(1, 1, 2013, 11, 12, 3, 100, '未系安全带'),
(2, 2, 2013, 12, 13, 6, 100, '怒闯红灯'),
(3, 3, 2013, 12, 21, 12, 200, '酒后驾驶'),
(4, 4, 2013, 12, 1, 6, 100, '闯红灯'),
(5, 5, 2013, 12, 14, 6, 200, '超速驾驶');

-- --------------------------------------------------------

--
-- 表的结构 `pic`
--

CREATE TABLE IF NOT EXISTS `pic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bid` int(11) NOT NULL,
  `src` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `pic`
--

INSERT INTO `pic` (`id`, `bid`, `src`) VALUES
(1, 1, 'picture/1/5.jpg'),
(2, 1, 'picture/1/6.jpg'),
(3, 2, 'picture/2/3.jpg'),
(4, 2, 'picture/2/4.jpg'),
(5, 2, 'picture/2/5.jpg'),
(6, 2, 'picture/2/6.jpg'),
(7, 3, 'picture/3/1.jpg'),
(8, 4, 'picture/4/3.jpg'),
(9, 4, 'picture/4/6.jpg'),
(10, 5, 'picture/5/002.jpg'),
(11, 5, 'picture/5/1.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `standard`
--

CREATE TABLE IF NOT EXISTS `standard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `score` int(11) NOT NULL,
  `fine` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `standard`
--

INSERT INTO `standard` (`id`, `type`, `score`, `fine`) VALUES
(1, '闯红灯', 6, 100),
(2, '不系安全带', 3, 100),
(3, '酒驾', 12, 200),
(4, '副驾不系安全带', 1, 50),
(5, '行驶途中拨打手机', 3, 100),
(6, '行驶途中抽烟', 1, 100),
(7, '有意遮挡号牌', 12, 200),
(8, '超速', 6, 200);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `truename` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `drivingnum` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `truename`, `password`, `email`, `drivingnum`) VALUES
(1, 'admin', '', 'admin', '', ''),
(4, 'test1', 'lj', '123', '12345678@qq.com', '11111'),
(5, 'test2', 'xb', '123', '87654321@qq.com', '22222');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
