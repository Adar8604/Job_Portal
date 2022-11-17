-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 11:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `name` varchar(15) NOT NULL,
  `apply` varchar(50) NOT NULL,
  `qual` varchar(100) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`name`, `apply`, `qual`, `year`) VALUES
('Adarsh kumar', 'App dev', 'Btech', 2015),
('ashish', 'web dev', 'btech', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `cname` varchar(15) NOT NULL,
  `position` varchar(10) NOT NULL,
  `jdes` varchar(100) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `ctc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`cname`, `position`, `jdes`, `skills`, `ctc`) VALUES
('Zomato', 'App Dev', 'vx', 'bvf', '15l'),
('xyz', 'Software D', 'nfhv', 'html', '10 lpa'),
('Microsoft', 'Software D', 'dfdvscdedsxvfdskj canh ydhafcbsxklf  ugefubLXADS', 'Java, python, DSA', '45LPA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`) VALUES
(0, 'Adarsh kumar', 'adarsh8604707199@gmail.com', 'adarsh', 2147483647),
(0, 'Ishu singh', 'adarsh8604707199@gmail.com', 'adarsh', 2147483647),
(0, 'ak4', 'adarsh572001@gmail.com', 'adarsh', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
