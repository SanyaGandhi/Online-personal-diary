-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 12:36 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opd`
--

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `hash` text NOT NULL,
  `entry` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`pid`, `uid`, `title`, `description`, `hash`, `entry`, `created_at`) VALUES
(1, 1, 'Entry one', NULL, '', 'This is my firsy diary entry', '2019-11-04'),
(2, 1, 'First Post through site', NULL, '', '<p>Hi Minnaasan</p>\r\n', '2019-11-05'),
(6, 1, 'Comming back home', NULL, '', '<p>It is kind of annoying, that grp of ppl who roam around me,...I am i ]sdlv[s</p>\r\n', '2019-11-05'),
(7, 1, 'Smart India Hackathon 2019 Winner', NULL, '', '<p>fsed</p>\r\n', '2019-11-05'),
(8, 1, 'here we go again', NULL, '', '<p>It is kind of annoying, that grp of ppl who roam around me,...I am i ]sdlv[s</p>\r\n', '2019-11-05'),
(13, 5, 'checking uids', NULL, '', '<p>uidcheck_03</p>\r\n', '2019-11-05'),
(15, 1, 'uidCheck_04', NULL, '', '<p>uid check</p>\r\n', '2019-11-05'),
(17, 2, 'EMo girl dairy', NULL, '', '<p>fack u</p>\r\n', '2019-11-05'),
(18, 2, 'uid_check_05', NULL, '', '<p>uid check</p>\r\n', '2019-11-05'),
(20, 3, 'Tom', 'Jerry', '#me', '<p>hahahahaha,...OUCH!!</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-11-05'),
(21, 3, 'oho', 'never', '#jonyoumf', '<p>hohohoh..</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>so like this black cat jon comes and becomes a baby, now my owner wants me to throw me out</p>\r\n', '2019-11-05'),
(23, 2, 'uid_check_06', NULL, '', '<p>uid check</p>\r\n', '2019-11-05'),
(24, 1, 'uidCheck_04', NULL, '', '<p>uid check</p>\r\n', '2019-11-05'),
(26, 1, 'uid_check_07', NULL, '', '<p>uid check</p>\r\n', '2019-11-05'),
(27, 1, 'post 10000', NULL, '', '<p>kuch toh hai</p>\r\n', '2019-11-05'),
(28, 1, 'post 10000', NULL, '', '<p>kuch toh hai</p>\r\n', '2019-11-05'),
(29, 1, 'Now its is perfect', NULL, '', '<p>YAAASSS!!</p>\r\n', '2019-11-05'),
(30, 1, 'hentai tier list', NULL, '', '<p>pisu hame</p>\r\n', '2019-11-16'),
(31, 1, 'Through new gui', NULL, '', '<p>watching something</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-11-16'),
(32, 1, 'my first post', NULL, '', '<p>hi</p>\r\n', '2019-11-17'),
(33, 5, 'after uid ecxtraction', NULL, '', '<p>test</p>\r\n', '2019-11-17'),
(35, 5, 'test 10001', NULL, '', '<p>after show user post redirected</p>\r\n', '2019-11-17'),
(36, 5, 'testing 42', NULL, '', '<p>42 my fav</p>\r\n', '2019-11-17'),
(37, 5, 'after canges', NULL, '', '<p>hi all</p>\r\n', '2019-11-17'),
(38, 5, 'after few more changes', NULL, '', '<p>jusst waannna get doen with it</p>\r\n', '2019-11-17'),
(39, 5, 'after properly adding hash and desc', 'again some bs', '#php #ip #mtiredaf $plsSaveme', '<p>me toooooo!!</p>\r\n', '2019-11-17'),
(41, 5, 'something is definetly wrong', 'again some bs', '#php #ip #mtiredaf #plsSaveme #ihavelostfaith', '<p>foff</p>\r\n', '2019-11-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entry`
--
ALTER TABLE `entry`
  ADD CONSTRAINT `entry_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
