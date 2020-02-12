-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 12, 2020 at 09:04 AM
-- Server version: 5.5.61-38.13-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pssofg3s_duda`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(32) NOT NULL,
  `treatment_id` int(32) NOT NULL,
  `employee_id` int(32) NOT NULL,
  `time_slot` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_select` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(32) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `treatment_id`, `employee_id`, `time_slot`, `date_select`, `user_id`, `status`, `created_date`) VALUES
(5, 2, 3, '12:21 PM - 13:28 PM', '02/05/2020', 0, 'active', '2020-02-04 05:14:27'),
(4, 2, 3, '12:21 PM - 13:28 PM', '02/05/2020', 0, 'active', '2020-02-04 05:14:23'),
(3, 10, 7, '12:21 PM - 13:28 PM', '02/05/2020', 0, 'active', '2020-02-04 05:02:59'),
(6, 5, 0, '', '', 0, 'active', '2020-02-06 06:39:32'),
(7, 5, 6, '09:00 AM - 10:00 AM', '02/12/2020', 0, 'active', '2020-02-11 05:35:49'),
(8, 5, 6, '09:00 AM - 10:00 AM', '02/12/2020', 0, 'active', '2020-02-11 05:35:58'),
(9, 5, 9, '09:00 AM - 10:00 AM', '02/12/2020', 0, 'active', '2020-02-11 09:44:25'),
(10, 9, 8, '16:14 PM - 17:21 PM', '02/21/2020', 0, 'active', '2020-02-11 10:42:02'),
(11, 8, 9, '14:00 PM - 15:00 PM', '02/20/2020', 0, 'active', '2020-02-11 10:44:16'),
(12, 9, 0, '', '02/11/2020', 0, 'active', '2020-02-11 12:43:02'),
(13, 8, 0, '', '02/11/2020', 0, 'active', '2020-02-11 12:44:59'),
(14, 8, 6, '17:00 PM - 18:00 PM', '02/12/2020', 0, 'active', '2020-02-12 04:21:56'),
(15, 5, 0, '10:00 AM - 11:00 AM', '02/12/2020', 0, 'active', '2020-02-12 06:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(32) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_name`, `id`, `created_date`) VALUES
('Women', 12, '2020-02-11 06:58:33'),
('Men', 7, '2020-01-23 04:03:52'),
('Coloring', 5, '2020-01-22 04:12:16'),
('Makeup', 6, '2020-02-11 06:58:14');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(35) NOT NULL,
  `employee_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `employee_profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `employee_profile` text COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_name`, `employee_profession`, `employee_profile`, `created_date`) VALUES
(8, 'demotest', 'demo n', 'https://pssoftgroup.com/demo/duda/uploads/employee_profile/Max-R_Headshot (1).jpg', '2020-02-11 09:22:47'),
(6, 'Demo', 'hair stylist ', 'https://pssoftgroup.com/demo/duda/uploads/employee_profile/img_avatar3.png', '2020-02-11 09:42:24'),
(9, 'test', 'test', 'https://pssoftgroup.com/demo/duda/uploads/employee_profile/unnamed.jpg', '2020-02-11 09:40:32');

-- --------------------------------------------------------

--
-- Table structure for table `global_variables`
--

CREATE TABLE `global_variables` (
  `global_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `global_value` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `global_variables`
--

INSERT INTO `global_variables` (`global_key`, `global_value`) VALUES
('phone_number', 'true'),
('email', 'false'),
('name', 'false'),
('birthdate', 'false'),
('gender', 'true'),
('receive_newsletter', 'true'),
('receive_sms', 'true'),
('other_stylists', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(32) NOT NULL,
  `employee_id` int(32) NOT NULL,
  `from_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `to_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_cal`
--

CREATE TABLE `schedule_cal` (
  `day` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lunch_start` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lunch_end` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_day_off` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `schedule_cal`
--

INSERT INTO `schedule_cal` (`day`, `start`, `end`, `lunch_start`, `lunch_end`, `is_day_off`) VALUES
('monday', '9:00 AM', '10:00 PM', '1:00 PM', '2:00 PM', 0),
('tuesday', '9:00 AM', '8:00 AM', '1:00 PM', '2:00 PM', 0),
('wednesday', '9:00 AM', '6:00 PM', '1:00 PM', '2:00 PM', 0),
('thursday', '9:00 AM', '6:00 PM', '1:00 PM', '2:00 PM', 0),
('friday', '9:00 AM', '6:00 PM', '1:00 PM', '2:00 PM', 0),
('saturday', '10:15 AM', '10:15 AM', '10:15 AM', '10:15 AM', 0),
('sunday', '10:15 AM', '10:15 AM', '10:15 AM', '10:15 AM', 0);

-- --------------------------------------------------------

--
-- Table structure for table `treatments`
--

CREATE TABLE `treatments` (
  `id` int(32) NOT NULL,
  `treat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `treat_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `treat_currency` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `treat_time` varchar(266) COLLATE utf8_unicode_ci NOT NULL,
  `treat_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `treatments`
--

INSERT INTO `treatments` (`id`, `treat_name`, `treat_price`, `treat_currency`, `treat_time`, `treat_category`, `created_date`) VALUES
(1, 'hair cut', '399', 'SEK', '40', '2', '2020-01-22 07:35:37'),
(2, 'hair cut', '399', 'SEK', '40', '2', '2020-01-22 07:36:15'),
(3, 'hair dress', '400', 'SEK', '50', '1', '2020-01-22 11:33:21'),
(4, 'hair curl', '490', 'DKK', '30', '4', '2020-01-22 11:42:00'),
(5, 'Hair cut new', '356', 'EUR', '60', '5', '2020-01-28 05:28:34'),
(8, 'hair spa', '345', 'USD', '60', '7', '2020-01-30 06:36:43'),
(7, 'deno3', '555', 'DKK', '56', '8', '2020-01-23 10:35:17'),
(9, 'face ', '456', 'NOK', '67', '6', '2020-01-23 10:54:31'),
(10, 'color hair', '456', 'NOK', '67', '5', '2020-01-23 10:58:22'),
(13, 'Test', '30', 'USD', '1 Hour', '12', '2020-02-11 06:59:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'demo', 'demo', '2020-01-21 06:13:48'),
(2, 'demonew', 'demonew', '2020-01-21 06:40:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_cal`
--
ALTER TABLE `schedule_cal`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `treatments`
--
ALTER TABLE `treatments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `treatments`
--
ALTER TABLE `treatments`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
