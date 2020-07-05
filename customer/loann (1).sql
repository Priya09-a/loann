-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 02:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loann`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `view_customers` ()  SELECT * from customer$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `contact`, `password`, `address`) VALUES
(1, 'Priya', 'admin@gmail.com', 9538738494, 'admin', 'Sirsi');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `cust_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `loantype` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`cust_id`, `name`, `email`, `mobile`, `state`, `loantype`, `amount`) VALUES
(1, 'Priya', 'na12@gmail.com', 9739204396, 'KARNATAKA', 'Car Loan', 1000000),
(17, 'Arjun', 'samar@gmail.com', 9739204396, 'Maharashtra', 'Car Loan', 300000),
(21, 'Ram', 'ramm@gmail.com', 6657803246, 'KARNATAKA', 'Education Loan', 400000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `name` varchar(40) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) NOT NULL,
  `accountno` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `comapny` varchar(50) DEFAULT NULL,
  `comp_address` varchar(100) DEFAULT NULL,
  `salary` float(8,2) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `bank_id` varchar(20) DEFAULT NULL,
  `assign_to` varchar(50) DEFAULT NULL,
  `sanction_date` date DEFAULT NULL,
  `c_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `name`, `email`, `accountno`, `password`, `contact`, `address`, `qualification`, `occupation`, `comapny`, `comp_address`, `salary`, `designation`, `gender`, `Country`, `state`, `bank_id`, `assign_to`, `sanction_date`, `c_date`) VALUES
(1, 'Priya', 'na12@gmail.com', 1239087234, '09876@', 9538738494, 'Udupi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Arjun', 'samar@gmail.com', 1246758903, 'abcdef', 9739204396, 'Mumbai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Ram', 'raamm@gmail.com', 1032145678, 'abcdef', 6605718001, 'YELLAPUR ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KARNATAKA', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `group_id` int(11) NOT NULL,
  `group_name` char(50) NOT NULL,
  `group_creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `group_name`, `group_creation_date`) VALUES
(1, 'Home Loan', '2016-08-11'),
(2, 'Car loan', '2016-08-16'),
(3, 'Business loan', '2016-08-31'),
(4, 'Education loan', '2016-08-30'),
(5, 'Personal loan', '2016-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loan_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `loan_come_from` varchar(50) NOT NULL,
  `loan_amount` varchar(50) NOT NULL,
  `loan_interest` varchar(10) NOT NULL,
  `payment_term` varchar(50) NOT NULL,
  `total_payment_with_intereset` varchar(50) NOT NULL,
  `emi_per_month` varchar(50) NOT NULL,
  `payment_schedule` date NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_id`, `group_id`, `loan_come_from`, `loan_amount`, `loan_interest`, `payment_term`, `total_payment_with_intereset`, `emi_per_month`, `payment_schedule`, `due_date`) VALUES
(2, 4, 'Government', '400000', '6', '6', '544000', '7555.555555555556', '2017-08-08', '2022-08-08'),
(11, 2, 'Council', '300000', '8', '4', '396000', '8250', '2016-03-02', '2020-03-02'),
(12, 1, 'Government', '150000', '7', '8', '234000', '2437.5', '2016-02-10', '2024-02-08'),
(13, 3, 'Council', '800000', '9', '6', '1232000', '17111.11111111111', '2016-04-15', '2022-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE `payment_history` (
  `payment_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `amount_paid` int(11) NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_history`
--

INSERT INTO `payment_history` (`payment_id`, `group_id`, `amount_paid`, `payment_date`) VALUES
(1, 4, 200000, '2018-08-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`name`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`loan_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `group_id` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payment_history`
--
ALTER TABLE `payment_history`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `loan_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD CONSTRAINT `payment_history_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
