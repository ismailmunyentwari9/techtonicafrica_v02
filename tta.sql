-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2024 at 01:42 PM
-- Server version: 5.7.44-cll-lve
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dfqoaxkt_tta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(250) NOT NULL,
  `adminPassword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminName`, `adminPassword`) VALUES
(1, 'Ismail', 'ismail615243');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `student_id` int(11) DEFAULT NULL,
  `level_name` varchar(250) DEFAULT NULL,
  `level_pin` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`student_id`, `level_name`, `level_pin`) VALUES
(NULL, 'Level_1', 'level1_121212'),
(1, 'level_1', 'level1_121212');

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
  `payment_confirmation` varchar(250) NOT NULL DEFAULT 'titans_2024'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `titans`
--

INSERT INTO `titans` (`student_id`, `full_names`, `email`, `age`, `phone`, `school`, `nationality`, `password`, `payment_confirmation`) VALUES
(0, 'ismail on server', 'ismail@gmail.com', 0, '0785837748', 'Excella school', 'rwandan', '121212', 'titans_2024'),
(1, 'Iradukunda Sammy ', 'iradukundasamuel084@gmail.com', 0, '0798894897', 'Excella School', '', 'samy9390', 'titans_2024'),
(2, 'Safaa Yusuf', 'safay410@gmail.com', 0, '+250792404515', 'Excella School', '', 'zalzal22', 'titans_2024'),
(3, 'Ruti Avi', 'youngavi111@gmail.com', 0, '0793755320', 'Excella School', '', 'rutiavi2007@', 'titans_2024'),
(4, 'Ucyeye ngoga blessing ', 'ucyeyengogablessing@gmail.com', 0, '0788407152', 'Excella School', '', 'yeyecu@635', 'titans_20241000'),
(5, 'Idris Puche Scott', 'scottidris6@gmail.com', 0, '0793165379', 'Excella school', 'Liberian', '0886581168WO5', 'titans_20241003'),
(6, 'ingabire blessing', 'blessiingabire@gmail.com', 0, '0782103467', 'Excella School', '', 'Bless@$12k', 'titans_2024'),
(7, 'Uzair Abdul Samed Patel', 'uzair07patel@gmail.com', 0, '0738019704', 'Excella School', '', 'Uzair91518', 'titans_20242000'),
(8, 'Kwizera Gift David', 'giftkwizera7@gmail.com', 0, '0735460560', 'Excella School', '', 'Kinyarwanda', 'titans_2024'),
(9, 'IMFURA NKUBA Kenny', 'patrickkagabo15@gmail.com', 0, '0788499428', 'Excella School', '', 'amafiriti1000', 'titans_2024'),
(10, 'COLA ABDALLA', 'colaabdalla123@gmail.com', 0, '+250794098582', 'Excella School', '', 'RWANDANBOII123', 'titans_2024'),
(11, 'Chlomi Justifie Gutabarwa', 'gutabarwaa@gmail.com', 0, '0790782356', 'Excella School', '', 'Holy.Spirit', 'titans_2024'),
(12, 'Tumushime Tanga Prince', 'Marizamunah28@gmail.com', 0, '0787622065', 'Excella School', '', 'tungatunga1', 'titans_2024'),
(13, 'Ian Mugisha Iganze Kyle', 'ianmugisha515@gmail.com', 0, '0782220995', 'Excella School', '', 'HisexcellencyKagame', 'titans_2024'),
(14, 'Uwase Kaneza Rhinan Chloe', 'chloerhinan56@gmail.com', 0, '0788351842', 'Excella School', '', '1q2w/.,m', 'titans_2024'),
(15, 'Beni-Jerry Kana', 'benybwitonzi@gmail.com', 0, '0792107388', 'Excella School', '', '12451245', 'titans_2024'),
(16, 'Dikinz Kama david ', 'dikinzkamadvd@gmail.com', 0, '0781310919', 'Excella School\r\n', 'Gabonese', 'Dikinz19', 'titans_2024'),
(17, 'Mugabo fiston', 'mugabofiston5@gmail.com', 18, '0783133025', 'ESSJT', 'Rwandan', 'mastergang', 'titans_2024'),
(18, 'Byiringiro Elchadai', 'byiringiroelchadai50@gmail.com', 18, '0783468983', 'College de bethel aparude', 'Rwandese', '0783468983', 'titans_2024'),
(19, 'Muhire Levy', 'muhirelevi@gmail.com', 16, '0780117007', 'Excella school', 'Rwandan', 'Matakuriyana1980,,,', 'titans_2024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `titans`
--
ALTER TABLE `titans`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `titans`
--
ALTER TABLE `titans`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `levels`
--
ALTER TABLE `levels`
  ADD CONSTRAINT `levels_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `titans` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
