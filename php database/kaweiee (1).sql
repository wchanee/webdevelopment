-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:10365
-- Generation Time: Mar 31, 2021 at 08:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaweiee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_`
--

CREATE TABLE `admin_` (
  `AdminID` int(3) NOT NULL,
  `AdminUname` varchar(10) DEFAULT NULL,
  `AdminPswd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_`
--

INSERT INTO `admin_` (`AdminID`, `AdminUname`, `AdminPswd`) VALUES
(1, 'chi', '123456'),
(2, 'katherine', '20031035'),
(3, 'Chanee', '20035739');

-- --------------------------------------------------------

--
-- Table structure for table `user_`
--

CREATE TABLE `user_` (
  `ID` int(5) NOT NULL,
  `Uname` varchar(30) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Tel` varchar(15) DEFAULT NULL,
  `Upassword` varchar(20) DEFAULT NULL,
  `Address` varchar(100) NOT NULL,
  `Job` varchar(50) NOT NULL,
  `Profile` varchar(255) NOT NULL,
  `Status_` varchar(10) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Nick` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Edu` varchar(50) NOT NULL,
  `Fax` varchar(10) NOT NULL,
  `Company` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_`
--

INSERT INTO `user_` (`ID`, `Uname`, `Email`, `Tel`, `Upassword`, `Address`, `Job`, `Profile`, `Status_`, `Gender`, `Nick`, `DOB`, `Edu`, `Fax`, `Company`) VALUES
(3, 'momo', 'momo@gmail.com', '+60123456789', 'momo', 'jyp,seoul,korea', 'twice', 'momo.png', 'approved', 'female', 'momoring', '1996-11-09', 'Dancing university', '12345', 'JYP '),
(49, 'nayeon', 'nayeon@twice.com', '+60189283746', '313123', 'jyp, korea', 'twice', 'nayeon.jpg', 'approved', '', '', '0000-00-00', '', '', ''),
(52, 'vivien', 'vv@gmail.com', '+60126475847', '123', '13,jalan mango, puchong', 'singer', 'profile pic.png', 'approved', 'female', 'vmak', '2002-03-22', 'sunway college', '34567', 'shapo sdn bhd'),
(53, 'seventeen', 'seventeen@gmail.com', '+60172345678', '171717', 'pledis entertaiment soul', 'artist', 'seventeen06.jpg', 'approved', 'male', 'hoshi', '0000-00-00', 'korea university', '17777', 'pledis entertaiment'),
(54, 'sana', 'sana@twice.com', '+60178542956', 'sana', 'jyp,seoul, korea', 'twice', 'sana2.jpg', 'approved', 'female', 'sanake', '1996-12-29', 'Osaka highschool', '666666', 'JYP'),
(56, 'Chanee', 'wchanee@gmail.com', '+60123456789', '20035739', 'Kuala Lumpur', 'Student', '', 'approved', 'Male', 'fish', '2001-10-08', 'DIIT', '888888', 'Sunway College'),
(57, 'jackson', 'jackson@gmail.com', '+60159871236', '999', 'beijing, china', 'idol', 'jackson.jpg', 'approved', 'male', 'qianxi', '2000-11-28', 'Music University', '968712', 'TFboys'),
(62, 'abc', 'abc@gmail.com', '+60163578195', '123', 'zzzzzzz', 'DIIT', 'funny.png', 'approved', 'male', 'funny', '2021-03-31', 'sunway', '8888', 'pledis entertaiment');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_`
--
ALTER TABLE `admin_`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `user_`
--
ALTER TABLE `user_`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_`
--
ALTER TABLE `admin_`
  MODIFY `AdminID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_`
--
ALTER TABLE `user_`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
