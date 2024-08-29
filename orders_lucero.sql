-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 02:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orders_lucero`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_Id` int(200) NOT NULL,
  `Date of Order` timestamp NOT NULL DEFAULT current_timestamp(),
  `Name` text NOT NULL,
  `ContactNum` tinytext NOT NULL,
  `Address` text NOT NULL,
  `Shirt Size` varchar(50) NOT NULL,
  `Bra Size` varchar(100) NOT NULL,
  `Underwear Size` varchar(100) NOT NULL,
  `Shoe Size` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_Id`, `Date of Order`, `Name`, `ContactNum`, `Address`, `Shirt Size`, `Bra Size`, `Underwear Size`, `Shoe Size`) VALUES
(1, '2022-01-14 12:59:25', 'Joe Pedro Bantuas Manaloto', '6326278464', ' 117 D.M. Cruz Street, Taguig City', 'L', 'N/A', 'L', 42),
(2, '2022-01-14 13:07:14', 'Keven Liam Catacutan Borres', '7537937', 'G/F Gilmore Heights Building, #18 Granada Street corner Castillas Streets, Quezon City Quezon ', 'XL', 'N/A', 'XL', 40),
(3, '2022-01-14 13:09:00', 'Samantha Dorinda Makabaligoten Zoleta', '025314123', '#88 GNT Bldg.,National Rd.Putatan, 1780, Muntinlupa City', 'XS', 'S', 'XS', 39),
(4, '2022-01-14 13:11:01', 'Colby Quezada', '639289445812', '183 Judge Juan Luna St. 1106. QC', 'M', 'N/A', 'L', 42),
(5, '2022-01-14 13:21:38', 'Madrona Madyson Goking Lindo', '024156510', 'L/G Unit 3 Seneca Plaza, 1152 E. Rodriguez Avenue, QC', 'M', 'N/A', 'M', 40);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `Order_Id` int(200) NOT NULL,
  `Item_Name` text NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES
(1, 'Poseidon Slim Tee', 712, 1),
(1, 'Phoebe Two-Blocks Tee', 479, 1),
(1, 'Perseus \'97 Polo', 599, 1),
(1, 'Ares Sneakers', 399, 2),
(2, 'Hector Polo', 399, 1),
(2, 'Poseidon Slim Tee', 712, 1),
(3, 'Phoebe Two-Blocks Tee', 479, 1),
(4, 'Adonis Brief Set', 320, 1),
(4, 'Anchises Brief Set', 350, 1),
(5, 'Athena Sandals', 275, 1),
(5, 'Hermes\' Runners', 712, 1),
(5, 'Ares Sneakers', 399, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
