-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 07:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realstate`
--

-- --------------------------------------------------------

--
-- Table structure for table `broker`
--

CREATE TABLE `broker` (
  `ID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `exp` int(10) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `comm` decimal(10,0) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `broker`
--

INSERT INTO `broker` (`ID`, `name`, `contact`, `email`, `exp`, `addr`, `comm`, `status`) VALUES
(14, 'Rahul Rai', '987765789', 'rahulrai@gmail.com', 3, 'bhilai sector 5', '30', 'active'),
(15, 'Devendra Kumar Dewangan', '7897654389', 'dewaifeeigt@gmail.com', 3, 'btm 2nd stage', '2', 'active'),
(16, 'Devansh', '7389606968', 'devansh@gmail.com', 3, 'Risali', '23', 'active'),
(19, 'Danshu', '4563389479', 'danshu@gmail.com', 4, 'Risali', '5', 'active'),
(20, 'Saptu builder', '9234567891', 'saptu@gmail.com', 0, 'Banglaore btm 2nd stage', '4', 'active'),
(21, 'kunal pvt limited', '879567390', 'dhangunkunal@gmail.com', 4, 'Sambhlapur,district-balod', '4', 'active'),
(22, 'Yogendra', '9645678961', 'yogendra@gmail.com', 3, 'Umarpoti', '23', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('devendra.dew07@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `ID` int(11) NOT NULL,
  `ownername` varchar(100) NOT NULL,
  `ocontact` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zipcode` int(10) NOT NULL,
  `kindofproperty` varchar(200) NOT NULL,
  `area` varchar(200) NOT NULL,
  `totalvaluation` int(10) NOT NULL,
  `propertystatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`ID`, `ownername`, `ocontact`, `address`, `city`, `zipcode`, `kindofproperty`, `area`, `totalvaluation`, `propertystatus`) VALUES
(4, 'Shubham', '7389676968', 'Risali', 'Bhilai', 490001, 'flat', '2000', 480000, 'active'),
(5, 'Shankha Panja', '7656789654', 'Banglaore btm 2nd stage', 'Banglore', 560076, 'Flat', '2000', 5000000, 'active'),
(7, 'Shivlal Dhangun', '678956783', 'Sambhlapur,district-balod', 'Sambhalpur', 600076, 'House', '3000', 2000000, 'active'),
(8, 'D vishal', '6579789864', 'Sector 5 Npa bhilai', 'bhilai', 490006, '3bhk House', '2000', 500000, 'active'),
(9, 'Santosh Kumar', '9329989761', 'Umarpoti', 'Bhilai', 490006, 'House', '2000', 3500000, 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `broker`
--
ALTER TABLE `broker`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `address` (`address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `broker`
--
ALTER TABLE `broker`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
