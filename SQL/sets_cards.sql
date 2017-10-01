-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2017 at 09:11 PM
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
-- Table structure for table `sets_cards`
--

CREATE TABLE `sets_cards` (
  `id` int(20) NOT NULL,
  `set_id` varchar(500) NOT NULL,
  `card_id` varchar(500) NOT NULL,
  `card_images` varchar(500) NOT NULL,
  `card_name` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sets_cards`
--

INSERT INTO `sets_cards` (`id`, `set_id`, `card_id`, `card_images`, `card_name`) VALUES
(1, '1', '1', 'images/cardImages/card-1.png', '1001'),
(2, '1', '2', 'images/cardImages/card-2.png', '1002'),
(3, '1', '3', 'images/cardImages/card-3.png', '1003'),
(4, '1', '4', 'images/cardImages/card-4.png', '1004'),
(5, '1', '5', 'images/cardImages/card-5.png', '1005'),
(6, '1', '6', 'images/cardImages/card-6.png', '1006'),
(7, '2', '33', 'images/cardImages/Disney-33.jpg', '2033'),
(8, '2', '35', 'images/cardImages/Disney-35.jpg', '2035'),
(9, '2', '36', 'images/cardImages/Disney-36.jpg', '2036'),
(10, '2', '37', 'images/cardImages/Disney-37.jpg', '2037'),
(11, '3', '101', 'images/cardImages/Grote Smurf.jpg', 'Grote Smurf'),
(12, '3', '102', 'images/cardImages/Bril Smurf.jpg', 'Bril Smurf'),
(13, '3', '103', 'images/cardImages/Smurfin.jpg', 'Smurfin'),
(14, '3', '104', 'images/cardImages/Mopper Smurf.jpg', 'Mopper Smurf'),
(15, '3', '105', 'images/cardImages/Muziek Smurfs.jpg', 'Muziek Smurfs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sets_cards`
--
ALTER TABLE `sets_cards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `card_id` (`card_id`),
  ADD KEY `card_id_2` (`card_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
