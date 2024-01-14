-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 06:09 PM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `additem`
--

CREATE TABLE `additem` (
  `Gate_Pass` int(20) NOT NULL,
  `DR_No` int(20) NOT NULL,
  `Product_Id` int(20) NOT NULL,
  `Product_Name` varchar(50) NOT NULL,
  `Price` int(20) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `additem`
--

INSERT INTO `additem` (`Gate_Pass`, `DR_No`, `Product_Id`, `Product_Name`, `Price`, `Quantity`, `Date`) VALUES
(0, 1010, 6969, 'files and cver', 500, 50, '2023-03-08'),
(0, 1010, 4441, 'files and cver', 500, 2, '2023-03-08'),
(111, 111, 111, 'laptop', 111, 111, '2023-03-08'),
(111, 66666, 636363, 'pen', 500, 60, '2023-03-08'),
(56, 909, 67, 'laptop', 10000, 1, '2023-03-18'),
(5588, 22, 8, 'hdhhdhd', 414, 54, '2023-04-22'),
(5252, 323, 555, 'jnlnln', 6262, 20, '2023-04-22'),
(6363, 6363, 6363, 'jkgbjkb', 330, 2, '2023-04-22'),
(3030, 2020, 1010, 'knln', 3030, 2, '2023-04-22'),
(6565, 4545, 6565, 'bhkh', 62, 2, '2023-04-22'),
(6666, 66, 66, 'bjkb', 5, 5, '2023-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `additem1`
--

CREATE TABLE `additem1` (
  `Gate_Pass` int(20) NOT NULL,
  `DR_No` int(20) NOT NULL,
  `Product_Id` int(20) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Price` int(20) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `additem1`
--

INSERT INTO `additem1` (`Gate_Pass`, `DR_No`, `Product_Id`, `Product_Name`, `Price`, `Quantity`, `Date`) VALUES
(66666, 55555, 7777, 'mouse', 565656, 2, '2023-03-18'),
(5, 7, 8, 'hg', 7, 8, '2023-03-24'),
(5588, 323, 2, 'pen', 500, 50, '2023-05-02'),
(0, 323, 5555, 'pen', 10000, 10, '2023-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `allocate`
--

CREATE TABLE `allocate` (
  `Sr_No` int(11) NOT NULL,
  `Product_Id` int(20) NOT NULL,
  `Product_Name` varchar(20) NOT NULL,
  `Borrower_Name` varchar(20) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Date` date NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocate`
--

INSERT INTO `allocate` (`Sr_No`, `Product_Id`, `Product_Name`, `Borrower_Name`, `Quantity`, `Date`, `Description`) VALUES
(3, 1, 'yl', 'jhi', 7, '2023-03-06', 'uu'),
(4, 2, 'pen', 'bansal', 2, '2023-03-06', 'vivek legya'),
(5, 5555, 'files ', 'gupta ji', 10, '2023-03-06', 'UTDC director'),
(6, 555566, 'files and cver', 'gupta ji', 10, '2023-03-06', 'director'),
(7, 1, 'y', 'varun', 5, '2023-03-18', 'hghgh');

-- --------------------------------------------------------

--
-- Table structure for table `allocate1`
--

CREATE TABLE `allocate1` (
  `Sr_No` int(50) NOT NULL,
  `Product_Id` int(20) NOT NULL,
  `Product_Name` varchar(20) NOT NULL,
  `Borrower_Name` varchar(20) NOT NULL,
  `Quantity` int(50) NOT NULL,
  `Date` date NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocate1`
--

INSERT INTO `allocate1` (`Sr_No`, `Product_Id`, `Product_Name`, `Borrower_Name`, `Quantity`, `Date`, `Description`) VALUES
(0, 4441, 'fans', 'anuj', 60, '2023-03-08', 'externel use'),
(0, 6969, 'files and cver', 'bansal', 60, '2023-03-08', 'director'),
(0, 255, 'yh', 'gupta ji', 7, '2023-03-08', 'UTDC director');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `username`, `password`) VALUES
(9, 'yash', '123'),
(10, 'jain', '345'),
(11, 'yash', '123'),
(12, 'don', '0'),
(13, 'don', '0'),
(14, 'don', 'sahab');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `SR.No` int(11) NOT NULL,
  `Product_Id` int(30) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Available_Stock` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`SR.No`, `Product_Id`, `Product_Name`, `Available_Stock`) VALUES
(9, 6969, 'laptop', 5066);

-- --------------------------------------------------------

--
-- Table structure for table `stock1`
--

CREATE TABLE `stock1` (
  `Sr_No` int(11) NOT NULL,
  `Product_Id` int(30) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Available_Stock` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock1`
--

INSERT INTO `stock1` (`Sr_No`, `Product_Id`, `Product_Name`, `Available_Stock`) VALUES
(13, 5555, 'files and cver', 600),
(14, 6969, 'yh', 25);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `mobile`) VALUES
('yash', 'email@gmail.com', 9794749),
('jain', 'jk@gmail.com', 849759),
('', 'yash', 123),
('jk', 'jk@gmail.com', 849759);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocate`
--
ALTER TABLE `allocate`
  ADD PRIMARY KEY (`Sr_No`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`SR.No`);

--
-- Indexes for table `stock1`
--
ALTER TABLE `stock1`
  ADD PRIMARY KEY (`Sr_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allocate`
--
ALTER TABLE `allocate`
  MODIFY `Sr_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `SR.No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stock1`
--
ALTER TABLE `stock1`
  MODIFY `Sr_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
