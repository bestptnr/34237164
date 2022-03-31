-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 31, 2022 at 10:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meeting`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `head` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numattend` int(3) NOT NULL,
  `listname` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `roomid` int(3) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `addequipment` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `uesrid` int(3) NOT NULL,
  `remark` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `meetfile` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(244) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `head`, `numattend`, `listname`, `roomid`, `start`, `end`, `addequipment`, `uesrid`, `remark`, `meetfile`, `color`) VALUES
(10, 'test', 'นายกเทศมนตรี', 10, '12', 9, '2022-03-11 11:54:00', '2022-03-12 11:55:00', '132', 1, '12', 'upload/1646974540.pdf', ''),
(12, 'test2', 'รองนายกเทศมนตรี1', 100, '40', 12, '2022-03-25 10:46:00', '2022-03-26 10:46:00', '40', 1, 'ไม่มี', 'upload/1648179992.pdf', ''),
(13, 'test3', 'รองนายกเทศมนตรี1', 100, '100', 11, '2022-03-27 10:48:00', '2022-03-31 10:48:00', '40', 1, 'ไม่มี', 'upload/1648180155.pdf', ''),
(14, 'test4', 'รองนายกเทศมนตรี3', 10, '10', 13, '2022-03-31 15:49:00', '2022-04-02 15:49:00', '0', 1, '0', 'upload/1648716611.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomid` int(3) NOT NULL,
  `roomname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` int(3) NOT NULL,
  `projector` int(2) NOT NULL,
  `microphone` int(2) NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomid`, `roomname`, `location`, `capacity`, `projector`, `microphone`, `others`) VALUES
(7, 'ห้อง1', 'ku', 100, 2, 3, 'test'),
(11, 'ห้อง2', 'มหาลัยขอนแก่น', 300, 2, 3, 'ไม่มี'),
(12, 'ห้อง3', 'test', 30, 30, 30, ''),
(13, 'kku', 'มหาวิทยาลัยขอนแก่น', 300, 0, 10, 'ไม่มี');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`, `fname`, `lname`, `tel`) VALUES
(1, 'admin', '1234', '01', 'Otto', 'Potter', '0613843639'),
(2, 'user1', '1234', '02', 'User', 'User', '0925666439');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `roomid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
