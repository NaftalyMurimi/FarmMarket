-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 06:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(233) NOT NULL,
  `name` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'Pendo', 'Pendo21');

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE TABLE `adverts` (
  `id` int(33) NOT NULL,
  `company` text NOT NULL,
  `advertImage` varchar(33) NOT NULL,
  `advert` text NOT NULL,
  `contact` int(12) NOT NULL,
  `Description` varchar(233) NOT NULL,
  `Price` int(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adverts`
--

INSERT INTO `adverts` (`id`, `company`, `advertImage`, `advert`, `contact`, `Description`, `Price`) VALUES
(1, 'QWE company', '../adverts/as.jpg', 'ASD Potatoes', 0, 'egal documents providing directions on how to mix, apply, store, and dispose of a pesticide product.', 1200),
(2, 'QWE company', '../adverts/as.jpg', 'ASD Potatoes', 0, 'egal documents providing directions on how to mix, apply, store, and dispose of a pesticide product.', 2235),
(3, 'QWE company', '../adverts/as.jpg', 'ASD Potatoes', 0, 'egal documents providing directions on how to mix, apply, store, and dispose of a pesticide product.', 2235),
(4, 'QWE company', '../adverts/as.jpg', 'ASD Potatoes', 0, 'egal documents providing directions on how to mix, apply, store, and dispose of a pesticide product.', 1455),
(5, 'QWE company', '../adverts/as.jpg', 'ASD Potatoes', 2147483647, 'egal documents providing directions on how to mix, apply, store, and dispose of a pesticide product.', 1455);

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(33) NOT NULL,
  `buyerid` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `password` varchar(12) NOT NULL,
  `Phone_no` int(12) NOT NULL,
  `Gender` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `buyerid`, `user_name`, `password`, `Phone_no`, `Gender`, `location`) VALUES
(1, 0, 'mercy', 'mercy99', 708783632, 'female', 'nyeri');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(33) NOT NULL,
  `sellerid` int(25) NOT NULL,
  `product` text NOT NULL,
  `quantity` varchar(12) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(233) NOT NULL,
  `location` varchar(23) NOT NULL,
  `Price` int(33) NOT NULL,
  `contact` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `sellerid`, `product`, `quantity`, `date`, `image`, `location`, `Price`, `contact`) VALUES
(8, 1, 'onion', '33', '2022-06-03', '../upload/Screenshot (1).png', 'nakx', 0, 0),
(9, 1, 'paw paw', '112', '2022-08-11', '../upload/ppp.PNG', 'eldoret', 0, 0),
(10, 1, 'paw paw', '112', '2022-08-11', '../upload/ppp.PNG', 'eldoret', 0, 0),
(11, 1, 'potatoes', '66', '2022-06-04', '../upload/disc.PNG', 'Nakuru', 1200, 2147483647),
(12, 1, 'paw paw', '112', '2022-06-05', '../upload/disc.PNG', 'nyeri', 5500, 2147483647),
(13, 1, 'maize', '33', '2022-05-21', '../upload/disc.PNG', 'CHEHE', 1455, 796641860),
(14, 4, 'Beans', '112', '2022-07-16', '../upload/disc.PNG', 'Nakuru', 2235, 712598550),
(16, 6, 'maize', '33', '2022-05-28', '../upload/IMG_20220503_201154_358.jpg', 'nyeri', 5500, 790144912);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(33) NOT NULL,
  `user_name` text NOT NULL,
  `nationalid` int(12) NOT NULL,
  `Phone_no` int(12) NOT NULL,
  `Gender` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `user_name`, `nationalid`, `Phone_no`, `Gender`, `location`) VALUES
(1, 'Naftali', 37376655, 0, 'male', 'nyeri_ karatina'),
(2, 'naftali', 37376655, 708783632, 'male', 'karatina'),
(3, 'jonah', 37379443, 0, 'male', 'CHEHE'),
(4, 'Jonah', 22334455, 0, 'male', 'Nakuru'),
(5, 'Ruth shee', -2, 0, 'female', 'kisii'),
(6, 'Winrose', 5544, 0, 'female', 'nyeri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
