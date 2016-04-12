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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `addressdetails` */

insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (1,0,'address','per landmark','pune','ARUNACHAL PRADESH','3332','India','address','per landmark','pune','ARUNACHAL PRADESH','3332','India','2016-03-13 17:49:49');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (2,1,'address','per landmark','pune','ANDHRA PRADESH','3332','India','address','per landmark','pune','ANDHRA PRADESH','3332','India','2016-03-13 17:52:00');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (3,2,'address','per landmark','pune','ANDHRA PRADESH','3332','India','address','per landmark','pune','ANDHRA PRADESH','3332','India','2016-03-19 20:22:30');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (4,3,'address','per landmark','pune','ANDHRA PRADESH','3332','India','address','per landmark','pune','ANDHRA PRADESH','3332','India','2016-03-26 19:32:35');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (5,6,'address','per landmark','pune','ARUNACHAL PRADESH','3332','India','address','per landmark','pune','ARUNACHAL PRADESH','3332','India','2016-03-27 19:57:06');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (6,7,'address','per landmark','pune','ARUNACHAL PRADESH','3332','India','address','per landmark','pune','ARUNACHAL PRADESH','3332','India','2016-04-03 19:09:42');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (7,10,'address','per landmark','pune','ARUNACHAL PRADESH','3332','India','address','per landmark','pune','ARUNACHAL PRADESH','7834','India','2016-04-08 15:08:01');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (8,11,'address','per landmark','pune','ANDHRA PRADESH','3332','India','address','per landmark','pune','ANDHRA PRADESH','3332','India','2016-04-08 17:59:08');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (9,12,'address','per landmark','pune','ANDHRA PRADESH','3332','India','address','per landmark','pune','ANDHRA PRADESH','3332','India','2016-04-09 12:04:19');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (10,13,'C/o Anurag Tiwari, S/o Rameshwar Tiwari, G # 903, Annex, Magarpatta City, Hadapsar Gaoan, Hadapsar','Near Nobel Hospital','Pune','MAHARASHTRA','411013','India','C/o Anurag Tiwari, S/o Rameshwar Tiwari, G # 903, Annex, Magarpatta City, Hadapsar Gaoan, Hadapsar','Near Nobel Hospital','Pune','MAHARASHTRA','411013','India','2016-04-09 12:14:11');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (11,14,'S/o Laxmandas Gyanchand Chandwani, Grandson of Gyanchand, Block #33, Nr. M G High School, Bara Kholi, Nara Road, Jaripat','(Main Road Jaripatka) Near floor machine and polutry form','Nagpur MAHARASHTRA','DADRA AND NAGAR HAVELI','440014','India','C/o Anurag Tiwari, S/o Rameshwar Tiwari, G # 903, Annex, Magarpatta City, Hadapsar Gaoan, Hadapsar','Near Nobel Hospital, MAGARPATTA CITY MAIN ROAD, Magarpatta Cornor','PUNE, Dist Pune, MAHARASHTRA','ANDAMAN AND NICOBAR ISLANDS','411013','India','2016-04-09 12:41:37');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (12,15,'C/o Anurag Tiwari, S/o Rameshwar Tiwari, G # 903, Annex, Magarpatta City, Hadapsar Gaoan, Hadapsar','per landmark','pune','ANDAMAN AND NICOBAR ISLANDS','3332','India','C/o Anurag Tiwari, S/o Rameshwar Tiwari, G # 903, Annex, Magarpatta City, Hadapsar Gaoan, Hadapsar','per landmark','pune','ANDAMAN AND NICOBAR ISLANDS','3332','India','2016-04-09 15:32:04');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (13,16,'address','per landmark','pune','ANDHRA PRADESH','3332','India','address','per landmark','pune','ANDHRA PRADESH','3332','India','2016-04-09 18:20:30');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (14,17,'address','per landmark','pune','ANDHRA PRADESH','3332','India','address','per landmark','pune','ANDHRA PRADESH','3332','India','2016-04-09 18:33:53');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (15,18,'address','per landmark','pune','ARUNACHAL PRADESH','3332','India','address','per landmark','pune','ARUNACHAL PRADESH','3332','India','2016-04-09 18:44:34');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (16,19,'address','per landmark','pune','ARUNACHAL PRADESH','3332','India','address','per landmark','pune','ARUNACHAL PRADESH','3332','India','2016-04-09 19:24:30');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (17,20,'address','per landmark','pune','ANDHRA PRADESH','3332','India','address','per landmark','pune','ANDHRA PRADESH','3332','India','2016-04-09 21:29:20');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (18,21,'C/o Anurag Tiwari, S/o Rameshwar Tiwari, G # 903, Annex, Magarpatta City, Hadapsar Gaoan, Hadapsar','(Main Road Jaripatka) Near floor machine and polutry form','pune','MAHARASHTRA','440014','India','C/o Anurag Tiwari, S/o Rameshwar Tiwari, G # 903, Annex, Magarpatta City, Hadapsar Gaoan, Hadapsar','(Main Road Jaripatka) Near floor machine and polutry form','pune','MAHARASHTRA','440014','India','2016-04-09 22:28:19');
insert  into `addressdetails`(`id`,`recordId`,`permAdd`,`permLandmark`,`permCity`,`permState`,`permPincode`,`permCountry`,`corrAdd`,`corrLandmark`,`corrCity`,`corrState`,`corrPincode`,`corrCountry`,`EntryTimeStamp`) values (19,22,'address','per landmark','pune','MAHARASHTRA','440014','India','address','per landmark','pune','MAHARASHTRA','440014','India','2016-04-09 22:37:56');

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

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
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (10,10,'Yes','account holder','account number','Saving','bank name','branch','ifsc','MICR','2016-04-08 16:18:11');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (11,11,'Yes','account holder','account number','Saving','bank name','branch','ifsc','MICR','2016-04-08 17:59:35');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (12,12,'Yes','account holder','account number','Saving','bank name','branch','ifsc','MICR','2016-04-09 12:04:50');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (13,13,'Yes','account holder','account number','Saving','bank name1','branch','ifsc','MICR','2016-04-09 12:14:46');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (14,14,'Yes','122','account number','Saving','bank name','branch','ifsc','MICR','2016-04-09 12:42:15');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (15,15,'Yes','account holder','account number1','Saving','bank name','branch','ifsc','MICR','2016-04-09 15:32:29');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (16,16,'Yes','account holder','account number','Current','bank name','branch','ifsc','MICR','2016-04-09 18:20:57');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (17,18,'Yes','account holder','account number','Saving','bank name','branch','ifsc','MICR','2016-04-09 18:46:42');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (18,19,'Yes','account holder','account number','Saving','bank name','branch','ifsc','MICR','2016-04-09 19:24:56');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (19,21,'Yes','account holder','22121','Saving','bank name','branch','11111','MICR','2016-04-09 22:29:59');
insert  into `bankinformation`(`id`,`recordId`,`receiveCredit`,`accountHolderName`,`accountNumber`,`accountType`,`bankName`,`branchName`,`IFSC`,`MICR`,`EntryTimeStamp`) values (20,22,'Yes','account holder','account number','Saving','bank name','branch','ifsc','MICR','2016-04-09 22:38:51');

