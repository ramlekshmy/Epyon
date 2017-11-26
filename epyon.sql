-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 07:20 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epyon`
--

-- --------------------------------------------------------

--
-- Table structure for table `addlist`
--

CREATE TABLE `addlist` (
  `id` int(11) NOT NULL,
  `med_name` mediumtext NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` float NOT NULL,
  `med_id` mediumtext NOT NULL,
  `uid` mediumtext NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `disease_id` int(11) NOT NULL,
  `disease_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`disease_id`, `disease_name`) VALUES
(1, 'Fever'),
(2, 'Hypothyroidism'),
(3, 'Hypertension'),
(4, 'Diabetes'),
(5, 'Cardiovascular disease'),
(6, 'Gastroesophageal reflux disease'),
(7, 'Peptic ulcer disease');

-- --------------------------------------------------------

--
-- Table structure for table `epyon_purchase`
--

CREATE TABLE `epyon_purchase` (
  `purchase_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_date` date NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epyon_purchase`
--

INSERT INTO `epyon_purchase` (`purchase_id`, `medicine_id`, `user_id`, `transaction_date`, `count`) VALUES
(1, 1, 2, '2017-11-25', 0),
(2, 1, 2, '2017-11-25', 500),
(3, 2, 2, '2017-11-25', 500),
(4, 3, 2, '2017-11-25', 500),
(5, 4, 2, '2017-11-25', 500),
(6, 1, 3, '2017-11-25', 500),
(7, 2, 3, '2017-11-25', 500),
(8, 3, 3, '2017-11-25', 500),
(9, 4, 3, '2017-11-25', 500),
(10, 1, 4, '2017-11-25', 500),
(11, 2, 4, '2017-11-25', 500),
(12, 3, 4, '2017-11-25', 200),
(13, 4, 4, '2017-11-25', 300),
(14, 1, 19, '2017-11-25', 200),
(15, 2, 19, '2017-11-25', 300),
(16, 3, 19, '2017-11-25', 500),
(17, 4, 19, '2017-11-25', 500),
(18, 1, 24, '2017-11-25', 500),
(19, 2, 24, '2017-11-25', 300),
(20, 3, 24, '2017-11-25', 600),
(21, 4, 24, '2017-11-25', 600),
(22, 1, 25, '2017-11-25', 500),
(23, 2, 25, '2017-11-29', 300),
(24, 3, 25, '2017-11-29', 500),
(25, 4, 25, '2017-11-29', 500),
(26, 3, 19, '2017-11-25', 500),
(27, 4, 19, '2017-11-25', 500),
(28, 1, 24, '2017-11-25', 500),
(29, 2, 24, '2017-11-25', 300),
(30, 3, 24, '2017-11-25', 600),
(31, 4, 24, '2017-11-25', 600),
(32, 1, 25, '2017-11-25', 500),
(33, 2, 25, '2017-11-29', 300),
(34, 3, 25, '2017-11-29', 500),
(35, 4, 25, '2017-11-29', 500),
(36, 1, 9, '2017-11-28', 300),
(37, 2, 9, '2017-11-25', 400),
(38, 3, 9, '2017-11-28', 400),
(39, 4, 9, '2017-11-30', 300),
(40, 1, 12, '2017-11-29', 200),
(41, 2, 12, '2017-11-25', 300),
(42, 3, 12, '2017-11-25', 300),
(43, 4, 12, '2017-11-25', 600),
(44, 1, 17, '2017-11-23', 500),
(45, 2, 17, '2017-11-25', 600),
(46, 3, 17, '2017-11-30', 400),
(47, 4, 17, '2017-11-25', 500),
(48, 1, 5, '2017-11-25', 500),
(49, 2, 5, '2017-11-30', 400),
(50, 3, 5, '2017-11-25', 600),
(51, 4, 5, '2017-11-29', 300),
(52, 1, 6, '2017-11-25', 300),
(53, 2, 6, '2017-11-25', 600),
(54, 3, 6, '2017-11-25', 400),
(55, 4, 6, '2017-11-25', 100),
(56, 1, 11, '2017-11-25', 300),
(57, 2, 11, '2017-11-25', 100),
(58, 3, 11, '2017-11-29', 300),
(59, 4, 11, '2017-11-25', 400),
(60, 1, 16, '2017-11-25', 400),
(61, 2, 16, '2017-11-25', 300),
(62, 3, 16, '2017-11-28', 300),
(63, 4, 16, '2017-11-25', 300),
(64, 1, 9, '2017-11-28', 300),
(65, 2, 9, '2017-11-25', 400),
(66, 3, 9, '2017-11-28', 400),
(67, 4, 9, '2017-11-30', 300),
(68, 1, 12, '2017-11-29', 200),
(69, 2, 12, '2017-11-25', 300),
(70, 3, 12, '2017-11-25', 300),
(71, 4, 12, '2017-11-25', 600),
(72, 1, 17, '2017-11-23', 500),
(73, 2, 17, '2017-11-25', 600),
(74, 3, 17, '2017-11-30', 400),
(75, 4, 17, '2017-11-25', 500),
(76, 1, 5, '2017-11-25', 500),
(77, 2, 5, '2017-11-30', 400),
(78, 3, 5, '2017-11-25', 600),
(79, 4, 5, '2017-11-29', 300),
(80, 1, 6, '2017-11-25', 300),
(81, 2, 6, '2017-11-25', 600),
(82, 3, 6, '2017-11-25', 400),
(83, 4, 6, '2017-11-25', 100),
(84, 1, 11, '2017-11-25', 300),
(85, 2, 11, '2017-11-25', 100),
(86, 3, 11, '2017-11-29', 300),
(87, 4, 11, '2017-11-25', 400),
(88, 1, 16, '2017-11-25', 400),
(89, 2, 16, '2017-11-25', 300),
(90, 3, 16, '2017-11-28', 300),
(91, 4, 16, '2017-11-25', 300),
(92, 1, 0, '2017-11-26', 2),
(93, 2, 0, '2017-11-26', 44),
(94, 2, 0, '2017-11-26', 24),
(95, 2, 0, '2017-11-26', 46),
(96, 4, 0, '2017-11-26', 21),
(97, 3, 0, '2017-11-26', 26),
(98, 1, 0, '2017-11-26', 13);

