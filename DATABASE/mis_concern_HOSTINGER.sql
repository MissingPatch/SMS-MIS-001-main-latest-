-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2023 at 05:41 PM
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
(4, 'refresh', '<a href=\"users.php\"> Click: Refresh Content </a>'),
(5, 'dep1', 'DEP: ► LMS Enter command:<br>\n\"lms1-4\" <br><br>\n\n<a>Select Options:</a><br><br>\n<a class=\"rep\" href=\"#\"> [lms1] Can\'t Login Account! </a> <br>\n<a class=\"rep\" href=\"#\"> [lms2] No Subject </a> <br> \n<a class=\"rep\" href=\"#\"> [lms3] Wrong Subject </a> <br>\n<a class=\"rep\" href=\"#\"> [lms4] Examination Grant </a>\n<a class=\"rep\" href=\"#\"> [lms5] Other\'s </a>\n'),
(7, 'dep2', 'DEP: ► Student Portal Enter command:<br> \n\"sp1-4\" <br><br>\n\n<a>Select Options:</a><br><br>\n<a class=\"rep\" href=\"#\"> [sp1] No Grades </a> <br> \n<a class=\"rep\" href=\"#\"> [sp2] Update balance </a> <br> \n<a class=\"rep\" href=\"#\"> [sp3] Can\'t Login </a> <br> \n<a class=\"rep\" href=\"#\"> [sp4] Other\'s </a> <br>'),
(8, 'dep3', 'DEP: ► MIS Enter command:<br> \n\"mis1-4\" <br><br>\n\n<a>Select Options:</a><br><br>\n<a class=\"rep\" href=\"#\"> [mis1] Wrong Payment </a> <br> \n<a class=\"rep\" href=\"#\"> [mis2] Void Payment Receipt </a> <br> \n<a class=\"rep\" href=\"#\"> [mis3] Payment Method </a> <br> \n<a class=\"rep\" href=\"#\"> [mis4] Request Document </a> <br>\n<a class=\"rep\" href=\"#\"> [mis5] Other\'s </a> <br>'),
(9, 'dep4', 'DEP: ► Clinic Enter command:<br> \r\n\"cli1-4\" <br><br>\r\n\r\n<a>Select Options:</a><br><br>\r\n<a class=\"rep\" href=\"#\"> [cli1] Medical </a> <br>\r\n<a class=\"rep\" href=\"#\"> [cli2] Check up </a> <br> \r\n<a class=\"rep\" href=\"#\"> [cli3] Medical Status </a> <br> \r\n<a class=\"rep\" href=\"#\"> [cli4] Other\'s </a> <br>'),
(10, 'lms1', 'Good Day! BCP\'s student Thankyou for your concern. kindly visit the AA Office MV campus regarding to this concern.  \n<br><br>(Can\'t Login LMS Account)\n<br><br>The office is open from Monday to Friday 8am to 4pm. <br><br> Thankyou!'),
(11, 'lms2', 'Good Day! BCP\'s student Thankyou for your concern. kindly visit the AA Office MV campus regarding to this concern.  \n<br><br>(No Subject) to tag your subject.\n<br><br>The office is open from Monday to Friday 8am to 4pm. <br><br> Thankyou!'),
(12, 'lms3', 'Good Day! BCP\'s student Thankyou for your concern. kindly visit the AA Office MV campus regarding to this concern.  \n<br><br>(Wrong Subject) to un tag the subject.\n<br><br>The office is open from Monday to Friday 8am to 4pm. <br><br> Thankyou!'),
(13, 'lms4', 'Good Day! BCP\'s student Thankyou for your concern to open or grant your examination you need to pay or down your payment for prelim, midterm, or finals.\n<br><br>Thankyou!'),
(14, 'lms5', 'Unavailable Data'),
(15, 'sp1', 'Good Day! BCP\'s student Thankyou for your concern. \n<br><br>First you need to ask your subject teacher for this concern to modify your grade and kindly visit the Registrar Office Main campus regarding to this concern.  \n<br><br>(No Grades)\n<br><br>The office is open from Monday to Friday 8am to 4pm. <br><br> Thankyou!'),
(16, 'sp2', 'Good Day! BCP\'s student Thankyou for your concern. \n<br><br>To review your total balance kindly visit the BIS Office Main campus regarding to this concern.  \n<br><br>(No Grades)\n<br><br>The office is open from Monday to Friday 8am to 4pm. <br><br> Thankyou!'),
(17, 'sp3', 'Good Day! BCP\'s student Thankyou for your concern. kindly visit the MIS Office Main campus regarding to this concern.  \n<br><br>(Can\'t Login Portal Account)\n<br><br>The office is open from Monday to Friday 8am to 4pm. <br><br> Thankyou!'),
(18, 'sp4', 'Unavailable Data'),
(19, 'mis1', 'Good Day! BCP\'s student Thankyou for your concern. kindly visit the MIS Office main campus regarding to this concern. \n<br><br>(Wrong Payment)\n<br><br>The office is open from Monday to Friday 8am to 4pm.\n<br><br>\nThankyou!'),
(20, 'mis2', 'Good Day! BCP\'s student Thankyou for your concern. kindly visit the MIS Office main campus regarding to this concern. \n<br><br>(Void Payment Receipt)\n<br><br>The office is open from Monday to Friday 8am to 4pm.\n<br><br>\nThankyou!'),
(21, 'mis3', 'Good Day! BCP\'s student Thankyou for your concern.\n<br><br>They have different method of paying your bill.<br><br>\n<a href=\"#\">1. BCP Cashier</a><br>\n<a href=\"https://play.google.com/store/apps/details?id=com.aub.hellomoney&hl=en&gl=US\" target=\"main\">2. Hello Money App</a><br>\n<a href=\"#\">3. AUB</a>\n<br><br>\nThankyou!'),
(22, 'mis4', 'Good Day! BCP\'s student Thankyou for your concern. if you want to request a document you need to follow the steps below:\n<br><br>First Step 1: Pay for document you want to request. Example (SOA, COG, and Evaluations)\n<br><br>Second Step 2: Give the receipt in the registrar Office and wait for the one week process of your requested document. \n<br><br>The Registrar office is open from Monday to Friday 8am to 4pm.\n<br><br>\nThankyou!'),
(23, 'mis5', 'Unavailable Data'),
(24, 'cli1', 'Good Day! BCP\'s student Thankyou for your concern. kindly visit the Clinic Office at Main Campus or MV campus for your medical.\n<br><br>(Appoint your Medical)\n<br><br>The office is open from Monday to Friday 8am to 4pm.\n<br><br>\nThankyou!'),
(25, 'cli2', 'Good Day! BCP\'s student Thankyou for your concern. kindly visit the Clinic Office at Main Campus or MV campus for checkup.\n<br><br>(Daily Checkup)\n<br><br>The office is open from Monday to Friday 8am to 4pm.\n<br><br>\nThankyou!'),
(26, 'cli3', 'Good Day! BCP\'s student Thankyou for your concern. kindly visit the Clinic Office at Main Campus or MV campus for your medical status.\n<br><br>(Medical Status)\n<br><br>The office is open from Monday to Friday 8am to 4pm.\n<br><br>\nThankyou!'),
(27, 'cli4', 'Unavailable Data');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mis_concern`
--
ALTER TABLE `mis_concern`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mis_concern`
--
ALTER TABLE `mis_concern`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213321235;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
