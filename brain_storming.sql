-- MySQL dump 10.13  Distrib 5.6.41-84.1, for Linux (x86_64)
--
-- Host: localhost    Database: aytisbet_brain_storming
-- ------------------------------------------------------
-- Server version	5.6.41-84.1-log

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
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_asm_store`
--

LOCK TABLES `bs_asm_store` WRITE;
/*!40000 ALTER TABLE `bs_asm_store` DISABLE KEYS */;
INSERT INTO `bs_asm_store` VALUES (58,24,15,'2019-03-07 13:15:13'),(59,24,16,'2019-03-07 13:15:13'),(60,25,16,'2019-03-07 15:00:54'),(61,26,14,'2019-03-08 11:49:39'),(62,26,15,'2019-03-08 11:49:39'),(63,26,16,'2019-03-08 11:49:39');
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_brand`
--

LOCK TABLES `bs_brand` WRITE;
/*!40000 ALTER TABLE `bs_brand` DISABLE KEYS */;
INSERT INTO `bs_brand` VALUES (20,'brand1','2019-03-07 11:57:54','2019-03-07 11:57:54'),(21,'brand2','2019-03-07 11:58:04','2019-03-07 11:58:04'),(22,'brand3','2019-03-07 11:58:13','2019-03-07 11:58:13'),(23,'brand4','2019-03-07 11:58:23','2019-03-07 11:58:23'),(24,'brand5','2019-03-07 11:58:32','2019-03-07 11:58:32'),(25,'PUMA','2019-03-07 13:08:24','2019-03-07 13:08:24');
/*!40000 ALTER TABLE `bs_brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bs_city`
--

DROP TABLE IF EXISTS `bs_city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bs_city` (
  `city_id` bigint(255) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(2000) NOT NULL,
  `city_pincode` bigint(255) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_city`
--

LOCK TABLES `bs_city` WRITE;
/*!40000 ALTER TABLE `bs_city` DISABLE KEYS */;
INSERT INTO `bs_city` VALUES (1,'Patna',800002),(2,'Patna City',800008);
/*!40000 ALTER TABLE `bs_city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bs_employee_rating_review`
--

DROP TABLE IF EXISTS `bs_employee_rating_review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bs_employee_rating_review` (
  `emprr_id` int(11) NOT NULL AUTO_INCREMENT,
  `dress_proper` tinyint(4) NOT NULL,
  `dress_proper_remark` varchar(100) NOT NULL,
  `dress_proper_image` varchar(50) NOT NULL,
  `dress_hygiene` tinyint(4) NOT NULL,
  `dress_hygiene_remark` varchar(100) NOT NULL,
  `dress_hygiene_image` varchar(50) NOT NULL,
  `gest_welcome` tinyint(4) NOT NULL,
  `gest_welcome_remark` varchar(100) NOT NULL,
  `gest_welcome_image` varchar(50) NOT NULL,
  `gest_help` tinyint(4) NOT NULL,
  `gest_help_remark` varchar(100) NOT NULL,
  `gest_help_image` varchar(50) NOT NULL,
  `gest_need` tinyint(4) NOT NULL,
  `gest_need_remark` varchar(100) NOT NULL,
  `gest_need_image` varchar(50) NOT NULL,
  `gest_relationship` tinyint(4) NOT NULL,
  `gest_relationship_remark` varchar(100) NOT NULL,
  `gest_relationship_image` varchar(50) NOT NULL,
  `gest_upt_qpc` tinyint(4) NOT NULL,
  `gest_upt_qpc_remark` varchar(100) NOT NULL,
  `gest_upt_qpc_image` varchar(50) NOT NULL,
  `gest_wow_moment` tinyint(4) NOT NULL,
  `gest_wow_moment_remark` varchar(100) NOT NULL,
  `gest_wow_moment_image` varchar(50) NOT NULL,
  `awareness_current_offers` tinyint(4) NOT NULL,
  `awareness_current_offers_remark` varchar(100) NOT NULL,
  `awareness_current_offers_image` varchar(50) NOT NULL,
  `awareness_product_categories` tinyint(4) NOT NULL,
  `awareness_product_categories_remark` varchar(100) NOT NULL,
  `awareness_product_categories_image` varchar(50) NOT NULL,
  `awareness_brand` tinyint(4) NOT NULL,
  `awareness_brand_remark` varchar(100) NOT NULL,
  `awareness_brand_image` varchar(50) NOT NULL,
  `awareness_targets` tinyint(4) NOT NULL,
  `awareness_targets_remark` varchar(100) NOT NULL,
  `awareness_targets_image` varchar(50) NOT NULL,
  `drive_commitment` tinyint(4) NOT NULL,
  `drive_commitment_remark` varchar(100) NOT NULL,
  `drive_commitment_image` varchar(50) NOT NULL,
  `drive_monitors_actions` tinyint(4) NOT NULL,
  `drive_monitors_actions_remark` varchar(100) NOT NULL,
  `drive_monitors_actions_image` varchar(50) NOT NULL,
  `drive_adapt_changes` tinyint(4) NOT NULL,
  `drive_adapt_changes_remark` varchar(100) NOT NULL,
  `drive_adapt_changes_image` varchar(50) NOT NULL,
  `store_id` int(11) NOT NULL,
  `rated_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`emprr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_employee_rating_review`
--

LOCK TABLES `bs_employee_rating_review` WRITE;
/*!40000 ALTER TABLE `bs_employee_rating_review` DISABLE KEYS */;
INSERT INTO `bs_employee_rating_review` VALUES (1,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 11:29:55'),(2,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 11:30:30'),(3,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',16,26,'2019-03-08 11:50:54'),(4,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',15,26,'2019-03-08 11:54:27');
/*!40000 ALTER TABLE `bs_employee_rating_review` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_store`
--

LOCK TABLES `bs_store` WRITE;
/*!40000 ALTER TABLE `bs_store` DISABLE KEYS */;
INSERT INTO `bs_store` VALUES (14,'STORE 1','1','DELHI','1','TEST1','11111111','STORE001','827ccb0eea8a706c4c34a16891f84e7b','2019-03-07 11:51:12','2019-03-07 11:51:12'),(15,'STORE 2','test1','new delhi','1111','test test','123456','STORE002','827ccb0eea8a706c4c34a16891f84e7b','2019-03-07 11:54:08','2019-03-07 11:54:08'),(16,'PUMA STORE','XYZ','DELHI','10100','sURAJ','12345','STORE003','1f32aa4c9a1d2ea010adcf2348166a04','2019-03-08 18:46:52','2019-03-07 13:09:49'),(18,'Store 4','Patna','1','800002','Jai Kumar','8540851615','STORE004','14e1b600b1fd579f47433b88e8d85291','2019-03-09 19:01:03','2019-03-09 19:00:40'),(19,'Store 4','Patna City','2','800008','Jai Kumar','8540851615','STORE005','202cb962ac59075b964b07152d234b70','2019-03-10 17:40:57','2019-03-10 17:40:57');
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
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_store_brand`
--

LOCK TABLES `bs_store_brand` WRITE;
/*!40000 ALTER TABLE `bs_store_brand` DISABLE KEYS */;
INSERT INTO `bs_store_brand` VALUES (82,14,20,'2019-03-07 11:59:05'),(83,14,21,'2019-03-07 11:59:05'),(84,16,25,'2019-03-07 13:12:18');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_store_meeting`
--

