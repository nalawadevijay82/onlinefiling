/*
SQLyog Community v12.2.1 (64 bit)
MySQL - 5.5.39 : Database - onlineitfiling
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`onlineitfiling` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `onlineitfiling`;

/*Table structure for table `addressdetails` */

DROP TABLE IF EXISTS `addressdetails`;

CREATE TABLE `addressdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recordId` int(11) NOT NULL,
  `permAdd` varchar(250) DEFAULT NULL,
  `permLandmark` varchar(250) DEFAULT NULL,
  `permCity` varchar(250) DEFAULT NULL,
  `permState` varchar(100) DEFAULT NULL,
  `permPincode` varchar(20) DEFAULT NULL,
  `permCountry` varchar(100) DEFAULT NULL,
  `corrAdd` varchar(250) DEFAULT NULL,
  `corrLandmark` varchar(250) DEFAULT NULL,
  `corrCity` varchar(250) DEFAULT NULL,
  `corrState` varchar(100) DEFAULT NULL,
  `corrPincode` varchar(20) DEFAULT NULL,
  `corrCountry` varchar(100) DEFAULT NULL,
  `EntryTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `addressdetails` */

insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (1,0,'address','per landmark','pune','ARUNACHAL PRADESH','3332','India','address','per landmark','pune','ARUNACHAL PRADESH','3332','India','2016-03-13 17:49:49');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (2,1,'address','per landmark','pune','ANDHRA PRADESH','3332','India','address','per landmark','pune','ANDHRA PRADESH','3332','India','2016-03-13 17:52:00');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (3,2,'address','per landmark','pune','ANDHRA PRADESH','3332','India','address','per landmark','pune','ANDHRA PRADESH','3332','India','2016-03-19 20:22:30');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (4,3,'address','per landmark','pune','ANDHRA PRADESH','3332','India','address','per landmark','pune','ANDHRA PRADESH','3332','India','2016-03-26 19:32:35');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (5,6,'address','per landmark','pune','ARUNACHAL PRADESH','3332','India','address','per landmark','pune','ARUNACHAL PRADESH','3332','India','2016-03-27 19:57:06');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (6,7,'address','per landmark','pune','ARUNACHAL PRADESH','3332','India','address','per landmark','pune','ARUNACHAL PRADESH','3332','India','2016-04-03 19:09:42');

/*Table structure for table `bankinformation` */

DROP TABLE IF EXISTS `bankinformation`;

CREATE TABLE `bankinformation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recordId` int(11) NOT NULL,
  `receiveCredit` char(5) DEFAULT NULL,
  `accountHolderName` varchar(250) DEFAULT NULL,
  `accountNumber` varchar(100) DEFAULT NULL,
  `accountType` varchar(10) DEFAULT NULL,
  `bankName` varchar(250) DEFAULT NULL,
  `branchName` varchar(250) DEFAULT NULL,
  `IFSC` varchar(100) DEFAULT NULL,
  `MICR` varchar(100) DEFAULT NULL,
  `EntryTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `bankinformation` */

insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (1,1,'Yes','account holder','account number','Current','bank name','branch','ifsc','micre','2016-03-13 20:49:08');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (2,1,'','account holder','account number1','Saving','bank name1','branch','ifsc','micre','2016-03-13 20:50:10');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (3,1,'No','account holder','account number','Current','bank name','branch','ifsc','micre','2016-03-13 20:53:30');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (4,1,'Yes','account holder','account number','Saving','bank name','branch','ifsc','micre','2016-03-13 20:53:50');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (5,2,'Yes','account holder','account number','Saving','bank name','branch','ifsc','micr','2016-03-19 20:28:34');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (6,2,'Yes','account holder','account number','Saving','bank name','branch','ifsc','micr','2016-03-19 20:40:14');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (7,3,'Yes','account holder','account number','Saving','bank name1','branch','ifsc','micre','2016-03-26 19:33:59');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (8,6,'Yes','122','account number','Saving','bank name','branch','ifsc','micre','2016-03-27 20:00:30');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (9,7,'Yes','account holder','account number','Saving','bank name','branch','ifsc','micre','2016-04-03 19:12:58');

/*Table structure for table `coupons` */

