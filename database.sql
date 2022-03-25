-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 05:47 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(55) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `profile_pic_path` varchar(100) NOT NULL,
  `user_type` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `gender`, `dob`, `address`, `profile_pic_path`, `user_type`, `date`) VALUES
(1, 'user', 'user@user.com', '77777777777', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '2022-03-10', 'Piplichowk Ward No.45', '', 2, '2022-03-23 23:41:01'),
(2, 'admin', 'admin@admin.com', '1234567890', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '2022-03-10', 'Piplichowk Ward No.45', 'profile-pic/23-03-2022-19-11-01.png', 1, '2022-03-23 23:41:01'),
(3, 'admin', 'super_admin@admin.com', '1234567890', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '2022-03-10', 'Piplichowk Ward No.45', 'profile-pic/23-03-2022-19-11-01.png', 0, '2022-03-23 23:41:01'),
(4, 'test0', 'test0@test.com', '777777770', 'aa876d2f65af167e25b159ffdb91750c', 'Male', '1990-03-10', 'Dummy Address 0', '', 2, '2022-03-24 10:46:41'),
(5, 'test1', 'test1@test.com', '777777771', 'd41d8cd98f00b204e9800998ecf8427e', 'Male', '1990-03-10', 'Dummy Address 1', '', 2, '2022-03-24 10:46:41'),
(6, 'test2', 'test2@test.com', '777777772', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 2', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(7, 'test3', 'test3@test.com', '777777773', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 3', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(8, 'test4', 'test4@test.com', '777777774', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 4', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(9, 'test5', 'test5@test.com', '777777775', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 5', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(10, 'test6', 'test6@test.com', '777777776', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 6', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(11, 'test7', 'test7@test.com', '777777777', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 7', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(12, 'test8', 'test8@test.com', '777777778', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 8', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(13, 'test9', 'test9@test.com', '777777779', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 9', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(14, 'test10', 'test10@test.com', '7777777710', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 10', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(15, 'test11', 'test11@test.com', '7777777711', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 11', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(16, 'test12', 'test12@test.com', '7777777712', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 12', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(17, 'test13', 'test13@test.com', '7777777713', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 13', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(18, 'test14', 'test14@test.com', '7777777714', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 14', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(19, 'test15', 'test15@test.com', '7777777715', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 15', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(20, 'test16', 'test16@test.com', '7777777716', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 16', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(21, 'test17', 'test17@test.com', '7777777717', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 17', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(22, 'test18', 'test18@test.com', '7777777718', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 18', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(23, 'test19', 'test19@test.com', '7777777719', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 19', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(24, 'test20', 'test20@test.com', '7777777720', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 20', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(25, 'test21', 'test21@test.com', '7777777721', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 21', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(26, 'test22', 'test22@test.com', '7777777722', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 22', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(27, 'test23', 'test23@test.com', '7777777723', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 23', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(28, 'test24', 'test24@test.com', '7777777724', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 24', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(29, 'test25', 'test25@test.com', '7777777725', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 25', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(30, 'test26', 'test26@test.com', '7777777726', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 26', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(31, 'test27', 'test27@test.com', '7777777727', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 27', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(32, 'test28', 'test28@test.com', '7777777728', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 28', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:41'),
(33, 'test29', 'test29@test.com', '7777777729', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 29', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(34, 'test30', 'test30@test.com', '7777777730', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 30', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(35, 'test31', 'test31@test.com', '7777777731', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 31', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(36, 'test32', 'test32@test.com', '7777777732', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 32', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(37, 'test33', 'test33@test.com', '7777777733', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 33', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(38, 'test34', 'test34@test.com', '7777777734', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 34', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(39, 'test35', 'test35@test.com', '7777777735', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 35', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(40, 'test36', 'test36@test.com', '7777777736', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 36', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(41, 'test37', 'test37@test.com', '7777777737', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 37', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(42, 'test38', 'test38@test.com', '7777777738', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 38', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(43, 'test39', 'test39@test.com', '7777777739', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 39', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(44, 'test40', 'test40@test.com', '7777777740', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 40', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(45, 'test41', 'test41@test.com', '7777777741', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 41', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(46, 'test42', 'test42@test.com', '7777777742', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 42', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(47, 'test43', 'test43@test.com', '7777777743', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 43', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(48, 'test44', 'test44@test.com', '7777777744', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 44', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(49, 'test45', 'test45@test.com', '7777777745', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 45', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(50, 'test46', 'test46@test.com', '7777777746', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 46', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(51, 'test47', 'test47@test.com', '7777777747', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 47', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(52, 'test48', 'test48@test.com', '7777777748', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 48', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(53, 'test49', 'test49@test.com', '7777777749', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 49', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(54, 'test50', 'test50@test.com', '7777777750', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 50', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(55, 'test51', 'test51@test.com', '7777777751', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 51', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(56, 'test52', 'test52@test.com', '7777777752', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 52', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(57, 'test53', 'test53@test.com', '7777777753', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 53', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(58, 'test54', 'test54@test.com', '7777777754', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 54', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(59, 'test55', 'test55@test.com', '7777777755', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 55', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(60, 'test56', 'test56@test.com', '7777777756', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 56', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(61, 'test57', 'test57@test.com', '7777777757', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 57', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(62, 'test58', 'test58@test.com', '7777777758', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 58', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(63, 'test59', 'test59@test.com', '7777777759', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 59', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(64, 'test60', 'test60@test.com', '7777777760', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 60', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(65, 'test61', 'test61@test.com', '7777777761', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 61', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(66, 'test62', 'test62@test.com', '7777777762', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 62', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(67, 'test63', 'test63@test.com', '7777777763', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 63', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(68, 'test64', 'test64@test.com', '7777777764', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 64', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(69, 'test65', 'test65@test.com', '7777777765', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '1990-03-10', 'Dummy Address 65', 'https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_1280.png', 2, '2022-03-24 10:46:42'),
(504, 'Abdul Qadir', 'aqadir1110@gmail.com', '7737866691', '53a69783e8dbeb8fd7f3b083624a8d20', 'Male', '2022-03-25', 'Piplichowk Ward No.45', 'profile-pic/24-03-2022-13-43-06.png', 2, '2022-03-24 18:13:06'),
(505, 'Abdu Qadir', 'aq.shahid34@gmail.com', '7737866691', 'aa876d2f65af167e25b159ffdb91750c', 'Male', '2022-03-08', 'Piplichowk Ward No.45', 'profile-pic/24-03-2022-15-34-52.png', 2, '2022-03-24 20:04:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=506;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
