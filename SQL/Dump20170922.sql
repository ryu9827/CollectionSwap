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
  `locked_time` int(10) DEFAULT NULL,
  `card_name` varchar(500) DEFAULT NULL,
  `islocked` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cards_status`
--

LOCK TABLES `cards_status` WRITE;
/*!40000 ALTER TABLE `cards_status` DISABLE KEYS */;
INSERT INTO `cards_status` VALUES ('yehan','1',1,1,'1',NULL,'',0),('yehan','2',2,2,'1',NULL,'',0),('yehan','3',1,3,'1',NULL,'',0),('yehan','4',2,4,'1',NULL,'',0),('yehan','5',1,5,'1',NULL,'',0),('yehan','6',1,6,'1',NULL,'',0),('amy','5',0,11,'2',1505946042,'',1),('amy','6',2,12,'2',1505946042,'',1),('wendy','1',1,13,'1',1505773875,'',0),('wendy','2',1,14,'1',1505773875,'',0),('wendy','3',1,15,'1',1505773875,'',0),('wendy','4',1,16,'1',1505773875,'',0),('wendy','5',0,17,'1',1505773875,'',0),('wendy','6',0,18,'1',1505773875,'',0),('Tony','1',2,19,'1',1505265894,'',0),('Tony','2',2,20,'1',1505265894,'',0),('Tony','3',2,21,'1',1505265894,'',0),('Tony','4',2,22,'1',1505265894,'',0),('Tony','5',1,23,'1',1505265894,'',0),('Tony','6',1,24,'1',1505265894,'',0),('Bruce','1',1,25,'1',1505946042,'',1),('Bruce','2',1,26,'1',1505946042,'',1),('Bruce','3',2,27,'1',1505946042,'',1),('Bruce','4',2,28,'1',1505946042,'',1),('Bruce','5',2,29,'1',1505946042,'',1),('Bruce','6',1,30,'1',1505946042,'',1),('xinkai','1',2,31,'1',1505891611,'',0),('xinkai','2',2,32,'1',1505891611,'',0),('xinkai','3',1,33,'1',1505891611,'',0),('xinkai','4',1,34,'1',1505891611,'',0),('xinkai','5',0,35,'1',1505891611,'',0),('xinkai1','2',2,37,'1',NULL,'',0),('xinkai1','3',1,38,'1',NULL,'',0),('xinkai1','4',2,39,'1',NULL,'',0),('xinkai1','5',2,40,'1',NULL,'',0),('amy','1',2,44,'2',1505946042,NULL,1),('amy','2',2,45,'2',1505946042,NULL,1),('amy','4',1,47,'2',1505946042,NULL,1),(NULL,NULL,NULL,48,NULL,NULL,NULL,0),('amy','3',2,49,'2',NULL,NULL,0),('amy','1',2,50,'2',NULL,NULL,0),('amy','2',2,51,'2',NULL,NULL,0),('amy','3',2,52,'2',NULL,NULL,0),('amy','4',1,53,'2',NULL,NULL,0),('amy','5',1,54,'1',NULL,NULL,0);
/*!40000 ALTER TABLE `cards_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `charity_card`
--

