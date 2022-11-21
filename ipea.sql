-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 05:02 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipea`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `confpassword` varchar(250) NOT NULL,
  `verify_token` varchar(250) NOT NULL,
  `usertype` varchar(250) NOT NULL,
  `verify_status` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '0=NO,\r\n1=YES'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `password`, `confpassword`, `verify_token`, `usertype`, `verify_status`, `created_at`) VALUES
(1, 'Ashley', 'Azucena', 'ashley.azucena.cics@ust.edu.ph', 'c20ad4d76fe97759aa27a0c99bff6710', 'c93ccd78b2076528346216b3b2f701e6', '232773593098af897b33a25ebe8ffacf', 'Admin', 1, '2022-11-17 01:25:26'),
(2, 'Ashley', 'Azucena', 'ashley.azucena.iics@Ust.edu.ph', '202cb962ac59075b964b07152d234b70', 'c20ad4d76fe97759aa27a0c99bff6710', '099cc3669aff47fe9d76c31a820d57e9', 'User', 1, '2022-11-20 22:19:19'),
(9, 'Ashley', 'Pogi', 'ashleypogi64@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710', '52a01eb3a623d1d0da6117cc1dc5c6ff', 'User', 0, '2022-11-20 22:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin_department`
--

CREATE TABLE `superadmin_department` (
  `id` int(11) NOT NULL,
  `department` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superadmin_department`
--

INSERT INTO `superadmin_department` (`id`, `department`, `created_at`) VALUES
(1, 'Physical Education', '2022-11-20 21:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin_faqs`
--

CREATE TABLE `superadmin_faqs` (
  `id` int(11) NOT NULL,
  `questions` varchar(5000) NOT NULL,
  `answers` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superadmin_faqs`
--

INSERT INTO `superadmin_faqs` (`id`, `questions`, `answers`, `created_at`) VALUES
(1, 'How to Change Password?', 'In order to change password, go to the settings!', '2022-11-17 09:38:44'),
(2, 'How to Change Name?', 'asddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '2022-11-17 09:43:12'),
(3, 'How to Change Email?', 'sadasdasdcxzczcxzczxcasdfawrwasddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsadasdasdcxzczcxzczxcasdfawrwasddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsadasdasdcxzczcxzczxcasdfawrwasddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsadasdasdcxzczcxzczxcasdfawrwasdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '2022-11-17 09:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin_services`
--

CREATE TABLE `superadmin_services` (
  `id` int(11) NOT NULL,
  `services` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superadmin_services`
--

INSERT INTO `superadmin_services` (`id`, `services`, `created_at`) VALUES
(1, 'Student Inquiries', '2022-11-20 21:32:52'),
(2, 'Student Grievances', '2022-11-20 21:32:58'),
(3, 'Enrollment Concerns', '2022-11-20 21:33:03'),
(4, 'Others', '2022-11-20 21:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin_userroles`
--

CREATE TABLE `superadmin_userroles` (
  `id` int(11) NOT NULL,
  `roles` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superadmin_userroles`
--

INSERT INTO `superadmin_userroles` (`id`, `roles`, `created_at`) VALUES
(1, 'Admin', '2022-10-19 19:26:05'),
(2, 'Personnel', '2022-10-19 19:26:28'),
(3, 'Support Staff', '2022-10-19 19:27:32'),
(4, 'Academic Official', '2022-10-19 19:28:08'),
(5, 'Teaching Academic Staff', '2022-10-19 19:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_tickets`
--

CREATE TABLE `user_tickets` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `token` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin_department`
--
ALTER TABLE `superadmin_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin_faqs`
--
ALTER TABLE `superadmin_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin_services`
--
ALTER TABLE `superadmin_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin_userroles`
--
ALTER TABLE `superadmin_userroles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tickets`
--
ALTER TABLE `user_tickets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `superadmin_department`
--
ALTER TABLE `superadmin_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `superadmin_faqs`
--
ALTER TABLE `superadmin_faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `superadmin_services`
--
ALTER TABLE `superadmin_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `superadmin_userroles`
--
ALTER TABLE `superadmin_userroles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_tickets`
--
ALTER TABLE `user_tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
