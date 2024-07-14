-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2024 at 12:11 AM
-- Server version: 10.6.18-MariaDB-cll-lve
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weebpbih_eticket`
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
(1, 'Dhaka', NULL, NULL, NULL, NULL, NULL),
(2, 'Faridpur', NULL, NULL, NULL, NULL, NULL),
(3, 'Gazipur', NULL, NULL, NULL, NULL, NULL),
(4, 'Gopalganj', NULL, NULL, NULL, NULL, NULL),
(5, 'Jamalpur', NULL, NULL, NULL, NULL, NULL),
(6, 'Kishoreganj', NULL, NULL, NULL, NULL, NULL),
(7, 'Madaripur', NULL, NULL, NULL, NULL, NULL),
(8, 'Manikganj', NULL, NULL, NULL, NULL, NULL),
(9, 'Munshiganj', NULL, NULL, NULL, NULL, NULL),
(10, 'Mymensingh', NULL, NULL, NULL, NULL, NULL),
(11, 'Narayanganj', NULL, NULL, NULL, NULL, NULL),
(12, 'Narsingdi', NULL, NULL, NULL, NULL, NULL),
(13, 'Netrokona', NULL, NULL, NULL, NULL, NULL),
(14, 'Rajbari', NULL, NULL, NULL, NULL, NULL),
(15, 'Shariatpur', NULL, NULL, NULL, NULL, NULL),
(16, 'Sherpur', NULL, NULL, NULL, NULL, NULL),
(17, 'Tangail', NULL, NULL, NULL, NULL, NULL),
(18, 'Bogra', NULL, NULL, NULL, NULL, NULL),
(19, 'Joypurhat', NULL, NULL, NULL, NULL, NULL),
(20, 'Naogaon', NULL, NULL, NULL, NULL, NULL),
(21, 'Natore', NULL, NULL, NULL, NULL, NULL),
(22, 'Nawabganj', NULL, NULL, NULL, NULL, NULL),
(23, 'Pabna', NULL, NULL, NULL, NULL, NULL),
(24, 'Rajshahi', NULL, NULL, NULL, NULL, NULL),
(25, 'Sirajgonj', NULL, NULL, NULL, NULL, NULL),
(26, 'Dinajpur', NULL, NULL, NULL, NULL, NULL),
(27, 'Gaibandha', NULL, NULL, NULL, NULL, NULL),
(28, 'Kurigram', NULL, NULL, NULL, NULL, NULL),
(29, 'Lalmonirhat', NULL, NULL, NULL, NULL, NULL),
(30, 'Nilphamari', NULL, NULL, NULL, NULL, NULL),
(31, 'Panchagarh', NULL, NULL, NULL, NULL, NULL),
(32, 'Rangpur', NULL, NULL, NULL, NULL, NULL),
(33, 'Thakurgaon', NULL, NULL, NULL, NULL, NULL),
(34, 'Barguna', NULL, NULL, NULL, NULL, NULL),
(35, 'Barisal', NULL, NULL, NULL, NULL, NULL),
(36, 'Bhola', NULL, NULL, NULL, NULL, NULL),
(37, 'Jhalokati', NULL, NULL, NULL, NULL, NULL),
(38, 'Patuakhali', NULL, NULL, NULL, NULL, NULL),
(39, 'Pirojpur', NULL, NULL, NULL, NULL, NULL),
(40, 'Bandarban', NULL, NULL, NULL, NULL, NULL),
(41, 'Brahmanbaria', NULL, NULL, NULL, NULL, NULL),
(42, 'Chandpur', NULL, NULL, NULL, NULL, NULL),
(43, 'Chittagong', NULL, NULL, NULL, NULL, NULL),
(44, 'Comilla', NULL, NULL, NULL, NULL, NULL),
(45, 'Cox\'\'s Bazar', NULL, NULL, NULL, NULL, NULL),
(46, 'Feni', NULL, NULL, NULL, NULL, NULL),
(47, 'Khagrachari', NULL, NULL, NULL, NULL, NULL),
(48, 'Lakshmipur', NULL, NULL, NULL, NULL, NULL),
(49, 'Noakhali', NULL, NULL, NULL, NULL, NULL),
(50, 'Rangamati', NULL, NULL, NULL, NULL, NULL),
(51, 'Habiganj', NULL, NULL, NULL, NULL, NULL),
(52, 'Maulvibazar', NULL, NULL, NULL, NULL, NULL),
(53, 'Sunamganj', NULL, NULL, NULL, NULL, NULL),
(54, 'Sylhet', NULL, NULL, NULL, NULL, NULL),
(55, 'Bagerhat', NULL, NULL, NULL, NULL, NULL),
(56, 'Chuadanga', NULL, NULL, NULL, NULL, NULL),
(57, 'Jessore', NULL, NULL, NULL, NULL, NULL),
(58, 'Jhenaidah', NULL, NULL, NULL, NULL, NULL),
(59, 'Khulna', NULL, NULL, NULL, NULL, NULL),
(60, 'Kushtia', NULL, NULL, NULL, NULL, NULL),
(61, 'Magura', NULL, NULL, NULL, NULL, NULL),
(62, 'Meherpur', NULL, NULL, NULL, NULL, NULL),
(63, 'Narail', NULL, NULL, NULL, NULL, NULL),
(64, 'Satkhira', NULL, NULL, NULL, NULL, NULL);

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
(1, 'Dampara', '015486931', 43, 43, 7, 'Garibullahshah,GEC', 'Sohana', '2024-07-13 06:56:25', 1, NULL, NULL, NULL),
(2, 'New Market', '01348762', 43, 43, 7, 'BRTC', 'Tanim', '2024-07-13 06:58:27', 1, NULL, NULL, NULL),
(3, 'A.K Khan Road', '0410258662', 43, 43, 7, 'AKborshah', 'Mukut', '2024-07-13 06:59:16', 1, NULL, NULL, NULL),
(4, 'Gabtoli', '01658795', 1, 1, 9, 'Gabtoli Bus Stand', 'Bappy', '2024-07-13 07:00:55', 1, NULL, NULL, NULL),
(5, 'Saidabad', '0134789', 1, 1, 9, 'Saidabad Bus Stand', 'Tanbhir', '2024-07-13 07:01:33', 1, NULL, NULL, NULL),
(6, 'Komolapur', '0139745', 1, 1, 9, 'Komolapur Stand', 'Nur Khan', '2024-07-13 07:02:11', 1, NULL, NULL, NULL),
(7, 'Jinda Bazar', '01579335', 54, 54, 8, 'Jinda Bazar Road', 'Mamun', '2024-07-13 07:03:12', 1, NULL, NULL, NULL),
(8, 'Boro Eidgah', '01364786524', 54, 54, 8, 'Ponchopukur', 'Julfiquer', '2024-07-13 07:03:59', 1, NULL, NULL, NULL),
(9, 'Chapainaobgonj', '01876635583', 24, 24, 11, 'Aampara moor, Chapai', 'Fahim', '2024-07-14 02:57:48', 1, NULL, NULL, NULL);

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

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `contact_no`, `email`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Shafiq Tanim', '01348762', 'ahmedmukut19@gmail.com', '2024-07-14 03:56:26', 1, NULL, NULL, NULL);

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
(1, 'Dhaka', NULL, NULL, NULL, NULL, NULL),
(2, 'Faridpur', NULL, NULL, NULL, NULL, NULL),
(3, 'Gazipur', NULL, NULL, NULL, NULL, NULL),
(4, 'Gopalganj', NULL, NULL, NULL, NULL, NULL),
(5, 'Jamalpur', NULL, NULL, NULL, NULL, NULL),
(6, 'Kishoreganj', NULL, NULL, NULL, NULL, NULL),
(7, 'Madaripur', NULL, NULL, NULL, NULL, NULL),
(8, 'Manikganj', NULL, NULL, NULL, NULL, NULL),
(9, 'Munshiganj', NULL, NULL, NULL, NULL, NULL),
(10, 'Mymensingh', NULL, NULL, NULL, NULL, NULL),
(11, 'Narayanganj', NULL, NULL, NULL, NULL, NULL),
(12, 'Narsingdi', NULL, NULL, NULL, NULL, NULL),
(13, 'Netrokona', NULL, NULL, NULL, NULL, NULL),
(14, 'Rajbari', NULL, NULL, NULL, NULL, NULL),
(15, 'Shariatpur', NULL, NULL, NULL, NULL, NULL),
(16, 'Sherpur', NULL, NULL, NULL, NULL, NULL),
(17, 'Tangail', NULL, NULL, NULL, NULL, NULL),
(18, 'Bogra', NULL, NULL, NULL, NULL, NULL),
(19, 'Joypurhat', NULL, NULL, NULL, NULL, NULL),
(20, 'Naogaon', NULL, NULL, NULL, NULL, NULL),
(21, 'Natore', NULL, NULL, NULL, NULL, NULL),
(22, 'Nawabganj', NULL, NULL, NULL, NULL, NULL),
(23, 'Pabna', NULL, NULL, NULL, NULL, NULL),
(24, 'Rajshahi', NULL, NULL, NULL, NULL, NULL),
(25, 'Sirajgonj', NULL, NULL, NULL, NULL, NULL),
(26, 'Dinajpur', NULL, NULL, NULL, NULL, NULL),
(27, 'Gaibandha', NULL, NULL, NULL, NULL, NULL),
(28, 'Kurigram', NULL, NULL, NULL, NULL, NULL),
(29, 'Lalmonirhat', NULL, NULL, NULL, NULL, NULL),
(30, 'Nilphamari', NULL, NULL, NULL, NULL, NULL),
(31, 'Panchagarh', NULL, NULL, NULL, NULL, NULL),
(32, 'Rangpur', NULL, NULL, NULL, NULL, NULL),
(33, 'Thakurgaon', NULL, NULL, NULL, NULL, NULL),
(34, 'Barguna', NULL, NULL, NULL, NULL, NULL),
(35, 'Barisal', NULL, NULL, NULL, NULL, NULL),
(36, 'Bhola', NULL, NULL, NULL, NULL, NULL),
(37, 'Jhalokati', NULL, NULL, NULL, NULL, NULL),
(38, 'Patuakhali', NULL, NULL, NULL, NULL, NULL),
(39, 'Pirojpur', NULL, NULL, NULL, NULL, NULL),
(40, 'Bandarban', NULL, NULL, NULL, NULL, NULL),
(41, 'Brahmanbaria', NULL, NULL, NULL, NULL, NULL),
(42, 'Chandpur', NULL, NULL, NULL, NULL, NULL),
(43, 'Chittagong', NULL, NULL, NULL, NULL, NULL),
(44, 'Comilla', NULL, NULL, NULL, NULL, NULL),
(45, 'Cox\'\'s Bazar', NULL, NULL, NULL, NULL, NULL),
(46, 'Feni', NULL, NULL, NULL, NULL, NULL),
(47, 'Khagrachari', NULL, NULL, NULL, NULL, NULL),
(48, 'Lakshmipur', NULL, NULL, NULL, NULL, NULL),
(49, 'Noakhali', NULL, NULL, NULL, NULL, NULL),
(50, 'Rangamati', NULL, NULL, NULL, NULL, NULL),
(51, 'Habiganj', NULL, NULL, NULL, NULL, NULL),
(52, 'Maulvibazar', NULL, NULL, NULL, NULL, NULL),
(53, 'Sunamganj', NULL, NULL, NULL, NULL, NULL),
(54, 'Sylhet', NULL, NULL, NULL, NULL, NULL),
(55, 'Bagerhat', NULL, NULL, NULL, NULL, NULL),
(56, 'Chuadanga', NULL, NULL, NULL, NULL, NULL),
(57, 'Jessore', NULL, NULL, NULL, NULL, NULL),
(58, 'Jhenaidah', NULL, NULL, NULL, NULL, NULL),
(59, 'Khulna', NULL, NULL, NULL, NULL, NULL),
(60, 'Kushtia', NULL, NULL, NULL, NULL, NULL),
(61, 'Magura', NULL, NULL, NULL, NULL, NULL),
(62, 'Meherpur', NULL, NULL, NULL, NULL, NULL),
(63, 'Narail', NULL, NULL, NULL, NULL, NULL),
(64, 'Satkhira', NULL, NULL, NULL, NULL, NULL);

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
(1, 'Dhaka To Chittagong', 1, 44, 43, NULL, NULL, NULL, NULL, NULL),
(2, 'Dhaka To Khulna', 1, 42, 59, NULL, NULL, NULL, NULL, NULL),
(3, 'Dhaka To Sylhet', 1, 41, 54, NULL, NULL, NULL, NULL, NULL),
(4, 'Dhaka To Barisal', 1, 42, 35, NULL, NULL, NULL, NULL, NULL),
(5, 'Dhaka To Rajshahi', 1, 17, 24, NULL, NULL, NULL, NULL, NULL),
(6, 'Dhaka To Rangpur', 1, 25, 32, NULL, NULL, NULL, NULL, NULL),
(7, 'Dhaka To Mymensingh', 1, 0, 10, NULL, NULL, NULL, NULL, NULL),
(8, 'Chittagong To Khulna', 43, 42, 59, NULL, NULL, NULL, NULL, NULL),
(9, 'Chittagong To Sylhet', 43, 1, 54, NULL, NULL, NULL, NULL, NULL),
(10, 'Chittagong To Barisal', 43, 42, 35, NULL, NULL, NULL, NULL, NULL),
(11, 'Chittagong To Rajshahi', 43, 25, 24, NULL, NULL, NULL, NULL, NULL),
(12, 'Chittagong To Rangpur', 43, 25, 32, NULL, NULL, NULL, NULL, NULL),
(13, 'Chittagong To Mymensingh', 43, 44, 10, NULL, NULL, NULL, NULL, NULL),
(14, 'Chittagong To Dhaka', 43, 44, 1, NULL, NULL, NULL, NULL, NULL),
(15, 'Sylhet To Khulna', 54, 1, 59, NULL, NULL, NULL, NULL, NULL),
(16, 'Sylhet To Chittagong', 54, 1, 43, NULL, NULL, NULL, NULL, NULL),
(17, 'Sylhet To Barisal', 54, 1, 35, NULL, NULL, NULL, NULL, NULL),
(18, 'Sylhet To Rajshahi', 54, 1, 24, NULL, NULL, NULL, NULL, NULL),
(19, 'Sylhet To Rangpur', 54, 1, 32, NULL, NULL, NULL, NULL, NULL),
(20, 'Sylhet To Mymensingh', 54, 0, 10, NULL, NULL, NULL, NULL, NULL),
(21, 'Sylhet To Dhaka', 54, 0, 1, NULL, NULL, NULL, NULL, NULL);

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
(1, '111', 1, 1, '2024-07-22 10:00:00', 6, '2024-07-22 15:00:00', 1, '2024-07-13 07:07:22', 1, NULL, NULL, NULL),
(2, '222', 2, 1, '2024-07-22 12:00:00', 4, '2024-07-22 17:00:00', 2, '2024-07-13 07:09:37', 1, NULL, NULL, NULL),
(3, '333', 3, 9, '2024-07-22 22:00:00', 3, '2024-07-23 06:00:00', 8, '2024-07-13 07:11:24', 1, NULL, NULL, NULL),
(4, '444', 4, 9, '2024-07-23 10:00:00', 1, '2024-07-23 18:00:00', 7, '2024-07-13 07:12:50', 1, NULL, NULL, NULL),
(5, '555', 5, 16, '2024-07-26 17:00:00', 7, '2024-07-27 02:00:00', 3, '2024-07-13 07:16:55', 1, NULL, NULL, NULL),
(6, '666', 6, 21, '2024-07-27 18:00:00', 8, '2024-07-27 12:00:00', 6, '2024-07-13 07:20:05', 1, NULL, NULL, NULL),
(7, '777', 8, 5, '2024-07-30 17:00:00', 5, '2024-07-30 23:00:00', 9, '2024-07-14 02:59:09', 1, NULL, NULL, NULL),
(8, '333', 1, 1, '2024-07-22 09:46:00', 4, '2024-07-22 09:46:00', 2, '2024-07-14 03:47:21', 1, NULL, NULL, NULL);

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
(22, 'F2', '2024-06-29 09:59:45', 1, NULL, 1, '2024-06-29 10:04:59'),
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
(40, 'J4', '2024-06-29 10:01:18', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seat_book`
--

