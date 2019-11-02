-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 09:42 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `location_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `area_name`, `location_id`) VALUES
(1, 'Adyar', 1),
(2, 'Egmore', 1),
(3, 'Besant Nagar', 1),
(4, 'Royapuram', 1),
(5, 'Velachery', 1),
(6, 'Banashankari', 2),
(7, 'Malleswaram', 2),
(8, 'Koramangala', 2),
(9, 'Hebbal', 2),
(10, 'Jayanagar', 2),
(11, 'Dwaraka', 3),
(12, 'Mayur Vihar', 3),
(13, 'Karol Bagh', 3),
(14, 'Cyber City', 3),
(15, 'Sector 21', 3),
(16, 'Bandra', 4),
(17, 'Malabar Hill', 4),
(18, 'Altamount Road', 4),
(19, 'Hiranandani', 4),
(20, 'Worli Sea Face', 4),
(21, 'Anandnagar', 5),
(22, 'Balaji Nagar', 5),
(23, 'Baner road', 5),
(24, 'Katraj', 5),
(25, 'Lulla Nagar', 5);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `hotel_image` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `area_id` int(100) NOT NULL,
  `location_id` int(100) NOT NULL,
  `rating` int(100) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `hotel_name`, `address`, `hotel_image`, `room_type`, `area_id`, `location_id`, `rating`, `price`) VALUES
(1, 'OYO 6918 Manorama Guest House', '2nd floor, gala no 203-208, Manish shopping, centre, jp road, , 400053, Mumbai', 'img1.png', 'Single', 16, 4, 4, 400);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `location_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location_name`) VALUES
(1, 'Chennai'),
(2, 'Bangalore'),
(3, 'Delhi'),
(4, 'Mumbai'),
(5, 'Pune');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
