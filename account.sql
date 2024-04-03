-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Feb 15, 2024 at 05:13 AM
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
-- Table structure for table `account_tab`
--

CREATE TABLE `account_tab` (
  `account_id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `ssn` varchar(100) NOT NULL,
  `children_id` int(100) NOT NULL,
  `firstname_child_one` varchar(100) NOT NULL,
  `firstname_child_two` varchar(100) NOT NULL,
  `ssn_child_one` varchar(100) NOT NULL,
  `ssn_child_two` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_tab`
--

INSERT INTO `account_tab` (`account_id`, `firstname`, `lastname`, `date`, `ssn`, `children_id`, `firstname_child_one`, `firstname_child_two`, `ssn_child_one`, `ssn_child_two`) VALUES
(1, 'Aharon', 'Millrod', '2024-02-15', '122-12-1212', 5, 'nak', '', '122-12-1212', ''),
(2, 'Aharon', 'Millrod', '2024-02-15', '122-12-1212', 5, 'smcwkc', '', '122-12-1212', ''),
(3, 'Aharon', 'Millrod', '2024-02-15', '122-12-1212', 1, 'smcwkc', '', '122-12-1212', '');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `children_id` int(100) NOT NULL,
  `Children_Number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`children_id`, `Children_Number`) VALUES
(1, 'One'),
(2, 'Two');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_tab`
--
ALTER TABLE `account_tab`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`children_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_tab`
--
ALTER TABLE `account_tab`
  MODIFY `account_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `children_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
