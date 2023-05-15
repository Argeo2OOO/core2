-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 09:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `core2_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `core2_booking_info`
--

CREATE TABLE `core2_booking_info` (
  `id` int(11) NOT NULL,
  `pickup` text NOT NULL,
  `dropoff` text NOT NULL,
  `driverid` varchar(255) NOT NULL,
  `distance` varchar(100) NOT NULL,
  `fare` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `core2_booking_info`
--

INSERT INTO `core2_booking_info` (`id`, `pickup`, `dropoff`, `driverid`, `distance`, `fare`) VALUES
(17, 'bulacan', 'tarlac', '1', '2', '90'),
(18, 'manila', 'cebu', '1', '2', '90'),
(19, 'bulacan', 'manila', '1', '9', '405'),
(20, 'samar', 'bicol', '1', '1', '45');

-- --------------------------------------------------------

--
-- Table structure for table `core2_gps`
--

CREATE TABLE `core2_gps` (
  `id` int(11) NOT NULL,
  `latitude` varchar(250) NOT NULL,
  `longitude` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core2_payment_info`
--

CREATE TABLE `core2_payment_info` (
  `payment_id` int(11) NOT NULL,
  `driverName` varchar(150) NOT NULL,
  `customerName` varchar(150) NOT NULL,
  `paymentAmount` varchar(1501) NOT NULL,
  `datePaid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core2_payment_info`
--

INSERT INTO `core2_payment_info` (`payment_id`, `driverName`, `customerName`, `paymentAmount`, `datePaid`) VALUES
(1, 'James Arthur', 'Customer 1', '100', '2023-03-14'),
(2, 'Lebron James', 'Customer 1', '100', '2023-03-14'),
(3, 'James Arthur', 'Customer 2', '250', '2023-03-14'),
(4, 'Dwane Wade', 'Khalifa', '300', '2023-03-14'),
(5, 'argeo', 'adante', '100', '2023-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `core2_storeroom_info`
--

CREATE TABLE `core2_storeroom_info` (
  `id` int(150) NOT NULL,
  `partname` varchar(150) NOT NULL,
  `quantity` varchar(150) NOT NULL,
  `category` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core2_transport analytics`
--

CREATE TABLE `core2_transport analytics` (
  `id` int(11) NOT NULL,
  `distance` varchar(250) NOT NULL,
  `fare` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core2_users`
--

CREATE TABLE `core2_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core2_users`
--

INSERT INTO `core2_users` (`id`, `username`, `password`) VALUES
(1, 'core2@lulan.com', 'core123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `core2_booking_info`
--
ALTER TABLE `core2_booking_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core2_gps`
--
ALTER TABLE `core2_gps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core2_payment_info`
--
ALTER TABLE `core2_payment_info`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `core2_storeroom_info`
--
ALTER TABLE `core2_storeroom_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core2_transport analytics`
--
ALTER TABLE `core2_transport analytics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core2_users`
--
ALTER TABLE `core2_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `core2_booking_info`
--
ALTER TABLE `core2_booking_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `core2_gps`
--
ALTER TABLE `core2_gps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core2_payment_info`
--
ALTER TABLE `core2_payment_info`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `core2_storeroom_info`
--
ALTER TABLE `core2_storeroom_info`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core2_transport analytics`
--
ALTER TABLE `core2_transport analytics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core2_users`
--
ALTER TABLE `core2_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
