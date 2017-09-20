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
  `msg_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (11,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 15:42:57','null','1,2','5,4','1'),(12,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 15:42:57','null','5,4','1,2','1'),(13,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 15:45:45','null','1,2','5,4','1'),(14,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 15:45:45','null','5,4','1,2','1'),(15,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 15:47:23','null','1,2','5,4','1'),(16,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 15:47:23','null','5,4','1,2','1'),(17,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 15:49:45','1','1,2','5,4','1'),(18,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 15:49:45','1','5,4','1,2','1'),(19,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 15:51:13','1','undefined','undefined','1'),(20,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 15:51:13','1','undefined','undefined','1'),(21,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 15:55:41','1','5,6,4','1,2','1'),(22,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 15:55:41','1','1,2','5,6,4','1'),(23,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 16:01:40','1','undefined','undefined','1'),(24,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 16:01:40','1','undefined','undefined','1'),(25,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 16:03:24','1','5,6','1,2','1'),(26,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 16:03:24','1','1,2','5,6','1'),(27,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 16:05:07','1','1,2','5,6','1'),(28,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 16:05:07','1','5,6','1,2','1'),(29,'amy','','','1','20/09/2017 17:02:43','','','','1'),(30,'','amy','yhchixigua@gmail.com','1','20/09/2017 17:02:43','','','','1'),(31,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 17:21:38','1','5,6','1,2','1'),(32,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 17:21:38','1','1,2','5,6','1'),(33,'amy','Tony','222@gmail.com','1','20/09/2017 17:34:06','null','5,6','1,2','1'),(34,'Tony','amy','yhchixigua@gmail.com','1','20/09/2017 17:34:06','null','1,2','5,6','1'),(35,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 18:01:41','null','undefined','undefined','1'),(36,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 18:01:41','null','undefined','undefined','1'),(37,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 18:08:27','1','undefined','undefined','1'),(38,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 18:08:27','1','undefined','undefined','1'),(39,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 18:10:57','1','undefined','undefined','1'),(40,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 18:10:57','1','undefined','undefined','1'),(41,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 18:13:08','1','5,6','1,2','1'),(42,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 18:13:08','1','1,2','5,6','1'),(43,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 18:14:26','1','5,6','1,2','1'),(44,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 18:14:26','1','1,2','5,6','1'),(45,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 19:09:38','1','undefined','undefined','1'),(46,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 19:09:38','1','undefined','undefined','1'),(47,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 19:11:51','1','5,6','1,2','1'),(48,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 19:11:51','1','1,2','5,6','1'),(49,'amy','xinkai','','1','20/09/2017 19:13:31','1','5','1,2','1'),(50,'xinkai','amy','yhchixigua@gmail.com','1','20/09/2017 19:13:31','1','1,2','5','1'),(51,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 19:15:09','1','5,6','1,2','1'),(52,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 19:15:09','1','1,2','5,6','1'),(53,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 19:15:23','1','5,6','1,2','1'),(54,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 19:15:23','1','1,2','5,6','1');
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

-- Dump completed on 2017-09-20 19:28:18
