-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 16, 2021 at 07:33 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minimax`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `idCourse` int(11) NOT NULL AUTO_INCREMENT,
  `courseCode` varchar(255) NOT NULL,
  `courseTitle` varchar(255) NOT NULL,
  PRIMARY KEY (`idCourse`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`idCourse`, `courseCode`, `courseTitle`) VALUES
(1, 'CSC 419', 'DISCRETE MATHS'),
(2, 'CSC 321', 'SOFTWARE DEVELOPMENT'),
(3, 'CSC 121', 'MODERN INFORMATION SCIENCES'),
(4, 'CSC 444', 'A NEW LANGUAGE'),
(5, 'CSC 987', 'ROBOTICS & INFO'),
(6, 'CSC 871', 'NEW INFORMATION TECHNOLOGY'),
(7, 'CSC 521', 'AFTER LIFE INSTRUCTIONS');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `studentID` int(11) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `courseCode` varchar(255) NOT NULL,
  `courseTitle` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`studentID`, `studentname`, `courseCode`, `courseTitle`) VALUES
(4, 'Lagertha', 'CSC 444', 'A NEW LANGUAGE'),
(1, 'Ragnar', 'CSC 121', 'MODERN INFORMATION SCIENCES'),
(1, 'Ragnar', 'CSC 321', 'SOFTWARE DEVELOPMENT'),
(4, 'Lagertha', 'CSC 987', 'ROBOTICS & INFO'),
(1, 'Ragnar', 'CSC 871', 'NEW INFORMATION TECHNOLOGY'),
(3, 'Lothbrok', 'CSC 871', 'NEW INFORMATION TECHNOLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `idStudent` int(11) NOT NULL AUTO_INCREMENT,
  `nameStudent` varchar(255) NOT NULL,
  `emailStudent` varchar(255) NOT NULL,
  `pwdStudent` longtext NOT NULL,
  PRIMARY KEY (`idStudent`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`idStudent`, `nameStudent`, `emailStudent`, `pwdStudent`) VALUES
(1, 'Ragnar', 'ragnar@gmail.com', '$2y$10$2agZjTjX0nRObo8RlNQnRO0P0BNYFfrzFmdXNCLGRd6sGB7IUqPtK'),
(3, 'Lothbrok', 'lothbrok@gmail.com', '$2y$10$wRhs9MvvF/yINb/qkyx6AOY1cHbnDMDOW4TufpSgpArx9J02ELCPC'),
(4, 'Lagertha', 'lagertha@gmail.com', '$2y$10$tNYSBSi6qwB4F0RE9lzBxup6exLdypcJME/1k.M/CRQRndysmIeGG'),
(6, 'Uche', 'uche@gmail.com', '$2y$10$ywe2AXeXK93UiyLosgAVGe0iS1yqsOuJ.gUzh5sJDroYPRcmRri6a'),
(12, 'Jonah', 'ragnar@gmail.com', '$2y$10$6RWohPJAfoV1ytbX/HyrLOBnvSkkQ71.Lb.1AjvDZH3LSPX5OTrau'),
(13, 'Ivar', 'ivar@gmail.com', '$2y$10$/1voT3KTwpVnD6jNo2XkFuVEeF32M2od.XFVg.Dw7RUVIIOBqlqTe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
