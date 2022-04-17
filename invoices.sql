-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2022 at 10:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoices`
--

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
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `product` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `amount_collection` decimal(8,2) DEFAULT NULL,
  `amount_Commission` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `rate_vat` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_vat` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_status` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `invoice_number`, `invoice_date`, `due_date`, `product`, `section_id`, `amount_collection`, `amount_Commission`, `discount`, `rate_vat`, `value_vat`, `total`, `status`, `value_status`, `note`, `payment_date`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1111', '2022-04-01', '2022-04-25', 'البطاقات', 1, '70000.00', '12000.00', '1000.00', '5%', '550.00', '11550.00', 'مدفوعة', 1, 'فاتورة البنك الاهلى', '2022-04-14', NULL, '2022-04-13 21:34:01', '2022-04-13 21:35:11'),
(2, '2222', '2022-04-05', '2022-05-02', 'القروض المتعثرة', 2, '100000.00', '20000.00', '10000.00', '5%', '500.00', '10500.00', 'مدفوعة جزئيا', 3, 'فاتورة بنك البلاد', '2022-04-19', NULL, '2022-04-13 21:37:38', '2022-04-13 21:38:26'),
(3, '3333', '2022-04-22', '2022-05-16', 'الشهادات', 3, '90000.00', '10000.00', '3000.00', '10%', '700.00', '7700.00', 'مدفوعة', 1, 'فاتورة بنك الرياض', '2022-04-18', NULL, '2022-04-13 21:39:57', '2022-04-14 12:03:57'),
(4, '4444', '2022-04-13', '2022-05-22', 'القروض', 4, '150000.00', '30000.00', '4000.00', '5%', '1300.00', '27300.00', 'غير مدفوعة', 2, 'فاتورة بنك مصر', NULL, '2022-04-17 18:34:26', '2022-04-13 21:42:06', '2022-04-17 18:34:26'),
(5, '5555', '2022-04-14', '2022-05-03', 'البطاقات', 5, '90000.00', '12000.00', '2000.00', '5%', '500.00', '10500.00', 'غير مدفوعة', 2, 'فاتورة بنك الاسكندرية', NULL, NULL, '2022-04-14 12:02:31', '2022-04-14 12:02:31'),
(12, '6666', '2022-04-17', '2022-05-22', 'البطاقات', 1, '60000.00', '12000.00', '2000.00', '5%', '500.00', '10500.00', 'غير مدفوعة', 2, 'فاتورة أميرة', NULL, NULL, '2022-04-17 12:07:35', '2022-04-17 12:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `invoices_attachments`
--

CREATE TABLE `invoices_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Created_by` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices_attachments`
--

INSERT INTO `invoices_attachments` (`id`, `file_name`, `invoice_number`, `Created_by`, `invoice_id`, `created_at`, `updated_at`) VALUES
(1, '6.jpg', '1111', 'noran', 1, '2022-04-13 21:34:01', '2022-04-13 21:34:01'),
(2, 'Dictionary.png', '3333', 'noran', 3, '2022-04-13 21:39:57', '2022-04-13 21:39:57'),
(3, 'Dictionary.png', '4444', 'noran', 4, '2022-04-13 21:42:06', '2022-04-13 21:42:06');

-- --------------------------------------------------------

--
-- Table structure for table `invoices_details`
--

