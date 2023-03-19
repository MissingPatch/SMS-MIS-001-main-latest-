-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 06:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(250) NOT NULL,
  `f_name` varchar(500) DEFAULT NULL,
  `l_name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `pass` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `a_type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `f_name`, `l_name`, `email`, `pass`, `status`, `a_type`) VALUES
(1, 'f_admin', 'l_admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'active', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_log`
--

CREATE TABLE `attendance_log` (
  `id` int(250) NOT NULL,
  `e_id` varchar(500) DEFAULT NULL,
  `log_in` varchar(500) DEFAULT NULL,
  `log_out` varchar(500) DEFAULT NULL,
  `log_date` varchar(500) DEFAULT NULL,
  `working_hour` varchar(500) DEFAULT NULL,
  `status` varchar(500) NOT NULL,
  `e_rate` varchar(500) DEFAULT NULL,
  `e_total_rate` varchar(500) DEFAULT NULL,
  `loan_grant_payroll_id` varchar(500) NOT NULL,
  `payroll_status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(250) NOT NULL,
  `name` varchar(500) NOT NULL,
  `date_time` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(250) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `date_time` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(250) NOT NULL,
  `f_name` varchar(500) DEFAULT NULL,
  `l_name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `pass` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `code` varchar(500) DEFAULT NULL,
  `department` varchar(500) DEFAULT NULL,
  `designation` varchar(500) DEFAULT NULL,
  `role` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `blood_group` varchar(500) DEFAULT NULL,
  `nid` varchar(500) DEFAULT NULL,
  `cp_number` varchar(500) DEFAULT NULL,
  `date_of_birth` varchar(500) DEFAULT NULL,
  `date_of_joining` varchar(500) DEFAULT NULL,
  `date_of_leaving` varchar(500) DEFAULT NULL,
  `username` varchar(500) DEFAULT NULL,
  `rate_per_hour` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE `hr` (
  `id` int(250) NOT NULL,
  `f_name` varchar(500) DEFAULT NULL,
  `l_name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `pass` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(250) NOT NULL,
  `name` varchar(500) NOT NULL,
  `loc` varchar(500) NOT NULL,
  `upload_date` varchar(500) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `user_type` varchar(500) NOT NULL,
  `plain_text` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(250) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `start_date` varchar(500) DEFAULT NULL,
  `end_date` varchar(500) DEFAULT NULL,
  `days` varchar(500) DEFAULT NULL,
  `year` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leaves_application`
--

CREATE TABLE `leaves_application` (
  `id` int(250) NOT NULL,
  `e_id` varchar(500) NOT NULL,
  `leave_type_id` varchar(500) DEFAULT NULL,
  `request_of_application` varchar(500) DEFAULT NULL,
  `remarks` varchar(500) NOT NULL,
  `status` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leaves_earn`
--

CREATE TABLE `leaves_earn` (
  `id` int(250) NOT NULL,
  `e_id` varchar(500) DEFAULT NULL,
  `total_hour` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leaves_type`
--

CREATE TABLE `leaves_type` (
  `id` int(250) NOT NULL,
  `type` varchar(500) DEFAULT NULL,
  `number_of_days` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loan_grant`
--

CREATE TABLE `loan_grant` (
  `id` int(250) NOT NULL,
  `loan_number` varchar(500) NOT NULL,
  `e_id` varchar(500) DEFAULT NULL,
  `amount` varchar(500) DEFAULT NULL,
  `installment` varchar(500) DEFAULT NULL,
  `installment_period` varchar(500) NOT NULL,
  `total_pay` varchar(500) DEFAULT NULL,
  `total_due` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `remarks` varchar(500) NOT NULL,
  `approved_date` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loan_grant_payroll`
--

CREATE TABLE `loan_grant_payroll` (
  `id` int(250) NOT NULL,
  `loan_id` varchar(500) DEFAULT NULL,
  `total_pay` varchar(500) DEFAULT NULL,
  `date_time` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `system_log`
--

CREATE TABLE `system_log` (
  `id` int(250) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `date_log` varchar(500) NOT NULL,
  `time_log` varchar(500) NOT NULL,
  `admin_id` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `system_setting`
--

CREATE TABLE `system_setting` (
  `id` int(250) NOT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `copy_right` varchar(500) DEFAULT NULL,
  `contract` varchar(500) DEFAULT NULL,
  `currency` varchar(500) DEFAULT NULL,
  `symbol` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `address_1` varchar(500) DEFAULT NULL,
  `address_2` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_log`
--
ALTER TABLE `attendance_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr`
--
ALTER TABLE `hr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves_application`
--
ALTER TABLE `leaves_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves_earn`
--
ALTER TABLE `leaves_earn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves_type`
--
ALTER TABLE `leaves_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_grant`
--
ALTER TABLE `loan_grant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_grant_payroll`
--
ALTER TABLE `loan_grant_payroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_log`
--
ALTER TABLE `system_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_setting`
--
ALTER TABLE `system_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance_log`
--
ALTER TABLE `attendance_log`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=973;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hr`
--
ALTER TABLE `hr`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leaves_application`
--
ALTER TABLE `leaves_application`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `leaves_earn`
--
ALTER TABLE `leaves_earn`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaves_type`
--
ALTER TABLE `leaves_type`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loan_grant`
--
ALTER TABLE `loan_grant`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loan_grant_payroll`
--
ALTER TABLE `loan_grant_payroll`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `system_log`
--
ALTER TABLE `system_log`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `system_setting`
--
ALTER TABLE `system_setting`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
