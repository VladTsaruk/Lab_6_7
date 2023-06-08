-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 01:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsaruk`
--

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

CREATE TABLE `attractions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`id`, `name`, `price`) VALUES
(1, 'trampoline', 12),
(2, 'carting', 20),
(3, 'balloons', 3),
(4, 'Darts', 7),
(5, 'Kid room', 9);

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `name`, `availability`) VALUES
(1, 'RoboCop', 0),
(2, 'Ded Moroz', 0),
(3, 'Clown', 1),
(4, 'Orchestra ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `keyorder`
--

CREATE TABLE `keyorder` (
  `id` int(11) NOT NULL,
  `totalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keyorder`
--

INSERT INTO `keyorder` (`id`, `totalPrice`) VALUES
(1, 22),
(2, 22),
(3, 22),
(4, 22),
(5, 22),
(6, 22),
(7, 22),
(8, 22),
(9, 22),
(10, 22),
(11, 22),
(12, 22),
(13, 22),
(14, 22),
(15, 22),
(16, 22),
(17, 22);

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `name`) VALUES
(1, '1 zone'),
(3, 'Class'),
(4, 'Caffee'),
(5, 'ASD'),
(6, 'New zone'),
(7, 'New zone'),
(8, 'New zone'),
(9, 'New zone'),
(10, 'New zone'),
(11, 'New zone'),
(12, 'New zone'),
(13, 'New zone'),
(14, 'Just POSTMAN new name'),
(16, 'New zone'),
(17, 'New zone'),
(18, 'New zone'),
(19, 'New zone'),
(20, 'New zone'),
(21, 'New zone'),
(22, 'New zone'),
(23, 'New zone'),
(24, 'New zone'),
(25, 'New zone'),
(26, 'New zone'),
(27, 'New zone'),
(28, 'New zone'),
(29, 'New zone'),
(30, 'New zone'),
(31, 'New zone');

-- --------------------------------------------------------

--
-- Table structure for table `zone_attractions`
--

CREATE TABLE `zone_attractions` (
  `id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `attraction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zone_attractions`
--

INSERT INTO `zone_attractions` (`id`, `zone_id`, `attraction_id`) VALUES
(3, 1, 1),
(1, 1, 2),
(2, 1, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attractions`
--
ALTER TABLE `attractions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keyorder`
--
ALTER TABLE `keyorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zone_attractions`
--
ALTER TABLE `zone_attractions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_id` (`zone_id`,`attraction_id`),
  ADD KEY `attraction_id` (`attraction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attractions`
--
ALTER TABLE `attractions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keyorder`
--
ALTER TABLE `keyorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `zone_attractions`
--
ALTER TABLE `zone_attractions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `zone_attractions`
--
ALTER TABLE `zone_attractions`
  ADD CONSTRAINT `zone_attractions_ibfk_1` FOREIGN KEY (`zone_id`) REFERENCES `zones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zone_attractions_ibfk_2` FOREIGN KEY (`attraction_id`) REFERENCES `attractions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
