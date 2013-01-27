-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 01 月 26 日 23:11
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
  PRIMARY KEY (`id`),
  KEY `dest_id` (`dest_id`),
  KEY `source_id` (`source_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`id`),
  KEY `source_id` (`source_id`),
  KEY `dest_id` (`dest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tic_group`
--

CREATE TABLE IF NOT EXISTS `tic_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`id`),
  KEY `source_id` (`source_id`),
  KEY `dest_id` (`dest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tic_user`
--

CREATE TABLE IF NOT EXISTS `tic_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) DEFAULT '0',
  `description` text,
  `group_id` int(11) NOT NULL,
  `birthday` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sex` tinyint(1) NOT NULL,
  `otherskill` varchar(255) DEFAULT NULL,
  `thumbnail_url` varchar(255) DEFAULT NULL,
  `ori_url` varchar(255) DEFAULT NULL,
  `hobby` varchar(255) DEFAULT NULL,
  `weibo` varchar(255) DEFAULT NULL,
  `renren` varchar(255) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL,
  `tel` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tic_user_group`
--

CREATE TABLE IF NOT EXISTS `tic_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tic_user_project`
--

CREATE TABLE IF NOT EXISTS `tic_user_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 限制导出的表
--

--
-- 限制表 `tic_announce`
--
ALTER TABLE `tic_announce`
  ADD CONSTRAINT `tic_announce_ibfk_2` FOREIGN KEY (`source_id`) REFERENCES `tic_user` (`id`),
  ADD CONSTRAINT `tic_announce_ibfk_1` FOREIGN KEY (`dest_id`) REFERENCES `tic_user` (`id`);

--
-- 限制表 `tic_behavior`
--
ALTER TABLE `tic_behavior`
  ADD CONSTRAINT `tic_behavior_ibfk_1` FOREIGN KEY (`source_id`) REFERENCES `tic_user` (`id`),
  ADD CONSTRAINT `tic_behavior_ibfk_2` FOREIGN KEY (`dest_id`) REFERENCES `tic_user` (`id`);

--
-- 限制表 `tic_message`
--
ALTER TABLE `tic_message`
  ADD CONSTRAINT `tic_message_ibfk_1` FOREIGN KEY (`source_id`) REFERENCES `tic_user` (`id`),
  ADD CONSTRAINT `tic_message_ibfk_2` FOREIGN KEY (`dest_id`) REFERENCES `tic_user` (`id`);

--
-- 限制表 `tic_user`
--
ALTER TABLE `tic_user`
  ADD CONSTRAINT `tic_user_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `tic_group` (`id`);

--
-- 限制表 `tic_user_group`
--
ALTER TABLE `tic_user_group`
  ADD CONSTRAINT `tic_user_group_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tic_user` (`id`),
  ADD CONSTRAINT `tic_user_group_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `tic_group` (`id`);

--
-- 限制表 `tic_user_project`
--
ALTER TABLE `tic_user_project`
  ADD CONSTRAINT `tic_user_project_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tic_user` (`id`),
  ADD CONSTRAINT `tic_user_project_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `tic_project` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