-- --------------------------------------------------------

--
-- Table structure for table `epyon_user`
--

CREATE TABLE `epyon_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_type` enum('0','1') NOT NULL,
  `user_location` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epyon_user`
--

INSERT INTO `epyon_user` (`user_id`, `user_name`, `user_password`, `user_type`, `user_location`) VALUES
(1, 're', 're', '0', 0),
(2, 't1', 't1', '1', 1),
(3, 't2', 't2', '1', 1),
(4, 't3', 't3', '1', 1),
(5, 'user1', 'user1', '1', 8),
(6, 'user2', 'user2', '1', 8),
(9, 'user3', 'user3', '1', 7),
(11, 'user4', 'user4', '1', 8),
(12, 'user5', 'user5', '1', 7),
(16, 'user6', 'user6', '1', 8),
(17, 'user7', 'user7', '1', 7),
(18, 'user8', 'user8', '1', 2),
(19, 'user9', 'user9', '1', 2),
(24, 'user10', 'user10', '1', 2),
(25, 'user11', 'user11', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `loc_id` int(11) NOT NULL,
  `loc_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`loc_id`, `loc_name`) VALUES
(1, 'Trivandrum'),
(2, 'Texas'),
(7, 'Las Vegas'),
(8, 'San Jose');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL,
  `medicine_name` varchar(25) NOT NULL,
  `disease_1` int(11) NOT NULL,
  `disease_2` int(11) NOT NULL,
  `disease_3` int(11) NOT NULL,
  `unit_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `medicine_name`, `disease_1`, `disease_2`, `disease_3`, `unit_price`) VALUES
(1, 'Paracetamol', 1, 2, 5, 10),
(2, 'Zocor', 4, 5, 2, 5),
(3, 'Lisinopril', 3, 5, 1, 20),
(4, 'Prilosec', 6, 7, 3, 30);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_stock`
--

CREATE TABLE `medicine_stock` (
  `stock_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_stock`
--

INSERT INTO `medicine_stock` (`stock_id`, `user_id`, `medicine_id`, `count`, `price`) VALUES
(1, 2, 1, 12, 1),
(2, 3, 4, 25, 100),
(6, 2, 3, 23, 12),
(7, 9, 1, 0, 0),
(8, 2, 2, 12, 0),
(9, 2, 4, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `med_by_loc`
--

CREATE TABLE `med_by_loc` (
  `med_loc_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `med_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `med_by_loc`
--

INSERT INTO `med_by_loc` (`med_loc_id`, `medicine_id`, `count`, `med_name`) VALUES
(1, 1, 8000, 'Paracetamol'),
(2, 1, 8000, 'Paracetamol'),
(3, 2, 10400, 'Zocor'),
(4, 2, 10400, 'Zocor'),
(5, 3, 8800, 'Lisinopril'),
(6, 3, 8800, 'Lisinopril'),
(7, 4, 11200, 'Prilosec'),
(8, 4, 11200, 'Prilosec');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addlist`
--
ALTER TABLE `addlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `epyon_purchase`
--
ALTER TABLE `epyon_purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `epyon_user`
--
ALTER TABLE `epyon_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `medicine_stock`
--
ALTER TABLE `medicine_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `med_by_loc`
--
ALTER TABLE `med_by_loc`
  ADD PRIMARY KEY (`med_loc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addlist`
--
ALTER TABLE `addlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `disease_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `epyon_purchase`
--
ALTER TABLE `epyon_purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `epyon_user`
--
ALTER TABLE `epyon_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medicine_stock`
--
ALTER TABLE `medicine_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `med_by_loc`
--
ALTER TABLE `med_by_loc`
  MODIFY `med_loc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
