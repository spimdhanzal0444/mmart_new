-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2021 at 11:48 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `unique_identifier` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `version` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `activated` int(1) NOT NULL DEFAULT 1,
  `image` varchar(1000) COLLATE utf32_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `addons`
--

INSERT INTO `addons` (`id`, `name`, `unique_identifier`, `version`, `activated`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Offline Payment', 'offline_payment', '1.3', 1, 'offline_banner.jpg', '2021-06-21 22:35:31', '2021-06-21 22:35:31'),
(2, 'OTP', 'otp_system', '1.4', 1, 'otp_system.jpg', '2021-06-21 22:49:03', '2021-06-21 22:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `adminledgers`
--

CREATE TABLE `adminledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `particulation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit` double(20,2) DEFAULT NULL,
  `debit` double(20,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bank_withdraws`
--

CREATE TABLE `bank_withdraws` (
  `id` int(11) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `withdrawBy` enum('Cheque','Online') NOT NULL,
  `notes` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `business_settings`
--

CREATE TABLE `business_settings` (
  `id` int(11) NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `business_settings`
--

INSERT INTO `business_settings` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'home_default_currency', '27', '2018-10-16 01:35:52', '2021-06-16 11:40:03'),
(2, 'system_default_currency', '27', '2018-10-16 01:36:58', '2021-06-16 11:40:03'),
(3, 'currency_format', '1', '2018-10-17 03:01:59', '2018-10-17 03:01:59'),
(4, 'symbol_format', '1', '2018-10-17 03:01:59', '2019-01-20 02:10:55'),
(5, 'no_of_decimals', '2', '2018-10-17 03:01:59', '2021-08-19 05:04:58'),
(6, 'product_activation', '1', '2018-10-28 01:38:37', '2019-02-04 01:11:41'),
(7, 'vendor_system_activation', '0', '2018-10-28 07:44:16', '2021-08-08 18:54:06'),
(8, 'show_vendors', '1', '2018-10-28 07:44:47', '2019-02-04 01:11:13'),
(9, 'paypal_payment', '0', '2018-10-28 07:45:16', '2019-01-31 05:09:10'),
(10, 'stripe_payment', '0', '2018-10-28 07:45:47', '2018-11-14 01:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `creatives`
--

CREATE TABLE `creatives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_normal_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bold_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item1_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item1_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item1_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item2_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item2_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item2_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item3_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item3_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item3_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item4_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item4_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item4_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `creatives`
--

INSERT INTO `creatives` (`id`, `image`, `title_normal_text`, `title_bold_text`, `item1_icon`, `item1_title`, `item1_description`, `item2_icon`, `item2_title`, `item2_description`, `item3_icon`, `item3_title`, `item3_description`, `item4_icon`, `item4_title`, `item4_description`, `created_at`, `updated_at`) VALUES
(1, '140631182.jpg', 'HOW', 'TO START', 'icon icon-basic-mixer2', 'GET START', 'Sed ut perspiciatis unde omnis iste nat eror acus antium que', 'icon icon-basic-lightbulb', 'BUY PACKAGE', 'Sed ut perspiciatis unde omnis iste nat eror acus antium que', 'icon icon-basic-helm', 'START EARNING', 'Sed ut perspiciatis unde omnis iste nat eror acus antium que', 'icon icon-basic-settings', 'WITHDRAW', 'Sed ut perspiciatis unde omnis iste nat eror acus antium que', NULL, '2021-12-23 23:27:58');

-- --------------------------------------------------------

--
-- Table structure for table `customerledgers`
--

CREATE TABLE `customerledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `com_cus_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `particulation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit` double(20,2) DEFAULT NULL,
  `debit` double(20,2) DEFAULT NULL,
  `initial_balance` double(20,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customerledgers`
--

INSERT INTO `customerledgers` (`id`, `customer_id`, `agent_id`, `admin_id`, `com_cus_id`, `date`, `particulation`, `reason`, `credit`, `debit`, `initial_balance`, `created_at`, `updated_at`) VALUES
(4, 6919, NULL, NULL, NULL, '2021-12-26', 'Initial Balance', 'initial_balance', 1.00, 0.00, 100.00, '2021-12-26 07:37:05', '2021-12-26 07:37:05'),
(5, 6919, NULL, NULL, NULL, '2021-12-26', 'Membership purchased', 'account_activation', 1000.00, 0.00, NULL, '2021-12-26 07:54:38', '2021-12-26 07:54:38'),
(6, 6919, NULL, NULL, NULL, '2021-12-26', 'test', 'test', 0.00, 550.00, NULL, '2021-12-26 08:00:36', '2021-12-26 08:00:36'),
(7, 6919, NULL, NULL, NULL, NULL, 'test 2', 'test 2', 1000.00, 0.00, NULL, '2021-12-26 08:01:53', '2021-12-26 08:01:53'),
(8, 6920, NULL, NULL, NULL, '2021-12-26', 'Initial Balance', 'initial_balance', 0.00, 0.00, NULL, '2021-12-26 03:27:31', '2021-12-26 03:27:31'),
(9, 6922, NULL, NULL, NULL, '2021-12-26', 'Initial Balance', 'initial_balance', 0.00, 0.00, NULL, '2021-12-26 03:36:09', '2021-12-26 03:36:09'),
(10, 6925, NULL, NULL, NULL, '2021-12-26', 'Initial Balance', 'initial_balance', 0.00, 0.00, NULL, '2021-12-26 03:42:48', '2021-12-26 03:42:48'),
(11, 6926, NULL, NULL, NULL, '2021-12-26', 'Initial Balance', 'initial_balance', 0.00, 0.00, NULL, '2021-12-26 03:53:33', '2021-12-26 03:53:33'),
(12, 6926, NULL, NULL, NULL, '2021-12-26', 'Initial Balance', 'initial_balance', 0.00, 0.00, NULL, '2021-12-26 03:53:33', '2021-12-26 03:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `customerpayments`
--

CREATE TABLE `customerpayments` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `trans_id` int(11) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `amount` double(20,2) DEFAULT NULL,
  `admin_note` varchar(255) DEFAULT NULL,
  `status` enum('0','1','2') NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerpayments`
--

INSERT INTO `customerpayments` (`id`, `customer_id`, `date`, `type`, `number`, `trans_id`, `package_id`, `amount`, `admin_note`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-08-22', 'nagad', '01763809027', 4455, 2, 1000.00, NULL, '2', '2021-08-22 04:15:43', '2021-12-21 04:27:10'),
(2, 2, '2021-08-22', 'nagad', '01763809027', 9999999, 2, 1000.00, NULL, '1', '2021-08-22 04:18:52', '2021-08-22 04:19:20'),
(3, 3, '2021-12-03', 'nagad', '01763809027', 8888, 2, 1000.00, NULL, '0', '2021-08-22 04:21:18', '2021-12-21 08:06:12'),
(4, 4, '2021-08-22', 'bkash', '01871375168', 9749, 2, 1000.00, NULL, '0', '2021-08-22 04:30:35', '2021-12-21 08:06:44'),
(5, 5, '2021-12-16', 'bkash', '03', 0, 2, 1000.00, NULL, '2', '2021-08-22 04:37:53', '2021-12-21 06:25:09'),
(4208, 6916, '2021-12-25', 'bkash', '000', 101010, 1, 66.00, NULL, '0', '2021-12-25 00:25:14', '2021-12-25 00:25:14'),
(4209, 6916, '2021-12-25', 'wallet', NULL, NULL, 1, 66.00, NULL, '1', '2021-12-25 00:30:02', '2021-12-25 00:30:02'),
(4210, 6916, '2021-12-25', 'rocket', '01933690444', 101010, 1, 66.00, NULL, '0', '2021-12-25 00:45:39', '2021-12-25 00:45:39'),
(4211, 6916, '2021-12-25', 'nagad', '01933690444', 101010, 1, 66.00, 'valo lage nai tore', '2', '2021-12-25 00:46:16', '2021-12-25 00:47:35'),
(4212, 6916, '2021-12-25', 'rocket', '019333333333', 101010, 1, 66.00, NULL, '2', '2021-12-25 04:22:25', '2021-12-25 04:23:12');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-08-22 04:18:11', '2021-08-22 04:18:11'),
(2, 2, '2021-08-22 04:20:36', '2021-08-22 04:20:36'),
(3, 3, '2021-08-22 04:29:56', '2021-08-22 04:29:56'),
(4, 4, '2021-08-22 04:36:57', '2021-08-22 04:36:57'),
(5, 5, '2021-08-22 04:38:22', '2021-08-22 04:38:22'),
(6916, 6919, '2021-12-24 21:03:13', '2021-12-24 21:03:13'),
(6917, 6920, '2021-12-26 03:27:31', '2021-12-26 03:27:31'),
(6918, 6921, '2021-12-26 03:31:18', '2021-12-26 03:31:18'),
(6919, 6922, '2021-12-26 03:36:09', '2021-12-26 03:36:09'),
(6920, 6924, '2021-12-26 03:41:33', '2021-12-26 03:41:33'),
(6921, 6925, '2021-12-26 03:42:48', '2021-12-26 03:42:48'),
(6922, 6926, '2021-12-26 03:53:33', '2021-12-26 03:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `customerwithdraws`
--

CREATE TABLE `customerwithdraws` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `req_amount` double(20,2) NOT NULL,
  `withdraw_method` varchar(20) NOT NULL,
  `withdraw_to_number` varchar(20) NOT NULL,
  `trans_id` varchar(50) NOT NULL,
  `withdraw_notes` longtext DEFAULT NULL,
  `admin_notes` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `approved_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerwithdraws`
--

INSERT INTO `customerwithdraws` (`id`, `customer_id`, `req_amount`, `withdraw_method`, `withdraw_to_number`, `trans_id`, `withdraw_notes`, `admin_notes`, `status`, `approved_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 4, 1700.00, 'nagad', '01304995161', '', NULL, NULL, 1, 1, NULL, '2021-08-23 16:49:25', '2021-12-21 14:25:34'),
(2, 2, 2100.00, 'nagad', '01906785065', '', NULL, NULL, 2, 1, NULL, '2021-08-23 17:37:43', '2021-12-21 14:57:37'),
(3, 3, 135.00, 'nagad', '01816808376', 'Hhhc', 'চেয়ারম্যান সাহেব কেমন আছেন?', 'Vvbvv', 0, 1, NULL, '2021-08-23 18:21:19', '2021-12-22 04:27:03'),
(4, 1, 1100.00, 'nagad', '01979928010', 'Ffggg', '4514', 'Ggjdd', 1, 1, NULL, '2021-08-23 19:04:00', '2021-12-21 14:25:47'),
(5, 5, 150.00, 'bkash', '01740499391', '101010', NULL, 'test Approved', 0, 1, NULL, '2021-08-24 01:18:53', '2021-12-22 04:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `customer_packages`
--

CREATE TABLE `customer_packages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` double(20,2) DEFAULT NULL,
  `product_upload` int(11) DEFAULT NULL,
  `logo` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_icon` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`social_icon`)),
  `social_link` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`social_link`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `copyright`, `social_icon`, `social_link`, `created_at`, `updated_at`) VALUES
(1, '© HASWELL 2020', '[\"fa fa-facebook\",\"fa fa-behance\"]', '[\"https:\\/\\/www.facebook.com\\/\",\"https:\\/\\/1.envato.market\\/a1gQR\"]', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `generale_settings`
--

CREATE TABLE `generale_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sitetitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `metatitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `metadescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `metakeyword` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `metaauthor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_normal_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_normal_text2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_bold_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generale_settings`
--

INSERT INTO `generale_settings` (`id`, `logo`, `sitetitle`, `metatitle`, `metadescription`, `metakeyword`, `metaauthor`, `currency`, `favicon`, `banner_normal_text`, `banner_normal_text2`, `banner_bold_text`, `banner_image`, `created_at`, `updated_at`) VALUES
(1, 'logo-footer_logo_1639328698.png', 'developer version', 'HTML5 Template', 'Haswell - Responsive HTML5 Template', 'HTML5', 'ABCD', '৳', 'favicon_favicon_1639328698.png', 'IMAGINATION', 'WILL TAKE YOU', 'EVERYWHERE', 'blurbg7-t_banner_image_1639328698.jpg', NULL, '2021-12-13 01:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `helplines`
--

CREATE TABLE `helplines` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `home_contacts`
--

CREATE TABLE `home_contacts` (
  `id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `address_title` varchar(100) NOT NULL,
  `address_icon` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `email_icon` varchar(100) NOT NULL,
  `call_text` varchar(100) NOT NULL,
  `number_one` varchar(100) NOT NULL,
  `number_two` varchar(100) NOT NULL,
  `call_icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_contacts`
--

INSERT INTO `home_contacts` (`id`, `address`, `address_title`, `address_icon`, `email`, `email_address`, `email_icon`, `call_text`, `number_one`, `number_two`, `call_icon`) VALUES
(1, 'ADDRESS', '790 FOLSOM AVE, SAN FRANCISCO', 'icon icon-basic-map', 'EMAIL', 'INFO@HASWELL.COM', 'icon icon-basic-mail', 'CALL US', '1-800-312-212,', '1-800-311-101', 'icon icon-basic-smartphone');

-- --------------------------------------------------------

--
-- Table structure for table `managementledgers`
--

CREATE TABLE `managementledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `particulation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit` double(20,2) NOT NULL,
  `debit` double(20,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2021_12_11_041158_create_generale_settings_table', 1),
(15, '2021_12_11_064814_create_creatives_table', 1),
(16, '2021_12_12_175810_create_ranks_table', 2),
(17, '2021_12_12_194633_create_footers_table', 3),
(18, '2021_12_14_085016_create_referrel_infos_table', 4),
(19, '2021_12_13_085016_create_referrel_infos_table', 5),
(20, '2021_12_14_091342_create_packages_table', 6),
(21, '2021_12_14_092411_create_referrel_infos_table', 7),
(22, '2021_12_14_095328_create_adminledgers_table', 8),
(23, '2021_12_14_102631_create_customerledgers_table', 9),
(24, '2021_12_14_103815_create_reservedledgers_table', 10),
(25, '2021_12_14_111028_create_ranks_table', 11),
(26, '2021_12_14_111249_create_user_ranks_table', 12),
(27, '2021_12_14_124607_create_managementledgers_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `description`, `type`, `created_at`, `updated_at`) VALUES
(4, 'App is being the best app in Bangladesh ever for network marketers.', 'Apps Notice', '2021-11-21 12:36:17', '2021-11-21 12:36:17'),
(5, 'আপনাদের বকেয়া উইথড্র খুব দ্রুত পরিশোধ করা হবে। আপনাদের সহযোগিতা আমাদের কাম্য।', 'জরুরি বিজ্ঞপ্তিঃ', '2021-12-03 13:24:08', '2021-12-03 13:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `guest_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `shipping_address` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `delivery_status` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'pending',
  `payment_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manual_payment` int(1) NOT NULL DEFAULT 0,
  `manual_payment_data` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_status` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'unpaid',
  `payment_details` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `grand_total` double(20,2) DEFAULT NULL,
  `coupon_discount` double(20,2) NOT NULL DEFAULT 0.00,
  `gift_discount` double(20,2) NOT NULL,
  `code` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` int(20) NOT NULL,
  `viewed` int(1) NOT NULL DEFAULT 0,
  `delivery_viewed` int(1) NOT NULL DEFAULT 1,
  `payment_status_viewed` int(1) DEFAULT 1,
  `commission_calculated` int(11) NOT NULL DEFAULT 0,
  `min_pay_status` int(11) DEFAULT NULL,
  `min_amount` double DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `guest_id`, `seller_id`, `shipping_address`, `delivery_status`, `payment_type`, `manual_payment`, `manual_payment_data`, `payment_status`, `payment_details`, `grand_total`, `coupon_discount`, `gift_discount`, `code`, `date`, `viewed`, `delivery_viewed`, `payment_status_viewed`, `commission_calculated`, `min_pay_status`, `min_amount`, `created_at`, `updated_at`) VALUES
(1, 231, NULL, 1, '{\"id\":25,\"user_id\":231,\"address\":\"Dhaka 1212 , Gulshan 1 ,nuton bazar 100fit\",\"country\":\"Bangladesh\",\"city\":\"Gulshan  1212\",\"postal_code\":\"1212\",\"phone\":\"01706316653\",\"set_default\":0,\"created_at\":\"2021-08-26 10:22:29\",\"updated_at\":\"2021-08-26 10:22:29\",\"name\":\"SEMON MOHAMMAD SOKAL\",\"email\":null}', 'delivered', 'cash_on_delivery', 0, NULL, 'paid', NULL, 600.00, 0.00, 0.00, '20210826-10225310', 1629951773, 1, 0, 0, 1, NULL, NULL, '2021-08-26 04:22:53', '2021-09-02 10:45:11'),
(3, 6034, NULL, 1, '{\"id\":135,\"user_id\":6034,\"address\":\"Vill: Sahebrampur,\",\"country\":\"Bangladesh\",\"city\":\"kalkini\",\"postal_code\":\"7929\",\"phone\":\"01739437329\",\"set_default\":0,\"created_at\":\"2021-11-08 19:04:34\",\"updated_at\":\"2021-11-08 19:04:34\",\"name\":\"Milon Howlader\",\"email\":\"milonmahmud1610@gmail.com\"}', 'pending', 'cash_on_delivery', 0, NULL, 'unpaid', NULL, 600.00, 0.00, 0.00, '20211108-19053139', 1636376731, 0, 1, 1, 0, NULL, NULL, '2021-11-08 13:05:31', '2021-11-08 13:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `variation` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double(20,2) DEFAULT NULL,
  `tax` double(20,2) NOT NULL DEFAULT 0.00,
  `shipping_cost` double(20,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) DEFAULT NULL,
  `payment_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unpaid',
  `delivery_status` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'pending',
  `shipping_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pickup_point_id` int(11) DEFAULT NULL,
  `product_referral_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `seller_id`, `product_id`, `variation`, `price`, `tax`, `shipping_cost`, `quantity`, `payment_status`, `delivery_status`, `shipping_type`, `pickup_point_id`, `product_referral_code`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 129, '', 600.00, 0.00, 0.00, 1, 'paid', 'delivered', 'home_delivery', NULL, NULL, '2021-08-26 04:22:53', '2021-08-30 19:25:38'),
(3, 3, 1, 129, '', 600.00, 0.00, 0.00, 1, 'unpaid', 'pending', 'home_delivery', NULL, NULL, '2021-11-08 13:05:31', '2021-11-08 13:05:31');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(33) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_type` varchar(33) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `referrel_income` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `validity` int(11) NOT NULL,
  `wlimit` int(11) NOT NULL,
  `tlimit` int(11) NOT NULL,
  `wmin` int(11) NOT NULL,
  `tmin` int(11) NOT NULL,
  `package_banner` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_income_first` int(11) DEFAULT NULL,
  `g_income_second` int(11) DEFAULT NULL,
  `g_income_third` int(11) DEFAULT NULL,
  `g_income_fourth` int(11) DEFAULT NULL,
  `g_income_fifth` int(11) DEFAULT NULL,
  `g_income_six` int(11) DEFAULT NULL,
  `g_income_seven` int(11) DEFAULT NULL,
  `g_income_eight` int(11) DEFAULT NULL,
  `g_income_nine` int(11) DEFAULT NULL,
  `g_income_ten` int(11) DEFAULT NULL,
  `g_income_eleven` int(11) DEFAULT NULL,
  `g_income_twelve` int(11) DEFAULT NULL,
  `g_income_thirteen` int(11) DEFAULT NULL,
  `g_income_fourteen` int(11) DEFAULT NULL,
  `g_income_fifteen` int(11) DEFAULT NULL,
  `g_income_sixteen` int(11) DEFAULT NULL,
  `g_income_seventeen` int(11) DEFAULT NULL,
  `g_income_eighteen` int(11) DEFAULT NULL,
  `g_income_nineteen` int(11) DEFAULT NULL,
  `g_income_twenty` int(11) DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `package_type`, `amount`, `referrel_income`, `bonus`, `validity`, `wlimit`, `tlimit`, `wmin`, `tmin`, `package_banner`, `g_income_first`, `g_income_second`, `g_income_third`, `g_income_fourth`, `g_income_fifth`, `g_income_six`, `g_income_seven`, `g_income_eight`, `g_income_nine`, `g_income_ten`, `g_income_eleven`, `g_income_twelve`, `g_income_thirteen`, `g_income_fourteen`, `g_income_fifteen`, `g_income_sixteen`, `g_income_seventeen`, `g_income_eighteen`, `g_income_nineteen`, `g_income_twenty`, `status`, `created_at`, `updated_at`) VALUES
(1, 'GOLD', NULL, 66, 22, 66, 66, 66, 66, 66, 6, 'test 2_Meer Photo.jpg', 66, 66, 66, 66, 66, 66, 66, 66, 66, 66, 66, 66, 66, 66, 66, 66, 66, 66, 66, 66, '1', '2021-12-19 08:38:48', '2021-12-19 08:38:48');

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
-- Table structure for table `ranks`
--

CREATE TABLE `ranks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rank_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_a` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_b` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_c` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rank_web_section`
--

CREATE TABLE `rank_web_section` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rank_section_normal_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank_section_bold_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank1_circle_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank1_item_text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`rank1_item_text`)),
  `rank2_circle_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank2_item_text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`rank2_item_text`)),
  `rank3_circle_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank3_item_text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`rank3_item_text`)),
  `rank4_circle_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank4_item_text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`rank4_item_text`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rank_web_section`
--

INSERT INTO `rank_web_section` (`id`, `rank_section_normal_title`, `rank_section_bold_title`, `rank1_circle_text`, `rank1_item_text`, `rank2_circle_text`, `rank2_item_text`, `rank3_circle_text`, `rank3_item_text`, `rank4_circle_text`, `rank4_item_text`, `created_at`, `updated_at`) VALUES
(1, 'OUR', 'RANK', 'SILBER', '[\"aaa\",\"aaa\",\"aaa\",\"aaa\",\"aaa\",\"aaa\",\"aaa\",\"aaa\"]', 'GOLD', '[\"bbb\",\"bbb\",\"bbb\",\"bbb\",\"bbb\",\"bbb\"]', 'DYMOND', '[\"cc\",\"cc\",\"ccc\",\"ccc\",\"cc\",\"ccc\",\"cc\"]', 'BRASS', '[\"eee\",\"eee\",\"eee\",\"ee\",\"ee\",\"eee\"]', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `referrel_infos`
--

CREATE TABLE `referrel_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `referrel_id` int(10) UNSIGNED NOT NULL,
  `first_generation` int(11) DEFAULT NULL,
  `second_generation` int(11) DEFAULT NULL,
  `third_generation` int(11) DEFAULT NULL,
  `fourth_generation` int(11) DEFAULT NULL,
  `fifth_generation` int(11) DEFAULT NULL,
  `six_generation` int(11) DEFAULT NULL,
  `seven_generation` int(11) DEFAULT NULL,
  `eight_generation` int(11) DEFAULT NULL,
  `nine_generation` int(11) DEFAULT NULL,
  `ten_generation` int(11) DEFAULT NULL,
  `eleven_generation` int(11) DEFAULT NULL,
  `twelve_generation` int(11) DEFAULT NULL,
  `thirteen_generation` int(11) DEFAULT NULL,
  `fourteen_generation` int(11) DEFAULT NULL,
  `fifteen_generation` int(11) DEFAULT NULL,
  `sixteen_generation` int(11) DEFAULT NULL,
  `seventeen_generation` int(11) DEFAULT NULL,
  `eighteen_generation` int(11) DEFAULT NULL,
  `nineteen_generation` int(11) DEFAULT NULL,
  `twenty_generation` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservedledgers`
--

CREATE TABLE `reservedledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `particulation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit` double(20,2) DEFAULT NULL,
  `debit` double(20,2) DEFAULT NULL,
  `initial_balance` double(20,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservedledgers`
--

INSERT INTO `reservedledgers` (`id`, `customer_id`, `admin_id`, `date`, `particulation`, `reason`, `credit`, `debit`, `initial_balance`, `created_at`, `updated_at`) VALUES
(5, 5, 5, '2021-12-08', 'particulation	', 'reason', 1000.00, 1500.00, NULL, '2021-12-08 14:45:54', '2021-12-07 14:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `referral_id` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `referral_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `balance` double(20,2) NOT NULL DEFAULT 0.00,
  `reserved_bal` int(11) DEFAULT NULL,
  `purchase_point` double(20,2) DEFAULT NULL,
  `sale_bal` double(20,2) DEFAULT NULL,
  `referred_by` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'customer',
  `email` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `verification_code` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_email_verificiation_code` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar_original` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `management` double(20,2) DEFAULT NULL,
  `banned` tinyint(4) NOT NULL DEFAULT 0,
  `cus_payment_status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `customer_package_id` int(11) DEFAULT NULL,
  `activation_date` timestamp NULL DEFAULT NULL,
  `remaining_uploads` int(11) DEFAULT 0,
  `bonus_count` int(11) DEFAULT NULL,
  `agent_status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `last_bonus` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `referral_id`, `referral_code`, `name`, `username`, `phone`, `balance`, `reserved_bal`, `purchase_point`, `sale_bal`, `referred_by`, `provider_id`, `user_type`, `email`, `email_verified_at`, `verification_code`, `new_email_verificiation_code`, `password`, `remember_token`, `avatar`, `avatar_original`, `address`, `country`, `city`, `postal_code`, `management`, `banned`, `cus_payment_status`, `customer_package_id`, `activation_date`, `remaining_uploads`, `bonus_count`, `agent_status`, `last_bonus`, `created_at`, `updated_at`) VALUES
(1, '000001', '000001', 'Bright Future 200', 'admin', '01933690443', 527661.00, NULL, 0.00, 0.00, NULL, NULL, 'admin', 'admin@gmail.com', '2021-12-26 04:59:33', '160665', NULL, '$2y$10$5CGOKdLf/R7Y6MLxynYm9Op8PeuBGEAPXbd2us.pJu/XbL/W0K5x.', 'T7ZjU5traJKa0j2XH0rV4oghO1odv5lyPR0X8sK7PhrS8cuZMr3D2XKWsY6t', NULL, '297', NULL, NULL, NULL, NULL, 5040497.20, 0, '0', NULL, NULL, 0, NULL, '1', '2021-11-30 19:00:26', '2021-06-16 11:40:03', '2021-12-25 00:39:12'),
(2, '000003', '000002', 'admin', 'Admin2', '01300942191', 2480.00, 110, 0.00, 0.00, NULL, NULL, 'customer', 'hanzal@gmail.com', '2021-12-25 07:00:41', '557007', NULL, '$2y$10$5CGOKdLf/R7Y6MLxynYm9Op8PeuBGEAPXbd2us.pJu/XbL/W0K5x.', 'EhZI6azAB6jXCmXEkfUaODWpRvTIJpo5hdfKXwOGoFPQii8Ag1OCNR0O1Q1d', NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0, '1', 1, '2021-08-22 04:18:52', 0, 99, '1', '2021-12-05 14:48:40', '2021-08-22 04:18:11', '2021-12-25 01:00:41'),
(3, '000004', '000003', 'Bright future 200 monthly payment', 'Admin3', '01300942191', 27692.00, 105, 0.00, 0.00, NULL, NULL, 'customer', NULL, '2021-12-25 06:59:24', '702405', NULL, '$2y$10$kqeNP.rpFWFJbqQeOSoXd.c142eI2fp5h/E8q4zi1FFMF.IJt82vu', 'AbnrSoCkdtAwBpGnt3X3BvTqefvl5mb3nGeIllzsxUb60WK4ZMipOmiMSsHn', NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0, '1', 3, '2021-08-22 04:21:18', 0, 98, '1', '2021-11-30 19:00:10', '2021-08-22 04:20:36', '2021-12-21 22:18:14'),
(4, '000006', '000004', 'MD Jobayer Ahmed', 'jobayer01', '01304995161', 1250.00, 135, 0.00, 0.00, NULL, NULL, 'customer', NULL, '2021-12-21 10:24:30', '185213', NULL, '$2y$10$lmMHAn3TrRGoqQ56m1Nx6OBdrlSnI7GskbQgut8Om5rf.LgG4WpP2', '74PADCwL1MF5yuzenscqXtNDodmTHMHx9yFJAQ4UuvaW1WRKzaBqUyWRwm9v', NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0, '1', 2, '2021-08-22 04:37:53', 0, 104, '0', '2021-12-08 23:53:06', '2021-08-22 04:36:57', '2021-12-09 01:22:00'),
(5, '000007', '000004', 'Bright future 200 Monthly salary', 'mustafiz1', '01300942191', 20750.00, 105, 0.00, 0.00, NULL, NULL, 'customer', NULL, '2021-12-25 06:59:37', '636799', NULL, '$2y$10$2aebjeTxHxjOQNn65zKAZejOZs8hih2clN6fpNOuMCHwd6ZAnWeGe', 'LAQZVDi10a1VhEMKYaEU3Tfxozr9GmTJDyCrIdQ3oEFBtjLpP7PfrDRrAsdQ', NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0, '1', 2, '2021-08-22 04:40:32', 0, 98, '1', '2021-11-30 19:00:10', '2021-08-22 04:38:22', '2021-12-21 22:18:56'),
(6919, '000008', '000005', 'Hanzal', 'hanzal', NULL, 100.00, NULL, NULL, NULL, '000001', NULL, 'customer', 'spihanzal0444@gmail.com', '2021-12-26 09:34:19', NULL, NULL, '$2y$10$ssF23.iJ8LdWijuQEnL5n.MqYgjA0n4E./JVTP4cKhvtySGpOX9ta', 'kcYcEAo2azE6CsUO8JJJE9fIrYvMhIQ8XxErtpSDE6tYSbdabtExHnagQAo5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0', NULL, NULL, 0, NULL, '0', NULL, '2021-12-24 21:03:13', '2021-12-24 21:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_ranks`
--

CREATE TABLE `user_ranks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rank_id` int(10) UNSIGNED NOT NULL,
  `credit` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_processes`
--

CREATE TABLE `work_processes` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `section_title_normal` varchar(100) NOT NULL,
  `section_title_bold` varchar(100) NOT NULL,
  `section_description` text NOT NULL,
  `work_item_title1` varchar(255) NOT NULL,
  `work_item_desc1` text NOT NULL,
  `work_item_icon1` varchar(255) NOT NULL,
  `work_item_title2` varchar(255) NOT NULL,
  `work_item_desc2` text NOT NULL,
  `work_item_icon2` varchar(255) NOT NULL,
  `work_item_title3` varchar(255) NOT NULL,
  `work_item_desc3` text NOT NULL,
  `work_item_icon3` varchar(255) NOT NULL,
  `work_item_title4` varchar(255) NOT NULL,
  `work_item_desc4` text NOT NULL,
  `work_item_icon4` varchar(100) NOT NULL,
  `video` varchar(255) NOT NULL,
  `video_text_1` varchar(100) NOT NULL,
  `video_text_2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_processes`
--

INSERT INTO `work_processes` (`id`, `image`, `bg_image`, `section_title_normal`, `section_title_bold`, `section_description`, `work_item_title1`, `work_item_desc1`, `work_item_icon1`, `work_item_title2`, `work_item_desc2`, `work_item_icon2`, `work_item_title3`, `work_item_desc3`, `work_item_icon3`, `work_item_title4`, `work_item_desc4`, `work_item_icon4`, `video`, `video_text_1`, `video_text_2`) VALUES
(1, 'bg4_image_1639424808.jpg', 'blurbg7-t_bg_image_1639424808.jpg', 'WORK', 'PROCESS', 'Sed ut perspiciatis unde omnis iste nat eror acus antium que', 'PLANING', 'LOREM IPSUM DOLOR', 'icon icon-basic-lightbulb', 'DESIGNING', 'LOREM IPSUM DOLOR', 'icon icon-basic-laptop', 'DEVELOPMENT', 'LOREM IPSUM DOLOR', 'icon icon-basic-gear', 'LAUNCH', 'LOREM IPSUM DOLOR', 'icon icon-basic-lightbulb', 'sm-video_video_1639424808.webm', 'BE CREATIVE', 'WITH HASWELL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminledgers`
--
ALTER TABLE `adminledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_withdraws`
--
ALTER TABLE `bank_withdraws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_settings`
--
ALTER TABLE `business_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creatives`
--
ALTER TABLE `creatives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerledgers`
--
ALTER TABLE `customerledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerpayments`
--
ALTER TABLE `customerpayments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerwithdraws`
--
ALTER TABLE `customerwithdraws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_packages`
--
ALTER TABLE `customer_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generale_settings`
--
ALTER TABLE `generale_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helplines`
--
ALTER TABLE `helplines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_contacts`
--
ALTER TABLE `home_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managementledgers`
--
ALTER TABLE `managementledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank_web_section`
--
ALTER TABLE `rank_web_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referrel_infos`
--
ALTER TABLE `referrel_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservedledgers`
--
ALTER TABLE `reservedledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `referral_id` (`referral_id`),
  ADD KEY `referral_code` (`referral_code`),
  ADD KEY `username` (`username`),
  ADD KEY `phone` (`phone`),
  ADD KEY `balance` (`balance`),
  ADD KEY `insu_bal` (`reserved_bal`),
  ADD KEY `email` (`email`),
  ADD KEY `cus_payment_status` (`cus_payment_status`),
  ADD KEY `customer_package_id` (`customer_package_id`),
  ADD KEY `avatar_original` (`avatar_original`),
  ADD KEY `bonus_count` (`bonus_count`),
  ADD KEY `last_bonus` (`last_bonus`),
  ADD KEY `purchase_point` (`purchase_point`),
  ADD KEY `management` (`management`),
  ADD KEY `sale_bal` (`sale_bal`);

--
-- Indexes for table `user_ranks`
--
ALTER TABLE `user_ranks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_processes`
--
ALTER TABLE `work_processes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `adminledgers`
--
ALTER TABLE `adminledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank_withdraws`
--
ALTER TABLE `bank_withdraws`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_settings`
--
ALTER TABLE `business_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `creatives`
--
ALTER TABLE `creatives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customerledgers`
--
ALTER TABLE `customerledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customerpayments`
--
ALTER TABLE `customerpayments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4213;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6923;

--
-- AUTO_INCREMENT for table `customerwithdraws`
--
ALTER TABLE `customerwithdraws`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5161;

--
-- AUTO_INCREMENT for table `customer_packages`
--
ALTER TABLE `customer_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `generale_settings`
--
ALTER TABLE `generale_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `helplines`
--
ALTER TABLE `helplines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_contacts`
--
ALTER TABLE `home_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `managementledgers`
--
ALTER TABLE `managementledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ranks`
--
ALTER TABLE `ranks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rank_web_section`
--
ALTER TABLE `rank_web_section`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `referrel_infos`
--
ALTER TABLE `referrel_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservedledgers`
--
ALTER TABLE `reservedledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6927;

--
-- AUTO_INCREMENT for table `user_ranks`
--
ALTER TABLE `user_ranks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_processes`
--
ALTER TABLE `work_processes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
