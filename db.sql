-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 01:55 AM
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
-- Database: `gclassroom_project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL COMMENT 'Who created this class',
  `code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `room` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `teacher_id`, `code`, `name`, `section`, `subject`, `room`) VALUES
(1, 1, '2sbf3l', 'Bengali 101', 'A', 'Bengali', 'Room 201'),
(2, 2, 'RTiTVI', 'History 101', 'B', 'History', 'Room 202'),
(3, 3, 'X7D5LN', 'Physics 101', 'A', 'Physics', 'Room 203'),
(4, 4, 'ydtvGt', 'Chemistry 101', 'A', 'Chemistry', 'Room 204'),
(5, 5, '3bhiXi', 'Biology 101', 'B', 'Biology', 'Room 205'),
(6, 6, 'QJWOR9', 'Mathematics 102', 'B', 'Mathematics', 'Room 206'),
(7, 7, 'j09FwK', 'English 102', 'A', 'English', 'Room 207'),
(8, 8, 'lZxj23', 'Science 302', 'B', 'Science', 'Room 208'),
(9, 9, 'fCgCJC', 'Geography 101', 'A', 'Geography', 'Room 209'),
(10, 10, 'bRUgmW', 'Economics 101', 'A', 'Economics', 'Room 210'),
(11, 11, 'yPIDan', 'Computer Science 101', 'B', 'Computer Science', 'Room 211'),
(12, 12, 'aL1WB4', 'Art 101', 'A', 'Art', 'Room 212'),
(13, 13, '4Yme1p', 'Music 101', 'B', 'Music', 'Room 213'),
(14, 14, 'yBQS58', 'Philosophy 101', 'A', 'Philosophy', 'Room 214'),
(15, 1, 'uofCiv', 'Psychology 101', 'B', 'Psychology', 'Room 215'),
(16, 2, 'DWohxf', 'Sociology 101', 'A', 'Sociology', 'Room 216'),
(17, 3, 'fqOMUF', 'Political Science 101', 'B', 'Political Science', 'Room 217'),
(18, 4, 'E3060s', 'Law 101', 'A', 'Law', 'Room 218'),
(19, 5, 'EK6wEm', 'Statistics 101', 'B', 'Statistics', 'Room 219'),
(20, 6, '4LiYbM', 'Anthropology 101', 'A', 'Anthropology', 'Room 220'),
(21, 7, 'SWNGte', 'Literature 101', 'B', 'Literature', 'Room 221'),
(22, 8, 'fD7YBN', 'Linguistics 101', 'A', 'Linguistics', 'Room 222'),
(23, 9, 'SKqKtC', 'Environmental Science 101', 'B', 'Environmental Science', 'Room 223'),
(24, 10, '9VATJs', 'Astronomy 101', 'A', 'Astronomy', 'Room 224'),
(25, 11, 'YTuiEL', 'Physical Education 101', 'B', 'Physical Education', 'Room 225'),
(26, 12, 'q3EbM4', 'Media Studies 101', 'A', 'Media Studies', 'Room 226'),
(27, 13, 'bQtQp6', 'Theatre 101', 'B', 'Theatre', 'Room 227'),
(28, 14, 'iubqy2', 'Foreign Languages 101', 'A', 'Foreign Languages', 'Room 228'),
(29, 1, 'Zonnr4', 'Business Studies 101', 'B', 'Business Studies', 'Room 229'),
(30, 2, 'OrmYXH', 'Nursing 101', 'A', 'Nursing', 'Room 230'),
(31, 3, 'nOkkGj', 'Architecture 101', 'B', 'Architecture', 'Room 231');

-- --------------------------------------------------------

--
-- Table structure for table `class_posts`
--

CREATE TABLE `class_posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_posts`
--

