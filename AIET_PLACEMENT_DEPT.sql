-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2018 at 12:25 PM
-- Server version: 5.7.24-0ubuntu0.18.10.1
-- PHP Version: 7.2.10-0ubuntu1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AIET_PLACEMENT_DEPT`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `desg` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`, `name`, `desg`) VALUES
('admin', '123', 'Chandan Shastri', 'Dev');

-- --------------------------------------------------------

--
-- Table structure for table `drives`
--

CREATE TABLE `drives` (
  `dr_id` int(11) NOT NULL,
  `drname` varchar(40) NOT NULL,
  `drdetails` varchar(500) NOT NULL,
  `drdate` date NOT NULL,
  `drtime` time NOT NULL,
  `drlocation` varchar(60) NOT NULL,
  `drtype` varchar(50) NOT NULL,
  `drbranch` varchar(20) NOT NULL,
  `drcutoff` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drives`
--

INSERT INTO `drives` (`dr_id`, `drname`, `drdetails`, `drdate`, `drtime`, `drlocation`, `drtype`, `drbranch`, `drcutoff`) VALUES
(1, 'efrewr', 'retret', '2018-12-08', '04:04:00', 'Dakshina Kannada', 'Support Engineer', 'ISE', 5.5),
(2, 'efrewr', 'retret', '2018-12-08', '04:04:00', 'Dakshina Kannada', 'Support Engineer', 'ISE', 5.5),
(3, 'efrewr', 'retret', '2018-12-08', '04:04:00', 'Dakshina Kannada', 'Support Engineer', 'ISE', 5.5),
(4, 'efrewr', 'retret', '2018-12-08', '04:04:00', 'Dakshina Kannada', 'Support Engineer', 'ISE', 5.5),
(5, 'efrewr', 'retret', '2018-12-08', '04:04:00', 'Dakshina Kannada', 'Support Engineer', 'ISE', 5.5),
(6, 'efrewr', 'retret', '2018-12-08', '04:04:00', 'Dakshina Kannada', 'Support Engineer', 'ISE', 5.5),
(7, 'efrewr', 'retret', '2018-12-08', '04:04:00', 'Dakshina Kannada', 'Support Engineer', 'ISE', 5.5),
(8, 'efrewr', 'retret', '2018-12-08', '04:04:00', 'Dakshina Kannada', 'Support Engineer', 'ISE', 5.5),
(9, 'efrewr', 'retret', '2018-12-08', '04:04:00', 'Dakshina Kannada', 'Support Engineer', 'ISE', 5.5),
(10, 'efrewr', 'retret', '2018-12-08', '04:04:00', 'Dakshina Kannada', 'Support Engineer', 'ISE', 5.5),
(11, 'efrewr', 'retret', '2018-12-08', '04:04:00', 'Dakshina Kannada', 'Support Engineer', 'ISE', 5.5);

-- --------------------------------------------------------

--
-- Table structure for table `drive_reg`
--

CREATE TABLE `drive_reg` (
  `dr_id` int(11) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `branch` varchar(3) NOT NULL,
  `cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `branch` varchar(3) NOT NULL,
  `sslc` float NOT NULL,
  `puc` float NOT NULL,
  `aggregate` float NOT NULL,
  `yop` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drives`
--
ALTER TABLE `drives`
  ADD PRIMARY KEY (`dr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drives`
--
ALTER TABLE `drives`
  MODIFY `dr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
