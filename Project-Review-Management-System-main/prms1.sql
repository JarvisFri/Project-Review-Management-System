-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 07:04 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prms1`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `FID` int(3) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Phone` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Dept` varchar(5) NOT NULL,
  `Cabin_no` varchar(5) NOT NULL,
  `Building` varchar(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`FID`, `Name`, `Phone`, `email`, `Dept`, `Cabin_no`, `Building`, `username`, `password`) VALUES
(1, 'Lakshmi', 1234569870, 'lakshmi@gmail.com', 'SCOPE', 'A22', 'SJT', 'Lakshmi123', 'Lakshmi123'),
(2, 'Rajarajan', 1234512345, 'rajan@gmail.com', 'SENSE', 'A23', 'TT', 'Rajarajan123', 'Rajarajan123'),
(3, 'Rajkumar', 1234567821, 'Rajkumar123@gmail.com', 'SENSE', 'A24', 'SMV', 'Rajkumar123', ''),
(4, 'Abc', 1234554323, 'abc@gmail.com', 'SITE', 'A25', 'MB', 'Abc123', 'Abc123'),
(5, 'Def', 1234554324, 'def@gmail.com', 'SCOPE', 'A26', 'SJT', 'Def123', 'Def123'),
(6, 'xyz', 1234567809, 'xyz123@gmail.com', 'SENSE', 'A31', 'SJT', 'xyz123', 'xyz123');

-- --------------------------------------------------------

--
-- Table structure for table `f_location`
--

CREATE TABLE `f_location` (
  `Building` varchar(5) NOT NULL,
  `Open_hour` time NOT NULL,
  `Close_hour` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f_location`
--

INSERT INTO `f_location` (`Building`, `Open_hour`, `Close_hour`) VALUES
('MB', '01:00:00', '21:00:00'),
('SJT', '02:56:10', '16:56:10'),
('SMV', '17:56:53', '02:33:53'),
('TT', '00:56:35', '07:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `RegNo` int(3) NOT NULL,
  `MF1` int(3) NOT NULL,
  `MF2` int(3) NOT NULL,
  `MF3` int(3) NOT NULL,
  `avg` int(3) NOT NULL,
  `PID` int(3) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`RegNo`, `MF1`, `MF2`, `MF3`, `avg`, `PID`, `Status`) VALUES
(1, 66, 35, 90, 64, 1, 'Uploaded'),
(1, 95, 75, 95, 90, 2, 'Uploaded'),
(1, 0, 0, 0, 0, 3, 'Uploaded'),
(1, 0, 0, 0, 0, 4, 'Uploaded'),
(2, 60, 0, 0, 20, 1, ''),
(3, 45, 0, 0, 15, 1, 'Not Uploaded');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `RegNo` int(3) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `DOB` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `TID` int(3) NOT NULL,
  `school` varchar(5) NOT NULL,
  `interests` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`RegNo`, `Name`, `Phone`, `Gender`, `DOB`, `email`, `TID`, `school`, `interests`, `username`, `password`) VALUES
(1, 'Yash', 1234554321, 'M', '2020-10-08', 'angsda@gmail.com', 1, 'SCOPE', 'coding', 'Yash123', 'Yash123'),
(2, 'Raj', 1234123412, 'M', '2020-10-07', 'raj123@gmail.com', 1, 'SENSE', 'Sleeping', 'Raj123', 'Raj123'),
(3, 'Sriniket', 1234512341, 'M', '2020-10-02', 'Sriniket@gmail.com', 1, 'SITE', 'playing', 'Sriniket123', 'Sriniket123'),
(4, 'Rahul', 987654321, 'M', '2020-10-27', 'Rahul@gmail.com', 1, 'SENSE', 'coding', 'Rahul123', 'Rahul123'),
(5, 'Sita', 987650987, 'F', '2020-10-17', 'Sita', 2, 'SCOPE', 'gaming', 'Sita123', 'Sita123'),
(6, 'Rena', 1234554322, 'F', '2020-10-10', 'Rena', 2, 'SITE', 'sleep', 'Rena123', 'Rena123'),
(7, 'Rohan', 1234512347, 'M', '2020-10-19', 'Rohan', 2, 'SENSE', 'coding', 'Rohan123', 'Rohan123');

-- --------------------------------------------------------

--
-- Table structure for table `panel`
--

CREATE TABLE `panel` (
  `Pan_ID` int(3) NOT NULL,
  `FID1` int(3) NOT NULL,
  `FID2` int(3) NOT NULL,
  `FID3` int(3) NOT NULL,
  `Expertise` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panel`
--

INSERT INTO `panel` (`Pan_ID`, `FID1`, `FID2`, `FID3`, `Expertise`) VALUES
(1, 1, 2, 3, 'Expertise'),
(2, 4, 5, 6, 'Expertise');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `PID` int(3) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Init_Date` date NOT NULL,
  `FID` int(3) NOT NULL,
  `HW_comp` varchar(25) NOT NULL,
  `SW_comp` varchar(25) NOT NULL,
  `Desp` varchar(40) NOT NULL,
  `Pan_ID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`PID`, `Name`, `Init_Date`, `FID`, `HW_comp`, `SW_comp`, `Desp`, `Pan_ID`) VALUES
(1, 'FirstWeb', '2020-10-16', 1, 'Nothing', 'Many Things', 'Sure, alot many things', 1),
(2, 'SecondWeb', '2020-10-09', 2, 'Nothing', 'Many Things', 'Sure, alot many things', 1),
(3, 'ThirdWeb', '2020-11-05', 6, 'Nothing', 'Everything', 'Enter the Description', 1),
(4, 'FouthWeb', '2020-10-14', 4, 'Nothing', 'Everything', 'Enter the Description', 2);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `TID` int(3) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Estd_Date` date NOT NULL,
  `No_of_mem` int(2) NOT NULL,
  `FID` int(3) NOT NULL,
  `Leader` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`TID`, `Name`, `Estd_Date`, `No_of_mem`, `FID`, `Leader`) VALUES
(1, 'Anonymous', '2020-10-14', 4, 1, 1),
(2, 'Not Anonymous', '2020-10-21', 4, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `team_identifier`
--

CREATE TABLE `team_identifier` (
  `TID` int(3) NOT NULL,
  `PID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_identifier`
--

INSERT INTO `team_identifier` (`TID`, `PID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 2),
(2, 3),
(2, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`FID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `Phone` (`Phone`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `f_location`
--
ALTER TABLE `f_location`
  ADD PRIMARY KEY (`Building`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`RegNo`,`PID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`RegNo`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `Phone` (`Phone`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `panel`
--
ALTER TABLE `panel`
  ADD PRIMARY KEY (`Pan_ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`TID`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD UNIQUE KEY `FID` (`FID`);

--
-- Indexes for table `team_identifier`
--
ALTER TABLE `team_identifier`
  ADD PRIMARY KEY (`TID`,`PID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `FID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `panel`
--
ALTER TABLE `panel`
  MODIFY `Pan_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
