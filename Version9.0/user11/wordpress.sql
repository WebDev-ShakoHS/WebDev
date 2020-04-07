-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2020 at 11:29 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wordpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_actionscheduler_actions`
--

CREATE TABLE `wp_actionscheduler_actions` (
  `action_id` bigint(20) UNSIGNED NOT NULL,
  `hook` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `scheduled_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `scheduled_date_local` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `args` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `schedule` longtext COLLATE utf8mb4_unicode_520_ci,
  `group_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `attempts` int(11) NOT NULL DEFAULT '0',
  `last_attempt_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_attempt_local` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `claim_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `extended_args` varchar(8000) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_actionscheduler_actions`
--

INSERT INTO `wp_actionscheduler_actions` (`action_id`, `hook`, `status`, `scheduled_date_gmt`, `scheduled_date_local`, `args`, `schedule`, `group_id`, `attempts`, `last_attempt_gmt`, `last_attempt_local`, `claim_id`, `extended_args`) VALUES
(167, 'action_scheduler/migration_hook', 'complete', '2020-03-13 16:43:49', '2020-03-13 16:43:49', '[]', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584117829;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584117829;}', 1, 1, '2020-03-13 16:43:51', '2020-03-13 16:43:51', 0, NULL),
(193, 'wc-admin_import_orders', 'complete', '2020-03-09 16:27:48', '2020-03-09 16:27:48', '[164]', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1583771268;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1583771268;}', 2, 0, '2020-03-09 16:27:52', '2020-03-09 16:27:52', 0, NULL),
(194, 'action_scheduler/migration_hook', 'complete', '2020-03-13 16:43:56', '2020-03-13 16:43:56', '[]', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584117836;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584117836;}', 1, 1, '2020-03-13 16:44:37', '2020-03-13 16:44:37', 0, NULL),
(195, 'action_scheduler/migration_hook', 'complete', '2020-03-13 16:44:38', '2020-03-13 16:44:38', '[]', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584117878;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584117878;}', 1, 1, '2020-03-13 16:44:51', '2020-03-13 16:44:51', 0, NULL),
(196, 'woocommerce_run_update_callback', 'complete', '2020-03-13 16:47:57', '2020-03-13 16:47:57', '{\"update_callback\":\"wc_update_product_lookup_tables\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118077;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118077;}', 3, 1, '2020-03-13 16:48:18', '2020-03-13 16:48:18', 0, NULL),
(197, 'woocommerce_run_update_callback', 'complete', '2020-03-13 16:47:58', '2020-03-13 16:47:58', '{\"update_callback\":\"wc_update_400_increase_size_of_column\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118078;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118078;}', 3, 1, '2020-03-13 16:48:18', '2020-03-13 16:48:18', 0, NULL),
(198, 'woocommerce_run_update_callback', 'complete', '2020-03-13 16:47:59', '2020-03-13 16:47:59', '{\"update_callback\":\"wc_update_400_db_version\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118079;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118079;}', 3, 1, '2020-03-13 16:48:18', '2020-03-13 16:48:18', 0, NULL),
(199, 'woocommerce_run_update_callback', 'complete', '2020-03-13 16:48:00', '2020-03-13 16:48:00', '{\"update_callback\":\"wc_reset_action_scheduler_migration_status\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118080;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118080;}', 3, 1, '2020-03-13 16:48:18', '2020-03-13 16:48:18', 0, NULL),
(200, 'wc_update_product_lookup_tables_column', 'complete', '2020-03-13 16:48:18', '2020-03-13 16:48:18', '{\"column\":\"min_max_price\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118098;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118098;}', 4, 1, '2020-03-13 16:48:18', '2020-03-13 16:48:18', 0, NULL),
(201, 'wc_update_product_lookup_tables_column', 'complete', '2020-03-13 16:48:19', '2020-03-13 16:48:19', '{\"column\":\"stock_quantity\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118099;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118099;}', 4, 1, '2020-03-13 16:48:24', '2020-03-13 16:48:24', 0, NULL),
(202, 'wc_update_product_lookup_tables_column', 'complete', '2020-03-13 16:48:20', '2020-03-13 16:48:20', '{\"column\":\"sku\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118100;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118100;}', 4, 1, '2020-03-13 16:48:24', '2020-03-13 16:48:24', 0, NULL),
(203, 'wc_update_product_lookup_tables_column', 'complete', '2020-03-13 16:48:21', '2020-03-13 16:48:21', '{\"column\":\"stock_status\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118101;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118101;}', 4, 1, '2020-03-13 16:48:24', '2020-03-13 16:48:24', 0, NULL),
(204, 'wc_update_product_lookup_tables_column', 'complete', '2020-03-13 16:48:22', '2020-03-13 16:48:22', '{\"column\":\"average_rating\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118102;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118102;}', 4, 1, '2020-03-13 16:48:24', '2020-03-13 16:48:24', 0, NULL),
(205, 'wc_update_product_lookup_tables_column', 'complete', '2020-03-13 16:48:23', '2020-03-13 16:48:23', '{\"column\":\"total_sales\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118103;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118103;}', 4, 1, '2020-03-13 16:48:24', '2020-03-13 16:48:24', 0, NULL),
(206, 'wc_update_product_lookup_tables_column', 'complete', '2020-03-13 16:48:24', '2020-03-13 16:48:24', '{\"column\":\"downloadable\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118104;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118104;}', 4, 1, '2020-03-13 16:48:24', '2020-03-13 16:48:24', 0, NULL),
(207, 'wc_update_product_lookup_tables_column', 'complete', '2020-03-13 16:48:25', '2020-03-13 16:48:25', '{\"column\":\"virtual\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118105;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118105;}', 4, 1, '2020-03-13 16:48:29', '2020-03-13 16:48:29', 0, NULL),
(208, 'wc_update_product_lookup_tables_column', 'complete', '2020-03-13 16:48:26', '2020-03-13 16:48:26', '{\"column\":\"onsale\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118106;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118106;}', 4, 1, '2020-03-13 16:48:29', '2020-03-13 16:48:29', 0, NULL),
(209, 'wc_update_product_lookup_tables_column', 'complete', '2020-03-13 16:48:27', '2020-03-13 16:48:27', '{\"column\":\"tax_class\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118107;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118107;}', 4, 1, '2020-03-13 16:48:29', '2020-03-13 16:48:29', 0, NULL),
(210, 'wc_update_product_lookup_tables_column', 'complete', '2020-03-13 16:48:28', '2020-03-13 16:48:28', '{\"column\":\"tax_status\"}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118108;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118108;}', 4, 1, '2020-03-13 16:48:29', '2020-03-13 16:48:29', 0, NULL),
(211, 'wc_update_product_lookup_tables_rating_count_batch', 'complete', '2020-03-13 16:48:28', '2020-03-13 16:48:28', '{\"offset\":0,\"limit\":50}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118108;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118108;}', 4, 1, '2020-03-13 16:48:29', '2020-03-13 16:48:29', 0, NULL),
(212, 'action_scheduler/migration_hook', 'complete', '2020-03-13 16:48:29', '2020-03-13 16:48:29', '[]', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118109;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118109;}', 1, 1, '2020-03-13 16:48:29', '2020-03-13 16:48:29', 0, NULL),
(213, 'wc_update_product_lookup_tables_rating_count_batch', 'complete', '2020-03-13 16:48:30', '2020-03-13 16:48:30', '{\"offset\":50,\"limit\":50}', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584118110;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584118110;}', 4, 1, '2020-03-13 16:48:34', '2020-03-13 16:48:34', 0, NULL),
(214, 'action_scheduler/migration_hook', 'complete', '2020-03-13 17:24:17', '2020-03-13 17:24:17', '[]', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584120257;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584120257;}', 1, 1, '2020-03-13 17:24:24', '2020-03-13 17:24:24', 0, NULL),
(215, 'action_scheduler/migration_hook', 'complete', '2020-03-13 18:18:22', '2020-03-13 18:18:22', '[]', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584123502;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584123502;}', 1, 1, '2020-03-13 18:18:51', '2020-03-13 18:18:51', 0, NULL),
(216, 'action_scheduler/migration_hook', 'complete', '2020-03-13 18:18:51', '2020-03-13 18:18:51', '[]', 'O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1584123531;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1584123531;}', 1, 1, '2020-03-13 18:19:24', '2020-03-13 18:19:24', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wp_actionscheduler_claims`
--

CREATE TABLE `wp_actionscheduler_claims` (
  `claim_id` bigint(20) UNSIGNED NOT NULL,
  `date_created_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_actionscheduler_groups`
--

CREATE TABLE `wp_actionscheduler_groups` (
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_actionscheduler_groups`
--

INSERT INTO `wp_actionscheduler_groups` (`group_id`, `slug`) VALUES
(1, 'action-scheduler-migration'),
(2, 'wc-admin-data'),
(3, 'woocommerce-db-updates'),
(4, 'wc_update_product_lookup_tables');

-- --------------------------------------------------------

--
-- Table structure for table `wp_actionscheduler_logs`
--

CREATE TABLE `wp_actionscheduler_logs` (
  `log_id` bigint(20) UNSIGNED NOT NULL,
  `action_id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `log_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `log_date_local` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_actionscheduler_logs`
--

INSERT INTO `wp_actionscheduler_logs` (`log_id`, `action_id`, `message`, `log_date_gmt`, `log_date_local`) VALUES
(1, 167, 'action created', '2020-03-13 16:43:49', '2020-03-13 16:43:49'),
(2, 167, 'action started via Async Request', '2020-03-13 16:43:50', '2020-03-13 16:43:50'),
(103, 193, 'action created', '2020-03-09 16:27:43', '2020-03-09 16:27:43'),
(104, 193, 'action started', '2020-03-09 16:27:52', '2020-03-09 16:27:52'),
(105, 193, 'action complete', '2020-03-09 16:27:52', '2020-03-09 16:27:52'),
(106, 193, 'Migrated action with ID 165 in ActionScheduler_wpPostStore to ID 193 in ActionScheduler_DBStoreMigrator', '2020-03-13 16:43:51', '2020-03-13 16:43:51'),
(107, 167, 'action complete via Async Request', '2020-03-13 16:43:51', '2020-03-13 16:43:51'),
(108, 194, 'action created', '2020-03-13 16:43:56', '2020-03-13 16:43:56'),
(109, 194, 'action started via WP Cron', '2020-03-13 16:44:37', '2020-03-13 16:44:37'),
(110, 194, 'action complete via WP Cron', '2020-03-13 16:44:37', '2020-03-13 16:44:37'),
(111, 195, 'action created', '2020-03-13 16:44:38', '2020-03-13 16:44:38'),
(112, 195, 'action started via Async Request', '2020-03-13 16:44:51', '2020-03-13 16:44:51'),
(113, 195, 'action complete via Async Request', '2020-03-13 16:44:51', '2020-03-13 16:44:51'),
(114, 196, 'action created', '2020-03-13 16:47:57', '2020-03-13 16:47:57'),
(115, 197, 'action created', '2020-03-13 16:47:57', '2020-03-13 16:47:57'),
(116, 198, 'action created', '2020-03-13 16:47:57', '2020-03-13 16:47:57'),
(117, 199, 'action created', '2020-03-13 16:47:57', '2020-03-13 16:47:57'),
(118, 196, 'action started via Async Request', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(119, 200, 'action created', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(120, 201, 'action created', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(121, 202, 'action created', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(122, 203, 'action created', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(123, 204, 'action created', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(124, 205, 'action created', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(125, 206, 'action created', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(126, 207, 'action created', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(127, 208, 'action created', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(128, 209, 'action created', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(129, 210, 'action created', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(130, 211, 'action created', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(131, 196, 'action complete via Async Request', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(132, 197, 'action started via Async Request', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(133, 197, 'action complete via Async Request', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(134, 198, 'action started via Async Request', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(135, 198, 'action complete via Async Request', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(136, 199, 'action started via Async Request', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(137, 199, 'action complete via Async Request', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(138, 200, 'action started via Async Request', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(139, 200, 'action complete via Async Request', '2020-03-13 16:48:18', '2020-03-13 16:48:18'),
(140, 201, 'action started via Async Request', '2020-03-13 16:48:24', '2020-03-13 16:48:24'),
(141, 201, 'action complete via Async Request', '2020-03-13 16:48:24', '2020-03-13 16:48:24'),
(142, 202, 'action started via Async Request', '2020-03-13 16:48:24', '2020-03-13 16:48:24'),
(143, 202, 'action complete via Async Request', '2020-03-13 16:48:24', '2020-03-13 16:48:24'),
(144, 203, 'action started via Async Request', '2020-03-13 16:48:24', '2020-03-13 16:48:24'),
(145, 203, 'action complete via Async Request', '2020-03-13 16:48:24', '2020-03-13 16:48:24'),
(146, 204, 'action started via Async Request', '2020-03-13 16:48:24', '2020-03-13 16:48:24'),
(147, 204, 'action complete via Async Request', '2020-03-13 16:48:24', '2020-03-13 16:48:24'),
(148, 205, 'action started via Async Request', '2020-03-13 16:48:24', '2020-03-13 16:48:24'),
(149, 205, 'action complete via Async Request', '2020-03-13 16:48:24', '2020-03-13 16:48:24'),
(150, 206, 'action started via Async Request', '2020-03-13 16:48:24', '2020-03-13 16:48:24'),
(151, 206, 'action complete via Async Request', '2020-03-13 16:48:24', '2020-03-13 16:48:24'),
(152, 207, 'action started via Async Request', '2020-03-13 16:48:29', '2020-03-13 16:48:29'),
(153, 207, 'action complete via Async Request', '2020-03-13 16:48:29', '2020-03-13 16:48:29'),
(154, 208, 'action started via Async Request', '2020-03-13 16:48:29', '2020-03-13 16:48:29'),
(155, 208, 'action complete via Async Request', '2020-03-13 16:48:29', '2020-03-13 16:48:29'),
(156, 209, 'action started via Async Request', '2020-03-13 16:48:29', '2020-03-13 16:48:29'),
(157, 209, 'action complete via Async Request', '2020-03-13 16:48:29', '2020-03-13 16:48:29'),
(158, 210, 'action started via Async Request', '2020-03-13 16:48:29', '2020-03-13 16:48:29'),
(159, 210, 'action complete via Async Request', '2020-03-13 16:48:29', '2020-03-13 16:48:29'),
(160, 211, 'action started via Async Request', '2020-03-13 16:48:29', '2020-03-13 16:48:29'),
(161, 212, 'action created', '2020-03-13 16:48:29', '2020-03-13 16:48:29'),
(162, 213, 'action created', '2020-03-13 16:48:29', '2020-03-13 16:48:29'),
(163, 211, 'action complete via Async Request', '2020-03-13 16:48:29', '2020-03-13 16:48:29'),
(164, 212, 'action started via Async Request', '2020-03-13 16:48:29', '2020-03-13 16:48:29'),
(165, 212, 'action complete via Async Request', '2020-03-13 16:48:29', '2020-03-13 16:48:29'),
(166, 213, 'action started via Async Request', '2020-03-13 16:48:34', '2020-03-13 16:48:34'),
(167, 213, 'action complete via Async Request', '2020-03-13 16:48:34', '2020-03-13 16:48:34'),
(168, 214, 'action created', '2020-03-13 17:24:17', '2020-03-13 17:24:17'),
(169, 214, 'action started via Async Request', '2020-03-13 17:24:24', '2020-03-13 17:24:24'),
(170, 214, 'action complete via Async Request', '2020-03-13 17:24:24', '2020-03-13 17:24:24'),
(171, 215, 'action created', '2020-03-13 18:18:22', '2020-03-13 18:18:22'),
(172, 215, 'action started via WP Cron', '2020-03-13 18:18:51', '2020-03-13 18:18:51'),
(173, 215, 'action complete via WP Cron', '2020-03-13 18:18:51', '2020-03-13 18:18:51'),
(174, 216, 'action created', '2020-03-13 18:18:51', '2020-03-13 18:18:51'),
(175, 216, 'action started via Async Request', '2020-03-13 18:19:24', '2020-03-13 18:19:24'),
(176, 216, 'action complete via Async Request', '2020-03-13 18:19:24', '2020-03-13 18:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(13, 33, 'WooCommerce', '', '', '', '2020-02-28 19:12:27', '2020-02-28 19:12:27', 'Order cancelled by customer. Order status changed from Pending payment to Cancelled.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(18, 47, 'WooCommerce', '', '', '', '2020-02-28 19:15:24', '2020-02-28 19:15:24', 'Order status changed from Pending payment to Completed.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(24, 50, 'WooCommerce', '', '', '', '2020-02-28 19:18:49', '2020-02-28 19:18:49', 'Order status changed from Pending payment to Completed.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(28, 52, 'WooCommerce', '', '', '', '2020-02-28 19:50:21', '2020-02-28 19:50:21', 'Order status changed from Pending payment to Completed.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(32, 56, 'WooCommerce', '', '', '', '2020-03-02 14:48:18', '2020-03-02 14:48:18', 'Order status changed from Pending payment to Completed.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(38, 68, 'WooCommerce', '', '', '', '2020-03-02 17:44:39', '2020-03-02 17:44:39', 'Order status changed from Pending payment to Completed.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(45, 96, 'WooCommerce', '', '', '', '2020-03-02 18:45:53', '2020-03-02 18:45:53', 'Order status changed from Pending payment to Completed.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(52, 99, 'WooCommerce', '', '', '', '2020-03-02 18:47:58', '2020-03-02 18:47:58', 'Order status changed from Pending payment to Completed.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(59, 102, 'WooCommerce', '', '', '', '2020-03-02 18:51:06', '2020-03-02 18:51:06', 'Order status changed from Pending payment to Processing.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(66, 117, 'WooCommerce', '', '', '', '2020-03-02 19:05:47', '2020-03-02 19:05:47', 'Order status changed from Pending payment to Processing.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(72, 139, 'WooCommerce', '', '', '', '2020-03-02 20:43:14', '2020-03-02 20:43:14', 'Order status changed from Pending payment to Processing.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(76, 141, 'WooCommerce', '', '', '', '2020-03-03 15:23:05', '2020-03-03 15:23:05', 'Order status changed from Pending payment to Processing.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(79, 102, 'collinframe', '231603@shakopeeschools.org', '', '', '2020-03-04 14:28:25', '2020-03-04 14:28:25', 'Order status changed from Processing to Completed.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(80, 102, 'collinframe', '231603@shakopeeschools.org', '', '', '2020-03-04 14:28:25', '2020-03-04 14:28:25', 'Order details manually sent to customer.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(85, 117, 'collinframe', '231603@shakopeeschools.org', '', '', '2020-03-04 14:28:58', '2020-03-04 14:28:58', 'Order status changed by bulk edit: Order status changed from Processing to Completed.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(87, 139, 'collinframe', '231603@shakopeeschools.org', '', '', '2020-03-04 14:28:58', '2020-03-04 14:28:58', 'Order status changed by bulk edit: Order status changed from Processing to Completed.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(89, 141, 'collinframe', '231603@shakopeeschools.org', '', '', '2020-03-04 14:28:59', '2020-03-04 14:28:59', 'Order status changed by bulk edit: Order status changed from Processing to Completed.', 0, '1', 'WooCommerce', 'order_note', 0, 0),
(97, 164, 'WooCommerce', '', '', '', '2020-03-09 16:27:44', '2020-03-09 16:27:44', 'Order status changed from Pending payment to Processing.', 0, '1', 'WooCommerce', 'order_note', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost:8080/wordpress', 'yes'),
(2, 'home', 'http://localhost:8080/wordpress', 'yes'),
(3, 'blogname', 'Papa Johns', 'yes'),
(4, 'blogdescription', 'Better ingredients, Better pizza', 'yes'),
(5, 'users_can_register', '1', 'yes'),
(6, 'admin_email', '231603@shakopeeschools.org', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '0', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'F j, Y', 'yes'),
(24, 'time_format', 'g:i a', 'yes'),
(25, 'links_updated_date_format', 'F j, Y g:i a', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:11:{i:0;s:78:\"advanced-product-wishlist-for-woo/advanced-product-wishlist-for-woocomerce.php\";i:1;s:19:\"akismet/akismet.php\";i:2;s:25:\"cloudflare/cloudflare.php\";i:3;s:19:\"jetpack/jetpack.php\";i:4;s:39:\"user-registration/user-registration.php\";i:5;s:33:\"w3-total-cache/w3-total-cache.php\";i:6;s:31:\"weather-atlas/weather-atlas.php\";i:7;s:39:\"woocommerce-admin/woocommerce-admin.php\";i:8;s:91:\"woocommerce-gateway-paypal-express-checkout/woocommerce-gateway-paypal-express-checkout.php\";i:9;s:45:\"woocommerce-services/woocommerce-services.php\";i:10;s:27:\"woocommerce/woocommerce.php\";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', '', 'no'),
(40, 'template', 'business-consultant-finder', 'yes'),
(41, 'stylesheet', 'bcf-shop', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '45805', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '0', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'posts', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'widget_text', 'a:3:{i:2;a:4:{s:5:\"title\";s:15:\"About This Site\";s:4:\"text\";s:85:\"This may be a good place to introduce yourself and your site or include some credits.\";s:6:\"filter\";b:1;s:6:\"visual\";b:1;}i:3;a:4:{s:5:\"title\";s:7:\"Find Us\";s:4:\"text\";s:168:\"<strong>Address</strong>\n123 Main Street\nNew York, NY 10001\n\n<strong>Hours</strong>\nMonday&mdash;Friday: 9:00AM&ndash;5:00PM\nSaturday &amp; Sunday: 11:00AM&ndash;3:00PM\";s:6:\"filter\";b:1;s:6:\"visual\";b:1;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(80, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(81, 'uninstall_plugins', 'a:1:{s:45:\"woocommerce-services/woocommerce-services.php\";a:2:{i:0;s:17:\"WC_Connect_Loader\";i:1;s:16:\"plugin_uninstall\";}}', 'no'),
(82, 'timezone_string', '', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '0', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '71', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'wp_page_for_privacy_policy', '3', 'yes'),
(92, 'show_comments_cookies_opt_in', '1', 'yes'),
(93, 'admin_email_lifespan', '1598466662', 'yes'),
(94, 'initial_db_version', '45805', 'yes'),
(95, 'wp_user_roles', 'a:7:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:132:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;s:18:\"manage_woocommerce\";b:1;s:24:\"view_woocommerce_reports\";b:1;s:12:\"edit_product\";b:1;s:12:\"read_product\";b:1;s:14:\"delete_product\";b:1;s:13:\"edit_products\";b:1;s:20:\"edit_others_products\";b:1;s:16:\"publish_products\";b:1;s:21:\"read_private_products\";b:1;s:15:\"delete_products\";b:1;s:23:\"delete_private_products\";b:1;s:25:\"delete_published_products\";b:1;s:22:\"delete_others_products\";b:1;s:21:\"edit_private_products\";b:1;s:23:\"edit_published_products\";b:1;s:20:\"manage_product_terms\";b:1;s:18:\"edit_product_terms\";b:1;s:20:\"delete_product_terms\";b:1;s:20:\"assign_product_terms\";b:1;s:15:\"edit_shop_order\";b:1;s:15:\"read_shop_order\";b:1;s:17:\"delete_shop_order\";b:1;s:16:\"edit_shop_orders\";b:1;s:23:\"edit_others_shop_orders\";b:1;s:19:\"publish_shop_orders\";b:1;s:24:\"read_private_shop_orders\";b:1;s:18:\"delete_shop_orders\";b:1;s:26:\"delete_private_shop_orders\";b:1;s:28:\"delete_published_shop_orders\";b:1;s:25:\"delete_others_shop_orders\";b:1;s:24:\"edit_private_shop_orders\";b:1;s:26:\"edit_published_shop_orders\";b:1;s:23:\"manage_shop_order_terms\";b:1;s:21:\"edit_shop_order_terms\";b:1;s:23:\"delete_shop_order_terms\";b:1;s:23:\"assign_shop_order_terms\";b:1;s:16:\"edit_shop_coupon\";b:1;s:16:\"read_shop_coupon\";b:1;s:18:\"delete_shop_coupon\";b:1;s:17:\"edit_shop_coupons\";b:1;s:24:\"edit_others_shop_coupons\";b:1;s:20:\"publish_shop_coupons\";b:1;s:25:\"read_private_shop_coupons\";b:1;s:19:\"delete_shop_coupons\";b:1;s:27:\"delete_private_shop_coupons\";b:1;s:29:\"delete_published_shop_coupons\";b:1;s:26:\"delete_others_shop_coupons\";b:1;s:25:\"edit_private_shop_coupons\";b:1;s:27:\"edit_published_shop_coupons\";b:1;s:24:\"manage_shop_coupon_terms\";b:1;s:22:\"edit_shop_coupon_terms\";b:1;s:24:\"delete_shop_coupon_terms\";b:1;s:24:\"assign_shop_coupon_terms\";b:1;s:24:\"manage_user_registration\";b:1;s:22:\"edit_user_registration\";b:1;s:22:\"read_user_registration\";b:1;s:24:\"delete_user_registration\";b:1;s:23:\"edit_user_registrations\";b:1;s:30:\"edit_others_user_registrations\";b:1;s:26:\"publish_user_registrations\";b:1;s:31:\"read_private_user_registrations\";b:1;s:25:\"delete_user_registrations\";b:1;s:33:\"delete_private_user_registrations\";b:1;s:35:\"delete_published_user_registrations\";b:1;s:32:\"delete_others_user_registrations\";b:1;s:31:\"edit_private_user_registrations\";b:1;s:33:\"edit_published_user_registrations\";b:1;s:30:\"manage_user_registration_terms\";b:1;s:28:\"edit_user_registration_terms\";b:1;s:30:\"delete_user_registration_terms\";b:1;s:30:\"assign_user_registration_terms\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}s:8:\"customer\";a:2:{s:4:\"name\";s:8:\"Customer\";s:12:\"capabilities\";a:1:{s:4:\"read\";b:1;}}s:12:\"shop_manager\";a:2:{s:4:\"name\";s:12:\"Shop manager\";s:12:\"capabilities\";a:92:{s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:4:\"read\";b:1;s:18:\"read_private_pages\";b:1;s:18:\"read_private_posts\";b:1;s:10:\"edit_posts\";b:1;s:10:\"edit_pages\";b:1;s:20:\"edit_published_posts\";b:1;s:20:\"edit_published_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"edit_private_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:17:\"edit_others_pages\";b:1;s:13:\"publish_posts\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_posts\";b:1;s:12:\"delete_pages\";b:1;s:20:\"delete_private_pages\";b:1;s:20:\"delete_private_posts\";b:1;s:22:\"delete_published_pages\";b:1;s:22:\"delete_published_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:19:\"delete_others_pages\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:17:\"moderate_comments\";b:1;s:12:\"upload_files\";b:1;s:6:\"export\";b:1;s:6:\"import\";b:1;s:10:\"list_users\";b:1;s:18:\"edit_theme_options\";b:1;s:18:\"manage_woocommerce\";b:1;s:24:\"view_woocommerce_reports\";b:1;s:12:\"edit_product\";b:1;s:12:\"read_product\";b:1;s:14:\"delete_product\";b:1;s:13:\"edit_products\";b:1;s:20:\"edit_others_products\";b:1;s:16:\"publish_products\";b:1;s:21:\"read_private_products\";b:1;s:15:\"delete_products\";b:1;s:23:\"delete_private_products\";b:1;s:25:\"delete_published_products\";b:1;s:22:\"delete_others_products\";b:1;s:21:\"edit_private_products\";b:1;s:23:\"edit_published_products\";b:1;s:20:\"manage_product_terms\";b:1;s:18:\"edit_product_terms\";b:1;s:20:\"delete_product_terms\";b:1;s:20:\"assign_product_terms\";b:1;s:15:\"edit_shop_order\";b:1;s:15:\"read_shop_order\";b:1;s:17:\"delete_shop_order\";b:1;s:16:\"edit_shop_orders\";b:1;s:23:\"edit_others_shop_orders\";b:1;s:19:\"publish_shop_orders\";b:1;s:24:\"read_private_shop_orders\";b:1;s:18:\"delete_shop_orders\";b:1;s:26:\"delete_private_shop_orders\";b:1;s:28:\"delete_published_shop_orders\";b:1;s:25:\"delete_others_shop_orders\";b:1;s:24:\"edit_private_shop_orders\";b:1;s:26:\"edit_published_shop_orders\";b:1;s:23:\"manage_shop_order_terms\";b:1;s:21:\"edit_shop_order_terms\";b:1;s:23:\"delete_shop_order_terms\";b:1;s:23:\"assign_shop_order_terms\";b:1;s:16:\"edit_shop_coupon\";b:1;s:16:\"read_shop_coupon\";b:1;s:18:\"delete_shop_coupon\";b:1;s:17:\"edit_shop_coupons\";b:1;s:24:\"edit_others_shop_coupons\";b:1;s:20:\"publish_shop_coupons\";b:1;s:25:\"read_private_shop_coupons\";b:1;s:19:\"delete_shop_coupons\";b:1;s:27:\"delete_private_shop_coupons\";b:1;s:29:\"delete_published_shop_coupons\";b:1;s:26:\"delete_others_shop_coupons\";b:1;s:25:\"edit_private_shop_coupons\";b:1;s:27:\"edit_published_shop_coupons\";b:1;s:24:\"manage_shop_coupon_terms\";b:1;s:22:\"edit_shop_coupon_terms\";b:1;s:24:\"delete_shop_coupon_terms\";b:1;s:24:\"assign_shop_coupon_terms\";b:1;}}}', 'yes'),
(96, 'fresh_site', '0', 'yes'),
(97, 'widget_search', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(98, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(99, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(100, 'widget_archives', 'a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(101, 'widget_meta', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(102, 'sidebars_widgets', 'a:6:{s:19:\"wp_inactive_widgets\";a:3:{i:0;s:6:\"text-2\";i:1;s:6:\"text-3\";i:2;s:8:\"search-2\";}s:9:\"sidebar-1\";a:4:{i:0;s:25:\"woocommerce_widget_cart-3\";i:1;s:28:\"woocommerce_product_search-3\";i:2;s:38:\"woocommerce_recently_viewed_products-3\";i:3;s:15:\"weather_atlas-3\";}s:10:\"logo-right\";a:0:{}s:6:\"footer\";a:1:{i:0;s:15:\"weather_atlas-2\";}s:18:\"front_page_sidebar\";a:0:{}s:13:\"array_version\";i:3;}', 'yes'),
(103, 'cron', 'a:18:{i:1586276508;a:1:{s:26:\"action_scheduler_run_queue\";a:1:{s:32:\"0d04ed39571b55704c122d726248bbac\";a:3:{s:8:\"schedule\";s:12:\"every_minute\";s:4:\"args\";a:1:{i:0;s:7:\"WP Cron\";}s:8:\"interval\";i:60;}}}i:1586277064;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1586277839;a:2:{s:33:\"woocommerce_cleanup_personal_data\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:30:\"woocommerce_tracker_send_event\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1586278398;a:1:{s:20:\"jetpack_clean_nonces\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1586278409;a:1:{s:33:\"wc_admin_process_orders_milestone\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1586278414;a:1:{s:29:\"wc_admin_unsnooze_admin_notes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1586278926;a:1:{s:32:\"woocommerce_cancel_unpaid_orders\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:2:{s:8:\"schedule\";b:0;s:4:\"args\";a:0:{}}}}i:1586281013;a:1:{s:24:\"akismet_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1586284263;a:1:{s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1586284264;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1586284279;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1586284280;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1586285605;a:1:{s:14:\"wc_admin_daily\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1586288629;a:1:{s:24:\"woocommerce_cleanup_logs\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1586296929;a:1:{s:29:\"akismet_schedule_cron_recheck\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:2:{s:8:\"schedule\";b:0;s:4:\"args\";a:0:{}}}}i:1586299429;a:1:{s:28:\"woocommerce_cleanup_sessions\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1586709889;a:1:{s:25:\"woocommerce_geoip_updater\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:11:\"fifteendays\";s:4:\"args\";a:0:{}s:8:\"interval\";i:1296000;}}}s:7:\"version\";i:2;}', 'yes'),
(104, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(105, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(114, 'recovery_keys', 'a:0:{}', 'yes'),
(115, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:2:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:7:\"upgrade\";s:8:\"download\";s:57:\"https://downloads.wordpress.org/release/wordpress-5.4.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:57:\"https://downloads.wordpress.org/release/wordpress-5.4.zip\";s:10:\"no_content\";s:68:\"https://downloads.wordpress.org/release/wordpress-5.4-no-content.zip\";s:11:\"new_bundled\";s:69:\"https://downloads.wordpress.org/release/wordpress-5.4-new-bundled.zip\";s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:3:\"5.4\";s:7:\"version\";s:3:\"5.4\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.3\";s:15:\"partial_version\";s:0:\"\";}i:1;O:8:\"stdClass\":11:{s:8:\"response\";s:10:\"autoupdate\";s:8:\"download\";s:57:\"https://downloads.wordpress.org/release/wordpress-5.4.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:57:\"https://downloads.wordpress.org/release/wordpress-5.4.zip\";s:10:\"no_content\";s:68:\"https://downloads.wordpress.org/release/wordpress-5.4-no-content.zip\";s:11:\"new_bundled\";s:69:\"https://downloads.wordpress.org/release/wordpress-5.4-new-bundled.zip\";s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:3:\"5.4\";s:7:\"version\";s:3:\"5.4\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.3\";s:15:\"partial_version\";s:0:\"\";s:9:\"new_files\";s:1:\"1\";}}s:12:\"last_checked\";i:1586275327;s:15:\"version_checked\";s:5:\"5.3.2\";s:12:\"translations\";a:0:{}}', 'no'),
(121, 'theme_mods_twentytwenty', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1582915661;s:4:\"data\";a:3:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:3:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";}s:9:\"sidebar-2\";a:3:{i:0;s:10:\"archives-2\";i:1;s:12:\"categories-2\";i:2;s:6:\"meta-2\";}}}}', 'yes'),
(128, 'can_compress_scripts', '0', 'no'),
(147, 'theme_mods_healthexx', 'a:1:{s:18:\"custom_css_post_id\";i:-1;}', 'yes'),
(154, 'theme_mods_dro-pizza', 'a:4:{s:18:\"custom_css_post_id\";i:-1;s:12:\"header_image\";s:72:\"http://localhost:8080/wordpress/wp-content/uploads/2020/02/papajohn.jpeg\";s:17:\"header_image_data\";O:8:\"stdClass\":5:{s:13:\"attachment_id\";i:20;s:3:\"url\";s:72:\"http://localhost:8080/wordpress/wp-content/uploads/2020/02/papajohn.jpeg\";s:13:\"thumbnail_url\";s:72:\"http://localhost:8080/wordpress/wp-content/uploads/2020/02/papajohn.jpeg\";s:6:\"height\";i:852;s:5:\"width\";i:1136;}s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1582916774;s:4:\"data\";a:3:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:3:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";}s:9:\"sidebar-2\";a:3:{i:0;s:10:\"archives-2\";i:1;s:12:\"categories-2\";i:2;s:6:\"meta-2\";}}}}', 'yes'),
(155, 'current_theme', 'BCF Shop', 'yes'),
(156, 'theme_switched', '', 'yes'),
(157, 'theme_switched_via_customizer', '', 'yes'),
(158, 'customize_stashed_theme_mods', 'a:0:{}', 'no'),
(162, 'recently_activated', 'a:1:{s:47:\"really-simple-ssl/rlrsssl-really-simple-ssl.php\";i:1584120257;}', 'yes'),
(169, 'woocommerce_store_address', '1028 Prairie St S', 'yes'),
(170, 'woocommerce_store_address_2', '', 'yes'),
(171, 'woocommerce_store_city', 'Shakopee', 'yes'),
(172, 'woocommerce_default_country', 'US:MN', 'yes'),
(173, 'woocommerce_store_postcode', '55379', 'yes'),
(174, 'woocommerce_allowed_countries', 'all', 'yes'),
(175, 'woocommerce_all_except_countries', '', 'yes'),
(176, 'woocommerce_specific_allowed_countries', '', 'yes'),
(177, 'woocommerce_ship_to_countries', '', 'yes'),
(178, 'woocommerce_specific_ship_to_countries', '', 'yes'),
(179, 'woocommerce_default_customer_address', 'base', 'yes'),
(180, 'woocommerce_calc_taxes', 'yes', 'yes'),
(181, 'woocommerce_enable_coupons', 'yes', 'yes'),
(182, 'woocommerce_calc_discounts_sequentially', 'no', 'no'),
(183, 'woocommerce_currency', 'USD', 'yes'),
(184, 'woocommerce_currency_pos', 'left', 'yes'),
(185, 'woocommerce_price_thousand_sep', ',', 'yes'),
(186, 'woocommerce_price_decimal_sep', '.', 'yes'),
(187, 'woocommerce_price_num_decimals', '2', 'yes'),
(188, 'woocommerce_shop_page_id', '25', 'yes'),
(189, 'woocommerce_cart_redirect_after_add', 'no', 'yes'),
(190, 'woocommerce_enable_ajax_add_to_cart', 'yes', 'yes'),
(191, 'woocommerce_placeholder_image', '24', 'yes'),
(192, 'woocommerce_weight_unit', 'oz', 'yes'),
(193, 'woocommerce_dimension_unit', 'in', 'yes'),
(194, 'woocommerce_enable_reviews', 'yes', 'yes'),
(195, 'woocommerce_review_rating_verification_label', 'yes', 'no'),
(196, 'woocommerce_review_rating_verification_required', 'no', 'no'),
(197, 'woocommerce_enable_review_rating', 'yes', 'yes'),
(198, 'woocommerce_review_rating_required', 'yes', 'no'),
(199, 'woocommerce_manage_stock', 'yes', 'yes'),
(200, 'woocommerce_hold_stock_minutes', '60', 'no'),
(201, 'woocommerce_notify_low_stock', 'yes', 'no'),
(202, 'woocommerce_notify_no_stock', 'yes', 'no'),
(203, 'woocommerce_stock_email_recipient', '231603@shakopeeschools.org', 'no'),
(204, 'woocommerce_notify_low_stock_amount', '2', 'no'),
(205, 'woocommerce_notify_no_stock_amount', '0', 'yes'),
(206, 'woocommerce_hide_out_of_stock_items', 'no', 'yes'),
(207, 'woocommerce_stock_format', '', 'yes'),
(208, 'woocommerce_file_download_method', 'force', 'no'),
(209, 'woocommerce_downloads_require_login', 'no', 'no'),
(210, 'woocommerce_downloads_grant_access_after_payment', 'yes', 'no'),
(211, 'woocommerce_prices_include_tax', 'no', 'yes'),
(212, 'woocommerce_tax_based_on', 'shipping', 'yes'),
(213, 'woocommerce_shipping_tax_class', 'inherit', 'yes'),
(214, 'woocommerce_tax_round_at_subtotal', 'no', 'yes'),
(215, 'woocommerce_tax_classes', '', 'yes'),
(216, 'woocommerce_tax_display_shop', 'excl', 'yes'),
(217, 'woocommerce_tax_display_cart', 'excl', 'yes'),
(218, 'woocommerce_price_display_suffix', '', 'yes'),
(219, 'woocommerce_tax_total_display', 'itemized', 'no'),
(220, 'woocommerce_enable_shipping_calc', 'yes', 'no'),
(221, 'woocommerce_shipping_cost_requires_address', 'no', 'yes'),
(222, 'woocommerce_ship_to_destination', 'billing', 'no'),
(223, 'woocommerce_shipping_debug_mode', 'no', 'yes'),
(224, 'woocommerce_enable_guest_checkout', 'yes', 'no'),
(225, 'woocommerce_enable_checkout_login_reminder', 'no', 'no'),
(226, 'woocommerce_enable_signup_and_login_from_checkout', 'no', 'no'),
(227, 'woocommerce_enable_myaccount_registration', 'no', 'no'),
(228, 'woocommerce_registration_generate_username', 'yes', 'no'),
(229, 'woocommerce_registration_generate_password', 'yes', 'no'),
(230, 'woocommerce_erasure_request_removes_order_data', 'no', 'no'),
(231, 'woocommerce_erasure_request_removes_download_data', 'no', 'no'),
(232, 'woocommerce_allow_bulk_remove_personal_data', 'no', 'no'),
(233, 'woocommerce_registration_privacy_policy_text', 'Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our [privacy_policy].', 'yes'),
(234, 'woocommerce_checkout_privacy_policy_text', 'Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our [privacy_policy].', 'yes'),
(235, 'woocommerce_delete_inactive_accounts', 'a:2:{s:6:\"number\";s:0:\"\";s:4:\"unit\";s:6:\"months\";}', 'no'),
(236, 'woocommerce_trash_pending_orders', '', 'no'),
(237, 'woocommerce_trash_failed_orders', '', 'no'),
(238, 'woocommerce_trash_cancelled_orders', '', 'no'),
(239, 'woocommerce_anonymize_completed_orders', 'a:2:{s:6:\"number\";s:0:\"\";s:4:\"unit\";s:6:\"months\";}', 'no'),
(240, 'woocommerce_email_from_name', 'Papa Johns', 'no'),
(241, 'woocommerce_email_from_address', '231603@shakopeeschools.org', 'no'),
(242, 'woocommerce_email_header_image', '', 'no'),
(243, 'woocommerce_email_footer_text', '{site_title} &mdash; Built with {WooCommerce}', 'no'),
(244, 'woocommerce_email_base_color', '#96588a', 'no'),
(245, 'woocommerce_email_background_color', '#f7f7f7', 'no'),
(246, 'woocommerce_email_body_background_color', '#ffffff', 'no'),
(247, 'woocommerce_email_text_color', '#3c3c3c', 'no'),
(248, 'woocommerce_cart_page_id', '26', 'no'),
(249, 'woocommerce_checkout_page_id', '27', 'no'),
(250, 'woocommerce_myaccount_page_id', '28', 'no'),
(251, 'woocommerce_terms_page_id', '', 'no'),
(252, 'woocommerce_force_ssl_checkout', 'no', 'yes'),
(253, 'woocommerce_unforce_ssl_checkout', 'no', 'yes'),
(254, 'woocommerce_checkout_pay_endpoint', 'order-pay', 'yes'),
(255, 'woocommerce_checkout_order_received_endpoint', 'order-received', 'yes'),
(256, 'woocommerce_myaccount_add_payment_method_endpoint', 'add-payment-method', 'yes'),
(257, 'woocommerce_myaccount_delete_payment_method_endpoint', 'delete-payment-method', 'yes'),
(258, 'woocommerce_myaccount_set_default_payment_method_endpoint', 'set-default-payment-method', 'yes'),
(259, 'woocommerce_myaccount_orders_endpoint', 'orders', 'yes'),
(260, 'woocommerce_myaccount_view_order_endpoint', 'view-order', 'yes'),
(261, 'woocommerce_myaccount_downloads_endpoint', 'downloads', 'yes'),
(262, 'woocommerce_myaccount_edit_account_endpoint', 'edit-account', 'yes'),
(263, 'woocommerce_myaccount_edit_address_endpoint', 'edit-address', 'yes'),
(264, 'woocommerce_myaccount_payment_methods_endpoint', 'payment-methods', 'yes'),
(265, 'woocommerce_myaccount_lost_password_endpoint', 'lost-password', 'yes'),
(266, 'woocommerce_logout_endpoint', 'customer-logout', 'yes'),
(267, 'woocommerce_api_enabled', 'no', 'yes'),
(268, 'woocommerce_allow_tracking', 'no', 'no'),
(269, 'woocommerce_show_marketplace_suggestions', 'yes', 'no'),
(270, 'woocommerce_single_image_width', '600', 'yes'),
(271, 'woocommerce_thumbnail_image_width', '300', 'yes'),
(272, 'woocommerce_checkout_highlight_required_fields', 'yes', 'yes'),
(273, 'woocommerce_demo_store', 'no', 'no'),
(274, 'woocommerce_permalinks', 'a:5:{s:12:\"product_base\";s:7:\"product\";s:13:\"category_base\";s:16:\"product-category\";s:8:\"tag_base\";s:11:\"product-tag\";s:14:\"attribute_base\";s:0:\"\";s:22:\"use_verbose_page_rules\";b:0;}', 'yes'),
(275, 'current_theme_supports_woocommerce', 'yes', 'yes'),
(276, 'woocommerce_queue_flush_rewrite_rules', 'no', 'yes'),
(279, 'default_product_cat', '15', 'yes'),
(284, 'woocommerce_admin_notices', 'a:0:{}', 'yes'),
(285, 'woocommerce_maxmind_geolocation_settings', 'a:1:{s:15:\"database_prefix\";s:32:\"kVyJR57F7KHnUhxcc3jIwK3wTYBb9sYR\";}', 'yes'),
(286, '_transient_woocommerce_webhook_ids_status_active', 'a:0:{}', 'yes'),
(287, 'widget_woocommerce_widget_cart', 'a:2:{s:12:\"_multiwidget\";i:1;i:3;a:0:{}}', 'yes'),
(288, 'widget_woocommerce_layered_nav_filters', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(289, 'widget_woocommerce_layered_nav', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(290, 'widget_woocommerce_price_filter', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(291, 'widget_woocommerce_product_categories', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(292, 'widget_woocommerce_product_search', 'a:2:{s:12:\"_multiwidget\";i:1;i:3;a:0:{}}', 'yes'),
(293, 'widget_woocommerce_product_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(294, 'widget_woocommerce_products', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(295, 'widget_woocommerce_recently_viewed_products', 'a:2:{s:12:\"_multiwidget\";i:1;i:3;a:2:{s:5:\"title\";s:24:\"Recently Viewed Products\";s:6:\"number\";i:3;}}', 'yes'),
(296, 'widget_woocommerce_top_rated_products', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(297, 'widget_woocommerce_recent_reviews', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(298, 'widget_woocommerce_rating_filter', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(303, 'woocommerce_meta_box_errors', 'a:0:{}', 'yes'),
(307, 'woocommerce_setup_ab_wc_admin_onboarding', 'a', 'yes'),
(308, 'woocommerce_product_type', 'virtual', 'yes'),
(311, 'woocommerce_stripe_settings', 'a:3:{s:7:\"enabled\";s:2:\"no\";s:14:\"create_account\";b:0;s:5:\"email\";b:0;}', 'yes'),
(313, 'woocommerce_ppec_paypal_settings', 'a:53:{s:7:\"enabled\";s:3:\"yes\";s:16:\"reroute_requests\";s:3:\"yes\";s:5:\"email\";s:15:\"admin@cframe.cf\";s:11:\"environment\";s:4:\"live\";s:12:\"api_username\";s:20:\"admin_api1.cframe.cf\";s:12:\"api_password\";s:16:\"X75639QS5RAFUNEG\";s:13:\"api_signature\";s:56:\"AO7FPSHIQQLdyn63LD1NCalMvSW1A4HPa9eZuxlcnGZoByoaBQe-9Xdz\";s:15:\"api_certificate\";s:0:\"\";s:11:\"api_subject\";s:0:\"\";s:5:\"title\";s:6:\"PayPal\";s:11:\"description\";s:85:\"Pay via PayPal; you can pay with your credit card if you don\'t have a PayPal account.\";s:20:\"sandbox_api_username\";s:0:\"\";s:20:\"sandbox_api_password\";s:0:\"\";s:21:\"sandbox_api_signature\";s:0:\"\";s:23:\"sandbox_api_certificate\";s:0:\"\";s:19:\"sandbox_api_subject\";s:0:\"\";s:10:\"brand_name\";s:10:\"Papa Johns\";s:14:\"logo_image_url\";s:0:\"\";s:16:\"header_image_url\";s:0:\"\";s:10:\"page_style\";s:0:\"\";s:12:\"landing_page\";s:5:\"Login\";s:5:\"debug\";s:2:\"no\";s:14:\"invoice_prefix\";s:3:\"WC-\";s:15:\"require_billing\";s:2:\"no\";s:20:\"require_phone_number\";s:2:\"no\";s:13:\"paymentaction\";s:4:\"sale\";s:16:\"instant_payments\";s:2:\"no\";s:26:\"subtotal_mismatch_behavior\";s:3:\"add\";s:7:\"use_spb\";s:3:\"yes\";s:12:\"button_color\";s:4:\"gold\";s:12:\"button_shape\";s:4:\"rect\";s:13:\"button_layout\";s:8:\"vertical\";s:11:\"button_size\";s:10:\"responsive\";s:20:\"hide_funding_methods\";a:1:{i:0;s:4:\"CARD\";}s:14:\"credit_enabled\";s:3:\"yes\";s:21:\"cart_checkout_enabled\";s:3:\"yes\";s:25:\"mini_cart_settings_toggle\";s:2:\"no\";s:23:\"mini_cart_button_layout\";s:8:\"vertical\";s:21:\"mini_cart_button_size\";s:10:\"responsive\";s:30:\"mini_cart_hide_funding_methods\";a:1:{i:0;s:4:\"CARD\";}s:24:\"mini_cart_credit_enabled\";s:3:\"yes\";s:34:\"checkout_on_single_product_enabled\";s:3:\"yes\";s:30:\"single_product_settings_toggle\";s:3:\"yes\";s:28:\"single_product_button_layout\";s:10:\"horizontal\";s:26:\"single_product_button_size\";s:10:\"responsive\";s:35:\"single_product_hide_funding_methods\";a:1:{i:0;s:4:\"CARD\";}s:29:\"single_product_credit_enabled\";s:3:\"yes\";s:12:\"mark_enabled\";s:3:\"yes\";s:20:\"mark_settings_toggle\";s:2:\"no\";s:18:\"mark_button_layout\";s:8:\"vertical\";s:16:\"mark_button_size\";s:10:\"responsive\";s:25:\"mark_hide_funding_methods\";a:1:{i:0;s:4:\"CARD\";}s:19:\"mark_credit_enabled\";s:3:\"yes\";}', 'yes'),
(314, 'woocommerce_cheque_settings', 'a:1:{s:7:\"enabled\";s:2:\"no\";}', 'yes'),
(315, 'woocommerce_bacs_settings', 'a:1:{s:7:\"enabled\";s:2:\"no\";}', 'yes'),
(316, 'woocommerce_cod_settings', 'a:1:{s:7:\"enabled\";s:2:\"no\";}', 'yes'),
(317, 'jetpack_activated', '1', 'yes'),
(320, 'jetpack_activation_source', 'a:2:{i:0;s:7:\"unknown\";i:1;N;}', 'yes'),
(321, 'jetpack_options', 'a:4:{s:7:\"version\";s:14:\"8.3:1583331832\";s:11:\"old_version\";s:16:\"8.2.3:1582915980\";s:28:\"fallback_no_verify_ssl_certs\";i:0;s:9:\"time_diff\";i:0;}', 'yes'),
(322, 'jetpack_sync_settings_disable', '0', 'yes'),
(323, 'wc_ppec_version', '1.6.20', 'yes'),
(327, 'jetpack_testimonial', '0', 'yes'),
(335, 'do_activate', '0', 'yes'),
(340, 'woocommerce_setup_automated_taxes', '1', 'yes'),
(342, 'woocommerce_onboarding_opt_in', 'no', 'yes'),
(344, 'woocommerce_admin_install_timestamp', '', 'yes'),
(345, 'woocommerce_onboarding_profile', 'a:1:{s:9:\"completed\";b:1;}', 'yes'),
(346, 'woocommerce_admin_last_orders_milestone', '10', 'yes'),
(352, '_transient_product_query-transient-version', '1586275917', 'yes'),
(357, 'jetpack_available_modules', 'a:1:{s:3:\"8.3\";a:41:{s:8:\"carousel\";s:3:\"1.5\";s:13:\"comment-likes\";s:3:\"5.1\";s:8:\"comments\";s:3:\"1.4\";s:12:\"contact-form\";s:3:\"1.3\";s:9:\"copy-post\";s:3:\"7.0\";s:20:\"custom-content-types\";s:3:\"3.1\";s:10:\"custom-css\";s:3:\"1.7\";s:21:\"enhanced-distribution\";s:3:\"1.2\";s:16:\"google-analytics\";s:3:\"4.5\";s:19:\"gravatar-hovercards\";s:3:\"1.1\";s:15:\"infinite-scroll\";s:3:\"2.0\";s:8:\"json-api\";s:3:\"1.9\";s:5:\"latex\";s:3:\"1.1\";s:11:\"lazy-images\";s:5:\"5.6.0\";s:5:\"likes\";s:3:\"2.2\";s:8:\"markdown\";s:3:\"2.8\";s:9:\"masterbar\";s:3:\"4.8\";s:7:\"monitor\";s:3:\"2.6\";s:5:\"notes\";s:3:\"1.9\";s:10:\"photon-cdn\";s:3:\"6.6\";s:6:\"photon\";s:3:\"2.0\";s:13:\"post-by-email\";s:3:\"2.0\";s:7:\"protect\";s:3:\"3.4\";s:9:\"publicize\";s:3:\"2.0\";s:13:\"related-posts\";s:3:\"2.9\";s:6:\"search\";s:3:\"5.0\";s:9:\"seo-tools\";s:3:\"4.4\";s:10:\"sharedaddy\";s:3:\"1.1\";s:10:\"shortcodes\";s:3:\"1.1\";s:10:\"shortlinks\";s:3:\"1.1\";s:8:\"sitemaps\";s:3:\"3.9\";s:3:\"sso\";s:3:\"2.6\";s:5:\"stats\";s:3:\"1.1\";s:13:\"subscriptions\";s:3:\"1.2\";s:13:\"tiled-gallery\";s:3:\"2.1\";s:10:\"vaultpress\";s:5:\"0:1.2\";s:18:\"verification-tools\";s:3:\"3.0\";s:10:\"videopress\";s:3:\"2.5\";s:17:\"widget-visibility\";s:3:\"2.4\";s:7:\"widgets\";s:3:\"1.2\";s:7:\"wordads\";s:5:\"4.5.0\";}}', 'yes');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(361, 'woocommerce_marketplace_suggestions', 'a:2:{s:11:\"suggestions\";a:28:{i:0;a:4:{s:4:\"slug\";s:28:\"product-edit-meta-tab-header\";s:7:\"context\";s:28:\"product-edit-meta-tab-header\";s:5:\"title\";s:22:\"Recommended extensions\";s:13:\"allow-dismiss\";b:0;}i:1;a:6:{s:4:\"slug\";s:39:\"product-edit-meta-tab-footer-browse-all\";s:7:\"context\";s:28:\"product-edit-meta-tab-footer\";s:9:\"link-text\";s:21:\"Browse all extensions\";s:3:\"url\";s:64:\"https://woocommerce.com/product-category/woocommerce-extensions/\";s:8:\"promoted\";s:31:\"category-woocommerce-extensions\";s:13:\"allow-dismiss\";b:0;}i:2;a:9:{s:4:\"slug\";s:46:\"product-edit-mailchimp-woocommerce-memberships\";s:7:\"product\";s:33:\"woocommerce-memberships-mailchimp\";s:14:\"show-if-active\";a:1:{i:0;s:23:\"woocommerce-memberships\";}s:7:\"context\";a:1:{i:0;s:26:\"product-edit-meta-tab-body\";}s:4:\"icon\";s:117:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/mailchimp-for-memberships.svg\";s:5:\"title\";s:25:\"Mailchimp for Memberships\";s:4:\"copy\";s:79:\"Completely automate your email lists by syncing membership changes to Mailchimp\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:67:\"https://woocommerce.com/products/mailchimp-woocommerce-memberships/\";}i:3;a:9:{s:4:\"slug\";s:19:\"product-edit-addons\";s:7:\"product\";s:26:\"woocommerce-product-addons\";s:14:\"show-if-active\";a:2:{i:0;s:25:\"woocommerce-subscriptions\";i:1;s:20:\"woocommerce-bookings\";}s:7:\"context\";a:1:{i:0;s:26:\"product-edit-meta-tab-body\";}s:4:\"icon\";s:107:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/product-add-ons.svg\";s:5:\"title\";s:15:\"Product Add-Ons\";s:4:\"copy\";s:93:\"Offer add-ons like gift wrapping, special messages or other special options for your products\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:49:\"https://woocommerce.com/products/product-add-ons/\";}i:4;a:9:{s:4:\"slug\";s:46:\"product-edit-woocommerce-subscriptions-gifting\";s:7:\"product\";s:33:\"woocommerce-subscriptions-gifting\";s:14:\"show-if-active\";a:1:{i:0;s:25:\"woocommerce-subscriptions\";}s:7:\"context\";a:1:{i:0;s:26:\"product-edit-meta-tab-body\";}s:4:\"icon\";s:117:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/gifting-for-subscriptions.svg\";s:5:\"title\";s:25:\"Gifting for Subscriptions\";s:4:\"copy\";s:70:\"Let customers buy subscriptions for others - they\'re the ultimate gift\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:67:\"https://woocommerce.com/products/woocommerce-subscriptions-gifting/\";}i:5;a:9:{s:4:\"slug\";s:42:\"product-edit-teams-woocommerce-memberships\";s:7:\"product\";s:33:\"woocommerce-memberships-for-teams\";s:14:\"show-if-active\";a:1:{i:0;s:23:\"woocommerce-memberships\";}s:7:\"context\";a:1:{i:0;s:26:\"product-edit-meta-tab-body\";}s:4:\"icon\";s:113:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/teams-for-memberships.svg\";s:5:\"title\";s:21:\"Teams for Memberships\";s:4:\"copy\";s:123:\"Adds B2B functionality to WooCommerce Memberships, allowing sites to sell team, group, corporate, or family member accounts\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:63:\"https://woocommerce.com/products/teams-woocommerce-memberships/\";}i:6;a:8:{s:4:\"slug\";s:29:\"product-edit-variation-images\";s:7:\"product\";s:39:\"woocommerce-additional-variation-images\";s:7:\"context\";a:1:{i:0;s:26:\"product-edit-meta-tab-body\";}s:4:\"icon\";s:119:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/additional-variation-images.svg\";s:5:\"title\";s:27:\"Additional Variation Images\";s:4:\"copy\";s:72:\"Showcase your products in the best light with a image for each variation\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:73:\"https://woocommerce.com/products/woocommerce-additional-variation-images/\";}i:7;a:9:{s:4:\"slug\";s:47:\"product-edit-woocommerce-subscription-downloads\";s:7:\"product\";s:34:\"woocommerce-subscription-downloads\";s:14:\"show-if-active\";a:1:{i:0;s:25:\"woocommerce-subscriptions\";}s:7:\"context\";a:1:{i:0;s:26:\"product-edit-meta-tab-body\";}s:4:\"icon\";s:114:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/subscription-downloads.svg\";s:5:\"title\";s:22:\"Subscription Downloads\";s:4:\"copy\";s:57:\"Give customers special downloads with their subscriptions\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:68:\"https://woocommerce.com/products/woocommerce-subscription-downloads/\";}i:8;a:8:{s:4:\"slug\";s:31:\"product-edit-min-max-quantities\";s:7:\"product\";s:30:\"woocommerce-min-max-quantities\";s:7:\"context\";a:1:{i:0;s:26:\"product-edit-meta-tab-body\";}s:4:\"icon\";s:110:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/min-max-quantities.svg\";s:5:\"title\";s:18:\"Min/Max Quantities\";s:4:\"copy\";s:81:\"Specify minimum and maximum allowed product quantities for orders to be completed\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:52:\"https://woocommerce.com/products/min-max-quantities/\";}i:9;a:8:{s:4:\"slug\";s:28:\"product-edit-name-your-price\";s:7:\"product\";s:27:\"woocommerce-name-your-price\";s:7:\"context\";a:1:{i:0;s:26:\"product-edit-meta-tab-body\";}s:4:\"icon\";s:107:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/name-your-price.svg\";s:5:\"title\";s:15:\"Name Your Price\";s:4:\"copy\";s:70:\"Let customers pay what they want - useful for donations, tips and more\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:49:\"https://woocommerce.com/products/name-your-price/\";}i:10;a:8:{s:4:\"slug\";s:42:\"product-edit-woocommerce-one-page-checkout\";s:7:\"product\";s:29:\"woocommerce-one-page-checkout\";s:7:\"context\";a:1:{i:0;s:26:\"product-edit-meta-tab-body\";}s:4:\"icon\";s:109:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/one-page-checkout.svg\";s:5:\"title\";s:17:\"One Page Checkout\";s:4:\"copy\";s:92:\"Don\'t make customers click around - let them choose products, checkout & pay all on one page\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:63:\"https://woocommerce.com/products/woocommerce-one-page-checkout/\";}i:11;a:4:{s:4:\"slug\";s:19:\"orders-empty-header\";s:7:\"context\";s:24:\"orders-list-empty-header\";s:5:\"title\";s:20:\"Tools for your store\";s:13:\"allow-dismiss\";b:0;}i:12;a:6:{s:4:\"slug\";s:30:\"orders-empty-footer-browse-all\";s:7:\"context\";s:24:\"orders-list-empty-footer\";s:9:\"link-text\";s:21:\"Browse all extensions\";s:3:\"url\";s:64:\"https://woocommerce.com/product-category/woocommerce-extensions/\";s:8:\"promoted\";s:31:\"category-woocommerce-extensions\";s:13:\"allow-dismiss\";b:0;}i:13;a:8:{s:4:\"slug\";s:19:\"orders-empty-zapier\";s:7:\"context\";s:22:\"orders-list-empty-body\";s:7:\"product\";s:18:\"woocommerce-zapier\";s:4:\"icon\";s:98:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/zapier.svg\";s:5:\"title\";s:6:\"Zapier\";s:4:\"copy\";s:88:\"Save time and increase productivity by connecting your store to more than 1000+ services\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:52:\"https://woocommerce.com/products/woocommerce-zapier/\";}i:14;a:8:{s:4:\"slug\";s:30:\"orders-empty-shipment-tracking\";s:7:\"context\";s:22:\"orders-list-empty-body\";s:7:\"product\";s:29:\"woocommerce-shipment-tracking\";s:4:\"icon\";s:109:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/shipment-tracking.svg\";s:5:\"title\";s:17:\"Shipment Tracking\";s:4:\"copy\";s:86:\"Let customers know when their orders will arrive by adding shipment tracking to emails\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:51:\"https://woocommerce.com/products/shipment-tracking/\";}i:15;a:8:{s:4:\"slug\";s:32:\"orders-empty-table-rate-shipping\";s:7:\"context\";s:22:\"orders-list-empty-body\";s:7:\"product\";s:31:\"woocommerce-table-rate-shipping\";s:4:\"icon\";s:111:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/table-rate-shipping.svg\";s:5:\"title\";s:19:\"Table Rate Shipping\";s:4:\"copy\";s:122:\"Advanced, flexible shipping. Define multiple shipping rates based on location, price, weight, shipping class or item count\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:53:\"https://woocommerce.com/products/table-rate-shipping/\";}i:16;a:8:{s:4:\"slug\";s:40:\"orders-empty-shipping-carrier-extensions\";s:7:\"context\";s:22:\"orders-list-empty-body\";s:4:\"icon\";s:119:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/shipping-carrier-extensions.svg\";s:5:\"title\";s:27:\"Shipping Carrier Extensions\";s:4:\"copy\";s:116:\"Show live rates from FedEx, UPS, USPS and more directly on your store - never under or overcharge for shipping again\";s:11:\"button-text\";s:13:\"Find Carriers\";s:8:\"promoted\";s:26:\"category-shipping-carriers\";s:3:\"url\";s:99:\"https://woocommerce.com/product-category/woocommerce-extensions/shipping-methods/shipping-carriers/\";}i:17;a:8:{s:4:\"slug\";s:32:\"orders-empty-google-product-feed\";s:7:\"context\";s:22:\"orders-list-empty-body\";s:7:\"product\";s:25:\"woocommerce-product-feeds\";s:4:\"icon\";s:111:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/google-product-feed.svg\";s:5:\"title\";s:19:\"Google Product Feed\";s:4:\"copy\";s:76:\"Increase sales by letting customers find you when they\'re shopping on Google\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:53:\"https://woocommerce.com/products/google-product-feed/\";}i:18;a:8:{s:4:\"slug\";s:27:\"orders-empty-stripe-payment\";s:7:\"context\";s:22:\"orders-list-empty-body\";s:7:\"product\";s:26:\"woocommerce-gateway-stripe\";s:4:\"icon\";s:106:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/stripe-payment.svg\";s:5:\"title\";s:6:\"Stripe\";s:4:\"copy\";s:132:\"The complete payments platform engineered for growth. Millions around the globe use Stripe to start, run and scale their businesses.\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:40:\"https://woocommerce.com/products/stripe/\";}i:19;a:4:{s:4:\"slug\";s:35:\"products-empty-header-product-types\";s:7:\"context\";s:26:\"products-list-empty-header\";s:5:\"title\";s:23:\"Other types of products\";s:13:\"allow-dismiss\";b:0;}i:20;a:6:{s:4:\"slug\";s:32:\"products-empty-footer-browse-all\";s:7:\"context\";s:26:\"products-list-empty-footer\";s:9:\"link-text\";s:21:\"Browse all extensions\";s:3:\"url\";s:64:\"https://woocommerce.com/product-category/woocommerce-extensions/\";s:8:\"promoted\";s:31:\"category-woocommerce-extensions\";s:13:\"allow-dismiss\";b:0;}i:21;a:8:{s:4:\"slug\";s:30:\"products-empty-product-vendors\";s:7:\"context\";s:24:\"products-list-empty-body\";s:7:\"product\";s:27:\"woocommerce-product-vendors\";s:4:\"icon\";s:107:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/product-vendors.svg\";s:5:\"title\";s:15:\"Product Vendors\";s:4:\"copy\";s:47:\"Turn your store into a multi-vendor marketplace\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:49:\"https://woocommerce.com/products/product-vendors/\";}i:22;a:8:{s:4:\"slug\";s:26:\"products-empty-memberships\";s:7:\"context\";s:24:\"products-list-empty-body\";s:7:\"product\";s:23:\"woocommerce-memberships\";s:4:\"icon\";s:103:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/memberships.svg\";s:5:\"title\";s:11:\"Memberships\";s:4:\"copy\";s:76:\"Give members access to restricted content or products, for a fee or for free\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:57:\"https://woocommerce.com/products/woocommerce-memberships/\";}i:23;a:9:{s:4:\"slug\";s:35:\"products-empty-woocommerce-deposits\";s:7:\"context\";s:24:\"products-list-empty-body\";s:7:\"product\";s:20:\"woocommerce-deposits\";s:14:\"show-if-active\";a:1:{i:0;s:20:\"woocommerce-bookings\";}s:4:\"icon\";s:100:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/deposits.svg\";s:5:\"title\";s:8:\"Deposits\";s:4:\"copy\";s:75:\"Make it easier for customers to pay by offering a deposit or a payment plan\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:54:\"https://woocommerce.com/products/woocommerce-deposits/\";}i:24;a:8:{s:4:\"slug\";s:40:\"products-empty-woocommerce-subscriptions\";s:7:\"context\";s:24:\"products-list-empty-body\";s:7:\"product\";s:25:\"woocommerce-subscriptions\";s:4:\"icon\";s:105:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/subscriptions.svg\";s:5:\"title\";s:13:\"Subscriptions\";s:4:\"copy\";s:97:\"Let customers subscribe to your products or services and pay on a weekly, monthly or annual basis\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:59:\"https://woocommerce.com/products/woocommerce-subscriptions/\";}i:25;a:8:{s:4:\"slug\";s:35:\"products-empty-woocommerce-bookings\";s:7:\"context\";s:24:\"products-list-empty-body\";s:7:\"product\";s:20:\"woocommerce-bookings\";s:4:\"icon\";s:100:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/bookings.svg\";s:5:\"title\";s:8:\"Bookings\";s:4:\"copy\";s:99:\"Allow customers to book appointments, make reservations or rent equipment without leaving your site\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:54:\"https://woocommerce.com/products/woocommerce-bookings/\";}i:26;a:8:{s:4:\"slug\";s:30:\"products-empty-product-bundles\";s:7:\"context\";s:24:\"products-list-empty-body\";s:7:\"product\";s:27:\"woocommerce-product-bundles\";s:4:\"icon\";s:107:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/product-bundles.svg\";s:5:\"title\";s:15:\"Product Bundles\";s:4:\"copy\";s:49:\"Offer customizable bundles and assembled products\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:49:\"https://woocommerce.com/products/product-bundles/\";}i:27;a:8:{s:4:\"slug\";s:29:\"products-empty-stripe-payment\";s:7:\"context\";s:24:\"products-list-empty-body\";s:7:\"product\";s:26:\"woocommerce-gateway-stripe\";s:4:\"icon\";s:106:\"https://woocommerce.com/wp-content/plugins/wccom-plugins//marketplace-suggestions/icons/stripe-payment.svg\";s:5:\"title\";s:6:\"Stripe\";s:4:\"copy\";s:132:\"The complete payments platform engineered for growth. Millions around the globe use Stripe to start, run and scale their businesses.\";s:11:\"button-text\";s:10:\"Learn More\";s:3:\"url\";s:40:\"https://woocommerce.com/products/stripe/\";}}s:7:\"updated\";i:1582916055;}', 'no'),
(366, 'product_cat_children', 'a:0:{}', 'yes'),
(367, '_transient_product-transient-version', '1583180745', 'yes'),
(375, '_transient_shipping-transient-version', '1582916332', 'yes'),
(389, '_transient_orders-transient-version', '1583771265', 'yes'),
(397, '_transient_woocommerce_reports-transient-version', '1586275611', 'yes'),
(401, 'woocommerce_ppec_payer_id_live_418457472117006b7af1c5bead46fb7f', '977PCTFKFXYP6', 'yes'),
(402, 'woocommerce_task_list_payments', 'a:2:{s:10:\"configured\";a:1:{i:0;s:6:\"paypal\";}s:9:\"completed\";i:1;}', 'yes'),
(403, 'woo_pp_admin_error', 'a:1:{i:0;a:1:{s:7:\"success\";s:59:\"Success!  Your PayPal account has been set up successfully.\";}}', 'yes'),
(408, 'theme_mods_bcf-shop', 'a:9:{i:0;b:0;s:18:\"nav_menu_locations\";a:1:{s:6:\"menu-1\";i:20;}s:18:\"custom_css_post_id\";i:84;s:12:\"header_image\";s:78:\"http://localhost:8080/wordpress/wp-content/uploads/2020/03/cropped-papa_FB.png\";s:17:\"header_image_data\";O:8:\"stdClass\":5:{s:13:\"attachment_id\";i:75;s:3:\"url\";s:78:\"http://localhost:8080/wordpress/wp-content/uploads/2020/03/cropped-papa_FB.png\";s:13:\"thumbnail_url\";s:78:\"http://localhost:8080/wordpress/wp-content/uploads/2020/03/cropped-papa_FB.png\";s:6:\"height\";i:250;s:5:\"width\";i:1000;}s:16:\"background_image\";s:0:\"\";s:11:\"custom_logo\";s:0:\"\";s:21:\"background_position_x\";s:6:\"center\";s:21:\"background_position_y\";s:6:\"center\";}', 'yes'),
(409, 'widget_business-consultant-finder-header-widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(410, 'woocommerce_maybe_regenerate_images_hash', '991b1ca641921cf0f5baf7a2fe85861b', 'yes'),
(432, 'nav_menu_options', 'a:1:{s:8:\"auto_add\";a:1:{i:0;i:20;}}', 'yes'),
(523, 'widget_apww_display_wishlist_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(524, 'widget_apww_wishlist_counter_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(525, 'apw_general_settings', '', 'yes'),
(526, 'apw_social_share', '', 'yes'),
(527, 'apw_layout', '', 'yes'),
(528, 'apw_wishtlist_achive', '', 'yes'),
(529, 'apww_color_scheme', '', 'yes'),
(530, 'apww_license', '', 'yes'),
(532, 'widget_akismet_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(535, 'apww_notice_dismiss', '1', 'yes'),
(538, 'WPLANG', '', 'yes'),
(539, 'new_admin_email', '231603@shakopeeschools.org', 'yes'),
(545, 'jetpack_ab_connect_banner_green_bar', 'b', 'yes'),
(643, 'user_registration_general_setting_login_options', 'default', 'yes'),
(644, 'user_registration_general_setting_disabled_user_roles', 'a:1:{i:0;s:10:\"subscriber\";}', 'yes'),
(645, 'user_registration_login_option_hide_show_password', 'yes', 'yes'),
(646, 'user_registration_general_setting_uninstall_option', 'no', 'yes'),
(647, 'user_registration_myaccount_page_id', '59', 'yes'),
(648, 'user_registration_my_account_layout', 'horizontal', 'yes'),
(649, 'user_registration_myaccount_edit_profile_endpoint', 'edit-profile', 'yes'),
(650, 'user_registration_myaccount_change_password_endpoint', 'edit-password', 'yes'),
(651, 'user_registration_myaccount_lost_password_endpoint', 'lost-password', 'yes'),
(652, 'user_registration_logout_endpoint', 'user-logout', 'yes'),
(653, 'user_registration_integration_setting_recaptcha_version', 'v2', 'yes'),
(654, 'user_registration_integration_setting_recaptcha_site_key', '', 'yes'),
(655, 'user_registration_integration_setting_recaptcha_site_secret', '', 'yes'),
(656, 'user_registration_integration_setting_recaptcha_site_key_v3', '', 'yes'),
(657, 'user_registration_integration_setting_recaptcha_site_secret_v3', '', 'yes'),
(658, 'user_registration_email_setting_disable_email', 'no', 'no'),
(659, 'user_registration_email_from_name', 'Papa Johns', 'no'),
(660, 'user_registration_email_from_address', '231603@shakopeeschools.org', 'no'),
(661, 'user_registration_default_form_page_id', '58', 'yes'),
(667, 'user_registration_admin_notices', 'a:0:{}', 'yes'),
(669, 'user_registration_users_listing_viewed', '2020-04-07 04:18:51', 'yes'),
(670, 'user_registration_registration_page_id', '61', 'yes'),
(679, 'user_registration_version', '1.8.1', 'yes'),
(680, 'user_registration_db_version', '1.8.1', 'yes'),
(681, 'user_registration_activated', '2020-03-02', 'yes'),
(695, 'akismet_spam_count', '1', 'yes'),
(710, 'category_children', 'a:0:{}', 'yes'),
(1352, 'jetpack_content_post_details_date', '', 'yes'),
(1353, 'jetpack_content_post_details_tags', '', 'yes'),
(1354, 'jetpack_content_post_details_author', '', 'yes'),
(1355, 'jetpack_content_post_details_comment', '', 'yes'),
(1365, 'widget_bbp_login_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(1366, 'widget_bbp_views_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(1367, 'widget_bbp_search_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(1368, 'widget_bbp_forums_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(1369, 'widget_bbp_topics_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(1370, 'widget_bbp_replies_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(1371, 'widget_bbp_stats_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(1373, '_bbp_db_version', '263', 'yes'),
(1376, '_bbp_allow_super_mods', '1', 'yes'),
(1377, '_bbp_use_autoembed', '1', 'yes'),
(1378, '_bbp_edit_slug', 'edit', 'yes'),
(1393, 'rewrite_rules', 'a:163:{s:24:\"^wc-auth/v([1]{1})/(.*)?\";s:63:\"index.php?wc-auth-version=$matches[1]&wc-auth-route=$matches[2]\";s:22:\"^wc-api/v([1-3]{1})/?$\";s:51:\"index.php?wc-api-version=$matches[1]&wc-api-route=/\";s:24:\"^wc-api/v([1-3]{1})(.*)?\";s:61:\"index.php?wc-api-version=$matches[1]&wc-api-route=$matches[2]\";s:7:\"shop/?$\";s:27:\"index.php?post_type=product\";s:37:\"shop/feed/(feed|rdf|rss|rss2|atom)/?$\";s:44:\"index.php?post_type=product&feed=$matches[1]\";s:32:\"shop/(feed|rdf|rss|rss2|atom)/?$\";s:44:\"index.php?post_type=product&feed=$matches[1]\";s:24:\"shop/page/([0-9]{1,})/?$\";s:45:\"index.php?post_type=product&paged=$matches[1]\";s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:32:\"category/(.+?)/wc-api(/(.*))?/?$\";s:54:\"index.php?category_name=$matches[1]&wc-api=$matches[3]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:29:\"tag/([^/]+)/wc-api(/(.*))?/?$\";s:44:\"index.php?tag=$matches[1]&wc-api=$matches[3]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:55:\"product-category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?product_cat=$matches[1]&feed=$matches[2]\";s:50:\"product-category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?product_cat=$matches[1]&feed=$matches[2]\";s:31:\"product-category/(.+?)/embed/?$\";s:44:\"index.php?product_cat=$matches[1]&embed=true\";s:43:\"product-category/(.+?)/page/?([0-9]{1,})/?$\";s:51:\"index.php?product_cat=$matches[1]&paged=$matches[2]\";s:25:\"product-category/(.+?)/?$\";s:33:\"index.php?product_cat=$matches[1]\";s:52:\"product-tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?product_tag=$matches[1]&feed=$matches[2]\";s:47:\"product-tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?product_tag=$matches[1]&feed=$matches[2]\";s:28:\"product-tag/([^/]+)/embed/?$\";s:44:\"index.php?product_tag=$matches[1]&embed=true\";s:40:\"product-tag/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?product_tag=$matches[1]&paged=$matches[2]\";s:22:\"product-tag/([^/]+)/?$\";s:33:\"index.php?product_tag=$matches[1]\";s:35:\"product/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:45:\"product/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:65:\"product/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:60:\"product/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:60:\"product/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:41:\"product/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:24:\"product/([^/]+)/embed/?$\";s:40:\"index.php?product=$matches[1]&embed=true\";s:28:\"product/([^/]+)/trackback/?$\";s:34:\"index.php?product=$matches[1]&tb=1\";s:48:\"product/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:46:\"index.php?product=$matches[1]&feed=$matches[2]\";s:43:\"product/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:46:\"index.php?product=$matches[1]&feed=$matches[2]\";s:36:\"product/([^/]+)/page/?([0-9]{1,})/?$\";s:47:\"index.php?product=$matches[1]&paged=$matches[2]\";s:43:\"product/([^/]+)/comment-page-([0-9]{1,})/?$\";s:47:\"index.php?product=$matches[1]&cpage=$matches[2]\";s:33:\"product/([^/]+)/wc-api(/(.*))?/?$\";s:48:\"index.php?product=$matches[1]&wc-api=$matches[3]\";s:39:\"product/[^/]+/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:50:\"product/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:32:\"product/([^/]+)(?:/([0-9]+))?/?$\";s:46:\"index.php?product=$matches[1]&page=$matches[2]\";s:24:\"product/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:34:\"product/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:54:\"product/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:49:\"product/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:49:\"product/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:30:\"product/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:17:\"wc-api(/(.*))?/?$\";s:29:\"index.php?&wc-api=$matches[2]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:26:\"comments/wc-api(/(.*))?/?$\";s:29:\"index.php?&wc-api=$matches[2]\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:29:\"search/(.+)/wc-api(/(.*))?/?$\";s:42:\"index.php?s=$matches[1]&wc-api=$matches[3]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:32:\"author/([^/]+)/wc-api(/(.*))?/?$\";s:52:\"index.php?author_name=$matches[1]&wc-api=$matches[3]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:54:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/wc-api(/(.*))?/?$\";s:82:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&wc-api=$matches[5]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:41:\"([0-9]{4})/([0-9]{1,2})/wc-api(/(.*))?/?$\";s:66:\"index.php?year=$matches[1]&monthnum=$matches[2]&wc-api=$matches[4]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:28:\"([0-9]{4})/wc-api(/(.*))?/?$\";s:45:\"index.php?year=$matches[1]&wc-api=$matches[3]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:58:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:68:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:88:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:64:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:53:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$\";s:91:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$\";s:85:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1\";s:77:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:65:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]\";s:62:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/wc-api(/(.*))?/?$\";s:99:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&wc-api=$matches[6]\";s:62:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:73:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:61:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]\";s:47:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:57:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:77:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:53:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]\";s:51:\"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]\";s:38:\"([0-9]{4})/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&cpage=$matches[2]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:25:\"(.?.+?)/wc-api(/(.*))?/?$\";s:49:\"index.php?pagename=$matches[1]&wc-api=$matches[3]\";s:40:\"(.?.+?)/apww-wishlist-archive(/(.*))?/?$\";s:64:\"index.php?pagename=$matches[1]&apww-wishlist-archive=$matches[3]\";s:35:\"(.?.+?)/apww-my-wishlist(/(.*))?/?$\";s:59:\"index.php?pagename=$matches[1]&apww-my-wishlist=$matches[3]\";s:38:\"(.?.+?)/apww-wishlist-share(/(.*))?/?$\";s:62:\"index.php?pagename=$matches[1]&apww-wishlist-share=$matches[3]\";s:40:\"(.?.+?)/apww-my-wishlist-view(/(.*))?/?$\";s:64:\"index.php?pagename=$matches[1]&apww-my-wishlist-view=$matches[3]\";s:32:\"(.?.+?)/edit-password(/(.*))?/?$\";s:56:\"index.php?pagename=$matches[1]&edit-password=$matches[3]\";s:31:\"(.?.+?)/edit-profile(/(.*))?/?$\";s:55:\"index.php?pagename=$matches[1]&edit-profile=$matches[3]\";s:32:\"(.?.+?)/lost-password(/(.*))?/?$\";s:56:\"index.php?pagename=$matches[1]&lost-password=$matches[3]\";s:30:\"(.?.+?)/user-logout(/(.*))?/?$\";s:54:\"index.php?pagename=$matches[1]&user-logout=$matches[3]\";s:28:\"(.?.+?)/order-pay(/(.*))?/?$\";s:52:\"index.php?pagename=$matches[1]&order-pay=$matches[3]\";s:33:\"(.?.+?)/order-received(/(.*))?/?$\";s:57:\"index.php?pagename=$matches[1]&order-received=$matches[3]\";s:25:\"(.?.+?)/orders(/(.*))?/?$\";s:49:\"index.php?pagename=$matches[1]&orders=$matches[3]\";s:29:\"(.?.+?)/view-order(/(.*))?/?$\";s:53:\"index.php?pagename=$matches[1]&view-order=$matches[3]\";s:28:\"(.?.+?)/downloads(/(.*))?/?$\";s:52:\"index.php?pagename=$matches[1]&downloads=$matches[3]\";s:31:\"(.?.+?)/edit-account(/(.*))?/?$\";s:55:\"index.php?pagename=$matches[1]&edit-account=$matches[3]\";s:31:\"(.?.+?)/edit-address(/(.*))?/?$\";s:55:\"index.php?pagename=$matches[1]&edit-address=$matches[3]\";s:34:\"(.?.+?)/payment-methods(/(.*))?/?$\";s:58:\"index.php?pagename=$matches[1]&payment-methods=$matches[3]\";s:34:\"(.?.+?)/customer-logout(/(.*))?/?$\";s:58:\"index.php?pagename=$matches[1]&customer-logout=$matches[3]\";s:37:\"(.?.+?)/add-payment-method(/(.*))?/?$\";s:61:\"index.php?pagename=$matches[1]&add-payment-method=$matches[3]\";s:40:\"(.?.+?)/delete-payment-method(/(.*))?/?$\";s:64:\"index.php?pagename=$matches[1]&delete-payment-method=$matches[3]\";s:45:\"(.?.+?)/set-default-payment-method(/(.*))?/?$\";s:69:\"index.php?pagename=$matches[1]&set-default-payment-method=$matches[3]\";s:31:\".?.+?/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:42:\".?.+?/attachment/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";}', 'yes'),
(1473, 'sharing-options', 'a:1:{s:6:\"global\";a:5:{s:12:\"button_style\";s:9:\"icon-text\";s:13:\"sharing_label\";s:11:\"Share this:\";s:10:\"open_links\";s:4:\"same\";s:4:\"show\";a:2:{i:0;s:4:\"post\";i:1;s:4:\"page\";}s:6:\"custom\";a:0:{}}}', 'yes'),
(1474, 'stats_options', 'a:7:{s:9:\"admin_bar\";b:1;s:5:\"roles\";a:1:{i:0;s:13:\"administrator\";}s:11:\"count_roles\";a:0:{}s:7:\"blog_id\";b:0;s:12:\"do_not_track\";b:1;s:10:\"hide_smile\";b:1;s:7:\"version\";s:1:\"9\";}', 'yes'),
(1532, 'woocommerce_task_list_hidden', 'yes', 'yes'),
(1543, 'jetpack_active_modules', 'a:3:{i:0;s:13:\"tiled-gallery\";i:1;s:10:\"photon-cdn\";i:2;s:11:\"lazy-images\";}', 'yes'),
(1544, 'tiled_galleries', '1', 'yes');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1547, 'jetpack_static_asset_cdn_files', 'a:1:{s:11:\"woocommerce\";a:1:{s:5:\"4.0.0\";a:600:{i:0;s:26:\"assets/css/_animation.scss\";i:1;s:22:\"assets/css/_fonts.scss\";i:2;s:23:\"assets/css/_mixins.scss\";i:3;s:26:\"assets/css/_variables.scss\";i:4;s:29:\"assets/css/activation-rtl.css\";i:5;s:25:\"assets/css/activation.css\";i:6;s:26:\"assets/css/activation.scss\";i:7;s:24:\"assets/css/admin-rtl.css\";i:8;s:20:\"assets/css/admin.css\";i:9;s:21:\"assets/css/admin.scss\";i:10;s:23:\"assets/css/auth-rtl.css\";i:11;s:19:\"assets/css/auth.css\";i:12;s:20:\"assets/css/auth.scss\";i:13;s:28:\"assets/css/dashboard-rtl.css\";i:14;s:24:\"assets/css/dashboard.css\";i:15;s:25:\"assets/css/dashboard.scss\";i:16;s:25:\"assets/css/helper-rtl.css\";i:17;s:21:\"assets/css/helper.css\";i:18;s:22:\"assets/css/helper.scss\";i:32;s:38:\"assets/css/jquery-ui/jquery-ui-rtl.css\";i:33;s:34:\"assets/css/jquery-ui/jquery-ui.css\";i:34;s:38:\"assets/css/jquery-ui/jquery-ui.min.css\";i:35;s:42:\"assets/css/marketplace-suggestions-rtl.css\";i:36;s:38:\"assets/css/marketplace-suggestions.css\";i:37;s:39:\"assets/css/marketplace-suggestions.scss\";i:38;s:23:\"assets/css/menu-rtl.css\";i:39;s:19:\"assets/css/menu.css\";i:40;s:20:\"assets/css/menu.scss\";i:41;s:39:\"assets/css/network-order-widget-rtl.css\";i:42;s:35:\"assets/css/network-order-widget.css\";i:43;s:36:\"assets/css/network-order-widget.scss\";i:44;s:51:\"assets/css/photoswipe/default-skin/default-skin.css\";i:45;s:55:\"assets/css/photoswipe/default-skin/default-skin.min.css\";i:49;s:36:\"assets/css/photoswipe/photoswipe.css\";i:50;s:40:\"assets/css/photoswipe/photoswipe.min.css\";i:51;s:30:\"assets/css/prettyPhoto-rtl.css\";i:52;s:26:\"assets/css/prettyPhoto.css\";i:53;s:27:\"assets/css/prettyPhoto.scss\";i:54;s:32:\"assets/css/reports-print-rtl.css\";i:55;s:28:\"assets/css/reports-print.css\";i:56;s:29:\"assets/css/reports-print.scss\";i:57;s:22:\"assets/css/select2.css\";i:58;s:23:\"assets/css/select2.scss\";i:59;s:34:\"assets/css/twenty-nineteen-rtl.css\";i:60;s:30:\"assets/css/twenty-nineteen.css\";i:61;s:31:\"assets/css/twenty-nineteen.scss\";i:62;s:35:\"assets/css/twenty-seventeen-rtl.css\";i:63;s:31:\"assets/css/twenty-seventeen.css\";i:64;s:32:\"assets/css/twenty-seventeen.scss\";i:65;s:32:\"assets/css/twenty-twenty-rtl.css\";i:66;s:28:\"assets/css/twenty-twenty.css\";i:67;s:29:\"assets/css/twenty-twenty.scss\";i:68;s:27:\"assets/css/wc-setup-rtl.css\";i:69;s:23:\"assets/css/wc-setup.css\";i:70;s:24:\"assets/css/wc-setup.scss\";i:71;s:37:\"assets/css/woocommerce-layout-rtl.css\";i:72;s:33:\"assets/css/woocommerce-layout.css\";i:73;s:34:\"assets/css/woocommerce-layout.scss\";i:74;s:30:\"assets/css/woocommerce-rtl.css\";i:75;s:42:\"assets/css/woocommerce-smallscreen-rtl.css\";i:76;s:38:\"assets/css/woocommerce-smallscreen.css\";i:77;s:39:\"assets/css/woocommerce-smallscreen.scss\";i:78;s:26:\"assets/css/woocommerce.css\";i:79;s:27:\"assets/css/woocommerce.scss\";i:141;s:34:\"assets/js/accounting/accounting.js\";i:142;s:38:\"assets/js/accounting/accounting.min.js\";i:143;s:27:\"assets/js/admin/api-keys.js\";i:144;s:31:\"assets/js/admin/api-keys.min.js\";i:145;s:33:\"assets/js/admin/backbone-modal.js\";i:146;s:37:\"assets/js/admin/backbone-modal.min.js\";i:147;s:42:\"assets/js/admin/marketplace-suggestions.js\";i:148;s:46:\"assets/js/admin/marketplace-suggestions.min.js\";i:149;s:36:\"assets/js/admin/meta-boxes-coupon.js\";i:150;s:40:\"assets/js/admin/meta-boxes-coupon.min.js\";i:151;s:35:\"assets/js/admin/meta-boxes-order.js\";i:152;s:39:\"assets/js/admin/meta-boxes-order.min.js\";i:153;s:47:\"assets/js/admin/meta-boxes-product-variation.js\";i:154;s:51:\"assets/js/admin/meta-boxes-product-variation.min.js\";i:155;s:37:\"assets/js/admin/meta-boxes-product.js\";i:156;s:41:\"assets/js/admin/meta-boxes-product.min.js\";i:157;s:29:\"assets/js/admin/meta-boxes.js\";i:158;s:33:\"assets/js/admin/meta-boxes.min.js\";i:159;s:33:\"assets/js/admin/network-orders.js\";i:160;s:37:\"assets/js/admin/network-orders.min.js\";i:161;s:35:\"assets/js/admin/product-ordering.js\";i:162;s:39:\"assets/js/admin/product-ordering.min.js\";i:163;s:29:\"assets/js/admin/quick-edit.js\";i:164;s:33:\"assets/js/admin/quick-edit.min.js\";i:165;s:26:\"assets/js/admin/reports.js\";i:166;s:30:\"assets/js/admin/reports.min.js\";i:167;s:51:\"assets/js/admin/settings-views-html-settings-tax.js\";i:168;s:55:\"assets/js/admin/settings-views-html-settings-tax.min.js\";i:169;s:27:\"assets/js/admin/settings.js\";i:170;s:31:\"assets/js/admin/settings.min.js\";i:171;s:32:\"assets/js/admin/system-status.js\";i:172;s:36:\"assets/js/admin/system-status.min.js\";i:173;s:32:\"assets/js/admin/term-ordering.js\";i:174;s:36:\"assets/js/admin/term-ordering.min.js\";i:175;s:24:\"assets/js/admin/users.js\";i:176;s:28:\"assets/js/admin/users.min.js\";i:177;s:31:\"assets/js/admin/wc-clipboard.js\";i:178;s:35:\"assets/js/admin/wc-clipboard.min.js\";i:179;s:37:\"assets/js/admin/wc-enhanced-select.js\";i:180;s:41:\"assets/js/admin/wc-enhanced-select.min.js\";i:181;s:28:\"assets/js/admin/wc-orders.js\";i:182;s:32:\"assets/js/admin/wc-orders.min.js\";i:183;s:36:\"assets/js/admin/wc-product-export.js\";i:184;s:40:\"assets/js/admin/wc-product-export.min.js\";i:185;s:36:\"assets/js/admin/wc-product-import.js\";i:186;s:40:\"assets/js/admin/wc-product-import.min.js\";i:187;s:27:\"assets/js/admin/wc-setup.js\";i:188;s:31:\"assets/js/admin/wc-setup.min.js\";i:189;s:38:\"assets/js/admin/wc-shipping-classes.js\";i:190;s:42:\"assets/js/admin/wc-shipping-classes.min.js\";i:191;s:43:\"assets/js/admin/wc-shipping-zone-methods.js\";i:192;s:47:\"assets/js/admin/wc-shipping-zone-methods.min.js\";i:193;s:36:\"assets/js/admin/wc-shipping-zones.js\";i:194;s:40:\"assets/js/admin/wc-shipping-zones.min.js\";i:195;s:36:\"assets/js/admin/woocommerce_admin.js\";i:196;s:40:\"assets/js/admin/woocommerce_admin.min.js\";i:197;s:41:\"assets/js/flexslider/jquery.flexslider.js\";i:198;s:45:\"assets/js/flexslider/jquery.flexslider.min.js\";i:199;s:40:\"assets/js/frontend/add-payment-method.js\";i:200;s:44:\"assets/js/frontend/add-payment-method.min.js\";i:201;s:43:\"assets/js/frontend/add-to-cart-variation.js\";i:202;s:47:\"assets/js/frontend/add-to-cart-variation.min.js\";i:203;s:33:\"assets/js/frontend/add-to-cart.js\";i:204;s:37:\"assets/js/frontend/add-to-cart.min.js\";i:205;s:34:\"assets/js/frontend/address-i18n.js\";i:206;s:38:\"assets/js/frontend/address-i18n.min.js\";i:207;s:36:\"assets/js/frontend/cart-fragments.js\";i:208;s:40:\"assets/js/frontend/cart-fragments.min.js\";i:209;s:26:\"assets/js/frontend/cart.js\";i:210;s:30:\"assets/js/frontend/cart.min.js\";i:211;s:30:\"assets/js/frontend/checkout.js\";i:212;s:34:\"assets/js/frontend/checkout.min.js\";i:213;s:36:\"assets/js/frontend/country-select.js\";i:214;s:40:\"assets/js/frontend/country-select.min.js\";i:215;s:38:\"assets/js/frontend/credit-card-form.js\";i:216;s:42:\"assets/js/frontend/credit-card-form.min.js\";i:217;s:33:\"assets/js/frontend/geolocation.js\";i:218;s:37:\"assets/js/frontend/geolocation.min.js\";i:219;s:35:\"assets/js/frontend/lost-password.js\";i:220;s:39:\"assets/js/frontend/lost-password.min.js\";i:221;s:45:\"assets/js/frontend/password-strength-meter.js\";i:222;s:49:\"assets/js/frontend/password-strength-meter.min.js\";i:223;s:34:\"assets/js/frontend/price-slider.js\";i:224;s:38:\"assets/js/frontend/price-slider.min.js\";i:225;s:36:\"assets/js/frontend/single-product.js\";i:226;s:40:\"assets/js/frontend/single-product.min.js\";i:227;s:39:\"assets/js/frontend/tokenization-form.js\";i:228;s:43:\"assets/js/frontend/tokenization-form.min.js\";i:229;s:33:\"assets/js/frontend/woocommerce.js\";i:230;s:37:\"assets/js/frontend/woocommerce.min.js\";i:231;s:42:\"assets/js/jquery-blockui/jquery.blockUI.js\";i:232;s:46:\"assets/js/jquery-blockui/jquery.blockUI.min.js\";i:233;s:40:\"assets/js/jquery-cookie/jquery.cookie.js\";i:234;s:44:\"assets/js/jquery-cookie/jquery.cookie.min.js\";i:235;s:36:\"assets/js/jquery-flot/jquery.flot.js\";i:236;s:40:\"assets/js/jquery-flot/jquery.flot.min.js\";i:237;s:40:\"assets/js/jquery-flot/jquery.flot.pie.js\";i:238;s:44:\"assets/js/jquery-flot/jquery.flot.pie.min.js\";i:239;s:43:\"assets/js/jquery-flot/jquery.flot.resize.js\";i:240;s:47:\"assets/js/jquery-flot/jquery.flot.resize.min.js\";i:241;s:42:\"assets/js/jquery-flot/jquery.flot.stack.js\";i:242;s:46:\"assets/js/jquery-flot/jquery.flot.stack.min.js\";i:243;s:41:\"assets/js/jquery-flot/jquery.flot.time.js\";i:244;s:45:\"assets/js/jquery-flot/jquery.flot.time.min.js\";i:245;s:42:\"assets/js/jquery-payment/jquery.payment.js\";i:246;s:46:\"assets/js/jquery-payment/jquery.payment.min.js\";i:247;s:40:\"assets/js/jquery-qrcode/jquery.qrcode.js\";i:248;s:44:\"assets/js/jquery-qrcode/jquery.qrcode.min.js\";i:249;s:54:\"assets/js/jquery-serializejson/jquery.serializejson.js\";i:250;s:58:\"assets/js/jquery-serializejson/jquery.serializejson.min.js\";i:251;s:40:\"assets/js/jquery-tiptip/jquery.tipTip.js\";i:252;s:44:\"assets/js/jquery-tiptip/jquery.tipTip.min.js\";i:253;s:56:\"assets/js/jquery-ui-touch-punch/jquery-ui-touch-punch.js\";i:254;s:60:\"assets/js/jquery-ui-touch-punch/jquery-ui-touch-punch.min.js\";i:255;s:32:\"assets/js/js-cookie/js.cookie.js\";i:256;s:36:\"assets/js/js-cookie/js.cookie.min.js\";i:257;s:45:\"assets/js/photoswipe/photoswipe-ui-default.js\";i:258;s:49:\"assets/js/photoswipe/photoswipe-ui-default.min.js\";i:259;s:34:\"assets/js/photoswipe/photoswipe.js\";i:260;s:38:\"assets/js/photoswipe/photoswipe.min.js\";i:261;s:48:\"assets/js/prettyPhoto/jquery.prettyPhoto.init.js\";i:262;s:52:\"assets/js/prettyPhoto/jquery.prettyPhoto.init.min.js\";i:263;s:43:\"assets/js/prettyPhoto/jquery.prettyPhoto.js\";i:264;s:47:\"assets/js/prettyPhoto/jquery.prettyPhoto.min.js\";i:265;s:24:\"assets/js/round/round.js\";i:266;s:28:\"assets/js/round/round.min.js\";i:267;s:33:\"assets/js/select2/select2.full.js\";i:268;s:37:\"assets/js/select2/select2.full.min.js\";i:269;s:28:\"assets/js/select2/select2.js\";i:270;s:32:\"assets/js/select2/select2.min.js\";i:271;s:37:\"assets/js/selectWoo/selectWoo.full.js\";i:272;s:41:\"assets/js/selectWoo/selectWoo.full.min.js\";i:273;s:32:\"assets/js/selectWoo/selectWoo.js\";i:274;s:36:\"assets/js/selectWoo/selectWoo.min.js\";i:275;s:36:\"assets/js/stupidtable/stupidtable.js\";i:276;s:40:\"assets/js/stupidtable/stupidtable.min.js\";i:278;s:47:\"assets/js/zeroclipboard/jquery.zeroclipboard.js\";i:279;s:51:\"assets/js/zeroclipboard/jquery.zeroclipboard.min.js\";i:280;s:29:\"assets/js/zoom/jquery.zoom.js\";i:281;s:33:\"assets/js/zoom/jquery.zoom.min.js\";i:601;s:50:\"includes/gateways/paypal/assets/js/paypal-admin.js\";i:602;s:54:\"includes/gateways/paypal/assets/js/paypal-admin.min.js\";i:859;s:44:\"packages/woocommerce-admin/dist/app/index.js\";i:860;s:49:\"packages/woocommerce-admin/dist/app/style-rtl.css\";i:861;s:45:\"packages/woocommerce-admin/dist/app/style.css\";i:862;s:53:\"packages/woocommerce-admin/dist/components/ie-rtl.css\";i:863;s:49:\"packages/woocommerce-admin/dist/components/ie.css\";i:864;s:51:\"packages/woocommerce-admin/dist/components/index.js\";i:865;s:56:\"packages/woocommerce-admin/dist/components/style-rtl.css\";i:866;s:52:\"packages/woocommerce-admin/dist/components/style.css\";i:867;s:51:\"packages/woocommerce-admin/dist/csv-export/index.js\";i:868;s:49:\"packages/woocommerce-admin/dist/currency/index.js\";i:869;s:45:\"packages/woocommerce-admin/dist/date/index.js\";i:870;s:48:\"packages/woocommerce-admin/dist/ie/style-rtl.css\";i:871;s:44:\"packages/woocommerce-admin/dist/ie/style.css\";i:872;s:51:\"packages/woocommerce-admin/dist/navigation/index.js\";i:873;s:47:\"packages/woocommerce-admin/dist/number/index.js\";i:874;s:78:\"packages/woocommerce-admin/dist/wp-admin-scripts/onboarding-homepage-notice.js\";i:875;s:84:\"packages/woocommerce-admin/dist/wp-admin-scripts/onboarding-product-import-notice.js\";i:876;s:77:\"packages/woocommerce-admin/dist/wp-admin-scripts/onboarding-product-notice.js\";i:877;s:73:\"packages/woocommerce-admin/dist/wp-admin-scripts/onboarding-tax-notice.js\";i:1139;s:66:\"packages/woocommerce-blocks/assets/css/abstracts/_breakpoints.scss\";i:1140;s:61:\"packages/woocommerce-blocks/assets/css/abstracts/_colors.scss\";i:1141;s:61:\"packages/woocommerce-blocks/assets/css/abstracts/_mixins.scss\";i:1142;s:64:\"packages/woocommerce-blocks/assets/css/abstracts/_variables.scss\";i:1143;s:50:\"packages/woocommerce-blocks/assets/css/editor.scss\";i:1144;s:49:\"packages/woocommerce-blocks/assets/css/style.scss\";i:1149;s:75:\"packages/woocommerce-blocks/assets/js/atomic/blocks/product/button/index.js\";i:1150;s:74:\"packages/woocommerce-blocks/assets/js/atomic/blocks/product/image/index.js\";i:1151;s:68:\"packages/woocommerce-blocks/assets/js/atomic/blocks/product/index.js\";i:1152;s:74:\"packages/woocommerce-blocks/assets/js/atomic/blocks/product/price/index.js\";i:1153;s:75:\"packages/woocommerce-blocks/assets/js/atomic/blocks/product/rating/index.js\";i:1154;s:79:\"packages/woocommerce-blocks/assets/js/atomic/blocks/product/sale-badge/index.js\";i:1155;s:76:\"packages/woocommerce-blocks/assets/js/atomic/blocks/product/shared-config.js\";i:1156;s:76:\"packages/woocommerce-blocks/assets/js/atomic/blocks/product/summary/index.js\";i:1157;s:74:\"packages/woocommerce-blocks/assets/js/atomic/blocks/product/title/index.js\";i:1158;s:79:\"packages/woocommerce-blocks/assets/js/atomic/components/product/button/index.js\";i:1159;s:78:\"packages/woocommerce-blocks/assets/js/atomic/components/product/image/index.js\";i:1160;s:72:\"packages/woocommerce-blocks/assets/js/atomic/components/product/index.js\";i:1161;s:78:\"packages/woocommerce-blocks/assets/js/atomic/components/product/price/index.js\";i:1162;s:79:\"packages/woocommerce-blocks/assets/js/atomic/components/product/rating/index.js\";i:1163;s:83:\"packages/woocommerce-blocks/assets/js/atomic/components/product/sale-badge/index.js\";i:1164;s:80:\"packages/woocommerce-blocks/assets/js/atomic/components/product/summary/index.js\";i:1165;s:78:\"packages/woocommerce-blocks/assets/js/atomic/components/product/title/index.js\";i:1166;s:89:\"packages/woocommerce-blocks/assets/js/base/components/block-error-boundary/block-error.js\";i:1167;s:83:\"packages/woocommerce-blocks/assets/js/base/components/block-error-boundary/index.js\";i:1168;s:85:\"packages/woocommerce-blocks/assets/js/base/components/block-error-boundary/style.scss\";i:1169;s:76:\"packages/woocommerce-blocks/assets/js/base/components/checkbox-list/index.js\";i:1170;s:78:\"packages/woocommerce-blocks/assets/js/base/components/checkbox-list/style.scss\";i:1171;s:81:\"packages/woocommerce-blocks/assets/js/base/components/checkout/form-step/index.js\";i:1172;s:68:\"packages/woocommerce-blocks/assets/js/base/components/label/index.js\";i:1174;s:73:\"packages/woocommerce-blocks/assets/js/base/components/label/test/index.js\";i:1175;s:79:\"packages/woocommerce-blocks/assets/js/base/components/load-more-button/index.js\";i:1176;s:81:\"packages/woocommerce-blocks/assets/js/base/components/load-more-button/style.scss\";i:1177;s:73:\"packages/woocommerce-blocks/assets/js/base/components/pagination/index.js\";i:1178;s:75:\"packages/woocommerce-blocks/assets/js/base/components/pagination/style.scss\";i:1179;s:78:\"packages/woocommerce-blocks/assets/js/base/components/pagination/test/index.js\";i:1180;s:73:\"packages/woocommerce-blocks/assets/js/base/components/pagination/utils.js\";i:1181;s:99:\"packages/woocommerce-blocks/assets/js/base/components/price-slider/constrain-range-slider-values.js\";i:1182;s:75:\"packages/woocommerce-blocks/assets/js/base/components/price-slider/index.js\";i:1183;s:81:\"packages/woocommerce-blocks/assets/js/base/components/price-slider/price-input.js\";i:1184;s:81:\"packages/woocommerce-blocks/assets/js/base/components/price-slider/price-label.js\";i:1185;s:77:\"packages/woocommerce-blocks/assets/js/base/components/price-slider/style.scss\";i:1186;s:83:\"packages/woocommerce-blocks/assets/js/base/components/price-slider/submit-button.js\";i:1187;s:104:\"packages/woocommerce-blocks/assets/js/base/components/price-slider/test/constrain-range-slider-values.js\";i:1188;s:80:\"packages/woocommerce-blocks/assets/js/base/components/product-list-item/index.js\";i:1189;s:80:\"packages/woocommerce-blocks/assets/js/base/components/product-list-item/utils.js\";i:1190;s:79:\"packages/woocommerce-blocks/assets/js/base/components/product-list/container.js\";i:1191;s:75:\"packages/woocommerce-blocks/assets/js/base/components/product-list/index.js\";i:1192;s:90:\"packages/woocommerce-blocks/assets/js/base/components/product-list/no-matching-products.js\";i:1193;s:81:\"packages/woocommerce-blocks/assets/js/base/components/product-list/no-products.js\";i:1194;s:77:\"packages/woocommerce-blocks/assets/js/base/components/product-list/style.scss\";i:1195;s:82:\"packages/woocommerce-blocks/assets/js/base/components/product-sort-select/index.js\";i:1196;s:84:\"packages/woocommerce-blocks/assets/js/base/components/product-sort-select/style.scss\";i:1197;s:72:\"packages/woocommerce-blocks/assets/js/base/components/read-more/index.js\";i:1198;s:77:\"packages/woocommerce-blocks/assets/js/base/components/read-more/test/index.js\";i:1199;s:72:\"packages/woocommerce-blocks/assets/js/base/components/read-more/utils.js\";i:1200;s:79:\"packages/woocommerce-blocks/assets/js/base/components/review-list-item/index.js\";i:1201;s:81:\"packages/woocommerce-blocks/assets/js/base/components/review-list-item/style.scss\";i:1202;s:74:\"packages/woocommerce-blocks/assets/js/base/components/review-list/index.js\";i:1203;s:76:\"packages/woocommerce-blocks/assets/js/base/components/review-list/style.scss\";i:1204;s:81:\"packages/woocommerce-blocks/assets/js/base/components/review-sort-select/index.js\";i:1205;s:83:\"packages/woocommerce-blocks/assets/js/base/components/review-sort-select/style.scss\";i:1206;s:74:\"packages/woocommerce-blocks/assets/js/base/components/sort-select/index.js\";i:1207;s:76:\"packages/woocommerce-blocks/assets/js/base/components/sort-select/style.scss\";i:1208;s:87:\"packages/woocommerce-blocks/assets/js/base/context/inner-block-configuration-context.js\";i:1209;s:76:\"packages/woocommerce-blocks/assets/js/base/context/product-layout-context.js\";i:1210;s:73:\"packages/woocommerce-blocks/assets/js/base/context/query-state-context.js\";i:1211;s:64:\"packages/woocommerce-blocks/assets/js/base/context/test/utils.js\";i:1212;s:59:\"packages/woocommerce-blocks/assets/js/base/context/utils.js\";i:1213;s:73:\"packages/woocommerce-blocks/assets/js/base/hocs/test/with-component-id.js\";i:1214;s:69:\"packages/woocommerce-blocks/assets/js/base/hocs/test/with-products.js\";i:1215;s:68:\"packages/woocommerce-blocks/assets/js/base/hocs/test/with-reviews.js\";i:1216;s:56:\"packages/woocommerce-blocks/assets/js/base/hocs/utils.js\";i:1217;s:68:\"packages/woocommerce-blocks/assets/js/base/hocs/with-component-id.js\";i:1218;s:64:\"packages/woocommerce-blocks/assets/js/base/hocs/with-products.js\";i:1219;s:63:\"packages/woocommerce-blocks/assets/js/base/hocs/with-reviews.js\";i:1220;s:75:\"packages/woocommerce-blocks/assets/js/base/hocs/with-scroll-to-top/index.js\";i:1221;s:77:\"packages/woocommerce-blocks/assets/js/base/hocs/with-scroll-to-top/style.scss\";i:1222;s:80:\"packages/woocommerce-blocks/assets/js/base/hocs/with-scroll-to-top/test/index.js\";i:1223;s:57:\"packages/woocommerce-blocks/assets/js/base/hooks/index.js\";i:1224;s:71:\"packages/woocommerce-blocks/assets/js/base/hooks/test/use-collection.js\";i:1225;s:69:\"packages/woocommerce-blocks/assets/js/base/hooks/test/use-previous.js\";i:1226;s:72:\"packages/woocommerce-blocks/assets/js/base/hooks/test/use-query-state.js\";i:1227;s:74:\"packages/woocommerce-blocks/assets/js/base/hooks/test/use-shallow-equal.js\";i:1228;s:75:\"packages/woocommerce-blocks/assets/js/base/hooks/test/use-store-products.js\";i:1229;s:71:\"packages/woocommerce-blocks/assets/js/base/hooks/use-collection-data.js\";i:1230;s:73:\"packages/woocommerce-blocks/assets/js/base/hooks/use-collection-header.js\";i:1231;s:66:\"packages/woocommerce-blocks/assets/js/base/hooks/use-collection.js\";i:1232;s:64:\"packages/woocommerce-blocks/assets/js/base/hooks/use-previous.js\";i:1233;s:67:\"packages/woocommerce-blocks/assets/js/base/hooks/use-query-state.js\";i:1234;s:69:\"packages/woocommerce-blocks/assets/js/base/hooks/use-shallow-equal.js\";i:1235;s:70:\"packages/woocommerce-blocks/assets/js/base/hooks/use-store-products.js\";i:1236;s:58:\"packages/woocommerce-blocks/assets/js/base/utils/errors.js\";i:1237;s:57:\"packages/woocommerce-blocks/assets/js/base/utils/index.js\";i:1238;s:57:\"packages/woocommerce-blocks/assets/js/base/utils/price.js\";i:1239;s:63:\"packages/woocommerce-blocks/assets/js/base/utils/test/errors.js\";i:1240;s:62:\"packages/woocommerce-blocks/assets/js/base/utils/test/price.js\";i:1241;s:84:\"packages/woocommerce-blocks/assets/js/blocks-registry/get-registered-inner-blocks.js\";i:1242;s:62:\"packages/woocommerce-blocks/assets/js/blocks-registry/index.js\";i:1243;s:77:\"packages/woocommerce-blocks/assets/js/blocks-registry/register-inner-block.js\";i:1244;s:79:\"packages/woocommerce-blocks/assets/js/blocks-registry/registered-blocks-init.js\";i:1245;s:67:\"packages/woocommerce-blocks/assets/js/blocks-registry/test/index.js\";i:1246;s:87:\"packages/woocommerce-blocks/assets/js/blocks/active-filters/active-attribute-filters.js\";i:1247;s:68:\"packages/woocommerce-blocks/assets/js/blocks/active-filters/block.js\";i:1248;s:67:\"packages/woocommerce-blocks/assets/js/blocks/active-filters/edit.js\";i:1249;s:71:\"packages/woocommerce-blocks/assets/js/blocks/active-filters/frontend.js\";i:1250;s:68:\"packages/woocommerce-blocks/assets/js/blocks/active-filters/index.js\";i:1251;s:70:\"packages/woocommerce-blocks/assets/js/blocks/active-filters/style.scss\";i:1252;s:68:\"packages/woocommerce-blocks/assets/js/blocks/active-filters/utils.js\";i:1253;s:70:\"packages/woocommerce-blocks/assets/js/blocks/attribute-filter/block.js\";i:1254;s:69:\"packages/woocommerce-blocks/assets/js/blocks/attribute-filter/edit.js\";i:1255;s:73:\"packages/woocommerce-blocks/assets/js/blocks/attribute-filter/editor.scss\";i:1256;s:73:\"packages/woocommerce-blocks/assets/js/blocks/attribute-filter/frontend.js\";i:1257;s:70:\"packages/woocommerce-blocks/assets/js/blocks/attribute-filter/index.js\";i:1258;s:72:\"packages/woocommerce-blocks/assets/js/blocks/attribute-filter/style.scss\";i:1259;s:71:\"packages/woocommerce-blocks/assets/js/blocks/featured-category/block.js\";i:1260;s:74:\"packages/woocommerce-blocks/assets/js/blocks/featured-category/editor.scss\";i:1261;s:73:\"packages/woocommerce-blocks/assets/js/blocks/featured-category/example.js\";i:1262;s:71:\"packages/woocommerce-blocks/assets/js/blocks/featured-category/index.js\";i:1263;s:73:\"packages/woocommerce-blocks/assets/js/blocks/featured-category/style.scss\";i:1264;s:71:\"packages/woocommerce-blocks/assets/js/blocks/featured-category/utils.js\";i:1265;s:70:\"packages/woocommerce-blocks/assets/js/blocks/featured-product/block.js\";i:1266;s:73:\"packages/woocommerce-blocks/assets/js/blocks/featured-product/editor.scss\";i:1267;s:72:\"packages/woocommerce-blocks/assets/js/blocks/featured-product/example.js\";i:1268;s:70:\"packages/woocommerce-blocks/assets/js/blocks/featured-product/index.js\";i:1269;s:72:\"packages/woocommerce-blocks/assets/js/blocks/featured-product/style.scss\";i:1270;s:70:\"packages/woocommerce-blocks/assets/js/blocks/featured-product/utils.js\";i:1271;s:73:\"packages/woocommerce-blocks/assets/js/blocks/handpicked-products/block.js\";i:1272;s:76:\"packages/woocommerce-blocks/assets/js/blocks/handpicked-products/editor.scss\";i:1273;s:73:\"packages/woocommerce-blocks/assets/js/blocks/handpicked-products/index.js\";i:1274;s:66:\"packages/woocommerce-blocks/assets/js/blocks/price-filter/block.js\";i:1275;s:70:\"packages/woocommerce-blocks/assets/js/blocks/price-filter/constants.js\";i:1276;s:65:\"packages/woocommerce-blocks/assets/js/blocks/price-filter/edit.js\";i:1277;s:69:\"packages/woocommerce-blocks/assets/js/blocks/price-filter/editor.scss\";i:1278;s:69:\"packages/woocommerce-blocks/assets/js/blocks/price-filter/frontend.js\";i:1279;s:66:\"packages/woocommerce-blocks/assets/js/blocks/price-filter/index.js\";i:1280;s:87:\"packages/woocommerce-blocks/assets/js/blocks/price-filter/test/use-price-constraints.js\";i:1281;s:82:\"packages/woocommerce-blocks/assets/js/blocks/price-filter/use-price-constraints.js\";i:1282;s:74:\"packages/woocommerce-blocks/assets/js/blocks/product-best-sellers/block.js\";i:1283;s:74:\"packages/woocommerce-blocks/assets/js/blocks/product-best-sellers/index.js\";i:1284;s:72:\"packages/woocommerce-blocks/assets/js/blocks/product-categories/block.js\";i:1285;s:75:\"packages/woocommerce-blocks/assets/js/blocks/product-categories/editor.scss\";i:1286;s:72:\"packages/woocommerce-blocks/assets/js/blocks/product-categories/index.js\";i:1287;s:74:\"packages/woocommerce-blocks/assets/js/blocks/product-categories/style.scss\";i:1288;s:70:\"packages/woocommerce-blocks/assets/js/blocks/product-category/block.js\";i:1289;s:73:\"packages/woocommerce-blocks/assets/js/blocks/product-category/editor.scss\";i:1290;s:70:\"packages/woocommerce-blocks/assets/js/blocks/product-category/index.js\";i:1291;s:65:\"packages/woocommerce-blocks/assets/js/blocks/product-new/block.js\";i:1292;s:65:\"packages/woocommerce-blocks/assets/js/blocks/product-new/index.js\";i:1293;s:69:\"packages/woocommerce-blocks/assets/js/blocks/product-on-sale/block.js\";i:1294;s:69:\"packages/woocommerce-blocks/assets/js/blocks/product-on-sale/index.js\";i:1295;s:68:\"packages/woocommerce-blocks/assets/js/blocks/product-search/block.js\";i:1296;s:67:\"packages/woocommerce-blocks/assets/js/blocks/product-search/edit.js\";i:1297;s:71:\"packages/woocommerce-blocks/assets/js/blocks/product-search/editor.scss\";i:1298;s:68:\"packages/woocommerce-blocks/assets/js/blocks/product-search/index.js\";i:1299;s:70:\"packages/woocommerce-blocks/assets/js/blocks/product-search/style.scss\";i:1300;s:65:\"packages/woocommerce-blocks/assets/js/blocks/product-tag/block.js\";i:1301;s:68:\"packages/woocommerce-blocks/assets/js/blocks/product-tag/editor.scss\";i:1302;s:65:\"packages/woocommerce-blocks/assets/js/blocks/product-tag/index.js\";i:1303;s:71:\"packages/woocommerce-blocks/assets/js/blocks/product-top-rated/block.js\";i:1304;s:71:\"packages/woocommerce-blocks/assets/js/blocks/product-top-rated/index.js\";i:1305;s:75:\"packages/woocommerce-blocks/assets/js/blocks/products-by-attribute/block.js\";i:1306;s:78:\"packages/woocommerce-blocks/assets/js/blocks/products-by-attribute/editor.scss\";i:1307;s:75:\"packages/woocommerce-blocks/assets/js/blocks/products-by-attribute/index.js\";i:1308;s:75:\"packages/woocommerce-blocks/assets/js/blocks/products/all-products/block.js\";i:1309;s:74:\"packages/woocommerce-blocks/assets/js/blocks/products/all-products/edit.js\";i:1310;s:78:\"packages/woocommerce-blocks/assets/js/blocks/products/all-products/frontend.js\";i:1311;s:75:\"packages/woocommerce-blocks/assets/js/blocks/products/all-products/index.js\";i:1312;s:67:\"packages/woocommerce-blocks/assets/js/blocks/products/attributes.js\";i:1313;s:67:\"packages/woocommerce-blocks/assets/js/blocks/products/base-utils.js\";i:1314;s:61:\"packages/woocommerce-blocks/assets/js/blocks/products/edit.js\";i:1315;s:65:\"packages/woocommerce-blocks/assets/js/blocks/products/editor.scss\";i:1316;s:62:\"packages/woocommerce-blocks/assets/js/blocks/products/utils.js\";i:1317;s:72:\"packages/woocommerce-blocks/assets/js/blocks/reviews/all-reviews/edit.js\";i:1318;s:73:\"packages/woocommerce-blocks/assets/js/blocks/reviews/all-reviews/index.js\";i:1319;s:90:\"packages/woocommerce-blocks/assets/js/blocks/reviews/all-reviews/no-reviews-placeholder.js\";i:1320;s:66:\"packages/woocommerce-blocks/assets/js/blocks/reviews/attributes.js\";i:1321;s:66:\"packages/woocommerce-blocks/assets/js/blocks/reviews/edit-utils.js\";i:1322;s:68:\"packages/woocommerce-blocks/assets/js/blocks/reviews/editor-block.js\";i:1323;s:78:\"packages/woocommerce-blocks/assets/js/blocks/reviews/editor-container-block.js\";i:1324;s:64:\"packages/woocommerce-blocks/assets/js/blocks/reviews/editor.scss\";i:1325;s:63:\"packages/woocommerce-blocks/assets/js/blocks/reviews/example.js\";i:1326;s:70:\"packages/woocommerce-blocks/assets/js/blocks/reviews/frontend-block.js\";i:1327;s:80:\"packages/woocommerce-blocks/assets/js/blocks/reviews/frontend-container-block.js\";i:1328;s:64:\"packages/woocommerce-blocks/assets/js/blocks/reviews/frontend.js\";i:1329;s:80:\"packages/woocommerce-blocks/assets/js/blocks/reviews/reviews-by-category/edit.js\";i:1330;s:84:\"packages/woocommerce-blocks/assets/js/blocks/reviews/reviews-by-category/editor.scss\";i:1331;s:81:\"packages/woocommerce-blocks/assets/js/blocks/reviews/reviews-by-category/index.js\";i:1332;s:98:\"packages/woocommerce-blocks/assets/js/blocks/reviews/reviews-by-category/no-reviews-placeholder.js\";i:1333;s:79:\"packages/woocommerce-blocks/assets/js/blocks/reviews/reviews-by-product/edit.js\";i:1334;s:83:\"packages/woocommerce-blocks/assets/js/blocks/reviews/reviews-by-product/editor.scss\";i:1335;s:80:\"packages/woocommerce-blocks/assets/js/blocks/reviews/reviews-by-product/index.js\";i:1336;s:97:\"packages/woocommerce-blocks/assets/js/blocks/reviews/reviews-by-product/no-reviews-placeholder.js\";i:1337;s:60:\"packages/woocommerce-blocks/assets/js/blocks/reviews/save.js\";i:1338;s:61:\"packages/woocommerce-blocks/assets/js/blocks/reviews/utils.js\";i:1339;s:72:\"packages/woocommerce-blocks/assets/js/components/block-title/editor.scss\";i:1340;s:69:\"packages/woocommerce-blocks/assets/js/components/block-title/index.js\";i:1341;s:83:\"packages/woocommerce-blocks/assets/js/components/error-placeholder/error-message.js\";i:1342;s:75:\"packages/woocommerce-blocks/assets/js/components/error-placeholder/index.js\";i:1343;s:77:\"packages/woocommerce-blocks/assets/js/components/error-placeholder/style.scss\";i:1344;s:78:\"packages/woocommerce-blocks/assets/js/components/grid-content-control/index.js\";i:1345;s:77:\"packages/woocommerce-blocks/assets/js/components/grid-layout-control/index.js\";i:1346;s:86:\"packages/woocommerce-blocks/assets/js/components/heading-toolbar/heading-level-icon.js\";i:1347;s:73:\"packages/woocommerce-blocks/assets/js/components/heading-toolbar/index.js\";i:1348;s:69:\"packages/woocommerce-blocks/assets/js/components/icons/all-reviews.js\";i:1349;s:74:\"packages/woocommerce-blocks/assets/js/components/icons/checkbox-checked.js\";i:1350;s:76:\"packages/woocommerce-blocks/assets/js/components/icons/checkbox-unchecked.js\";i:1351;s:66:\"packages/woocommerce-blocks/assets/js/components/icons/external.js\";i:1352;s:69:\"packages/woocommerce-blocks/assets/js/components/icons/folder-star.js\";i:1353;s:64:\"packages/woocommerce-blocks/assets/js/components/icons/folder.js\";i:1354;s:63:\"packages/woocommerce-blocks/assets/js/components/icons/index.js\";i:1355;s:63:\"packages/woocommerce-blocks/assets/js/components/icons/money.js\";i:1356;s:70:\"packages/woocommerce-blocks/assets/js/components/icons/new-releases.js\";i:1357;s:73:\"packages/woocommerce-blocks/assets/js/components/icons/product-on-sale.js\";i:1358;s:72:\"packages/woocommerce-blocks/assets/js/components/icons/product-search.js\";i:1359;s:69:\"packages/woocommerce-blocks/assets/js/components/icons/product-tag.js\";i:1360;s:72:\"packages/woocommerce-blocks/assets/js/components/icons/radio-selected.js\";i:1361;s:74:\"packages/woocommerce-blocks/assets/js/components/icons/radio-unselected.js\";i:1362;s:77:\"packages/woocommerce-blocks/assets/js/components/icons/reviews-by-category.js\";i:1363;s:76:\"packages/woocommerce-blocks/assets/js/components/icons/reviews-by-product.js\";i:1364;s:65:\"packages/woocommerce-blocks/assets/js/components/icons/widgets.js\";i:1365;s:61:\"packages/woocommerce-blocks/assets/js/components/icons/woo.js\";i:1366;s:88:\"packages/woocommerce-blocks/assets/js/components/product-attribute-term-control/index.js\";i:1367;s:90:\"packages/woocommerce-blocks/assets/js/components/product-attribute-term-control/style.scss\";i:1368;s:82:\"packages/woocommerce-blocks/assets/js/components/product-category-control/index.js\";i:1369;s:84:\"packages/woocommerce-blocks/assets/js/components/product-category-control/style.scss\";i:1370;s:73:\"packages/woocommerce-blocks/assets/js/components/product-control/index.js\";i:1371;s:75:\"packages/woocommerce-blocks/assets/js/components/product-control/style.scss\";i:1372;s:81:\"packages/woocommerce-blocks/assets/js/components/product-orderby-control/index.js\";i:1373;s:73:\"packages/woocommerce-blocks/assets/js/components/product-preview/index.js\";i:1374;s:75:\"packages/woocommerce-blocks/assets/js/components/product-preview/style.scss\";i:1376;s:78:\"packages/woocommerce-blocks/assets/js/components/product-preview/test/index.js\";i:1377;s:77:\"packages/woocommerce-blocks/assets/js/components/product-tag-control/index.js\";i:1378;s:79:\"packages/woocommerce-blocks/assets/js/components/product-tag-control/style.scss\";i:1379;s:74:\"packages/woocommerce-blocks/assets/js/components/products-control/index.js\";i:1380;s:79:\"packages/woocommerce-blocks/assets/js/components/toggle-button-control/index.js\";i:1382;s:81:\"packages/woocommerce-blocks/assets/js/components/toggle-button-control/style.scss\";i:1383;s:63:\"packages/woocommerce-blocks/assets/js/components/utils/index.js\";i:1384;s:70:\"packages/woocommerce-blocks/assets/js/data/collections/action-types.js\";i:1385;s:65:\"packages/woocommerce-blocks/assets/js/data/collections/actions.js\";i:1386;s:67:\"packages/woocommerce-blocks/assets/js/data/collections/constants.js\";i:1387;s:66:\"packages/woocommerce-blocks/assets/js/data/collections/controls.js\";i:1388;s:63:\"packages/woocommerce-blocks/assets/js/data/collections/index.js\";i:1389;s:66:\"packages/woocommerce-blocks/assets/js/data/collections/reducers.js\";i:1390;s:67:\"packages/woocommerce-blocks/assets/js/data/collections/resolvers.js\";i:1391;s:67:\"packages/woocommerce-blocks/assets/js/data/collections/selectors.js\";i:1392;s:71:\"packages/woocommerce-blocks/assets/js/data/collections/test/reducers.js\";i:1393;s:72:\"packages/woocommerce-blocks/assets/js/data/collections/test/resolvers.js\";i:1394;s:72:\"packages/woocommerce-blocks/assets/js/data/collections/test/selectors.js\";i:1395;s:55:\"packages/woocommerce-blocks/assets/js/data/constants.js\";i:1396;s:51:\"packages/woocommerce-blocks/assets/js/data/index.js\";i:1397;s:70:\"packages/woocommerce-blocks/assets/js/data/query-state/action-types.js\";i:1398;s:65:\"packages/woocommerce-blocks/assets/js/data/query-state/actions.js\";i:1399;s:67:\"packages/woocommerce-blocks/assets/js/data/query-state/constants.js\";i:1400;s:63:\"packages/woocommerce-blocks/assets/js/data/query-state/index.js\";i:1401;s:66:\"packages/woocommerce-blocks/assets/js/data/query-state/reducers.js\";i:1402;s:67:\"packages/woocommerce-blocks/assets/js/data/query-state/selectors.js\";i:1403;s:71:\"packages/woocommerce-blocks/assets/js/data/query-state/test/reducers.js\";i:1404;s:72:\"packages/woocommerce-blocks/assets/js/data/query-state/test/selectors.js\";i:1405;s:63:\"packages/woocommerce-blocks/assets/js/data/query-state/utils.js\";i:1406;s:65:\"packages/woocommerce-blocks/assets/js/data/schema/action-types.js\";i:1407;s:60:\"packages/woocommerce-blocks/assets/js/data/schema/actions.js\";i:1408;s:62:\"packages/woocommerce-blocks/assets/js/data/schema/constants.js\";i:1409;s:58:\"packages/woocommerce-blocks/assets/js/data/schema/index.js\";i:1410;s:61:\"packages/woocommerce-blocks/assets/js/data/schema/reducers.js\";i:1411;s:62:\"packages/woocommerce-blocks/assets/js/data/schema/resolvers.js\";i:1412;s:62:\"packages/woocommerce-blocks/assets/js/data/schema/selectors.js\";i:1413;s:66:\"packages/woocommerce-blocks/assets/js/data/schema/test/reducers.js\";i:1414;s:67:\"packages/woocommerce-blocks/assets/js/data/schema/test/resolvers.js\";i:1415;s:67:\"packages/woocommerce-blocks/assets/js/data/schema/test/selectors.js\";i:1416;s:63:\"packages/woocommerce-blocks/assets/js/data/schema/test/utils.js\";i:1417;s:58:\"packages/woocommerce-blocks/assets/js/data/schema/utils.js\";i:1418;s:64:\"packages/woocommerce-blocks/assets/js/data/utils/has-in-state.js\";i:1419;s:57:\"packages/woocommerce-blocks/assets/js/data/utils/index.js\";i:1420;s:64:\"packages/woocommerce-blocks/assets/js/data/utils/update-state.js\";i:1421;s:51:\"packages/woocommerce-blocks/assets/js/hocs/index.js\";i:1422;s:66:\"packages/woocommerce-blocks/assets/js/hocs/test/with-attributes.js\";i:1423;s:66:\"packages/woocommerce-blocks/assets/js/hocs/test/with-categories.js\";i:1424;s:64:\"packages/woocommerce-blocks/assets/js/hocs/test/with-category.js\";i:1425;s:74:\"packages/woocommerce-blocks/assets/js/hocs/test/with-product-variations.js\";i:1426;s:63:\"packages/woocommerce-blocks/assets/js/hocs/test/with-product.js\";i:1427;s:73:\"packages/woocommerce-blocks/assets/js/hocs/test/with-searched-products.js\";i:1428;s:98:\"packages/woocommerce-blocks/assets/js/hocs/test/with-transform-single-select-to-multiple-select.js\";i:1429;s:61:\"packages/woocommerce-blocks/assets/js/hocs/with-attributes.js\";i:1430;s:61:\"packages/woocommerce-blocks/assets/js/hocs/with-categories.js\";i:1431;s:59:\"packages/woocommerce-blocks/assets/js/hocs/with-category.js\";i:1432;s:69:\"packages/woocommerce-blocks/assets/js/hocs/with-product-variations.js\";i:1433;s:58:\"packages/woocommerce-blocks/assets/js/hocs/with-product.js\";i:1434;s:69:\"packages/woocommerce-blocks/assets/js/hocs/with-rest-api-hydration.js\";i:1435;s:68:\"packages/woocommerce-blocks/assets/js/hocs/with-searched-products.js\";i:1436;s:93:\"packages/woocommerce-blocks/assets/js/hocs/with-transform-single-select-to-multiple-select.js\";i:1437;s:46:\"packages/woocommerce-blocks/assets/js/index.js\";i:1438;s:60:\"packages/woocommerce-blocks/assets/js/previews/categories.js\";i:1439;s:60:\"packages/woocommerce-blocks/assets/js/previews/grid-block.js\";i:1440;s:55:\"packages/woocommerce-blocks/assets/js/previews/index.js\";i:1441;s:58:\"packages/woocommerce-blocks/assets/js/previews/products.js\";i:1442;s:57:\"packages/woocommerce-blocks/assets/js/previews/reviews.js\";i:1443;s:66:\"packages/woocommerce-blocks/assets/js/settings/blocks/constants.js\";i:1444;s:66:\"packages/woocommerce-blocks/assets/js/settings/blocks/endpoints.js\";i:1445;s:62:\"packages/woocommerce-blocks/assets/js/settings/blocks/index.js\";i:1446;s:74:\"packages/woocommerce-blocks/assets/js/settings/shared/default-constants.js\";i:1447;s:68:\"packages/woocommerce-blocks/assets/js/settings/shared/get-setting.js\";i:1448;s:62:\"packages/woocommerce-blocks/assets/js/settings/shared/index.js\";i:1449;s:68:\"packages/woocommerce-blocks/assets/js/settings/shared/set-setting.js\";i:1450;s:70:\"packages/woocommerce-blocks/assets/js/settings/shared/settings-init.js\";i:1451;s:85:\"packages/woocommerce-blocks/assets/js/settings/shared/test/compare-with-wp-version.js\";i:1452;s:73:\"packages/woocommerce-blocks/assets/js/settings/shared/test/get-setting.js\";i:1453;s:73:\"packages/woocommerce-blocks/assets/js/settings/shared/test/set-setting.js\";i:1454;s:63:\"packages/woocommerce-blocks/assets/js/utils/attributes-query.js\";i:1455;s:57:\"packages/woocommerce-blocks/assets/js/utils/attributes.js\";i:1456;s:59:\"packages/woocommerce-blocks/assets/js/utils/deprecations.js\";i:1457;s:56:\"packages/woocommerce-blocks/assets/js/utils/get-query.js\";i:1458;s:60:\"packages/woocommerce-blocks/assets/js/utils/get-shortcode.js\";i:1459;s:55:\"packages/woocommerce-blocks/assets/js/utils/products.js\";i:1460;s:62:\"packages/woocommerce-blocks/assets/js/utils/render-frontend.js\";i:1461;s:64:\"packages/woocommerce-blocks/assets/js/utils/shared-attributes.js\";i:1462;s:61:\"packages/woocommerce-blocks/assets/js/utils/test/get-query.js\";i:1463;s:60:\"packages/woocommerce-blocks/assets/js/utils/test/products.js\";i:1465;s:60:\"packages/woocommerce-blocks/build/active-filters-frontend.js\";i:1467;s:51:\"packages/woocommerce-blocks/build/active-filters.js\";i:1469;s:58:\"packages/woocommerce-blocks/build/all-products-frontend.js\";i:1471;s:49:\"packages/woocommerce-blocks/build/all-products.js\";i:1473;s:55:\"packages/woocommerce-blocks/build/all-reviews-legacy.js\";i:1475;s:48:\"packages/woocommerce-blocks/build/all-reviews.js\";i:1477;s:62:\"packages/woocommerce-blocks/build/attribute-filter-frontend.js\";i:1479;s:53:\"packages/woocommerce-blocks/build/attribute-filter.js\";i:1481;s:64:\"packages/woocommerce-blocks/build/block-error-boundary-legacy.js\";i:1483;s:57:\"packages/woocommerce-blocks/build/block-error-boundary.js\";i:1485;s:50:\"packages/woocommerce-blocks/build/blocks-legacy.js\";i:1487;s:43:\"packages/woocommerce-blocks/build/blocks.js\";i:1488;s:55:\"packages/woocommerce-blocks/build/editor-legacy-rtl.css\";i:1489;s:51:\"packages/woocommerce-blocks/build/editor-legacy.css\";i:1490;s:48:\"packages/woocommerce-blocks/build/editor-rtl.css\";i:1491;s:44:\"packages/woocommerce-blocks/build/editor.css\";i:1493;s:61:\"packages/woocommerce-blocks/build/featured-category-legacy.js\";i:1495;s:54:\"packages/woocommerce-blocks/build/featured-category.js\";i:1497;s:60:\"packages/woocommerce-blocks/build/featured-product-legacy.js\";i:1499;s:53:\"packages/woocommerce-blocks/build/featured-product.js\";i:1501;s:63:\"packages/woocommerce-blocks/build/handpicked-products-legacy.js\";i:1503;s:56:\"packages/woocommerce-blocks/build/handpicked-products.js\";i:1505;s:58:\"packages/woocommerce-blocks/build/price-filter-frontend.js\";i:1507;s:49:\"packages/woocommerce-blocks/build/price-filter.js\";i:1509;s:64:\"packages/woocommerce-blocks/build/product-best-sellers-legacy.js\";i:1511;s:57:\"packages/woocommerce-blocks/build/product-best-sellers.js\";i:1513;s:62:\"packages/woocommerce-blocks/build/product-categories-legacy.js\";i:1515;s:55:\"packages/woocommerce-blocks/build/product-categories.js\";i:1517;s:60:\"packages/woocommerce-blocks/build/product-category-legacy.js\";i:1519;s:53:\"packages/woocommerce-blocks/build/product-category.js\";i:1521;s:55:\"packages/woocommerce-blocks/build/product-new-legacy.js\";i:1523;s:48:\"packages/woocommerce-blocks/build/product-new.js\";i:1525;s:59:\"packages/woocommerce-blocks/build/product-on-sale-legacy.js\";i:1527;s:52:\"packages/woocommerce-blocks/build/product-on-sale.js\";i:1529;s:58:\"packages/woocommerce-blocks/build/product-search-legacy.js\";i:1531;s:51:\"packages/woocommerce-blocks/build/product-search.js\";i:1533;s:55:\"packages/woocommerce-blocks/build/product-tag-legacy.js\";i:1535;s:48:\"packages/woocommerce-blocks/build/product-tag.js\";i:1537;s:61:\"packages/woocommerce-blocks/build/product-top-rated-legacy.js\";i:1539;s:54:\"packages/woocommerce-blocks/build/product-top-rated.js\";i:1541;s:65:\"packages/woocommerce-blocks/build/products-by-attribute-legacy.js\";i:1543;s:58:\"packages/woocommerce-blocks/build/products-by-attribute.js\";i:1545;s:63:\"packages/woocommerce-blocks/build/reviews-by-category-legacy.js\";i:1547;s:56:\"packages/woocommerce-blocks/build/reviews-by-category.js\";i:1549;s:62:\"packages/woocommerce-blocks/build/reviews-by-product-legacy.js\";i:1551;s:55:\"packages/woocommerce-blocks/build/reviews-by-product.js\";i:1553;s:60:\"packages/woocommerce-blocks/build/reviews-frontend-legacy.js\";i:1555;s:53:\"packages/woocommerce-blocks/build/reviews-frontend.js\";i:1556;s:54:\"packages/woocommerce-blocks/build/style-legacy-rtl.css\";i:1557;s:50:\"packages/woocommerce-blocks/build/style-legacy.css\";i:1558;s:47:\"packages/woocommerce-blocks/build/style-rtl.css\";i:1559;s:43:\"packages/woocommerce-blocks/build/style.css\";i:1560;s:51:\"packages/woocommerce-blocks/build/vendors-legacy.js\";i:1561;s:44:\"packages/woocommerce-blocks/build/vendors.js\";i:1563;s:51:\"packages/woocommerce-blocks/build/wc-blocks-data.js\";i:1565;s:55:\"packages/woocommerce-blocks/build/wc-blocks-registry.js\";i:1567;s:48:\"packages/woocommerce-blocks/build/wc-settings.js\";}}}', 'yes'),
(1659, '_transient_as_comment_count', 'O:8:\"stdClass\":7:{s:5:\"trash\";s:1:\"2\";s:12:\"post-trashed\";s:1:\"1\";s:14:\"total_comments\";i:0;s:3:\"all\";i:0;s:9:\"moderated\";i:0;s:8:\"approved\";i:0;s:4:\"spam\";i:0;}', 'yes'),
(1667, 'action_scheduler_hybrid_store_demarkation', '166', 'yes'),
(1669, 'schema-ActionScheduler_StoreSchema', '3.0.1584117828', 'yes'),
(1671, 'schema-ActionScheduler_LoggerSchema', '2.0.1584117828', 'yes'),
(1677, 'woocommerce_downloads_add_hash_to_filename', 'yes', 'yes'),
(1679, 'woocommerce_version', '4.0.0', 'yes'),
(1682, '_transient_wc_attribute_taxonomies', 'a:0:{}', 'yes'),
(1689, 'action_scheduler_lock_async-request-runner', '1586276336', 'yes'),
(1690, 'woocommerce_admin_version', '1.0.0', 'yes'),
(1704, 'weather_atlas_version', '1.2.1', 'yes'),
(1705, 'widget_weather_atlas', 'a:3:{i:2;a:15:{s:9:\"city_name\";s:34:\"New York ~ New York, USA (2372139)\";s:13:\"city_selector\";s:7:\"2372139\";s:8:\"unit_c_f\";s:1:\"f\";s:8:\"language\";s:0:\"\";s:6:\"layout\";s:8:\"vertical\";s:9:\"font_size\";s:0:\"\";s:16:\"background_color\";s:0:\"\";s:10:\"text_color\";s:0:\"\";s:5:\"style\";s:0:\"\";s:7:\"heading\";s:0:\"\";s:6:\"header\";s:0:\"\";s:14:\"sunrise_sunset\";s:1:\"1\";s:7:\"current\";s:1:\"1\";s:6:\"hourly\";s:1:\"0\";s:5:\"daily\";s:1:\"3\";}i:3;a:15:{s:9:\"city_name\";s:34:\"New York ~ New York, USA (2372139)\";s:13:\"city_selector\";s:7:\"2372139\";s:8:\"unit_c_f\";s:1:\"f\";s:8:\"language\";s:0:\"\";s:6:\"layout\";s:8:\"vertical\";s:9:\"font_size\";s:0:\"\";s:16:\"background_color\";s:0:\"\";s:10:\"text_color\";s:0:\"\";s:5:\"style\";s:0:\"\";s:7:\"heading\";s:0:\"\";s:6:\"header\";s:0:\"\";s:14:\"sunrise_sunset\";s:1:\"1\";s:7:\"current\";s:1:\"1\";s:6:\"hourly\";s:1:\"0\";s:5:\"daily\";s:1:\"3\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(1718, 'woocommerce_db_version', '4.0.0', 'yes'),
(1747, 'w3tc_state', '{\"common.install\":1584120333,\"license.status\":\"no_key\",\"license.next_check\":1586707331,\"license.terms\":\"\",\"common.show_note.flush_statics_needed\":false,\"common.show_note.flush_statics_needed.timestamp\":1584123416,\"common.show_note.flush_posts_needed\":false,\"common.show_note.flush_posts_needed.timestamp\":1584123416,\"common.show_note.plugins_updated\":false,\"common.show_note.plugins_updated.timestamp\":1584123416,\"minify.show_note.need_flush\":false,\"minify.show_note.need_flush.timestamp\":1584123416,\"objectcache.show_note.flush_needed\":false,\"objectcache.show_note.flush_needed.timestamp\":1584123416,\"license.community_terms\":\"accept\"}', 'no'),
(1827, 'w3tc_extensions_hooks', '{\"actions\":[],\"filters\":[],\"next_check_date\":1586361731}', 'yes'),
(1833, 'action_scheduler_migration_status', 'complete', 'yes'),
(1906, '_transient_timeout_jetpack_file_data_8.3', '1588780930', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1907, '_transient_jetpack_file_data_8.3', 'a:51:{s:32:\"ca086af79d0d9dccacc934ccff5b4fd7\";a:14:{s:4:\"name\";s:15:\"Tiled Galleries\";s:11:\"description\";s:61:\"Display image galleries in a variety of elegant arrangements.\";s:4:\"sort\";s:2:\"24\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"2.1\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:17:\"Photos and Videos\";s:7:\"feature\";s:10:\"Appearance\";s:25:\"additional_search_queries\";s:43:\"gallery, tiles, tiled, grid, mosaic, images\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"b3b34928b1e549bb52f866accc0450c5\";a:14:{s:4:\"name\";s:9:\"Asset CDN\";s:11:\"description\";s:154:\"Jetpack’s Site Accelerator loads your site faster by optimizing your images and serving your images and static files from our global network of servers.\";s:4:\"sort\";s:2:\"26\";s:20:\"recommendation_order\";s:1:\"1\";s:10:\"introduced\";s:3:\"6.6\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:42:\"Photos and Videos, Appearance, Recommended\";s:7:\"feature\";s:23:\"Recommended, Appearance\";s:25:\"additional_search_queries\";s:160:\"site accelerator, accelerate, static, assets, javascript, css, files, performance, cdn, bandwidth, content delivery network, pagespeed, combine js, optimize css\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"b00e4e6c109ce6f77b5c83fbaaaead4c\";a:14:{s:4:\"name\";s:11:\"Lazy Images\";s:11:\"description\";s:137:\"Speed up your site and create a smoother viewing experience by loading images as visitors scroll down the screen, instead of all at once.\";s:4:\"sort\";s:2:\"24\";s:20:\"recommendation_order\";s:2:\"14\";s:10:\"introduced\";s:5:\"5.6.0\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:23:\"Appearance, Recommended\";s:7:\"feature\";s:10:\"Appearance\";s:25:\"additional_search_queries\";s:150:\"mobile, theme, fast images, fast image, image, lazy, lazy load, lazyload, images, lazy images, thumbnail, image lazy load, lazy loading, load, loading\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"212a162108f1dc20cc6c768d5b47d4f2\";a:14:{s:4:\"name\";s:0:\"\";s:11:\"description\";s:0:\"\";s:4:\"sort\";s:0:\"\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:0:\"\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:0:\"\";s:13:\"auto_activate\";s:0:\"\";s:11:\"module_tags\";s:0:\"\";s:7:\"feature\";s:0:\"\";s:25:\"additional_search_queries\";s:0:\"\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"d3576702faeb399eb47ad20f586c3804\";a:14:{s:4:\"name\";s:8:\"Carousel\";s:11:\"description\";s:75:\"Display images and galleries in a gorgeous, full-screen browsing experience\";s:4:\"sort\";s:2:\"22\";s:20:\"recommendation_order\";s:2:\"12\";s:10:\"introduced\";s:3:\"1.5\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:17:\"Photos and Videos\";s:7:\"feature\";s:10:\"Appearance\";s:25:\"additional_search_queries\";s:80:\"gallery, carousel, diaporama, slideshow, images, lightbox, exif, metadata, image\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"55409a5f8388b8d33e2350ef80de3ea3\";a:14:{s:4:\"name\";s:13:\"Comment Likes\";s:11:\"description\";s:64:\"Increase visitor engagement by adding a Like button to comments.\";s:4:\"sort\";s:2:\"39\";s:20:\"recommendation_order\";s:2:\"17\";s:10:\"introduced\";s:3:\"5.1\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:6:\"Social\";s:7:\"feature\";s:0:\"\";s:25:\"additional_search_queries\";s:37:\"like widget, like button, like, likes\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"e914e6d31cb61f5a9ef86e1b9573430e\";a:14:{s:4:\"name\";s:8:\"Comments\";s:11:\"description\";s:81:\"Let visitors use a WordPress.com, Twitter, Facebook, or Google account to comment\";s:4:\"sort\";s:2:\"20\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"1.4\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:6:\"Social\";s:7:\"feature\";s:10:\"Engagement\";s:25:\"additional_search_queries\";s:53:\"comments, comment, facebook, twitter, google+, social\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"f1b8c61705fb18eb8c8584c9f9cdffd9\";a:14:{s:4:\"name\";s:12:\"Contact Form\";s:11:\"description\";s:81:\"Add a customizable contact form to any post or page using the Jetpack Form Block.\";s:4:\"sort\";s:2:\"15\";s:20:\"recommendation_order\";s:2:\"14\";s:10:\"introduced\";s:3:\"1.3\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:3:\"Yes\";s:11:\"module_tags\";s:5:\"Other\";s:7:\"feature\";s:7:\"Writing\";s:25:\"additional_search_queries\";s:214:\"contact, form, grunion, feedback, submission, contact form, email, feedback, contact form plugin, custom form, custom form plugin, form builder, forms, form maker, survey, contact by jetpack, contact us, forms free\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"4fca6eb23a793155d69fdb119a094926\";a:14:{s:4:\"name\";s:9:\"Copy Post\";s:11:\"description\";s:77:\"Enable the option to copy entire posts and pages, including tags and settings\";s:4:\"sort\";s:2:\"15\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"7.0\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:7:\"Writing\";s:7:\"feature\";s:7:\"Writing\";s:25:\"additional_search_queries\";s:15:\"copy, duplicate\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"cfdac01e3c3c529f93a8f49edef1f5db\";a:14:{s:4:\"name\";s:20:\"Custom content types\";s:11:\"description\";s:74:\"Display different types of content on your site with custom content types.\";s:4:\"sort\";s:2:\"34\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"3.1\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:7:\"Writing\";s:7:\"feature\";s:7:\"Writing\";s:25:\"additional_search_queries\";s:72:\"cpt, custom post types, portfolio, portfolios, testimonial, testimonials\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"4b9137ecf507290743735fb1f94535df\";a:14:{s:4:\"name\";s:10:\"Custom CSS\";s:11:\"description\";s:88:\"Adds options for CSS preprocessor use, disabling the theme\'s CSS, or custom image width.\";s:4:\"sort\";s:1:\"2\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"1.7\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:10:\"Appearance\";s:7:\"feature\";s:10:\"Appearance\";s:25:\"additional_search_queries\";s:108:\"css, customize, custom, style, editor, less, sass, preprocessor, font, mobile, appearance, theme, stylesheet\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"95d75b38d76d2ee1b5b537026eadb8ff\";a:14:{s:4:\"name\";s:21:\"Enhanced Distribution\";s:11:\"description\";s:27:\"Increase reach and traffic.\";s:4:\"sort\";s:1:\"5\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"1.2\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:6:\"Public\";s:11:\"module_tags\";s:7:\"Writing\";s:7:\"feature\";s:10:\"Engagement\";s:25:\"additional_search_queries\";s:54:\"google, seo, firehose, search, broadcast, broadcasting\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"f1bb571a95c5de1e6adaf9db8567c039\";a:14:{s:4:\"name\";s:0:\"\";s:11:\"description\";s:0:\"\";s:4:\"sort\";s:0:\"\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:0:\"\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:0:\"\";s:13:\"auto_activate\";s:0:\"\";s:11:\"module_tags\";s:0:\"\";s:7:\"feature\";s:0:\"\";s:25:\"additional_search_queries\";s:0:\"\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"822f9ef1281dace3fb7cc420c77d24e0\";a:14:{s:4:\"name\";s:16:\"Google Analytics\";s:11:\"description\";s:56:\"Set up Google Analytics without touching a line of code.\";s:4:\"sort\";s:2:\"37\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"4.5\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:0:\"\";s:7:\"feature\";s:10:\"Engagement\";s:25:\"additional_search_queries\";s:37:\"webmaster, google, analytics, console\";s:12:\"plan_classes\";s:17:\"business, premium\";}s:32:\"c167275f926ef0eefaec9a679bd88d34\";a:14:{s:4:\"name\";s:19:\"Gravatar Hovercards\";s:11:\"description\";s:58:\"Enable pop-up business cards over commenters’ Gravatars.\";s:4:\"sort\";s:2:\"11\";s:20:\"recommendation_order\";s:2:\"13\";s:10:\"introduced\";s:3:\"1.1\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:18:\"Social, Appearance\";s:7:\"feature\";s:10:\"Appearance\";s:25:\"additional_search_queries\";s:20:\"gravatar, hovercards\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"58cbd4585a74829a1c88aa9c295f3993\";a:14:{s:4:\"name\";s:15:\"Infinite Scroll\";s:11:\"description\";s:53:\"Automatically load new content when a visitor scrolls\";s:4:\"sort\";s:2:\"26\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"2.0\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:10:\"Appearance\";s:7:\"feature\";s:10:\"Appearance\";s:25:\"additional_search_queries\";s:33:\"scroll, infinite, infinite scroll\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"d4a35eabc948caefad71a0d3303b95c8\";a:14:{s:4:\"name\";s:8:\"JSON API\";s:11:\"description\";s:51:\"Allow applications to securely access your content.\";s:4:\"sort\";s:2:\"19\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"1.9\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:6:\"Public\";s:11:\"module_tags\";s:19:\"Writing, Developers\";s:7:\"feature\";s:7:\"General\";s:25:\"additional_search_queries\";s:50:\"api, rest, develop, developers, json, klout, oauth\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"7b0c670bc3f8209dc83abb8610e23a89\";a:14:{s:4:\"name\";s:14:\"Beautiful Math\";s:11:\"description\";s:74:\"Use the LaTeX markup language to write mathematical equations and formulas\";s:4:\"sort\";s:2:\"12\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"1.1\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:7:\"Writing\";s:7:\"feature\";s:7:\"Writing\";s:25:\"additional_search_queries\";s:47:\"latex, math, equation, equations, formula, code\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"8e46c72906c928eca634ac2c8b1bc84f\";a:14:{s:4:\"name\";s:5:\"Likes\";s:11:\"description\";s:63:\"Give visitors an easy way to show they appreciate your content.\";s:4:\"sort\";s:2:\"23\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"2.2\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:6:\"Social\";s:7:\"feature\";s:10:\"Engagement\";s:25:\"additional_search_queries\";s:26:\"like, likes, wordpress.com\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"2df2264a07aff77e0556121e33349dce\";a:14:{s:4:\"name\";s:8:\"Markdown\";s:11:\"description\";s:50:\"Write posts or pages in plain-text Markdown syntax\";s:4:\"sort\";s:2:\"31\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"2.8\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:7:\"Writing\";s:7:\"feature\";s:7:\"Writing\";s:25:\"additional_search_queries\";s:12:\"md, markdown\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"0337eacae47d30c946cb9fc4e5ece649\";a:14:{s:4:\"name\";s:21:\"WordPress.com Toolbar\";s:11:\"description\";s:91:\"Replaces the admin bar with a useful toolbar to quickly manage your site via WordPress.com.\";s:4:\"sort\";s:2:\"38\";s:20:\"recommendation_order\";s:2:\"16\";s:10:\"introduced\";s:3:\"4.8\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:7:\"General\";s:7:\"feature\";s:0:\"\";s:25:\"additional_search_queries\";s:19:\"adminbar, masterbar\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"cb5d81445061b89d19cb9c7754697a39\";a:14:{s:4:\"name\";s:0:\"\";s:11:\"description\";s:0:\"\";s:4:\"sort\";s:0:\"\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:0:\"\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:0:\"\";s:13:\"auto_activate\";s:0:\"\";s:11:\"module_tags\";s:0:\"\";s:7:\"feature\";s:0:\"\";s:25:\"additional_search_queries\";s:0:\"\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"ea0fbbd64080c81a90a784924603588c\";a:14:{s:4:\"name\";s:0:\"\";s:11:\"description\";s:0:\"\";s:4:\"sort\";s:0:\"\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:0:\"\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:0:\"\";s:13:\"auto_activate\";s:0:\"\";s:11:\"module_tags\";s:0:\"\";s:7:\"feature\";s:0:\"\";s:25:\"additional_search_queries\";s:0:\"\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"5c53fdb3633ba3232f60180116900273\";a:14:{s:4:\"name\";s:0:\"\";s:11:\"description\";s:0:\"\";s:4:\"sort\";s:0:\"\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:0:\"\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:0:\"\";s:13:\"auto_activate\";s:0:\"\";s:11:\"module_tags\";s:0:\"\";s:7:\"feature\";s:0:\"\";s:25:\"additional_search_queries\";s:0:\"\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"40b97d9ce396339d3e8e46b833a045b5\";a:14:{s:4:\"name\";s:0:\"\";s:11:\"description\";s:0:\"\";s:4:\"sort\";s:0:\"\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:0:\"\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:0:\"\";s:13:\"auto_activate\";s:0:\"\";s:11:\"module_tags\";s:0:\"\";s:7:\"feature\";s:0:\"\";s:25:\"additional_search_queries\";s:0:\"\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"0739df64747f2d02c140f23ce6c19cd8\";a:14:{s:4:\"name\";s:0:\"\";s:11:\"description\";s:0:\"\";s:4:\"sort\";s:0:\"\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:0:\"\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:0:\"\";s:13:\"auto_activate\";s:0:\"\";s:11:\"module_tags\";s:0:\"\";s:7:\"feature\";s:0:\"\";s:25:\"additional_search_queries\";s:0:\"\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"c54bb0a65b39f1316da8632197a88a4e\";a:14:{s:4:\"name\";s:7:\"Monitor\";s:11:\"description\";s:118:\"Jetpack’s downtime monitoring will continuously watch your site, and alert you the moment that downtime is detected.\";s:4:\"sort\";s:2:\"28\";s:20:\"recommendation_order\";s:2:\"10\";s:10:\"introduced\";s:3:\"2.6\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:11:\"Recommended\";s:7:\"feature\";s:8:\"Security\";s:25:\"additional_search_queries\";s:123:\"monitor, uptime, downtime, monitoring, maintenance, maintenance mode, offline, site is down, site down, down, repair, error\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"cc013f4c5480c7bdc1e7edb2f410bf3c\";a:14:{s:4:\"name\";s:13:\"Notifications\";s:11:\"description\";s:57:\"Receive instant notifications of site comments and likes.\";s:4:\"sort\";s:2:\"13\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"1.9\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:3:\"Yes\";s:11:\"module_tags\";s:5:\"Other\";s:7:\"feature\";s:7:\"General\";s:25:\"additional_search_queries\";s:62:\"notification, notifications, toolbar, adminbar, push, comments\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"714284944f56d6936a40f3309900bc8e\";a:14:{s:4:\"name\";s:9:\"Image CDN\";s:11:\"description\";s:141:\"Mirrors and serves your images from our free and fast image CDN, improving your site’s performance with no additional load on your servers.\";s:4:\"sort\";s:2:\"25\";s:20:\"recommendation_order\";s:1:\"1\";s:10:\"introduced\";s:3:\"2.0\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:42:\"Photos and Videos, Appearance, Recommended\";s:7:\"feature\";s:23:\"Recommended, Appearance\";s:25:\"additional_search_queries\";s:171:\"photon, photo cdn, image cdn, speed, compression, resize, responsive images, responsive, content distribution network, optimize, page speed, image optimize, photon jetpack\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"348754bc914ee02c72d9af445627784c\";a:14:{s:4:\"name\";s:0:\"\";s:11:\"description\";s:0:\"\";s:4:\"sort\";s:0:\"\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:0:\"\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:0:\"\";s:13:\"auto_activate\";s:0:\"\";s:11:\"module_tags\";s:0:\"\";s:7:\"feature\";s:0:\"\";s:25:\"additional_search_queries\";s:0:\"\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"041704e207c4c59eea93e0499c908bff\";a:14:{s:4:\"name\";s:13:\"Post by email\";s:11:\"description\";s:33:\"Publish posts by sending an email\";s:4:\"sort\";s:2:\"14\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"2.0\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:7:\"Writing\";s:7:\"feature\";s:7:\"Writing\";s:25:\"additional_search_queries\";s:20:\"post by email, email\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"26e6cb3e08a6cfd0811c17e7c633c72c\";a:14:{s:4:\"name\";s:7:\"Protect\";s:11:\"description\";s:151:\"Enabling brute force protection will prevent bots and hackers from attempting to log in to your website with common username and password combinations.\";s:4:\"sort\";s:1:\"1\";s:20:\"recommendation_order\";s:1:\"4\";s:10:\"introduced\";s:3:\"3.4\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:3:\"Yes\";s:11:\"module_tags\";s:11:\"Recommended\";s:7:\"feature\";s:8:\"Security\";s:25:\"additional_search_queries\";s:173:\"security, jetpack protect, secure, protection, botnet, brute force, protect, login, bot, password, passwords, strong passwords, strong password, wp-login.php,  protect admin\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"915a504082f797395713fd01e0e2e713\";a:14:{s:4:\"name\";s:9:\"Publicize\";s:11:\"description\";s:128:\"Publicize makes it easy to share your site’s posts on several social media networks automatically when you publish a new post.\";s:4:\"sort\";s:2:\"10\";s:20:\"recommendation_order\";s:1:\"7\";s:10:\"introduced\";s:3:\"2.0\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:19:\"Social, Recommended\";s:7:\"feature\";s:10:\"Engagement\";s:25:\"additional_search_queries\";s:220:\"facebook, jetpack publicize, twitter, tumblr, linkedin, social, tweet, connections, sharing, social media, automated, automated sharing, auto publish, auto tweet and like, auto tweet, facebook auto post, facebook posting\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"a7b21cc562ee9ffa357bba19701fe45b\";a:14:{s:4:\"name\";s:0:\"\";s:11:\"description\";s:0:\"\";s:4:\"sort\";s:0:\"\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:0:\"\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:0:\"\";s:13:\"auto_activate\";s:0:\"\";s:11:\"module_tags\";s:0:\"\";s:7:\"feature\";s:0:\"\";s:25:\"additional_search_queries\";s:0:\"\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"9243c1a718566213f4eaf3b44cf14b07\";a:14:{s:4:\"name\";s:13:\"Related posts\";s:11:\"description\";s:113:\"Keep visitors engaged on your blog by highlighting relevant and new content at the bottom of each published post.\";s:4:\"sort\";s:2:\"29\";s:20:\"recommendation_order\";s:1:\"9\";s:10:\"introduced\";s:3:\"2.9\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:11:\"Recommended\";s:7:\"feature\";s:10:\"Engagement\";s:25:\"additional_search_queries\";s:360:\"related, jetpack related posts, related posts for wordpress, related posts, popular posts, popular, related content, related post, contextual, context, contextual related posts, related articles, similar posts, easy related posts, related page, simple related posts, free related posts, related thumbnails, similar, engagement, yet another related posts plugin\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"583e4cda5596ee1b28a19cde33f438be\";a:14:{s:4:\"name\";s:6:\"Search\";s:11:\"description\";s:87:\"Enhanced search, powered by Elasticsearch, a powerful replacement for WordPress search.\";s:4:\"sort\";s:2:\"34\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"5.0\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:5:\"false\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:0:\"\";s:7:\"feature\";s:6:\"Search\";s:25:\"additional_search_queries\";s:110:\"search, elastic, elastic search, elasticsearch, fast search, search results, search performance, google search\";s:12:\"plan_classes\";s:8:\"business\";}s:32:\"15346c1f7f2a5f29d34378774ecfa830\";a:14:{s:4:\"name\";s:9:\"SEO Tools\";s:11:\"description\";s:50:\"Better results on search engines and social media.\";s:4:\"sort\";s:2:\"35\";s:20:\"recommendation_order\";s:2:\"15\";s:10:\"introduced\";s:3:\"4.4\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:18:\"Social, Appearance\";s:7:\"feature\";s:7:\"Traffic\";s:25:\"additional_search_queries\";s:81:\"search engine optimization, social preview, meta description, custom title format\";s:12:\"plan_classes\";s:17:\"business, premium\";}s:32:\"72a0ff4cfae86074a7cdd2dcd432ef11\";a:14:{s:4:\"name\";s:7:\"Sharing\";s:11:\"description\";s:120:\"Add Twitter, Facebook and Google+ buttons at the bottom of each post, making it easy for visitors to share your content.\";s:4:\"sort\";s:1:\"7\";s:20:\"recommendation_order\";s:1:\"6\";s:10:\"introduced\";s:3:\"1.1\";s:7:\"changed\";s:3:\"1.2\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:19:\"Social, Recommended\";s:7:\"feature\";s:10:\"Engagement\";s:25:\"additional_search_queries\";s:229:\"share, sharing, sharedaddy, social buttons, buttons, share facebook, share twitter, social media sharing, social media share, social share, icons, email, facebook, twitter, linkedin, pinterest, pocket, social widget, social media\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"bb8c6c190aaec212a7ab6e940165af4d\";a:14:{s:4:\"name\";s:16:\"Shortcode Embeds\";s:11:\"description\";s:177:\"Shortcodes are WordPress-specific markup that let you add media from popular sites. This feature is no longer necessary as the editor now handles media embeds rather gracefully.\";s:4:\"sort\";s:1:\"3\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"1.1\";s:7:\"changed\";s:3:\"1.2\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:46:\"Photos and Videos, Social, Writing, Appearance\";s:7:\"feature\";s:7:\"Writing\";s:25:\"additional_search_queries\";s:236:\"shortcodes, shortcode, embeds, media, bandcamp, dailymotion, facebook, flickr, google calendars, google maps, google+, polldaddy, recipe, recipes, scribd, slideshare, slideshow, slideshows, soundcloud, ted, twitter, vimeo, vine, youtube\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"1abd31fe07ae4fb0f8bb57dc24592219\";a:14:{s:4:\"name\";s:16:\"WP.me Shortlinks\";s:11:\"description\";s:82:\"Generates shorter links so you can have more space to write on social media sites.\";s:4:\"sort\";s:1:\"8\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"1.1\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:6:\"Social\";s:7:\"feature\";s:7:\"Writing\";s:25:\"additional_search_queries\";s:17:\"shortlinks, wp.me\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"cae5f097f8d658e0b0ae50733d7c6476\";a:14:{s:4:\"name\";s:8:\"Sitemaps\";s:11:\"description\";s:50:\"Make it easy for search engines to find your site.\";s:4:\"sort\";s:2:\"13\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"3.9\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:20:\"Recommended, Traffic\";s:7:\"feature\";s:11:\"Recommended\";s:25:\"additional_search_queries\";s:39:\"sitemap, traffic, search, site map, seo\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"e9b8318133b2f95e7906cedb3557a87d\";a:14:{s:4:\"name\";s:14:\"Secure Sign On\";s:11:\"description\";s:63:\"Allow users to log in to this site using WordPress.com accounts\";s:4:\"sort\";s:2:\"30\";s:20:\"recommendation_order\";s:1:\"5\";s:10:\"introduced\";s:3:\"2.6\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:10:\"Developers\";s:7:\"feature\";s:8:\"Security\";s:25:\"additional_search_queries\";s:51:\"sso, single sign on, login, log in, 2fa, two-factor\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"17e66a12031ccf11d8d45ceee0955f05\";a:14:{s:4:\"name\";s:10:\"Site Stats\";s:11:\"description\";s:44:\"Collect valuable traffic stats and insights.\";s:4:\"sort\";s:1:\"1\";s:20:\"recommendation_order\";s:1:\"2\";s:10:\"introduced\";s:3:\"1.1\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:3:\"Yes\";s:11:\"module_tags\";s:23:\"Site Stats, Recommended\";s:7:\"feature\";s:10:\"Engagement\";s:25:\"additional_search_queries\";s:54:\"statistics, tracking, analytics, views, traffic, stats\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"346cf9756e7c1252acecb9a8ca81a21c\";a:14:{s:4:\"name\";s:13:\"Subscriptions\";s:11:\"description\";s:58:\"Let visitors subscribe to new posts and comments via email\";s:4:\"sort\";s:1:\"9\";s:20:\"recommendation_order\";s:1:\"8\";s:10:\"introduced\";s:3:\"1.2\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:6:\"Social\";s:7:\"feature\";s:10:\"Engagement\";s:25:\"additional_search_queries\";s:74:\"subscriptions, subscription, email, follow, followers, subscribers, signup\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"4f84d218792a6efa06ed6feae09c4dd5\";a:14:{s:4:\"name\";s:0:\"\";s:11:\"description\";s:0:\"\";s:4:\"sort\";s:0:\"\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:0:\"\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:0:\"\";s:13:\"auto_activate\";s:0:\"\";s:11:\"module_tags\";s:0:\"\";s:7:\"feature\";s:0:\"\";s:25:\"additional_search_queries\";s:0:\"\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"43c24feb7c541c376af93e0251c1a261\";a:14:{s:4:\"name\";s:20:\"Backups and Scanning\";s:11:\"description\";s:100:\"Protect your site with daily or real-time backups and automated virus scanning and threat detection.\";s:4:\"sort\";s:2:\"32\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:5:\"0:1.2\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:5:\"false\";s:4:\"free\";s:5:\"false\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:0:\"\";s:7:\"feature\";s:16:\"Security, Health\";s:25:\"additional_search_queries\";s:386:\"backup, cloud backup, database backup, restore, wordpress backup, backup plugin, wordpress backup plugin, back up, backup wordpress, backwpup, vaultpress, backups, off-site backups, offsite backup, offsite, off-site, antivirus, malware scanner, security, virus, viruses, prevent viruses, scan, anti-virus, antimalware, protection, safe browsing, malware, wp security, wordpress security\";s:12:\"plan_classes\";s:27:\"personal, business, premium\";}s:32:\"b9396d8038fc29140b499098d2294d79\";a:14:{s:4:\"name\";s:17:\"Site verification\";s:11:\"description\";s:58:\"Establish your site\'s authenticity with external services.\";s:4:\"sort\";s:2:\"33\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"3.0\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:3:\"Yes\";s:11:\"module_tags\";s:0:\"\";s:7:\"feature\";s:10:\"Engagement\";s:25:\"additional_search_queries\";s:56:\"webmaster, seo, google, bing, pinterest, search, console\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"afe184082e106c1bdfe1ee844f98aef3\";a:14:{s:4:\"name\";s:10:\"VideoPress\";s:11:\"description\";s:101:\"Save on hosting storage and bandwidth costs by streaming fast, ad-free video from our global network.\";s:4:\"sort\";s:2:\"27\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"2.5\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:5:\"false\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:0:\"\";s:11:\"module_tags\";s:17:\"Photos and Videos\";s:7:\"feature\";s:7:\"Writing\";s:25:\"additional_search_queries\";s:118:\"video, videos, videopress, video gallery, video player, videoplayer, mobile video, vimeo, youtube, html5 video, stream\";s:12:\"plan_classes\";s:17:\"business, premium\";}s:32:\"44637d43460370af9a1b31ce3ccec0cd\";a:14:{s:4:\"name\";s:17:\"Widget Visibility\";s:11:\"description\";s:42:\"Control where widgets appear on your site.\";s:4:\"sort\";s:2:\"17\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"2.4\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:10:\"Appearance\";s:7:\"feature\";s:10:\"Appearance\";s:25:\"additional_search_queries\";s:54:\"widget visibility, logic, conditional, widgets, widget\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"694c105a5c3b659acfcddad220048d08\";a:14:{s:4:\"name\";s:21:\"Extra Sidebar Widgets\";s:11:\"description\";s:49:\"Provides additional widgets for use on your site.\";s:4:\"sort\";s:1:\"4\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:3:\"1.2\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:2:\"No\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:18:\"Social, Appearance\";s:7:\"feature\";s:10:\"Appearance\";s:25:\"additional_search_queries\";s:65:\"widget, widgets, facebook, gallery, twitter, gravatar, image, rss\";s:12:\"plan_classes\";s:0:\"\";}s:32:\"ae15da72c5802d72f320640bad669561\";a:14:{s:4:\"name\";s:3:\"Ads\";s:11:\"description\";s:60:\"Earn income by allowing Jetpack to display high quality ads.\";s:4:\"sort\";s:1:\"1\";s:20:\"recommendation_order\";s:0:\"\";s:10:\"introduced\";s:5:\"4.5.0\";s:7:\"changed\";s:0:\"\";s:10:\"deactivate\";s:0:\"\";s:4:\"free\";s:0:\"\";s:19:\"requires_connection\";s:3:\"Yes\";s:13:\"auto_activate\";s:2:\"No\";s:11:\"module_tags\";s:19:\"Traffic, Appearance\";s:7:\"feature\";s:0:\"\";s:25:\"additional_search_queries\";s:26:\"advertising, ad codes, ads\";s:12:\"plan_classes\";s:17:\"premium, business\";}}', 'no'),
(1909, '_transient_timeout_wc_shipping_method_count_legacy', '1588867327', 'no'),
(1910, '_transient_wc_shipping_method_count_legacy', 'a:2:{s:7:\"version\";s:10:\"1582916332\";s:5:\"value\";i:0;}', 'no'),
(1913, '_site_transient_timeout_theme_roots', '1586277127', 'no'),
(1914, '_site_transient_theme_roots', 'a:8:{s:8:\"bcf-shop\";s:7:\"/themes\";s:26:\"business-consultant-finder\";s:7:\"/themes\";s:9:\"dro-pizza\";s:7:\"/themes\";s:9:\"healthexx\";s:7:\"/themes\";s:14:\"twentynineteen\";s:7:\"/themes\";s:15:\"twentyseventeen\";s:7:\"/themes\";s:13:\"twentysixteen\";s:7:\"/themes\";s:12:\"twentytwenty\";s:7:\"/themes\";}', 'no'),
(1915, '_transient_timeout__woocommerce_helper_updates', '1586318527', 'no'),
(1916, '_transient__woocommerce_helper_updates', 'a:4:{s:4:\"hash\";s:32:\"d751713988987e9331980363e24189ce\";s:7:\"updated\";i:1586275327;s:8:\"products\";a:0:{}s:6:\"errors\";a:1:{i:0;s:10:\"http-error\";}}', 'no'),
(1917, '_transient_timeout_wc_product_children_90', '1588867327', 'no'),
(1918, '_transient_wc_product_children_90', 'a:2:{s:3:\"all\";a:4:{i:0;i:91;i:1;i:92;i:2;i:93;i:3;i:94;}s:7:\"visible\";a:4:{i:0;i:91;i:1;i:92;i:2;i:93;i:3;i:94;}}', 'no'),
(1919, '_transient_timeout_wc_var_prices_90', '1588868049', 'no'),
(1920, '_transient_wc_var_prices_90', '{\"version\":\"1583180745\",\"e1b88e1c9a8573a0fff4a38a491fcd6d\":{\"price\":{\"91\":\"7.99\",\"92\":\"10.99\",\"93\":\"14.99\",\"94\":\"17.99\"},\"regular_price\":{\"91\":\"7.99\",\"92\":\"10.99\",\"93\":\"14.99\",\"94\":\"17.99\"},\"sale_price\":{\"91\":\"7.99\",\"92\":\"10.99\",\"93\":\"14.99\",\"94\":\"17.99\"}},\"f9e544f77b7eac7add281ef28ca5559f\":{\"price\":{\"91\":\"7.99\",\"92\":\"10.99\",\"93\":\"14.99\",\"94\":\"17.99\"},\"regular_price\":{\"91\":\"7.99\",\"92\":\"10.99\",\"93\":\"14.99\",\"94\":\"17.99\"},\"sale_price\":{\"91\":\"7.99\",\"92\":\"10.99\",\"93\":\"14.99\",\"94\":\"17.99\"}}}', 'no'),
(1921, '_transient_timeout_wc_product_children_120', '1588867327', 'no'),
(1922, '_transient_wc_product_children_120', 'a:2:{s:3:\"all\";a:8:{i:0;i:129;i:1;i:122;i:2;i:123;i:3;i:124;i:4;i:125;i:5;i:126;i:6;i:127;i:7;i:128;}s:7:\"visible\";a:8:{i:0;i:129;i:1;i:122;i:2;i:123;i:3;i:124;i:4;i:125;i:5;i:126;i:6;i:127;i:7;i:128;}}', 'no'),
(1923, '_transient_timeout_wc_var_prices_120', '1588868049', 'no'),
(1924, '_transient_wc_var_prices_120', '{\"version\":\"1583180745\",\"e1b88e1c9a8573a0fff4a38a491fcd6d\":{\"price\":{\"129\":\"20.00\",\"122\":\"18.99\",\"123\":\"18.99\",\"124\":\"18.99\",\"125\":\"18.99\",\"126\":\"18.99\",\"127\":\"18.99\",\"128\":\"18.99\"},\"regular_price\":{\"129\":\"20.00\",\"122\":\"18.99\",\"123\":\"18.99\",\"124\":\"18.99\",\"125\":\"18.99\",\"126\":\"18.99\",\"127\":\"18.99\",\"128\":\"18.99\"},\"sale_price\":{\"129\":\"20.00\",\"122\":\"18.99\",\"123\":\"18.99\",\"124\":\"18.99\",\"125\":\"18.99\",\"126\":\"18.99\",\"127\":\"18.99\",\"128\":\"18.99\"}},\"f9e544f77b7eac7add281ef28ca5559f\":{\"price\":{\"129\":\"20.00\",\"122\":\"18.99\",\"123\":\"18.99\",\"124\":\"18.99\",\"125\":\"18.99\",\"126\":\"18.99\",\"127\":\"18.99\",\"128\":\"18.99\"},\"regular_price\":{\"129\":\"20.00\",\"122\":\"18.99\",\"123\":\"18.99\",\"124\":\"18.99\",\"125\":\"18.99\",\"126\":\"18.99\",\"127\":\"18.99\",\"128\":\"18.99\"},\"sale_price\":{\"129\":\"20.00\",\"122\":\"18.99\",\"123\":\"18.99\",\"124\":\"18.99\",\"125\":\"18.99\",\"126\":\"18.99\",\"127\":\"18.99\",\"128\":\"18.99\"}}}', 'no'),
(1925, '_transient_timeout_wc_product_children_110', '1588867327', 'no'),
(1926, '_transient_wc_product_children_110', 'a:2:{s:3:\"all\";a:4:{i:0;i:111;i:1;i:112;i:2;i:113;i:3;i:114;}s:7:\"visible\";a:4:{i:0;i:111;i:1;i:112;i:2;i:113;i:3;i:114;}}', 'no'),
(1927, '_transient_timeout_wc_var_prices_110', '1588868049', 'no'),
(1928, '_transient_wc_var_prices_110', '{\"version\":\"1583180745\",\"e1b88e1c9a8573a0fff4a38a491fcd6d\":{\"price\":{\"111\":\"7.99\",\"112\":\"10.99\",\"113\":\"14.99\",\"114\":\"17.99\"},\"regular_price\":{\"111\":\"7.99\",\"112\":\"10.99\",\"113\":\"14.99\",\"114\":\"17.99\"},\"sale_price\":{\"111\":\"7.99\",\"112\":\"10.99\",\"113\":\"14.99\",\"114\":\"17.99\"}},\"f9e544f77b7eac7add281ef28ca5559f\":{\"price\":{\"111\":\"7.99\",\"112\":\"10.99\",\"113\":\"14.99\",\"114\":\"17.99\"},\"regular_price\":{\"111\":\"7.99\",\"112\":\"10.99\",\"113\":\"14.99\",\"114\":\"17.99\"},\"sale_price\":{\"111\":\"7.99\",\"112\":\"10.99\",\"113\":\"14.99\",\"114\":\"17.99\"}}}', 'no'),
(1929, '_site_transient_update_themes', 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1586275328;s:7:\"checked\";a:8:{s:8:\"bcf-shop\";s:5:\"1.0.1\";s:26:\"business-consultant-finder\";s:5:\"2.2.3\";s:9:\"dro-pizza\";s:5:\"1.2.8\";s:9:\"healthexx\";s:5:\"1.0.7\";s:14:\"twentynineteen\";s:3:\"1.4\";s:15:\"twentyseventeen\";s:3:\"2.2\";s:13:\"twentysixteen\";s:3:\"2.0\";s:12:\"twentytwenty\";s:3:\"1.1\";}s:8:\"response\";a:5:{s:26:\"business-consultant-finder\";a:6:{s:5:\"theme\";s:26:\"business-consultant-finder\";s:11:\"new_version\";s:5:\"2.2.4\";s:3:\"url\";s:56:\"https://wordpress.org/themes/business-consultant-finder/\";s:7:\"package\";s:74:\"https://downloads.wordpress.org/theme/business-consultant-finder.2.2.4.zip\";s:8:\"requires\";b:0;s:12:\"requires_php\";b:0;}s:14:\"twentynineteen\";a:6:{s:5:\"theme\";s:14:\"twentynineteen\";s:11:\"new_version\";s:3:\"1.5\";s:3:\"url\";s:44:\"https://wordpress.org/themes/twentynineteen/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/theme/twentynineteen.1.5.zip\";s:8:\"requires\";s:5:\"4.9.6\";s:12:\"requires_php\";s:5:\"5.2.4\";}s:15:\"twentyseventeen\";a:6:{s:5:\"theme\";s:15:\"twentyseventeen\";s:11:\"new_version\";s:3:\"2.3\";s:3:\"url\";s:45:\"https://wordpress.org/themes/twentyseventeen/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/theme/twentyseventeen.2.3.zip\";s:8:\"requires\";s:3:\"4.7\";s:12:\"requires_php\";s:5:\"5.2.4\";}s:13:\"twentysixteen\";a:6:{s:5:\"theme\";s:13:\"twentysixteen\";s:11:\"new_version\";s:3:\"2.1\";s:3:\"url\";s:43:\"https://wordpress.org/themes/twentysixteen/\";s:7:\"package\";s:59:\"https://downloads.wordpress.org/theme/twentysixteen.2.1.zip\";s:8:\"requires\";s:3:\"4.4\";s:12:\"requires_php\";s:5:\"5.2.4\";}s:12:\"twentytwenty\";a:6:{s:5:\"theme\";s:12:\"twentytwenty\";s:11:\"new_version\";s:3:\"1.2\";s:3:\"url\";s:42:\"https://wordpress.org/themes/twentytwenty/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/theme/twentytwenty.1.2.zip\";s:8:\"requires\";s:3:\"4.7\";s:12:\"requires_php\";s:5:\"5.2.4\";}}s:12:\"translations\";a:0:{}}', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1930, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1586275328;s:7:\"checked\";a:12:{s:78:\"advanced-product-wishlist-for-woo/advanced-product-wishlist-for-woocomerce.php\";s:5:\"1.0.1\";s:19:\"akismet/akismet.php\";s:5:\"4.1.3\";s:25:\"cloudflare/cloudflare.php\";s:5:\"3.4.1\";s:9:\"hello.php\";s:5:\"1.7.2\";s:19:\"jetpack/jetpack.php\";s:3:\"8.3\";s:39:\"user-registration/user-registration.php\";s:5:\"1.8.1\";s:33:\"w3-total-cache/w3-total-cache.php\";s:6:\"0.13.1\";s:31:\"weather-atlas/weather-atlas.php\";s:5:\"1.2.1\";s:27:\"woocommerce/woocommerce.php\";s:5:\"4.0.0\";s:39:\"woocommerce-admin/woocommerce-admin.php\";s:5:\"1.0.0\";s:91:\"woocommerce-gateway-paypal-express-checkout/woocommerce-gateway-paypal-express-checkout.php\";s:6:\"1.6.20\";s:45:\"woocommerce-services/woocommerce-services.php\";s:6:\"1.22.4\";}s:8:\"response\";a:6:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:5:\"4.1.4\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/akismet.4.1.4.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:3:\"5.4\";s:12:\"requires_php\";b:0;s:13:\"compatibility\";O:8:\"stdClass\":0:{}}s:19:\"jetpack/jetpack.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:21:\"w.org/plugins/jetpack\";s:4:\"slug\";s:7:\"jetpack\";s:6:\"plugin\";s:19:\"jetpack/jetpack.php\";s:11:\"new_version\";s:5:\"8.4.1\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/jetpack/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/jetpack.8.4.1.zip\";s:5:\"icons\";a:3:{s:2:\"2x\";s:60:\"https://ps.w.org/jetpack/assets/icon-256x256.png?rev=1791404\";s:2:\"1x\";s:52:\"https://ps.w.org/jetpack/assets/icon.svg?rev=1791404\";s:3:\"svg\";s:52:\"https://ps.w.org/jetpack/assets/icon.svg?rev=1791404\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:63:\"https://ps.w.org/jetpack/assets/banner-1544x500.png?rev=1791404\";s:2:\"1x\";s:62:\"https://ps.w.org/jetpack/assets/banner-772x250.png?rev=1791404\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:3:\"5.4\";s:12:\"requires_php\";s:3:\"5.6\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}s:39:\"user-registration/user-registration.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:31:\"w.org/plugins/user-registration\";s:4:\"slug\";s:17:\"user-registration\";s:6:\"plugin\";s:39:\"user-registration/user-registration.php\";s:11:\"new_version\";s:7:\"1.8.2.1\";s:3:\"url\";s:48:\"https://wordpress.org/plugins/user-registration/\";s:7:\"package\";s:68:\"https://downloads.wordpress.org/plugin/user-registration.1.8.2.1.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:70:\"https://ps.w.org/user-registration/assets/icon-256x256.png?rev=2141788\";s:2:\"1x\";s:70:\"https://ps.w.org/user-registration/assets/icon-128x128.png?rev=2141788\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:72:\"https://ps.w.org/user-registration/assets/banner-772x250.png?rev=2141793\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:5:\"5.3.2\";s:12:\"requires_php\";s:3:\"5.3\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}s:27:\"woocommerce/woocommerce.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:25:\"w.org/plugins/woocommerce\";s:4:\"slug\";s:11:\"woocommerce\";s:6:\"plugin\";s:27:\"woocommerce/woocommerce.php\";s:11:\"new_version\";s:5:\"4.0.1\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/woocommerce/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/woocommerce.4.0.1.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:64:\"https://ps.w.org/woocommerce/assets/icon-256x256.png?rev=2075035\";s:2:\"1x\";s:64:\"https://ps.w.org/woocommerce/assets/icon-128x128.png?rev=2075035\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:67:\"https://ps.w.org/woocommerce/assets/banner-1544x500.png?rev=2075035\";s:2:\"1x\";s:66:\"https://ps.w.org/woocommerce/assets/banner-772x250.png?rev=2075035\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:3:\"5.4\";s:12:\"requires_php\";s:3:\"7.0\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}s:39:\"woocommerce-admin/woocommerce-admin.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:31:\"w.org/plugins/woocommerce-admin\";s:4:\"slug\";s:17:\"woocommerce-admin\";s:6:\"plugin\";s:39:\"woocommerce-admin/woocommerce-admin.php\";s:11:\"new_version\";s:5:\"1.0.3\";s:3:\"url\";s:48:\"https://wordpress.org/plugins/woocommerce-admin/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/woocommerce-admin.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:70:\"https://ps.w.org/woocommerce-admin/assets/icon-256x256.jpg?rev=2057866\";s:2:\"1x\";s:70:\"https://ps.w.org/woocommerce-admin/assets/icon-128x128.jpg?rev=2057866\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:73:\"https://ps.w.org/woocommerce-admin/assets/banner-1544x500.jpg?rev=2057866\";s:2:\"1x\";s:72:\"https://ps.w.org/woocommerce-admin/assets/banner-772x250.jpg?rev=2057866\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:5:\"5.3.2\";s:12:\"requires_php\";s:6:\"5.6.20\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}s:45:\"woocommerce-services/woocommerce-services.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:34:\"w.org/plugins/woocommerce-services\";s:4:\"slug\";s:20:\"woocommerce-services\";s:6:\"plugin\";s:45:\"woocommerce-services/woocommerce-services.php\";s:11:\"new_version\";s:6:\"1.22.5\";s:3:\"url\";s:51:\"https://wordpress.org/plugins/woocommerce-services/\";s:7:\"package\";s:70:\"https://downloads.wordpress.org/plugin/woocommerce-services.1.22.5.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:73:\"https://ps.w.org/woocommerce-services/assets/icon-256x256.png?rev=1910075\";s:2:\"1x\";s:73:\"https://ps.w.org/woocommerce-services/assets/icon-128x128.png?rev=1910075\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:76:\"https://ps.w.org/woocommerce-services/assets/banner-1544x500.png?rev=1962920\";s:2:\"1x\";s:75:\"https://ps.w.org/woocommerce-services/assets/banner-772x250.png?rev=1962920\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:3:\"5.4\";s:12:\"requires_php\";s:3:\"5.3\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:6:{s:78:\"advanced-product-wishlist-for-woo/advanced-product-wishlist-for-woocomerce.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:47:\"w.org/plugins/advanced-product-wishlist-for-woo\";s:4:\"slug\";s:33:\"advanced-product-wishlist-for-woo\";s:6:\"plugin\";s:78:\"advanced-product-wishlist-for-woo/advanced-product-wishlist-for-woocomerce.php\";s:11:\"new_version\";s:5:\"1.0.1\";s:3:\"url\";s:64:\"https://wordpress.org/plugins/advanced-product-wishlist-for-woo/\";s:7:\"package\";s:76:\"https://downloads.wordpress.org/plugin/advanced-product-wishlist-for-woo.zip\";s:5:\"icons\";a:1:{s:7:\"default\";s:84:\"https://s.w.org/plugins/geopattern-icon/advanced-product-wishlist-for-woo_ae6198.svg\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:88:\"https://ps.w.org/advanced-product-wishlist-for-woo/assets/banner-772x250.png?rev=2145792\";}s:11:\"banners_rtl\";a:0:{}}s:25:\"cloudflare/cloudflare.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:24:\"w.org/plugins/cloudflare\";s:4:\"slug\";s:10:\"cloudflare\";s:6:\"plugin\";s:25:\"cloudflare/cloudflare.php\";s:11:\"new_version\";s:5:\"3.4.1\";s:3:\"url\";s:41:\"https://wordpress.org/plugins/cloudflare/\";s:7:\"package\";s:59:\"https://downloads.wordpress.org/plugin/cloudflare.3.4.1.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:63:\"https://ps.w.org/cloudflare/assets/icon-256x256.png?rev=1507608\";s:2:\"1x\";s:63:\"https://ps.w.org/cloudflare/assets/icon-128x128.png?rev=1507608\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:66:\"https://ps.w.org/cloudflare/assets/banner-1544x500.png?rev=1509297\";s:2:\"1x\";s:65:\"https://ps.w.org/cloudflare/assets/banner-772x250.png?rev=1507608\";}s:11:\"banners_rtl\";a:0:{}}s:9:\"hello.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:25:\"w.org/plugins/hello-dolly\";s:4:\"slug\";s:11:\"hello-dolly\";s:6:\"plugin\";s:9:\"hello.php\";s:11:\"new_version\";s:5:\"1.7.2\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/hello-dolly/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/hello-dolly.1.7.2.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=2052855\";s:2:\"1x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=2052855\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:66:\"https://ps.w.org/hello-dolly/assets/banner-772x250.jpg?rev=2052855\";}s:11:\"banners_rtl\";a:0:{}}s:33:\"w3-total-cache/w3-total-cache.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:28:\"w.org/plugins/w3-total-cache\";s:4:\"slug\";s:14:\"w3-total-cache\";s:6:\"plugin\";s:33:\"w3-total-cache/w3-total-cache.php\";s:11:\"new_version\";s:6:\"0.13.1\";s:3:\"url\";s:45:\"https://wordpress.org/plugins/w3-total-cache/\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/plugin/w3-total-cache.0.13.1.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:67:\"https://ps.w.org/w3-total-cache/assets/icon-256x256.png?rev=1041806\";s:2:\"1x\";s:67:\"https://ps.w.org/w3-total-cache/assets/icon-128x128.png?rev=1041806\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:69:\"https://ps.w.org/w3-total-cache/assets/banner-772x250.jpg?rev=1041806\";}s:11:\"banners_rtl\";a:0:{}}s:31:\"weather-atlas/weather-atlas.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:27:\"w.org/plugins/weather-atlas\";s:4:\"slug\";s:13:\"weather-atlas\";s:6:\"plugin\";s:31:\"weather-atlas/weather-atlas.php\";s:11:\"new_version\";s:5:\"1.2.1\";s:3:\"url\";s:44:\"https://wordpress.org/plugins/weather-atlas/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/weather-atlas.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:66:\"https://ps.w.org/weather-atlas/assets/icon-256x256.png?rev=1682546\";s:2:\"1x\";s:66:\"https://ps.w.org/weather-atlas/assets/icon-128x128.png?rev=1682546\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:69:\"https://ps.w.org/weather-atlas/assets/banner-1544x500.png?rev=1682546\";s:2:\"1x\";s:68:\"https://ps.w.org/weather-atlas/assets/banner-772x250.png?rev=1682546\";}s:11:\"banners_rtl\";a:0:{}}s:91:\"woocommerce-gateway-paypal-express-checkout/woocommerce-gateway-paypal-express-checkout.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:57:\"w.org/plugins/woocommerce-gateway-paypal-express-checkout\";s:4:\"slug\";s:43:\"woocommerce-gateway-paypal-express-checkout\";s:6:\"plugin\";s:91:\"woocommerce-gateway-paypal-express-checkout/woocommerce-gateway-paypal-express-checkout.php\";s:11:\"new_version\";s:6:\"1.6.20\";s:3:\"url\";s:74:\"https://wordpress.org/plugins/woocommerce-gateway-paypal-express-checkout/\";s:7:\"package\";s:93:\"https://downloads.wordpress.org/plugin/woocommerce-gateway-paypal-express-checkout.1.6.20.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:96:\"https://ps.w.org/woocommerce-gateway-paypal-express-checkout/assets/icon-256x256.png?rev=1900204\";s:2:\"1x\";s:96:\"https://ps.w.org/woocommerce-gateway-paypal-express-checkout/assets/icon-128x128.png?rev=1900204\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:99:\"https://ps.w.org/woocommerce-gateway-paypal-express-checkout/assets/banner-1544x500.png?rev=1948167\";s:2:\"1x\";s:98:\"https://ps.w.org/woocommerce-gateway-paypal-express-checkout/assets/banner-772x250.png?rev=1948167\";}s:11:\"banners_rtl\";a:0:{}}}}', 'no'),
(1934, '_transient_timeout_jetpack_idc_allowed', '1586278930', 'no'),
(1935, '_transient_jetpack_idc_allowed', '1', 'no'),
(1943, '_transient_wc_count_comments', 'O:8:\"stdClass\":7:{s:14:\"total_comments\";i:0;s:3:\"all\";i:0;s:9:\"moderated\";i:0;s:8:\"approved\";i:0;s:4:\"spam\";i:0;s:5:\"trash\";i:0;s:12:\"post-trashed\";i:0;}', 'yes'),
(1946, '_transient_timeout_jetpack_a8c_data', '1586362255', 'no'),
(1947, '_transient_jetpack_a8c_data', 'a:4:{s:4:\"a12s\";i:1176;s:9:\"countries\";i:75;s:9:\"languages\";i:93;s:16:\"featured_plugins\";a:4:{i:0;s:11:\"woocommerce\";i:1;s:14:\"wp-super-cache\";i:2;s:14:\"wp-job-manager\";i:3;s:15:\"co-authors-plus\";}}', 'no'),
(1948, '_transient_timeout_jetpack_https_test', '1586362256', 'no'),
(1949, '_transient_jetpack_https_test', '1', 'no'),
(1950, '_transient_timeout_jetpack_https_test_message', '1586362256', 'no'),
(1951, '_transient_jetpack_https_test_message', '', 'no'),
(1952, '_transient_timeout_w3tc.verify_plugins', '1586880656', 'no'),
(1953, '_transient_w3tc.verify_plugins', '1', 'no'),
(1954, '_transient_timeout_woocommerce_admin_low_out_of_stock_count', '1586279456', 'no'),
(1955, '_transient_woocommerce_admin_low_out_of_stock_count', '0', 'no'),
(1960, '_transient_timeout_wc_product_children_104', '1588868049', 'no'),
(1961, '_transient_wc_product_children_104', 'a:2:{s:3:\"all\";a:4:{i:0;i:105;i:1;i:106;i:2;i:107;i:3;i:108;}s:7:\"visible\";a:4:{i:0;i:105;i:1;i:106;i:2;i:107;i:3;i:108;}}', 'no'),
(1962, '_transient_timeout_wc_var_prices_104', '1588868049', 'no'),
(1963, '_transient_wc_var_prices_104', '{\"version\":\"1583180745\",\"f9e544f77b7eac7add281ef28ca5559f\":{\"price\":{\"105\":\"7.99\",\"106\":\"10.99\",\"107\":\"14.99\",\"108\":\"17.99\"},\"regular_price\":{\"105\":\"7.99\",\"106\":\"10.99\",\"107\":\"14.99\",\"108\":\"17.99\"},\"sale_price\":{\"105\":\"7.99\",\"106\":\"10.99\",\"107\":\"14.99\",\"108\":\"17.99\"}},\"e1b88e1c9a8573a0fff4a38a491fcd6d\":{\"price\":{\"105\":\"7.99\",\"106\":\"10.99\",\"107\":\"14.99\",\"108\":\"17.99\"},\"regular_price\":{\"105\":\"7.99\",\"106\":\"10.99\",\"107\":\"14.99\",\"108\":\"17.99\"},\"sale_price\":{\"105\":\"7.99\",\"106\":\"10.99\",\"107\":\"14.99\",\"108\":\"17.99\"}}}', 'no'),
(1964, '_transient_timeout_wc_child_has_weight_120', '1588868062', 'no'),
(1965, '_transient_wc_child_has_weight_120', '0', 'no'),
(1966, '_transient_timeout_wc_child_has_dimensions_120', '1588868062', 'no'),
(1967, '_transient_wc_child_has_dimensions_120', '0', 'no'),
(1968, '_transient_timeout_wc_related_120', '1586362462', 'no'),
(1969, '_transient_wc_related_120', 'a:1:{s:51:\"limit=9&exclude_ids%5B0%5D=0&exclude_ids%5B1%5D=120\";a:3:{i:0;s:2:\"90\";i:1;s:3:\"104\";i:2;s:3:\"110\";}}', 'no'),
(1970, '_transient_timeout_wc_term_counts', '1588868062', 'no'),
(1971, '_transient_wc_term_counts', 'a:1:{i:16;s:1:\"4\";}', 'no'),
(1973, '_transient_timeout_wc_child_has_weight_90', '1588868092', 'no'),
(1974, '_transient_wc_child_has_weight_90', '0', 'no'),
(1975, '_transient_timeout_wc_child_has_dimensions_90', '1588868092', 'no'),
(1976, '_transient_wc_child_has_dimensions_90', '0', 'no'),
(1977, '_transient_timeout_wc_related_90', '1586362492', 'no'),
(1978, '_transient_wc_related_90', 'a:1:{s:50:\"limit=9&exclude_ids%5B0%5D=0&exclude_ids%5B1%5D=90\";a:3:{i:0;s:3:\"104\";i:1;s:3:\"110\";i:2;s:3:\"120\";}}', 'no'),
(1981, '_transient_timeout_weather_atlas_transient_2363001', '1586277139', 'no'),
(1982, '_transient_weather_atlas_transient_2363001', '{\"city\":{\"city_selector\":\"2363001\",\"country_selector\":\"250\",\"http_root\":\"https:\\/\\/www.weather-us.com\",\"country_name_de\":\"Minnesota, USA\",\"country_name_rewrite_de\":\"minnesota-usa\",\"city_name_de\":\"Shakopee\",\"city_name_rewrite_de\":\"shakopee\",\"country_name_en\":\"Minnesota, USA\",\"country_name_rewrite_en\":\"minnesota-usa\",\"city_name_en\":\"Shakopee\",\"city_name_rewrite_en\":\"shakopee\",\"country_name_es\":\"Minnesota, EE.UU.\",\"country_name_rewrite_es\":\"minnesota-eeuu\",\"city_name_es\":\"Shakopee\",\"city_name_rewrite_es\":\"shakopee\",\"country_name_ru\":\"\\u041c\\u0438\\u043d\\u043d\\u0435\\u0441\\u043e\\u0442\\u0430, \\u0421\\u0428\\u0410\",\"country_name_rewrite_ru\":\"minnesota-usa\",\"city_name_ru\":\"\\u0428\\u0430\\u043a\\u043e\\u043f\\u0438\",\"city_name_rewrite_ru\":\"shakopee\",\"country_name_zh\":\"\\u660e\\u5c3c\\u82cf\\u8fbe, \\u7f8e\\u56fd\",\"country_name_rewrite_zh\":\"minnesota-usa\",\"city_name_zh\":\"\\u6c99\\u79d1\\u76ae\",\"city_name_rewrite_zh\":\"shakopee\",\"time_of_sunrise\":\"06:41\",\"time_of_sunset\":\"19:50\",\"timezone_abbr\":\"CDT\"},\"current\":{\"current_temp_c\":\"14\",\"current_temp_f\":\"58\",\"current_temp_feelslike_c\":\"13\",\"current_temp_feelslike_f\":\"57\",\"current_icon\":\"26\",\"current_text_de\":\"Bedeckt\",\"current_text_en\":\"Cloudy\",\"current_text_es\":\"Nublado\",\"current_text_ru\":\"\\u041e\\u0431\\u043b\\u0430\\u0447\\u043d\\u043e\",\"current_text_zh\":\"\\u591a\\u4e91\",\"current_wind_kph\":\"8\",\"current_wind_mph\":\"5\",\"current_wind_dir\":\"NW\",\"current_wind_deg\":\"310\",\"current_humidity_relative\":\"84\",\"current_pressure_mb\":1004.4,\"current_pressure_in\":29.65,\"current_uv_index\":\"1\"},\"hourly\":{\"1\":{\"hour\":\"11\",\"hour_temp_c\":\"14\",\"hour_temp_f\":\"58\",\"hour_icon\":\"26\",\"hour_text_de\":\"Bedeckt\",\"hour_text_en\":\"Cloudy\",\"hour_text_es\":\"Nublado\",\"hour_text_ru\":\"\\u041e\\u0431\\u043b\\u0430\\u0447\\u043d\\u043e\",\"hour_text_zh\":\"\\u591a\\u4e91\"},\"2\":{\"hour\":\"12\",\"hour_temp_c\":\"15\",\"hour_temp_f\":\"60\",\"hour_icon\":\"30\",\"hour_text_de\":\"Wolkig\",\"hour_text_en\":\"Partly Cloudy\",\"hour_text_es\":\"Parcialmente nublado\",\"hour_text_ru\":\"\\u041f\\u0435\\u0440\\u0435\\u043c\\u0435\\u043d\\u043d\\u0430\\u044f \\u043e\\u0431\\u043b\\u0430\\u0447\\u043d\\u043e\\u0441\\u0442\\u044c\",\"hour_text_zh\":\"\\u5c40\\u90e8\\u591a\\u4e91\"},\"3\":{\"hour\":\"13\",\"hour_temp_c\":\"17\",\"hour_temp_f\":\"63\",\"hour_icon\":\"30\",\"hour_text_de\":\"Wolkig\",\"hour_text_en\":\"Partly Cloudy\",\"hour_text_es\":\"Parcialmente nublado\",\"hour_text_ru\":\"\\u041f\\u0435\\u0440\\u0435\\u043c\\u0435\\u043d\\u043d\\u0430\\u044f \\u043e\\u0431\\u043b\\u0430\\u0447\\u043d\\u043e\\u0441\\u0442\\u044c\",\"hour_text_zh\":\"\\u5c40\\u90e8\\u591a\\u4e91\"},\"4\":{\"hour\":\"14\",\"hour_temp_c\":\"18\",\"hour_temp_f\":\"65\",\"hour_icon\":\"34\",\"hour_text_de\":\"Meist sonnig\",\"hour_text_en\":\"Mostly Sunny\",\"hour_text_es\":\"Mayormente soleado\",\"hour_text_ru\":\"\\u041f\\u0440\\u0435\\u0438\\u043c\\u0443\\u0449\\u0435\\u0441\\u0442\\u0432\\u0435\\u043d\\u043d\\u043e \\u0441\\u043e\\u043b\\u043d\\u0435\\u0447\\u043d\\u043e\",\"hour_text_zh\":\"\\u5927\\u90e8\\u5730\\u533a\\u6674\\u6717\"},\"5\":{\"hour\":\"15\",\"hour_temp_c\":\"20\",\"hour_temp_f\":\"68\",\"hour_icon\":\"32\",\"hour_text_de\":\"Sonnig\",\"hour_text_en\":\"Sunny\",\"hour_text_es\":\"Mayormente soleado\",\"hour_text_ru\":\"\\u0421\\u043e\\u043b\\u043d\\u0435\\u0447\\u043d\\u043e\",\"hour_text_zh\":\"\\u6674\\u6717\"}},\"daily\":{\"1\":{\"day_name_de_short\":\"Di\",\"day_name_en_short\":\"Tue\",\"day_name_es_short\":\"Ma\",\"day_name_ru_short\":\"\\u0412\\u0442\",\"day_name_zh_short\":\"\\u661f\\u671f\\u4e8c\",\"day_temp_high_c\":\"21\",\"day_temp_high_f\":\"69\",\"day_temp_low_c\":\"7\",\"day_temp_low_f\":\"44\",\"day_icon\":\"30\",\"day_text_de\":\"Vorm. Wolken \\/ Nachm. Sonne\",\"day_text_en\":\"AM Clouds \\/ PM Sun\",\"day_text_es\":\"Nubes por la ma\\u00f1ana \\/ Sol por la tarde\",\"day_text_ru\":\"\\u041e\\u0431\\u043b\\u0430\\u0447\\u043d\\u043e\\u0441\\u0442\\u044c \\u0443\\u0442\\u0440\\u043e\\u043c \\/ \\u0441\\u043e\\u043b\\u043d\\u0446\\u0435 \\u0432\\u0435\\u0447\\u0435\\u0440\\u043e\\u043c\",\"day_text_zh\":\"\\u5c40\\u90e8\\u591a\\u4e91\"},\"2\":{\"day_name_de_short\":\"Mi\",\"day_name_en_short\":\"Wed\",\"day_name_es_short\":\"Mx\",\"day_name_ru_short\":\"\\u0421\\u0440\",\"day_name_zh_short\":\"\\u661f\\u671f\\u4e09\",\"day_temp_high_c\":\"11\",\"day_temp_high_f\":\"51\",\"day_temp_low_c\":\"0\",\"day_temp_low_f\":\"32\",\"day_icon\":\"39\",\"day_text_de\":\"Vorm. Schauer\",\"day_text_en\":\"AM Showers\",\"day_text_es\":\"Chubascos matinales\",\"day_text_ru\":\"\\u041f\\u0440\\u043e\\u043b\\u0438\\u0432\\u043d\\u044b\\u0435 \\u0434\\u043e\\u0436\\u0434\\u0438 \\u0443\\u0442\\u0440\\u043e\\u043c\",\"day_text_zh\":\"\\u4e0a\\u5348\\u6709\\u9635\\u96e8\"},\"3\":{\"day_name_de_short\":\"Do\",\"day_name_en_short\":\"Thu\",\"day_name_es_short\":\"Ju\",\"day_name_ru_short\":\"\\u0427\\u0442\\u0432\",\"day_name_zh_short\":\"\\u661f\\u671f\\u56db\",\"day_temp_high_c\":\"6\",\"day_temp_high_f\":\"42\",\"day_temp_low_c\":\"-2\",\"day_temp_low_f\":\"28\",\"day_icon\":\"30\",\"day_text_de\":\"Wolkig\",\"day_text_en\":\"Partly Cloudy\",\"day_text_es\":\"Parcialmente nublado\",\"day_text_ru\":\"\\u041f\\u0435\\u0440\\u0435\\u043c\\u0435\\u043d\\u043d\\u0430\\u044f \\u043e\\u0431\\u043b\\u0430\\u0447\\u043d\\u043e\\u0441\\u0442\\u044c\",\"day_text_zh\":\"\\u5c40\\u90e8\\u591a\\u4e91\"},\"4\":{\"day_name_de_short\":\"Fr\",\"day_name_en_short\":\"Fri\",\"day_name_es_short\":\"Vi\",\"day_name_ru_short\":\"\\u041f\\u0442\",\"day_name_zh_short\":\"\\u661f\\u671f\\u4e94\",\"day_temp_high_c\":\"9\",\"day_temp_high_f\":\"49\",\"day_temp_low_c\":\"2\",\"day_temp_low_f\":\"35\",\"day_icon\":\"30\",\"day_text_de\":\"Wolkig\",\"day_text_en\":\"Partly Cloudy\",\"day_text_es\":\"Parcialmente nublado\",\"day_text_ru\":\"\\u041f\\u0435\\u0440\\u0435\\u043c\\u0435\\u043d\\u043d\\u0430\\u044f \\u043e\\u0431\\u043b\\u0430\\u0447\\u043d\\u043e\\u0441\\u0442\\u044c\",\"day_text_zh\":\"\\u5c40\\u90e8\\u591a\\u4e91\"},\"5\":{\"day_name_de_short\":\"Sa\",\"day_name_en_short\":\"Sat\",\"day_name_es_short\":\"Sa\",\"day_name_ru_short\":\"\\u0421\\u0431\",\"day_name_zh_short\":\"\\u661f\\u671f\\u516d\",\"day_temp_high_c\":\"12\",\"day_temp_high_f\":\"53\",\"day_temp_low_c\":\"1\",\"day_temp_low_f\":\"33\",\"day_icon\":\"28\",\"day_text_de\":\"Stark bew\\u00f6lkt\",\"day_text_en\":\"Mostly Cloudy\",\"day_text_es\":\"Mayormente nublado\",\"day_text_ru\":\"\\u041f\\u0440\\u0435\\u0438\\u043c\\u0443\\u0449\\u0435\\u0441\\u0442\\u0432\\u0435\\u043d\\u043d\\u043e \\u043e\\u0431\\u043b\\u0430\\u0447\\u043d\\u043e\",\"day_text_zh\":\"\\u5927\\u90e8\\u5206\\u5730\\u533a\\u591a\\u4e91\"}},\"def\":{\"def_feelslike_de\":\"Gef\\u00fchlt\",\"def_wind_de\":\"Wind\",\"def_humidity_relative_de\":\"Feuchtigkeit\",\"def_pressure_de\":\"Druck\",\"def_uv_index_de\":\"UV-Index\",\"def_weather_forecast_de\":\"Die Wettervorhersage\",\"def_forecast_detailed_de\":\"Detaillierte Wettervorhersage\",\"def_feelslike_en\":\"Feels like\",\"def_wind_en\":\"Wind\",\"def_humidity_relative_en\":\"Humidity\",\"def_pressure_en\":\"Pressure\",\"def_uv_index_en\":\"UV index\",\"def_weather_forecast_en\":\"Weather forecast\",\"def_forecast_detailed_en\":\"Detailed forecast\",\"def_feelslike_es\":\"Se siente como\",\"def_wind_es\":\"Viento\",\"def_humidity_relative_es\":\"Humedad\",\"def_pressure_es\":\"Presi\\u00f3n\",\"def_uv_index_es\":\"\\u00cdndice UV\",\"def_weather_forecast_es\":\"Pron\\u00f3stico del tiempo\",\"def_forecast_detailed_es\":\"Pron\\u00f3stico detallado\",\"def_feelslike_ru\":\"\\u041e\\u0449\\u0443\\u0449\\u0430\\u0435\\u0442\\u0441\\u044f \\u043a\\u0430\\u043a\",\"def_wind_ru\":\"\\u0412\\u0435\\u0442\\u0435\\u0440\",\"def_humidity_relative_ru\":\"\\u0412\\u043b\\u0430\\u0436\\u043d\\u043e\\u0441\\u0442\\u044c\",\"def_pressure_ru\":\"\\u0414\\u0430\\u0432\\u043b\\u0435\\u043d\\u0438\\u0435\",\"def_uv_index_ru\":\"\\u0423\\u0424-\\u0438\\u043d\\u0434\\u0435\\u043a\\u0441\",\"def_weather_forecast_ru\":\"\\u041f\\u0440\\u043e\\u0433\\u043d\\u043e\\u0437 \\u043f\\u043e\\u0433\\u043e\\u0434\\u044b\",\"def_forecast_detailed_ru\":\"\\u041f\\u043e\\u0434\\u0440\\u043e\\u0431\\u043d\\u044b\\u0439 \\u043f\\u0440\\u043e\\u0433\\u043d\\u043e\\u0437 \\u043f\\u043e\\u0433\\u043e\\u0434\\u044b\",\"def_feelslike_zh\":\"\\u611f\\u89c9\\u5c31\\u50cf\",\"def_wind_zh\":\"\\u98ce\",\"def_humidity_relative_zh\":\"\\u6e7f\\u5ea6\",\"def_pressure_zh\":\"\\u538b\\u529b\",\"def_uv_index_zh\":\"\\u7d2b\\u5916\\u7ebf\\u6307\\u6570\",\"def_weather_forecast_zh\":\"\\u5929\\u6c14\\u9884\\u62a5\",\"def_forecast_detailed_zh\":\"\\u8be6\\u7ec6\\u9884\\u62a5\"}}', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(31, 1, '_edit_lock', '1586275794:1'),
(35, 19, '_wp_attached_file', '2020/02/unnamed.png'),
(36, 19, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:512;s:6:\"height\";i:288;s:4:\"file\";s:19:\"2020/02/unnamed.png\";s:5:\"sizes\";a:4:{s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:19:\"unnamed-300x288.png\";s:5:\"width\";i:300;s:6:\"height\";i:288;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:19:\"unnamed-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:6:\"medium\";a:4:{s:4:\"file\";s:19:\"unnamed-300x169.png\";s:5:\"width\";i:300;s:6:\"height\";i:169;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:19:\"unnamed-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(37, 20, '_wp_attached_file', '2020/02/papajohn.jpeg'),
(38, 20, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1136;s:6:\"height\";i:852;s:4:\"file\";s:21:\"2020/02/papajohn.jpeg\";s:5:\"sizes\";a:7:{s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:21:\"papajohn-300x300.jpeg\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:21:\"papajohn-100x100.jpeg\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:18:\"woocommerce_single\";a:4:{s:4:\"file\";s:21:\"papajohn-600x450.jpeg\";s:5:\"width\";i:600;s:6:\"height\";i:450;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:21:\"papajohn-300x225.jpeg\";s:5:\"width\";i:300;s:6:\"height\";i:225;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:22:\"papajohn-1024x768.jpeg\";s:5:\"width\";i:1024;s:6:\"height\";i:768;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:21:\"papajohn-150x150.jpeg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:21:\"papajohn-768x576.jpeg\";s:5:\"width\";i:768;s:6:\"height\";i:576;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(39, 21, '_wp_attached_file', '2020/02/cropped-papajohn.jpeg'),
(40, 21, '_wp_attachment_context', 'site-icon'),
(41, 21, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:512;s:6:\"height\";i:512;s:4:\"file\";s:29:\"2020/02/cropped-papajohn.jpeg\";s:5:\"sizes\";a:6:{s:6:\"medium\";a:4:{s:4:\"file\";s:29:\"cropped-papajohn-300x300.jpeg\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:29:\"cropped-papajohn-150x150.jpeg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:13:\"site_icon-270\";a:4:{s:4:\"file\";s:29:\"cropped-papajohn-270x270.jpeg\";s:5:\"width\";i:270;s:6:\"height\";i:270;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:13:\"site_icon-192\";a:4:{s:4:\"file\";s:29:\"cropped-papajohn-192x192.jpeg\";s:5:\"width\";i:192;s:6:\"height\";i:192;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:13:\"site_icon-180\";a:4:{s:4:\"file\";s:29:\"cropped-papajohn-180x180.jpeg\";s:5:\"width\";i:180;s:6:\"height\";i:180;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"site_icon-32\";a:4:{s:4:\"file\";s:27:\"cropped-papajohn-32x32.jpeg\";s:5:\"width\";i:32;s:6:\"height\";i:32;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(42, 22, '_wp_attached_file', '2020/02/cropped-unnamed.png'),
(43, 22, '_wp_attachment_context', 'custom-header'),
(44, 22, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1500;s:6:\"height\";i:700;s:4:\"file\";s:27:\"2020/02/cropped-unnamed.png\";s:5:\"sizes\";a:8:{s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:27:\"cropped-unnamed-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:27:\"cropped-unnamed-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:18:\"woocommerce_single\";a:4:{s:4:\"file\";s:27:\"cropped-unnamed-600x280.png\";s:5:\"width\";i:600;s:6:\"height\";i:280;s:9:\"mime-type\";s:9:\"image/png\";}s:6:\"medium\";a:4:{s:4:\"file\";s:27:\"cropped-unnamed-300x140.png\";s:5:\"width\";i:300;s:6:\"height\";i:140;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:28:\"cropped-unnamed-1024x478.png\";s:5:\"width\";i:1024;s:6:\"height\";i:478;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:27:\"cropped-unnamed-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:27:\"cropped-unnamed-768x358.png\";s:5:\"width\";i:768;s:6:\"height\";i:358;s:9:\"mime-type\";s:9:\"image/png\";}s:15:\"thumb-home-page\";a:4:{s:4:\"file\";s:27:\"cropped-unnamed-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(47, 20, '_wp_attachment_custom_header_last_used_dro-pizza', '1582915661'),
(48, 20, '_wp_attachment_is_custom_header', 'dro-pizza'),
(51, 3, '_edit_lock', '1582915622:1'),
(52, 2, '_edit_lock', '1582915645:1'),
(53, 24, '_wp_attached_file', 'woocommerce-placeholder.png'),
(54, 24, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1200;s:6:\"height\";i:1200;s:4:\"file\";s:27:\"woocommerce-placeholder.png\";s:5:\"sizes\";a:8:{s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:35:\"woocommerce-placeholder-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:35:\"woocommerce-placeholder-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:18:\"woocommerce_single\";a:4:{s:4:\"file\";s:35:\"woocommerce-placeholder-600x600.png\";s:5:\"width\";i:600;s:6:\"height\";i:600;s:9:\"mime-type\";s:9:\"image/png\";}s:6:\"medium\";a:4:{s:4:\"file\";s:35:\"woocommerce-placeholder-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:37:\"woocommerce-placeholder-1024x1024.png\";s:5:\"width\";i:1024;s:6:\"height\";i:1024;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:35:\"woocommerce-placeholder-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:35:\"woocommerce-placeholder-768x768.png\";s:5:\"width\";i:768;s:6:\"height\";i:768;s:9:\"mime-type\";s:9:\"image/png\";}s:15:\"thumb-home-page\";a:4:{s:4:\"file\";s:35:\"woocommerce-placeholder-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(58, 31, '_wp_attached_file', '2020/02/cheese.png'),
(59, 31, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1125;s:6:\"height\";i:816;s:4:\"file\";s:18:\"2020/02/cheese.png\";s:5:\"sizes\";a:11:{s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:18:\"cheese-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:18:\"cheese-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:18:\"woocommerce_single\";a:4:{s:4:\"file\";s:18:\"cheese-600x435.png\";s:5:\"width\";i:600;s:6:\"height\";i:435;s:9:\"mime-type\";s:9:\"image/png\";}s:6:\"medium\";a:4:{s:4:\"file\";s:18:\"cheese-300x218.png\";s:5:\"width\";i:300;s:6:\"height\";i:218;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:19:\"cheese-1024x743.png\";s:5:\"width\";i:1024;s:6:\"height\";i:743;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:18:\"cheese-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:18:\"cheese-768x557.png\";s:5:\"width\";i:768;s:6:\"height\";i:557;s:9:\"mime-type\";s:9:\"image/png\";}s:15:\"thumb-home-page\";a:4:{s:4:\"file\";s:18:\"cheese-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:5:{s:4:\"file\";s:18:\"cheese-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:11:\"shop_single\";a:4:{s:4:\"file\";s:18:\"cheese-600x435.png\";s:5:\"width\";i:600;s:6:\"height\";i:435;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:18:\"cheese-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(81, 33, '_order_key', 'wc_order_m5Y22c4J7AKNw'),
(82, 33, '_customer_user', '1'),
(83, 33, '_payment_method', 'ppec_paypal'),
(84, 33, '_payment_method_title', 'PayPal'),
(85, 33, '_customer_ip_address', '::1'),
(86, 33, '_customer_user_agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(87, 33, '_created_via', 'checkout'),
(88, 33, '_cart_hash', 'fce75c2998eb470fce8e862402865bf7'),
(89, 33, '_billing_first_name', 'asd'),
(90, 33, '_billing_last_name', 'fe'),
(91, 33, '_billing_address_1', '1028'),
(92, 33, '_billing_city', 'shakopee'),
(93, 33, '_billing_state', 'MN'),
(94, 33, '_billing_postcode', '55379'),
(95, 33, '_billing_country', 'US'),
(96, 33, '_billing_email', '231603@shakopeeschools.org'),
(97, 33, '_order_currency', 'USD'),
(98, 33, '_cart_discount', '0'),
(99, 33, '_cart_discount_tax', '0'),
(100, 33, '_order_shipping', '0.00'),
(101, 33, '_order_shipping_tax', '0'),
(102, 33, '_order_tax', '0'),
(103, 33, '_order_total', '29.98'),
(104, 33, '_order_version', '3.9.2'),
(105, 33, '_prices_include_tax', 'no'),
(106, 33, '_billing_address_index', 'asd fe  1028  shakopee MN 55379 US 231603@shakopeeschools.org '),
(107, 33, '_shipping_address_index', '        '),
(108, 33, 'is_vat_exempt', 'no'),
(109, 35, '_wp_attached_file', '2020/02/cropped-papajohn-1.jpeg'),
(110, 35, '_wp_attachment_context', 'custom-header'),
(111, 35, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:1000;s:6:\"height\";i:249;s:4:\"file\";s:31:\"2020/02/cropped-papajohn-1.jpeg\";s:5:\"sizes\";a:9:{s:6:\"medium\";a:4:{s:4:\"file\";s:30:\"cropped-papajohn-1-300x75.jpeg\";s:5:\"width\";i:300;s:6:\"height\";i:75;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:31:\"cropped-papajohn-1-150x150.jpeg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:31:\"cropped-papajohn-1-768x191.jpeg\";s:5:\"width\";i:768;s:6:\"height\";i:191;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:31:\"cropped-papajohn-1-300x249.jpeg\";s:5:\"width\";i:300;s:6:\"height\";i:249;s:9:\"mime-type\";s:10:\"image/jpeg\";s:9:\"uncropped\";b:0;}s:18:\"woocommerce_single\";a:4:{s:4:\"file\";s:31:\"cropped-papajohn-1-600x149.jpeg\";s:5:\"width\";i:600;s:6:\"height\";i:149;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:31:\"cropped-papajohn-1-100x100.jpeg\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:31:\"cropped-papajohn-1-300x249.jpeg\";s:5:\"width\";i:300;s:6:\"height\";i:249;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:11:\"shop_single\";a:4:{s:4:\"file\";s:31:\"cropped-papajohn-1-600x149.jpeg\";s:5:\"width\";i:600;s:6:\"height\";i:149;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:31:\"cropped-papajohn-1-100x100.jpeg\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}s:17:\"attachment_parent\";i:20;}'),
(112, 35, '_wp_attachment_custom_header_last_used_bcf-shop', '1583173322'),
(113, 35, '_wp_attachment_is_custom_header', 'bcf-shop'),
(114, 19, '_wp_attachment_is_custom_background', 'bcf-shop'),
(117, 31, '_wp_attachment_is_custom_background', 'bcf-shop'),
(118, 24, '_wp_attachment_is_custom_background', 'bcf-shop'),
(121, 39, '_menu_item_type', 'post_type'),
(122, 39, '_menu_item_menu_item_parent', '0'),
(123, 39, '_menu_item_object_id', '25'),
(124, 39, '_menu_item_object', 'page'),
(125, 39, '_menu_item_target', ''),
(126, 39, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(127, 39, '_menu_item_xfn', ''),
(128, 39, '_menu_item_url', ''),
(129, 40, '_menu_item_type', 'post_type'),
(130, 40, '_menu_item_menu_item_parent', '0'),
(131, 40, '_menu_item_object_id', '26'),
(132, 40, '_menu_item_object', 'page'),
(133, 40, '_menu_item_target', ''),
(134, 40, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(135, 40, '_menu_item_xfn', ''),
(136, 40, '_menu_item_url', ''),
(137, 41, '_menu_item_type', 'post_type'),
(138, 41, '_menu_item_menu_item_parent', '0'),
(139, 41, '_menu_item_object_id', '27'),
(140, 41, '_menu_item_object', 'page'),
(141, 41, '_menu_item_target', ''),
(142, 41, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(143, 41, '_menu_item_xfn', ''),
(144, 41, '_menu_item_url', ''),
(145, 42, '_menu_item_type', 'post_type'),
(146, 42, '_menu_item_menu_item_parent', '0'),
(147, 42, '_menu_item_object_id', '28'),
(148, 42, '_menu_item_object', 'page'),
(149, 42, '_menu_item_target', ''),
(150, 42, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(151, 42, '_menu_item_xfn', ''),
(152, 42, '_menu_item_url', ''),
(153, 43, '_menu_item_type', 'custom'),
(154, 43, '_menu_item_menu_item_parent', '0'),
(155, 43, '_menu_item_object_id', '43'),
(156, 43, '_menu_item_object', 'custom'),
(157, 43, '_menu_item_target', ''),
(158, 43, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(159, 43, '_menu_item_xfn', ''),
(160, 43, '_menu_item_url', 'http://localhost:8080/wordpress'),
(179, 47, '_order_key', 'wc_order_hsmh1q3aeAklO'),
(180, 47, '_customer_user', '1'),
(181, 47, '_customer_ip_address', '::1'),
(182, 47, '_customer_user_agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(183, 47, '_created_via', 'checkout'),
(184, 47, '_cart_hash', 'db41d552b25a52875ac00a728957ab6d'),
(185, 47, '_billing_state', 'MN'),
(186, 47, '_billing_country', 'US'),
(187, 47, '_billing_email', '231603@shakopeeschools.org'),
(188, 47, '_order_currency', 'USD'),
(189, 47, '_cart_discount', '29.98'),
(190, 47, '_cart_discount_tax', '0'),
(191, 47, '_order_shipping', '0.00'),
(192, 47, '_order_shipping_tax', '0'),
(193, 47, '_order_tax', '0'),
(194, 47, '_order_total', '0.00'),
(195, 47, '_order_version', '3.9.2'),
(196, 47, '_prices_include_tax', 'no'),
(197, 47, '_billing_address_index', '      MN  US 231603@shakopeeschools.org '),
(198, 47, '_shipping_address_index', '        '),
(199, 47, 'is_vat_exempt', 'no'),
(200, 47, '_date_completed', '1582917324'),
(201, 47, '_date_paid', '1582917324'),
(202, 47, '_paid_date', '2020-02-28 19:15:24'),
(203, 47, '_completed_date', '2020-02-28 19:15:24'),
(204, 47, '_download_permissions_granted', 'yes'),
(205, 47, '_recorded_sales', 'yes'),
(206, 47, '_recorded_coupon_usage_counts', 'yes'),
(208, 47, '_order_stock_reduced', 'yes'),
(211, 50, '_order_key', 'wc_order_IrAtNTtnEcvRi'),
(212, 50, '_customer_user', '0'),
(213, 50, '_customer_ip_address', '::1'),
(214, 50, '_customer_user_agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(215, 50, '_created_via', 'checkout'),
(216, 50, '_cart_hash', 'b463ca2c21fac49c9049ee0945756f54'),
(217, 50, '_billing_state', 'MN'),
(218, 50, '_billing_country', 'US'),
(219, 50, '_billing_email', 'frametoby03@gmail.com'),
(220, 50, '_order_currency', 'USD'),
(221, 50, '_cart_discount', '14.99'),
(222, 50, '_cart_discount_tax', '0'),
(223, 50, '_order_shipping', '0.00'),
(224, 50, '_order_shipping_tax', '0'),
(225, 50, '_order_tax', '0'),
(226, 50, '_order_total', '0.00'),
(227, 50, '_order_version', '3.9.2'),
(228, 50, '_prices_include_tax', 'no'),
(229, 50, '_billing_address_index', '      MN  US frametoby03@gmail.com '),
(230, 50, '_shipping_address_index', '        '),
(231, 50, 'is_vat_exempt', 'no'),
(232, 50, '_date_completed', '1582917529'),
(233, 50, '_date_paid', '1582917529'),
(234, 50, '_paid_date', '2020-02-28 19:18:49'),
(235, 50, '_completed_date', '2020-02-28 19:18:49'),
(236, 50, '_download_permissions_granted', 'yes'),
(237, 50, '_recorded_sales', 'yes'),
(238, 50, '_recorded_coupon_usage_counts', 'yes'),
(240, 50, '_order_stock_reduced', 'yes'),
(242, 52, '_order_key', 'wc_order_SiudMLwJwxguZ'),
(243, 52, '_customer_user', '0'),
(244, 52, '_customer_ip_address', '::1'),
(245, 52, '_customer_user_agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(246, 52, '_created_via', 'checkout'),
(247, 52, '_cart_hash', 'a614570879f318b4c1f300e3a5c4d5e3'),
(248, 52, '_billing_state', 'MN'),
(249, 52, '_billing_country', 'US'),
(250, 52, '_billing_email', 'frametoby03@gmail.com'),
(251, 52, '_order_currency', 'USD'),
(252, 52, '_cart_discount', '1806313527.64'),
(253, 52, '_cart_discount_tax', '0'),
(254, 52, '_order_shipping', '0.00'),
(255, 52, '_order_shipping_tax', '0'),
(256, 52, '_order_tax', '0'),
(257, 52, '_order_total', '0.00'),
(258, 52, '_order_version', '3.9.2'),
(259, 52, '_prices_include_tax', 'no'),
(260, 52, '_billing_address_index', '      MN  US frametoby03@gmail.com '),
(261, 52, '_shipping_address_index', '        '),
(262, 52, 'is_vat_exempt', 'no'),
(263, 52, '_date_completed', '1582919421'),
(264, 52, '_date_paid', '1582919421'),
(265, 52, '_paid_date', '2020-02-28 19:50:21'),
(266, 52, '_completed_date', '2020-02-28 19:50:21'),
(267, 52, '_download_permissions_granted', 'yes'),
(268, 52, '_recorded_sales', 'yes'),
(269, 52, '_recorded_coupon_usage_counts', 'yes'),
(271, 52, '_order_stock_reduced', 'yes'),
(275, 54, '_edit_last', '1'),
(276, 54, '_edit_lock', '1583159983:1'),
(277, 54, 'discount_type', 'percent'),
(278, 54, 'coupon_amount', '100'),
(279, 54, 'individual_use', 'no'),
(280, 54, 'usage_limit', '0'),
(281, 54, 'usage_limit_per_user', '0'),
(282, 54, 'limit_usage_to_x_items', '0'),
(283, 54, 'usage_count', '9'),
(284, 54, 'date_expires', NULL),
(285, 54, 'free_shipping', 'no'),
(286, 54, 'exclude_sale_items', 'no'),
(289, 56, '_order_key', 'wc_order_iYAkJyS5wGj05'),
(290, 56, '_customer_user', '0'),
(291, 56, '_customer_ip_address', '::1'),
(292, 56, '_customer_user_agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36'),
(293, 56, '_created_via', 'checkout'),
(294, 56, '_cart_hash', 'b463ca2c21fac49c9049ee0945756f54'),
(295, 56, '_billing_state', 'MN'),
(296, 56, '_billing_country', 'US'),
(297, 56, '_billing_email', 'frametoby03@gmail.com'),
(298, 56, '_order_currency', 'USD'),
(299, 56, '_cart_discount', '14.99'),
(300, 56, '_cart_discount_tax', '0'),
(301, 56, '_order_shipping', '0.00'),
(302, 56, '_order_shipping_tax', '0'),
(303, 56, '_order_tax', '0'),
(304, 56, '_order_total', '0.00'),
(305, 56, '_order_version', '3.9.2'),
(306, 56, '_prices_include_tax', 'no'),
(307, 56, '_billing_address_index', '      MN  US frametoby03@gmail.com '),
(308, 56, '_shipping_address_index', '        '),
(309, 56, 'is_vat_exempt', 'no'),
(310, 56, '_date_completed', '1583160498'),
(311, 56, '_date_paid', '1583160498'),
(312, 56, '_paid_date', '2020-03-02 14:48:18'),
(313, 56, '_completed_date', '2020-03-02 14:48:18'),
(314, 56, '_download_permissions_granted', 'yes'),
(315, 56, '_recorded_sales', 'yes'),
(316, 56, '_recorded_coupon_usage_counts', 'yes'),
(317, 54, '_used_by', 'frametoby03@gmail.com'),
(318, 56, '_order_stock_reduced', 'yes'),
(327, 62, '_menu_item_type', 'post_type'),
(328, 62, '_menu_item_menu_item_parent', '0'),
(329, 62, '_menu_item_object_id', '61'),
(330, 62, '_menu_item_object', 'page'),
(331, 62, '_menu_item_target', ''),
(332, 62, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(333, 62, '_menu_item_xfn', ''),
(334, 62, '_menu_item_url', ''),
(335, 59, '_edit_lock', '1583170230:1'),
(340, 1, '_wp_old_slug', 'hello-world'),
(344, 68, '_order_key', 'wc_order_QrZiXgMwEefpS'),
(345, 68, '_customer_user', '0'),
(346, 68, '_customer_ip_address', '::1'),
(347, 68, '_customer_user_agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36'),
(348, 68, '_created_via', 'checkout'),
(349, 68, '_cart_hash', 'b463ca2c21fac49c9049ee0945756f54'),
(350, 68, '_billing_state', 'MN'),
(351, 68, '_billing_country', 'US'),
(352, 68, '_billing_email', 'frametoby03@gmail.com'),
(353, 68, '_order_currency', 'USD'),
(354, 68, '_cart_discount', '14.99'),
(355, 68, '_cart_discount_tax', '0'),
(356, 68, '_order_shipping', '0.00'),
(357, 68, '_order_shipping_tax', '0'),
(358, 68, '_order_tax', '0'),
(359, 68, '_order_total', '0.00'),
(360, 68, '_order_version', '3.9.2'),
(361, 68, '_prices_include_tax', 'no'),
(362, 68, '_billing_address_index', '      MN  US frametoby03@gmail.com '),
(363, 68, '_shipping_address_index', '        '),
(364, 68, 'is_vat_exempt', 'no'),
(365, 68, '_date_completed', '1583171079'),
(366, 68, '_date_paid', '1583171079'),
(367, 68, '_paid_date', '2020-03-02 17:44:39'),
(368, 68, '_completed_date', '2020-03-02 17:44:39'),
(369, 68, '_download_permissions_granted', 'yes'),
(370, 68, '_recorded_sales', 'yes'),
(371, 68, '_recorded_coupon_usage_counts', 'yes'),
(372, 54, '_used_by', '2'),
(373, 68, '_order_stock_reduced', 'yes'),
(374, 70, '_wp_attached_file', '2020/03/ezgif.com-webp-to-png-1.png'),
(375, 70, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:500;s:6:\"height\";i:500;s:4:\"file\";s:35:\"2020/03/ezgif.com-webp-to-png-1.png\";s:5:\"sizes\";a:6:{s:6:\"medium\";a:4:{s:4:\"file\";s:35:\"ezgif.com-webp-to-png-1-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:35:\"ezgif.com-webp-to-png-1-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:35:\"ezgif.com-webp-to-png-1-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:35:\"ezgif.com-webp-to-png-1-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:35:\"ezgif.com-webp-to-png-1-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:35:\"ezgif.com-webp-to-png-1-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(376, 71, '_wp_attached_file', '2020/03/cropped-ezgif.com-webp-to-png-1.png'),
(377, 71, '_wp_attachment_context', 'site-icon'),
(378, 71, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:512;s:6:\"height\";i:512;s:4:\"file\";s:43:\"2020/03/cropped-ezgif.com-webp-to-png-1.png\";s:5:\"sizes\";a:10:{s:6:\"medium\";a:4:{s:4:\"file\";s:43:\"cropped-ezgif.com-webp-to-png-1-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:43:\"cropped-ezgif.com-webp-to-png-1-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:43:\"cropped-ezgif.com-webp-to-png-1-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:43:\"cropped-ezgif.com-webp-to-png-1-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:43:\"cropped-ezgif.com-webp-to-png-1-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:43:\"cropped-ezgif.com-webp-to-png-1-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:13:\"site_icon-270\";a:4:{s:4:\"file\";s:43:\"cropped-ezgif.com-webp-to-png-1-270x270.png\";s:5:\"width\";i:270;s:6:\"height\";i:270;s:9:\"mime-type\";s:9:\"image/png\";}s:13:\"site_icon-192\";a:4:{s:4:\"file\";s:43:\"cropped-ezgif.com-webp-to-png-1-192x192.png\";s:5:\"width\";i:192;s:6:\"height\";i:192;s:9:\"mime-type\";s:9:\"image/png\";}s:13:\"site_icon-180\";a:4:{s:4:\"file\";s:43:\"cropped-ezgif.com-webp-to-png-1-180x180.png\";s:5:\"width\";i:180;s:6:\"height\";i:180;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"site_icon-32\";a:4:{s:4:\"file\";s:41:\"cropped-ezgif.com-webp-to-png-1-32x32.png\";s:5:\"width\";i:32;s:6:\"height\";i:32;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(382, 74, '_wp_attached_file', '2020/03/papa_FB.png'),
(383, 74, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1200;s:6:\"height\";i:630;s:4:\"file\";s:19:\"2020/03/papa_FB.png\";s:5:\"sizes\";a:10:{s:6:\"medium\";a:4:{s:4:\"file\";s:19:\"papa_FB-300x158.png\";s:5:\"width\";i:300;s:6:\"height\";i:158;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:20:\"papa_FB-1024x538.png\";s:5:\"width\";i:1024;s:6:\"height\";i:538;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:19:\"papa_FB-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:19:\"papa_FB-768x403.png\";s:5:\"width\";i:768;s:6:\"height\";i:403;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:19:\"papa_FB-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:18:\"woocommerce_single\";a:4:{s:4:\"file\";s:19:\"papa_FB-600x315.png\";s:5:\"width\";i:600;s:6:\"height\";i:315;s:9:\"mime-type\";s:9:\"image/png\";}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:19:\"papa_FB-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:19:\"papa_FB-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:11:\"shop_single\";a:4:{s:4:\"file\";s:19:\"papa_FB-600x315.png\";s:5:\"width\";i:600;s:6:\"height\";i:315;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:19:\"papa_FB-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(384, 75, '_wp_attached_file', '2020/03/cropped-papa_FB.png'),
(385, 75, '_wp_attachment_context', 'custom-header'),
(386, 75, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:1000;s:6:\"height\";i:250;s:4:\"file\";s:27:\"2020/03/cropped-papa_FB.png\";s:5:\"sizes\";a:9:{s:6:\"medium\";a:4:{s:4:\"file\";s:26:\"cropped-papa_FB-300x75.png\";s:5:\"width\";i:300;s:6:\"height\";i:75;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:27:\"cropped-papa_FB-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:27:\"cropped-papa_FB-768x192.png\";s:5:\"width\";i:768;s:6:\"height\";i:192;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:27:\"cropped-papa_FB-300x250.png\";s:5:\"width\";i:300;s:6:\"height\";i:250;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:18:\"woocommerce_single\";a:4:{s:4:\"file\";s:27:\"cropped-papa_FB-600x150.png\";s:5:\"width\";i:600;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:27:\"cropped-papa_FB-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:27:\"cropped-papa_FB-300x250.png\";s:5:\"width\";i:300;s:6:\"height\";i:250;s:9:\"mime-type\";s:9:\"image/png\";}s:11:\"shop_single\";a:4:{s:4:\"file\";s:27:\"cropped-papa_FB-600x150.png\";s:5:\"width\";i:600;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:27:\"cropped-papa_FB-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}s:17:\"attachment_parent\";i:74;}'),
(387, 75, '_wp_attachment_custom_header_last_used_bcf-shop', '1583173330'),
(388, 75, '_wp_attachment_is_custom_header', 'bcf-shop'),
(391, 76, '_wp_attached_file', '2020/03/cropped-ezgif.com-webp-to-png-1-1.png'),
(392, 76, '_wp_attachment_context', 'custom-logo'),
(393, 76, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:500;s:6:\"height\";i:500;s:4:\"file\";s:45:\"2020/03/cropped-ezgif.com-webp-to-png-1-1.png\";s:5:\"sizes\";a:6:{s:6:\"medium\";a:4:{s:4:\"file\";s:45:\"cropped-ezgif.com-webp-to-png-1-1-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:45:\"cropped-ezgif.com-webp-to-png-1-1-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:45:\"cropped-ezgif.com-webp-to-png-1-1-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:45:\"cropped-ezgif.com-webp-to-png-1-1-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:45:\"cropped-ezgif.com-webp-to-png-1-1-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:45:\"cropped-ezgif.com-webp-to-png-1-1-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(394, 74, '_wp_attachment_is_custom_background', 'bcf-shop'),
(419, 90, '_edit_lock', '1583175594:1'),
(420, 90, '_edit_last', '1'),
(421, 90, 'total_sales', '7'),
(422, 90, '_tax_status', 'none'),
(423, 90, '_tax_class', 'zero-rate'),
(424, 90, '_manage_stock', 'no'),
(425, 90, '_backorders', 'no'),
(426, 90, '_sold_individually', 'no'),
(427, 90, '_virtual', 'no'),
(428, 90, '_downloadable', 'no'),
(429, 90, '_download_limit', '-1'),
(430, 90, '_download_expiry', '-1'),
(431, 90, '_stock', NULL),
(432, 90, '_stock_status', 'instock'),
(433, 90, '_wc_average_rating', '0'),
(434, 90, '_wc_review_count', '0'),
(435, 90, '_product_attributes', 'a:1:{s:4:\"size\";a:6:{s:4:\"name\";s:4:\"Size\";s:5:\"value\";s:59:\"Small 7.99 | Medium 10.99 | Large 14.99 | Extra Large 17.99\";s:8:\"position\";s:1:\"0\";s:10:\"is_visible\";s:1:\"0\";s:12:\"is_variation\";s:1:\"1\";s:11:\"is_taxonomy\";s:1:\"0\";}}'),
(436, 90, '_product_version', '3.9.2'),
(437, 91, '_variation_description', ''),
(438, 91, 'total_sales', '0'),
(439, 91, '_tax_status', 'taxable'),
(440, 91, '_tax_class', 'parent'),
(441, 91, '_manage_stock', 'no'),
(442, 91, '_backorders', 'no'),
(443, 91, '_sold_individually', 'no'),
(444, 91, '_virtual', 'yes'),
(445, 91, '_downloadable', 'no'),
(446, 91, '_download_limit', '-1'),
(447, 91, '_download_expiry', '30'),
(448, 91, '_stock', NULL),
(449, 91, '_stock_status', 'instock'),
(450, 91, '_wc_average_rating', '0'),
(451, 91, '_wc_review_count', '0'),
(452, 91, 'attribute_size', 'Small 7.99'),
(453, 91, '_product_version', '3.9.2'),
(454, 92, '_variation_description', ''),
(455, 92, 'total_sales', '0'),
(456, 92, '_tax_status', 'taxable'),
(457, 92, '_tax_class', 'parent'),
(458, 92, '_manage_stock', 'no'),
(459, 92, '_backorders', 'no'),
(460, 92, '_sold_individually', 'no'),
(461, 92, '_virtual', 'yes'),
(462, 92, '_downloadable', 'no'),
(463, 92, '_download_limit', '-1'),
(464, 92, '_download_expiry', '30'),
(465, 92, '_stock', NULL),
(466, 92, '_stock_status', 'instock'),
(467, 92, '_wc_average_rating', '0'),
(468, 92, '_wc_review_count', '0'),
(469, 92, 'attribute_size', 'Medium 10.99'),
(470, 92, '_product_version', '3.9.2'),
(471, 93, '_variation_description', ''),
(472, 93, 'total_sales', '0'),
(473, 93, '_tax_status', 'taxable'),
(474, 93, '_tax_class', 'parent'),
(475, 93, '_manage_stock', 'no'),
(476, 93, '_backorders', 'no'),
(477, 93, '_sold_individually', 'no'),
(478, 93, '_virtual', 'yes'),
(479, 93, '_downloadable', 'no'),
(480, 93, '_download_limit', '-1'),
(481, 93, '_download_expiry', '30'),
(482, 93, '_stock', NULL),
(483, 93, '_stock_status', 'instock'),
(484, 93, '_wc_average_rating', '0'),
(485, 93, '_wc_review_count', '0'),
(486, 93, 'attribute_size', 'Large 14.99'),
(487, 93, '_product_version', '3.9.2'),
(488, 94, '_variation_description', ''),
(489, 94, 'total_sales', '0'),
(490, 94, '_tax_status', 'taxable'),
(491, 94, '_tax_class', 'parent'),
(492, 94, '_manage_stock', 'no'),
(493, 94, '_backorders', 'no'),
(494, 94, '_sold_individually', 'no'),
(495, 94, '_virtual', 'yes'),
(496, 94, '_downloadable', 'no'),
(497, 94, '_download_limit', '-1'),
(498, 94, '_download_expiry', '30'),
(499, 94, '_stock', NULL),
(500, 94, '_stock_status', 'instock'),
(501, 94, '_wc_average_rating', '0'),
(502, 94, '_wc_review_count', '0'),
(503, 94, 'attribute_size', 'Extra Large 17.99'),
(504, 94, '_product_version', '3.9.2'),
(505, 91, '_regular_price', '7.99'),
(506, 91, '_downloadable_files', 'a:1:{s:36:\"0ac4905c-f90c-4212-a20f-4c30a1c0feb5\";a:3:{s:2:\"id\";s:36:\"0ac4905c-f90c-4212-a20f-4c30a1c0feb5\";s:4:\"name\";s:18:\"Small Cheese Pizza\";s:4:\"file\";s:72:\"http://localhost:8080/wordpress/wp-content/uploads/2020/02/papajohn.jpeg\";}}'),
(507, 91, '_price', '7.99'),
(508, 92, '_regular_price', '10.99'),
(509, 92, '_downloadable_files', 'a:1:{s:36:\"28260569-be9a-468f-ab65-38f6958a794f\";a:3:{s:2:\"id\";s:36:\"28260569-be9a-468f-ab65-38f6958a794f\";s:4:\"name\";s:19:\"Medium Cheese Pizza\";s:4:\"file\";s:69:\"http://localhost:8080/wordpress/wp-content/uploads/2020/02/cheese.png\";}}'),
(510, 92, '_price', '10.99'),
(511, 93, '_regular_price', '14.99'),
(512, 93, '_downloadable_files', 'a:1:{s:36:\"df6bfa84-229e-41fb-ba1b-13e223bd6b48\";a:3:{s:2:\"id\";s:36:\"df6bfa84-229e-41fb-ba1b-13e223bd6b48\";s:4:\"name\";s:18:\"Large Cheese Pizza\";s:4:\"file\";s:69:\"http://localhost:8080/wordpress/wp-content/uploads/2020/02/cheese.png\";}}'),
(513, 93, '_price', '14.99'),
(514, 94, '_regular_price', '17.99'),
(515, 94, '_downloadable_files', 'a:1:{s:36:\"963897c9-9b86-4dcd-b7f2-1929f89bd7d5\";a:3:{s:2:\"id\";s:36:\"963897c9-9b86-4dcd-b7f2-1929f89bd7d5\";s:4:\"name\";s:24:\"Extra Large Cheese Pizza\";s:4:\"file\";s:69:\"http://localhost:8080/wordpress/wp-content/uploads/2020/02/cheese.png\";}}'),
(516, 94, '_price', '17.99'),
(521, 90, '_thumbnail_id', '31'),
(531, 90, '_sku', 'Cheese Pizza'),
(542, 96, '_order_key', 'wc_order_YpFfOTjy2Ckao'),
(543, 96, '_customer_user', '1'),
(544, 96, '_customer_ip_address', '::1'),
(545, 96, '_customer_user_agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36'),
(546, 96, '_created_via', 'checkout'),
(547, 96, '_cart_hash', '0d9bdab63ac56ce53e0b443517c67b50'),
(548, 96, '_billing_state', 'MN'),
(549, 96, '_billing_country', 'US'),
(550, 96, '_billing_email', '231603@shakopeeschools.org'),
(551, 96, '_order_currency', 'USD'),
(552, 96, '_cart_discount', '47.97'),
(553, 96, '_cart_discount_tax', '0'),
(554, 96, '_order_shipping', '0.00'),
(555, 96, '_order_shipping_tax', '0'),
(556, 96, '_order_tax', '0'),
(557, 96, '_order_total', '0.00'),
(558, 96, '_order_version', '3.9.2'),
(559, 96, '_prices_include_tax', 'no'),
(560, 96, '_billing_address_index', '      MN  US 231603@shakopeeschools.org '),
(561, 96, '_shipping_address_index', '        '),
(562, 96, 'is_vat_exempt', 'no'),
(563, 96, '_date_completed', '1583174753'),
(564, 96, '_date_paid', '1583174753'),
(565, 96, '_paid_date', '2020-03-02 18:45:53'),
(566, 96, '_completed_date', '2020-03-02 18:45:53'),
(567, 96, '_download_permissions_granted', 'yes'),
(568, 96, '_recorded_sales', 'yes'),
(569, 96, '_recorded_coupon_usage_counts', 'yes'),
(570, 54, '_used_by', '1'),
(571, 96, '_order_stock_reduced', 'yes'),
(574, 99, '_order_key', 'wc_order_Lt0BPW91sCJGq'),
(575, 99, '_customer_user', '0'),
(576, 99, '_customer_ip_address', '::1'),
(577, 99, '_customer_user_agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36'),
(578, 99, '_created_via', 'checkout'),
(579, 99, '_cart_hash', 'a964d511810f1c877a453ae719e898e9'),
(580, 99, '_billing_state', 'MN'),
(581, 99, '_billing_country', 'US'),
(582, 99, '_billing_email', 'framecollin03@gmail.com'),
(583, 99, '_order_currency', 'USD'),
(584, 99, '_cart_discount', '17.99'),
(585, 99, '_cart_discount_tax', '0'),
(586, 99, '_order_shipping', '0.00'),
(587, 99, '_order_shipping_tax', '0'),
(588, 99, '_order_tax', '0'),
(589, 99, '_order_total', '0.00'),
(590, 99, '_order_version', '3.9.2'),
(591, 99, '_prices_include_tax', 'no'),
(592, 99, '_billing_address_index', '      MN  US framecollin03@gmail.com '),
(593, 99, '_shipping_address_index', '        '),
(594, 99, 'is_vat_exempt', 'no'),
(595, 99, '_date_completed', '1583174878'),
(596, 99, '_date_paid', '1583174878'),
(597, 99, '_paid_date', '2020-03-02 18:47:58'),
(598, 99, '_completed_date', '2020-03-02 18:47:58'),
(599, 99, '_download_permissions_granted', 'yes'),
(600, 99, '_recorded_sales', 'yes'),
(601, 99, '_recorded_coupon_usage_counts', 'yes'),
(602, 54, '_used_by', '3'),
(603, 99, '_order_stock_reduced', 'yes'),
(604, 90, '_price', '7.99'),
(605, 90, '_price', '10.99'),
(606, 90, '_price', '14.99'),
(607, 90, '_price', '17.99'),
(610, 102, '_order_key', 'wc_order_J5ZndVWs83toZ'),
(611, 102, '_customer_user', '1'),
(612, 102, '_customer_ip_address', '::1'),
(613, 102, '_customer_user_agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36'),
(614, 102, '_created_via', 'checkout'),
(615, 102, '_cart_hash', '54597e81aa17e683da0138cf6dcb9029'),
(616, 102, '_billing_state', 'MN'),
(617, 102, '_billing_country', 'US'),
(618, 102, '_billing_email', '231603@shakopeeschools.org'),
(619, 102, '_order_currency', 'USD'),
(620, 102, '_cart_discount', '10.99'),
(621, 102, '_cart_discount_tax', '0'),
(622, 102, '_order_shipping', '0'),
(623, 102, '_order_shipping_tax', '0'),
(624, 102, '_order_tax', '0'),
(625, 102, '_order_total', '0.00'),
(626, 102, '_order_version', '3.9.2'),
(627, 102, '_prices_include_tax', 'no'),
(628, 102, '_billing_address_index', '      MN  US 231603@shakopeeschools.org '),
(629, 102, '_shipping_address_index', '        '),
(630, 102, 'is_vat_exempt', 'no'),
(631, 102, '_date_paid', '1583175066'),
(632, 102, '_paid_date', '2020-03-02 18:51:06'),
(633, 102, '_download_permissions_granted', 'yes'),
(634, 102, '_recorded_sales', 'yes'),
(635, 102, '_recorded_coupon_usage_counts', 'yes'),
(636, 54, '_used_by', '1'),
(637, 102, '_order_stock_reduced', 'yes'),
(638, 104, '_edit_lock', '1583175538:1'),
(639, 104, '_edit_last', '1'),
(640, 104, 'total_sales', '0'),
(641, 104, '_tax_status', 'none'),
(642, 104, '_tax_class', 'zero-rate'),
(643, 104, '_manage_stock', 'no'),
(644, 104, '_backorders', 'no'),
(645, 104, '_sold_individually', 'no'),
(646, 104, '_virtual', 'no'),
(647, 104, '_downloadable', 'no'),
(648, 104, '_download_limit', '-1'),
(649, 104, '_download_expiry', '-1'),
(650, 104, '_stock', NULL),
(651, 104, '_stock_status', 'instock'),
(652, 104, '_wc_average_rating', '0'),
(653, 104, '_wc_review_count', '0'),
(654, 104, '_product_attributes', 'a:1:{s:4:\"size\";a:6:{s:4:\"name\";s:4:\"Size\";s:5:\"value\";s:63:\"Small $7.99 | Medium $10.99 | Large $14.99 | Extra Large $17.99\";s:8:\"position\";s:1:\"0\";s:10:\"is_visible\";s:1:\"0\";s:12:\"is_variation\";s:1:\"1\";s:11:\"is_taxonomy\";s:1:\"0\";}}'),
(655, 104, '_product_version', '3.9.2'),
(656, 105, '_variation_description', ''),
(657, 105, 'total_sales', '0'),
(658, 105, '_tax_status', 'taxable'),
(659, 105, '_tax_class', 'parent'),
(660, 105, '_manage_stock', 'no'),
(661, 105, '_backorders', 'no'),
(662, 105, '_sold_individually', 'no'),
(663, 105, '_virtual', 'yes'),
(664, 105, '_downloadable', 'no'),
(665, 105, '_download_limit', '-1'),
(666, 105, '_download_expiry', '-1'),
(667, 105, '_stock', NULL),
(668, 105, '_stock_status', 'instock'),
(669, 105, '_wc_average_rating', '0'),
(670, 105, '_wc_review_count', '0'),
(671, 105, 'attribute_size', 'Small $7.99'),
(672, 105, '_product_version', '3.9.2'),
(673, 106, '_variation_description', ''),
(674, 106, 'total_sales', '0'),
(675, 106, '_tax_status', 'taxable'),
(676, 106, '_tax_class', 'parent'),
(677, 106, '_manage_stock', 'no'),
(678, 106, '_backorders', 'no'),
(679, 106, '_sold_individually', 'no'),
(680, 106, '_virtual', 'yes'),
(681, 106, '_downloadable', 'no'),
(682, 106, '_download_limit', '-1'),
(683, 106, '_download_expiry', '-1'),
(684, 106, '_stock', NULL),
(685, 106, '_stock_status', 'instock'),
(686, 106, '_wc_average_rating', '0'),
(687, 106, '_wc_review_count', '0'),
(688, 106, 'attribute_size', 'Medium $10.99'),
(689, 106, '_product_version', '3.9.2'),
(690, 107, '_variation_description', ''),
(691, 107, 'total_sales', '0'),
(692, 107, '_tax_status', 'taxable'),
(693, 107, '_tax_class', 'parent'),
(694, 107, '_manage_stock', 'no'),
(695, 107, '_backorders', 'no'),
(696, 107, '_sold_individually', 'no'),
(697, 107, '_virtual', 'yes'),
(698, 107, '_downloadable', 'no'),
(699, 107, '_download_limit', '-1'),
(700, 107, '_download_expiry', '-1'),
(701, 107, '_stock', NULL),
(702, 107, '_stock_status', 'instock'),
(703, 107, '_wc_average_rating', '0'),
(704, 107, '_wc_review_count', '0'),
(705, 107, 'attribute_size', 'Large $14.99'),
(706, 107, '_product_version', '3.9.2'),
(707, 108, '_variation_description', ''),
(708, 108, 'total_sales', '0'),
(709, 108, '_tax_status', 'taxable'),
(710, 108, '_tax_class', 'parent'),
(711, 108, '_manage_stock', 'no'),
(712, 108, '_backorders', 'no'),
(713, 108, '_sold_individually', 'no'),
(714, 108, '_virtual', 'yes'),
(715, 108, '_downloadable', 'no'),
(716, 108, '_download_limit', '-1'),
(717, 108, '_download_expiry', '-1'),
(718, 108, '_stock', NULL),
(719, 108, '_stock_status', 'instock'),
(720, 108, '_wc_average_rating', '0'),
(721, 108, '_wc_review_count', '0'),
(722, 108, 'attribute_size', 'Extra Large $17.99'),
(723, 108, '_product_version', '3.9.2'),
(724, 105, '_regular_price', '7.99'),
(725, 105, '_price', '7.99'),
(726, 106, '_regular_price', '10.99'),
(727, 106, '_price', '10.99'),
(728, 107, '_regular_price', '14.99'),
(729, 107, '_price', '14.99'),
(730, 108, '_regular_price', '17.99'),
(731, 108, '_price', '17.99'),
(732, 104, '_price', '7.99'),
(733, 104, '_price', '10.99'),
(734, 104, '_price', '14.99'),
(735, 104, '_price', '17.99'),
(736, 104, '_sku', 'Sausage Pizza'),
(737, 109, '_wp_attached_file', '2020/03/sausage.png'),
(738, 109, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1125;s:6:\"height\";i:816;s:4:\"file\";s:19:\"2020/03/sausage.png\";s:5:\"sizes\";a:10:{s:6:\"medium\";a:4:{s:4:\"file\";s:19:\"sausage-300x218.png\";s:5:\"width\";i:300;s:6:\"height\";i:218;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:20:\"sausage-1024x743.png\";s:5:\"width\";i:1024;s:6:\"height\";i:743;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:19:\"sausage-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:19:\"sausage-768x557.png\";s:5:\"width\";i:768;s:6:\"height\";i:557;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:19:\"sausage-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:18:\"woocommerce_single\";a:4:{s:4:\"file\";s:19:\"sausage-600x435.png\";s:5:\"width\";i:600;s:6:\"height\";i:435;s:9:\"mime-type\";s:9:\"image/png\";}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:19:\"sausage-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:19:\"sausage-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:11:\"shop_single\";a:4:{s:4:\"file\";s:19:\"sausage-600x435.png\";s:5:\"width\";i:600;s:6:\"height\";i:435;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:19:\"sausage-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(739, 104, '_thumbnail_id', '109'),
(740, 110, '_edit_lock', '1583177078:1'),
(741, 110, 'total_sales', '1'),
(742, 110, '_tax_status', 'taxable'),
(743, 110, '_tax_class', ''),
(744, 110, '_manage_stock', 'no'),
(745, 110, '_backorders', 'no'),
(746, 110, '_sold_individually', 'no'),
(747, 110, '_virtual', 'no'),
(748, 110, '_downloadable', 'no'),
(749, 110, '_download_limit', '-1'),
(750, 110, '_download_expiry', '-1'),
(751, 110, '_stock', NULL),
(752, 110, '_stock_status', 'instock'),
(753, 110, '_wc_average_rating', '0'),
(754, 110, '_wc_review_count', '0'),
(755, 110, '_product_attributes', 'a:1:{s:4:\"size\";a:6:{s:4:\"name\";s:4:\"Size\";s:5:\"value\";s:59:\"Small 7.99 | Medium 10.99 | Large 14.99 | Extra Large 17.99\";s:8:\"position\";s:1:\"0\";s:10:\"is_visible\";s:1:\"0\";s:12:\"is_variation\";s:1:\"1\";s:11:\"is_taxonomy\";s:1:\"0\";}}'),
(756, 110, '_product_version', '3.9.2'),
(757, 111, '_variation_description', ''),
(758, 111, 'total_sales', '0'),
(759, 111, '_tax_status', 'taxable'),
(760, 111, '_tax_class', 'parent'),
(761, 111, '_manage_stock', 'no'),
(762, 111, '_backorders', 'no'),
(763, 111, '_sold_individually', 'no'),
(764, 111, '_virtual', 'yes'),
(765, 111, '_downloadable', 'no'),
(766, 111, '_download_limit', '-1'),
(767, 111, '_download_expiry', '-1'),
(768, 111, '_stock', NULL),
(769, 111, '_stock_status', 'instock'),
(770, 111, '_wc_average_rating', '0'),
(771, 111, '_wc_review_count', '0'),
(772, 111, 'attribute_size', 'Small 7.99'),
(773, 111, '_product_version', '3.9.2'),
(774, 112, '_variation_description', ''),
(775, 112, 'total_sales', '0'),
(776, 112, '_tax_status', 'taxable'),
(777, 112, '_tax_class', 'parent'),
(778, 112, '_manage_stock', 'no'),
(779, 112, '_backorders', 'no'),
(780, 112, '_sold_individually', 'no'),
(781, 112, '_virtual', 'yes'),
(782, 112, '_downloadable', 'no'),
(783, 112, '_download_limit', '-1'),
(784, 112, '_download_expiry', '-1');
INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(785, 112, '_stock', NULL),
(786, 112, '_stock_status', 'instock'),
(787, 112, '_wc_average_rating', '0'),
(788, 112, '_wc_review_count', '0'),
(789, 112, 'attribute_size', 'Medium 10.99'),
(790, 112, '_product_version', '3.9.2'),
(791, 113, '_variation_description', ''),
(792, 113, 'total_sales', '0'),
(793, 113, '_tax_status', 'taxable'),
(794, 113, '_tax_class', 'parent'),
(795, 113, '_manage_stock', 'no'),
(796, 113, '_backorders', 'no'),
(797, 113, '_sold_individually', 'no'),
(798, 113, '_virtual', 'yes'),
(799, 113, '_downloadable', 'no'),
(800, 113, '_download_limit', '-1'),
(801, 113, '_download_expiry', '-1'),
(802, 113, '_stock', NULL),
(803, 113, '_stock_status', 'instock'),
(804, 113, '_wc_average_rating', '0'),
(805, 113, '_wc_review_count', '0'),
(806, 113, 'attribute_size', 'Large 14.99'),
(807, 113, '_product_version', '3.9.2'),
(808, 114, '_variation_description', ''),
(809, 114, 'total_sales', '0'),
(810, 114, '_tax_status', 'taxable'),
(811, 114, '_tax_class', 'parent'),
(812, 114, '_manage_stock', 'no'),
(813, 114, '_backorders', 'no'),
(814, 114, '_sold_individually', 'no'),
(815, 114, '_virtual', 'no'),
(816, 114, '_downloadable', 'no'),
(817, 114, '_download_limit', '-1'),
(818, 114, '_download_expiry', '-1'),
(819, 114, '_stock', NULL),
(820, 114, '_stock_status', 'instock'),
(821, 114, '_wc_average_rating', '0'),
(822, 114, '_wc_review_count', '0'),
(823, 114, 'attribute_size', 'Extra Large 17.99'),
(824, 114, '_product_version', '3.9.2'),
(825, 110, '_edit_last', '1'),
(826, 111, '_regular_price', '7.99'),
(827, 111, '_price', '7.99'),
(828, 112, '_regular_price', '10.99'),
(829, 112, '_price', '10.99'),
(830, 113, '_regular_price', '14.99'),
(831, 113, '_price', '14.99'),
(832, 114, '_regular_price', '17.99'),
(833, 114, '_price', '17.99'),
(834, 110, '_price', '7.99'),
(835, 110, '_price', '10.99'),
(836, 110, '_price', '14.99'),
(837, 110, '_price', '17.99'),
(838, 115, '_wp_attached_file', '2020/03/pepperoni.png'),
(839, 115, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1125;s:6:\"height\";i:816;s:4:\"file\";s:21:\"2020/03/pepperoni.png\";s:5:\"sizes\";a:10:{s:6:\"medium\";a:4:{s:4:\"file\";s:21:\"pepperoni-300x218.png\";s:5:\"width\";i:300;s:6:\"height\";i:218;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:22:\"pepperoni-1024x743.png\";s:5:\"width\";i:1024;s:6:\"height\";i:743;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:21:\"pepperoni-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:21:\"pepperoni-768x557.png\";s:5:\"width\";i:768;s:6:\"height\";i:557;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:21:\"pepperoni-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:18:\"woocommerce_single\";a:4:{s:4:\"file\";s:21:\"pepperoni-600x435.png\";s:5:\"width\";i:600;s:6:\"height\";i:435;s:9:\"mime-type\";s:9:\"image/png\";}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:21:\"pepperoni-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:21:\"pepperoni-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:11:\"shop_single\";a:4:{s:4:\"file\";s:21:\"pepperoni-600x435.png\";s:5:\"width\";i:600;s:6:\"height\";i:435;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:21:\"pepperoni-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(840, 110, '_thumbnail_id', '115'),
(843, 117, '_order_key', 'wc_order_RE1Jhe6tJQiph'),
(844, 117, '_customer_user', '1'),
(845, 117, '_customer_ip_address', '::1'),
(846, 117, '_customer_user_agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36'),
(847, 117, '_created_via', 'checkout'),
(848, 117, '_cart_hash', '7147cb68188195437b7bd35ab552a082'),
(849, 117, '_billing_state', 'MN'),
(850, 117, '_billing_country', 'US'),
(851, 117, '_billing_email', '231603@shakopeeschools.org'),
(852, 117, '_order_currency', 'USD'),
(853, 117, '_cart_discount', '14.99'),
(854, 117, '_cart_discount_tax', '0'),
(855, 117, '_order_shipping', '0.00'),
(856, 117, '_order_shipping_tax', '0'),
(857, 117, '_order_tax', '0'),
(858, 117, '_order_total', '0.00'),
(859, 117, '_order_version', '3.9.2'),
(860, 117, '_prices_include_tax', 'no'),
(861, 117, '_billing_address_index', '      MN  US 231603@shakopeeschools.org '),
(862, 117, '_shipping_address_index', '        '),
(863, 117, 'is_vat_exempt', 'no'),
(864, 117, '_date_paid', '1583175947'),
(865, 117, '_paid_date', '2020-03-02 19:05:47'),
(866, 117, '_download_permissions_granted', 'yes'),
(867, 117, '_recorded_sales', 'yes'),
(868, 117, '_recorded_coupon_usage_counts', 'yes'),
(869, 54, '_used_by', '1'),
(870, 117, '_order_stock_reduced', 'yes'),
(889, 120, 'total_sales', '400000000000002'),
(890, 120, '_tax_status', 'taxable'),
(891, 120, '_tax_class', ''),
(892, 120, '_manage_stock', 'no'),
(893, 120, '_backorders', 'no'),
(894, 120, '_sold_individually', 'no'),
(895, 120, '_virtual', 'no'),
(896, 120, '_downloadable', 'no'),
(897, 120, '_download_limit', '-1'),
(898, 120, '_download_expiry', '-1'),
(899, 120, '_stock', NULL),
(900, 120, '_stock_status', 'instock'),
(901, 120, '_wc_average_rating', '0'),
(902, 120, '_wc_review_count', '0'),
(903, 120, '_product_attributes', 'a:1:{s:4:\"size\";a:6:{s:4:\"name\";s:4:\"Size\";s:5:\"value\";s:207:\"Heart Shaped Pizza $20 | The Works $18.99 | The Meats $18.99 | Meatball Papperoni $18.99 | Tuscan Six Cheese $18.99 | Garden Fresh $18.99 | Fresh Spinach & Tomato Alfredo $18.99 | Extra Cheesy Alfredo $18.99\";s:8:\"position\";s:1:\"0\";s:10:\"is_visible\";s:1:\"0\";s:12:\"is_variation\";s:1:\"1\";s:11:\"is_taxonomy\";s:1:\"0\";}}'),
(904, 120, '_product_version', '3.9.2'),
(905, 120, '_edit_lock', '1583180605:1'),
(923, 122, '_variation_description', ''),
(924, 122, 'total_sales', '0'),
(925, 122, '_tax_status', 'taxable'),
(926, 122, '_tax_class', 'parent'),
(927, 122, '_manage_stock', 'no'),
(928, 122, '_backorders', 'no'),
(929, 122, '_sold_individually', 'no'),
(930, 122, '_virtual', 'yes'),
(931, 122, '_downloadable', 'no'),
(932, 122, '_download_limit', '-1'),
(933, 122, '_download_expiry', '-1'),
(934, 122, '_stock', NULL),
(935, 122, '_stock_status', 'instock'),
(936, 122, '_wc_average_rating', '0'),
(937, 122, '_wc_review_count', '0'),
(938, 122, 'attribute_size', 'The Works $18.99'),
(939, 122, '_product_version', '3.9.2'),
(940, 123, '_variation_description', ''),
(941, 123, 'total_sales', '0'),
(942, 123, '_tax_status', 'taxable'),
(943, 123, '_tax_class', 'parent'),
(944, 123, '_manage_stock', 'no'),
(945, 123, '_backorders', 'no'),
(946, 123, '_sold_individually', 'no'),
(947, 123, '_virtual', 'yes'),
(948, 123, '_downloadable', 'no'),
(949, 123, '_download_limit', '-1'),
(950, 123, '_download_expiry', '-1'),
(951, 123, '_stock', NULL),
(952, 123, '_stock_status', 'instock'),
(953, 123, '_wc_average_rating', '0'),
(954, 123, '_wc_review_count', '0'),
(955, 123, 'attribute_size', 'The Meats $18.99'),
(956, 123, '_product_version', '3.9.2'),
(957, 124, '_variation_description', ''),
(958, 124, 'total_sales', '0'),
(959, 124, '_tax_status', 'taxable'),
(960, 124, '_tax_class', 'parent'),
(961, 124, '_manage_stock', 'no'),
(962, 124, '_backorders', 'no'),
(963, 124, '_sold_individually', 'no'),
(964, 124, '_virtual', 'yes'),
(965, 124, '_downloadable', 'no'),
(966, 124, '_download_limit', '-1'),
(967, 124, '_download_expiry', '-1'),
(968, 124, '_stock', NULL),
(969, 124, '_stock_status', 'instock'),
(970, 124, '_wc_average_rating', '0'),
(971, 124, '_wc_review_count', '0'),
(972, 124, 'attribute_size', 'Meatball Papperoni $18.99'),
(973, 124, '_product_version', '3.9.2'),
(974, 125, '_variation_description', ''),
(975, 125, 'total_sales', '0'),
(976, 125, '_tax_status', 'taxable'),
(977, 125, '_tax_class', 'parent'),
(978, 125, '_manage_stock', 'no'),
(979, 125, '_backorders', 'no'),
(980, 125, '_sold_individually', 'no'),
(981, 125, '_virtual', 'yes'),
(982, 125, '_downloadable', 'no'),
(983, 125, '_download_limit', '-1'),
(984, 125, '_download_expiry', '-1'),
(985, 125, '_stock', NULL),
(986, 125, '_stock_status', 'instock'),
(987, 125, '_wc_average_rating', '0'),
(988, 125, '_wc_review_count', '0'),
(989, 125, 'attribute_size', 'Tuscan Six Cheese $18.99'),
(990, 125, '_product_version', '3.9.2'),
(991, 126, '_variation_description', ''),
(992, 126, 'total_sales', '0'),
(993, 126, '_tax_status', 'taxable'),
(994, 126, '_tax_class', 'parent'),
(995, 126, '_manage_stock', 'no'),
(996, 126, '_backorders', 'no'),
(997, 126, '_sold_individually', 'no'),
(998, 126, '_virtual', 'yes'),
(999, 126, '_downloadable', 'no'),
(1000, 126, '_download_limit', '-1'),
(1001, 126, '_download_expiry', '-1'),
(1002, 126, '_stock', NULL),
(1003, 126, '_stock_status', 'instock'),
(1004, 126, '_wc_average_rating', '0'),
(1005, 126, '_wc_review_count', '0'),
(1006, 126, 'attribute_size', 'Garden Fresh $18.99'),
(1007, 126, '_product_version', '3.9.2'),
(1008, 127, '_variation_description', ''),
(1009, 127, 'total_sales', '0'),
(1010, 127, '_tax_status', 'taxable'),
(1011, 127, '_tax_class', 'parent'),
(1012, 127, '_manage_stock', 'no'),
(1013, 127, '_backorders', 'no'),
(1014, 127, '_sold_individually', 'no'),
(1015, 127, '_virtual', 'yes'),
(1016, 127, '_downloadable', 'no'),
(1017, 127, '_download_limit', '-1'),
(1018, 127, '_download_expiry', '-1'),
(1019, 127, '_stock', NULL),
(1020, 127, '_stock_status', 'instock'),
(1021, 127, '_wc_average_rating', '0'),
(1022, 127, '_wc_review_count', '0'),
(1023, 127, 'attribute_size', 'Fresh Spinach & Tomato Alfredo $18.99'),
(1024, 127, '_product_version', '3.9.2'),
(1025, 128, '_variation_description', ''),
(1026, 128, 'total_sales', '0'),
(1027, 128, '_tax_status', 'taxable'),
(1028, 128, '_tax_class', 'parent'),
(1029, 128, '_manage_stock', 'no'),
(1030, 128, '_backorders', 'no'),
(1031, 128, '_sold_individually', 'no'),
(1032, 128, '_virtual', 'yes'),
(1033, 128, '_downloadable', 'no'),
(1034, 128, '_download_limit', '-1'),
(1035, 128, '_download_expiry', '-1'),
(1036, 128, '_stock', NULL),
(1037, 128, '_stock_status', 'instock'),
(1038, 128, '_wc_average_rating', '0'),
(1039, 128, '_wc_review_count', '0'),
(1040, 128, 'attribute_size', 'Extra Cheesy Alfredo $18.99'),
(1041, 128, '_product_version', '3.9.2'),
(1042, 120, '_edit_last', '1'),
(1043, 129, '_variation_description', ''),
(1044, 129, 'total_sales', '0'),
(1045, 129, '_tax_status', 'taxable'),
(1046, 129, '_tax_class', 'parent'),
(1047, 129, '_manage_stock', 'no'),
(1048, 129, '_backorders', 'no'),
(1049, 129, '_sold_individually', 'no'),
(1050, 129, '_virtual', 'yes'),
(1051, 129, '_downloadable', 'no'),
(1052, 129, '_download_limit', '-1'),
(1053, 129, '_download_expiry', '-1'),
(1054, 129, '_stock', NULL),
(1055, 129, '_stock_status', 'instock'),
(1056, 129, '_wc_average_rating', '0'),
(1057, 129, '_wc_review_count', '0'),
(1058, 129, 'attribute_size', 'Heart Shaped Pizza $20'),
(1059, 129, '_product_version', '3.9.2'),
(1060, 129, '_regular_price', '20'),
(1061, 129, '_price', '20'),
(1062, 122, '_regular_price', '18.99'),
(1063, 122, '_price', '18.99'),
(1064, 123, '_regular_price', '18.99'),
(1065, 123, '_price', '18.99'),
(1066, 124, '_regular_price', '18.99'),
(1067, 124, '_price', '18.99'),
(1068, 125, '_regular_price', '18.99'),
(1069, 125, '_price', '18.99'),
(1070, 126, '_regular_price', '18.99'),
(1071, 126, '_price', '18.99'),
(1072, 127, '_regular_price', '18.99'),
(1073, 127, '_price', '18.99'),
(1074, 128, '_regular_price', '18.99'),
(1075, 128, '_price', '18.99'),
(1078, 130, '_wp_attached_file', '2020/03/Screen-Shot-2020-03-02-at-2.05.37-PM.png'),
(1079, 130, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:606;s:6:\"height\";i:438;s:4:\"file\";s:48:\"2020/03/Screen-Shot-2020-03-02-at-2.05.37-PM.png\";s:5:\"sizes\";a:8:{s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.05.37-PM-300x217.png\";s:5:\"width\";i:300;s:6:\"height\";i:217;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.05.37-PM-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.05.37-PM-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:18:\"woocommerce_single\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.05.37-PM-600x434.png\";s:5:\"width\";i:600;s:6:\"height\";i:434;s:9:\"mime-type\";s:9:\"image/png\";}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.05.37-PM-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.05.37-PM-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:11:\"shop_single\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.05.37-PM-600x434.png\";s:5:\"width\";i:600;s:6:\"height\";i:434;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.05.37-PM-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(1080, 131, '_wp_attached_file', '2020/03/Screen-Shot-2020-03-02-at-2.06.07-PM.png'),
(1081, 131, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:598;s:6:\"height\";i:428;s:4:\"file\";s:48:\"2020/03/Screen-Shot-2020-03-02-at-2.06.07-PM.png\";s:5:\"sizes\";a:6:{s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.07-PM-300x215.png\";s:5:\"width\";i:300;s:6:\"height\";i:215;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.07-PM-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.07-PM-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.07-PM-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.07-PM-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.07-PM-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(1082, 132, '_wp_attached_file', '2020/03/Screen-Shot-2020-03-02-at-2.06.24-PM.png'),
(1083, 132, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:598;s:6:\"height\";i:428;s:4:\"file\";s:48:\"2020/03/Screen-Shot-2020-03-02-at-2.06.24-PM.png\";s:5:\"sizes\";a:6:{s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.24-PM-300x215.png\";s:5:\"width\";i:300;s:6:\"height\";i:215;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.24-PM-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.24-PM-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.24-PM-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.24-PM-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.24-PM-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(1084, 133, '_wp_attached_file', '2020/03/Screen-Shot-2020-03-02-at-2.06.48-PM.png'),
(1085, 133, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:598;s:6:\"height\";i:428;s:4:\"file\";s:48:\"2020/03/Screen-Shot-2020-03-02-at-2.06.48-PM.png\";s:5:\"sizes\";a:6:{s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.48-PM-300x215.png\";s:5:\"width\";i:300;s:6:\"height\";i:215;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.48-PM-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.48-PM-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.48-PM-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.48-PM-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.06.48-PM-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(1086, 134, '_wp_attached_file', '2020/03/Screen-Shot-2020-03-02-at-2.18.15-PM.png'),
(1087, 134, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:598;s:6:\"height\";i:428;s:4:\"file\";s:48:\"2020/03/Screen-Shot-2020-03-02-at-2.18.15-PM.png\";s:5:\"sizes\";a:6:{s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.18.15-PM-300x215.png\";s:5:\"width\";i:300;s:6:\"height\";i:215;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.18.15-PM-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.18.15-PM-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.18.15-PM-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.18.15-PM-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.18.15-PM-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(1088, 135, '_wp_attached_file', '2020/03/Screen-Shot-2020-03-02-at-2.18.53-PM.png'),
(1089, 135, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:598;s:6:\"height\";i:428;s:4:\"file\";s:48:\"2020/03/Screen-Shot-2020-03-02-at-2.18.53-PM.png\";s:5:\"sizes\";a:6:{s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.18.53-PM-300x215.png\";s:5:\"width\";i:300;s:6:\"height\";i:215;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.18.53-PM-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.18.53-PM-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.18.53-PM-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.18.53-PM-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.18.53-PM-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(1090, 136, '_wp_attached_file', '2020/03/Screen-Shot-2020-03-02-at-2.19.28-PM.png'),
(1091, 136, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:598;s:6:\"height\";i:428;s:4:\"file\";s:48:\"2020/03/Screen-Shot-2020-03-02-at-2.19.28-PM.png\";s:5:\"sizes\";a:6:{s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.19.28-PM-300x215.png\";s:5:\"width\";i:300;s:6:\"height\";i:215;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.19.28-PM-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.19.28-PM-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.19.28-PM-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.19.28-PM-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.19.28-PM-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(1092, 137, '_wp_attached_file', '2020/03/Screen-Shot-2020-03-02-at-2.20.03-PM.png'),
(1093, 137, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:598;s:6:\"height\";i:428;s:4:\"file\";s:48:\"2020/03/Screen-Shot-2020-03-02-at-2.20.03-PM.png\";s:5:\"sizes\";a:6:{s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.20.03-PM-300x215.png\";s:5:\"width\";i:300;s:6:\"height\";i:215;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.20.03-PM-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.20.03-PM-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.20.03-PM-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.20.03-PM-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:48:\"Screen-Shot-2020-03-02-at-2.20.03-PM-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(1094, 129, '_thumbnail_id', '130'),
(1095, 122, '_thumbnail_id', '131'),
(1096, 123, '_thumbnail_id', '132'),
(1097, 124, '_thumbnail_id', '133'),
(1098, 125, '_thumbnail_id', '134'),
(1099, 126, '_thumbnail_id', '135'),
(1100, 127, '_thumbnail_id', '136'),
(1101, 128, '_thumbnail_id', '137'),
(1102, 120, '_price', '18.99'),
(1103, 120, '_price', '20'),
(1104, 120, '_thumbnail_id', '74'),
(1109, 139, '_order_key', 'wc_order_xZGjgqR2UF4fK'),
(1110, 139, '_customer_user', '0'),
(1111, 139, '_customer_ip_address', '::1'),
(1112, 139, '_customer_user_agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36'),
(1113, 139, '_created_via', 'checkout'),
(1114, 139, '_cart_hash', '8820803c85a06d34e6868a533bd0dd1e'),
(1115, 139, '_billing_state', 'MN'),
(1116, 139, '_billing_country', 'US'),
(1117, 139, '_billing_email', 'frametoby03@gmail.com'),
(1118, 139, '_order_currency', 'USD'),
(1119, 139, '_cart_discount', '7646500000000000'),
(1120, 139, '_cart_discount_tax', '0'),
(1121, 139, '_order_shipping', '0.00'),
(1122, 139, '_order_shipping_tax', '0'),
(1123, 139, '_order_tax', '0'),
(1124, 139, '_order_total', '0.00'),
(1125, 139, '_order_version', '3.9.2'),
(1126, 139, '_prices_include_tax', 'no'),
(1127, 139, '_billing_address_index', '      MN  US frametoby03@gmail.com '),
(1128, 139, '_shipping_address_index', '        '),
(1129, 139, 'is_vat_exempt', 'no'),
(1130, 139, '_date_paid', '1583181794'),
(1131, 139, '_paid_date', '2020-03-02 20:43:14'),
(1132, 139, '_download_permissions_granted', 'yes'),
(1133, 139, '_recorded_sales', 'yes'),
(1134, 139, '_recorded_coupon_usage_counts', 'yes'),
(1135, 54, '_used_by', 'frametoby03@gmail.com'),
(1136, 139, '_order_stock_reduced', 'yes'),
(1138, 141, '_order_key', 'wc_order_tKwl1CbVDKj2e'),
(1139, 141, '_customer_user', '0'),
(1140, 141, '_customer_ip_address', '::1'),
(1141, 141, '_customer_user_agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36'),
(1142, 141, '_created_via', 'checkout'),
(1143, 141, '_cart_hash', 'a964d511810f1c877a453ae719e898e9'),
(1144, 141, '_billing_state', 'MN'),
(1145, 141, '_billing_country', 'US'),
(1146, 141, '_billing_email', 'frametoby03@gmail.com'),
(1147, 141, '_order_currency', 'USD'),
(1148, 141, '_cart_discount', '17.99'),
(1149, 141, '_cart_discount_tax', '0'),
(1150, 141, '_order_shipping', '0.00'),
(1151, 141, '_order_shipping_tax', '0'),
(1152, 141, '_order_tax', '0'),
(1153, 141, '_order_total', '0.00'),
(1154, 141, '_order_version', '3.9.2'),
(1155, 141, '_prices_include_tax', 'no'),
(1156, 141, '_billing_address_index', '      MN  US frametoby03@gmail.com '),
(1157, 141, '_shipping_address_index', '        '),
(1158, 141, 'is_vat_exempt', 'no'),
(1159, 141, '_date_paid', '1583248985'),
(1160, 141, '_paid_date', '2020-03-03 15:23:05'),
(1161, 141, '_download_permissions_granted', 'yes'),
(1162, 141, '_recorded_sales', 'yes'),
(1163, 141, '_recorded_coupon_usage_counts', 'yes'),
(1164, 54, '_used_by', 'frametoby03@gmail.com'),
(1165, 141, '_order_stock_reduced', 'yes'),
(1166, 143, '_edit_lock', '1583257211:1'),
(1175, 148, '_edit_lock', '1584119971:1'),
(1176, 150, '_menu_item_type', 'post_type'),
(1177, 150, '_menu_item_menu_item_parent', '0'),
(1178, 150, '_menu_item_object_id', '148'),
(1179, 150, '_menu_item_object', 'page'),
(1180, 150, '_menu_item_target', ''),
(1181, 150, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(1182, 150, '_menu_item_xfn', ''),
(1183, 150, '_menu_item_url', ''),
(1190, 156, '_edit_lock', '1583260204:1'),
(1191, 156, '_edit_last', '1'),
(1192, 156, '_bbp_forum_id', '0'),
(1193, 156, '_bbp_last_topic_id', '159'),
(1194, 156, '_bbp_last_reply_id', '159'),
(1195, 156, '_bbp_last_active_id', '159'),
(1196, 156, '_bbp_last_active_time', '2020-03-03 18:34:15'),
(1197, 156, '_bbp_forum_subforum_count', '0'),
(1198, 156, '_bbp_reply_count', '0'),
(1199, 156, '_bbp_total_reply_count', '0'),
(1200, 156, '_bbp_topic_count', '2'),
(1201, 156, '_bbp_total_topic_count', '2'),
(1202, 156, '_bbp_topic_count_hidden', '0'),
(1203, 156, '_bbp_reply_count_hidden', '0'),
(1204, 156, '_bbp_total_reply_count_hidden', '0'),
(1205, 156, '_bbp_status', 'open'),
(1206, 156, '_bbp_forum_type', 'forum'),
(1207, 156, '_bbp_moderator_id', '1'),
(1208, 158, '_bbp_status', 'closed'),
(1209, 158, '_bbp_forum_id', '156'),
(1210, 158, '_bbp_topic_id', '158'),
(1211, 158, '_bbp_author_ip', '::1'),
(1212, 158, '_bbp_last_reply_id', '0'),
(1213, 158, '_bbp_last_active_id', '158'),
(1214, 158, '_bbp_last_active_time', '2020-03-03 18:30:54'),
(1215, 158, '_bbp_reply_count', '0'),
(1216, 158, '_bbp_reply_count_hidden', '0'),
(1217, 158, '_bbp_voice_count', '0'),
(1218, 156, '_bbp_sticky_topics', 'a:1:{i:0;i:158;}'),
(1219, 159, '_bbp_akismet_error', '1583260455'),
(1220, 159, '_bbp_akismet_history', 'a:4:{s:4:\"time\";d:1583260455.242053;s:7:\"message\";s:100:\"Akismet was unable to check this post (response: No response), will automatically retry again later.\";s:5:\"event\";s:11:\"check-error\";s:4:\"user\";s:11:\"collinframe\";}'),
(1221, 159, '_bbp_akismet_as_submitted', 'a:71:{s:14:\"comment_author\";s:0:\"\";s:20:\"comment_author_email\";s:0:\"\";s:18:\"comment_author_url\";s:0:\"\";s:15:\"comment_content\";s:87:\"rueroefrj\n\n<script>window.alert(\"LOL NERF OR NOTHIN PAPA\");</script>\nnerf or nuthin bud\";s:15:\"comment_post_ID\";i:156;s:12:\"comment_type\";s:5:\"topic\";s:13:\"comment_total\";i:2;s:23:\"comment_last_active_gmt\";s:19:\"2020-03-03 18:30:54\";s:30:\"comment_account_registered_gmt\";s:19:\"2020-03-03 18:34:15\";s:9:\"permalink\";s:64:\"http://localhost:8080/wordpress/forums/forum/general-discussion/\";s:8:\"referrer\";s:43:\"/wordpress/forums/forum/general-discussion/\";s:10:\"user_agent\";s:121:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36\";s:7:\"user_ID\";i:1;s:7:\"user_ip\";s:3:\"::1\";s:9:\"user_role\";s:27:\"administrator,bbp_keymaster\";s:4:\"blog\";s:31:\"http://localhost:8080/wordpress\";s:12:\"blog_charset\";s:5:\"UTF-8\";s:9:\"blog_lang\";s:5:\"en_US\";s:20:\"POST_bbp_topic_title\";s:9:\"rueroefrj\";s:22:\"POST_bbp_topic_content\";s:77:\"<script>window.alert(\"LOL NERF OR NOTHIN PAPA\");</script>\r\nnerf or nuthin bud\";s:19:\"POST_bbp_topic_tags\";s:0:\"\";s:20:\"POST_bbp_stick_topic\";s:7:\"unstick\";s:21:\"POST_bbp_topic_status\";s:7:\"publish\";s:21:\"POST_bbp_topic_submit\";s:0:\"\";s:17:\"POST_bbp_forum_id\";s:3:\"156\";s:11:\"POST_action\";s:13:\"bbp-new-topic\";s:31:\"POST__bbp_unfiltered_html_topic\";s:10:\"10bce8ffca\";s:13:\"POST__wpnonce\";s:10:\"640eb996e3\";s:21:\"POST__wp_http_referer\";s:43:\"/wordpress/forums/forum/general-discussion/\";s:15:\"SERVER_SOFTWARE\";s:6:\"Apache\";s:11:\"REQUEST_URI\";s:43:\"/wordpress/forums/forum/general-discussion/\";s:15:\"REDIRECT_STATUS\";s:3:\"200\";s:9:\"HTTP_HOST\";s:14:\"localhost:8080\";s:15:\"HTTP_CONNECTION\";s:10:\"keep-alive\";s:14:\"CONTENT_LENGTH\";s:3:\"395\";s:18:\"HTTP_CACHE_CONTROL\";s:9:\"max-age=0\";s:11:\"HTTP_ORIGIN\";s:21:\"http://localhost:8080\";s:30:\"HTTP_UPGRADE_INSECURE_REQUESTS\";s:1:\"1\";s:12:\"CONTENT_TYPE\";s:33:\"application/x-www-form-urlencoded\";s:15:\"HTTP_USER_AGENT\";s:121:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36\";s:19:\"HTTP_SEC_FETCH_DEST\";s:8:\"document\";s:11:\"HTTP_ACCEPT\";s:124:\"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9\";s:19:\"HTTP_SEC_FETCH_SITE\";s:11:\"same-origin\";s:19:\"HTTP_SEC_FETCH_MODE\";s:8:\"navigate\";s:19:\"HTTP_SEC_FETCH_USER\";s:2:\"?1\";s:12:\"HTTP_REFERER\";s:64:\"http://localhost:8080/wordpress/forums/forum/general-discussion/\";s:20:\"HTTP_ACCEPT_ENCODING\";s:17:\"gzip, deflate, br\";s:20:\"HTTP_ACCEPT_LANGUAGE\";s:14:\"en-US,en;q=0.9\";s:11:\"HTTP_COOKIE\";s:0:\"\";s:4:\"PATH\";s:736:\"/Users/231603/Applications/mampstack/frameworks/laravel/app/Console:/Users/231603/Applications/mampstack/frameworks/cakephp/bin:/Users/231603/Applications/mampstack/frameworks/codeigniter/bin:/Users/231603/Applications/mampstack/frameworks/symfony/bin:/Users/231603/Applications/mampstack/frameworks/zendframework/app/Console:/Users/231603/Applications/mampstack/git/bin:/Users/231603/Applications/mampstack/varnish/bin:/Users/231603/Applications/mampstack/sqlite/bin:/Users/231603/Applications/mampstack/php/bin:/Users/231603/Applications/mampstack/mysql/bin:/Users/231603/Applications/mampstack/letsencrypt/:/Users/231603/Applications/mampstack/apache2/bin:/Users/231603/Applications/mampstack/common/bin:/usr/bin:/bin:/usr/sbin:/sbin\";s:16:\"SERVER_SIGNATURE\";s:0:\"\";s:11:\"SERVER_NAME\";s:9:\"localhost\";s:11:\"SERVER_ADDR\";s:3:\"::1\";s:11:\"SERVER_PORT\";s:4:\"8080\";s:11:\"REMOTE_ADDR\";s:3:\"::1\";s:13:\"DOCUMENT_ROOT\";s:51:\"/Users/231603/Applications/mampstack/apache2/htdocs\";s:14:\"REQUEST_SCHEME\";s:4:\"http\";s:14:\"CONTEXT_PREFIX\";s:0:\"\";s:21:\"CONTEXT_DOCUMENT_ROOT\";s:51:\"/Users/231603/Applications/mampstack/apache2/htdocs\";s:12:\"SERVER_ADMIN\";s:15:\"you@example.com\";s:15:\"SCRIPT_FILENAME\";s:71:\"/Users/231603/Applications/mampstack/apache2/htdocs/wordpress/index.php\";s:11:\"REMOTE_PORT\";s:5:\"59799\";s:12:\"REDIRECT_URL\";s:43:\"/wordpress/forums/forum/general-discussion/\";s:17:\"GATEWAY_INTERFACE\";s:7:\"CGI/1.1\";s:15:\"SERVER_PROTOCOL\";s:8:\"HTTP/1.1\";s:14:\"REQUEST_METHOD\";s:4:\"POST\";s:12:\"QUERY_STRING\";s:0:\"\";s:11:\"SCRIPT_NAME\";s:20:\"/wordpress/index.php\";s:8:\"PHP_SELF\";s:20:\"/wordpress/index.php\";s:18:\"REQUEST_TIME_FLOAT\";s:14:\"1583260454.794\";s:12:\"REQUEST_TIME\";s:10:\"1583260454\";}'),
(1222, 159, '_bbp_forum_id', '156'),
(1223, 159, '_bbp_topic_id', '159'),
(1224, 159, '_bbp_author_ip', '::1'),
(1225, 159, '_bbp_last_reply_id', '0'),
(1226, 159, '_bbp_last_active_id', '159'),
(1227, 159, '_bbp_last_active_time', '2020-03-03 18:34:15'),
(1228, 159, '_bbp_reply_count', '0'),
(1229, 159, '_bbp_reply_count_hidden', '0'),
(1230, 159, '_bbp_voice_count', '1'),
(1231, 159, '_bbp_engagement', '1'),
(1232, 102, '_edit_lock', '1583331972:1'),
(1233, 102, '_edit_last', '1'),
(1234, 102, '_date_completed', '1583332105'),
(1235, 102, '_completed_date', '2020-03-04 14:28:25'),
(1238, 117, '_date_completed', '1583332138'),
(1239, 117, '_completed_date', '2020-03-04 14:28:58'),
(1241, 139, '_date_completed', '1583332138'),
(1242, 139, '_completed_date', '2020-03-04 14:28:58'),
(1244, 141, '_date_completed', '1583332138'),
(1245, 141, '_completed_date', '2020-03-04 14:28:58'),
(1247, 164, '_order_key', 'wc_order_tNqp8RKCyRyjd'),
(1248, 164, '_customer_user', '0'),
(1249, 164, '_customer_ip_address', '::1'),
(1250, 164, '_customer_user_agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36'),
(1251, 164, '_created_via', 'checkout'),
(1252, 164, '_cart_hash', '45596378da61b0e170244b93fe6b49bb'),
(1253, 164, '_billing_state', 'MN'),
(1254, 164, '_billing_country', 'US'),
(1255, 164, '_billing_email', 'frametoby03@gmail.com'),
(1256, 164, '_order_currency', 'USD'),
(1257, 164, '_cart_discount', '53.98'),
(1258, 164, '_cart_discount_tax', '0'),
(1259, 164, '_order_shipping', '0.00'),
(1260, 164, '_order_shipping_tax', '0'),
(1261, 164, '_order_tax', '0'),
(1262, 164, '_order_total', '0.00'),
(1263, 164, '_order_version', '3.9.3'),
(1264, 164, '_prices_include_tax', 'no'),
(1265, 164, '_billing_address_index', '      MN  US frametoby03@gmail.com '),
(1266, 164, '_shipping_address_index', '        '),
(1267, 164, 'is_vat_exempt', 'no'),
(1268, 164, '_date_paid', '1583771264'),
(1269, 164, '_paid_date', '2020-03-09 16:27:44'),
(1270, 164, '_download_permissions_granted', 'yes'),
(1271, 164, '_recorded_sales', 'yes'),
(1272, 164, '_recorded_coupon_usage_counts', 'yes'),
(1273, 54, '_used_by', 'frametoby03@gmail.com'),
(1274, 164, '_order_stock_reduced', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2020-02-28 18:31:03', '2020-02-28 18:31:03', '<!-- wp:paragraph -->\n<p><strong>Papa John\'s</strong> aims to create \"raving fans\" through \"authentic, superior-quality products, legendary customer service, and exceptional community service.\" And, of course, it gives customers this by delivery or pickup.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>Papa Johns </li><li>Pizza</li><li>This Is A List</li></ul>\n<!-- /wp:list -->\n\n<!-- wp:list {\"ordered\":true} -->\n<ol><li>Ordered List</li><li>stuff</li><li>happens</li></ol>\n<!-- /wp:list -->', 'Welcome to Papa Johns online store!', '', 'publish', 'closed', 'closed', '', 'mission-statement', '', '', '2020-04-07 16:11:57', '2020-04-07 16:11:57', '', 0, 'http://localhost:8080/wordpress/?p=1', 0, 'post', '', 0),
(2, 1, '2020-02-28 18:31:03', '2020-02-28 18:31:03', '<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://localhost:8080/wordpress/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->', 'Sample Page', '', 'publish', 'closed', 'open', '', 'sample-page', '', '', '2020-02-28 18:31:03', '2020-02-28 18:31:03', '', 0, 'http://localhost:8080/wordpress/?page_id=2', 0, 'page', '', 0),
(3, 1, '2020-02-28 18:31:03', '2020-02-28 18:31:03', '<!-- wp:heading -->\n<h2>Who we are</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>We are the Papa Johns rights movement</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>What personal data we collect and why we collect it</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Comments</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Media</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Contact forms</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Cookies</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select \"Remember Me\", your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Embedded content from other websites</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Analytics</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2>Who we share your data with</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2>How long we retain your data</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>What rights you have over your data</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Where we send your data</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Visitor comments may be checked through an automated spam detection service.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Your contact information</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2>Additional information</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>How we protect your data</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>What data breach procedures we have in place</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>What third parties we receive data from</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>What automated decision making and/or profiling we do with user data</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Industry regulatory disclosure requirements</h3>\n<!-- /wp:heading -->', 'Privacy Policy', '', 'publish', 'closed', 'open', '', 'privacy-policy', '', '', '2020-02-28 18:49:20', '2020-02-28 18:49:20', '', 0, 'http://localhost:8080/wordpress/?page_id=3', 0, 'page', '', 0),
(17, 1, '2020-02-28 18:42:55', '2020-02-28 18:42:55', '<!-- wp:paragraph -->\n<p>This is Wordpress. Wordpress makes it easy to make a website and I am typing this just like an advertisement because I have no idea what I am supposed to put in here.</p>\n<!-- /wp:paragraph -->', 'Hello world!', '', 'inherit', 'closed', 'closed', '', '1-revision-v1', '', '', '2020-02-28 18:42:55', '2020-02-28 18:42:55', '', 1, 'http://localhost:8080/wordpress/2020/02/28/1-revision-v1/', 0, 'revision', '', 0),
(19, 1, '2020-02-28 18:45:22', '2020-02-28 18:45:22', '', 'unnamed', '', 'inherit', 'open', 'closed', '', 'unnamed', '', '', '2020-02-28 18:45:22', '2020-02-28 18:45:22', '', 0, 'http://localhost:8080/wordpress/wp-content/uploads/2020/02/unnamed.png', 0, 'attachment', 'image/png', 0),
(20, 1, '2020-02-28 18:46:34', '2020-02-28 18:46:34', '', 'papajohn', '', 'inherit', 'open', 'closed', '', 'papajohn', '', '', '2020-02-28 18:46:34', '2020-02-28 18:46:34', '', 0, 'http://localhost:8080/wordpress/wp-content/uploads/2020/02/papajohn.jpeg', 0, 'attachment', 'image/jpeg', 0),
(21, 1, '2020-02-28 18:46:39', '2020-02-28 18:46:39', 'http://localhost:8080/wordpress/wp-content/uploads/2020/02/cropped-papajohn.jpeg', 'cropped-papajohn.jpeg', '', 'inherit', 'open', 'closed', '', 'cropped-papajohn-jpeg', '', '', '2020-02-28 18:46:39', '2020-02-28 18:46:39', '', 0, 'http://localhost:8080/wordpress/wp-content/uploads/2020/02/cropped-papajohn.jpeg', 0, 'attachment', 'image/jpeg', 0),
(22, 1, '2020-02-28 18:47:15', '2020-02-28 18:47:15', '', 'cropped-unnamed.png', '', 'inherit', 'open', 'closed', '', 'cropped-unnamed-png', '', '', '2020-02-28 18:47:15', '2020-02-28 18:47:15', '', 0, 'http://localhost:8080/wordpress/wp-content/uploads/2020/02/cropped-unnamed.png', 0, 'attachment', 'image/png', 0),
(23, 1, '2020-02-28 18:49:20', '2020-02-28 18:49:20', '<!-- wp:heading -->\n<h2>Who we are</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>We are the Papa Johns rights movement</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>What personal data we collect and why we collect it</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Comments</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Media</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Contact forms</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Cookies</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select \"Remember Me\", your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Embedded content from other websites</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Analytics</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2>Who we share your data with</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2>How long we retain your data</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>What rights you have over your data</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Where we send your data</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Visitor comments may be checked through an automated spam detection service.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Your contact information</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2>Additional information</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>How we protect your data</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>What data breach procedures we have in place</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>What third parties we receive data from</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>What automated decision making and/or profiling we do with user data</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Industry regulatory disclosure requirements</h3>\n<!-- /wp:heading -->', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '3-revision-v1', '', '', '2020-02-28 18:49:20', '2020-02-28 18:49:20', '', 3, 'http://localhost:8080/wordpress/2020/02/28/3-revision-v1/', 0, 'revision', '', 0),
(24, 1, '2020-02-28 18:51:50', '2020-02-28 18:51:50', '', 'woocommerce-placeholder', '', 'inherit', 'open', 'closed', '', 'woocommerce-placeholder', '', '', '2020-02-28 18:51:50', '2020-02-28 18:51:50', '', 0, 'http://localhost:8080/wordpress/wp-content/uploads/2020/02/woocommerce-placeholder.png', 0, 'attachment', 'image/png', 0),
(25, 1, '2020-02-28 18:52:26', '2020-02-28 18:52:26', '', 'Shop', '', 'publish', 'closed', 'closed', '', 'shop', '', '', '2020-02-28 18:52:26', '2020-02-28 18:52:26', '', 0, 'http://localhost:8080/wordpress/shop/', 0, 'page', '', 0),
(26, 1, '2020-02-28 18:52:26', '2020-02-28 18:52:26', '<!-- wp:shortcode -->[woocommerce_cart]<!-- /wp:shortcode -->', 'Cart', '', 'publish', 'closed', 'closed', '', 'cart', '', '', '2020-02-28 18:52:26', '2020-02-28 18:52:26', '', 0, 'http://localhost:8080/wordpress/cart/', 0, 'page', '', 0),
(27, 1, '2020-02-28 18:52:26', '2020-02-28 18:52:26', '<!-- wp:shortcode -->[woocommerce_checkout]<!-- /wp:shortcode -->', 'Checkout', '', 'publish', 'closed', 'closed', '', 'checkout', '', '', '2020-02-28 18:52:26', '2020-02-28 18:52:26', '', 0, 'http://localhost:8080/wordpress/checkout/', 0, 'page', '', 0),
(28, 1, '2020-02-28 18:52:26', '2020-02-28 18:52:26', '<!-- wp:shortcode -->[woocommerce_my_account]<!-- /wp:shortcode -->', 'My account', '', 'publish', 'closed', 'closed', '', 'my-account', '', '', '2020-02-28 18:52:26', '2020-02-28 18:52:26', '', 0, 'http://localhost:8080/wordpress/my-account/', 0, 'page', '', 0),
(31, 1, '2020-02-28 18:56:22', '2020-02-28 18:56:22', '', 'cheese', '', 'inherit', 'open', 'closed', '', 'cheese', '', '', '2020-02-28 18:56:22', '2020-02-28 18:56:22', '', 0, 'http://localhost:8080/wordpress/wp-content/uploads/2020/02/cheese.png', 0, 'attachment', 'image/png', 0),
(33, 1, '2020-02-28 19:02:39', '2020-02-28 19:02:39', '', 'Order &ndash; February 28, 2020 @ 07:02 PM', '', 'wc-cancelled', 'open', 'closed', 'wc_order_y2FkzGfCTbLm3', 'order-feb-28-2020-0702-pm', '', '', '2020-02-28 19:12:26', '2020-02-28 19:12:26', '', 0, 'http://localhost:8080/wordpress/?post_type=shop_order&#038;p=33', 0, 'shop_order', '', 1),
(35, 1, '2020-02-28 19:08:23', '2020-02-28 19:08:23', '', 'cropped-papajohn-1.jpeg', '', 'inherit', 'open', 'closed', '', 'cropped-papajohn-1-jpeg', '', '', '2020-02-28 19:08:23', '2020-02-28 19:08:23', '', 0, 'http://localhost:8080/wordpress/wp-content/uploads/2020/02/cropped-papajohn-1.jpeg', 0, 'attachment', 'image/jpeg', 0),
(39, 1, '2020-02-28 19:11:14', '2020-02-28 19:11:14', ' ', '', '', 'publish', 'closed', 'closed', '', '39', '', '', '2020-03-02 17:32:21', '2020-03-02 17:32:21', '', 0, 'http://localhost:8080/wordpress/2020/02/28/39/', 2, 'nav_menu_item', '', 0),
(40, 1, '2020-02-28 19:11:14', '2020-02-28 19:11:14', ' ', '', '', 'publish', 'closed', 'closed', '', '40', '', '', '2020-03-02 17:32:21', '2020-03-02 17:32:21', '', 0, 'http://localhost:8080/wordpress/2020/02/28/40/', 3, 'nav_menu_item', '', 0),
(41, 1, '2020-02-28 19:11:14', '2020-02-28 19:11:14', ' ', '', '', 'publish', 'closed', 'closed', '', '41', '', '', '2020-03-02 17:32:21', '2020-03-02 17:32:21', '', 0, 'http://localhost:8080/wordpress/2020/02/28/41/', 4, 'nav_menu_item', '', 0),
(42, 1, '2020-02-28 19:11:14', '2020-02-28 19:11:14', '', 'My Account', '', 'publish', 'closed', 'closed', '', '42', '', '', '2020-03-02 17:32:21', '2020-03-02 17:32:21', '', 0, 'http://localhost:8080/wordpress/2020/02/28/42/', 5, 'nav_menu_item', '', 0),
(43, 1, '2020-02-28 19:11:14', '2020-02-28 19:11:14', '', 'Home', '', 'publish', 'closed', 'closed', '', 'home', '', '', '2020-03-02 17:32:21', '2020-03-02 17:32:21', '', 0, 'http://localhost:8080/wordpress/2020/02/28/home/', 1, 'nav_menu_item', '', 0),
(47, 1, '2020-02-28 19:15:24', '2020-02-28 19:15:24', '', 'Order &ndash; February 28, 2020 @ 07:15 PM', '', 'wc-completed', 'open', 'closed', 'wc_order_RmMQmos8M9SdZ', 'order-feb-28-2020-0715-pm', '', '', '2020-02-28 19:15:24', '2020-02-28 19:15:24', '', 0, 'http://localhost:8080/wordpress/?post_type=shop_order&#038;p=47', 0, 'shop_order', '', 1),
(49, 1, '2020-02-28 19:17:29', '2020-02-28 19:17:29', '<!-- wp:paragraph -->\n<p>Use code africa for 100% off, offer valid until 02/29/2020</p>\n<!-- /wp:paragraph -->', 'Welcome to Papa Johns online store!', '', 'inherit', 'closed', 'closed', '', '1-revision-v1', '', '', '2020-02-28 19:17:29', '2020-02-28 19:17:29', '', 1, 'http://localhost:8080/wordpress/2020/02/28/1-revision-v1/', 0, 'revision', '', 0),
(50, 1, '2020-02-28 19:18:49', '2020-02-28 19:18:49', '', 'Order &ndash; February 28, 2020 @ 07:18 PM', '', 'wc-completed', 'open', 'closed', 'wc_order_aiUAHyW7W2MAs', 'order-feb-28-2020-0718-pm', '', '', '2020-02-28 19:18:49', '2020-02-28 19:18:49', '', 0, 'http://localhost:8080/wordpress/?post_type=shop_order&#038;p=50', 0, 'shop_order', '', 1),
(52, 1, '2020-02-28 19:50:20', '2020-02-28 19:50:20', '', 'Order &ndash; February 28, 2020 @ 07:50 PM', '', 'wc-completed', 'open', 'closed', 'wc_order_VtBEDyzZ3TaeT', 'order-feb-28-2020-0750-pm', '', '', '2020-02-28 19:50:21', '2020-02-28 19:50:21', '', 0, 'http://localhost:8080/wordpress/?post_type=shop_order&#038;p=52', 0, 'shop_order', '', 1),
(54, 1, '2020-03-02 14:21:01', '2020-03-02 14:21:01', '', 'cbf924815ppjshako', '', 'publish', 'closed', 'closed', '', 'lgchs', '', '', '2020-03-02 14:42:04', '2020-03-02 14:42:04', '', 0, 'http://localhost:8080/wordpress/?post_type=shop_coupon&#038;p=54', 0, 'shop_coupon', '', 0),
(55, 1, '2020-03-02 14:21:58', '2020-03-02 14:21:58', '<!-- wp:paragraph -->\n<p>Use code africa for 100% off, offer valid until 02/29/2020</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Use code lgchs for 100% off, offer valid forever</p>\n<!-- /wp:paragraph -->', 'Welcome to Papa Johns online store!', '', 'inherit', 'closed', 'closed', '', '1-revision-v1', '', '', '2020-03-02 14:21:58', '2020-03-02 14:21:58', '', 1, 'http://localhost:8080/wordpress/2020/03/02/1-revision-v1/', 0, 'revision', '', 0),
(56, 1, '2020-03-02 14:48:18', '2020-03-02 14:48:18', '', 'Order &ndash; March 2, 2020 @ 02:48 PM', '', 'wc-completed', 'open', 'closed', 'wc_order_voYpNW08ZbADo', 'order-mar-02-2020-0248-pm', '', '', '2020-03-02 14:48:18', '2020-03-02 14:48:18', '', 0, 'http://localhost:8080/wordpress/?post_type=shop_order&#038;p=56', 0, 'shop_order', '', 1),
(58, 1, '2020-03-02 17:25:36', '2020-03-02 17:25:36', '[[[{\"field_key\":\"user_login\",\"general_setting\":{\"label\":\"Username\",\"field_name\":\"user_login\",\"placeholder\":\"\",\"required\":\"yes\"},\"advance_setting\":{}},{\"field_key\":\"user_pass\",\"general_setting\":{\"label\":\"User Password\",\"field_name\":\"user_pass\",\"placeholder\":\"\",\"required\":\"yes\"},\"advance_setting\":{}}],[{\"field_key\":\"user_email\",\"general_setting\":{\"label\":\"User Email\",\"field_name\":\"user_email\",\"placeholder\":\"\",\"required\":\"yes\"},\"advance_setting\":{}},{\"field_key\":\"user_confirm_password\",\"general_setting\":{\"label\":\"Confirm Password\",\"field_name\":\"user_confirm_password\",\"placeholder\":\"\",\"required\":\"yes\"},\"advance_setting\":{}}]]]', 'Default form', '', 'publish', 'closed', 'closed', '', 'default-form', '', '', '2020-03-02 17:25:36', '2020-03-02 17:25:36', '', 0, 'http://localhost:8080/wordpress/?post_type=user_registration&p=58', 0, 'user_registration', '', 0),
(59, 1, '2020-03-02 17:25:56', '2020-03-02 17:25:56', '[user_registration_my_account]', 'My Account', '', 'private', 'closed', 'closed', '', 'my-account-2', '', '', '2020-03-02 17:30:33', '2020-03-02 17:30:33', '', 0, 'http://localhost:8080/wordpress/my-account-2/', 0, 'page', '', 0),
(61, 1, '2020-03-02 17:25:56', '2020-03-02 17:25:56', '[user_registration_form id=\"58\"]', 'Registration', '', 'publish', 'closed', 'closed', '', 'registration', '', '', '2020-03-02 17:25:56', '2020-03-02 17:25:56', '', 0, 'http://localhost:8080/wordpress/registration/', 0, 'page', '', 0),
(62, 1, '2020-03-02 17:25:56', '2020-03-02 17:25:56', ' ', '', '', 'publish', 'closed', 'closed', '', '62', '', '', '2020-03-02 17:32:21', '2020-03-02 17:32:21', '', 0, 'http://localhost:8080/wordpress/2020/03/02/62/', 6, 'nav_menu_item', '', 0),
(63, 1, '2020-03-02 17:30:33', '2020-03-02 17:30:33', '[user_registration_my_account]', 'My Account', '', 'inherit', 'closed', 'closed', '', '59-revision-v1', '', '', '2020-03-02 17:30:33', '2020-03-02 17:30:33', '', 59, 'http://localhost:8080/wordpress/2020/03/02/59-revision-v1/', 0, 'revision', '', 0),
(65, 1, '2020-03-02 17:40:03', '2020-03-02 17:40:03', '<!-- wp:paragraph -->\n<p><strong>Papa John\'s</strong> aims to create \"raving fans\" through \"authentic, superior-quality products, legendary customer service, and exceptional community service.\" And, of course, it gives customers this by delivery or pickup.</p>\n<!-- /wp:paragraph -->', 'Welcome to Papa Johns online store!', '', 'inherit', 'closed', 'closed', '', '1-revision-v1', '', '', '2020-03-02 17:40:03', '2020-03-02 17:40:03', '', 1, 'http://localhost:8080/wordpress/2020/03/02/1-revision-v1/', 0, 'revision', '', 0),
(66, 1, '2020-03-02 17:42:37', '2020-03-02 17:42:37', '<!-- wp:paragraph -->\n<p><strong>Papa John\'s</strong>&nbsp;aims to create \"raving fans\" through \"authentic, superior-quality products, legendary customer service, and exceptional community service.\" And, of course, it gives customers this by delivery or pickup.</p>\n<!-- /wp:paragraph -->', 'Welcome to Papa Johns online store!', '', 'inherit', 'closed', 'closed', '', '1-revision-v1', '', '', '2020-03-02 17:42:37', '2020-03-02 17:42:37', '', 1, 'http://localhost:8080/wordpress/2020/03/02/1-revision-v1/', 0, 'revision', '', 0),
(68, 1, '2020-03-02 17:44:39', '2020-03-02 17:44:39', '', 'Order &ndash; March 2, 2020 @ 05:44 PM', '', 'wc-completed', 'open', 'closed', 'wc_order_ISyGBcnAbrb1S', 'order-mar-02-2020-0544-pm', '', '', '2020-03-02 17:44:39', '2020-03-02 17:44:39', '', 0, 'http://localhost:8080/wordpress/?post_type=shop_order&#038;p=68', 0, 'shop_order', '', 1),
(70, 1, '2020-03-02 17:47:52', '2020-03-02 17:47:52', '', 'ezgif.com-webp-to-png (1)', '', 'inherit', 'open', 'closed', '', 'ezgif-com-webp-to-png-1', '', '', '2020-03-02 17:47:52', '2020-03-02 17:47:52', '', 0, 'http://localhost:8080/wordpress/wp-content/uploads/2020/03/ezgif.com-webp-to-png-1.png', 0, 'attachment', 'image/png', 0),
(71, 1, '2020-03-02 17:47:58', '2020-03-02 17:47:58', 'http://localhost:8080/wordpress/wp-content/uploads/2020/03/cropped-ezgif.com-webp-to-png-1.png', 'cropped-ezgif.com-webp-to-png-1.png', '', 'inherit', 'open', 'closed', '', 'cropped-ezgif-com-webp-to-png-1-png', '', '', '2020-03-02 17:47:58', '2020-03-02 17:47:58', '', 0, 'http://localhost:8080/wordpress/wp-content/uploads/2020/03/cropped-ezgif.com-webp-to-png-1.png', 0, 'attachment', 'image/png', 0),
(74, 1, '2020-03-02 17:49:13', '2020-03-02 17:49:13', '', 'papa_FB', '', 'inherit', 'open', 'closed', '', 'papa_fb', '', '', '2020-03-02 17:49:13', '2020-03-02 17:49:13', '', 0, 'http://localhost:8080/wordpress/wp-content/uploads/2020/03/papa_FB.png', 0, 'attachment', 'image/png', 0),
(75, 1, '2020-03-02 17:49:40', '2020-03-02 17:49:40', '', 'cropped-papa_FB.png', '', 'inherit', 'open', 'closed', '', 'cropped-papa_fb-png', '', '', '2020-03-02 17:49:40', '2020-03-02 17:49:40', '', 0, 'http://localhost:8080/wordpress/wp-content/uploads/2020/03/cropped-papa_FB.png', 0, 'attachment', 'image/png', 0),
(76, 1, '2020-03-02 17:50:43', '2020-03-02 17:50:43', 'http://localhost:8080/wordpress/wp-content/uploads/2020/03/cropped-ezgif.com-webp-to-png-1-1.png', 'cropped-ezgif.com-webp-to-png-1-1.png', '', 'inherit', 'open', 'closed', '', 'cropped-ezgif-com-webp-to-png-1-1-png', '', '', '2020-03-02 17:50:43', '2020-03-02 17:50:43', '', 0, 'http://localhost:8080/wordpress/wp-content/uploads/2020/03/cropped-ezgif.com-webp-to-png-1-1.png', 0, 'attachment', 'image/png', 0),
(84, 1, '2020-03-02 18:24:14', '2020-03-02 18:24:14', '.site-info { display: none; }', 'bcf-shop', '', 'publish', 'closed', 'closed', '', 'bcf-shop', '', '', '2020-03-02 18:24:14', '2020-03-02 18:24:14', '', 0, 'http://localhost:8080/wordpress/2020/03/02/bcf-shop/', 0, 'custom_css', '', 0),
(85, 1, '2020-03-02 18:24:14', '2020-03-02 18:24:14', '.site-info { display: none; }', 'bcf-shop', '', 'inherit', 'closed', 'closed', '', '84-revision-v1', '', '', '2020-03-02 18:24:14', '2020-03-02 18:24:14', '', 84, 'http://localhost:8080/wordpress/2020/03/02/84-revision-v1/', 0, 'revision', '', 0),
(90, 1, '2020-03-02 18:34:19', '2020-03-02 18:34:19', '<p class=\"description paragraph-text\">Simple, yet simply delicious. Real cheese made from mozzarella on top of our signature pizza sauce with your choice of crust, then baked to a golden brown. It has just what you want, and nothing you don’t.</p>\r\n\r\n<div class=\"option-qty-select\"><img class=\"alignnone size-medium wp-image-31\" src=\"http://localhost:8080/wordpress/wp-content/uploads/2020/02/cheese-300x218.png\" alt=\"\" width=\"300\" height=\"218\" /></div>', 'Cheese Pizza', '<p class=\"description paragraph-text\">Simple, yet simply delicious. Real cheese made from mozzarella on top of our signature pizza sauce with your choice of crust, then baked to a golden brown. It has just what you want, and nothing you don’t.</p>\r\n\r\n<div class=\"option-qty-select\"></div>', 'publish', 'open', 'closed', '', 'cheese-pizza', '', '', '2020-03-02 18:50:27', '2020-03-02 18:50:27', '', 0, 'http://localhost:8080/wordpress/?post_type=product&#038;p=90', 0, 'product', '', 0),
(91, 1, '2020-03-02 18:33:54', '2020-03-02 18:33:54', '', 'Cheese Pizza - Small 7.99', 'Size: Small 7.99', 'publish', 'closed', 'closed', '', 'cheese-pizza-small', '', '', '2020-03-02 18:50:25', '2020-03-02 18:50:25', '', 90, 'http://localhost:8080/wordpress/?post_type=product_variation&#038;p=91', 1, 'product_variation', '', 0),
(92, 1, '2020-03-02 18:33:55', '2020-03-02 18:33:55', '', 'Cheese Pizza - Medium 10.99', 'Size: Medium 10.99', 'publish', 'closed', 'closed', '', 'cheese-pizza-medium', '', '', '2020-03-02 18:50:25', '2020-03-02 18:50:25', '', 90, 'http://localhost:8080/wordpress/?post_type=product_variation&#038;p=92', 2, 'product_variation', '', 0),
(93, 1, '2020-03-02 18:33:55', '2020-03-02 18:33:55', '', 'Cheese Pizza - Large 14.99', 'Size: Large 14.99', 'publish', 'closed', 'closed', '', 'cheese-pizza-large', '', '', '2020-03-02 18:50:25', '2020-03-02 18:50:25', '', 90, 'http://localhost:8080/wordpress/?post_type=product_variation&#038;p=93', 3, 'product_variation', '', 0),
(94, 1, '2020-03-02 18:33:55', '2020-03-02 18:33:55', '', 'Cheese Pizza - Extra Large 17.99', 'Size: Extra Large 17.99', 'publish', 'closed', 'closed', '', 'cheese-pizza-extra-large', '', '', '2020-03-02 18:50:25', '2020-03-02 18:50:25', '', 90, 'http://localhost:8080/wordpress/?post_type=product_variation&#038;p=94', 4, 'product_variation', '', 0),
(96, 1, '2020-03-02 18:45:53', '2020-03-02 18:45:53', '', 'Order &ndash; March 2, 2020 @ 06:45 PM', '', 'wc-completed', 'open', 'closed', 'wc_order_JPnqr7595vwe4', 'order-mar-02-2020-0645-pm', '', '', '2020-03-02 18:45:53', '2020-03-02 18:45:53', '', 0, 'http://localhost:8080/wordpress/?post_type=shop_order&#038;p=96', 0, 'shop_order', '', 1),
(99, 1, '2020-03-02 18:47:58', '2020-03-02 18:47:58', '', 'Order &ndash; March 2, 2020 @ 06:47 PM', '', 'wc-completed', 'open', 'closed', 'wc_order_0lm8GYM4kyIPh', 'order-mar-02-2020-0647-pm', '', '', '2020-03-02 18:47:58', '2020-03-02 18:47:58', '', 0, 'http://localhost:8080/wordpress/?post_type=shop_order&#038;p=99', 0, 'shop_order', '', 1),
(102, 1, '2020-03-02 18:51:06', '2020-03-02 18:51:06', '', 'Order &ndash; March 2, 2020 @ 06:51 PM', '', 'wc-completed', 'closed', 'closed', 'wc_order_Efd5Yi2K88Cwg', 'order-mar-02-2020-0651-pm', '', '', '2020-03-04 14:28:25', '2020-03-04 14:28:25', '', 0, 'http://localhost:8080/wordpress/?post_type=shop_order&#038;p=102', 0, 'shop_order', '', 3),
(104, 1, '2020-03-02 18:56:33', '2020-03-02 18:56:33', 'Our signature pizza sauce layered with sausage and real cheese made from mozzarella for a taste you’ll crave. Your choice of crust', 'Sausage', '<p class=\"description paragraph-text\">Our signature pizza sauce layered with sausage and real cheese made from mozzarella for a taste you’ll crave. Your choice of crust.</p>\r\n\r\n<div class=\"option-qty-select\"></div>', 'publish', 'open', 'closed', '', 'sausage', '', '', '2020-03-02 18:58:45', '2020-03-02 18:58:45', '', 0, 'http://localhost:8080/wordpress/?post_type=product&#038;p=104', 0, 'product', '', 0),
(105, 1, '2020-03-02 18:55:41', '2020-03-02 18:55:41', '', 'Sausage - Small $7.99', 'Size: Small $7.99', 'publish', 'closed', 'closed', '', 'sausage-small-7-99', '', '', '2020-03-02 18:56:20', '2020-03-02 18:56:20', '', 104, 'http://localhost:8080/wordpress/?post_type=product_variation&p=105', 1, 'product_variation', '', 0),
(106, 1, '2020-03-02 18:55:41', '2020-03-02 18:55:41', '', 'Sausage - Medium $10.99', 'Size: Medium $10.99', 'publish', 'closed', 'closed', '', 'sausage-medium-10-99', '', '', '2020-03-02 18:56:21', '2020-03-02 18:56:21', '', 104, 'http://localhost:8080/wordpress/?post_type=product_variation&p=106', 2, 'product_variation', '', 0),
(107, 1, '2020-03-02 18:55:41', '2020-03-02 18:55:41', '', 'Sausage - Large $14.99', 'Size: Large $14.99', 'publish', 'closed', 'closed', '', 'sausage-large-14-99', '', '', '2020-03-02 18:56:21', '2020-03-02 18:56:21', '', 104, 'http://localhost:8080/wordpress/?post_type=product_variation&p=107', 3, 'product_variation', '', 0),
(108, 1, '2020-03-02 18:55:41', '2020-03-02 18:55:41', '', 'Sausage - Extra Large $17.99', 'Size: Extra Large $17.99', 'publish', 'closed', 'closed', '', 'sausage-extra-large-17-99', '', '', '2020-03-02 18:56:21', '2020-03-02 18:56:21', '', 104, 'http://localhost:8080/wordpress/?post_type=product_variation&p=108', 4, 'product_variation', '', 0),
(109, 1, '2020-03-02 18:57:32', '2020-03-02 18:57:32', '', 'sausage', '', 'inherit', 'open', 'closed', '', 'sausage-2', '', '', '2020-03-02 18:57:32', '2020-03-02 18:57:32', '', 104, 'http://localhost:8080/wordpress/wp-content/uploads/2020/03/sausage.png', 0, 'attachment', 'image/png', 0),
(110, 1, '2020-03-02 19:03:53', '2020-03-02 19:03:53', '<p class=\"description paragraph-text\">Your choice of crust covered with our signature pizza sauce, real cheese made from mozzarella, and pepperoni. With a pepperoni in almost every bite, it\'s one of our most popular pizzas.</p>\r\n\r\n<div class=\"option-qty-select\"></div>', 'Pepperoni', '<p class=\"description paragraph-text\">Your choice of crust covered with our signature pizza sauce, real cheese made from mozzarella, and pepperoni. With a pepperoni in almost every bite, it\'s one of our most popular pizzas.</p>\r\n\r\n<div class=\"option-qty-select\"></div>', 'publish', 'open', 'closed', '', 'pepperoni', '', '', '2020-03-02 19:03:53', '2020-03-02 19:03:53', '', 0, 'http://localhost:8080/wordpress/?post_type=product&#038;p=110', 0, 'product', '', 0),
(111, 1, '2020-03-02 19:02:27', '2020-03-02 19:02:27', '', 'Pepperoni - Small 7.99', 'Size: Small 7.99', 'publish', 'closed', 'closed', '', 'auto-draft-small-7-99', '', '', '2020-03-02 19:03:12', '2020-03-02 19:03:12', '', 110, 'http://localhost:8080/wordpress/?post_type=product_variation&p=111', 1, 'product_variation', '', 0),
(112, 1, '2020-03-02 19:02:27', '2020-03-02 19:02:27', '', 'Pepperoni - Medium 10.99', 'Size: Medium 10.99', 'publish', 'closed', 'closed', '', 'auto-draft-medium-10-99', '', '', '2020-03-02 19:03:12', '2020-03-02 19:03:12', '', 110, 'http://localhost:8080/wordpress/?post_type=product_variation&p=112', 2, 'product_variation', '', 0),
(113, 1, '2020-03-02 19:02:28', '2020-03-02 19:02:28', '', 'Pepperoni - Large 14.99', 'Size: Large 14.99', 'publish', 'closed', 'closed', '', 'auto-draft-large-14-99', '', '', '2020-03-02 19:03:12', '2020-03-02 19:03:12', '', 110, 'http://localhost:8080/wordpress/?post_type=product_variation&p=113', 3, 'product_variation', '', 0),
(114, 1, '2020-03-02 19:02:28', '2020-03-02 19:02:28', '', 'Pepperoni - Extra Large 17.99', 'Size: Extra Large 17.99', 'publish', 'closed', 'closed', '', 'auto-draft-extra-large-17-99', '', '', '2020-03-02 19:03:12', '2020-03-02 19:03:12', '', 110, 'http://localhost:8080/wordpress/?post_type=product_variation&p=114', 4, 'product_variation', '', 0),
(115, 1, '2020-03-02 19:03:46', '2020-03-02 19:03:46', '', 'pepperoni', '', 'inherit', 'open', 'closed', '', 'pepperoni', '', '', '2020-03-02 19:03:46', '2020-03-02 19:03:46', '', 110, 'http://localhost:8080/wordpress/wp-content/uploads/2020/03/pepperoni.png', 0, 'attachment', 'image/png', 0),
(117, 1, '2020-03-02 19:05:47', '2020-03-02 19:05:47', '', 'Order &ndash; March 2, 2020 @ 07:05 PM', '', 'wc-completed', 'open', 'closed', 'wc_order_pG1tycQwXA9NN', 'order-mar-02-2020-0705-pm', '', '', '2020-03-04 14:28:58', '2020-03-04 14:28:58', '', 0, 'http://localhost:8080/wordpress/?post_type=shop_order&#038;p=117', 0, 'shop_order', '', 2),
(120, 1, '2020-03-02 19:58:45', '2020-03-02 19:58:45', '', 'Specialty Pizza', '', 'publish', 'open', 'closed', '', 'specialty-pizzas', '', '', '2020-03-02 20:25:45', '2020-03-02 20:25:45', '', 0, 'http://localhost:8080/wordpress/?post_type=product&#038;p=120', 0, 'product', '', 0),
(122, 1, '2020-03-02 19:52:54', '2020-03-02 19:52:54', '', 'Specialty Pizza - The Works $18.99', 'Size: The Works $18.99', 'publish', 'closed', 'closed', '', 'auto-draft-the-works-18-99', '', '', '2020-03-02 20:20:34', '2020-03-02 20:20:34', '', 120, 'http://localhost:8080/wordpress/?post_type=product_variation&p=122', 2, 'product_variation', '', 0),
(123, 1, '2020-03-02 19:52:54', '2020-03-02 19:52:54', '', 'Specialty Pizza - The Meats $18.99', 'Size: The Meats $18.99', 'publish', 'closed', 'closed', '', 'auto-draft-the-meats-18-99', '', '', '2020-03-02 20:20:34', '2020-03-02 20:20:34', '', 120, 'http://localhost:8080/wordpress/?post_type=product_variation&p=123', 3, 'product_variation', '', 0),
(124, 1, '2020-03-02 19:52:54', '2020-03-02 19:52:54', '', 'Specialty Pizza - Meatball Papperoni $18.99', 'Size: Meatball Papperoni $18.99', 'publish', 'closed', 'closed', '', 'auto-draft-meatball-papperoni-18-99', '', '', '2020-03-02 20:20:34', '2020-03-02 20:20:34', '', 120, 'http://localhost:8080/wordpress/?post_type=product_variation&p=124', 4, 'product_variation', '', 0),
(125, 1, '2020-03-02 19:52:54', '2020-03-02 19:52:54', '', 'Specialty Pizza - Tuscan Six Cheese $18.99', 'Size: Tuscan Six Cheese $18.99', 'publish', 'closed', 'closed', '', 'auto-draft-tuscan-six-cheese-18-99', '', '', '2020-03-02 20:20:34', '2020-03-02 20:20:34', '', 120, 'http://localhost:8080/wordpress/?post_type=product_variation&p=125', 5, 'product_variation', '', 0),
(126, 1, '2020-03-02 19:52:54', '2020-03-02 19:52:54', '', 'Specialty Pizza - Garden Fresh $18.99', 'Size: Garden Fresh $18.99', 'publish', 'closed', 'closed', '', 'auto-draft-garden-fresh-18-99', '', '', '2020-03-02 20:20:34', '2020-03-02 20:20:34', '', 120, 'http://localhost:8080/wordpress/?post_type=product_variation&p=126', 6, 'product_variation', '', 0),
(127, 1, '2020-03-02 19:52:54', '2020-03-02 19:52:54', '', 'Specialty Pizza - Fresh Spinach & Tomato Alfredo $18.99', 'Size: Fresh Spinach & Tomato Alfredo $18.99', 'publish', 'closed', 'closed', '', 'auto-draft-fresh-spinach-tomato-alfredo-18-99', '', '', '2020-03-02 20:20:34', '2020-03-02 20:20:34', '', 120, 'http://localhost:8080/wordpress/?post_type=product_variation&p=127', 7, 'product_variation', '', 0),
(128, 1, '2020-03-02 19:52:54', '2020-03-02 19:52:54', '', 'Specialty Pizza - Extra Cheesy Alfredo $18.99', 'Size: Extra Cheesy Alfredo $18.99', 'publish', 'closed', 'closed', '', 'auto-draft-extra-cheesy-alfredo-18-99', '', '', '2020-03-02 20:20:34', '2020-03-02 20:20:34', '', 120, 'http://localhost:8080/wordpress/?post_type=product_variation&p=128', 8, 'product_variation', '', 0),
(129, 1, '2020-03-02 19:54:51', '2020-03-02 19:54:51', '', 'Specialty Pizza - Heart Shaped Pizza $20', 'Size: Heart Shaped Pizza $20', 'publish', 'closed', 'closed', '', 'auto-draft', '', '', '2020-03-02 20:20:34', '2020-03-02 20:20:34', '', 120, 'http://localhost:8080/wordpress/?post_type=product_variation&#038;p=129', 0, 'product_variation', '', 0),
(130, 1, '2020-03-02 20:07:25', '2020-03-02 20:07:25', '', 'Screen Shot 2020-03-02 at 2.05.37 PM', '', 'inherit', 'open', 'closed', '', 'screen-shot-2020-03-02-at-2-05-37-pm', '', '', '2020-03-02 20:07:25', '2020-03-02 20:07:25', '', 129, 'http://localhost:8080/wordpress/wp-content/uploads/2020/03/Screen-Shot-2020-03-02-at-2.05.37-PM.png', 0, 'attachment', 'image/png', 0),
(131, 1, '2020-03-02 20:07:34', '2020-03-02 20:07:34', '', 'Screen Shot 2020-03-02 at 2.06.07 PM', '', 'inherit', 'open', 'closed', '', 'screen-shot-2020-03-02-at-2-06-07-pm', '', '', '2020-03-02 20:07:34', '2020-03-02 20:07:34', '', 129, 'http://localhost:8080/wordpress/wp-content/uploads/2020/03/Screen-Shot-2020-03-02-at-2.06.07-PM.png', 0, 'attachment', 'image/png', 0),
(132, 1, '2020-03-02 20:07:39', '2020-03-02 20:07:39', '', 'Screen Shot 2020-03-02 at 2.06.24 PM', '', 'inherit', 'open', 'closed', '', 'screen-shot-2020-03-02-at-2-06-24-pm', '', '', '2020-03-02 20:07:39', '2020-03-02 20:07:39', '', 129, 'http://localhost:8080/wordpress/wp-content/uploads/2020/03/Screen-Shot-2020-03-02-at-2.06.24-PM.png', 0, 'attachment', 'image/png', 0),
(133, 1, '2020-03-02 20:07:44', '2020-03-02 20:07:44', '', 'Screen Shot 2020-03-02 at 2.06.48 PM', '', 'inherit', 'open', 'closed', '', 'screen-shot-2020-03-02-at-2-06-48-pm', '', '', '2020-03-02 20:07:44', '2020-03-02 20:07:44', '', 129, 'http://localhost:8080/wordpress/wp-content/uploads/2020/03/Screen-Shot-2020-03-02-at-2.06.48-PM.png', 0, 'attachment', 'image/png', 0),
(134, 1, '2020-03-02 20:18:35', '2020-03-02 20:18:35', '', 'Screen Shot 2020-03-02 at 2.18.15 PM', '', 'inherit', 'open', 'closed', '', 'screen-shot-2020-03-02-at-2-18-15-pm', '', '', '2020-03-02 20:18:35', '2020-03-02 20:18:35', '', 125, 'http://localhost:8080/wordpress/wp-content/uploads/2020/03/Screen-Shot-2020-03-02-at-2.18.15-PM.png', 0, 'attachment', 'image/png', 0),
(135, 1, '2020-03-02 20:19:11', '2020-03-02 20:19:11', '', 'garden-fresh', '', 'inherit', 'open', 'closed', '', 'screen-shot-2020-03-02-at-2-18-53-pm', '', '', '2020-03-02 20:19:17', '2020-03-02 20:19:17', '', 126, 'http://localhost:8080/wordpress/wp-content/uploads/2020/03/Screen-Shot-2020-03-02-at-2.18.53-PM.png', 0, 'attachment', 'image/png', 0),
(136, 1, '2020-03-02 20:19:45', '2020-03-02 20:19:45', '', 'Fresh Spinach & Tomato Alfredo', '', 'inherit', 'open', 'closed', '', 'screen-shot-2020-03-02-at-2-19-28-pm', '', '', '2020-03-02 20:19:53', '2020-03-02 20:19:53', '', 127, 'http://localhost:8080/wordpress/wp-content/uploads/2020/03/Screen-Shot-2020-03-02-at-2.19.28-PM.png', 0, 'attachment', 'image/png', 0),
(137, 1, '2020-03-02 20:20:18', '2020-03-02 20:20:18', '', 'cheesy-alfredo', '', 'inherit', 'open', 'closed', '', 'screen-shot-2020-03-02-at-2-20-03-pm', '', '', '2020-03-02 20:20:30', '2020-03-02 20:20:30', '', 128, 'http://localhost:8080/wordpress/wp-content/uploads/2020/03/Screen-Shot-2020-03-02-at-2.20.03-PM.png', 0, 'attachment', 'image/png', 0),
(138, 1, '2020-03-02 20:20:44', '2020-03-02 20:20:44', '', 'Specialty Pizzas', '', 'inherit', 'closed', 'closed', '', '120-autosave-v1', '', '', '2020-03-02 20:20:44', '2020-03-02 20:20:44', '', 120, 'http://localhost:8080/wordpress/2020/03/02/120-autosave-v1/', 0, 'revision', '', 0),
(139, 1, '2020-03-02 20:43:14', '2020-03-02 20:43:14', '', 'Order &ndash; March 2, 2020 @ 08:43 PM', '', 'wc-completed', 'open', 'closed', 'wc_order_xlq7tmk8N9jm7', 'order-mar-02-2020-0843-pm', '', '', '2020-03-04 14:28:58', '2020-03-04 14:28:58', '', 0, 'http://localhost:8080/wordpress/?post_type=shop_order&#038;p=139', 0, 'shop_order', '', 2),
(141, 1, '2020-03-03 15:23:05', '2020-03-03 15:23:05', '', 'Order &ndash; March 3, 2020 @ 03:23 PM', '', 'wc-completed', 'open', 'closed', 'wc_order_PKrG9pwGtoeGA', 'order-mar-03-2020-0323-pm', '', '', '2020-03-04 14:28:58', '2020-03-04 14:28:58', '', 0, 'http://localhost:8080/wordpress/?post_type=shop_order&#038;p=141', 0, 'shop_order', '', 2),
(143, 1, '2020-03-03 17:39:24', '2020-03-03 17:39:24', '<!-- wp:paragraph {\"fontSize\":\"medium\"} -->\n<p class=\"has-medium-font-size\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nullam vehicula ipsum a arcu cursus vitae congue mauris rhoncus. Quis vel eros donec ac odio tempor orci dapibus. Pharetra et ultrices neque ornare aenean euismod. Ut enim blandit volutpat maecenas volutpat blandit aliquam etiam. Tincidunt eget nullam non nisi est sit amet facilisis. Consequat ac felis donec et odio pellentesque diam volutpat commodo. Est sit amet facilisis magna etiam tempor orci eu lobortis. Faucibus pulvinar elementum integer enim neque volutpat. Nec feugiat nisl pretium fusce. Imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Lacinia at quis risus sed vulputate odio ut enim blandit. Aenean et tortor at risus viverra. Maecenas volutpat blandit aliquam etiam erat velit scelerisque. Velit dignissim sodales ut eu. Quis enim lobortis scelerisque fermentum.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"fontSize\":\"medium\"} -->\n<p class=\"has-medium-font-size\">Lectus urna duis convallis convallis tellus. Adipiscing diam donec adipiscing tristique. Nibh mauris cursus mattis molestie a iaculis at erat. Risus ultricies tristique nulla aliquet enim tortor at auctor. Tempor nec feugiat nisl pretium fusce id velit ut tortor. Et pharetra pharetra massa massa ultricies. Ut tristique et egestas quis ipsum. Risus sed vulputate odio ut enim blandit volutpat maecenas. Dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Duis ultricies lacus sed turpis tincidunt. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Enim neque volutpat ac tincidunt vitae semper. Id nibh tortor id aliquet lectus proin. Turpis egestas maecenas pharetra convallis. Donec et odio pellentesque diam volutpat commodo sed egestas egestas. Nunc sed velit dignissim sodales. Eget mauris pharetra et ultrices neque ornare aenean euismod elementum.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'Portfolio', '', 'publish', 'closed', 'closed', '', 'portfolio', '', '', '2020-03-03 17:39:24', '2020-03-03 17:39:24', '', 0, 'http://localhost:8080/wordpress/?page_id=143', 0, 'page', '', 0),
(144, 1, '2020-03-03 17:38:17', '2020-03-03 17:38:17', '<!-- wp:paragraph {\"fontSize\":\"medium\"} -->\n<p class=\"has-medium-font-size\"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong></p>\n<!-- /wp:paragraph -->', 'Portfolio', '', 'inherit', 'closed', 'closed', '', '143-revision-v1', '', '', '2020-03-03 17:38:17', '2020-03-03 17:38:17', '', 143, 'http://localhost:8080/wordpress/2020/03/03/143-revision-v1/', 0, 'revision', '', 0),
(145, 1, '2020-03-03 17:38:58', '2020-03-03 17:38:58', '<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nullam vehicula ipsum a arcu cursus vitae congue mauris rhoncus. Quis vel eros donec ac odio tempor orci dapibus. Pharetra et ultrices neque ornare aenean euismod. Ut enim blandit volutpat maecenas volutpat blandit aliquam etiam. Tincidunt eget nullam non nisi est sit amet facilisis. Consequat ac felis donec et odio pellentesque diam volutpat commodo. Est sit amet facilisis magna etiam tempor orci eu lobortis. Faucibus pulvinar elementum integer enim neque volutpat. Nec feugiat nisl pretium fusce. Imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Lacinia at quis risus sed vulputate odio ut enim blandit. Aenean et tortor at risus viverra. Maecenas volutpat blandit aliquam etiam erat velit scelerisque. Velit dignissim sodales ut eu. Quis enim lobortis scelerisque fermentum.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lectus urna duis convallis convallis tellus. Adipiscing diam donec adipiscing tristique. Nibh mauris cursus mattis molestie a iaculis at erat. Risus ultricies tristique nulla aliquet enim tortor at auctor. Tempor nec feugiat nisl pretium fusce id velit ut tortor. Et pharetra pharetra massa massa ultricies. Ut tristique et egestas quis ipsum. Risus sed vulputate odio ut enim blandit volutpat maecenas. Dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Duis ultricies lacus sed turpis tincidunt. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Enim neque volutpat ac tincidunt vitae semper. Id nibh tortor id aliquet lectus proin. Turpis egestas maecenas pharetra convallis. Donec et odio pellentesque diam volutpat commodo sed egestas egestas. Nunc sed velit dignissim sodales. Eget mauris pharetra et ultrices neque ornare aenean euismod elementum.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'Portfolio', '', 'inherit', 'closed', 'closed', '', '143-revision-v1', '', '', '2020-03-03 17:38:58', '2020-03-03 17:38:58', '', 143, 'http://localhost:8080/wordpress/2020/03/03/143-revision-v1/', 0, 'revision', '', 0);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(146, 1, '2020-03-03 17:39:10', '2020-03-03 17:39:10', '<!-- wp:paragraph {\"fontSize\":\"medium\"} -->\n<p class=\"has-medium-font-size\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nullam vehicula ipsum a arcu cursus vitae congue mauris rhoncus. Quis vel eros donec ac odio tempor orci dapibus. Pharetra et ultrices neque ornare aenean euismod. Ut enim blandit volutpat maecenas volutpat blandit aliquam etiam. Tincidunt eget nullam non nisi est sit amet facilisis. Consequat ac felis donec et odio pellentesque diam volutpat commodo. Est sit amet facilisis magna etiam tempor orci eu lobortis. Faucibus pulvinar elementum integer enim neque volutpat. Nec feugiat nisl pretium fusce. Imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Lacinia at quis risus sed vulputate odio ut enim blandit. Aenean et tortor at risus viverra. Maecenas volutpat blandit aliquam etiam erat velit scelerisque. Velit dignissim sodales ut eu. Quis enim lobortis scelerisque fermentum.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"fontSize\":\"medium\"} -->\n<p class=\"has-medium-font-size\">Lectus urna duis convallis convallis tellus. Adipiscing diam donec adipiscing tristique. Nibh mauris cursus mattis molestie a iaculis at erat. Risus ultricies tristique nulla aliquet enim tortor at auctor. Tempor nec feugiat nisl pretium fusce id velit ut tortor. Et pharetra pharetra massa massa ultricies. Ut tristique et egestas quis ipsum. Risus sed vulputate odio ut enim blandit volutpat maecenas. Dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Duis ultricies lacus sed turpis tincidunt. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Enim neque volutpat ac tincidunt vitae semper. Id nibh tortor id aliquet lectus proin. Turpis egestas maecenas pharetra convallis. Donec et odio pellentesque diam volutpat commodo sed egestas egestas. Nunc sed velit dignissim sodales. Eget mauris pharetra et ultrices neque ornare aenean euismod elementum.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'Portfolio', '', 'inherit', 'closed', 'closed', '', '143-revision-v1', '', '', '2020-03-03 17:39:10', '2020-03-03 17:39:10', '', 143, 'http://localhost:8080/wordpress/2020/03/03/143-revision-v1/', 0, 'revision', '', 0),
(148, 1, '2020-03-03 17:41:01', '2020-03-03 17:41:01', '<!-- wp:heading {\"level\":5} -->\n<h5>Building a Foundation of Quality</h5>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>The secret to success is much like the secret to making a better pizza - the more you put into it, the more you get out of it. Our pizza family is as hungry for perfection today as we were when we first opened our doors more than 30 years ago. And we\'re driven to be the best at making innovative new products and recipes.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Quality is at our core. It’s the foundation we started with, from the first Papa John\'s pizza that was made in a broom closet in Jeffersonville, IN, to now more than 5,000 locations in 45 countries and territories around the world.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We don’t use cheap and more processed ingredients. Whether it\'s our signature sauce, toppings, our original fresh dough, or even the box itself, we invest in our ingredients to ensure that we always give you the finest quality pizza.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>For you, it’s not just a better pizza. It’s a family gathering, memorable birthday, work celebration or simply a great meal. It’s our goal to make sure you always have the best ingredients for every occasion.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":5} -->\n<h5>How We Do It</h5>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong>Focus</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We must keep The Main Thing, The Main Thing. We will consistently deliver a traditional Papa John\'s superior-quality pizza.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Accountability</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We do what we say we are going to do when we say we are going to do it. We earn the right to hold others to a higher level of accountability by being accountable to ourselves, our customers and our business partners.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"align\":\"center\"} -->\n<div class=\"wp-block-image\"><figure class=\"aligncenter\"><img src=\"https://www.papajohns.com/assets/img/company/acsi-current.png\" alt=\"Rated #1 Customer Satisfaction and Product Quality Among Pizza QSR Pizza Chains in the American Customer Satisfaction Index. ACSI 2017\"/></figure></div>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p><strong>Superiority</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Our customer satisfaction must be consistent, quantifiable and demonstrable. At Papa John\'s we expect excellence - the \"best in its class\" in everything we do.<strong>P.A.P.A.</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>People Are Priority Always. Our success depends upon our ability, as a team, to work together to achieve our goals and expectations.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Attitude</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you think you can or you think you can\'t - you\'re right! The difference between winners and losers is a positive mental attitude. Our attitude is a reflection of what we value: successful team members must be upbeat, proactive and passionate about everything they do.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Constant Improvement</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We never stop trying to surpass our previous best. We constantly \"Raise the Bar.\" No matter how good we are, we will always get better.</p>\n<!-- /wp:paragraph -->', 'About Us', '', 'publish', 'closed', 'closed', '', 'about-us', '', '', '2020-03-03 17:41:59', '2020-03-03 17:41:59', '', 0, 'http://localhost:8080/wordpress/?page_id=148', 0, 'page', '', 0),
(149, 1, '2020-03-03 17:40:34', '2020-03-03 17:40:34', '<!-- wp:heading {\"level\":5} -->\n<h5>Building a Foundation of Quality</h5>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>The secret to success is much like the secret to making a better pizza - the more you put into it, the more you get out of it. Our pizza family is as hungry for perfection today as we were when we first opened our doors more than 30 years ago. And we\'re driven to be the best at making innovative new products and recipes.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Quality is at our core. It’s the foundation we started with, from the first Papa John\'s pizza that was made in a broom closet in Jeffersonville, IN, to now more than 5,000 locations in 45 countries and territories around the world.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We don’t use cheap and more processed ingredients. Whether it\'s our signature sauce, toppings, our original fresh dough, or even the box itself, we invest in our ingredients to ensure that we always give you the finest quality pizza.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>For you, it’s not just a better pizza. It’s a family gathering, memorable birthday, work celebration or simply a great meal. It’s our goal to make sure you always have the best ingredients for every occasion.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":5} -->\n<h5>How We Do It</h5>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong>Focus</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We must keep The Main Thing, The Main Thing. We will consistently deliver a traditional Papa John\'s superior-quality pizza.<strong>Accountability</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We do what we say we are going to do when we say we are going to do it. We earn the right to hold others to a higher level of accountability by being accountable to ourselves, our customers and our business partners.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image -->\n<figure class=\"wp-block-image\"><img src=\"https://www.papajohns.com/assets/img/company/acsi-current.png\" alt=\"Rated #1 Customer Satisfaction and Product Quality Among Pizza QSR Pizza Chains in the American Customer Satisfaction Index. ACSI 2017\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p><strong>Superiority</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Our customer satisfaction must be consistent, quantifiable and demonstrable. At Papa John\'s we expect excellence - the \"best in its class\" in everything we do.<strong>P.A.P.A.</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>People Are Priority Always. Our success depends upon our ability, as a team, to work together to achieve our goals and expectations.<strong>Attitude</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you think you can or you think you can\'t - you\'re right! The difference between winners and losers is a positive mental attitude. Our attitude is a reflection of what we value: successful team members must be upbeat, proactive and passionate about everything they do.<strong>Constant Improvement</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We never stop trying to surpass our previous best. We constantly \"Raise the Bar.\" No matter how good we are, we will always get better.</p>\n<!-- /wp:paragraph -->', 'About Us', '', 'inherit', 'closed', 'closed', '', '148-revision-v1', '', '', '2020-03-03 17:40:34', '2020-03-03 17:40:34', '', 148, 'http://localhost:8080/wordpress/2020/03/03/148-revision-v1/', 0, 'revision', '', 0),
(150, 1, '2020-03-03 17:41:01', '2020-03-03 17:41:01', ' ', '', '', 'publish', 'closed', 'closed', '', '150', '', '', '2020-03-03 17:44:11', '2020-03-03 17:44:11', '', 0, 'http://localhost:8080/wordpress/2020/03/03/150/', 7, 'nav_menu_item', '', 0),
(151, 1, '2020-03-03 17:41:01', '2020-03-03 17:41:01', '<!-- wp:heading {\"level\":5} -->\n<h5>Building a Foundation of Quality</h5>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>The secret to success is much like the secret to making a better pizza - the more you put into it, the more you get out of it. Our pizza family is as hungry for perfection today as we were when we first opened our doors more than 30 years ago. And we\'re driven to be the best at making innovative new products and recipes.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Quality is at our core. It’s the foundation we started with, from the first Papa John\'s pizza that was made in a broom closet in Jeffersonville, IN, to now more than 5,000 locations in 45 countries and territories around the world.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We don’t use cheap and more processed ingredients. Whether it\'s our signature sauce, toppings, our original fresh dough, or even the box itself, we invest in our ingredients to ensure that we always give you the finest quality pizza.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>For you, it’s not just a better pizza. It’s a family gathering, memorable birthday, work celebration or simply a great meal. It’s our goal to make sure you always have the best ingredients for every occasion.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":5} -->\n<h5>How We Do It</h5>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong>Focus</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We must keep The Main Thing, The Main Thing. We will consistently deliver a traditional Papa John\'s superior-quality pizza.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Accountability</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We do what we say we are going to do when we say we are going to do it. We earn the right to hold others to a higher level of accountability by being accountable to ourselves, our customers and our business partners.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image -->\n<figure class=\"wp-block-image\"><img src=\"https://www.papajohns.com/assets/img/company/acsi-current.png\" alt=\"Rated #1 Customer Satisfaction and Product Quality Among Pizza QSR Pizza Chains in the American Customer Satisfaction Index. ACSI 2017\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p><strong>Superiority</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Our customer satisfaction must be consistent, quantifiable and demonstrable. At Papa John\'s we expect excellence - the \"best in its class\" in everything we do.<strong>P.A.P.A.</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>People Are Priority Always. Our success depends upon our ability, as a team, to work together to achieve our goals and expectations.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Attitude</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you think you can or you think you can\'t - you\'re right! The difference between winners and losers is a positive mental attitude. Our attitude is a reflection of what we value: successful team members must be upbeat, proactive and passionate about everything they do.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Constant Improvement</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We never stop trying to surpass our previous best. We constantly \"Raise the Bar.\" No matter how good we are, we will always get better.</p>\n<!-- /wp:paragraph -->', 'About Us', '', 'inherit', 'closed', 'closed', '', '148-revision-v1', '', '', '2020-03-03 17:41:01', '2020-03-03 17:41:01', '', 148, 'http://localhost:8080/wordpress/2020/03/03/148-revision-v1/', 0, 'revision', '', 0),
(152, 1, '2020-03-03 17:41:59', '2020-03-03 17:41:59', '<!-- wp:heading {\"level\":5} -->\n<h5>Building a Foundation of Quality</h5>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>The secret to success is much like the secret to making a better pizza - the more you put into it, the more you get out of it. Our pizza family is as hungry for perfection today as we were when we first opened our doors more than 30 years ago. And we\'re driven to be the best at making innovative new products and recipes.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Quality is at our core. It’s the foundation we started with, from the first Papa John\'s pizza that was made in a broom closet in Jeffersonville, IN, to now more than 5,000 locations in 45 countries and territories around the world.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We don’t use cheap and more processed ingredients. Whether it\'s our signature sauce, toppings, our original fresh dough, or even the box itself, we invest in our ingredients to ensure that we always give you the finest quality pizza.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>For you, it’s not just a better pizza. It’s a family gathering, memorable birthday, work celebration or simply a great meal. It’s our goal to make sure you always have the best ingredients for every occasion.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":5} -->\n<h5>How We Do It</h5>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong>Focus</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We must keep The Main Thing, The Main Thing. We will consistently deliver a traditional Papa John\'s superior-quality pizza.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Accountability</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We do what we say we are going to do when we say we are going to do it. We earn the right to hold others to a higher level of accountability by being accountable to ourselves, our customers and our business partners.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"align\":\"center\"} -->\n<div class=\"wp-block-image\"><figure class=\"aligncenter\"><img src=\"https://www.papajohns.com/assets/img/company/acsi-current.png\" alt=\"Rated #1 Customer Satisfaction and Product Quality Among Pizza QSR Pizza Chains in the American Customer Satisfaction Index. ACSI 2017\"/></figure></div>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p><strong>Superiority</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Our customer satisfaction must be consistent, quantifiable and demonstrable. At Papa John\'s we expect excellence - the \"best in its class\" in everything we do.<strong>P.A.P.A.</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>People Are Priority Always. Our success depends upon our ability, as a team, to work together to achieve our goals and expectations.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Attitude</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you think you can or you think you can\'t - you\'re right! The difference between winners and losers is a positive mental attitude. Our attitude is a reflection of what we value: successful team members must be upbeat, proactive and passionate about everything they do.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Constant Improvement</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>We never stop trying to surpass our previous best. We constantly \"Raise the Bar.\" No matter how good we are, we will always get better.</p>\n<!-- /wp:paragraph -->', 'About Us', '', 'inherit', 'closed', 'closed', '', '148-revision-v1', '', '', '2020-03-03 17:41:59', '2020-03-03 17:41:59', '', 148, 'http://localhost:8080/wordpress/2020/03/03/148-revision-v1/', 0, 'revision', '', 0),
(156, 1, '2020-03-03 18:28:53', '2020-03-03 18:28:53', 'Discuss about Papa Johns', 'General Discussion', '', 'publish', 'closed', 'open', '', 'general-discussion', '', '', '2020-03-03 18:28:53', '2020-03-03 18:28:53', '', 0, 'http://localhost:8080/wordpress/?post_type=forum&#038;p=156', 0, 'forum', '', 0),
(157, 1, '2020-03-03 18:28:53', '2020-03-03 18:28:53', 'Discuss about Papa Johns', 'General Discussion', '', 'inherit', 'closed', 'closed', '', '156-revision-v1', '', '', '2020-03-03 18:28:53', '2020-03-03 18:28:53', '', 156, 'http://localhost:8080/wordpress/2020/03/03/156-revision-v1/', 0, 'revision', '', 0),
(158, 1, '2020-03-03 18:30:54', '2020-03-03 18:30:54', '<strong>Rules:</strong>\nNo NSFW\nNo Swearing\nAdministrators have access to post management\nUse Common Sense', 'Rules', '', 'closed', 'closed', 'closed', '', 'rules', '', '', '2020-03-03 18:30:54', '2020-03-03 18:30:54', '', 156, 'http://localhost:8080/wordpress/forums/topic/rules/', 0, 'topic', '', 0),
(159, 1, '2020-03-03 18:34:15', '2020-03-03 18:34:15', '<script>window.alert(\"LOL NERF OR NOTHIN PAPA\");</script>\nnerf or nuthin bud', 'rueroefrj', '', 'publish', 'closed', 'closed', '', 'rueroefrj', '', '', '2020-03-03 18:34:15', '2020-03-03 18:34:15', '', 156, 'http://localhost:8080/wordpress/forums/topic/rueroefrj/', 0, 'topic', '', 0),
(164, 1, '2020-03-09 16:27:43', '2020-03-09 16:27:43', '', 'Order &ndash; March 9, 2020 @ 04:27 PM', '', 'wc-processing', 'open', 'closed', 'wc_order_4aI0029XCIR6r', 'order-mar-09-2020-0427-pm', '', '', '2020-03-09 16:27:44', '2020-03-09 16:27:44', '', 0, 'http://localhost:8080/wordpress/?post_type=shop_order&#038;p=164', 0, 'shop_order', '', 1),
(167, 1, '2020-04-07 16:11:57', '2020-04-07 16:11:57', '<!-- wp:paragraph -->\n<p><strong>Papa John\'s</strong> aims to create \"raving fans\" through \"authentic, superior-quality products, legendary customer service, and exceptional community service.\" And, of course, it gives customers this by delivery or pickup.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>Papa Johns </li><li>Pizza</li><li>This Is A List</li></ul>\n<!-- /wp:list -->\n\n<!-- wp:list {\"ordered\":true} -->\n<ol><li>Ordered List</li><li>stuff</li><li>happens</li></ol>\n<!-- /wp:list -->', 'Welcome to Papa Johns online store!', '', 'inherit', 'closed', 'closed', '', '1-revision-v1', '', '', '2020-04-07 16:11:57', '2020-04-07 16:11:57', '', 1, 'http://localhost:8080/wordpress/2020/04/07/1-revision-v1/', 0, 'revision', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_termmeta`
--

INSERT INTO `wp_termmeta` (`meta_id`, `term_id`, `meta_key`, `meta_value`) VALUES
(1, 16, 'order', '0'),
(2, 16, 'product_count_product_cat', '4'),
(3, 17, 'product_count_product_tag', '0'),
(4, 18, 'product_count_product_tag', '0'),
(5, 15, 'product_count_product_cat', '0');

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Papa Johns', 'papa-johns', 0),
(2, 'simple', 'simple', 0),
(3, 'grouped', 'grouped', 0),
(4, 'variable', 'variable', 0),
(5, 'external', 'external', 0),
(6, 'exclude-from-search', 'exclude-from-search', 0),
(7, 'exclude-from-catalog', 'exclude-from-catalog', 0),
(8, 'featured', 'featured', 0),
(9, 'outofstock', 'outofstock', 0),
(10, 'rated-1', 'rated-1', 0),
(11, 'rated-2', 'rated-2', 0),
(12, 'rated-3', 'rated-3', 0),
(13, 'rated-4', 'rated-4', 0),
(14, 'rated-5', 'rated-5', 0),
(15, 'Uncategorized', 'uncategorized', 0),
(16, 'Pizza', 'pizza', 0),
(17, 'Cheese', 'cheese', 0),
(18, 'Large', 'large', 0),
(19, 'wc-admin-data', 'wc-admin-data', 0),
(20, 'Menu', 'menu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(39, 20, 0),
(40, 20, 0),
(41, 20, 0),
(42, 20, 0),
(43, 20, 0),
(62, 20, 0),
(90, 4, 0),
(90, 16, 0),
(104, 4, 0),
(104, 16, 0),
(110, 4, 0),
(110, 16, 0),
(120, 4, 0),
(120, 16, 0),
(150, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'product_type', '', 0, 0),
(3, 3, 'product_type', '', 0, 0),
(4, 4, 'product_type', '', 0, 4),
(5, 5, 'product_type', '', 0, 0),
(6, 6, 'product_visibility', '', 0, 0),
(7, 7, 'product_visibility', '', 0, 0),
(8, 8, 'product_visibility', '', 0, 0),
(9, 9, 'product_visibility', '', 0, 0),
(10, 10, 'product_visibility', '', 0, 0),
(11, 11, 'product_visibility', '', 0, 0),
(12, 12, 'product_visibility', '', 0, 0),
(13, 13, 'product_visibility', '', 0, 0),
(14, 14, 'product_visibility', '', 0, 0),
(15, 15, 'product_cat', '', 0, 0),
(16, 16, 'product_cat', '', 0, 4),
(17, 17, 'product_tag', '', 0, 0),
(18, 18, 'product_tag', '', 0, 0),
(19, 19, 'action-group', '', 0, 0),
(20, 20, 'nav_menu', '', 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'collinframe'),
(2, 1, 'first_name', 'asd'),
(3, 1, 'last_name', 'fe'),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:2:{s:13:\"administrator\";b:1;s:13:\"bbp_keymaster\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', ''),
(15, 1, 'show_welcome_panel', '1'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '166'),
(18, 1, 'wp_user-settings', 'libraryContent=browse'),
(19, 1, 'wp_user-settings-time', '1583174055'),
(20, 1, '_woocommerce_tracks_anon_id', 'woo:jyt6oerY8AwIg20z/aNTQZgb'),
(21, 1, 'wc_last_active', '1586217600'),
(23, 1, 'last_update', '1586275459'),
(24, 1, 'billing_first_name', ''),
(25, 1, 'billing_last_name', ''),
(26, 1, 'billing_address_1', ''),
(27, 1, 'billing_city', ''),
(28, 1, 'billing_state', 'MN'),
(29, 1, 'billing_postcode', ''),
(30, 1, 'billing_country', 'US'),
(31, 1, 'billing_email', '231603@shakopeeschools.org'),
(32, 1, 'shipping_method', ''),
(34, 1, 'paying_customer', '1'),
(38, 1, 'tgmpa_dismissed_notice_bcf-shop', '1'),
(39, 1, 'dismissed_no_secure_connection_notice', '1'),
(41, 1, 'jetpack_tracks_anon_id', 'jetpack:QQ7GyhgjIsp6H6up4wT67xVV'),
(42, 1, 'community-events-location', 'a:1:{s:2:\"ip\";s:9:\"127.0.0.0\";}'),
(54, 1, 'nav_menu_recently_edited', '20'),
(55, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
(56, 1, 'metaboxhidden_nav-menus', 'a:5:{i:0;s:21:\"add-post-type-product\";i:1;s:12:\"add-post_tag\";i:2;s:15:\"add-post_format\";i:3;s:15:\"add-product_cat\";i:4;s:15:\"add-product_tag\";}'),
(132, 1, 'wp__bbp_topic_count', '3'),
(133, 1, '_woocommerce_persistent_cart_1', 'a:1:{s:4:\"cart\";a:0:{}}'),
(135, 1, '_order_count', '5'),
(137, 1, 'woocommerce_admin_activity_panel_inbox_last_read', '1583419378694'),
(141, 1, 'dismissed_update_notice', '1'),
(143, 1, 'session_tokens', 'a:1:{s:64:\"ed5c7ed0b8ee16797d578a3ee25272bd0a67c61a0acb4dcec0aa51099745cafa\";a:4:{s:10:\"expiration\";i:1586448983;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:121:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36\";s:5:\"login\";i:1586276183;}}'),
(145, 4, 'nickname', 'testperson'),
(146, 4, 'first_name', ''),
(147, 4, 'last_name', ''),
(148, 4, 'description', ''),
(149, 4, 'rich_editing', 'true'),
(150, 4, 'syntax_highlighting', 'true'),
(151, 4, 'comment_shortcuts', 'false'),
(152, 4, 'admin_color', 'fresh'),
(153, 4, 'use_ssl', '0'),
(154, 4, 'show_admin_bar_front', 'true'),
(155, 4, 'locale', ''),
(156, 4, 'wp_capabilities', 'a:1:{s:10:\"subscriber\";b:1;}'),
(157, 4, 'wp_user_level', '0'),
(158, 4, 'dismissed_wp_pointers', ''),
(159, 4, 'ur_form_id', '58');

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'collinframe', '$P$BV8TWRpfLq/.lKouWzLwI7x7hlVcjv.', 'collinframe', '231603@shakopeeschools.org', '', '2020-02-28 18:31:03', '', 0, 'collinframe'),
(4, 'testperson', '$P$B7xJhXD/5Wr04WB7CPtFU.isPYWxYw0', 'testperson', 'test@test.org', '', '2020-04-07 16:17:56', '', 0, 'testperson');

-- --------------------------------------------------------

--
-- Table structure for table `wp_user_registration_sessions`
--

CREATE TABLE `wp_user_registration_sessions` (
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `session_key` char(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `session_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `session_expiry` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_wc_admin_notes`
--

CREATE TABLE `wp_wc_admin_notes` (
  `note_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `locale` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `icon` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `content_data` longtext COLLATE utf8mb4_unicode_520_ci,
  `status` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `source` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_reminder` datetime DEFAULT NULL,
  `is_snoozable` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_wc_admin_notes`
--

INSERT INTO `wp_wc_admin_notes` (`note_id`, `name`, `type`, `locale`, `title`, `content`, `icon`, `content_data`, `status`, `source`, `date_created`, `date_reminder`, `is_snoozable`) VALUES
(1, 'wc-admin-add-first-product', 'info', 'en_US', 'Add your first product', 'Grow your revenue by adding products to your store. Add products manually, import from a sheet, or migrate from another platform.', 'product', '{}', 'unactioned', 'woocommerce-admin', '2020-02-28 18:53:29', NULL, 0),
(2, 'wc-admin-welcome-note', 'info', 'en_US', 'New feature(s)', 'Welcome to the new WooCommerce experience! In this new release you\'ll be able to have a glimpse of how your store is doing in the Dashboard, manage important aspects of your business (such as managing orders, stock, reviews) from anywhere in the interface, dive into your store data with a completely new Analytics section and more!', 'info', '{}', 'unactioned', 'woocommerce-admin', '2020-02-28 18:53:29', NULL, 0),
(3, 'wc-admin-wc-helper-connection', 'info', 'en_US', 'Connect to WooCommerce.com', 'Connect to get important product notifications and updates.', 'info', '{}', 'unactioned', 'woocommerce-admin', '2020-02-28 18:53:30', NULL, 0),
(4, 'wc-admin-store-notice-giving-feedback', 'info', 'en_US', 'Review your experience', 'If you like WooCommerce Admin please leave us a 5 star rating. A huge thanks in advance!', 'info', '{}', 'unactioned', 'woocommerce-admin', '2020-02-28 18:53:37', NULL, 0),
(5, 'wc-admin-mobile-app', 'info', 'en_US', 'Install Woo mobile app', 'Install the WooCommerce mobile app to manage orders, receive sales notifications, and view key metrics — wherever you are.', 'phone', '{}', 'unactioned', 'woocommerce-admin', '2020-02-28 18:53:37', NULL, 0),
(6, 'wc-admin-usage-tracking-opt-in', 'info', 'en_US', 'Help WooCommerce improve with usage tracking', 'Gathering usage data allows us to improve WooCommerce. Your store will be considered as we evaluate new features, judge the quality of an update, or determine if an improvement makes sense. You can always visit the <a href=\"http://localhost:8080/wordpress/wp-admin/admin.php?page=wc-settings&#038;tab=advanced&#038;section=woocommerce_com\" target=\"_blank\">Settings</a> and choose to stop sharing data. <a href=\"https://woocommerce.com/usage-tracking\" target=\"_blank\">Read more</a> about what data we collect.', 'info', '{}', 'unactioned', 'woocommerce-admin', '2020-02-28 18:53:37', NULL, 0),
(8, 'wc-admin-facebook-extension', 'info', 'en_US', 'Market on Facebook', 'Grow your business by targeting the right people and driving sales with Facebook. You can install this free extension now.', 'thumbs-up', '{}', 'unactioned', 'woocommerce-admin', '2020-03-02 14:17:58', NULL, 0),
(9, 'wc-admin-orders-milestone', 'info', 'en_US', 'Congratulations on processing 10 orders!', 'You\'ve hit the 10 orders milestone! Look at you go. Browse some WooCommerce success stories for inspiration.', 'trophy', '{}', 'unactioned', 'woocommerce-admin', '2020-03-03 15:21:50', NULL, 0),
(10, 'wc-admin-store-notice-setting-moved', 'info', 'en_US', 'Looking for the Store Notice setting?', 'It can now be found in the Customizer.', 'info', '{}', 'unactioned', 'woocommerce-admin', '2020-03-05 14:35:51', NULL, 0),
(11, 'wc-admin-onboarding-email-marketing', 'info', 'en_US', 'Tips, product updates, and inspiration', 'We\'re here for you — get tips, product updates, and inspiration straight to your mailbox.', 'mail', '{}', 'unactioned', 'woocommerce-admin', '2020-03-05 19:31:27', NULL, 0),
(12, 'wc-update-db-reminder', 'update', 'en_US', 'WooCommerce database update done', 'WooCommerce database update complete. Thank you for updating to the latest version!', 'info', '{}', 'actioned', 'woocommerce-core', '2020-03-13 16:43:49', NULL, 0),
(13, 'wc-update-db-reminder', 'update', 'en_US', 'WooCommerce database update required', 'WooCommerce has been updated! To keep things running smoothly, we have to update your database to the newest version. The database update process runs in the background and may take a little while, so please be patient. Advanced users can alternatively update via <a href=\"https://github.com/woocommerce/woocommerce/wiki/Upgrading-the-database-using-WP-CLI\">WP CLI</a>.', 'info', '{}', 'unactioned', 'woocommerce-core', '2020-03-13 16:43:49', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_wc_admin_note_actions`
--

CREATE TABLE `wp_wc_admin_note_actions` (
  `action_id` bigint(20) UNSIGNED NOT NULL,
  `note_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `query` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_wc_admin_note_actions`
--

INSERT INTO `wp_wc_admin_note_actions` (`action_id`, `note_id`, `name`, `label`, `query`, `status`, `is_primary`) VALUES
(1, 1, 'add-a-product', 'Add a product', 'http://localhost:8080/wordpress/wp-admin/post-new.php?post_type=product', 'actioned', 1),
(2, 2, 'learn-more', 'Learn more', 'https://woocommerce.wordpress.com/', 'actioned', 0),
(3, 3, 'connect', 'Connect', '?page=wc-addons&section=helper', 'actioned', 0),
(4, 4, 'share-feedback', 'Review', 'https://wordpress.org/support/plugin/woocommerce-admin/reviews/?rate=5#new-post', 'actioned', 0),
(5, 5, 'learn-more', 'Learn more', 'https://woocommerce.com/mobile/', 'actioned', 0),
(6, 6, 'tracking-dismiss', 'Dismiss', '', 'actioned', 0),
(7, 6, 'tracking-opt-in', 'Activate usage tracking', '', 'actioned', 1),
(9, 8, 'learn-more', 'Learn more', 'https://woocommerce.com/products/facebook/', 'unactioned', 0),
(10, 8, 'install-now', 'Install now', '', 'unactioned', 1),
(11, 9, 'browse', 'Browse', 'https://woocommerce.com/success-stories/', 'actioned', 0),
(12, 10, 'open-customizer', 'Open Customizer', 'customize.php', 'actioned', 0),
(13, 11, 'yes-please', 'Yes please!', 'https://woocommerce.us8.list-manage.com/subscribe/post?u=2c1434dc56f9506bf3c3ecd21&amp;id=13860df971&amp;SIGNUPPAGE=plugin', 'actioned', 0),
(15, 13, 'update-db_run', 'Update WooCommerce Database', 'http://localhost:8080/wordpress/wp-admin/admin.php?page=wc-settings&do_update_woocommerce=true&wc_db_update_nonce=38ac94a130', 'unactioned', 1),
(17, 13, 'update-db_learn-more', 'Learn more about updates', 'https://docs.woocommerce.com/document/how-to-update-woocommerce/', 'unactioned', 0),
(21, 12, 'update-db_done', 'Thanks!', 'http://localhost:8080/wordpress/wp-admin/admin.php?page=wc-settings&wc-hide-notice=update&_wc_notice_nonce=d0131301e6', 'actioned', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_wc_category_lookup`
--

CREATE TABLE `wp_wc_category_lookup` (
  `category_tree_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_wc_category_lookup`
--

INSERT INTO `wp_wc_category_lookup` (`category_tree_id`, `category_id`) VALUES
(15, 15),
(16, 16);

-- --------------------------------------------------------

--
-- Table structure for table `wp_wc_customer_lookup`
--

CREATE TABLE `wp_wc_customer_lookup` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `username` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `first_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `date_last_active` timestamp NULL DEFAULT NULL,
  `date_registered` timestamp NULL DEFAULT NULL,
  `country` char(2) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `postcode` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `city` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `state` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_wc_customer_lookup`
--

INSERT INTO `wp_wc_customer_lookup` (`customer_id`, `user_id`, `username`, `first_name`, `last_name`, `email`, `date_last_active`, `date_registered`, `country`, `postcode`, `city`, `state`) VALUES
(1, 1, 'collinframe', 'asd', 'fe', '231603@shakopeeschools.org', '2020-04-07 05:00:00', '2020-02-29 00:31:03', 'US', '', '', 'MN'),
(2, NULL, '', '', '', 'frametoby03@gmail.com', '2020-02-29 01:18:49', NULL, 'US', '', '', 'MN'),
(3, 2, 'phpmyadminlol', '', '', 'frametoby03@gmail.com', '2020-03-02 06:00:00', '2020-03-02 23:34:11', 'US', '', '', 'MN'),
(4, 3, 'mynameisgod', '', '', 'framecollin03@gmail.com', '2020-03-02 06:00:00', '2020-03-03 00:46:51', 'US', '', '', 'MN');

-- --------------------------------------------------------

--
-- Table structure for table `wp_wc_download_log`
--

CREATE TABLE `wp_wc_download_log` (
  `download_log_id` bigint(20) UNSIGNED NOT NULL,
  `timestamp` datetime NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_ip_address` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_wc_download_log`
--

INSERT INTO `wp_wc_download_log` (`download_log_id`, `timestamp`, `permission_id`, `user_id`, `user_ip_address`) VALUES
(1, '2020-02-28 19:15:38', 1, 1, '::1'),
(2, '2020-02-28 19:51:27', 3, NULL, '::1'),
(3, '2020-02-28 19:51:43', 3, NULL, '::1'),
(4, '2020-02-28 19:57:17', 3, NULL, '::1'),
(5, '2020-03-02 14:48:22', 4, NULL, '::1'),
(6, '2020-03-02 17:44:46', 5, 2, '::1'),
(7, '2020-03-02 18:46:04', 6, 1, '::1'),
(8, '2020-03-02 18:48:04', 8, 3, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `wp_wc_order_coupon_lookup`
--

CREATE TABLE `wp_wc_order_coupon_lookup` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `discount_amount` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_wc_order_coupon_lookup`
--

INSERT INTO `wp_wc_order_coupon_lookup` (`order_id`, `coupon_id`, `date_created`, `discount_amount`) VALUES
(56, 54, '2020-03-02 14:48:18', 14.99),
(68, 54, '2020-03-02 17:44:39', 14.99),
(96, 54, '2020-03-02 18:45:53', 47.97),
(99, 54, '2020-03-02 18:47:58', 17.99),
(102, 54, '2020-03-02 18:51:06', 10.99),
(117, 54, '2020-03-02 19:05:47', 14.99),
(139, 54, '2020-03-02 20:43:14', 7.6465e15),
(141, 54, '2020-03-03 15:23:05', 17.99),
(164, 54, '2020-03-09 16:27:43', 53.98);

-- --------------------------------------------------------

--
-- Table structure for table `wp_wc_order_product_lookup`
--

CREATE TABLE `wp_wc_order_product_lookup` (
  `order_item_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `variation_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `product_qty` int(11) NOT NULL,
  `product_net_revenue` double NOT NULL DEFAULT '0',
  `product_gross_revenue` double NOT NULL DEFAULT '0',
  `coupon_amount` double NOT NULL DEFAULT '0',
  `tax_amount` double NOT NULL DEFAULT '0',
  `shipping_amount` double NOT NULL DEFAULT '0',
  `shipping_tax_amount` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_wc_order_product_lookup`
--

INSERT INTO `wp_wc_order_product_lookup` (`order_item_id`, `order_id`, `product_id`, `variation_id`, `customer_id`, `date_created`, `product_qty`, `product_net_revenue`, `product_gross_revenue`, `coupon_amount`, `tax_amount`, `shipping_amount`, `shipping_tax_amount`) VALUES
(1, 33, 29, 0, 1, '2020-02-28 19:02:39', 2, 29.98, 29.98, 0, 0, 0, 0),
(2, 47, 29, 0, 1, '2020-02-28 19:15:24', 2, 0, 0, 29.98, 0, 0, 0),
(4, 50, 29, 0, 2, '2020-02-28 19:18:49', 1, 0, 0, 14.99, 0, 0, 0),
(6, 52, 29, 0, 2, '2020-02-28 19:50:20', 120501236, 0, 0, 1806313527.64, 0, 0, 0),
(8, 56, 29, 0, 2, '2020-03-02 14:48:18', 1, 0, 0, 14.99, 0, 0, 0),
(10, 68, 29, 0, 3, '2020-03-02 17:44:39', 1, 0, 0, 14.99, 0, 0, 0),
(12, 96, 90, 93, 1, '2020-03-02 18:45:53', 2, 0, 0, 29.98, 0, 0, 0),
(13, 96, 90, 94, 1, '2020-03-02 18:45:53', 1, 0, 0, 17.99, 0, 0, 0),
(15, 99, 90, 94, 4, '2020-03-02 18:47:58', 1, 0, 0, 17.99, 0, 0, 0),
(17, 102, 90, 92, 1, '2020-03-02 18:51:06', 1, 0, 0, 10.99, 0, 0, 0),
(19, 117, 110, 113, 1, '2020-03-02 19:05:47', 1, 0, 0, 14.99, 0, 0, 0),
(21, 139, 120, 129, 2, '2020-03-02 20:43:14', 2147483647, 0, 0, 1e15, 0, 0, 0),
(22, 139, 120, 124, 2, '2020-03-02 20:43:14', 2147483647, 0, 0, 949499999999999.9, 0, 0, 0),
(23, 139, 120, 123, 2, '2020-03-02 20:43:14', 2147483647, 0, 0, 949499999999999.9, 0, 0, 0),
(24, 139, 120, 122, 2, '2020-03-02 20:43:14', 2147483647, 0, 0, 949499999999999.9, 0, 0, 0),
(25, 139, 120, 125, 2, '2020-03-02 20:43:14', 2147483647, 0, 0, 949499999999999.9, 0, 0, 0),
(26, 139, 120, 126, 2, '2020-03-02 20:43:14', 2147483647, 0, 0, 949499999999999.9, 0, 0, 0),
(27, 139, 120, 127, 2, '2020-03-02 20:43:14', 2147483647, 0, 0, 949499999999999.9, 0, 0, 0),
(28, 139, 120, 128, 2, '2020-03-02 20:43:14', 2147483647, 0, 0, 949499999999999.9, 0, 0, 0),
(30, 141, 90, 94, 2, '2020-03-03 15:23:05', 1, 0, 0, 17.99, 0, 0, 0),
(32, 164, 90, 93, 2, '2020-03-09 16:27:43', 1, 0, 0, 14.99, 0, 0, 0),
(33, 164, 120, 129, 2, '2020-03-09 16:27:43', 1, 0, 0, 20, 0, 0, 0),
(34, 164, 120, 125, 2, '2020-03-09 16:27:43', 1, 0, 0, 18.99, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_wc_order_stats`
--

CREATE TABLE `wp_wc_order_stats` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_created_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `num_items_sold` int(11) NOT NULL DEFAULT '0',
  `total_sales` double NOT NULL DEFAULT '0',
  `tax_total` double NOT NULL DEFAULT '0',
  `shipping_total` double NOT NULL DEFAULT '0',
  `net_total` double NOT NULL DEFAULT '0',
  `returning_customer` tinyint(1) DEFAULT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_wc_order_stats`
--

INSERT INTO `wp_wc_order_stats` (`order_id`, `parent_id`, `date_created`, `date_created_gmt`, `num_items_sold`, `total_sales`, `tax_total`, `shipping_total`, `net_total`, `returning_customer`, `status`, `customer_id`) VALUES
(33, 0, '2020-02-28 19:02:39', '2020-02-28 19:02:39', 2, 29.98, 0, 0, 29.98, 0, 'wc-cancelled', 1),
(47, 0, '2020-02-28 19:15:24', '2020-02-28 19:15:24', 2, 0, 0, 0, 0, 0, 'wc-completed', 1),
(50, 0, '2020-02-28 19:18:49', '2020-02-28 19:18:49', 1, 0, 0, 0, 0, 0, 'wc-completed', 2),
(52, 0, '2020-02-28 19:50:20', '2020-02-28 19:50:20', 120501236, 0, 0, 0, 0, 1, 'wc-completed', 2),
(56, 0, '2020-03-02 14:48:18', '2020-03-02 14:48:18', 1, 0, 0, 0, 0, 1, 'wc-completed', 2),
(68, 0, '2020-03-02 17:44:39', '2020-03-02 17:44:39', 1, 0, 0, 0, 0, 0, 'wc-completed', 3),
(96, 0, '2020-03-02 18:45:53', '2020-03-02 18:45:53', 3, 0, 0, 0, 0, 1, 'wc-completed', 1),
(99, 0, '2020-03-02 18:47:58', '2020-03-02 18:47:58', 1, 0, 0, 0, 0, 0, 'wc-completed', 4),
(102, 0, '2020-03-02 18:51:06', '2020-03-02 18:51:06', 1, 0, 0, 0, 0, 1, 'wc-completed', 1),
(117, 0, '2020-03-02 19:05:47', '2020-03-02 19:05:47', 1, 0, 0, 0, 0, 1, 'wc-completed', 1),
(139, 0, '2020-03-02 20:43:14', '2020-03-02 20:43:14', 2147483647, 0, 0, 0, 0, 1, 'wc-completed', 2),
(141, 0, '2020-03-03 15:23:05', '2020-03-03 15:23:05', 1, 0, 0, 0, 0, 1, 'wc-completed', 2),
(164, 0, '2020-03-09 16:27:43', '2020-03-09 16:27:43', 3, 0, 0, 0, 0, 1, 'wc-processing', 2);

-- --------------------------------------------------------

--
-- Table structure for table `wp_wc_order_tax_lookup`
--

CREATE TABLE `wp_wc_order_tax_lookup` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `tax_rate_id` bigint(20) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `shipping_tax` double NOT NULL DEFAULT '0',
  `order_tax` double NOT NULL DEFAULT '0',
  `total_tax` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_wc_product_meta_lookup`
--

CREATE TABLE `wp_wc_product_meta_lookup` (
  `product_id` bigint(20) NOT NULL,
  `sku` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT '',
  `virtual` tinyint(1) DEFAULT '0',
  `downloadable` tinyint(1) DEFAULT '0',
  `min_price` decimal(19,4) DEFAULT NULL,
  `max_price` decimal(19,4) DEFAULT NULL,
  `onsale` tinyint(1) DEFAULT '0',
  `stock_quantity` double DEFAULT NULL,
  `stock_status` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT 'instock',
  `rating_count` bigint(20) DEFAULT '0',
  `average_rating` decimal(3,2) DEFAULT '0.00',
  `total_sales` bigint(20) DEFAULT '0',
  `tax_status` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT 'taxable',
  `tax_class` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_wc_product_meta_lookup`
--

INSERT INTO `wp_wc_product_meta_lookup` (`product_id`, `sku`, `virtual`, `downloadable`, `min_price`, `max_price`, `onsale`, `stock_quantity`, `stock_status`, `rating_count`, `average_rating`, `total_sales`, `tax_status`, `tax_class`) VALUES
(29, NULL, 1, 1, '14.9900', '14.9900', 0, NULL, 'instock', 1, '5.00', 120501241, 'none', 'zero-rate'),
(90, 'Cheese Pizza', 0, 0, '7.9900', '17.9900', 0, NULL, 'instock', 0, '0.00', 7, 'none', 'zero-rate'),
(91, NULL, 1, 0, '7.9900', '7.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(92, NULL, 1, 0, '10.9900', '10.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(93, NULL, 1, 0, '14.9900', '14.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(94, NULL, 1, 0, '17.9900', '17.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(104, 'Sausage Pizza', 0, 0, '7.9900', '17.9900', 0, NULL, 'instock', 0, '0.00', 0, 'none', 'zero-rate'),
(105, NULL, 1, 0, '7.9900', '7.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(106, NULL, 1, 0, '10.9900', '10.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(107, NULL, 1, 0, '14.9900', '14.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(108, NULL, 1, 0, '17.9900', '17.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(110, NULL, 0, 0, '7.9900', '17.9900', 0, NULL, 'instock', 0, '0.00', 1, 'taxable', ''),
(111, NULL, 1, 0, '7.9900', '7.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(112, NULL, 1, 0, '10.9900', '10.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(113, NULL, 1, 0, '14.9900', '14.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(114, NULL, 0, 0, '17.9900', '17.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(119, NULL, 0, 0, '0.0000', '0.0000', 0, NULL, 'outofstock', 0, '0.00', 0, 'taxable', ''),
(120, NULL, 0, 0, '18.9900', '20.0000', 0, NULL, 'instock', 0, '0.00', 400000000000002, 'taxable', ''),
(122, NULL, 1, 0, '18.9900', '18.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(123, NULL, 1, 0, '18.9900', '18.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(124, NULL, 1, 0, '18.9900', '18.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(125, NULL, 1, 0, '18.9900', '18.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(126, NULL, 1, 0, '18.9900', '18.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(127, NULL, 1, 0, '18.9900', '18.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(128, NULL, 1, 0, '18.9900', '18.9900', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent'),
(129, NULL, 1, 0, '20.0000', '20.0000', 0, NULL, 'instock', 0, '0.00', 0, 'taxable', 'parent');

-- --------------------------------------------------------

--
-- Table structure for table `wp_wc_tax_rate_classes`
--

CREATE TABLE `wp_wc_tax_rate_classes` (
  `tax_rate_class_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_wc_tax_rate_classes`
--

INSERT INTO `wp_wc_tax_rate_classes` (`tax_rate_class_id`, `name`, `slug`) VALUES
(1, 'Reduced rate', 'reduced-rate'),
(2, 'Zero rate', 'zero-rate');

-- --------------------------------------------------------

--
-- Table structure for table `wp_wc_webhooks`
--

CREATE TABLE `wp_wc_webhooks` (
  `webhook_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `delivery_url` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `secret` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `topic` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_created_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `api_version` smallint(4) NOT NULL,
  `failure_count` smallint(10) NOT NULL DEFAULT '0',
  `pending_delivery` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_woocommerce_api_keys`
--

CREATE TABLE `wp_woocommerce_api_keys` (
  `key_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `permissions` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `consumer_key` char(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `consumer_secret` char(43) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nonces` longtext COLLATE utf8mb4_unicode_520_ci,
  `truncated_key` char(7) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `last_access` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_woocommerce_attribute_taxonomies`
--

CREATE TABLE `wp_woocommerce_attribute_taxonomies` (
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `attribute_label` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `attribute_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `attribute_orderby` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `attribute_public` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_woocommerce_downloadable_product_permissions`
--

CREATE TABLE `wp_woocommerce_downloadable_product_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `download_id` varchar(36) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `order_key` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_email` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `downloads_remaining` varchar(9) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `access_granted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `access_expires` datetime DEFAULT NULL,
  `download_count` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_woocommerce_downloadable_product_permissions`
--

INSERT INTO `wp_woocommerce_downloadable_product_permissions` (`permission_id`, `download_id`, `product_id`, `order_id`, `order_key`, `user_email`, `user_id`, `downloads_remaining`, `access_granted`, `access_expires`, `download_count`) VALUES
(1, 'eeee21a1-dda5-4a92-a678-5639c2cde963', 29, 47, 'wc_order_hsmh1q3aeAklO', '231603@shakopeeschools.org', 1, '', '2020-02-28 00:00:00', NULL, 1),
(2, 'eeee21a1-dda5-4a92-a678-5639c2cde963', 29, 50, 'wc_order_IrAtNTtnEcvRi', 'frametoby03@gmail.com', 0, '', '2020-02-28 00:00:00', NULL, 0),
(3, 'eeee21a1-dda5-4a92-a678-5639c2cde963', 29, 52, 'wc_order_SiudMLwJwxguZ', 'frametoby03@gmail.com', 0, '', '2020-02-28 00:00:00', NULL, 3),
(4, 'eeee21a1-dda5-4a92-a678-5639c2cde963', 29, 56, 'wc_order_iYAkJyS5wGj05', 'frametoby03@gmail.com', 0, '', '2020-03-02 00:00:00', NULL, 1),
(5, 'eeee21a1-dda5-4a92-a678-5639c2cde963', 29, 68, 'wc_order_QrZiXgMwEefpS', 'frametoby03@gmail.com', 2, '', '2020-03-02 00:00:00', NULL, 1),
(6, 'df6bfa84-229e-41fb-ba1b-13e223bd6b48', 93, 96, 'wc_order_YpFfOTjy2Ckao', '231603@shakopeeschools.org', 1, '', '2020-03-02 00:00:00', '2020-04-01 00:00:00', 1),
(7, '963897c9-9b86-4dcd-b7f2-1929f89bd7d5', 94, 96, 'wc_order_YpFfOTjy2Ckao', '231603@shakopeeschools.org', 1, '', '2020-03-02 00:00:00', '2020-04-01 00:00:00', 0),
(8, '963897c9-9b86-4dcd-b7f2-1929f89bd7d5', 94, 99, 'wc_order_Lt0BPW91sCJGq', 'framecollin03@gmail.com', 3, '', '2020-03-02 00:00:00', '2020-04-01 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_woocommerce_log`
--

CREATE TABLE `wp_woocommerce_log` (
  `log_id` bigint(20) UNSIGNED NOT NULL,
  `timestamp` datetime NOT NULL,
  `level` smallint(4) NOT NULL,
  `source` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `context` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_woocommerce_order_itemmeta`
--

CREATE TABLE `wp_woocommerce_order_itemmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `order_item_id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_woocommerce_order_itemmeta`
--

INSERT INTO `wp_woocommerce_order_itemmeta` (`meta_id`, `order_item_id`, `meta_key`, `meta_value`) VALUES
(1, 1, '_product_id', '29'),
(2, 1, '_variation_id', '0'),
(3, 1, '_qty', '2'),
(4, 1, '_tax_class', 'zero-rate'),
(5, 1, '_line_subtotal', '29.98'),
(6, 1, '_line_subtotal_tax', '0'),
(7, 1, '_line_total', '29.98'),
(8, 1, '_line_tax', '0'),
(9, 1, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(10, 2, '_product_id', '29'),
(11, 2, '_variation_id', '0'),
(12, 2, '_qty', '2'),
(13, 2, '_tax_class', 'zero-rate'),
(14, 2, '_line_subtotal', '29.98'),
(15, 2, '_line_subtotal_tax', '0'),
(16, 2, '_line_total', '0'),
(17, 2, '_line_tax', '0'),
(18, 2, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(19, 3, 'discount_amount', '29.98'),
(20, 3, 'discount_amount_tax', '0'),
(21, 3, 'coupon_data', 'a:24:{s:2:\"id\";i:45;s:4:\"code\";s:6:\"africa\";s:6:\"amount\";s:3:\"100\";s:12:\"date_created\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-02-28 19:14:37.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:13:\"date_modified\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-02-28 19:14:37.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:12:\"date_expires\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-02-29 00:00:00.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:13:\"discount_type\";s:7:\"percent\";s:11:\"description\";s:0:\"\";s:11:\"usage_count\";i:0;s:14:\"individual_use\";b:0;s:11:\"product_ids\";a:0:{}s:20:\"excluded_product_ids\";a:0:{}s:11:\"usage_limit\";i:0;s:20:\"usage_limit_per_user\";i:0;s:22:\"limit_usage_to_x_items\";N;s:13:\"free_shipping\";b:0;s:18:\"product_categories\";a:0:{}s:27:\"excluded_product_categories\";a:0:{}s:18:\"exclude_sale_items\";b:0;s:14:\"minimum_amount\";s:0:\"\";s:14:\"maximum_amount\";s:0:\"\";s:18:\"email_restrictions\";a:0:{}s:7:\"virtual\";b:0;s:9:\"meta_data\";a:0:{}}'),
(22, 4, '_product_id', '29'),
(23, 4, '_variation_id', '0'),
(24, 4, '_qty', '1'),
(25, 4, '_tax_class', 'zero-rate'),
(26, 4, '_line_subtotal', '14.99'),
(27, 4, '_line_subtotal_tax', '0'),
(28, 4, '_line_total', '0'),
(29, 4, '_line_tax', '0'),
(30, 4, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(31, 5, 'discount_amount', '14.99'),
(32, 5, 'discount_amount_tax', '0'),
(33, 5, 'coupon_data', 'a:24:{s:2:\"id\";i:45;s:4:\"code\";s:6:\"africa\";s:6:\"amount\";s:3:\"100\";s:12:\"date_created\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-02-28 19:14:37.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:13:\"date_modified\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-02-28 19:14:37.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:12:\"date_expires\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-02-29 00:00:00.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:13:\"discount_type\";s:7:\"percent\";s:11:\"description\";s:0:\"\";s:11:\"usage_count\";i:1;s:14:\"individual_use\";b:0;s:11:\"product_ids\";a:0:{}s:20:\"excluded_product_ids\";a:0:{}s:11:\"usage_limit\";i:0;s:20:\"usage_limit_per_user\";i:0;s:22:\"limit_usage_to_x_items\";N;s:13:\"free_shipping\";b:0;s:18:\"product_categories\";a:0:{}s:27:\"excluded_product_categories\";a:0:{}s:18:\"exclude_sale_items\";b:0;s:14:\"minimum_amount\";s:0:\"\";s:14:\"maximum_amount\";s:0:\"\";s:18:\"email_restrictions\";a:0:{}s:7:\"virtual\";b:0;s:9:\"meta_data\";a:0:{}}'),
(34, 6, '_product_id', '29'),
(35, 6, '_variation_id', '0'),
(36, 6, '_qty', '120501236'),
(37, 6, '_tax_class', 'zero-rate'),
(38, 6, '_line_subtotal', '1806313527.64'),
(39, 6, '_line_subtotal_tax', '0'),
(40, 6, '_line_total', '0'),
(41, 6, '_line_tax', '0'),
(42, 6, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(43, 7, 'discount_amount', '1806313527.64'),
(44, 7, 'discount_amount_tax', '0'),
(45, 7, 'coupon_data', 'a:24:{s:2:\"id\";i:45;s:4:\"code\";s:6:\"africa\";s:6:\"amount\";s:3:\"100\";s:12:\"date_created\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-02-28 19:14:37.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:13:\"date_modified\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-02-28 19:14:37.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:12:\"date_expires\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-02-29 00:00:00.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:13:\"discount_type\";s:7:\"percent\";s:11:\"description\";s:0:\"\";s:11:\"usage_count\";i:2;s:14:\"individual_use\";b:0;s:11:\"product_ids\";a:0:{}s:20:\"excluded_product_ids\";a:0:{}s:11:\"usage_limit\";i:0;s:20:\"usage_limit_per_user\";i:0;s:22:\"limit_usage_to_x_items\";N;s:13:\"free_shipping\";b:0;s:18:\"product_categories\";a:0:{}s:27:\"excluded_product_categories\";a:0:{}s:18:\"exclude_sale_items\";b:0;s:14:\"minimum_amount\";s:0:\"\";s:14:\"maximum_amount\";s:0:\"\";s:18:\"email_restrictions\";a:0:{}s:7:\"virtual\";b:0;s:9:\"meta_data\";a:0:{}}'),
(46, 8, '_product_id', '29'),
(47, 8, '_variation_id', '0'),
(48, 8, '_qty', '1'),
(49, 8, '_tax_class', 'zero-rate'),
(50, 8, '_line_subtotal', '14.99'),
(51, 8, '_line_subtotal_tax', '0'),
(52, 8, '_line_total', '0'),
(53, 8, '_line_tax', '0'),
(54, 8, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(55, 9, 'discount_amount', '14.99'),
(56, 9, 'discount_amount_tax', '0'),
(57, 9, 'coupon_data', 'a:24:{s:2:\"id\";i:54;s:4:\"code\";s:17:\"cbf924815ppjshako\";s:6:\"amount\";s:3:\"100\";s:12:\"date_created\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:21:01.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:13:\"date_modified\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:42:04.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:12:\"date_expires\";N;s:13:\"discount_type\";s:7:\"percent\";s:11:\"description\";s:0:\"\";s:11:\"usage_count\";i:0;s:14:\"individual_use\";b:0;s:11:\"product_ids\";a:0:{}s:20:\"excluded_product_ids\";a:0:{}s:11:\"usage_limit\";i:0;s:20:\"usage_limit_per_user\";i:0;s:22:\"limit_usage_to_x_items\";N;s:13:\"free_shipping\";b:0;s:18:\"product_categories\";a:0:{}s:27:\"excluded_product_categories\";a:0:{}s:18:\"exclude_sale_items\";b:0;s:14:\"minimum_amount\";s:0:\"\";s:14:\"maximum_amount\";s:0:\"\";s:18:\"email_restrictions\";a:0:{}s:7:\"virtual\";b:0;s:9:\"meta_data\";a:0:{}}'),
(58, 10, '_product_id', '29'),
(59, 10, '_variation_id', '0'),
(60, 10, '_qty', '1'),
(61, 10, '_tax_class', 'zero-rate'),
(62, 10, '_line_subtotal', '14.99'),
(63, 10, '_line_subtotal_tax', '0'),
(64, 10, '_line_total', '0'),
(65, 10, '_line_tax', '0'),
(66, 10, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(67, 11, 'discount_amount', '14.99'),
(68, 11, 'discount_amount_tax', '0'),
(69, 11, 'coupon_data', 'a:24:{s:2:\"id\";i:54;s:4:\"code\";s:17:\"cbf924815ppjshako\";s:6:\"amount\";s:3:\"100\";s:12:\"date_created\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:21:01.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:13:\"date_modified\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:42:04.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:12:\"date_expires\";N;s:13:\"discount_type\";s:7:\"percent\";s:11:\"description\";s:0:\"\";s:11:\"usage_count\";i:1;s:14:\"individual_use\";b:0;s:11:\"product_ids\";a:0:{}s:20:\"excluded_product_ids\";a:0:{}s:11:\"usage_limit\";i:0;s:20:\"usage_limit_per_user\";i:0;s:22:\"limit_usage_to_x_items\";N;s:13:\"free_shipping\";b:0;s:18:\"product_categories\";a:0:{}s:27:\"excluded_product_categories\";a:0:{}s:18:\"exclude_sale_items\";b:0;s:14:\"minimum_amount\";s:0:\"\";s:14:\"maximum_amount\";s:0:\"\";s:18:\"email_restrictions\";a:0:{}s:7:\"virtual\";b:0;s:9:\"meta_data\";a:0:{}}'),
(70, 12, '_product_id', '90'),
(71, 12, '_variation_id', '93'),
(72, 12, '_qty', '2'),
(73, 12, '_tax_class', 'zero-rate'),
(74, 12, '_line_subtotal', '29.98'),
(75, 12, '_line_subtotal_tax', '0'),
(76, 12, '_line_total', '0'),
(77, 12, '_line_tax', '0'),
(78, 12, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(79, 12, 'size', 'Large 14.99'),
(80, 13, '_product_id', '90'),
(81, 13, '_variation_id', '94'),
(82, 13, '_qty', '1'),
(83, 13, '_tax_class', 'zero-rate'),
(84, 13, '_line_subtotal', '17.99'),
(85, 13, '_line_subtotal_tax', '0'),
(86, 13, '_line_total', '0'),
(87, 13, '_line_tax', '0'),
(88, 13, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(89, 13, 'size', 'Extra Large 17.99'),
(90, 14, 'discount_amount', '47.97'),
(91, 14, 'discount_amount_tax', '0'),
(92, 14, 'coupon_data', 'a:24:{s:2:\"id\";i:54;s:4:\"code\";s:17:\"cbf924815ppjshako\";s:6:\"amount\";s:3:\"100\";s:12:\"date_created\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:21:01.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:13:\"date_modified\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:42:04.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:12:\"date_expires\";N;s:13:\"discount_type\";s:7:\"percent\";s:11:\"description\";s:0:\"\";s:11:\"usage_count\";i:2;s:14:\"individual_use\";b:0;s:11:\"product_ids\";a:0:{}s:20:\"excluded_product_ids\";a:0:{}s:11:\"usage_limit\";i:0;s:20:\"usage_limit_per_user\";i:0;s:22:\"limit_usage_to_x_items\";N;s:13:\"free_shipping\";b:0;s:18:\"product_categories\";a:0:{}s:27:\"excluded_product_categories\";a:0:{}s:18:\"exclude_sale_items\";b:0;s:14:\"minimum_amount\";s:0:\"\";s:14:\"maximum_amount\";s:0:\"\";s:18:\"email_restrictions\";a:0:{}s:7:\"virtual\";b:0;s:9:\"meta_data\";a:0:{}}'),
(93, 15, '_product_id', '90'),
(94, 15, '_variation_id', '94'),
(95, 15, '_qty', '1'),
(96, 15, '_tax_class', 'zero-rate'),
(97, 15, '_line_subtotal', '17.99'),
(98, 15, '_line_subtotal_tax', '0'),
(99, 15, '_line_total', '0'),
(100, 15, '_line_tax', '0'),
(101, 15, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(102, 15, 'size', 'Extra Large 17.99'),
(103, 16, 'discount_amount', '17.99'),
(104, 16, 'discount_amount_tax', '0'),
(105, 16, 'coupon_data', 'a:24:{s:2:\"id\";i:54;s:4:\"code\";s:17:\"cbf924815ppjshako\";s:6:\"amount\";s:3:\"100\";s:12:\"date_created\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:21:01.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:13:\"date_modified\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:42:04.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:12:\"date_expires\";N;s:13:\"discount_type\";s:7:\"percent\";s:11:\"description\";s:0:\"\";s:11:\"usage_count\";i:3;s:14:\"individual_use\";b:0;s:11:\"product_ids\";a:0:{}s:20:\"excluded_product_ids\";a:0:{}s:11:\"usage_limit\";i:0;s:20:\"usage_limit_per_user\";i:0;s:22:\"limit_usage_to_x_items\";N;s:13:\"free_shipping\";b:0;s:18:\"product_categories\";a:0:{}s:27:\"excluded_product_categories\";a:0:{}s:18:\"exclude_sale_items\";b:0;s:14:\"minimum_amount\";s:0:\"\";s:14:\"maximum_amount\";s:0:\"\";s:18:\"email_restrictions\";a:0:{}s:7:\"virtual\";b:0;s:9:\"meta_data\";a:0:{}}'),
(106, 17, '_product_id', '90'),
(107, 17, '_variation_id', '92'),
(108, 17, '_qty', '1'),
(109, 17, '_tax_class', 'zero-rate'),
(110, 17, '_line_subtotal', '10.99'),
(111, 17, '_line_subtotal_tax', '0'),
(112, 17, '_line_total', '0'),
(113, 17, '_line_tax', '0'),
(114, 17, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(115, 17, 'size', 'Medium 10.99'),
(116, 18, 'discount_amount', '10.99'),
(117, 18, 'discount_amount_tax', '0'),
(118, 18, 'coupon_data', 'a:24:{s:2:\"id\";i:54;s:4:\"code\";s:17:\"cbf924815ppjshako\";s:6:\"amount\";s:3:\"100\";s:12:\"date_created\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:21:01.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:13:\"date_modified\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:42:04.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:12:\"date_expires\";N;s:13:\"discount_type\";s:7:\"percent\";s:11:\"description\";s:0:\"\";s:11:\"usage_count\";i:4;s:14:\"individual_use\";b:0;s:11:\"product_ids\";a:0:{}s:20:\"excluded_product_ids\";a:0:{}s:11:\"usage_limit\";i:0;s:20:\"usage_limit_per_user\";i:0;s:22:\"limit_usage_to_x_items\";N;s:13:\"free_shipping\";b:0;s:18:\"product_categories\";a:0:{}s:27:\"excluded_product_categories\";a:0:{}s:18:\"exclude_sale_items\";b:0;s:14:\"minimum_amount\";s:0:\"\";s:14:\"maximum_amount\";s:0:\"\";s:18:\"email_restrictions\";a:0:{}s:7:\"virtual\";b:0;s:9:\"meta_data\";a:0:{}}'),
(119, 19, '_product_id', '110'),
(120, 19, '_variation_id', '113'),
(121, 19, '_qty', '1'),
(122, 19, '_tax_class', ''),
(123, 19, '_line_subtotal', '14.99'),
(124, 19, '_line_subtotal_tax', '0'),
(125, 19, '_line_total', '0'),
(126, 19, '_line_tax', '0'),
(127, 19, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(128, 19, 'size', 'Large 14.99'),
(129, 20, 'discount_amount', '14.99'),
(130, 20, 'discount_amount_tax', '0'),
(131, 20, 'coupon_data', 'a:24:{s:2:\"id\";i:54;s:4:\"code\";s:17:\"cbf924815ppjshako\";s:6:\"amount\";s:3:\"100\";s:12:\"date_created\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:21:01.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:13:\"date_modified\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:42:04.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:12:\"date_expires\";N;s:13:\"discount_type\";s:7:\"percent\";s:11:\"description\";s:0:\"\";s:11:\"usage_count\";i:5;s:14:\"individual_use\";b:0;s:11:\"product_ids\";a:0:{}s:20:\"excluded_product_ids\";a:0:{}s:11:\"usage_limit\";i:0;s:20:\"usage_limit_per_user\";i:0;s:22:\"limit_usage_to_x_items\";N;s:13:\"free_shipping\";b:0;s:18:\"product_categories\";a:0:{}s:27:\"excluded_product_categories\";a:0:{}s:18:\"exclude_sale_items\";b:0;s:14:\"minimum_amount\";s:0:\"\";s:14:\"maximum_amount\";s:0:\"\";s:18:\"email_restrictions\";a:0:{}s:7:\"virtual\";b:0;s:9:\"meta_data\";a:0:{}}'),
(132, 21, '_product_id', '120'),
(133, 21, '_variation_id', '129'),
(134, 21, '_qty', '50000000000000'),
(135, 21, '_tax_class', ''),
(136, 21, '_line_subtotal', '1000000000000000'),
(137, 21, '_line_subtotal_tax', '0'),
(138, 21, '_line_total', '0'),
(139, 21, '_line_tax', '0'),
(140, 21, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(141, 21, 'size', 'Heart Shaped Pizza $20'),
(142, 22, '_product_id', '120'),
(143, 22, '_variation_id', '124'),
(144, 22, '_qty', '50000000000000'),
(145, 22, '_tax_class', ''),
(146, 22, '_line_subtotal', '949499999999999.875'),
(147, 22, '_line_subtotal_tax', '0'),
(148, 22, '_line_total', '0'),
(149, 22, '_line_tax', '0'),
(150, 22, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(151, 22, 'size', 'Meatball Papperoni $18.99'),
(152, 23, '_product_id', '120'),
(153, 23, '_variation_id', '123'),
(154, 23, '_qty', '50000000000000'),
(155, 23, '_tax_class', ''),
(156, 23, '_line_subtotal', '949499999999999.875'),
(157, 23, '_line_subtotal_tax', '0'),
(158, 23, '_line_total', '0'),
(159, 23, '_line_tax', '0'),
(160, 23, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(161, 23, 'size', 'The Meats $18.99'),
(162, 24, '_product_id', '120'),
(163, 24, '_variation_id', '122'),
(164, 24, '_qty', '50000000000000'),
(165, 24, '_tax_class', ''),
(166, 24, '_line_subtotal', '949499999999999.875'),
(167, 24, '_line_subtotal_tax', '0'),
(168, 24, '_line_total', '0'),
(169, 24, '_line_tax', '0'),
(170, 24, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(171, 24, 'size', 'The Works $18.99'),
(172, 25, '_product_id', '120'),
(173, 25, '_variation_id', '125'),
(174, 25, '_qty', '50000000000000'),
(175, 25, '_tax_class', ''),
(176, 25, '_line_subtotal', '949499999999999.875'),
(177, 25, '_line_subtotal_tax', '0'),
(178, 25, '_line_total', '0'),
(179, 25, '_line_tax', '0'),
(180, 25, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(181, 25, 'size', 'Tuscan Six Cheese $18.99'),
(182, 26, '_product_id', '120'),
(183, 26, '_variation_id', '126'),
(184, 26, '_qty', '50000000000000'),
(185, 26, '_tax_class', ''),
(186, 26, '_line_subtotal', '949499999999999.875'),
(187, 26, '_line_subtotal_tax', '0'),
(188, 26, '_line_total', '0'),
(189, 26, '_line_tax', '0'),
(190, 26, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(191, 26, 'size', 'Garden Fresh $18.99'),
(192, 27, '_product_id', '120'),
(193, 27, '_variation_id', '127'),
(194, 27, '_qty', '50000000000000'),
(195, 27, '_tax_class', ''),
(196, 27, '_line_subtotal', '949499999999999.875'),
(197, 27, '_line_subtotal_tax', '0'),
(198, 27, '_line_total', '0'),
(199, 27, '_line_tax', '0'),
(200, 27, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(201, 27, 'size', 'Fresh Spinach & Tomato Alfredo $18.99'),
(202, 28, '_product_id', '120'),
(203, 28, '_variation_id', '128'),
(204, 28, '_qty', '50000000000000'),
(205, 28, '_tax_class', ''),
(206, 28, '_line_subtotal', '949499999999999.875'),
(207, 28, '_line_subtotal_tax', '0'),
(208, 28, '_line_total', '0'),
(209, 28, '_line_tax', '0'),
(210, 28, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(211, 28, 'size', 'Extra Cheesy Alfredo $18.99'),
(212, 29, 'discount_amount', '7646500000000000'),
(213, 29, 'discount_amount_tax', '0'),
(214, 29, 'coupon_data', 'a:24:{s:2:\"id\";i:54;s:4:\"code\";s:17:\"cbf924815ppjshako\";s:6:\"amount\";s:3:\"100\";s:12:\"date_created\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:21:01.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:13:\"date_modified\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:42:04.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:12:\"date_expires\";N;s:13:\"discount_type\";s:7:\"percent\";s:11:\"description\";s:0:\"\";s:11:\"usage_count\";i:6;s:14:\"individual_use\";b:0;s:11:\"product_ids\";a:0:{}s:20:\"excluded_product_ids\";a:0:{}s:11:\"usage_limit\";i:0;s:20:\"usage_limit_per_user\";i:0;s:22:\"limit_usage_to_x_items\";N;s:13:\"free_shipping\";b:0;s:18:\"product_categories\";a:0:{}s:27:\"excluded_product_categories\";a:0:{}s:18:\"exclude_sale_items\";b:0;s:14:\"minimum_amount\";s:0:\"\";s:14:\"maximum_amount\";s:0:\"\";s:18:\"email_restrictions\";a:0:{}s:7:\"virtual\";b:0;s:9:\"meta_data\";a:0:{}}'),
(215, 30, '_product_id', '90'),
(216, 30, '_variation_id', '94'),
(217, 30, '_qty', '1'),
(218, 30, '_tax_class', 'zero-rate'),
(219, 30, '_line_subtotal', '17.99'),
(220, 30, '_line_subtotal_tax', '0'),
(221, 30, '_line_total', '0'),
(222, 30, '_line_tax', '0'),
(223, 30, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(224, 30, 'size', 'Extra Large 17.99'),
(225, 31, 'discount_amount', '17.99'),
(226, 31, 'discount_amount_tax', '0'),
(227, 31, 'coupon_data', 'a:24:{s:2:\"id\";i:54;s:4:\"code\";s:17:\"cbf924815ppjshako\";s:6:\"amount\";s:3:\"100\";s:12:\"date_created\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:21:01.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:13:\"date_modified\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:42:04.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:12:\"date_expires\";N;s:13:\"discount_type\";s:7:\"percent\";s:11:\"description\";s:0:\"\";s:11:\"usage_count\";i:7;s:14:\"individual_use\";b:0;s:11:\"product_ids\";a:0:{}s:20:\"excluded_product_ids\";a:0:{}s:11:\"usage_limit\";i:0;s:20:\"usage_limit_per_user\";i:0;s:22:\"limit_usage_to_x_items\";N;s:13:\"free_shipping\";b:0;s:18:\"product_categories\";a:0:{}s:27:\"excluded_product_categories\";a:0:{}s:18:\"exclude_sale_items\";b:0;s:14:\"minimum_amount\";s:0:\"\";s:14:\"maximum_amount\";s:0:\"\";s:18:\"email_restrictions\";a:0:{}s:7:\"virtual\";b:0;s:9:\"meta_data\";a:0:{}}'),
(228, 32, '_product_id', '90'),
(229, 32, '_variation_id', '93'),
(230, 32, '_qty', '1'),
(231, 32, '_tax_class', 'zero-rate'),
(232, 32, '_line_subtotal', '14.99'),
(233, 32, '_line_subtotal_tax', '0'),
(234, 32, '_line_total', '0'),
(235, 32, '_line_tax', '0'),
(236, 32, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(237, 32, 'size', 'Large 14.99'),
(238, 33, '_product_id', '120'),
(239, 33, '_variation_id', '129'),
(240, 33, '_qty', '1'),
(241, 33, '_tax_class', ''),
(242, 33, '_line_subtotal', '20'),
(243, 33, '_line_subtotal_tax', '0'),
(244, 33, '_line_total', '0'),
(245, 33, '_line_tax', '0'),
(246, 33, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(247, 33, 'size', 'Heart Shaped Pizza $20'),
(248, 34, '_product_id', '120'),
(249, 34, '_variation_id', '125'),
(250, 34, '_qty', '1'),
(251, 34, '_tax_class', ''),
(252, 34, '_line_subtotal', '18.99'),
(253, 34, '_line_subtotal_tax', '0'),
(254, 34, '_line_total', '0'),
(255, 34, '_line_tax', '0'),
(256, 34, '_line_tax_data', 'a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}'),
(257, 34, 'size', 'Tuscan Six Cheese $18.99'),
(258, 35, 'discount_amount', '53.98'),
(259, 35, 'discount_amount_tax', '0'),
(260, 35, 'coupon_data', 'a:24:{s:2:\"id\";i:54;s:4:\"code\";s:17:\"cbf924815ppjshako\";s:6:\"amount\";s:3:\"100\";s:12:\"date_created\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:21:01.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:13:\"date_modified\";O:11:\"WC_DateTime\":4:{s:13:\"\0*\0utc_offset\";i:0;s:4:\"date\";s:26:\"2020-03-02 14:42:04.000000\";s:13:\"timezone_type\";i:1;s:8:\"timezone\";s:6:\"+00:00\";}s:12:\"date_expires\";N;s:13:\"discount_type\";s:7:\"percent\";s:11:\"description\";s:0:\"\";s:11:\"usage_count\";i:8;s:14:\"individual_use\";b:0;s:11:\"product_ids\";a:0:{}s:20:\"excluded_product_ids\";a:0:{}s:11:\"usage_limit\";i:0;s:20:\"usage_limit_per_user\";i:0;s:22:\"limit_usage_to_x_items\";N;s:13:\"free_shipping\";b:0;s:18:\"product_categories\";a:0:{}s:27:\"excluded_product_categories\";a:0:{}s:18:\"exclude_sale_items\";b:0;s:14:\"minimum_amount\";s:0:\"\";s:14:\"maximum_amount\";s:0:\"\";s:18:\"email_restrictions\";a:0:{}s:7:\"virtual\";b:0;s:9:\"meta_data\";a:0:{}}');

-- --------------------------------------------------------

--
-- Table structure for table `wp_woocommerce_order_items`
--

CREATE TABLE `wp_woocommerce_order_items` (
  `order_item_id` bigint(20) UNSIGNED NOT NULL,
  `order_item_name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `order_item_type` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `order_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_woocommerce_order_items`
--

INSERT INTO `wp_woocommerce_order_items` (`order_item_id`, `order_item_name`, `order_item_type`, `order_id`) VALUES
(1, 'Large Cheese Pizza', 'line_item', 33),
(2, 'Large Cheese Pizza', 'line_item', 47),
(3, 'africa', 'coupon', 47),
(4, 'Large Cheese Pizza', 'line_item', 50),
(5, 'africa', 'coupon', 50),
(6, 'Large Cheese Pizza', 'line_item', 52),
(7, 'africa', 'coupon', 52),
(8, 'Large Cheese Pizza', 'line_item', 56),
(9, 'cbf924815ppjshako', 'coupon', 56),
(10, 'Large Cheese Pizza', 'line_item', 68),
(11, 'cbf924815ppjshako', 'coupon', 68),
(12, 'Cheese Pizza - Large 14.99', 'line_item', 96),
(13, 'Cheese Pizza - Extra Large 17.99', 'line_item', 96),
(14, 'cbf924815ppjshako', 'coupon', 96),
(15, 'Cheese Pizza - Extra Large 17.99', 'line_item', 99),
(16, 'cbf924815ppjshako', 'coupon', 99),
(17, 'Cheese Pizza - Medium 10.99', 'line_item', 102),
(18, 'cbf924815ppjshako', 'coupon', 102),
(19, 'Pepperoni - Large 14.99', 'line_item', 117),
(20, 'cbf924815ppjshako', 'coupon', 117),
(21, 'Specialty Pizza - Heart Shaped Pizza $20', 'line_item', 139),
(22, 'Specialty Pizza - Meatball Papperoni $18.99', 'line_item', 139),
(23, 'Specialty Pizza - The Meats $18.99', 'line_item', 139),
(24, 'Specialty Pizza - The Works $18.99', 'line_item', 139),
(25, 'Specialty Pizza - Tuscan Six Cheese $18.99', 'line_item', 139),
(26, 'Specialty Pizza - Garden Fresh $18.99', 'line_item', 139),
(27, 'Specialty Pizza - Fresh Spinach & Tomato Alfredo $18.99', 'line_item', 139),
(28, 'Specialty Pizza - Extra Cheesy Alfredo $18.99', 'line_item', 139),
(29, 'cbf924815ppjshako', 'coupon', 139),
(30, 'Cheese Pizza - Extra Large 17.99', 'line_item', 141),
(31, 'cbf924815ppjshako', 'coupon', 141),
(32, 'Cheese Pizza - Large 14.99', 'line_item', 164),
(33, 'Specialty Pizza - Heart Shaped Pizza $20', 'line_item', 164),
(34, 'Specialty Pizza - Tuscan Six Cheese $18.99', 'line_item', 164),
(35, 'cbf924815ppjshako', 'coupon', 164);

-- --------------------------------------------------------

--
-- Table structure for table `wp_woocommerce_payment_tokenmeta`
--

CREATE TABLE `wp_woocommerce_payment_tokenmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `payment_token_id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_woocommerce_payment_tokens`
--

CREATE TABLE `wp_woocommerce_payment_tokens` (
  `token_id` bigint(20) UNSIGNED NOT NULL,
  `gateway_id` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `type` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_woocommerce_sessions`
--

CREATE TABLE `wp_woocommerce_sessions` (
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `session_key` char(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `session_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `session_expiry` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_woocommerce_sessions`
--

INSERT INTO `wp_woocommerce_sessions` (`session_id`, `session_key`, `session_value`, `session_expiry`) VALUES
(246, '2efbc04fc9b3e99e8ed1b3911ea669df', 'a:1:{s:8:\"customer\";s:744:\"a:26:{s:2:\"id\";s:1:\"1\";s:13:\"date_modified\";s:25:\"2020-04-07T16:04:19+00:00\";s:8:\"postcode\";s:0:\"\";s:4:\"city\";s:0:\"\";s:9:\"address_1\";s:0:\"\";s:7:\"address\";s:0:\"\";s:9:\"address_2\";s:0:\"\";s:5:\"state\";s:2:\"MN\";s:7:\"country\";s:2:\"US\";s:17:\"shipping_postcode\";s:0:\"\";s:13:\"shipping_city\";s:0:\"\";s:18:\"shipping_address_1\";s:0:\"\";s:16:\"shipping_address\";s:0:\"\";s:18:\"shipping_address_2\";s:0:\"\";s:14:\"shipping_state\";s:2:\"MN\";s:16:\"shipping_country\";s:2:\"US\";s:13:\"is_vat_exempt\";s:0:\"\";s:19:\"calculated_shipping\";s:0:\"\";s:10:\"first_name\";s:0:\"\";s:9:\"last_name\";s:0:\"\";s:7:\"company\";s:0:\"\";s:5:\"phone\";s:0:\"\";s:5:\"email\";s:26:\"231603@shakopeeschools.org\";s:19:\"shipping_first_name\";s:0:\"\";s:18:\"shipping_last_name\";s:0:\"\";s:16:\"shipping_company\";s:0:\"\";}\";}', 1586448126),
(248, '1', 'a:7:{s:4:\"cart\";s:6:\"a:0:{}\";s:11:\"cart_totals\";s:367:\"a:15:{s:8:\"subtotal\";i:0;s:12:\"subtotal_tax\";i:0;s:14:\"shipping_total\";i:0;s:12:\"shipping_tax\";i:0;s:14:\"shipping_taxes\";a:0:{}s:14:\"discount_total\";i:0;s:12:\"discount_tax\";i:0;s:19:\"cart_contents_total\";i:0;s:17:\"cart_contents_tax\";i:0;s:19:\"cart_contents_taxes\";a:0:{}s:9:\"fee_total\";i:0;s:7:\"fee_tax\";i:0;s:9:\"fee_taxes\";a:0:{}s:5:\"total\";i:0;s:9:\"total_tax\";i:0;}\";s:15:\"applied_coupons\";s:6:\"a:0:{}\";s:22:\"coupon_discount_totals\";s:6:\"a:0:{}\";s:26:\"coupon_discount_tax_totals\";s:6:\"a:0:{}\";s:21:\"removed_cart_contents\";s:6:\"a:0:{}\";s:8:\"customer\";s:744:\"a:26:{s:2:\"id\";s:1:\"1\";s:13:\"date_modified\";s:25:\"2020-04-07T16:04:19+00:00\";s:8:\"postcode\";s:0:\"\";s:4:\"city\";s:0:\"\";s:9:\"address_1\";s:0:\"\";s:7:\"address\";s:0:\"\";s:9:\"address_2\";s:0:\"\";s:5:\"state\";s:2:\"MN\";s:7:\"country\";s:2:\"US\";s:17:\"shipping_postcode\";s:0:\"\";s:13:\"shipping_city\";s:0:\"\";s:18:\"shipping_address_1\";s:0:\"\";s:16:\"shipping_address\";s:0:\"\";s:18:\"shipping_address_2\";s:0:\"\";s:14:\"shipping_state\";s:2:\"MN\";s:16:\"shipping_country\";s:2:\"US\";s:13:\"is_vat_exempt\";s:0:\"\";s:19:\"calculated_shipping\";s:0:\"\";s:10:\"first_name\";s:0:\"\";s:9:\"last_name\";s:0:\"\";s:7:\"company\";s:0:\"\";s:5:\"phone\";s:0:\"\";s:5:\"email\";s:26:\"231603@shakopeeschools.org\";s:19:\"shipping_first_name\";s:0:\"\";s:18:\"shipping_last_name\";s:0:\"\";s:16:\"shipping_company\";s:0:\"\";}\";}', 1586448761);

-- --------------------------------------------------------

--
-- Table structure for table `wp_woocommerce_shipping_zones`
--

CREATE TABLE `wp_woocommerce_shipping_zones` (
  `zone_id` bigint(20) UNSIGNED NOT NULL,
  `zone_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `zone_order` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_woocommerce_shipping_zone_locations`
--

CREATE TABLE `wp_woocommerce_shipping_zone_locations` (
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `zone_id` bigint(20) UNSIGNED NOT NULL,
  `location_code` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `location_type` varchar(40) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_woocommerce_shipping_zone_methods`
--

CREATE TABLE `wp_woocommerce_shipping_zone_methods` (
  `zone_id` bigint(20) UNSIGNED NOT NULL,
  `instance_id` bigint(20) UNSIGNED NOT NULL,
  `method_id` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `method_order` bigint(20) UNSIGNED NOT NULL,
  `is_enabled` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_woocommerce_tax_rates`
--

CREATE TABLE `wp_woocommerce_tax_rates` (
  `tax_rate_id` bigint(20) UNSIGNED NOT NULL,
  `tax_rate_country` varchar(2) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `tax_rate_state` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `tax_rate` varchar(8) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `tax_rate_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `tax_rate_priority` bigint(20) UNSIGNED NOT NULL,
  `tax_rate_compound` int(1) NOT NULL DEFAULT '0',
  `tax_rate_shipping` int(1) NOT NULL DEFAULT '1',
  `tax_rate_order` bigint(20) UNSIGNED NOT NULL,
  `tax_rate_class` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_woocommerce_tax_rate_locations`
--

CREATE TABLE `wp_woocommerce_tax_rate_locations` (
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `location_code` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tax_rate_id` bigint(20) UNSIGNED NOT NULL,
  `location_type` varchar(40) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_actionscheduler_actions`
--
ALTER TABLE `wp_actionscheduler_actions`
  ADD PRIMARY KEY (`action_id`),
  ADD KEY `hook` (`hook`),
  ADD KEY `status` (`status`),
  ADD KEY `scheduled_date_gmt` (`scheduled_date_gmt`),
  ADD KEY `args` (`args`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `last_attempt_gmt` (`last_attempt_gmt`),
  ADD KEY `claim_id` (`claim_id`);

--
-- Indexes for table `wp_actionscheduler_claims`
--
ALTER TABLE `wp_actionscheduler_claims`
  ADD PRIMARY KEY (`claim_id`),
  ADD KEY `date_created_gmt` (`date_created_gmt`);

--
-- Indexes for table `wp_actionscheduler_groups`
--
ALTER TABLE `wp_actionscheduler_groups`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `slug` (`slug`(191));

--
-- Indexes for table `wp_actionscheduler_logs`
--
ALTER TABLE `wp_actionscheduler_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `action_id` (`action_id`),
  ADD KEY `log_date_gmt` (`log_date_gmt`);

--
-- Indexes for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10)),
  ADD KEY `woo_idx_comment_type` (`comment_type`);

--
-- Indexes for table `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Indexes for table `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`),
  ADD KEY `autoload` (`autoload`);

--
-- Indexes for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Indexes for table `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indexes for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Indexes for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- Indexes for table `wp_user_registration_sessions`
--
ALTER TABLE `wp_user_registration_sessions`
  ADD PRIMARY KEY (`session_key`),
  ADD UNIQUE KEY `session_id` (`session_id`);

--
-- Indexes for table `wp_wc_admin_notes`
--
ALTER TABLE `wp_wc_admin_notes`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `wp_wc_admin_note_actions`
--
ALTER TABLE `wp_wc_admin_note_actions`
  ADD PRIMARY KEY (`action_id`),
  ADD KEY `note_id` (`note_id`);

--
-- Indexes for table `wp_wc_category_lookup`
--
ALTER TABLE `wp_wc_category_lookup`
  ADD PRIMARY KEY (`category_tree_id`,`category_id`);

--
-- Indexes for table `wp_wc_customer_lookup`
--
ALTER TABLE `wp_wc_customer_lookup`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `wp_wc_download_log`
--
ALTER TABLE `wp_wc_download_log`
  ADD PRIMARY KEY (`download_log_id`),
  ADD KEY `permission_id` (`permission_id`),
  ADD KEY `timestamp` (`timestamp`);

--
-- Indexes for table `wp_wc_order_coupon_lookup`
--
ALTER TABLE `wp_wc_order_coupon_lookup`
  ADD PRIMARY KEY (`order_id`,`coupon_id`),
  ADD KEY `coupon_id` (`coupon_id`),
  ADD KEY `date_created` (`date_created`);

--
-- Indexes for table `wp_wc_order_product_lookup`
--
ALTER TABLE `wp_wc_order_product_lookup`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `date_created` (`date_created`);

--
-- Indexes for table `wp_wc_order_stats`
--
ALTER TABLE `wp_wc_order_stats`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `date_created` (`date_created`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `status` (`status`(191));

--
-- Indexes for table `wp_wc_order_tax_lookup`
--
ALTER TABLE `wp_wc_order_tax_lookup`
  ADD PRIMARY KEY (`order_id`,`tax_rate_id`),
  ADD KEY `tax_rate_id` (`tax_rate_id`),
  ADD KEY `date_created` (`date_created`);

--
-- Indexes for table `wp_wc_product_meta_lookup`
--
ALTER TABLE `wp_wc_product_meta_lookup`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `virtual` (`virtual`),
  ADD KEY `downloadable` (`downloadable`),
  ADD KEY `stock_status` (`stock_status`),
  ADD KEY `stock_quantity` (`stock_quantity`),
  ADD KEY `onsale` (`onsale`),
  ADD KEY `min_max_price` (`min_price`,`max_price`);

--
-- Indexes for table `wp_wc_tax_rate_classes`
--
ALTER TABLE `wp_wc_tax_rate_classes`
  ADD PRIMARY KEY (`tax_rate_class_id`),
  ADD UNIQUE KEY `slug` (`slug`(191));

--
-- Indexes for table `wp_wc_webhooks`
--
ALTER TABLE `wp_wc_webhooks`
  ADD PRIMARY KEY (`webhook_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `wp_woocommerce_api_keys`
--
ALTER TABLE `wp_woocommerce_api_keys`
  ADD PRIMARY KEY (`key_id`),
  ADD KEY `consumer_key` (`consumer_key`),
  ADD KEY `consumer_secret` (`consumer_secret`);

--
-- Indexes for table `wp_woocommerce_attribute_taxonomies`
--
ALTER TABLE `wp_woocommerce_attribute_taxonomies`
  ADD PRIMARY KEY (`attribute_id`),
  ADD KEY `attribute_name` (`attribute_name`(20));

--
-- Indexes for table `wp_woocommerce_downloadable_product_permissions`
--
ALTER TABLE `wp_woocommerce_downloadable_product_permissions`
  ADD PRIMARY KEY (`permission_id`),
  ADD KEY `download_order_key_product` (`product_id`,`order_id`,`order_key`(16),`download_id`),
  ADD KEY `download_order_product` (`download_id`,`order_id`,`product_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `user_order_remaining_expires` (`user_id`,`order_id`,`downloads_remaining`,`access_expires`);

--
-- Indexes for table `wp_woocommerce_log`
--
ALTER TABLE `wp_woocommerce_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `level` (`level`);

--
-- Indexes for table `wp_woocommerce_order_itemmeta`
--
ALTER TABLE `wp_woocommerce_order_itemmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `order_item_id` (`order_item_id`),
  ADD KEY `meta_key` (`meta_key`(32));

--
-- Indexes for table `wp_woocommerce_order_items`
--
ALTER TABLE `wp_woocommerce_order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `wp_woocommerce_payment_tokenmeta`
--
ALTER TABLE `wp_woocommerce_payment_tokenmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `payment_token_id` (`payment_token_id`),
  ADD KEY `meta_key` (`meta_key`(32));

--
-- Indexes for table `wp_woocommerce_payment_tokens`
--
ALTER TABLE `wp_woocommerce_payment_tokens`
  ADD PRIMARY KEY (`token_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `wp_woocommerce_sessions`
--
ALTER TABLE `wp_woocommerce_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD UNIQUE KEY `session_key` (`session_key`);

--
-- Indexes for table `wp_woocommerce_shipping_zones`
--
ALTER TABLE `wp_woocommerce_shipping_zones`
  ADD PRIMARY KEY (`zone_id`);

--
-- Indexes for table `wp_woocommerce_shipping_zone_locations`
--
ALTER TABLE `wp_woocommerce_shipping_zone_locations`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `location_type_code` (`location_type`(10),`location_code`(20));

--
-- Indexes for table `wp_woocommerce_shipping_zone_methods`
--
ALTER TABLE `wp_woocommerce_shipping_zone_methods`
  ADD PRIMARY KEY (`instance_id`);

--
-- Indexes for table `wp_woocommerce_tax_rates`
--
ALTER TABLE `wp_woocommerce_tax_rates`
  ADD PRIMARY KEY (`tax_rate_id`),
  ADD KEY `tax_rate_country` (`tax_rate_country`),
  ADD KEY `tax_rate_state` (`tax_rate_state`(2)),
  ADD KEY `tax_rate_class` (`tax_rate_class`(10)),
  ADD KEY `tax_rate_priority` (`tax_rate_priority`);

--
-- Indexes for table `wp_woocommerce_tax_rate_locations`
--
ALTER TABLE `wp_woocommerce_tax_rate_locations`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `tax_rate_id` (`tax_rate_id`),
  ADD KEY `location_type_code` (`location_type`(10),`location_code`(20));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_actionscheduler_actions`
--
ALTER TABLE `wp_actionscheduler_actions`
  MODIFY `action_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `wp_actionscheduler_claims`
--
ALTER TABLE `wp_actionscheduler_claims`
  MODIFY `claim_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `wp_actionscheduler_groups`
--
ALTER TABLE `wp_actionscheduler_groups`
  MODIFY `group_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wp_actionscheduler_logs`
--
ALTER TABLE `wp_actionscheduler_logs`
  MODIFY `log_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1987;

--
-- AUTO_INCREMENT for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1276;

--
-- AUTO_INCREMENT for table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wp_user_registration_sessions`
--
ALTER TABLE `wp_user_registration_sessions`
  MODIFY `session_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_wc_admin_notes`
--
ALTER TABLE `wp_wc_admin_notes`
  MODIFY `note_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `wp_wc_admin_note_actions`
--
ALTER TABLE `wp_wc_admin_note_actions`
  MODIFY `action_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `wp_wc_customer_lookup`
--
ALTER TABLE `wp_wc_customer_lookup`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wp_wc_download_log`
--
ALTER TABLE `wp_wc_download_log`
  MODIFY `download_log_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wp_wc_tax_rate_classes`
--
ALTER TABLE `wp_wc_tax_rate_classes`
  MODIFY `tax_rate_class_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wp_wc_webhooks`
--
ALTER TABLE `wp_wc_webhooks`
  MODIFY `webhook_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_woocommerce_api_keys`
--
ALTER TABLE `wp_woocommerce_api_keys`
  MODIFY `key_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_woocommerce_attribute_taxonomies`
--
ALTER TABLE `wp_woocommerce_attribute_taxonomies`
  MODIFY `attribute_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_woocommerce_downloadable_product_permissions`
--
ALTER TABLE `wp_woocommerce_downloadable_product_permissions`
  MODIFY `permission_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wp_woocommerce_log`
--
ALTER TABLE `wp_woocommerce_log`
  MODIFY `log_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_woocommerce_order_itemmeta`
--
ALTER TABLE `wp_woocommerce_order_itemmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `wp_woocommerce_order_items`
--
ALTER TABLE `wp_woocommerce_order_items`
  MODIFY `order_item_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `wp_woocommerce_payment_tokenmeta`
--
ALTER TABLE `wp_woocommerce_payment_tokenmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_woocommerce_payment_tokens`
--
ALTER TABLE `wp_woocommerce_payment_tokens`
  MODIFY `token_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_woocommerce_sessions`
--
ALTER TABLE `wp_woocommerce_sessions`
  MODIFY `session_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `wp_woocommerce_shipping_zones`
--
ALTER TABLE `wp_woocommerce_shipping_zones`
  MODIFY `zone_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_woocommerce_shipping_zone_locations`
--
ALTER TABLE `wp_woocommerce_shipping_zone_locations`
  MODIFY `location_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_woocommerce_shipping_zone_methods`
--
ALTER TABLE `wp_woocommerce_shipping_zone_methods`
  MODIFY `instance_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_woocommerce_tax_rates`
--
ALTER TABLE `wp_woocommerce_tax_rates`
  MODIFY `tax_rate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_woocommerce_tax_rate_locations`
--
ALTER TABLE `wp_woocommerce_tax_rate_locations`
  MODIFY `location_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wp_wc_download_log`
--
ALTER TABLE `wp_wc_download_log`
  ADD CONSTRAINT `fk_wp_wc_download_log_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `wp_woocommerce_downloadable_product_permissions` (`permission_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
