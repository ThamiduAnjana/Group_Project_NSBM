-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2019 at 08:05 PM
-- Server version: 10.2.28-MariaDB
-- PHP Version: 7.3.6

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

CREATE TABLE `items_details` (
  `it_code` int(11) NOT NULL,
  `it_name` varchar(150) DEFAULT NULL,
  `it_qty` int(11) DEFAULT NULL,
  `it_price` decimal(65,2) DEFAULT NULL,
  `it_upprice` decimal(65,2) NOT NULL,
  `it_color` varchar(255) DEFAULT NULL,
  `it_img1` varchar(255) DEFAULT NULL,
  `it_img2` varchar(255) NOT NULL,
  `it_img3` varchar(255) NOT NULL,
  `it_img4` varchar(255) NOT NULL,
  `it_description` varchar(255) DEFAULT NULL,
  `it_rating` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items_details`
--

INSERT INTO `items_details` (`it_code`, `it_name`, `it_qty`, `it_price`, `it_upprice`, `it_color`, `it_img1`, `it_img2`, `it_img3`, `it_img4`, `it_description`, `it_rating`) VALUES
(1, 'watch', 20, 300.00, 150.00, 'black', 'index.jpeg', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(150) DEFAULT NULL,
  `u_password` varchar(8) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `u_fname` varchar(50) DEFAULT NULL,
  `u_lname` varchar(50) NOT NULL,
  `u_addressl1` varchar(100) DEFAULT NULL,
  `u_addressl2` varchar(100) DEFAULT NULL,
  `u_province` varchar(50) DEFAULT NULL,
  `u_postalcode` varchar(20) DEFAULT NULL,
  `u_country` varchar(20) DEFAULT NULL,
  `u_contactno` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items_details`
--
ALTER TABLE `items_details`
  ADD PRIMARY KEY (`it_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
