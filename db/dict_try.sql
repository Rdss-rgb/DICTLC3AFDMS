-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 05:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dict_try`
--

-- --------------------------------------------------------

--
-- Table structure for table `filemanage`
--

CREATE TABLE `filemanage` (
  `id` int(11) NOT NULL,
  `file` blob NOT NULL,
  `access` varchar(255) NOT NULL,
  `modified` varchar(255) NOT NULL,
  `created` varchar(255) NOT NULL,
  `contents` longtext NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Display'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filemanage`
--

INSERT INTO `filemanage` (`id`, `file`, `access`, `modified`, `created`, `contents`, `Status`) VALUES
(25, 0x30382d446f63756d656e742d4d616e6167656d656e742d576f726b666c6f772e706466, 'pdf', 'Thursday Jan, 01, 1970', 'April 01, 2022, 12:05', 'sd', 'archive'),
(26, 0x44454e47554520414e4e55414c205245504f525420323032312e646f6378, 'docx', 'Thursday Jan, 01, 1970', 'April 23, 2022, 12:11', 'sd', 'Display'),
(28, 0x436f6e74726163742d444943542d5472616e73616374696f6e2d4d616e6167656d656e742d53797374656d2e706466, 'pdf', 'Thursday Jan, 01, 1970', 'April 23, 2022, 12:42', 'sd', 'Display'),
(29, 0x44454e47554520414e4e55414c205245504f525420323032312e646f6378, 'docx', 'Thursday Jan, 01, 1970', 'April 23, 2022, 2:18', 'sd', 'Display'),
(30, 0x79757a755f696e7374616c6c65722e6c6f67, 'log', 'Thursday Jan, 01, 1970', 'April 23, 2022, 2:22', 'sd', 'Display');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `hist_id` int(11) NOT NULL,
  `Uname` varchar(100) NOT NULL,
  `act` varchar(100) NOT NULL,
  `Dt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`hist_id`, `Uname`, `act`, `Dt`) VALUES
(1, 'Drenz', 'April 23, 2022, 12:52', 'Login'),
(2, 'Drenz', 'April 22, 2022, 11:00', 'Logout'),
(3, 'Drenz', 'April 23, 2022, 1:00', 'Login'),
(4, 'Drenz', 'April 23, 2022, 2:16', 'Login'),
(5, 'Drenz', 'April 23, 2022, 2:21', 'Logout'),
(6, 'Drenz', 'April 23, 2022, 2:21', 'Login'),
(7, 'Drenz', 'April 23, 2022, 2:23', 'Logout'),
(8, 'Drenz', 'April 25, 2022, 10:22', 'Login');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Cnum` varchar(50) NOT NULL,
  `Bday` varchar(50) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `pass`, `email`, `Fname`, `Lname`, `Cnum`, `Bday`, `avatar`, `Status`, `role`) VALUES
('Angelo', '121dsfS13', 'asensi@gmail.com', 'Angelo ', 'Asensi', '09232876756', '01/06/1999', 'ase.jpg', 'Active', 'Staff'),
('Benjie', 'QWERTY1234s', 'bf@gmail.com', 'Benjie', 'Fajarito', '09786786789', '03/15/2001', '392af9c15037d57fdd7321ca75a4524b.jpg', 'Active', 'Staff'),
('Drenz', 'QWERTY1234s', 'drendarjosh@gmail.com', 'Drendar Josh', 'Dimasacat', '09786786709', '10/26/1999', '142dff743c80aaef002d55f7c496ff12.jpg', 'Active', 'Admin'),
('Jeric', 'Dguhjadgy216', 'Jjimenez@gmail.com', 'Jeric', 'Jimenez', '09213243547', '02/17/1999', 'je.jpg', 'Active', 'Admin'),
('Kathleen', '78GfdaFHDJ', 'Kathleen_A@yahoo.com', 'Kathleen', 'Atienza', '09563257431', '03/24/1999', 'kath.jpg', 'Active', 'Admin'),
('Mariel', 'Jgdyhas656da', 'Alamag_Mariel@gmail.com', 'Mariel', 'Alamag', '09674556689', '02/23/1999', 'mari.png', 'Active', 'Admin'),
('Rheygie', '087F67SGjf', 'Rhegyie1@gmail.com', 'Rheygie', 'Ramirez', '09607985746', '05/26/1999', 'rheg.jpg', 'Active', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filemanage`
--
ALTER TABLE `filemanage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`hist_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filemanage`
--
ALTER TABLE `filemanage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `hist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
