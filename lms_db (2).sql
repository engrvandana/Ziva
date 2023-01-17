-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 06:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `course_desc` text NOT NULL,
  `course_author` varchar(255) NOT NULL,
  `course_img` text NOT NULL,
  `course_duration` text NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_original_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `course_category` int(11) NOT NULL,
  `price` int(20) NOT NULL,
  `images` varchar(50) NOT NULL,
  `goal` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `description`, `course_category`, `price`, `images`, `goal`) VALUES
(1, 'python', 'This Python programming basics / fundamentals course helps you to learn how to write Python code, course carefully designed where students will learn how to build real life applications in Python ', 1, 1000, 'image/python-training.png', 'Write Python programs that can be used on Linux, Mac, and Unix operating systems.'),
(2, 'flutter', 'Whether you are new to application design or an experienced application designer, a Flutter course gives you tools to expand your skill set. The platform is easy to learn and use ', 3, 2000, 'image/flutter.jpg', 'Developing mobile applications using Flutter.'),
(3, 'java script', 'You interact with JavaScript code all the time .It powers dynamic behavior on websites (like this one) and plays an important role in many fields.In this course, you’ll learn JavaScript fundamentals ', 2, 3000, 'image/datascia.png', 'Become an Advanced, Confident, and Modern JavaScript Developer from scratch. JavaScript fundamentals: variables, if/else, operators, boolean logic, functions, arrays, objects, loops, strings, etc.'),
(4, 'C++', 'With its adaptability and fast rendering, you’ll find the C++ programming language used everywhere. This course will help you learn C++ basics and give you hands-on experience to create your own proje', 1, 2000, 'image/webdeva.png', 'Learn from the very basics concepts like loops ,Arrays 1D and 2D, Functions to advance topics like pointers, Dynamic Memory Allocations ,Recursion ,Strings.');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_pass` varchar(255) NOT NULL,
  `stu_occ` varchar(255) NOT NULL,
  `stu_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) VALUES
(1, 'Ifra Siddiqui', 'ifra@gmail.com', 'ifra123', '', ''),
(2, 'Aleena Fatima', 'Aleena@gmail.com', 'aleena123', '', ''),
(4, 'Vandana', 'Vandana@gmail.com', 'vandana123', '', ''),
(5, 'Zobia', 'Zobia@gmail.com', 'zobia123', '', ''),
(7, 'Romaisa', 'romaisafatima127@gmail.com', 'romaisa123', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `course_category` (`course_category`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
