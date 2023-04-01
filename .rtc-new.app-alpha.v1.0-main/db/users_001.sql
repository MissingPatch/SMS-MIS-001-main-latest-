-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2023 at 07:32 AM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u476821515_mis_database`
--

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
(1, 19012918, 'Harold', 'Niegos', '19012918@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Offline now'),
(2, 19012918, 'Hans Airon', 'Bangay', '127.0.0.1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Offline now'),
(3, 19012918, 'Akira Mae', 'Bucana', '127.0.0.1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Offline now'),
(4, 19012918, 'Ela May', 'Alfonso', '127.0.0.1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Offline now'),
(5, 19010581, 'Vincent', 'Clarin', '19010581@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Active now'),
(6, 19012918, 'Ricky', 'Bacar', '19011498@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Offline now'),
(7, 19012918, 'Vincent', 'Furigay', '120.0.0.1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Offline now'),
(8, 19012918, 'Michael', 'Bercasio', '120.0.0.1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Offline now'),
(9, 19012918, 'Emman', 'Benosa', '120.0.0.1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user19012918.png', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
