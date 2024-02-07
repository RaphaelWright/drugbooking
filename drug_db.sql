-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 01:20 PM
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
-- Database: `drug_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `drug_id` varchar(15) NOT NULL,
  `drug_name` varchar(50) NOT NULL,
  `drug_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`drug_id`, `drug_name`, `drug_quantity`) VALUES
('0', 'fvgsf', 34),
('434324', 'mnfs', 43);

-- --------------------------------------------------------

--
-- Table structure for table `drug_order`
--

CREATE TABLE `drug_order` (
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `drug` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `delivery_addr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drug_order`
--

INSERT INTO `drug_order` (`name`, `email`, `phone`, `drug`, `quantity`, `delivery_addr`) VALUES
('Raphael Wright Agbedanu', 'raphaelwright2003@gmail.com', '+233555083859', 'apetamin', 5, 'Gh574589'),
('sarah', 'raphaelwright2003@gmail.com', '+233555083859', 'fjhsdjms', 46, 'PO BOX NB 813'),
('tracy', 'raphaelwright2003@gmail.com', '+233555083859', 'apetamin', 223, 'PO BOX NB 813');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `drug_order`
--
ALTER TABLE `drug_order`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
