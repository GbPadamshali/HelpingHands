-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 10:46 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helping_hands`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiting_doctor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiting_date` date NOT NULL,
  `visiting_from` time NOT NULL,
  `visiting_to` time NOT NULL,
  `diseases` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `hospital_id`, `appointment_id`, `patient_id`, `patient_name`, `visiting_doctor`, `visiting_date`, `visiting_from`, `visiting_to`, `diseases`, `remark`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '001', '1', 'Testing Patient', 'Test Doctor', '2019-03-27', '16:00:00', '17:00:00', 'Cold', 'Testing Remark....', 'PENDING', '2019-03-19 09:38:59', '2019-03-27 13:01:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `hospital_id`, `department`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'Account Department', 'It organise hospital accounts and other stuffs.', '2019-03-07 03:15:02', '2019-03-08 22:42:52', NULL),
(2, '1', 'Laboratory', 'All laboratory regarding stuffs are here.', '2019-03-07 03:17:25', '2019-03-07 03:46:54', NULL),
(3, '1', 'Pharmacy', 'All Pharmacy related activities are managed here.', '2019-03-08 22:44:16', '2019-03-08 22:44:16', NULL),
(4, '1', 'Pharmacy', 'All Pharmacy related activities are managed here.', '2019-03-08 22:44:37', '2019-03-08 22:44:55', '2019-03-08 22:44:55'),
(5, '1', 'Pharmacy', 'All Pharmacy related activities are managed here.', '2019-03-09 00:28:05', '2019-03-09 00:28:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joining_date` date NOT NULL,
  `qualifiaction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialization` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `hospital_id`, `first_name`, `last_name`, `email`, `birthdate`, `gender`, `joining_date`, `qualifiaction`, `specialization`, `experience`, `department_id`, `image_name`, `image_path`, `address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'TEST DOCTOR', 'User', 'test@gmail.com', '2019-12-30', 'on', '2018-12-31', 'MBBS', 'GENERAL', '1 YEAR', 'OPD', '15519666105356477-kawasaki-wallpaper.jpg', 'images/uploaded_images/doctors/15519666105356477-kawasaki-wallpaper.jpg', 'Testing Address.', '2019-03-05 12:35:07', '2019-03-07 08:20:11', NULL),
(2, '1', 'Testing', 'User', 'test@gmail.com', '2019-12-31', 'on', '2018-12-31', 'MBBS', 'GENERAL', '1 YEAR', '1', 'abc.jpg', 'xampp', '', '2019-03-06 01:55:24', '2019-03-06 01:55:24', NULL),
(3, '1', 'Smit', 'Ray', 'smitray@gmail.com', '1997-01-02', 'on', '2018-01-01', 'MBBS', 'GENERAL', '1 YEAR', '1', '1551862853171047-Iron_Man-motivational-quote-748x421.jpg', 'images/uploaded_images/doctors1551862853171047-Iron_Man-motivational-quote-748x421.jpg', '', '2019-03-06 03:30:54', '2019-03-07 01:58:16', NULL),
(4, '1', 'sg l', 'k jk', 'abc@gmail.com', '2010-12-01', 'on', '2018-12-30', 'MBBS', 'GENERAL', '1 YEAR', '1', '1551863655487376.jpg', 'images/uploaded_images/doctors1551863655487376.jpg', 'regrhtr', '2019-03-06 03:44:16', '2019-03-06 03:44:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facility` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `hospital_id`, `facility`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'Testing Facilities', 'Testing Description.', '2019-03-20 06:26:26', '2019-03-20 06:28:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_line` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `user_id`, `reg_no`, `name`, `email`, `contact_no`, `tag_line`, `description`, `type`, `image_name`, `image_path`, `banner_name`, `banner_path`, `logo_name`, `logo_path`, `address`, `landmark`, `area`, `city`, `state`, `country`, `pincode`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'HOS1', 'Testing Hospital', 'testinghos@gmail.com', '8524569513', 'Youngest Hospital ever', 'First Hospital of this project.', 'Multispeciality', 'hos1.JPG', 'images/uploaded_images/hospital/hos1.JPG', 'ban1.jpg', 'images/uploaded_images/hospital/ban1.jpg', 'logo1.png', 'images/uploaded_images/hospital/logo1.png', 'Testing Address', 'landmark', 'Testing Area', 'Ahmedabad', 'Gujarat', 'India', 382415, 'hospital/1', '2019-03-12 22:00:00', '2019-03-12 22:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hospital_reports`
--

CREATE TABLE `hospital_reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issued_on` date NOT NULL,
  `supervisor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospital_reports`
--

INSERT INTO `hospital_reports` (`id`, `hospital_id`, `patient_id`, `patient_name`, `report_name`, `report_type`, `issued_on`, `supervisor_name`, `file_name`, `file_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 1, 'Testing Patient', 'Testing Reports', 'Blood Report', '2019-03-01', 'Testing Supervisor', 'C:\\xampp\\tmp\\php6861.tmp', 'hospital_reports/uploaded_reports/1552753090testing.txt', '2019-03-16 16:18:10', '2019-03-16 16:26:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_02_15_053339_create_user_details_table', 3),
(5, '2019_03_02_071622_create_doctors_table', 4),
(6, '2019_03_02_082223_create_departments_table', 5),
(7, '2019_03_03_142046_create_roles_table', 6),
(8, '2019_03_08_111704_create_staff_table', 7),
(10, '2019_03_11_153905_create_hospital_reports_table', 8),
(11, '2019_03_12_114409_create_up_coming_events_table', 9),
(13, '2019_02_15_040728_create_hospitals_table', 10),
(14, '2019_03_17_170038_create_rooms_table', 11),
(16, '2019_03_17_235311_create_patients_table', 12),
(17, '2019_03_19_130406_create_appointments_table', 13),
(18, '2019_03_19_151318_create_facilities_table', 14),
(19, '2019_03_20_120920_create_services_table', 15),
(20, '2019_03_20_130826_add_column_to_appointments', 16);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(10) UNSIGNED NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allergies` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'None',
  `diseases` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'None',
  `medical_history` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `hospital_id`, `first_name`, `last_name`, `email`, `mobile`, `blood_group`, `allergies`, `diseases`, `medical_history`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'Testing', 'Patient', 'testpatient1@gmail.com', '9876543210', 'B+', 'Dust', NULL, 'None.', '2019-03-19 07:14:29', '2019-03-19 07:17:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `hospital_id`, `role`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'Ward Boy', 'Ward Boy.', '2019-03-08 23:12:50', '2019-03-08 23:13:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allocation_from` datetime NOT NULL,
  `allocation_to` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `hospital_id`, `patient_id`, `patient_name`, `room_no`, `room_type`, `allocation_from`, `allocation_to`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', 'Testing Patient', '101', 'Semi-Deluxe Room', '2019-03-02 12:00:00', NULL, '2019-03-17 12:07:13', '2019-03-17 15:26:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `hospital_id`, `service`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'Testing Service', 'Description.', '2019-03-20 07:22:29', '2019-03-20 07:27:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_role` tinyint(4) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `marital_status` tinyint(4) NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `joining_date` date NOT NULL,
  `left_date` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `hospital_id`, `first_name`, `last_name`, `email`, `mobile`, `staff_role`, `birthdate`, `gender`, `marital_status`, `qualification`, `experience`, `address`, `joining_date`, `left_date`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'Testing', 'Nurse', 'nurse1@gmail.com', '1234567890', 1, '1998-12-05', 1, 4, 'Nursing', '1 YEAR', 'Testing Address', '2018-12-01', NULL, 1, '2019-03-10 06:44:01', '2019-03-10 07:07:45', NULL),
