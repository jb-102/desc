-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2017 at 05:55 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `schoolmgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `academia`
--

CREATE TABLE IF NOT EXISTS `academia` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `student_id` int(11) NOT NULL,
  `sent_on` varchar(50) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `academia`
--

INSERT INTO `academia` (`message_id`, `subject`, `message`, `student_id`, `sent_on`) VALUES
(1, 'Grasping Ability', 'Hay! Good in maths..', 12, '2017-01-31 20:12:59'),
(2, 'Grasping Ability', 'Needs to work hard', 11, '2017-01-31 20:14:07'),
(3, 'Writing Skills', 'Better writing skills', 12, '2017-01-31 20:55:12'),
(9, 'Personality Development', 'Good', 11, '2017-02-01 00:05:22'),
(10, 'Reading Skills', 'Needs more improvement', 11, '2017-02-01 00:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Aamir Nabi', 'aamer@school.com', 'admin789', '');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `numeric_name` varchar(20) NOT NULL,
  PRIMARY KEY (`class_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `name`, `numeric_name`) VALUES
(1, 'NURSERY', 'N'),
(2, 'LKG', 'KG1'),
(3, 'UKG', 'KG2'),
(4, 'FIRST', '1st'),
(5, 'SECOND', '2nd'),
(6, 'THIRD', '3rd'),
(7, 'FOURTH', '4th'),
(8, 'FIFTH', '5th'),
(9, 'SIXTH', '6th'),
(10, 'SEVENTH', '7th'),
(11, 'EIGHTH', '8th'),
(12, 'NINTH', '9th'),
(13, 'TENTH', '10th');

-- --------------------------------------------------------

--
-- Table structure for table `datesheet`
--

