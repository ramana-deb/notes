-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 08:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `col_notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `staffprofile`
--

CREATE TABLE `staffprofile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffprofile`
--

INSERT INTO `staffprofile` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'balaji', 'balaji@gmail.com', '123', 'staff'),
(2, 'mosika', 'mosika@gmail.com', '123', 'staff'),
(3, 'vinitha', 'vinitha@gmail.com', '123', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `stprofile`
--

CREATE TABLE `stprofile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stprofile`
--

INSERT INTO `stprofile` (`id`, `name`, `email`, `password`, `role`, `dept`, `year`, `sem`) VALUES
(3, 'ramana', 'ramana@gmail.com', '123', 'student', 'CSE', ' 2nd_yr', ' 3rd_sem'),
(4, 'barath', 'barath@gmail.com', '123', 'student', 'MECH', '', ''),
(5, 'sivaraj', 'sivarai@gmail.com', '123', 'student', 'EEE', '', ''),
(6, 'sivaraj', 'sivaraj@gmail.com', '123', 'student', 'CSE', ' 3rd_yr', '6th_sem');

-- --------------------------------------------------------

--
-- Table structure for table `sunotes`
--

CREATE TABLE `sunotes` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `uploaded_by` varchar(255) NOT NULL,
  `uploaded_to` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `files` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `uploaded_on` varchar(225) NOT NULL DEFAULT current_timestamp(),
  `dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uassign`
--

CREATE TABLE `uassign` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `uploaded_by` varchar(255) NOT NULL,
  `uploaded_to` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `files` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unotes`
--

CREATE TABLE `unotes` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `uploaded_by` varchar(255) NOT NULL,
  `uploaded_to` varchar(255) NOT NULL,
  `files` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `dept` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staffprofile`
--
ALTER TABLE `staffprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stprofile`
--
ALTER TABLE `stprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sunotes`
--
ALTER TABLE `sunotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uassign`
--
ALTER TABLE `uassign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unotes`
--
ALTER TABLE `unotes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staffprofile`
--
ALTER TABLE `staffprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stprofile`
--
ALTER TABLE `stprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sunotes`
--
ALTER TABLE `sunotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uassign`
--
ALTER TABLE `uassign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unotes`
--
ALTER TABLE `unotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