/*Table structure for table `coupons` */

DROP TABLE IF EXISTS `coupons`;

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `couponCode` varchar(100) DEFAULT NULL,
  `appliedFor` varchar(10) DEFAULT NULL COMMENT 'Discount is applied for which financial year',
  `rate` int(11) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `EntryTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Data for the table `coupons` */

insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (1,'c1',NULL,10,'0000-00-00','0000-00-00',0,'2016-03-26 17:24:30');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (2,'',NULL,0,'0000-00-00','0000-00-00',0,'2016-03-26 17:24:30');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (3,'',NULL,0,'0000-00-00','0000-00-00',0,'2016-03-26 17:24:30');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (4,'',NULL,0,'0000-00-00','0000-00-00',0,'2016-03-26 17:24:30');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (5,'',NULL,0,'0000-00-00','0000-00-00',0,'2016-03-26 17:24:30');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (6,'',NULL,0,'0000-00-00','0000-00-00',0,'2016-03-26 17:24:30');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (7,'c1',NULL,10,'0000-00-00','0000-00-00',0,'2016-03-26 17:27:12');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (8,'c1',NULL,10,'0000-00-00','0000-00-00',0,'2016-03-26 17:33:56');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (9,'c1',NULL,11,'2016-03-13','2016-03-17',0,'2016-03-26 17:41:25');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (10,'c3',NULL,33,'2016-03-01','2016-03-23',0,'2016-03-26 17:41:25');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (11,'c6',NULL,0,'0000-00-00','0000-00-00',0,'2016-03-26 17:41:25');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (12,'coupon1',NULL,11,'2016-03-01','2016-03-30',0,'2016-03-26 19:15:15');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (13,'coupon2',NULL,44,'2016-03-15','2016-03-22',0,'2016-03-26 19:15:15');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (14,'coupon4',NULL,10,'2016-03-09','2016-03-28',0,'2016-03-26 19:15:15');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (15,'coupon1',NULL,11,'2016-03-01','2016-03-30',0,'2016-04-03 19:05:10');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (16,'coupon2',NULL,44,'2016-03-15','2016-03-22',0,'2016-04-03 19:05:10');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (17,'coupon4',NULL,10,'2016-03-09','2016-03-28',0,'2016-04-03 19:05:10');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (18,'coupon6',NULL,20,'2016-04-01','2016-04-30',0,'2016-04-03 19:05:10');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (19,'coupon1',NULL,11,'2016-03-01','2016-03-30',0,'2016-04-03 19:06:47');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (20,'coupon2',NULL,44,'2016-03-15','2016-03-22',0,'2016-04-03 19:06:47');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (21,'coupon4',NULL,10,'2016-03-09','2016-03-28',0,'2016-04-03 19:06:47');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (22,'coupon6',NULL,20,'2016-04-01','2016-04-30',0,'2016-04-03 19:06:47');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (23,'c6',NULL,1,'2016-04-19','2016-04-30',0,'2016-04-03 19:06:47');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (24,'coupon1',NULL,11,'2016-03-01','2016-03-30',0,'2016-04-03 19:08:37');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (25,'coupon2',NULL,44,'2016-03-15','2016-03-22',0,'2016-04-03 19:08:37');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (26,'coupon4',NULL,10,'2016-03-09','2016-03-28',0,'2016-04-03 19:08:37');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (27,'coupon6',NULL,20,'2016-04-01','2016-04-30',0,'2016-04-03 19:08:37');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (28,'c6',NULL,1,'2016-04-01','2016-04-30',0,'2016-04-03 19:08:37');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (29,'coupon1','Two',11,'2016-03-01','2016-03-30',0,'2016-04-08 18:48:46');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (30,'coupon1','Two',1,'2016-03-01','2016-03-30',0,'2016-04-08 19:22:54');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (31,'c2','One',2,'2016-04-11','2016-04-29',0,'2016-04-08 19:22:54');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (32,'c3','Two',3,'2016-04-03','2016-04-23',0,'2016-04-08 19:22:54');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (33,'c4','One',4,'2016-04-26','2016-04-29',0,'2016-04-08 19:22:54');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (34,'c5','One',5,'2016-04-03','2016-04-29',0,'2016-04-08 19:22:54');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (35,'c6','Two',6,'2016-04-01','2016-04-29',0,'2016-04-08 19:22:54');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (36,'coupon1','Two',1,'2016-03-01','2016-03-30',0,'2016-04-08 19:24:24');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (37,'c2','One',2,'2016-04-11','2016-04-29',0,'2016-04-08 19:24:24');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (38,'c3','Two',3,'2016-04-03','2016-04-23',0,'2016-04-08 19:24:24');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (39,'c4','One',4,'2016-04-26','2016-04-29',0,'2016-04-08 19:24:24');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (40,'c5','One',5,'2016-04-03','2016-04-29',0,'2016-04-08 19:24:24');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (41,'c6','Two',6,'2016-04-01','2016-04-29',0,'2016-04-08 19:24:24');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (42,'coupon1','Two',1,'2016-03-01','2016-03-30',0,'2016-04-08 19:24:31');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (43,'c2','One',2,'2016-04-11','2016-04-29',0,'2016-04-08 19:24:31');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (44,'c3','Two',3,'2016-04-03','2016-04-23',0,'2016-04-08 19:24:31');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (45,'c4','One',4,'2016-04-26','2016-04-29',0,'2016-04-08 19:24:31');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (46,'c5','One',5,'2016-04-03','2016-04-29',0,'2016-04-08 19:24:31');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (47,'c6','Two',6,'2016-04-01','2016-04-29',0,'2016-04-08 19:24:31');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (48,'coupon1','Two',1,'2016-03-01','2016-03-30',1,'2016-04-08 20:06:24');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (49,'c2','One',2,'2016-04-11','2016-04-29',1,'2016-04-08 20:06:24');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (50,'c3','Two',3,'2016-04-03','2016-04-23',1,'2016-04-08 20:06:24');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (51,'c4','One',4,'2016-04-26','2016-04-29',1,'2016-04-08 20:06:24');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (52,'c5','One',5,'2016-04-03','2016-04-29',1,'2016-04-08 20:06:24');
insert  into `coupons`(`id`,`couponCode`,`appliedFor`,`rate`,`startDate`,`endDate`,`active`,`EntryTimeStamp`) values (53,'c6','Two',6,'2016-04-01','2016-04-29',1,'2016-04-08 20:06:24');

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

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
insert  into `filingcharges`(`id`,`startDate`,`year1`,`one1`,`two1`,`three1`,`four1`,`five1`,`six1`,`year2`,`one2`,`two2`,`three2`,`four2`,`five2`,`six2`,`active`,`EntryTimeStamp`) values (10,'2016-04-03','2014-15',100,200,300,400,500,600,'2015-16',111,222,333,444,555,666,0,'2016-04-03 19:08:37');
insert  into `filingcharges`(`id`,`startDate`,`year1`,`one1`,`two1`,`three1`,`four1`,`five1`,`six1`,`year2`,`one2`,`two2`,`three2`,`four2`,`five2`,`six2`,`active`,`EntryTimeStamp`) values (11,'2016-04-08','2014-15',100,200,300,400,500,600,'2015-16',111,222,333,444,555,666,0,'2016-04-08 18:48:46');
insert  into `filingcharges`(`id`,`startDate`,`year1`,`one1`,`two1`,`three1`,`four1`,`five1`,`six1`,`year2`,`one2`,`two2`,`three2`,`four2`,`five2`,`six2`,`active`,`EntryTimeStamp`) values (12,'2016-04-08','2014-15',100,200,300,400,500,600,'2015-16',111,222,333,444,555,666,0,'2016-04-08 19:22:54');
insert  into `filingcharges`(`id`,`startDate`,`year1`,`one1`,`two1`,`three1`,`four1`,`five1`,`six1`,`year2`,`one2`,`two2`,`three2`,`four2`,`five2`,`six2`,`active`,`EntryTimeStamp`) values (13,'2016-04-08','2014-15',100,200,300,400,500,600,'2015-16',111,222,333,444,555,666,0,'2016-04-08 19:24:24');
insert  into `filingcharges`(`id`,`startDate`,`year1`,`one1`,`two1`,`three1`,`four1`,`five1`,`six1`,`year2`,`one2`,`two2`,`three2`,`four2`,`five2`,`six2`,`active`,`EntryTimeStamp`) values (14,'2016-04-08','2014-15',100,200,300,400,500,600,'2015-16',111,222,333,444,555,666,0,'2016-04-08 19:24:31');
insert  into `filingcharges`(`id`,`startDate`,`year1`,`one1`,`two1`,`three1`,`four1`,`five1`,`six1`,`year2`,`one2`,`two2`,`three2`,`four2`,`five2`,`six2`,`active`,`EntryTimeStamp`) values (15,'2016-04-08','2014-15',1000,2000,3000,4000,5000,6000,'2015-16',1111,2222,3333,4444,5555,6666,1,'2016-04-08 20:06:24');

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `formdetails` */

insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (1,1,'2015-16',2,'uploaded_forms/1234567890_2015-16_abcd_IMG-20160224-WA0011.jpg',NULL,'uploaded_forms/1234567890_2015-16_IMG-20160224-WA0010.jpg',NULL,'',NULL,'',NULL,'',NULL,'',NULL,'2016-03-13 20:23:53');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (2,1,'2014-15',6,'uploaded_forms/1234567890_2014-15_11_IMG-20160224-WA0011.jpg','11','uploaded_forms/1234567890_2014-15_IMG-20160224-WA0010.jpg','','uploaded_forms/1234567890_2014-15_33_a.xml','33','uploaded_forms/1234567890_2014-15_TNG.zip','','uploaded_forms/1234567890_2014-15_3bd889854670941bdcdaab0c988eacd2.jpg','','uploaded_forms/1234567890_2014-15_66_how-to-draw-a-goldfish-for-kids-step-5_1_000000096417_5.gif','66','2016-03-13 20:34:08');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (3,2,'2015-16',2,'uploaded_forms/2221asdsss_2015-16_abcd_oc2031.sql','abcd','uploaded_forms/2221asdsss_2015-16_2_Tue.log','','','','','','','','','','2016-03-19 20:23:48');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (4,3,'2014-15',3,'uploaded_forms/2221asdsss_2014-15_README.md','','uploaded_forms/2221asdsss_2014-15_CHANGELOG.md','','uploaded_forms/2221asdsss_2014-15_readme.txt','','','','','','','','2016-03-26 19:33:32');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (5,6,'2015-16',5,'uploaded_forms/1234567890_2015-16_123_global-config.ini','123','uploaded_forms/1234567890_2015-16_global-config.ini','','uploaded_forms/1234567890_2015-16_8977_readme.txt','8977','uploaded_forms/1234567890_2015-16_uninstall.php','','uploaded_forms/1234567890_2015-16_changelog.md','','','','2016-03-27 19:59:01');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (6,7,'2014-15',4,'uploaded_forms/1234567890_2014-15_1_ava_02.00.03.00.xml','1','uploaded_forms/1234567890_2014-15_2_min_admin.php','2','uploaded_forms/1234567890_2014-15_2_Tue.log','','uploaded_forms/1234567890_2014-15_oc2031.sql','','','','','','2016-04-03 19:10:25');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (7,7,'2014-15',4,'uploaded_forms/1234567890_2014-15_1_min_admin.php','1','uploaded_forms/1234567890_2014-15_2_a1.xml','2','uploaded_forms/1234567890_2014-15_ava_02.00.03.00.xml','','uploaded_forms/1234567890_2014-15_4_ava.xml','4','','','','','2016-04-03 19:12:13');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (8,10,'2015-16',1,'uploaded_forms/1234567890_2015-16_1_ava.xml','1','','','','','','','','','','','2016-04-08 15:51:58');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (9,11,'2014-15',1,'uploaded_forms/1234567890_2014-15_a1.xml','','','','','','','','','','','','2016-04-08 17:59:18');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (10,12,'2015-16',1,'uploaded_forms/1234567890_2015-16_a1.xml','','','','','','','','','','','','2016-04-09 12:04:35');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (11,13,'2014-15',2,'uploaded_forms/2221asdsss_2014-15_1_a1.xml','1','uploaded_forms/2221asdsss_2014-15_ava.xml','','','','','','','','','','2016-04-09 12:14:31');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (12,14,'2015-16',2,'uploaded_forms/1234567890_2015-16_11_a1.xml','11','uploaded_forms/1234567890_2015-16_ava.xml','','','','','','','','','','2016-04-09 12:42:01');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (13,15,'2015-16',1,'uploaded_forms/1234567890_2015-16_12_ava.xml','12','','','','','','','','','','','2016-04-09 15:32:16');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (14,16,'2014-15',1,'uploaded_forms/1234567890_2014-15_a1.xml','','','','','','','','','','','','2016-04-09 18:20:46');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (15,18,'2015-16',1,'uploaded_forms/1234567890_2015-16_a1.xml','','','','','','','','','','','','2016-04-09 18:46:01');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (16,19,'2015-16',1,'uploaded_forms/1234567890_2015-16_a1.xml','','','','','','','','','','','','2016-04-09 19:24:38');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (17,20,'2015-16',1,'uploaded_forms/1234567890_2015-16_a1.xml','','','','','','','','','','','','2016-04-09 21:29:54');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (18,21,'2015-16',2,'uploaded_forms/1234567890_2015-16_xyz_a1.xml','xyz','uploaded_forms/1234567890_2015-16_2_Tue.log','','','','','','','','','','2016-04-09 22:29:15');
insert  into `formdetails`(`id`,`recordId`,`financialYear`,`formCount`,`form1`,`form1Password`,`form2`,`form2Password`,`form3`,`form3Password`,`form4`,`form4Password`,`form5`,`form5Password`,`form6`,`form6Password`,`EntryTimeStamp`) values (19,22,'2015-16',2,'uploaded_forms/1234567890_2015-16_a1.xml','','uploaded_forms/1234567890_2015-16_2_Tue.log','','','','','','','','','','2016-04-09 22:38:09');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recordId` int(10) DEFAULT NULL,
  `orderId` varchar(10) DEFAULT NULL,
  `zaakpayOrderId` varchar(100) DEFAULT NULL,
  `responseCode` varchar(10) DEFAULT NULL,
  `responseDescription` varchar(255) DEFAULT NULL,
  `checksum` varchar(255) DEFAULT NULL,
  `checksumVerified` varchar(20) DEFAULT NULL,
  `response` varchar(250) DEFAULT NULL,
  `paidFees` float DEFAULT NULL,
  `EntryTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `payment` */

insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (1,7,NULL,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1','',355.2,'2016-04-03 19:52:38');
insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (2,7,NULL,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1','',355.2,'2016-04-03 19:54:46');
insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (3,7,NULL,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1','',355.2,'2016-04-03 19:56:50');
insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (4,7,NULL,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1','',355.2,'2016-04-03 19:58:07');
insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (5,7,NULL,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1','',355.2,'2016-04-03 19:58:45');
insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (6,7,NULL,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1','',355.2,'2016-04-03 20:01:03');
insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (7,7,NULL,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1','',355.2,'2016-04-03 20:02:00');
insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (8,7,NULL,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1','',355.2,'2016-04-03 20:02:17');
insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (9,7,NULL,'ZPLive1459692156971','100','The transaction was completed successfully. ','9398748c94ee7f26c16c0a8ba8b5a24e4b458f1efe4987f9905fe2d10f309aa3','1',NULL,355.2,'2016-04-03 20:03:14');
insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (10,14,'IT14','','','','','0',NULL,2110.9,'2016-04-09 15:30:06');
insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (11,15,'IT15','ZPLive1460196162685','100','The transaction was completed successfully. ','ffc15db31fb63667005b427d2ada0583d80582029eb1a16b542719d6f00d970f','1',NULL,1044.34,'2016-04-09 15:34:21');
insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (12,19,'IT19','IT19','100','The transaction was completed successfully. ','c33094c4a93f8abb7d9826be6426068f7f8926f7a13fb207f0d80555ca3da805','1',NULL,1111,'2016-04-09 19:30:28');
insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (13,19,'IT19','IT19','100','The transaction was completed successfully. ','c33094c4a93f8abb7d9826be6426068f7f8926f7a13fb207f0d80555ca3da805','1',NULL,1111,'2016-04-09 19:43:24');
insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (14,19,'IT19','IT20','100','The transaction was completed successfully. ','254ca1f4f6cb7ad774905fed6ccac7ad8070ddbd968e502e9706102ee5cc9c2b','1',NULL,1055.45,'2016-04-09 19:47:36');
insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (15,19,'IT19','IT21','102','Customer cancelled transaction. ','1aec180556a2bb27aa39346c0537829b38b226d5d559c7e9b874b6f8a79bcf0c','1',NULL,1055.45,'2016-04-09 19:48:30');
insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (16,19,'IT19','IT21','102','Customer cancelled transaction. ','1aec180556a2bb27aa39346c0537829b38b226d5d559c7e9b874b6f8a79bcf0c','1',NULL,1055.45,'2016-04-09 19:49:19');
insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (17,19,'IT19','IT21','102','Customer cancelled transaction. ','1aec180556a2bb27aa39346c0537829b38b226d5d559c7e9b874b6f8a79bcf0c','1',NULL,1055.45,'2016-04-09 19:53:25');
insert  into `payment`(`id`,`recordId`,`orderId`,`zaakpayOrderId`,`responseCode`,`responseDescription`,`checksum`,`checksumVerified`,`response`,`paidFees`,`EntryTimeStamp`) values (18,22,'IT22','IT22','100','The transaction was completed successfully. ','c54078de0d431c01bfdddb045e842290120940a72503c93d4fb2d6ed673346e0','1',NULL,2155.34,'2016-04-09 22:40:08');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `personalinformation` */

insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (1,'1234567890','vijay','nn','na','las','2121','','02/16/2016','abc@abc.cc','Female','2016-03-27 18:41:55');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (2,'2221asdsss','vijay','nn','na','las','1212','','02/16/2016','abc@abc.cc','Male','2016-03-27 18:41:56');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (3,'2221asdsss','vijay','nn','na','las','12121','','02/16/2016','abc@abc.cc','Female','2016-03-27 18:41:57');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (4,'1234567890','vijay','nn','','','676aa','','','','Male','2016-03-27 19:08:03');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (5,'1234567890','vijay','nn','na','las','676aa','','02/16/2016','abc@abc.cc','Male','2016-03-27 19:08:57');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (6,'1234567890','vijay','nn','na','las','1234567890','','02/16/2016','abc@abc.cc','Male','2016-03-27 19:43:39');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (7,'1234567890','vijay','nn','na','las','222','','02/16/2016','abc@abc.cc','Male','2016-04-03 19:09:25');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (8,'2221asds','vija','nn','moha','nalawade','222','','04/21/2016','nalawade@g.com','Male','2016-04-07 17:54:41');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (9,'1234567890','vij','','g','na','1234167890','','04/25/2016','abc@abc.cc','Male','2016-04-08 14:25:49');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (10,'1234567890','VIJAY','NN','G','AA','1234167890','','04/25/2016','a@a.com','Male','2016-04-08 15:00:37');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (11,'1234567890','VIJAY','NN','NA','LAS','1234167890','','04/25/2016','abc@abc.cc','Female','2016-04-08 17:58:41');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (12,'1234567890','VIJAY','NN','NA','NA','1234167890','','04/25/2016','abc@abc.cc','Male','2016-04-09 12:04:07');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (13,'2221ASDSSS','VIJAY','NN','NA','LAS','1234167890','','04/25/2016','nalawadeviay@gmail.com','Male','2016-04-09 12:13:12');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (14,'1234567890','VIJAY','NN','NA','LAS','1234167890','','04/25/2016','nalawadeviay@gmail.com','Male','2016-04-09 12:17:43');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (15,'1234567890','VIJAY','NN','NA','LAS','1234167890','','04/25/2016','nalawadeviay@gmail.com','Female','2016-04-09 15:31:43');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (16,'1234567890','VIJAY','NN','NA','LAS','1234167890','','22-04-2016','nalawadeviay@gmail.com','Male','2016-04-09 18:20:15');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (17,'1234567890','VIJAY','NN','NA','LAS','1234167890','','04/25/2016','nalawadeviay@gmail.com','Male','2016-04-09 18:33:40');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (18,'1234567890','VIJAY','NN','NA','LAS','1234167890','','13-04-2016','nalawadeviay@gmail.com','Male','2016-04-09 18:44:20');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (19,'1234567890','VIJAY','NN','NA','LAS','1234167890','','04/25/2016','nalawadeviay@gmail.com','Male','2016-04-09 19:24:20');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (20,'1234567890','VIJAY','NN','NA','LAS','1234167890','','04/25/2016','nalawadeviay@gmail.com','Male','2016-04-09 21:28:45');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (22,'1234567890','VIJAY','NN','NA','NALAWADE','1234167890','','12-04-2016','nalawadeviay@gmail.com','Male','2016-04-09 22:37:40');
insert  into `personalinformation`(`id`,`PAN`,`FirstName`,`MiddleName`,`FatherName`,`LastName`,`Mobile`,`ContactNumber`,`BirthDate`,`Email`,`Gender`,`EntryTimeStamp`) values (27,'1234567890','VIJAY','NN','NA','LAS','1234167890','122','04/25/2016','nalawadeviay@gmail.com','Male','2016-04-09 22:36:24');

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
