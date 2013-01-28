-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 01 月 26 日 23:44
-- 服务器版本: 5.5.11-log
-- PHP 版本: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `husttic`
--
DROP DATABASE if exists `husttic`;
CREATE DATABASE `husttic` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `husttic`;

-- --------------------------------------------------------

--
-- 表的结构 `tic_announce`
--

CREATE TABLE IF NOT EXISTS `tic_announce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dest_id` int(11) NOT NULL,
  `source_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tic_behavior`
--

CREATE TABLE IF NOT EXISTS `tic_behavior` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source_id` int(11) NOT NULL,
  `dest_id` int(11) NOT NULL,
  `content` text,
  `level` int(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tic_group`
--

CREATE TABLE IF NOT EXISTS `tic_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tic_message`
--

CREATE TABLE IF NOT EXISTS `tic_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source_id` int(11) NOT NULL,
  `dest_id` int(11) NOT NULL,
  `content` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `state` int(1) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tic_project`
--

CREATE TABLE IF NOT EXISTS `tic_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `complete_date` varchar(8) DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `thumbnail_url` varchar(255) DEFAULT NULL,
  `ori_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tic_user`
--

CREATE TABLE IF NOT EXISTS `tic_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `level` int(1) NOT NULL DEFAULT '0',
  `description` text,
  `group_id` int(11) NOT NULL DEFAULT '0',
  `birthday` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sex` tinyint(1) NOT NULL DEFAULT  '0',
  `otherskill` varchar(255) DEFAULT NULL,
  `thumbnail_url` varchar(255) DEFAULT NULL,
  `ori_url` varchar(255) DEFAULT NULL,
  `hobby` varchar(255) DEFAULT NULL,
  `weibo` varchar(255) DEFAULT NULL,
  `renren` varchar(255) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL,
  `tel` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

INSERT INTO `tic_user` (`id`, `username`, `password`, `nickname`, `level`, `description`, `group_id`, `birthday`, `sex`, `otherskill`, `thumbnail_url`, `ori_url`, `hobby`, `weibo`, `renren`, `qq`, `tel`) VALUES
(1, '111', '432', '', 0, NULL, 12, '2013-01-26 15:48:21', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111'),
(2, 'abc', '96e79218965eb72c92a549dd5a330112', '朝秦暮楚', 0, NULL, 12, '2013-01-27 15:04:59', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111'),
(3, '111', '432', '', 0, NULL, 12, '2013-01-26 15:50:03', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111'),
(4, '111', '432', '', 0, NULL, 12, '2013-01-26 15:50:15', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111'),
(5, '111', '432', '', 0, NULL, 12, '2013-01-26 15:50:16', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111'),
(6, '111', '432', '', 0, NULL, 12, '2013-01-26 15:50:17', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111'),
(7, '111', '432', '', 0, NULL, 12, '2013-01-26 15:50:18', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111'),
(8, 'abc111', '111111', '111111', 0, NULL, 0, '2011-10-31 16:00:00', 1, NULL, NULL, NULL, NULL, NULL, NULL, '11111', '11111'),
(9, 'abc11111', '96e79218965eb72c92a549dd5a330112', '11111111', 0, NULL, 0, '2011-11-10 16:00:00', 2, NULL, NULL, NULL, NULL, NULL, NULL, '11111', '11111'),
(10, 'abcaaaa', '96e79218965eb72c92a549dd5a330112', '111111', 0, NULL, 0, '2011-10-31 16:00:00', 1, NULL, NULL, NULL, NULL, NULL, NULL, '1111', '1111'),
(11, 'abcfdsafds', '96e79218965eb72c92a549dd5a330112', '111111', 0, NULL, 0, '2011-10-31 16:00:00', 0, NULL, NULL, NULL, NULL, NULL, NULL, '1111', '1111'),
(12, 'ewerfeawfd', '96e79218965eb72c92a549dd5a330112', '111111', 0, NULL, 0, '2011-10-31 16:00:00', 0, NULL, NULL, NULL, NULL, NULL, NULL, '1111', '1111');

-- --------------------------------------------------------

--
-- 表的结构 `tic_user_group`
--

CREATE TABLE IF NOT EXISTS `tic_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tic_user_project`
--

CREATE TABLE IF NOT EXISTS `tic_user_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
