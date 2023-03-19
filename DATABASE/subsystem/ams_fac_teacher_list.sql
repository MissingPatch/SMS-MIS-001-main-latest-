-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 04:15 PM
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
-- Table structure for table `ams_fac_teacher_list`
--

CREATE TABLE `ams_fac_teacher_list` (
  `teacher_ID` int(11) NOT NULL,
  `tdept_id` varchar(50) NOT NULL,
  `t_first_name` varchar(100) NOT NULL,
  `t_last_name` varchar(100) NOT NULL,
  `t_middle_name` varchar(100) NOT NULL,
  `t_rank` varchar(50) NOT NULL,
  `dept_code` varchar(50) NOT NULL,
  `t_contact` varchar(11) NOT NULL,
  `t_email` varchar(100) NOT NULL,
  `designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ams_fac_teacher_list`
--

INSERT INTO `ams_fac_teacher_list` (`teacher_ID`, `tdept_id`, `t_first_name`, `t_last_name`, `t_middle_name`, `t_rank`, `dept_code`, `t_contact`, `t_email`, `designation`) VALUES
(59, 'DEPT59', 'John Andrew', 'Fallurin', 'Fetalco', 'Assistant Prof 1', 'CCS', '09261103328', 'andrewme@gmail.com', 'Faculty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ams_fac_teacher_list`
--
ALTER TABLE `ams_fac_teacher_list`
  ADD PRIMARY KEY (`teacher_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ams_fac_teacher_list`
--
ALTER TABLE `ams_fac_teacher_list`
  MODIFY `teacher_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