CREATE TABLE `seat_book` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `total_seat` int(11) NOT NULL,
  `other_charge` decimal(10,2) NOT NULL,
  `coupon_code` varchar(20) NOT NULL,
  `discount` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seat_book_details`
--

CREATE TABLE `seat_book_details` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `seat_book_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(2, 'Business Class', '2024-06-30 08:20:45', 1, '2024-06-30 08:25:45', 1, NULL);

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
(1, 'Shohag', 'sho-01', 'Non-AC', '2024-06-22 07:49:43', 1, '2024-07-06 09:06:31', 1, NULL),
(2, 'Shohag Elite', 'Sho-02', 'AC', '2024-06-30 08:20:24', 1, '2024-07-06 09:06:19', 1, NULL),
(3, 'Desh Travels Business Class', 'DT-01', 'AC', '2024-06-30 08:23:56', 1, NULL, NULL, NULL),
(4, 'Desh Travels', 'DT-02', 'Non-AC', '2024-06-30 08:24:18', 1, NULL, NULL, NULL),
(5, 'Hanif Volvo', 'HA-055', 'AC', '2024-07-06 07:15:23', 1, NULL, NULL, NULL),
(6, 'Hanif', 'Ha-44', 'Non-AC', '2024-07-06 07:15:43', 1, NULL, NULL, NULL),
(7, 'Unique', 'UNI-159', 'Non-AC', '2024-07-06 09:23:20', 1, NULL, NULL, NULL),
(8, 'Silk Line Travels', 'SILK-007', 'AC', '2024-07-06 09:57:40', 1, NULL, NULL, NULL);

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
(1, 1, 1, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(2, 1, 2, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(3, 1, 3, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(4, 1, 4, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(5, 1, 5, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(6, 1, 6, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(7, 1, 7, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(8, 1, 8, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(9, 1, 9, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(10, 1, 10, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(11, 1, 11, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(12, 1, 12, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(13, 1, 13, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(14, 1, 14, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(15, 1, 15, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(16, 1, 16, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(17, 1, 17, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(18, 1, 18, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(19, 1, 19, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(20, 1, 20, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(21, 1, 21, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(22, 1, 22, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(23, 1, 23, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(24, 1, 24, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(25, 1, 25, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(26, 1, 26, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(27, 1, 27, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(28, 1, 28, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(29, 1, 29, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(30, 1, 30, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(31, 1, 31, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(32, 1, 32, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(33, 1, 33, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(34, 1, 34, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(35, 1, 35, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(36, 1, 36, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(37, 1, 37, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(38, 1, 38, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(39, 1, 39, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(40, 1, 40, 1, 650.00, NULL, 1, NULL, NULL, NULL),
(41, 3, 1, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(42, 3, 2, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(43, 3, 3, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(44, 3, 4, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(45, 3, 5, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(46, 3, 6, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(47, 3, 7, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(48, 3, 8, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(49, 3, 9, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(50, 3, 10, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(51, 3, 11, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(52, 3, 12, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(53, 3, 13, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(54, 3, 14, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(55, 3, 15, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(56, 3, 16, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(57, 3, 17, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(58, 3, 18, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(59, 3, 19, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(60, 3, 20, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(61, 3, 21, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(62, 3, 22, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(63, 3, 23, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(64, 3, 24, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(65, 3, 25, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(66, 3, 26, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(67, 3, 27, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(68, 3, 28, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(69, 3, 29, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(70, 3, 30, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(71, 3, 31, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(72, 3, 32, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(73, 3, 33, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(74, 3, 34, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(75, 3, 35, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(76, 3, 36, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(77, 3, 37, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(78, 3, 38, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(79, 3, 39, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(80, 3, 40, 1, 680.00, NULL, 1, NULL, NULL, NULL),
(81, 6, 1, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(82, 6, 2, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(83, 6, 3, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(84, 6, 4, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(85, 6, 5, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(86, 6, 6, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(87, 6, 7, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(88, 6, 8, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(89, 6, 9, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(90, 6, 10, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(91, 6, 11, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(92, 6, 12, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(93, 6, 13, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(94, 6, 14, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(95, 6, 15, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(96, 6, 16, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(97, 6, 17, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(98, 6, 18, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(99, 6, 19, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(100, 6, 20, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(101, 6, 21, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(102, 6, 22, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(103, 6, 23, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(104, 6, 24, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(105, 6, 25, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(106, 6, 26, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(107, 6, 27, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(108, 6, 28, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(109, 6, 29, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(110, 6, 30, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(111, 6, 31, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(112, 6, 32, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(113, 6, 33, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(114, 6, 34, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(115, 6, 35, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(116, 6, 36, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(117, 6, 37, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(118, 6, 38, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(119, 6, 39, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(120, 6, 40, 1, 720.00, NULL, 1, NULL, NULL, NULL),
(121, 7, 1, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(122, 7, 2, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(123, 7, 3, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(124, 7, 4, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(125, 7, 5, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(126, 7, 6, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(127, 7, 7, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(128, 7, 8, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(129, 7, 9, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(130, 7, 10, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(131, 7, 11, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(132, 7, 12, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(133, 7, 13, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(134, 7, 14, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(135, 7, 15, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(136, 7, 16, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(137, 7, 17, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(138, 7, 18, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(139, 7, 19, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(140, 7, 20, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(141, 7, 21, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(142, 7, 22, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(143, 7, 23, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(144, 7, 24, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(145, 7, 25, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(146, 7, 26, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(147, 7, 27, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(148, 7, 28, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(149, 7, 29, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(150, 7, 30, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(151, 7, 31, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(152, 7, 32, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(153, 7, 33, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(154, 7, 34, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(155, 7, 35, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(156, 7, 36, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(157, 7, 37, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(158, 7, 38, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(159, 7, 39, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(160, 7, 40, 1, 700.00, NULL, 1, NULL, NULL, NULL),
(161, 2, 1, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(162, 2, 3, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(163, 2, 4, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(164, 2, 5, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(165, 2, 7, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(166, 2, 8, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(167, 2, 9, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(168, 2, 11, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(169, 2, 12, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(170, 2, 13, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(171, 2, 15, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(172, 2, 16, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(173, 2, 17, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(174, 2, 19, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(175, 2, 20, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(176, 2, 21, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(177, 2, 23, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(178, 2, 24, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(179, 2, 25, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(180, 2, 27, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(181, 2, 28, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(182, 2, 29, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(183, 2, 31, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(184, 2, 32, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(185, 3, 1, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(186, 3, 3, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(187, 3, 4, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(188, 3, 5, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(189, 3, 7, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(190, 3, 8, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(191, 3, 9, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(192, 3, 11, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(193, 3, 12, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(194, 3, 13, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(195, 3, 15, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(196, 3, 16, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(197, 3, 17, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(198, 3, 19, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(199, 3, 20, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(200, 3, 21, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(201, 3, 23, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(202, 3, 24, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(203, 3, 25, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(204, 3, 27, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(205, 3, 28, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(206, 3, 29, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(207, 3, 31, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(208, 3, 32, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(209, 5, 1, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(210, 5, 3, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(211, 5, 4, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(212, 5, 5, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(213, 5, 7, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(214, 5, 8, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(215, 5, 9, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(216, 5, 11, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(217, 5, 12, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(218, 5, 13, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(219, 5, 15, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(220, 5, 16, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(221, 5, 17, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(222, 5, 19, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(223, 5, 20, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(224, 5, 21, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(225, 5, 23, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(226, 5, 24, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(227, 5, 25, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(228, 5, 27, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(229, 5, 28, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(230, 5, 29, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(231, 5, 31, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(232, 5, 32, 2, 1250.00, NULL, 1, NULL, NULL, NULL),
(233, 8, 1, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(234, 8, 3, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(235, 8, 4, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(236, 8, 5, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(237, 8, 7, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(238, 8, 8, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(239, 8, 9, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(240, 8, 11, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(241, 8, 12, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(242, 8, 13, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(243, 8, 15, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(244, 8, 16, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(245, 8, 17, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(246, 8, 19, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(247, 8, 20, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(248, 8, 21, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(249, 8, 23, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(250, 8, 24, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(251, 8, 25, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(252, 8, 27, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(253, 8, 28, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(254, 8, 29, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(255, 8, 31, 2, 1400.00, NULL, 1, NULL, NULL, NULL),
(256, 8, 32, 2, 1400.00, NULL, 1, NULL, NULL, NULL);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
-- Indexes for table `seat_book`
--
ALTER TABLE `seat_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_book_details`
--
ALTER TABLE `seat_book_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_type`
--
ALTER TABLE `seat_type`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `seat_book`
--
ALTER TABLE `seat_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seat_book_details`
--
ALTER TABLE `seat_book_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seat_type`
--
ALTER TABLE `seat_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vehicle_seat_type`
--
ALTER TABLE `vehicle_seat_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
