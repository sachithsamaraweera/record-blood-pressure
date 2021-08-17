-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 06:10 PM
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
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `pressure`
--

CREATE TABLE `pressure` (
  `mesurement_number` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `systolic` int(11) NOT NULL,
  `diastolic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pressure`
--

INSERT INTO `pressure` (`mesurement_number`, `date`, `time`, `systolic`, `diastolic`) VALUES
(1, '2021-08-15', '14:13:00', 150, 80),
(2, '2021-08-15', '14:13:00', 150, 80),
(3, '2021-08-15', '14:13:00', 150, 80),
(4, '2021-08-15', '14:32:00', 180, 85),
(8, '2021-08-15', '15:23:00', 180, 90),
(9, '2021-08-15', '16:41:00', 118, 77);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pressure`
--
ALTER TABLE `pressure`
  ADD PRIMARY KEY (`mesurement_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pressure`
--
ALTER TABLE `pressure`
  MODIFY `mesurement_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
