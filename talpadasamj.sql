-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 08:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talpadasamj`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_data`
--

CREATE TABLE `add_data` (
  `id` int(11) NOT NULL,
  `avtarsource` blob NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `birthdate` varchar(13) NOT NULL,
  `age` int(3) NOT NULL,
  `height` varchar(2) NOT NULL,
  `weight` varchar(2) NOT NULL,
  `skintone` varchar(8) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `education` varchar(15) NOT NULL,
  `job` varchar(25) NOT NULL,
  `experience` varchar(3) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `fatheroccupation` varchar(30) NOT NULL,
  `motheroccupation` varchar(30) NOT NULL,
  `contactnumber` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_data`
--

INSERT INTO `add_data` (`id`, `avtarsource`, `firstname`, `lastname`, `gender`, `birthdate`, `age`, `height`, `weight`, `skintone`, `address`, `city`, `status`, `education`, `job`, `experience`, `fathername`, `mothername`, `fatheroccupation`, `motheroccupation`, `contactnumber`) VALUES
(35, '', 'Test', 'Test', 'Male', '17-08-2020', 25, '26', '26', 'Light Wh', 'Test', 'Test', 'Merried', 'M.Com', 'Driver', '5 Y', 'Test', 'Test', 'Test', 'Test', '9898989898');

-- --------------------------------------------------------

--
-- Table structure for table `uploadimage`
--

CREATE TABLE `uploadimage` (
  `avtarsource` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_data`
--
ALTER TABLE `add_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_data`
--
ALTER TABLE `add_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
