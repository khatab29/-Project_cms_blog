-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 02:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'php', '2020-03-22 21:03:21', '2020-03-22 21:03:21', NULL),
(9, 'css', '2020-03-22 22:24:20', '2020-03-22 22:24:20', '2020-03-22 22:24:20'),
(10, 'oop', '2020-03-22 22:24:57', '2020-03-22 22:24:57', '2020-03-22 22:24:57'),
(11, 'mysql', '2020-03-22 22:24:57', '2020-03-22 22:24:57', '2020-03-22 22:24:57'),
(29, 'javascript', '2020-03-24 01:34:51', '2020-03-24 01:41:17', NULL),
(41, 'python', '2020-03-24 02:28:32', '2020-03-24 02:28:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) UNSIGNED NOT NULL,
  `categorey_id` int(11) DEFAULT NULL,
  `title` varchar(225) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `content` varchar(225) DEFAULT NULL,
  `tags` varchar(225) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `categorey_id`, `title`, `user_id`, `image`, `content`, `tags`, `comment_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7, 'php course', 1, 'beach.jpg', 'this php course was very helpful, i learned a lot from it', 'php, course, ', 5, 'draft', '2020-03-22 22:53:54', '2020-03-22 22:53:54', '2020-03-22 22:53:54'),
(2, 8, 'html course', 3, 'balls.jpg', 'this html course was very helpful, i learned a lot from it', 'html, course', 5, 'draft', '2020-03-22 22:53:54', '2020-03-22 22:53:54', '2020-03-22 22:53:54'),
(3, 9, 'css course', 2, 'boat.jpg', 'this css course is very good', 'css, course', 3, 'draft', '2020-03-22 23:15:36', '2020-03-22 23:15:36', '2020-03-22 23:15:36'),
(4, 10, 'oop course', 3, 'bmw.jpg', 'this oop course is very nice', 'oop, course', 4, 'draft', '2020-03-22 23:15:36', '2020-03-22 23:15:36', '2020-03-22 23:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `firstname` varchar(225) DEFAULT NULL,
  `lastname` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `role` varchar(225) DEFAULT NULL,
  `randsalt` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `image`, `role`, `randsalt`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'hamda khatab ', '2909', 'mohamed', 'khatab', 'khatab@gmail.com', 'lambo.jpg', 'admin', NULL, '2020-03-22 23:09:09', '2020-03-22 23:09:09', '2020-03-22 23:09:09'),
(2, 'ahmed samy', '2404', 'ahmed', 'samy', 'samy@gmail.com', 'city.jpg', 'admin', NULL, '2020-03-22 23:12:25', '2020-03-22 23:12:25', '2020-03-22 23:12:25'),
(3, 'mahmoud mostafa', '2808', 'mahmoud', 'mostafa', 'mostafa@gmail.com', 'dragom.jpg', 'admin', NULL, '2020-03-22 23:12:25', '2020-03-22 23:12:25', '2020-03-22 23:12:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
