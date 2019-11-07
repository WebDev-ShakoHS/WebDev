-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2019 at 06:31 AM
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
-- Database: `vacation`
--

-- --------------------------------------------------------

--
-- Table structure for table `vacationinfo`
--

CREATE TABLE `vacationinfo` (
  `destination` varchar(15) NOT NULL,
  `dateLeft` varchar(20) NOT NULL,
  `dateArrived` varchar(10) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vacationinfo`
--

INSERT INTO `vacationinfo` (`destination`, `dateLeft`, `dateArrived`) VALUES
('Chicago', '9/30/19', '10/11/19'),
('Chicago', '9/30/19', '10/10/19'),
('Alabama', '9/11/20', '9/11/21'),
('Northern Africa', '10/22/19', '10/23/78'),
('Test1', '9/22/19', '9/23/19'),
('Minnesota', '9/22/19', '10/9/19'),
('Minnesota', '9/22/19', '10/9/19'),
('Minnesota', '9/22/19', '10/9/19'),
('Minnesota', '9/22/19', '10/9/19'),
('Minnesota', '9/22/19', '10/9/19'),
('Minnesota', '9/22/19', '10/9/19'),
('shakopee', '10/30/19', '10/31/19'),
('dwadow', 'dawjbndw', 'adiuw'),
('kwnadiowd', 'dwljndw', '10/10/19'),
('hkvku', 'jukvku', '10/10/19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
