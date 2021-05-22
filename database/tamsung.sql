-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2021 at 04:41 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tamsung`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_fname` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cus_lname` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cus_email` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cus_gender` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cus_tel` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cus_address` text NOT NULL,
  `cus_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employyee`
--

CREATE TABLE `employyee` (
  `emp_id` int(11) NOT NULL,
  `emp_fname` varchar(200) NOT NULL,
  `emp_lname` varchar(200) NOT NULL,
  `emp_old` varchar(5) NOT NULL,
  `emp_position` varchar(100) NOT NULL,
  `emp_salary` varchar(10) NOT NULL,
  `emp_address` text NOT NULL,
  `emp_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `employyee`
--
ALTER TABLE `employyee`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employyee`
--
ALTER TABLE `employyee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