DROP TABLE IF EXISTS `charity_card`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `charity_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_uid` varchar(45) DEFAULT NULL,
  `card_id` varchar(45) DEFAULT NULL,
  `set_id` varchar(45) DEFAULT NULL,
  `card_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `charity_card`
--

LOCK TABLES `charity_card` WRITE;
/*!40000 ALTER TABLE `charity_card` DISABLE KEYS */;
INSERT INTO `charity_card` VALUES (3,'amy','1','1',4),(4,'amy','3','1',4),(5,'amy','2','1',4);
/*!40000 ALTER TABLE `charity_card` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (11,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 15:42:57','null','1,2','5,4','1'),(12,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 15:42:57','null','5,4','1,2','1'),(13,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 15:45:45','null','1,2','5,4','1'),(14,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 15:45:45','null','5,4','1,2','1'),(15,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 15:47:23','null','1,2','5,4','1'),(16,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 15:47:23','null','5,4','1,2','1'),(17,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 15:49:45','1','1,2','5,4','1'),(18,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 15:49:45','1','5,4','1,2','1'),(19,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 15:51:13','1','undefined','undefined','1'),(20,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 15:51:13','1','undefined','undefined','1'),(21,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 15:55:41','1','5,6,4','1,2','1'),(22,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 15:55:41','1','1,2','5,6,4','1'),(23,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 16:01:40','1','undefined','undefined','1'),(24,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 16:01:40','1','undefined','undefined','1'),(25,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 16:03:24','1','5,6','1,2','1'),(26,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 16:03:24','1','1,2','5,6','1'),(27,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 16:05:07','1','1,2','5,6','1'),(28,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 16:05:07','1','5,6','1,2','1'),(29,'amy','','','1','20/09/2017 17:02:43','','','','1'),(30,'','amy','yhchixigua@gmail.com','1','20/09/2017 17:02:43','','','','1'),(31,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 17:21:38','1','5,6','1,2','1'),(32,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 17:21:38','1','1,2','5,6','1'),(33,'amy','Tony','222@gmail.com','1','20/09/2017 17:34:06','null','5,6','1,2','1'),(34,'Tony','amy','yhchixigua@gmail.com','1','20/09/2017 17:34:06','null','1,2','5,6','1'),(35,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 18:01:41','null','undefined','undefined','1'),(36,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 18:01:41','null','undefined','undefined','1'),(37,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 18:08:27','1','undefined','undefined','1'),(38,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 18:08:27','1','undefined','undefined','1'),(39,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 18:10:57','1','undefined','undefined','1'),(40,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 18:10:57','1','undefined','undefined','1'),(41,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 18:13:08','1','5,6','1,2','1'),(42,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 18:13:08','1','1,2','5,6','1'),(43,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 18:14:26','1','5,6','1,2','1'),(44,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 18:14:26','1','1,2','5,6','1'),(45,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 19:09:38','1','undefined','undefined','1'),(46,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 19:09:38','1','undefined','undefined','1'),(47,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 19:11:51','1','5,6','1,2','1'),(48,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 19:11:51','1','1,2','5,6','1'),(49,'amy','xinkai','','1','20/09/2017 19:13:31','1','5','1,2','1'),(50,'xinkai','amy','yhchixigua@gmail.com','1','20/09/2017 19:13:31','1','1,2','5','1'),(51,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 19:15:09','1','5,6','1,2','1'),(52,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 19:15:09','1','1,2','5,6','1'),(53,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','20/09/2017 19:15:23','1','5,6','1,2','1'),(54,'Bruce','amy','yhchixigua@gmail.com','1','20/09/2017 19:15:23','1','1,2','5,6','1'),(55,'amy','Bruce','yehan.wang@it.weltec.ac.nz','1','21/09/2017 10:20:42','1','1,2','4','1'),(56,'Bruce','amy','yhchixigua@gmail.com','1','21/09/2017 10:20:42','1','4','1,2','1');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rating` (
  `rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_uid` varchar(45) NOT NULL,
  `good` int(11) DEFAULT '0',
  `normal` int(11) DEFAULT '0',
  `bad` int(11) DEFAULT '0',
  `average` double DEFAULT '0',
  `count` int(11) DEFAULT '0',
  `total` int(11) DEFAULT '0',
  PRIMARY KEY (`rate_id`),
  UNIQUE KEY `id_UNIQUE` (`rate_id`),
  UNIQUE KEY `user_uid_UNIQUE` (`user_uid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating`
--

LOCK TABLES `rating` WRITE;
/*!40000 ALTER TABLE `rating` DISABLE KEYS */;
INSERT INTO `rating` VALUES (1,'amy',6,1,0,2.5,8,20),(2,'Bruce',3,2,1,2,3,30),(3,'Tony',2,4,1,4,4,20);
/*!40000 ALTER TABLE `rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sets_cards`
--

DROP TABLE IF EXISTS `sets_cards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sets_cards` (
  `id` int(20) NOT NULL,
  `set_id` varchar(500) NOT NULL,
  `card_id` varchar(500) NOT NULL,
  `card_images` varchar(500) NOT NULL,
  `card_name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `card_id` (`card_id`),
  KEY `card_id_2` (`card_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sets_cards`
--

LOCK TABLES `sets_cards` WRITE;
/*!40000 ALTER TABLE `sets_cards` DISABLE KEYS */;
INSERT INTO `sets_cards` VALUES (1,'1','1','images/cardImages/card-1.png','All Blacks - 1'),(2,'1','2','images/cardImages/card-2.png','All Blacks - 2'),(3,'1','3','images/cardImages/card-3.png','All Blacks - 3'),(4,'1','4','images/cardImages/card-4.png','All Blacks - 4'),(5,'1','5','images/cardImages/card-5.png','All Blacks - 5'),(6,'1','6','images/cardImages/card-6.png','All Blacks - 6'),(7,'2','33','images/cardImages/Disney-33.jpg','Disney - 33'),(8,'2','35','images/cardImages/Disney-35.jpg','Disney - 35'),(9,'2','36','images/cardImages/Disney-36.jpg','Disney - 36'),(10,'2','37','images/cardImages/Disney-37.jpg','Disney - 37'),(11,'3','101','images/cardImages/Grote Smurf.jpg','Grote Smurf'),(12,'3','102','images/cardImages/Bril Smurf.jpg','Bril Smurf'),(13,'3','103','images/cardImages/Smurfin.jpg','Smurfin'),(14,'3','104','images/cardImages/Mopper Smurf.jpg','Mopper Smurf'),(15,'3','105','images/cardImages/Muziek Smurfs.jpg','Muziek Smurfs');
/*!40000 ALTER TABLE `sets_cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sets_exist`
--

DROP TABLE IF EXISTS `sets_exist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sets_exist` (
  `set_id` int(20) NOT NULL AUTO_INCREMENT,
  `set_name` varchar(500) NOT NULL,
  `set_cover_image` varchar(500) NOT NULL,
  `set_cards_amount` int(20) NOT NULL,
  `ishidden` int(20) NOT NULL,
  PRIMARY KEY (`set_id`),
  UNIQUE KEY `set_id` (`set_id`),
  UNIQUE KEY `set_name` (`set_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sets_exist`
--

LOCK TABLES `sets_exist` WRITE;
/*!40000 ALTER TABLE `sets_exist` DISABLE KEYS */;
INSERT INTO `sets_exist` VALUES (1,'All Blacks (Weet-Bix)','images/setImages/All_Blacks.jpg\r\n',30,0),(2,'Disney Movie Stars','images/setImages/Disney_Movie_Star.jpg',100,0),(3,'Smurf','images/setImages/Smurf.jpg',15,0);
/*!40000 ALTER TABLE `sets_exist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_sets`
--

DROP TABLE IF EXISTS `user_sets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_sets` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `set_id` int(20) NOT NULL,
  `islocked` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_sets`
--

LOCK TABLES `user_sets` WRITE;
/*!40000 ALTER TABLE `user_sets` DISABLE KEYS */;
INSERT INTO `user_sets` VALUES (2,50,2,0),(1,50,1,0),(4,50,3,0);
/*!40000 ALTER TABLE `user_sets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `user_sets_details`
--

DROP TABLE IF EXISTS `user_sets_details`;
/*!50001 DROP VIEW IF EXISTS `user_sets_details`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `user_sets_details` AS SELECT 
 1 AS `user_id`,
 1 AS `user_uid`,
 1 AS `set_id`,
 1 AS `set_cover_image`,
 1 AS `set_name`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_first` varchar(45) NOT NULL,
  `user_last` varchar(45) NOT NULL,
  `user_email` varchar(45) NOT NULL,
  `user_uid` varchar(45) NOT NULL,
  `user_postcode` varchar(45) DEFAULT NULL,
  `user_pwd` varchar(200) NOT NULL,
  `verify` int(11) NOT NULL DEFAULT '0',
  `token` varchar(45) DEFAULT NULL,
  `token_time` int(10) NOT NULL,
  `regtime` int(10) DEFAULT NULL,
  `lastlogin_time` varchar(45) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'fdf','fdf','fd@qq.com','fd','fd','$2y$10$9oANi1l3/yHt1An0qV6OdOq2OkGu0MDMo/Wydo52ZsfsnjgarKl.S',0,NULL,0,NULL,NULL,NULL),(2,'fdfd','fdfdfdfd','123@qq.com','43','34','$2y$10$CSy6XTWLtm/z7YxVU2xDHO10Gt/3U2x/7ZEACzAVCZL.NkD9kTLo6',0,NULL,0,NULL,NULL,NULL),(3,'qqq','qqq','3232@qq.com','321','123','$2y$10$Eo.hL1zMLwxj5R1Lc3RC8.LsLxH38Sy1z5tqILwGFi/5whBeXRpwi',0,NULL,0,NULL,NULL,NULL),(4,'aaa','aaa','ewew@qq.com','qqq','23','$2y$10$FYA4.id3wQNJ2lzJUK/RXOr3Luzco9iNaWdAic44Rm7bUwbYAeg3y',0,NULL,0,NULL,NULL,NULL),(5,'amiee','aimee','fdf@qq.com','yeah','323','$2y$10$uJnDHc4unLS6Uxe0ULs5OuvAzg1a3tfPLL7LJasCe6ZB4XtsQCYcK',0,NULL,0,NULL,NULL,NULL),(6,'yehan','yehan','yehan@gmail.com','001','123','$2y$10$0eZNfsQT4.vDlrrIrwD7Ye4q0qLEuTZVf9hnw7wAYd0DUfVeguP8a',0,NULL,0,NULL,NULL,NULL),(7,'yehan','yehan','yehan@qq.com','002','fdfd','$2y$10$1RBsSm6uMuZSpCRNdimQXe0dTDTSpCElnftV6vsLqyxvChuvLXkdq',0,NULL,0,NULL,NULL,NULL),(11,'rere','ttt','364665169@qq.com','ye','4343','$2y$10$mGXhNQ9S8XNhraF2JMAKmuWZCO7bEvyEJCyLOvR/qK8ANKU7oeCmK',0,NULL,0,NULL,NULL,NULL),(16,'ggg','hh','364665169@qq.com','hj','5454','$2y$10$c3oiUJf9MMAMNLeoFtiVrO5wXBTwU9QYc4CUuN1ngWci6YST0TTdW',0,NULL,0,NULL,NULL,NULL),(20,'fdf','fdfd','364665169@qq.com','bam','5454','$2y$10$BWvyol7h7Ei1YD2vVGrk.OFMohCaqCv/2tgSWwS6RDzaHKa7gdYjq',0,NULL,0,NULL,NULL,NULL),(21,'fdfd','fdfd','364665169@qq.com','earth','545','$2y$10$qJHtglvsyqHsftZXddkeUuUewd0DyyzQdJLHAEMWx6OrHRBpLkryO',0,NULL,0,NULL,NULL,NULL),(22,'rer','trtr','364665169@qq.com','rig','5454','$2y$10$1999s1A90u6tr8I/jBlRQ.euemMCifevmJCyiH8jatD6JDc9pP1N6',0,NULL,0,NULL,NULL,NULL),(23,'fdgfg','hhgh','yehan.wang@it.weltec.ac.nz','hghg','5454','$2y$10$YPV4DnmAFvxKTHUfpUthY.B0S8LTQ8ernbkTuharxWMc7x5EKebji',0,NULL,0,NULL,NULL,NULL),(24,'gfgf','gfgf','gfg@qq.com','gfgf','gfg','$2y$10$kdf5p6ZID0P5mWlpEYlSHujxu4bbLPGm64agMd5ZXNmU3puqJryRi',0,NULL,0,NULL,NULL,NULL),(25,'gfgf','gfgfg','fdf@qq.com','jy','gfgf','$2y$10$A4F4NQ7YROVHDnhivs.2rOS/ODOZVluwhM0xGvf/t3Os/tmLopnua',0,NULL,0,NULL,NULL,NULL),(26,'fdfdf','fdfd','ffdf@qq.com','434434','gfgf','$2y$10$7am61xncK1hCtl2s5e8NYuGOaKHeZ2nIkeYoxU1YciFoFFx2xeI0C',0,NULL,0,NULL,NULL,NULL),(27,'fdfdfjhj','hghghghg','3232@qq.com','hytyt','hghg','$2y$10$Xgp8/Z0xoCLomyZmo/yMGeP8l6YNZUu.pH3UkRBEV6aLI4NCpcnMW',0,NULL,0,NULL,NULL,NULL),(28,'rerer','gfgfgf','4343@qq.com','fudge','5454','$2y$10$Y.iTL8ds9FyWLg9SeusN5umHlF0GMQT6wU323GynwWb8ixTCxRp5O',0,NULL,0,NULL,NULL,NULL),(29,'qaz','edc','rer@qq.com','4343','43','$2y$10$l5lCvVBw3vWVOk427cGXB.vHyiNfbF4bEkSsKY6Jn53S5uNRcZjky',0,'786d46a38fa9c69856316b668a928ea0',1502934583,1502848183,NULL,NULL),(30,'qaz','edc','rer@qq.com','4343','43','$2y$10$l5lCvVBw3vWVOk427cGXB.vHyiNfbF4bEkSsKY6Jn53S5uNRcZjky',0,'786d46a38fa9c69856316b668a928ea0',1502934583,1502848183,NULL,NULL),(31,'ooo','ooo','yehan.wang@it.weltec.ac.nz','123','4343','$2y$10$piSn/XxpHptY0zeZysOVMeTuO5XVdhtWIPdKLevTnLZqgEjdz/gIq',0,'ce5c4f16af10822975b85f17bccde960',1502935264,1502848864,NULL,NULL),(32,'ppp','fdfd','yehan.wang@it.weltec.ac.nz','iii','343','$2y$10$ZUp2RzWQWorqeHVm4zYQY.anGokG9TpCt0lg18ZWktlvDYhQz0cNy',0,'c6c9f73531566086e836e46a0661db9e',1502940129,1502853729,NULL,NULL),(33,'gfgf','gfgf','yehan.wang@it.weltec.ac.nz','43434','fdfd','$2y$10$8arpFvugSe6eLB8V0pCgU.EynXdpd4/yGKn5dpiBeQKKp9ky71KH6',0,'458f4675a8059df09d04199fdc25e2f9',1502940368,1502853968,NULL,NULL),(34,'ghgh','hghg','yehan.wang@it.weltec.ac.nz','pdfs','5454','$2y$10$Behr/Ty46XlwSH9.Sie4V.5HFVwRr4vNumq0KrbPSgET7HmXD0DH6',0,'40d5749bde0ebd676da35c2073238423',1502940571,1502854171,NULL,NULL),(35,'hghfdrre','rererw','yehan.wang@it.weltec.ac.nz','gfgfsd','dfsgsdg','$2y$10$fWE3Yw4oVvAfYxB8WGnZeuA3CUl1C7VVLDnt2yk7FRqLKamYlYSZa',0,'192475e7604571b98ebf9e5c170fa616',1502940645,1502854245,NULL,NULL),(36,'rerer','rerer','rere@qq.com','fdfd','fdf','$2y$10$uFQ3W3a8qkTZYloTvRK.tOOohkk1LFonKYO.XzLwX0HlhaqNCi2EW',0,'5466f1e8f7db30ad6c532422b52d6a41',1502956620,1502870220,NULL,NULL),(38,'fdfdfd','fdfdf','yuexinkai123@gmail.com','Paz','fdfd','$2y$10$fmbJni.Ii3J3svjdWfV4/OEtLkq9XiAwXcWZTnRN1JfotUrEOxEuC',0,'5b777a9926cfe8bbed64322f26ad6c78',1503093287,1503006887,NULL,NULL),(39,'rere','rere','fdgh@qq.com','Hoyt','544','$2y$10$rcaSBP0MOmTXO6hPM4OW1u7KunY0jTPKlqSDLUGTzNXhiNX1vtatu',0,'78081c60f24601391afa67e21a4cb8bb',1503094649,1503008249,NULL,NULL),(40,'tttttt','ttttt','32328@gmail.com','plhyb','3434','$2y$10$zHoSEjYcvH.tgCzCpr4niuaH3rWCRI2vuJRXiGShV1e0xur/DpkJi',0,'4f41bd1048f0ce636ab32c429ccad402',1503109366,1503022966,NULL,NULL),(41,'htree','rerf','fdfd@gmail.com','rev','432','$2y$10$b5xQ3J9ZBqD1jsXmvfTr8egewyQbFwLEm20JlPV6588pB68yJ.DLe',0,'c937f1443221deff21c2bf5c61105579',1503109448,1503023048,NULL,NULL),(42,'httr','gsfds','lkj@123.com','poi','4343','$2y$10$km71iSgW.1afDi7Yfl6bf.PeDoXbQQvclViFdaeqN32V8GZ1Ov/eG',0,'9fc21e5b4905ccb53f20046404fe3cb7',1503109702,1503023302,NULL,NULL),(43,'fdfd','fdfdf','4343@qqx.com','tre','434','$2y$10$wVHrgD7.BwNgkAriZE.OQO5hb9KGsYcu65HHmLMxZhBfy1Sd4Zc/i',0,'2bb2e544c0feb36d9196ba0bc3118c2d',1503109869,1503023469,NULL,NULL),(44,'klkl','jgddf','edcrfv@gmail.com','here','9012','$2y$10$J4k2o0dXEnK7hoMJ4PV7y.cREdG0Vh9Fquw2dTzYFERs6/5Ys76ze',0,'0c701927b22789bd07a8a64f8a2797ff',1503110098,1503023698,NULL,NULL),(45,'gewe','fdsfew','ijhg@rere.com','uhyt6','89','$2y$10$3YukaWVne6GYGoDk/ZVeiexdY4A3b/wSIGshwr1ZDGRfD7gThxm8W',0,'8b9bd4a710fe2c86a60692a177b22a5f',1503110382,1503023982,NULL,NULL),(46,'yehan','wang','900@gmail.com','yyy','123','$2y$10$fheRgFnLogwadVasVeXevOj0xJQQW40HYamfn/.X/BD0smjsHf21m',0,'f107b84469588aba18488363985e1822',1503361561,1503275161,NULL,NULL),(47,'aimee','aimee','yhchixigua@gmail.com','aimee123','5012','$2y$10$m8ZyFLncCH8cvhEFdt5.y.ikkGKcVGior8r..oiZbwnq.LyNkKHrS',0,'6b0b30f331da94ac8a40fa4210b102d1',1504391139,1504304739,'04/09/2017',NULL),(48,'bruce','li','yehan.wang@it.weltec.ac.nz','Bruce','33232','$2y$10$Rj8R6Jra2jYBaYNKrTjHIutF9PsKxjubt3opbPLRKikmK0lZzw/t2',1,'3b912a507ce4f3a6a9a34a577ea8451d',1504587699,1504501299,'04/09/2017',NULL),(49,'tony','wu','222@gmail.com','Tony','33232','$2y$10$p688dmExfCMSzojmhwOCB.AtmTHmGj5KBp/1Ig8srI8HibrgTHhz2',1,'d24efee2c60e0f6759bde8ccb1c1ef6e',1504587729,1504501329,'04/09/2017',NULL),(50,'amy','wang','yhchixigua@gmail.com','amy','33232','$2y$10$xCZXMq74E2yk9IBeqgWZR.gYAp48izIt7Mq4Mxz1tL.0ufunKinMu',0,'fdfeaadcfcd0241267731ce66ed75eaa',1504587799,1504501399,'21/09/2017',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'collectionswap'
--

--
-- Final view structure for view `user_sets_details`
--

/*!50001 DROP VIEW IF EXISTS `user_sets_details`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `user_sets_details` AS select `a`.`user_id` AS `user_id`,`a`.`user_uid` AS `user_uid`,`b`.`set_id` AS `set_id`,`b`.`set_cover_image` AS `set_cover_image`,`b`.`set_name` AS `set_name` from ((`user_sets` `t` join `users` `a`) join `sets_exist` `b`) where ((`t`.`user_id` = `a`.`user_id`) and (`t`.`set_id` = `b`.`set_id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-22  9:44:55
