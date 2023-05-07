-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 10:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `missbille`
--

-- --------------------------------------------------------

--
-- Table structure for table `contestants17`
--

CREATE TABLE `contestants17` (
  `id` int(11) NOT NULL,
  `contestant_name` varchar(30) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `height` varchar(50) NOT NULL,
  `category` varchar(15) NOT NULL,
  `institution` varchar(15) NOT NULL,
  `hobbies` varchar(30) NOT NULL,
  `modeldescription` varchar(50) NOT NULL,
  `contestant_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contestants18`
--

CREATE TABLE `contestants18` (
  `id` int(11) NOT NULL,
  `contestant_name` varchar(30) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `height` varchar(50) NOT NULL,
  `category` varchar(15) NOT NULL,
  `institution` varchar(15) NOT NULL,
  `hobbies` varchar(30) NOT NULL,
  `modeldescription` varchar(50) NOT NULL,
  `contestant_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contestants19`
--

CREATE TABLE `contestants19` (
  `id` int(11) NOT NULL,
  `contestant_name` varchar(30) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `height` varchar(50) NOT NULL,
  `category` varchar(15) NOT NULL,
  `institution` varchar(15) NOT NULL,
  `hobbies` varchar(30) NOT NULL,
  `modeldescription` varchar(50) NOT NULL,
  `contestant_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contestants21`
--

CREATE TABLE `contestants21` (
  `id` int(11) NOT NULL,
  `contestant_name` varchar(30) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `height` varchar(50) NOT NULL,
  `category` varchar(15) NOT NULL,
  `institution` varchar(15) NOT NULL,
  `hobbies` varchar(30) NOT NULL,
  `modeldescription` varchar(50) NOT NULL,
  `contestant_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contestants22`
--

CREATE TABLE `contestants22` (
  `id` int(11) NOT NULL,
  `contestant_name` varchar(30) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `height` varchar(50) NOT NULL,
  `category` varchar(15) NOT NULL,
  `institution` varchar(15) NOT NULL,
  `hobbies` varchar(30) NOT NULL,
  `modeldescription` varchar(50) NOT NULL,
  `contestant_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contestants23`
--

CREATE TABLE `contestants23` (
  `id` int(11) NOT NULL,
  `contestant_name` varchar(30) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `height` varchar(50) NOT NULL,
  `category` varchar(15) NOT NULL,
  `institution` varchar(15) NOT NULL,
  `hobbies` varchar(30) NOT NULL,
  `modeldescription` varchar(50) NOT NULL,
  `contestant_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contestants23`
--

INSERT INTO `contestants23` (`id`, `contestant_name`, `dob`, `height`, `category`, `institution`, `hobbies`, `modeldescription`, `contestant_image`) VALUES
(8, 'Ogu Queeneth', '04 - December', '6ft 1in', 'Miss Bille', 'University of O', 'Singing and Football', 'lovable personality', 'missbille2020_portrait.jpg'),
(9, 'Biobelema Angela', '1st October', '5ft 8in', 'Miss Bille', 'Uniport', 'Singing', 'fun to be with', 'missbillekingdom2020.jpg'),
(10, 'Iwofe Ibiba', '20 January', '6ft', 'Miss Bille', 'Kenpoly', 'Swimming and Reading', 'Workaholic', 'missbille2019.jpg'),
(12, 'Kate', '21st December', '5 9\"', 'Missbille', 'Unilag', 'Travelling', 'Neat and Organized and Disciplined', 'nexus7-dark2.png');

-- --------------------------------------------------------

--
-- Table structure for table `contestants24`
--

CREATE TABLE `contestants24` (
  `id` int(11) NOT NULL,
  `contestant_name` varchar(30) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `height` varchar(50) NOT NULL,
  `category` varchar(15) NOT NULL,
  `institution` varchar(15) NOT NULL,
  `hobbies` varchar(30) NOT NULL,
  `modeldescription` varchar(50) NOT NULL,
  `contestant_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contestants24`
--

INSERT INTO `contestants24` (`id`, `contestant_name`, `dob`, `height`, `category`, `institution`, `hobbies`, `modeldescription`, `contestant_image`) VALUES
(1, 'Ibiteinbo-Ofori Horsfall', '2nd January', '5ft 3in', 'Mr. Bille', 'Uniport', 'Driving, Travelling', 'Tall, Dark and Handsome', 'missbille2019.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow_images_table`
--

CREATE TABLE `slideshow_images_table` (
  `id` int(11) NOT NULL,
  `slide_caption` varchar(255) NOT NULL,
  `slide_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slideshow_images_table`
--

INSERT INTO `slideshow_images_table` (`id`, `slide_caption`, `slide_photo`) VALUES
(1, 'photoshoot: Isam Picking', '../slideshow/queensfarming.jpg'),
(2, 'Photoshoot: 2019 Queens', '../slideshow/missbillequeens.jpg'),
(3, 'new logo test', '../slideshow/betmystro-logo-white.png');

-- --------------------------------------------------------

--
-- Table structure for table `yr17`
--

CREATE TABLE `yr17` (
  `id` int(11) NOT NULL,
  `gal_caption` text NOT NULL,
  `gal_image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yr18`
--

CREATE TABLE `yr18` (
  `id` int(11) NOT NULL,
  `gal_caption` text NOT NULL,
  `gal_image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `yr18`
--

INSERT INTO `yr18` (`id`, `gal_caption`, `gal_image_url`) VALUES
(1, 'photoshoot: Isam Picking', 'farmingphoto.jpg'),
(2, 'missbille logo', 'missbillelogo.jpg'),
(3, 'missbille logo', 'missbillelogo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `yr19`
--

CREATE TABLE `yr19` (
  `id` int(11) NOT NULL,
  `gal_caption` text NOT NULL,
  `gal_image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `yr19`
--

INSERT INTO `yr19` (`id`, `gal_caption`, `gal_image_url`) VALUES
(1, 'Photoshoot: 2019 Queens', 'missbille2019.jpg'),
(2, 'Photoshoot: 2019 Queens', '2020cultureFlier.jpg'),
(3, 'Photoshoot: 2019 Queens', '2020cultureFlier.jpg'),
(4, 'Photoshoot: 2019 Queens', 'android.jpeg'),
(5, 'Photoshoot: 2019 Queens', 'missbillekingdom2020.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `yr21`
--

CREATE TABLE `yr21` (
  `id` int(11) NOT NULL,
  `gal_caption` text NOT NULL,
  `gal_image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yr22`
--

CREATE TABLE `yr22` (
  `id` int(11) NOT NULL,
  `gal_caption` text NOT NULL,
  `gal_image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yr23`
--

CREATE TABLE `yr23` (
  `id` int(11) NOT NULL,
  `gal_caption` text NOT NULL,
  `gal_image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yr24`
--

CREATE TABLE `yr24` (
  `id` int(11) NOT NULL,
  `gal_caption` text NOT NULL,
  `gal_image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contestants17`
--
ALTER TABLE `contestants17`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contestants18`
--
ALTER TABLE `contestants18`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contestants19`
--
ALTER TABLE `contestants19`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contestants21`
--
ALTER TABLE `contestants21`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contestants22`
--
ALTER TABLE `contestants22`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contestants23`
--
ALTER TABLE `contestants23`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contestants24`
--
ALTER TABLE `contestants24`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshow_images_table`
--
ALTER TABLE `slideshow_images_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yr17`
--
ALTER TABLE `yr17`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yr18`
--
ALTER TABLE `yr18`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yr19`
--
ALTER TABLE `yr19`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yr21`
--
ALTER TABLE `yr21`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yr22`
--
ALTER TABLE `yr22`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yr23`
--
ALTER TABLE `yr23`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yr24`
--
ALTER TABLE `yr24`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contestants17`
--
ALTER TABLE `contestants17`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contestants18`
--
ALTER TABLE `contestants18`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contestants19`
--
ALTER TABLE `contestants19`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contestants21`
--
ALTER TABLE `contestants21`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contestants22`
--
ALTER TABLE `contestants22`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contestants23`
--
ALTER TABLE `contestants23`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contestants24`
--
ALTER TABLE `contestants24`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slideshow_images_table`
--
ALTER TABLE `slideshow_images_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `yr17`
--
ALTER TABLE `yr17`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `yr18`
--
ALTER TABLE `yr18`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `yr19`
--
ALTER TABLE `yr19`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `yr21`
--
ALTER TABLE `yr21`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `yr22`
--
ALTER TABLE `yr22`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `yr23`
--
ALTER TABLE `yr23`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `yr24`
--
ALTER TABLE `yr24`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
