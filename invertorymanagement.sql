-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 02:23 PM
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
-- Database: `invertorymanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'PHONE', 1, 8, 8, '2022-05-26 15:48:22', '2022-05-28 17:34:14'),
(4, 'MILITARY SWORD', 1, 8, 8, '2022-05-26 16:25:52', '2022-06-01 10:22:48'),
(6, 'Laptop', 1, 8, NULL, '2022-06-15 13:41:24', NULL),
(7, 'Rifle', 1, 8, 8, '2022-06-21 10:02:05', '2022-06-28 10:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2022_02_24_092641_create_sessions_table', 1),
(10, '2022_05_06_114550_create_categories_table', 1),
(11, '2022_05_10_102010_create_items_table', 1),
(12, '2022_05_12_100738_create_forms_table', 1),
(13, '2022_05_21_234345_create_permission_tables', 2),
(14, '2022_05_25_100735_create_suppliers_table', 3),
(16, '2022_05_25_175009_create_personnels_table', 4),
(17, '2022_05_26_140820_create_units_table', 5),
(18, '2022_05_26_153306_create_categories_table', 6),
(19, '2022_05_26_202118_create_ranks_table', 7),
(20, '2022_05_27_161614_create_personnels_table', 8),
(21, '2022_05_27_192804_create_products_table', 9),
(22, '2022_05_28_153519_create_products_table', 10),
(23, '2022_05_28_201305_create_purchases_table', 11),
(24, '2022_06_01_123616_create_invoices_table', 12),
(25, '2022_06_01_124307_create_invoice_details_table', 12),
(26, '2022_06_01_124523_create_payments_table', 12),
(27, '2022_06_01_124604_create_payment_details_table', 12),
(48, '2022_06_01_124119_create_invoice__details_table', 13),
(61, '2022_06_20_100148_create_productreturns_table', 14),
(62, '2022_06_20_102059_create_product_replenishes_table', 14),
(63, '2022_06_20_112320_create_product_issues_table', 14),
(64, '2022_06_22_105707_create_product_issuedetails_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(4, 'App\\Models\\User', 8),
(5, 'App\\Models\\User', 3),
(6, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `group_name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.view', 'dashboard', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(2, 'dashboard.edit', 'dashboard', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(3, 'blog.create', 'blog', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(4, 'blog.view', 'blog', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(5, 'blog.edit', 'blog', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(6, 'blog.delete', 'blog', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(7, 'blog.approve', 'blog', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(8, 'admin.create', 'admin', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(9, 'admin.view', 'admin', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(10, 'admin.edit', 'admin', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(11, 'admin.delete', 'admin', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(12, 'admin.approve', 'admin', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(13, 'role.create', 'role', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(14, 'role.view', 'role', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(15, 'role.edit', 'role', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(16, 'role.delete', 'role', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(17, 'role.approve', 'role', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(18, 'profile.view', 'profile', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(19, 'profile.edit', 'profile', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personnels`
--

CREATE TABLE `personnels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_id` int(11) NOT NULL,
  `rank_id` int(11) NOT NULL,
  `svcnumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `othernames` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personnel_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personnels`
--

INSERT INTO `personnels` (`id`, `unit_id`, `rank_id`, `svcnumber`, `surname`, `othernames`, `mobile_no`, `email`, `gender`, `arm`, `personnel_image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 14, '1992', 'Boakye', 'Okyere Prince', '0244145151', 'nanakeen85@gmail.com', 'Male', 'Army', 'upload/personnel/1734000875320013.jpg', 1, 8, NULL, '2022-05-27 17:21:39', NULL),
(4, 1, 13, 'GH4429', 'Appianing', 'Enock', '055312178', 'AppianingEnock@gmail.com', 'Male', 'Army', 'upload/personnel/1734008086212764.jpeg', 1, 8, NULL, '2022-05-27 19:16:16', NULL),
(5, 1, 14, '202045', 'Tijjani', 'Mohammed', '233546312171', 'tijjani@gmail.com', 'Male', 'Army', 'upload/personnel/1736966289612337.jpg', 1, 8, NULL, '2022-06-29 10:55:39', '2022-06-29 10:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `productreturns`
--

CREATE TABLE `productreturns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `personel_id` int(11) DEFAULT NULL,
  `date_return` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'GOTA', 1, 8, NULL, '2022-05-28 17:29:11', '2022-06-21 09:02:35'),
