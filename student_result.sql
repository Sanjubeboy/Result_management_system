-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 06:04 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_result`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Course_ID` varchar(10) NOT NULL,
  `Course_Name` varchar(30) NOT NULL,
  `Course_Description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course_ID`, `Course_Name`, `Course_Description`) VALUES
('201', 'Computer Programming', 'This is CP'),
('301', 'Operating Systems', 'This is OS'),
('401', 'Physics', 'This is physics'),
('501', 'Mathematics', 'This is m1'),
('801', 'Computer Science', 'This is CS');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Student_ID` int(4) NOT NULL,
  `Course_Name` varchar(20) NOT NULL,
  `Sub1` int(10) NOT NULL,
  `Sub2` int(10) NOT NULL,
  `Sub3` int(10) NOT NULL,
  `Sub4` int(10) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Student_ID`, `Course_Name`, `Sub1`, `Sub2`, `Sub3`, `Sub4`, `Status`) VALUES
(8, 'Computer Science', 77, 80, 42, 67, 'Pass'),
(8, 'Computer Science', 77, 80, 42, 67, 'Pass');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(4) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(15) NOT NULL,
  `State` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Firstname`, `Lastname`, `Gender`, `Address`, `State`, `City`, `DOB`, `Password`, `Course`, `Email`) VALUES
(8, 'Kunal', 'Tomar', 'Pune', 'Male', 'Maharashtra', 'Mumbai', '31-2-2000', 'Kunal@10', 'Mathematics', 'kunal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(4) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `State` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `Firstname`, `Lastname`, `Address`, `Gender`, `State`, `City`, `Password`, `Course`, `Email`) VALUES
(3, 'Ashwini', 'Shaha', 'Daund', 'Female', 'Gujarat', 'Ahemdabad', 'Ashwini11', 'Marketing', 'ashwini@90gmail.com'),
(7, 'Rajesh', 'Gupta', 'Pune', 'Male', 'Maharashtra', 'Mumbai', 'Rajesh@10', 'Physics', 'rajesh@gmail.com'),
(9, 'Ramesh', 'Sharma', 'Mumbai', 'Male', 'Maharashtra', 'Mumbai', 'Ramesh@10', 'Operating Systems', 'ramesh@gmail.com'),
(10, 'Nutan', 'Gupta', 'Mumbai', 'Female', 'Maharashtra', 'Mumbai', 'Nutan@10', 'Physics', 'nutan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Course_ID`),
  ADD UNIQUE KEY `Course_Name` (`Course_Name`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD KEY `ID` (`Student_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD UNIQUE KEY `ID` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
