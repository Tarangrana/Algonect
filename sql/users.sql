-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2025 at 05:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--
CREATE DATABASE IF NOT EXISTS `users` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `users`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `content`, `created_at`) VALUES
(3, 23, 15, 'Thats a great Tip!', '2025-04-02 02:10:14'),
(4, 23, 14, 'Thanks rachit', '2025-04-02 02:25:32'),
(6, 26, 17, 'Nice Picture!', '2025-04-02 04:47:28'),
(7, 33, 14, 'Looks like on line no 9 it has error!', '2025-04-03 04:59:27'),
(8, 34, 20, 'Congrats!', '2025-04-03 05:18:37'),
(9, 34, 18, 'That\'s great!', '2025-04-03 05:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `user_id`, `created_at`) VALUES
(7, 23, 15, '2025-04-02 01:16:55'),
(8, 24, 15, '2025-04-02 02:09:56'),
(9, 24, 14, '2025-04-02 02:25:14'),
(10, 23, 14, '2025-04-02 02:25:16'),
(13, 26, 14, '2025-04-02 03:38:54'),
(14, 23, 17, '2025-04-02 04:46:21'),
(15, 31, 19, '2025-04-02 04:55:50'),
(16, 30, 19, '2025-04-02 04:55:54'),
(17, 29, 19, '2025-04-02 04:55:58'),
(18, 33, 20, '2025-04-02 16:42:37'),
(19, 32, 20, '2025-04-02 16:42:39'),
(20, 31, 20, '2025-04-02 16:42:41'),
(21, 23, 20, '2025-04-02 16:42:47'),
(22, 28, 14, '2025-04-02 17:17:30'),
(23, 31, 14, '2025-04-02 17:17:39'),
(24, 34, 14, '2025-04-03 01:55:56'),
(25, 33, 14, '2025-04-03 01:55:59'),
(26, 29, 14, '2025-04-03 04:57:27'),
(27, 32, 14, '2025-04-03 05:03:38'),
(28, 30, 14, '2025-04-03 05:12:35'),
(29, 27, 14, '2025-04-03 05:12:41'),
(30, 34, 20, '2025-04-03 05:15:59'),
(31, 30, 20, '2025-04-03 05:18:12'),
(32, 29, 20, '2025-04-03 05:18:14'),
(33, 28, 20, '2025-04-03 05:18:15'),
(34, 27, 20, '2025-04-03 05:18:17'),
(35, 26, 20, '2025-04-03 05:18:19'),
(36, 24, 20, '2025-04-03 05:18:20'),
(37, 34, 15, '2025-04-03 05:27:14'),
(38, 33, 15, '2025-04-03 05:27:18'),
(39, 32, 15, '2025-04-03 05:27:19'),
(40, 31, 15, '2025-04-03 05:27:20'),
(41, 30, 15, '2025-04-03 05:27:22'),
(42, 29, 15, '2025-04-03 05:27:23'),
(43, 28, 15, '2025-04-03 05:27:24'),
(44, 27, 15, '2025-04-03 05:27:27'),
(45, 26, 15, '2025-04-03 05:27:29'),
(46, 34, 16, '2025-04-03 05:32:34'),
(47, 33, 16, '2025-04-03 05:33:04'),
(48, 32, 16, '2025-04-03 05:33:08'),
(49, 31, 16, '2025-04-03 05:33:10'),
(50, 30, 16, '2025-04-03 05:33:11'),
(51, 29, 16, '2025-04-03 05:33:13'),
(52, 28, 16, '2025-04-03 05:33:14'),
(53, 27, 16, '2025-04-03 05:33:15'),
(54, 26, 16, '2025-04-03 05:33:16'),
(55, 24, 16, '2025-04-03 05:33:17'),
(56, 23, 16, '2025-04-03 05:33:19'),
(57, 34, 19, '2025-04-03 05:36:15'),
(58, 33, 19, '2025-04-03 05:37:05'),
(59, 34, 18, '2025-04-03 05:38:32'),
(60, 33, 18, '2025-04-03 05:38:41'),
(61, 32, 18, '2025-04-03 05:40:28'),
(62, 31, 18, '2025-04-03 05:41:07'),
(63, 30, 18, '2025-04-03 05:43:44'),
(64, 27, 18, '2025-04-03 05:46:06'),
(65, 26, 18, '2025-04-03 05:46:08'),
(66, 23, 18, '2025-04-03 05:46:12'),
(67, 24, 18, '2025-04-03 05:48:29'),
(68, 29, 18, '2025-04-03 05:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `tag` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `tag`, `created_at`, `image_path`) VALUES
(23, 14, '🚨 Midterm week survival tips!', 'Let’s drop some quick tips to survive this wild week:\r\n\r\nPomodoro technique ⏱️\r\n\r\nFind a study buddy 👯‍♂️\r\n\r\nDon’t skip meals! 🍽️\r\nAnyone else got tips?', 'advice', '2025-04-02 01:15:01', NULL),
(24, 15, 'PSYC201:', 'Was anyone else confused about the cognitive bias section in today’s lecture?\r\nI’d love to form a mini study group before the quiz on Thursday. DM or comment if you’re interested.', 'advice', '2025-04-02 01:16:48', NULL),
(26, 14, 'Quality Time!', 'Enjoying weekends with friends!', 'general', '2025-04-02 03:38:36', 'post_images/1743565116_ChatGPT Image Mar 28, 2025, 09_23_27 AM.png'),
(27, 16, 'What’s the best place to grab coffee near campus?', 'I\'m tired of the cafeteria brew — looking for cozy places with good vibes and strong espresso.☕', 'general', '2025-04-02 04:45:10', NULL),
(28, 17, '🕒 Balancing class and work', 'I just started a part-time job (20 hrs/week) and I’m already drowning in assignments 😵 Any time management tips?', 'advice', '2025-04-02 04:47:18', NULL),
(29, 18, '🧥 Lost hoodie alert!', 'Left my black hoodie in the gym yesterday 😭 Anyone know where the campus lost & found is?', 'general', '2025-04-02 04:50:41', 'post_images/1743569441_download.jpeg'),
(30, 14, '📚 Textbook worth it?', 'The prof says it’s “required,” but barely uses it. Should I buy it or wing it with notes? 🤔', 'advice', '2025-04-02 04:52:01', NULL),
(31, 19, '💳 Reloading student ID', 'Where can I top up my student card balance? Need it to print stuff for class 🖨️', 'question', '2025-04-02 04:55:05', 'post_images/1743569705_1678735047470.png'),
(32, 14, 'Zoom fail of the semester', 'Joined a random engineering Zoom class and stayed for 20 minutes thinking it was my psychology lecture.', 'storytime', '2025-04-02 04:57:05', NULL),
(33, 16, 'Can any one help me with this code?', 'I\'m stuck in this question and not able to generate the output. What shall i do?', 'advice', '2025-04-02 16:06:44', 'post_images/1743610004_Screenshot 2025-02-13 235237.png'),
(34, 14, 'Finally Done with my project!', 'After a long debugging and testing, I\'m finally done with my projects!', 'general', '2025-04-03 01:55:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `profile_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`id`, `name`, `email`, `password`, `birthdate`, `gender`, `created_at`, `profile_pic`) VALUES
(14, 'Tarang Rana', 'tarrana@algomau.ca', '$2y$10$O3k3XJdlucPgBW9O8msuJuDHvdRk9PimfpIgtX4AFV.QtGFO0M/U.', '2003-12-29', 'Male', '2025-04-02 01:13:21', 'pics/67eca352ebe9f_ChatGPT Image Mar 28, 2025, 10_13_37 AM.png'),
(15, 'Rachit Rana', 'rachit9@algomau.ca', '$2y$10$lYXLPIbnJO6/hntY04hobO0fL5p4oULKV076fy2x8S71a3s6AJ6Jy', '2003-12-17', 'Male', '2025-04-02 01:15:46', 'pics/67ec8fd90efcc_𝑺𝒒𝒖𝒊𝒓𝒕𝒍𝒆 _ 𝒊𝒄𝒐𝒏𝒔.jpeg'),
(16, 'Yaman Dangol', 'yaman@algomau.ca', '$2y$10$qQpGl281qF.rd/4erbrmDOYH.3NrO6xRS3fZjv1xokN3oddJ08m7u', '2003-12-14', 'Male', '2025-04-02 04:39:40', 'pics/67ecbfcc417e5_Swag Cartoon pfp.jpeg'),
(17, 'Arpan ', 'arpan@algomau.ca', '$2y$10$EO0mqSaz4wCDIuCHLX4//.25VGFzoNeraJsBncXxOMkXfU4V1OMYK', '2003-12-15', 'Male', '2025-04-02 04:46:00', 'pics/67ecc12c26be8_GOJO PPF.jpeg'),
(18, 'Hari', 'hari@algomau.ca', '$2y$10$gfYvScGC7n./8T1koBLePuPPYs7HiOHaq0sBr3B9T67aNZWrOQVIy', '2003-11-17', 'Male', '2025-04-02 04:48:43', 'pics/67ecc1c624a8a_scrooge mcduck.jpeg'),
(19, 'Perris ', 'perris@algomau.ca', '$2y$10$tr5IzadguNafJuKS2.iLkeqyEe5VyBpcnubn.Ra.BmDrkMqIxN6zW', '2003-12-17', 'Male', '2025-04-02 04:53:41', 'pics/67ecc3378b345_“孩子的一天很快過去，一年卻很漫長； 成人的一天很漫長，一年卻轉眼過去。”——【陀飛輪】….jpeg'),
(20, 'Sagar Ghimire', 'sagar@algomau.ca', '$2y$10$1pZtMuQMyYKaM.UJhiNbDOIJJ/kBMtioR59e1CcsI2xl8DDvRZCDa', '2003-11-17', 'Male', '2025-04-02 16:42:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_id` (`post_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users_info` (`id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users_info` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_info` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