(4, 4, 'Sword', 1, 8, NULL, '2022-06-01 10:23:19', '2022-06-02 09:09:23'),
(7, 7, 'AK47', 1, 8, NULL, '2022-06-21 10:10:31', NULL),
(8, 7, 'M-16', 1, 8, NULL, '2022-06-21 10:56:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_issuedetails`
--

CREATE TABLE `product_issuedetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT current_timestamp(),
  `invoice_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `personnel_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_date` date DEFAULT current_timestamp(),
  `issuing_qty` double DEFAULT NULL,
  `stat` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_issuedetails`
--

INSERT INTO `product_issuedetails` (`id`, `date`, `invoice_id`, `category_id`, `personnel_id`, `product_id`, `remarks`, `return_date`, `issuing_qty`, `stat`, `created_at`, `updated_at`) VALUES
(2, '0000-00-00', 10, 1, 1, 1, 'R', '0000-00-00', 1, 0, '2022-07-01 11:05:05', '2022-07-01 11:05:05'),
(3, '0000-00-00', 14, 4, 1, 4, 'R', '0000-00-00', 1, 0, '2022-07-01 11:15:11', '2022-07-01 11:15:11'),
(4, '0000-00-00', 17, 4, 4, 4, 'R', '0000-00-00', 1, 0, '2022-07-01 11:41:47', '2022-07-01 11:41:47'),
(5, '0000-00-00', 18, 1, 5, 1, 'N', '0000-00-00', 2, 0, '2022-07-01 11:43:40', '2022-07-01 11:43:40'),
(6, '0000-00-00', 20, 1, 4, 1, 'R', '0000-00-00', 1, 0, '2022-07-01 11:53:12', '2022-07-01 11:53:12'),
(8, '0000-00-00', 24, 7, 4, 7, 'R', '0000-00-00', 3, 0, '2022-07-01 12:13:19', '2022-07-01 12:13:19'),
(9, '1970-01-01', 26, 7, 5, 7, 'R', '1970-01-01', 1, 0, '2022-07-01 13:50:54', '2022-07-01 13:50:54'),
(10, '1970-01-01', 27, 4, 4, 4, 'R', '1970-01-01', 1, 0, '2022-07-01 13:53:51', '2022-07-01 13:53:51'),
(11, '1970-01-01', 28, 1, 5, 1, 'R', '1970-01-01', 1, 0, '2022-07-01 14:19:17', '2022-07-01 14:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `product_issues`
--

CREATE TABLE `product_issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personnel_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `stat` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Pending, 1=Approved',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_issues`
--

INSERT INTO `product_issues` (`id`, `invoice_no`, `personnel_id`, `date`, `remarks`, `return_date`, `stat`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(10, '2', 1, '1970-01-01', 'Returnable', '1970-01-01', 0, 8, NULL, '2022-07-01 11:05:05', '2022-07-01 11:05:05'),
(24, '3', 4, '0000-00-00', 'Returnable', '0000-00-00', 0, 8, NULL, '2022-07-01 12:13:19', '2022-07-01 12:13:19'),
(26, '4', 5, '0000-00-00', 'Returnable', '0000-00-00', 0, 8, NULL, '2022-07-01 13:50:54', '2022-07-01 13:50:54'),
(27, '5', 4, '0000-00-00', 'Returnable', '0000-00-00', 0, 8, NULL, '2022-07-01 13:53:51', '2022-07-01 13:53:51'),
(28, '6', 5, NULL, 'Returnable', NULL, 0, 8, NULL, '2022-07-01 14:19:17', '2022-07-01 14:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `product_replenishes`
--

CREATE TABLE `product_replenishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `replenish_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stat` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Pending, 1=Approved',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_replenishes`
--

INSERT INTO `product_replenishes` (`id`, `product_id`, `replenish_date`, `quantity`, `remarks`, `stat`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 7, '2022-07-01', '200', 'Returnable', 0, 8, NULL, '2022-07-01 09:36:04', '2022-07-01 09:36:04'),
(4, 8, '2022-07-01', '200', 'Returnable', 0, 8, NULL, '2022-07-01 13:00:07', '2022-07-01 13:00:07'),
(5, 4, '2022-07-04', '100', 'Returnable', 0, 8, NULL, '2022-07-04 11:54:42', '2022-07-04 11:54:42');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchase_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buying_qty` double NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Pending, 1=Approved',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `supplier_id`, `category_id`, `product_id`, `purchase_no`, `date`, `description`, `buying_qty`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 8, 1, 1, 'GAF-1234', '2022-06-01', 'Gota', 1, 1, 8, NULL, '2022-06-01 09:25:37', '2022-06-01 10:19:52'),
(2, 8, 4, 4, 'GAF-1246', '2022-06-01', 'Sword', 3, 1, 8, NULL, '2022-06-01 10:25:04', '2022-06-02 09:09:23'),
(3, 8, 1, 1, 'hgs223', '2022-06-04', 'Gota', 1, 1, 8, NULL, '2022-06-04 17:45:35', '2022-06-04 18:02:39'),
(4, 8, 1, 1, 'GH1234', '2022-06-20', '1', 1, 1, 8, NULL, '2022-06-20 12:01:20', '2022-06-21 09:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE `ranks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `supplier_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`id`, `name`, `status`, `supplier_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, 'Private', 1, 9, 8, NULL, '2022-05-26 21:20:57', NULL),
(5, 'Lance-Corporal', 1, 8, 8, NULL, '2022-05-26 21:21:35', NULL),
(6, 'Corporal', 1, 8, 8, NULL, '2022-05-26 21:21:50', NULL),
(7, 'Sergent', 1, 8, 8, NULL, '2022-05-26 21:22:07', NULL),
(8, 'Staff.Sergent', 1, 8, 8, NULL, '2022-05-26 21:22:26', NULL),
(9, 'WOII', 1, 8, 8, NULL, '2022-05-26 21:23:03', NULL),
(10, 'WOI', 1, 8, 8, NULL, '2022-05-26 21:23:26', NULL),
(11, 'Chief WO', 1, 8, 8, NULL, '2022-05-26 21:23:59', NULL),
(12, '2nd LT', 1, 8, 8, NULL, '2022-05-26 21:25:43', NULL),
(13, 'Lieutenant', 1, 8, 8, NULL, '2022-05-26 21:26:17', NULL),
(14, 'Captain', 1, 8, 8, NULL, '2022-05-26 21:26:34', NULL),
(15, 'Major', 1, 8, 8, NULL, '2022-05-26 21:26:45', NULL),
(16, 'LT.Colonel', 1, 8, 8, NULL, '2022-05-26 21:27:22', NULL),
(17, 'Colonel', 1, 8, 8, NULL, '2022-05-26 21:27:40', NULL),
(18, 'Bri.Gen', 1, 8, 8, NULL, '2022-05-26 21:28:00', NULL),
(19, 'Major.Gen', 1, 8, 8, NULL, '2022-05-26 21:28:18', NULL),
(20, 'Lt.Gen', 1, 8, 8, NULL, '2022-05-26 21:28:33', NULL),
(21, 'General', 1, 8, 8, NULL, '2022-05-26 21:28:53', NULL),
(22, 'Field Marshal', 1, 8, 8, NULL, '2022-05-26 21:29:09', NULL),
(23, 'Able Seaman Class II', 1, 8, 8, NULL, '2022-05-26 21:32:40', NULL),
(24, 'Able Seaman Class I', 1, 8, 8, NULL, '2022-05-26 21:33:49', NULL),
(25, 'Leading Seaman', 1, 8, 8, NULL, '2022-05-26 21:34:03', NULL),
(26, 'Petty Officer Class II', 1, 8, 8, NULL, '2022-05-27 14:48:43', NULL),
(27, 'Petty Officer Class I', 1, 8, 8, NULL, '2022-05-27 14:49:16', NULL),
(28, 'Chief Petty Officer Class II', 1, 8, 8, NULL, '2022-05-27 14:49:38', NULL),
(29, 'Chief Petty Officer Class I', 1, 8, 8, NULL, '2022-05-27 14:49:56', NULL),
(30, 'Fleet Chief Petty Officer', 1, 8, 8, NULL, '2022-05-27 14:50:16', NULL),
(31, 'Master Chief Petty Officer', 1, 8, 8, NULL, '2022-05-27 14:50:46', NULL),
(32, 'Acting Sub-Lieutenant', 1, 8, 8, NULL, '2022-05-27 14:54:27', NULL),
(33, 'Sub-Lieutenant', 1, 8, 8, NULL, '2022-05-27 14:54:58', NULL),
(34, 'Lieutenant', 1, 8, 8, NULL, '2022-05-27 14:55:15', NULL),
(35, 'Lieutenant Commander', 1, 8, 8, NULL, '2022-05-27 14:55:37', NULL),
(36, 'Commander', 1, 8, 8, NULL, '2022-05-27 14:55:56', NULL),
(38, 'Commodore', 1, 8, 8, NULL, '2022-05-27 14:57:09', NULL),
(39, 'Rear-Admiral', 1, 8, 8, NULL, '2022-05-27 14:57:28', NULL),
(40, 'Vice-Admiral', 1, 8, 8, NULL, '2022-05-27 14:57:46', NULL),
(41, 'Admiral', 1, 8, 8, NULL, '2022-05-27 14:58:10', NULL),
(42, 'Aircraftman II', 1, 8, 8, NULL, '2022-05-27 15:00:59', NULL),
(43, 'Aircraftman I', 1, 8, 8, NULL, '2022-05-27 15:01:24', NULL),
(44, 'Leading Aircraftman', 1, 8, 8, NULL, '2022-05-27 15:01:44', NULL),
(45, 'Corporal', 1, 8, 8, NULL, '2022-05-27 15:02:16', NULL),
(46, 'Sergeant', 1, 8, 8, NULL, '2022-05-27 15:02:31', NULL),
(47, 'Flight Sergeant', 1, 10, 8, 8, '2022-05-27 15:02:55', '2022-06-28 12:34:53'),
(48, 'Pilot Officer', 1, 10, 8, 8, '2022-05-27 15:03:41', '2022-06-28 12:34:41'),
(49, 'Flying Officer', 1, 10, 8, 8, '2022-05-27 15:04:03', '2022-06-28 12:34:29'),
(50, 'Flight Lieutenant', 1, 10, 8, 8, '2022-05-27 15:04:26', '2022-06-28 12:34:17'),
(51, 'Squadron Leader', 1, 10, 8, 8, '2022-05-27 15:04:49', '2022-06-28 12:34:00'),
(52, 'Wing Commander', 1, 10, 8, 8, '2022-05-27 15:05:16', '2022-06-28 12:33:43'),
(53, 'Group Captain', 1, 10, 8, 8, '2022-05-27 15:05:36', '2022-06-28 12:33:30'),
(54, 'Air Commodore', 1, 10, 8, 8, '2022-05-27 15:05:58', '2022-06-28 12:33:09'),
(55, 'Air Vice Marshal', 1, 10, 8, 8, '2022-05-27 15:06:18', '2022-06-28 12:32:57'),
(56, 'Air Marshal', 1, 10, 8, 8, '2022-05-27 15:06:34', '2022-06-28 12:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(4, 'superadmin', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(5, 'admin', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(6, 'user', 'web', '2022-05-22 12:05:55', '2022-05-22 12:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 4),
(1, 5),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4),
(10, 4),
(11, 4),
(12, 4),
(13, 4),
(14, 4),
(15, 4),
(16, 4),
(17, 4),
(18, 4),
(19, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0a1Fno02PrN2fUBLQsK0jYiJR8RDF99rEfiPET3g', 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiaXBEVmFwVGwxcVI2V09GUkxKZExMN01hdHVlMVVsQVFJOVAwMG9IUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9JdGVtL2FkZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjg7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkRHdseWZXUC43eURPRzYwOWM0cndnT3hzcnZqV29hdy9PL0NKaG00dGV2ZU44RUwvL2NsL1MiO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkRHdseWZXUC43eURPRzYwOWM0cndnT3hzcnZqV29hdy9PL0NKaG00dGV2ZU44RUwvL2NsL1MiO30=', 1656936194);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `mobile_no`, `email`, `address`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(8, 'Ghana Army', '2345673456', 'GAF@gmail.com', 'Burma Camp', 1, 8, 8, '2022-05-28 17:25:54', '2022-06-16 11:04:15'),
(9, 'Ghana Navy', '2334578558554', 'ghananavy@gmail.com', 'Burma Camp', 1, 8, NULL, '2022-05-31 12:27:34', NULL),
(10, 'Ghana Airforce', '0124751587421', 'ghairforce@gmail.com', 'Burma Camp GHQ', 1, 8, 8, '2022-05-31 12:28:23', '2022-05-31 12:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'GHQ(DIT)', 1, 8, 8, '2022-05-26 14:57:53', '2022-05-26 15:12:39'),
(3, 'PAYREGIMENT', 1, 8, NULL, '2022-05-26 15:15:39', NULL),
(5, 'Signal', 1, 8, NULL, '2022-05-27 17:33:17', NULL),
(6, 'DFC', 1, 8, NULL, '2022-06-21 11:06:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$tbJf6s7j8gg3aN7lexSYWON5Va2zhzqu/6vO2J4aN8rC38yXTgSQW', NULL, NULL, NULL, NULL, NULL, '2022-05-21 23:38:10', '2022-05-21 23:38:10'),
(3, 'Isaac Totimeh', 'IsaacTotimeh@gmail.com', NULL, '$2y$10$StFyMCw1K1FvHaarR6k89.W0pX6RRGT5jjQMDAyO0SwCtckMrqrnm', NULL, NULL, NULL, NULL, NULL, '2022-05-22 12:05:55', '2022-05-22 12:05:55'),
(8, 'SuperAdmin', 'Superadmin@admin.com', NULL, '$2y$10$DwlyfWP.7yDOG609c4rwgOxsrvjWoaw/O/CJhm4teveN8EL//cl/S', NULL, NULL, NULL, NULL, NULL, '2022-05-23 09:50:49', '2022-05-23 09:50:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productreturns`
--
ALTER TABLE `productreturns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_issuedetails`
--
ALTER TABLE `product_issuedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_issues`
--
ALTER TABLE `product_issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_replenishes`
--
ALTER TABLE `product_replenishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `productreturns`
--
ALTER TABLE `productreturns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_issuedetails`
--
ALTER TABLE `product_issuedetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_issues`
--
ALTER TABLE `product_issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_replenishes`
--
ALTER TABLE `product_replenishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ranks`
--
ALTER TABLE `ranks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