LOCK TABLES `bs_store_meeting` WRITE;
/*!40000 ALTER TABLE `bs_store_meeting` DISABLE KEYS */;
INSERT INTO `bs_store_meeting` VALUES (1,16,'2019-03-08 23:00:00','11:00pm','','','Pending',24,'2019-03-07 13:17:14','2019-03-07 13:17:14'),(2,15,'2019-03-08 04:00:00','4:00am','','','Pending',24,'2019-03-07 13:18:52','2019-03-07 13:18:52'),(3,16,'2019-03-07 20:00:00','8:00pm','','','Pending',24,'2019-03-07 13:23:31','2019-03-07 13:23:31');
/*!40000 ALTER TABLE `bs_store_meeting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bs_store_rating_review`
--

DROP TABLE IF EXISTS `bs_store_rating_review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bs_store_rating_review` (
  `srr_id` int(11) NOT NULL AUTO_INCREMENT,
  `sales_front_facade` tinyint(4) NOT NULL,
  `sales_front_facade_remark` varchar(100) NOT NULL,
  `sales_front_facade_image` varchar(50) NOT NULL,
  `sales_overall_ambience` tinyint(4) NOT NULL,
  `sales_overall_ambience_remark` varchar(100) NOT NULL,
  `sales_overall_ambience_image` varchar(50) NOT NULL,
  `sales_vm` tinyint(4) NOT NULL,
  `sales_vm_remark` varchar(100) NOT NULL,
  `sales_vm_image` varchar(50) NOT NULL,
  `sales_cash_till` tinyint(4) NOT NULL,
  `sales_cash_till_remark` varchar(100) NOT NULL,
  `sales_cash_till_image` varchar(50) NOT NULL,
  `sales_window_communication` tinyint(4) NOT NULL,
  `sales_window_communication_remark` varchar(100) NOT NULL,
  `sales_window_communication_image` varchar(50) NOT NULL,
  `store_about_manager` tinyint(4) NOT NULL,
  `store_about_manager_remark` varchar(100) NOT NULL,
  `store_about_manager_image` varchar(50) NOT NULL,
  `store_about_team` tinyint(4) NOT NULL,
  `store_about_team_remark` varchar(100) NOT NULL,
  `store_about_team_image` varchar(50) NOT NULL,
  `store_manager_communication` tinyint(4) NOT NULL,
  `store_manager_communication_remark` varchar(100) NOT NULL,
  `store_manager_communication_image` varchar(50) NOT NULL,
  `store_staff_avalibility` tinyint(4) NOT NULL,
  `store_staff_avalibility_remark` varchar(100) NOT NULL,
  `store_staff_avalibility_image` varchar(50) NOT NULL,
  `store_uniform` tinyint(4) NOT NULL,
  `store_uniform_remark` varchar(100) NOT NULL,
  `store_uniform_remark_image` varchar(50) NOT NULL,
  `trial_lock_light` tinyint(4) NOT NULL,
  `trial_lock_light_remark` varchar(100) NOT NULL,
  `trial_lock_light_image` varchar(50) NOT NULL,
  `trial_overall_ambience` tinyint(4) NOT NULL,
  `trial_overall_ambience_remark` varchar(100) NOT NULL,
  `trial_overall_ambience_image` varchar(50) NOT NULL,
  `trial_stock_wrack` tinyint(4) NOT NULL,
  `trial_stock_wrack_remark` varchar(100) NOT NULL,
  `trial_stock_wrack_image` varchar(50) NOT NULL,
  `trial_back_store` tinyint(4) NOT NULL,
  `trial_back_store_remark` varchar(100) NOT NULL,
  `trial_back_store_image` varchar(50) NOT NULL,
  `trial_communication` tinyint(4) NOT NULL,
  `trial_communication_remark` varchar(100) NOT NULL,
  `trial_communication_image` varchar(50) NOT NULL,
  `store_id` int(11) NOT NULL,
  `rated_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`srr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_store_rating_review`
--

LOCK TABLES `bs_store_rating_review` WRITE;
/*!40000 ALTER TABLE `bs_store_rating_review` DISABLE KEYS */;
INSERT INTO `bs_store_rating_review` VALUES (1,3,'s','',2,'s','',2,'s','',3,'s','',2,'s','',3,'t','',4,'t','',4,'t','',2,'t','',3,'t','',3,'r','',4,'r','',4,'r','',3,'r','',2,'r','',8,3,'2019-03-08 07:39:04'),(2,2,'','',4,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 07:44:33'),(3,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 07:47:15'),(4,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 07:59:40'),(5,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 07:59:51'),(6,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 07:59:56'),(7,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 08:00:21'),(8,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 08:00:31'),(9,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 08:00:54'),(10,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 08:01:03'),(11,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 08:01:07'),(12,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 08:54:25'),(13,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 09:02:34'),(14,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 09:35:05'),(15,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 09:35:52'),(16,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 09:47:20'),(17,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 09:50:12'),(18,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 10:39:59'),(19,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 10:40:50'),(20,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 10:43:41'),(21,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 10:46:42'),(22,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 10:52:05'),(23,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 11:28:17'),(24,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',8,3,'2019-03-08 11:30:25'),(25,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',16,26,'2019-03-08 11:50:42'),(26,0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',15,26,'2019-03-08 11:54:15');
/*!40000 ALTER TABLE `bs_store_rating_review` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_user`
--

LOCK TABLES `bs_user` WRITE;
/*!40000 ALTER TABLE `bs_user` DISABLE KEYS */;
INSERT INTO `bs_user` VALUES (2,'HR001','HR','aytistechnology@gmail.com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-19',1,'2019-02-22 10:26:42','2019-02-19 08:47:55'),(24,'ASM001','Ravi','ravi@com','827ccb0eea8a706c4c34a16891f84e7b','12345','2019-03-07',4,'2019-03-08 11:48:36','2019-03-07 13:07:20'),(25,'ASM002','jai','jai@com','827ccb0eea8a706c4c34a16891f84e7b','123','2019-03-07',4,'2019-03-07 14:36:29','2019-03-07 14:36:29'),(26,'ASM003','OmPrakash','om@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-03-08',4,'2019-03-08 11:49:22','2019-03-08 11:49:22'),(27,'ZM001','JP','j@com','e10adc3949ba59abbe56e057f20f883e','8540851615','2019-03-09',3,'2019-03-09 19:04:18','2019-03-09 19:04:18'),(28,'ZM002','ZM2','zm2@com','202cb962ac59075b964b07152d234b70','8540851615','2019-03-10',3,'2019-03-10 08:30:37','2019-03-10 08:30:37'),(29,'NH001','NH1','nhi@com','202cb962ac59075b964b07152d234b70','8540851615','2019-03-10',2,'2019-03-10 09:09:35','2019-03-10 09:09:35');
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_zm_asm`
--

LOCK TABLES `bs_zm_asm` WRITE;
/*!40000 ALTER TABLE `bs_zm_asm` DISABLE KEYS */;
INSERT INTO `bs_zm_asm` VALUES (17,27,24,'2019-03-10 09:10:18'),(18,28,25,'2019-03-10 09:10:58'),(19,28,26,'2019-03-10 09:10:58');
/*!40000 ALTER TABLE `bs_zm_asm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bs_zm_store`
--

DROP TABLE IF EXISTS `bs_zm_store`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bs_zm_store` (
  `zs_id` bigint(255) NOT NULL AUTO_INCREMENT,
  `zm_id` bigint(255) NOT NULL COMMENT 'bs_user',
  `store_id` bigint(255) NOT NULL COMMENT 'bs_store',
  `allocated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`zs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_zm_store`
--

LOCK TABLES `bs_zm_store` WRITE;
/*!40000 ALTER TABLE `bs_zm_store` DISABLE KEYS */;
INSERT INTO `bs_zm_store` VALUES (1,27,14,'2019-03-10 08:29:59'),(2,27,15,'2019-03-10 08:30:04');
/*!40000 ALTER TABLE `bs_zm_store` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-11  6:36:08
