-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2024 at 03:54 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_journal`
--

CREATE TABLE `tbl_journal` (
  `tbl_journal_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `moments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_journal`
--

INSERT INTO `tbl_journal` (`tbl_journal_id`, `image`, `date`, `location`, `moments`) VALUES
(1, 'japan.jpg', '2024-02-06', 'Japan', 'Sipping fragrant matcha under the vibrant canopy of Arashiyama Bamboo Grove, sunlight dappling through the emerald stalks, feeling a timeless serenity wash over me. Standing at the precipice of Mount Fuji, the clouds swirling below like a cotton candy oce'),
(2, 'korea.jpg', '2023-02-19', 'Korea', 'Strolling through Gyeongbokgung Palace under a blanket of cherry blossoms: Imagine yourself amidst a sea of delicate pink blooms as you wander through the majestic courtyards and pavilions of Gyeongbokgung Palace. The soft petals dance in the spring breez'),
(3, 'london.jpg', '2024-01-03', 'London', 'Tower Bridge gleamed beneath a golden sunset as we cruised the Thames, Big Ben\'s chimes fading into the bustling city hum.\r\nLaughter pealed through Camden Market\'s labyrinthine stalls, each quirky booth overflowing with treasures lost and found.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_journal`
--
ALTER TABLE `tbl_journal`
  ADD PRIMARY KEY (`tbl_journal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_journal`
--
ALTER TABLE `tbl_journal`
  MODIFY `tbl_journal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
