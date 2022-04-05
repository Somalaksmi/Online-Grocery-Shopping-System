create database productdb;

use producttb;

CREATE TABLE `producttb` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `product_name` VARCHAR(50) NOT NULL,
  `product_price` FLOAT(5) NOT NULL,
  `product_desc` VARCHAR(100) NOT NULL,
  `product_image` VARCHAR(100) NOT NULL
);

use fruits;

CREATE TABLE `fruits` (
  `fruit_id` INT(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fruit_name` VARCHAR(50) NOT NULL,
  `fruit_price` FLOAT(5) NOT NULL,
  `fruit_desc` VARCHAR(50) NOT NULL,
  `fruit_image` VARCHAR(50) NOT NULL
);

use vegetables;

CREATE TABLE `vegetables` (
  `veg_id` INT(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `veg_name` VARCHAR(50) NOT NULL,
  `veg_price` FLOAT(5) NOT NULL,
  `veg_desc` VARCHAR(50) NOT NULL,
  `veg_image` VARCHAR(50) NOT NULL
);

use seafood;

CREATE TABLE `seafood` (
  `sf_id` INT(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `sf_name` VARCHAR(50) NOT NULL,
  `sf_price` FLOAT(5) NOT NULL,
  `sf_desc` VARCHAR(50) NOT NULL,
  `sf_image` VARCHAR(50) NOT NULL
);

use snacks;

CREATE TABLE `snacks` (
  `snack_id` INT(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `snack_name` VARCHAR(50) NOT NULL,
  `snack_price` FLOAT(5) NOT NULL,
  `snack_desc` VARCHAR(50) NOT NULL,
  `snack_image` VARCHAR(50) NOT NULL
);

use rice;

CREATE TABLE `rice` (
  `rice_id` INT(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `rice_name` VARCHAR(50) NOT NULL,
  `rice_price` FLOAT(5) NOT NULL,
  `rice_desc` VARCHAR(50) NOT NULL,
  `rice_image` VARCHAR(50) NOT NULL
);

use can;

CREATE TABLE `can` (
  `can_id` INT(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `can_name` VARCHAR(50) NOT NULL,
  `can_price` FLOAT(5) NOT NULL,
  `can_desc` VARCHAR(50) NOT NULL,
  `can_image` VARCHAR(50) NOT NULL
);