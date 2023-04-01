-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 06:22 PM
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
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, '/help', '\"Help\" Options:<br>\r\nFollow and type the correct command to remove some error\'s encountered! <br><br>\r\n\r\n► \"/clear\" - To refresh page.<br>\r\n► \"/dep\" - To view all department.<br>\r\n► \"/number\" - To select items.<br>\r\n► \"/back\" - To go back to the previous options.<br>\r\n► \"/exit\" - To reset options.<b'),
(2, '/dep', 'Enter command:<br>\r\n\"/dep1-5\" <br><br>\r\n\r\n<a class=\"rep\" href=\"#\"> [dep1] LMS </a> <br>\r\n<a class=\"rep\" href=\"#\"> [dep2] Student Portal </a> <br>\r\n<a class=\"rep\" href=\"#\"> [dep3] MIS </a> <br>\r\n<a class=\"rep\" href=\"#\"> [dep4] Clinic </a> <br>\r\n<a class=\"rep\" href=\"#\"> [dep5] Other\'s </a> <br>'),
(3, '/1', 'DEP: ► LMS\r\n\r\nEnter command:<br>\r\n\"/lms1-4\" <br><br>\r\n\r\n<a class=\"rep\" href=\"#\"> [lms1] Can\'t Login Account! </a> <br>\r\n<a class=\"rep\" href=\"#\"> [lms2] No Subject </a> <br>\r\n<a class=\"rep\" href=\"#\"> [lms3] Wrong Subject </a> <br>\r\n<a class=\"rep\" href=\"#\"> [lms4] Examination Grant </a> <br>'),
(4, '/clear', '<a href=\"users.php\"> Refresh </a>'),
(5, '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(2, 19012918, 'Harold', 'Niegos', '19012918@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