CREATE TABLE `invoices_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_invoice` bigint(20) UNSIGNED NOT NULL,
  `invoice_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_status` int(11) NOT NULL,
  `payment_date` date DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices_details`
--

INSERT INTO `invoices_details` (`id`, `id_invoice`, `invoice_number`, `product`, `section`, `status`, `value_status`, `payment_date`, `note`, `user`, `created_at`, `updated_at`) VALUES
(1, 1, '1111', 'البطاقات', '1', 'غير مدفوعة', 2, NULL, 'فاتورة البنك الاهلى', 'noran', '2022-04-13 21:34:01', '2022-04-13 21:34:01'),
(2, 1, '1111', 'البطاقات', '1', 'مدفوعة', 1, '2022-04-14', 'فاتورة البنك الاهلى', 'noran', '2022-04-13 21:35:11', '2022-04-13 21:35:11'),
(3, 2, '2222', 'القروض المتعثرة', '2', 'غير مدفوعة', 2, NULL, 'فاتورة بنك البلاد', 'noran', '2022-04-13 21:37:38', '2022-04-13 21:37:38'),
(4, 2, '2222', 'القروض المتعثرة', '2', 'مدفوعة جزئيا', 3, '2022-04-19', 'فاتورة بنك البلاد', 'noran', '2022-04-13 21:38:26', '2022-04-13 21:38:26'),
(5, 3, '3333', 'الشهادات', '3', 'غير مدفوعة', 2, NULL, 'فاتورة بنك الرياض', 'noran', '2022-04-13 21:39:57', '2022-04-13 21:39:57'),
(6, 4, '4444', 'القروض', '4', 'غير مدفوعة', 2, NULL, 'فاتورة بنك مصر', 'noran', '2022-04-13 21:42:06', '2022-04-13 21:42:06'),
(7, 5, '5555', 'البطاقات', '5', 'غير مدفوعة', 2, NULL, 'فاتورة بنك الاسكندرية', 'noran', '2022-04-14 12:02:32', '2022-04-14 12:02:32'),
(8, 3, '3333', 'الشهادات', '3', 'مدفوعة', 1, '2022-04-18', 'فاتورة بنك الرياض', 'noran', '2022-04-14 12:03:58', '2022-04-14 12:03:58'),
(15, 12, '6666', 'البطاقات', '1', 'غير مدفوعة', 2, NULL, 'فاتورة أميرة', 'amera', '2022-04-17 12:07:35', '2022-04-17 12:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_archives`
--

