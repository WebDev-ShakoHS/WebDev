-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 14, 2019 at 08:36 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user4`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE IF NOT EXISTS `donate` (
  `donate_id` int(10) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(128) NOT NULL,
  `lastName` varchar(128) NOT NULL,
  `paypal_email` varchar(128) NOT NULL,
  `amount` varchar(128) NOT NULL,
  `words` varchar(128) NOT NULL,
  PRIMARY KEY (`donate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `survey_id` int(10) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(128) NOT NULL,
  `lastName` varchar(128) NOT NULL,
  `question_1` varchar(128) NOT NULL,
  `question_2` varchar(128) NOT NULL,
  `question_3` varchar(128) NOT NULL,
  `question_4` varchar(128) NOT NULL,
  PRIMARY KEY (`survey_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`survey_id`, `firstName`, `lastName`, `question_1`, `question_2`, `question_3`, `question_4`) VALUES
(1, 'First Name', 'Last Name', 'Do you like memes?', 'What does a meme mean to you.', 'On a scale of 1-10 how much do you like memes?', 'Would you ever visit our site again?'),
(2, 'Tanner', 'Fox', 'YES VERY MUCH', 'Meme is a meme a no meme left behind, meme', '20', 'YES MEEEEEMEEEESSS'),
(3, '', '', '', '', '', ''),
(4, '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
