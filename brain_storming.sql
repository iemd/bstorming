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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_brand`
--

LOCK TABLES `bs_brand` WRITE;
/*!40000 ALTER TABLE `bs_brand` DISABLE KEYS */;
INSERT INTO `bs_brand` VALUES (1,'Brand 1','2019-02-23 11:57:39','2019-02-23 11:57:39'),(2,'Brand 2','2019-02-23 11:57:39','2019-02-23 11:57:39'),(3,'Brand 3','2019-02-23 11:58:04','2019-02-23 11:58:04'),(4,'Brand 4','2019-02-23 11:58:04','2019-02-23 11:58:04'),(5,'Brand 5','2019-02-23 11:58:35','2019-02-23 11:58:35'),(6,'Brand 6','2019-02-23 11:58:35','2019-02-23 11:58:35'),(7,'Brand 7','2019-02-23 11:58:56','2019-02-23 11:58:56'),(8,'Brand 8','2019-02-23 11:58:56','2019-02-23 11:58:56'),(9,'Brand 9','2019-02-23 11:59:13','2019-02-23 11:59:13'),(10,'Brand 10','2019-02-23 11:59:13','2019-02-23 11:59:13');
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
  `brand_id` int(11) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `manager_name` varchar(50) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`store_id`),
  KEY `FK_BRANDID` (`brand_id`),
  CONSTRAINT `FK_BRANDID` FOREIGN KEY (`brand_id`) REFERENCES `bs_brand` (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_store`
--

LOCK TABLES `bs_store` WRITE;
/*!40000 ALTER TABLE `bs_store` DISABLE KEYS */;
INSERT INTO `bs_store` VALUES (1,1,'Store 1','Test Address','Test City','800001','Manager Name','565476768','2019-02-23 12:00:34','2019-02-23 12:00:34');
/*!40000 ALTER TABLE `bs_store` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_user`
--

LOCK TABLES `bs_user` WRITE;
/*!40000 ALTER TABLE `bs_user` DISABLE KEYS */;
INSERT INTO `bs_user` VALUES (2,'HR001','HR','aytistechnology@gmail.com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-19',1,'2019-02-22 10:26:42','2019-02-19 08:47:55'),(3,'ASM001','ASM','asm@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-20',4,'2019-02-22 10:26:56','2019-02-20 10:45:50'),(5,'ASM002','test12','test12@gmail.com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-20',4,'2019-02-20 12:30:59','2019-02-20 12:30:59'),(8,'ZM001','zmtest','zm@com','e10adc3949ba59abbe56e057f20f883e','5654647','2019-02-22',3,'2019-02-21 06:25:47','2019-02-21 06:25:47'),(9,'ZM002','zmtest','zm2@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-22',3,'2019-02-21 06:28:56','2019-02-21 06:28:56'),(10,'ZM003','Location Test','zm3@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-21',3,'2019-02-21 11:54:29','2019-02-21 11:54:29'),(12,'NH001','testnh','nh@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-22',2,'2019-02-22 07:35:35','2019-02-22 07:35:35'),(16,'ASM003','test12','dsd@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-23',4,'2019-02-23 07:37:41','2019-02-23 07:37:41'),(17,'ASM004','TEST','vvv@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-23',4,'2019-02-23 07:38:53','2019-02-23 07:38:53'),(18,'NH002','nh2343','nh13@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-23',2,'2019-02-23 09:46:58','2019-02-23 09:46:58'),(19,'NH003','iuyeriuewyr','hgfh@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-23',2,'2019-02-23 09:48:14','2019-02-23 09:48:14'),(20,'NH004','test1245','mnm@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-23',2,'2019-02-23 09:48:41','2019-02-23 09:48:41');
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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-23 17:48:59
