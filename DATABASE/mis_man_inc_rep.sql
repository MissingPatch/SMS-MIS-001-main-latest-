-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 04:06 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u476821515_sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `mis_man_inc_rep`
--

CREATE TABLE `mis_man_inc_rep` (
  `rep_id` int(11) NOT NULL,
  `type` enum('Daily Report','Weekly Report','Monthly Report') COLLATE latin1_general_ci NOT NULL,
  `description` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `department` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('1','2') COLLATE latin1_general_ci NOT NULL DEFAULT '1',
  `feedback` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `number` bigint(20) NOT NULL,
  `other` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mis_man_inc_rep`
--

INSERT INTO `mis_man_inc_rep` (`rep_id`, `type`, `description`, `department`, `date`, `status`, `feedback`, `number`, `other`) VALUES
(59, 'Daily Report', 'Number of enrollees this week.', 'Enrollment', '2023-04-20 00:00:00', '1', '', 123, ''),
(60, 'Monthly Report', 'Number of paid student in research.', 'Payment Management System', '2023-04-25 00:00:00', '1', '', 123, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mis_man_inc_rep`
--
ALTER TABLE `mis_man_inc_rep`
  ADD PRIMARY KEY (`rep_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mis_man_inc_rep`
--
ALTER TABLE `mis_man_inc_rep`
  MODIFY `rep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
