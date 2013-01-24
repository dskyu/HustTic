drop database if exists husttic;
create database husttic;
use husttic


DROP TABLE IF EXISTS `group`;
CREATE TABLE IF NOT EXISTS `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  description text,
  /*
  描述可以存html格式
  还有没有别的部门相关信息
  */
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) DEFAULT 0,
  `description` text,
  /*
  另外一些个人信息什么的
  */
  prigroup_id int(11) not null,
  foreign key(prigroup_id)references `group`(id),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `user_group`;
CREATE TABLE IF NOT EXISTS `user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) not null,
  group_id int(11) not null,
  foreign key(user_id)references `user`(id),
  foreign key(group_id)references `group`(id),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  description text,
  /*
  项目展示时间上用不用提是什么时候的
  或者一个大概的时间吧
  下面这个是年份....
  */
  `year` int(4),  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `user_project`;
CREATE TABLE IF NOT EXISTS `user_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  foreign key(user_id) references `user`(id),
  foreign key(project_id) references project(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*站内信*/
DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source_id` int(11) NOT NULL,
  `dest_id` int(11) NOT NULL,
  `content` text,
  `time` timestamp not null,
  `state` int(1) not null default 0,/*已读未读之类的状态*/
  `type` int(1) not null default 0,
  PRIMARY KEY (`id`),
  foreign key(source_id) references `user`(id),
  foreign key(dest_id) references `user`(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

DROP TABLE IF EXISTS `award_punish`;
CREATE TABLE IF NOT EXISTS `award_punish` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source_id` int(11) NOT NULL,
  `dest_id` int(11) NOT NULL,
  `content` text,
  `level` int(1) not null,
  `time` timestamp not null,
  PRIMARY KEY (`id`),
  foreign key(source_id) references `user`(id),
  foreign key(dest_id) references `user`(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

DROP TABLE IF EXISTS `announce`;
CREATE TABLE IF NOT EXISTS `announce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text not null,
  `time` timestamp not null,
  PRIMARY KEY (`id`),
  foreign key(user_id)references `user`(id),
  foreign key(group_id)references `group`(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;