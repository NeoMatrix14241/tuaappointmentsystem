-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 05:22 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medrecord`
--

-- --------------------------------------------------------

--
-- Table structure for table `medical_logsheet`
--

CREATE TABLE `medical_logsheet` (
  `id` bigint(20) NOT NULL,
  `sheet_id` bigint(20) NOT NULL,
  `time` text NOT NULL,
  `college_dept` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `chief_complaint` text NOT NULL,
  `given_meds` text NOT NULL,
  `quantity` text NOT NULL,
  `nurse_on_duty` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_logsheet`
--

INSERT INTO `medical_logsheet` (`id`, `sheet_id`, `time`, `college_dept`, `name`, `chief_complaint`, `given_meds`, `quantity`, `nurse_on_duty`) VALUES
(1, 1, 'a', 'a', 'a', 'a', 'TEST1', '11', 'a'),
(2, 2, 'a', 'a', 'a', 'a', 'TEST2', '300', 'a'),
(3, 3, 'a', 'a', 'a', 'a', 'Select Medicine\nTEST1\nTEST2', '10', 'a'),
(4, 4, '', '', '', '', 'Select Medicine\nTEST1\nTEST2', '', ''),
(5, 5, '', '', '', '', 'Select Medicine\nTEST1\nTEST2', '', ''),
(6, 6, '', '', '', '', 'Select Medicine\nTEST1\nTEST2', '', ''),
(7, 7, '', '', '', '', 'TEST1TEST2', '', ''),
(8, 8, '', '', '', '', 'TEST1\nTEST2\n', '', ''),
(9, 9, '', '', '', '', 'TEST1\nTEST2\n', '', ''),
(10, 10, '', '', '', '', 'TEST1\nTEST2\n', '', ''),
(11, 11, '', '', '', '', 'TEST1\nTEST2\n', '', ''),
(12, 12, '', '', '', '', 'TEST1\nTEST2\n, TEST1', '', ''),
(13, 13, '', '', '', '', 'TEST1', '', ''),
(14, 14, '1', '1', '1', '1', 'TEST1', '1', '1'),
(15, 15, '1', '1', '1', '1', 'TEST2', '1', '1'),
(16, 16, '', '', '', '', 'Select Medicine\nTEST1\nTEST2', '', ''),
(17, 17, 'a', 'a', 'a', 'a', 'TEST1\nTEST2\n', '11', 'x'),
(18, 18, 'a', 'a', 'a', 'a', 'TEST1', '1', 'x'),
(19, 19, 'a', 'a', 'a', 'a', 'TEST2', '1', 'x'),
(20, 20, '', '', '', '', 'Select Medicine\nTEST1\nTEST2, TEST1\nSelect Medicine\nTEST1\nTEST2', '', ''),
(21, 21, '', '', '', '', 'TEST1+', '', ''),
(22, 22, '', '', '', '', 'TEST2\nSelect Medicine\nTEST1\nTEST2', '', ''),
(23, 23, '', '', '', '', 'Select Medicine\nTEST1\nTEST2', '', ''),
(24, 24, '', '', '', '', 'TEST1', '', ''),
(25, 25, '', '', '', '', 'Select Medicine\nTEST1\nTEST2', '', ''),
(26, 26, '', '', '', '', 'TEST1\nTEST2\n', '', ''),
(27, 27, '', '', '', '', 'TEST1\nTEST2', '', ''),
(28, 28, '', '', '', '', 'TEST1\nTEST2', '', ''),
(29, 29, '', '', '', '', 'TEST1\nTEST2', '', ''),
(30, 30, '', '', '', '', 'TEST2', '', ''),
(31, 0, 'testsdasdasdasdasdasdasdasd', 'test', 'test', 'sdasd', 'ttest', '123123123', 'test'),
(32, 0, 'asdasd', 'sadasd', 'asdasd', 'ttest', 'asdasd', '123', 'asdasdasd'),
(33, 0, 'test', 'test', 'test', '123123', 'sad', '123', 'test'),
(34, 0, 'test', 'test', 'test', 'test', 'Medicine 2', '123', 'test'),
(35, 0, 'test', 'test', 'test', 'test', 'TEST1', '3', 'test'),
(36, 0, 'a', 'a', 'a', 'a', 'TEST1', '5000', 'a'),
(37, 0, 'test', 'test', 'test', 'test', 'TEST1', '500', 's'),
(38, 0, 'test', 'test', 'test', 'test', 'TEST2', '5000', 'test'),
(39, 0, 'test', 'tes', 't', 'te', 'TEST1', '1', 'test'),
(40, 0, '05/08/2024 - 08:20:46 AM', 'STI NOVA', 'KYLE C.', 'OH MY BACK', 'TEST2', '8', 'ME, MYSELF, AND I');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_records`
--

CREATE TABLE `medicine_records` (
  `id` bigint(20) NOT NULL,
  `item_id` bigint(20) NOT NULL,
  `item_name` text NOT NULL,
  `item_label` text NOT NULL,
  `item_dosage` text NOT NULL,
  `item_quantity` text NOT NULL,
  `item_stock_date` text NOT NULL,
  `item_expiration_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_records`
--

INSERT INTO `medicine_records` (`id`, `item_id`, `item_name`, `item_label`, `item_dosage`, `item_quantity`, `item_stock_date`, `item_expiration_date`) VALUES
(1, 0, 'TEST1', 'TEST1', 'TEST1', '94', '2024-05-05', '2024-05-16'),
(2, 0, 'TEST2', 'TEST2', 'TEST2', '190', '2024-05-17', '2024-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `id` bigint(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `is_reset` varchar(50) NOT NULL,
  `is_admin` varchar(535) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`id`, `firstname`, `lastname`, `username`, `password`, `is_reset`, `is_admin`) VALUES
(0, 'ADMIN', 'PRIVILEGE', 'admin', '0192023a7bbd73250516f069df18b500', 'notapplicable', 'true'),
(0, 'STUDENT', 'PRIVILEGE', 'student', 'ad6a280417a0f533d8b670c61667e1a0', 'false', 'false'),
(0, 'SAMPLE 1', 'SAMPLE 1', 'sample', '4e91b1cbe42b5c884de47d4c7fda0555', 'true', 'false');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medical_logsheet`
--
ALTER TABLE `medical_logsheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_records`
--
ALTER TABLE `medicine_records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medical_logsheet`
--
ALTER TABLE `medical_logsheet`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `medicine_records`
--
ALTER TABLE `medicine_records`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
