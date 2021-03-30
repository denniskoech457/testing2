-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 01:05 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waste_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `address` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `email`, `password`, `address`) VALUES
(1, 'wangu', 'wangu@gmail.com', '5128a2174b1123da5d2b134568d22303', ''),
(2, 'dennis koech', 'denniskoech@gmail.com', 'a9cd71c140bf0c5b141f3e843d6db019', ''),
(3, 'waru', 'waru5@gmail.com', '', ''),
(4, 'weru', 'weru@gmail.com', '1234', ''),
(5, 'kweture', 'kweture@gmail.com', 'kweture', ''),
(6, 'djdyexke', 'deejaydyexke@gmail.com', 'djdyexke', ''),
(7, 'fala', 'fala@gmail.com', 'fala', '');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `username`, `email`, `password`) VALUES
(9, 'yaya', 'yaya@gmail.com', 'yaya');

-- --------------------------------------------------------

--
-- Table structure for table `neworders`
--

CREATE TABLE `neworders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` tinytext NOT NULL,
  `size` tinytext NOT NULL,
  `type` tinytext NOT NULL,
  `location` tinytext NOT NULL,
  `Contacts` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `neworders`
--

INSERT INTO `neworders` (`id`, `username`, `size`, `type`, `location`, `Contacts`) VALUES
(1, '', 'Bags', 'Furniture', '', 0),
(2, '', 'Bags', 'electronics', '', 0),
(3, '', 'Bags', 'Furniture', '', 0),
(4, '', 'Bags', 'Furniture', '', 0),
(5, '', 'Bags', 'Furniture', '', 0),
(6, '', 'Bags', 'electronics', '', 0),
(7, '', 'Bags', 'electronics', 'Bomet town', 0),
(8, '', 'Bags', 'electronics', 'Bomet town', 792919411),
(9, '', 'Bags', 'Furniture', 'Bomet town', 0),
(10, '', 'Bags', 'Furniture', 'Kisumu', 2147483647),
(11, '', 'Bags', 'Furniture', 'Bomet town', 0),
(12, '', 'Bags', 'Furniture', 'Bomet town', 66646),
(13, '', 'Bags', 'Furniture', 'Bomet town', 66646);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `neworders`
--
ALTER TABLE `neworders`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `neworders`
--
ALTER TABLE `neworders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
