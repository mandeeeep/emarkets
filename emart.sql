/*
SQLyog Enterprise - MySQL GUI v6.15
MySQL - 5.5.8-log : Database - a3881293_emarket
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `a3881293_emarket`;

USE `a3881293_emarket`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `admin` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admins` */

insert  into `admins`(`adminid`,`admin`,`pass`) values (1,'admin','GORIllAZ');

/*Table structure for table `brands` */

DROP TABLE IF EXISTS `brands`;

CREATE TABLE `brands` (
  `brand` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`brand`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `brands` */

insert  into `brands`(`brand`,`brand_name`) values (1,'Nokia'),(2,'Sony Ericsson'),(3,'Samsung'),(4,'LG'),(5,'BlackBerry'),(6,'Motorola'),(7,'Micromax'),(8,'HTC'),(9,'Others');

/*Table structure for table `items` */

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `time_period` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `brand` int(11) NOT NULL,
  `condition` int(11) NOT NULL,
  `negotiable` int(11) NOT NULL,
  `market_price` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `warranty` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `regid` int(11) NOT NULL,
  PRIMARY KEY (`item_id`),
  KEY `brand` (`brand`),
  KEY `regid` (`regid`),
  CONSTRAINT `FK_items_2` FOREIGN KEY (`brand`) REFERENCES `brands` (`brand`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `items` */

/*Table structure for table `mobiles` */

DROP TABLE IF EXISTS `mobiles`;

CREATE TABLE `mobiles` (
  `mobileid` int(11) NOT NULL AUTO_INCREMENT,
  `brand` int(11) NOT NULL,
  `model` varchar(255) DEFAULT NULL,
  `description` longtext,
  `announced` varchar(255) DEFAULT NULL,
  `size/dimension` varchar(255) DEFAULT NULL,
  `size/weight` varchar(255) DEFAULT NULL,
  `display/type` varchar(255) DEFAULT NULL,
  `display/size` varchar(255) DEFAULT NULL,
  `sound/speakerphone` varchar(255) DEFAULT NULL,
  `memory/phonebook` varchar(255) DEFAULT NULL,
  `memory/internal` varchar(255) DEFAULT NULL,
  `memory/external` varchar(255) DEFAULT NULL,
  `data/gprs` varchar(255) DEFAULT NULL,
  `data/edge` varchar(255) DEFAULT NULL,
  `data/bt` varchar(255) DEFAULT NULL,
  `data/wlan` varchar(255) DEFAULT NULL,
  `data/usb` varchar(255) DEFAULT NULL,
  `data/3g` varchar(255) DEFAULT NULL,
  `camera/primary` varchar(255) DEFAULT NULL,
  `camera/secondary` varchar(255) DEFAULT NULL,
  `camera/feature` varchar(255) DEFAULT NULL,
  `camera/video` varchar(255) DEFAULT NULL,
  `feature/os` varchar(255) DEFAULT NULL,
  `feature/cpu` varchar(255) DEFAULT NULL,
  `feature/radio` varchar(255) DEFAULT NULL,
  `feature/games` varchar(255) DEFAULT NULL,
  `feature/color` varchar(255) DEFAULT NULL,
  `feature/java` varchar(255) DEFAULT NULL,
  `battery/talktime` varchar(255) DEFAULT NULL,
  `battery/standby` varchar(255) DEFAULT NULL,
  `battery/type` varchar(255) DEFAULT NULL,
  `market_price` varchar(255) DEFAULT NULL,
  `mob_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mobileid`),
  KEY `brand` (`brand`),
  CONSTRAINT `FK_mobiles_1` FOREIGN KEY (`brand`) REFERENCES `brands` (`brand`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `mobiles` */

/*Table structure for table `registration` */

DROP TABLE IF EXISTS `registration`;

CREATE TABLE `registration` (
  `regid` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`regid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `registration` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
