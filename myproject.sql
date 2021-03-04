-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 04:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `NOTIFICATIONId` int(11) NOT NULL,
  `TENANT_ID` varchar(255) NOT NULL,
  `text1` varchar(500) DEFAULT NULL,
  `OWNERiD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`NOTIFICATIONId`, `TENANT_ID`, `text1`, `OWNERiD`) VALUES
(1, 'xxxx', 'ddddd', 'ccc'),
(2, 'xxx', 'hello world', '123123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `EmailID` varchar(255) NOT NULL,
  `BOD` date DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `National_id` varchar(255) DEFAULT NULL,
  `PASS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`FirstName`, `LastName`, `EmailID`, `BOD`, `Gender`, `National_id`, `PASS`) VALUES
('jj', 'kk', '123123@gmail.com', '2021-01-06', 'male ', '12345667', '123'),
('jj', 'kk', '12312355@gmail.com', '2021-01-03', 'male ', '12345667', '123'),
('Lamia', 'Akter', 'lamiashahinur98@gmail.com', '1998-08-02', 'Female ', '54654687632', 'Lamia7676');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PAYMENT_ID` varchar(255) NOT NULL,
  `PAYMENT_MONTH` varchar(255) DEFAULT NULL,
  `Bill` double DEFAULT NULL,
  `TEnant_ID` varchar(255) DEFAULT NULL,
  `Owner_ID` varchar(255) DEFAULT NULL,
  `PAYMENT_STATUS` varchar(255) DEFAULT NULL,
  `PAYMENT_Method` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `EmailID` varchar(255) NOT NULL,
  `BOD` date DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `National_id` varchar(255) DEFAULT NULL,
  `PASS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`FirstName`, `LastName`, `EmailID`, `BOD`, `Gender`, `National_id`, `PASS`) VALUES
('', '', '', '0000-00-00', ' ', '', ''),
('jj', 'kk', '123123@gmail.com', '2021-01-18', 'male ', '', '123'),
('jj', 'kk', '123123x@gmail.com', '2009-02-10', 'male ', '12345667', '123'),
('jj', 'kk', '123123dd@gmail.com', '2021-01-03', 'male ', '12345667', '123'),
('jj', 'kk', '123123pp@gmail.com', '2021-01-04', 'male ', '12345667', '123'),
('jj', 'kks', '123123rrr@gmail.com', '2021-01-05', 'Female ', '12345667', '123');

-- --------------------------------------------------------

--
-- Table structure for table `rent_post`
--

CREATE TABLE `rent_post` (
  `rentID` int(11) NOT NULL,
  `EmailID` varchar(255) NOT NULL,
  `Rent_Location` varchar(255) DEFAULT NULL,
  `Rent_Addresss` varchar(255) DEFAULT NULL,
  `Rent_Falt_type` varchar(255) DEFAULT NULL,
  `Rent_price` double DEFAULT NULL,
  `Rent_detials` varchar(500) DEFAULT NULL,
  `Rent_contact` varchar(255) DEFAULT NULL,
  `Owner_Email` varchar(255) DEFAULT NULL,
  `Tenant_Email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent_post`
--

INSERT INTO `rent_post` (`rentID`, `EmailID`, `Rent_Location`, `Rent_Addresss`, `Rent_Falt_type`, `Rent_price`, `Rent_detials`, `Rent_contact`, `Owner_Email`, `Tenant_Email`) VALUES
(2, '123@123', 'ee@gmail.com', 'dhaka,bangladesh', 'big', 45.6, 'xxx', '01882835167', 'sss', 'qww'),
(3, '123@123', 'ee@gmail.com', 'dhaka,bangladesh', 'big', 45.6, 'xxx', '01882835167', 'sss', 'qww'),
(4, 'fdgdf@gf.ff', 'Uttara', '23 no House C block 21 no road', 'BIg', 321, 'green home', '3554346', '123123@gmail.com', 'NULL'),
(5, 'fdgdf@gf.ff', 'Uttara', '23 no House C block 21 no road', 'BIg', 566, 'green home', '355t346', '123123@gmail.com', 'NULL'),
(6, 'fdgdf@gf.ff', 'Uttara', '23 no House C block 21 no road', 'BIg', 45, '23434', '3554346', '123123@gmail.com', 'NULL'),
(7, 'fdgdf@gf.ff', 'Uttara', '23 no House C block 21 no road', 'BIg', 400, 'green home', '3554346', '123123@gmail.com', 'NULL'),
(8, 'fdgdf@gf.ff', 'Uttara', '23 no House C block 21 no road', 'BIg', 3400, '23434', '355t346', '123123@gmail.com', 'NULL'),
(9, 'j1234@gmail.com', 'Uttara', '23 no House C block 21 no road', 'BIg', 34000, 'green home', '3554346', '123123@gmail.com', 'NULL'),
(10, 'abc@gmail.com', 'Banani', 'Plot-1,Road-1, Block-A, Banani, Dhaka', 'Big', 20000, 'nothing', '017456358495', 'lamiashahinur98@gmail.com', 'NULL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`NOTIFICATIONId`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PAYMENT_ID`);

--
-- Indexes for table `rent_post`
--
ALTER TABLE `rent_post`
  ADD PRIMARY KEY (`rentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `NOTIFICATIONId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rent_post`
--
ALTER TABLE `rent_post`
  MODIFY `rentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
