-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2019 at 08:26 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `peter`
--

-- --------------------------------------------------------

--
-- Table structure for table `petertable`
--

CREATE TABLE IF NOT EXISTS `petertable` (
  `name` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `rate` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petertable`
--

INSERT INTO `petertable` (`name`, `rate`) VALUES
('', 0),
('', 3),
('', 0),
('', 1),
('', 10),
('', 6),
('', 0),
('', 0),
('', 7),
('', 7),
('', 0),
('', 10),
('', 0),
('', 0),
('beter', 5),
('', 0),
('Peter', 7),
('', 0),
('Jablinski', 10),
('', 0),
('', 0),
('Col', 9),
('', 0),
('', 0),
('', 0),
('', 0),
('', 8),
('', 0),
('', 0),
('Gary', 100),
('', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
