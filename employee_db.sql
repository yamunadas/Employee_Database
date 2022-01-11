-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 11, 2022 at 08:22 PM
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
-- Database: `employee_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_details`
--

DROP TABLE IF EXISTS `emp_details`;
CREATE TABLE IF NOT EXISTS `emp_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_code` varchar(20) NOT NULL,
  `emp_name` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `joining_date` varchar(30) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_details`
--

INSERT INTO `emp_details` (`id`, `emp_code`, `emp_name`, `dept`, `dob`, `joining_date`, `status`) VALUES
(1, 'emp_1', 'james', 'development', '26-02-1997', '02-02-2018', 1),
(2, 'emp_2', 'sam', 'development', '26-02-1998', '02-02-2017', 1),
(3, 'emp_3', 'sara', 'testing', '26-02-1995', '02-02-2000', 1),
(4, 'emp_4', 'lilly', 'testing', '26-02-1992', '02-02-2015', 1),
(5, 'emp_5', 'siva', 'marketing', '22-02-2000', '01-02-2018', 1),
(6, 'emp_6', 'sam', 'development', '06-02-1993', '02-02-2013', 1),
(7, 'emp_7', 'sara', 'testing', '05-02-1995', '02-02-2018', 1),
(8, 'emp_8', 'nila', 'testing', '26-02-1992', '02-02-2021', 1),
(9, 'emp_1', 'james', 'development', '26-02-1997', '02-02-2018', 1),
(10, 'emp_2', 'sam', 'development', '26-02-1998', '02-02-2017', 1),
(11, 'emp_3', 'sara', 'testing', '26-02-1995', '02-02-2000', 1),
(12, 'emp_4', 'lilly', 'testing', '26-02-1992', '02-02-2015', 1),
(13, 'emp_5', 'siva', 'marketing', '22-02-2000', '01-02-2018', 1),
(14, 'emp_6', 'sam', 'development', '06-02-1993', '02-02-2013', 1),
(15, 'emp_7', 'sara', 'testing', '05-02-1995', '02-02-2018', 1),
(16, 'emp_8', 'nila', 'testing', '26-02-1992', '02-02-2021', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
