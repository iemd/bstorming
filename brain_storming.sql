-- MySQL dump 10.16  Distrib 10.1.31-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: brain_storming
-- ------------------------------------------------------
-- Server version	10.1.31-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bs_asm_store`
--

DROP TABLE IF EXISTS `bs_asm_store`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bs_asm_store` (
  `as_id` int(11) NOT NULL AUTO_INCREMENT,
  `asm_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `allocated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`as_id`),
  KEY `fk_asm_id` (`asm_id`),
  KEY `fk_asm_store_id` (`store_id`),
  CONSTRAINT `fk_asm_id` FOREIGN KEY (`asm_id`) REFERENCES `bs_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_asm_store_id` FOREIGN KEY (`store_id`) REFERENCES `bs_store` (`store_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_asm_store`
--

LOCK TABLES `bs_asm_store` WRITE;
/*!40000 ALTER TABLE `bs_asm_store` DISABLE KEYS */;
INSERT INTO `bs_asm_store` VALUES (17,5,2,'2019-02-28 10:09:29'),(18,5,3,'2019-02-28 10:09:29'),(50,16,5,'2019-03-02 09:13:59'),(51,17,11,'2019-03-02 09:14:07'),(52,17,12,'2019-03-02 09:14:07'),(53,3,11,'2019-03-02 10:03:32'),(54,3,12,'2019-03-02 10:03:32'),(55,3,13,'2019-03-02 10:03:32');
/*!40000 ALTER TABLE `bs_asm_store` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bs_brand`
--

DROP TABLE IF EXISTS `bs_brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bs_brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_brand`
--

LOCK TABLES `bs_brand` WRITE;
/*!40000 ALTER TABLE `bs_brand` DISABLE KEYS */;
INSERT INTO `bs_brand` VALUES (1,'Brand 1','2019-02-23 11:57:39','2019-02-23 11:57:39'),(2,'Brand 2','2019-02-23 11:57:39','2019-02-23 11:57:39'),(3,'Brand 3','2019-02-23 11:58:04','2019-02-23 11:58:04'),(4,'Brand 4','2019-02-23 11:58:04','2019-02-23 11:58:04'),(5,'Brand 5','2019-02-23 11:58:35','2019-02-23 11:58:35'),(6,'Brand 6','2019-02-23 11:58:35','2019-02-23 11:58:35'),(7,'Brand 7','2019-02-23 11:58:56','2019-02-23 11:58:56'),(17,'Brand4444','2019-02-25 09:29:53','2019-02-25 09:29:40'),(18,'Brand 8','2019-02-27 06:18:09','2019-02-27 06:18:09'),(19,'Brand TEST','2019-02-27 06:18:14','2019-02-27 06:18:14');
/*!40000 ALTER TABLE `bs_brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bs_store`
--

DROP TABLE IF EXISTS `bs_store`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bs_store` (
  `store_id` int(11) NOT NULL AUTO_INCREMENT,
  `store_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `manager_name` varchar(50) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `StoreID` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`store_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_store`
--

LOCK TABLES `bs_store` WRITE;
/*!40000 ALTER TABLE `bs_store` DISABLE KEYS */;
INSERT INTO `bs_store` VALUES (2,'Test Store23','dhljkhg','sgsg','800001','AYTIS','4543653','STORE002','74e59720dd08b1db45f7152d082c5051','2019-02-27 10:34:03','2019-02-25 10:09:35'),(3,'Test Store3','patna','patna','800001','AYTIS','4543653','STORE003','f4cc399f0effd13c888e310ea2cf5399','2019-02-25 10:43:00','2019-02-25 10:30:26'),(5,'Test Store 4','patna','patna','800001','AYTIS','4543653','STORE004','e10adc3949ba59abbe56e057f20f883e','2019-02-25 10:43:47','2019-02-25 10:43:47'),(6,'Test Store 5','patna','patna','800001','AYTIS','4543653','STORE005','e10adc3949ba59abbe56e057f20f883e','2019-02-25 10:44:04','2019-02-25 10:44:04'),(7,'Test Store 5','patna','patna','800001','AYTIS','4543653','STORE006','e10adc3949ba59abbe56e057f20f883e','2019-02-25 10:45:09','2019-02-25 10:45:09'),(8,'Test Store 6','patna','patna','800001','AYTIS','4543653','STORE007','e10adc3949ba59abbe56e057f20f883e','2019-02-25 10:45:30','2019-02-25 10:45:30'),(9,'Test Store 234','patna','patna','800001','AYTIS','4543653','STORE008','45c2a4c1773c1c4a72cab21e4a153343','2019-02-27 10:22:55','2019-02-27 10:22:55'),(10,'Test Store166','patna','patna','800001','AYTIS','4543653','STORE009','e10adc3949ba59abbe56e057f20f883e','2019-03-02 05:38:57','2019-03-02 05:38:57'),(11,'Test Store 545','patna','patna','800001','AYTIS','4543653','STORE0010','e10adc3949ba59abbe56e057f20f883e','2019-03-02 05:39:12','2019-03-02 05:39:12'),(12,'Test Store1656','patna','patna','800001','AYTIS','4543653','STORE0011','e10adc3949ba59abbe56e057f20f883e','2019-03-02 05:39:25','2019-03-02 05:39:25'),(13,'Test Store1','patna','patna','800001','AYTIS','4543653','STORE0012','e10adc3949ba59abbe56e057f20f883e','2019-03-02 05:39:40','2019-03-02 05:39:40');
/*!40000 ALTER TABLE `bs_store` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bs_store_brand`
--

DROP TABLE IF EXISTS `bs_store_brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bs_store_brand` (
  `sb_id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sb_id`),
  KEY `fk_store_id` (`store_id`) USING BTREE,
  KEY `fk_brand_id` (`brand_id`),
  CONSTRAINT `fk_brand_id` FOREIGN KEY (`brand_id`) REFERENCES `bs_brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_store_idd` FOREIGN KEY (`store_id`) REFERENCES `bs_store` (`store_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_store_brand`
--

LOCK TABLES `bs_store_brand` WRITE;
/*!40000 ALTER TABLE `bs_store_brand` DISABLE KEYS */;
INSERT INTO `bs_store_brand` VALUES (1,7,1,'2019-02-27 09:39:09'),(2,7,2,'2019-02-27 09:39:09'),(3,7,3,'2019-02-27 09:39:09'),(7,6,2,'2019-02-27 10:00:40'),(8,6,3,'2019-02-27 10:00:40'),(9,6,4,'2019-02-27 10:00:40'),(10,6,5,'2019-02-27 10:00:40'),(16,3,1,'2019-02-27 10:16:44'),(17,3,2,'2019-02-27 10:16:45'),(18,3,3,'2019-02-27 10:16:45'),(28,8,1,'2019-02-27 10:19:02'),(29,8,2,'2019-02-27 10:19:02'),(30,8,3,'2019-02-27 10:19:02'),(31,8,4,'2019-02-27 10:19:02'),(32,8,5,'2019-02-27 10:19:02'),(33,8,6,'2019-02-27 10:19:03'),(34,8,7,'2019-02-27 10:19:03'),(58,9,2,'2019-02-27 10:49:34'),(59,9,3,'2019-02-27 10:49:35'),(60,9,4,'2019-02-27 10:49:35'),(61,9,5,'2019-02-27 10:49:35'),(62,9,17,'2019-02-27 10:49:35'),(63,9,18,'2019-02-27 10:49:35'),(64,9,19,'2019-02-27 10:49:35'),(74,2,1,'2019-02-28 07:33:15'),(75,2,2,'2019-02-28 07:33:15'),(76,2,3,'2019-02-28 07:33:15'),(77,2,5,'2019-02-28 07:33:15'),(78,2,6,'2019-02-28 07:33:15'),(79,5,2,'2019-02-28 10:08:46'),(80,5,3,'2019-02-28 10:08:47'),(81,5,5,'2019-02-28 10:08:47');
/*!40000 ALTER TABLE `bs_store_brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bs_store_meeting`
--

DROP TABLE IF EXISTS `bs_store_meeting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bs_store_meeting` (
  `sm_id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `meeting_date` datetime NOT NULL,
  `meeting_time` varchar(50) NOT NULL,
  `concern` varchar(255) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `assigned_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_store_meeting`
--

LOCK TABLES `bs_store_meeting` WRITE;
/*!40000 ALTER TABLE `bs_store_meeting` DISABLE KEYS */;
INSERT INTO `bs_store_meeting` VALUES (1,8,'2019-03-06 00:00:00','01:00am','Meeting 1','Remark','Pending',3,'2019-03-05 11:46:35','2019-03-05 06:24:26'),(2,8,'2019-03-20 01:00:00','01:00pm','Meeting 2','Remark','Pending',3,'2019-03-06 08:05:55','2019-03-05 06:25:15'),(3,8,'2019-03-20 13:10:00','01:00pm','Meeting 3','Remark','Pending',3,'2019-03-06 08:09:04','2019-03-05 06:25:37'),(4,8,'2019-03-08 00:00:00','01:00am','Meeting 4','Remark','Pending',3,'2019-03-05 11:46:54','2019-03-05 06:25:44'),(5,8,'2019-03-09 00:00:00','01:00am','Meeting 5','Remark','Pending',3,'2019-03-05 11:47:00','2019-03-05 06:25:50'),(6,8,'2019-03-20 00:30:00','01:00pm','Meeting 6','Remark','Pending',3,'2019-03-06 08:07:47','2019-03-05 06:25:57'),(8,5,'2019-03-05 00:00:00','15:06am','Meeting 7','','Pending',3,'2019-03-05 11:47:16','2019-03-05 10:37:40'),(9,9,'2019-03-06 00:00:00','12:00pm','Meeting 8','','Pending',3,'2019-03-05 11:47:22','2019-03-05 10:52:07'),(10,7,'2019-03-05 00:00:00','1:00am','Meeting 9','','Pending',3,'2019-03-05 11:47:28','2019-03-05 11:24:05'),(11,11,'2019-03-06 00:30:00','12:30am','','','Pending',3,'2019-03-06 07:48:36','2019-03-06 07:48:36'),(12,11,'2019-03-07 01:30:00','1:30am','','','Pending',3,'2019-03-06 07:52:04','2019-03-06 07:52:04'),(13,12,'2019-03-06 14:40:53','2:20am','','','Pending',3,'2019-03-06 10:14:25','2019-03-06 09:10:53'),(14,12,'2019-03-06 15:00:00','3:00pm','','','Pending',3,'2019-03-06 10:03:21','2019-03-06 10:03:21'),(15,12,'2019-03-06 14:30:00','2:30pm','','','Pending',3,'2019-03-06 10:04:21','2019-03-06 10:04:21');
/*!40000 ALTER TABLE `bs_store_meeting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bs_user`
--

DROP TABLE IF EXISTS `bs_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bs_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `ID` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `doj` date NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  KEY `FK_ROLEID` (`role_id`),
  CONSTRAINT `FK_ROLEID` FOREIGN KEY (`role_id`) REFERENCES `bs_user_role` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_user`
--

LOCK TABLES `bs_user` WRITE;
/*!40000 ALTER TABLE `bs_user` DISABLE KEYS */;
INSERT INTO `bs_user` VALUES (2,'HR001','HR','aytistechnology@gmail.com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-19',1,'2019-02-22 10:26:42','2019-02-19 08:47:55'),(3,'ASM001','ASM','asm@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-20',4,'2019-02-22 10:26:56','2019-02-20 10:45:50'),(5,'ASM002','test12','test12@gmail.com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-20',4,'2019-02-20 12:30:59','2019-02-20 12:30:59'),(8,'ZM001','zmtest','zm1@com','e10adc3949ba59abbe56e057f20f883e','5654647','2019-02-22',3,'2019-03-02 09:10:08','2019-02-21 06:25:47'),(10,'ZM003','ZMTest','zm@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-21',3,'2019-03-02 09:29:33','2019-02-21 11:54:29'),(12,'NH001','testnh','nh@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-22',2,'2019-02-22 07:35:35','2019-02-22 07:35:35'),(16,'ASM003','test12','dsd@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-23',4,'2019-02-23 07:37:41','2019-02-23 07:37:41'),(17,'ASM004','TEST','vvv@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-23',4,'2019-02-23 07:38:53','2019-02-23 07:38:53'),(18,'NH002','nh2343','nh13@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-23',2,'2019-02-23 09:46:58','2019-02-23 09:46:58'),(19,'NH003','iuyeriuewyr','hgfh@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-23',2,'2019-02-23 09:48:14','2019-02-23 09:48:14'),(20,'NH004','test1245','mnm@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-23',2,'2019-02-23 09:48:41','2019-02-23 09:48:41');
/*!40000 ALTER TABLE `bs_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bs_user_role`
--

DROP TABLE IF EXISTS `bs_user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bs_user_role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(5) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_user_role`
--

LOCK TABLES `bs_user_role` WRITE;
/*!40000 ALTER TABLE `bs_user_role` DISABLE KEYS */;
INSERT INTO `bs_user_role` VALUES (1,'HR','2019-02-19 00:27:59','2019-02-19 00:27:59'),(2,'NH','2019-02-19 00:27:59','2019-02-19 00:27:59'),(3,'ZM','2019-02-19 00:28:11','2019-02-19 00:28:11'),(4,'ASM','2019-02-19 00:28:11','2019-02-19 00:28:11');
/*!40000 ALTER TABLE `bs_user_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bs_user_store`
--

DROP TABLE IF EXISTS `bs_user_store`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bs_user_store` (
  `us_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `assigned_by` int(11) NOT NULL,
  `assigned_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`us_id`),
  KEY `fk_user_id` (`user_id`),
  KEY `fk_store_id` (`store_id`),
  CONSTRAINT `fk_store_id` FOREIGN KEY (`store_id`) REFERENCES `bs_store` (`store_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `bs_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_user_store`
--

LOCK TABLES `bs_user_store` WRITE;
/*!40000 ALTER TABLE `bs_user_store` DISABLE KEYS */;
/*!40000 ALTER TABLE `bs_user_store` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bs_zm_asm`
--

DROP TABLE IF EXISTS `bs_zm_asm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bs_zm_asm` (
  `za_is` int(11) NOT NULL AUTO_INCREMENT,
  `zm_id` int(11) NOT NULL,
  `asm_id` int(11) NOT NULL,
  `assigned_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`za_is`),
  KEY `fk_zm_id` (`zm_id`),
  KEY `fk_zm_asm_id` (`asm_id`),
  CONSTRAINT `fk_zm_asm_id` FOREIGN KEY (`asm_id`) REFERENCES `bs_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_zm_id` FOREIGN KEY (`zm_id`) REFERENCES `bs_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_zm_asm`
--

LOCK TABLES `bs_zm_asm` WRITE;
/*!40000 ALTER TABLE `bs_zm_asm` DISABLE KEYS */;
INSERT INTO `bs_zm_asm` VALUES (11,10,3,'2019-02-28 11:10:32'),(12,10,5,'2019-02-28 11:10:32'),(15,8,16,'2019-02-28 11:28:12'),(16,8,17,'2019-02-28 11:28:12');
/*!40000 ALTER TABLE `bs_zm_asm` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-06 17:46:25
