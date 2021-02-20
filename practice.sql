-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 11:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(24) NOT NULL,
  `email` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  `message` text NOT NULL,
  `gender` varchar(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `message`, `gender`, `date`, `user_id`) VALUES
('Zaid Saleem', 'saadnust71@gmail.com', '$2y$10$afqxcb8xKpRFOlrIJ', ' ssjsjjsj', 'F', '2021-02-08 13:56:43', 21),
('Zaid Saleem', '03232978188', '$2y$10$XkZbz5a2GjeDPRqtt', ' kok', 'C', '2021-02-08 13:57:06', 22),
('Zaid Saleem', '03232978188', '$2y$10$8QEFm0KcyOcPnEOLt', ' kok', 'C', '2021-02-08 14:00:10', 23),
('Zaid Saleemop ', 'saadsaleem111gmail.com', '$2y$10$RSsKnwfb9d6X98cz2', ' smjjdj', 'F', '2021-02-08 14:00:41', 24),
('Muhammad Saad', 'k173758@nu.edu.pk', '$2y$10$w62l.yqcQ2OICZIGH', ' hhhwwwh', 'F', '2021-02-09 01:34:11', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
