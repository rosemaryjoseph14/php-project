-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2025 at 11:08 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `email`, `password`, `reg_date`) VALUES
(1, 'rose@gmail.com', '12345', '2025-01-03 10:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(30) NOT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryname`, `reg_date`) VALUES
(5, 'AC', '2025-01-16 09:55:19'),
(6, 'NON-AC', '2025-01-16 09:55:10'),
(7, 'SLEEPER', '2025-03-11 10:45:55'),
(8, 'SEETER', '2025-03-11 10:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `detailsbus`
--

DROP TABLE IF EXISTS `detailsbus`;
CREATE TABLE IF NOT EXISTS `detailsbus` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `bus` varchar(30) NOT NULL,
  `types` varchar(30) NOT NULL,
  `froms` varchar(30) NOT NULL,
  `tos` varchar(30) NOT NULL,
  `dates` varchar(30) NOT NULL,
  `images` varchar(500) NOT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `detailsbus`
--

INSERT INTO `detailsbus` (`id`, `bus`, `types`, `froms`, `tos`, `dates`, `images`, `reg_date`) VALUES
(26, 'air ', 'NON-AC', 'Muvattupuza', 'Munnar', '2025-07-17', 'FGpsrmwVIAcoAfz_1672392909891_1688483709624.jpg', '2025-03-11 06:58:04'),
(24, 'hgh', 'SLEEPER', 'Muvattupuza', 'kochi', '2025-03-22', 'bus img.jpeg', '2025-03-11 06:27:28'),
(25, 'air ', 'SEETER', 'Kothamangalam', 'Thangamani', '2025-03-28', 'bus img.jpeg', '2025-03-11 06:28:04'),
(23, 'air bus', 'NON-AC', 'Muvattupuza', 'Udumbannoor', '2025-03-29', 'busimg.jpg', '2025-03-11 06:26:50'),
(22, 'air', 'AC', 'Pala', 'Thangamani', '2025-03-22', 'bus 1 img.psb.png', '2025-03-11 06:25:31'),
(21, 'nirmalyam', 'SLEEPER', 'Munnar', 'Thangamani', '2025-03-29', 'bus 1 img.psb.png', '2025-03-04 06:35:22'),
(20, 'air bus', 'AC', 'Kollam', 'Udumbannoor', '2025-03-29', 'bus img.jpeg', '2025-03-04 06:32:27'),
(19, 'jhhhj', 'SLEEPER', 'Pala', 'kochi', '2025-07-25', 'busimg.jpg', '2025-03-04 06:31:49'),
(18, 'air', 'NON-AC', 'Thodupuza', 'Udumbannoor', '2025-03-29', '1500x900_343409-bmtc-1.jpg', '2025-03-11 06:26:15'),
(17, 'nirmalyam', 'SEETER', 'Udumbannoor', 'Munnar', '2025-03-27', 'FGpsrmwVIAcoAfz_1672392909891_1688483709624.jpg', '2025-03-11 10:46:18'),
(16, 'air ', 'SLEEPER', 'Kothamangalam', 'Muvattupuza', '2025-03-08', 'Greyhound-bus.jpg', '2025-02-25 05:51:19'),
(15, 'air bus', 'NON-AC', 'Kollam', 'Pala', '2025-02-28', '1500x900_343409-bmtc-1.jpg', '2025-02-25 05:50:47'),
(13, 'hgh', 'AC', 'Thodupuza', 'Thangamani', '2025-02-28', 'bus 1 img.psb.png', '2025-02-25 05:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `placelist`
--

DROP TABLE IF EXISTS `placelist`;
CREATE TABLE IF NOT EXISTS `placelist` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `placename` varchar(30) NOT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `placelist`
--

INSERT INTO `placelist` (`id`, `placename`, `reg_date`) VALUES
(1, 'Thodupuza', '2025-01-24 07:12:12'),
(4, 'Kothamangalam', '2025-01-23 09:15:11'),
(5, 'Muvattupuza', '2025-01-23 09:15:22'),
(6, 'Kollam', '2025-01-23 09:15:47'),
(7, 'Pala', '2025-01-23 09:16:07'),
(8, 'Udumbannoor', '2025-01-27 06:37:11'),
(9, 'Munnar', '2025-01-27 06:37:31'),
(10, 'Thangamani', '2025-01-28 09:48:33'),
(11, 'kochi', '2025-02-06 06:39:43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
