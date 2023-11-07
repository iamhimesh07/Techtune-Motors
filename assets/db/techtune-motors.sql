-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 04:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techtune-motors`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_booking_request`
--

CREATE TABLE `appointment_booking_request` (
  `id` int(11) NOT NULL,
  `make_model` varchar(100) NOT NULL,
  `year` year(4) NOT NULL,
  `vin` varchar(25) NOT NULL,
  `license_plate` varchar(10) NOT NULL,
  `previous_mileage` int(5) NOT NULL,
  `customer_name` varchar(75) NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `customer_address` varchar(250) NOT NULL,
  `service_request` varchar(250) NOT NULL,
  `service_history` varchar(250) NOT NULL,
  `authorization` varchar(100) NOT NULL,
  `estimated_cost` int(100) NOT NULL,
  `completion_date` datetime NOT NULL,
  `payment_options` enum('credit card','cash','cheque','other') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_booking_request`
--

INSERT INTO `appointment_booking_request` (`id`, `make_model`, `year`, `vin`, `license_plate`, `previous_mileage`, `customer_name`, `contact_info`, `customer_address`, `service_request`, `service_history`, `authorization`, `estimated_cost`, `completion_date`, `payment_options`) VALUES
(1, 'bugati veron', '2012', '565476987', 'BR 00001', 1590, 'H K', '+91 0000000000', '0', '0', 'NA', '0', 150000, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_form`
--

CREATE TABLE `contact_us_form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us_form`
--

INSERT INTO `contact_us_form` (`id`, `name`, `email`, `message`) VALUES
(1, 'Abhishek Sahay', 'abhisahay655@gmail.com', 'hum first, hum first'),
(2, 'Himesh Kumar', 'himesh763@outlook.com', 'this is second database testing.'),
(3, 'Himesh Kumar', 'himesh763@outlook.com', 'this is second database testing.'),
(4, 'manav', 'manavkedia88@gmail.com', 'test'),
(5, 'manav', 'manavkedia88@gmail.com', 'test'),
(6, 'manav', 'manavkedia88@gmail.com', 'test'),
(7, 'manav', 'manavkedia88@gmail.com', 'testing dialogue'),
(8, 'manav', 'manavkedia88@gmail.com', 'testing dialogue'),
(9, 'manav', 'manavkedia88@gmail.com', 'testing dialogue'),
(10, 'manav', 'manavkedia88@gmail.com', 'testing dialogue'),
(11, 'manav', 'manavkedia88@gmail.com', 'testing dialogue'),
(12, 'manav', 'manavkedia88@gmail.com', 'testing dialogue'),
(13, 'abhi', 'anavanvg@gmail.com', 'ghhugk gu \r\n'),
(14, 'abhis', 'hfufufuf@gmai.com', '\r\ntest');

-- --------------------------------------------------------

--
-- Table structure for table `request_callback`
--

CREATE TABLE `request_callback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_callback`
--

INSERT INTO `request_callback` (`id`, `name`, `phone`, `message`) VALUES
(1, 'Chandra Mohan soren', 2147483647, '0'),
(2, 'Himesh Kumar', 2147483647, '0'),
(3, 'Himesh Kumar', 2147483647, '0'),
(4, 'golu', 2147483647, '0'),
(5, 'golu', 2147483647, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_booking_request`
--
ALTER TABLE `appointment_booking_request`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `license_plate` (`license_plate`),
  ADD UNIQUE KEY `vin` (`vin`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `contact_us_form`
--
ALTER TABLE `contact_us_form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `request_callback`
--
ALTER TABLE `request_callback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_booking_request`
--
ALTER TABLE `appointment_booking_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us_form`
--
ALTER TABLE `contact_us_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `request_callback`
--
ALTER TABLE `request_callback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
