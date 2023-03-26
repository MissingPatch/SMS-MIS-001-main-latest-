-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 01:33 PM
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
-- Database: `smsregistrar-college`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrar_announcement`
--

CREATE TABLE `registrar_announcement` (
  `Message_No` int(11) NOT NULL,
  `Account_ID` varchar(12) NOT NULL,
  `User_Type` varchar(25) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Message` varchar(800) NOT NULL,
  `Date_Posted` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrar_announcement`
--

INSERT INTO `registrar_announcement` (`Message_No`, `Account_ID`, `User_Type`, `Title`, `Message`, `Date_Posted`) VALUES
(1, '12345601', 'Chief Registrar', 'Change Section', 'Student profile which are not updated with course and year level may experience some inconsistent subject loading. Please visit Ascendens Asia office to update your profile and bring the following: Previous Certificate of Registration For course shifter, approved document from registrar office is required.', '2023-01-28'),
(2, '12345601', 'Chief Registrar', 'Enrollment', 'Pre-enrollment form is downloadable in BCP LMS. If you have questions regarding your balances, visit BIS department office. If you can not download your pre-enrollment form, visit Ascendens Asia office. Student\'s intent to swap sections are not allowed.', '2023-01-28'),
(3, '12345601', 'Chief Registrar', '2nd Semester', '2nd Semester Academic Year 2022 - 2023 officially starts on 06 February 2023. Students LMS module for week 1 can be open through SMS Module Grant.\nPlease be reminded that opening of modules are with conditional dates. Always take note of the the school’s calendar of activities.', '2023-02-08'),
(6, '12345601', 'Chief Registrar', 'Graduation', 'Record Officers will accept their forms until March 3, 2023.', '2023-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `registrar_curriculum`
--

CREATE TABLE `registrar_curriculum` (
  `Subject_Code` varchar(25) NOT NULL,
  `Subject_Title` varchar(55) NOT NULL,
  `Lecture` int(3) DEFAULT NULL,
  `Laboratory` int(3) DEFAULT NULL,
  `Units` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrar_deactivatedlist`
--

