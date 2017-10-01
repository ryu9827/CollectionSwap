-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2017 at 08:55 PM
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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
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
  `get_name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_uid`, `swap_uid`, `swap_email`, `status`, `time`, `set_id`, `offer_id`, `get_id`, `token`, `offer_name`, `get_name`) VALUES
(54, 'Bruce', 'Amy', 'yhchixigua@gmail.com', '2', '20/09/2017 19:15:23', '1', '1,2', '5,6', NULL, NULL, NULL),
(55, 'Amy', 'Bruce', 'yehan.wang@it.weltec.ac.nz', '1', '27/09/2017 17:27:04', '1', '1,2', '4', NULL, NULL, NULL),
(56, 'Bruce', 'Amy', 'yhchixigua@gmail.com', '3', '21/09/2017 10:20:42', '1', '4', '1,2', NULL, NULL, NULL),
(57, 'Amy', 'Xinkai', '', '5', '26/09/2017 15:41:46', '1', '3', '1,2', '1d8aac14eb3c2d4d32d7a8f351722137', NULL, NULL),
(58, 'Xinkai', 'Amy', 'yhchixigua@gmail.com', '5', '26/09/2017 15:41:46', '1', '1,2', '3', '1d8aac14eb3c2d4d32d7a8f351722137', NULL, NULL),
(59, 'Amy', 'Xinkai', 'yhchixigua@gmail.com', '5', '29/09/2017 09:52:00', '1', '1,5', '2,5', NULL, NULL, NULL),
(60, 'Xinkai', 'Amy', 'yhchixigua@gmail.com', '5', '26/09/2017 15:41:46', '1', '1,2', '3', '1d8aac14eb3c2d4d32d7a8f351722137', NULL, NULL),
(61, 'Amy', 'Xinkai', 'yhchixigua@gmail.com', '3', '26/09/2017 15:41:46', '1', '1,5', '2,5', NULL, NULL, NULL),
(62, 'Amy', 'Bruce', 'yehan.wang@it.weltec.ac.nz', '6', '27/09/2017 17:27:04', '1', '1,2', '4', NULL, NULL, NULL),
(63, 'Bruce', 'Amy', 'yhchixigua@gmail.com', '6', '21/09/2017 10:20:42', '1', '4', '1,2', NULL, NULL, NULL),
(65, 'Amy', 'Bruce', 'yehan.wang@it.weltec.ac.nz', '0', '29/09/2017 09:52:23', '1', '1,2', '4', NULL, NULL, NULL),
(66, 'Bruce', 'Amy', 'yhchixigua@gmail.com', '1', '21/09/2017 10:20:42', '1', '4', '1,2', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
