-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 10:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BOOOKING ID` int(11) NOT NULL,
  `PASSENGER ID` int(11) DEFAULT NULL,
  `CAR ID` int(11) DEFAULT NULL,
  `PICKUP LOCATION` text DEFAULT NULL,
  `DEPARTURE TIME` time NOT NULL,
  `ARRIVAL TIME` time NOT NULL,
  `TOTAL COST` int(11) NOT NULL,
  `BOOKING DATE` date NOT NULL,
  `PAYMENT STATUS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `CAR ID` int(11) NOT NULL,
  `MODEL` text NOT NULL,
  `PLATE NUMBER` varchar(10) NOT NULL,
  `CAPACITY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `DRIVER ID` int(11) DEFAULT NULL,
  `NAME` varchar(30) NOT NULL,
  `LICENSE NUMBER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `LOCATION ID` int(11) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `ADDRESS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PAYMENT ID` int(11) NOT NULL,
  `BOOKING ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `ConfirmPassword` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Gender` varchar(250) DEFAULT NULL,
  `role` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Firstname`, `Lastname`, `Email`, `Phone`, `Password`, `ConfirmPassword`, `Address`, `Gender`, `role`) VALUES
(1, 'kelia', 'mutesi', 'emelyneumurerwa28@gmail.com', '0787571441', 'agency', 'agency', 'nduba', 'female', 'agency'),
(2, 'STRATON', 'MBABAZI', 'snbabazi@gmail.com', '078888888888', 'Pass@123', 'Pass@123', 'GISOZI', 'male', 'passenger'),
(4, 'izi', 'darling', 'gisu1234@gmail.com', '0788426830', '6666', '6666', 'gicumbi', 'female', 'agency'),
(5, 'KUGUIGUI', 'UFYUUYG', 'KJGUGJU@GKJHHN.COM', 'LIIHUHJLIHIUH', 'OUYUIGUG', 'UGUGJHJGF', 'KJGUKGUKG', 'select', 'passenger');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BOOOKING ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