(2, '1', 'Testing', 'Pharmacist', 'pharmacist1@gmail.com', '9876543210', 2, '1989-05-03', 1, 1, 'Pharmacy', '1 YEAR', 'Testing Address', '2018-11-30', NULL, 1, '2019-03-10 07:31:15', '2019-03-10 13:10:05', NULL),
(3, '1', 'Testing', 'Receptionist', 'receptionist1@gmail.com', '0987654321', 3, '1997-01-01', 2, 2, 'HR COURCE', '1 YEAR', 'Testing Address', '2018-01-01', NULL, 1, '2019-03-10 15:59:44', '2019-03-10 16:00:18', NULL),
(4, '1', 'Testing', 'Sweeper', 'sweeper1@gmail.com', '9518476230', 4, '1978-03-12', 1, 1, 'SSC', '1 YEAR', 'Testing Address', '2018-01-03', NULL, 1, '2019-03-10 16:14:09', '2019-03-10 16:14:40', NULL),
(5, '1', 'Testing', 'Technician', 'technician1@gmail.com', '9898986565', 5, '1988-08-22', 2, 1, 'ITI', '2 YEARS', 'Testing Address.', '2017-03-03', NULL, 1, '2019-03-10 17:14:34', '2019-03-10 18:48:02', NULL),
(6, '1', 'Testing', 'Wardboy', 'wardboy1@gmail.com', '1234567890', 6, '1974-08-16', 1, 1, 'BSC', '9 YEARS', 'Testing Address', '2011-04-15', NULL, 1, '2019-03-10 19:04:34', '2019-03-10 19:06:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `up_coming_events`
--

CREATE TABLE `up_coming_events` (
  `id` int(10) UNSIGNED NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `banner_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `up_coming_events`
--

INSERT INTO `up_coming_events` (`id`, `hospital_id`, `event_name`, `event_type`, `event_date`, `banner_name`, `banner_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'Testing Event', 'Campaign', '2019-03-01', '1552419305487376.jpg', 'images/uploaded_images/upcoming_events_banner/1552419305487376.jpg', '2019-03-12 08:10:57', '2019-03-17 17:23:45', NULL),
(2, '1', 'Testing Event 1', 'Campaign', '2019-09-16', '1552379949487339.jpg', 'images/uploaded_images/upcoming_events_banner/1552379949487339.jpg', '2019-03-12 08:39:10', '2019-03-12 08:39:10', NULL),
(3, '1', 'Testing Event By Hospital', 'Blood Campaign', '2019-01-02', '1552844361Comics-Iron-man-3-background-desktop.jpg', 'images/uploaded_images/upcoming_events_banner/1552844361Comics-Iron-man-3-background-desktop.jpg', '2019-03-17 17:39:21', '2019-03-17 17:39:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@gmail.com', '9898989898', '$2y$10$5cKlXZbvl2/8LKqWdhUzMO2bZEF197Tj2pDj5LJ6xIFzLXpdSlIHq', 'ADMIN', 'aLSXS0u7DYXPWpmSZt8NuJRijlxa2V4sdRU24pCx51O2AMPQ7zkI1U6Unqef', '2019-02-14 04:36:56', '2019-02-14 04:36:56'),
(2, 'Urvi', 'uapatel@gmail.com', '9898986565', '$2y$12$EvYhuntSXB29C80dPJBKtOxtdJXo28noRJDx4aLhrRob3./v.9EB2', 'HOSPITAL', NULL, '2019-02-15 01:13:17', '2019-02-15 01:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` tinyint(4) NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_reports`
--
ALTER TABLE `hospital_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `up_coming_events`
--
ALTER TABLE `up_coming_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospital_reports`
--
ALTER TABLE `hospital_reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `up_coming_events`
--
ALTER TABLE `up_coming_events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
