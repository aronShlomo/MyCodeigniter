-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307:3307
-- Generation Time: May 14, 2024 at 04:28 PM
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
  `username` varchar(100) NOT NULL,
  `username_child_one` varchar(100) NOT NULL,
  `username_child_two` varchar(100) NOT NULL,
  `username_child_three` varchar(100) NOT NULL,
  `username_child_four` varchar(100) NOT NULL,
  `username_child_five` varchar(100) NOT NULL,
  `username_child_six` varchar(100) NOT NULL,
  `username_child_seven` varchar(100) NOT NULL,
  `username_child_eight` varchar(100) NOT NULL,
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
  `dob_child_one` varchar(200) NOT NULL,
  `dob_child_two` varchar(200) NOT NULL,
  `dob_child_three` varchar(200) NOT NULL,
  `dob_child_four` varchar(200) NOT NULL,
  `dob_child_five` varchar(200) NOT NULL,
  `dob_child_six` varchar(200) NOT NULL,
  `dob_child_seven` varchar(200) NOT NULL,
  `dob_child_eight` varchar(200) NOT NULL,
  `dob_child_nine` varchar(200) NOT NULL,
  `dob_child_ten` varchar(200) NOT NULL,
  `image` blob NOT NULL,
  `second_username` varchar(100) NOT NULL,
  `second_lastname` varchar(100) NOT NULL,
  `second_date` text NOT NULL,
  `second_ssn` varchar(100) NOT NULL,
  `second_image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_history`
--

