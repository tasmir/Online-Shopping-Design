-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 07:26 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `user_id`, `cart_amount`) VALUES
(1, 4, 11, 1),
(2, 7, 11, 1),
(3, 9, 11, 1),
(4, 10, 11, 1),
(5, 11, 11, 1),
(6, 12, 11, 1),
(7, 13, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `home_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `display_mode` varchar(11) NOT NULL,
  `podition` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`home_id`, `product_id`, `display_mode`, `podition`) VALUES
(1, 4, 'yes', 'topsell'),
(2, 5, 'yes', 'topsell'),
(3, 6, 'yes', 'topsell'),
(4, 7, 'yes', 'topsell'),
(5, 8, 'yes', 'topsell'),
(6, 9, 'no', 'topsell'),
(7, 12, 'yes', 'gents'),
(8, 13, 'yes', 'gents'),
(9, 14, 'yes', 'gents'),
(10, 15, 'yes', 'gents'),
(11, 16, 'yes', 'gents'),
(12, 17, 'yes', 'gents');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_type` varchar(7) NOT NULL,
  `product_category` varchar(20) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_type`, `product_category`, `product_name`, `product_url`) VALUES
(4, 'M', 'T-Shirt', 'DREAMER T-SHIRT', 'Dreamer T-Shirt.jpg'),
(5, 'M', 'T-Shirt', 'ARC T-SHIRT', 'ARC T-Shirt.jpg'),
(6, 'M', 'T-Shirt', 'ARC T-SHIRT', 'ARC T-Shirt (2).jpg'),
(7, 'M', 'T-Shirt', 'PLAIN BLUE T-SHIRT', 'Plain Blue T-Shirt.jpg'),
(8, 'M', 'T-Shirt', 'GRAY FRONT T-SHIRT', 'Gray Front T-Shirt.png'),
(9, 'F', 'T-Shirt', '2012 BLACK T-SHIRTS', '2012 black t-shirts-f.png'),
(10, 'M', 'T-Shirt', '2012 BLACK T-SHIRTS', '2012 black t-shirts-m.png'),
(11, 'M', 'T-Shirt', 'ROYAL ROBBINS BLACK T-SHIRT', 'Royal Robbins Black T-Shirt.jpg'),
(12, 'M', 'T-Shirt', 'PLAIN BLACK T-SHIRT', 'Plain Black T-Shirt.jpg'),
(13, 'M', 'T-Shirt', 'WHITE T-SHIRT', 'White T-Shirt (2).jpg'),
(14, 'M', 'T-Shirt', 'WHITE T-SHIRT', 'White T-Shirt (3).jpg'),
(15, 'M', 'T-Shirt', 'WHITE T-SHIRT', 'White T-Shirt.jpg'),
(16, 'M', 'T-Shirt', 'PLAIN BLACK POLO T-SHIRT', 'Plain Black Polo T-Shirt.jpg'),
(17, 'M', 'T-Shirt', 'STAR BLACK T-SHIRT', 'Star Black T-Shirt.jpg'),
(18, 'M', 'T-Shirt', 'THE BEATLES BLACK T-SHIRT', 'The Beatles Black T-Shirt.png'),
(19, 'M', 'T-Shirt', 'TMROWDOWN BLACK T-SHIRT', 'Tmrowdown Black T-Shirt.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`home_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `homepage`
--
ALTER TABLE `homepage`
  ADD CONSTRAINT `homepage_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
