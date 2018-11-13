-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 07:22 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `e-bom`
--

CREATE TABLE `e-bom` (
  `id` int(100) NOT NULL,
  `part_name` varchar(100) NOT NULL,
  `part_type` varchar(100) NOT NULL,
  `Specifications` varchar(40) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `cost` int(100) NOT NULL,
  `Alternative1` varchar(50) NOT NULL,
  `Alternative2` varchar(50) NOT NULL,
  `Alternative3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e-bom`
--

INSERT INTO `e-bom` (`id`, `part_name`, `part_type`, `Specifications`, `Quantity`, `size`, `cost`, `Alternative1`, `Alternative2`, `Alternative3`) VALUES
(4, 'Intel UHD Graphics', 'graphic card', '620 graphics', 1, '4 GB', 7500, '610 graphics', '605 graphics', '600 graphics'),
(5, 'windows 10 home', 'operating system', 'lifetime validity', 1, 'windows 10', 1700, '', '', ''),
(1, 'INTEL core processor', 'processor', '8THGen Intel core i5-825OU processor', 1, '1.6 GHz', 2335, 'Ryzen 1600', 'Ryzen 1500', 'Ryzen 1200'),
(2, 'corsair vengeance LPX 2400 MHz DDR4 RAM', 'RAM', 'DDR4 RAM ', 1, '8GB', 5515, 'DDR4-3733MHZ', 'DDR4-2133MHZ', 'DDR4-1922MHZ'),
(3, 'Anti-Glare IPS display', 'screen', 'FULL HD(1920X1080) DISPLAY', 1, '17.3 inch', 8000, '1280X800', '1440X900', '1680X1050'),
(6, 'Ports', 'slots', '1 USB 2.0, 2 USB 3.0', 2, '', 1290, 'USB B', 'USB C', ''),
(7, 'Hard Disk', 'Storage', 'HDD', 1, '1 TB', 3099, 'WD My Passport Ultra 1TB', 'WD My Passport 1 TB', 'Toshiba Canvio Alumy 1 TB');

-- --------------------------------------------------------

--
-- Table structure for table `ebom`
--

CREATE TABLE `ebom` (
  `id` int(100) NOT NULL,
  `part_name` varchar(100) NOT NULL,
  `part_type` varchar(100) NOT NULL,
  `Specifications` varchar(40) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `values1` varchar(100) NOT NULL,
  `cost` int(100) NOT NULL,
  `Alternative1` varchar(50) NOT NULL,
  `Alternative2` varchar(50) NOT NULL,
  `Alternative3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebom`
--

INSERT INTO `ebom` (`id`, `part_name`, `part_type`, `Specifications`, `Quantity`, `values1`, `cost`, `Alternative1`, `Alternative2`, `Alternative3`) VALUES
(1, 'INTEL core processor', 'processor', 'Ryzen 1700', 1, '1.6 GHz', 2335, 'Ryzen 1600', 'Ryzen 1500', 'Ryzen 1200'),
(2, 'corsair vengeance LPX 2400 MHz DDR4 RAM', 'RAM', 'DDR4-2400MHZ', 1, '8GB', 5515, 'DDR4-3733MHZ', 'DDR4-2133MHZ', 'DDR4-1922MHZ'),
(3, 'Anti-Glare IPS display', 'screen', '1920X1080', 1, '17.3 inch', 8000, '1280X800', '1440X900', '1680X1050'),
(4, 'Intel UHD Graphics', 'graphic card', '620 graphics', 1, '4 GB', 7500, '610 graphics', '605 graphics', '600 graphics'),
(5, 'windows 10 home', 'operating system', 'windows 10 home', 1, 'windows 10', 1700, 'windows 10 professional', 'windows 8 home', 'windows 8 professional'),
(6, 'Ports', 'slots', 'USB A', 2, '', 1290, 'USB B', 'USB C', ''),
(7, 'Hard Disk', 'Storage', 'Toshiba Canvio Alumy 1 TB', 1, '1 TB', 3099, 'WD My Passport Ultra 1TB', 'WD My Passport 1 TB', 'Toshiba Canvio Alumy 1 TB');

-- --------------------------------------------------------

--
-- Table structure for table `retailer`
--

CREATE TABLE `retailer` (
  `id` int(3) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `quantity_left` int(4) NOT NULL,
  `cost` int(7) NOT NULL,
  `curr_date` date NOT NULL,
  `last_imp_dt` date NOT NULL,
  `bef_imp_qty` int(4) NOT NULL,
  `imp_qty` int(4) NOT NULL,
  `rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(4) NOT NULL,
  `part_id` varchar(30) NOT NULL,
  `part_name` varchar(30) NOT NULL,
  `size` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `cost` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `part_id`, `part_name`, `size`, `type`, `quantity`, `cost`) VALUES
(1, 'Ryzen 1600', 'INTEL core processor i5', '1.6 GHz', 'processor', '10', '2335'),
(2, 'Ryzen 1700', 'Intel core i5 8th generation p', '2.8', 'processor', '10', '24890'),
(3, 'Ryzen 1500', 'Intel pentium G5400', '3.7 GHz', 'processor', '10', '7990'),
(4, 'DDR4-2400MHZ', 'corsair vengeance LPX 2400 MHz', '8 GB', 'RAM', '10', '5515'),
(5, 'DDR4-1554MHZ', 'hyper X Fury CL15 DIMM DDR4 24', '8GB', 'RAM', '10', '5999'),
(6, 'DDR4-3733MHZ', 'crucial DDR4 2400 SODIMM', '8 GB', 'RAM', '10', '5210'),
(7, '1920X1080', 'laptop screen lapsparein scree', '15.6 inch', 'screen', '10', '8799'),
(8, '1440X900', 'samsung HD LED LCD SCREEN', '15.6 inch', 'screen', '10', '19971'),
(9, '1280X800', 'Acer laptop LED screen', '14 inch', 'screen', '10', '5199'),
(10, '620 graphics', 'zotac NVIDIA GEeForce GT730 ', '4 GB', 'graphic card', '10', '6398'),
(11, '610 graphics', 'nextron NVIDIA GEForce GT 730', '4 GB', 'graphic card', '10', '6990'),
(12, '605 graphics', 'Gigabyte GeForce GTX 1050', '4 GB', 'graphic card', '10', '19548'),
(13, 'Windows 10 professional', 'windows 10 professional ', 'profession', 'operating system', '10', '5995'),
(15, 'Ryzan 1200', 'Intel G4560 7th Gen Pentium Du', '3.6GHZ', 'Processor', '2', '7899'),
(16, 'Toshiba Canvio Alumy 1 TB', 'HardDisk', '1TB', 'Storage', '10', '1199'),
(17, 'WD My Passport Ultra 1TB', 'Storite External Hard Drive', '2TB', 'Storage', '5', '1448'),
(18, 'windows 8 home', 'windows 8 home', 'profession', 'operating system', '4', '3501'),
(19, 'USB B', 'Sandisk Cruzer Blade', '32GB', 'slots', '30', '800'),
(20, '65W', 'Swiztek Adapter Dell Inspiron ', '3.34A', 'Adapter', '5', '750');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `program_id` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `program_id`, `password`) VALUES
(1, 'sup123', '123456'),
(2, 'ret123', '123456'),
(3, 'ma123', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ebom`
--
ALTER TABLE `ebom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retailer`
--
ALTER TABLE `retailer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
