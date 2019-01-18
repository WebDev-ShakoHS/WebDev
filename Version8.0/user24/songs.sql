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
-- Database: `c9`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `fav_song` varchar(128) NOT NULL,
  `fav_artist` varchar(128) NOT NULL,
  `email_address` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`fav_song`, `fav_artist`, `email_address`) VALUES
('Panic! At The Disco', 'Hey look Ma I Made It', 'schaeferMtb8@gmail.com'),
('Wild Disguise', 'Wild Disguise', '220566@shakopeeschools.org'),
('Sunflower', 'Post Malone', 'schaefer1551@yahoo.com'),
('Post Malone', 'Sunflower', 'schaefer1551@yahoo.com'),
('Post Malone', 'Sunflower', 'schaefer1551@yahoo.com'),
('Soulja Boy', 'Crank That (Soulja Boy)', 'johndoe@gmail.com'),
('PRESSURE', 'Muse', 'janendoe@gmail.com'),
('DNA.', 'Kendrick Lamar', 'howaboutafresca@gmail.com'),
('Eminem', 'Rap God', 'howaboutafresca@gmail.com'),
('Eminem', 'I''m Back', 'example@yahoo.com'),
('Eminem', 'I''m Back', 'example@yahoo.com'),
('Eminem', 'I''m Back', 'example@yahoo.com'),
('Eminem', 'I''m Back', 'example@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
