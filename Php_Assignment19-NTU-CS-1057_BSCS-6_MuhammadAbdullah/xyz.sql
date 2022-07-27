-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 12:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xyz`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(3) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `pprice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pprice`) VALUES
(1, 'Ubaid', 300),
(4, 'Namir', 300),
(8, 'namir2a', 13),
(9, 'namir443a', 13),
(10, 'namir4431a2', 2),
(12, 'namir2as', 1213),
(13, 'namir221', 333),
(14, 'namir22121', 13),
(15, 'namir443123', 12333),
(16, 'namir44332', 221),
(17, 'uabdi', 13),
(18, 'Ubaisd34', 12331),
(19, 'namir4431as', 1),
(20, 'namir4431aa', 23),
(23, 'namir233', 123312),
(24, 'namir233', 123312),
(25, 'namir233', 123312),
(26, 'namir233', 123312),
(27, 'namir233', 123312),
(28, 'namir5', 323),
(29, 'namir512', 1233),
(30, 'namir443213', 23),
(31, 'namir2231', 3332),
(32, 'namir2321', 213),
(33, 'namir2321', 213),
(34, 'namir2321', 213),
(35, 'namir2321', 213),
(36, 'namir443', 22),
(37, '', 0),
(38, 'namir5sdad', 213213);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
