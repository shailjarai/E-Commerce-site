-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 31, 2023 at 06:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `major`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `rollnum` int(11) NOT NULL,
  `pro_name` varchar(30) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `discount` varchar(20) DEFAULT NULL,
  `finalprice` varchar(30) DEFAULT NULL,
  `pro_photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`rollnum`, `pro_name`, `price`, `discount`, `finalprice`, `pro_photo`) VALUES
(1, 'CERAMIC COFFEE MUG', '199', '', '', './upload_data/Screenshot 2023-07-31 at 2.33.39 PM.png'),
(2, 'Honey Embossed Coffee Mug', '659', '', '', './upload_data/Screenshot 2023-07-31 at 2.36.23 PM.png'),
(3, 'Classic Quotation Coffee Mug', '329', '', '', './upload_data/Screenshot 2023-07-31 at 2.38.29 PM.png'),
(4, 'Coffee Mug, Ballade a Paris', '179', '', '', './upload_data/Screenshot 2023-07-31 at 2.41.17 PM.png'),
(5, 'Stainless Steel Mugs', '449', '', '', './upload_data/Screenshot 2023-07-31 at 2.45.30 PM.png');

-- --------------------------------------------------------

--
-- Table structure for table `cart2`
--

CREATE TABLE `cart2` (
  `rollnum` int(11) NOT NULL,
  `pro_name` varchar(100) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `pro_photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart2`
--

INSERT INTO `cart2` (`rollnum`, `pro_name`, `price`, `pro_photo`) VALUES
(1, 'Tea & Sugar Jar (Each 900 Ml)', '1649', './upload_data/Screenshot 2023-07-31 at 3.14.29 PM.png');

-- --------------------------------------------------------

--
-- Table structure for table `cart3`
--

CREATE TABLE `cart3` (
  `rollnum` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `pro_photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `uname` varchar(30) DEFAULT NULL,
  `uemail` varchar(40) DEFAULT NULL,
  `umobile` varchar(20) DEFAULT NULL,
  `upass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`uname`, `uemail`, `umobile`, `upass`) VALUES
('Raghav', 'raghavg8969@gmail.com', '8269159269', ''),
('Shruti', 'demo@gmail.com', '6264296940', 'sakshi@123'),
('Shailja', 'demo@gmail.com', '1234567890', 'shailja@123'),
('Samiksha', 'demo@gmail.com', '1234567890', 'samiksha@123'),
('shivam', 'shivam@123', '1234567890', 'shivam@123'),
('pranjal', 'demo@gmail.com', '1234567890', 'pranjal@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`rollnum`);

--
-- Indexes for table `cart2`
--
ALTER TABLE `cart2`
  ADD PRIMARY KEY (`rollnum`);

--
-- Indexes for table `cart3`
--
ALTER TABLE `cart3`
  ADD PRIMARY KEY (`rollnum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `rollnum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart2`
--
ALTER TABLE `cart2`
  MODIFY `rollnum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart3`
--
ALTER TABLE `cart3`
  MODIFY `rollnum` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