INSERT INTO `account_history` (`account_id`, `lastname`, `date`, `ssn`, `children_id`, `zero_child`, `username`, `username_child_one`, `username_child_two`, `username_child_three`, `username_child_four`, `username_child_five`, `username_child_six`, `username_child_seven`, `username_child_eight`, `firstname_child_one`, `firstname_child_two`, `firstname_child_three`, `firstname_child_four`, `firstname_child_five`, `firstname_child_six`, `firstname_child_seven`, `firstname_child_eight`, `firstname_child_nine`, `firstname_child_ten`, `ssn_child_one`, `ssn_child_two`, `ssn_child_three`, `ssn_child_four`, `ssn_child_five`, `ssn_child_six`, `ssn_child_seven`, `ssn_child_eight`, `ssn_child_nine`, `ssn_child_ten`, `dob_child_one`, `dob_child_two`, `dob_child_three`, `dob_child_four`, `dob_child_five`, `dob_child_six`, `dob_child_seven`, `dob_child_eight`, `dob_child_nine`, `dob_child_ten`, `image`, `second_username`, `second_lastname`, `second_date`, `second_ssn`, `second_image`) VALUES
(330, 'millrod', '2024-04-18', '122-12-1212', 0, '', 'aharon', '', '', '', '', '', '', '', '', 'gpoa', 'aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '', '', '', '', '', '', '', '', '', '', 'Rivka', 'Kornb', '2024-05-21', '122-12-1212', ''),
(331, 'millrod', '2024-04-18', '122-12-1212', 0, '', 'aharon', '', '', '', '', '', '', '', '', 'gpoa', 'aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '', '', '', '', '', '', '', '', '', '', 'Rivka', 'Kornb', '2024-05-14', '122-12-1212', ''),
(332, 'millrod', '2024-04-18', '122-12-1212', 0, '', 'aharon', '', '', '', '', '', '', '', '', 'gpoa', 'aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '', '', '', '', '', '', '', '', '', '', 'Rivka', 'Kornb', '2024-05-21', '122-12-1212', ''),
(333, 'Millrod', '2024-04-18', '122-12-1212', 0, '', 'Aharon', '', '', '', '', '', '', '', '', 'gpoa', 'aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '', '', '', '', '', '', '', '', '', '', 'Rivka', 'Kornb', '2024-05-14', '122-12-1222', ''),
(334, 'Millrod', '2024-04-18', '122-12-1212', 0, '', 'Aharon', '', '', '', '', '', '', '', '', 'gpoa', 'aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '', '', '', '', '', '', '', '', '', '', 'Rivka', 'Kornb', '2024-05-15', '122-12-1212', ''),
(335, 'KORNBLEUTH ', '2024-04-18', '122-12-1212', 0, '', 'Rivka', '', '', '', '', '', '', '', '', 'gpoa', 'aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '', '', '', '', '', '', '', '', '', '', 'Aharon', 'Millrod', '2024-05-15', '122-12-1212', ''),
(336, 'KORNBLEUTH ', '2024-04-18', '122-12-1212', 0, '', 'Rivka', '', '', '', '', '', '', '', '', 'gpoa', 'aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '', '', '', '', '', '', '', '', '', '', 'Rivka', 'Kornb', '2024-05-16', '122-11-1212', ''),
(337, 'KORNBLEUTH ', '2024-04-18', '122-12-1212', 1, '', 'Rivka', 'fdsdy', '', '', '', '', '', '', '', 'gpoa', 'aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '', '', '', '', '', '', '', '', '', '', 'Rivka', 'Alslalskal', '2024-05-29', '122-12-1212', ''),
(338, 'KORNBLEUTH ', '2024-04-18', '122-12-1212', 0, '', 'Rivka', '', '', '', '', '', '', '', '', 'gpoa', 'aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '', '', '', '', '', '', '', '', '', '', 'Rivka', 'Kornb', '2024-05-16', '122-12-1212', ''),
(339, 'KORNBLEUTH ', '2024-04-18', '122-12-1212', 0, '', 'Rivka', '', '', '', '', '', '', '', '', 'gpoa', 'aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '', '', '', '', '', '', '', '', '', '', 'Rivka', 'Alslalskal', '2024-05-15', '122-12-1222', ''),
(340, 'KORNBLEUTH ', '2024-04-18', '122-12-1212', 0, '', 'Rivka', '', '', '', '', '', '', '', '', 'gpoa', 'aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '', '', '', '', '', '', '', '', '', '', 'Rivka', 'Yosef', '2024-05-16', '122-12-1212', ''),
(341, 'KORNBLEUTH ', '2024-04-18', '122-12-1212', 0, '', 'Rivka', '', '', '', '', '', '', '', '', 'gpoa', 'aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '', '', '', '', '', '', '', '', '', '', 'Rivka', 'Kornb', '2024-05-15', '122-11-1212', ''),
(342, 'KORNBLEUTH ', '2024-04-18', '122-12-1212', 2, '', 'Rivka', 'Avigayil', 'Gita', '', '', '', '', '', '', '', 'Aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '2024-05-22', '', '', '', '', '', '', '', '', '', 'Akmcka', 'Kornb', '2024-05-14', '122-12-1212', ''),
(343, 'KORNBLEUTH ', '2024-04-18', '122-12-1212', 1, '', 'Rivka', 'Avigayil', '', '', '', '', '', '', '', '', 'Aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '', '', '', '', '', '', '', '', '', '', 'Rivka', 'Wkcmwkcm', '2024-05-21', '122-12-1212', ''),
(344, 'KORNBLEUTH ', '2024-04-18', '122-12-1212', 0, '', 'Rivka', '', '', '', '', '', '', '', '', '', 'Aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '', '', '', '', '', '', '', '', '', '', 'Rivka', 'Alslalskal', '2024-05-28', '122-11-1212', ''),
(345, 'Millrod', '2024-04-18', '122-12-1212', 0, '', 'Rivka', '', '', '', '', '', '', '', '', '', 'Aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '', '', '', '', '', '', '', '', '', '', 'Rivka', 'Kornb', '2024-05-22', '122-11-2122', ''),
(346, 'Millrod', '2024-04-18', '122-12-1212', 0, '', 'Rivka', '', '', '', '', '', '', '', '', '', 'Aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '', '', '', '', '', '', '', '', '', '', 'Akmcka', 'Kornb', '2024-05-21', '122-12-1212', ''),
(347, 'Millrod', '2024-04-18', '122-12-1212', 2, '', 'Aharon12', 'Avigayil', 'Gita', '', '', '', '', '', '', '', 'Aharon', '', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '', '', '', '', '', '', '', '', '2024-05-16', '2024-05-22', '', '', '', '', '', '', '', '', '', 'Rivka', 'Kornb', '2024-05-16', '122-11-1212', ''),
(348, 'Millrod', '2024-04-18', '122-12-1212', 3, '', 'Aharon12', 'Gidy', 'Gita', 'Avi', '', '', '', '', '', '', 'Aharon', 'Aqfql', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '122-12-1212', '', '', '', '', '', '', '', '2024-05-16', '2024-05-23', '2024-05-21', '', '', '', '', '', '', '', '', 'Rivka', 'Kornb', '2024-05-14', '222-44-999', ''),
(349, 'Millrod', '2024-04-18', '122-12-1212', 1, '', 'Aharon12', 'Avigayil', '', '', '', '', '', '', '', '', 'Aharon', 'Aqfql', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '122-12-1212', '', '', '', '', '', '', '', '2024-05-16', '', '', '', '', '', '', '', '', '', '', 'Rivka', 'Alslalskal', '2024-05-14', '122-12-1212', ''),
(350, 'Millrod', '2024-04-18', '122-12-1212', 2, '', 'Aharon', 'Gita', 'Avigayil', '', '', '', '', '', '', '', 'Aharon', 'Aqfql', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '122-12-1212', '', '', '', '', '', '', '', '2024-05-16', '2024-05-27', '', '', '', '', '', '', '', '', '', 'Rivka', 'Kornbluthe', '2024-05-16', '222-44-999', ''),
(351, 'Millrod', '2024-04-18', '122-12-1212', 1, '', 'Aharon', 'Avigayil', '', '', '', '', '', '', '', '', 'Aharon', 'Aqfql', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '122-12-1212', '', '', '', '', '', '', '', '2024-05-16', '2024-05-27', '', '', '', '', '', '', '', '', '', 'Rivka', 'Kornb', '2024-05-22', '222-44-999', ''),
(352, 'Millrod', '2024-04-18', '122-12-1212', 1, '', 'Aharon', 'Gita', '', '', '', '', '', '', '', '', 'Aharon', 'Aqfql', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '122-12-1212', '', '', '', '', '', '', '', '2024-05-16', '2024-05-27', '', '', '', '', '', '', '', '', '', 'Rivka', 'Alslalskal', '2024-05-22', '222-44-999', ''),
(353, 'Millrod', '2024-04-18', '122-12-1212', 0, '', 'Aharon', '', '', '', '', '', '', '', '', '', 'Aharon', 'Aqfql', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '122-12-1212', '', '', '', '', '', '', '', '2024-05-16', '2024-05-27', '', '', '', '', '', '', '', '', '', 'Rivka', 'Kornb', '2024-05-22', '122-12-1212', ''),
(354, 'Millrod', '2024-04-18', '122-12-1212', 0, '', 'Aharon', '', '', '', '', '', '', '', '', '', 'Aharon', 'Aqfql', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '122-12-1212', '', '', '', '', '', '', '', '2024-05-16', '2024-05-27', '', '', '', '', '', '', '', '', '', 'Rivka', 'Kornb', '2024-05-16', '122-12-1211', ''),
(355, 'KORNBLEUTH ', '2024-04-18', '122-12-1212', 0, '', 'Aharon', '', '', '', '', '', '', '', '', '', 'Aharon', 'Aqfql', '', '', '', '', '', '', '', '122-11-2121', '122-12-1212', '122-12-1212', '', '', '', '', '', '', '', '2024-05-16', '2024-05-27', '', '', '', '', '', '', '', '', '', 'Rivka', 'Kornb', '2024-05-15', '122-11-1212', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_history`
--
ALTER TABLE `account_history`
  ADD PRIMARY KEY (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_history`
--
ALTER TABLE `account_history`
  MODIFY `account_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=356;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
