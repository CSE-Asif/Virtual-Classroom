-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2020 at 05:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class`
--

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `cname` varchar(255) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `iname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`cname`, `cid`, `password`, `instructor`, `iname`) VALUES
('Microprocessor', 'mic', '123456', '01333987123', 'Mahadi Hasan'),
('Object Oriented Programming Language', 'oop', '123789', '01929252671', 'Khadem Mohammad Asif-uz-zaman'),
('Operating System', 'os', '123456', '01929252671', 'Khadem Mohammad Asif-uz-zaman'),
('Structured Programming Langusge', 'spl', 'spl123', '01929252671', 'Khadem Mohammad Asif-uz-zaman'),
('Technical Writing', 'tw', '12345', '01929252671', 'Khadem Mohammad Asif-uz-zaman');

-- --------------------------------------------------------

--
-- Table structure for table `mic_a`
--

CREATE TABLE `mic_a` (
  `aby` varchar(255) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qid` int(11) DEFAULT NULL,
  `a` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mic_q`
--

CREATE TABLE `mic_q` (
  `qby` varchar(255) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qid` int(11) NOT NULL,
  `q` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `oop_a`
--

CREATE TABLE `oop_a` (
  `aby` varchar(255) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qid` int(11) DEFAULT NULL,
  `a` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `oop_q`
--

CREATE TABLE `oop_q` (
  `qby` varchar(255) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qid` int(11) NOT NULL,
  `q` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `os_a`
--

CREATE TABLE `os_a` (
  `aby` varchar(255) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qid` int(11) DEFAULT NULL,
  `a` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `os_a`
--

INSERT INTO `os_a` (`aby`, `ts`, `qid`, `a`) VALUES
('Asif_NEUB', '2020-10-11 20:58:34', 1, 'Hello Sir, How are You?'),
('Asif_NEUB', '2020-10-11 21:04:19', 2, 'An Operating System (OS) is an interface between a computer user and computer hardware. An operating system is a software which performs all the basic tasks like file management, memory management, process management, handling input and output, and controlling peripheral devices such as disk drives and printers.'),
('Asif_NEUB', '2020-10-11 21:18:04', 2, 'An Operating System (OS) is an interface between a computer user and computer hardware. An operating system is a software which performs all the basic tasks like file management, memory management, process management, handling input and output, and controlling peripheral devices such as disk drives and printers.'),
('Asif_NEUB', '2020-10-11 21:18:09', 2, 'An Operating System (OS) is an interface between a computer user and computer hardware. An operating system is a software which performs all the basic tasks like file management, memory management, process management, handling input and output, and controlling peripheral devices such as disk drives and printers.'),
('Rudro_NEUB', '2020-10-14 04:46:14', 1, 'Hello . How are you?');

-- --------------------------------------------------------

--
-- Table structure for table `os_q`
--

CREATE TABLE `os_q` (
  `qby` varchar(255) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qid` int(11) NOT NULL,
  `q` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `os_q`
--

INSERT INTO `os_q` (`qby`, `ts`, `qid`, `q`) VALUES
('Asif_NEUB', '2020-10-11 20:53:52', 1, 'Hello Everyone!'),
('M_Hasan', '2020-10-11 21:02:56', 2, 'What is OS?'),
('Asif_NEUB', '2020-10-11 21:19:15', 3, 'Everyone! Give your registration ID please.'),
('Asif_NEUB', '2020-10-12 05:44:55', 4, 'Describe OS.'),
('Asif_NEUB', '2020-10-12 21:12:20', 5, 'How are you All?');

-- --------------------------------------------------------

--
-- Table structure for table `spl_a`
--

CREATE TABLE `spl_a` (
  `aby` varchar(255) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qid` int(11) DEFAULT NULL,
  `a` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `spl_q`
--

CREATE TABLE `spl_q` (
  `qby` varchar(255) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qid` int(11) NOT NULL,
  `q` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stclass`
--

CREATE TABLE `stclass` (
  `cid` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stclass`
--

INSERT INTO `stclass` (`cid`, `phone`, `uname`) VALUES
('mic', '01333987123', 'Md_hasan'),
('oop', '01929252671', 'Asif_NEUB'),
('os', '01333987123', 'M_Hasan'),
('os', '01456987123', 'samia_123'),
('os', '01712365422', 'Taher_NEUB'),
('os', '01724022762', 'Rudro_NEUB'),
('os', '01929252671', 'Asif_NEUB'),
('spl', '01929252671', 'Asif_NEUB'),
('tw', '01724022762', 'Rudro_NEUB'),
('tw', '01929252671', 'Asif_NEUB');

-- --------------------------------------------------------

--
-- Table structure for table `tw_a`
--

CREATE TABLE `tw_a` (
  `aby` varchar(255) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qid` int(11) DEFAULT NULL,
  `a` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tw_q`
--

CREATE TABLE `tw_q` (
  `qby` varchar(255) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qid` int(11) NOT NULL,
  `q` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tw_q`
--

INSERT INTO `tw_q` (`qby`, `ts`, `qid`, `q`) VALUES
('Rudro_NEUB', '2020-10-14 05:52:29', 1, 'hello Everyone!');

-- --------------------------------------------------------

--
-- Table structure for table `utable`
--

CREATE TABLE `utable` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utable`
--

INSERT INTO `utable` (`fname`, `lname`, `email`, `uname`, `phone`, `password`) VALUES
('Abu Talha', 'Pappu', 'abupappu@gmail.com', 'AT_Pappu', '01233987123', 'asdf'),
('Mahadi', 'Hasan', 'mhasan464696@gmail.com', 'Md_hasan', '01333987123', '123789'),
('samia', 'munni', 'samia@gmail.com', 'samia_123', '01456987123', '123456'),
('Sobrul', 'Karim', 'skarim@gmail.com', 'Sobrul_NEUB', '01567987123', 'sobrul'),
('Rima', 'Akter', 'Rima@gmail.com', 'Rima_NEUB', '01673987123', '456789'),
('Taher', 'Sayed', 'taher.sayed@gmail.com', 'Taher_NEUB', '01712365422', '123456'),
('Rudro', 'Singh', 'rudrosingh82@gmail.com', 'Rudro_NEUB', '01724022762', '456abc'),
('Khadem Mohammad', 'Asif-uz-zaman', 'asifsami2000@gmail.com', 'Asif_NEUB', '01929252671', '1216602638');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `mic_q`
--
ALTER TABLE `mic_q`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `oop_q`
--
ALTER TABLE `oop_q`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `os_q`
--
ALTER TABLE `os_q`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `spl_q`
--
ALTER TABLE `spl_q`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `stclass`
--
ALTER TABLE `stclass`
  ADD PRIMARY KEY (`cid`,`phone`);

--
-- Indexes for table `tw_q`
--
ALTER TABLE `tw_q`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `utable`
--
ALTER TABLE `utable`
  ADD PRIMARY KEY (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mic_q`
--
ALTER TABLE `mic_q`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oop_q`
--
ALTER TABLE `oop_q`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `os_q`
--
ALTER TABLE `os_q`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spl_q`
--
ALTER TABLE `spl_q`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tw_q`
--
ALTER TABLE `tw_q`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
