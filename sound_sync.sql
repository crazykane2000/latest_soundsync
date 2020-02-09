-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 12:31 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sound_sync`
--

-- --------------------------------------------------------

--
-- Table structure for table `purchse_track`
--

CREATE TABLE `purchse_track` (
  `id` int(11) NOT NULL,
  `track_id` varchar(50) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `buyer` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchse_track`
--

INSERT INTO `purchse_track` (`id`, `track_id`, `cost`, `buyer`, `date`) VALUES
(1, '5e3fc0ac7898e', '200', 'ritam@gmail.com', '2020-02-09 10:11:53'),
(2, '5dbb332cd3e07', '200', 'ritam@gmail.com', '2020-02-09 10:32:45'),
(3, '5dbb33b29ae79', '200', 'ritam@gmail.com', '2020-02-09 10:35:28'),
(4, '5dbb50d7a36ea', '200', 'ritam@gmail.com', '2020-02-09 10:36:04'),
(6, '5dbbee9603a46', '200', 'ritam@gmail.com', '2020-02-09 10:37:59'),
(7, '5e3fe1f0e6e47', '0', 'ritam@gmail.com', '2020-02-09 10:49:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `purchse_track`
--
ALTER TABLE `purchse_track`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchse_track`
--
ALTER TABLE `purchse_track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
