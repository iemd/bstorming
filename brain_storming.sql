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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bs_user`
--

LOCK TABLES `bs_user` WRITE;
/*!40000 ALTER TABLE `bs_user` DISABLE KEYS */;
INSERT INTO `bs_user` VALUES (2,'','HR','test@gmail.com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-19',1,'2019-02-20 10:45:06','2019-02-19 08:47:55'),(3,'','ASM','asm@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-20',4,'2019-02-20 11:00:51','2019-02-20 10:45:50'),(5,'ASM002','test12','test12@gmail.com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-20',4,'2019-02-20 12:30:59','2019-02-20 12:30:59'),(6,'ASM003','OmPrakash','om@com','e10adc3949ba59abbe56e057f20f883e','8765789','2019-02-21',4,'2019-02-21 05:52:22','2019-02-21 05:52:22'),(7,'ASM004','Asm12','asm12@com','e10adc3949ba59abbe56e057f20f883e','4524664','2019-02-22',4,'2019-02-21 05:58:39','2019-02-21 05:58:39'),(8,'ZM001','zmtest','zm@com','e10adc3949ba59abbe56e057f20f883e','5654647','2019-02-22',3,'2019-02-21 06:25:47','2019-02-21 06:25:47'),(9,'ZM002','zmtest','zm2@com','e10adc3949ba59abbe56e057f20f883e','4543653','2019-02-22',3,'2019-02-21 06:28:56','2019-02-21 06:28:56');
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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-21 12:14:26
