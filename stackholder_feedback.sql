-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2023 at 06:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stackholder_feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(30) NOT NULL,
  `Mobile` varchar(12) NOT NULL,
  `Id` varchar(10) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Program` varchar(20) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Regulation` varchar(4) NOT NULL,
  `R1` int(3) NOT NULL,
  `R2` int(3) NOT NULL,
  `R3` int(3) NOT NULL,
  `R4` int(3) NOT NULL,
  `R5` int(3) NOT NULL,
  `R6` int(3) NOT NULL,
  `R7` int(3) NOT NULL,
  `Feedback` varchar(100) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `Mobile`, `Id`, `Year`, `Type`, `Email`, `Gender`, `Program`, `Course`, `Branch`, `Regulation`, `R1`, `R2`, `R3`, `R4`, `R5`, `R6`, `R7`, `Feedback`, `Time`) VALUES
('ABCDEF GHI', '1234567890', '211FA00001', '2021-2022', 'Student', 'abc@gmail.com', 'male', 'UG', 'B.Tech', 'CSE', 'R22', 5, 4, 4, 5, 3, 5, 4, 'Improve lab facility', '2023-10-10 16:47:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
