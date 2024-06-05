-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2024 at 10:05 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `comment`) VALUES
(1, 'Lam Maurice', 'maurice@yh.fr', 'Hello World'),
(2, 'Kevin Bilong', 'kevbi@hh.cs', 'Please how do i go about all this?'),
(3, 'Ngan Dav', 'dav@lp.com', ' Beautiful Site'),
(6, 'thibaut', 'thibaut@yahoo.fr', 'hahahahahah '),
(9, 'godiyvan', 'godiyvan@gmail.com', 'school');

-- --------------------------------------------------------

--
-- Table structure for table `corp_db`
--

CREATE TABLE `corp_db` (
  `corp_id` int NOT NULL,
  `f_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `l_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `A_date` date NOT NULL,
  `D_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `corp_db`
--

INSERT INTO `corp_db` (`corp_id`, `f_name`, `l_name`, `A_date`, `D_date`) VALUES
(8, 'yuhvhjj', 'hjvhbjkb', '2023-02-01', '2023-02-04'),
(9, 'hbjnlk', 'l;mkbhjn b g', '2023-02-01', '2023-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `c_booking`
--

CREATE TABLE `c_booking` (
  `corps_id` int NOT NULL,
  `C_name` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  `Religion` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  `Marital_status` text COLLATE utf8mb4_general_ci NOT NULL,
  `Gender` text COLLATE utf8mb4_general_ci NOT NULL,
  `Profession` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  `Arr_date` date NOT NULL,
  `D_name` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  `CNI_number` int NOT NULL,
  `Retrievement_date` date NOT NULL,
  `Relationship_with_deceased` text COLLATE utf8mb4_general_ci NOT NULL,
  `Telephone` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `c_booking`
--

INSERT INTO `c_booking` (`corps_id`, `C_name`, `Religion`, `Marital_status`, `Gender`, `Profession`, `Arr_date`, `D_name`, `CNI_number`, `Retrievement_date`, `Relationship_with_deceased`, `Telephone`) VALUES
(1, 'Christine Robles', 'Est sit sed harum n', 'Omnis aut quis offic', 'Quo ullamco cillum q', 'Eum quia qui volupta', '1982-09-18', 'Mallory Taylor', 123, '1990-07-27', 'Reprehenderit dolore', '+1 (226) 977-8423');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `user_id` int NOT NULL,
  `user_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `user_pwd` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `user_type` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `user_email` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`user_id`, `user_name`, `user_pwd`, `user_type`, `user_email`) VALUES
(14, 'momoyvan', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 'yesso@example.com'),
(15, 'godiyvan', '81dc9bdb52d04dc20036dbd8313ed055', 'user', 'godiyvan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corp_db`
--
ALTER TABLE `corp_db`
  ADD PRIMARY KEY (`corp_id`);

--
-- Indexes for table `c_booking`
--
ALTER TABLE `c_booking`
  ADD PRIMARY KEY (`corps_id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `c_booking`
--
ALTER TABLE `c_booking`
  MODIFY `corps_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
