-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 12:23 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `date_info`
--

CREATE TABLE `date_info` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `day` varchar(400) NOT NULL,
  `reserve1` varchar(100) NOT NULL,
  `reserve2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `date_info`
--

INSERT INTO `date_info` (`id`, `user`, `text`, `year`, `month`, `day`, `reserve1`, `reserve2`) VALUES
(1, 'John', '', '2020', 'Oct', '1', '2020 Oct 1', ''),
(2, 'John', '', '2020', 'Oct', '2', '2020 Oct 2', ''),
(3, 'John', 'Start Work 9pm', '2020', 'Oct', '3', '2020 Oct 3', ''),
(4, 'John', '1st Week of Church Day', '2020', 'Oct', '4', '2020 Oct 4', ''),
(5, 'John', '', '2020', 'Oct', '5', '2020 Oct 5', ''),
(6, 'John', '', '2020', 'Oct', '6', '2020 Oct 6', ''),
(7, 'John', '', '2020', 'Oct', '7', '2020 Oct 7', ''),
(8, 'John', '', '2020', 'Oct', '8', '2020 Oct 8', ''),
(9, 'John', '', '2020', 'Oct', '9', '2020 Oct 9', ''),
(10, 'John', 'Absent', '2020', 'Oct', '10', '2020 Oct 10', ''),
(11, 'John', '2nd Week Church Day', '2020', 'Oct', '11', '2020 Oct 11', ''),
(12, 'John', '', '2020', 'Oct', '12', '2020 Oct 12', ''),
(13, 'John', '', '2020', 'Oct', '13', '2020 Oct 13', ''),
(14, 'John', '', '2020', 'Oct', '14', '2020 Oct 14', ''),
(15, 'John', 'Payday', '2020', 'Oct', '15', '2020 Oct 15', ''),
(16, 'John', '', '2020', 'Oct', '16', '2020 Oct 16', ''),
(17, 'John', 'Dayoff', '2020', 'Oct', '17', '2020 Oct 17', ''),
(18, 'John', '3rd Week Church Day', '2020', 'Oct', '18', '2020 Oct 18', ''),
(19, 'John', '', '2020', 'Oct', '19', '2020 Oct 19', ''),
(20, 'John', '', '2020', 'Oct', '20', '2020 Oct 20', ''),
(21, 'John', '', '2020', 'Oct', '21', '2020 Oct 21', ''),
(22, 'John', '', '2020', 'Oct', '22', '2020 Oct 22', ''),
(23, 'John', '', '2020', 'Oct', '23', '2020 Oct 23', ''),
(24, 'John', 'Start Work 9pm', '2020', 'Oct', '24', '2020 Oct 24', ''),
(25, 'John', '4th Week Church Day', '2020', 'Oct', '25', '2020 Oct 25', ''),
(26, 'John', '', '2020', 'Oct', '26', '2020 Oct 26', ''),
(27, 'John', '', '2020', 'Oct', '27', '2020 Oct 27', ''),
(28, 'John', '', '2020', 'Oct', '28', '2020 Oct 28', ''),
(29, 'John', '', '2020', 'Oct', '29', '2020 Oct 29', ''),
(30, 'John', 'Payday', '2020', 'Oct', '30', '2020 Oct 30', ''),
(31, 'John', 'Holiday', '2020', 'Oct', '31', '2020 Oct 31', ''),
(32, 'John', 'Haloween', '2020', 'Nov', '1', '2020 Nov 1', ''),
(33, 'John', 'All Souls Day', '2020', 'Nov', '2', '2020 Nov 2', ''),
(34, 'John', '', '2020', 'Nov', '3', '2020 Nov 3', ''),
(35, 'John', '', '2020', 'Nov', '4', '2020 Nov 4', ''),
(36, 'John', '', '2020', 'Nov', '5', '2020 Nov 5', ''),
(37, 'John', '', '2020', 'Nov', '6', '2020 Nov 6', ''),
(38, 'John', '', '2020', 'Nov', '7', '2020 Nov 7', ''),
(39, 'John', '', '2020', 'Nov', '8', '2020 Nov 8', ''),
(40, 'John', '', '2020', 'Nov', '9', '2020 Nov 9', ''),
(41, 'John', '', '2020', 'Nov', '10', '2020 Nov 10', ''),
(42, 'John', '', '2020', 'Nov', '11', '2020 Nov 11', ''),
(43, 'John', '', '2020', 'Nov', '12', '2020 Nov 12', ''),
(44, 'John', '', '2020', 'Nov', '13', '2020 Nov 13', ''),
(45, 'John', '', '2020', 'Nov', '14', '2020 Nov 14', ''),
(46, 'John', '', '2020', 'Nov', '15', '2020 Nov 15', ''),
(47, 'John', '', '2020', 'Nov', '16', '2020 Nov 16', ''),
(48, 'John', '', '2020', 'Nov', '17', '2020 Nov 17', ''),
(49, 'John', '', '2020', 'Nov', '18', '2020 Nov 18', ''),
(50, 'John', '', '2020', 'Nov', '19', '2020 Nov 19', ''),
(51, 'John', '', '2020', 'Nov', '20', '2020 Nov 20', ''),
(52, 'John', '', '2020', 'Nov', '21', '2020 Nov 21', ''),
(53, 'John', '', '2020', 'Nov', '22', '2020 Nov 22', ''),
(54, 'John', '', '2020', 'Nov', '23', '2020 Nov 23', ''),
(55, 'John', '', '2020', 'Nov', '24', '2020 Nov 24', ''),
(56, 'John', '', '2020', 'Nov', '25', '2020 Nov 25', ''),
(57, 'John', '', '2020', 'Nov', '26', '2020 Nov 26', ''),
(58, 'John', '', '2020', 'Nov', '27', '2020 Nov 27', ''),
(59, 'John', '', '2020', 'Nov', '28', '2020 Nov 28', ''),
(60, 'John', '', '2020', 'Nov', '29', '2020 Nov 29', ''),
(61, 'John', 'Rizal Day', '2020', 'Nov', '30', '2020 Nov 30', ''),
(62, 'John', '', '2020', 'Dec', '1', '2020 Dec 1', ''),
(63, 'John', '', '2020', 'Dec', '2', '2020 Dec 2', ''),
(64, 'John', '', '2020', 'Dec', '3', '2020 Dec 3', ''),
(65, 'John', '', '2020', 'Dec', '4', '2020 Dec 4', ''),
(66, 'John', '', '2020', 'Dec', '5', '2020 Dec 5', ''),
(67, 'John', '', '2020', 'Dec', '6', '2020 Dec 6', ''),
(68, 'John', '', '2020', 'Dec', '7', '2020 Dec 7', ''),
(69, 'John', '', '2020', 'Dec', '8', '2020 Dec 8', ''),
(70, 'John', '', '2020', 'Dec', '9', '2020 Dec 9', ''),
(71, 'John', '', '2020', 'Dec', '10', '2020 Dec 10', ''),
(72, 'John', '', '2020', 'Dec', '11', '2020 Dec 11', ''),
(73, 'John', '', '2020', 'Dec', '12', '2020 Dec 12', ''),
(74, 'John', '', '2020', 'Dec', '13', '2020 Dec 13', ''),
(75, 'John', '', '2020', 'Dec', '14', '2020 Dec 14', ''),
(76, 'John', '', '2020', 'Dec', '15', '2020 Dec 15', ''),
(77, 'John', '', '2020', 'Dec', '16', '2020 Dec 16', ''),
(78, 'John', '', '2020', 'Dec', '17', '2020 Dec 17', ''),
(79, 'John', '', '2020', 'Dec', '18', '2020 Dec 18', ''),
(80, 'John', '', '2020', 'Dec', '19', '2020 Dec 19', ''),
(81, 'John', 'Christmast Party', '2020', 'Dec', '20', '2020 Dec 20', ''),
(82, 'John', '', '2020', 'Dec', '21', '2020 Dec 21', ''),
(83, 'John', '', '2020', 'Dec', '22', '2020 Dec 22', ''),
(84, 'John', 'Last Day Of Work', '2020', 'Dec', '23', '2020 Dec 23', ''),
(85, 'John', 'Noche Buena', '2020', 'Dec', '24', '2020 Dec 24', ''),
(86, 'John', 'Christmast Day', '2020', 'Dec', '25', '2020 Dec 25', ''),
(87, 'John', 'No Work', '2020', 'Dec', '26', '2020 Dec 26', ''),
(88, 'John', 'No Work', '2020', 'Dec', '27', '2020 Dec 27', ''),
(89, 'John', 'No Work', '2020', 'Dec', '28', '2020 Dec 28', ''),
(90, 'John', 'No Work', '2020', 'Dec', '29', '2020 Dec 29', ''),
(91, 'John', 'No Work', '2020', 'Dec', '30', '2020 Dec 30', ''),
(92, 'John', 'Happy New Year', '2020', 'Dec', '31', '2020 Dec 31', '');

-- --------------------------------------------------------

--
-- Table structure for table `test_info`
--

CREATE TABLE `test_info` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_info`
--

INSERT INTO `test_info` (`id`, `user`) VALUES
(1, 'John');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `date_info`
--
ALTER TABLE `date_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_info`
--
ALTER TABLE `test_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `date_info`
--
ALTER TABLE `date_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `test_info`
--
ALTER TABLE `test_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
