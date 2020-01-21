-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 03:48 PM
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
-- Database: `group_pro_20`
--
CREATE DATABASE IF NOT EXISTS `group_pro_20` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `group_pro_20`;

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE IF NOT EXISTS `account_details` (
  `u_id` int(11) NOT NULL,
  `pay_method` varchar(50) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `account_no` int(11) NOT NULL,
  `card_no` int(11) NOT NULL,
  `security_code` int(11) NOT NULL,
  `expiration` varchar(20) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `account_details`
--

TRUNCATE TABLE `account_details`;
--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`u_id`, `pay_method`, `bank_name`, `account_no`, `card_no`, `security_code`, `expiration`) VALUES
(1, 'Visa Card', 'Commercial Bank', 2147483647, 2147483647, 1235, '07/23');

-- --------------------------------------------------------

--
-- Table structure for table `items_details`
--

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
  `it_rating` int(11) DEFAULT NULL,
  `it_category` varchar(50) DEFAULT NULL,
  `it_sold` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`it_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `items_details`
--

TRUNCATE TABLE `items_details`;
--
-- Dumping data for table `items_details`
--

INSERT INTO `items_details` (`it_code`, `it_name`, `it_qty`, `it_price`, `it_upprice`, `it_color`, `it_img1`, `it_img2`, `it_img3`, `it_img4`, `it_description`, `it_rating`, `it_category`, `it_sold`, `u_id`) VALUES
(1, 'Watch (Men)', 20, '300.00', '150.00', 'black', 'Item_01.png', '', '', '', 'Some quick example text to build on the card title and make up the bulk of the cards content.', 19, 'Watch', 0, 1),
(2, 'Watch (Men)', 20, '400.00', '350.00', 'black', 'Item_02.png', '', '', '', 'Some quick example text to build on the card title and make up the bulk of the cards content.', 30, 'Watch', 21, 1),
(3, 'Watch (Men)', 20, '300.00', '150.00', 'black', 'Item_03.png', '', '', '', 'Some quick example text to build on the card title and make up the bulk of the cards content.', 21, 'Watch', 0, 1),
(4, 'Watch (Men)', 20, '300.00', '150.00', 'black', 'Item_04.png', '', '', '', 'Some quick example text to build on the card title and make up the bulk of the cards content.', 21, 'Watch', 0, 1),
(5, 'Watch(Men)', 20, '300.00', '150.00', 'black', 'Item_05.jpeg', '', '', '', 'Some quick example text to build on the card title and make up the bulk of the cards content.', 21, 'Watch', 0, 1),
(6, 'Bag(School)', 20, '200.00', '150.00', '', 'Item_05.png', '', '', '', 'Some quick example text to build on the card title and make up the bulk of the cards content.', 4, 'Bag', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `perchase_history`
--

CREATE TABLE IF NOT EXISTS `perchase_history` (
  `it_code` int(11) NOT NULL,
  `it_name` varchar(50) NOT NULL,
  `it_qty` int(11) NOT NULL,
  `it_amount` int(11) NOT NULL,
  `it_date` varchar(50) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `perchase_history`
--

TRUNCATE TABLE `perchase_history`;
--
-- Dumping data for table `perchase_history`
--

INSERT INTO `perchase_history` (`it_code`, `it_name`, `it_qty`, `it_amount`, `it_date`, `u_id`, `p_id`) VALUES
(1, 'Watch (Men)', 1, 150, '2020/01/09', 1, 1),
(3, 'Watch (Men)', 2, 300, '2020/01/09', 1, 2),
(2, 'Watch (Men)', 2, 700, '2020/01/09', 1, 3),
(2, 'Watch (Men)', 1, 350, '2020/01/09', 1, 4),
(2, 'Watch (Men)', 1, 350, '2020/01/09', 1, 5),
(2, 'Watch (Men)', 2, 700, '2020/01/16', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers_details`
--

CREATE TABLE IF NOT EXISTS `subscribers_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `subscribers_details`
--

TRUNCATE TABLE `subscribers_details`;
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(150) DEFAULT NULL,
  `u_password` varchar(8) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_email`, `u_password`, `status`) VALUES
(1, 'anjanapma@gmail.com', 'anju', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE IF NOT EXISTS `users_details` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(50) DEFAULT NULL,
  `u_lname` varchar(50) NOT NULL,
  `u_addressl1` varchar(100) DEFAULT NULL,
  `u_addressl2` varchar(100) DEFAULT NULL,
  `u_city` varchar(100) NOT NULL,
  `u_province` varchar(50) DEFAULT NULL,
  `u_postalcode` varchar(20) DEFAULT NULL,
  `u_country` varchar(20) DEFAULT NULL,
  `u_contactno` int(11) DEFAULT NULL,
  `u_category` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `users_details`
--

TRUNCATE TABLE `users_details`;
--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`u_id`, `u_fname`, `u_lname`, `u_addressl1`, `u_addressl2`, `u_city`, `u_province`, `u_postalcode`, `u_country`, `u_contactno`, `u_category`) VALUES
(1, 'Thamidu', 'Anjana', 'Anjana,Kothalawala Road,', 'Raja Ela,Hingurakgoda.', 'Hingurakgoda', 'ABC', '52400', 'Sri Lanka', 771801521, 'Buyer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