INSERT INTO `class_posts` (`id`, `user_id`, `class_id`, `content`, `created_at`, `updated_at`) VALUES
(11, 1, 29, 'Hello Students', '2024-05-26 03:27:22', '2024-05-26 07:27:22'),
(16, 1, 29, 'sg dsfrtgh', '2024-05-27 19:48:34', '2024-05-28 11:48:34'),
(17, 1, 29, 'fhgfhfg', '2024-05-27 19:48:35', '2024-05-28 11:48:35'),
(18, 1, 29, 'fhgfhrtf', '2024-05-27 19:48:36', '2024-05-28 11:48:36'),
(22, 1, 29, 'dfgdre', '2024-05-27 19:50:37', '2024-05-28 11:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `class_post_attachments`
--

CREATE TABLE `class_post_attachments` (
  `id` int(11) NOT NULL,
  `class_post_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_post_attachments`
--

INSERT INTO `class_post_attachments` (`id`, `class_post_id`, `path`) VALUES
(4, 11, 'uploads/Default_A_kangaroo_is_standing_alert_in_a_dense_forest_surroun_1-gigapixel-standard-scale-2_00x.jpg'),
(5, 22, 'uploads/Default_In_the_heart_of_a_lush_and_dense_jungl_an_apex_predat_0 (1)-gigapixel-standard-scale-2_00x.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `class_students`
--

CREATE TABLE `class_students` (
  `class_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` enum('student','teacher') NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `password`) VALUES
(1, 'Teacher', 'teacher@green.edu.bd', 'teacher', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'John Doe', 'john.doe@example.com', 'teacher', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'Jane Smith', 'jane.smith@example.com', 'teacher', '5f4dcc3b5aa765d61d8327deb882cf99'),
(4, 'Alice Johnson', 'alice.johnson@example.com', 'teacher', '5f4dcc3b5aa765d61d8327deb882cf99'),
(5, 'Amitabh Banerjee', 'amitabh.banerjee@example.com', 'teacher', '5f4dcc3b5aa765d61d8327deb882cf99'),
(6, 'Soma Dasgupta', 'soma.dasgupta@example.com', 'teacher', '5f4dcc3b5aa765d61d8327deb882cf99'),
(7, 'Partha Chakraborty', 'partha.chakraborty@example.com', 'teacher', '5f4dcc3b5aa765d61d8327deb882cf99'),
(8, 'Rina Ghosh', 'rina.ghosh@example.com', 'teacher', '5f4dcc3b5aa765d61d8327deb882cf99'),
(9, 'Debashis Mukherjee', 'debashis.mukherjee@example.com', 'teacher', '5f4dcc3b5aa765d61d8327deb882cf99'),
(10, 'Kabita Sen', 'kabita.sen@example.com', 'teacher', '5f4dcc3b5aa765d61d8327deb882cf99'),
(11, 'Anindya Chatterjee', 'anindya.chatterjee@example.com', 'teacher', '5f4dcc3b5aa765d61d8327deb882cf99'),
(12, 'Tanima Sarkar', 'tanima.sarkar@example.com', 'teacher', '5f4dcc3b5aa765d61d8327deb882cf99'),
(13, 'Subrata Roy', 'subrata.roy@example.com', 'teacher', '5f4dcc3b5aa765d61d8327deb882cf99'),
(14, 'Kajal Mitra', 'kajal.mitra@example.com', 'teacher', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `class_posts`
--
ALTER TABLE `class_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_posts_ibfk_1` (`class_id`),
  ADD KEY `class_posts_ibfk_2` (`user_id`);

--
-- Indexes for table `class_post_attachments`
--
ALTER TABLE `class_post_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_post_id` (`class_post_id`);

--
-- Indexes for table `class_students`
--
ALTER TABLE `class_students`
  ADD PRIMARY KEY (`class_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `class_posts`
--
ALTER TABLE `class_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `class_post_attachments`
--
ALTER TABLE `class_post_attachments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `class_posts`
--
ALTER TABLE `class_posts`
  ADD CONSTRAINT `class_posts_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `class_posts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `class_post_attachments`
--
ALTER TABLE `class_post_attachments`
  ADD CONSTRAINT `class_post_id` FOREIGN KEY (`class_post_id`) REFERENCES `class_posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class_students`
--
ALTER TABLE `class_students`
  ADD CONSTRAINT `class_students_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `class_students_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
