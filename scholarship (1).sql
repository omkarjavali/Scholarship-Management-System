-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 03:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholarship`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE `attachment` (
  `aadhaar` bigint(20) NOT NULL,
  `passportimg` varchar(255) NOT NULL,
  `aadhaarimg` varchar(255) NOT NULL,
  `passbookimg` varchar(255) NOT NULL,
  `incomeimg` varchar(255) NOT NULL,
  `feesimg` varchar(255) NOT NULL,
  `markssheetimg` varchar(255) NOT NULL,
  `hostelfeesimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attachment`
--

INSERT INTO `attachment` (`aadhaar`, `passportimg`, `aadhaarimg`, `passbookimg`, `incomeimg`, `feesimg`, `markssheetimg`, `hostelfeesimg`) VALUES
(123456789012, 'gov/upload/IMG-6371fa3867fa89.60813645.png', 'gov/upload/IMG-6371fa3867fa89.60813645.png', 'gov/upload/IMG-6371fa3867fa89.60813645.png', 'gov/upload/IMG-6371fa386833f0.01461178.png', 'gov/upload/IMG-6371fa38684fb6.29429129.png', 'gov/upload/IMG-6371fa38686be9.74650150.png', 'gov/upload/IMG-6371fa38687f98.29108672.png');

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `aadhaar` bigint(20) NOT NULL,
  `passbookname` varchar(255) NOT NULL,
  `accountnumber` bigint(20) NOT NULL,
  `bankname` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `bankdistrict` varchar(255) NOT NULL,
  `ifsc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`aadhaar`, `passbookname`, `accountnumber`, `bankname`, `branch`, `bankdistrict`, `ifsc`) VALUES
(123456789012, 'aaaa', 123, 'jjjj', 'kllll', 'jjklll', '24dgg4');

-- --------------------------------------------------------

--
-- Table structure for table `college_details`
--

CREATE TABLE `college_details` (
  `aadhaar` bigint(20) NOT NULL,
  `usn` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `collegename` varchar(255) NOT NULL,
  `collegetaluka` varchar(255) NOT NULL,
  `collegedistrict` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `seattype` varchar(255) NOT NULL,
  `presentyear` varchar(255) NOT NULL,
  `fees` int(11) NOT NULL,
  `previousyear` varchar(255) NOT NULL,
  `marks` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college_details`
--

INSERT INTO `college_details` (`aadhaar`, `usn`, `university`, `collegename`, `collegetaluka`, `collegedistrict`, `course`, `seattype`, `presentyear`, `fees`, `previousyear`, `marks`, `percentage`) VALUES
(123456789012, '12sd23456df6', 'asaaa', 'aaaaa', 'ssss', 'sssss', 'sssss', 'sssss', '3', 123456, '2', 123, 98);

-- --------------------------------------------------------

--
-- Table structure for table `gov`
--

CREATE TABLE `gov` (
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gov`
--

INSERT INTO `gov` (`user`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_details`
--

CREATE TABLE `hostel_details` (
  `aadhaar` bigint(20) NOT NULL,
  `hostelname` varchar(255) NOT NULL,
  `hosteltaluka` varchar(255) NOT NULL,
  `hosteldistrict` varchar(255) NOT NULL,
  `hostelRegistrationNumber` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel_details`
--

INSERT INTO `hostel_details` (`aadhaar`, `hostelname`, `hosteltaluka`, `hosteldistrict`, `hostelRegistrationNumber`) VALUES
(123456789012, 'aaaaa', 'aaaaa', 'aaaaa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `aadhaar` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` bigint(15) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `caste` varchar(255) NOT NULL,
  `income` bigint(10) NOT NULL,
  `hostel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`aadhaar`, `name`, `email`, `number`, `gender`, `address`, `dob`, `category`, `caste`, `income`, `hostel`) VALUES
(123456789012, 'Preetam Anvekar', 'preetamanvekar79@gmail.com', 9483737831, 'male', 'Cts5882/18 hulabatti colony shahapur belagavi', '2000-11-10', 'cat2a', 'abc', 123456, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `aadhaar` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` bigint(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`aadhaar`, `name`, `number`, `email`, `password`) VALUES
(123456789012, 'Preetam Anvekar', 9483737831, 'preetamanvekar79@gmail.com', 'a6ac5684c1d4af0b95586c97088cdf89'),
(123456789013, 'Preetam', 9483737831, 'preetamanvekar.jcer@gmail.com', '1234'),
(123456789014, 'Preetam', 9483737831, 'abc@gmail.com', '8dd43ae0638e1ce2690e2e3cfa653923'),
(123456789015, 'Preetam', 9483737831, 'preetamanvekar@gmail.com', 'a6ac5684c1d4af0b95586c97088cdf89');

-- --------------------------------------------------------

--
-- Table structure for table `sanction`
--

CREATE TABLE `sanction` (
  `aadhaar` bigint(20) NOT NULL,
  `collegescholarship` int(10) NOT NULL,
  `hostelscholarship` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanction`
--

INSERT INTO `sanction` (`aadhaar`, `collegescholarship`, `hostelscholarship`) VALUES
(123456789012, 20000, 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attachment`
--
ALTER TABLE `attachment`
  ADD PRIMARY KEY (`aadhaar`);

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`aadhaar`);

--
-- Indexes for table `college_details`
--
ALTER TABLE `college_details`
  ADD PRIMARY KEY (`aadhaar`);

--
-- Indexes for table `hostel_details`
--
ALTER TABLE `hostel_details`
  ADD PRIMARY KEY (`aadhaar`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`aadhaar`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`aadhaar`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `sanction`
--
ALTER TABLE `sanction`
  ADD PRIMARY KEY (`aadhaar`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attachment`
--
ALTER TABLE `attachment`
  ADD CONSTRAINT `attachment_ibfk_1` FOREIGN KEY (`aadhaar`) REFERENCES `personal_details` (`aadhaar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD CONSTRAINT `bank_details_ibfk_1` FOREIGN KEY (`aadhaar`) REFERENCES `personal_details` (`aadhaar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `college_details`
--
ALTER TABLE `college_details`
  ADD CONSTRAINT `college_details_ibfk_1` FOREIGN KEY (`aadhaar`) REFERENCES `personal_details` (`aadhaar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hostel_details`
--
ALTER TABLE `hostel_details`
  ADD CONSTRAINT `hostel_details_ibfk_1` FOREIGN KEY (`aadhaar`) REFERENCES `personal_details` (`aadhaar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD CONSTRAINT `personal_details_ibfk_1` FOREIGN KEY (`aadhaar`) REFERENCES `registration` (`aadhaar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanction`
--
ALTER TABLE `sanction`
  ADD CONSTRAINT `sanction_ibfk_1` FOREIGN KEY (`aadhaar`) REFERENCES `registration` (`aadhaar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
