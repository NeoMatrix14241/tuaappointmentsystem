-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 05:27 PM
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
-- Table structure for table `appointment_dentist`
--

CREATE TABLE `appointment_dentist` (
  `id` bigint(20) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `middle_initial` text NOT NULL,
  `course` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_medical`
--

CREATE TABLE `appointment_medical` (
  `id` bigint(20) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `middle_initial` text NOT NULL,
  `course` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 0, 'TEST2', 'TEST2', 'TEST2', '190', '2024-05-17', '2024-05-20'),
(3, 0, 'Biogesic Paracetamol', 'Paracetamol', '500mg', '10000', '2024-05-22', '2030-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `id` bigint(20) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middle_initial` text NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `temp_password` text NOT NULL,
  `is_reset` varchar(50) NOT NULL,
  `is_admin` varchar(535) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`id`, `student_id`, `firstname`, `middle_initial`, `lastname`, `username`, `password`, `temp_password`, `is_reset`, `is_admin`) VALUES
(1, '', 'ADMIN', '', 'PRIVILEGE', 'admin', '0192023a7bbd73250516f069df18b500', '', 'notapplicable', 'true'),
(2, '2024300881', 'STUDENT', '', 'PRIVILEGE', 'student', 'ad6a280417a0f533d8b670c61667e1a0', '', 'false', 'false'),
(3, '2024300882', 'SAMPLE 1', '', 'SAMPLE 1', 'sample', '4e91b1cbe42b5c884de47d4c7fda0555', '', 'true', 'false'),
(4, '2000088094', 'KYLE', 'f', 'capistrano', '02000088094', 'ad6a280417a0f533d8b670c61667e1a0', 'OWN%_lda', 'true', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts_healthhistory`
--

CREATE TABLE `useraccounts_healthhistory` (
  `id` bigint(20) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `bcg` tinyint(1) NOT NULL,
  `dpt_opv` tinyint(1) NOT NULL,
  `dpt_opv_enum` enum('1','2','3','B') NOT NULL,
  `hib` tinyint(1) NOT NULL,
  `hib_enum` enum('1','2','3') NOT NULL,
  `vaccine_measles` tinyint(1) NOT NULL,
  `mmr` tinyint(1) NOT NULL,
  `vaccine_chickenpox` tinyint(1) NOT NULL,
  `hepa_a` tinyint(1) NOT NULL,
  `hepa_a_enum` enum('1','2','3') NOT NULL,
  `hepa_b` tinyint(1) NOT NULL,
  `hepa_b_enum` enum('1','2','3') NOT NULL,
  `typhoid_vaccine` tinyint(1) NOT NULL,
  `influenza` tinyint(1) NOT NULL,
  `others_specify` text NOT NULL,
  `father` text NOT NULL,
  `mother` text NOT NULL,
  `siblings` text NOT NULL,
  `childhood` text NOT NULL,
  `adulthood` text NOT NULL,
  `allergies` text NOT NULL,
  `preferred_hospital` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccounts_healthhistory`
--

INSERT INTO `useraccounts_healthhistory` (`id`, `student_id`, `bcg`, `dpt_opv`, `dpt_opv_enum`, `hib`, `hib_enum`, `vaccine_measles`, `mmr`, `vaccine_chickenpox`, `hepa_a`, `hepa_a_enum`, `hepa_b`, `hepa_b_enum`, `typhoid_vaccine`, `influenza`, `others_specify`, `father`, `mother`, `siblings`, `childhood`, `adulthood`, `allergies`, `preferred_hospital`) VALUES
(1, 2000088094, 1, 1, 'B', 1, '1', 1, 1, 1, 1, '2', 1, '3', 1, 1, 'jklhhkjkjkh', 'jkhjk', 'hjkhjkhjkhjk', 'hjkh', 'jkhjk', 'hjkhjkh', 'jkhjkhjkh', 'hjkhjk');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts_physicalexams`
--

CREATE TABLE `useraccounts_physicalexams` (
  `id` bigint(20) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `date_1` text NOT NULL,
  `date_2` text NOT NULL,
  `date_3` text NOT NULL,
  `date_4` text NOT NULL,
  `height_weight_1` text NOT NULL,
  `height_weight_2` text NOT NULL,
  `height_weight_3` text NOT NULL,
  `height_weight_4` text NOT NULL,
  `temperature_1` text NOT NULL,
  `temperature_2` text NOT NULL,
  `temperature_3` text NOT NULL,
  `temperature_4` text NOT NULL,
  `hr_pr_rr_1` text NOT NULL,
  `hr_pr_rr_2` text NOT NULL,
  `hr_pr_rr_3` text NOT NULL,
  `hr_pr_rr_4` text NOT NULL,
  `nutritional_status_1` text NOT NULL,
  `nutritional_status_2` text NOT NULL,
  `nutritional_status_3` text NOT NULL,
  `nutritional_status_4` text NOT NULL,
  `visual_acuity_1` text NOT NULL,
  `visual_acuity_2` text NOT NULL,
  `visual_acuity_3` text NOT NULL,
  `visual_acuity_4` text NOT NULL,
  `hearing_1` text NOT NULL,
  `hearing_2` text NOT NULL,
  `hearing_3` text NOT NULL,
  `hearing_4` text NOT NULL,
  `skin_scalp_1` text NOT NULL,
  `skin_scalp_2` text NOT NULL,
  `skin_scalp_3` text NOT NULL,
  `skin_scalp_4` text NOT NULL,
  `eyes_ears_nose_1` text NOT NULL,
  `eyes_ears_nose_2` text NOT NULL,
  `eyes_ears_nose_3` text NOT NULL,
  `eyes_ears_nose_4` text NOT NULL,
  `mouth_throat_neck_1` text NOT NULL,
  `mouth_throat_neck_2` text NOT NULL,
  `mouth_throat_neck_3` text NOT NULL,
  `mouth_throat_neck_4` text NOT NULL,
  `lungs_heart_1` text NOT NULL,
  `lungs_heart_2` text NOT NULL,
  `lungs_heart_3` text NOT NULL,
  `lungs_heart_4` text NOT NULL,
  `git_gut_1` text NOT NULL,
  `git_gut_2` text NOT NULL,
  `git_gut_3` text NOT NULL,
  `git_gut_4` text NOT NULL,
  `spine_extremities_1` text NOT NULL,
  `spine_extremities_2` text NOT NULL,
  `spine_extremities_3` text NOT NULL,
  `spine_extremities_4` text NOT NULL,
  `others_specify_1` text NOT NULL,
  `others_specify_2` text NOT NULL,
  `others_specify_3` text NOT NULL,
  `others_specify_4` text NOT NULL,
  `recommendations_1` text NOT NULL,
  `recommendations_2` text NOT NULL,
  `recommendations_3` text NOT NULL,
  `recommendations_4` text NOT NULL,
  `examined_by_1` text NOT NULL,
  `examined_by_2` text NOT NULL,
  `examined_by_3` text NOT NULL,
  `examined_by_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccounts_physicalexams`
--

INSERT INTO `useraccounts_physicalexams` (`id`, `student_id`, `date_1`, `date_2`, `date_3`, `date_4`, `height_weight_1`, `height_weight_2`, `height_weight_3`, `height_weight_4`, `temperature_1`, `temperature_2`, `temperature_3`, `temperature_4`, `hr_pr_rr_1`, `hr_pr_rr_2`, `hr_pr_rr_3`, `hr_pr_rr_4`, `nutritional_status_1`, `nutritional_status_2`, `nutritional_status_3`, `nutritional_status_4`, `visual_acuity_1`, `visual_acuity_2`, `visual_acuity_3`, `visual_acuity_4`, `hearing_1`, `hearing_2`, `hearing_3`, `hearing_4`, `skin_scalp_1`, `skin_scalp_2`, `skin_scalp_3`, `skin_scalp_4`, `eyes_ears_nose_1`, `eyes_ears_nose_2`, `eyes_ears_nose_3`, `eyes_ears_nose_4`, `mouth_throat_neck_1`, `mouth_throat_neck_2`, `mouth_throat_neck_3`, `mouth_throat_neck_4`, `lungs_heart_1`, `lungs_heart_2`, `lungs_heart_3`, `lungs_heart_4`, `git_gut_1`, `git_gut_2`, `git_gut_3`, `git_gut_4`, `spine_extremities_1`, `spine_extremities_2`, `spine_extremities_3`, `spine_extremities_4`, `others_specify_1`, `others_specify_2`, `others_specify_3`, `others_specify_4`, `recommendations_1`, `recommendations_2`, `recommendations_3`, `recommendations_4`, `examined_by_1`, `examined_by_2`, `examined_by_3`, `examined_by_4`) VALUES
(1, 2000088094, 'hjk', 'hjkhjk', 'hjk', 'hjkhjk', 'hjk', 'hjk', 'hjkhjk', 'hjk', 'hjkh', 'jkjk', 'hjk', 'hjkhjk', 'hjk', 'hjk', 'hjkh', 'jkhjk', 'hjk', 'hjkh', 'jkhjk', 'hjkh', 'jkhjk', 'hjk', 'hjk', 'hjkhjk', 'hjk', 'hjk', 'hjk', 'hjkhjk', 'hjk', 'hjk', 'hjkh', 'jkhjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjkhjk', 'hjk', 'hjk', 'hjk', 'hjk', 'jkjkjkhjkhjk', 'hjk', 'jkjk', 'hjkjk', 'hjkh', 'jkhjk', 'hjkh', 'jkhjk', 'hjk', 'hjkh', 'jkhjk', 'hjk', 'hj', 'hjjkhjk', 'hjkjk', 'hjkhjkhjk', 'hjk', 'hjkhjk', 'hjkh', 'jkhjk', 'hjk', 'hjkh');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts_profile`
--

CREATE TABLE `useraccounts_profile` (
  `id` int(11) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `course` text NOT NULL,
  `year_level` text NOT NULL,
  `age` bigint(20) NOT NULL,
  `birthdate` text NOT NULL,
  `gender` text NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL,
  `nationality` text NOT NULL,
  `parentguardian` text NOT NULL,
  `parentguardian_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccounts_profile`
--

INSERT INTO `useraccounts_profile` (`id`, `student_id`, `course`, `year_level`, `age`, `birthdate`, `gender`, `address`, `contact`, `nationality`, `parentguardian`, `parentguardian_contact`) VALUES
(1, 2000088094, 'College of Allied Health Sciences', '4', 23, '2024-05-07', 'Male', 'BLK5 LOT6 PH2, Earth St., Solar Urban Homes North', '09454545', 'home', 'hhh', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_dentist`
--
ALTER TABLE `appointment_dentist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_medical`
--
ALTER TABLE `appointment_medical`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccounts_healthhistory`
--
ALTER TABLE `useraccounts_healthhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccounts_physicalexams`
--
ALTER TABLE `useraccounts_physicalexams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccounts_profile`
--
ALTER TABLE `useraccounts_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_dentist`
--
ALTER TABLE `appointment_dentist`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointment_medical`
--
ALTER TABLE `appointment_medical`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_logsheet`
--
ALTER TABLE `medical_logsheet`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `medicine_records`
--
ALTER TABLE `medicine_records`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `useraccounts_healthhistory`
--
ALTER TABLE `useraccounts_healthhistory`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `useraccounts_physicalexams`
--
ALTER TABLE `useraccounts_physicalexams`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `useraccounts_profile`
--
ALTER TABLE `useraccounts_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
