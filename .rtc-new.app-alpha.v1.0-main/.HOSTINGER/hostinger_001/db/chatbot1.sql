-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 01:34 PM
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
(1, '/dep', 'Enter command:<br>\r\n\"/number\" <br><br>\r\n\r\n<a class=\"dep1\" href=\"#\"> [1] LMS </a> <br>\r\n<a class=\"dep1\" href=\"#\"> [2] Student Portal </a> <br>\r\n<a class=\"dep1\" href=\"#\"> [3] MIS </a> <br>\r\n<a class=\"dep1\" href=\"#\"> [4] Other\'s </a> <br>'),
(2, '/1', 'Enter command:<br>\r\n\"/number\" <br><br>\r\n\r\n<a class=\"dep1\" href=\"#\"> [1] Grades </a> <br>\r\n<a class=\"dep1\" href=\"#\"> [2] Documents </a> <br>\r\n<a class=\"dep1\" href=\"#\"> [3] Teachers </a> <br>\r\n<a class=\"dep1\" href=\"#\"> [4] Miscellaneous </a> <br>\r\n<a class=\"dep1\" href=\"#\"> [5] Back. </a> <br>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