CREATE TABLE `invoice_archives` (
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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_24_060140_create_sections_table', 1),
(6, '2022_03_26_033610_create_products_table', 1),
(7, '2022_03_28_002855_create_invoices_table', 1),
(8, '2022_03_28_081547_create_invoices_details_table', 1),
(9, '2022_03_28_084035_create_invoices_attachments_table', 1),
(10, '2022_04_04_132604_create_invoice_archives_table', 1),
(11, '2022_04_06_115308_create_permission_tables', 1),
(12, '2022_04_15_123722_create_notifications_table', 2);

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
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('41cc45f7-bef8-47a8-b1a2-017df44a1171', 'App\\Notifications\\AddInvoiceNotify', 'App\\Models\\User', 1, '{\"id\":12,\"title\":\"\\u062a\\u0645 \\u0627\\u0636\\u0627\\u0641\\u0629 \\u0641\\u0627\\u062a\\u0648\\u0631\\u0629 \\u062c\\u062f\\u064a\\u062f \\u0628\\u0648\\u0627\\u0633\\u0637\\u0629\",\"user\":\"amera\"}', NULL, '2022-04-17 12:07:36', '2022-04-17 12:07:36'),
('e0b3c6ad-f6a0-4c55-bb51-7efcd861313b', 'App\\Notifications\\AddInvoiceNotify', 'App\\Models\\User', 3, '{\"id\":12,\"title\":\"\\u062a\\u0645 \\u0627\\u0636\\u0627\\u0641\\u0629 \\u0641\\u0627\\u062a\\u0648\\u0631\\u0629 \\u062c\\u062f\\u064a\\u062f \\u0628\\u0648\\u0627\\u0633\\u0637\\u0629\",\"user\":\"amera\"}', NULL, '2022-04-17 12:07:36', '2022-04-17 12:07:36');

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
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'الفواتير', 'web', '2022-04-13 21:17:26', '2022-04-13 21:17:26'),
(2, 'قائمة الفواتير', 'web', '2022-04-13 21:17:26', '2022-04-13 21:17:26'),
(3, 'الفواتير المدفوعة', 'web', '2022-04-13 21:17:27', '2022-04-13 21:17:27'),
(4, 'الفواتير المدفوعة جزئيا', 'web', '2022-04-13 21:17:27', '2022-04-13 21:17:27'),
(5, 'الفواتير الغير مدفوعة', 'web', '2022-04-13 21:17:27', '2022-04-13 21:17:27'),
(6, 'ارشيف الفواتير', 'web', '2022-04-13 21:17:27', '2022-04-13 21:17:27'),
(7, 'التقارير', 'web', '2022-04-13 21:17:27', '2022-04-13 21:17:27'),
(8, 'تقرير الفواتير', 'web', '2022-04-13 21:17:27', '2022-04-13 21:17:27'),
(9, 'تقرير العملاء', 'web', '2022-04-13 21:17:27', '2022-04-13 21:17:27'),
(10, 'المستخدمين', 'web', '2022-04-13 21:17:27', '2022-04-13 21:17:27'),
(11, 'قائمة المستخدمين', 'web', '2022-04-13 21:17:27', '2022-04-13 21:17:27'),
(12, 'صلاحيات المستخدمين', 'web', '2022-04-13 21:17:27', '2022-04-13 21:17:27'),
(13, 'الاعدادات', 'web', '2022-04-13 21:17:27', '2022-04-13 21:17:27'),
(14, 'المنتجات', 'web', '2022-04-13 21:17:27', '2022-04-13 21:17:27'),
(15, 'الاقسام', 'web', '2022-04-13 21:17:27', '2022-04-13 21:17:27'),
(16, 'اضافة فاتورة', 'web', '2022-04-13 21:17:27', '2022-04-13 21:17:27'),
(17, 'حذف الفاتورة', 'web', '2022-04-13 21:17:28', '2022-04-13 21:17:28'),
(18, 'تصدير EXCEL', 'web', '2022-04-13 21:17:28', '2022-04-13 21:17:28'),
(19, 'تغير حالة الدفع', 'web', '2022-04-13 21:17:28', '2022-04-13 21:17:28'),
(20, 'تعديل الفاتورة', 'web', '2022-04-13 21:17:28', '2022-04-13 21:17:28'),
(21, 'ارشفة الفاتورة', 'web', '2022-04-13 21:17:28', '2022-04-13 21:17:28'),
(22, 'طباعةالفاتورة', 'web', '2022-04-13 21:17:28', '2022-04-13 21:17:28'),
(23, 'اضافة مرفق', 'web', '2022-04-13 21:17:28', '2022-04-13 21:17:28'),
(24, 'حذف المرفق', 'web', '2022-04-13 21:17:28', '2022-04-13 21:17:28'),
(25, 'اضافة مستخدم', 'web', '2022-04-13 21:17:28', '2022-04-13 21:17:28'),
(26, 'تعديل مستخدم', 'web', '2022-04-13 21:17:28', '2022-04-13 21:17:28'),
(27, 'حذف مستخدم', 'web', '2022-04-13 21:17:28', '2022-04-13 21:17:28'),
(28, 'عرض صلاحية', 'web', '2022-04-13 21:17:28', '2022-04-13 21:17:28'),
(29, 'اضافة صلاحية', 'web', '2022-04-13 21:17:28', '2022-04-13 21:17:28'),
(30, 'تعديل صلاحية', 'web', '2022-04-13 21:17:28', '2022-04-13 21:17:28'),
(31, 'حذف صلاحية', 'web', '2022-04-13 21:17:28', '2022-04-13 21:17:28'),
(32, 'اضافة منتج', 'web', '2022-04-13 21:17:29', '2022-04-13 21:17:29'),
(33, 'تعديل منتج', 'web', '2022-04-13 21:17:29', '2022-04-13 21:17:29'),
(34, 'حذف منتج', 'web', '2022-04-13 21:17:29', '2022-04-13 21:17:29'),
(35, 'اضافة قسم', 'web', '2022-04-13 21:17:29', '2022-04-13 21:17:29'),
(36, 'تعديل قسم', 'web', '2022-04-13 21:17:29', '2022-04-13 21:17:29'),
(37, 'حذف قسم', 'web', '2022-04-13 21:17:29', '2022-04-13 21:17:29'),
(38, 'الاشعارات', 'web', '2022-04-13 21:17:29', '2022-04-13 21:17:29');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `section_id`, `created_at`, `updated_at`) VALUES
(1, 'البطاقات', 'منتج البنك الاهلى', 1, '2022-04-13 21:30:49', '2022-04-13 21:30:49'),
(2, 'القروض المتعثرة', 'منتج بنك البلاد', 2, '2022-04-13 21:31:06', '2022-04-13 21:31:06'),
(3, 'الشهادات', 'منتج بنك الرياض', 3, '2022-04-13 21:31:25', '2022-04-13 21:31:25'),
(4, 'القروض', 'منتج بنك مصر', 4, '2022-04-13 21:31:42', '2022-04-13 21:31:42'),
(5, 'البطاقات', 'منتج بنك الاسكندرية', 5, '2022-04-13 21:32:00', '2022-04-13 21:32:00');

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
(1, 'owner', 'web', '2022-04-13 21:17:37', '2022-04-13 21:17:37'),
(2, 'user', 'web', '2022-04-13 21:20:09', '2022-04-13 21:20:09');

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
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(16, 2),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Created_by` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name`, `description`, `Created_by`, `created_at`, `updated_at`) VALUES
(1, 'البنك الاهلى', 'قسم البنك الاهلى', 'noran', '2022-04-13 21:28:19', '2022-04-13 21:28:19'),
(2, 'بنك البلاد', 'قسم بنك البلاد', 'noran', '2022-04-13 21:28:35', '2022-04-13 21:28:35'),
(3, 'بنك الرياض', 'قسم بنك الرياض', 'noran', '2022-04-13 21:28:49', '2022-04-13 21:28:49'),
(4, 'بنك مصر', 'قسم بنك مصر', 'noran', '2022-04-13 21:29:03', '2022-04-13 21:29:03'),
(5, 'بنك الاسكندرية', 'قسم بنك الاسكندرية', 'noran', '2022-04-13 21:29:18', '2022-04-13 21:29:37');

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
  `roles_name` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'مفعل',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `roles_name`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'noran', 'noranmostafa843@gmail.com', NULL, '$2y$10$IH0cpo5yOOINatU1Tewg5uNrbbwW5qmY3V36pwyqF4lFuhmSekMeO', '[\"owner\"]', 'مفعل', NULL, '2022-04-13 21:17:37', '2022-04-13 21:17:37'),
