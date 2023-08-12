-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 03:58 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assel-eng`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
`courseid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `planid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseid`, `id`, `planid`) VALUES
(1, 13, 1),
(2, 8, 2),
(3, 11, 3);

-- --------------------------------------------------------

--
-- Table structure for table `splans`
--

CREATE TABLE IF NOT EXISTS `splans` (
`planid` int(11) NOT NULL,
  `planname` varchar(30) NOT NULL,
  `planlevel` varchar(20) NOT NULL,
  `planhours` varchar(4) NOT NULL,
  `planstatus` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `splans`
--

INSERT INTO `splans` (`planid`, `planname`, `planlevel`, `planhours`, `planstatus`) VALUES
(1, 'English 101', 'Beginner', '30', 'Approved'),
(2, 'English with Emily in Paris', 'Intermediate', '15', 'Approved'),
(3, 'Speaking session', 'Pre-Intermediate', '12', 'Approved'),
(4, 'IELTS preparation', 'Pre-Intermediate', '48', 'Approved'),
(5, 'SAT Reading Preparation', 'Upper-Intermediate', '36', 'Approved'),
(6, 'Tender is the night Book club', 'Advanced', '8', 'Not approved');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(10) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `options` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `surname`, `phonenumber`, `options`, `created_at`) VALUES
(7, 'aruryss', '$2y$10$SyszBkfx/ehiU2eQJLjT2eYaqVpndJMA0Pz3vESAEBZSRsf7pwbmK', 'Aruzhan', 'Ryssayeva', '+774710625', 'ahnryijin@gmail.com', '2021-04-08 21:11:37'),
(8, 'arurys', '$2y$10$xgo226szASHkaZXs//5pS.HEjpZB/o4dY6f1ouKycuvuSHtVQhcV.', 'Aruzhan', 'Ryssayeva', '+774710625', 'ahnryijin@gmail.com', '2021-04-08 21:27:50'),
(9, 'admin', '$2y$10$j6FqXDZwdDmDb4XOAqpYI.RyRulak8JWeyxorX.IHwnezHTa3jjIC', 'Admin', 'Admin', 'Admin', 'Admin', '2021-04-12 19:04:31'),
(10, 'akniett', '$2y$10$e.lALpLNSf6c0B3KiByXVujY.37Fs2wKxIEWJ8JHPWSTEEuHg2WWi', 'Akniet', 'Tusupova', '+774710689', 'xaruzhanrys@gmail.com', '2021-09-29 10:43:17'),
(11, 'saidaa', '$2y$10$SZJWI.iRhJOrl2VzJc6sbu9BewafrZqgyYUpDFFJAADfvCZsJhmjS', 'Saida', 'Lyabiv', '+774710635', 'ahnryujun@gmail.com', '2021-10-12 14:13:58'),
(12, 'rtyui', '$2y$10$btU1xqjxzOkRr9CozSLb4eOFpIlxaSiGOwW72DlCf5U.2G9/KIdla', 'opiouytrsd', ';lkjhgfdsxcvbhjj', '+774710625', ';lkjhgfdxcvb', '2021-10-15 12:08:37'),
(13, 'aizhanm', '$2y$10$MZji3WIFzh7YAfyBGIyd8e4vP7mS1zkY5OuiDuUl7CzKnR7s4D2y.', 'Aizhan', 'Maratova', '+774710625', 'aizhan.maratova@gmail.com', '2021-10-17 17:08:35'),
(14, 'aizhanr', '$2y$10$83lVvyNMcYYdc3NYUZskku3eH5eyfUcUHjdw.CnNCoGghaoH6Zbha', 'Aru', 'Kairatova', '7471062557', 'ahnryijin@gmail.com', '2021-10-17 17:30:21'),
(15, 'Aselek', '$2y$10$950phEFsIryMko5u9LrGdeak5h0GdsTYn4nYGC0PHRg1gBTPUG6Lq', 'Assel', 'Ospanova', '+770772224', 'asell.ospanova@gmail.com', '2021-11-14 20:11:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
 ADD PRIMARY KEY (`courseid`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `planid` (`planid`), ADD UNIQUE KEY `courseid` (`courseid`), ADD KEY `id_2` (`id`), ADD KEY `planid_2` (`planid`);

--
-- Indexes for table `splans`
--
ALTER TABLE `splans`
 ADD PRIMARY KEY (`planid`), ADD UNIQUE KEY `planid` (`planid`), ADD UNIQUE KEY `planid_2` (`planid`), ADD UNIQUE KEY `planname` (`planname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `splans`
--
ALTER TABLE `splans`
MODIFY `planid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`planid`) REFERENCES `splans` (`planid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
