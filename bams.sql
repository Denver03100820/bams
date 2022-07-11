-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 11, 2022 at 06:12 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bams`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `profileId` int(11) NOT NULL AUTO_INCREMENT,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `mName` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `houseNo` varchar(50) NOT NULL,
  `unitNo` varchar(50) NOT NULL,
  `buildingName` varchar(50) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `bdate` date NOT NULL,
  `status` varchar(2) NOT NULL,
  `spouseName` varchar(60) NOT NULL,
  `lenghtOfStay` int(4) NOT NULL,
  `is_actived` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `encode_by` tinyint(4) NOT NULL,
  PRIMARY KEY (`profileId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `street`
--

DROP TABLE IF EXISTS `street`;
CREATE TABLE IF NOT EXISTS `street` (
  `street_id` int(11) NOT NULL AUTO_INCREMENT,
  `street_name` varchar(50) NOT NULL,
  `is_actived` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `encode_by` tinyint(4) NOT NULL,
  PRIMARY KEY (`street_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `street`
--

INSERT INTO `street` (`street_id`, `street_name`, `is_actived`, `created_at`, `deleted_at`, `updated_at`, `encode_by`) VALUES
(1, 'Pio10', 1, '2022-06-20 15:13:21', '0000-00-00 00:00:00', '2022-07-05 20:00:58', 0),
(2, '125', 1, '2022-07-05 18:11:27', '0000-00-00 00:00:00', '2022-07-05 18:11:27', 0),
(3, 'asdas', 1, '2022-07-05 19:47:34', '0000-00-00 00:00:00', '2022-07-05 19:47:34', 0),
(4, 'samaple', 1, '2022-07-05 20:01:07', '0000-00-00 00:00:00', '2022-07-05 20:01:07', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
