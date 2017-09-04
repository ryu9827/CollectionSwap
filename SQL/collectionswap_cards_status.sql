-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: collectionswap
-- ------------------------------------------------------
-- Server version	5.7.18

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
-- Table structure for table `cards_status`
--

DROP TABLE IF EXISTS `cards_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cards_status` (
  `user_uid` varchar(45) DEFAULT NULL,
  `card_id` varchar(45) DEFAULT NULL,
  `card_status` int(1) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `set_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cards_status`
--

LOCK TABLES `cards_status` WRITE;
/*!40000 ALTER TABLE `cards_status` DISABLE KEYS */;
INSERT INTO `cards_status` VALUES ('yehan','a001',1,1,NULL),('yehan','a002',2,2,NULL),('yehan','a003',1,3,NULL),('yehan','a004',2,4,NULL),('yehan','a005',1,5,NULL),('yehan','a006',1,6,NULL),('amy','a001',1,7,NULL),('amy','a002',1,8,NULL),('amy','a003',2,9,NULL),('amy','a004',1,10,NULL),('amy','a005',2,11,NULL),('amy','a006',1,12,NULL),('wendy','a001',2,13,NULL),('wendy','a002',2,14,NULL),('wendy','a003',1,15,NULL),('wendy','a004',1,16,NULL),('wendy','a005',2,17,NULL),('wendy','a006',2,18,NULL),('Tony','a001',1,19,NULL),('Tony','a002',1,20,NULL),('Tony','a003',2,21,NULL),('Tony','a004',2,22,NULL),('Tony','a005',2,23,NULL),('Tony','a006',2,24,NULL),('Bruce','a001',1,25,NULL),('Bruce','a002',1,26,NULL),('Bruce','a003',2,27,NULL),('Bruce','a004',2,28,NULL),('Bruce','a005',2,29,NULL),('Bruce','a006',2,30,NULL),('xinkai','a001',2,31,NULL),('xinkai','a002',2,32,NULL),('xinkai','a003',1,33,NULL),('xinkai','a004',2,34,NULL),('xinkai','a005',1,35,NULL),('xinkai1','a002',2,37,NULL),('xinkai1','a003',1,38,NULL),('xinkai1','a004',2,39,NULL),('xinkai1','a005',2,40,NULL);
/*!40000 ALTER TABLE `cards_status` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-04 17:16:56
