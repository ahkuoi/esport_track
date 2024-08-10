-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2024 at 04:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esport_track`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `ID` int(11) NOT NULL,
  `Username` varchar(1000) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`ID`, `Username`, `Password`, `Email`, `Type`) VALUES
(1, 'sai', 'admin123', 'sai@gmail.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `player_ranking_wr`
--

CREATE TABLE `player_ranking_wr` (
  `ID` int(11) NOT NULL,
  `Ingame_Name` varchar(100) NOT NULL,
  `Real_Name` varchar(100) NOT NULL,
  `Team_Name` varchar(100) NOT NULL,
  `achievement` varchar(1000) NOT NULL,
  `Lane` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `player_ranking_wr`
--

INSERT INTO `player_ranking_wr` (`ID`, `Ingame_Name`, `Real_Name`, `Team_Name`, `achievement`, `Lane`, `img`) VALUES
(1, 'Ahkuoi', 'Sai', 'AG', 'achievement', 'Mid', ''),
(2, 'Xiaoma', 'Xiaoma', 'J Team', 'WRL-A1 2023 Finals\r\nWRL-A2 2023\r\nFinals', 'Dragon Lane', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `player_ranking_wr`
--
ALTER TABLE `player_ranking_wr`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `player_ranking_wr`
--
ALTER TABLE `player_ranking_wr`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
