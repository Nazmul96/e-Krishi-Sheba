-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 10:10 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminchat`
--

CREATE TABLE `adminchat` (
  `name` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminchat`
--

INSERT INTO `adminchat` (`name`, `admin`, `message`, `date`) VALUES
('ad', 'ad', 'ad', '2020-02-27 18:40:16'),
('ad', 'ad', 'ad', '2020-02-27 18:42:03'),
('ad', 'ad', 'ad', '2020-02-27 18:44:50'),
('tushar', 'dhaka', 'ok', '2020-02-27 18:45:04'),
('ss', 'dhaka', 'ok\r\n', '2020-02-27 18:45:23'),
('tushar', 'cumilla', 'ok', '2020-02-27 19:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `name`, `message`, `date`, `admin`) VALUES
(1, 'Nikhil', 'Hi there, Welcome to my Chat Room.', '2018-04-09 00:09:36', NULL),
(1, 'ss', 'ss', '2020-02-27 18:27:35', NULL),
(1, 'tushar', 'i have a prblm\r\n', '2020-02-27 18:22:37', NULL),
(1, 'tushar', 'asa', '2020-02-27 18:28:25', NULL),
(1, 'tushar', 'ssssss', '2020-02-27 18:37:05', NULL),
(1, 'asd', 'asd', '2020-02-27 18:38:33', NULL),
(1, 'tushar', 'pls', '2020-02-27 19:13:56', NULL),
(1, 'tushar', 'help', '2020-02-27 19:15:15', NULL),
(1, 'tushar', 'last', '2020-02-27 19:19:39', NULL),
(1, 'tushar', 'www', '2020-02-27 19:29:37', 'oh yeaf'),
(1, 'rokaiya', 'prblm', '2020-02-27 19:33:13', NULL),
(1, 'rokaiya', 'solve', '2020-02-27 19:33:39', 'dhaka'),
(0, 'rokaiya', 'solve', '2020-02-27 19:33:52', 'dhaka'),
(1, 'asd', 'xxxxxxxxxxxx', '2020-02-27 19:41:47', 'xxxxxxxxxxx'),
(0, 'asd', 'xxxxxxxxxxxx', '2020-02-27 19:41:54', 'xxxxxxxxxxx'),
(0, 'tushar', 'awawaw', '2020-02-27 19:45:02', 'main'),
(1, 'rock', '11111111111', '2020-02-27 19:57:34', NULL),
(1, 'rock', 'wwwwwwwww', '2020-02-27 19:58:17', 'Jonh cena'),
(1, 'mn', 'wwwww', '2020-02-27 19:59:51', NULL),
(1, 'mn', 'ok', '2020-02-27 20:00:07', 'SUperm'),
(1, 'rock', 'prblmmmmmmmmmmmmm\r\n', '2020-05-16 19:44:01', NULL),
(1, 'rock', 'solve', '2020-05-16 19:44:36', 'Jonh cersa'),
(1, 'facebook', 'aaaaaaaaaa', '2020-05-16 19:48:15', NULL),
(1, 'facebook', 'saaaaaaaaa', '2020-05-16 19:48:29', 'google'),
(1, 'facebook', 'saaaaaaaaa', '2020-05-16 19:48:52', 'google'),
(0, 'facebook', 'aaaaaaaaaa', '2020-05-16 19:49:00', NULL),
(0, 'facebook', 'aaaaaaaaaa', '2020-05-16 19:49:13', NULL),
(0, 'facebook', 'aaaaaaaaaa', '2020-05-16 19:49:19', NULL),
(1, '1212', '2121', '2020-05-16 19:50:23', NULL),
(1, '1212', '2121', '2020-05-16 19:50:27', NULL),
(1, '1212', 'ok', '2020-05-16 19:50:44', '4545'),
(0, 'po', 'po', '2020-05-16 19:52:14', NULL),
(0, 'po', 'po', '2020-05-16 19:52:26', NULL),
(0, 'po', 'po', '2020-05-16 19:52:29', NULL),
(0, 'po', 'po', '2020-05-16 19:52:31', NULL),
(0, 'po', 'po', '2020-05-16 19:52:34', NULL),
(0, 'po', 'po', '2020-05-16 19:52:37', NULL),
(0, 'po', 'po', '2020-05-16 19:53:26', NULL),
(0, 'po', 'po', '2020-05-16 19:54:17', NULL),
(0, 'rock', 'rs', '2020-05-16 19:56:36', NULL),
(0, 'rock', 'rs', '2020-05-16 19:56:40', NULL),
(0, 'rock', 'rs', '2020-05-16 19:56:58', NULL),
(0, 'rock', '1111111111111', '2020-05-16 19:57:51', NULL),
(0, 'rock', '88888888888888888', '2020-05-16 20:00:14', NULL),
(0, 'rock', '88888888888888888', '2020-05-16 20:00:17', NULL),
(0, 'rock', '88888888888888888', '2020-05-16 20:00:21', NULL),
(0, 'rock', '88888888888888888', '2020-05-16 20:00:25', NULL),
(0, 'rock', '----------------', '2020-05-16 20:03:48', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
