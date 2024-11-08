-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 05:05 PM
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
-- Database: `tta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(250) NOT NULL,
  `adminPassword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminName`, `adminPassword`) VALUES
(1, 'Ismail', 'ismail615243');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `password` varchar(250) NOT NULL,
  `task_name` varchar(250) NOT NULL,
  `level_name` varchar(250) NOT NULL,
  `week_name` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `pull_link` varchar(250) NOT NULL,
  `loom_link` varchar(250) NOT NULL,
  `comments` varchar(250) NOT NULL DEFAULT 'None...',
  `decision` varchar(250) NOT NULL DEFAULT 'pending...'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `password`, `task_name`, `level_name`, `week_name`, `date`, `pull_link`, `loom_link`, `comments`, `decision`) VALUES
(1, 'zalzal22', 'html task', 'level_1', '0', '2024-06-21', 'https://github.com/Safaa-source/techtonic.git', 'https://github.com/Safaa-source/techtonic.git', 'None...', 'pending...'),
(2, 'Uzair91518', 'try', 'level_1', '0', '2024-06-22', 'https://github.com/uzz-ptl7/techtonic.git', 'https://github.com/uzz-ptl7/techtonic.git', 'None...', 'pending...'),
(4, 'Dikinz19', 'david', 'level_1', '0', '2006-04-19', 'https://github.com/dikinzkd/techtonicafrica.git', 'https://github.com/dikinzkd/techtonicafrica.git', 'None...', 'pending...'),
(5, '0886581168WO5', 'nvhjvkuh', 'level_1', '0', '2222-02-22', 'https://github.com/SCOTTWO5/SCOTTWO5.git', 'https://github.com/SCOTTWO5/SCOTTWO5.git', 'None...', 'pending...'),
(9, 'Dikinz19', ' BrewMaster Coffee Shop', 'level_1', '0', '2024-06-30', 'https://github.com/dikinzkd/moka-coffee-bar.git', 'https://www.loom.com/share/01e560391e4843a6b08a9ab81d05e994', 'None...', 'pending...'),
(10, 'S&m20017!', 'BrewMaster Coffee Shop', 'level_1', '0', '2024-06-30', 'https://github.com/jennilore/Coffee-Shop.git', 'https://www.loom.com/share/818d89bf14844a1ab0648e3c31f4f588?sid=e2f29230-84f1-4ad4-9eda-349f087adc1a', 'None...', 'pending...'),
(11, '12451245', 'BrewMaster Coffee Shop', 'level_1', '0', '2024-06-30', 'https://github.com/B-Jayree/TECH_TONIC_AFRICA/tree/main/Project1', 'https://www.loom.com/share/c24f3c81af7640f195cabfc188967a60?sid=a2f14b0b-2af5-4756-9e2b-6f7938be6099', 'None...', 'pending...'),
(12, '121212', 'Html Page', 'level_1', 'week_1', '2024-06-30', 'https://github.com/ismailmunyentwari9/Vet-clinic-database/pull/3', 'https://www.loom.com/share/404b5aa0f1924bc486d7240787dc3106?sid=40dd4292-92fc-4ed1-ae4d-8f7b6134b7c2', 'Safaa, you\'ve done an outstanding job on your first project! Keep up the great work and continue to build on these foundational skills. Your attention to detail and commitment to learning are evident in this project. Well done!', 'Approved ✔'),
(13, '121212', 'Html Page', 'level_1', 'week_5', '2024-06-12', 'https://github.com/ismailmunyentwari9/Vet-clinic-database/pull/1', 'https://www.loom.com/share/404b5aa0f1924bc486d7240787dc3106?sid=40dd4292-92fc-4ed1-ae4d-8f7b6134b7c2', 'wapi', 'Changes required ❌'),
(14, '121212', 'BrewMaster Coffee Shop', 'level_1', 'week_1', '2024-07-30', 'https://github.com/ismailmunyentwari9/Vet-clinic-database/pull/4', 'https://www.loom.com/share/404b5aa0f1924bc486d7240787dc3106?sid=40dd4292-92fc-4ed1-ae4d-8f7b6134b7c2', 'TechTitan, you\'ve done an outstanding job on your first project! Keep up the great work and continue to build on these foundational skills. Your attention to detail and commitment to learning are evident in this project. Well done!', 'Approved ✔');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `level_name` varchar(250) NOT NULL,
  `level_pin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level_name`, `level_pin`) VALUES
(1, 'level_1', 'level1_grad_20241000'),
(2, 'level_1', 'level1_grad_20241004'),
(3, 'level_1', 'level1_grad_20241000'),
(4, 'level_1', 'level1_grad_20241003'),
(5, 'level_1', 'level1_grad_20241005'),
(6, 'level_1', 'level1_grad_20241006'),
(7, 'level_1', 'level1_grad_20241007'),
(8, 'level_1', 'level1_grad_20241008'),
(9, 'level_1', 'level1_grad_20241009'),
(10, 'level_1', 'level1_grad_2024110'),
(11, 'level_1', 'level1_2024200'),
(12, 'level_1', 'level1_2024201'),
(13, 'level_1', 'level1_2024202'),
(14, 'level_1', 'level1_2024203'),
(15, 'level_1', 'level1_2024204'),
(16, 'level_1', 'level1_2024205'),
(17, 'level_1', 'level1_2024206'),
(18, 'level_1', 'level1_2024207'),
(19, 'level_1', 'level1_2024208'),
(20, 'level_1', 'level1_2024209'),
(21, 'level_2', 'level2_20241009'),
(22, 'level_2', 'level2_2024110'),
(23, 'level_2', 'level2_20241000'),
(24, 'level_2', 'level2_20241004'),
(25, 'level_2', 'level2_20241000'),
(26, 'level_2', 'level2_20241003'),
(27, 'level_2', 'level2_20241005'),
(28, 'level_2', 'level2_20241006'),
(29, 'level_2', 'level2_20241007'),
(30, 'level_2', 'level2_20241008');

-- --------------------------------------------------------

--
-- Table structure for table `titans`
--

CREATE TABLE `titans` (
  `student_id` int(11) NOT NULL,
  `full_names` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `age` int(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `school` varchar(250) NOT NULL,
  `nationality` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `payment_confirmation` varchar(250) NOT NULL DEFAULT 'titans_2024',
  `recommendend` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `titans`
--

INSERT INTO `titans` (`student_id`, `full_names`, `email`, `age`, `phone`, `school`, `nationality`, `password`, `payment_confirmation`, `recommendend`) VALUES
(0, 'ismail on server', 'ismail@gmail.com', 18, '0785837748', 'Excella school', 'rwandan', '121212', 'titans_2024', ''),
(1, 'Safaa Yusuf', 'safay410@gmail.com', 17, '0792404515', 'Excella School', 'Sudanese', 'zalzal22', 'titans_20241004', ''),
(2, 'Ruti Avi', 'youngavi111@gmail.com', 0, '0793755320', 'Excella School', '', 'rutiavi2007@', 'titans_2024', ''),
(3, 'Ucyeye ngoga blessing ', 'ucyeyengogablessing@gmail.com', 0, '0788407152', 'Excella School', '', 'yeyecu@635', 'titans_20241000', ''),
(4, 'Idris Puche Scott', 'scottidris6@gmail.com', 0, '0793165379', 'Excella school', 'Liberian', '0886581168WO5', 'titans_20241003', ''),
(5, 'ingabire blessing', 'blessiingabire@gmail.com', 0, '0782103467', 'Excella School', '', 'Bless@$12k', 'titans_2024', ''),
(6, 'Uzair Abdul Samed Patel', 'uzair07patel@gmail.com', 0, '0738019704', 'Excella School', '', 'Uzair91518', 'titans_20242000', ''),
(7, 'COLA ABDALLA', 'colaabdalla123@gmail.com', 0, '+250794098582', 'Excella School', '', 'RWANDANBOII123', 'titans_20241007\r\n', ''),
(8, 'Chlomi Justifie Gutabarwa', 'gutabarwaa@gmail.com', 0, '0790782356', 'Excella School', '', 'Holy.Spirit', 'titans_2024', ''),
(9, 'Tumushime Tanga Prince', 'Marizamunah28@gmail.com', 0, '0787622065', 'Excella School', '', 'tungatunga1', 'titans_20241005', ''),
(10, 'Ian Mugisha Iganze Kyle', 'ianmugisha515@gmail.com', 0, '0782220995', 'Excella School', '', 'HisexcellencyKagame', 'titans_2024', ''),
(11, 'Uwase Kaneza Rhinan Chloe', 'chloerhinan56@gmail.com', 0, '0788351842', 'Excella School', '', '1q2w/.,m', 'titans_20241009\r\n', ''),
(12, 'Beni-Jerry Kana', 'benybwitonzi@gmail.com', 0, '0792107388', 'Excella School', '', '12451245', 'titans_20241008', ''),
(13, 'Dikinz Kama david ', 'dikinzkamadvd@gmail.com', 0, '0781310919', 'Excella School\r\n', 'Gabonese', 'Dikinz19', 'titans_20241006', ''),
(14, 'Muhire Levy', 'muhirelevi@gmail.com', 16, '0780117007', 'Excella school', 'Rwandan', 'Matakuriyana1980,,,', 'titans_2024', '');

-- --------------------------------------------------------

--
-- Table structure for table `titans2`
--

CREATE TABLE `titans2` (
  `student_id` int(11) NOT NULL,
  `full_names` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `school` varchar(250) NOT NULL,
  `nationality` varchar(250) NOT NULL DEFAULT 'Rwandan',
  `password` varchar(250) NOT NULL,
  `payment_confirmation` varchar(250) NOT NULL DEFAULT 'titans_2024',
  `recommended` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `titans2`
--

INSERT INTO `titans2` (`student_id`, `full_names`, `email`, `age`, `phone`, `school`, `nationality`, `password`, `payment_confirmation`, `recommended`) VALUES
(1, 'Kellia ituze Williams ', 'ikelliawilliams@gmail.com', 18, '0784925493', 'Lycee Notre Dame de lavisitation ', 'Rwandan ', 'kelly@willy24', 'titans_2024', 'social-media'),
(2, 'Ismail', 'ismai@gmail.com', 18, '0785837748', 'Test', 'Test', 'test', 'titans_2024', 'ads'),
(3, 'Giraneza Alimence', 'giranezaalmence@gmail.com', 18, '0783688098', 'Graduated ', 'giranezaalmence@gmail.com', 'Alimence6002', 'titans_2024', 'social-media'),
(4, 'Giraneza Alimence', 'giranezaalmence@gmail.com', 18, '0783688098', 'Graduated ', 'Rwanda', 'Alimence6002', 'titans_2024', 'social-media'),
(5, 'MUGISHA Safi ValÃ¨re', 'safivalere11@gmail.com', 15, '0785229056', 'Excella school', 'Rwandan', 'Ignace2011', 'titans_2024', 'friends');

-- --------------------------------------------------------

--
-- Table structure for table `waitinglist`
--

CREATE TABLE `waitinglist` (
  `id` int(11) NOT NULL,
  `parent` varchar(250) NOT NULL DEFAULT '--------------------',
  `names` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `nationality` varchar(250) NOT NULL,
  `school` varchar(250) NOT NULL,
  `parentPhone` varchar(250) NOT NULL,
  `studentPhone` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titans`
--
ALTER TABLE `titans`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `titans2`
--
ALTER TABLE `titans2`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `waitinglist`
--
ALTER TABLE `waitinglist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `titans`
--
ALTER TABLE `titans`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `titans2`
--
ALTER TABLE `titans2`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `waitinglist`
--
ALTER TABLE `waitinglist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
