-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2018 at 06:40 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trackyourexpense`
--
CREATE DATABASE IF NOT EXISTS `trackyourexpense` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `trackyourexpense`;

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE IF NOT EXISTS `category_tbl` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(20) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`category_id`, `category_name`) VALUES
(1, 'Bills'),
(2, 'EMI'),
(3, 'Entertainment'),
(4, 'Food & Drinks'),
(5, 'Fuel'),
(6, 'Groceries'),
(7, 'Health'),
(8, 'Investment'),
(9, 'Shopping'),
(10, 'Transfer'),
(11, 'Travel'),
(12, 'Other'),
(14, 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `expense_tbl`
--

CREATE TABLE IF NOT EXISTS `expense_tbl` (
  `expense_id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `photo` varchar(30) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`expense_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `expense_tbl`
--

INSERT INTO `expense_tbl` (`expense_id`, `amount`, `notes`, `date`, `photo`, `category_id`, `user_id`) VALUES
(1, 250, 'Watch Padman', '2018-02-21', 'padman.jpg', 3, 1),
(2, 70, 'Lunch Pramukh', '2018-02-21', '', 4, 1),
(3, 90, 'Shake Maker', '2018-02-21', '', 4, 1),
(4, 300, '<p>Synapse Tshirt</p>\r\n', '2018-02-21', '', 9, 1),
(5, 300, '<p>Medicines</p>\r\n', '2018-02-22', '', 7, 1),
(6, 130, '<p>Caremal Silk</p>\r\n', '2018-02-21', '', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email_id` varchar(50) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_mobile_no` varchar(13) NOT NULL,
  `user_photo` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email_id` (`user_email_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `user_email_id`, `user_name`, `user_password`, `user_mobile_no`, `user_photo`, `gender`) VALUES
(1, 'darshandhandhukiya61@gmail.com', 'Darshan', '1234', '9586734979', 'darshan.jpg', 'male'),
(2, 'priyanshsheth12@gmail.com', 'Priyansh', '12345', '8305112056', 'image/image/null', 'male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
