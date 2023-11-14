-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 09:13 PM
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
-- Database: `basket`
--

-- --------------------------------------------------------

--
-- Table structure for table `baskets`
--

CREATE TABLE `baskets` (
  `basketid` int(200) NOT NULL,
  `userid` int(200) NOT NULL,
  `bikeid` int(200) NOT NULL,
  `quantity` int(200) DEFAULT NULL,
  `totalprice` int(200) DEFAULT NULL,
  `Creation_Date/Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('open','completed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baskets`
--

INSERT INTO `baskets` (`basketid`, `userid`, `bikeid`, `quantity`, `totalprice`, `Creation_Date/Time`, `status`) VALUES
(1, 6, 2, 4, 8, '2023-11-14 19:05:42', 'open'),
(2, 6, 2, 4, 8, '2023-11-14 19:48:09', 'open'),
(3, 6, 2, 1, 2, '2023-11-14 19:48:24', 'open'),
(4, 6, 2, 1, 0, '2023-11-14 19:51:33', 'open'),
(5, 6, 2, 2, 0, '2023-11-14 19:51:38', 'open'),
(6, 6, 2, 2, 138, '2023-11-14 19:54:03', 'open'),
(7, 6, 2, 24, 1656, '2023-11-14 20:03:49', 'open'),
(8, 7, 2, 4, 276, '2023-11-14 20:08:03', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `bikes`
--

CREATE TABLE `bikes` (
  `bikeid` int(100) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `stockquantity` int(100) NOT NULL,
  `imageURL` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bikes`
--

INSERT INTO `bikes` (`bikeid`, `productname`, `description`, `price`, `stockquantity`, `imageURL`, `category`) VALUES
(2, 'dfsdf', 'sdfsdfds3', 69, 60, 'fdsfsd', 'sfdsfsd');

-- --------------------------------------------------------

--
-- Table structure for table `colours`
--

CREATE TABLE `colours` (
  `colourid` int(11) NOT NULL,
  `colourname` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `stockquantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(200) NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phonenumber` varchar(12) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `email`, `email_verified_at`, `phonenumber`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'ewfssd', 'fsdfsd', 'xekada4965@rdluxe.com', NULL, '123456789', '$2y$12$ZtcU1N9ZJwrUPZ0xrEd4k.c60YbAKNLLQRKF6X5UOYEU55RXQJ/Hq', NULL, '2023-11-13 12:55:34', '2023-11-13 12:55:34'),
(3, 'sdfdsfds', 'sfsdf', 'xekada4d965@rdluxe.com', NULL, '14432432', '$2y$12$i76h4v31W1dOxK/uIsX8l..iECrAmUfnBXRhm5hZ1X/dGS9PDrOfa', NULL, '2023-11-13 13:17:56', '2023-11-13 13:17:56'),
(4, 'joe', 'asdas', 'xekada4965dd@rdluxe.com', NULL, '1234567890', '$2y$12$UK24dcH3gIQSTcT1HCg6yOD7fklrTa/ohyTOVoiDji/ft63tE.PxS', NULL, '2023-11-13 16:02:33', '2023-11-13 16:02:33'),
(5, 'adas', 'dasdas', 'xekada496ee5@rdluxe.com', NULL, '123456789', '$2y$12$2W9ftSEY8R0769OjBzEmPugXUMWTZ/MoVBul7OiliFMeF20ToT7bm', NULL, '2023-11-14 04:50:17', '2023-11-14 04:50:17'),
(6, 'dasdas', 'dadas', 'xekdddada4965@rdluxe.com', NULL, '212', '$2y$12$L5quXirL01.Ptv.gMH4pX.wsqatbydXvx3YqHft95mJmO7VRJGD2O', NULL, '2023-11-14 18:58:24', '2023-11-14 18:58:24'),
(7, 'dasda', 'dasda', 'xekadddda4965@rdluxe.com', NULL, '122', '$2y$12$qkTqSj6.Bsxb3veFdh5G5uv4zc.EWdDX7psDo5NrIactEDahWcRhm', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`basketid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `bikeid` (`bikeid`);

--
-- Indexes for table `bikes`
--
ALTER TABLE `bikes`
  ADD PRIMARY KEY (`bikeid`);

--
-- Indexes for table `colours`
--
ALTER TABLE `colours`
  ADD PRIMARY KEY (`colourid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baskets`
--
ALTER TABLE `baskets`
  MODIFY `basketid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bikes`
--
ALTER TABLE `bikes`
  MODIFY `bikeid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `colours`
--
ALTER TABLE `colours`
  MODIFY `colourid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baskets`
--
ALTER TABLE `baskets`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bike_foreign` FOREIGN KEY (`bikeid`) REFERENCES `bikes` (`bikeid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
