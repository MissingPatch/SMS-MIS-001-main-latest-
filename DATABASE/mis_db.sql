-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 06:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mis_database`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(182, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 10:10:03'),
(183, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 10:39:01'),
(184, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 10:43:26'),
(185, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 10:54:32'),
(186, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:07:43'),
(187, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:07:43'),
(188, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:07:44'),
(189, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:07:50'),
(190, 123456822, 'garados.bcp@mail.com', 'Upload/Change profile picture', '127.0.0.1', '2023-02-20 11:07:50'),
(191, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:07:56'),
(192, 123456822, 'garados.bcp@mail.com', 'Upload/Change profile picture', '127.0.0.1', '2023-02-20 11:07:56'),
(193, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:07:59'),
(194, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:08:00'),
(195, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:08:05'),
(196, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:08:07'),
(197, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:08:08'),
(198, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:08:08'),
(199, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:08:11'),
(200, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:08:12'),
(201, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:08:15'),
(202, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:08:16'),
(203, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:08:16'),
(204, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:08:21'),
(205, 123456822, 'garados.bcp@mail.com', 'Upload/Change profile picture', '127.0.0.1', '2023-02-20 11:08:21'),
(206, 123456822, 'garados.bcp@mail.com', 'Upload/Change profile picture', '127.0.0.1', '2023-02-20 11:08:26'),
(207, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:08:26'),
(208, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:08:28'),
(209, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:08:28'),
(210, 123456822, 'garados.bcp@mail.com', 'Upload/Change profile picture', '127.0.0.1', '2023-02-20 11:08:33'),
(211, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:08:33'),
(212, 123456822, 'garados.bcp@mail.com', 'Upload/Change profile picture', '127.0.0.1', '2023-02-20 11:08:37'),
(213, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:08:37'),
(214, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:09:26'),
(215, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:09:40'),
(216, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:09:51'),
(217, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:10:15'),
(218, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:10:44'),
(219, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:10:45'),
(220, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:11:05'),
(221, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:11:05'),
(222, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:12:13'),
(223, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:12:14'),
(224, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:12:15'),
(225, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:12:16'),
(226, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:12:17'),
(227, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:12:50'),
(228, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:13:13'),
(229, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:18:41'),
(230, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:18:41'),
(231, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 11:31:00'),
(232, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-20 11:31:02'),
(233, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-20 11:31:05'),
(234, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-20 11:31:40'),
(235, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-20 11:35:38'),
(236, 123456926, 'staffmis@bcp.com', 'login', '127.0.0.1', '2023-02-20 11:35:50'),
(237, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-20 11:36:44'),
(238, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-20 11:36:47'),
(239, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 12:47:47'),
(240, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-20 13:08:59'),
(241, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-20 13:09:05'),
(242, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 13:09:15'),
(243, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 13:20:04'),
(244, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 13:21:04'),
(245, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 13:21:40'),
(246, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 13:21:41'),
(247, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 13:21:42'),
(248, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 13:26:39'),
(249, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 13:45:45'),
(250, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 13:57:46'),
(251, 123456822, 'garados.bcp@mail.com', 'Viewed employee profile with ID 123456822', '127.0.0.1', '2023-02-20 14:16:49'),
(252, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-20 15:02:30'),
(253, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-20 15:19:52'),
(254, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-20 15:45:48'),
(255, 123456822, 'garados.bcp@mail.com', 'login', '127.0.0.1', '2023-02-20 15:50:33'),
(256, 123456822, 'garados.bcp@mail.com', 'logout', '127.0.0.1', '2023-02-20 16:03:13'),
(257, 123456926, 'staffmis@bcp.com', 'logout', '127.0.0.1', '2023-02-20 19:03:19'),
(258, 123456911, 'johnmark@mail.com', 'login', '127.0.0.1', '2023-02-20 19:03:49'),
(259, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-20 19:04:16'),
(260, 123456911, 'johnmark@mail.com', 'logout', '127.0.0.1', '2023-02-20 20:26:14'),
(261, 123456822, 'hans.bangay123@gmail.com', 'login', '127.0.0.1', '2023-02-20 22:06:28'),
(262, 123456822, 'hans.bangay123@gmail.com', 'logout', '127.0.0.1', '2023-02-20 22:07:35'),
(263, 123456926, 'staffmis@bcp.com', 'login', '127.0.0.1', '2023-02-20 22:08:53'),
(264, 123456822, 'hans.bangay123@gmail.com', 'login', '127.0.0.1', '2023-02-20 22:10:06'),
(265, 123456926, 'staffmis@bcp.com', 'logout', '127.0.0.1', '2023-02-20 22:10:37'),
(266, 123456822, 'hans.bangay123@gmail.com', 'logout', '127.0.0.1', '2023-02-20 22:10:54'),
(267, 123456822, 'hans.bangay123@gmail.com', 'login', '127.0.0.1', '2023-02-20 22:41:28'),
(268, 123456822, 'hans.bangay123@gmail.com', 'logout', '127.0.0.1', '2023-02-20 22:41:31'),
(269, 123456822, 'hans.bangay123@gmail.com', 'login', '127.0.0.1', '2023-02-20 23:03:12'),
(270, 123456822, 'hans.bangay123@gmail.com', 'logout', '127.0.0.1', '2023-02-20 23:03:18'),
(271, 123456822, 'hans.bangay123@gmail.com', 'login', '127.0.0.1', '2023-02-20 23:11:18'),
(272, 123456822, 'hans.bangay123@gmail.com', 'logout', '127.0.0.1', '2023-02-20 23:11:33'),
(273, 123456911, 'johnmark@mail.com', 'login', '127.0.0.1', '2023-02-21 13:06:44'),
(274, 123456911, 'johnmark@mail.com', 'login', '127.0.0.1', '2023-02-21 13:06:51'),
(275, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-21 13:06:56'),
(276, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-21 13:27:08'),
(277, 123456911, 'johnmark@mail.com', 'Upload/Change profile picture', '127.0.0.1', '2023-02-21 13:37:26'),
(278, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-21 13:37:26'),
(279, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-21 13:38:29'),
(280, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-21 13:46:44'),
(281, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-21 13:47:16'),
(282, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-21 13:47:40'),
(283, 123456911, 'johnmark@mail.com', 'login', '127.0.0.1', '2023-02-22 00:59:31'),
(284, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456856', '127.0.0.1', '2023-02-22 15:38:14'),
(285, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456856', '127.0.0.1', '2023-02-22 15:39:34'),
(286, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456856', '127.0.0.1', '2023-02-22 15:39:39'),
(287, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456867', '127.0.0.1', '2023-02-22 15:53:09'),
(288, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456867', '127.0.0.1', '2023-02-22 16:04:04'),
(289, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-22 16:23:00'),
(290, 123456911, 'johnmark@mail.com', 'Viewed employee profile with ID 123456911', '127.0.0.1', '2023-02-22 17:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `mis_categorize_inq`
--

CREATE TABLE `mis_categorize_inq` (
  `inq_num` int(100) NOT NULL,
  `inq_type` varchar(250) NOT NULL,
  `department` varchar(100) NOT NULL,
  `file_name` blob NOT NULL,
  `date_req` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mis_categorize_inq`
