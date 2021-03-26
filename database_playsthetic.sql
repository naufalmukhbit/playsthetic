-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 11:26 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_playsthetic`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_data`
--

CREATE TABLE `address_data` (
  `address_id` int(7) NOT NULL,
  `userid` int(5) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `postal_code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_data`
--

INSERT INTO `address_data` (`address_id`, `userid`, `address`, `city`, `province`, `postal_code`) VALUES
(1, 19, 'Smart City', 'Bandung', 'Jawa Barat', 40288);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `userid` int(5) NOT NULL,
  `prod_id` int(10) NOT NULL,
  `amount` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `id_data`
--

CREATE TABLE `id_data` (
  `userid` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `id_data`
--

INSERT INTO `id_data` (`userid`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@playsthetic.com', 'playforaesthetic'),
(2, 'playsthetic', 'play@playsthetic.com', 'bukanadmin'),
(3, 'naufalmukhbit', 'nmukhbit@gmail.com', '120jets'),
(18, 'mrsana', 'mrsana@gmail.com', 'mrsana'),
(19, 'ucupsatu', 'ucup@gmail.com', 'yusuf');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(10) NOT NULL,
  `prod_name` varchar(25) NOT NULL,
  `price` int(10) NOT NULL,
  `pord_desc` varchar(1000) NOT NULL,
  `userid` int(5) NOT NULL,
  `img_src` varchar(30) NOT NULL,
  `category` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `price`, `pord_desc`, `userid`, `img_src`, `category`) VALUES
(1, 'Regular T-Shirt', 59000, '', 2, 'tees.jpg', 1),
(2, 'Long Sleeve T-Shirt', 69000, '', 2, 'longsleeve.jpg', 1),
(3, 'Polo Ralph Lauren Shirt', 149000, '', 3, 'polo.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `profile_data`
--

CREATE TABLE `profile_data` (
  `userid` int(5) NOT NULL,
  `name` varchar(65) NOT NULL,
  `bdate` date NOT NULL,
  `gender` varchar(9) NOT NULL,
  `phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_data`
--

INSERT INTO `profile_data` (`userid`, `name`, `bdate`, `gender`, `phone`) VALUES
(1, 'Administrator', '1998-08-27', 'Laki-laki', '082114435057'),
(2, 'Playsthetic', '2018-04-30', 'Laki-laki', '-'),
(3, 'Naufal Mukhbit', '1998-08-27', 'Laki-laki', '082114435057'),
(18, 'Magna Rosana', '1985-05-07', 'Perempuan', '0853-8629-379');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_data`
--
ALTER TABLE `address_data`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `id_data`
--
ALTER TABLE `id_data`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `profile_data`
--
ALTER TABLE `profile_data`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_data`
--
ALTER TABLE `address_data`
  MODIFY `address_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `id_data`
--
ALTER TABLE `id_data`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
