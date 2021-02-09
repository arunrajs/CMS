-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 09, 2021 at 09:35 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vectorz_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_master`
--

DROP TABLE IF EXISTS `client_master`;
CREATE TABLE IF NOT EXISTS `client_master` (
  `CustID` int(11) NOT NULL AUTO_INCREMENT,
  `CreateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Customer` varchar(250) NOT NULL,
  `ShortName` varchar(15) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactPerson` varchar(150) NOT NULL,
  `MobileNo` varchar(16) NOT NULL,
  `Website` varchar(100) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`CustID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_master`
--

INSERT INTO `client_master` (`CustID`, `CreateDate`, `Customer`, `ShortName`, `Address`, `ContactPerson`, `MobileNo`, `Website`, `Email`, `Active`) VALUES
(1, '2021-01-28 15:19:21', 'Arun raj', 'Sa', 'Vazhakkoottatthil', 'rrewS', '099473217369', 'erwe', 'arunraj4010@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client_masters`
--

DROP TABLE IF EXISTS `client_masters`;
CREATE TABLE IF NOT EXISTS `client_masters` (
  `client_ID` int(200) NOT NULL AUTO_INCREMENT,
  `company_Name` varchar(250) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(150) NOT NULL,
  `tel` varchar(200) NOT NULL,
  `company_Email` varchar(255) NOT NULL,
  `contact_Person` varchar(200) NOT NULL,
  `contact_Person_Email` varchar(255) NOT NULL,
  `contact_Person_Mobile` varchar(255) NOT NULL,
  `GSTN` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `status` int(200) NOT NULL,
  PRIMARY KEY (`client_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_masters`
--

INSERT INTO `client_masters` (`client_ID`, `company_Name`, `address`, `state`, `tel`, `company_Email`, `contact_Person`, `contact_Person_Email`, `contact_Person_Mobile`, `GSTN`, `created_date`, `status`) VALUES
(4, 'gromug', 'Vazhakkoottatthil', 'Other', '09947321736', 'arunraj4010@gmail.com', 'test', 'arunraj4010@gmail.com', '09947321736', '34234234234', '2021-01-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `colours`
--

DROP TABLE IF EXISTS `colours`;
CREATE TABLE IF NOT EXISTS `colours` (
  `CLCode` int(11) NOT NULL AUTO_INCREMENT,
  `Colour` varchar(50) NOT NULL,
  `CLShort` varchar(10) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`CLCode`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colours`
--

INSERT INTO `colours` (`CLCode`, `Colour`, `CLShort`, `Active`) VALUES
(1, 'red', 'r', 1);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `CID` int(11) NOT NULL AUTO_INCREMENT,
  `Country` varchar(100) NOT NULL,
  `CountryCode` char(5) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`CID`, `Country`, `CountryCode`) VALUES
(1, 'India', '+91'),
(2, 'America', '1');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `DSID` int(11) NOT NULL AUTO_INCREMENT,
  `District` varchar(100) NOT NULL,
  `STID` int(11) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`DSID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`DSID`, `District`, `STID`, `Active`) VALUES
(1, 'Thiruvananthapuram', 1, 1),
(2, 'Kollam', 1, 1),
(3, 'Pathanamthitta', 1, 1),
(4, 'Ernakulam', 1, 1),
(5, 'Idukki', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `EmpID` int(11) NOT NULL AUTO_INCREMENT,
  `EName` varchar(250) NOT NULL,
  `EShortName` varchar(10) NOT NULL,
  `EDesigID` int(11) NOT NULL,
  `EDOB` date NOT NULL,
  `EAddress` varchar(255) NOT NULL,
  `EMobile` varchar(25) NOT NULL,
  `EEmail` varchar(100) NOT NULL,
  `EDOJ` date NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`EmpID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EmpID`, `EName`, `EShortName`, `EDesigID`, `EDOB`, `EAddress`, `EMobile`, `EEmail`, `EDOJ`, `UserName`, `Password`, `Active`) VALUES
(1, 'Arunraj', 'Sunu', 45, '2020-11-20', 'Vazhakkoottatthil\nKurungattumuk, Adinad P.O', '09947321736', 'arunraj4010@gmail.com', '2020-11-28', 'arunraj4010', '24d2226e605ffca86e5c6b493ba54975', 1);

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

DROP TABLE IF EXISTS `machines`;
CREATE TABLE IF NOT EXISTS `machines` (
  `MID` int(11) NOT NULL AUTO_INCREMENT,
  `Machine` varchar(250) NOT NULL,
  `MShortName` varchar(10) NOT NULL,
  `MPurchDate` date NOT NULL,
  `MNextServiceDate` date NOT NULL,
  `MachineDetals` text NOT NULL,
  `CapacityPerShift` int(11) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`MID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `machines`
--

INSERT INTO `machines` (`MID`, `Machine`, `MShortName`, `MPurchDate`, `MNextServiceDate`, `MachineDetals`, `CapacityPerShift`, `Active`) VALUES
(1, 'Machine 1', 'M1', '2020-11-06', '2020-11-13', 'Machine Detals', 25, 1),
(2, 'Machines 2', 'M2', '2020-12-18', '2020-12-20', 'test', 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `matcategories`
--

DROP TABLE IF EXISTS `matcategories`;
CREATE TABLE IF NOT EXISTS `matcategories` (
  `MatCatID` int(11) NOT NULL AUTO_INCREMENT,
  `MatCategory` varchar(100) NOT NULL,
  `MatCatShort` varchar(10) NOT NULL,
  `MinStockLevel` int(11) NOT NULL,
  `MaxStockLevel` int(11) NOT NULL,
  `StockUnit` char(4) NOT NULL,
  `MatType` varchar(25) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`MatCatID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matcategories`
--

INSERT INTO `matcategories` (`MatCatID`, `MatCategory`, `MatCatShort`, `MinStockLevel`, `MaxStockLevel`, `StockUnit`, `MatType`, `Active`) VALUES
(1, 'Category 1', 'cat1', 450, 500, 'CM', 'Test', 1),
(2, 'e', 'r', 1, 2, '3', 'fd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `materialpurchase`
--

DROP TABLE IF EXISTS `materialpurchase`;
CREATE TABLE IF NOT EXISTS `materialpurchase` (
  `MPID` int(11) NOT NULL AUTO_INCREMENT,
  `SPID` int(11) NOT NULL,
  `PDate` date NOT NULL,
  `MINo` int(11) NOT NULL,
  `PQty` float(16,3) NOT NULL,
  `PUnit` char(4) NOT NULL,
  PRIMARY KEY (`MPID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materialpurchase`
--

INSERT INTO `materialpurchase` (`MPID`, `SPID`, `PDate`, `MINo`, `PQty`, `PUnit`) VALUES
(1, 1, '2020-12-24', 1, 4.000, '3'),
(2, 1, '2020-12-09', 1, 52.000, '51.0');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

DROP TABLE IF EXISTS `materials`;
CREATE TABLE IF NOT EXISTS `materials` (
  `MINo` int(11) NOT NULL AUTO_INCREMENT,
  `MaterialItem` varchar(250) NOT NULL,
  `MatShortName` varchar(10) NOT NULL,
  `MatCatID` int(11) NOT NULL,
  `Unit` char(4) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`MINo`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`MINo`, `MaterialItem`, `MatShortName`, `MatCatID`, `Unit`, `Active`) VALUES
(1, 'Material 1', 'M1', 12, 'CFG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderfrequeny`
--

DROP TABLE IF EXISTS `orderfrequeny`;
CREATE TABLE IF NOT EXISTS `orderfrequeny` (
  `OFID` int(11) NOT NULL AUTO_INCREMENT,
  `OrderFrequeny` varchar(100) NOT NULL,
  `Number_of_days` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  PRIMARY KEY (`OFID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderfrequeny`
--

INSERT INTO `orderfrequeny` (`OFID`, `OrderFrequeny`, `Number_of_days`, `Status`) VALUES
(1, 'WK', 7, 1),
(2, 'MN', 30, 1),
(3, 'QR', 180, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `OrdID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Date` datetime NOT NULL,
  `CustID` int(11) NOT NULL,
  `ProdID` int(11) NOT NULL,
  `TypeCode` char(4) NOT NULL,
  `SID` int(11) NOT NULL,
  `Number` varchar(200) NOT NULL,
  `Weight` varchar(100) NOT NULL,
  `PerRate` float(6,2) NOT NULL,
  `PerUnit` char(4) NOT NULL,
  `IncludeTax` tinyint(1) NOT NULL,
  `Description` text NOT NULL,
  `TotalAmount` float(16,2) NOT NULL,
  `AdvanceAmount` float(16,2) NOT NULL,
  `PendingAmount` float(16,2) NOT NULL,
  `CommittedDate` date NOT NULL,
  `CurrOrderStatus` int(11) NOT NULL,
  `PaymentStatus` char(1) NOT NULL,
  `TotalMachineUsage` float(16,3) NOT NULL,
  `TotalProduct` float(16,3) NOT NULL,
  `TotalWastage` float(16,3) NOT NULL,
  `WastagePercentage` float(4,2) NOT NULL,
  `OrderClosed` tinyint(1) NOT NULL,
  PRIMARY KEY (`OrdID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

DROP TABLE IF EXISTS `orderstatus`;
CREATE TABLE IF NOT EXISTS `orderstatus` (
  `OSID` int(11) NOT NULL AUTO_INCREMENT,
  `OSShortName` varchar(10) NOT NULL,
  `OSName` varchar(100) NOT NULL,
  `OSValue` int(11) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`OSID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`OSID`, `OSShortName`, `OSName`, `OSValue`, `Active`) VALUES
(1, 'Con', 'Confirm', 3, 1),
(2, 'Roll', 'Rolling', 7, 1),
(3, 'pac', 'Packing', 3, 1),
(4, 'print', 'Printing', 4, 1),
(5, 'Box', 'Boxing', 5, 1),
(6, 'cut', 'Cutting', 6, 1),
(7, 'exc', 'Extrudings', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_status_grp`
--

DROP TABLE IF EXISTS `order_status_grp`;
CREATE TABLE IF NOT EXISTS `order_status_grp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_status_grp`
--

INSERT INTO `order_status_grp` (`id`, `order_id`, `status_id`) VALUES
(1, 15, 3),
(2, 15, 4),
(3, 15, 6),
(4, 16, 1),
(5, 16, 2),
(6, 16, 3),
(7, 16, 4),
(8, 16, 5),
(9, 16, 6),
(10, 16, 7),
(11, 17, 3),
(12, 17, 6),
(13, 17, 7),
(14, 18, 3),
(15, 18, 6),
(16, 18, 7),
(17, 2, 3),
(18, 2, 4),
(19, 2, 5),
(71, 1, 7),
(70, 9, 6),
(69, 9, 5),
(26, 5, 4),
(27, 5, 5),
(28, 5, 6),
(29, 6, 2),
(30, 6, 3),
(31, 6, 7),
(32, 7, 4),
(33, 7, 5),
(34, 7, 6),
(35, 8, 2),
(36, 8, 4),
(68, 9, 4),
(67, 9, 7),
(66, 4, 4),
(65, 4, 1),
(72, 1, 1),
(73, 2, 4),
(74, 2, 5),
(75, 2, 2),
(87, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ord_machinejobs`
--

DROP TABLE IF EXISTS `ord_machinejobs`;
CREATE TABLE IF NOT EXISTS `ord_machinejobs` (
  `JobCardID` bigint(20) NOT NULL AUTO_INCREMENT,
  `MID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `OrdID` bigint(20) NOT NULL,
  `SlNo` tinyint(4) NOT NULL,
  `SID` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `CLCodeA` int(11) NOT NULL,
  `CLCodeB` int(11) NOT NULL,
  `TPStatus` varchar(15) NOT NULL,
  `Remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`JobCardID`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ord_machinejobs`
--

INSERT INTO `ord_machinejobs` (`JobCardID`, `MID`, `Date`, `OrdID`, `SlNo`, `SID`, `Qty`, `CLCodeA`, `CLCodeB`, `TPStatus`, `Remarks`) VALUES
(1, 1, '2020-12-12', 1, 1, 1, 45, 1, 2, '2', 'test'),
(2, 1, '2020-12-25', 1, 1, 1, 45, 1, 2, '1', 'fgdf'),
(3, 1, '2020-12-03', 1, 1, 1, 45, 1, 2, '1', 'fg'),
(4, 2, '2020-12-26', 1, 1, 1, 45, 1, 2, '2', 'sdasd'),
(5, 1, '2020-12-03', 1, 1, 1, 45, 1, 2, '2', 'resd'),
(6, 1, '2020-12-03', 2, 2, 2, 45, 1, 2, '1', '223'),
(7, 1, '2020-12-11', 1, 1, 1, 45, 1, 2, '2', 'sdas'),
(8, 1, '2020-12-11', 2, 2, 2, 45, 1, 2, '1', 'vvcxc'),
(9, 2, '2020-12-24', 1, 1, 1, 45, 1, 2, '2', 'dfsd'),
(10, 2, '2020-12-24', 2, 2, 2, 45, 1, 2, '2', 'asdas'),
(11, 2, '2020-12-09', 1, 1, 1, 45, 1, 2, '1', 'fgdf'),
(12, 2, '2020-12-09', 2, 2, 2, 45, 1, 2, '1', 'gdfg'),
(13, 1, '2020-12-17', 1, 1, 1, 45, 1, 2, '2', 'dfsd'),
(14, 1, '2020-12-17', 2, 2, 2, 45, 1, 2, '1', 'gdfd'),
(15, 1, '2020-12-17', 1, 3, 1, 45, 1, 2, '2', 'gdfgdf'),
(16, 1, '2020-12-04', 1, 1, 1, 45, 1, 2, '1', 'ASa'),
(17, 2, '2020-12-25', 1, 1, 1, 45, 1, 2, '2', 'sdsd');

-- --------------------------------------------------------

--
-- Table structure for table `ord_status`
--

DROP TABLE IF EXISTS `ord_status`;
CREATE TABLE IF NOT EXISTS `ord_status` (
  `OrdID` bigint(20) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `OSID` int(11) NOT NULL,
  `EmpID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `package_master`
--

DROP TABLE IF EXISTS `package_master`;
CREATE TABLE IF NOT EXISTS `package_master` (
  `package_id` int(200) NOT NULL AUTO_INCREMENT,
  `Package_Name` varchar(255) NOT NULL,
  `Disk_Space` varchar(150) NOT NULL,
  `Email_IDs` varchar(255) NOT NULL,
  `Bandwidth` varchar(200) NOT NULL,
  `Database_status` varchar(200) NOT NULL,
  `Cost` varchar(250) NOT NULL,
  `Status` int(1) NOT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_master`
--

INSERT INTO `package_master` (`package_id`, `Package_Name`, `Disk_Space`, `Email_IDs`, `Bandwidth`, `Database_status`, `Cost`, `Status`) VALUES
(1, 'Package 1', '1GB', '5', '1GB', '1', 'undefined', 1),
(2, 'Package 2', '250MB', '5', '2GB', '1', '250', 1),
(3, 'Spl pack', '5GB', '5', '2GB', '1', '25', 1),
(4, 'Pa2', '2', '2', '5GB', '1', '25', 1),
(5, 'sd', '56', '6', '65', '1', '4545', 1),
(6, 'df', '23', '45', '54', '1', '323', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ProdID` int(11) NOT NULL AUTO_INCREMENT,
  `Product` varchar(150) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`ProdID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProdID`, `Product`, `Description`, `Active`) VALUES
(1, 'Multi Color Plastic Bag', 'Multi Color Plastic Bag', 1),
(2, 'HDPE Plastic Bag', 'HDPE Plastic Bag', 1),
(3, 'HM Plastic Bag', 'HM Plastic Bag', 1),
(4, 'Printed Plastic Bag', 'Printed Plastic Bag', 1),
(7, 'D Cut Plastic Bag', 'D Cut Plastic Bag', 1),
(8, 'Biodegradable Plastic Bag', 'Biodegradable Plastic Bag', 1),
(9, 'Polypriplin Polythene Bag', 'Polypriplin Polythene Bag', 1),
(10, 'Food Packaging Bag', 'Food Packaging Bag', 1),
(11, 'Shrinking Film', 'Shrinking Film', 1),
(12, 'Polypropylene Sheet', 'Polypropylene Sheet', 1),
(13, 'Flexographic Printing six colour', 'Flexographic Printing six colour', 1);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

DROP TABLE IF EXISTS `size`;
CREATE TABLE IF NOT EXISTS `size` (
  `SID` int(11) NOT NULL AUTO_INCREMENT,
  `SizeName` varchar(30) NOT NULL,
  `Height` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `Gage` int(11) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`SID`, `SizeName`, `Height`, `Weight`, `Gage`, `unit`, `Active`) VALUES
(1, '50X56X120', 50, 56, 225, 'inch', 1),
(2, '90X15X12', 90, 15, 12, 'centimeter', 1),
(3, '250X10X2', 250, 10, 2565, 'inch', 1);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `STID` int(11) NOT NULL AUTO_INCREMENT,
  `State` varchar(100) NOT NULL,
  `CID` char(2) NOT NULL,
  PRIMARY KEY (`STID`),
  KEY `STID` (`STID`),
  KEY `STID_2` (`STID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`STID`, `State`, `CID`) VALUES
(1, 'Kerala', '1'),
(2, 'California', '2'),
(3, 'Tamilnadu', '1'),
(4, 'Karnataka', '1');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `SPID` int(11) NOT NULL AUTO_INCREMENT,
  `Supplier` varchar(250) NOT NULL,
  `SupShortName` varchar(10) NOT NULL,
  `SupAddress` varchar(255) NOT NULL,
  `SPDistrict` int(11) NOT NULL,
  `SPState` int(11) NOT NULL,
  `SPCountry` int(11) NOT NULL,
  `SPPin` varchar(30) NOT NULL,
  `SPContactNo` varchar(25) NOT NULL,
  `SPEmail` varchar(100) NOT NULL,
  `SPMobile` varchar(30) NOT NULL,
  `SPGST` varchar(20) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`SPID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`SPID`, `Supplier`, `SupShortName`, `SupAddress`, `SPDistrict`, `SPState`, `SPCountry`, `SPPin`, `SPContactNo`, `SPEmail`, `SPMobile`, `SPGST`, `Active`) VALUES
(1, 'Suppliers 1', 'Supp1', 'Vazhakkoottatthil\nKurungattumuk, Adinad P.O', 1, 2, 3, '690525', '2897074', 'Suppliers@gmail.com', '09947321736', '64466336342', 1);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `TypeCode` int(11) NOT NULL AUTO_INCREMENT,
  `TypeName` varchar(50) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`TypeCode`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`TypeCode`, `TypeName`, `Active`) VALUES
(1, 'Plastics', 1),
(2, 'HM', 1),
(3, 'LD', 1),
(4, 'Type 4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
CREATE TABLE IF NOT EXISTS `units` (
  `UnitID` int(11) NOT NULL AUTO_INCREMENT,
  `UnitName` varchar(20) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`UnitID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`UnitID`, `UnitName`, `Active`) VALUES
(2, 'No', 1),
(3, 'Liter', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `profile_img_name` varchar(255) NOT NULL,
  `login_status_as` int(2) NOT NULL,
  `profile_status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `role`, `profile_img_name`, `login_status_as`, `profile_status`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Anupama', 'Plastics ', 'admin', 'null', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