CREATE TABLE `registrar_deactivatedlist` (
  `Student_ID` int(15) NOT NULL,
  `Lastname` varchar(50) DEFAULT NULL,
  `Firstname` varchar(50) DEFAULT NULL,
  `Middlename` varchar(50) DEFAULT NULL,
  `Course` varchar(50) DEFAULT NULL,
  `Major` varchar(50) DEFAULT NULL,
  `Department` varchar(80) DEFAULT NULL,
  `Year_Level` varchar(50) DEFAULT NULL,
  `Section` varchar(10) DEFAULT NULL,
  `Academic_Year` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrar_deactivatedlist`
--

INSERT INTO `registrar_deactivatedlist` (`Student_ID`, `Lastname`, `Firstname`, `Middlename`, `Course`, `Major`, `Department`, `Year_Level`, `Section`, `Academic_Year`, `Status`) VALUES
(19015447, 'Juntilla', 'Arnel', 'Ewan', 'BSIT', '', 'CCS', '3', '4201', '2022', 'Deactivated');

-- --------------------------------------------------------

--
-- Table structure for table `registrar_document`
--

CREATE TABLE `registrar_document` (
  `Document_ID` varchar(15) NOT NULL,
  `Document_Name` varchar(30) NOT NULL,
  `Price` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrar_document`
--

INSERT INTO `registrar_document` (`Document_ID`, `Document_Name`, `Price`) VALUES
('BCL', 'Barangay Clearance', NULL),
('COG', 'Certification of Graduation', 200),
('COR', 'Certificate of Registration', 50),
('DIPLOMA', 'Diploma', 500),
('EVALUATION', 'Evaluation of Grade', 100),
('F137', 'Form 137', NULL),
('F138', 'Form 138', NULL),
('GMC', 'Good Moral', NULL),
('GRAD FORM', 'Graduation Form', 100),
('GWA', 'General Weighted Average', 200),
('HD', 'Highschool Diploma', 200),
('NSTP CERT', 'NSTP Certificate', 250),
('PIC', 'Picture', NULL),
('PSA', 'PSA', NULL),
('TOR', 'Transcript of Records', 400);

-- --------------------------------------------------------

--
-- Table structure for table `registrar_documentstatus`
--

CREATE TABLE `registrar_documentstatus` (
  `Submit_No` int(11) NOT NULL,
  `Student_ID` int(12) NOT NULL,
  `Document_ID` varchar(12) NOT NULL,
  `Document_Status` varchar(25) NOT NULL,
  `Document_File` longblob DEFAULT NULL,
  `Submitted_Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrar_documentstatus`
--

INSERT INTO `registrar_documentstatus` (`Submit_No`, `Student_ID`, `Document_ID`, `Document_Status`, `Document_File`, `Submitted_Date`) VALUES
(1, 19018110, 'BCL', 'Complete', NULL, '2023-02-13'),
(2, 19018110, 'F137', 'Complete', NULL, '2023-02-13'),
(3, 19018110, 'F138', 'Complete', NULL, '2023-02-13'),
(4, 19018110, 'PSA', 'Complete', NULL, '2023-02-13'),
(5, 19018111, 'F137', 'Complete', NULL, '2023-02-13'),
(6, 19018111, 'PSA', 'Complete', NULL, '2023-02-13'),
(7, 19018112, 'BCL', 'Complete', NULL, '2023-02-13'),
(8, 19018112, 'F137', 'Complete', NULL, '2023-02-13'),
(9, 19018112, 'F138', 'Complete', NULL, '2023-02-13'),
(10, 19018112, 'GMC', 'Complete', NULL, '2023-02-13'),
(11, 19018112, 'PIC', 'Complete', NULL, '2023-02-13'),
(12, 19018112, 'PSA', 'Complete', NULL, '2023-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `registrar_grades`
--

CREATE TABLE `registrar_grades` (
  `Student_ID` int(8) NOT NULL,
  `Subject_Code` varchar(25) NOT NULL,
  `Grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrar_login`
--

CREATE TABLE `registrar_login` (
  `Account_ID` int(12) NOT NULL,
  `Username` varchar(16) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `User_Type` varchar(16) NOT NULL,
  `User_Status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrar_login`
--

INSERT INTO `registrar_login` (`Account_ID`, `Username`, `Password`, `User_Type`, `User_Status`) VALUES
(12345601, 'Rose01', 'Rose', 'Chief Registrar', 'Offline'),
(12345602, 'Greg02', 'Greg', 'Record Officer', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `registrar_registrar`
--

CREATE TABLE `registrar_registrar` (
  `Account_ID` bigint(12) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `MiddleName` varchar(12) DEFAULT NULL,
  `Address` varchar(25) NOT NULL,
  `Contact_Number` bigint(15) DEFAULT NULL,
  `Email_Address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrar_registrar`
--

INSERT INTO `registrar_registrar` (`Account_ID`, `LastName`, `FirstName`, `MiddleName`, `Address`, `Contact_Number`, `Email_Address`) VALUES
(12345601, 'Dela Cruz', 'Rose', 'Legaspi', 'Novaliches Quezon City', 9234591021, 'Rosedelacruz@gmail.com'),
(12345602, 'Angeles', 'Greg', 'Habel', 'Novaliches Quezon City', 9234591022, 'AngelesGreg@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registrar_requestdata`
--

CREATE TABLE `registrar_requestdata` (
  `No` int(250) NOT NULL,
  `Student_ID` int(25) DEFAULT NULL,
  `Request` varchar(150) DEFAULT NULL,
  `Department` varchar(150) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Request_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrar_requestdocument`
--

CREATE TABLE `registrar_requestdocument` (
  `Request_ID` int(15) NOT NULL,
  `Student_ID` int(8) NOT NULL,
  `Document_ID` varchar(15) NOT NULL,
  `Request_Date` date DEFAULT current_timestamp(),
  `Release_Date` date DEFAULT NULL,
  `Request_Status` text DEFAULT NULL,
  `Transaction_No` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrar_requestdocument`
--

INSERT INTO `registrar_requestdocument` (`Request_ID`, `Student_ID`, `Document_ID`, `Request_Date`, `Release_Date`, `Request_Status`, `Transaction_No`) VALUES
(1, 19018110, 'COG', '2023-02-13', '2023-02-20', 'Released', NULL),
(2, 19018111, 'GMC', '2023-02-16', NULL, 'Ready', NULL),
(3, 19018111, 'COG', '2023-02-18', NULL, 'On Progress', NULL),
(4, 19018111, 'F138', '2023-02-18', NULL, 'On Progress', NULL),
(5, 19018111, 'F137', '2023-02-18', NULL, 'On Progress', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registrar_sectionlist`
--

CREATE TABLE `registrar_sectionlist` (
  `Section_No` int(11) NOT NULL,
  `Course` varchar(15) NOT NULL,
  `Year_Level` int(3) NOT NULL,
  `Section` varchar(5) NOT NULL,
  `Semester` varchar(15) NOT NULL,
  `Major` varchar(25) DEFAULT NULL,
  `Academic_Year` varchar(25) NOT NULL,
  `Class_Type` text NOT NULL,
  `Students` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrar_sectionlist`
--

INSERT INTO `registrar_sectionlist` (`Section_No`, `Course`, `Year_Level`, `Section`, `Semester`, `Major`, `Academic_Year`, `Class_Type`, `Students`) VALUES
(1, 'BSIT', 4, '41001', '1st', 'IM', '2022-2023', 'Regular', 3),
(2, 'BSIT', 4, '41002', '1st', 'NA', '2022-2023', 'Regular', 0),
(3, 'BSIT', 4, '41003', '1st', 'NA', '2022-2023', 'Regular', 0),
(4, 'BSED', 1, '11001', '1st', NULL, '2022-2023', 'Regular', 1),
(5, 'BSIT', 1, '11002', '1st', NULL, '2022-2023', 'Regular', 0),
(6, 'BSED', 1, '11003', '1st', '', '2022-2023', 'Regular', 1),
(7, 'BSIT', 4, '1', '1st', '', '2022', 'Regular', 0),
(8, 'BSIT', 4, '41004', '1st', '', '2022-2023', 'Regular', 0),
(9, 'BSIT', 4, '41005', '1st', '', '2022-2023', 'Regular', 0),
(10, 'BSIT', 4, '41006', '1st', '', '2022-2023', 'Regular', 0),
(11, 'BSIT', 4, '41007', '1st', '', '2022-2023', 'Regular', 0),
(12, 'BSIT', 1, '11003', '1st', '', '2022-2023', 'Regular', 0),
(13, 'BSIT', 1, '11004', '1st', '', '2022-2023', 'Regular', 0),
(14, 'BSIT', 4, '41008', '1st', '', '2022-2023', 'Regular', 0),
(15, 'BSIT', 4, '41009', '1st', '', '2022-2023', 'Regular', 3),
(16, 'BSIT', 4, '41010', '1st', '', '2022-2023', 'Regular', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registrar_studentlist`
--

CREATE TABLE `registrar_studentlist` (
  `Student_ID` int(8) NOT NULL,
  `Lastname` varchar(15) DEFAULT NULL,
  `Firstname` varchar(25) DEFAULT NULL,
  `Middlename` varchar(25) DEFAULT NULL,
  `Suffix` varchar(8) DEFAULT NULL,
  `Email` varchar(75) DEFAULT NULL,
  `Gender` text DEFAULT NULL,
  `Age` int(5) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Course` varchar(25) DEFAULT NULL,
  `Major` varchar(30) DEFAULT NULL,
  `Year_Level` varchar(250) DEFAULT NULL,
  `Section` varchar(25) DEFAULT NULL,
  `Citizenship` text DEFAULT NULL,
  `Contact_No` varchar(25) DEFAULT NULL,
  `Guardian` varchar(50) DEFAULT NULL,
  `Guardian_Contact` varchar(25) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `Province` varchar(250) DEFAULT NULL,
  `Zip` varchar(15) DEFAULT NULL,
  `Last_School` varchar(65) DEFAULT NULL,
  `Academic_Year` varchar(50) DEFAULT NULL,
  `School_Type` varchar(20) DEFAULT NULL,
  `Student_Status` varchar(25) DEFAULT NULL,
  `Student_Type` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrar_studentsection`
--

CREATE TABLE `registrar_studentsection` (
  `No` int(11) NOT NULL,
  `Section_ID` int(11) NOT NULL,
  `Student_ID` int(8) NOT NULL,
  `Lastname` varchar(15) NOT NULL,
  `Firstname` varchar(15) NOT NULL,
  `Middlename` varchar(15) DEFAULT NULL,
  `Course` varchar(15) NOT NULL,
  `Year_Level` int(4) NOT NULL,
  `Section` int(6) NOT NULL,
  `Semester` varchar(15) NOT NULL,
  `Major` varchar(15) DEFAULT NULL,
  `Academic_Year` varchar(25) NOT NULL,
  `Student_Type` varchar(20) NOT NULL,
  `Status` varchar(25) NOT NULL,
  `Register_Date` date NOT NULL DEFAULT current_timestamp(),
  `submitted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrar_subjects`
--

CREATE TABLE `registrar_subjects` (
  `Subject_ID` int(11) NOT NULL,
  `Subject_Code` varchar(25) DEFAULT NULL,
  `Subject_Title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrar_subjects`
--

INSERT INTO `registrar_subjects` (`Subject_ID`, `Subject_Code`, `Subject_Title`) VALUES
(1, 'CCS1101', 'Introduction to Computing'),
(2, 'ITM101', 'Introduction to Marksmanship');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrar_announcement`
--
ALTER TABLE `registrar_announcement`
  ADD PRIMARY KEY (`Message_No`);

--
-- Indexes for table `registrar_curriculum`
--
ALTER TABLE `registrar_curriculum`
  ADD PRIMARY KEY (`Subject_Code`);

--
-- Indexes for table `registrar_deactivatedlist`
--
ALTER TABLE `registrar_deactivatedlist`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `registrar_document`
--
ALTER TABLE `registrar_document`
  ADD PRIMARY KEY (`Document_ID`);

--
-- Indexes for table `registrar_documentstatus`
--
ALTER TABLE `registrar_documentstatus`
  ADD PRIMARY KEY (`Submit_No`);

--
-- Indexes for table `registrar_grades`
--
ALTER TABLE `registrar_grades`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `registrar_login`
--
ALTER TABLE `registrar_login`
  ADD PRIMARY KEY (`Account_ID`);

--
-- Indexes for table `registrar_registrar`
--
ALTER TABLE `registrar_registrar`
  ADD PRIMARY KEY (`Account_ID`);

--
-- Indexes for table `registrar_requestdata`
--
ALTER TABLE `registrar_requestdata`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `registrar_requestdocument`
--
ALTER TABLE `registrar_requestdocument`
  ADD PRIMARY KEY (`Request_ID`);

--
-- Indexes for table `registrar_sectionlist`
--
ALTER TABLE `registrar_sectionlist`
  ADD PRIMARY KEY (`Section_No`);

--
-- Indexes for table `registrar_studentlist`
--
ALTER TABLE `registrar_studentlist`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `registrar_studentsection`
--
ALTER TABLE `registrar_studentsection`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `registrar_subjects`
--
ALTER TABLE `registrar_subjects`
  ADD PRIMARY KEY (`Subject_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrar_announcement`
--
ALTER TABLE `registrar_announcement`
  MODIFY `Message_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registrar_documentstatus`
--
ALTER TABLE `registrar_documentstatus`
  MODIFY `Submit_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registrar_login`
--
ALTER TABLE `registrar_login`
  MODIFY `Account_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345603;

--
-- AUTO_INCREMENT for table `registrar_registrar`
--
ALTER TABLE `registrar_registrar`
  MODIFY `Account_ID` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345603;

--
-- AUTO_INCREMENT for table `registrar_requestdata`
--
ALTER TABLE `registrar_requestdata`
  MODIFY `No` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrar_requestdocument`
--
ALTER TABLE `registrar_requestdocument`
  MODIFY `Request_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registrar_sectionlist`
--
ALTER TABLE `registrar_sectionlist`
  MODIFY `Section_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registrar_studentsection`
--
ALTER TABLE `registrar_studentsection`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `registrar_subjects`
--
ALTER TABLE `registrar_subjects`
  MODIFY `Subject_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
