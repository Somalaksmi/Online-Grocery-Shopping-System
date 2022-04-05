create database register;

use register;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirmpassword` varchar(20) NOT NULL,
  `create_datetime` datetime NOT NULL,
  PRIMARY KEY  (`id`)
);


create database admin;

use admin;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
);


INSERT INTO users (username, password)
VALUES ('Admin', 'admin123');

