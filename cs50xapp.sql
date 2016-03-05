-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2016 at 06:26 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs50xapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(30) NOT NULL,
  `pset` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `grade` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int(30) NOT NULL,
  `phone` tinyint(1) NOT NULL,
  `email` tinyint(1) NOT NULL,
  `facebook` tinyint(1) NOT NULL,
  `twitter` tinyint(1) NOT NULL,
  `google` tinyint(1) NOT NULL,
  `linkedin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `phone`, `email`, `facebook`, `twitter`, `google`, `linkedin`) VALUES
(1, 0, 0, 0, 0, 0, 0),
(13, 0, 0, 0, 0, 0, 0),
(14, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(30) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `slack` varchar(50) DEFAULT NULL,
  `bio` varchar(500) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `phone`, `slack`, `bio`, `facebook`, `twitter`, `google`, `linkedin`) VALUES
(1, '(305)345-1423', '@marliseu', 'Hello, world! I graduated the first cohort of CS50xMiami. I loved it so much, that I ended up becoming a Teaching Fellow! My goal as a TF is to get you as addicted to programming as I was when I started out. I look forward to helping you out!', 'http://www.facebook.com/marliseurscheler', 'http://www.twitter.com/marliseau', NULL, NULL),
(13, '(786)471-5378', '@dylantackoor', 'Hello world!', 'http://www.facebook.com', 'http://www.twitter.com', NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) UNSIGNED NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `is_admin`) VALUES
(1, 'Marlise', 'Urscheler', 'marlise@cs50xmiami.com', '$2y$10$Ve7zC1XssjBLUT5T1FWJfenc1tLV9tWMHurrIAsuwIVeDHTL5bXkK', 1),
(13, 'Dylan', 'Waffle', 'dtackoor@mdc.edu', '$2y$10$wAI6YRn8GHljzK7bUBGByeYuE676Q9.vcebKMVJ58lldspMvDIuKy', 0),
(14, 'Test', 'User', 'test@example.com', '$2y$10$SMqDkEJKErRDkm.wBF4E0O40SMOu22HgaPuVof41cCkcTf25Hy.Ui', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `userID` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
