-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 09:20 PM
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
-- Database: `mis_database_003`
--

-- --------------------------------------------------------

--
-- Table structure for table `ems_event`
--

CREATE TABLE `ems_event` (
  `id` varchar(20) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `participants` varchar(50) NOT NULL,
  `modality` varchar(50) NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL,
  `venue` varchar(100) NOT NULL,
  `incharge` varchar(100) NOT NULL,
  `rqt_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `approval` varchar(50) NOT NULL,
  `reason` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ems_event`
--

INSERT INTO `ems_event` (`id`, `title`, `description`, `participants`, `modality`, `start_datetime`, `end_datetime`, `venue`, `incharge`, `rqt_id`, `time`, `status`, `approval`, `reason`) VALUES
('Event_20213', 'test', 'test', 'test', 'face to face', '2023-02-01 23:41:00', '2023-02-02 23:41:00', 'BCP Main Campus', 'test', 1, '2023-02-12 15:42:08', 'Pending', '', ''),
('Event_20236', 'Foundation Day', 'BCP 15th Anniversary ', 'All Students', 'face to face', '2023-02-01 06:30:00', '2023-02-03 20:00:00', 'BCP MV Campus', 'Mr. Ian', 2, '2023-02-12 05:16:19', 'Approved', 'admin', ''),
('Event_20237', 'Research Festival', 'Competing of everyones research', 'All Students', 'face to face', '2023-02-13 06:00:00', '2023-02-14 06:00:00', 'BCP MV Campus', 'Mr. Bean', 2, '2023-02-11 08:41:38', 'Pending', '', ''),
('Event_20238', 'SSG Meeting', 'New Agenda', 'SSG', 'face to face', '2023-02-12 13:13:00', '2023-02-13 13:13:00', 'BCP MV Campus Gym', 'Mr. Popo', 1, '2023-02-12 05:14:50', 'Pending', '', '');

--
-- Triggers `ems_event`
--
DELIMITER $$
CREATE TRIGGER `tg_event_insert` BEFORE INSERT ON `ems_event` FOR EACH ROW BEGIN
  INSERT INTO ems_event_seq VALUES (NULL);
  SET NEW.id = CONCAT('Event_', LPAD(LAST_INSERT_ID(), 8, '2023'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mis_activity_logs`
--

CREATE TABLE `mis_activity_logs` (
  `act_id` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `activity_type` varchar(225) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `activity_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mis_activity_logs`
--

INSERT INTO `mis_activity_logs` (`act_id`, `ID`, `email`, `activity_type`, `ip_address`, `activity_time`) VALUES
(1, 123456822, '', 'login', '', '2023-02-19 19:48:20'),
(2, 123456822, '', 'login', '', '2023-02-19 19:48:58'),
(3, 123456822, '', 'logout', '', '2023-02-19 20:02:55'),
(4, 123456822, '', 'login', '', '2023-02-19 20:02:58'),
(5, 123456822, 'garados.bcp@mail.com', 'login', '', '2023-02-19 20:23:23'),
(6, 123456822, 'garados.bcp@mail.com', 'Add employees account', '', '2023-02-19 20:28:07'),
(7, 123456822, 'garados.bcp@mail.com', 'Upload profile picture', '', '2023-02-19 21:16:01'),
(8, 123456822, 'garados.bcp@mail.com', 'Upload profile picture', '', '2023-02-19 21:16:11'),
(9, 123456822, 'garados.bcp@mail.com', 'logout', '', '2023-02-19 21:17:04'),
(10, 123456911, 'johnmark@mail.com', 'login', '', '2023-02-19 21:17:31'),
(11, 123456911, 'johnmark@mail.com', 'Upload/Change profile picture', '', '2023-02-19 21:17:42'),
(12, 123456911, 'johnmark@mail.com', 'logout', '', '2023-02-19 21:18:21'),
(13, 123456822, 'garados.bcp@mail.com', 'login', '', '2023-02-19 21:18:25'),
(14, 123456822, 'garados.bcp@mail.com', 'Upload/Change profile picture', '::1', '2023-02-19 21:26:36'),
(15, 123456822, 'garados.bcp@mail.com', 'login', '::1', '2023-02-19 21:30:51'),
(16, 123456822, 'garados.bcp@mail.com', 'Upload/Change profile picture', '127.0.0.1', '2023-02-19 21:33:59'),
(17, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-19 21:46:50'),
(18, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-19 21:47:08'),
(19, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-19 21:47:13'),
(20, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-19 21:47:25'),
(21, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-19 21:47:33'),
(22, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-19 21:49:40'),
(23, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-19 21:50:23'),
(24, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-19 21:50:34'),
(25, 123456822, 'garados.bcp@mail.com', 'Add employees account', '127.0.0.1', '2023-02-19 21:51:38'),
(26, 123456822, 'garados.bcp@mail.com', 'Deleted employee with ID ', '127.0.0.1', '2023-02-19 21:58:16'),
(27, 123456822, 'garados.bcp@mail.com', 'Deleted employee with ID ', '127.0.0.1', '2023-02-19 21:58:27'),
(28, 123456822, 'garados.bcp@mail.com', 'Deleted employee with ID 123456928', '127.0.0.1', '2023-02-19 22:11:56'),
(29, 123456822, 'garados.bcp@mail.com', 'Deleted employee with ID 123456927', '127.0.0.1', '2023-02-19 22:12:41'),
(30, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456838', '127.0.0.1', '2023-02-20 05:47:37'),
(31, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456841', '127.0.0.1', '2023-02-20 05:48:36'),
(32, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 05:53:48'),
(33, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 06:04:11'),
(34, 123456822, 'garados.bcp@mail.com', 'Add employees account with ID ', '127.0.0.1', '2023-02-20 06:04:27'),
(35, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 06:08:37'),
(36, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456838', '127.0.0.1', '2023-02-20 06:08:46'),
(37, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456838', '127.0.0.1', '2023-02-20 06:10:07'),
(38, 123456822, 'garados.bcp@mail.com', 'Update employee information with ID 123456838', '127.0.0.1', '2023-02-20 06:11:22'),
(39, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 06:30:05'),
(40, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 06:30:19'),
(41, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 06:30:20'),
(42, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 06:30:21'),
(43, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-20 06:30:27'),
(44, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-20 06:50:54'),
(45, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-20 06:50:57'),
(46, 123456926, 'staffmis@bcp.com', 'login', '127.0.0.1', '2023-02-20 06:51:34'),
(47, 123456926, 'staffmis@bcp.com', 'Viewed employee profile with ID 123456926', '127.0.0.1', '2023-02-20 06:53:52'),
(48, 123456926, 'staffmis@bcp.com', 'Viewed employee profile with ID 123456926', '127.0.0.1', '2023-02-20 06:53:52'),
(49, 123456926, 'staffmis@bcp.com', 'Viewed employee profile with ID 123456926', '127.0.0.1', '2023-02-20 06:53:53'),
(50, 123456926, 'staffmis@bcp.com', 'Viewed employee profile with ID 123456926', '127.0.0.1', '2023-02-20 06:53:54'),
(51, 123456926, 'staffmis@bcp.com', 'Upload/Change profile picture', '127.0.0.1', '2023-02-20 06:54:03'),
(52, 123456926, 'staffmis@bcp.com', 'Viewed employee profile with ID 123456926', '127.0.0.1', '2023-02-20 06:54:05'),
(53, 123456926, 'staffmis@bcp.com', 'Viewed employee profile with ID 123456926', '127.0.0.1', '2023-02-20 06:54:06'),
(54, 123456926, 'staffmis@bcp.com', 'Viewed employee profile with ID 123456926', '127.0.0.1', '2023-02-20 06:54:07'),
(55, 123456926, 'staffmis@bcp.com', 'Upload/Change profile picture', '127.0.0.1', '2023-02-20 06:55:18'),
(56, 123456926, 'staffmis@bcp.com', 'Viewed employee profile with ID 123456926', '127.0.0.1', '2023-02-20 06:56:00'),
(57, 123456926, 'staffmis@bcp.com', 'Viewed employee profile with ID 123456926', '127.0.0.1', '2023-02-20 06:56:18'),
(58, 123456926, 'staffmis@bcp.com', 'Viewed employee profile with ID 123456926', '127.0.0.1', '2023-02-20 06:56:19'),
(59, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-20 06:56:25'),
(60, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456926', '127.0.0.1', '2023-02-20 06:56:28'),
(61, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456926', '127.0.0.1', '2023-02-20 06:56:29'),
(62, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456926', '127.0.0.1', '2023-02-20 06:56:30'),
(63, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 06:56:34'),
(64, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 06:56:36'),
(65, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-20 06:56:39'),
(66, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-20 06:57:48'),
(67, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-20 06:58:27'),
(68, 123456926, 'staffmis@bcp.com', 'login', '127.0.0.1', '2023-02-20 07:20:02'),
(69, 123456926, 'staffmis@bcp.com', 'Viewed employee profile with ID 123456926', '127.0.0.1', '2023-02-20 07:20:08'),
(70, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-20 07:20:18'),
(71, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456926', '127.0.0.1', '2023-02-20 07:20:21'),
(72, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 07:20:29'),
(73, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456926', '127.0.0.1', '2023-02-20 07:20:42'),
(74, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-20 07:20:48'),
(75, 123456926, 'staffmis@bcp.com', 'login', '127.0.0.1', '2023-02-20 07:31:48'),
(76, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-20 07:31:52'),
(77, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 07:31:58'),
(78, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 07:42:23'),
(79, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-20 07:42:25'),
(80, 123456926, 'staffmis@bcp.com', 'login', '127.0.0.1', '2023-02-20 07:43:08'),
(81, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-20 07:43:14'),
(82, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 07:43:19'),
(83, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-20 07:43:27'),
(84, 123456911, 'johnmark@mail.com', 'login', '127.0.0.1', '2023-02-20 07:43:48'),
(85, 123456911, 'johnmark@mail.com', 'logout', '127.0.0.1', '2023-02-20 07:43:56'),
(86, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-20 07:44:39'),
(87, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-20 07:44:41'),
(88, 123456911, 'johnmark@mail.com', 'login', '127.0.0.1', '2023-02-20 07:44:46'),
(89, 123456911, 'johnmark@mail.com', 'logout', '127.0.0.1', '2023-02-20 07:44:48'),
(90, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-20 07:47:21'),
(91, 123456911, 'johnmark@mail.com', 'login', '127.0.0.1', '2023-02-20 07:47:47'),
(92, 123456911, 'johnmark@mail.com', 'logout', '127.0.0.1', '2023-02-20 07:48:17'),
(93, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-20 08:28:35'),
(94, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:28:38'),
(95, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:29:46'),
(96, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:32:12'),
(97, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:32:13'),
(98, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:33:14'),
(99, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:40:42'),
(100, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:41:15'),
(101, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:41:15'),
(102, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:42:18'),
(103, 123456822, 'garados.bcp@mail.com', 'Upload/Change profile picture', '127.0.0.1', '2023-02-20 08:42:24'),
(104, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:42:30'),
(105, 123456822, 'garados.bcp@mail.com', 'Upload/Change profile picture', '127.0.0.1', '2023-02-20 08:42:41'),
(106, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:43:12'),
(107, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:43:13'),
(108, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:44:57'),
(109, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:45:08'),
(110, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:47:49'),
(111, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:48:19'),
(112, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:48:19'),
(113, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:49:29'),
(114, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:50:25'),
(115, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:50:26'),
(116, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:50:37'),
(117, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:50:38'),
(118, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:50:55'),
(119, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:51:08'),
(120, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:51:09'),
(121, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:51:48'),
(122, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:52:09'),
(123, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:52:10'),
(124, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:53:41'),
(125, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:53:42'),
(126, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:54:16'),
(127, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:54:16'),
(128, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:54:59'),
(129, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:55:00'),
(130, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:55:03'),
(131, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:55:19'),
(132, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:55:20'),
(133, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:56:40'),
(134, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:56:40'),
(135, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:57:49'),
(136, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:57:50'),
(137, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:58:32'),
(138, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:59:33'),
(139, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:59:34'),
(140, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:59:55'),
(141, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:59:56'),
(142, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 08:59:57'),
(143, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:00:33'),
(144, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:01:07'),
(145, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:01:08'),
(146, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:01:10'),
(147, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:03:53'),
(148, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:08:59'),
(149, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:08:59'),
(150, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:10:55'),
(151, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:10:56'),
(152, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:15:02'),
(153, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:15:03'),
(154, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:17:00'),
(155, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:17:01'),
(156, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:25:33'),
(157, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:25:34'),
(158, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:25:35'),
(159, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:26:02'),
(160, 123456822, 'garados.bcp@mail.com', 'Upload/Change profile picture', '127.0.0.1', '2023-02-20 09:28:29'),
(161, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:28:31'),
(162, 123456822, 'garados.bcp@mail.com', 'Upload/Change profile picture', '127.0.0.1', '2023-02-20 09:28:39'),
(163, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:28:48'),
(164, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:28:49'),
(165, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:28:49'),
(166, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:28:50'),
(167, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:29:04'),
(168, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:30:37'),
(169, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:30:52'),
(170, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:31:25'),
(171, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:31:28'),
(172, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:32:14'),
(173, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:32:18'),
(174, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 09:32:37'),
(175, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-20 09:32:38'),
(176, 123456911, 'johnmark@mail.com', 'login', '127.0.0.1', '2023-02-20 09:32:50'),
(177, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-20 09:32:54'),
(178, 123456911, 'johnmark@mail.com', 'logout', '127.0.0.1', '2023-02-20 09:33:01'),
(179, 123456926, 'staffmis@bcp.com', 'login', '127.0.0.1', '2023-02-20 09:33:05'),
(180, 123456926, 'staffmis@bcp.com', 'logout', '127.0.0.1', '2023-02-20 09:33:16'),
(181, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-20 09:33:19'),
(182, 123456911, 'johnmark@mail.com', 'login', '127.0.0.1', '2023-02-23 04:20:50'),
(183, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 06:10:33'),
(184, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 06:53:13'),
(185, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 11:04:18'),
(186, 123456911, 'johnmark@mail.com', 'login', '127.0.0.1', '2023-02-23 13:31:34'),
(187, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 13:33:41'),
(188, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 16:23:39'),
(189, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-23 16:32:34'),
(190, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 16:34:53'),
(191, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 16:34:57'),
(192, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 16:35:29'),
(193, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 16:47:48'),
(194, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 18:31:50'),
(195, 123456911, 'johnmark@mail.com', 'logout', '127.0.0.1', '2023-02-23 18:39:09'),
(196, 123456822, 'hans.bangay123@gmail.com', 'login', '127.0.0.1', '2023-02-23 18:50:33'),
(197, 123456822, 'hans.bangay123@gmail.com', 'logout', '127.0.0.1', '2023-02-23 18:50:37'),
(198, 123456911, 'johnmark@mail.com', 'login', '127.0.0.1', '2023-02-23 18:50:57'),
(199, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 18:51:21'),
(200, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 18:58:46'),
(201, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 19:35:16'),
(202, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 19:43:35'),
(203, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 19:43:47'),
(204, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 20:11:12'),
(205, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 20:11:15'),
(206, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-23 20:17:25'),
(207, 123456911, 'johnmark@mail.com', 'login', '127.0.0.1', '2023-02-24 10:42:08'),
(208, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-24 14:19:12'),
(209, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456930', '127.0.0.1', '2023-02-24 14:20:35'),
(210, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456929', '127.0.0.1', '2023-02-24 14:20:49'),
(211, 123456911, 'johnmark@mail.com', 'Deleted employee with ID 123456930', '127.0.0.1', '2023-02-24 14:21:04'),
(212, 123456911, 'johnmark@mail.com', 'Deleted employee with ID 123456929', '127.0.0.1', '2023-02-24 14:21:11'),
(213, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-24 15:41:08'),
(214, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-24 15:41:10'),
(215, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-24 15:42:20'),
(216, 123456911, 'johnmark@mail.com', 'Void Receipt', '127.0.0.1', '2023-02-24 21:30:20'),
(217, 123456911, 'johnmark@mail.com', 'Void Receipt', '127.0.0.1', '2023-02-24 21:31:23'),
(218, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-24 22:13:16'),
(219, 123456911, 'johnmark@mail.com', 'login', '127.0.0.1', '2023-02-25 08:47:23'),
(220, 123456911, 'johnmark@mail.com', 'login', '127.0.0.1', '2023-02-25 09:48:02'),
(221, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-25 09:51:56'),
(222, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-25 16:47:27'),
(223, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-25 16:47:46'),
(224, 123456911, 'johnmark@mail.com', 'login', '127.0.0.1', '2023-02-25 21:00:00'),
(225, 123456911, 'johnmark@mail.com', 'login', '127.0.0.1', '2023-02-26 10:36:25'),
(226, 123456911, 'johnmark@mail.com', 'login', '127.0.0.1', '2023-02-26 10:55:09'),
(227, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456859', '127.0.0.1', '2023-02-26 11:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `mis_categorize_inq`
--

CREATE TABLE `mis_categorize_inq` (
  `inq_num` int(100) NOT NULL,
  `inq_type` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `department` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `file_name` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `date_req` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mis_categorize_inq`
--

INSERT INTO `mis_categorize_inq` (`inq_num`, `inq_type`, `department`, `file_name`, `date_req`) VALUES
(1, 'Request list of paid student in enrollment', 'Enrollment', 'employees.xls', '2023-02-19 02:27:21'),
(2, 'Request list of paid student in research', 'Crad', '', '2023-01-24 06:10:09'),
(3, 'List of grants student to take exam', 'LMS', '', '2023-01-24 06:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `mis_chatbot`
--

CREATE TABLE `mis_chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mis_chatbot`
--

INSERT INTO `mis_chatbot` (`id`, `queries`, `replies`) VALUES
(1, '/help', '\"Help\" Options:<br>\r\nFollow and type the correct command to remove some error\'s encountered! <br><br>\r\n\r\n► \"/clear\" - To refresh page.<br>\r\n► \"/dep\" - To view all department.<br>\r\n► \"/number\" - To select items.<br>\r\n► \"/back\" - To go back to the previous options.<br>\r\n► \"/exit\" - To reset options.<b'),
(2, '/dep', 'Enter command:<br>\r\n\"/dep1-5\" <br><br>\r\n\r\n<a class=\"rep\" href=\"#\"> [dep1] LMS </a> <br>\r\n<a class=\"rep\" href=\"#\"> [dep2] Student Portal </a> <br>\r\n<a class=\"rep\" href=\"#\"> [dep3] MIS </a> <br>\r\n<a class=\"rep\" href=\"#\"> [dep4] Clinic </a> <br>\r\n<a class=\"rep\" href=\"#\"> [dep5] Other\'s </a> <br>'),
(3, '/1', 'DEP: ► LMS\r\n\r\nEnter command:<br>\r\n\"/lms1-4\" <br><br>\r\n\r\n<a class=\"rep\" href=\"#\"> [lms1] Can\'t Login Account! </a> <br>\r\n<a class=\"rep\" href=\"#\"> [lms2] No Subject </a> <br>\r\n<a class=\"rep\" href=\"#\"> [lms3] Wrong Subject </a> <br>\r\n<a class=\"rep\" href=\"#\"> [lms4] Examination Grant </a> <br>'),
(4, '/clear', '<a href=\"users.php\"> Refresh </a>'),
(5, '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `mis_concern`
--

CREATE TABLE `mis_concern` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mis_concern`
--

INSERT INTO `mis_concern` (`id`, `queries`, `replies`) VALUES
(0, 'Hi, hi, Hello, hello', 'Good Day! BCP\'s, student how can i help you?'),
(1, 'help', '\"Help\" Options:<br>\r\nFollow and type the correct command to remove some error\'s encountered! <br><br>\r\n\r\n► \"reset\" - To refresh page.<br>\r\n► \"dep\" - To view all department.<br>\r\n► \"depNumber\" - To select items.<br>'),
(2, 'dep', 'Enter command:<br>\r\n\"dep1-5\" <br><br>\r\n\r\n<a>Select Options:</a><br><br>\r\n<a class=\"rep\" href=\"#\" value=\"\"> [dep1] LMS </a> <br>\r\n<a class=\"rep\" href=\"#\"> [dep2] Student Portal </a> <br>\r\n<a class=\"rep\" href=\"#\"> [dep3] MIS </a> <br>\r\n<a class=\"rep\" href=\"#\"> [dep4] Clinic </a> <br>\r\n<a class=\"rep\" href=\"#\"> [dep5] Other\'s </a>'),
(3, 'test', 'This is my test command!'),
(4, 'clear', '<a href=\"users.php\"> Click: Refresh </a>'),
(5, 'dep1', 'DEP: ► LMS Enter command:<br>\r\n\"lms1-4\" <br><br>\r\n\r\n<a>Select Options:</a><br><br>\r\n<a class=\"rep\" href=\"#\"> [lms1] Can\'t Login Account! </a> <br>\r\n<a class=\"rep\" href=\"#\"> [lms2] No Subject </a> <br> \r\n<a class=\"rep\" href=\"#\"> [lms3] Wrong Subject </a> <br>\r\n<a class=\"rep\" href=\"#\"> [lms4] Examination Grant </a>\r\n'),
(7, 'dep2', 'DEP: ► Student Portal Enter command:<br> \r\n\"sp1-4\" <br><br>\r\n\r\n<a>Select Options:</a><br><br>\r\n<a class=\"rep\" href=\"#\"> [sp1] No Grades </a> <br> \r\n<a class=\"rep\" href=\"#\"> [sp2] Update balance </a> <br> \r\n<a class=\"rep\" href=\"#\"> [sp3] Can\'t Login </a> <br> \r\n<a class=\"rep\" href=\"#\"> [sp4] Request Documents </a> <br>'),
(8, 'dep3', 'DEP: ► MIS Enter command:<br> \r\n\"mis1-4\" <br><br>\r\n\r\n<a>Select Options:</a><br><br>\r\n<a class=\"rep\" href=\"#\"> [mis1] Wrong Payment </a> <br> \r\n<a class=\"rep\" href=\"#\"> [mis2] Void Payment Receipt </a> <br> \r\n<a class=\"rep\" href=\"#\"> [mis3] Payment Method </a> <br> \r\n<a class=\"rep\" href=\"#\"> [mis4] Other\'s </a> <br>'),
(9, 'dep4', 'DEP: ► Clinic Enter command:<br> \r\n\"cli1-4\" <br><br>\r\n\r\n<a>Select Options:</a><br><br>\r\n<a class=\"rep\" href=\"#\"> [cli1] Medical </a> <br>\r\n<a class=\"rep\" href=\"#\"> [cli2] Check up </a> <br> \r\n<a class=\"rep\" href=\"#\"> [cli3] Medical Status </a> <br> \r\n<a class=\"rep\" href=\"#\"> [cli4] Other\'s </a> <br>'),
(10, 'lms1', 'Unavailable Data'),
(11, 'lms2', 'Unavailable Data'),
(12, 'lms3', 'Unavailable Data'),
(13, 'lms4', 'Unavailable Data'),
(14, 'lms5', 'Other\'s'),
(15, 'sp1', 'Unavailable Data'),
(16, 'sp2', 'Unavailable Data'),
(17, 'sp3', 'Unavailable Data'),
(18, 'sp4', 'Other\'s'),
(19, 'mis1', 'Unavailable Data'),
(20, 'mis2', 'Unavailable Data'),
(21, 'mis3', 'Unavailable Data'),
(22, 'mis4', 'Other\'s'),
(23, 'cli1', 'Unavailable Data'),
(24, 'cli2', 'Unavailable Data'),
(25, 'cli3', 'Unavailable Data'),
(26, 'cli4', 'Other\'s'),
(150, 'Harold Niegos', 'BSIT-4202\r\nShisshh'),
(777, 'dawdaw', 'dawda'),
(1002, 'dawd', 'awdawdaw'),
(5555, 'ada', 'dada'),
(6666, 'dwadaw', 'dawdaw'),
(9999, 'dwdwadaw', 'dawdadaw'),
(10022, 'wdwdw', 'adwada'),
(12321, '2131', '2313'),
(53535, '5353', '5353'),
(1234567, 'Hatdog', 'sge'),
(12345678, 'Bago lang', 'Opo');

-- --------------------------------------------------------

--
-- Table structure for table `mis_grades`
--

CREATE TABLE `mis_grades` (
  `stud_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `sub_title2` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `sub_title1` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `sub_title3` varchar(255) NOT NULL,
  `sub_title4` varchar(255) NOT NULL,
  `sub_title5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mis_grades`
--

INSERT INTO `mis_grades` (`stud_id`, `fname`, `mname`, `lname`, `section`, `year`, `course`, `sub_title2`, `period`, `remarks`, `sub_title1`, `datetime`, `sub_title3`, `sub_title4`, `sub_title5`) VALUES
(1912901, 'Michael', 'Bersabe', 'Bercasio', '4101', '4th Year', 'BSIT', '1.25', 'Prelim', 'Passed', '1.0', '2023-02-26 03:37:26', '1.50', '1.0', '1.25'),
(1912902, 'Vincent', 'Agudo', 'Furigay', '4102', '4th Year', 'BSIT', '1.75', 'Prelim', 'Passed', '1.0', '2023-02-26 03:37:26', '1.0', '1.75', '1.0'),
(1912903, 'Emman', 'Abukado', 'Benosa', '4102', '4th Year', 'BSIT', '1.25', 'Prelim', 'Passed', '1.25', '2023-02-26 03:37:26', '1.25', '1.0', '1.25'),
(1912911, 'Ricky', 'Yutiga', 'Bacar', '4101', '4th Year', 'BSIT', '1.125', 'Prelim', 'Passed', '1.0', '2023-02-26 03:37:26', '1.0', '1.75', '1.0'),
(1912918, 'Harold', 'Gico', 'Niegos', '4102', '4th Year', 'BSIT', '1.50', 'Prelim', 'Passed', '1.0', '2023-02-26 03:37:26', '1.0', '1.75', '1.0');

-- --------------------------------------------------------

--
-- Table structure for table `mis_man_inc_rep`
--

CREATE TABLE `mis_man_inc_rep` (
  `rep_id` int(11) NOT NULL,
  `type` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `department` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mis_man_inc_rep`
--

INSERT INTO `mis_man_inc_rep` (`rep_id`, `type`, `description`, `department`, `date`, `status`) VALUES
(1, 'Reports', 'Student Enrolled', 'Enrollment', '2023-02-15 13:53:42', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `mis_paidbooks`
--

CREATE TABLE `mis_paidbooks` (
  `stud_num` int(11) NOT NULL,
  `fname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_amount` int(100) NOT NULL,
  `balance` int(100) NOT NULL,
  `payment_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_num` int(100) NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `books` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mis_paidbooks`
--

INSERT INTO `mis_paidbooks` (`stud_num`, `fname`, `lname`, `payment_amount`, `balance`, `payment_type`, `payment_method`, `invoice_num`, `status`, `date`, `books`) VALUES
(19123456, 'Victor', 'Higoy', 500, 0, 'Books', 'Cashier', 20230123, 'Paid', '2023-02-12', '4');

-- --------------------------------------------------------

--
-- Table structure for table `mis_paiduniform`
--

CREATE TABLE `mis_paiduniform` (
  `stud_num` int(11) NOT NULL,
  `fname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_amount` int(100) NOT NULL,
  `payment_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_num` int(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `uniform` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mis_paiduniform`
--

INSERT INTO `mis_paiduniform` (`stud_num`, `fname`, `lname`, `payment_amount`, `payment_type`, `payment_method`, `invoice_num`, `date`, `uniform`) VALUES
(19012918, 'Harold', 'Niegos', 615, 'Uniform', 'Cashier', 2023444, '2023-02-23', '1'),
(19045678, 'Hans Airon', 'Bangay', 0, '', '', 0, '2023-02-23', '');

-- --------------------------------------------------------

--
-- Table structure for table `mis_payment_method`
--

CREATE TABLE `mis_payment_method` (
  `OR_number` int(11) NOT NULL,
  `student_num` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `payment_type` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bal` int(250) NOT NULL,
  `payment_desc` varchar(250) NOT NULL,
  `amount` int(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `void_reason` varchar(250) NOT NULL,
  `voided` tinyint(1) DEFAULT NULL,
  `document` varchar(300) NOT NULL,
  `prelim` varchar(255) NOT NULL,
  `midterm` varchar(255) NOT NULL,
  `finals` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `yearlevel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mis_payment_method`
--

INSERT INTO `mis_payment_method` (`OR_number`, `student_num`, `name`, `payment_type`, `date`, `bal`, `payment_desc`, `amount`, `status`, `void_reason`, `voided`, `document`, `prelim`, `midterm`, `finals`, `semester`, `course`, `yearlevel`) VALUES
(1700000, '2023000', 'jose', 'AUB', '2023-02-26 17:29:09', 2487, 'Miscellaneous Fee', 2488, 'none\r\n', '', 0, '', '0', '0', '0', '1st Semester', 'BSIT', '4th Year'),
(1700001, '2023001', 'Daryl Estolonio', 'BCP Cashier', '2023-02-26 17:27:39', 2487, 'Miscellaneous Fee', 2488, 'none', '', NULL, '', 'Paid', '0', '0', '1st Semester', 'BSIT', '4th Year'),
(1700002, '2023002', 'Gemerken Zapanta', 'Hello Money', '2023-02-26 17:27:41', 1000, 'Miscellaneous Fee', 3975, 'none', '', NULL, '', 'Paid', '0', '0', '1st Semester', 'BSIT', '4th Year'),
(1700003, '2023003', 'Victor Higoy', 'Hello Money', '2023-02-26 17:27:43', 0, 'Miscellaneous Fee', 4975, 'none', '', NULL, '', 'Paid', '0', '0', '1st Semester', 'BSIT', '4th Year'),
(1700004, '2023004', 'Christian Capitle', 'Hello Money', '2023-02-26 17:28:52', 2000, 'Miscellaneous Fee', 2975, 'none', '', 0, '', 'Paid', 'Paid', 'Paid', '1st Semester', 'BSIT', '4th Year'),
(1700005, '2023004', 'Christian Capitle', 'BCP Cashier', '2023-02-26 17:28:53', 0, 'Books', 0, 'none', '', NULL, '', 'Paid', 'Paid', 'Paid', '1st Semester', 'BSIT', '4th Year'),
(1700006, '2023003', 'Victor Higoy', 'BCP Cashier', '2023-02-26 17:28:54', 0, 'Books', 0, 'none', '', NULL, '', 'Paid', 'Paid', 'Paid', '1st Semester', 'BSIT', '4th Year'),
(1700007, '2023002', 'Gemerken Zapanta', 'BCP Cashier', '2023-02-26 17:28:55', 1000, 'Books', 0, 'none', '', NULL, '', 'Paid', 'Paid', 'Paid', '1st Semester', 'BSIT', '4th Year'),
(1700008, '2023001', 'Daryl Estolonio', 'BCP Cashier', '2023-02-26 17:28:45', 2487, 'Books', 0, 'none', '', NULL, '', 'Paid', 'Paid', '0', '1st Semester', 'BSIT', '4th Year'),
(1700009, '2023000', 'jose', 'BCP Cashier', '2023-02-26 17:28:44', 2487, 'Books', 0, 'none', '', NULL, '', 'Paid', 'Paid', '0', '1st Semester', 'BSIT', '4th Year'),
(1700010, '2023004', 'Christian Capitle', 'BCP Cashier', '2023-02-26 17:28:42', 2000, 'Documents', 100, 'none', '', NULL, 'Evaluation', 'Paid', 'Paid', '0', '1st Semester', 'BSIT', '4th Year'),
(1700011, '2023001', 'Daryl Estolonio', 'BCP Cashier', '2023-02-26 17:28:38', 2487, 'Uniform', 2488, 'none', '', NULL, '', 'Paid', 'Paid', '0', '1st Semester', 'BSIT', '4th Year'),
(1700012, '2023002', 'Gemerken Zapanta', 'Hello Money', '2023-02-26 17:28:37', 1000, 'Uniform', 3975, 'none', '', NULL, '', 'Paid', 'Paid', '0', '1st Semester', 'BSIT', '4th Year'),
(1700013, '2023004', 'Christian Capitle', 'Hello Money', '2023-02-26 17:29:00', 2000, 'Uniform', 2975, 'none', '', NULL, '', '0', 'Paid', '0', '1st Semester', 'BSIT', '4th Year'),
(1700014, '2023003', 'Victor Higoy', 'Hello Money', '2023-02-26 17:28:35', 0, 'Uniform', 4975, 'none', '', NULL, '', 'Paid', 'Paid', '0', '1st Semester', 'BSIT', '4th Year'),
(1700015, '2023000', 'jose', 'AUB', '2023-02-26 17:28:34', 2487, 'Miscellaneous Fee', 2488, 'none', '', NULL, '', 'Paid', 'Paid', '0', '1st Semester', 'BSIT', '4th Year'),
(1700016, '2023001', 'Daryl Estolonio', 'BCP Cashier', '2023-02-26 17:28:01', 2487, 'Documents', 100, 'none', '', NULL, 'Evaluation', 'Paid', '0', '0', '1st Semester', 'BSIT', '4th Year'),
(1700017, '2023002', 'Gemerken Zapanta', 'BCP Cashier', '2023-02-26 17:29:05', 1000, 'Documents', 100, 'none', '', NULL, 'COG', '0', '0', '0', '1st Semester', 'BSIT', '4th Year'),
(1700018, '2023003', 'Victor Higoy', 'BCP Cashier', '2023-02-26 17:28:03', 0, 'Documents', 100, 'none', '', NULL, 'COG', 'Paid', '0', '0', '1st Semester', 'BSIT', '4th Year'),
(1700019, '2023000', 'jose', 'BCP Cashier', '2023-02-26 17:28:04', 2487, 'Documents', 50, 'none', '', NULL, 'SOA', 'Paid', '0', '0', '1st Semester', 'BSIT', '4th Year'),
(1700051, '2023002', 'Gemerken Zapanta', 'Hello Money', '2023-02-26 19:20:50', 0, 'Research', 2000, 'Paid', '', NULL, '', 'Paid', 'Paid', 'Paid', '1st Semester', 'BSEDUC', '4th Year'),
(1700055, '2023003', 'Victor Higoy', 'Hello Money', '2023-02-26 17:28:25', 0, 'Research', 2000, 'Paid', '', NULL, '', 'Paid', 'Paid', 'Paid', '1st Semester', 'BSIT', '4th Year'),
(1700059, '2023001', 'Daryl Estolonio', 'BCP Cashier', '2023-02-26 17:28:23', 0, 'Research', 2000, 'Paid', '', NULL, '', 'Paid', 'Paid', 'Paid', '1st Semester', 'BSIT', '4th Year'),
(1700066, '2023004', 'Christian Capitle', 'Hello Money', '2023-02-26 19:20:54', 0, 'Research', 2000, 'Paid', '', NULL, '', 'Paid', 'Paid', 'Paid', '1st Semester', 'BSEDUC', '4th Year'),
(1700087, '2023000', 'jose', 'AUB', '2023-02-26 17:28:18', 0, 'Research', 2000, 'Paid', '', NULL, '', 'Paid', 'Paid', 'Paid', '1st Semester', 'BSIT', '4th Year'),
(1700201, '2023078', 'Tan Duay', 'Hello Money', '2023-02-26 17:27:32', 2000, 'Research', 2975, 'none', '', NULL, '', 'Paid', '0', '0', '1st Semester', 'BSEDUC', '4th Year'),
(1700851, '2023010', 'Empi Leyts', 'Hello Money', '2023-02-26 17:28:05', 1000, 'Research', 3975, 'none', '', NULL, '', 'Paid', '0', '0', '1st Semester', 'BSEDUC', '4th Year'),
(1700991, '2023012', 'Jin Bilog', 'BCP Cashier', '2023-02-26 17:27:36', 2487, 'Research', 2488, 'none', '', NULL, '', 'Paid', '0', '0', '1st Semester', 'BSEDUC', '4th Year'),
(1702000, '2023000', 'jose', 'AUB', '2023-02-26 19:39:09', 975, 'Enrollment Fee', 1000, 'Paid', '', 0, '', 'Paid', '0', '0', '1st Semester', 'BSIT', '4th Year'),
(1702001, '2023001', 'Daryl Estolonio', 'BCP Cashier', '2023-02-26 17:27:33', 1000, 'Enrollment Fee', 1000, 'none', '', NULL, '', 'Paid', '0', '0', '1st Semester', 'BSIT', '4th Year'),
(1702002, '2023002', 'Gemerken Zapanta', 'Hello Money', '2023-02-26 19:39:06', 1975, 'Enrollment Fee', 1000, 'Paid', '', NULL, '', 'Paid', 'Paid', 'Paid', '1st Semester', 'BSIT', '4th Year'),
(1702003, '2023003', 'Victor Higoy', 'Hello Money', '2023-02-26 17:27:35', 0, 'Enrollment Fee', 1000, 'none', '', NULL, '', 'Paid', '0', '0', '1st Semester', 'BSIT', '4th Year'),
(1705601, '2023059', 'Red Horsy', 'Hello Money', '2023-02-26 17:27:38', 0, 'Research', 4975, 'none', '', NULL, '', 'Paid', '0', '0', '1st Semester', 'BSEDUC', '4th Year'),
(1708801, '2023056', 'San Miguel', 'AUB', '2023-02-26 17:27:28', 2487, 'Research', 2488, 'none', '', NULL, '', 'Paid', '0', '0', '1st Semester', 'BSEDUC', '4th Year'),
(17000020, '2023789', 'Ann', 'AUB', '2023-02-26 17:43:47', 1000, 'Miscellaneous Fee', 3975, 'none', '', NULL, '', 'Paid', '0', '0', '1st Semester', 'BSIT', '1st Year'),
(17000021, '2023456', 'Hill', 'BCP Cashier', '2023-02-26 17:29:14', 2000, 'Books', 0, 'none', '', NULL, '', '0', '0', '0', '1st Semester', 'BSIT', '2nd Year');

-- --------------------------------------------------------

--
-- Table structure for table `mis_pms`
--

CREATE TABLE `mis_pms` (
  `stud_num` int(11) NOT NULL,
  `fname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_amount` int(100) NOT NULL,
  `balance` int(100) NOT NULL,
  `payment_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_num` int(100) NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mis_pms`
--

INSERT INTO `mis_pms` (`stud_num`, `fname`, `lname`, `payment_amount`, `balance`, `payment_type`, `payment_method`, `invoice_num`, `status`, `date`) VALUES
(19011766, 'Michael', 'Bercasio', 4975, 0, 'Miscellaneous Fee ', 'HM', 20230215, 'Paid', '2023-02-23'),
(19012918, 'Harold', 'Niegos', 4975, 0, 'Miscellaneous Fee ', 'AUB', 20230214, 'Paid', '2023-02-23'),
(19045678, 'Hans Airon', 'Bangay', 4975, 0, 'Miscellaneous Fee ', 'Cashier', 20230216, 'Paid', '2023-02-24'),
(19123456, 'Victor', 'Higoy', 4975, 0, 'Miscellaneous Fee ', 'Cashier', 20230213, 'Paid', '2023-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `mis_student_users`
--

CREATE TABLE `mis_student_users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mis_student_users`
--

INSERT INTO `mis_student_users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 19012918, 'Harold', 'Niegos', '19012918@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user.png', 'Offline now'),
(2, 19018526, 'Akira Mae', 'Bucana', '19018526@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user.png', 'Offline now'),
(3, 19011769, 'Vincent', 'Furigay', '19011769@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user.png', 'Offline now'),
(4, 19010365, 'Ela May', 'Alfonso', '19010365@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user.png', 'Offline now'),
(5, 19010581, 'Vincent', 'Clarin', '19010581@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user.png', 'Active now'),
(6, 19011498, 'Ricky', 'Bacar', '19011498@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user.png', 'Offline now'),
(7, 19011766, 'Michael', 'Bercasio', '19011766@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user.png', 'Offline now'),
(8, 19011767, 'Emman', 'Benosa', '19011767@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user.png', 'Offline now'),
(9, 19011678, 'Krizellaine Kayte', 'Ugto', '19011678@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user.png', 'Offline now');

-- --------------------------------------------------------

--
-- Table structure for table `mis_stud_info`
--

CREATE TABLE `mis_stud_info` (
  `stud_num` int(11) NOT NULL,
  `program_code` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `course` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `fname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `lname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sex` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `suffix` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `mobilenum` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `ylvl` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `bal` int(100) NOT NULL,
  `role` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `student_status` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `img_name` blob NOT NULL,
  `company` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `major` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `section` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mis_stud_info`
--

INSERT INTO `mis_stud_info` (`stud_num`, `program_code`, `course`, `fname`, `lname`, `sex`, `suffix`, `email`, `mobilenum`, `ylvl`, `bal`, `role`, `student_status`, `img_name`, `company`, `major`, `section`, `year`) VALUES
(19010551, 'BSIT', 'BS Information Technology', 'Fritzs', 'Segun', 'Male', '', 'Fritzegun@gmail.com', '09374857343', '4th Year', 4975, 'Student', 'Regular', '', 'Bestlink College of the Philippines', 'IM', '4202', 2023),
(19010552, 'BSOA', 'BS Office Administrative', 'Christian ', 'Estomaguio', 'Male', '', 'binoy123@gmail.com', '09374857343', '4th Year', 4975, 'Student', 'Regular', '', 'Bestlink College of the Philippines', 'NA', '4111', 0000),
(19010557, 'BSIT', 'BS Information Technology', 'Ellen ', 'Adarnas', 'Female', '', 'ellen@gmail.com', '09374857343', '4th Year', 4975, 'Student', 'Transferee', 0x3233363833312e706e67, 'Bestlink College of the Philippines', 'NA', '4202', 0000),
(19010558, 'BSIT', 'BS Information Technology', 'Harold', 'Niegos', 'Male', '', 'harold@gmail.com', '09374857343', '4th Year', 4975, 'Student', 'Irregular', '', 'Bestlink College of the Philippines', 'IS', '4111', 0000),
(19010559, 'BSIT', 'BSCRIM', 'test', 'stud', 'Male', '', 'teststud@gmail.com', '09374857343', '1st Year', 4975, 'Student', 'Regular', '', 'Bestlink College of the Philippines', '', '4201', 0000),
(19010560, 'BSOA', 'BS Office Administrative', 'user', 'one', 'Male', '', 'user1@gmail.com', '09374857343', '4th Year', 4975, 'Student', 'Transferee', '', 'Bestlink College of the Philippines', 'IS', '4202', 0000),
(19010561, 'BSOA', 'BS Office Administrative', 'user', 'two', 'Male', '', 'user2@gmail.com', '09374857343', '4th Year', 4975, 'Student', 'In-Active', '', 'Bestlink College of the Philippines', 'IM', '4201', 0000),
(19010562, 'BSIT', 'BS Information Technology', 'user', 'three', 'Female', '', 'user3@gmail.com', '09374857343', '2nd Year', 4975, 'Student', 'Transferee', 0x3233363833312e706e67, 'Bestlink College of the Philippines', '', '4201', 0000),
(19010563, 'BSBA', 'BS Business Administrative', 'user', 'four', 'Male', '', 'user4@gmail.com', '09374857343', '4th Year', 4975, 'Student', 'Returnee', '', 'Bestlink College of the Philippines', 'IS', '4111', 0000),
(19010564, 'BSIT', 'BS Information Technology', 'user', 'five', 'Male', '', 'user5@gmail.com', '09374857343', '3rd Year', 4975, 'Student', 'Regular', '', 'Bestlink College of the Philippines', 'IS', '4111', 0000),
(19010565, 'BSCRIM\r\n', 'BS Criminology', 'Sample ', 'Crim', 'Male', '', 'samplecrim@bcp.com', '', '4th Year', 0, 'Student', 'Regular', '', '', 'NA', '4111', 0000),
(19010566, 'BSBA', 'BS Business Administrative', 'Joao', 'Martinez', '', '', 'jmartinez@bcp.com', '', '4th Year', 0, 'Student', 'Regular', '', '', 'NA', '4202', 0000);

-- --------------------------------------------------------

--
-- Table structure for table `mis_table_course`
--

CREATE TABLE `mis_table_course` (
  `id` int(11) NOT NULL,
  `program_code` varchar(250) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mis_table_course`
--

INSERT INTO `mis_table_course` (`id`, `program_code`, `course`, `year`) VALUES
(1, '', 'Bachelor of Science in Information Technology - BSIT', '2023-01-01'),
(2, '', 'BSOA', '2023-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `mis_teacher_information`
--

CREATE TABLE `mis_teacher_information` (
  `ID` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `class_schedule` varchar(250) NOT NULL,
  `room_assignment` varchar(250) NOT NULL,
  `employment_status` varchar(250) NOT NULL,
  `hire_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `salary` varchar(250) NOT NULL,
  `education_level` varchar(250) NOT NULL,
  `certification` varchar(250) NOT NULL,
  `company` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mis_teacher_information`
--

INSERT INTO `mis_teacher_information` (`ID`, `name`, `email`, `password`, `phone_number`, `department`, `subject`, `class_schedule`, `room_assignment`, `employment_status`, `hire_date`, `salary`, `education_level`, `certification`, `company`, `sex`) VALUES
(2023000, 'Elle Cruz', 'ellecruz@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'None', 'CSS', 'ITSP 4', 'TBA', 'TBA', 'None', '2023-02-25 16:38:49', 'None', 'College/University Faculty ', 'None', 'BESTLINK COLLEGE OF THE PHILIPPINES', 'Female'),
(2023001, 'Jorge Lucero', 'jorge.lucero@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'None', 'CSS', 'ITSP1', 'TBA', 'TBA', 'None', '2023-02-25 16:42:03', 'None', 'College/University Faculty ', '', 'BESTLINK COLLEGE OF THE PHILIPPINES', 'Male'),
(2023002, 'Ronald Roldan Jr.', 'ronald.roldan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'None', 'CSS', 'HCI', 'TBA', '507', 'None', '2023-02-26 11:35:53', 'None', 'College/University Faculty ', 'None', 'BESTLINK COLLEGE OF THE PHILIPPINES', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `mis_type_req`
--

CREATE TABLE `mis_type_req` (
  `req_id` int(11) NOT NULL,
  `req_type` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Description` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `response_format` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `department` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mis_type_req`
--

INSERT INTO `mis_type_req` (`req_id`, `req_type`, `Description`, `response_format`, `department`, `date`) VALUES
(1, 'List of paid enrolees for enrollment ', '', '.xlsx', 'Enrollment', '2023-02-07 16:57:05'),
(2, 'List of paid student for research', '', '.xlsx', 'Crad', '2023-02-07 16:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `mis_usermanagement`
--

CREATE TABLE `mis_usermanagement` (
  `ID` int(11) NOT NULL,
  `pass` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `fname` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `lname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `suffix` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sex` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `mobilenum` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `home_address` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `department` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `role` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `company` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `img_name` blob NOT NULL,
  `otp` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `access_level` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `is_logged_in` tinyint(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mis_usermanagement`
--

INSERT INTO `mis_usermanagement` (`ID`, `pass`, `fname`, `lname`, `suffix`, `sex`, `email`, `mobilenum`, `home_address`, `department`, `role`, `company`, `img_name`, `otp`, `date_added`, `access_level`, `is_logged_in`) VALUES
(123456911, 'admin', 'John Mark ', 'Bautista', '', 'Male', 'johnmark@mail.com', '09237594381', 'Street:  304 Chateau Verde Condominium, E Rodriguez Avenue, Valle Verde I  City:   Pasig City  State/province/area:    Metro Manila  Phone number  +87(2)6712342/+87(2)6710287  Country calling code  +63  Country  Philippines', 'Management Information System', 'Admin', 'Bestlink College of the Philippines', 0x3233363833312e706e67, 0, '2023-02-21 13:37:26', '2', 0),
(123456822, '123', 'Vincent', 'Garados', '', 'Male', 'hans.bangay123@gmail.com', '09374857461', 'Quezon City', 'Management Information System', 'Super Admin', 'Bestlink College of the Philippines', 0x3233363833312e706e67, 0, '2023-02-23 18:50:37', '1', 0),
(123456838, 'dept123', 'Juan ', 'Dela Cruz', '', 'Male', 'juan.bcp@mail.com', '094528394931', '', 'Faculty Management', 'Program Head', 'Bestlink College of the Philippines', '', 0, '2023-02-22 15:46:15', '', 0),
(123456840, 'phead123', 'Ellen ', 'Cruz', '', 'Female', 'ellen.cruz@bcp', '09374857123', '', 'Academic Management', 'Program Head', 'Bestlink College of the Phillipines', '', 0, '2023-02-14 10:48:34', '', 0),
(123456839, 'ints123', 'Juan ', 'Luna', '', 'Male', 'juanluna@bcp.com', '', '', 'Faculty Management', 'Instructor', 'Bestlink College of the Philippines', '', 0, '2023-02-14 10:48:34', '', 0),
(123456841, 'sec123', 'Allen ', 'Ejercito', '', 'Male', 'allen@bcp.com', '', '', 'Academic Management', 'Secretary', 'Bestlink College of the Philippines', '', 0, '2023-02-14 10:48:34', '', 0),
(123456842, 'hradmin123', 'Steven\r\n\r\n', 'Izatson', '', 'Male', 'sizatsonl@bcp.com', '', '', 'Human Resources', 'Admin', 'Bestlink College of the Philippines', '', 0, '2023-02-14 10:48:34', '', 0),
(123456843, 'hrstaff123', 'Charlton\r\n\r\n', 'Dewis', '', 'Male', 'cdewiso@bcp.com', '', '', 'Human Resources', 'Staff', 'Bestlink College of the Philippines', '', 0, '2023-02-14 10:48:34', '', 0),
(123456844, 'hremp123', 'Maureen\r\n\r\n', 'Buyers', '', 'Female', 'mbuyersp@bcp.com', '', '', 'Human Resources', 'Employee', 'Bestlink College of the Philippines', '', 0, '2023-02-14 10:48:34', '', 0),
(123456845, 'pchead123', 'Lambert\r\n\r\n', 'McKennan', '', 'Male', 'lmckennan2q@amazon.com', '', '', 'Property Custodian', 'Department Head', 'Bestlink College of the Philippines', '', 0, '2023-02-22 15:56:05', '', 0),
(123456850, 'rdcrad123', 'Adolph\r\n\r\n', 'Aldwich', '', 'Male', 'aaldwich@bcp.com', '', '', 'CRAD', 'Research Director', 'Bestlink College of the Philippines', '', 0, '2023-02-14 10:53:39', '', 0),
(123456851, 'cradhead123', 'Georges\r\n\r\n', 'Innot', '', 'Male', 'ginnot@bcp.com', '', '', 'CRAD', 'Department Head', 'Bestlink College of the Philippines', '', 0, '2023-02-14 10:53:39', '', 0),
(123456852, 'rccrad123', 'Trenton\r\n\r\n', 'Ollerenshaw', '', 'Male', 'tollerenshaw@bcp.com', '', '', 'CRAD', 'Research Coordinator', 'Bestlink College of the Philippines', '', 0, '2023-02-14 10:53:39', '', 0),
(123456853, 'racrad123', 'Tom\r\n\r\n', 'Tolan', '', 'Male', 'ttolan@bcp.com', '', '', 'CRAD', 'Research Adviser', 'Bestlink College of the Philippines', '', 0, '2023-02-14 10:53:39', '', 0),
(123456854, 'podhead123', 'Gail\r\n\r\n', 'Moreside', '', 'Female', 'gmoreside@bcp.com', '', '', 'PREFECT OF DISCIPLINE', 'Head', 'Bestlink College of the Philippines', '', 0, '2023-02-14 10:53:39', '', 0),
(123456855, 'stud123', 'stud', 'sample', '', 'Male', 'studsample@bcp.com', '', '', 'PREFECT OF DISCIPLINE', 'Student', '', '', 0, '2023-02-14 10:53:39', '', 0),
(123456856, 'officer', 'Alexander ', 'Catamin', '', 'Male', 'officer@sas.com', '', '', 'Safety and Security', 'officer', 'Bestlink College of the Philippines', '', 0, '2023-02-22 15:40:46', '', 0),
(123456857, 'oic_sas', 'Troy', 'Dugan', '', 'Male', 'oic@sas.com', '', '', 'SAFETY AND SECURITY', 'OIC', 'Bestlink College of the Philippines', '', 0, '2023-02-22 15:42:21', '', 0),
(123456932, 'fms123', 'Joselita', 'Menor', '', 'Female', 'joselita@bcp.com', '', '', 'Faculty Management', 'Secretary', 'Bestlink College of the Philippines', '', 0, '2023-02-22 15:50:06', '', 0),
(123456859, 'clinicadmin123', 'Briano\r\n\r\n', 'Lawrenz', '', 'Male', 'blawrenz@bcp.com', '0', '', 'CLINIC', 'Admin', 'Bestlink College of the Philippines', '', 0, '2023-02-14 10:58:55', '', 0),
(123456860, 'doc123', 'Nolan\r\n\r\n', 'Madre', '', 'Male', 'nmadre@bcp.com', '', '', 'CLINIC', 'Doctor', 'Bestlink College of the Philippines', '', 0, '2023-02-14 10:58:55', '', 0),
(123456861, 'nurse123', 'Lynn\r\n\r\n', 'Szymon', '', 'Male', 'lszymon@bcp.com', '', '', 'CLINIC', 'Nurse', 'Bestlink College of the Philippines', '', 0, '2023-02-14 10:58:55', '', 0),
(123456862, 'gadmin123', 'Kaia\r\n\r\n\r\n', 'Tellwright', '', 'Male', 'ktellwright@bcp.com', '', '', 'GUIDANCE', 'Counsilor', 'Bestlink College of the Philippines', '', 0, '2023-02-22 15:59:26', '', 0),
(123456863, 'gstaff123', 'Maxwell\r\n\r\n', 'Goolding', '', 'Male', 'mgoolding@bcp.com', '', '', 'GUIDANCE', 'Staff', 'Bestlink College of the Philippines', '', 0, '2023-02-14 10:58:55', '', 0),
(123456865, 'log123', 'Dione\r\n\r\n', 'Backshall', '', 'Female', 'dbackshall@bcp.com', '', '', 'Logistics Management', 'Head Log Manager', 'Bestlink College of the Philippines', '', 0, '2023-02-12 15:27:29', '', 0),
(123456866, 'logoff123', 'Seline\r\n\r\n', 'Cheesworth', '', 'Female', 'scheesworth@bcp.com', '', '', 'Logistics Management ', 'Log Officer ', 'Bestlink College of the Philippines', '', 0, '2023-02-12 15:27:29', '', 0),
(123456867, 'wareman123', 'Laetitia\r\n\r\n', 'Episcopi', '', 'Female', 'lepiscopi@bcp.com', '', '', 'Logistics Management ', 'President', 'Bestlink College of the Philippines', '', 0, '2023-02-22 15:54:07', '', 0),
(123456868, 'qasec123', 'Eliza\r\n\r\n', 'Faichney', '', 'Female', 'efaichney@bcp.com', '', '', 'QUALITY ASSURANCE', 'Secretary of the Accreditation ', 'Bestlink College of the Philippines', '', 0, '2023-02-12 15:27:29', '', 0),
(123456869, 'qavp123', 'Kara\r\n\r\n', 'Caughte', '', 'Female', 'kcaughtej@bcp.com', '', '', 'QUALITY ASSURANCE', 'Vice President', 'Bestlink College of the Philippines', '', 0, '2023-02-12 15:27:29', '', 0),
(123456870, 'qadean123', 'Phillip ', 'Morris', '', 'Male', 'pmorrisp@bcp.com', '09384759483', '', 'Quality Assurance', 'PMED Chairman', 'Bestlink College of the Philippines', '', 0, '2023-02-22 15:57:23', '', 0),
(123456912, 'oesadmin', 'Jose ', 'Moraga', '', 'Male', 'jmoraga@bcp.com', '09123456789', '', 'Enrollment', 'staff', 'Bestlink College of the Philippines', '', 0, '2023-02-14 11:15:56', '', 0),
(123456913, 'financial', 'Erhard\r\n\r\n', 'Elbourne', '', 'Male', 'eelbourne@bcp.com', '09248573829', '', 'Financial ', 'General Ledger Manager', 'Bestlink College of the Philippines', '', 0, '2023-02-12 14:33:42', '', 0),
(123456914, 'financial', 'Gawen\r\n\r\n', 'Swalwell', '', 'Male', 'gswalwell@bcp.com', '', '', 'Financial', 'General Ledger Assistant ', 'Bestlink College of the Philippines', '', 0, '2023-02-12 14:33:42', '', 0),
(123456915, 'financial', 'Anthea\r\n\r\n', 'Donoher', '', 'Female', 'adonoher@bcp.com', '', '', 'Financial', 'Collection Manager', 'Bestlink College of the Philippines', '', 0, '2023-02-12 14:33:42', '', 0),
(123456917, 'financial', 'Oona\r\n\r\n', 'Metherell', '', 'Female', 'ometherell@bcp.com', '', '', 'Financial', 'Collection Assistant ', 'Bestlink College of the Philippines', '', 0, '2023-02-12 14:33:42', '', 0),
(123456918, 'financial', 'Wendell\r\n\r\n', 'Battelle', '', 'Male', 'wbattelle@bcp.com', '', '', 'Financial', 'Budget Manager', 'Bestlink College of the Philippines', '', 0, '2023-02-12 14:33:42', '', 0),
(123456919, 'financial', 'Devin\r\n\r\n', 'MacGettigen', '', 'Female', 'dmacgettigen@bcp.com', '', '', 'Financial', 'Budget Assistant ', '', '', 0, '2023-02-12 14:33:42', '', 0),
(123456920, 'financial', 'Vikky\r\n\r\n', 'Byrd', '', 'Male', 'vbyrdb@bcp.com', '', '', 'Financial', 'Disbursement/Reimbursement Manager ', 'Bestlink College of the Philippines', '', 0, '2023-02-12 14:33:42', '', 0),
(123456921, 'financial', 'Cody\r\n\r\n', 'Eales', '', 'Male', 'cealesd@bcp.com', '', '', 'Financial', 'Disbursement/Reimbursement Assistant', 'Bestlink College of the Philippines', '', 0, '2023-02-12 14:33:42', '', 0),
(123456926, '123', 'Dexie', 'Diaz', '', 'Female', 'staffmis@bcp.com', '', 'Quezon City', 'Management Information System', 'Staff', '', 0x706e67747265652d7265642d6769726c2d776974682d686169727374796c652d69636f6e2d666c61742d7374796c652d706e672d696d6167655f313931373236372e6a7067, 0, '2023-02-20 19:03:19', '3', 0),
(123456931, 'wm123', 'Michael', 'Samson', '', 'Male', 'ms@bcp.com', '', '', 'Logistic Management', 'Warehouse Manager', 'Bestlink College of the Philippines', '', 0, '2023-02-22 15:37:34', '', 0),
(123456933, 'fmsd123', 'Franz', 'Smith', '', 'Male', 'franz@bcp.com', '', '', 'Faculty Management', 'Dean', 'Bestlink College of the Philippines', '', 0, '2023-02-22 15:50:06', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registrar_studentlist`
--

CREATE TABLE `registrar_studentlist` (
  `Student_ID` int(8) NOT NULL,
  `Lastname` varchar(15) NOT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Middlename` varchar(25) NOT NULL,
  `Suffix` varchar(8) DEFAULT NULL,
  `Email` varchar(75) DEFAULT NULL,
  `Gender` text NOT NULL,
  `Age` int(3) NOT NULL,
  `Birthday` date NOT NULL,
  `Course` varchar(25) NOT NULL,
  `Major` varchar(30) DEFAULT NULL,
  `Civil Status` text NOT NULL,
  `Citizenship` text NOT NULL,
  `Address_No` varchar(120) NOT NULL,
  `Barangay` varchar(12) NOT NULL,
  `Municipality` varchar(30) NOT NULL,
  `Contact_No` bigint(11) DEFAULT NULL,
  `Guardian` varchar(50) NOT NULL,
  `Guardian_Contact` bigint(11) NOT NULL,
  `Guardian_Occu` varchar(25) NOT NULL,
  `Last_School` varchar(65) NOT NULL,
  `Year_Start` int(5) NOT NULL,
  `Year_End` int(5) NOT NULL,
  `School_Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrar_studentlist`
--

INSERT INTO `registrar_studentlist` (`Student_ID`, `Lastname`, `Firstname`, `Middlename`, `Suffix`, `Email`, `Gender`, `Age`, `Birthday`, `Course`, `Major`, `Civil Status`, `Citizenship`, `Address_No`, `Barangay`, `Municipality`, `Contact_No`, `Guardian`, `Guardian_Contact`, `Guardian_Occu`, `Last_School`, `Year_Start`, `Year_End`, `School_Type`) VALUES
(19018110, 'Dela Cruz', 'Kenneth', 'Gracia', NULL, 'KennethDelaCruz01@gmail.com', 'Male', 22, '2001-02-06', 'BSIT', 'IM', 'Single', 'Filipino', 'Blk 15, Lot2 Santol St. ', '12', 'Quezon City', 9635478951, 'Arnel Dela Cruz', 9873215478, 'Construction Worker', 'Our Lady of Fatima University', 2018, 2019, 'Private'),
(19018111, 'Villario', 'John Harold', 'Montalban', NULL, 'JohnHarold@gmail.com', 'Male', 20, '2003-02-01', 'BSIT', 'IM', 'Single', 'Filipino', 'Blk 12, Lot 3 Yellow Bell', '172', 'Caloocan City', 9265478412, 'Jim Villario', 9235147285, 'Mechanic', 'Bagong Silang High School', 2018, 2019, 'Public'),
(19018112, 'Nattan', 'Rhea', 'Aquino', NULL, 'RheaNattan@gmail.com', 'Female', 20, '2003-01-16', 'BSIT', 'IM', 'Single', 'Filipino', 'Blk 8, Lot 2 Santa Maria St.', '4', 'Valenzuela City', 9213682547, 'Maria Nattan', 9356228751, 'House Wife', 'Bestlink College of the Philippines', 2018, 2019, 'Private');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ems_event`
--
ALTER TABLE `ems_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mis_activity_logs`
--
ALTER TABLE `mis_activity_logs`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `mis_categorize_inq`
--
ALTER TABLE `mis_categorize_inq`
  ADD PRIMARY KEY (`inq_num`);

--
-- Indexes for table `mis_chatbot`
--
ALTER TABLE `mis_chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mis_concern`
--
ALTER TABLE `mis_concern`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mis_grades`
--
ALTER TABLE `mis_grades`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `mis_man_inc_rep`
--
ALTER TABLE `mis_man_inc_rep`
  ADD PRIMARY KEY (`rep_id`);

--
-- Indexes for table `mis_paidbooks`
--
ALTER TABLE `mis_paidbooks`
  ADD PRIMARY KEY (`stud_num`);

--
-- Indexes for table `mis_paiduniform`
--
ALTER TABLE `mis_paiduniform`
  ADD PRIMARY KEY (`stud_num`);

--
-- Indexes for table `mis_payment_method`
--
ALTER TABLE `mis_payment_method`
  ADD PRIMARY KEY (`OR_number`);

--
-- Indexes for table `mis_pms`
--
ALTER TABLE `mis_pms`
  ADD PRIMARY KEY (`stud_num`);

--
-- Indexes for table `mis_student_users`
--
ALTER TABLE `mis_student_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `mis_stud_info`
--
ALTER TABLE `mis_stud_info`
  ADD PRIMARY KEY (`stud_num`);

--
-- Indexes for table `mis_table_course`
--
ALTER TABLE `mis_table_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mis_teacher_information`
--
ALTER TABLE `mis_teacher_information`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mis_type_req`
--
ALTER TABLE `mis_type_req`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `mis_usermanagement`
--
ALTER TABLE `mis_usermanagement`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registrar_studentlist`
--
ALTER TABLE `registrar_studentlist`
  ADD PRIMARY KEY (`Student_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mis_activity_logs`
--
ALTER TABLE `mis_activity_logs`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `mis_categorize_inq`
--
ALTER TABLE `mis_categorize_inq`
  MODIFY `inq_num` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mis_chatbot`
--
ALTER TABLE `mis_chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mis_concern`
--
ALTER TABLE `mis_concern`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213321234;

--
-- AUTO_INCREMENT for table `mis_grades`
--
ALTER TABLE `mis_grades`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1912919;

--
-- AUTO_INCREMENT for table `mis_man_inc_rep`
--
ALTER TABLE `mis_man_inc_rep`
  MODIFY `rep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mis_payment_method`
--
ALTER TABLE `mis_payment_method`
  MODIFY `OR_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17000022;

--
-- AUTO_INCREMENT for table `mis_pms`
--
ALTER TABLE `mis_pms`
  MODIFY `stud_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19123457;

--
-- AUTO_INCREMENT for table `mis_student_users`
--
ALTER TABLE `mis_student_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mis_stud_info`
--
ALTER TABLE `mis_stud_info`
  MODIFY `stud_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19010567;

--
-- AUTO_INCREMENT for table `mis_teacher_information`
--
ALTER TABLE `mis_teacher_information`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2023003;

--
-- AUTO_INCREMENT for table `mis_type_req`
--
ALTER TABLE `mis_type_req`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mis_usermanagement`
--
ALTER TABLE `mis_usermanagement`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456934;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