(3, 'amera', 'amera@gmail.com', NULL, '$2y$10$gDh2r2CqKZ0C5F0MIglWv.vqOEduiNX.H6KK207NEcTZLZj4NM/0G', '[\"user\"]', 'مفعل', NULL, '2022-04-13 21:23:15', '2022-04-13 21:23:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_section_id_foreign` (`section_id`);

--
-- Indexes for table `invoices_attachments`
--
ALTER TABLE `invoices_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_attachments_invoice_id_foreign` (`invoice_id`);

--
-- Indexes for table `invoices_details`
--
ALTER TABLE `invoices_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_details_id_invoice_foreign` (`id_invoice`);

--
-- Indexes for table `invoice_archives`
--
ALTER TABLE `invoice_archives`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_section_id_foreign` (`section_id`);

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
-- Indexes for table `sections`
--
ALTER TABLE `sections`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `invoices_attachments`
--
ALTER TABLE `invoices_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoices_details`
--
ALTER TABLE `invoices_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `invoice_archives`
--
ALTER TABLE `invoice_archives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `invoices_attachments`
--
ALTER TABLE `invoices_attachments`
  ADD CONSTRAINT `invoices_attachments_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `invoices_details`
--
ALTER TABLE `invoices_details`
  ADD CONSTRAINT `invoices_details_id_invoice_foreign` FOREIGN KEY (`id_invoice`) REFERENCES `invoices` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

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
