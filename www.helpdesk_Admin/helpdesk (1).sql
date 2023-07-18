-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 06:36 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` varchar(20) NOT NULL,
  `ad_pswd` varchar(8) NOT NULL,
  `ad_contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_pswd`, `ad_contact`) VALUES
('abc@123', 'Rutu', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `de_id` int(4) NOT NULL,
  `de_name` varchar(20) NOT NULL,
  `de_desc` varchar(300) NOT NULL,
  `de_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`de_id`, `de_name`, `de_desc`, `de_photo`) VALUES
(1, 'Civil', 'This is the Civil Department', 'IMG-634421652aef40.35691530.jpg'),
(7, 'Empathy Canvas', 'This is the Empathy Canvas', 'IMG-6384c18819d786.95459118.jpeg'),
(16, 'IT', 'This is the IT Department', 'IMG-63441e286d3482.21541038.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `de_id` int(4) NOT NULL,
  `em_photo` varchar(50) DEFAULT NULL,
  `em_name` varchar(30) NOT NULL,
  `em_contact` int(10) NOT NULL,
  `em_desi` varchar(20) DEFAULT NULL,
  `em_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `em_contact` int(10) NOT NULL,
  `l_desi` varchar(100) DEFAULT NULL,
  `l_audio` text DEFAULT NULL,
  `l_wing` text DEFAULT NULL,
  `l_floor` text DEFAULT NULL,
  `l_room` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`de_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`em_contact`),
  ADD KEY `de_id` (`de_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD KEY `em_contact` (`em_contact`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`de_id`) REFERENCES `department` (`de_id`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`em_contact`) REFERENCES `employee` (`em_contact`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