CREATE TABLE IF NOT EXISTS `datesheet` (
  `datesheet_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `path` varchar(200) NOT NULL,
  `class_id` int(11) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`datesheet_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `datesheet`
--

INSERT INTO `datesheet` (`datesheet_id`, `name`, `path`, `class_id`, `updated_on`) VALUES
(1, 'Fifth_UNIT-I', 'http://localhost:4040/Projects/SchoolManagement/app/pdfs/exams/datesheet/Fifth_UNIT-I.pdf', 4, '2017-02-02 10:53:57'),
(3, 'Aamir_nabi.pdf', 'http://localhost:4040/Projects/SchoolManagement/app/pdfs/exams/datesheet/Aamir_nabi.pdf', 5, '2017-02-01 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `sent_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `message`, `student_id`, `subject`, `sent_on`) VALUES
(3, 'Good in English. But can need more improvement', 1, 'ENGLISH', '2017-02-01 10:27:16'),
(4, 'Excellent', 14, 'MATHS', '2017-02-01 10:28:45'),
(19, 'POOR performance in Hindi', 11, 'URDU / HINDI', '2017-02-01 15:00:03'),
(21, 'Poojx c', 11, 'ENGLISH', '2017-02-01 16:18:27'),
(22, 'Exellent', 1, 'SCIENCE', '2017-02-01 16:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `fee_notification`
--

CREATE TABLE IF NOT EXISTS `fee_notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `student_id` int(11) NOT NULL,
  `sent_on` varchar(50) NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `fee_notification`
--

INSERT INTO `fee_notification` (`notification_id`, `message`, `student_id`, `sent_on`) VALUES
(1, 'Pay fee before last day of this month.', 12, '2017-01-29 21:21:18'),
(2, 'Kindly. Pay fee before 17th', 11, '2017-01-29 21:25:28'),
(14, 'Clear your balance before this month', 12, '2017-01-31 18:55:42'),
(16, 'PAY FEE', 1, '2017-02-02 20:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `note_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `path` varchar(300) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `class_id` int(11) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`note_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`note_id`, `name`, `path`, `subject`, `class_id`, `updated_on`) VALUES
(1, 'Aamir_nabi.pdf', 'http://localhost:4040/Projects/SchoolManagement/app/pdfs/notes/Aamir_nabi.pdf', 'ENGLISH', 11, '2017-02-03 11:07:01'),
(2, 'IBM_Placement_Paper_1.pdf', 'http://localhost:4040/Projects/SchoolManagement/app/pdfs/notes/IBM_Placement_Paper_1.pdf', 'MATHS', 12, '2017-02-03 11:11:44'),
(3, 'IBM_Placement_Paper_2.pdf', 'http://localhost:4040/Projects/SchoolManagement/app/pdfs/notes/IBM_Placement_Paper_2.pdf', 'MATHS', 13, '2017-02-03 11:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `result_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `path` varchar(200) NOT NULL,
  `class_id` int(11) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`result_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `name`, `path`, `class_id`, `updated_on`) VALUES
(2, 'IBM_Placement_Paper_3.pdf', 'http://localhost:4040/Projects/SchoolManagement/app/pdfs/exams/result/IBM_Placement_Paper_3.pdf', 5, '2017-02-01 18:30:00'),
(3, 'C2747173_FaheemAttar_OfferLetter.pdf', 'http://localhost:4040/Projects/SchoolManagement/app/pdfs/exams/result/C2747173_FaheemAttar_OfferLetter.pdf', 6, '2017-02-01 18:30:00'),
(4, 'C2747173_FaheemAttar_OfferLetter.pdf', 'http://localhost:4040/Projects/SchoolManagement/app/pdfs/exams/result/C2747173_FaheemAttar_OfferLetter.pdf', 6, '2017-02-01 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `alphabetic_value` varchar(20) NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`section_id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `name`, `alphabetic_value`, `class_id`) VALUES
(1, 'Nursery A', 'A', 1),
(2, 'Nursery B', 'B', 1),
(3, 'LKG A', 'A', 2),
(4, 'LKG B', 'B', 2),
(5, 'UKG A', 'A', 3),
(7, 'FIRST A', 'A', 4),
(8, 'Second A', 'A', 5),
(9, 'Third A', 'A', 6),
(10, 'Third B', 'B', 6),
(11, 'Third C', 'C', 6),
(12, 'Fourth A', 'A', 7),
(13, 'Fourth B', 'B', 7),
(14, 'Fifth A', 'A', 8),
(17, '', 'B', 5),
(18, '', 'C', 1),
(19, '', 'D', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `fathers_name` varchar(200) NOT NULL,
  `mothers_name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(30) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(30) NOT NULL DEFAULT 'Male',
  `dob` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  PRIMARY KEY (`student_id`),
  KEY `section_id` (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `roll_no`, `section_id`, `fathers_name`, `mothers_name`, `email`, `phone`, `address`, `gender`, `dob`, `created_at`) VALUES
(1, 'Azan Altaf Paul', 3, 1, 'Altaf Ahmad Paul', 'Ruqaya parveen', 'altafpaul@yahoo.com', 9906740050, 'Khanyar, Srinagar', 'Male', 'Sun, 17 Jul 2022', ''),
(3, 'Mahira Manzoor', 45, 3, 'Mahzoor Fazili', 'Humrah Fazili', 'Manzoor@gmail.com', 9797801020, 'Buspora, Sringar', 'Female', '10/10/2009', ''),
(10, 'Asifa', 12, 4, 'Mohmaad irfan', 'hajrah', 'irfan@gamil.com', 9797807654, 'Khayam, Srinagar', 'Male', '10/09', ''),
(11, 'Hanan Khan', 13, 3, 'Ali Mohammad Hussani', 'Sarah', 'khan.mohammad@gmail.com', 9797654532, 'Ali Abad, Srinagar', 'Male', 'Tue, 16 Aug 2011', ''),
(12, 'Aisha Nabi', 5, 1, 'Ahmad Nabi', 'Zoya Niyaz', 'Ahmad.nabi@outlook.com', 9859670006, 'Munawarabad, Srinagar, J&K', 'Female', 'Sat, 16 Jul 2011', ''),
(13, 'Rehman Shafi', 61, 2, 'Mohmaad Shafi', 'Azkiya', 'no', 0, 'Khayam, Srinagar', 'Male', '2015-03-12', ''),
(14, 'Munazah', 43, 2, 'Nisar Lone', 'Hamidah', 'no', 0, 'Bemina, Srinagar', 'Male', '2015-02-04', ''),
(15, 'Subaya', 41, 18, 'Showkat Ahmad', 'Farozah', 'no', 0, 'Khayam, Srinagar', 'Female', '10/01/2010', ''),
(16, 'Sumaya Ahsan Khan', 5, 4, 'Ahsan Muneer Khan', 'Rabiya Muneer ', 'no', 8803456786, 'HMT, Srinagar', 'Female', '11/02/2011', '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `name`, `created_at`) VALUES
(1, 'ENGLISH', '2017-02-01 07:38:41'),
(2, 'MATHS', '2017-02-01 07:39:41'),
(3, 'URDU / HINDI', '2017-02-01 07:40:25'),
(4, 'SCIENCE', '2017-02-01 07:40:25'),
(5, 'SOCIAL SCIENCE', '2017-02-01 07:41:05'),
(6, 'COMPUTER', '2017-02-01 07:41:05'),
(7, 'KASHMIRI', '2017-02-01 07:41:25'),
(8, 'PANJABI', '2017-02-01 07:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `email`, `phone`, `address`, `gender`, `created_at`) VALUES
(1, 'Maryam Zaffar', 'maryam124@gmail.com', 8801786541, 'Qamarwari Srinagar J&K', 'Female', ''),
(2, 'Asima Manzoor Parray', 'asima.manzoor@yahoo.com', 7019675436, 'Batamaloo, Srinagar, J&K', 'Female', '10/12/16'),
(30, 'Zahid Rashid Mir ', 'mir.zahid@outlook.com', 9018567123, 'Buspora, Srinagar, J&K', 'Male', ''),
(31, 'Aamer Nabi', 'aamernabi@outlook.com', 9797801020, 'Chattabal, Srinagar, J&K', 'Male', ''),
(32, 'Zaid Haroon', 'zaid.haroon@yahoo.com', 1098765422, 'India', 'Male', ''),
(35, 'Nuzhat Shafi Khan', 'shafi.nuzhat@yahoo.com', 8019776543, 'Sanatnagar, Srinagar', 'Male', '');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `timetable_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `path` varchar(200) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `updated_on` varchar(100) NOT NULL,
  PRIMARY KEY (`timetable_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetable_id`, `name`, `path`, `class_id`, `section_id`, `updated_on`) VALUES
(10, 'Nursery-A_2017-01-29', 'http://localhost:4040/Projects/SchoolManagement/app/pdfs/Nursery-A_2017-01-29.pdf', 1, 1, '2017-01-29 11:12:14'),
(11, 'LKG-A_2017-01-29', 'http://localhost:4040/Projects/SchoolManagement/app/pdfs/LKG-A_2017-01-29.pdf', 2, 3, '2017-01-29 11:12:44'),
(12, 'UKG-A_2017-01-29', 'http://localhost:4040/Projects/SchoolManagement/app/pdfs/UKG-A_2017-01-29.pdf', 3, 5, '2017-01-29 11:13:03'),
(13, 'First-A_2017-01-29', 'http://localhost:4040/Projects/SchoolManagement/app/pdfs/First-A_2017-01-29.pdf', 4, 7, '2017-01-29 11:14:26'),
(14, 'Nursery-D_2017-01-29', 'http://localhost:4040/Projects/SchoolManagement/app/pdfs/Nursery-D_2017-01-29.pdf', 1, 19, '2017-01-29 23:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `worksheets`
--

CREATE TABLE IF NOT EXISTS `worksheets` (
  `worksheet_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `path` varchar(200) NOT NULL,
  `class_id` int(11) NOT NULL,
  `updated_on` varchar(50) NOT NULL,
  PRIMARY KEY (`worksheet_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `worksheets`
--

INSERT INTO `worksheets` (`worksheet_id`, `name`, `path`, `class_id`, `updated_on`) VALUES
(4, 'C2747173_FaheemAttar_OfferLetter.pdf', 'http://localhost:4040/Projects/SchoolManagement/app/pdfs/worksheets/C2747173_FaheemAttar_OfferLetter.pdf', 3, '2017-01-30 23:25:14'),
(6, 'Aamir_nabi.pdf', 'http://localhost:4040/Projects/SchoolManagement/app/pdfs/worksheets/Aamir_nabi.pdf', 3, '2017-01-31 09:00:15'),
(7, 'IBM_Placement_Paper_1.pdf', 'http://localhost:4040/Projects/SchoolManagement/app/pdfs/worksheets/IBM_Placement_Paper_1.pdf', 2, '2017-01-31 09:01:43'),
(8, 'Aamir_nabi.pdf', 'http://localhost:4040/Projects/SchoolManagement/app/pdfs/worksheets/Aamir_nabi.pdf', 3, '2017-01-31 18:25:30');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
