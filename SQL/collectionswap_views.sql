-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2017 at 08:37 PM
-- Server version: 5.7.18-log
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collectionswap`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_cards_status`
-- (See below for the actual view)
--
CREATE TABLE `user_cards_status` (
`user_id` int(11)
,`user_uid` varchar(45)
,`set_id` varchar(45)
,`card_id` varchar(45)
,`card_status` int(1)
,`card_name` varchar(500)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_sets_details`
-- (See below for the actual view)
--
CREATE TABLE `user_sets_details` (
`user_id` int(11)
,`user_uid` varchar(45)
,`set_id` int(20)
,`set_cover_image` varchar(500)
,`set_name` varchar(500)
);

-- --------------------------------------------------------

--
-- Structure for view `user_cards_status`
--
DROP TABLE IF EXISTS `user_cards_status`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_cards_status`  AS  select `t`.`user_id` AS `user_id`,`t`.`user_uid` AS `user_uid`,`a`.`set_id` AS `set_id`,`a`.`card_id` AS `card_id`,`a`.`card_status` AS `card_status`,`b`.`card_name` AS `card_name` from ((`users` `t` join `cards_status` `a`) join `sets_cards` `b`) where ((`t`.`user_uid` = `a`.`user_uid`) and (`b`.`card_id` = `a`.`card_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `user_sets_details`
--
DROP TABLE IF EXISTS `user_sets_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_sets_details`  AS  select `a`.`user_id` AS `user_id`,`a`.`user_uid` AS `user_uid`,`b`.`set_id` AS `set_id`,`b`.`set_cover_image` AS `set_cover_image`,`b`.`set_name` AS `set_name` from ((`user_sets` `t` join `users` `a`) join `sets_exist` `b`) where ((`t`.`user_id` = `a`.`user_id`) and (`t`.`set_id` = `b`.`set_id`)) ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
