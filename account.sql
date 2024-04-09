-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307:3307
-- Generation Time: Apr 04, 2024 at 01:05 AM
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
-- Dumping data for table `account_history`
--

INSERT INTO `account_history` (`account_id`, `lastname`, `date`, `ssn`, `children_id`, `zero_child`, `firstname_child_one`, `firstname_child_two`, `firstname_child_three`, `firstname_child_four`, `firstname_child_five`, `firstname_child_six`, `firstname_child_seven`, `firstname_child_eight`, `firstname_child_nine`, `firstname_child_ten`, `ssn_child_one`, `ssn_child_two`, `ssn_child_three`, `ssn_child_four`, `ssn_child_five`, `ssn_child_six`, `ssn_child_seven`, `ssn_child_eight`, `ssn_child_nine`, `ssn_child_ten`, `image`) VALUES
(231, 'millrod', '2024-04-18', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(232, 'millrod', '2024-04-03', '212-12-1222', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(233, 'millrod', '2024-04-03', '212-12-1222', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(234, 'millrod', '2024-04-24', '122-12-1211', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(235, 'millrod', '2024-04-10', '122-12-1212', 1, '', 'Noam', '', '', '', '', '', '', '', '', '', '122-12-1212', '', '', '', '', '', '', '', '', '', ''),
(236, 'millrod', '2024-04-17', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(237, 'millrod', '2024-04-11', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(238, 'millrod', '2024-04-16', '122-22-2222', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(239, 'KORNBLEUTH ', '2024-04-11', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(240, 'millrod', '2024-04-11', '122-11-1111', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(241, 'KORNBLEUTH ', '2024-04-18', '122-12-1212', 2, '', 'nak', 'Yosef', '', '', '', '', '', '', '', '', '122-21-2122', '122-12-1212', '', '', '', '', '', '', '', '', ''),
(242, 'KORNBLEUTH ', '2024-04-25', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(243, 'millrod', '2024-04-17', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(244, 'millrod', '2024-04-11', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(245, 'millrod111', '2024-04-10', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(246, 'KORNBLEUTH ', '2024-04-10', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(247, 'millrod111', '2024-04-11', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(248, 'millrod', '2024-04-10', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(249, 'noam', '2024-04-10', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(250, 'millrod', '2024-04-10', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `account_tab`
--

CREATE TABLE `account_tab` (
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
-- Dumping data for table `account_tab`
--

INSERT INTO `account_tab` (`account_id`, `lastname`, `date`, `ssn`, `children_id`, `zero_child`, `firstname_child_one`, `firstname_child_two`, `firstname_child_three`, `firstname_child_four`, `firstname_child_five`, `firstname_child_six`, `firstname_child_seven`, `firstname_child_eight`, `firstname_child_nine`, `firstname_child_ten`, `ssn_child_one`, `ssn_child_two`, `ssn_child_three`, `ssn_child_four`, `ssn_child_five`, `ssn_child_six`, `ssn_child_seven`, `ssn_child_eight`, `ssn_child_nine`, `ssn_child_ten`, `image`) VALUES
(246, 'millrod111', '2024-04-10', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(247, 'KORNBLEUTH ', '2024-04-10', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(248, 'millrod111', '2024-04-11', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(250, 'noam', '2024-04-10', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(251, 'millrod', '2024-04-10', '122-12-1212', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `autontication`
--

CREATE TABLE `autontication` (
  `auto_id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `con_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `autontication`
--

INSERT INTO `autontication` (`auto_id`, `firstname`, `lastname`, `password`, `con_password`) VALUES
(139, 'aharon', 'millrod', '12', '12'),
(140, 'aharon', 'KORNBLEUTH', '12', '12'),
(141, 'aharon', 'millrod12', '12', '12'),
(142, 'aharon', 'KORNBLEUTH 12', '12', '12'),
(143, 'aharon', 'millrod111', '12', '12'),
(144, 'aharon', 'noam', '12', '12'),
(145, 'aharon', 'ayelet', '12', '12'),
(146, 'aharon', 'aba', '12', '12'),
(147, 'aharon', 'stiv', '12', '12'),
(148, 'aharon', 'KORNBLEUTH 00', '12', '12'),
(149, 'aharon', 'millrod00', '12', '12');

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
(2, 'Two'),
(3, 'Three'),
(4, 'Four'),
(5, 'Five'),
(6, 'Six'),
(7, 'Seven'),
(8, 'Eight'),
(9, 'Nine'),
(10, 'Ten');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_history`
--
ALTER TABLE `account_history`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `account_tab`
--
ALTER TABLE `account_tab`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `autontication`
--
ALTER TABLE `autontication`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`children_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_history`
--
ALTER TABLE `account_history`
  MODIFY `account_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `account_tab`
--
ALTER TABLE `account_tab`
  MODIFY `account_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `autontication`
--
ALTER TABLE `autontication`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `children_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
