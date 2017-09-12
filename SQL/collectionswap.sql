-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 02:24 AM
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
-- Table structure for table `cards_status`
--

CREATE TABLE `cards_status` (
  `user_uid` varchar(45) DEFAULT NULL,
  `card_id` varchar(45) DEFAULT NULL,
  `card_status` int(1) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `set_id` varchar(45) DEFAULT NULL,
  `locked_time` int(10) DEFAULT NULL,
  `card_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cards_status`
--

INSERT INTO `cards_status` (`user_uid`, `card_id`, `card_status`, `id`, `set_id`, `locked_time`, `card_name`) VALUES
('yehan', 'a001', 1, 1, '1', NULL, ''),
('yehan', 'a002', 2, 2, '1', NULL, ''),
('yehan', 'a003', 1, 3, '1', NULL, ''),
('yehan', 'a004', 2, 4, '1', NULL, ''),
('yehan', 'a005', 1, 5, '1', NULL, ''),
('yehan', 'a006', 1, 6, '1', NULL, ''),
('amy', 'a001', 0, 7, '1', 1505166349, ''),
('amy', 'a002', 0, 8, '1', 1505166349, ''),
('amy', 'a003', 2, 9, '1', 1505166349, ''),
('amy', 'a004', 1, 10, '1', 1505166349, ''),
('amy', 'a005', 0, 11, '1', 1505166349, ''),
('amy', 'a006', 0, 12, '1', 1505166349, ''),
('wendy', 'a001', 2, 13, '1', NULL, ''),
('wendy', 'a002', 2, 14, '1', NULL, ''),
('wendy', 'a003', 1, 15, '1', NULL, ''),
('wendy', 'a004', 1, 16, '1', NULL, ''),
('wendy', 'a005', 2, 17, '1', NULL, ''),
('wendy', 'a006', 2, 18, '1', NULL, ''),
('Tony', 'a001', 0, 19, '1', 1505166349, ''),
('Tony', 'a002', 0, 20, '1', 1505166349, ''),
('Tony', 'a003', 2, 21, '1', 1505166349, ''),
('Tony', 'a004', 2, 22, '1', 1505166349, ''),
('Tony', 'a005', 0, 23, '1', 1505166349, ''),
('Tony', 'a006', 0, 24, '1', 1505166349, ''),
('Bruce', 'a001', 2, 25, '1', NULL, ''),
('Bruce', 'a002', 1, 26, '1', NULL, ''),
('Bruce', 'a003', 2, 27, '1', NULL, ''),
('Bruce', 'a004', 2, 28, '1', NULL, ''),
('Bruce', 'a005', 2, 29, '1', NULL, ''),
('Bruce', 'a006', 2, 30, '1', NULL, ''),
('xinkai', 'a001', 2, 31, '1', NULL, ''),
('xinkai', 'a002', 2, 32, '1', NULL, ''),
('xinkai', 'a003', 1, 33, '1', NULL, ''),
('xinkai', 'a004', 2, 34, '1', NULL, ''),
('xinkai', 'a005', 1, 35, '1', NULL, ''),
('xinkai1', 'a002', 2, 37, '1', NULL, ''),
('xinkai1', 'a003', 1, 38, '1', NULL, ''),
('xinkai1', 'a004', 2, 39, '1', NULL, ''),
('xinkai1', 'a005', 2, 40, '1', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `charity_card`
--

CREATE TABLE `charity_card` (
  `id` int(11) NOT NULL,
  `user_uid` varchar(45) DEFAULT NULL,
  `card_id` varchar(45) DEFAULT NULL,
  `set_id` varchar(45) DEFAULT NULL,
  `card_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charity_card`
--

INSERT INTO `charity_card` (`id`, `user_uid`, `card_id`, `set_id`, `card_status`) VALUES
(3, 'amy', 'a001', 'a', 3),
(4, 'amy', 'a003', 'a', 3);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `user_uid` varchar(45) NOT NULL,
  `good` int(11) DEFAULT '0',
  `normal` int(11) DEFAULT '0',
  `bad` int(11) DEFAULT '0',
  `average` double DEFAULT '0',
  `count` int(11) DEFAULT '0',
  `total` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `user_uid`, `good`, `normal`, `bad`, `average`, `count`, `total`) VALUES
(1, 'amy', 6, 1, 0, 2.5, 8, 20),
(2, 'Bruce', 3, 2, 1, 2, 3, 30),
(3, 'Tony', 2, 4, 1, 4, 4, 20);

-- --------------------------------------------------------

--
-- Table structure for table `sets_cards`
--

CREATE TABLE `sets_cards` (
  `id` int(20) NOT NULL,
  `set_id` varchar(500) NOT NULL,
  `card_id` int(20) NOT NULL,
  `card_images` varchar(500) NOT NULL,
  `card_name` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sets_cards`
--

INSERT INTO `sets_cards` (`id`, `set_id`, `card_id`, `card_images`, `card_name`) VALUES
(1, 'a', 1, 'images/cardImages/card-1.png', '1'),
(2, 'a', 2, 'images/cardImages/card-2.png', '2'),
(3, 'a', 3, 'images/cardImages/card-3.png', '3'),
(4, 'a', 4, 'images/cardImages/card-4.png', '4'),
(5, 'a', 5, 'images/cardImages/card-5.png', '5'),
(6, 'a', 6, 'images/cardImages/card-6.png', '6');

-- --------------------------------------------------------

--
-- Table structure for table `sets_exist`
--

CREATE TABLE `sets_exist` (
  `set_id` int(20) NOT NULL,
  `set_name` varchar(500) NOT NULL,
  `set_cover_image` varchar(500) NOT NULL,
  `set_cards_amount` int(20) NOT NULL,
  `ishidden` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sets_exist`
--

INSERT INTO `sets_exist` (`set_id`, `set_name`, `set_cover_image`, `set_cards_amount`, `ishidden`) VALUES
(1, 'All Blacks (Weet-Bix)', 'images/setImages/All_Blacks.jpg\r\n', 30, 0),
(2, 'Disney Movie Stars', 'images/setImages/Disney_Movie_Star.jpg', 100, 0),
(3, 'Smurf', 'images/setImages/Smurf.jpg', 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
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
  `lastlogin_time` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_postcode`, `user_pwd`, `verify`, `token`, `token_time`, `regtime`, `lastlogin_time`) VALUES
(1, 'fdf', 'fdf', 'fd@qq.com', 'fd', 'fd', '$2y$10$9oANi1l3/yHt1An0qV6OdOq2OkGu0MDMo/Wydo52ZsfsnjgarKl.S', 0, NULL, 0, NULL, NULL),
(2, 'fdfd', 'fdfdfdfd', '123@qq.com', '43', '34', '$2y$10$CSy6XTWLtm/z7YxVU2xDHO10Gt/3U2x/7ZEACzAVCZL.NkD9kTLo6', 0, NULL, 0, NULL, NULL),
(3, 'qqq', 'qqq', '3232@qq.com', '321', '123', '$2y$10$Eo.hL1zMLwxj5R1Lc3RC8.LsLxH38Sy1z5tqILwGFi/5whBeXRpwi', 0, NULL, 0, NULL, NULL),
(4, 'aaa', 'aaa', 'ewew@qq.com', 'qqq', '23', '$2y$10$FYA4.id3wQNJ2lzJUK/RXOr3Luzco9iNaWdAic44Rm7bUwbYAeg3y', 0, NULL, 0, NULL, NULL),
(5, 'amiee', 'aimee', 'fdf@qq.com', 'yeah', '323', '$2y$10$uJnDHc4unLS6Uxe0ULs5OuvAzg1a3tfPLL7LJasCe6ZB4XtsQCYcK', 0, NULL, 0, NULL, NULL),
(6, 'yehan', 'yehan', 'yehan@gmail.com', '001', '123', '$2y$10$0eZNfsQT4.vDlrrIrwD7Ye4q0qLEuTZVf9hnw7wAYd0DUfVeguP8a', 0, NULL, 0, NULL, NULL),
(7, 'yehan', 'yehan', 'yehan@qq.com', '002', 'fdfd', '$2y$10$1RBsSm6uMuZSpCRNdimQXe0dTDTSpCElnftV6vsLqyxvChuvLXkdq', 0, NULL, 0, NULL, NULL),
(11, 'rere', 'ttt', '364665169@qq.com', 'ye', '4343', '$2y$10$mGXhNQ9S8XNhraF2JMAKmuWZCO7bEvyEJCyLOvR/qK8ANKU7oeCmK', 0, NULL, 0, NULL, NULL),
(16, 'ggg', 'hh', '364665169@qq.com', 'hj', '5454', '$2y$10$c3oiUJf9MMAMNLeoFtiVrO5wXBTwU9QYc4CUuN1ngWci6YST0TTdW', 0, NULL, 0, NULL, NULL),
(20, 'fdf', 'fdfd', '364665169@qq.com', 'bam', '5454', '$2y$10$BWvyol7h7Ei1YD2vVGrk.OFMohCaqCv/2tgSWwS6RDzaHKa7gdYjq', 0, NULL, 0, NULL, NULL),
(21, 'fdfd', 'fdfd', '364665169@qq.com', 'earth', '545', '$2y$10$qJHtglvsyqHsftZXddkeUuUewd0DyyzQdJLHAEMWx6OrHRBpLkryO', 0, NULL, 0, NULL, NULL),
(22, 'rer', 'trtr', '364665169@qq.com', 'rig', '5454', '$2y$10$1999s1A90u6tr8I/jBlRQ.euemMCifevmJCyiH8jatD6JDc9pP1N6', 0, NULL, 0, NULL, NULL),
(23, 'fdgfg', 'hhgh', 'yehan.wang@it.weltec.ac.nz', 'hghg', '5454', '$2y$10$YPV4DnmAFvxKTHUfpUthY.B0S8LTQ8ernbkTuharxWMc7x5EKebji', 0, NULL, 0, NULL, NULL),
(24, 'gfgf', 'gfgf', 'gfg@qq.com', 'gfgf', 'gfg', '$2y$10$kdf5p6ZID0P5mWlpEYlSHujxu4bbLPGm64agMd5ZXNmU3puqJryRi', 0, NULL, 0, NULL, NULL),
(25, 'gfgf', 'gfgfg', 'fdf@qq.com', 'jy', 'gfgf', '$2y$10$A4F4NQ7YROVHDnhivs.2rOS/ODOZVluwhM0xGvf/t3Os/tmLopnua', 0, NULL, 0, NULL, NULL),
(26, 'fdfdf', 'fdfd', 'ffdf@qq.com', '434434', 'gfgf', '$2y$10$7am61xncK1hCtl2s5e8NYuGOaKHeZ2nIkeYoxU1YciFoFFx2xeI0C', 0, NULL, 0, NULL, NULL),
(27, 'fdfdfjhj', 'hghghghg', '3232@qq.com', 'hytyt', 'hghg', '$2y$10$Xgp8/Z0xoCLomyZmo/yMGeP8l6YNZUu.pH3UkRBEV6aLI4NCpcnMW', 0, NULL, 0, NULL, NULL),
(28, 'rerer', 'gfgfgf', '4343@qq.com', 'fudge', '5454', '$2y$10$Y.iTL8ds9FyWLg9SeusN5umHlF0GMQT6wU323GynwWb8ixTCxRp5O', 0, NULL, 0, NULL, NULL),
(29, 'qaz', 'edc', 'rer@qq.com', '4343', '43', '$2y$10$l5lCvVBw3vWVOk427cGXB.vHyiNfbF4bEkSsKY6Jn53S5uNRcZjky', 0, '786d46a38fa9c69856316b668a928ea0', 1502934583, 1502848183, NULL),
(30, 'qaz', 'edc', 'rer@qq.com', '4343', '43', '$2y$10$l5lCvVBw3vWVOk427cGXB.vHyiNfbF4bEkSsKY6Jn53S5uNRcZjky', 0, '786d46a38fa9c69856316b668a928ea0', 1502934583, 1502848183, NULL),
(31, 'ooo', 'ooo', 'yehan.wang@it.weltec.ac.nz', '123', '4343', '$2y$10$piSn/XxpHptY0zeZysOVMeTuO5XVdhtWIPdKLevTnLZqgEjdz/gIq', 0, 'ce5c4f16af10822975b85f17bccde960', 1502935264, 1502848864, NULL),
(32, 'ppp', 'fdfd', 'yehan.wang@it.weltec.ac.nz', 'iii', '343', '$2y$10$ZUp2RzWQWorqeHVm4zYQY.anGokG9TpCt0lg18ZWktlvDYhQz0cNy', 0, 'c6c9f73531566086e836e46a0661db9e', 1502940129, 1502853729, NULL),
(33, 'gfgf', 'gfgf', 'yehan.wang@it.weltec.ac.nz', '43434', 'fdfd', '$2y$10$8arpFvugSe6eLB8V0pCgU.EynXdpd4/yGKn5dpiBeQKKp9ky71KH6', 0, '458f4675a8059df09d04199fdc25e2f9', 1502940368, 1502853968, NULL),
(34, 'ghgh', 'hghg', 'yehan.wang@it.weltec.ac.nz', 'pdfs', '5454', '$2y$10$Behr/Ty46XlwSH9.Sie4V.5HFVwRr4vNumq0KrbPSgET7HmXD0DH6', 0, '40d5749bde0ebd676da35c2073238423', 1502940571, 1502854171, NULL),
(35, 'hghfdrre', 'rererw', 'yehan.wang@it.weltec.ac.nz', 'gfgfsd', 'dfsgsdg', '$2y$10$fWE3Yw4oVvAfYxB8WGnZeuA3CUl1C7VVLDnt2yk7FRqLKamYlYSZa', 0, '192475e7604571b98ebf9e5c170fa616', 1502940645, 1502854245, NULL),
(36, 'rerer', 'rerer', 'rere@qq.com', 'fdfd', 'fdf', '$2y$10$uFQ3W3a8qkTZYloTvRK.tOOohkk1LFonKYO.XzLwX0HlhaqNCi2EW', 0, '5466f1e8f7db30ad6c532422b52d6a41', 1502956620, 1502870220, NULL),
(38, 'fdfdfd', 'fdfdf', 'yuexinkai123@gmail.com', 'Paz', 'fdfd', '$2y$10$fmbJni.Ii3J3svjdWfV4/OEtLkq9XiAwXcWZTnRN1JfotUrEOxEuC', 0, '5b777a9926cfe8bbed64322f26ad6c78', 1503093287, 1503006887, NULL),
(39, 'rere', 'rere', 'fdgh@qq.com', 'Hoyt', '544', '$2y$10$rcaSBP0MOmTXO6hPM4OW1u7KunY0jTPKlqSDLUGTzNXhiNX1vtatu', 0, '78081c60f24601391afa67e21a4cb8bb', 1503094649, 1503008249, NULL),
(40, 'tttttt', 'ttttt', '32328@gmail.com', 'plhyb', '3434', '$2y$10$zHoSEjYcvH.tgCzCpr4niuaH3rWCRI2vuJRXiGShV1e0xur/DpkJi', 0, '4f41bd1048f0ce636ab32c429ccad402', 1503109366, 1503022966, NULL),
(41, 'htree', 'rerf', 'fdfd@gmail.com', 'rev', '432', '$2y$10$b5xQ3J9ZBqD1jsXmvfTr8egewyQbFwLEm20JlPV6588pB68yJ.DLe', 0, 'c937f1443221deff21c2bf5c61105579', 1503109448, 1503023048, NULL),
(42, 'httr', 'gsfds', 'lkj@123.com', 'poi', '4343', '$2y$10$km71iSgW.1afDi7Yfl6bf.PeDoXbQQvclViFdaeqN32V8GZ1Ov/eG', 0, '9fc21e5b4905ccb53f20046404fe3cb7', 1503109702, 1503023302, NULL),
(43, 'fdfd', 'fdfdf', '4343@qqx.com', 'tre', '434', '$2y$10$wVHrgD7.BwNgkAriZE.OQO5hb9KGsYcu65HHmLMxZhBfy1Sd4Zc/i', 0, '2bb2e544c0feb36d9196ba0bc3118c2d', 1503109869, 1503023469, NULL),
(44, 'klkl', 'jgddf', 'edcrfv@gmail.com', 'here', '9012', '$2y$10$J4k2o0dXEnK7hoMJ4PV7y.cREdG0Vh9Fquw2dTzYFERs6/5Ys76ze', 0, '0c701927b22789bd07a8a64f8a2797ff', 1503110098, 1503023698, NULL),
(45, 'gewe', 'fdsfew', 'ijhg@rere.com', 'uhyt6', '89', '$2y$10$3YukaWVne6GYGoDk/ZVeiexdY4A3b/wSIGshwr1ZDGRfD7gThxm8W', 0, '8b9bd4a710fe2c86a60692a177b22a5f', 1503110382, 1503023982, NULL),
(46, 'yehan', 'wang', '900@gmail.com', 'yyy', '123', '$2y$10$fheRgFnLogwadVasVeXevOj0xJQQW40HYamfn/.X/BD0smjsHf21m', 0, 'f107b84469588aba18488363985e1822', 1503361561, 1503275161, NULL),
(47, 'aimee', 'aimee', 'yhchixigua@gmail.com', 'aimee123', '5012', '$2y$10$m8ZyFLncCH8cvhEFdt5.y.ikkGKcVGior8r..oiZbwnq.LyNkKHrS', 0, '6b0b30f331da94ac8a40fa4210b102d1', 1504391139, 1504304739, '04/09/2017'),
(48, 'bruce', 'li', '111@gmail.com', 'Bruce', '33232', '$2y$10$Rj8R6Jra2jYBaYNKrTjHIutF9PsKxjubt3opbPLRKikmK0lZzw/t2', 1, '3b912a507ce4f3a6a9a34a577ea8451d', 1504587699, 1504501299, '04/09/2017'),
(49, 'tony', 'wu', '222@gmail.com', 'Tony', '33232', '$2y$10$p688dmExfCMSzojmhwOCB.AtmTHmGj5KBp/1Ig8srI8HibrgTHhz2', 1, 'd24efee2c60e0f6759bde8ccb1c1ef6e', 1504587729, 1504501329, '04/09/2017'),
(50, 'amy', 'wang', 'yhchixigua@gmail.com', 'amy', '33232', '$2y$10$0jPeqM1PmFEPLhklx20Cz.i4qGYPO4MaPFJaUcSWP0d/XpH8Nryli', 0, 'fdfeaadcfcd0241267731ce66ed75eaa', 1504587799, 1504501399, '12/09/2017');

-- --------------------------------------------------------

--
-- Table structure for table `user_sets`
--

CREATE TABLE `user_sets` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `set_id` varchar(500) NOT NULL,
  `set_image` varchar(500) NOT NULL,
  `set_name` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sets`
--

INSERT INTO `user_sets` (`id`, `user_id`, `set_id`, `set_image`, `set_name`) VALUES
(1, 50, 'a', 'images/setImages/All_Blacks.jpg', 'All Blacks'),
(2, 50, 'b', 'images/setImages/Disney_Movie_Star.jpg', 'Disney Movie Star'),
(3, 50, 'c', 'images/setImages/Smurf.jpg', 'Smurf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards_status`
--
ALTER TABLE `cards_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `charity_card`
--
ALTER TABLE `charity_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `user_uid_UNIQUE` (`user_uid`);

--
-- Indexes for table `sets_cards`
--
ALTER TABLE `sets_cards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `card_id` (`card_id`);

--
-- Indexes for table `sets_exist`
--
ALTER TABLE `sets_exist`
  ADD PRIMARY KEY (`set_id`),
  ADD UNIQUE KEY `set_id` (`set_id`),
  ADD UNIQUE KEY `set_name` (`set_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_sets`
--
ALTER TABLE `user_sets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards_status`
--
ALTER TABLE `cards_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `charity_card`
--
ALTER TABLE `charity_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sets_exist`
--
ALTER TABLE `sets_exist`
  MODIFY `set_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
