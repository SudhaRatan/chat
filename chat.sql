-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 01:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat` varchar(60) NOT NULL,
  `id` varchar(20) NOT NULL,
  `toid` varchar(20) NOT NULL,
  `msg` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`chat`, `id`, `toid`, `msg`) VALUES
('rohitchinna', 'rohit', 'chinna', 'hi vro'),
('chinnarohit', 'chinna', 'rohit', 'Hi ra'),
('chinnarohit', 'chinna', 'rohit', 'Jekf'),
('chinnarohit', 'chinna', 'rohit', 'Yo'),
('rohitchinna', 'rohit', 'chinna', 'em pikutunnav'),
('rohitchinna', 'rohit', 'chinna', 'yo\r\n'),
('rohitchinna', 'rohit', 'chinna', 'hi\r\n'),
('chinnarohit', 'chinna', 'rohit', 'Hello'),
('chinna', 'chinna', '', 'Hi'),
('chinna', 'chinna', '', 'Hi'),
('chinna', 'chinna', '', 'Hi'),
('rohit', 'rohit', '', 'hlo'),
('chinna', 'chinna', '', 'Hi'),
('rohitchinna', 'rohit', 'chinna', 'fgh\r\n'),
('chinna', 'chinna', '', 'Hi'),
('chinnarohit', 'chinna', 'rohit', 'Hi'),
('chinnarohit', 'chinna', 'rohit', 'Yo'),
('chinnarohit', 'chinna', 'rohit', 'Fmf'),
('rohitchinna', 'rohit', 'chinna', 'egrtrytu'),
('rohitchinna', 'rohit', 'chinna', 'egerbg\r\n'),
('rohitchinna', 'rohit', 'chinna', 'qejfef'),
('rohitchinna', 'rohit', 'chinna', 'dvsfbgsd'),
('rohitchinna', 'rohit', 'chinna', 'bhdtghn'),
('rohitchinna', 'rohit', 'chinna', 'lvmzlevj'),
('rohitchinna', 'rohit', 'chinna', ';avk;vok'),
('rohitchinna', 'rohit', 'chinna', 'www.youtube.com'),
('rohitchinna', 'rohit', 'chinna', 'wrgwjrogl'),
('rohitchinna', 'rohit', 'chinna', 'fdcefr'),
('rohitchinna', 'rohit', 'chinna', 'hoiiii'),
('rohitchinna', 'rohit', 'chinna', 'satya sai'),
('Sairohit', 'Sai', 'rohit', 'Hi'),
('rohitSai', 'rohit', 'Sai', 'hi ra'),
('rohitchinna', 'rohit', 'chinna', 'hiiiiiii daddy'),
('rohitismart', 'rohit', 'ismart', 'hiii\r\nsvs.fv.'),
('santurohit', 'santu', 'rohit', 'hello bv\r\nzergxesr'),
('rohitsantu', 'rohit', 'santu', 'Hi bv'),
('rohitsantu', 'rohit', 'santu', 'Ela unnav'),
('santurohit', 'santu', 'rohit', 'mtchjnmtdy'),
('santurohit', 'santu', 'rohit', 'mg bv'),
('rohitsantu', 'rohit', 'santu', 'bxtrhdrth'),
('santurohit', 'santu', 'rohit', 'dfxbgdhbhty');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id1` varchar(20) NOT NULL,
  `id2` varchar(20) NOT NULL,
  `name1` varchar(50) NOT NULL,
  `name2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id1`, `id2`, `name1`, `name2`) VALUES
('rohit', 'chinna', 'ratan', 'praveen'),
('chinna', 'rohit', 'praveen', 'ratan'),
('ismart', 'rohit', 'siva', 'ratan'),
('rohit', 'ismart', 'ratan', 'siva'),
('chinna', 'ismart', 'praveen', 'siva'),
('ismart', 'chinna', 'siva', 'praveen'),
('rohit', 'Sai', 'ratan', 'Satya'),
('Sai', 'rohit', 'Satya', 'ratan'),
('rohit', 'santu', 'ratan', 'sai santosh'),
('santu', 'rohit', 'sai santosh', 'ratan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
('rohit', 'ratan', '123'),
('chinna', 'praveen', '456'),
('ismart', 'siva', '789'),
('Sai', 'Satya', '123'),
('santu', 'sai santosh', '123');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `toid` varchar(20) NOT NULL,
  `fromid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
