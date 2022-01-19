-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 04:04 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prhroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `userlevel` varchar(10) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_username`, `admin_password`, `status`, `userlevel`, `reg_date`) VALUES
(1, 'Thanakorn', 'theeye32', 'kornkung32', 'admin', '1', '2022-01-17 06:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_name_id` varchar(50) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `userlevel` varchar(10) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_name_id`, `user_password`, `userlevel`, `time_stamp`) VALUES
(1, 'TheEye', 'theeye32', 'Password001*', '1', '2022-01-17 07:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `wa_id` int(10) NOT NULL,
  `wa_no` varchar(7) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `patient_age` int(3) NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `main_dis` varchar(100) NOT NULL,
  `sneak` varchar(100) NOT NULL,
  `note` varchar(200) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`wa_id`, `wa_no`, `patient_name`, `patient_age`, `diagnosis`, `main_dis`, `sneak`, `note`, `time_stamp`) VALUES
(1, '402', 'นายทดสอบ ระบบ', 46, 'เอดส์', 'เมนูอ่อน', 'นม ขนม', '555', '2022-01-17 04:06:30'),
(2, 'WA401', 'dsfgdsfg', 0, 'dfgdfg', 'dsfgdf', 'dsfgdfg', 'dfgsdfg', '2022-01-14 09:42:31'),
(5, 'WA401', 'cccc', 0, 'cccc', 'cccc', 'ccc', 'cccc', '2022-01-14 09:41:27'),
(6, 'WAC401', 'กระปุก ออมสิน', 19, 'ป่วยโควิด19', 'อ่อกเด็ก', 'นม', 'ไม่ทานเนื้อ', '2022-01-14 09:41:21'),
(7, 'WA401', '999', 0, '999', '999', 'ccc', 'dc', '2022-01-17 04:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `wa_floor`
--

CREATE TABLE `wa_floor` (
  `wa_id` int(5) NOT NULL,
  `wa_floor` varchar(10) NOT NULL,
  `wa_no` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wa_floor`
--

INSERT INTO `wa_floor` (`wa_id`, `wa_floor`, `wa_no`) VALUES
(1, 'wa4', 'WA401'),
(2, 'wa5', 'WA501'),
(3, 'wa6', 'WA601'),
(4, 'icu', 'ICU301'),
(5, 'wac4', 'WAC401'),
(6, 'wac5', 'WAC501');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`wa_id`);

--
-- Indexes for table `wa_floor`
--
ALTER TABLE `wa_floor`
  ADD PRIMARY KEY (`wa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ward`
--
ALTER TABLE `ward`
  MODIFY `wa_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wa_floor`
--
ALTER TABLE `wa_floor`
  MODIFY `wa_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
