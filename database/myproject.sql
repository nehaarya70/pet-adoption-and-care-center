-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 01:25 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` int(13) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `name`, `contact`, `address`, `password`) VALUES
('manisha@gmail.com', 'Manisha Bhaskar', 2147483647, 'Jandiala,Amritsar,Punjab,India', 'manishabhask'),
('neha@gmail.com', 'Neha Arya', 2147483647, 'Punjab,india', 'navdeepkaur');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `id` int(30) NOT NULL,
  `breed` varchar(45) NOT NULL,
  `age` int(30) NOT NULL,
  `color` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` varchar(12) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `leftby` varchar(50) NOT NULL,
  `takenby` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`id`, `breed`, `age`, `color`, `description`, `status`, `photo`, `leftby`, `takenby`, `category`) VALUES
(40, 'Labrador', 3, 'white', 'Golden and white in color , small and playful', 'orphan', 'uploads/labrador.jpg', 'sujata', 'nobody', 'dog'),
(41, 'Pitbull', 4, 'White', 'black and white in color', 'orphan', 'uploads/pitbull.jpg', 'prativa sharma', 'nobody', 'dog'),
(42, 'Husky', 6, 'White', 'big ,Loves to play, loves human too', 'orphan', 'uploads/husky.jpg', 'Laxmi  Rana', 'nobody', 'dog'),
(43, 'German Sheperd', 6, 'Golden', 'Military trained dog', 'orphan', 'uploads/germanshepard.jpg', 'Sunkali', 'nobody', 'dog'),
(45, 'Savannah', 5, 'White', 'playful', 'adopted', 'uploads/savannahcat.jpg', 'Mehak', 'neha@gmail.com', 'cat'),
(46, 'Owl', 4, 'Brown', 'Will get your letters in time.. like old school days', 'adopted', 'uploads/owl.jpg', 'Navdeep Kaur', 'manisha@gmail.com', 'bird'),
(47, 'Macaw', 2, 'red and blue', 'Macaws are long-tailed, often colorful New World parrots.', 'adopted', 'uploads/macaw.jpg', 'Laxmi', 'mehak@gmail.com', 'bird'),
(48, 'Budgerigar', 3, 'Blue', 'The budgerigar is a long-tailed, seed-eating parrot usually nicknamed the budgie, or in American English, the parakeet. Budgies are the only species in the genus Melopsittacus. Naturally, the species ', 'adopted', 'uploads/budgerigar.jpg', 'Sunkali Budha', 'mehak@gmail.com', 'bird'),
(49, 'Persian', 2, 'White', 'The Persian cat is a long-haired breed of cat characterized by its round face and short muzzle. It is also known as the \"Persian Longhair\" in the English-speaking countries. In the Middle East, region', 'orphan', 'uploads/persiancat.jpg', 'Sunakli', 'nobody', 'cat'),
(50, 'ScotishFold', 1, 'Grey', 'The Scottish Fold is a breed of domestic cat with a natural dominant-gene mutation that affects cartilage throughout the body, causing the ears to \"fold, â€ bending forward and down towards the front', 'orphan', 'uploads/scotishfoldcat.jpg', 'prativa sharma', 'nobody', 'cat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `contact` int(13) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `name`, `contact`, `address`, `password`) VALUES
('mehak@gmail.com', 'Mehak Chawla', 2147483647, 'Amritsar, Punjab,India', 'mehakchawla'),
('prativa@gmail.com', 'Prativa Sharma', 2147483647, 'Nepal', 'prativa'),
('rajbeer@gmail.com', 'Rajbeer Kaur', 2147483647, 'Jandiala,Amritsar', 'rajbeer'),
('sujata@gmail.com', 'Sujata Magar', 2147483647, 'Nepalganj,Nepal', 'sujata');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
