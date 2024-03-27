-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2016 at 09:56 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ben_mosa_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8 NOT NULL,
  `desc_ar` text CHARACTER SET utf8 NOT NULL,
  `desc_en` text CHARACTER SET utf8 NOT NULL,
  `album_sec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `album_sec_id`) VALUES
(1, 'أعمدة', '', '<h3 style="color:blue;">\r\n	jkljlkjlk</h3>\r\n', '', 1),
(2, 'اكساء', 'aaaa', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_information`
--

CREATE TABLE `company_information` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8mb4 NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_information`
--

INSERT INTO `company_information` (`id`, `name`, `description`, `phone`, `email`) VALUES
(0, 'بن موسى', 'شركة عمران', '123', 'p@p.com');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sec_id` int(11) NOT NULL,
  `sec_name_en` varchar(255) NOT NULL,
  `sec_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sec_desc_ar` text CHARACTER SET utf8 NOT NULL,
  `sec_desc_en` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sec_id`, `sec_name_en`, `sec_name_ar`, `sec_desc_ar`, `sec_desc_en`) VALUES
(1, 'building', 'بناء', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sec_files`
--

CREATE TABLE `sec_files` (
  `sec_file_id` int(11) NOT NULL,
  `sec_file_name` varchar(255) NOT NULL,
  `sec_file_type` enum('image','video') NOT NULL,
  `sec_file_album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_files`
--

INSERT INTO `sec_files` (`sec_file_id`, `sec_file_name`, `sec_file_type`, `sec_file_album_id`) VALUES
(4, '8ccbc-12489427_421619488045356_6749230724248507446_o.jpg', 'image', 1),
(8, 'ee1c4-img_20151202_081301.jpg', 'image', 1),
(9, '88f19-12489427_421619488045356_6749230724248507446_o.jpg', 'image', 2),
(11, 'd2a2e-img_20151122_125132.jpg', 'image', 1),
(12, 'e6354-img_20151122_201914.jpg', 'image', 1),
(14, 'aba4c-mohammed-kurnazi-.mp4', 'video', 1),
(16, 'e6562-10380364_997057120388846_4219764247083449461_n.jpg', 'image', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `company_information`
--
ALTER TABLE `company_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sec_id`);

--
-- Indexes for table `sec_files`
--
ALTER TABLE `sec_files`
  ADD PRIMARY KEY (`sec_file_id`),
  ADD KEY `sec_file_sec_id` (`sec_file_album_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sec_files`
--
ALTER TABLE `sec_files`
  MODIFY `sec_file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
