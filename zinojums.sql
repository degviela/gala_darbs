-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 23, 2024 at 07:51 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gramatas_izstrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `zinojums`
--

CREATE TABLE `zinojums` (
  `id` int(11) NOT NULL,
  `vards` varchar(255) NOT NULL,
  `epasts` text NOT NULL,
  `zinojums` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zinojums`
--

INSERT INTO `zinojums` (`id`, `vards`, `epasts`, `zinojums`) VALUES
(1, 'imzis', 'imzis@iumzis', 'awdeawd'),
(2, 'imzis', 'imzis@iumzis', 'awdeawd'),
(3, 'admin5', 'hagijss54@gmail.com', 'sdawd'),
(4, 'amdin', 'hagijss54@gmail.com', 'ssss'),
(5, 'amdin', 'ginars@ginars.com', 'sxwaddawdadwd'),
(6, 'xsadad', 'gulbixxx@xx.com', 'awdawdadw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zinojums`
--
ALTER TABLE `zinojums`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zinojums`
--
ALTER TABLE `zinojums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
