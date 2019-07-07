-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2019 at 06:15 PM
-- Server version: 5.0.89-community-nt
-- PHP Version: 5.5.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assign`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `image`, `timestamp`) VALUES
(1, 'Sample Title 1', 'Sample_Title_1_3691562502060.jpg', '2019-07-07 12:25:13'),
(2, 'Sample Title 2', 'Sample_Title_2_3211562502068.jpg', '2019-07-07 12:25:18'),
(3, 'Sample Title 3', 'Sample_Title_3_7941562502077.png', '2019-07-07 12:25:21'),
(4, 'Sample Title 4', 'Sample_Title_4_7751562502095.png', '2019-07-07 12:25:23'),
(5, 'Sample Title 5', 'Sample_Title_5_6701562502142.jpg', '2019-07-07 12:25:46'),
(6, 'Sample Title 6', 'Sample_Title_6_7531562502149.jpg', '2019-07-07 12:25:49'),
(7, 'Sample Title 7', 'Sample_Title_7_1791562502385.jpg', '2019-07-07 12:26:39'),
(8, 'Sample Title 8', 'Sample_Title_8_21562502225.jpg', '2019-07-07 12:26:57'),
(9, 'Sample Title 9', 'Sample_Title_9_361562502233.png', '2019-07-07 12:27:04'),
(10, 'Sample Title 10', 'Sample_Title_10_5531562502240.jpg', '2019-07-07 12:27:10'),
(11, 'Sample Title 11', 'Sample_Title_11_1161562502246.jpg', '2019-07-07 12:27:13'),
(12, 'Sample Title 12', 'Sample_Title_12_5871562502253.png', '2019-07-07 12:27:17'),
(13, 'Sample Title 13', 'Sample_Title_13_4111562502262.jpg', '2019-07-07 12:27:20'),
(14, 'Sample Title 14', 'Sample_Title_14_7151562502272.jpg', '2019-07-07 12:27:24'),
(15, 'Sample Title 15', 'Sample_Title_15_2091562502282.gif', '2019-07-07 12:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `username`, `password`, `email`, `timestamp`) VALUES
(1, 'Abishek Bardewa', 'abi', 'e10adc3949ba59abbe56e057f20f883e', 'way2abishek@gmail.com', '2019-07-07 12:34:29'),
(5, 'test', 'test', 'e10adc3949ba59abbe56e057f20f883e', 'test@gmail.com', '2019-07-07 12:35:37');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
