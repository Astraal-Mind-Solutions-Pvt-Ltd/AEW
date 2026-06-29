-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 13, 2026 at 05:21 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aewelectricbikes`
--
CREATE DATABASE IF NOT EXISTS `aewelectricbikes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `aewelectricbikes`;

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

DROP TABLE IF EXISTS `contact_messages`;
CREATE TABLE IF NOT EXISTS `contact_messages` (
  `message_id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `status` enum('new','read','replied') DEFAULT 'new',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`message_id`, `customer_name`, `customer_phone`, `subject`, `message`, `status`, `created_at`) VALUES
(1, 'Shruti Patil', '', 'idij', 'djieod', 'new', '2026-01-21 11:54:32'),
(2, 'donn', '', 'djwod', 'jwiojdo', 'new', '2026-01-21 12:19:14'),
(3, 'djwio', '', 'djj', 'jdiw', 'new', '2026-01-21 12:28:29'),
(4, 'djwio', '', 'djj', 'jdiw', 'new', '2026-01-21 12:37:04'),
(5, 'Sneha', '', 'idij', 'ieu', 'new', '2026-01-27 16:15:18'),
(6, 'Krisha', '9987561239', 'whudshw7ys', 'suqh', 'new', '2026-01-30 10:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `ebike_enquiries`
--

DROP TABLE IF EXISTS `ebike_enquiries`;
CREATE TABLE IF NOT EXISTS `ebike_enquiries` (
  `enquiry_id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `expected_range` enum('Up to 70 kms','Up to 100 kms','Up to 130 kms') NOT NULL,
  `message` text,
  `service_page` varchar(255) NOT NULL,
  `enquiry_status` enum('Y','N') DEFAULT 'N',
  `enquiry_timestamp` datetime NOT NULL,
  PRIMARY KEY (`enquiry_id`),
  KEY `customer_phone` (`customer_phone`),
  KEY `enquiry_status` (`enquiry_status`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ebike_enquiries`
--

INSERT INTO `ebike_enquiries` (`enquiry_id`, `customer_name`, `customer_phone`, `address`, `expected_range`, `message`, `service_page`, `enquiry_status`, `enquiry_timestamp`) VALUES
(1, 'Priya', '9976510235', 'uhdud', 'Up to 100 kms', 'dhud8iwudud', 'enquiry.php', 'N', '2026-01-30 10:16:51'),
(2, 'Shreya', '9976510235', 'uhdud', 'Up to 100 kms', 'dhud8iwudud', 'enquiry.php', 'N', '2026-01-30 10:23:58'),
(3, 'Kriya', '9976510235', 'uhdud', 'Up to 100 kms', 'dhud8iwudud', 'enquiry.php', 'N', '2026-01-30 10:27:12'),
(4, 'Priya', '9976510235', 'uhdud', 'Up to 130 kms', 'hwuh', 'enquiry.php', 'N', '2026-01-30 16:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `ebike_service_bookings`
--

DROP TABLE IF EXISTS `ebike_service_bookings`;
CREATE TABLE IF NOT EXISTS `ebike_service_bookings` (
  `booking_id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  `selected_service` varchar(100) NOT NULL,
  `service_date` date NOT NULL,
  `special_request` text,
  `booking_timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `service_page` text NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ebike_service_bookings`
--

INSERT INTO `ebike_service_bookings` (`booking_id`, `customer_name`, `customer_phone`, `selected_service`, `service_date`, `special_request`, `booking_timestamp`, `service_page`) VALUES
(1, 'Shruti Patil', '', 'Battery Repair', '2026-01-23', 'Nothing for now', '2026-01-19 09:11:16', '/aewelectricbikesgoa/'),
(2, 'Shari Patil', '', 'Diagnostic Test', '2026-01-31', 'Bike name is Vespo', '2026-01-19 09:17:55', '/aewelectricbikesgoa/?booking=success'),
(3, 'Shruti Patil', '', 'Battery Repair', '2026-01-23', 'Nothing for now', '2026-01-19 09:21:32', '/aewelectricbikesgoa/'),
(4, 'Shruti Patil', '', 'Battery Repair', '2026-01-23', 'Nothing for now', '2026-01-19 09:21:48', '/aewelectricbikesgoa/'),
(5, 'Shruti Patil', '', 'Battery Repair', '2026-01-23', 'Nothing for now', '2026-01-19 09:22:24', '/aewelectricbikesgoa/'),
(6, 'Shruti Patil', '', 'Battery Repair', '2026-01-23', 'Nothing for now', '2026-01-19 09:23:06', '/aewelectricbikesgoa/'),
(7, 'Shari Patil', '', 'Battery Repair', '2026-01-30', 'gdwy', '2026-01-19 10:03:24', '/aewelectricbikesgoa/index.php'),
(8, 'donn', '', 'Diagnostic Test', '2026-01-31', 'wkodpw', '2026-01-21 06:25:53', '/aewelectricbikesgoa/index.php'),
(9, 'Jiaa', '', 'Motor Service', '2026-01-31', 'mjiskqo', '2026-01-21 06:40:19', '/aewelectricbikesgoa/index.php?booking=success'),
(10, 'Jiaa', '', 'Motor Service', '2026-01-31', 'mjiskqo', '2026-01-21 06:40:46', '/aewelectricbikesgoa/index.php?booking=success'),
(11, 'Sneha', '', 'Motor Service', '2026-01-31', 'dnuwi', '2026-01-21 06:41:58', '/aewelectricbikesgoa/index.php?booking=success?booking=success'),
(12, 'rashmi', '', 'Motor Service', '2026-01-30', 'odi', '2026-01-21 06:44:24', '/aewelectricbikesgoa/index.php'),
(13, 'rashmi', '', 'Motor Service', '2026-01-30', 'odi', '2026-01-21 06:45:03', '/aewelectricbikesgoa/index.php'),
(14, 'Santa', '', 'Battery Repair', '2026-01-24', 'dwio', '2026-01-21 06:56:51', ''),
(15, 'agio', '', 'Motor Service', '2026-02-01', 'mdiwo', '2026-01-21 07:07:26', '/aewelectricbikesgoa/index.php'),
(16, 'Shruti', '', 'Diagnostic Test', '2026-01-30', 'Service', '2026-01-27 10:43:48', '/aewelectricbikesgoa/'),
(17, 'Shruti', '', 'Diagnostic Test', '2026-01-30', 'Service', '2026-01-27 10:44:00', '/aewelectricbikesgoa/'),
(18, 'Shruti', '', 'Diagnostic Test', '2026-01-30', 'Service', '2026-01-27 10:44:12', '/aewelectricbikesgoa/'),
(19, 'Jiaara', '2236987458', 'Battery Repair', '2026-02-07', 'jiedo', '2026-01-30 04:01:27', '/aewelectricbikesgoa/index.php'),
(20, 'Kriya', '9987876675', 'Battery Repair', '2026-02-07', 'dbwdyuw', '2026-01-30 05:02:49', '/aewelectricbikesgoa/index.php'),
(21, 'Kriya', '9987876675', 'Battery Repair', '2026-02-07', 'dbwdyuw', '2026-01-30 05:04:40', '/aewelectricbikesgoa/index.php'),
(22, 'dwuihu', '8877666666', 'Battery Repair', '2026-02-07', 'feu98', '2026-01-30 09:58:47', '/aewelectricbikesgoa/service.php'),
(23, 'Shruti', '6756876565', 'Battery Repair', '2026-02-04', 'd8eu', '2026-01-30 11:18:09', '/aewelectricbikesgoa/index.php');

-- --------------------------------------------------------

--
-- Table structure for table `sub_dealership_enquiries`
--

DROP TABLE IF EXISTS `sub_dealership_enquiries`;
CREATE TABLE IF NOT EXISTS `sub_dealership_enquiries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `location_city` varchar(100) NOT NULL,
  `preferred_area` varchar(150) DEFAULT NULL,
  `applicant_type` varchar(50) DEFAULT NULL,
  `business_experience` enum('Yes','No') DEFAULT NULL,
  `message` text,
  `flag` enum('Y','N') DEFAULT 'N',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sub_dealership_enquiries`
--

INSERT INTO `sub_dealership_enquiries` (`id`, `full_name`, `phone_number`, `email`, `location_city`, `preferred_area`, `applicant_type`, `business_experience`, `message`, `flag`, `created_at`) VALUES
(1, 'Nisha Malhotra', '', 'shuh$&@gs.com', '', 'jiwo', 'Individual', '', 'wij', 'N', '2026-01-30 09:21:04'),
(2, 'Nisha Malhotra', '', 'shuh$&@gs.com', '', 'jiwo', 'Business Owner', '', 'siqu', 'N', '2026-01-30 09:21:34'),
(3, 'Nisha Malhotra', '', 'shuh$&@gs.com', '', 'jiwo', 'Business Owner', '', 'siqu', 'N', '2026-01-30 09:24:20'),
(4, 'Kaira', '', 'hhd@gmail.com', '', 'cdnjkd', 'Business Owner', '', 'dhuid', 'N', '2026-01-30 09:25:11'),
(5, 'Kaira', '', 'hhd@gmail.com', '', 'cdnjkd', 'Business Owner', '', 'dhuid', 'N', '2026-01-30 09:26:30'),
(6, 'Nisha Malhotra', '', 'shuh$&@gs.com', '', 'jiwo', 'Individual', '', 'ygYUG', 'N', '2026-01-30 11:24:57');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
