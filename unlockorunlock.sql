-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 01:23 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unlockorunlock`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Email`, `Password`) VALUES
('admin@admin', '32282f8f21bbdcd5059666c234116dbc');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `CartID` int(11) NOT NULL,
  `UserID` varchar(255) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`CartID`, `UserID`, `ProductID`, `Quantity`, `Description`) VALUES
(58, 'depdep@gmail.com', 15, 2, 'aaa'),
(59, 'depdep@gmail.com', 10, 1, ''),
(63, 'albetz99@gmail.com', 10, 2, 'test1'),
(64, 'albetz99@gmail.com', 16, 1, 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Category` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `Name`, `Category`, `Price`, `Quantity`, `Pic`) VALUES
(10, 'Panci', 1, 30000, 6, 'b2874-panci.png'),
(11, 'Toples', 3, 50000, 6, '11b19-toples.png'),
(12, 'Kulkas', 4, 10000000, 1, '02375-freezer.png'),
(13, 'Kotak Bekal', 5, 75000, 9, '51e2d-lunchbox.png'),
(14, 'Microwave Reheat', 6, 15000, 8, '0a49d-microwavereheat..png'),
(15, 'Botol Minum', 2, 75000, 7, '60fde-botol.png'),
(16, 'Wajan', 1, 60000, 8, '9ffc8-wajan.png');

-- --------------------------------------------------------

--
-- Table structure for table `productsdetail`
--

CREATE TABLE `productsdetail` (
  `Category` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productsdetail`
--

INSERT INTO `productsdetail` (`Category`, `Description`) VALUES
(1, 'Cook Ware'),
(2, 'Drink Collection'),
(3, 'Dry Storage'),
(4, 'Freezer'),
(5, 'Lunch Set'),
(6, 'Microwave Reheat');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `SalesID` int(11) NOT NULL,
  `UserID` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Total` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Address` text NOT NULL,
  `Phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`SalesID`, `UserID`, `FirstName`, `LastName`, `Total`, `Date`, `Address`, `Phone`) VALUES
(17, 'test@test', 'Test', 'Test', 75000, '2019-11-04', 'test', '123'),
(18, 'test@test', 'Test', 'Test', 10000000, '2019-11-04', 'test', '123'),
(19, 'test@test', 'Test', 'Test', 160000, '2019-11-04', 'test', '123'),
(20, 'test@test', 'Test', 'Test', 215000, '2019-11-05', 'testingtestingtestingtesting', '123456789'),
(22, 'abet@wijaya.com', 'Slbert', 'Slbert', 135000, '2019-11-05', 'mjnbvcm,nvcxjm,nvcx,cnmnbvcbnmbvcbnbvcbnbvcxb', '21212424421411'),
(23, 'abet@wijaya.com', 'Slbert', 'Slbert', 30000, '2019-11-05', 'mjnbvcm,nvcxjm,nvcx,cnmnbvcbnmbvcbnbvcbnbvcxb', '21212424421411'),
(24, 'abet@wijaya.com', 'Slbert', 'Slbert', 10000000, '2019-11-05', 'mjnbvcm,nvcxjm,nvcx,cnmnbvcbnmbvcbnbvcbnbvcxb', '21212424421411');

-- --------------------------------------------------------

--
-- Table structure for table `salesdetail`
--

CREATE TABLE `salesdetail` (
  `SalesID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salesdetail`
--

INSERT INTO `salesdetail` (`SalesID`, `ProductID`, `Quantity`, `Description`) VALUES
(17, 15, 1, ''),
(18, 12, 1, ''),
(19, 11, 2, ''),
(19, 16, 1, ''),
(20, 15, 1, ''),
(20, 11, 1, ''),
(20, 10, 1, ''),
(20, 16, 1, ''),
(21, 12, 6, ''),
(22, 10, 2, ''),
(22, 13, 1, ''),
(23, 10, 1, 'jhghjkljhg'),
(24, 12, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` text NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `DateOfBirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Email`, `FirstName`, `LastName`, `Password`, `Address`, `Phone`, `DateOfBirth`) VALUES
(1, 'test@test', 'Test', 'Test', '979379fe1855960f786882107381f725', 'testingtestingtestingtesting', '123456789', '2000-01-01'),
(2, 'albetz99@gmail.com', 'Albert', 'Wijaya', '11281c81c1b44169d8db077ab2e0acaf', 'asd', '123', '2019-11-29'),
(3, 'depdep@gmail.com', 'Depira', 'P', '1e04a50f400ef064e20801ac7c1b4e68', '', '', '0000-00-00'),
(4, 'admin@admin', '', '', '', '', '', '0000-00-00'),
(5, 'abet@wijaya.com', 'Owen', 'Wijaya', '095f63796399161c6680135958847ac3', 'mjnbvcm,nvcxjm,nvcx,cnmnbvcbnmbvcbnbvcbnbvcxb', '21212424421411', '2000-02-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`CartID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `Category` (`Category`);

--
-- Indexes for table `productsdetail`
--
ALTER TABLE `productsdetail`
  ADD PRIMARY KEY (`Category`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`SalesID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `CartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SalesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
