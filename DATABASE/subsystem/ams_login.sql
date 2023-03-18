-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 12:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academic`
--

-- --------------------------------------------------------

--
-- Table structure for table `ams_login`
--

CREATE TABLE `ams_login` (
  `ID` int(11) NOT NULL,
  `user_id` varchar(6) NOT NULL,
  `password` varchar(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_middle` varchar(200) NOT NULL,
  `user_last` varchar(50) NOT NULL,
  `user_position` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ams_login`
--

INSERT INTO `ams_login` (`ID`, `user_id`, `password`, `user_name`, `user_middle`, `user_last`, `user_position`, `department`, `contact`, `email`) VALUES
(1, 'adm001', 'admin123', 'Ramel', 'Oliva', 'Millanes', 'Admin', 'Admin', 965847548, 'emailtesting@gmail.com'),
(2, 'sct001', 'mariaella', 'Ella', '', 'Pusay', 'Secretary', 'CCS', 0, ''),
(4, 'ph001', 'triciamae', 'Tricia', '', 'Robica', 'Program Head', 'CCS', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ams_login`
--
ALTER TABLE `ams_login`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ams_login`
--
ALTER TABLE `ams_login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
