CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `Skillset` varchar(255) NOT NULL,
  `lastUpdated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, -- Set the default value
  PRIMARY KEY  (`id`)
);
