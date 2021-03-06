-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 05:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_links`
--

CREATE TABLE `tbl_links` (
  `link_id` int(11) NOT NULL,
  `link_tab` varchar(100) NOT NULL,
  `link_title` varchar(500) NOT NULL,
  `link` varchar(800) NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `contact` varchar(16) NOT NULL,
  `access` varchar(5) NOT NULL,
  `password` varchar(45) NOT NULL,
  `status` int(2) NOT NULL,
  `role` varchar(30) NOT NULL,
  `added_by` varchar(30) NOT NULL,
  `is_deleted` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`ID`, `username`, `contact`, `access`, `password`, `status`, `role`, `added_by`, `is_deleted`) VALUES
(1, 'Dip sarkar', '8637554692', 'Admin', '17ba0791499db908433b80f37c5fbc89b870084b', 0, 'admin', '8637554692', 0),
(21, 'adsdsf', '8877889977', 'User', '17ba0791499db908433b80f37c5fbc89b870084b', 0, 'agent', '7896541250', 0),
(22, 'kojihugy', '84519845984519', 'User', '17ba0791499db908433b80f37c5fbc89b870084b', 0, 'agent', '7896541250', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_links`
--
ALTER TABLE `tbl_links`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_links`
--
ALTER TABLE `tbl_links`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
