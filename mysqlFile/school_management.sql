-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 06:38 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `classitems`
--

CREATE TABLE `classitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `container_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_student` int(11) NOT NULL,
  `type` enum('weekdays','weekend') COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classitems`
--

INSERT INTO `classitems` (`id`, `name`, `start_date`, `end_date`, `start_time`, `end_time`, `day`, `container_color`, `max_student`, `type`, `price`, `code`, `room_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'Java Tutorial for Complete Beginners', '2023-04-17', '2024-04-30', '11:00:00', '19:00:00', 'Monday, Tuesday, Thursday', '#e7cab1', 23, 'weekdays', '3335200', 'JAVA', 1, 3, '2023-08-22 22:13:05', '2023-08-22 22:13:05'),
(2, 'Java Tutorial for Complete Beginners', '2023-05-08', '2023-09-15', '11:00:00', '16:00:00', 'Friday, Monday, Tuesday', '#5ea171', 25, 'weekdays', '525866', 'JAVA', 5, 2, '2023-08-22 22:13:05', '2023-08-22 22:13:05'),
(3, 'The Complete Python Bootcamp From Zero to Hero in Python', '2023-04-22', '2024-02-28', '11:00:00', '13:00:00', 'Friday, Monday, Tuesday', '#5f0be7', 30, 'weekdays', '3244518', 'THEC', 1, 1, '2023-08-22 22:13:05', '2023-08-22 22:13:05'),
(4, 'Java Tutorial for Complete Beginners', '2023-03-27', '2023-12-06', '08:00:00', '13:00:00', 'Monday, Tuesday, Thursday', '#a3bd7f', 26, 'weekdays', '851949', 'JAVA', 4, 2, '2023-08-22 22:13:05', '2023-08-22 22:13:05'),
(5, 'Java Tutorial for Complete Beginners', '2023-04-21', '2023-12-14', '12:00:00', '14:00:00', 'Friday, Monday, Tuesday', '#4fa085', 22, 'weekdays', '2067697', 'JAVA', 4, 2, '2023-08-22 22:13:05', '2023-08-22 22:13:05'),
(6, 'Complete 2023 Web', '2023-03-04', '2023-08-02', '10:00:00', '19:00:00', 'Friday, Monday, Tuesday', '#9654dc', 28, 'weekdays', '866699', 'COMP', 6, 1, '2023-08-22 22:13:05', '2023-08-22 22:13:05'),
(7, 'Laravel', '2023-08-23', '2023-10-23', '09:00:00', '17:00:00', 'Monday, Tuesday, Wednesday, Thursday, Friday', '#c51111', 50, 'weekdays', '500000', 'lara', 1, 1, '2023-08-22 22:24:06', '2023-08-22 22:24:06'),
(8, 'php', '2023-08-25', '2023-11-25', '09:36:00', '11:36:00', 'Tuesday, Wednesday, Thursday', '#7b3737', 30, 'weekdays', '1000000', 'php', 2, 4, '2023-08-24 20:37:15', '2023-08-24 20:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `classitem_students`
--

CREATE TABLE `classitem_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `classitem_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classitem_students`
--

INSERT INTO `classitem_students` (`id`, `classitem_id`, `student_id`, `created_at`, `updated_at`) VALUES
(1, 6, 19, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(2, 5, 11, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(3, 1, 12, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(4, 6, 15, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(5, 6, 14, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(6, 2, 20, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(7, 4, 9, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(8, 2, 16, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(9, 3, 9, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(10, 1, 9, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(11, 4, 7, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(12, 4, 16, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(13, 5, 17, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(14, 3, 9, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(15, 2, 7, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(16, 3, 8, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(17, 5, 16, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(18, 5, 11, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(19, 2, 19, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(20, 4, 15, '2023-08-22 22:13:06', '2023-08-22 22:13:06'),
(21, 7, 21, '2023-08-22 22:25:07', '2023-08-22 22:25:07'),
(22, 7, 25, '2023-08-22 22:43:17', '2023-08-22 22:43:17'),
(23, 7, 26, '2023-08-23 08:56:50', '2023-08-23 08:56:50'),
(24, 7, 27, '2023-08-23 22:14:32', '2023-08-23 22:14:32'),
(25, 7, 28, '2023-08-23 22:15:52', '2023-08-23 22:15:52'),
(26, 7, 29, '2023-08-23 22:53:49', '2023-08-23 22:53:49'),
(27, 7, 30, '2023-08-24 00:25:42', '2023-08-24 00:25:42'),
(28, 7, 31, '2023-08-24 19:25:36', '2023-08-24 19:25:36'),
(29, 7, 32, '2023-08-24 23:51:19', '2023-08-24 23:51:19'),
(30, 7, 33, '2023-08-24 23:56:12', '2023-08-24 23:56:12'),
(31, 3, 34, '2023-08-29 22:53:29', '2023-08-29 22:53:29'),
(32, 7, 35, '2023-08-30 22:12:06', '2023-08-30 22:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', '2023-08-22 22:13:02', '2023-08-22 22:13:02'),
(2, 'Software Development', '2023-08-22 22:13:02', '2023-08-22 22:13:02'),
(3, 'Data Science Fundamentals', '2023-08-22 22:13:02', '2023-08-22 22:13:02'),
(4, 'Machine Language', '2023-08-24 20:20:15', '2023-08-24 20:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_11_000000_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_07_08_070139_create_students_table', 1),
(7, '2023_07_08_070430_create_lecturers_table', 1),
(8, '2023_07_08_070522_create_courses_table', 1),
(9, '2023_07_08_070546_create_rooms_table', 1),
(10, '2023_07_11_080423_create_classitems_table', 1),
(11, '2023_07_25_033726_create_user_classitems_table', 1),
(12, '2023_07_25_033755_create_classitem_students_table', 1),
(13, '2023_07_25_080300_create_payments_table', 1);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fees` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` enum('paid','unpaid') COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` enum('cash','card','bank transfer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `classitem_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `fees`, `due_amount`, `payment_type`, `payment_method`, `classitem_id`, `student_id`, `created_at`, `updated_at`) VALUES
(1, '300000', '3700000', 'unpaid', 'cash', 2, 3, '2023-08-22 22:13:07', '2023-08-22 22:13:07'),
(2, '100000', '300000', 'unpaid', 'bank transfer', 3, 12, '2023-08-22 22:13:07', '2023-08-22 22:13:07'),
(3, '300000', '200000', 'unpaid', 'cash', 3, 5, '2023-08-22 22:13:07', '2023-08-22 22:13:07'),
(4, '100000', '300000', 'unpaid', 'cash', 5, 4, '2023-08-22 22:13:07', '2023-08-22 22:13:07'),
(5, '400000', '3600000', 'unpaid', 'card', 3, 18, '2023-08-22 22:13:07', '2023-08-22 22:13:07'),
(6, '300000', '200000', 'unpaid', 'card', 5, 18, '2023-08-22 22:13:07', '2023-08-22 22:13:07'),
(7, '300000', '100000', 'unpaid', 'cash', 4, 10, '2023-08-22 22:13:08', '2023-08-22 22:13:08'),
(8, '400000', '100000', 'unpaid', 'bank transfer', 4, 4, '2023-08-22 22:13:08', '2023-08-22 22:13:08'),
(9, '300000', '3700000', 'unpaid', 'card', 3, 10, '2023-08-22 22:13:08', '2023-08-22 22:13:08'),
(10, '400000', '0', 'paid', 'card', 6, 19, '2023-08-22 22:13:08', '2023-08-22 22:13:08'),
(11, '400000', '3600000', 'unpaid', 'card', 5, 3, '2023-08-22 22:13:08', '2023-08-22 22:13:08'),
(12, '300000', '100000', 'unpaid', 'bank transfer', 2, 6, '2023-08-22 22:13:08', '2023-08-22 22:13:08'),
(13, '100000', '3900000', 'unpaid', 'bank transfer', 6, 17, '2023-08-22 22:13:08', '2023-08-22 22:13:08'),
(14, '100000', '300000', 'unpaid', 'cash', 3, 19, '2023-08-22 22:13:08', '2023-08-22 22:13:08'),
(15, '300000', '100000', 'unpaid', 'cash', 4, 15, '2023-08-22 22:13:08', '2023-08-22 22:13:08'),
(16, '100000', '3900000', 'unpaid', 'bank transfer', 3, 12, '2023-08-22 22:13:08', '2023-08-22 22:13:08'),
(17, '100000', '300000', 'unpaid', 'card', 5, 8, '2023-08-22 22:13:08', '2023-08-22 22:13:08'),
(18, '300000', '200000', 'unpaid', 'card', 5, 11, '2023-08-22 22:13:08', '2023-08-22 22:13:08'),
(19, '100000', '3900000', 'unpaid', 'bank transfer', 4, 1, '2023-08-22 22:13:08', '2023-08-22 22:13:08'),
(20, '400000', '0', 'paid', 'card', 2, 13, '2023-08-22 22:13:08', '2023-08-22 22:13:08'),
(21, '500000', '400000', 'unpaid', 'bank transfer', 7, 21, '2023-08-22 22:25:07', '2023-08-22 22:25:07'),
(24, '500000', '350000', 'unpaid', 'cash', 7, 21, '2023-08-22 22:29:45', '2023-08-22 22:29:45'),
(25, '500000', '349999', 'unpaid', 'cash', 7, 21, '2023-08-22 22:32:09', '2023-08-22 22:32:09'),
(26, '500000', '349998', 'unpaid', 'cash', 7, 21, '2023-08-22 22:32:42', '2023-08-22 22:32:42'),
(27, '500000', '340000', 'unpaid', 'cash', 7, 21, '2023-08-22 22:33:50', '2023-08-22 22:33:50'),
(28, '500000', '339999', 'unpaid', 'cash', 7, 21, '2023-08-22 22:34:34', '2023-08-22 22:34:34'),
(29, '500000', '400000', 'unpaid', 'cash', 7, 25, '2023-08-22 22:43:17', '2023-08-22 22:43:17'),
(30, '500000', '399999', 'unpaid', 'cash', 7, 25, '2023-08-22 22:45:08', '2023-08-22 22:45:08'),
(31, '500000', '399998', 'unpaid', 'cash', 7, 25, '2023-08-22 22:50:42', '2023-08-22 22:50:42'),
(32, '500000', '398998', 'unpaid', 'cash', 7, 25, '2023-08-22 22:59:24', '2023-08-22 22:59:24'),
(33, '500000', '397998', 'unpaid', 'cash', 7, 25, '2023-08-22 23:00:25', '2023-08-22 23:00:25'),
(34, '500000', '395998', 'unpaid', 'bank transfer', 7, 25, '2023-08-22 23:00:47', '2023-08-22 23:00:47'),
(35, '500000', '395997', 'unpaid', 'cash', 7, 25, '2023-08-23 03:02:12', '2023-08-23 03:02:12'),
(36, '500000', '395996', 'unpaid', 'cash', 7, 25, '2023-08-23 03:03:25', '2023-08-23 03:03:25'),
(37, '500000', '339998', 'unpaid', 'cash', 7, 21, '2023-08-23 03:03:35', '2023-08-23 03:03:35'),
(38, '500000', '339987', 'unpaid', 'card', 7, 21, '2023-08-23 03:12:48', '2023-08-23 03:12:48'),
(39, '500000', '339986', 'unpaid', 'card', 7, 21, '2023-08-23 03:21:29', '2023-08-23 03:21:29'),
(40, '500000', '339985', 'unpaid', 'cash', 7, 21, '2023-08-23 03:23:40', '2023-08-23 03:23:40'),
(41, '500000', '339984', 'unpaid', 'card', 7, 21, '2023-08-23 03:25:07', '2023-08-23 03:25:07'),
(42, '500000', '339983', 'unpaid', 'cash', 7, 21, '2023-08-23 03:33:50', '2023-08-23 03:33:50'),
(43, '500000', '339982', 'unpaid', 'card', 7, 21, '2023-08-23 03:39:26', '2023-08-23 03:39:26'),
(44, '500000', '339981', 'unpaid', 'cash', 7, 21, '2023-08-23 03:40:25', '2023-08-23 03:40:25'),
(45, '500000', '339980', 'unpaid', 'card', 7, 21, '2023-08-23 03:47:20', '2023-08-23 03:47:20'),
(46, '500000', '339979', 'unpaid', 'cash', 7, 21, '2023-08-23 03:48:40', '2023-08-23 03:48:40'),
(47, '500000', '339978', 'unpaid', 'cash', 7, 21, '2023-08-23 03:51:03', '2023-08-23 03:51:03'),
(48, '500000', '339977', 'unpaid', 'cash', 7, 21, '2023-08-23 03:51:40', '2023-08-23 03:51:40'),
(49, '500000', '339977', 'unpaid', 'cash', 7, 21, '2023-08-23 08:15:05', '2023-08-23 08:15:05'),
(50, '500000', '339976', 'unpaid', 'cash', 7, 21, '2023-08-23 08:15:17', '2023-08-23 08:15:17'),
(51, '500000', '339975', 'unpaid', 'cash', 7, 21, '2023-08-23 08:35:32', '2023-08-23 08:35:32'),
(52, '500000', '339974', 'unpaid', 'cash', 7, 21, '2023-08-23 08:37:04', '2023-08-23 08:37:04'),
(53, '500000', '400000', 'unpaid', 'bank transfer', 7, 26, '2023-08-23 08:56:50', '2023-08-23 08:56:50'),
(54, '500000', '399999', 'unpaid', 'cash', 7, 26, '2023-08-23 09:40:03', '2023-08-23 09:40:03'),
(55, '500000', '399998', 'unpaid', 'cash', 7, 26, '2023-08-23 09:43:04', '2023-08-23 09:43:04'),
(56, '500000', '399997', 'unpaid', 'cash', 7, 26, '2023-08-23 09:45:38', '2023-08-23 09:45:38'),
(57, '500000', '399996', 'unpaid', 'cash', 7, 26, '2023-08-23 09:53:52', '2023-08-23 09:53:52'),
(58, '500000', '300000', 'unpaid', 'cash', 7, 26, '2023-08-23 19:29:57', '2023-08-23 19:29:57'),
(59, '500000', '299000', 'unpaid', 'bank transfer', 7, 26, '2023-08-23 19:59:14', '2023-08-23 19:59:14'),
(60, '500000', '338974', 'unpaid', 'cash', 7, 21, '2023-08-23 20:31:56', '2023-08-23 20:31:56'),
(61, '500000', '199004', 'unpaid', 'cash', 7, 26, '2023-08-23 20:33:29', '2023-08-23 20:33:29'),
(62, '500000', '199003', 'unpaid', 'card', 7, 26, '2023-08-23 20:33:44', '2023-08-23 20:33:44'),
(63, '500000', '499999', 'unpaid', 'cash', 7, 23, '2023-08-23 21:59:25', '2023-08-23 21:59:25'),
(64, '500000', '499998', 'unpaid', 'cash', 7, 23, '2023-08-23 22:00:17', '2023-08-23 22:00:17'),
(65, '500000', '499997', 'unpaid', 'cash', 7, 23, '2023-08-23 22:13:31', '2023-08-23 22:13:31'),
(66, '500000', '499999', 'unpaid', 'bank transfer', 7, 27, '2023-08-23 22:14:32', '2023-08-23 22:14:32'),
(67, '500000', '499999', 'unpaid', 'bank transfer', 7, 28, '2023-08-23 22:15:51', '2023-08-23 22:15:51'),
(68, '500000', '499998', 'unpaid', 'card', 7, 28, '2023-08-23 22:52:24', '2023-08-23 22:52:24'),
(69, '500000', '499999', 'unpaid', 'card', 7, 29, '2023-08-23 22:53:49', '2023-08-23 22:53:49'),
(70, '500000', '499998', 'unpaid', 'bank transfer', 7, 29, '2023-08-23 22:54:17', '2023-08-23 22:54:17'),
(71, '500000', '499996', 'unpaid', 'card', 7, 29, '2023-08-23 23:00:20', '2023-08-23 23:00:20'),
(72, '500000', '499995', 'unpaid', 'bank transfer', 7, 29, '2023-08-24 00:12:02', '2023-08-24 00:12:02'),
(73, '500000', '498995', 'unpaid', 'card', 7, 29, '2023-08-24 00:13:59', '2023-08-24 00:13:59'),
(74, '500000', '498994', 'unpaid', 'bank transfer', 7, 29, '2023-08-24 00:23:06', '2023-08-24 00:23:06'),
(75, '500000', '398994', 'unpaid', 'cash', 7, 29, '2023-08-24 00:23:31', '2023-08-24 00:23:31'),
(76, '500000', '397994', 'unpaid', 'bank transfer', 7, 29, '2023-08-24 00:24:18', '2023-08-24 00:24:18'),
(77, '500000', '499999', 'unpaid', 'bank transfer', 7, 30, '2023-08-24 00:25:41', '2023-08-24 00:25:41'),
(78, '500000', '499999', 'unpaid', 'card', 7, 31, '2023-08-24 19:25:36', '2023-08-24 19:25:36'),
(79, '3335200', '499998', 'unpaid', 'cash', 1, 31, '2023-08-24 19:27:44', '2023-08-24 19:27:44'),
(80, '2067697', '499997', 'unpaid', 'card', 5, 31, '2023-08-24 19:30:49', '2023-08-24 19:30:49'),
(81, '3335200', '499996', 'unpaid', 'cash', 1, 31, '2023-08-24 19:33:02', '2023-08-24 19:33:02'),
(82, '1000000', '498996', 'unpaid', 'cash', 8, 31, '2023-08-24 20:37:57', '2023-08-24 20:37:57'),
(83, '1000000', '497996', 'unpaid', 'cash', 8, 31, '2023-08-24 20:42:45', '2023-08-24 20:42:45'),
(84, '1000000', '497995', 'unpaid', 'card', 8, 31, '2023-08-24 20:53:29', '2023-08-24 20:53:29'),
(85, '1000000', '497994', 'unpaid', 'cash', 8, 31, '2023-08-24 21:22:50', '2023-08-24 21:22:50'),
(86, '1000000', '3899999', 'unpaid', 'card', 8, 1, '2023-08-24 21:23:51', '2023-08-24 21:23:51'),
(87, '1000000', '3899998', 'unpaid', 'card', 8, 1, '2023-08-24 21:32:38', '2023-08-24 21:32:38'),
(88, '1000000', '3899997', 'unpaid', 'card', 8, 1, '2023-08-24 21:33:01', '2023-08-24 21:33:01'),
(89, '1000000', '3899996', 'unpaid', 'card', 8, 1, '2023-08-24 21:37:45', '2023-08-24 21:37:45'),
(90, '1000000', '3599996', 'unpaid', 'cash', 8, 1, '2023-08-24 21:38:30', '2023-08-24 21:38:30'),
(91, '1000000', '3598996', 'unpaid', 'card', 8, 1, '2023-08-24 21:41:42', '2023-08-24 21:41:42'),
(92, '1000000', '3598995', 'unpaid', 'card', 8, 1, '2023-08-24 21:43:23', '2023-08-24 21:43:23'),
(93, '1000000', '3598994', 'unpaid', 'card', 8, 1, '2023-08-24 21:45:15', '2023-08-24 21:45:15'),
(94, '1000000', '3598993', 'unpaid', 'card', 8, 1, '2023-08-24 21:46:19', '2023-08-24 21:46:19'),
(95, '1000000', '3598992', 'unpaid', 'card', 8, 1, '2023-08-24 21:47:06', '2023-08-24 21:47:06'),
(96, '1000000', '3598991', 'unpaid', 'card', 8, 1, '2023-08-24 22:24:39', '2023-08-24 22:24:39'),
(97, '500000', '497993', 'unpaid', 'card', 7, 31, '2023-08-24 22:25:38', '2023-08-24 22:25:38'),
(98, '1000000', '497992', 'unpaid', 'card', 8, 31, '2023-08-24 22:25:59', '2023-08-24 22:25:59'),
(99, '1000000', '497991', 'unpaid', 'card', 8, 31, '2023-08-24 22:26:45', '2023-08-24 22:26:45'),
(100, '1000000', '497991', 'unpaid', 'cash', 8, 31, '2023-08-24 22:27:28', '2023-08-24 22:27:28'),
(101, '1000000', '497990', 'unpaid', 'card', 8, 31, '2023-08-24 22:27:39', '2023-08-24 22:27:39'),
(102, '1000000', '497989', 'unpaid', 'card', 8, 31, '2023-08-24 22:39:01', '2023-08-24 22:39:01'),
(103, '1000000', '497988', 'unpaid', 'card', 8, 31, '2023-08-24 22:39:34', '2023-08-24 22:39:34'),
(104, '1000000', '497986', 'unpaid', 'card', 8, 31, '2023-08-24 22:39:56', '2023-08-24 22:39:56'),
(105, '1000000', '497985', 'unpaid', 'card', 8, 31, '2023-08-24 22:58:29', '2023-08-24 22:58:29'),
(106, '1000000', '497984', 'unpaid', 'cash', 8, 31, '2023-08-24 23:40:49', '2023-08-24 23:40:49'),
(107, '1000000', '447984', 'unpaid', 'cash', 8, 31, '2023-08-24 23:43:14', '2023-08-24 23:43:14'),
(108, '500000', '447983', 'unpaid', 'cash', 7, 31, '2023-08-24 23:43:34', '2023-08-24 23:43:34'),
(109, '1000000', '347983', 'unpaid', 'cash', 8, 31, '2023-08-24 23:48:16', '2023-08-24 23:48:16'),
(110, '1000000', '999999', 'unpaid', 'cash', 8, 2, '2023-08-24 23:50:36', '2023-08-24 23:50:36'),
(111, '500000', '499999', 'unpaid', 'card', 7, 32, '2023-08-24 23:51:19', '2023-08-24 23:51:19'),
(112, '500000', '499998', 'unpaid', 'card', 7, 32, '2023-08-24 23:51:36', '2023-08-24 23:51:36'),
(113, '500000', '499999', 'unpaid', 'card', 7, 33, '2023-08-24 23:56:12', '2023-08-24 23:56:12'),
(114, '1000000', '499998', 'unpaid', 'cash', 8, 33, '2023-08-24 23:58:52', '2023-08-24 23:58:52'),
(115, '1000000', '499997', 'unpaid', 'cash', 8, 33, '2023-08-25 03:37:55', '2023-08-25 03:37:55'),
(116, '1000000', '499996', 'unpaid', 'cash', 8, 33, '2023-08-29 00:29:41', '2023-08-29 00:29:41'),
(117, '3244518', '2844518', 'unpaid', 'card', 3, 34, '2023-08-29 22:53:29', '2023-08-29 22:53:29'),
(118, '500000', '99998', 'unpaid', 'cash', 7, 32, '2023-08-29 22:56:15', '2023-08-29 22:56:15'),
(119, '500000', '-300002', 'unpaid', 'cash', 7, 32, '2023-08-29 22:56:31', '2023-08-29 22:56:31'),
(120, '500000', '-700002', 'unpaid', 'cash', 7, 32, '2023-08-29 23:02:14', '2023-08-29 23:02:14'),
(121, '3244518', '2844517', 'unpaid', 'card', 3, 34, '2023-08-30 20:24:29', '2023-08-30 20:24:29'),
(122, '500000', '499999', 'unpaid', 'cash', 7, 35, '2023-08-30 22:12:06', '2023-08-30 22:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-08-22 22:13:02', '2023-08-22 22:13:02'),
(2, 'Lecturer', '2023-08-22 22:13:03', '2023-08-22 22:13:03');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Room1', '2023-08-22 22:13:02', '2023-08-22 22:13:02'),
(2, 'Room2', '2023-08-22 22:13:02', '2023-08-22 22:13:02'),
(3, 'Room6', '2023-08-22 22:13:02', '2023-08-22 22:13:02'),
(4, 'Room4', '2023-08-22 22:13:02', '2023-08-22 22:13:02'),
(5, 'Room5', '2023-08-22 22:13:02', '2023-08-22 22:13:02'),
(6, 'Room3', '2023-08-22 22:13:02', '2023-08-22 22:13:02'),
(7, 'Room 88', '2023-09-22 02:13:05', '2023-09-22 02:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Torrance Marks IV', 'beier.elvie@example.org', '+1-520-403-7936', '53603 Geraldine Green\nWest Sandra, MO 88612-6370', '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(2, 'Lorna O\'Connell', 'bergstrom.charlene@example.com', '+1-636-864-4601', '2195 Windler Field\nEast Connorville, CO 27628', '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(3, 'Malvina Rowe', 'bahringer.aurelia@example.org', '332.521.4239', '3173 Parisian Fall Suite 601\nLemkeshire, HI 27975', '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(4, 'Miss Lillie Maggio III', 'audra58@example.net', '(310) 709-8432', '389 Liza Stream\nPinkieview, KY 90669-5661', '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(5, 'Hailee Jast', 'hmitchell@example.org', '(351) 699-6117', '67989 Carli Brooks Apt. 289\nMadelinechester, MT 67414-9004', '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(6, 'Kyle Lind', 'joshua.kautzer@example.net', '(740) 812-8765', '469 Marquise Neck\nWest Heidi, PA 97265', '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(7, 'Santino Friesen', 'cterry@example.net', '+1-380-675-1288', '917 Rohan Shores Suite 334\nCassinport, NM 46689-6972', '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(8, 'Tanner Lowe', 'hailie56@example.com', '(352) 872-5043', '56832 Ciara Islands\nEmiefort, OH 66607-9970', '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(9, 'Maritza Sporer V', 'jeromy61@example.com', '+18308168097', '9004 Modesto Club Suite 043\nEast Dejuan, DC 12467', '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(10, 'Reyna Bosco', 'ohermiston@example.org', '682-425-4450', '6358 Quigley Islands Suite 532\nWest Josefina, ID 09922', '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(11, 'Aleen Rowe', 'stoltenberg.tremaine@example.com', '+1 (786) 435-2501', '30113 Berneice Manors\nErnserchester, ID 46526', '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(12, 'Zaria Gutkowski', 'cesar34@example.com', '1-918-793-8486', '359 Lemke Prairie\nMedhurstside, OR 98810-7585', '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(13, 'Lexi Moore', 'roel.steuber@example.com', '915.682.0213', '403 Botsford Club\nWest Alfonzoberg, OH 69090-3563', '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(14, 'Delfina Block', 'king.vesta@example.org', '1-253-692-7785', '93887 Phyllis Divide Apt. 734\nLake Jaylen, AR 00501', '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(15, 'Pauline Franecki Jr.', 'gorczany.clemmie@example.net', '(740) 465-8861', '6818 Kasandra Extensions\nNorth Tiaview, MO 99938', '2023-08-22 22:13:05', '2023-08-22 22:13:05'),
(16, 'Taurean Reichel', 'ngutmann@example.net', '+1.551.988.1620', '461 Kuhn Centers Suite 104\nDollyfurt, ND 60313-1625', '2023-08-22 22:13:05', '2023-08-22 22:13:05'),
(17, 'Ole Dare', 'rachel15@example.net', '628.648.3483', '140 Jalyn Parks\nSouth Raquelside, AR 61102-0597', '2023-08-22 22:13:05', '2023-08-22 22:13:05'),
(18, 'Judd Funk PhD', 'skiles.jared@example.com', '+1 (864) 693-2840', '891 Schiller Vista Apt. 514\nHerzogton, OH 22943', '2023-08-22 22:13:05', '2023-08-22 22:13:05'),
(19, 'Cornelius Littel', 'luettgen.sophia@example.org', '1-845-868-8041', '76730 Heber Road Suite 057\nNorth Norbertmouth, MS 95871-6556', '2023-08-22 22:13:05', '2023-08-22 22:13:05'),
(20, 'Ms. Rhea McKenzie', 'jjakubowski@example.com', '+1-762-664-4247', '2138 Lang Island\nNew Mallory, ME 91259-3236', '2023-08-22 22:13:05', '2023-08-22 22:13:05'),
(21, 'Mg One', 'mgone@gmail.com', '123456', 'Mg OneMg OneMg OneMg OneMg OneMg One', '2023-08-22 22:25:07', '2023-08-22 22:25:07'),
(22, 'mg two', 'mgtwo@gmail.com', '123', 'mg twomg twomg twomg twomg two', '2023-08-22 22:36:08', '2023-08-22 22:36:08'),
(23, 'Mg three', 'mgthree@gmail.com', '123', 'Mg threeMg threeMg threeMg threeMg threeMg three', '2023-08-22 22:38:05', '2023-08-22 22:38:05'),
(24, 'mgfour', 'mgfour@gmail.com', '678678', 'mgfourmgfourmgfourmgfourmgfour', '2023-08-22 22:42:17', '2023-08-22 22:42:17'),
(25, 'mgfive', 'mgfive@gmail.com', '11516', 'mgfive@gmail.commgfive@gmaimgfive@gmail.commgfive@gmaimgfive@gmail.commgfive@gmaimgfive@gmail.commgfive@gmaimgfive@gmail.commgfive@gmaimgfive@gmail.commgfive@gmai', '2023-08-22 22:43:16', '2023-08-23 01:51:18'),
(26, 'mgsix', 'mgsix@gmail.com', '12345', 'mgsixmgsixmgsixmgsix', '2023-08-23 08:56:50', '2023-08-23 08:56:50'),
(27, 'MaOne', 'maone@gmail.com', '123', 'MaOneMaOneMaOneMaOne', '2023-08-23 22:14:31', '2023-08-23 22:14:31'),
(28, 'Ma Two', 'matwo@gmail.com', '12345', 'Ma TwoMa TwoMa TwoMa TwoMa Two', '2023-08-23 22:15:51', '2023-08-23 22:15:51'),
(29, 'TOe TeT', 'tt@gmail.com', '123', 'TOe TeTTOe TeTTOe TeTTOe TeT', '2023-08-23 22:53:49', '2023-08-23 22:53:49'),
(30, 'Gaga', 'ga@gmail.com', '123456', 'GaGaGaGaGaGaGaGaGaGa', '2023-08-24 00:25:41', '2023-08-24 00:25:41'),
(31, 'tuborg', 'tuborg@gmail.com', '123', 'tuborgtuborgtuborgtuborgtuborgtuborgtuborgtuborg', '2023-08-24 19:25:36', '2023-08-24 19:25:36'),
(32, 'uone', 'uone@gmail.com', '123', 'uoneeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '2023-08-24 23:51:19', '2023-08-24 23:51:19'),
(33, 'utwo', 'utwo@gmail.com', '123', 'utwoutwoutwoutwo', '2023-08-24 23:56:12', '2023-08-24 23:56:12'),
(34, 'Laravel', 'a@gmail.com', '1858656565', 'DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD', '2023-08-29 22:53:29', '2023-08-29 22:53:29'),
(35, 'dawone', 'dawone@gmail.com', '123456', 'dawone@gmail.comdawone@gmail.comdawone@gmail.com', '2023-08-30 22:12:04', '2023-08-30 22:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role_id`, `created_at`, `updated_at`) VALUES
(2, 'Miss Cali Ankunding', 'ekilback@example.net', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '122ZY9Vy7V', 1, '2023-08-22 22:13:03', '2023-08-22 22:13:03'),
(3, 'Lonnie Mann', 'will.audreanne@example.com', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YT3376lWdg', 2, '2023-08-22 22:13:03', '2023-08-22 22:13:03'),
(4, 'Gaston Hansen', 'lziemann@example.net', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nmW2m8YGz5', 2, '2023-08-22 22:13:03', '2023-08-22 22:13:03'),
(5, 'Jaida Johnston', 'dustin17@example.net', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Uk8wMS4FjX', 1, '2023-08-22 22:13:03', '2023-08-22 22:13:03'),
(6, 'Dr. Ole Denesik MD', 'larson.victoria@example.org', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Mogc8jikaN', 1, '2023-08-22 22:13:03', '2023-08-22 22:13:03'),
(7, 'Brandi Terry', 'weissnat.melvin@example.com', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cYNJ3gAoID', 1, '2023-08-22 22:13:03', '2023-08-22 22:13:03'),
(8, 'Hertha Ryan', 'katelynn.mraz@example.org', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LWqBuEzVlM', 1, '2023-08-22 22:13:03', '2023-08-22 22:13:03'),
(9, 'Toy Beahan I', 'strosin.pinkie@example.com', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qT6hnxh35q', 1, '2023-08-22 22:13:03', '2023-08-22 22:13:03'),
(10, 'Alda Huels', 'okon.jordon@example.org', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'M4oykECid9', 1, '2023-08-22 22:13:03', '2023-08-22 22:13:03'),
(11, 'Rory Hoppe', 'amie89@example.org', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'opBMXCAsa7', 1, '2023-08-22 22:13:03', '2023-08-22 22:13:03'),
(12, 'Ezekiel Cruickshank DDS', 'yundt.enos@example.org', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'g83NMh9Rjl', 1, '2023-08-22 22:13:03', '2023-08-22 22:13:03'),
(13, 'Guillermo Kunde', 'oceane42@example.com', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zrgz2l2LRd', 1, '2023-08-22 22:13:03', '2023-08-22 22:13:03'),
(14, 'Jazmyn Prohaska', 'crona.trycia@example.com', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NDjac6KKHd', 1, '2023-08-22 22:13:03', '2023-08-22 22:13:03'),
(15, 'Breana Gaylord', 'myrtle50@example.net', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Qb7ASx0v8L', 1, '2023-08-22 22:13:03', '2023-08-22 22:13:03'),
(16, 'Hope Orn', 'shayna.little@example.com', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wAvs74nJZR', 1, '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(17, 'Fernando Tremblay Sr.', 'aullrich@example.com', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'x6AKxUoH1B', 2, '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(18, 'Mr. Deangelo Prosacco PhD', 'mikayla62@example.com', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DqoElDIQUV', 2, '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(19, 'Rubye Crona', 'lemke.charity@example.org', '2023-08-22 22:13:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AlOxzcBuP8', 2, '2023-08-22 22:13:04', '2023-08-22 22:13:04'),
(22, 'a', 'a@gmail.com', NULL, '$2y$10$yhQPgaVaD44bwyeoIcC4YuQSX7m1S1ArBfuIXx.2YSUV164QG3/7q', NULL, 1, '2023-08-22 22:21:13', '2023-08-29 03:42:09'),
(23, 'tt', 'tt@gmail.com', NULL, '$2y$10$VbKFORYBm5HyL6oC0YS8iOYggVQnUQ6MdPjaebNj3eEn50gHbxjdm', NULL, 1, '2023-08-24 20:19:44', '2023-08-30 01:44:09'),
(24, 'b', 'b@gmail.com', NULL, '$2y$10$zA1jHcAUH3E5MCktMaUxSOCyW3PYC5xBMipiUw95FQuIW5.YcpbGa', NULL, 1, '2023-08-27 20:25:45', '2023-08-27 20:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_classitems`
--

CREATE TABLE `user_classitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `classitem_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_classitems`
--

INSERT INTO `user_classitems` (`id`, `user_id`, `classitem_id`, `created_at`, `updated_at`) VALUES
(1, 12, 1, '2023-08-22 22:13:07', '2023-08-22 22:13:07'),
(2, 11, 2, '2023-08-22 22:13:07', '2023-08-22 22:13:07'),
(3, 6, 1, '2023-08-22 22:13:07', '2023-08-22 22:13:07'),
(4, 9, 4, '2023-08-22 22:13:07', '2023-08-22 22:13:07'),
(5, 7, 6, '2023-08-22 22:13:07', '2023-08-22 22:13:07'),
(6, 11, 2, '2023-08-22 22:13:07', '2023-08-22 22:13:07'),
(7, 5, 5, '2023-08-22 22:13:07', '2023-08-22 22:13:07'),
(8, 8, 3, '2023-08-22 22:13:07', '2023-08-22 22:13:07'),
(9, 16, 5, '2023-08-22 22:13:07', '2023-08-22 22:13:07'),
(11, 17, 7, '2023-08-22 22:24:07', '2023-08-22 22:24:07'),
(12, 3, 8, '2023-08-24 20:37:15', '2023-08-24 20:37:15'),
(13, 19, 8, '2023-08-24 20:37:15', '2023-08-24 20:37:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classitems`
--
ALTER TABLE `classitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classitems_room_id_foreign` (`room_id`),
  ADD KEY `classitems_course_id_foreign` (`course_id`);

--
-- Indexes for table `classitem_students`
--
ALTER TABLE `classitem_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classitem_students_classitem_id_foreign` (`classitem_id`),
  ADD KEY `classitem_students_student_id_foreign` (`student_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_classitem_id_foreign` (`classitem_id`),
  ADD KEY `payments_student_id_foreign` (`student_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_classitems`
--
ALTER TABLE `user_classitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_classitems_user_id_foreign` (`user_id`),
  ADD KEY `user_classitems_classitem_id_foreign` (`classitem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classitems`
--
ALTER TABLE `classitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `classitem_students`
--
ALTER TABLE `classitem_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_classitems`
--
ALTER TABLE `user_classitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classitems`
--
ALTER TABLE `classitems`
  ADD CONSTRAINT `classitems_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `classitems_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `classitem_students`
--
ALTER TABLE `classitem_students`
  ADD CONSTRAINT `classitem_students_classitem_id_foreign` FOREIGN KEY (`classitem_id`) REFERENCES `classitems` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `classitem_students_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_classitem_id_foreign` FOREIGN KEY (`classitem_id`) REFERENCES `classitems` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_classitems`
--
ALTER TABLE `user_classitems`
  ADD CONSTRAINT `user_classitems_classitem_id_foreign` FOREIGN KEY (`classitem_id`) REFERENCES `classitems` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_classitems_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
