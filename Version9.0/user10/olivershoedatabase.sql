-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2019 at 07:07 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `shoelist`
--

CREATE TABLE `shoelist` (
  `brand` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `model` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `colorway` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shoelist`
--

INSERT INTO `shoelist` (`brand`, `model`, `colorway`, `price`) VALUES
('Adidas', 'Something', 'Red Black', '1234567890'),
('Nike', 'off white prestos', 'black ', '1000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shoelist`
--
ALTER TABLE `shoelist`
  ADD PRIMARY KEY (`brand`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
