-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 06:40 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cashiertable`
--

CREATE TABLE `cashiertable` (
  `cashier_id` bigint(20) NOT NULL,
  `cashier_name` varchar(50) NOT NULL,
  `mobile_number` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashiertable`
--

INSERT INTO `cashiertable` (`cashier_id`, `cashier_name`, `mobile_number`, `address`, `email_id`, `password`) VALUES
(8, 'Ferdous', 158877, 'Old dhaka', 'Ferdous@gmail.com', 'Ferdous'),
(7, 'Nadim', 165166, 'Uttara', 'Nadim@gmail.com', 'Nadim'),
(6, 'Rafsun Jani shuvo ', 1701406834, 'Magura', 'rafsunshuvo@gmail.com', 'shuvo');

-- --------------------------------------------------------

--
-- Table structure for table `customertable`
--

CREATE TABLE `customertable` (
  `customer_id` bigint(20) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `mobile_number` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `total_point` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customertable`
--

INSERT INTO `customertable` (`customer_id`, `customer_name`, `mobile_number`, `address`, `email_id`, `total_point`) VALUES
(3, 'ferdous', 1536549878, 'old dhaka', 'ferdous@gmail.com', 1),
(4, 'karim', 1285, 'ee', 'hf', 2),
(5, 'aaa', 2255, 'fffff', 'aaaaaa', 9999),
(6, 'Ferdous', 146666, 'Old Dhaka', 'Ferdous@gmail.com', 12);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `price` double NOT NULL,
  `category` varchar(100) NOT NULL,
  `sold` bigint(20) NOT NULL,
  `image` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `price`, `category`, `sold`, `image`, `created_at`, `updated_at`) VALUES
(0, 'Table', 5, 500, 'aaa', 0, 0, '0000-00-00 00:00:00', '2021-08-14 16:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `producttable`
--

CREATE TABLE `producttable` (
  `product_id` bigint(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `price` double NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttable`
--

INSERT INTO `producttable` (`product_id`, `product_name`, `quantity`, `price`, `category`) VALUES
(1, 'chair', 20, 100, 'jhyu'),
(4, 'totato', 5, 12, 've'),
(12, 'aa', 22, 333, 'aa'),
(25, 'car', 2, 10000, 'aaaaattt');

-- --------------------------------------------------------

--
-- Table structure for table `stafftable`
--

CREATE TABLE `stafftable` (
  `staff_id` bigint(20) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `mobile_number` bigint(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `nid_number` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashiertable`
--
ALTER TABLE `cashiertable`
  ADD PRIMARY KEY (`cashier_id`),
  ADD KEY `cashier_name` (`cashier_name`,`mobile_number`,`address`,`email_id`,`password`);

--
-- Indexes for table `customertable`
--
ALTER TABLE `customertable`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `producttable`
--
ALTER TABLE `producttable`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `stafftable`
--
ALTER TABLE `stafftable`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `staff_name` (`staff_name`,`mobile_number`,`address`,`email_id`,`nid_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cashiertable`
--
ALTER TABLE `cashiertable`
  MODIFY `cashier_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customertable`
--
ALTER TABLE `customertable`
  MODIFY `customer_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stafftable`
--
ALTER TABLE `stafftable`
  MODIFY `staff_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
