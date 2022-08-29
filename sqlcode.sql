-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 06:30 PM
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
  `ind` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ind`, `fname`, `lname`, `email`, `phone`, `pass`) VALUES
(1, 'ritik', 'sharma', 'ritikss748@gmail.com', '11', '22');

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
('ritik', 19290755, '2022-08-29', 1, 'html', 1, 'B', 0, 'this ', 'is', 'ritik', 'edit', 'xx', 'd'),
('ritik', 19290755, '2022-08-29', 1, 'html', 1, 'B', 1, 'hello', 'yy', 'yy', 'yy', 'world', 'd'),
('ritik', 19290755, '2022-08-29', 1, 'html', 1, 'B', 2, 'gg', 'zz', 'shanu', 'alright', 'zz', 'c'),
('ritik', 47290708, '2022-08-29', 7, 'python', 1, 'B', 1, 'xx', 'xx', 'xx', 'xx', 'xx', 'b'),
('ritik', 47290708, '2022-08-29', 7, 'python', 1, 'B', 0, 'yy', 'yy', 'yy', 'yy', 'yy', 'c');

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

--
-- Dumping data for table `question_details`
--

INSERT INTO `question_details` (`user`, `date`, `question_id`, `sem`, `dev`, `subject`, `unit`, `total`, `status`) VALUES
('ritik', '2022-08-29', 19290755, 1, 'B', 'html', 1, 2, 'stop'),
('ritik', '2022-08-29', 47290708, 7, 'B', 'python', 1, 2, 'stop');

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
  `semester` int(11) DEFAULT NULL,
  `uid` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sem_1_html_unit_1` int(11) NOT NULL,
  `sem_2_sdot_unit_1` int(11) NOT NULL,
  `sem_3_cpp_unit_1` int(11) NOT NULL,
  `sem_3_ot_unit_1` int(11) NOT NULL,
  `sem_4_java_unit_1` int(11) NOT NULL,
  `sem_4_java_unit_2` int(11) NOT NULL,
  `sem_5_php_unit_1` int(11) NOT NULL,
  `sem_5_php_unit_2` int(11) NOT NULL,
  `sem_7_python_unit_1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll`, `fname`, `lname`, `phone`, `email`, `semester`, `uid`, `pass`, `sem_1_html_unit_1`, `sem_2_sdot_unit_1`, `sem_3_cpp_unit_1`, `sem_3_ot_unit_1`, `sem_4_java_unit_1`, `sem_4_java_unit_2`, `sem_5_php_unit_1`, `sem_5_php_unit_2`, `sem_7_python_unit_1`) VALUES
(3, 'vrutik', 'jagad', NULL, NULL, NULL, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Shanu', 'Pandey', '9106692865', 'shanukumarpandey2003@gmail.com', 3, '21004500210088', 'shanu123', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, 'Ritik', 'Sharma', '8866892314', 'ritikss748@gmail.com', 3, '21004500210167', 'ritik123', 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `ind` (`ind`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ind` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
