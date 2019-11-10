-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 11:22 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `has9674_nsbm`
--
CREATE DATABASE IF NOT EXISTS `has9674_nsbm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `has9674_nsbm`;

-- --------------------------------------------------------

--
-- Table structure for table `items_details`
--

DROP TABLE IF EXISTS `items_details`;
CREATE TABLE IF NOT EXISTS `items_details` (
  `it_code` int(11) NOT NULL,
  `it_name` varchar(150) DEFAULT NULL,
  `it_qty` int(11) DEFAULT NULL,
  `it_price` decimal(65,2) NOT NULL,
  `it_upprice` decimal(65,2) DEFAULT NULL,
  `it_color` varchar(255) DEFAULT NULL,
  `it_img1` varchar(255) DEFAULT NULL,
  `it_img2` varchar(255) NOT NULL,
  `it_img3` varchar(255) NOT NULL,
  `it_img4` varchar(255) NOT NULL,
  `it_description` varchar(255) DEFAULT NULL,
  `it_rating` int(5) DEFAULT NULL,
  PRIMARY KEY (`it_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items_details`
--

INSERT DELAYED INTO `items_details` (`it_code`, `it_name`, `it_qty`, `it_price`, `it_upprice`, `it_color`, `it_img1`, `it_img2`, `it_img3`, `it_img4`, `it_description`, `it_rating`) VALUES
(1, 'Watch (Men)', 20, '300.00', '150.00', 'black', 'Item_01.png', '', '', '', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 3),
(2, 'Watch (Men)', 20, '300.00', '150.00', 'black', 'Item_02.png', '', '', '', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 4),
(3, 'Watch (Men)', 20, '300.00', '150.00', 'black', 'Item_03.png', '', '', '', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 2),
(4, 'Watch (Men)', 20, '300.00', '150.00', 'black', 'Item_04.png', '', '', '', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 5),
(5, 'Watch (Men)', 20, '300.00', '150.00', 'black', 'Item_05.jpeg', '', '', '', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(150) DEFAULT NULL,
  `u_password` varchar(8) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

DROP TABLE IF EXISTS `users_details`;
CREATE TABLE IF NOT EXISTS `users_details` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `u_fname` varchar(50) DEFAULT NULL,
  `u_lname` varchar(50) NOT NULL,
  `u_addressl1` varchar(100) DEFAULT NULL,
  `u_addressl2` varchar(100) DEFAULT NULL,
  `u_province` varchar(50) DEFAULT NULL,
  `u_postalcode` varchar(20) DEFAULT NULL,
  `u_country` varchar(20) DEFAULT NULL,
  `u_contactno` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
