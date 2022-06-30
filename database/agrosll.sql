-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 12:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrosll`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(225) DEFAULT NULL,
  `business_name` varchar(225) DEFAULT NULL,
  `customer_image` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `business_name`, `customer_image`) VALUES
(4, 'gfgiyuity', 'yyuouioyuiy', ''),
(8, 'joe ', 'cheireoafsif', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` text NOT NULL,
  `category_price` float NOT NULL,
  `category_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`category_id`, `category_name`, `category_desc`, `category_price`, `category_image`) VALUES
(1, 'Coffee', 'Cillum id pariatur magna officia mollit. Magna excepteur tempor commodo mollit officia pariatur adipisicing nulla esse aliquip officia velit. Commodo officia dolor ad quis. Sit labore proident duis voluptate ad occaecat est amet cupidatat mollit et sit elit fugiat. Nisi culpa magna labore culpa consectetur pariatur veniam minim enim culpa dolor. Occaecat consectetur duis adipisicing incididunt in amet sunt voluptate et veniam fugiat officia pariatur.', 750, '/codes/crud/pics/coffee.jpg'),
(2, 'Beans', 'Excepteur adipisicing eiusmod adipisicing sint sit exercitation laborum non laborum sint dolor. Elit deserunt in in tempor officia in occaecat cupidatat. Fugiat deserunt quis veniam Lorem quis qui mollit elit labore sit irure non. Voluptate ea laborum tempor quis est.', 150, '/codes/crud/pics/beans.jpg'),
(3, 'Cocoa', 'Excepteur adipisicing eiusmod adipisicing sint sit exercitation laborum non laborum sint dolor. Elit deserunt in in tempor officia in occaecat cupidatat. Fugiat deserunt quis veniam Lorem quis qui mollit elit labore sit irure non. Voluptate ea laborum tempor quis est.', 180, '/codes/crud/pics/cocoa.jfif'),
(4, 'Palm Oil', 'Sint deserunt laborum deserunt deserunt. Est id veniam ea duis enim eiusmod. Proident laboris dolore duis sunt mollit labore nostrud magna aute quis nostrud amet. Dolore minim nisi ullamco mollit aliquip nisi excepteur qui eu commodo sit non non. Dolor qui ex est proident in qui exercitation sit occaecat fugiat sint nulla ullamco eiusmod.', 1, '/codes/crud/pics/palmoil.jfif'),
(5, 'Rice', 'Eu non mollit officia nulla pariatur nostrud ullamco sit excepteur nulla ad irure ex. Non esse cupidatat officia adipisicing magna non pariatur. Mollit Lorem eiusmod aute laboris. Nulla laborum ad ullamco incididunt irure eu laborum deserunt. Ad laboris in qui in ea velit aute anim consectetur ad dolore.', 500, '/codes/crud/pics/rice.jfif'),
(6, 'Fertilizer', 'Irure aliquip magna occaecat labore irure voluptate. Eiusmod velit magna pariatur consequat Lorem consectetur cillum ullamco ut officia eiusmod incididunt ullamco. Ipsum deserunt enim ad officia duis voluptate eu. Aliqua qui eu laboris commodo. Velit aliquip enim reprehenderit voluptate. Ad in eu ut aute tempor. Proident aliquip excepteur aute ipsum adipisicing.', 970, '/codes/crud/pics/fertilizer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `ID` int(11) DEFAULT NULL,
  `NAME` varchar(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
