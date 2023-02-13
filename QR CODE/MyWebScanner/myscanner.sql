-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 06:33 AM
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
-- Database: `myscanner`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_scanner`
--

CREATE TABLE `student_scanner` (
  `sl` int(11) NOT NULL,
  `Student_id` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_scanner`
--

INSERT INTO `student_scanner` (`sl`, `Student_id`, `Time`) VALUES
(2, '191311000', '2021-12-02 01:45:56'),
(3, '191311073', '2021-12-02 01:46:15'),
(4, '20129329', '2021-12-02 01:46:28'),
(17, '1913872828', '2021-12-26 01:44:35'),
(18, 'hi qe code ', '2021-12-26 01:45:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_scanner`
--
ALTER TABLE `student_scanner`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_scanner`
--
ALTER TABLE `student_scanner`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
