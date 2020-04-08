-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2020 at 03:54 PM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, '231230', '$2y$10$M1AZRBgbJTPrf6Q02SXkwud8GkNApDIQo4nDTYfHCDj8eyZA5MZ.G'),
(2, 'hhhhhh', '$2y$10$Zufoa6Cotc1SwZmMhVV9aeU7EAWS8A3xaNp7N4KDz3uTEOl5APFhS'),
(3, 'jjjjj', '$2y$10$92/GjnuDSweXl9B2D5MVce/hx9BlaP4RHnosIGWkbSHvOGwcHu4g2'),
(4, 'jkkkkkk', '$2y$10$Jq4dCsyvz5MSBx/1XuBioup0KZ0QBeIScNFDEqP/i8u9VGJE2kL72'),
(5, 'uuuuuu', '$2y$10$9Gxh71uM.itklAz.LXgjReok7FmnRuTFbAxF8HDj0VhJ7Ekc7g1Na'),
(6, 'lllllll', '$2y$10$aFGDvK45ZZboUkkEq0N08uXJBlSiQsIGVKoiCAhh8Icq2ZBWwrpri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
