-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 04, 2023 at 06:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `exper_lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` decimal(9,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `date_of_birth`, `exper_lang`, `salary`, `created_at`, `updated_at`) VALUES
(1, 'vdssdvd', 'sdjbsdj@sdjnd.com', '2023-01-20', 'fsfsf', '20000.000', '2023-01-03 00:44:51', '2023-01-03 00:44:51'),
(3, 'vcxbb', 'xbcb@fdgf.coom', '2023-01-01', 'fggfdg', '20000.000', '2023-01-03 01:10:25', '2023-01-03 01:10:25'),
(4, 'meet', 'meet@meet.com', '2023-01-06', 'bbb', '220000.000', '2023-01-03 02:36:19', '2023-01-03 02:36:19'),
(5, 'fhghghhfg', 'hfhfghf@dfgg.chgfj', '2023-01-07', 'hgf', '202315.000', '2023-01-03 02:38:56', '2023-01-03 02:38:56'),
(6, 'gdfgg', 'dfgf@hfghf.coom', '2023-01-20', 'dfgd', '54654.000', '2023-01-03 02:40:08', '2023-01-03 02:40:08'),
(7, 'vhgv', 'vbv@gfdhg.co', '2023-01-06', 'bnbnb', '80000.000', '2023-01-03 02:42:59', '2023-01-03 02:42:59'),
(8, 'cvcv', 'vxcvcv@egfg.com', '2023-01-06', 'vbfb', '80000.000', '2023-01-03 02:44:55', '2023-01-03 02:44:55'),
(9, 'ghhffh', 'dfgdfgf@gfgf.com', '2023-01-06', 'dffd', '80000.000', '2023-01-03 02:47:26', '2023-01-03 02:47:26'),
(10, 'hgfh', 'gghf@gdfg.com', '2023-01-25', 'bbvbv', '80000.000', '2023-01-03 02:48:03', '2023-01-03 02:48:03'),
(11, 'fgdfgfd', 'dgfdg@fdg.com', '2023-01-25', 'fdsffd', '80000.000', '2023-01-03 02:50:04', '2023-01-03 02:50:04'),
(12, 'hgfhg', 'fghgfh@gdfg.com', '2023-01-16', 'bnbnb', '80000.000', '2023-01-03 02:50:57', '2023-01-03 02:50:57'),
(13, 'vcv', 'fdb@gdf.vui', '2022-12-31', 'nbn', '80000.000', '2023-01-03 02:51:57', '2023-01-03 02:51:57'),
(14, 'cbcvb', 'bcvb@ghh.chh', '2023-01-08', 'hgf', '20122.000', '2023-01-03 02:53:47', '2023-01-03 02:53:47'),
(15, 'xcvcv', 'vxcv@gfdh.com', '2023-01-14', 'xcvc', '80000.000', '2023-01-03 02:59:02', '2023-01-03 02:59:02'),
(16, 'hgg', 'jfgd@gfd.cim', '2023-01-07', 'bmbm', '54654.000', '2023-01-03 03:00:47', '2023-01-03 03:00:47'),
(17, 'vngfg', 'gdfgdg@fdfh.chj', '2023-01-12', 'hjghjh', '42000.000', '2023-01-03 03:05:30', '2023-01-03 03:05:30'),
(18, 'gdfhh', 'fhfdhfhgjhgyuy6@hfghf.coom', '2023-01-20', 'jbjhgjy', '20122.000', '2023-01-03 03:06:11', '2023-01-03 03:06:11'),
(19, 'dsg', 'dfdgk,@gfh.com', '2023-01-12', 'vbnbm', '563333.000', '2023-01-03 03:07:57', '2023-01-03 03:07:57'),
(20, 'bvnfg', 'gfggf@ghkjl.fgh', '2023-01-07', 'hjghhk', '20112.000', '2023-01-03 03:09:26', '2023-01-03 03:09:26'),
(21, 'Mehul gfjhgh', 'bcvb@ghfgmkkh.chh', '2023-01-25', 'cnhgf', '563333.000', '2023-01-03 03:14:56', '2023-01-03 03:14:56'),
(22, 'seffgxgh', 'ffxfx@gcjjg.bhihvh', '2022-12-29', 'hjghhkgvgv', '4556.000', '2023-01-03 03:19:32', '2023-01-03 03:19:32'),
(23, 'A', 'hstr@jgh.yfy', '0556-04-05', 'ionbo,ggh', '454445.000', '2023-01-03 03:21:08', '2023-01-03 23:35:24'),
(24, 'p', 'psdd@ffasf.com', '2023-01-21', 'vsdvds', '200000.000', '2023-01-03 04:17:03', '2023-01-03 23:52:25'),
(27, 'dfdsfkuyiujhgb', 'kgc@k.combj', '5200-04-12', 'vcxvxcv', '20112.000', '2023-01-03 23:56:57', '2023-01-04 00:01:51'),
(28, 'mit', 'm@mmmm.com', '2023-01-21', 'vxcvc', '563333.000', '2023-01-04 00:05:06', '2023-01-04 00:05:06'),
(29, 'gfjgjghjhkj', 'fghfghjk@gfhj.ghfgfj', '2023-01-05', 'gjh', '54654.000', '2023-01-04 00:07:51', '2023-01-04 00:07:51'),
(30, 'nirmal', 'n@w.hjh', '2023-01-15', 'vxcb', '20112.000', '2023-01-04 00:12:34', '2023-01-04 00:14:02'),
(31, 'mishri', 'm@m.com', '2000-12-16', 'nodejs+ci', '80000.000', '2023-01-04 00:17:11', '2023-01-04 00:17:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