DROP TABLE IF EXISTS `coupons`;

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `couponCode` varchar(100) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `EntryTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `coupons` */

insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (1,'c1',10,'0000-00-00','0000-00-00',0,'2016-03-26 17:24:30');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (2,'',0,'0000-00-00','0000-00-00',0,'2016-03-26 17:24:30');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (3,'',0,'0000-00-00','0000-00-00',0,'2016-03-26 17:24:30');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (4,'',0,'0000-00-00','0000-00-00',0,'2016-03-26 17:24:30');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (5,'',0,'0000-00-00','0000-00-00',0,'2016-03-26 17:24:30');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (6,'',0,'0000-00-00','0000-00-00',0,'2016-03-26 17:24:30');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (7,'c1',10,'0000-00-00','0000-00-00',0,'2016-03-26 17:27:12');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (8,'c1',10,'0000-00-00','0000-00-00',0,'2016-03-26 17:33:56');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (9,'c1',11,'2016-03-13','2016-03-17',0,'2016-03-26 17:41:25');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (10,'c3',33,'2016-03-01','2016-03-23',0,'2016-03-26 17:41:25');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (11,'c6',0,'0000-00-00','0000-00-00',0,'2016-03-26 17:41:25');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (12,'coupon1',11,'2016-03-01','2016-03-30',0,'2016-03-26 19:15:15');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (13,'coupon2',44,'2016-03-15','2016-03-22',0,'2016-03-26 19:15:15');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (14,'coupon4',10,'2016-03-09','2016-03-28',0,'2016-03-26 19:15:15');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (15,'coupon1',11,'2016-03-01','2016-03-30',0,'2016-04-03 19:05:10');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (16,'coupon2',44,'2016-03-15','2016-03-22',0,'2016-04-03 19:05:10');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (17,'coupon4',10,'2016-03-09','2016-03-28',0,'2016-04-03 19:05:10');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (18,'coupon6',20,'2016-04-01','2016-04-30',0,'2016-04-03 19:05:10');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (19,'coupon1',11,'2016-03-01','2016-03-30',0,'2016-04-03 19:06:47');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (20,'coupon2',44,'2016-03-15','2016-03-22',0,'2016-04-03 19:06:47');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (21,'coupon4',10,'2016-03-09','2016-03-28',0,'2016-04-03 19:06:47');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (22,'coupon6',20,'2016-04-01','2016-04-30',0,'2016-04-03 19:06:47');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (23,'c6',1,'2016-04-19','2016-04-30',0,'2016-04-03 19:06:47');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (24,'coupon1',11,'2016-03-01','2016-03-30',1,'2016-04-03 19:08:37');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (25,'coupon2',44,'2016-03-15','2016-03-22',1,'2016-04-03 19:08:37');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (26,'coupon4',10,'2016-03-09','2016-03-28',1,'2016-04-03 19:08:37');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (27,'coupon6',20,'2016-04-01','2016-04-30',1,'2016-04-03 19:08:37');
insert  into `coupons`(`id`,`couponCode`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (28,'c6',1,'2016-04-01','2016-04-30',1,'2016-04-03 19:08:37');

/*Table structure for table `filingcharges` */

DROP TABLE IF EXISTS `filingcharges`;

CREATE TABLE `filingcharges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `startDate` date NOT NULL,
  `year1` varchar(20) NOT NULL,
  `one1` float NOT NULL,
  `two1` float NOT NULL,
  `three1` float NOT NULL,
  `four1` float NOT NULL,
  `five1` float NOT NULL,
  `six1` float NOT NULL,
  `year2` varchar(20) NOT NULL,
  `one2` float NOT NULL,
  `two2` float NOT NULL,
  `three2` float NOT NULL,
  `four2` float NOT NULL,
  `five2` float NOT NULL,
  `six2` float NOT NULL,
  `active` tinyint(1) NOT NULL,
  `EntryTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `filingcharges` */

insert  into `filingcharges`(`id`,`startDate`,`year1`,`one1`,`two1`,`three1`,`four1`,`five1`,`six1`,`year2`,`one2`,`two2`,`three2`,`four2`,`five2`,`six2`,`active`,`EntryTimeStamp`) values (1,'0000-00-00','',100,200,300,400,500,600,'',0,0,0,0,0,0,0,'2016-03-26 17:24:30');
insert  into `filingcharges`(`id`,`startDate`,`year1`,`one1`,`two1`,`three1`,`four1`,`five1`,`six1`,`year2`,`one2`,`two2`,`three2`,`four2`,`five2`,`six2`,`active`,`EntryTimeStamp`) values (2,'0000-00-00','',100,200,300,400,500,600,'',0,0,0,0,0,0,0,'2016-03-26 17:27:12');
insert  into `filingcharges`(`id`,`startDate`,`year1`,`one1`,`two1`,`three1`,`four1`,`five1`,`six1`,`year2`,`one2`,`two2`,`three2`,`four2`,`five2`,`six2`,`active`,`EntryTimeStamp`) values (3,'0000-00-00','',100,200,300,400,500,600,'',0,0,0,0,0,0,0,'2016-03-26 17:27:30');
insert  into `filingcharges`(`id`,`startDate`,`year1`,`one1`,`two1`,`three1`,`four1`,`five1`,`six1`,`year2`,`one2`,`two2`,`three2`,`four2`,`five2`,`six2`,`active`,`EntryTimeStamp`) values (4,'0000-00-00','',100,200,300,400,500,600,'',0,0,0,0,0,0,0,'2016-03-26 17:27:59');
insert  into `filingcharges`(`id`,`startDate`,`year1`,`one1`,`two1`,`three1`,`four1`,`five1`,`six1`,`year2`,`one2`,`two2`,`three2`,`four2`,`five2`,`six2`,`active`,`EntryTimeStamp`) values (5,'0000-00-00','',100,200,300,400,500,600,'',0,0,0,0,0,0,0,'2016-03-26 17:28:34');
insert  into `filingcharges`(`id`,`startDate`,`year1`,`one1`,`two1`,`three1`,`four1`,`five1`,`six1`,`year2`,`one2`,`two2`,`three2`,`four2`,`five2`,`six2`,`active`,`EntryTimeStamp`) values (6,'0000-00-00','',100,200,300,400,500,600,'',0,0,0,0,0,0,0,'2016-03-26 17:29:08');
insert  into `filingcharges`(`id`,`startDate`,`year1`,`one1`,`two1`,`three1`,`four1`,`five1`,`six1`,`year2`,`one2`,`two2`,`three2`,`four2`,`five2`,`six2`,`active`,`EntryTimeStamp`) values (7,'0000-00-00','',100,200,300,400,500,600,'',0,0,0,0,0,0,0,'2016-03-26 17:33:56');
insert  into `filingcharges`(`id`,`startDate`,`year1`,`one1`,`two1`,`three1`,`four1`,`five1`,`six1`,`year2`,`one2`,`two2`,`three2`,`four2`,`five2`,`six2`,`active`,`EntryTimeStamp`) values (8,'2016-03-15','',1000,2000,3,4,5,6,'',0,0,0,0,0,0,0,'2016-03-26 17:41:25');
insert  into `filingcharges`(`id`,`startDate`,`year1`,`one1`,`two1`,`three1`,`four1`,`five1`,`six1`,`year2`,`one2`,`two2`,`three2`,`four2`,`five2`,`six2`,`active`,`EntryTimeStamp`) values (9,'2016-03-26','',111,222,333,444,555,666,'',0,0,0,0,0,0,0,'2016-03-26 19:15:15');
insert  into `filingcharges`(`id`,`startDate`,`year1`,`one1`,`two1`,`three1`,`four1`,`five1`,`six1`,`year2`,`one2`,`two2`,`three2`,`four2`,`five2`,`six2`,`active`,`EntryTimeStamp`) values (10,'2016-04-03','2015-16',100,200,300,400,500,600,'2016-17',111,222,333,444,555,666,1,'2016-04-03 19:08:37');

/*Table structure for table `formdetails` */

DROP TABLE IF EXISTS `formdetails`;

CREATE TABLE `formdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recordId` int(11) NOT NULL,
  `financialYear` varchar(20) DEFAULT NULL,
  `formCount` int(11) DEFAULT NULL,
  `form1` varchar(250) DEFAULT NULL,
  `form1Password` varchar(250) DEFAULT NULL,
  `form2` varchar(250) DEFAULT NULL,
  `form2Password` varchar(250) DEFAULT NULL,
  `form3` varchar(250) DEFAULT NULL,
  `form3Password` varchar(250) DEFAULT NULL,
  `form4` varchar(250) DEFAULT NULL,
  `form4Password` varchar(250) DEFAULT NULL,
  `form5` varchar(250) DEFAULT NULL,
  `form5Password` varchar(250) DEFAULT NULL,
  `form6` varchar(250) DEFAULT NULL,
  `form6Password` varchar(250) DEFAULT NULL,
  `EntryTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `formdetails` */

insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (1,1,'2015-16',2,'uploaded_forms/1234567890_2015-16_abcd_IMG-20160224-WA0011.jpg',NULL,'uploaded_forms/1234567890_2015-16_IMG-20160224-WA0010.jpg',NULL,'',NULL,'',NULL,'',NULL,'',NULL,'2016-03-13 20:23:53');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (2,1,'2014-15',6,'uploaded_forms/1234567890_2014-15_11_IMG-20160224-WA0011.jpg','11','uploaded_forms/1234567890_2014-15_IMG-20160224-WA0010.jpg','','uploaded_forms/1234567890_2014-15_33_a.xml','33','uploaded_forms/1234567890_2014-15_TNG.zip','','uploaded_forms/1234567890_2014-15_3bd889854670941bdcdaab0c988eacd2.jpg','','uploaded_forms/1234567890_2014-15_66_how-to-draw-a-goldfish-for-kids-step-5_1_000000096417_5.gif','66','2016-03-13 20:34:08');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (3,2,'2015-16',2,'uploaded_forms/2221asdsss_2015-16_abcd_oc2031.sql','abcd','uploaded_forms/2221asdsss_2015-16_2_Tue.log','','','','','','','','','','2016-03-19 20:23:48');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (4,3,'2014-15',3,'uploaded_forms/2221asdsss_2014-15_README.md','','uploaded_forms/2221asdsss_2014-15_CHANGELOG.md','','uploaded_forms/2221asdsss_2014-15_readme.txt','','','','','','','','2016-03-26 19:33:32');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (5,6,'2015-16',5,'uploaded_forms/1234567890_2015-16_123_global-config.ini','123','uploaded_forms/1234567890_2015-16_global-config.ini','','uploaded_forms/1234567890_2015-16_8977_readme.txt','8977','uploaded_forms/1234567890_2015-16_uninstall.php','','uploaded_forms/1234567890_2015-16_changelog.md','','','','2016-03-27 19:59:01');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (6,7,'2014-15',4,'uploaded_forms/1234567890_2014-15_1_ava_02.00.03.00.xml','1','uploaded_forms/1234567890_2014-15_2_min_admin.php','2','uploaded_forms/1234567890_2014-15_2_Tue.log','','uploaded_forms/1234567890_2014-15_oc2031.sql','','','','','','2016-04-03 19:10:25');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (7,7,'2014-15',4,'uploaded_forms/1234567890_2014-15_1_min_admin.php','1','uploaded_forms/1234567890_2014-15_2_a1.xml','2','uploaded_forms/1234567890_2014-15_ava_02.00.03.00.xml','','uploaded_forms/1234567890_2014-15_4_ava.xml','4','','','','','2016-04-03 19:12:13');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recordId` int(10) DEFAULT NULL,
  `orderId` varchar(100) DEFAULT NULL,
  `responseCode` varchar(10) DEFAULT NULL,
  `responseDescription` varchar(255) DEFAULT NULL,
  `checksum` varchar(255) DEFAULT NULL,
  `checksumVerified` varchar(20) DEFAULT NULL,
  `response` varchar(250) DEFAULT NULL,
  `paidFees` float DEFAULT NULL,
  `EntryTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `payment` */

