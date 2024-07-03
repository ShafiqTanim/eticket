-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2024 at 05:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'chittagong', '2024-06-23 05:02:04', 1, NULL, NULL, NULL),
(2, 'dhaka', '2024-06-23 05:02:18', 1, NULL, NULL, NULL),
(3, ' lohagara', '2024-06-23 05:02:30', 1, NULL, 1, '2024-07-01 07:02:42'),
(4, 'cox-bazar', '2024-06-23 05:32:19', 1, NULL, NULL, NULL),
(5, 'chittagong', '2024-06-23 05:33:56', 1, NULL, 1, '2024-07-01 07:02:47'),
(6, 'Vatiary', '2024-06-23 06:45:07', 1, '2024-07-01 07:03:02', 1, NULL),
(7, 'lohagara', '2024-07-01 07:02:34', 1, NULL, NULL, NULL),
(8, 'Dampara, GEC', '2024-07-01 07:03:10', 1, '2024-07-01 07:03:53', 1, NULL),
(9, 'New market,CTG', '2024-07-01 07:04:17', 1, '2024-07-01 07:04:55', 1, NULL),
(10, 'A.K khan Road', '2024-07-01 07:04:47', 1, NULL, NULL, NULL),
(11, 'Kornelhat', '2024-07-01 07:05:27', 1, NULL, NULL, NULL),
(12, 'Saidabad', '2024-07-01 07:05:38', 1, NULL, NULL, NULL),
(13, 'Gabtoli', '2024-07-01 07:05:54', 1, NULL, NULL, NULL),
(14, 'Komolapur', '2024-07-01 07:06:05', 1, NULL, NULL, NULL),
(15, 'Signboard Road', '2024-07-01 07:06:18', 1, NULL, NULL, NULL),
(16, 'Chittagong Road', '2024-07-01 07:06:25', 1, NULL, NULL, NULL),
(17, 'kanchpur', '2024-07-01 07:06:40', 1, NULL, NULL, NULL),
(18, 'Uttara', '2024-07-01 07:06:50', 1, NULL, NULL, NULL),
(19, 'Abdhullahpur', '2024-07-01 07:06:56', 1, NULL, NULL, NULL),
(20, 'Munshigonj', '2024-07-01 07:07:14', 1, NULL, NULL, NULL),
(21, 'Kushtia ', '2024-07-01 07:48:43', 1, NULL, NULL, NULL),
(22, 'Satkhira ', '2024-07-01 07:48:53', 1, NULL, NULL, NULL),
(23, 'Brahmanbaria', '2024-07-01 07:49:09', 1, NULL, NULL, NULL),
(24, 'Comilla', '2024-07-01 07:55:18', 1, NULL, NULL, NULL),
(25, 'Maulvibazar', '2024-07-01 07:57:36', 1, NULL, NULL, NULL),
(26, 'Bondar, SYL', '2024-07-01 07:57:57', 1, NULL, NULL, NULL),
(27, 'Jindabazar', '2024-07-01 07:58:04', 1, NULL, NULL, NULL),
(28, 'Boro Eidgah ', '2024-07-01 07:58:24', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `name`, `email`, `contact`, `photo`, `username`, `password`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, NULL, 'kamal@gmail.com', NULL, NULL, 'kamal', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, '2024-06-10 10:09:14', NULL, NULL, NULL, NULL),
(2, NULL, 'sohana@gmail.com', NULL, NULL, 'sohana', 'fc1200c7a7aa52109d762a9f005b149abef01479', NULL, '2024-06-10 10:12:06', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `counter_name` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `counter_name`, `contact_no`, `area_id`, `district_id`, `division_id`, `address`, `contact_person`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'cinema palace', '031099586785', 3, 3, 2, 'road no-01, counter no-59, ', 'counter manager,tanim', '2024-06-23 06:51:12', 1, NULL, NULL, NULL),
(2, 'Dampara', '01540287930', 1, 5, 0, 'Dampara,GEC', 'Tanim Ahmed', '2024-07-01 08:11:20', 1, NULL, NULL, NULL),
(3, 'Dampara', '01540287930', 1, 5, 7, 'Dampara,GEC', 'Tanim Ahmed', '2024-07-01 08:12:34', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district_name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, '0', '2024-06-23 05:03:14', 1, NULL, 1, '2024-06-23 06:00:56'),
(2, '0', '2024-06-23 05:48:50', 1, NULL, 1, '2024-06-23 06:00:58'),
(3, 'chittagong', '2024-06-23 06:00:48', 1, NULL, 1, '2024-07-01 06:52:47'),
(4, 'chittagong', '2024-06-23 06:11:41', 1, NULL, 1, '2024-07-01 06:52:45'),
(5, 'Chattogram', '2024-07-01 06:53:22', 1, NULL, NULL, NULL),
(6, 'Coxbazar', '2024-07-01 06:53:41', 1, NULL, NULL, NULL),
(7, 'Sitakundu', '2024-07-01 06:54:25', 1, NULL, NULL, NULL),
(8, 'Comilla', '2024-07-01 06:55:23', 1, NULL, NULL, NULL),
(9, 'Narayongoj', '2024-07-01 06:55:52', 1, NULL, NULL, NULL),
(10, 'Gajipur', '2024-07-01 06:56:00', 1, NULL, NULL, NULL),
(11, 'Chapai Nobabgonj', '2024-07-01 06:56:11', 1, '2024-07-01 06:57:19', 1, NULL),
(12, 'Nougoan', '2024-07-01 06:58:10', 1, NULL, NULL, NULL),
(13, 'Rajshahi', '2024-07-01 06:58:24', 1, NULL, NULL, NULL),
(14, 'Hobigonj', '2024-07-01 06:58:34', 1, NULL, NULL, NULL),
(15, 'Shunamgonj', '2024-07-01 06:58:43', 1, NULL, NULL, NULL),
(16, 'Maulvibazar', '2024-07-01 07:00:45', 1, NULL, NULL, NULL),
(17, 'Narail  ', '2024-07-01 07:01:00', 1, NULL, NULL, NULL),
(18, 'Magura ', '2024-07-01 07:01:09', 1, NULL, NULL, NULL),
(19, 'Rangpur ', '2024-07-01 07:01:22', 1, NULL, NULL, NULL),
(20, 'Gaibandha', '2024-07-01 07:01:32', 1, NULL, NULL, NULL),
(21, 'Natore', '2024-07-01 07:01:41', 1, NULL, NULL, NULL),
(22, 'Faridpur', '2024-07-01 07:02:00', 1, NULL, NULL, NULL),
(23, 'Pirozpur', '2024-07-01 07:02:14', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `division_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `division_name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, '0', '2024-06-23 05:04:52', 1, NULL, 1, '2024-06-23 06:11:08'),
(2, 'chittagong', '2024-06-23 06:10:57', 1, NULL, 1, '2024-06-30 08:33:27'),
(3, '', '2024-06-23 06:11:13', 1, NULL, 1, '2024-06-23 06:11:23'),
(4, '', '2024-06-23 06:11:26', 1, NULL, 1, '2024-06-30 08:33:25'),
(5, 'chittagong', '2024-06-23 06:11:32', 1, NULL, 1, '2024-06-30 08:33:23'),
(6, 'chittagong', '2024-06-23 07:24:33', 1, NULL, 1, '2024-06-30 08:33:21'),
(7, 'Chittagong', '2024-06-30 08:33:12', 1, '2024-07-01 06:52:09', 1, NULL),
(8, 'Sylhet', '2024-06-30 08:33:36', 1, '2024-06-30 08:38:36', 1, NULL),
(9, 'Dhaka', '2024-06-30 08:33:56', 1, '2024-06-30 08:38:41', 1, NULL),
(10, 'Barisal', '2024-06-30 08:37:16', 1, NULL, NULL, NULL),
(11, 'Rajshahi', '2024-06-30 08:37:35', 1, NULL, NULL, NULL),
(12, 'Mymensing', '2024-06-30 08:37:57', 1, NULL, NULL, NULL),
(13, 'Rangpur', '2024-06-30 08:38:13', 1, '2024-06-30 08:38:58', 1, NULL),
(14, 'Khulna', '2024-06-30 08:39:16', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `location_name` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `area_from` int(11) DEFAULT NULL,
  `break_area` int(11) DEFAULT NULL,
  `area_to` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `name`, `area_from`, `break_area`, `area_to`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Chattogram To Sylhet', 8, 23, 26, '2024-06-23 05:32:45', 1, '2024-07-01 07:59:13', 1, NULL),
(2, 'Chattogram To Coxbazar', 6, 7, 4, '2024-06-23 05:37:12', 1, '2024-07-01 08:01:52', 1, NULL),
(3, 'Chattogram To Dhaka', 10, 24, 15, '2024-06-23 06:13:13', 1, '2024-07-01 08:00:57', 1, NULL),
(4, 'Dhaka To Sylhet', 19, 23, 28, '2024-06-23 06:25:45', 1, '2024-07-01 08:02:59', 1, NULL),
(5, 'Dhaka To Cox-Bazar', 13, 10, 4, '2024-07-01 08:04:32', 1, NULL, NULL, NULL),
(6, 'Cox-Bazar To Sylhet', 4, 24, 25, '2024-07-01 08:05:54', 1, NULL, NULL, NULL),
(7, 'Cox-Bazar To Dhaka', 4, 24, 14, '2024-07-01 08:06:58', 1, NULL, NULL, NULL),
(8, 'Cox-Bazar To Chattogram', 4, 7, 11, '2024-07-01 08:07:36', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `couch_number` varchar(255) DEFAULT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `route_id` int(11) DEFAULT NULL,
  `departure_time` datetime DEFAULT NULL,
  `departure_counter` int(11) DEFAULT NULL,
  `arrival_time` datetime DEFAULT NULL,
  `arrival_counter` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `couch_number`, `vehicle_id`, `route_id`, `departure_time`, `departure_counter`, `arrival_time`, `arrival_counter`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, '03101#', 1, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '2024-06-22 07:51:14', 1, NULL, NULL, NULL),
(2, '#559', 1, 2, '2024-06-23 13:00:00', 1, '2024-06-23 13:00:00', 1, '2024-06-23 09:01:59', 1, NULL, NULL, NULL),
(3, '1', 1, 2, '2024-06-04 12:18:00', 1, '2024-06-08 12:18:00', 1, '2024-06-30 08:19:12', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'A1', '2024-06-23 09:03:52', 1, NULL, NULL, NULL),
(2, 'A2', '2024-06-23 09:03:59', 1, NULL, NULL, NULL),
(3, 'A3', '2024-06-29 09:56:25', 1, NULL, NULL, NULL),
(4, 'A4', '2024-06-29 09:57:37', 1, NULL, NULL, NULL),
(5, 'B1', '2024-06-29 09:57:46', 1, NULL, NULL, NULL),
(6, 'B2', '2024-06-29 09:57:52', 1, NULL, NULL, NULL),
(7, 'B3', '2024-06-29 09:57:58', 1, NULL, NULL, NULL),
(8, 'B4', '2024-06-29 09:58:05', 1, NULL, NULL, NULL),
(9, 'C1', '2024-06-29 09:58:12', 1, NULL, NULL, NULL),
(10, 'C2', '2024-06-29 09:58:20', 1, NULL, NULL, NULL),
(11, 'C3', '2024-06-29 09:58:25', 1, NULL, NULL, NULL),
(12, 'C4', '2024-06-29 09:58:30', 1, NULL, NULL, NULL),
(13, 'D1', '2024-06-29 09:58:36', 1, NULL, NULL, NULL),
(14, 'D2', '2024-06-29 09:58:48', 1, NULL, NULL, NULL),
(15, 'D3', '2024-06-29 09:58:55', 1, NULL, NULL, NULL),
(16, 'D4', '2024-06-29 09:59:00', 1, NULL, NULL, NULL),
(17, 'E1', '2024-06-29 09:59:08', 1, NULL, NULL, NULL),
(18, 'E2', '2024-06-29 09:59:12', 1, NULL, NULL, NULL),
(19, 'E3', '2024-06-29 09:59:15', 1, NULL, NULL, NULL),
(20, 'E4', '2024-06-29 09:59:19', 1, NULL, NULL, NULL),
(21, 'F1', '2024-06-29 09:59:42', 1, NULL, NULL, NULL),
(22, '2', '2024-06-29 09:59:45', 1, NULL, 1, '2024-06-29 10:04:59'),
(23, 'F3', '2024-06-29 09:59:49', 1, NULL, NULL, NULL),
(24, 'F4', '2024-06-29 09:59:54', 1, NULL, NULL, NULL),
(25, 'G1', '2024-06-29 10:00:04', 1, NULL, NULL, NULL),
(26, 'G2', '2024-06-29 10:00:07', 1, NULL, NULL, NULL),
(27, 'G3', '2024-06-29 10:00:11', 1, NULL, NULL, NULL),
(28, 'G4', '2024-06-29 10:00:15', 1, NULL, NULL, NULL),
(29, 'H1', '2024-06-29 10:00:20', 1, NULL, NULL, NULL),
(30, 'H2', '2024-06-29 10:00:24', 1, NULL, NULL, NULL),
(31, 'H3', '2024-06-29 10:00:38', 1, NULL, NULL, NULL),
(32, 'H4', '2024-06-29 10:00:46', 1, NULL, NULL, NULL),
(33, 'I1', '2024-06-29 10:00:52', 1, NULL, NULL, NULL),
(34, 'I2', '2024-06-29 10:00:56', 1, NULL, NULL, NULL),
(35, 'I3', '2024-06-29 10:00:59', 1, NULL, NULL, NULL),
(36, 'I4', '2024-06-29 10:01:03', 1, NULL, NULL, NULL),
(37, 'J1', '2024-06-29 10:01:08', 1, NULL, NULL, NULL),
(38, 'J2', '2024-06-29 10:01:12', 1, NULL, NULL, NULL),
(39, 'J3', '2024-06-29 10:01:15', 1, NULL, NULL, NULL),
(40, 'J4', '2024-06-29 10:01:18', 1, NULL, NULL, NULL),
(41, 'F2', '2024-06-29 10:05:15', 1, NULL, 1, '2024-06-29 10:14:18'),
(42, 'K1', '2024-06-29 10:05:36', 1, NULL, 1, '2024-06-29 10:07:36'),
(43, 'K2', '2024-06-29 10:05:41', 1, NULL, 1, '2024-06-29 10:07:32'),
(44, 'K3', '2024-06-29 10:05:47', 1, NULL, 1, '2024-06-29 10:07:28'),
(45, 'K4', '2024-06-29 10:05:51', 1, NULL, 1, '2024-06-29 10:07:22'),
(46, 'G1', '2024-06-30 08:20:33', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seat_type`
--

CREATE TABLE `seat_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat_type`
--

INSERT INTO `seat_type` (`id`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Economy Class', '2024-06-23 05:05:39', 1, '2024-06-30 08:25:10', 1, NULL),
(2, 'Sleeper', '2024-06-23 05:08:12', 1, '2024-06-30 08:25:25', 1, NULL),
(3, 'Business Class', '2024-06-30 08:20:45', 1, '2024-06-30 08:25:45', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `sub_total` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `vat` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_details`
--

CREATE TABLE `ticket_details` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `vehicle_seat_type_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `registration_no` varchar(255) DEFAULT NULL,
  `vehicle_type` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `name`, `registration_no`, `vehicle_type`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Shohag', 'sho-01', 'AC', '2024-06-22 07:49:43', 1, '2024-06-30 08:22:52', 1, NULL),
(2, 'Shohag', 'Sho-02', 'Non-AC', '2024-06-30 08:20:24', 1, '2024-06-30 08:22:59', 1, NULL),
(3, 'Desh Travels', 'DT-01', 'AC', '2024-06-30 08:23:56', 1, NULL, NULL, NULL),
(4, 'Desh Travels', 'DT-02', 'Non-AC', '2024-06-30 08:24:18', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_seat_type`
--

CREATE TABLE `vehicle_seat_type` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `seat_id` int(11) DEFAULT NULL,
  `seat_type_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_seat_type`
--

INSERT INTO `vehicle_seat_type` (`id`, `vehicle_id`, `seat_id`, `seat_type_id`, `price`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 1, 6, 3, 1650.00, '2024-06-30 08:26:40', 1, NULL, NULL, NULL),
(2, 3, 5, 1, 650.00, '2024-06-30 08:27:11', 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_type`
--
ALTER TABLE `seat_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_details`
--
ALTER TABLE `ticket_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_seat_type`
--
ALTER TABLE `vehicle_seat_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `seat_type`
--
ALTER TABLE `seat_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_details`
--
ALTER TABLE `ticket_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_seat_type`
--
ALTER TABLE `vehicle_seat_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
