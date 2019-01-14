-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 14, 2019 at 08:35 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sharks`
--

-- --------------------------------------------------------

--
-- Table structure for table `sharkAdoptionList`
--

CREATE TABLE IF NOT EXISTS `sharkAdoptionList` (
  `name` varchar(128) NOT NULL,
  `shark_name` varchar(128) NOT NULL,
  `shark_age` varchar(128) NOT NULL,
  `shark_gender` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sharkAdoptionList`
--

INSERT INTO `sharkAdoptionList` (`name`, `shark_name`, `shark_age`, `shark_gender`) VALUES
('Samyu', 'Davie', '2', 'M'),
('Taylor Swift', 'Meredith', '7', 'F'),
('Ruth', 'Fiona ', '55555555555', 'Gender neutral ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
