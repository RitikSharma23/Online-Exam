-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 04:55 AM
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
(1, 'ritik', 'sharma', 'ritikss748@gmail.com', '11', '22'),
(2, 'shanu', 'pandey', 'shanu1@gmail.com', '33', '44');

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
('ritik', 8060809, '2022-09-06', 1, 'cpp', 2, 'A', 0, 'jj', 'j', 'j', 'j', 'j', 'a'),
('ritik', 8060809, '2022-09-06', 1, 'cpp', 2, 'A', 1, 'l', 'l', 'l', 'l', 'l', 'b');

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
('11', '2022-09-06', 8060809, 1, 'A', 'cpp', 2, 2, 'start');

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
  `dob` date COLLATE utf8_unicode_ci DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `dev` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `uid` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `ayear` year COLLATE utf8_unicode_ci NOT NULL,
  `flat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pin` int COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll`, `fname`, `lname`, `phone`, `email`, `semester`, `dev`, `uid`, `pass`, `sem_1_cpp_unit_1`, `sem_1_cpp_unit_2`, `sem_1_fco_unit_1`, `sem_1_html_unit_1`, `sem_1_sdot_unit_1`, `sem_2_cpp_unit_1`, `sem_3_php_unit_1`) VALUES
(8, 'gh', 'shah', '456', 'www', 2, 'B', '111', 'raj5', 0, 0, 0, 0, 0, 0, 0),
(3, 'vrutik', 'jagad', '9004365963', 'vrutikjagad1@gmail.com', 3, 'A', '21004500210048', 'vrutik123', 0, 0, 0, 0, 0, 0, 0),
(2, 'Shanu', 'Pandey', '9106692865', 'shanukumarpandey2003@gmail.com', 3, 'B', '21004500210088', 'shanu123', 0, 0, 0, 0, 0, 0, 3),
(1, 'Ritik', 'Sharma', '8866892314', 'ritikss748@gmail.com', 1, 'A', '21004500210167', 'ritik123', 1, 2, 2, 0, 0, 0, 0),
(9, 'nmv', 'shah', '789', 'eee', 3, 'A', '222', 'raj8', 0, 0, 0, 0, 0, 0, 0),
(6, 'chuna', 'shah', '2379', 'iouyre', 3, 'A', '598988', 'raj8', 0, 0, 0, 0, 0, 0, 0),
(5, 'kathan', 'shah', '77787658', 'iouykj', 2, 'B', '798987', 'raj5', 0, 0, 0, 0, 0, 0, 0),
(7, 'ert', 'shah', '123', 'qqq', 1, 'A', '986', 'raj1', 0, 0, 0, 0, 0, 0, 0),
(4, 'raj', 'shah', '7777', 'iouy', 1, 'A', '98986', 'raj1', 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `ind` (`ind`);

--
-- Indexes for table `question_details`
--
ALTER TABLE `question_details`
  ADD UNIQUE KEY `question_id` (`question_id`);

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
  MODIFY `ind` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
