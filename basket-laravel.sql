-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 07:44 PM
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
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `basketid` int(200) NOT NULL,
  `userid` int(200) NOT NULL,
  `Creation_Date/Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('open','completed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basketitem`
--

CREATE TABLE `basketitem` (
  `basketitemid` int(200) NOT NULL,
  `basketid` int(200) NOT NULL,
  `bikeid` int(200) NOT NULL,
  `quantity` int(200) NOT NULL,
  `totalprice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'adsa', 'adasdas', 0, 1, 'ada', 'dfsfds'),
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
(4, 'joe', 'asdas', 'xekada4965dd@rdluxe.com', NULL, '1234567890', '$2y$12$UK24dcH3gIQSTcT1HCg6yOD7fklrTa/ohyTOVoiDji/ft63tE.PxS', NULL, '2023-11-13 16:02:33', '2023-11-13 16:02:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`basketid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `basketitem`
--
ALTER TABLE `basketitem`
  ADD PRIMARY KEY (`basketitemid`),
  ADD KEY `basketid` (`basketid`),
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
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `basketid` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basketitem`
--
ALTER TABLE `basketitem`
  MODIFY `basketitemid` int(200) NOT NULL AUTO_INCREMENT;

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
  MODIFY `userid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `basketitem`
--
ALTER TABLE `basketitem`
  ADD CONSTRAINT `basketitem_ibfk_1` FOREIGN KEY (`basketid`) REFERENCES `basket` (`basketid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `basketitem_ibfk_2` FOREIGN KEY (`bikeid`) REFERENCES `bikes` (`bikeid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
