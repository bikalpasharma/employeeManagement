-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 04:00 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arifsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `projecttable`
--

CREATE TABLE `projecttable` (
  `id` int(11) NOT NULL,
  `controlid` varchar(100) NOT NULL,
  `empid` int(11) NOT NULL,
  `projectName` varchar(255) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `applicable` varchar(255) NOT NULL,
  `duedate` date DEFAULT NULL,
  `noncomp` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projecttable`
--

INSERT INTO `projecttable` (`id`, `controlid`, `empid`, `projectName`, `requirement`, `applicable`, `duedate`, `noncomp`, `remarks`, `status`) VALUES
(1, '0072', 1, 'Project First', 'Must (ASD)', 'No', '2021-05-28', 'Non compliance Test', 'Due  gg', 'Submitted'),
(2, '8862', 2, 'Project Second', 'Must Not', 'No', '2021-07-31', 'Meeting have no external service providers apart from ISP links', 'New Project Assigned', 'Due'),
(3, '1451', 1, 'Project Third', 'Should', 'No', '2021-06-30', 'Non compliance Test', 'Will Complete Very Soon', 'Submitted'),
(4, '0013', 2, 'IT Security Advisor', 'Must', 'Yes', '2021-07-21', 'Tooraj Enayati as the system Owner is responsible for providing security level guidance and ensure compliances with policies.', 'New Project Assigned', 'Due'),
(5, '2222', 6, 'Project CA', 'Must', 'Yes', '2021-06-30', 'Non compliance Test', 'You have problem', 'Due');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`id`, `firstName`, `lastName`, `email`, `contact`, `address`, `gender`, `birthday`, `password`) VALUES
(1, 'Bikalpa', 'Sharma', 'bikalpa@mail.com', 2147483647, 'Kathmandu Nepal', 'Male', '1998-09-04', 'b12345'),
(2, 'Manoj', 'Poudel', 'manoj@mail.com', 2147483647, 'Sydney, Australia', 'Male', '1999-06-15', 'm12345'),
(4, 'Kabita', 'Gautam', 'test@mail.com', 2147483647, 'Shantipur Gulmi', 'Female', '1998-12-25', 'k12345'),
(5, 'Bindu', 'Poudel', 'bindu@mail.com', 2147483647, 'Shantipur Gulmi', 'Female', '2021-06-23', 'b12343'),
(6, 'Suvas', 'Gautam', 'suvas@mail.com', 2147483647, 'New Delhi India', 'Male', '1997-08-03', 's12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projecttable`
--
ALTER TABLE `projecttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projecttable`
--
ALTER TABLE `projecttable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
