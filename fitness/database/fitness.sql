-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 04:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquire`
--

CREATE TABLE `enquire` (
  `s no` int(11) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `middlename` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `select` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phoneno` int(225) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquire`
--

INSERT INTO `enquire` (`s no`, `firstname`, `middlename`, `lastname`, `select`, `gender`, `phoneno`, `address`) VALUES
(1, 'Ganesh', 'Hanmant', 'Kulkarni', 'weight los', 'male', 8637455, 'any thing'),
(5, 'akhilesh', 'ramdas', 'patil', 'weight gai', 'on', 2147483647, 'dhavaleshwar'),
(6, '', '', '', 'weight los', '', 0, ''),
(7, '', '', '', 'weight los', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquire`
--
ALTER TABLE `enquire`
  ADD PRIMARY KEY (`s no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquire`
--
ALTER TABLE `enquire`
  MODIFY `s no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
