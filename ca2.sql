-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 06:16 AM
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
-- Database: `ca2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `addstudent` (IN `student_name` CHAR(50), IN `student_class` VARCHAR(10), IN `student_roll_no` INT, IN `exam_wing` VARCHAR(10), IN `exam_room_no` VARCHAR(10), IN `exam_subject` VARCHAR(50), IN `exam_date` DATE)  NO SQL BEGIN
INSERT INTO student(student_name,student_class,student_roll_no,exam_wing,exam_room_no,exam_subject,exam_date)VALUE(student_name,student_class,student_roll_no,exam_wing,exam_room_no,exam_subject,exam_date);
COMMIT;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deletestudent` (IN `sid` INT)  NO SQL BEGIN 
DELETE FROM student WHERE id=sid;
COMMIT;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updatestudent` (IN `sname` CHAR(50), IN `sclass` VARCHAR(10), IN `srollno` INT(10), IN `swing` VARCHAR(10), IN `sroomno` VARCHAR(10), IN `ssubject` VARCHAR(50), IN `sdate` DATE)  NO SQL BEGIN
UPDATE student SET  student_name=sname,student_class=sclass,student_roll_no=srollno,exam_wing=swing,exam_room_no=sroomno,exam_subject=ssubject,exam_date=sdate WHERE student_name=sname;
COMMIT;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewstudent` (IN `sid` INT)   BEGIN 
SELECT *FROM student WHERE id=sid;
COMMIT;
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `count` () RETURNS INT(11) NO SQL RETURN(SELECT COUNT(*)AS HII FROM student)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'prerna123', '12345'),
(2, 'shri123', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `student_name` char(50) DEFAULT NULL,
  `student_class` varchar(10) DEFAULT NULL,
  `student_roll_no` int(10) DEFAULT NULL,
  `exam_wing` varchar(10) DEFAULT NULL,
  `exam_room_no` varchar(10) DEFAULT NULL,
  `exam_subject` varchar(50) DEFAULT NULL,
  `exam_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`, `student_class`, `student_roll_no`, `exam_wing`, `exam_room_no`, `exam_subject`, `exam_date`) VALUES
(1, 'Khushbo', 'TYCSA', 8207, 'B', '201', 'Maths', '0000-00-00'),
(2, 'Khushbu Harijan', 'TYCS', 8236, 'A', 'A101', 'Web Services', '2022-09-06'),
(3, 'Raj Koli', 'TYIT', 7364, 'B', 'B102', 'ADBMS', '2022-09-06'),
(4, 'Poonam Motheroa', 'TYCOM', 6234, 'C', 'C101', 'Accountancy', '2022-09-06'),
(5, 'Ram Keskar', 'TYCOM', 6289, 'C', 'C103', 'Accountancy', '2022-09-06'),
(6, 'sameer', 'tycs', 1456, 'A', '123', ' sad', '2022-09-16'),
(102, 'dvs', 'fd', 654, 'dgf', '6463', ' fds', '2022-09-11'),
(103, 'bro', 'tycs', 896, 'A', '654', ' ws', '2022-09-08');

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `tg_student` BEFORE INSERT ON `student` FOR EACH ROW insert into tg_student VALUES(new.id,new.student_name, new.student_class, new.student_roll_no,new.exam_wing,new.exam_room_no,new.exam_subject,new.exam_date)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tg_student`
--

CREATE TABLE `tg_student` (
  `id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_class` varchar(50) NOT NULL,
  `student_roll_no` int(10) NOT NULL,
  `exam_wing` varchar(50) NOT NULL,
  `exam_room_no` int(10) NOT NULL,
  `exam_subject` varchar(50) NOT NULL,
  `exam_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tg_student`
--

INSERT INTO `tg_student` (`id`, `student_name`, `student_class`, `student_roll_no`, `exam_wing`, `exam_room_no`, `exam_subject`, `exam_date`) VALUES
(0, 'Ganga Suresh Auji', 'TYCS', 8207, 'B', 602, ' Maths', '2022-09-17'),
(6, 'sameer', 'tycs', 4512, 'D', 0, 'ws', '2022-09-06'),
(10, 'ramesh', 'sycs', 6789, 'D', 0, 'WS', '0000-00-00'),
(101, 'Ishaan', 'TYCSA', 8207, 'B', 602, 'WS', '0000-00-00'),
(102, 'Suresh Auji', 'TYCS', 8277, 'A', 602, ' WS', '2022-09-17'),
(110, 'dvs', 'fd', 654, 'dgf', 6463, ' fds', '2022-09-11'),
(111, 'bro', '123', 123, 'A', 0, ' adbms', '2022-09-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tg_student`
--
ALTER TABLE `tg_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `tg_student`
--
ALTER TABLE `tg_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
