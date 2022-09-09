-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 08:14 AM
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
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 5, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 4, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 7, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 6, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 8, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 9, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 10, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 11, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 12, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 14, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 16, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 13, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 17, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 15, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 7, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 6, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 8, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 4, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 10, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 9, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 11, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 5, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 13, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 12, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 0, '2022-09-09', 2, '', 1, 'A', 14, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 42090838, '2022-09-09', 2, 'sdot', 1, 'A', 2, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 42090838, '2022-09-09', 2, 'sdot', 1, 'A', 3, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 42090838, '2022-09-09', 2, 'sdot', 1, 'A', 4, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 42090838, '2022-09-09', 2, 'sdot', 1, 'A', 7, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 42090838, '2022-09-09', 2, 'sdot', 1, 'A', 8, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 42090838, '2022-09-09', 2, 'sdot', 1, 'A', 11, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 42090838, '2022-09-09', 2, 'sdot', 1, 'A', 9, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 42090838, '2022-09-09', 2, 'sdot', 1, 'A', 14, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 42090838, '2022-09-09', 2, 'sdot', 1, 'A', 13, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 42090838, '2022-09-09', 2, 'sdot', 1, 'A', 10, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 42090838, '2022-09-09', 2, 'sdot', 1, 'A', 6, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 42090838, '2022-09-09', 2, 'sdot', 1, 'A', 12, 'what is html', 'a', 'b', 'c', 'd', 'a'),
('Ritik', 42090838, '2022-09-09', 2, 'sdot', 1, 'A', 5, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 42090838, '2022-09-09', 2, 'sdot', 1, 'A', 17, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 42090838, '2022-09-09', 2, 'sdot', 1, 'A', 16, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', 'a'),
('Ritik', 42090838, '2022-09-09', 2, 'sdot', 1, 'A', 15, 'what is html', 'a', 'b', 'c', 'd', 'a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