insert  into `payment`(`id`,`recordId`,`orderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (1,7,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1','',355.2,'2016-04-03 19:52:38');
insert  into `payment`(`id`,`recordId`,`orderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (2,7,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1','',355.2,'2016-04-03 19:54:46');
insert  into `payment`(`id`,`recordId`,`orderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (3,7,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1','',355.2,'2016-04-03 19:56:50');
insert  into `payment`(`id`,`recordId`,`orderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (4,7,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1','',355.2,'2016-04-03 19:58:07');
insert  into `payment`(`id`,`recordId`,`orderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (5,7,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1','',355.2,'2016-04-03 19:58:45');
insert  into `payment`(`id`,`recordId`,`orderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (6,7,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1','',355.2,'2016-04-03 20:01:03');
insert  into `payment`(`id`,`recordId`,`orderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (7,7,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1','',355.2,'2016-04-03 20:02:00');
insert  into `payment`(`id`,`recordId`,`orderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (8,7,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1','',355.2,'2016-04-03 20:02:17');
insert  into `payment`(`id`,`recordId`,`orderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (9,7,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1',NULL,355.2,'2016-04-03 20:03:14');

/*Table structure for table `personalinformation` */

DROP TABLE IF EXISTS `personalinformation`;

CREATE TABLE `personalinformation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PAN` varchar(10) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `MiddleName` varchar(50) DEFAULT NULL,
  `FatherName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `ContactNumber` varchar(20) DEFAULT NULL,
  `BirthDate` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `EntryTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `personalinformation` */

insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (1,'1234567890','vijay','nn','na','las','2121','','02/16/2016','abc@abc.cc','Female','2016-03-27 18:41:55');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (2,'2221asdsss','vijay','nn','na','las','1212','','02/16/2016','abc@abc.cc','Male','2016-03-27 18:41:56');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (3,'2221asdsss','vijay','nn','na','las','12121','','02/16/2016','abc@abc.cc','Female','2016-03-27 18:41:57');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (4,'1234567890','vijay','nn','','','676aa','','','','Male','2016-03-27 19:08:03');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (5,'1234567890','vijay','nn','na','las','676aa','','02/16/2016','abc@abc.cc','Male','2016-03-27 19:08:57');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (6,'1234567890','vijay','nn','na','las','1234567890','','02/16/2016','abc@abc.cc','Male','2016-03-27 19:43:39');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (7,'1234567890','vijay','nn','na','las','222','','02/16/2016','abc@abc.cc','Male','2016-04-03 19:09:25');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `EntryTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`type`,`EntryTimeStamp`) values (1,'admin','nalawadevijay@gmail.com','admin','admin','2016-03-20 16:26:17');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
