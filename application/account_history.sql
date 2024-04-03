-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307:3307
-- Generation Time: Apr 02, 2024 at 06:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_history`
--

CREATE TABLE `account_history` (
  `account_id` int(100) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `date` text NOT NULL,
  `ssn` varchar(100) NOT NULL,
  `children_id` int(100) NOT NULL,
  `zero_child` varchar(100) NOT NULL,
  `firstname_child_one` varchar(100) NOT NULL,
  `firstname_child_two` varchar(100) NOT NULL,
  `firstname_child_three` varchar(200) NOT NULL,
  `firstname_child_four` varchar(200) NOT NULL,
  `firstname_child_five` varchar(200) NOT NULL,
  `firstname_child_six` varchar(200) NOT NULL,
  `firstname_child_seven` varchar(200) NOT NULL,
  `firstname_child_eight` varchar(200) NOT NULL,
  `firstname_child_nine` varchar(200) NOT NULL,
  `firstname_child_ten` varchar(200) NOT NULL,
  `ssn_child_one` varchar(200) NOT NULL,
  `ssn_child_two` varchar(200) NOT NULL,
  `ssn_child_three` varchar(200) NOT NULL,
  `ssn_child_four` varchar(200) NOT NULL,
  `ssn_child_five` varchar(200) NOT NULL,
  `ssn_child_six` varchar(200) NOT NULL,
  `ssn_child_seven` varchar(200) NOT NULL,
  `ssn_child_eight` varchar(200) NOT NULL,
  `ssn_child_nine` varchar(200) NOT NULL,
  `ssn_child_ten` varchar(200) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_history`
--
ALTER TABLE `account_history`
  ADD PRIMARY KEY (`account_id`);
COMMIT;





--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_tab`
--
ALTER TABLE `account_history`
  MODIFY `account_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
