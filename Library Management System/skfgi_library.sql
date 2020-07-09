-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 08:17 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skfgi_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `ISBN_NO` int(10) NOT NULL,
  `Username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`ISBN_NO`, `Username`) VALUES
(3, ''),
(5, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `ISBN_NO` int(20) NOT NULL,
  `BOOK_NAME` varchar(50) NOT NULL,
  `AUTHER` varchar(50) NOT NULL,
  `PUBLISHER` varchar(50) NOT NULL,
  `DEPERTMENT` varchar(30) NOT NULL,
  `ISSUED` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`ISBN_NO`, `BOOK_NAME`, `AUTHER`, `PUBLISHER`, `DEPERTMENT`, `ISSUED`) VALUES
(1, 'c', 'balaguruswamy', 'TMH', 'CSE & ECE', 0),
(2, 'c', 'balaguruswamy', 'TMH', 'CSE', 0),
(3, 'java', 'balaguruswamy', 'TMH', 'CSE', 1),
(5, 'java', 'balaguruswamy', 'TMH', 'CSE', 1),
(6, 'data structure', 'BALUJA', 'laxmi', 'CSE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `Name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Dob` date NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `tou` varchar(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Phone` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`Name`, `Address`, `Dob`, `Username`, `Password`, `tou`, `location`, `Gender`, `Phone`) VALUES
('MANAB  Das', '113,RAMKRISHNA PALLY', '2010-09-10', 'abc', 'asd', 'Student', 'jkd', 'Male', 9874465365),
('joy chatterjee', '113,RAMKRISHNA PALLY', '0000-00-00', 'ADMIN', 'asd', 'Admin', 'jkd', 'Male', 9874465365),
('AMITAVA HALDER', 'HOWRAH', '1982-10-09', 'AMIT', 'AMIT', 'Admin', 'ANDUL', 'Male', 9874465356),
('kaustuv deb', 'kolkata', '0000-00-00', 'kd123', 'kd123', 'Admin', 'hooghly', 'Male', 9874465368);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`ISBN_NO`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`ISBN_NO`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`Username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