--

INSERT INTO `mis_categorize_inq` (`inq_num`, `inq_type`, `department`, `file_name`, `date_req`) VALUES
(1, 'Request list of paid student in enrollment', 'Enrollment', 0x656d706c6f796565732e786c73, '2023-02-21 18:36:00'),
(2, 'Request list of paid student in research', 'Crad', '', '2023-02-21 18:36:00'),
(3, 'List of grants student to take exam', 'LMS', '', '2023-02-21 18:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `mis_chatbot`
--

CREATE TABLE `mis_chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `con_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `stud_num` varchar(100) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mis_concern`
--

INSERT INTO `mis_concern` (`con_id`, `fname`, `lname`, `stud_num`, `teacher_id`, `description`, `date`, `status`) VALUES
(2000, 'Jose', 'Moraga', '19010557', '', 'LMS not working', '2023-02-10 16:32:09', 'pending'),
(2001, 'Daryl', 'Estolonio', '19010552', '', 'Can\'t log in', '2023-02-12 04:22:51', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `mis_man_inc_rep`
--

CREATE TABLE `mis_man_inc_rep` (
  `rep_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mis_man_inc_rep`
--

INSERT INTO `mis_man_inc_rep` (`rep_id`, `type`, `description`, `department`, `date`, `status`) VALUES
(1, 'Reports', 'Student Enrolled', 'Enrollment', '2023-02-15 13:53:42', 'Pending');

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
  `void_reason` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mis_payment_method`
--

INSERT INTO `mis_payment_method` (`OR_number`, `student_num`, `name`, `payment_type`, `date`, `bal`, `payment_desc`, `amount`, `status`, `void_reason`) VALUES
(1, '2023000', 'jose', 'AUB', '2023-02-18 16:02:40', 2487, 'Miscellaneous Fee', 2488, 'none', ''),
(2, '2023001', 'Daryl Estolonio', 'BCP Cashier', '2023-02-18 16:02:40', 2487, 'Miscellaneous Fee', 2488, 'none', ''),
(3, '2023002', 'Gemerken Zapanta', 'Hello Money', '2023-02-18 16:02:40', 1000, 'Miscellaneous Fee', 3975, 'none', ''),
(4, '2023003', 'Victor Higoy', 'Hello Money', '2023-02-18 16:02:40', 0, 'Miscellaneous Fee', 4975, 'none', ''),
(5, '2023004', 'Christian Capitle', 'Hello Money', '2023-02-18 16:02:40', 2000, 'Miscellaneous Fee', 2975, 'none', '');

-- --------------------------------------------------------

--
-- Table structure for table `mis_pms`
--

CREATE TABLE `mis_pms` (
  `stud_num` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `payment_amount` int(100) NOT NULL,
  `balance` int(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `invoice_num` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mis_pms`
--

INSERT INTO `mis_pms` (`stud_num`, `fname`, `lname`, `payment_amount`, `balance`, `payment_type`, `payment_method`, `invoice_num`, `status`, `date`) VALUES
(2023100, 'Victor', 'Higoy', 4975, 0, 'Miscellaneous Fee ', 'BCP Cashier', 20230213, 'Paid', '2023-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `mis_stud_info`
--

CREATE TABLE `mis_stud_info` (
  `stud_num` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `suffix` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobilenum` varchar(100) NOT NULL,
  `ylvl` varchar(100) NOT NULL,
  `bal` int(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `student_status` varchar(100) NOT NULL,
  `img_name` blob NOT NULL,
  `company` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mis_stud_info`
--

INSERT INTO `mis_stud_info` (`stud_num`, `course`, `fname`, `lname`, `sex`, `suffix`, `email`, `mobilenum`, `ylvl`, `bal`, `role`, `student_status`, `img_name`, `company`) VALUES
(19010551, 'BS Information Technology', 'Fritz', 'Segun', 'Male', '', 'Fritzegun@gmail.com', '', '4th Year', 4975, 'Student', 'Regular Student', '', 'Bestlink College of the Philippines'),
(19010552, 'Bachelor of Science and Information Technology', 'Christian ', 'Estomaguio', 'Male', '', 'binoy123@gmail.com', 'none', '4th Year', 2000, 'Student', 'In-Active', '', 'Bestlink College of the Philippines'),
(19010557, 'BS Computer Engineering', 'Ellen ', 'Adarna', 'Female', '', 'ellen@bcp.com', '09374857343', '4th Year', 0, 'Student', 'Transferee', 0x3233363833312e706e67, 'Bestlink College of the Philippines'),
(19010558, '', '', '', '', '', '', '', '', 0, 'Student', 'irregular', '', 'Bestlink College of the Philippines'),
(19010559, '', '', '', '', '', '', '', '', 0, 'Student', '', '', 'Bestlink College of the Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `mis_teacher_information`
--

CREATE TABLE `mis_teacher_information` (
  `ID` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `class_schedule` varchar(250) NOT NULL,
  `room_assignment` varchar(250) NOT NULL,
  `employment_status` varchar(250) NOT NULL,
  `hire_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `salary` varchar(250) NOT NULL,
  `education_level` varchar(250) NOT NULL,
  `certification` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mis_teacher_information`
--

INSERT INTO `mis_teacher_information` (`ID`, `name`, `email`, `phone_number`, `department`, `subject`, `class_schedule`, `room_assignment`, `employment_status`, `hire_date`, `salary`, `education_level`, `certification`) VALUES
(2023000, 'Elle Cruz', 'ellecruz@gmail.com', '09384957682', 'CSS', 'ITSP 4', 'none', 'TBA', 'none', '2023-02-15 14:15:58', 'none', 'College/University Faculty ', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `mis_type_req`
--

CREATE TABLE `mis_type_req` (
  `req_id` int(11) NOT NULL,
  `req_type` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `response_format` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
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
  `pass` varchar(50) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `suffix` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobilenum` varchar(100) NOT NULL,
  `home_address` varchar(500) NOT NULL,
  `department` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `company` varchar(100) NOT NULL,
  `img_name` blob NOT NULL,
  `otp` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `access_level` varchar(100) NOT NULL,
  `is_logged_in` tinyint(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mis_usermanagement`
--

INSERT INTO `mis_usermanagement` (`ID`, `pass`, `fname`, `lname`, `suffix`, `sex`, `email`, `mobilenum`, `home_address`, `department`, `role`, `company`, `img_name`, `otp`, `date_added`, `access_level`, `is_logged_in`) VALUES
(123456911, 'admin', 'John Mark ', 'Bautista', '', 'Male', 'johnmark@mail.com', '09237594381', 'Street:  304 Chateau Verde Condominium, E Rodriguez Avenue, Valle Verde I  City:   Pasig City  State/province/area:    Metro Manila  Phone number  +87(2)6712342/+87(2)6710287  Country calling code  +63  Country  Philippines', 'Management Information System', 'Admin', 'Bestlink College of the Philippines', 0x3233363833312e706e67, 0, '2023-02-21 13:37:26', '2', 0),
(123456822, '123', 'Vincent', 'Garados', '', 'Male', 'hans.bangay123@gmail.com', '09374857461', 'Quezon City', 'Management Information System', 'Super Admin', 'Bestlink College of the Philippines', 0x3233363833312e706e67, 0, '2023-02-20 23:11:33', '1', 0),
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
(123456929, '1', '1', '1', '', '', 'example@123', '', '', 'Enrollment', 'Super Admin', '', '', 0, '2023-02-20 06:04:27', '', 0),
(123456931, 'wm123', 'Michael', 'Samson', '', 'Male', 'ms@bcp.com', '', '', 'Logistic Management', 'Warehouse Manager', 'Bestlink College of the Philippines', '', 0, '2023-02-22 15:37:34', '', 0),
(123456930, '', '', '', '', '', '', '', '', '', '', '', '', 798526, '2023-02-20 18:42:17', '', 0),
(123456933, 'fmsd123', 'Franz', 'Smith', '', 'Male', 'franz@bcp.com', '', '', 'Faculty Management', 'Dean', 'Bestlink College of the Philippines', '', 0, '2023-02-22 15:50:06', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mis_users`
--

CREATE TABLE `mis_users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mis_users`
--

INSERT INTO `mis_users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 19012918, 'Harold', 'Niegos', '19012918@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Active now'),
(2, 19012918, 'Hans Airon', 'Bangay', '127.0.0.1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Active now'),
(3, 19012918, 'Akira Mae', 'Bucana', '127.0.0.1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Active now'),
(4, 19012918, 'Ela May', 'Alfonso', '127.0.0.1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Active now'),
(5, 19010581, 'Vincent', 'Clarin', '19010581@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Active now'),
(6, 19012918, 'Ricky', 'Bacar', '19011498@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Active now'),
(7, 19012918, 'Vincent', 'Furigay', '120.0.0.1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Active now'),
(8, 19012918, 'Michael', 'Bercasio', '120.0.0.1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Active now'),
(9, 19012918, 'Emman', 'Benosa', '120.0.0.1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Active now');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `mis_man_inc_rep`
--
ALTER TABLE `mis_man_inc_rep`
  ADD PRIMARY KEY (`rep_id`);

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
-- Indexes for table `mis_stud_info`
--
ALTER TABLE `mis_stud_info`
  ADD PRIMARY KEY (`stud_num`);

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
-- Indexes for table `mis_users`
--
ALTER TABLE `mis_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mis_activity_logs`
--
ALTER TABLE `mis_activity_logs`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

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
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2002;

--
-- AUTO_INCREMENT for table `mis_man_inc_rep`
--
ALTER TABLE `mis_man_inc_rep`
  MODIFY `rep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mis_payment_method`
--
ALTER TABLE `mis_payment_method`
  MODIFY `OR_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mis_pms`
--
ALTER TABLE `mis_pms`
  MODIFY `stud_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2023101;

--
-- AUTO_INCREMENT for table `mis_stud_info`
--
ALTER TABLE `mis_stud_info`
  MODIFY `stud_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19010560;

--
-- AUTO_INCREMENT for table `mis_teacher_information`
--
ALTER TABLE `mis_teacher_information`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2023001;

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

--
-- AUTO_INCREMENT for table `mis_users`
--
ALTER TABLE `mis_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
