-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2021 at 01:25 PM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maths`
--

-- --------------------------------------------------------

--
-- Table structure for table `examples`
--

CREATE TABLE `examples` (
  `examples_id` int(11) NOT NULL,
  `examples_number` int(11) NOT NULL,
  `examples_is_bac` tinyint(1) NOT NULL,
  `examples_is_ds` tinyint(1) NOT NULL,
  `examples_chapter_id` int(11) NOT NULL,
  `examples_path` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examples`
--

INSERT INTO `examples` (`examples_id`, `examples_number`, `examples_is_bac`, `examples_is_ds`, `examples_chapter_id`, `examples_path`) VALUES
(1, 12, 1, 0, 1, '/home/cedri/Documents/projects/maths/data/maths/Chapter_1/test.html'),
(3, 17, 1, 0, 3, '/home/cedri/Documents/projects/maths/data/maths/Chapter_7/exemple_17.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `examples`
--
ALTER TABLE `examples`
  ADD PRIMARY KEY (`examples_id`),
  ADD KEY `ex_ind` (`examples_chapter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `examples`
--
ALTER TABLE `examples`
  MODIFY `examples_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `examples`
--
ALTER TABLE `examples`
  ADD CONSTRAINT `examples_ibfk_1` FOREIGN KEY (`examples_chapter_id`) REFERENCES `chapters` (`chapters_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
