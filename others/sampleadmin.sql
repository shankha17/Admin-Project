-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2017 at 05:50 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sampleadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usertitle` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `priority` enum('y','n') NOT NULL DEFAULT 'n',
  `login_time` datetime NOT NULL,
  `logout_time` datetime NOT NULL,
  `last_update_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `usertitle`, `username`, `password`, `priority`, `login_time`, `logout_time`, `last_update_on`) VALUES
(1, 'admin', 'admin', '123', 'y', '2017-05-29 08:08:32', '2017-05-29 08:15:46', '2017-05-29 02:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL,
  `category` varchar(50) NOT NULL,
  `status` enum('1','0') DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` varchar(256) NOT NULL,
  `content` text,
  `status` enum('y','n') NOT NULL,
  `description` text NOT NULL,
  `sequence_no` int(11) NOT NULL,
  `page` enum('notification','noticeboard') NOT NULL DEFAULT 'notification',
  `last_update_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `header`, `content`, `status`, `description`, `sequence_no`, `page`, `last_update_on`) VALUES
(12, 'event2', NULL, 'y', 'Admission open for academic session 2017-2018', 0, 'notification', '2017-05-28 12:30:21'),
(13, 'event1', NULL, 'y', 'There will be a Pottery Making Competition on 23rd May,2017. Class VII will participate in this event.\r\nJUST A MINUTE for class VIII will be held on 24th May,2017.', 0, 'noticeboard', '2017-05-25 17:46:26'),
(15, 'event2', NULL, 'y', 'result', 0, 'noticeboard', '2017-05-26 20:58:13'),
(16, 'meeting', NULL, 'y', 'Parent Orientation Meeting on 15.4.16 for classes [I-V]and 16.4.16 for classes [VI-X,XII] at 9.00 am', 0, 'noticeboard', '2017-05-28 14:29:00'),
(17, 'Winter Carnival', NULL, 'y', 'Winter Carnival - It’s Winter, \r\nFUN TIME !!!!!!!!!!!!! \r\nWinter Carnival - It’s Winter, \r\nFUN TIME !!!!!!!!!!!!! \r\nCome and join the celebration 20.12.15\r\nAt New School Campus. TIME- 1 P.M. TO 7.00 P.M.', 0, '', '2017-05-28 14:30:12'),
(18, 'Winter Carnival', NULL, 'y', 'Winter Carnival - It’s Winter, \r\nFUN TIME !!!!!!!!!!!!! \r\nCome and join the celebration 20.12.15\r\nAt New School Campus. TIME- 1 P.M. TO 7.00 P.M.', 0, 'noticeboard', '2017-05-28 14:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `home_link` enum('y','n') NOT NULL,
  `title` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `status` enum('y','n') NOT NULL,
  `parent_id` int(11) NOT NULL,
  `last_update_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `home_link`, `title`, `image`, `status`, `parent_id`, `last_update_on`, `description`) VALUES
(8, 'y', 'Class', 'Class_0526185658IMG-20170522-WA0011.jpg', 'y', 0, '2017-05-26 16:56:58', 'class room'),
(9, 'y', 'Drama', 'Drama_90526185822IMG-20170517-WA0023.jpg', 'y', 0, '2017-05-26 20:57:57', 'Drama'),
(10, 'y', 'Annual Function', 'Annual Function_0526190025IMG-20170509-WA0012.jpg', 'y', 0, '2017-05-26 17:00:25', 'Annual Function'),
(11, 'y', 'Annual Function', 'Annual Function_05281440182.jpg', 'y', 0, '2017-05-28 12:40:18', 'Annual Function'),
(13, 'y', 'Quiz Competition', 'Quiz Competition_05281441431495346023491.jpg', 'y', 0, '2017-05-28 12:41:43', 'Quiz Competition'),
(14, 'y', 'Sports', 'Sports_0529043935IMG-20170410-WA0003.jpg', 'y', 0, '2017-05-29 02:39:35', 'Sports'),
(15, 'y', 'Sports', 'Sports_0529044004IMG-20170410-WA0006.jpg', 'y', 0, '2017-05-29 02:40:04', 'Sports'),
(16, 'y', 'Sports', 'Sports_0529044031IMG-20170410-WA0004.jpg', 'y', 0, '2017-05-29 02:40:31', ''),
(17, 'y', 'Sports', 'Sports_0529044057IMG-20170410-WA0011.jpg', 'y', 0, '2017-05-29 02:40:57', ''),
(18, 'y', 'Sports', 'Sports_0529044128IMG-20170410-WA0005.jpg', 'y', 0, '2017-05-29 02:41:28', ''),
(19, 'y', 'Activity', 'Activity_0529044214IMG-20170410-WA0017.jpg', 'y', 0, '2017-05-29 02:42:14', '');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email_address` varchar(64) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `first_name`, `last_name`, `email_address`, `username`, `password`) VALUES
(1, 'puja', 'paral', 'puja@gmail.com', 'puja219', '219');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `notice` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Puja vacation', '1', '2017-05-20 00:00:00', '2017-05-19 18:30:00'),
(2, 'holiday', '1', '0000-00-00 00:00:00', '2017-05-19 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `notification` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notification`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Convacation1', '1', '0000-00-00 00:00:00', '2017-04-20 17:17:43'),
(6, 'Holiday', '1', '0000-00-00 00:00:00', '2017-04-20 17:18:00'),
(7, 'Picnic', '1', '0000-00-00 00:00:00', '2017-04-20 17:18:25'),
(8, 'Puja Vacation', '1', '0000-00-00 00:00:00', '2017-04-20 19:14:42'),
(9, 'Summer Vacation', '1', '0000-00-00 00:00:00', '2017-05-19 03:12:18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
