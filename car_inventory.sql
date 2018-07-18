-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 04:56 AM
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
-- Database: `car_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_manufacture`
--

CREATE TABLE `car_manufacture` (
  `id` int(11) NOT NULL,
  `manufacture_cmpny` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_manufacture`
--

INSERT INTO `car_manufacture` (`id`, `manufacture_cmpny`) VALUES
(1, 'Maruti'),
(2, 'manufacurer'),
(4, 'manufacurer'),
(8, 'BAleno'),
(9, 'suzuki'),
(10, 'XYZ'),
(12, 'Marcedez'),
(13, 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `car_model`
--

CREATE TABLE `car_model` (
  `id` int(11) NOT NULL,
  `manufac_cmp` varchar(200) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `qnty` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_model`
--

INSERT INTO `car_model` (`id`, `manufac_cmp`, `model`, `qnty`) VALUES
(2, 'Maruti', 'Suzuki', '2'),
(3, 'Marcedez', 'Nano', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_manufacture`
--
ALTER TABLE `car_manufacture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_model`
--
ALTER TABLE `car_model`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_manufacture`
--
ALTER TABLE `car_manufacture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `car_model`
--
ALTER TABLE `car_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
