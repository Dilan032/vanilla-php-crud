-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2025 at 05:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phoneNumber`, `email`, `course`) VALUES
(1, 'dilan', '1122334455', 'dilankanishka@gmail.com', 'anamaduwa'),
(2, 'W.P.D. Dilan Kanishka', '779922985', 'dilankanishka032@gmail.com', 'IT'),
(4, 'wwwwww', '55555555555555555555', 'kanishka@gmail.com', 'IT'),
(5, 'santha', '778899562625555', 'santha@gmail.com', 'IT'),
(6, 'javis', '04455578851515151515', 'javis@gmail.com', 'IT'),
(7, 'javis', '451515155', 'javis@gmail.com', 'IT'),
(8, 'javis 2', '451515777', 'javis2@gmail.com', 'IT'),
(9, 'javis 3', '451578777', 'javis3@gmail.com', 'IT'),
(10, 'javis 4', '451578456', 'javis4@gmail.com', 'IT'),
(11, 'javis 5', '1238451226', 'javis5@gmail.com', 'IT'),
(12, 'sunil santha', '2588852025', 'sunil@gmail.com', 'IT'),
(15, 'dilan kanishka', '779922985', 'kanishka@gmail.com', 'IT');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
