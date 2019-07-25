-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 07:18 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Ali Maqsood', 'www.alimaqsood@yahoo.com', '1234567'),
(2, 'ahhil', 'www.ahhil@yahoo.com', '12345'),
(3, 'ahhil', 'hanzala@gmail.com', '$2y$10$4CQyOj6TStKLa3fAgoPc8OguaY5WAYbpGEBCitjJ72BIvl.lRBae.'),
(4, 'king', 'king@gmail.com', '$2y$10$6KI3DEIn3va0xPk16/yYIOfnTxCALjNeZLtIWdA0y6EHBfYANnZEu'),
(5, 'saim', 'saim@gamil.com', '$2y$10$0ELd8kMXSYDhHkZcdWLlW.OXsg5FgNRFoPen9my.p6uCn/di4JXLi'),
(6, 'kamal', 'kamal@gmail.com', '$2y$10$69ymh8GBwdQzxSmL/oJ2teyMx7ZNYwink17vvCJt.LHYkve/xNhbS');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
