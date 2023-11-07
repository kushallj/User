create database User;

use User;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `Skillset` int(3) NOT NULL,
  
  PRIMARY KEY  (`id`)
);