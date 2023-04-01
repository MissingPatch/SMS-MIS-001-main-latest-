-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 04:00 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u476821515_pms_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `pms_payment`
--

CREATE TABLE `pms_payment` (
  `OR_number` int(8) UNSIGNED ZEROFILL NOT NULL,
  `or_type` varchar(5) NOT NULL,
  `Last_Name` varchar(70) NOT NULL,
  `First_Name` varchar(70) NOT NULL,
  `Middle` varchar(30) NOT NULL,
  `student_id` int(30) NOT NULL,
  `Course` varchar(70) NOT NULL,
  `year_level` varchar(40) NOT NULL,
  `semester` int(2) NOT NULL,
  `particular` varchar(50) NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `misc` int(50) NOT NULL,
  `otherFees` int(20) NOT NULL,
  `totalBalance` int(20) NOT NULL,
  `prelim` varchar(20) NOT NULL,
  `midterm` varchar(20) NOT NULL,
  `final` varchar(20) NOT NULL,
  `t_date` date NOT NULL DEFAULT current_timestamp(),
  `t_time` time NOT NULL,
  `section` int(20) NOT NULL,
  `cashier_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pms_payment`
--
ALTER TABLE `pms_payment`
  ADD PRIMARY KEY (`OR_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pms_payment`
--
ALTER TABLE `pms_payment`
  MODIFY `OR_number` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
