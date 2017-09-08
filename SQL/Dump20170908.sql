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
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cards_status`
--

LOCK TABLES `cards_status` WRITE;
/*!40000 ALTER TABLE `cards_status` DISABLE KEYS */;
INSERT INTO `cards_status` VALUES ('yehan','a001',1,1,'a',NULL),('yehan','a002',2,2,'a',NULL),('yehan','a003',1,3,'a',NULL),('yehan','a004',2,4,'a',NULL),('yehan','a005',1,5,'a',NULL),('yehan','a006',1,6,'a',NULL),('amy','a001',1,7,'a',NULL),('amy','a002',1,8,'a',NULL),('amy','a003',2,9,'a',NULL),('amy','a004',1,10,'a',NULL),('amy','a005',2,11,'a',NULL),('amy','a006',1,12,'a',NULL),('wendy','a001',2,13,'a',NULL),('wendy','a002',2,14,'a',NULL),('wendy','a003',1,15,'a',NULL),('wendy','a004',1,16,'a',NULL),('wendy','a005',2,17,'a',NULL),('wendy','a006',2,18,'a',NULL),('Tony','a001',1,19,'a',NULL),('Tony','a002',1,20,'a',NULL),('Tony','a003',2,21,'a',NULL),('Tony','a004',2,22,'a',NULL),('Tony','a005',2,23,'a',NULL),('Tony','a006',2,24,'a',NULL),('Bruce','a001',2,25,'a',NULL),('Bruce','a002',1,26,'a',NULL),('Bruce','a003',2,27,'a',NULL),('Bruce','a004',2,28,'a',NULL),('Bruce','a005',2,29,'a',NULL),('Bruce','a006',2,30,'a',NULL),('xinkai','a001',2,31,'a',NULL),('xinkai','a002',2,32,'a',NULL),('xinkai','a003',1,33,'a',NULL),('xinkai','a004',2,34,'a',NULL),('xinkai','a005',1,35,'a',NULL),('xinkai1','a002',2,37,'a',NULL),('xinkai1','a003',1,38,'a',NULL),('xinkai1','a004',2,39,'a',NULL),('xinkai1','a005',2,40,'a',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `charity_card`
--

LOCK TABLES `charity_card` WRITE;
/*!40000 ALTER TABLE `charity_card` DISABLE KEYS */;
INSERT INTO `charity_card` VALUES (3,'amy','a001','a',3),(4,'amy','a003','a',3);
/*!40000 ALTER TABLE `charity_card` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_uid` varchar(45) NOT NULL,
  `good` int(11) DEFAULT '0',
  `normal` int(11) DEFAULT '0',
  `bad` int(11) DEFAULT '0',
  `average` double DEFAULT '0',
  `count` int(11) DEFAULT '0',
  `total` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
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
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'fdf','fdf','fd@qq.com','fd','fd','$2y$10$9oANi1l3/yHt1An0qV6OdOq2OkGu0MDMo/Wydo52ZsfsnjgarKl.S',0,NULL,0,NULL,NULL),(2,'fdfd','fdfdfdfd','123@qq.com','43','34','$2y$10$CSy6XTWLtm/z7YxVU2xDHO10Gt/3U2x/7ZEACzAVCZL.NkD9kTLo6',0,NULL,0,NULL,NULL),(3,'qqq','qqq','3232@qq.com','321','123','$2y$10$Eo.hL1zMLwxj5R1Lc3RC8.LsLxH38Sy1z5tqILwGFi/5whBeXRpwi',0,NULL,0,NULL,NULL),(4,'aaa','aaa','ewew@qq.com','qqq','23','$2y$10$FYA4.id3wQNJ2lzJUK/RXOr3Luzco9iNaWdAic44Rm7bUwbYAeg3y',0,NULL,0,NULL,NULL),(5,'amiee','aimee','fdf@qq.com','yeah','323','$2y$10$uJnDHc4unLS6Uxe0ULs5OuvAzg1a3tfPLL7LJasCe6ZB4XtsQCYcK',0,NULL,0,NULL,NULL),(6,'yehan','yehan','yehan@gmail.com','001','123','$2y$10$0eZNfsQT4.vDlrrIrwD7Ye4q0qLEuTZVf9hnw7wAYd0DUfVeguP8a',0,NULL,0,NULL,NULL),(7,'yehan','yehan','yehan@qq.com','002','fdfd','$2y$10$1RBsSm6uMuZSpCRNdimQXe0dTDTSpCElnftV6vsLqyxvChuvLXkdq',0,NULL,0,NULL,NULL),(11,'rere','ttt','364665169@qq.com','ye','4343','$2y$10$mGXhNQ9S8XNhraF2JMAKmuWZCO7bEvyEJCyLOvR/qK8ANKU7oeCmK',0,NULL,0,NULL,NULL),(16,'ggg','hh','364665169@qq.com','hj','5454','$2y$10$c3oiUJf9MMAMNLeoFtiVrO5wXBTwU9QYc4CUuN1ngWci6YST0TTdW',0,NULL,0,NULL,NULL),(20,'fdf','fdfd','364665169@qq.com','bam','5454','$2y$10$BWvyol7h7Ei1YD2vVGrk.OFMohCaqCv/2tgSWwS6RDzaHKa7gdYjq',0,NULL,0,NULL,NULL),(21,'fdfd','fdfd','364665169@qq.com','earth','545','$2y$10$qJHtglvsyqHsftZXddkeUuUewd0DyyzQdJLHAEMWx6OrHRBpLkryO',0,NULL,0,NULL,NULL),(22,'rer','trtr','364665169@qq.com','rig','5454','$2y$10$1999s1A90u6tr8I/jBlRQ.euemMCifevmJCyiH8jatD6JDc9pP1N6',0,NULL,0,NULL,NULL),(23,'fdgfg','hhgh','yehan.wang@it.weltec.ac.nz','hghg','5454','$2y$10$YPV4DnmAFvxKTHUfpUthY.B0S8LTQ8ernbkTuharxWMc7x5EKebji',0,NULL,0,NULL,NULL),(24,'gfgf','gfgf','gfg@qq.com','gfgf','gfg','$2y$10$kdf5p6ZID0P5mWlpEYlSHujxu4bbLPGm64agMd5ZXNmU3puqJryRi',0,NULL,0,NULL,NULL),(25,'gfgf','gfgfg','fdf@qq.com','jy','gfgf','$2y$10$A4F4NQ7YROVHDnhivs.2rOS/ODOZVluwhM0xGvf/t3Os/tmLopnua',0,NULL,0,NULL,NULL),(26,'fdfdf','fdfd','ffdf@qq.com','434434','gfgf','$2y$10$7am61xncK1hCtl2s5e8NYuGOaKHeZ2nIkeYoxU1YciFoFFx2xeI0C',0,NULL,0,NULL,NULL),(27,'fdfdfjhj','hghghghg','3232@qq.com','hytyt','hghg','$2y$10$Xgp8/Z0xoCLomyZmo/yMGeP8l6YNZUu.pH3UkRBEV6aLI4NCpcnMW',0,NULL,0,NULL,NULL),(28,'rerer','gfgfgf','4343@qq.com','fudge','5454','$2y$10$Y.iTL8ds9FyWLg9SeusN5umHlF0GMQT6wU323GynwWb8ixTCxRp5O',0,NULL,0,NULL,NULL),(29,'qaz','edc','rer@qq.com','4343','43','$2y$10$l5lCvVBw3vWVOk427cGXB.vHyiNfbF4bEkSsKY6Jn53S5uNRcZjky',0,'786d46a38fa9c69856316b668a928ea0',1502934583,1502848183,NULL),(30,'qaz','edc','rer@qq.com','4343','43','$2y$10$l5lCvVBw3vWVOk427cGXB.vHyiNfbF4bEkSsKY6Jn53S5uNRcZjky',0,'786d46a38fa9c69856316b668a928ea0',1502934583,1502848183,NULL),(31,'ooo','ooo','yehan.wang@it.weltec.ac.nz','123','4343','$2y$10$piSn/XxpHptY0zeZysOVMeTuO5XVdhtWIPdKLevTnLZqgEjdz/gIq',0,'ce5c4f16af10822975b85f17bccde960',1502935264,1502848864,NULL),(32,'ppp','fdfd','yehan.wang@it.weltec.ac.nz','iii','343','$2y$10$ZUp2RzWQWorqeHVm4zYQY.anGokG9TpCt0lg18ZWktlvDYhQz0cNy',0,'c6c9f73531566086e836e46a0661db9e',1502940129,1502853729,NULL),(33,'gfgf','gfgf','yehan.wang@it.weltec.ac.nz','43434','fdfd','$2y$10$8arpFvugSe6eLB8V0pCgU.EynXdpd4/yGKn5dpiBeQKKp9ky71KH6',0,'458f4675a8059df09d04199fdc25e2f9',1502940368,1502853968,NULL),(34,'ghgh','hghg','yehan.wang@it.weltec.ac.nz','pdfs','5454','$2y$10$Behr/Ty46XlwSH9.Sie4V.5HFVwRr4vNumq0KrbPSgET7HmXD0DH6',0,'40d5749bde0ebd676da35c2073238423',1502940571,1502854171,NULL),(35,'hghfdrre','rererw','yehan.wang@it.weltec.ac.nz','gfgfsd','dfsgsdg','$2y$10$fWE3Yw4oVvAfYxB8WGnZeuA3CUl1C7VVLDnt2yk7FRqLKamYlYSZa',0,'192475e7604571b98ebf9e5c170fa616',1502940645,1502854245,NULL),(36,'rerer','rerer','rere@qq.com','fdfd','fdf','$2y$10$uFQ3W3a8qkTZYloTvRK.tOOohkk1LFonKYO.XzLwX0HlhaqNCi2EW',0,'5466f1e8f7db30ad6c532422b52d6a41',1502956620,1502870220,NULL),(38,'fdfdfd','fdfdf','yuexinkai123@gmail.com','Paz','fdfd','$2y$10$fmbJni.Ii3J3svjdWfV4/OEtLkq9XiAwXcWZTnRN1JfotUrEOxEuC',0,'5b777a9926cfe8bbed64322f26ad6c78',1503093287,1503006887,NULL),(39,'rere','rere','fdgh@qq.com','Hoyt','544','$2y$10$rcaSBP0MOmTXO6hPM4OW1u7KunY0jTPKlqSDLUGTzNXhiNX1vtatu',0,'78081c60f24601391afa67e21a4cb8bb',1503094649,1503008249,NULL),(40,'tttttt','ttttt','32328@gmail.com','plhyb','3434','$2y$10$zHoSEjYcvH.tgCzCpr4niuaH3rWCRI2vuJRXiGShV1e0xur/DpkJi',0,'4f41bd1048f0ce636ab32c429ccad402',1503109366,1503022966,NULL),(41,'htree','rerf','fdfd@gmail.com','rev','432','$2y$10$b5xQ3J9ZBqD1jsXmvfTr8egewyQbFwLEm20JlPV6588pB68yJ.DLe',0,'c937f1443221deff21c2bf5c61105579',1503109448,1503023048,NULL),(42,'httr','gsfds','lkj@123.com','poi','4343','$2y$10$km71iSgW.1afDi7Yfl6bf.PeDoXbQQvclViFdaeqN32V8GZ1Ov/eG',0,'9fc21e5b4905ccb53f20046404fe3cb7',1503109702,1503023302,NULL),(43,'fdfd','fdfdf','4343@qqx.com','tre','434','$2y$10$wVHrgD7.BwNgkAriZE.OQO5hb9KGsYcu65HHmLMxZhBfy1Sd4Zc/i',0,'2bb2e544c0feb36d9196ba0bc3118c2d',1503109869,1503023469,NULL),(44,'klkl','jgddf','edcrfv@gmail.com','here','9012','$2y$10$J4k2o0dXEnK7hoMJ4PV7y.cREdG0Vh9Fquw2dTzYFERs6/5Ys76ze',0,'0c701927b22789bd07a8a64f8a2797ff',1503110098,1503023698,NULL),(45,'gewe','fdsfew','ijhg@rere.com','uhyt6','89','$2y$10$3YukaWVne6GYGoDk/ZVeiexdY4A3b/wSIGshwr1ZDGRfD7gThxm8W',0,'8b9bd4a710fe2c86a60692a177b22a5f',1503110382,1503023982,NULL),(46,'yehan','wang','900@gmail.com','yyy','123','$2y$10$fheRgFnLogwadVasVeXevOj0xJQQW40HYamfn/.X/BD0smjsHf21m',0,'f107b84469588aba18488363985e1822',1503361561,1503275161,NULL),(47,'aimee','aimee','yhchixigua@gmail.com','aimee123','5012','$2y$10$m8ZyFLncCH8cvhEFdt5.y.ikkGKcVGior8r..oiZbwnq.LyNkKHrS',0,'6b0b30f331da94ac8a40fa4210b102d1',1504391139,1504304739,'04/09/2017'),(48,'bruce','li','111@gmail.com','Bruce','33232','$2y$10$Rj8R6Jra2jYBaYNKrTjHIutF9PsKxjubt3opbPLRKikmK0lZzw/t2',1,'3b912a507ce4f3a6a9a34a577ea8451d',1504587699,1504501299,'04/09/2017'),(49,'tony','wu','222@gmail.com','Tony','33232','$2y$10$p688dmExfCMSzojmhwOCB.AtmTHmGj5KBp/1Ig8srI8HibrgTHhz2',1,'d24efee2c60e0f6759bde8ccb1c1ef6e',1504587729,1504501329,'04/09/2017'),(50,'amy','wang','yhchixigua@gmail.com','amy','33232','$2y$10$0jPeqM1PmFEPLhklx20Cz.i4qGYPO4MaPFJaUcSWP0d/XpH8Nryli',0,'fdfeaadcfcd0241267731ce66ed75eaa',1504587799,1504501399,'08/09/2017');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-08 13:47:06
