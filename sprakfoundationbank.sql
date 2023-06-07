-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 03:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sprakfoundationbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sno` int(11) NOT NULL,
  `sender` varchar(35) NOT NULL,
  `receiver` varchar(35) NOT NULL,
  `balance` bigint(11) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Abdulrahaman', 'Hariharan', 5000, '2023-06-04 15:01:38'),
(2, 'Srikanth', 'Nithin', 6000, '2023-06-04 15:01:58'),
(4, 'Rakesh', 'Sathish', 10000, '2023-06-04 15:02:14'),
(6, 'Siddartha', 'Hariharan', 8500, '2023-06-04 15:03:03'),
(7, 'Harsha', 'Venukalyan', 6500, '2023-06-04 15:02:41'),
(8, 'Hariharan', 'Sathish', 5000, '2023-06-04 23:09:08'),
(9, 'Sathish', 'Hariharan', 10000, '2023-06-04 23:11:03'),
(10, 'Sathish', 'Rakesh', 15000, '2023-06-04 23:18:36'),
(11, 'Srikanth', 'Nithin', 8000, '2023-06-05 05:33:42'),
(12, 'Rakesh', 'Sathish', 1000, '2023-06-05 06:05:48'),
(13, 'Sathish', 'Rakesh', 1500, '2023-06-05 06:08:30'),
(14, 'Sathish', 'Rakesh', 1500, '2023-06-05 06:10:43'),
(15, 'Harsha', 'Venukalyan', 1000, '2023-06-05 06:11:02'),
(16, 'Hariharan', 'Abdulrahaman', 500, '2023-06-05 06:20:00'),
(17, 'Hariharan', 'Abdulrahaman', 500, '2023-06-05 06:20:30'),
(18, 'Abdulrahaman', 'Hariharan', 500, '2023-06-05 06:20:43'),
(19, 'Abdulrahaman', 'Hariharan', 500, '2023-06-05 06:22:02'),
(20, 'Hariharan', 'Siddaratha', 1000, '2023-06-05 06:29:45'),
(21, 'Hariharan', 'Siddaratha', 1000, '2023-06-05 06:32:17'),
(22, 'Siddaratha', 'Hariharan', 1000, '2023-06-05 06:32:40'),
(23, 'Siddaratha', 'Hariharan', 1000, '2023-06-05 06:38:16'),
(24, 'Siddaratha', 'Hariharan', 1000, '2023-06-05 06:39:33'),
(25, 'Siddaratha', 'Hariharan', 1000, '2023-06-05 06:39:39'),
(26, 'Rakesh', 'Harsha', 10000, '2023-06-05 06:41:06'),
(27, 'Harihara', 'Srikanth', 500, '2023-06-05 06:48:34'),
(28, 'Harihara', 'Srikanth', 500, '2023-06-05 06:50:20'),
(29, 'Harihara', 'Srikanth', 500, '2023-06-05 06:50:58'),
(30, 'Sathish', 'Hariharan', 2000, '2023-06-05 06:57:58'),
(31, 'Hariharan', 'Harsha', 10000, '2023-06-05 22:39:40'),
(32, 'Hariharan', 'Abdulrahaman', 5000, '2023-06-06 08:46:21'),
(33, 'Abdulrahaman', 'Hariharan', 5000, '2023-06-06 08:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `balance` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Hariharan', 'hariharannune@gmail.com', 79000),
(2, 'Abdulrahaman', 'abdulrahaman2410@gmail.com', 80000),
(3, 'Srikanth', 'maskurisrikanth856@gmail.com', 68500),
(4, 'Nithin', 'nithinponnala2486@gmail.com', 98000),
(5, 'Siddaratha', 'siddarathasidd@gmail.com', 48000),
(6, 'Sathish', 'sankusathish166@gmail.com', 71000),
(7, 'Rakesh', 'rakeshkohli987@gmail.com', 79500),
(8, 'Harsha', 'harshaharsha1654@gmail.com', 64000),
(9, 'Venukalyan', 'venukalyan951@gmail.com', 66000),
(10, 'Raheel', 'raheelmahmood963@gmail.com', 75000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
