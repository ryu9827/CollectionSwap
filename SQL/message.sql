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
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_uid` varchar(45) DEFAULT NULL,
  `swap_uid` varchar(45) DEFAULT NULL,
  `swap_email` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `time` varchar(500) DEFAULT NULL,
  `set_id` varchar(500) DEFAULT NULL,
  `offer_id` varchar(500) DEFAULT NULL,
  `get_id` varchar(45) DEFAULT NULL,
  `token` varchar(500) DEFAULT NULL,
  `offer_name` varchar(500) DEFAULT NULL,
  `get_name` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (54,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 19:15:23','1','1,2','5,6',NULL,NULL,NULL),(55,'amy','Bruce','yehan.wang@it.weltec.ac.nz','2','21/09/2017 10:20:42','1','1,2','4',NULL,NULL,NULL),(56,'Bruce','amy','yhchixigua@gmail.com','1','21/09/2017 10:20:42','1','4','1,2',NULL,NULL,NULL),(57,'amy','xinkai','yhchixigua@gmail.com','4','28/09/2017 11:25:37','1','3','1,2','1d8aac14eb3c2d4d32d7a8f351722137',NULL,NULL),(58,'xinkai','amy','yhchixigua@gmail.com','4','28/09/2017 11:25:37','1','1,2','3','1d8aac14eb3c2d4d32d7a8f351722137',NULL,NULL),(60,'amy','xinkai','yhchixigua@gmail.com','6','27/09/2017 17:42:51','1','1,2','3','612702952ce7a47bb480373983a601a8',NULL,NULL),(68,'amy','xinkai','yhchixigua@gmail.com','1','28/09/2017 11:38:03','1','undefined','undefined','a03e2ef5a4c9168601e74d28f2e76f16','undefined','undefined'),(69,'xinkai','amy','yhchixigua@gmail.com','0','28/09/2017 11:38:03','1','undefined','undefined','a03e2ef5a4c9168601e74d28f2e76f16','undefined','undefined'),(70,'amy','xinkai','yhchixigua@gmail.com','1','28/09/2017 11:44:14','1','undefined','undefined','62615042b5ce7dc2b0935fa0ea242506','undefined','undefined'),(71,'xinkai','amy','yhchixigua@gmail.com','0','28/09/2017 11:44:14','1','undefined','undefined','62615042b5ce7dc2b0935fa0ea242506','undefined','undefined'),(72,'amy','xinkai','yhchixigua@gmail.com','1','28/09/2017 11:56:32','1','undefined','undefined','623840c401e6b19cf6731b101090880b','undefined','undefined'),(73,'xinkai','amy','yhchixigua@gmail.com','0','28/09/2017 11:56:32','1','undefined','undefined','623840c401e6b19cf6731b101090880b','undefined','undefined'),(74,'amy','xinkai','yhchixigua@gmail.com','4','28/09/2017 12:04:19','1','5','1,2','11bc407dc66f5de12f86b3d3ae625a3f','All Blacks - 5','All Blacks - 1,All Blacks - 2'),(75,'xinkai','amy','yhchixigua@gmail.com','4','28/09/2017 12:04:19','1','1,2','5','11bc407dc66f5de12f86b3d3ae625a3f','All Blacks - 1,All Blacks - 2','All Blacks - 5');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'collectionswap'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-28 12:26:07
