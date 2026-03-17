-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2026 at 01:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `green_nflora`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `fullname`, `email`, `phone`, `message`, `created_at`) VALUES
(1, '$fullname', '$email', '$phone', '$message', '2026-03-01 17:18:39'),
(2, 'dew', 'dewmfy897@gmail.com', '12345678', 'nice', '2026-03-02 03:02:39'),
(3, 'Dewmyy', 'dewmini123@gmai.com', '23567667878', 'Good Job', '2026-03-02 03:13:53'),
(4, 'dew', 'dewmini123@gmai.com', '23567667878', 'Excellent', '2026-03-02 03:16:28'),
(5, 'dew', 'dewmfy897@gmail.com', '12345678', 'nice', '2026-03-02 03:18:57'),
(6, 'dew', 'dewmini123@gmai.com', '12345678', 'hi\r\n', '2026-03-02 03:19:47'),
(7, 'Dewmyy', 'dewmfy897@gmail.com', '23567667878', 'nice\r\n', '2026-03-02 04:18:18'),
(8, 'customer1', 'customer123@gmail.com', '12345678', 'Good Job', '2026-03-02 17:37:25'),
(9, 'customer3', 'customer321@gmail.com', '12345678', 'Great Work', '2026-03-02 17:47:39'),
(10, 'customer4', 'customer123@gmail.com', '12345678', 'Great job', '2026-03-02 18:19:10'),
(11, 'customer0', 'customer00@gmail.com', '23567667878', 'Thank you for your service', '2026-03-02 18:21:21'),
(12, 'user123', 'user123@gmail.com', '35667678989e', 'Heyy', '2026-03-03 04:54:35'),
(13, 'user2', 'user00@gmail.com', '23567667878', 'Great job', '2026-03-03 05:08:29'),
(14, 'customer1', 'customer1@gmail.com', '23567667878', 'Nice ', '2026-03-03 05:20:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
