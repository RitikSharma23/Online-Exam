-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 05:20 AM
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
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `fname`, `lname`, `email`, `phone`, `pass`) VALUES
(1123, 'Ritik', 'Sharma', 'ritikss748@gmail.com', '8866892314', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `ind` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`ind`, `userid`, `fname`, `lname`, `email`, `phone`, `pass`) VALUES
(10, 4310, 'Ritik', 'Sharma', 'ritikss748@gmail.com', '8866892314', 'ritik123'),
(14, 1212, 'shanu', 'pandey', 'shanu@gmail.com', '123456', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `user` varchar(20) NOT NULL,
  `question_id` int(11) NOT NULL,
  `dat` date NOT NULL,
  `sem` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `unit` int(11) NOT NULL,
  `division` char(1) NOT NULL DEFAULT 'A',
  `no` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `a` mediumtext NOT NULL,
  `b` mediumtext NOT NULL,
  `c` mediumtext NOT NULL,
  `d` mediumtext NOT NULL,
  `correct` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`user`, `question_id`, `dat`, `sem`, `subject`, `unit`, `division`, `no`, `question`, `a`, `b`, `c`, `d`, `correct`) VALUES
('Ritik', 28100852, '2022-09-10', 1, 'es', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 28100852, '2022-09-10', 1, 'es', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 28100852, '2022-09-10', 1, 'es', 1, 'A', 4, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 28100852, '2022-09-10', 1, 'es', 1, 'A', 5, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 28100852, '2022-09-10', 1, 'es', 1, 'A', 7, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 28100852, '2022-09-10', 1, 'es', 1, 'A', 6, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 28100858, '2022-09-10', 1, 'es', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 28100858, '2022-09-10', 1, 'es', 1, 'A', 4, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 28100858, '2022-09-10', 1, 'es', 1, 'A', 6, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 28100858, '2022-09-10', 1, 'es', 1, 'A', 7, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 28100858, '2022-09-10', 1, 'es', 1, 'A', 5, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 28100858, '2022-09-10', 1, 'es', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 29100839, '2022-09-10', 1, 'es', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 29100839, '2022-09-10', 1, 'es', 1, 'A', 6, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 29100839, '2022-09-10', 1, 'es', 1, 'A', 4, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 29100839, '2022-09-10', 1, 'es', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 29100839, '2022-09-10', 1, 'es', 1, 'A', 7, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 29100839, '2022-09-10', 1, 'es', 1, 'A', 5, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 29100846, '2022-09-10', 1, 'es', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 29100846, '2022-09-10', 1, 'es', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 29100846, '2022-09-10', 1, 'es', 1, 'A', 5, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 29100846, '2022-09-10', 1, 'es', 1, 'A', 4, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 29100854, '2022-09-10', 1, 'es', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 29100854, '2022-09-10', 1, 'es', 1, 'A', 4, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 29100854, '2022-09-10', 1, 'es', 1, 'A', 7, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 29100854, '2022-09-10', 1, 'es', 1, 'A', 6, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 29100854, '2022-09-10', 1, 'es', 1, 'A', 5, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 29100854, '2022-09-10', 1, 'es', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100800, '2022-09-10', 1, 'es', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100800, '2022-09-10', 1, 'es', 1, 'A', 7, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100800, '2022-09-10', 1, 'es', 1, 'A', 5, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100800, '2022-09-10', 1, 'es', 1, 'A', 6, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 30100800, '2022-09-10', 1, 'es', 1, 'A', 4, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100800, '2022-09-10', 1, 'es', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 30100817, '2022-09-10', 1, 'es', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100817, '2022-09-10', 1, 'es', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 30100817, '2022-09-10', 1, 'es', 1, 'A', 4, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100817, '2022-09-10', 1, 'es', 1, 'A', 7, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100817, '2022-09-10', 1, 'es', 1, 'A', 6, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 30100817, '2022-09-10', 1, 'es', 1, 'A', 5, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100818, '2022-09-10', 1, 'es', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100818, '2022-09-10', 1, 'es', 1, 'A', 5, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100818, '2022-09-10', 1, 'es', 1, 'A', 4, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100818, '2022-09-10', 1, 'es', 1, 'A', 7, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100818, '2022-09-10', 1, 'es', 1, 'A', 6, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 30100818, '2022-09-10', 1, 'es', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 30100822, '2022-09-10', 1, 'es', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100822, '2022-09-10', 1, 'es', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 30100822, '2022-09-10', 1, 'es', 1, 'A', 5, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100822, '2022-09-10', 1, 'es', 1, 'A', 4, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100822, '2022-09-10', 1, 'es', 1, 'A', 7, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100822, '2022-09-10', 1, 'es', 1, 'A', 6, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 30100826, '2022-09-10', 1, 'es', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100826, '2022-09-10', 1, 'es', 1, 'A', 5, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100826, '2022-09-10', 1, 'es', 1, 'A', 4, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100826, '2022-09-10', 1, 'es', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 30100840, '2022-09-10', 1, 'es', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100840, '2022-09-10', 1, 'es', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 30100840, '2022-09-10', 1, 'es', 1, 'A', 5, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100840, '2022-09-10', 1, 'es', 1, 'A', 4, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100850, '2022-09-10', 1, 'es', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 30100850, '2022-09-10', 1, 'es', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 30100850, '2022-09-10', 1, 'es', 1, 'A', 4, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 32100821, '2022-09-10', 1, 'es', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 32100821, '2022-09-10', 1, 'es', 1, 'A', 5, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 32100821, '2022-09-10', 1, 'es', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 32100821, '2022-09-10', 1, 'es', 1, 'A', 6, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 32100826, '2022-09-10', 1, 'es', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 32100826, '2022-09-10', 1, 'es', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 32100826, '2022-09-10', 1, 'es', 1, 'A', 4, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 32100826, '2022-09-10', 1, 'es', 1, 'A', 5, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 32100826, '2022-09-10', 1, 'es', 1, 'A', 6, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 32100831, '2022-09-10', 1, 'es', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 32100831, '2022-09-10', 1, 'es', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 32100831, '2022-09-10', 1, 'es', 1, 'A', 4, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 32100831, '2022-09-10', 1, 'es', 1, 'A', 6, 'what is html', 'a', 'b', 'c', 'd', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `question_details`
--

CREATE TABLE `question_details` (
  `user` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `question_id` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `dev` char(1) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `unit` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll` int(11) NOT NULL,
  `fname` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `dev` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `uid` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `ayear` year(4) NOT NULL,
  `flat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pin` int(11) NOT NULL,
  `area` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'profile.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll`, `fname`, `lname`, `phone`, `email`, `dob`, `semester`, `dev`, `uid`, `ayear`, `flat`, `pin`, `area`, `city`, `state`, `pass`, `img`) VALUES
(18, 'vrutik', 'jagad', '123456', 'vrutik1@gmail.com', '2002-09-01', 1, 'A', '123456', 2021, '', 0, '', '', '', '123456', 'profile.png'),
(29, 'shanu', 'pandey', '9877867541', 'shanu@gmail.com', '2003-01-04', 2, 'B', '21004500210045', 2021, '', 0, '', '', '', '9877867541', 'shanu.png'),
(62, 'ritik', 'sharma', '8866892314', 'ritiks431@gmail.com', '2003-07-23', 1, 'A', '21004500210167', 2021, '', 0, '', '', '', '8866892314', '../uploads/profile.p');

-- --------------------------------------------------------

--
-- Table structure for table `student_result`
--

CREATE TABLE `student_result` (
  `sem` int(11) NOT NULL,
  `sem_1_es_unit_1` int(11) NOT NULL DEFAULT -1,
  `sem_1_fco_unit_3` int(11) NOT NULL DEFAULT -1,
  `dev` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `uid` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `sem_1_html_unit_1` int(11) NOT NULL DEFAULT -1,
  `sem_1_html_unit_2` int(11) NOT NULL DEFAULT -1,
  `sem_1_html_unit_3` int(11) NOT NULL DEFAULT -1,
  `sem_1_html_unit_4` int(11) NOT NULL DEFAULT -1,
  `sem_1_sdot_unit_3` int(11) NOT NULL DEFAULT -1,
  `sem_2_fco_unit_1` int(11) NOT NULL DEFAULT -1,
  `sem_2_fco_unit_2` int(11) NOT NULL DEFAULT -1,
  `sem_2_sdot_unit_1` int(11) NOT NULL DEFAULT -1,
  `sem_2_sdot_unit_2` int(11) NOT NULL DEFAULT -1,
  `sem_3_cpp_unit_1` int(11) NOT NULL DEFAULT -1,
  `sem_3_cpp_unit_2` int(11) NOT NULL DEFAULT -1,
  `sem_3_cpp_unit_3` int(11) NOT NULL DEFAULT -1,
  `sem_3_php_unit_1` int(11) NOT NULL DEFAULT -1,
  `sem_4_java_unit_1` int(11) NOT NULL DEFAULT -1,
  `sem_4_java_unit_2` int(11) NOT NULL DEFAULT -1,
  `sem_5_python_unit_1` int(11) NOT NULL DEFAULT -1,
  `sem_6_laravel_unit_1` int(11) NOT NULL DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_result`
--

INSERT INTO `student_result` (`sem`, `sem_1_es_unit_1`, `sem_1_fco_unit_3`, `dev`, `uid`, `sem_1_html_unit_1`, `sem_1_html_unit_2`, `sem_1_html_unit_3`, `sem_1_html_unit_4`, `sem_1_sdot_unit_3`, `sem_2_fco_unit_1`, `sem_2_fco_unit_2`, `sem_2_sdot_unit_1`, `sem_2_sdot_unit_2`, `sem_3_cpp_unit_1`, `sem_3_cpp_unit_2`, `sem_3_cpp_unit_3`, `sem_3_php_unit_1`, `sem_4_java_unit_1`, `sem_4_java_unit_2`, `sem_5_python_unit_1`, `sem_6_laravel_unit_1`) VALUES
(1, -1, -1, 'A', '123456', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1),
(2, -1, -1, 'A', '21004500210045', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1),
(1, 0, -1, 'A', '21004500210167', 0, -1, 0, 0, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`ind`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `phone` (`phone`,`email`);

--
-- Indexes for table `student_result`
--
ALTER TABLE `student_result`
  ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `ind` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
