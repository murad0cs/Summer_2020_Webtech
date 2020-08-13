-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2020 at 10:32 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `intern`
--

CREATE TABLE `intern` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `DOB` date NOT NULL,
  `Phone` int(50) NOT NULL,
  `User_Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern`
--

INSERT INTO `intern` (`Name`, `Email`, `User_Name`, `Password`, `Gender`, `DOB`, `Phone`, `User_Type`) VALUES
('murad', '17-34829-2@student.aiub.edu', 'm', 'Amijani1122', 'on', '2020-06-07', 0, ''),
('murad abdullal', '17-34829-2@student.aiub.edu', '12', 'Amijani1122', 'on', '2020-07-07', 215151, ''),
('murad abdullal', '17-34829-2@student.aiub.edu', '12', 'Amijani1122', 'on', '2020-06-07', 215151, ''),
('murad abdullal', '17-34829-2@student.aiub.edu', '12', 'Amijani1122', 'on', '2020-10-07', 215151, ''),
('murad abdullal', '17-34829-2@student.aiub.edu', '12', 'Amijani1122', '', '0000-00-00', 215151, ''),
('murad abdullal', '17-34829-2@student.aiub.edu', '12', 'Amijani1122', 'on', '0000-00-00', 215151, ''),
('murad abdullal', '17-34829-2@student.aiub.edu', '12', 'Amijani1122', 'on', '2020-07-07', 215151, 'Intern'),
('murad abdullal', '17-34829-2@student.aiub.edu', '12', 'Amijani1122', 'Male', '2020-07-07', 215151, '$Intern'),
('murad abdullal', '17-34829-2@student.aiub.edu', 'm', 'Amijani1122', 'Male', '2020-09-07', 215151, '$Intern'),
('murad abdullal', '17-34829-2@student.aiub.edu', 'mmm', 'Amijani1122', 'Male', '2020-07-07', 215151, '$Intern'),
('murad abdullal', '17-34829-2@student.aiub.edu', 'abfb', 'Amijani1122', 'Male', '2020-04-07', 215151, '$Intern'),
('murad abdullal', '17-34829-2@student.aiub.edu', 'a', 'Amijani1122', 'Male', '2020-04-07', 215151, '$Intern'),
('murad abdullal', '17-34829-2@student.aiub.edu', 'avv', 'Amijani1122', 'Male', '2020-07-07', 215151, '$Doctor'),
('murad abdullal', '17-34829-2@student.aiub.edu', 'avv', 'Amijani1122', 'Male', '0000-00-00', 215151, '$Intern'),
('murad abdullal', '17-34829-2@student.aiub.edu', 'murad1', 'Amijani1122', 'Male', '2020-07-07', 215151, '$Intern'),
('murad abdullal', '17-34829-2@student.aiub.edu', 'murad1', 'Amijani1122', 'Male', '2020-05-07', 215151, '$Intern'),
('murad abdullal', '17-34829-2@student.aiub.edu', 'murad1', 'Amijani1122', 'Male', '2020-05-07', 215151, '$Intern'),
('murad abdullal', '17-34829-2@student.aiub.edu', 'murad1', 'Amijani1122', 'Male', '2020-05-07', 215151, '$Intern'),
('murad abdullal', '17-34829-2@student.aiub.edu', 'murad1', 'Amijani1122', 'Male', '2020-10-07', 215151, '$Intern'),
('murad abdullal', '17-34829-2@student.aiub.edu', 'murad1', 'Amijani1122', 'Male', '2020-06-07', 215151, '$Customer'),
('murad abdullal', '17-34829-2@student.aiub.edu', 'mmbm', 'Amijani1122', '$Male', '2020-05-07', 215151, ''),
('murad abdullal', '17-34829-2@student.aiub.edu', 'mmnmn', 'Amijani1122', '$Male', '2020-04-07', 215151, ''),
('murad abdullal', '17-34829-2@student.aiub.edu', 'mmnmn', 'Amijani1122', '$Male', '2020-06-07', 215151, ''),
('murad abdullal', '17-34829-2@student.aiub.edu', 'murad', 'Amijani1122', '$Male', '2020-05-07', 215151, 'Doctor'),
('murad abdullal', '17-34829-2@student.aiub.edu', 'murad', 'Amijani1122', '$Male', '2020-05-07', 215151, 'Intern'),
('murad abdullal', '17-34829-2@student.aiub.edu', 'murad', 'Amijani1122', '$Male', '2020-05-07', 215151, 'Customer'),
('muradabd', '17-34829-2@student.aiub.edu', 'murad', 'Amijani1122', '$Male', '2020-04-07', 215151, 'Doctor'),
('murad', '17-34829-2@student.aiub.edu', 'murad', 'Amijani1122', '$Male', '2020-06-07', 215151, 'Customer'),
('aasa', '17-34829-2@student.aiub.edu', 'asas', 'Amijani1122', '$Male', '2020-07-07', 215151, 'Intern'),
('aasa', '17-34829-2@student.aiub.edu', 'mmm', 'Amijani1122', 'Male', '2020-10-07', 215151, 'Intern'),
('aasa', '17-34829-2@student.aiub.edu', 'mmm', 'Amijani1122', 'Male', '2020-10-07', 215151, 'Intern'),
('aasa', '17-34829-2@student.aiub.edu', 'mmm', 'Amijani1122', 'Male', '2020-10-07', 215151, 'Intern'),
('sabbir', '17-34829-2@student.aiub.edu', 'sa', 'Amijani1122', 'Male', '2020-10-08', 215151, 'Intern'),
('amamamama', '17-34829-2@student.aiub.edu', 'aaaa', 'Amijani1122', 'Male', '2020-04-08', 215151, 'Intern'),
('sabbir', '17-34829-2@student.aiub.edu', '12', 'Amijani1122', 'Male', '2020-10-09', 215151, 'Intern'),
('al amin', '17-34829-2@student.aiub.edu', '12', 'Amijani1122', 'Male', '2020-10-09', 215151, 'Customer'),
('1murad', 'ggggg@gmail.com', 'qqq', 'qq', 'Male', '2020-09-11', 215151, 'Intern'),
('murad vai', 'ggggg@gmail.com', 'vai', '11', 'Male', '2020-10-11', 215151, 'Intern'),
('muradcs', 'ggggg@gmail.com', 'muradcs', '11', 'Male', '2020-11-11', 215151, 'Intern'),
('murad r6 ', 'r6@gmail.com', 'r6 ', '1212', 'Male', '2020-11-12', 215151, 'Intern'),
('murad abd', 'r6@gmail.com', 'murad123', '123', 'Male', '2020-11-13', 215151, 'Intern');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
