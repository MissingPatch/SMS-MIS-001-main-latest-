-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 10:28 AM
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
-- Table structure for table `mis_aub_payments`
--

CREATE TABLE `mis_aub_payments` (
  `no` int(11) NOT NULL,
  `depositdate` datetime NOT NULL,
  `trans_code` int(255) NOT NULL,
  `studname` varchar(255) NOT NULL,
  `studid` int(255) NOT NULL,
  `particulars` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `modeofpay` varchar(255) NOT NULL,
  `branch` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mis_aub_payments`
--

INSERT INTO `mis_aub_payments` (`no`, `depositdate`, `trans_code`, `studname`, `studid`, `particulars`, `amount`, `modeofpay`, `branch`) VALUES
(1, '2023-04-17 17:08:29', 2147483647, 'LORIE RAMOS SUMALI', 21015303, 'MIDTERM 2ND SEM', 2000, 'DEBIT ACCT', 916),
(2, '2023-04-17 17:14:13', 2147483647, 'MARIANE MAY A. SANTOS', 19014530, 'FINAL DEFENSE', 2000, 'DEBIT ACCT', 916),
(3, '2023-04-17 17:21:44', 2147483647, 'ABIGAIL A. ANGOLLUAN', 19010272, 'BAGUIO TOUR', 7700, 'DEBIT ACCT', 916),
(4, '2023-04-17 17:08:29', 2147483647, 'LORIE RAMOS SUMALI', 21015303, 'MIDTERM 2ND SEM', 2000, 'DEBIT ACCT', 916),
(5, '2023-04-17 17:43:31', 2147483647, 'MELODIA KYRA R.', 19014143, 'ILOCOS TOUR 22-23', 9500, 'DEBIT ACCT', 916),
(6, '2023-04-17 17:14:13', 2147483647, 'MARIANE MAY A. SANTOS', 19014530, 'FINAL DEFENSE', 2000, 'DEBIT ACCT', 916),
(7, '2023-04-17 17:55:39', 2147483647, 'EDRIC D. SOCO JR.', 18014122, 'FINAL DEFENSE (THESIS)', 2000, 'DEBIT ACCT', 916),
(8, '2023-04-17 17:21:44', 2147483647, 'ABIGAIL A. ANGOLLUAN', 19010272, 'BAGUIO TOUR', 7700, 'DEBIT ACCT', 916),
(9, '2023-04-17 17:55:54', 2147483647, 'LIM SHEINALY P.', 21121501, 'TOUR-BAGUIO', 7700, 'DEBIT ACCT', 916),
(10, '2023-04-17 17:43:31', 2147483647, 'MELODIA KYRA R.', 19014143, 'ILOCOS TOUR 22-23', 9500, 'DEBIT ACCT', 916),
(11, '2023-04-17 17:58:40', 2147483647, 'OCASLA JHONEL SABLAYAN', 20011066, 'MIDTERM EXAM', 1500, 'DEBIT ACCT', 916),
(12, '2023-04-17 17:55:39', 2147483647, 'EDRIC D. SOCO JR.', 18014122, 'FINAL DEFENSE (THESIS)', 2000, 'DEBIT ACCT', 916),
(13, '2023-04-17 18:28:23', 2147483647, 'JOHN JENRIC P. PACIO', 22020921, 'MIDTERM', 500, 'DEBIT ACCT', 916),
(14, '2023-04-17 17:55:54', 2147483647, 'LIM SHEINALY P.', 21121501, 'TOUR-BAGUIO', 7700, 'DEBIT ACCT', 916),
(15, '2023-04-17 18:36:35', 2147483647, 'TOBIAS ALYANNA MAE V', 21020346, 'MISCELLANEOUS FEE', 1658, 'DEBIT ACCT', 916),
(16, '2023-04-17 17:58:40', 2147483647, 'OCASLA JHONEL SABLAYAN', 20011066, 'MIDTERM EXAM', 1500, 'DEBIT ACCT', 916),
(17, '2023-04-17 18:47:44', 2147483647, 'ABEGAIL E. VALDOZ', 21010950, 'BSBA BAGUIO TOUR', 7700, 'DEBIT ACCT', 916),
(18, '2023-04-17 18:28:23', 2147483647, 'JOHN JENRIC P. PACIO', 22020921, 'MIDTERM', 500, 'DEBIT ACCT', 916),
(19, '2023-04-17 18:50:08', 2147483647, 'JESIEL ANN CURATIVO', 20011552, 'BAGUIO TOUR', 7700, 'DEBIT ACCT', 916),
(20, '2023-04-17 18:36:35', 2147483647, 'TOBIAS ALYANNA MAE V', 21020346, 'MISCELLANEOUS FEE', 1658, 'DEBIT ACCT', 916),
(21, '2023-04-17 19:03:11', 2147483647, 'BABON WYNA MAE', 21015567, 'MIDTERM MISCELLANEOUS FEE', 1800, 'DEBIT ACCT', 916),
(22, '2023-04-17 18:47:44', 2147483647, 'ABEGAIL E. VALDOZ', 21010950, 'BSBA BAGUIO TOUR', 7700, 'DEBIT ACCT', 916),
(23, '2023-04-17 19:41:25', 2147483647, 'BIASONG MARK ANGELO', 21014296, 'PAYMENT FOR MIDTERM', 1500, 'DEBIT ACCT', 916),
(24, '2023-04-17 18:50:08', 2147483647, 'JESIEL ANN CURATIVO', 20011552, 'BAGUIO TOUR', 7700, 'DEBIT ACCT', 916),
(25, '2023-04-17 20:07:43', 2147483647, 'MARIAN JANE TOYCO', 21014373, 'BAGUIO SEMINAR', 7700, 'DEBIT ACCT', 916),
(26, '2023-04-17 19:03:11', 2147483647, 'BABON WYNA MAE', 21015567, 'MIDTERM MISCELLANEOUS FEE', 1800, 'DEBIT ACCT', 916),
(27, '2023-04-17 20:17:02', 2147483647, 'JENNYVIE LACSON', 16010068, 'ILOCOS TOUR 2023', 3500, 'DEBIT ACCT', 916),
(28, '2023-04-17 19:41:25', 2147483647, 'BIASONG MARK ANGELO', 21014296, 'PAYMENT FOR MIDTERM', 1500, 'DEBIT ACCT', 916),
(29, '2023-04-17 20:30:47', 2147483647, 'ROSALES JAYSELL MAY E.', 19020221, 'MISCELLANEOUS', 100, 'DEBIT ACCT', 916),
(30, '2023-04-17 20:07:43', 2147483647, 'MARIAN JANE TOYCO', 21014373, 'BAGUIO SEMINAR', 7700, 'DEBIT ACCT', 916),
(31, '2023-04-17 20:32:27', 2147483647, 'ARMIYAH TON', 19011599, 'EXAM', 1000, 'DEBIT ACCT', 916),
(32, '2023-04-17 20:17:02', 2147483647, 'JENNYVIE LACSON', 16010068, 'ILOCOS TOUR 2023', 3500, 'DEBIT ACCT', 916),
(33, '2023-04-17 20:34:32', 2147483647, 'MELISSA PASUENGOS MALOTA', 21120698, '2ND YEAR BAGUIO TOUR', 7700, 'DEBIT ACCT', 916),
(34, '2023-04-17 20:30:47', 2147483647, 'ROSALES JAYSELL MAY E.', 19020221, 'MISCELLANEOUS', 100, 'DEBIT ACCT', 916),
(35, '2023-04-17 20:40:55', 2147483647, 'ROLANDO CABALLERO BRIAN', 21010161, 'MIDTERM  EXAMINATION', 1500, 'DEBIT ACCT', 916),
(36, '2023-04-17 20:32:27', 2147483647, 'ARMIYAH TON', 19011599, 'EXAM', 1000, 'DEBIT ACCT', 916),
(37, '2023-04-17 20:41:07', 2147483647, 'JHAYSON G. PONAYO', 21015702, 'BAGUIO TOUR', 7700, 'DEBIT ACCT', 916),
(38, '2023-04-17 20:34:32', 2147483647, 'MELISSA PASUENGOS MALOTA', 21120698, '2ND YEAR BAGUIO TOUR', 7700, 'DEBIT ACCT', 916),
(39, '2023-04-17 21:21:47', 2147483647, 'ROSALES JAYSELL MAY E.', 19020221, 'MISCELLANEOUS', 50, 'DEBIT ACCT', 916),
(40, '2023-04-17 20:40:55', 2147483647, 'ROLANDO CABALLERO BRIAN', 21010161, 'MIDTERM  EXAMINATION', 1500, 'DEBIT ACCT', 916),
(41, '2023-04-17 21:50:52', 2147483647, 'MARY JEWEL D. CALINDAS', 21120352, 'BAGUIO TOUR', 7700, 'DEBIT ACCT', 916),
(42, '2023-04-17 20:41:07', 2147483647, 'JHAYSON G. PONAYO', 21015702, 'BAGUIO TOUR', 7700, 'DEBIT ACCT', 916),
(43, '2023-04-17 22:06:28', 2147483647, 'KIM SHANE TRINA M. SORIANO', 19015810, 'BAGUIO TOUR', 7700, 'DEBIT ACCT', 916),
(44, '2023-04-17 21:21:47', 2147483647, 'ROSALES JAYSELL MAY E.', 19020221, 'MISCELLANEOUS', 50, 'DEBIT ACCT', 916),
(45, '2023-04-17 22:06:59', 2147483647, 'SHELLA MAE N. ABOGADO', 21010304, 'BAGUIO TOUR (2ND YEAR)', 7700, 'DEBIT ACCT', 916),
(46, '2023-04-17 21:50:52', 2147483647, 'MARY JEWEL D. CALINDAS', 21120352, 'BAGUIO TOUR', 7700, 'DEBIT ACCT', 916),
(47, '2023-04-17 22:13:48', 2147483647, 'TRISTAN JOSHUA M. BOQUIREN', 20010264, 'MIDTERMS', 1500, 'DEBIT ACCT', 916),
(48, '2023-04-17 22:06:28', 2147483647, 'KIM SHANE TRINA M. SORIANO', 19015810, 'BAGUIO TOUR', 7700, 'DEBIT ACCT', 916),
(49, '2023-04-17 22:59:58', 2147483647, 'SANTOS REGINE P.', 22010126, 'MIDTERM EXAM', 1500, 'DEBIT ACCT', 916),
(50, '2023-04-17 22:06:59', 2147483647, 'SHELLA MAE N. ABOGADO', 21010304, 'BAGUIO TOUR (2ND YEAR)', 7700, 'DEBIT ACCT', 916),
(51, '2023-04-17 23:45:11', 2147483647, 'JOVELYN DILAO', 22020630, 'GOOD MORAL', 50, 'DEBIT ACCT', 916),
(52, '2023-04-17 22:13:48', 2147483647, 'TRISTAN JOSHUA M. BOQUIREN', 20010264, 'MIDTERMS', 1500, 'DEBIT ACCT', 916),
(53, '2023-04-18 06:10:56', 2147483647, 'ALJON P CAPUYAN', 19020202, 'MISCELLANEOUS', 100, 'DEBIT ACCT', 916),
(54, '2023-04-17 22:59:58', 2147483647, 'SANTOS REGINE P.', 22010126, 'MIDTERM EXAM', 1500, 'DEBIT ACCT', 916),
(55, '2023-04-18 06:20:26', 2147483647, 'RENZ JERICHO I. NGOHO', 21016823, 'MIDTERM EXAM', 1500, 'DEBIT ACCT', 916),
(56, '2023-04-17 23:45:11', 2147483647, 'JOVELYN DILAO', 22020630, 'GOOD MORAL', 50, 'DEBIT ACCT', 916),
(57, '2023-04-18 06:44:47', 2147483647, 'PAALA KATHLEEN JOY L.', 22220274, 'COR', 50, 'DEBIT ACCT', 916),
(58, '2023-04-18 06:10:56', 2147483647, 'ALJON P CAPUYAN', 19020202, 'MISCELLANEOUS', 100, 'DEBIT ACCT', 916),
(59, '2023-04-18 06:48:46', 2147483647, 'ANGELO LUIS PALILEO', 20016843, 'PRELIM EXAM', 500, 'DEBIT ACCT', 916),
(60, '2023-04-18 06:20:26', 2147483647, 'RENZ JERICHO I. NGOHO', 21016823, 'MIDTERM EXAM', 1500, 'DEBIT ACCT', 916),
(61, '2023-04-18 07:40:15', 2147483647, 'JORGINA BULANADI', 21011725, 'MIDTERM EXAM', 1000, 'DEBIT ACCT', 916),
(62, '2023-04-18 06:44:47', 2147483647, 'PAALA KATHLEEN JOY L.', 22220274, 'COR', 50, 'DEBIT ACCT', 916),
(63, '2023-04-18 08:01:44', 2147483647, 'CARLITO H. TABAT JR.', 19020027, 'GRADUATION', 1100, 'DEBIT ACCT', 916),
(64, '2023-04-18 06:48:46', 2147483647, 'ANGELO LUIS PALILEO', 20016843, 'PRELIM EXAM', 500, 'DEBIT ACCT', 916),
(65, '2023-04-18 08:15:43', 2147483647, 'POBOCAN JORDAN F.', 22020600, 'GOODMORAL', 50, 'DEBIT ACCT', 916),
(66, '2023-04-18 07:40:15', 2147483647, 'JORGINA BULANADI', 21011725, 'MIDTERM EXAM', 1000, 'DEBIT ACCT', 916),
(67, '2023-04-18 08:17:11', 2147483647, 'NINO FACTOR BEJO', 21012042, 'BSBA HR BAGUIO SEMINAR', 7700, 'DEBIT ACCT', 916),
(68, '2023-04-18 08:01:44', 2147483647, 'CARLITO H. TABAT JR.', 19020027, 'GRADUATION', 1100, 'DEBIT ACCT', 916),
(69, '2023-04-18 08:19:58', 2147483647, 'CHRISTIAN IRISH BACAY', 22016033, 'MID.& FINAL', 2984, 'DEBIT ACCT', 916),
(70, '2023-04-18 08:15:43', 2147483647, 'POBOCAN JORDAN F.', 22020600, 'GOODMORAL', 50, 'DEBIT ACCT', 916),
(71, '2023-04-18 08:32:06', 2147483647, 'MADELYN D. LEGARA', 19015666, 'RESEARCH FESTIVAL', 800, 'DEBIT ACCT', 916),
(72, '2023-04-18 08:17:11', 2147483647, 'NINO FACTOR BEJO', 21012042, 'BSBA HR BAGUIO SEMINAR', 7700, 'DEBIT ACCT', 916),
(73, '2023-04-18 09:08:08', 2147483647, 'VINCENT  SARCILLA', 21020290, 'SUBJECT EVALUATION', 100, 'DEBIT ACCT', 916),
(74, '2023-04-18 08:19:58', 2147483647, 'CHRISTIAN IRISH BACAY', 22016033, 'MID.& FINAL', 2984, 'DEBIT ACCT', 916),
(75, '2023-04-18 09:25:59', 2147483647, 'DESIREE PANIT', 17230212, 'FORM 137', 250, 'DEBIT ACCT', 916),
(76, '2023-04-18 08:32:06', 2147483647, 'MADELYN D. LEGARA', 19015666, 'RESEARCH FESTIVAL', 800, 'DEBIT ACCT', 916),
(77, '2023-04-18 09:30:08', 2147483647, 'MA. VERONICA P. DELOS SANTOS', 17230778, 'MISCELLANEOUS FEES', 250, 'CASH', 147),
(78, '2023-04-18 09:08:08', 2147483647, 'VINCENT  SARCILLA', 21020290, 'SUBJECT EVALUATION', 100, 'DEBIT ACCT', 916),
(79, '2023-04-18 09:30:59', 2147483647, 'ALEXANDRIA A. CRUZ', 19020573, 'COR', 50, 'DEBIT ACCT', 916),
(80, '2023-04-18 09:25:59', 2147483647, 'DESIREE PANIT', 17230212, 'FORM 137', 250, 'DEBIT ACCT', 916),
(81, '2023-04-18 09:34:31', 2147483647, 'VINCENT PATRIA', 20020041, 'SUBJECT EVALUATION', 100, 'DEBIT ACCT', 916),
(82, '2023-04-18 09:30:08', 2147483647, 'MA. VERONICA P. DELOS SANTOS', 17230778, 'MISCELLANEOUS FEES', 250, 'CASH', 147),
(83, '2023-04-18 09:43:15', 2147483647, 'KLIANA MAE M. IPIL', 21121578, '3RD YR MIDTERM EXAM', 1000, 'DEBIT ACCT', 916),
(84, '2023-04-18 09:30:59', 2147483647, 'ALEXANDRIA A. CRUZ', 19020573, 'COR', 50, 'DEBIT ACCT', 916),
(85, '2023-04-18 09:44:51', 2147483647, 'ROSALINDA C. KALAW', 21010010, '3RD YR 1ST SEM. MIDTERM EXAM.', 1010, 'DEBIT ACCT', 916),
(86, '2023-04-18 09:34:31', 2147483647, 'VINCENT PATRIA', 20020041, 'SUBJECT EVALUATION', 100, 'DEBIT ACCT', 916),
(87, '2023-04-18 09:46:44', 2147483647, 'CASSANDRA K. DELACRUZ', 22123293, '1ST YR. 1ST SEM. MIDTERM EXAMINATION', 1015, 'DEBIT ACCT', 916),
(88, '2023-04-18 09:43:15', 2147483647, 'KLIANA MAE M. IPIL', 21121578, '3RD YR MIDTERM EXAM', 1000, 'DEBIT ACCT', 916),
(89, '2023-04-18 09:53:27', 2147483647, 'CONCHA EMERSON C.', 21010762, 'MIDTERM 2ND SEM', 1500, 'DEBIT ACCT', 916),
(90, '2023-04-18 09:44:51', 2147483647, 'ROSALINDA C. KALAW', 21010010, '3RD YR 1ST SEM. MIDTERM EXAM.', 1010, 'DEBIT ACCT', 916),
(91, '2023-04-18 09:56:12', 2147483647, 'ANDREY EVANGELISTA', 22020841, 'COR', 50, 'DEBIT ACCT', 916),
(92, '2023-04-18 09:46:44', 2147483647, 'CASSANDRA K. DELACRUZ', 22123293, '1ST YR. 1ST SEM. MIDTERM EXAMINATION', 1015, 'DEBIT ACCT', 916),
(93, '2023-04-18 10:08:41', 2147483647, 'RONNICO A. ESPIRITU', 22014061, 'MISCELLANEOUS FEES', 1700, 'CASH', 99),
(94, '2023-04-18 09:53:27', 2147483647, 'CONCHA EMERSON C.', 21010762, 'MIDTERM 2ND SEM', 1500, 'DEBIT ACCT', 916),
(95, '2023-04-18 10:15:42', 2147483647, 'SABARILLO RACHELLE G.', 19020309, 'MISCELLANEOUS FEES', 150, 'CASH', 147),
(96, '2023-04-18 09:56:12', 2147483647, 'ANDREY EVANGELISTA', 22020841, 'COR', 50, 'DEBIT ACCT', 916),
(97, '2023-04-18 10:16:04', 2147483647, 'CHARIFA AIRA JOYCE A.', 19020311, 'MISCELLANEOUS FEES', 150, 'CASH', 147),
(98, '2023-04-18 10:08:41', 2147483647, 'RONNICO A. ESPIRITU', 22014061, 'MISCELLANEOUS FEES', 1700, 'CASH', 99),
(99, '2023-04-18 10:26:21', 2147483647, 'JEFFREY D. TOVELLIRA', 19020325, 'COR', 50, 'DEBIT ACCT', 916),
(100, '2023-04-18 10:15:42', 2147483647, 'SABARILLO RACHELLE G.', 19020309, 'MISCELLANEOUS FEES', 150, 'CASH', 147),
(101, '2023-04-18 10:27:23', 2147483647, 'JEFFREY D. TOVELLIRA', 19020325, 'EVALUATION', 100, 'DEBIT ACCT', 916),
(102, '2023-04-18 10:16:04', 2147483647, 'CHARIFA AIRA JOYCE A.', 19020311, 'MISCELLANEOUS FEES', 150, 'CASH', 147),
(103, '2023-04-18 10:40:24', 2147483647, 'LARA JANE SAN LUIS', 19020230, 'COR AND EOG', 150, 'DEBIT ACCT', 916),
(104, '2023-04-18 10:26:21', 2147483647, 'JEFFREY D. TOVELLIRA', 19020325, 'COR', 50, 'DEBIT ACCT', 916),
(105, '2023-04-18 10:46:43', 2147483647, 'MARQUEDA JAMAICA CADATE', 22020055, 'MISCELLANEOUS', 500, 'DEBIT ACCT', 916),
(106, '2023-04-18 10:27:23', 2147483647, 'JEFFREY D. TOVELLIRA', 19020325, 'EVALUATION', 100, 'DEBIT ACCT', 916),
(107, '2023-04-18 10:58:01', 2147483647, 'MARY JANE LUCHAVEZ', 21015231, 'BAGUIO TOUR', 7700, 'DEBIT ACCT', 916),
(108, '2023-04-18 10:40:24', 2147483647, 'LARA JANE SAN LUIS', 19020230, 'COR AND EOG', 150, 'DEBIT ACCT', 916),
(109, '2023-04-18 10:59:00', 2147483647, 'CHRISTINE PAULA CABALLES', 19020670, 'EVALUATION OF GRADES', 100, 'DEBIT ACCT', 916),
(110, '2023-04-18 10:46:43', 2147483647, 'MARQUEDA JAMAICA CADATE', 22020055, 'MISCELLANEOUS', 500, 'DEBIT ACCT', 916),
(111, '2023-04-18 11:00:10', 2147483647, 'CHRISTINE PAULA CABALLES', 19020670, 'COR', 50, 'DEBIT ACCT', 916),
(112, '2023-04-18 10:58:01', 2147483647, 'MARY JANE LUCHAVEZ', 21015231, 'BAGUIO TOUR', 7700, 'DEBIT ACCT', 916),
(113, '2023-04-18 11:07:56', 2147483647, 'ELSIE ROBELLES', 21015627, 'MIDTERM', 1500, 'DEBIT ACCT', 916),
(114, '2023-04-18 10:59:00', 2147483647, 'CHRISTINE PAULA CABALLES', 19020670, 'EVALUATION OF GRADES', 100, 'DEBIT ACCT', 916),
(115, '2023-04-18 11:09:04', 2147483647, 'GIL EDELBERT D. TRUMATA', 22121191, 'MIDTERM PAYMENT', 1500, 'DEBIT ACCT', 916),
(116, '2023-04-18 11:00:10', 2147483647, 'CHRISTINE PAULA CABALLES', 19020670, 'COR', 50, 'DEBIT ACCT', 916),
(117, '2023-04-18 11:11:46', 2147483647, 'DUPITAS JANICHA B.', 19020069, 'EVALUATION OF GRADES', 100, 'DEBIT ACCT', 916),
(118, '2023-04-18 11:07:56', 2147483647, 'ELSIE ROBELLES', 21015627, 'MIDTERM', 1500, 'DEBIT ACCT', 916),
(119, '2023-04-18 11:12:46', 2147483647, 'DUPITAS JANICHA B.', 19020069, 'COR', 50, 'DEBIT ACCT', 916),
(120, '2023-04-18 11:09:04', 2147483647, 'GIL EDELBERT D. TRUMATA', 22121191, 'MIDTERM PAYMENT', 1500, 'DEBIT ACCT', 916),
(121, '2023-04-18 11:15:00', 2147483647, 'AILA VILLAREAL', 19013644, 'ILOCOS TOUR 2023', 9500, 'DEBIT ACCT', 916),
(122, '2023-04-18 11:11:46', 2147483647, 'DUPITAS JANICHA B.', 19020069, 'EVALUATION OF GRADES', 100, 'DEBIT ACCT', 916),
(123, '2023-04-18 11:17:26', 2147483647, 'VICTORIA BANEZ', 22020506, 'MIDTERM  EXAM', 1000, 'DEBIT ACCT', 916),
(124, '2023-04-18 11:12:46', 2147483647, 'DUPITAS JANICHA B.', 19020069, 'COR', 50, 'DEBIT ACCT', 916),
(125, '2023-04-18 11:23:26', 2147483647, 'BRIX LIRAY ROPAN', 21250011, 'SHS PRACTICAL RESEARCH DEFENSE', 800, 'DEBIT ACCT', 916),
(126, '2023-04-18 11:15:00', 2147483647, 'AILA VILLAREAL', 19013644, 'ILOCOS TOUR 2023', 9500, 'DEBIT ACCT', 916),
(127, '2023-04-18 11:27:32', 2147483647, 'BERNADETTE BATHAN', 19020070, 'COR', 50, 'DEBIT ACCT', 916),
(128, '2023-04-18 11:17:26', 2147483647, 'VICTORIA BANEZ', 22020506, 'MIDTERM  EXAM', 1000, 'DEBIT ACCT', 916),
(129, '2023-04-18 11:28:38', 2147483647, 'JALLAL GURO', 19020136, 'EVALUATION AND COR', 150, 'DEBIT ACCT', 916),
(130, '2023-04-18 11:23:26', 2147483647, 'BRIX LIRAY ROPAN', 21250011, 'SHS PRACTICAL RESEARCH DEFENSE', 800, 'DEBIT ACCT', 916),
(131, '2023-04-18 11:29:20', 2147483647, 'KEMP JAMES VICTORE', 12020240, 'EVALUATION OF GRADES', 100, 'DEBIT ACCT', 916),
(132, '2023-04-18 11:27:32', 2147483647, 'BERNADETTE BATHAN', 19020070, 'COR', 50, 'DEBIT ACCT', 916),
(133, '2023-04-18 11:29:44', 2147483647, 'JHURESH AIRA P MAGALLANES', 19020532, 'EVALUATION', 100, 'DEBIT ACCT', 916),
(134, '2023-04-18 11:28:38', 2147483647, 'JALLAL GURO', 19020136, 'EVALUATION AND COR', 150, 'DEBIT ACCT', 916),
(135, '2023-04-18 11:30:28', 2147483647, 'KEMP JAMES VICTORE', 19020240, 'COR', 50, 'DEBIT ACCT', 916),
(136, '2023-04-18 11:29:20', 2147483647, 'KEMP JAMES VICTORE', 12020240, 'EVALUATION OF GRADES', 100, 'DEBIT ACCT', 916),
(137, '2023-04-18 11:32:50', 2147483647, 'JENNILYN OLOR GUILING', 20015081, 'MIDTERM EXAM', 1485, 'DEBIT ACCT', 916),
(138, '2023-04-18 11:29:44', 2147483647, 'JHURESH AIRA P MAGALLANES', 19020532, 'EVALUATION', 100, 'DEBIT ACCT', 916),
(139, '2023-04-18 11:30:28', 2147483647, 'KEMP JAMES VICTORE', 19020240, 'COR', 50, 'DEBIT ACCT', 916),
(140, '2023-04-18 11:32:50', 2147483647, 'JENNILYN OLOR GUILING', 20015081, 'MIDTERM EXAM', 1485, 'DEBIT ACCT', 916);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mis_aub_payments`
--
ALTER TABLE `mis_aub_payments`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mis_aub_payments`
--
ALTER TABLE `mis_aub_payments`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
