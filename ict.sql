-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2016 at 09:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ict`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '0',
  `surname` varchar(50) NOT NULL DEFAULT '0',
  `major` varchar(50) NOT NULL DEFAULT '0',
  `faculty` varchar(50) NOT NULL DEFAULT '0',
  `role` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `surname`, `major`, `faculty`, `role`, `email`) VALUES
(3, '57022433', 'à¸¡à¸‡à¸„à¸¥', 'à¸¡à¸“à¸µà¸§à¸£à¸£à¸“à¹Œ', 'à¸§à¸´à¸¨à¸§à¸à¸£à¸£à¸¡à¸‹à¸­à¸Ÿà¸•à¹Œà¹à¸§à¸£à¹', 'à¸„à¸“à¸°à¹€à¸—à¸„à¹‚à¸™à¹‚à¸¥à¸¢à¸µà¸ªà¸²à¸£à¸ªà¸', 'Student', '57022433@live.up.ac.th'),
(28, '57022512', 'à¸¨à¸£à¸²à¸§à¸¸à¸’à¸´', 'à¸›à¸à¸„à¸³', 'à¸§à¸´à¸¨à¸§à¸à¸£à¸£à¸¡à¸‹à¸­à¸Ÿà¸•à¹Œà¹à¸§à¸£à¹', 'à¸„à¸“à¸°à¹€à¸—à¸„à¹‚à¸™à¹‚à¸¥à¸¢à¸µà¸ªà¸²à¸£à¸ªà¸', 'Student', '57022512@live.up.ac.th'),
(45, '57032478', 'à¸ªà¸‡à¸à¸£à¸²à¸™à¸•à¹Œ', 'à¸ªà¸²à¸£à¸°à¸à¸´à¸ˆ', 'à¸™à¸´à¸•à¸´à¸¨à¸²à¸ªà¸•à¸£à¹Œ', 'à¸„à¸“à¸°à¸™à¸´à¸•à¸´à¸¨à¸²à¸ªà¸•à¸£à¹Œ', 'Student', '57032478@live.up.ac.th'),
(46, '57074115', 'à¸›à¸£à¸µà¸¢à¸²à¸™à¸¸à¸Š', 'à¸ªà¸°à¸—à¹‰à¸²à¸™', 'à¸à¸²à¸£à¸šà¸±à¸à¸Šà¸µ', 'à¸„à¸“à¸°à¸§à¸´à¸—à¸¢à¸²à¸à¸²à¸£à¸ˆà¸±à¸”à¸à¸²à¸', 'Student', '57074115@live.up.ac.th');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
