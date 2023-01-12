-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2023 at 01:18 PM
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
-- Database: `db_nexaadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `formdatas`
--

CREATE TABLE `formdatas` (
  `id` bigint(20) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `number` varchar(32) NOT NULL,
  `dob` date NOT NULL,
  `img` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formdatas`
--

INSERT INTO `formdatas` (`id`, `name`, `email`, `number`, `dob`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Aman', 'aman@gmail.com', '9966335522', '2022-12-30', '', '2023-01-09 01:29:15', '2023-01-11 05:34:33'),
(2, 'Piyush', 'piyush@sdd.ffghf', '8545632551', '2022-12-30', '', '2023-01-09 01:30:26', '2023-01-11 05:35:16'),
(3, 'xcgfdfg', 'a@a.com', '89898989898', '2023-01-12', '', '2023-01-09 01:30:41', '2023-01-09 01:30:41'),
(4, 'wwww', 'abc@abc.com', '8585858585', '2023-01-19', '', '2023-01-09 03:49:16', '2023-01-10 03:45:47'),
(5, 'Kenil', 'kenil@kenil.com', '9856574859', '2023-01-19', '', '2023-01-09 04:02:38', '2023-01-09 04:02:38'),
(7, 'xcgfdfg', 'a@a.com', '89898989898', '2023-01-12', '', '2023-01-09 01:30:41', '2023-01-09 01:30:41'),
(9, 'xcgfdfg', 'a@a.com', '89898989898', '2023-01-12', '', '2023-01-09 01:30:41', '2023-01-09 01:30:41'),
(11, 'xcgfdfg', 'a@a.com', '89898989898', '2023-01-12', '', '2023-01-09 01:30:41', '2023-01-09 01:30:41'),
(12, 'xyz', 'xyz@xyz.net.in', '8965636541', '2023-01-28', '', '2023-01-10 01:07:30', '2023-01-10 01:07:30'),
(13, 'tgfnn', 'bhjhkhl@hg.dhfgb', '3698521478', '2023-01-14', 'WallpaperDog-10741286.jpg', '2023-01-11 01:50:20', '2023-01-11 01:50:20'),
(14, 'dffh', 'fhfhf@gdg.com', '7896541258', '2023-01-10', '1673506179.jpg', '2023-01-12 01:19:39', '2023-01-12 01:19:39'),
(15, 'fdgfdgfdh', 'gytrutf@dffhfj.com', '8574859685', '2023-01-11', '1673506593.jpg', '2023-01-12 01:26:33', '2023-01-12 01:26:33'),
(16, 'drdrrf', 'rtdryryry@fgcf.uhyug', '7893691235', '2022-07-08', '1673506737.jpg', '2023-01-12 01:28:57', '2023-01-12 01:28:57'),
(17, 'hkhgk', 'hgkk@hfg.fgufn', '7854785471', '2022-02-05', '1673506827.jpg', '2023-01-12 01:30:27', '2023-01-12 01:30:27'),
(18, 'fgfhfh', 'hdfghfd@dsgfd.cond', '9685748596', '2023-01-14', '1673507116.jpg', '2023-01-12 01:35:16', '2023-01-12 01:35:16'),
(19, 'vxcbc', 'xbbb@fsdgdg.ccj', '9685147585', '2023-01-12', 'WallpaperDog-17261692.jpg1673511186.jpg', '2023-01-12 02:43:06', '2023-01-12 02:43:06'),
(20, 'dgdgdg', 'test@test.com', '8574966541', '2023-01-19', 'WallpaperDog-10741294.jpg1673512497.jpg', '2023-01-12 03:04:57', '2023-01-12 03:04:57'),
(21, 'xbb', 'bg@et.fhgfh', '7591537561', '2023-01-13', '1673515376.jpg', '2023-01-12 03:52:56', '2023-01-12 03:52:56'),
(22, 'ytuytu', 'ytuyt@dfgdf.vgjhg', '7584968574', '2023-01-12', '1673515511.jpg', '2023-01-12 03:55:11', '2023-01-12 03:55:11'),
(23, 'retrtrtjky', 'ytkyk@rsh.fjfyjy', '7418523691', '2023-01-22', '1673515756.png', '2023-01-12 03:59:16', '2023-01-12 03:59:16'),
(24, 'fdghgh', 'fgjhf@dgsdh.fhhg', '7531596324', '2023-01-19', '1673515809.png', '2023-01-12 04:00:09', '2023-01-12 04:00:09'),
(25, 'gtrey', 'yre@dgfdhgfj.hghjg', '1236547896', '2023-01-19', '1673522614.jpg', '2023-01-12 04:02:01', '2023-01-12 05:53:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formdatas`
--
ALTER TABLE `formdatas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formdatas`
--
ALTER TABLE `formdatas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
