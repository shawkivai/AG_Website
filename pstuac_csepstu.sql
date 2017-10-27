-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2017 at 11:24 AM
-- Server version: 10.0.29-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pstuac_csepstu`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) NOT NULL,
  `file` text NOT NULL,
  `caption` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE IF NOT EXISTS `tbl_about` (
  `about_id` int(1) NOT NULL DEFAULT '1',
  `welcome` varchar(10000) NOT NULL DEFAULT 'Welcome Note not Updated',
  `history` varchar(10000) NOT NULL DEFAULT 'History not updated',
  `vision` varchar(10000) NOT NULL DEFAULT 'Vision not updated',
  `at_a_glance` varchar(10000) NOT NULL DEFAULT 'At a glance not updated',
  `contact_information` varchar(10000) NOT NULL DEFAULT 'Contact Information not Updated',
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `welcome`, `history`, `vision`, `at_a_glance`, `contact_information`) VALUES
(1, 'Welcome Note not Updated', 'History not updated', 'Vision not updated', 'At a glance not updated', 'Contact Information not Updated1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(2) NOT NULL AUTO_INCREMENT,
  `admin_full_name` varchar(255) NOT NULL,
  `admin_email_address` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `access_lavel` tinyint(1) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_full_name`, `admin_email_address`, `admin_password`, `access_lavel`) VALUES
(1, 'nasif', 'nasif@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(2, 'saif', 'saaifshovon@gmail.com', 'aa2dfb6b013001415b77951be0d48dad', 1),
(3, 'admin', 'admin@cse.pstu.ac.bd', 'e55c727258c6513d749d07ea7c2a4e12', 1),
(4, 'Dr. Md. Samsuzzaman', 'sobuzcse@gmail.com', '3cf335b3d90e5664c8452c7ca73e6e46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_file`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_file` (
  `file_id` int(10) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `file_location` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author_name` varchar(255) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner_image`
--

CREATE TABLE IF NOT EXISTS `tbl_banner_image` (
  `image_id` int(20) NOT NULL AUTO_INCREMENT,
  `image_location` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_banner_image`
--

INSERT INTO `tbl_banner_image` (`image_id`, `image_location`) VALUES
(1, 'images/headerPSTU567892.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_batch`
--

CREATE TABLE IF NOT EXISTS `tbl_batch` (
  `batch_id` int(22) NOT NULL AUTO_INCREMENT,
  `batch_name` varchar(255) NOT NULL,
  `pass_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`batch_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_batch`
--

INSERT INTO `tbl_batch` (`batch_id`, `batch_name`, `pass_status`) VALUES
(1, 'Batch 1', 1),
(2, 'Batch 2', 1),
(3, 'Batch 3', 1),
(4, 'Batch 4', 1),
(5, 'Batch 5', 1),
(6, 'Batch 6', 1),
(7, 'Batch 7', 1),
(8, 'Batch 8', 1),
(9, 'Batch 9', 1),
(10, 'Batch 10', 1),
(11, 'Batch 11', 0),
(12, 'Batch 12', 0),
(13, 'Batch 13', 0),
(14, 'Batch 14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE IF NOT EXISTS `tbl_blog` (
  `blog_id` int(5) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(255) NOT NULL,
  `blog_short_description` text NOT NULL,
  `blog_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author_name` varchar(50) NOT NULL,
  `author_designation` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `blog_title`, `blog_short_description`, `blog_description`, `publication_status`, `created_date_time`, `author_name`, `author_designation`) VALUES
(3, 'ghfhfg', 'fghfghfghfghfg ghfhfgh fghfghfgh ffghfghfg', 'fghfghfg fghfhfgh fghfghfgh', 1, '2017-02-09 05:25:13', 'Chinmay Bepery', 'Assistant Professor                            ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE IF NOT EXISTS `tbl_comments` (
  `comments_id` int(5) NOT NULL AUTO_INCREMENT,
  `blog_id` int(5) NOT NULL,
  `comments_author_name` varchar(50) NOT NULL,
  `comments_author_email` varchar(100) NOT NULL,
  `comments` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT '1',
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comments_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`comments_id`, `blog_id`, `comments_author_name`, `comments_author_email`, `comments`, `publication_status`, `created_date_time`) VALUES
(1, 3, 'CHINMAY  BEPERY', 'Batch 1', 'sdfsdgsd dfgdfgdfgdf dfgdf fdfgdf dfgdf df df', 1, '2017-02-09 05:26:09'),
(2, 3, ' MRINMOY  DAS', 'Batch 8', 'test?', 1, '2017-02-11 01:22:46'),
(3, 3, 'SAIF  HOSSAIN  SHOVON', 'Batch 10', 'yes bro testing', 1, '2017-02-11 11:11:40'),
(4, 3, ' MD. SHARIFUL  ISLAM ', 'Batch 8', 'It works.', 1, '2017-02-13 18:09:33'),
(5, 3, ' MD. SHARIFUL  ISLAM ', 'Batch 8', 'Is there any option to set photo in profile?.', 1, '2017-02-13 18:12:22'),
(6, 3, 'ONTU CHAKROBARTI', 'Student Batch  not Updated', 'we can chat here... ', 1, '2017-02-18 20:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE IF NOT EXISTS `tbl_course` (
  `course_id` int(4) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(255) NOT NULL,
  `semester_id` int(255) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `credit_hour` float NOT NULL,
  `course_file_location` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_code`, `semester_id`, `course_title`, `publication_status`, `credit_hour`, `course_file_location`) VALUES
(1, 'PHY 111', 1, 'Physics-I', 1, 3, 'uploads/course_files/phy_111.docx'),
(2, 'PHY 112', 1, 'Physics-I Sessional', 1, 0.75, 'uploads/course_files/phy_112.docx'),
(3, 'CHE 111', 1, 'Chemistry', 1, 3, 'uploads/course_files/che_111.docx'),
(4, 'CHE 112', 1, 'Chemistry Sessional', 1, 0.75, 'uploads/course_files/che_112.docx'),
(5, 'MAT 111', 1, 'Mathematics-I', 1, 3, 'uploads/course_files/mat_111.docx'),
(6, 'EEE 111', 1, 'Basic Electrical Engineering', 1, 3, 'uploads/course_files/eee_111.docx'),
(7, 'EEE 112', 1, 'Basic Electrical Engineering Sessional', 1, 1.5, 'uploads/course_files/eee_112.docx'),
(9, 'CIT 111', 1, 'Programming Language', 1, 3, 'uploads/course_files/cit_111.docx'),
(10, 'CIT 112', 1, 'Programming Language Sessional', 1, 1.5, 'uploads/course_files/cit_112.docx'),
(11, 'CCE 112', 1, 'Engineering Drawing', 1, 0.75, 'uploads/course_files/cce_112.docx'),
(12, 'PHY 121', 2, 'Physics-II', 1, 3, 'uploads/course_files/phy_121.docx'),
(13, 'PHY 122', 2, 'Physics-II Sessional', 1, 0.75, 'uploads/course_files/phy_122.docx'),
(14, 'MAT 121', 2, 'Mathematics-II', 1, 3, 'uploads/course_files/mat_121.docx'),
(15, 'CIT 121', 2, 'Discrete Mathematics', 1, 3, 'uploads/course_files/cit_121.docx'),
(16, 'LCM 121', 2, 'Communicative English', 1, 2, 'uploads/course_files/lcm_121.docx'),
(17, 'EEE 121', 2, 'Electronic Device and Circuits', 1, 3, 'uploads/course_files/eee_121.docx'),
(18, 'EEE 122', 2, 'Electronic Device and Circuits Sessional', 1, 1.5, 'uploads/course_files/eee_122.docx'),
(19, 'CCE 121', 2, 'Object Oriented Programming', 1, 3, 'uploads/course_files/cce_121.docx'),
(20, 'CCE 122', 2, 'Object Oriented Programming Sessional', 1, 1.5, 'uploads/course_files/cce_122.docx'),
(21, 'CCE 124', 2, 'Computer Programming Contest-I', 1, 0, 'uploads/course_files/cce_124.docx'),
(22, 'CIT 211', 3, 'Data Structure and Algorithms', 1, 3, 'uploads/course_files/cit_211.docx'),
(23, 'CIT 212', 3, 'Data Structure and Algorithms Sessional', 1, 1.5, 'uploads/course_files/cit_212.docx'),
(24, 'CIT 213', 3, 'Software Engineering', 1, 3, 'uploads/course_files/cit_213.docx'),
(25, 'CCE 211', 3, 'Data Communication and Engineering', 1, 3, 'uploads/course_files/cce_211.docx'),
(26, 'MAT 211', 3, 'Mathematics-III', 1, 3, 'uploads/course_files/mat_211.docx'),
(27, 'EEE 211', 3, 'Electrical Technology', 1, 3, 'uploads/course_files/eee_211.docx'),
(28, 'EEE 212', 3, 'Electrical Technology Sessional', 1, 1.5, 'uploads/course_files/eee_212.docx'),
(29, 'AIS 211', 3, 'Accounting and Management', 1, 3, 'uploads/course_files/ais_211.docx'),
(30, 'CCE 221', 4, 'Digital Logic Design', 1, 3, 'uploads/course_files/cce_221.docx'),
(31, 'CCE 222', 4, 'Digital Logic Design Sessional', 1, 1.5, 'uploads/course_files/cce_222.docx'),
(32, 'CCE 223', 4, 'Database System', 1, 3, 'uploads/course_files/cce_223.docx'),
(33, 'CCE 224', 4, 'Database System Sessional', 1, 1.5, 'uploads/course_files/cce_224.docx'),
(34, 'AES 221', 4, 'Government and Economics', 1, 3, 'uploads/course_files/aes_221.docx'),
(35, 'MAT 221', 4, 'Mathematics-IV', 1, 3, 'uploads/course_files/mat_221.docx'),
(36, 'CIT 220', 4, 'Web Programming Project', 1, 1.5, 'uploads/course_files/cit_220.docx'),
(37, 'CIT 221', 4, 'Information System Analysis and Design', 1, 3, 'uploads/course_files/cit_221.docx'),
(38, 'CIT 222', 4, 'Information System Analysis and Design Sessional', 1, 1.5, 'uploads/course_files/cit_222.docx'),
(39, 'CIT 224', 4, 'Computer Programming Contest-II', 1, 0, 'uploads/course_files/cit_224.docx'),
(40, 'CIT 311', 5, 'Microprocessors and Assembly Language', 1, 3, 'uploads/course_files/cit_311.docx'),
(41, 'CIT 312', 5, 'Microprocessors and Assembly Language Sessional', 1, 1.5, 'uploads/course_files/cit_312.docx'),
(42, 'CIT 313', 5, 'Computer Organization and Architecture', 1, 3, 'uploads/course_files/cit_313.docx'),
(43, 'CIT 315', 5, 'Artificial Intelligence', 1, 3, 'uploads/course_files/cit_315.docx'),
(44, 'CIT 316', 5, 'Artificial Intelligence Sessional', 1, 1.5, 'uploads/course_files/cit_316.docx'),
(45, 'CCE 310', 5, 'Software Development Project-I', 1, 1.5, 'uploads/course_files/cce_310.docx'),
(46, 'CCE 311', 5, 'Numerical Methods', 1, 3, 'uploads/course_files/cce_311.docx'),
(47, 'CCE 312', 5, 'Numerical Methods Sessional', 1, 0.75, 'uploads/course_files/cce_312.docx'),
(48, 'CCE 313', 5, 'Computer Networks', 1, 3, 'uploads/course_files/cce_313.docx'),
(49, 'CCE 314', 5, 'Computer Networks Sessional', 1, 1.5, 'uploads/course_files/cce_314.docx'),
(50, 'CIT 320', 6, 'Software Development Project-II', 1, 1.5, 'uploads/course_files/cit_320.docx'),
(51, 'CIT 321', 6, 'Operating System', 1, 3, 'uploads/course_files/cit_321.docx'),
(52, 'CIT 322', 6, 'Operating System Sessional', 1, 1.5, 'uploads/course_files/cit_322.docx'),
(53, 'CIT 323', 6, 'Simulation and Modeling', 1, 3, 'uploads/course_files/cit_323.docx'),
(54, 'CIT 324', 6, 'Simulation and Modeling Sessional', 1, 1.5, 'uploads/course_files/cit_324.docx'),
(55, 'EEE 321', 6, 'Digital Electronics and Pulse Techniques', 1, 3, 'uploads/course_files/eee_321.docx'),
(56, 'EEE 322', 6, 'Digital Electronics and Pulse Techniques Sessional', 1, 0.75, 'uploads/course_files/eee_322.docx'),
(57, 'CCE 320', 6, 'Computer Programming Contest-III', 1, 0, 'uploads/course_files/cce_320.docx'),
(58, 'CCE 321', 6, 'Computer Peripheral and Interfacing', 1, 3, 'uploads/course_files/cce_321.docx'),
(59, 'CCE 322', 6, 'Computer Peripheral and Interfacing Sessional', 1, 1.5, 'uploads/course_files/cce_322.docx'),
(60, 'CCE 323', 6, 'Optical Fiber Communication', 1, 3, 'uploads/course_files/cce_323.docx'),
(61, 'CSE 410', 7, 'Project/Thesis', 1, 3, 'uploads/course_files/cse_410.docx'),
(62, 'CSE 412', 7, 'Industrial Training', 1, 1, 'uploads/course_files/cse_412.docx'),
(63, 'CCE 411', 7, 'Algorithm Engineering', 1, 3, 'uploads/course_files/cce_411.docx'),
(64, 'CCE 413', 7, 'VLSI Design', 1, 3, 'uploads/course_files/cce_413.docx'),
(65, 'CCE 415', 7, 'Network Routing and Switching ', 1, 3, 'uploads/course_files/cce_415.docx'),
(66, 'CCE 416', 7, 'Network Routing and Switching  Sessional', 1, 1.5, 'uploads/course_files/cce_416.docx'),
(67, 'CCE 417', 7, 'Data Warehousing and Mining', 1, 3, 'uploads/course_files/cce_417.docx'),
(68, 'CIT 411', 7, 'Compiler Design and Autometa Theory', 1, 3, 'uploads/course_files/cit_411.docx'),
(69, 'CIT 412', 7, 'Compiler Design and Autometa Theory Sessional', 1, 1.5, 'uploads/course_files/cit_412.docx'),
(70, 'CSE 420', 8, 'Project/Thesis', 1, 3, 'uploads/course_files/cse_420.docx'),
(71, 'CSE 421', 8, 'Seminar', 1, 0.75, 'uploads/course_files/cse_421.docx'),
(72, 'CCE 421', 8, 'Cryptography and Network Security', 1, 3, 'uploads/course_files/cce_421.docx'),
(73, 'CCE 422', 8, 'Wireless and Cellular Communication', 1, 3, 'uploads/course_files/cce_422.docx'),
(74, 'CIT 421', 8, 'Computer Graphics and Image Processing', 1, 3, 'uploads/course_files/cit_421.docx'),
(75, 'CIT 422', 8, 'Computer Graphics and Image Processing Sessional', 1, 0.75, 'uploads/course_files/cit_422.docx'),
(76, 'CIT 423', 8, 'OPTIONAL', 1, 3, 'uploads/course_files/cit_423.docx');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dean_office`
--

CREATE TABLE IF NOT EXISTS `tbl_dean_office` (
  `dean_office_staff_id` int(3) NOT NULL AUTO_INCREMENT,
  `dean_office_staff_name` varchar(255) NOT NULL,
  `dean_office_staff_designation` varchar(255) NOT NULL,
  `dean_office_staff_contact_no` varchar(20) NOT NULL,
  `dean_office_staff_image` varchar(255) NOT NULL,
  PRIMARY KEY (`dean_office_staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE IF NOT EXISTS `tbl_department` (
  `department_id` int(2) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(255) NOT NULL,
  `department_description` varchar(255) NOT NULL,
  `publication_status` varchar(255) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`department_id`, `department_name`, `department_description`, `publication_status`) VALUES
(2, 'CIT', '  Computer Science and Information Technology', '1'),
(3, 'CCE', 'Computer and Communication Engineering', '1'),
(4, 'EEE', 'Electrical and Electronics Engineering', '1'),
(5, 'PME', 'Physics and Mechanical Engineering', '1'),
(6, 'MATHEMATICS', '  Mathematics', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE IF NOT EXISTS `tbl_file` (
  `file_id` int(5) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `file_category` varchar(255) NOT NULL,
  `file_location` varchar(255) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery_category`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery_category` (
  `gallery_category_id` int(5) NOT NULL AUTO_INCREMENT,
  `gallery_category_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `gallery_category_description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `file_location` varchar(2555) NOT NULL,
  PRIMARY KEY (`gallery_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_gallery_category`
--

INSERT INTO `tbl_gallery_category` (`gallery_category_id`, `gallery_category_name`, `gallery_category_description`, `file_location`) VALUES
(15, 'Rag Day 2017 CSE 10th Batch', 'Rag Day 2017 CSE 10th Batch', 'images/cse_rag_day_2017.jpg'),
(16, 'Industrial Tour CSE 10th batch', 'Industrial Tour CSE 10th batch', 'images/DSCN1504.JPG'),
(18, 'বসন্ত বরণ উৎসব - ১৪২৩', 'সি. এস. ই. অনুষদের বসন্ত বরণ উৎসব - ১৪২৩ উদযাপন করা হয়েছে ১৫ই ফেব্রুয়ারী।', 'images/16707595_198329880646824_3746626358836196852_o.jpg'),
(19, 'Class Room and Lab', 'Class Room and Lab', 'images/cls1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery_image`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery_image` (
  `image_id` int(99) NOT NULL AUTO_INCREMENT,
  `file_name` mediumtext NOT NULL,
  `category_id` int(123) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `file_location` varchar(2555) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `tbl_gallery_image`
--

INSERT INTO `tbl_gallery_image` (`image_id`, `file_name`, `category_id`, `category_name`, `file_location`) VALUES
(8, 'Rag Day 2017(CSE 10th Batch)', 15, '', 'uploads/admin_uploads/rag1.JPG'),
(9, 'Rag Day 2017(CSE 10th Batch)', 15, '', 'uploads/admin_uploads/rag2.JPG'),
(10, 'Rag Day 2017(CSE 10th Batch)', 15, '', 'uploads/admin_uploads/rag3.JPG'),
(11, 'Rag Day 2017(CSE 10th Batch)', 15, '', 'uploads/admin_uploads/rag4.JPG'),
(12, 'Rag Day 2017(CSE 10th Batch)', 15, '', 'uploads/admin_uploads/rag5.JPG'),
(13, 'Rag Day 2017(CSE 10th Batch)', 15, '', 'uploads/admin_uploads/rag6.JPG'),
(14, 'Rag Day 2017(CSE 10th Batch)', 15, '', 'uploads/admin_uploads/rag7.JPG'),
(15, 'Rag Day 2017(CSE 10th Batch)', 15, '', 'uploads/admin_uploads/rag9.JPG'),
(16, 'Rag Day 2017(CSE 10th Batch)', 15, '', 'uploads/admin_uploads/rag10.JPG'),
(17, 'Rag Day 2017(CSE 10th Batch)', 15, '', 'uploads/admin_uploads/rag11.JPG'),
(18, 'Rag Day 2017(CSE 10th Batch)', 15, '', 'uploads/admin_uploads/rag12.jpg'),
(19, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/20160228_104600.jpg'),
(20, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/20160301_080454.jpg'),
(21, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/DSCN0933.JPG'),
(22, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/DSCN1048.JPG'),
(23, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/DSCN1344.JPG'),
(24, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/DSCN1428.JPG'),
(25, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/DSCN1504.JPG'),
(26, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/DSCN1862.JPG'),
(27, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/DSCN1891.JPG'),
(28, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/DSCN1984.JPG'),
(29, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/DSCN2012.JPG'),
(30, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/IMG_1311.JPG'),
(31, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/IMG_2023.JPG'),
(32, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/IMG_20231.JPG'),
(33, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/IMG_2855.JPG'),
(34, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/IMG_2860.JPG'),
(35, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/IMG_2905.JPG'),
(36, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/IMG_3306.JPG'),
(37, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/IMG_6918.JPG'),
(38, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/IMG_7582.JPG'),
(39, 'Rag Day 2017(CSE 10th Batch)', 16, '', 'uploads/admin_uploads/IMG_7758.JPG'),
(40, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/IMG_7772.JPG'),
(41, 'Rag Day 2017(CSE 10th Batch)', 16, '', 'uploads/admin_uploads/IMG_7795.JPG'),
(42, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/IMG_8141.JPG'),
(43, 'Rag Day 2017(CSE 10th Batch)', 16, '', 'uploads/admin_uploads/IMG_8143.JPG'),
(44, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/IMG_9244.JPG'),
(45, 'Rag Day 2017(CSE 10th Batch)', 16, '', 'uploads/admin_uploads/SHP_0148.JPG'),
(46, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/SHP_0438.JPG'),
(47, 'Rag Day 2017(CSE 10th Batch)', 16, '', 'uploads/admin_uploads/SHP_0550.JPG'),
(48, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/SHP_0615.JPG'),
(49, 'Rag Day 2017(CSE 10th Batch)', 16, '', 'uploads/admin_uploads/SHP_1686.JPG'),
(50, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/SHP_1488.JPG'),
(51, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/SHP_1486.JPG'),
(52, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/SHP_0817.JPG'),
(53, 'Industrial Tour CSE 10th batch', 16, '', 'uploads/admin_uploads/SHP_0643.JPG'),
(54, '১', 17, '', 'uploads/admin_uploads/16665009_198331023980043_6723695476479322052_o.jpg'),
(55, '2', 18, '', 'uploads/admin_uploads/16665820_198333483979797_5402946457734644160_o.jpg'),
(56, '3', 18, '', 'uploads/admin_uploads/16700208_198329730646839_5240132604813202322_o.jpg'),
(57, '4', 18, '', 'uploads/admin_uploads/16700675_198330190646793_5751280991962383800_o.jpg'),
(58, '5', 18, '', 'uploads/admin_uploads/16707259_198331587313320_8919327634348435988_o.jpg'),
(59, '6', 18, '', 'uploads/admin_uploads/16707595_198329880646824_3746626358836196852_o.jpg'),
(60, '7', 18, '', 'uploads/admin_uploads/16707682_198327730647039_1672262279466853645_o.jpg'),
(61, '8', 18, '', 'uploads/admin_uploads/16715954_198329513980194_5678805679558448531_o.jpg'),
(62, '9', 18, '', 'uploads/admin_uploads/16716145_198333683979777_4552344604727785081_o.jpg'),
(63, '10', 18, '', 'uploads/admin_uploads/16716145_198333683979777_4552344604727785081_o1.jpg'),
(64, '11', 18, '', 'uploads/admin_uploads/16716206_198333000646512_2435090261798567775_o.jpg'),
(65, '12', 18, '', 'uploads/admin_uploads/16716206_198333000646512_2435090261798567775_o1.jpg'),
(66, '13', 18, '', 'uploads/admin_uploads/16797031_198330920646720_1128139261029430438_o.jpg'),
(67, '14', 18, '', 'uploads/admin_uploads/16797099_198328067313672_4533231193885361817_o.jpg'),
(68, '15', 18, '', 'uploads/admin_uploads/16797299_198330757313403_556118053855453225_o.jpg'),
(69, '16', 18, '', 'uploads/admin_uploads/16797469_198330860646726_5240923453177316305_o.jpg'),
(70, '17', 18, '', 'uploads/admin_uploads/16797473_198327963980349_6914531969076646197_o.jpg'),
(71, '18', 18, '', 'uploads/admin_uploads/16797608_198340723979073_8984438980338733376_o.jpg'),
(72, '19', 18, '', 'uploads/admin_uploads/16797608_198340723979073_8984438980338733376_o1.jpg'),
(73, '20', 18, '', 'uploads/admin_uploads/16797778_198328577313621_9013429487543234244_o.jpg'),
(74, '21', 18, '', 'uploads/admin_uploads/16797931_198341753978970_8305153992224823076_o.jpg'),
(75, '22', 18, '', 'uploads/admin_uploads/16797939_198331523979993_2092141410147129815_o.jpg'),
(76, '23', 18, '', 'uploads/admin_uploads/16804141_198332080646604_7532551664499390475_o.jpg'),
(77, '24', 18, '', 'uploads/admin_uploads/16804348_198328407313638_7558212602643751655_o.jpg'),
(78, '25', 18, '', 'uploads/admin_uploads/16804372_198328460646966_6942874096646694576_o.jpg'),
(79, '26', 18, '', 'uploads/admin_uploads/16804394_198343550645457_7542916570959891995_o.jpg'),
(80, 'Class Room and Lab', 19, '', 'uploads/admin_uploads/cls1.jpg'),
(81, 'Class Room and Lab', 19, '', 'uploads/admin_uploads/cls2.jpg'),
(82, 'Class Room and Lab', 19, '', 'uploads/admin_uploads/cls3.jpg'),
(83, 'Class Room and Lab', 19, '', 'uploads/admin_uploads/cls4.jpg'),
(84, 'Class Room and Lab', 19, '', 'uploads/admin_uploads/cls5.jpg'),
(85, 'Class Room and Lab', 19, '', 'uploads/admin_uploads/cls6.jpg'),
(86, 'Class Room and Lab', 19, '', 'uploads/admin_uploads/cls7.jpg'),
(87, 'Class Room and Lab', 19, '', 'uploads/admin_uploads/cls8.jpg'),
(88, 'Class Room and Lab', 19, '', 'uploads/admin_uploads/cls9.jpg'),
(89, 'Class Room and Lab', 19, '', 'uploads/admin_uploads/cls11.JPG'),
(90, 'Class Room and Lab', 19, '', 'uploads/admin_uploads/cls12.JPG'),
(91, 'Class Room and Lab', 19, '', 'uploads/admin_uploads/cls13.JPG'),
(92, 'Class Room and Lab', 19, '', 'uploads/admin_uploads/cls14.JPG'),
(93, 'Class Room and Lab', 19, '', 'uploads/admin_uploads/cls15.JPG'),
(94, 'Class Room and Lab', 19, '', 'uploads/admin_uploads/16.JPG'),
(95, 'Class Room and Lab', 19, '', 'uploads/admin_uploads/17.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE IF NOT EXISTS `tbl_message` (
  `message_id` int(45) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email_id` mediumtext NOT NULL,
  `message` mediumtext NOT NULL,
  `seen` tinyint(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`message_id`, `name`, `email_id`, `message`, `seen`, `time`) VALUES
(2, 'hello', 'sdf@', 'hi', 0, '2017-02-03 13:11:33'),
(3, 'saif', 'saaifshovon@gmail.com', 'just cheaking the system', 0, '2017-02-07 12:03:09'),
(4, 'm', 'murad98csekuet@yahoo.com', 'pass', 0, '2017-02-20 06:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nab_tab`
--

CREATE TABLE IF NOT EXISTS `tbl_nab_tab` (
  `image_id` int(20) NOT NULL AUTO_INCREMENT,
  `image_location` varchar(255) CHARACTER SET utf8 NOT NULL,
  `heading` varchar(255) CHARACTER SET utf8 NOT NULL,
  `descriptions` varchar(2000) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_nab_tab`
--

INSERT INTO `tbl_nab_tab` (`image_id`, `image_location`, `heading`, `descriptions`) VALUES
(1, 'images/IMG_20160925_231751.jpg', '', ''),
(2, 'images/20161020_1337091.jpg', 'Club nai', 'kisu bolar nai'),
(3, 'images/scholership5.PNG', '', ''),
(4, 'images/20161020_1334445.jpg', '', ''),
(5, 'images/20161020_134020.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `news_id` int(4) NOT NULL AUTO_INCREMENT,
  `news_title` text COLLATE utf8_unicode_ci NOT NULL,
  `news_short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `news_long_description` text COLLATE utf8_unicode_ci NOT NULL,
  `top_page` int(4) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `file_location` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `pinned` tinyint(1) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news_short_description`, `publication_status`, `news_long_description`, `top_page`, `created_date_time`, `author_name`, `file_location`, `pinned`) VALUES
(1, 'পবিপ্রবি অন্তঃ বিশ্ববিদ্যালয় প্রোগ্রামিং প্রতিযোগিতা ফেব্রুয়ারী ২০১৭', 'পবিপ্রবি সি এস ই অনুষদের আয়োজনে পবিপ্রবি অন্তঃ বিশ্ববিদ্যালয় প্রোগ্রামিং প্রতিযোগিতা ফেব্রুয়ারী ২০১৭ অনুষ্ঠিত হয়েছে ০৮ ই ফেব্রুয়ারী ২০১৭', 1, 'পবিপ্রবি সি এস ই অনুষদের আয়োজনে পবিপ্রবি অন্তঃ বিশ্ববিদ্যালয় প্রোগ্রামিং প্রতিযোগিতা ফেব্রুয়ারী ২০১৭ অনুষ্ঠিত হয়েছে ০৮ ই ফেব্রুয়ারী ২০১৭। তৃতীয় ও পঞ্চম সেমিস্টারের শিক্ষার্থীদের আয়োজনে অনুষ্ঠিত  অনুষ্ঠানে উপস্থিত ছিলেন মাননীয় ভি সি স্যার প্রফেসর ড.মো.হারুন-অর-রশীদ ও সি এস ই অনুষদের শ্রদ্ধেয় শিক্ষক-শিক্ষিকা বৃন্দ। সকল সেমিস্টারের  শিক্ষার্থীরা স্বতঃস্ফুরত ভাবে প্রোগ্রামিং প্রতিযোগিতায়  অংশগ্রহন করে। মোট ২৪ টি দল প্রতিযোগিতায় অংশগ্রহন করে। এ রকম আয়োজন নিয়মিত করার জন্য আয়োজক শিক্ষার্থীরা অনুষদের সকলের সহযোগিতা কামনা করেছে।<br>\r\n<a href="https://vjudge.net/contest/150038#rank">আজকের কনটেস্ট এর ফাইনাল র‍্যাংক লিস্ট দেখতে এখানে ক্লিক করুন </a> <br>\r\nপুরস্কারের জন্য মনোনিত টিমঃ <br>১। চ্যাম্পিয়ন – PSTU_Prometheus <br>২। রানার আপ - PSTU_Particless <br>৩। ৩য় সেমিস্টার উদীয়মান - PSTU_Reloaded <br>৪। ১ম সেমিস্টার উদীয়মান – PSTU_CodeFixers <br>৫। ১ম সেমিস্টার উদীয়মান ২ - PSTU_ParadoX <br>৬।মেয়েদের টিম - code_beginner <br>বিঃদ্রঃ ১ম দুই টিম অর্গানাইজার দের হওয়ার তারা পুরস্কারের জন্য মনোনিত না। আজকের কনটেস্ট যেভাবে সাজানো হয়েছিলঃ # কন্টেস্ট শুরু: ৪.০০ #ভিসি স্যার পরিদর্শনে আসবেন ৪.১০ #নাস্তা : ৬.০০ #কনেস্ট শেষ: ৮.৩০ #মোট প্রবলেম: ১২ টা। #সর্বোচ্চ সল্ভড – ৭ টা এই কনটেস্ট মূলত পবিপ্রবি সিএসই অনুষদের নিয়মিত কন্টেস্টের প্রথম কনটেস্ট।সম্পূর্ন রেজিস্ট্রেশন ফি বিহীন। প্রতি মাসের ৮ তারিখে এরকম একটি সাধারন কন্টেস্ট আয়োজন করা হবে। এছারাও প্রতিবছর বড় পরিসরে স্বাধীনতা দিবস ও বিজয় দিবস প্রোগ্রামিং কন্টেস্ট আয়োজন করা হবে। <br><br>\r\n<a href="https://vjudge.net/contest/150038#rank">আজকের কনটেস্ট এর ফাইনাল র‍্যাংক লিস্ট দেখতে এখানে ক্লিক করুন </a>', 0, '2017-02-08 20:21:57', 'nasif', 'images/cse_pstu_intra_university_programming_contest.jpg', 0),
(2, 'সি. এস. ই. অনুষদের বসন্ত বরণ উৎসব - ১৪২৩ উদযাপন', 'সি. এস. ই. অনুষদের বসন্ত বরণ উৎসব - ১৪২৩ উদযাপন করা হয়েছে ১৫ই ফেব্রুয়ারী।', 1, 'সি. এস. ই. অনুষদের বসন্ত বরণ উৎসব - ১৪২৩ উদযাপন করা হয়েছে ১৫ই ফেব্রুয়ারী। প্রতি বছরের মত এবারও বর্ণিল আয়োজনের মধ্যে দিয়ে সি. এস. ই. অনুষদের উদ্দ্যেগে বসন্ত বরণ উৎসব - ১৪২৩ উদযাপন করা হয়েছে। অনুষ্ঠানে উদ্বোধন করেন পবিপ্রবি সম্মানিত প্রো-ভিসি প্রফেসর মোহাম্মদ আলী। বিশ্ববিদ্যালয় অডিটোরিয়াম এ অনুষ্ঠানটি উপলক্ষে বর্ণীল সাজে সজ্জিত করা হয়। অনুষ্ঠানে বেশ কয়েকটি গান, নাচ, নাটক, অভিনয় পরিবেশন করা হয়। অনুষ্ঠানের অন্যতম প্রধান আকর্ষণ ছিল সপ্তম সেমিস্টার এর ছাত্র মাহাথির এর পরিবেশনায় পুঁথি পাঠ।\r\n<br> আরও ছবি দেখতে <a href="http://cse.pstu.ac.bd/welcome/gallery_category_details/18/%E0%A6%AC%E0%A6%B8%E0%A6%A8%E0%A7%8D%E0%A6%A4_%E0%A6%AC%E0%A6%B0%E0%A6%A3_%E0%A6%89%E0%A7%8E%E0%A6%B8%E0%A6%AC_-_%E0%A7%A7%E0%A7%AA%E0%A7%A8%E0%A7%A9">এখানে  ক্লিক করুন </a>\r\n<div style="position:relative;height:0;padding-bottom:75.0%"><iframe src="https://www.youtube.com/embed/ek_gWTqsr_o?ecver=2" width="480" height="360" frameborder="0" style="position:absolute;width:80%;height:60%;left:0" allowfullscreen></iframe></div>', 0, '2017-02-24 04:28:02', 'nasif', 'images/cover.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE IF NOT EXISTS `tbl_notice` (
  `notice_id` int(2) NOT NULL AUTO_INCREMENT,
  `notice_title` varchar(255) NOT NULL,
  `notice_short_description` text NOT NULL,
  `publication_status` int(2) NOT NULL,
  `notice_long_description` varchar(255) NOT NULL,
  `top_page` tinyint(1) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author_name` varchar(255) NOT NULL,
  `file_location` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pinned` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO `tbl_notice` (`notice_id`, `notice_title`, `notice_short_description`, `publication_status`, `notice_long_description`, `top_page`, `created_date_time`, `author_name`, `file_location`, `pinned`) VALUES
(1, 'Orientation Program 2017', '', 1, '', 0, '2017-01-16 10:17:25', 'nasif', 'images/IMG(1).jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE IF NOT EXISTS `tbl_question` (
  `question_id` int(10) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `semester` varchar(255) CHARACTER SET utf8 NOT NULL,
  `session` varchar(255) CHARACTER SET utf8 NOT NULL,
  `course_code` varchar(255) CHARACTER SET utf8 NOT NULL,
  `question_location` varchar(255) CHARACTER SET utf8 NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author_name` varchar(255) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_result_file`
--

CREATE TABLE IF NOT EXISTS `tbl_result_file` (
  `result_file_id` int(20) NOT NULL AUTO_INCREMENT,
  `semester` varchar(255) NOT NULL,
  `result_file_location` varchar(255) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author_name` varchar(255) NOT NULL,
  PRIMARY KEY (`result_file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE IF NOT EXISTS `tbl_semester` (
  `semester_id` int(3) NOT NULL AUTO_INCREMENT,
  `semester_name` varchar(255) NOT NULL,
  `semester_description` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`semester_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`semester_id`, `semester_name`, `semester_description`, `publication_status`) VALUES
(1, 'First semester', 'Level 1 Semester I', 1),
(2, 'Second Semester', 'Level 1 Semester II', 1),
(3, 'Third Semester', 'Level 2 Semester I', 1),
(4, 'Fourth Semester', 'Level 2 Semester II', 1),
(5, 'Fifth Semester', 'Level 3 Semester I', 1),
(6, 'Sixth semester', 'Level 3 Semester II', 1),
(7, 'Seventh Semester', 'Level 4 Semester I', 1),
(8, 'Eighth Semester', '  Level 4 Semester II', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session`
--

CREATE TABLE IF NOT EXISTS `tbl_session` (
  `session_id` int(3) NOT NULL AUTO_INCREMENT,
  `session_name` varchar(255) NOT NULL,
  `session_description` varchar(255) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_session`
--

INSERT INTO `tbl_session` (`session_id`, `session_name`, `session_description`, `publication_status`) VALUES
(1, '2003-04', '', 1),
(2, '2004-05', '', 1),
(3, '2005-06', '  ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider_image`
--

CREATE TABLE IF NOT EXISTS `tbl_slider_image` (
  `image_id` int(20) NOT NULL AUTO_INCREMENT,
  `image_location` varchar(255) CHARACTER SET utf8 NOT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_slider_image`
--

INSERT INTO `tbl_slider_image` (`image_id`, `image_location`, `publication_status`) VALUES
(1, 'images/slider.jpg', 1),
(2, 'images/15976999_176868009460239_6098482571804968045_n.jpg', 1),
(3, 'images/16487514_1346979582039249_7886773494461505188_o1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `staff_id` int(3) NOT NULL AUTO_INCREMENT,
  `staff_name` varchar(255) NOT NULL,
  `staff_designation` varchar(255) NOT NULL,
  `department_id` int(2) NOT NULL,
  `staff_contact_no` varchar(20) NOT NULL,
  `staff_image` varchar(255) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE IF NOT EXISTS `tbl_student` (
  `student_id` int(10) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) NOT NULL,
  `student_image` varchar(255) NOT NULL,
  `student_roll_no` varchar(7) NOT NULL,
  `student_reg_no` varchar(10) NOT NULL,
  `session_id` int(5) NOT NULL,
  `student_semester` varchar(255) NOT NULL,
  `student_hall` varchar(255) NOT NULL,
  `student_father_name` varchar(255) NOT NULL,
  `student_mother_name` varchar(255) NOT NULL,
  `guardian_contact_no` varchar(255) NOT NULL,
  `student_address` varchar(255) NOT NULL,
  `student_contact_no` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_password` varchar(32) NOT NULL DEFAULT 'md5(12345)',
  `student_batch` varchar(255) NOT NULL DEFAULT 'Student Batch  not Updated',
  `student_gender` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `student_faculty` varchar(255) CHARACTER SET utf8 NOT NULL,
  `student_session` varchar(255) CHARACTER SET utf8 NOT NULL,
  `student_blood_group` varchar(255) NOT NULL,
  `student_cgpa` float NOT NULL,
  `student_job_location` varchar(255) NOT NULL,
  `student_expert_area` varchar(255) NOT NULL,
  `student_designation` varchar(2550) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=741 ;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`student_id`, `student_name`, `student_image`, `student_roll_no`, `student_reg_no`, `session_id`, `student_semester`, `student_hall`, `student_father_name`, `student_mother_name`, `guardian_contact_no`, `student_address`, `student_contact_no`, `student_email`, `student_password`, `student_batch`, `student_gender`, `publication_status`, `student_faculty`, `student_session`, `student_blood_group`, `student_cgpa`, `student_job_location`, `student_expert_area`, `student_designation`) VALUES
(20, 'CHANCHAL KUMAR DAS', '', '1502001', '06189', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', '', 'male', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(21, 'TAHMIDUR RAHMAN TAMIM', '', '1502002', '06190', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(22, 'MD. MONJUR ALAHI JOARDER', '', '1502003', '06191', 0, '', 'Bongobandhu Sheikh Mujibur Rahman (D5)', 'Md. Taifique Alahi Joarder', 'Salma Khatun', '', 'House 185/5B, Harintana, Khulna', '01913993955', 'jshawon2@gmail.com', '3f900db2608fb3eecb3ee77ba9ef5f60', 'Batch 13', 'male', 0, 'cse', '2015-2016', 'A+', 0, '', '', ''),
(23, 'MD. KHALID AHAMED SAKIL', '', '1502004', '06192', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(24, 'MD. MAHEDI HASAN', '', '1502005', '06193', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(25, 'S.M. SHADMAN AKBER SHUVO', '', '1502006', '06194', 0, '', '', '', '', '', '', '', '', '5c8a1d2d9cff70d921b5b1c88e3e453e', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(26, 'MD. SADIK HOSSAIN', '', '1502007', '06195', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(27, 'SABBIR MAHMUD', '', '1502008', '06196', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(28, 'MAHMUDUL HASAN SUMON', '', '1502009', '06197', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(29, 'MUHAMMAD ABDUR RAHMAN', '', '1502010', '06198', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(30, 'MD. MUZAHIDUL ISLAM', '', '1502011', '06199', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(31, 'ARPITA RANI DEY', '', '1502012', '06200', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(32, 'NAHARY JANNATH', '', '1502013', '06201', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(33, 'U. SHING MARMA', '', '1502014', '06202', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(34, 'PRANESH CHAKMA', '', '1502015', '06203', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(35, 'G M JAMIL HOSSAIN', '', '1502016', '06204', 0, '', 'Bongobandhu Sheikh Mujibur Rahman (D5)', 'Md. Abdul Haque Gazi', 'Parvin Begum', '01521326387', 'Mirpur,Dhaka', '01521326387', 'jamil130865@acc.edu.bd', '01cfcd4f6b8770febfb40cb906715822', 'Batch 13', 'male', 0, 'cse', '2015-2016', 'O+', 0, '', 'Graphics Design', ''),
(36, 'HAFSA BINTA RAHMAN MIM', '', '1502017', '06205', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(37, 'FAHMIDA RAHMAN LIZA', '', '1502018', '06206', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(38, 'MD. SHOWROV HOSSEN', '', '1502019', '06207', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(39, 'MUMTAHINA RITU', '', '1502020', '06208', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(40, 'MD. ZULFIKAR ALI', '', '1502021', '06209', 0, '', 'Bongobandhu Sheikh Mujibur Rahman (D5)', 'Md. Zahangir Alam', 'Late. Zamila Begum', '', 'House:242,Road:5/b,Sadar,Rangpur', '10764814448 , 10521302238', 'zulfikaralizehan@gmail.com', '30c2cc058ab610050d3377399878d510', 'Batch 13', 'male', 0, 'cse', '2015-2016', 'B+', 0, '', 'Programming,Electtronics,Web', ''),
(41, 'MUHTASIM', '', '1502022', '06210', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(42, 'ZAHID HASSAN', '', '1502023', '06211', 0, '', 'Bongobandhu Sheikh Mujibur Rahman (D5)', 'Abdur Rashid', 'Parul Aktar', '01817539022', '', '01834520200', 'rdzahid@gmail.com', '195ff5e20c3c5a7ea1d9d7faf5a3a5ed', 'Batch 13', 'male', 0, 'cse', '2015-2016', 'A+', 0, '', '', ''),
(43, 'MD. ARIF UR RAHAMAN', '', '1502024', '06212', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(44, 'MD. KAMRUL HASAN', 'images/student_images/ami2.jpg', '1502025', '06213', 0, '', 'Bongobandhu Sheikh Mujibur Rahman (D5)', 'Md. Abdul Mannan', '', '', '', '01747231113', 'kamrulhasan231113@gmail.com', '4d18d3ea362274b3ebb869e857229448', 'Batch 13', 'male', 0, 'cse', '2015-2016', 'A+', 0, '', '', ''),
(45, 'SAJRATUL YAKIN RUBAIAT', '', '1502026', '06214', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(46, 'TOFAZZEL HOSEN', '', '1502027', '06215', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(47, 'SHANEWORN BHADRA', '', '1502028', '06216', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(48, 'NAFIJ IBN ALAM', '', '1502029', '06217', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(49, 'MD. SHAHINUR RAHMAN', '', '1502030', '06218', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(50, 'MD. ARIFUL ISLAM', '', '1502031', '06219', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(51, 'KOWSER AHMED', '', '1502032', '06220', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(52, 'SUBRATA SAHA', '', '1502033', '06221', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(53, 'TANVIR HOSSAIN', '', '1502034', '06222', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(54, 'MD. NABIN MIA', '', '1502035', '06223', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(55, 'ABDUS SALAM', '', '1502036', '06224', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(56, 'MD. JUNAEED KAMAL', '', '1502037', '06225', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(57, 'S.M. SHAHEDUZZAMAN AYON', '', '1502038', '06226', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(58, 'ASHIK AL ABDULLAH', '', '1502039', '06227', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(59, 'SOYEB MOHAMMAD', '', '1502040', '06228', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(60, 'MD. MUNSUR', '', '1502041', '06229', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(61, 'MEHEDI HASAN MIM', '', '1502042', '06230', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(62, 'NABID AMAN TANNA', '', '1502043', '06231', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(63, 'BADHAN MAZUMDER', '', '1502044', '06232', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(64, 'SHARIER ISLAM', '', '1502045', '06233', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(65, 'MD. AMIR HAMZA', '', '1502046', '06234', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(66, 'SUMIYA ZAMAN ONONNA', '', '1502047', '06235', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(67, 'MD. RAFIUL ISLAM RAFI', '', '1502048', '06236', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(68, 'MD. AKRAM HOSSEN', '', '1502049', '06237', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(69, 'MD. ABU HOSSAIN MAHADY', '', '1502050', '06238', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(70, 'TAMANNA JAHAN', '', '1502051', '06239', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(71, 'TANUSIRE ROY', '', '1502052', '06240', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(72, 'MD. MOSHIUR RAHMAN', '', '1502053', '06241', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(73, 'MD. MEHEDI HASAN RABBI', '', '1502054', '06242', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(74, 'BITHIKA ROY', '', '1502055', '06243', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(75, 'ARIFUL ISLAM', '', '1502056', '06244', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(76, 'MD. FAYSAL HOSSAIN', '', '1502057', '06245', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(77, 'SYED MAHMUDUL HASAN', '', '1502058', '06246', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(78, 'MAHEDI HASSAN', '', '1502059', '06247', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(79, 'MD. ALIF BISWAS', '', '1502060', '06248', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(80, 'FARJANA MAHIA', '', '1502061', '06249', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(81, 'MD. MINHAZUR RAHMAN', '', '1502062', '06250', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(82, 'MD. SHAKIB HASAN', '', '1502063', '06251', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(83, 'SADDAM HOSSAIN', '', '1502064', '06252', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(84, 'SYED MINHAJUL ISLAM', '', '1502065', '06253', 0, '', '', '', '', '', '', '', '', '24314647f3183ea40cd64d12332f07c3', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(85, 'NIGAR SULTANA BAISHAKHI', '', '1502066', '06254', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(86, 'DIP KARMOKER', '', '1502067', '06255', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(87, 'MD. NURULLAH', '', '1502068', '06256', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(88, 'MD SIAM TALUKDER', '', '1502069', '06257', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(89, 'MD. ASHIQUSSALEHIN', '', '1502070', '06258', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(90, 'SHAFIQUL BARI SADMAN', '', '1502071', '06259', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(91, 'MD. IMRAN HOSSAIN', '', '1502072', '06260', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(92, 'A.K.M. OBAIDUR RAHMAN SOHAN', '', '1502073', '06261', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(93, 'MD. SHAHJALAL KABIR', '', '1502074', '06262', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(94, 'SAKIB MAHMUD', '', '1502075', '06263', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(95, 'TANZILA AKTER EIVA', '', '1402024', '05373', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(96, 'A. F.M NAZMUS SAKIB', '', '1402030', '05379', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(97, 'MD. SHAFAK SHAHRIAR SOZOL', '', '1402056', '05405', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(98, 'TANVIR AHMED', '', '1402066', '05415', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(99, 'MD. SAIFUL ISLAM', '', '1402070', '05419', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(106, 'MD. SADIK HOSSAIN', '', '1502007', '06195', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(107, 'SABBIR MAHMUD', '', '1502008', '06196', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(108, 'MAHMUDUL HASAN SUMON', '', '1502009', '06197', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(109, 'MUHAMMAD ABDUR RAHMAN', '', '1502010', '06198', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(110, 'MD. MUZAHIDUL ISLAM', '', '1502011', '06199', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(111, 'ARPITA RANI DEY', '', '1502012', '06200', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(112, 'NAHARY JANNATH', '', '1502013', '06201', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(113, 'U. SHING MARMA', '', '1502014', '06202', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(114, 'PRANESH CHAKMA', '', '1502015', '06203', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(115, 'G M JAMIL HOSSAIN', '', '1502016', '06204', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(116, 'HAFSA BINTA RAHMAN MIM', '', '1502017', '06205', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(117, 'FAHMIDA RAHMAN LIZA', '', '1502018', '06206', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(118, 'MD. SHOWROV HOSSEN', '', '1502019', '06207', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(119, 'MUMTAHINA RITU', '', '1502020', '06208', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(120, 'MD. ZULFIKAR ALI', '', '1502021', '06209', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(121, 'MUHTASIM', '', '1502022', '06210', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(122, 'ZAHID HASSAN', '', '1502023', '06211', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(123, 'MD. ARIF UR RAHAMAN', '', '1502024', '06212', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(124, 'MD. KAMRUL HASAN', '', '1502025', '06213', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(125, 'SAJRATUL YAKIN RUBAIAT', '', '1502026', '06214', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(126, 'TOFAZZEL HOSEN', '', '1502027', '06215', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(127, 'SHANEWORN BHADRA', '', '1502028', '06216', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(128, 'NAFIJ IBN ALAM', '', '1502029', '06217', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(129, 'MD. SHAHINUR RAHMAN', '', '1502030', '06218', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(130, 'MD. ARIFUL ISLAM', '', '1502031', '06219', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(131, 'KOWSER AHMED', '', '1502032', '06220', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(132, 'SUBRATA SAHA', '', '1502033', '06221', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(133, 'TANVIR HOSSAIN', '', '1502034', '06222', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(134, 'MD. NABIN MIA', '', '1502035', '06223', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(135, 'ABDUS SALAM', '', '1502036', '06224', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(136, 'MD. JUNAEED KAMAL', '', '1502037', '06225', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(137, 'S.M. SHAHEDUZZAMAN AYON', '', '1502038', '06226', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(138, 'ASHIK AL ABDULLAH', '', '1502039', '06227', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(139, 'SOYEB MOHAMMAD', '', '1502040', '06228', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(140, 'MD. MUNSUR', '', '1502041', '06229', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(141, 'MEHEDI HASAN MIM', '', '1502042', '06230', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(142, 'NABID AMAN TANNA', '', '1502043', '06231', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(143, 'BADHAN MAZUMDER', '', '1502044', '06232', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(144, 'SHARIER ISLAM', '', '1502045', '06233', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(145, 'MD. AMIR HAMZA', '', '1502046', '06234', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(146, 'SUMIYA ZAMAN ONONNA', '', '1502047', '06235', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(147, 'MD. RAFIUL ISLAM RAFI', '', '1502048', '06236', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(148, 'MD. AKRAM HOSSEN', '', '1502049', '06237', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(149, 'MD. ABU HOSSAIN MAHADY', '', '1502050', '06238', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(150, 'TAMANNA JAHAN', '', '1502051', '06239', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(151, 'TANUSIRE ROY', '', '1502052', '06240', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(152, 'MD. MOSHIUR RAHMAN', '', '1502053', '06241', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(153, 'MD. MEHEDI HASAN RABBI', '', '1502054', '06242', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(154, 'BITHIKA ROY', '', '1502055', '06243', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(155, 'ARIFUL ISLAM', '', '1502056', '06244', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(156, 'MD. FAYSAL HOSSAIN', '', '1502057', '06245', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(157, 'SYED MAHMUDUL HASAN', '', '1502058', '06246', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(158, 'MAHEDI HASSAN', '', '1502059', '06247', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(159, 'MD. ALIF BISWAS', '', '1502060', '06248', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(160, 'FARJANA MAHIA', '', '1502061', '06249', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(161, 'MD. MINHAZUR RAHMAN', '', '1502062', '06250', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(162, 'MD. SHAKIB HASAN', '', '1502063', '06251', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(163, 'SADDAM HOSSAIN', '', '1502064', '06252', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(164, 'SYED MINHAJUL ISLAM', '', '1502065', '06253', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(165, 'NIGAR SULTANA BAISHAKHI', '', '1502066', '06254', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(166, 'DIP KARMOKER', '', '1502067', '06255', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(167, 'MD. NURULLAH', '', '1502068', '06256', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(168, 'MD SIAM TALUKDER', '', '1502069', '06257', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(169, 'MD. ASHIQUSSALEHIN', '', '1502070', '06258', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(170, 'SHAFIQUL BARI SADMAN', '', '1502071', '06259', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(171, 'MD. IMRAN HOSSAIN', '', '1502072', '06260', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(172, 'A.K.M. OBAIDUR RAHMAN SOHAN', '', '1502073', '06261', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(173, 'MD. SHAHJALAL KABIR', '', '1502074', '06262', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(174, 'SAKIB MAHMUD', '', '1502075', '06263', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2015-2016', '', 0, '', '', ''),
(175, 'TANZILA AKTER EIVA', '', '1402024', '05373', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(176, 'A. F.M NAZMUS SAKIB', '', '1402030', '05379', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(177, 'MD. SHAFAK SHAHRIAR SOZOL', '', '1402056', '05405', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(178, 'TANVIR AHMED', '', '1402066', '05415', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(180, 'MD. SHAFAK SHAHRIAR SOZOL', '', '1402056', '05405', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(181, 'TANVIR AHMED', '', '1402066', '05415', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(182, 'MD. SAIFUL ISLAM', '', '1402070', '05419', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(183, 'ADITYA CHAKMA', '', '1402001', '05350', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.745, '', '', ''),
(184, 'BULBUL AHMED', '', '1402002', '05351', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 3.144, '', '', ''),
(185, 'MOHAMMAD ALI', '', '1402003', '05352', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.474, '', '', ''),
(186, 'FAHMIDA HAQUE DINA', '', '1402004', '05353', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.643, '', '', ''),
(187, 'DIPA SARKAR', '', '1402005', '05354', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.812, '', '', ''),
(188, 'MD. MOSHIUR RAHMAN KHAN', '', '1402006', '05355', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.626, '', '', ''),
(189, 'SHANGITA DAS', '', '1402007', '05356', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.797, '', '', ''),
(190, 'DEBABRATA SIKDER', '', '1402008', '05357', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.887, '', '', ''),
(191, 'MD. RAKIBUL ISLAM', '', '1402009', '05358', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 3.205, '', '', ''),
(192, 'ABDULLAH AL NOMAN', '', '1402010', '05359', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(193, 'MD. POLASH RANA', '', '1402011', '05360', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.468, '', '', ''),
(194, 'TANIMA SEN', '', '1402012', '05361', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 3.109, '', '', ''),
(195, 'ANAMIKA DAS', '', '1402013', '05362', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.635, '', '', ''),
(196, 'MAHFUZA AKTER MARIA', '', '1402014', '05363', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 3.316, '', '', ''),
(197, 'M. TANVIR HOSSAIN SUMON', '', '1402015', '05364', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 3.039, '', '', ''),
(198, 'MALIHA RAHMAN MIMU', '', '1402016', '05365', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.925, '', '', ''),
(199, 'MAHMUD HASAN SHAKKHOR', '', '1402017', '05366', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 3.044, '', '', ''),
(200, 'NAHIDA RAHAMAN', '', '1402018', '05367', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.841, '', '', ''),
(201, 'ZANNATUL MAHIN TISAD', '', '1402019', '05368', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(202, 'SABIHA BINTE MAHBUB MITU', '', '1402020', '05369', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(203, 'JANNATUL FERDOUSI LIMA', '', '1402021', '05370', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(204, 'MOUSUMI SARMIN', '', '1402022', '05371', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.917, '', '', ''),
(205, 'UMMUI ROKAYA MOWRI', '', '1402023', '05372', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(206, 'TANZILA AKTER EIVA', '', '1402024', '05373', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(207, 'MD. RUBEL GAZI', '', '1402025', '05374', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.917, '', '', ''),
(208, 'ZOBAYER ALAHE', '', '1402026', '05375', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.561, '', '', ''),
(209, 'MD. ABIR HOSSAIN', '', '1402027', '05376', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(210, 'UDOY SHANKOR BADHON', '', '1402028', '05377', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.322, '', '', ''),
(211, 'MD. FARHAD HOSSAIN', '', '1402029', '05378', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.94, '', '', ''),
(212, 'A.F.M. NAZMUS SAKIB', '', '1402030', '05379', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(213, 'ONTU CHAKROBARTI', '', '1402031', '05380', 0, '', 'Sher-e-Bangla Hall-2', 'Osim Chakrobarti', 'Onita Rani Chakrobarti', '01798-266981', 'Galachipa,Patuakhali,Barisal', '01733978467', 'acbontu@gmail.com', '980925d922aa9645fbce48817451e538', 'Batch 12', 'male', 0, 'cse', '2014-2015', 'O+', 3.023, '', '', ''),
(214, 'MD. SUMON HASAN', '', '1402032', '05381', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 3.025, '', '', ''),
(215, 'MD. SADEKUR RAHMAN JABED', '', '1402033', '05382', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(216, 'SHAYER MAHMUD CHOWDHURY', '', '1402034', '05383', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(217, 'MD. RAIHAN TALUKDER', '', '1402035', '05384', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 3.406, '', '', ''),
(218, 'MD. MANIRUZZAMAN AKASH', '', '1402036', '05385', 0, '', 'Sher-e-Bangla Hall-1', 'Abul Kalam Azad', 'Mina Begum', '01711287849', 'Khanpur, Kurshipara- 2282, Ishwarganj, Mymensingh', '01951233084', 'manirujjamanakash@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 12', 'male', 0, 'cse', '2014-2015', 'B+', 2.909, '', '', ''),
(219, 'TAMANNA NIGER TULY', '', '1402037', '05386', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 3.252, '', '', ''),
(220, 'JYOTI ROY SARKER', '', '1402038', '05387', 0, '', 'M. Keramot Ali Hall (D4)', '', '', '', '', '01878072847', 'jyoti.roy96@gmail.com', '5a340eed6bd263827b1fecccc8a22919', 'Batch 12', 'male', 0, 'cse', '2014-2015', 'O+', 3.057, '', '', ''),
(221, 'MOHAMMAD NURISLAM MRIDHA', '', '1402039', '05388', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.475, '', '', ''),
(222, 'MD. MIZANUR RAHMAN KHAN', '', '1402040', '05389', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 3.15, '', '', ''),
(223, 'DIPJYOTI SIKDER', '', '1402041', '05390', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.409, '', '', ''),
(224, 'KAZI ZAHIDUL ISLAM', '', '1402042', '05391', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.701, '', '', ''),
(225, 'MD. MUSABBIR RAHMAN', '', '1402043', '05392', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.704, '', '', ''),
(226, 'MD. SHAMIM AHMED', '', '1402044', '05393', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.707, '', '', ''),
(227, 'MD. FAZLE RABBI PARAG', '', '1402045', '05394', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.231, '', '', ''),
(228, 'FARZANA AKTER DULIA', '', '1402046', '05395', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.8, '', '', ''),
(229, 'SHUVRA DEY', '', '1402047', '05396', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(230, 'MD. MAHABUR RAHMAN', '', '1402048', '05397', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.922, '', '', ''),
(231, 'NURUN NAHAR PUTUL', '', '1402049', '05398', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.814, '', '', ''),
(232, 'MD. RIAD KHAN', '', '1402050', '05399', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(233, 'PRITILATA GHARAMI', '', '1402051', '05400', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(234, 'FAHIMA FARZANA HRIDY', '', '1402052', '05401', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(235, 'MD. ASADUJJAMAN SHAD', '', '1402053', '05402', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 3.095, '', '', ''),
(236, 'MD. MEHEDI HASAN', '', '1402054', '05403', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(237, 'ANIMESH KHASHKEL', '', '1402055', '05404', 0, '', 'M. Keramot Ali Hall (D4)', 'Amal Chandra Khashkel', 'Zuti Kana Das', '01716300994', 'Kawnia Amin Bari,Barisal', '01786580405', 'khashkel.animesh89@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 12', 'male', 0, 'cse', '2014-2015', 'O+', 2.607, '', '', ''),
(238, 'MD. SHAFAK SHAHRIAR SOZOL', '', '1402056', '05405', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(239, 'F.M. ABID HASAN BAPPY', '', '1402057', '05406', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(240, 'MD. FOYSAL ISLAM', '', '1402058', '05407', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.491, '', '', ''),
(241, 'ANIKA SIDDIQUI TRINA', '', '1402059', '05408', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.788, '', '', ''),
(242, 'MD. TANVIR ANWAR RAFI', '', '1402060', '05409', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.588, '', '', ''),
(243, 'RAFSAN UDDIN BEG RIZAN', '', '1402061', '05410', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.988, '', '', ''),
(244, 'SULTAN AHMED', '', '1402062', '05411', 0, '', 'M. Keramot Ali Hall (D4)', 'Altaf Hossain', 'Sufia Begum', '01714222765', '5 no. word Goalanda,Rajbari,Dhaka,Bangladesh', '01783366577', 'sultanahmed2367@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 12', 'male', 0, 'cse', '2014-2015', 'B+', 3.03, '', '', ''),
(245, 'MD. RAFI HAYDER', '', '1402063', '05412', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.77, '', '', ''),
(246, 'BEHETARIN UDDIN SARA', '', '1402064', '05413', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.495, '', '', ''),
(247, 'JOY KARMAKER', '', '1402065', '05414', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.83, '', '', ''),
(248, 'TANVIR AHMED', '', '1402066', '05415', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(249, 'MD. SAIDUR RAHMAN', '', '1402067', '05416', 0, '', 'M. Keramot Ali Hall (D4)', 'Abdur Rahman', 'Jahanara Begum', '01710179346', 'Natullah Badh, Barisal', '01742340268', 'saidursumon96@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0', 'male', 0, 'cse', '2014-2015', 'B+', 2.604, '', '', ''),
(250, 'AHAMED SUPROTIM VASKAR', '', '1402068', '05417', 0, '', 'M. Keramot Ali Hall (D4)', 'S A Anowar Us Saleh', 'Sharmina Nasrin', '', 'Outer Bypass road,Sonadanga,Khulna', '01706363325', 'suprotim32@gmail.com', '7bcc30e4e7d2a34470a675c429459c10', 'Batch 12', 'male', 0, 'cse', '2014-2015', 'A+', 2.647, '', '', ''),
(251, 'SUDIPTO BARAL', '', '1402069', '05418', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 3.254, '', '', ''),
(252, 'MD. SAIFUL ISLAM', '', '1402070', '05419', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(253, 'ZANNATUNNESHA', '', '1402071', '05420', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.493, '', '', ''),
(254, 'MD. REZWAN RABBI', '', '1402072', '05421', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 3.228, '', '', ''),
(255, 'FARJANA ISLAM EVA', '', '1402073', '05422', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.711, '', '', ''),
(256, 'POLLAB AHMED ', '', '1402074', '05423', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(257, 'ROSHAN NEPAL', '', '1402075', '05523', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.694, '', '', ''),
(258, 'DABESH KUMER SHAH', '', '1402076', '05524', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 0, '', '', ''),
(259, 'MANISH SAH', '', '1402077', '05525', 0, '', 'M. Keramot Ali Hall (D4)', '', '', '', '', '', 'sahmanish20@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 12', 'male', 0, 'cse', '2014-2015', 'O+', 3.766, '', '', ''),
(260, 'GUNJAN YADAV', '', '1402078', '05526', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.819, '', '', ''),
(261, 'RAJIV BASHYAL', '', '1402079', '05527', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2014-2015', '', 2.942, '', '', ''),
(262, 'TANIA JAHAN LIZA', '', '1302015', '04189', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.992, '', '', ''),
(263, 'MD. KAWSAR AMIN NIROB', '', '1302016', '04190', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.469, '', '', ''),
(264, 'MD. SAIFUL ISLAM', '', '1302021', '04195', 0, '', 'M. Keramot Ali Hall (D4)', 'Md Romzan Khan', 'Nurzahan Begum', '01740746265', '75,Board office, Muradia, Dumki , Patuakhali', '01773241151', 'mohammadsaifulcsepstu@gmail.com', '4ae782a8586d1570fb0eefeb08ff74b7', 'Batch 12', 'male', 0, 'cse', '2013-2014', '', 3.052, 'Dumki-8602', '', ''),
(265, 'MD. AL FAISAL MAHMUD', '', '1302037', '04211', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.722, '', '', ''),
(266, 'MD. NAZMUS SAKIB', '', '1302049', '04223', 0, '', 'Sher-e-Bangla Hall-1', 'Md Shahadat Hossain', 'Majeda khanam', '01724171616', '', '01752601144', 'mdnazmussakibcse@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 12', 'male', 0, 'cse', '2013-2014', '', 3.123, '', '', ''),
(267, 'RAJIB KUMAR ROY', '', '1302002', '04176', 0, '', '', '', '', '', '', '01770260220', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.216, '', '', ''),
(268, 'HOSSEN ALI ', '', '1302003', '04177', 0, '', '', '', '', '', '', '01946508998', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.121, '', '', '');
INSERT INTO `tbl_student` (`student_id`, `student_name`, `student_image`, `student_roll_no`, `student_reg_no`, `session_id`, `student_semester`, `student_hall`, `student_father_name`, `student_mother_name`, `guardian_contact_no`, `student_address`, `student_contact_no`, `student_email`, `student_password`, `student_batch`, `student_gender`, `publication_status`, `student_faculty`, `student_session`, `student_blood_group`, `student_cgpa`, `student_job_location`, `student_expert_area`, `student_designation`) VALUES
(269, 'MD. INZAMUL  ISLAM  RICKY', '', '1302004', '04178', 0, '', '', '', '', '', '', '01967971187', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.473, '', '', ''),
(270, 'MISS. AKTAR  JAHAN SUKTARA', '', '1302005', '04179', 0, '', '', '', '', '', '', '01919036633', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.63, '', '', ''),
(271, 'MD. ABDULLAH ABU SYEED', '', '1302007', '04181', 0, '', '', '', '', '', '', '01938538638', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.082, '', '', ''),
(272, 'BAHNI JYOTI BISWAS', '', '1302009', '04183', 0, '', '', '', '', '', '', '01771754565', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.476, '', '', ''),
(273, 'UZZAL KUMAR BISWAS ', '', '1302010', '04184', 0, '', '', '', '', '', '', '01942368235', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.353, '', '', ''),
(274, 'MD. MOMIN', '', '1302011', '04185', 0, '', '', '', '', '', '', '01779488622', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '-1', '', 2.75, '', '', ''),
(275, 'MD. MUSTAKIM HAYDER', '', '1302013', '04187', 0, '', '', '', '', '', '', '01839308129', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.067, '', '', ''),
(276, 'SHAIKH WASI SADMAN', '', '1302014', '04188', 0, '', '', '', '', '', '', '01688247485', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.762, '', '', ''),
(277, 'MD. HASNAIN', '', '1302018', '04192', 0, '', 'Sher-e-Bangla Hall-2', 'Md Jahanjir Alam', 'Suriya Begum', '', 'Vill: Boro manika, P: Borhanuddin, D: Bhola', '01764515461', 'ashik.pstu.cse@gmail.com', 'a6bb4faacdff9dcdcb6f6e22bc51eac9', 'Batch 11', 'male', 0, 'cse', '2013-2014', 'B+', 3.045, '', 'Android', ''),
(278, 'MD. SHADATH', '', '1302020', '04194', 0, '', '', '', '', '', '', '01782750492', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.977, '', '', ''),
(279, 'MD. MAHABUB HASAN', '', '1302024', '04198', 0, '', '', '', '', '', '', '01751739157', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.544, '', '', ''),
(280, 'AFRINA SHARMIN AME', '', '1302025', '04199', 0, '', '', '', '', '', '', '01683374069', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.108, '', '', ''),
(281, 'SANJIDA KABIR MIM', '', '1302026', '04200', 0, '', '', '', '', '', '', '01727543376', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.448, '', '', ''),
(282, 'TANVIR HAQUE SAGOR', '', '1302027', '04201', 0, '', '', '', '', '', '', '01682815597', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.222, '', '', ''),
(283, 'MD. IMRAN HOSSAIN', '', '1302028', '04202', 0, '', '', '', '', '', '', '01758951289', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.972, '', '', ''),
(284, 'GAZI AKTERUZZAMAN', '', '1302030', '04204', 0, '', '', '', '', '', '', '01751180838', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.282, '', '', ''),
(285, 'FATIMA-TUJ-JOHARA', '', '1302032', '04206', 0, '', '', '', '', '', '', '01732797195', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.743, '', '', ''),
(286, 'MD. HABIBUR RAHMAN', '', '1302035', '04209', 0, '', '', '', '', '', '', '01829674692', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.411, '', '', ''),
(287, 'MD. MUSTAFIZUR RAHMAN', '', '1302036', '04210', 0, '', '', '', '', '', '', '01779207239', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.074, '', '', ''),
(288, 'MD. PARVEZ AHMED', '', '1302038', '04212', 0, '', '', '', '', '', '', '01765786924', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.598, '', '', ''),
(289, 'MD. MAKSUDUR RAHMAN KHAN', '', '1302039', '04213', 0, '', 'Sher-e-Bangla Hall-1', '', '', '', '', '01912970025', 'maateen@outlook.com', 'e98164a251db256ff0bd4debdadb05ed', 'Batch 11', 'male', 0, 'cse', '2013-2014', 'B+', 2.629, '', '', ''),
(290, 'SAYED AMIRUL HASSAN', '', '1302040', '04214', 0, '', '', '', '', '', '', '01670655682', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.324, '', '', ''),
(291, 'MD. SHAMIM HOSSAIN', '', '1302042', '04216', 0, '', '', '', '', '', '', '01911008348', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.043, '', '', ''),
(292, 'MD. REZAUL KARIM', '', '1302043', '04217', 0, '', '', '', '', '', '', '01753311013', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.495, '', '', ''),
(293, 'SYED TOWFIQUR RAHIM', '', '1302045', '04219', 0, '', '', '', '', '', '', '01682604981', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.693, '', '', ''),
(294, 'SAURAV SAHA', '', '1302047', '04221', 0, '', '', '', '', '', '', '01753050175', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.983, '', '', ''),
(295, 'MD. MAFUJ SHIKDER', '', '1302050', '04224', 0, '', '', '', '', '', '', '	01934864284', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.048, '', '', ''),
(296, 'SUBHADIP MONDAL', '', '1302051', '04225', 0, '', '', '', '', '', '', '	01965437464', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.766, '', '', ''),
(297, 'FARJANA KARIM', '', '1302052', '04226', 0, '', '', '', '', '', '', '01719568333', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.613, '', '', ''),
(298, 'SAIMA TABASSUM FARIHA	', '', '1302053', '04227', 0, '', '', '', '', '', '', '01920700036', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.748, '', '', ''),
(299, 'SHIHAB  UDDIN TAREQ', '', '1302054', '04228', 0, '', '', '', '', '', '', '01720106286', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.931, '', '', ''),
(300, 'LAMIA ISLAM MIM', '', '1302055', '04229', 0, '', '', '', '', '', '', '01725631595', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.959, '', '', ''),
(301, 'SAUMEN MONDAL', '', '1302056', '04230', 0, '', '', '', '', '', '', '01746492108', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.776, '', '', ''),
(302, 'MD-RAKIBUL HASAN RAJIB', '', '1302057', '04231', 0, '', '', '', '', '', '', '01834216354', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.563, '', '', ''),
(303, 'MD. JUYEL RANA', '', '1302058', '04232', 0, '', '', '', '', '', '', '01738526656', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.096, '', '', ''),
(304, 'NAZMUL ALAM', '', '1302059', '04233', 0, '', '', '', '', '', '', '01836811456', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.748, '', '', ''),
(305, 'SAGOR KUMAR DAS', '', '1302060', '04234', 0, '', '', '', '', '', '', '01749035155', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.146, '', '', ''),
(306, 'NILAY MALANGI', '', '1302061', '04235', 0, '', '', '', '', '', '', '01934185170', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.65, '', '', ''),
(307, 'MD. IMRANUL ISLAM', '', '1302062', '04236', 0, '', '', '', '', '', '', '01680880384', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.659, '', '', ''),
(308, 'SYED MAHATHIR HASAN', '', '1302065', '04239', 0, '', '', '', '', '', '', '01683864014', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.277, '', '', ''),
(309, 'MUKTA KHANAM', '', '1302066', '04240', 0, '', '', '', '', '', '', '01712308920', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.799, '', '', ''),
(310, 'MD. AL-AMIN', '', '1302067', '04241', 0, '', '', '', '', '', '', '01783313727', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 2.779, '', '', ''),
(311, 'MD. ATIKUR RAHMAN', '', '1302068', '04242', 0, '', '', '', '', '', '', '01929271120', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.566, '', '', ''),
(312, 'MD. HABIBULLAH NOOR', '', '1302069', '04243', 0, '', '', '', '', '', '', '01774600070', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 3.014, '', '', ''),
(313, 'ARUP DAS', '', '1302070', '04244', 0, '', 'M. Keramot Ali Hall (D4)', 'Khitish Chandra Das', 'Nilima Rani das', '', 'Pirojpur Sadar', '01751569965', 'arup11@cse.pstu.ac.bd', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 11', 'male', 0, 'cse', '2013-2014', 'B+', 2.762, '', '', ''),
(314, 'MOITRY DEBNATH', '', '1102043', '03217', 0, '', '', '', '', '', '', '01954393000', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Student Batch  not Updated', '', 0, 'cse', '2013-2014', '', 0, '', '', ''),
(315, 'MD. SHAHIN  HOWLADER', '', '1202002', '03627', 0, '', 'M. Keramot Ali Hall (D4)', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', 'male', 0, 'cse', '2012-2013', 'B+', 3.13, '', 'PHP Codeigniter, JAVA, C#, Wordpress', ''),
(316, 'NAFIUL  ISLAM', '', '1202003', '03628', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.66, '', '', ''),
(317, 'MD. NOMAN  KHAN', '', '1202006', '03631', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.64, '', '', ''),
(318, 'SUTAPA  BACHHAR', '', '1202007', '03632', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.96, '', '', ''),
(319, 'SUDIPTA  MITRO', '', '1202008', '03633', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 3.44, '', '', ''),
(320, 'TUSHER  GAIN', '', '1202009', '03634', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.73, '', '', ''),
(321, 'PRASENJIT   CHAKMA', '', '1202010', '03635', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.63, '', '', ''),
(322, 'MD. MONTASIR  TASNEEM', '', '1202011', '03636', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.76, '', '', ''),
(323, 'MD. HEMAET  UDDIN', '', '1202012', '03637', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 3.5, '', '', ''),
(324, 'MD. ABDUR  RAHMAN  RONY', '', '1202013', '03638', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 3.26, '', '', ''),
(325, 'MD. FORIDUR  KAYES  SHAWON', '', '1202014', '03639', 0, '', 'M. Keramot Ali Hall (D4)', 'Md. Abul Kashem Talukder', 'Khandaker Fatima', '', '', '01676121980', 'kayes10@cse.pstu.ac.bd', 'fcd20a7084da9e9d9fa2b60961206ebf', 'Batch 10', 'male', 0, 'cse', '2012-2013', 'O+', 3.01, '', 'Python', ''),
(326, 'MD. AHAD  HOSSAIN APON', '', '1202017', '03642', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 3.09, '', '', ''),
(327, 'BIVASH  KANTI  MUKHERJEE', '', '1202018', '03643', 0, '', 'Sher-e-Bangla Hall-1', 'Bimal Chandra Mukherjee', 'Manju Rani', '01745620092', 'Barisal', '01751447937', 'mshunnohridoy@gmail.com', '5049a2305fb853cd5603f29650408794', 'Batch 10', 'male', 0, 'cse', '2012-2013', 'B+', 2.89, '', '', ''),
(328, 'MURADUL  MOSTAFA', '', '1202019', '03644', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 3.01, '', '', ''),
(329, 'SABINA  EASMIN', '', '1202020', '03645', 0, '', 'Begum Sufia Kamal Hall', '', '', '', '', '', 'sabina.pstu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', 'female', 0, 'cse', '2012-2013', 'B+', 3.4, '', '', ''),
(330, 'MD. MEHEDI  HASAN', '', '1202021', '03646', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.99, '', '', ''),
(331, 'MD. AL-AMIN', '', '1202022', '03647', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 3.18, '', '', ''),
(332, 'AMINA  NASRIN  SUMYEA', '', '1202023', '03648', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 3.51, '', '', ''),
(333, 'SUPTA  BHOWMIK', '', '1202024', '03649', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.72, '', '', ''),
(334, 'MD. MAHEDI  HASAN', '', '1202025', '03650', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 3.52, '', '', ''),
(335, 'KAZI  ZAHIDUR  RAHMAN  ABIR', '', '1202027', '03652', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.5, '', '', ''),
(336, 'MD. RAFAYET  ALAM', '', '1202028', '03653', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.83, '', '', ''),
(337, 'MD. SAIFUL  ISLAM', '', '1202030', '03655', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.52, '', '', ''),
(338, 'MD. DELOWAR  HOSSAIN', '', '1202031', '03656', 0, '', 'M. Keramot Ali Hall (D4)', '', '', '', '', '01778249835', 'delowarsaad.cse10@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', 'male', 0, 'cse', '2012-2013', 'A+', 3.1, '', 'PHP in CodeIgniter Framework', ''),
(339, 'MD. GOLAM  RASED', '', '1202032', '03657', 0, '', 'M. Keramot Ali Hall (D4)', '', '', '', '', '+8801760003250', 'golam.raashed@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', 'male', 0, 'cse', '2012-2013', 'O+', 2.82, '', 'IOS, JAVA, PHP Codeigniter', ''),
(340, 'AFIA  ANJUM', '', '1202033', '03658', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.82, '', '', ''),
(341, 'MD. TARIKUL  ISLAM', '', '1202035', '03660', 0, '', 'M. Keramot Ali Hall (D4)', 'Md Rafiqul Islam', 'Shahnaz Begum', '', 'Barisal', '01778761975', 'asif.pstu@gmail.com', 'dca562aa6757b0e29b2aa55b3c3c6774', 'Batch 10', 'male', 0, 'cse', '2012-2013', 'B-', 2.62, '', '', ''),
(342, 'FARJANA  SULTANA  MIM', '', '1202036', '03661', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 3.88, '', '', ''),
(343, 'SANJIDA  AKTHER  JERIN', '', '1202037', '03662', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 3.31, '', '', ''),
(344, 'MAHFUZA  AKTER', '', '1202039', '03664', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 3.63, '', '', ''),
(345, 'PRADIP  DAS', '', '1202040', '03665', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 3.07, '', '', ''),
(346, 'TARINA RAHMAN', '', '1202042', '03667', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 3.67, '', '', ''),
(347, 'ASMA AKTER MARIA', '', '1202043', '03668', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 3.71, '', '', ''),
(348, 'MD. IBRAHIM', '', '1202044', '03669', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.7, '', '', ''),
(349, 'MD. RAYHANUL  IQBAL', '', '1202045', '03670', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.77, '', '', ''),
(350, 'SUDIPTA  BARAL', '', '1202047', '03672', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 3.34, '', '', ''),
(351, 'REFUTH ARA ', '', '1202048', '03673', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 3.51, '', '', ''),
(352, 'MEHEDI  HASAN', '', '1202049', '03674', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.82, '', '', ''),
(353, 'KAZI  ABIR  HASAN', '', '1202052', '03677', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.96, '', '', ''),
(354, 'SOURAV  ROY', '', '1202053', '03678', 0, '', 'Sher-e-Bangla Hall-1', 'Dhirendra Nath Roy', 'Santi Lata Roy', '', '', '01771457411', 'souravroy409.sr@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', 'male', 0, 'cse', '2012-2013', 'AB+', 2.88, '', '', ''),
(355, 'MEHRAZ  MORSHED', 'images/student_images/2.JPG', '1202054', '03679', 0, '', 'Sher-e-Bangla Hall-2', '', '', '', '', '', 'mm.pstu@gmail.com', 'a2eda25e9bd2d4a4a1a182cb4d59c16a', 'Batch 10', 'male', 0, 'cse', '2012-2013', 'AB+', 2.57, '', '', ''),
(356, 'MD. ABDULLAH  AL  NOMAN', 'images/student_images/saif.png', '1202055', '03680', 0, '', 'M. Keramot Ali Hall (D4)l', '', '', '', '', '01722036525', 'nomanzeeko17@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', 'male', 0, 'cse', '2012-2013', 'B+', 2.78, '', 'Java,J2EE,C#.net', ''),
(357, 'MD. AMINUL  ISLAM  NAYEM', '', '1202056', '03681', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.94, '', '', ''),
(358, 'MD.  ZAHID', '', '1202057', '03682', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 3.52, '', '', ''),
(359, 'TAZBIR  AHAD  TAZ', '', '1202058', '03683', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.55, '', '', ''),
(360, 'MUSHFICA  JANNAT  MOHONA', '', '1202059', '03684', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.79, '', '', ''),
(361, 'MD.  TARIKUL  ISLAM', '', '1202062', '03687', 0, '', 'Sher-e-Bangla Hall-2l', 'Md. Delower Hossain', 'Selina Akter', '+8801732451676', 'Kachhipara, Bauphal , Patuakhali', '+8801775990383', 'mtarikulislam10@cse.pstu.ac.bd', '721f5d71a09482bced442293d92aed13', 'Batch 10', 'male', 0, 'cse', '2012-2013', 'O+', 3.27, '', 'PHP, Android Mobile App Development, JAVA', ''),
(362, 'SHEIKH  ABU  SAYEED  ABDULLAH', '', '1202063', '03688', 0, '', 'Sher-e-Bangla Hall-2', 'Sheikh Abu Abdullah Liakat', '', '', 'Bagmara, Khulna', '+8801731526037', 'sayeedabdullah92@gmail.com', 'ac85c0919e22f36b803ac69d2f2cdb27', 'Batch 10', 'male', 0, 'cse', '2012-2013', 'O+', 2.72, '', 'Java, PHP', ''),
(363, 'MD. MAYN  UDDIN', '', '1202064', '03689', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2012-2013', '', 2.83, '', '', ''),
(364, 'SAIF  HOSSAIN  SHOVON', 'images/student_images/saaif1.jpg', '1202065', '03690', 0, '', 'M. Keramot Ali Hall (D4)', 'Md. Asgar Hossain', 'Afrina Yeasmin', '01727608056', 'Dhaka', '01736276567', 'saaifshovon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', 'male', 0, 'cse', '2012-2013', 'B+', 2.84, '', 'PHP Codeigniter, JAVASCRIPT', ''),
(365, 'ISHRAT JAHAN MOURI', '', '1102003', '03177', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2011-2012', '', 2.74, '', '', ''),
(366, 'MONDOL MRINMAY SHEKHOR', '', '1102044', '03218', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 10', '', 0, 'cse', '2011-2012', '', 3.02, '', '', ''),
(367, 'A. S. M TAREK NASIF ', 'images/student_images/20160807_194513.jpg', '1102052', '03226', 0, '', 'M. Keramot Ali Hall (D4)', '', '', '', '', '', '', 'a998d98d9d89bb2b71de6d5725685d14', 'Batch 10', 'male', 0, 'cse', '2011-2012', 'O+', 3.24, '', '', 'testing'),
(368, 'DEBASISH  MONDAL', '', '0302001', '00572', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(369, 'NUSRAT  ZAHAN', '', '0302002', '00573', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(370, 'MD.  AMINUL  ISLAM', '', '0302003', '00574', 0, '', 'Sher-e-Bangla Hall-1', 'Late. Md. Altaf Hussain Mia', 'Aysha Begum', '01713087875', 'Dept. of CSE, Jagannath University, Dhaka-1000', '01712877271', 'aminul_must@yahoo.com', '033aed833e07acadfe91b03e38c90681', 'Batch 1', 'male', 0, 'cse', '2003-04', 'A+', 0, 'Dhaka, Bangladesh', 'Security, Wireless Mesh Network, System', ''),
(371, 'SALMA  AFRIN', '', '0302004', '00575', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(372, 'MD.  RASHED-UZ-ZAMAN', '', '0302005', '00576', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(373, 'G.M.  EAKUB', '', '0302006', '00578', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(375, 'MD. FEROZ  ALAM', '', '0302007', '00581', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(376, 'CHINMAY  BEPERY', '', '0302008', '00583', 0, '', 'Sher-e-Bangla Hall-1', 'Chitta Ranjan Bepery', 'Minati Bepery', '', 'Department of CIT, Patuakhali Science and Technology University', '01922361666', 'chinmay.cse@pstu.ac.bd', 'e807f1fcf82d132f9bb018ca6738a19f', 'Batch 1', 'male', 0, 'cse', '2003-04', 'A+', 0, 'Patuakhali Science and Technology University', 'Algorithm, Bioinformatics, Multimedia', ''),
(377, 'MD. MUSHFIQUR RAHMAN', '', '0302009', '00584', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(378, 'MD.  SHAHED  HASSAN', '', '0302010', '00585', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(379, 'KANAK  PAUL  CHOWDHURY', '', '0302011', '00586', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(380, 'MIHIR  KANTI  SARKAR', '', '0302012', '00587', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(381, 'MD. AHIDUR  RAHMAN', '', '0302013', '00588', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(382, 'MD  ARIFUR  RAHMAN', '', '0302014', '00589', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(383, 'MD. YOUSUF  ALI', '', '0302015', '00592', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(384, 'MEHADI  HASAN  NASIM', '', '0302016', '00593', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(385, 'MD. MEHEDI  HASAN  SOHAG', '', '0302017', '00594', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(386, 'MD.  MEHEDI  HASAN', '', '0302018', '00596', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(387, 'MD.  ASADUZZAMAN', '', '0302019', '00598', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(388, 'SK. ISHTIAQUE  AHMED', '', '0302020', '00599', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(389, 'MD. MOSHIUR  RAHMAN  KHAN', '', '0302021', '00600', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(390, 'MD.  ATIKUR  RAHMAN', '', '0302022', '00601', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(391, 'MD.  NAZRUL  ISLAM', '', '0302023', '00602', 0, '', 'Sher-e-Bangla Hall-1', 'Md. Yusuf Ali', 'Kulsum Begum', '', '', '01913691709', 'nazrul.pstu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', 'male', 0, 'cse', '2003-04', 'A-', 0, 'Dhaka', '', ''),
(392, 'DEBADHAR  DAS', '', '0302024', '00604', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(393, 'MD. JAKIR  HOSSAIN', '', '0302025', '00605', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(394, 'SUDIPTA  KUMAR  PAIK', '', '0302026', '00606', 0, '', 'Sher-e-Bangla Hall-1', 'Sushil Kumar Paik', 'Smrity Rani Paik', '01727019557', 'Bhanderkola, Kachua, Bagerhat', '01719100070', 'sdiptapaik@gmail.com ', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', 'male', 0, 'cse', '2003-04', 'A+', 0, 'Private', '.NET, Android, PHP, Python, NodeJs', 'Associate Technology Manager '),
(395, 'BIKASH  CHANDRA  DAS', '', '0302027', '00607', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(396, 'FAIZ  AHMED  ', '', '0302028', '00608', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(397, 'TANIA  FARHANA', '', '0302029', '00609', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 1', '', 0, 'cse', '2003-04', '', 0, '', '', ''),
(398, 'JAYED IBRAHIM', '', '0402001', '00683', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 2', '', 0, 'cse', '2004-05', '', 0, '', '', ''),
(399, 'REHENUMA AFROJ TONU', '', '0402002', '00684', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 2', '', 0, 'cse', '2004-05', '', 0, '', '', ''),
(400, 'NAZNIN NAHAR NUPUR', '', '0402003', '00687', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 2', '', 0, 'cse', '2004-05', '', 0, '', '', ''),
(401, 'A.N.M. ABUL FATTAH', '', '0402004', '00690', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 2', '', 0, 'cse', '2004-05', '', 0, '', '', ''),
(402, 'MST. MARIAM BEGUM ', '', '0402005', '00693', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 2', '', 0, 'cse', '2004-05', '', 0, '', '', ''),
(403, 'MD. ATIKQUR RAHAMAN', '', '0402006', '00694', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 2', '', 0, 'cse', '2004-05', '', 0, '', '', ''),
(405, 'SEZBIN RASHID ANEE', '', '0402007', '00700', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 2', '', 0, 'cse', '2004-05', '', 0, '', '', ''),
(406, 'MD. GIAS UDDIN', '', '0402008', '00701', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 2', '', 0, 'cse', '2004-05', '', 0, '', '', ''),
(407, 'ABDUL HASIB SHIKDER', '', '0402009', '00570', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 2', '', 0, 'cse', '2004-05', '', 0, '', '', ''),
(408, 'MD. IMRAN HOSSAIN', '', '0402010', '00588', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 2', '', 0, 'cse', '2004-05', '', 0, '', '', ''),
(409, 'MD. IMRAN HOSSAIN ', '', '0402011', '00580', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 2', '', 0, 'cse', '2004-05', '', 0, '', '', ''),
(410, 'MD. MOHALLIL  HAQUE  TANIM', '', '0502001', '00903', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(411, 'MD.  ROKNUL  ISLAM', '', '0502002', '00904', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(412, 'SHOHADA  SHARMIN', '', '0502003', '00905', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(413, 'MD. MAJHARUL  ISLAM  NAYEM', '', '0502004', '00908', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(414, 'MD. KAMRUL  HASAN', '', '0502005', '00909', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(415, 'MAHABUB  SIKDER', '', '0502006', '00910', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(416, 'SUDON  CHANDRA  SIL', '', '0502007', '00911', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(417, 'TANBIR  MORSHED  NADIM', '', '0502008', '00912', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(418, 'NAYEEMA  RAHMAN', '', '0502009', '00913', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(419, 'JAGONNATH  DUTTA', '', '0502010', '00914', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(420, 'MD. SHAHIN  KHAN', '', '0502011', '00915', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(421, 'MD. MARUF  HOSSAIN', '', '0502012', '00916', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(422, 'MD. SHAMIM  HASSAN', '', '0502013', '00917', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(423, 'FOIEZ  AHMED  MAZUMDER', '', '0502014', '00918', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(424, 'AFSANA  YESMIN', '', '0502015', '00919', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(425, 'SADIA  ARABI', '', '0502016', '00920', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(426, 'TASMIMA  SHERNIABAT', '', '0502017', '00921', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(427, 'MOST.  FATEMA  TUZ   ZOHORA', '', '0502018', '00922', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(428, 'KANIJ  FATEMA   SHARME', '', '0502019', '00923', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(429, 'MD.  MILON  GAZI', '', '0502020', '00924', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(430, 'SHAHANAJ  PARVIN', '', '0502021', '00924', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(431, 'SHUKLA  DEBNATH', '', '0502022', '00926', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(432, 'MST. KAMRUNNAHAR', '', '0502023', '00927', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(433, 'MITU CHAKROBARTY', '', '0502024', '00928', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(434, 'MD. MAZHARUL ISLAM', '', '0502025', '00571', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(435, 'MD. JAHIDUL ISLAM', '', '0502026', '00582', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(436, 'AYSHA SIDDIKA', '', '0502027', '00610', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(437, 'SYED ASHIK MAHMUD', '', '0502028', '00685', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(438, 'FAHMIDA AFROJ', '', '0502029', '00695', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(439, 'MD. MIZANUR RAHMAN', '', '0502030', '00696', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(440, 'RAJIB KUMAR MITRA', '', '0502031', '00702', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(441, 'MD. RABIUL ALAM', '', '0502032', '00704', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(442, 'MD. SHAHADAT HOSSAIN', '', '0502033', '00705', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 3', '', 0, 'cse', '2005-06', '', 0, '', '', ''),
(443, 'TASNIM  KAMAL', '', '0602001', '01099', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(444, 'MD. JAHIDUR  RAHMAN', '', '0602002', '01100', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(445, 'S.M. TANVIR  HOSSAIN', '', '0602003', '01101', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(446, 'TARUN  KUMAR  BISWAS', '', '0602004', '01102', 0, '', 'M. Keramot Ali Hall (D4)', '', '', '', '', '', 'tarun.pstu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', 'male', 0, 'cse', '2006-07', '', 0, 'Dhaka', 'Mobile application development( Android & iOS)', ''),
(447, 'ISRAT  JAHAN  IRA', '', '0602005', '01105', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(448, 'MD. MAFIUL ALAM', '', '0602006', '01108', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(449, 'SABRINA  KABIR', '', '0602007', '01109', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(450, 'MD. AMINUR RAHMAN', '', '0602008', '01110', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(451, 'SHARMIN  RASHID', '', '0602009', '01111', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(452, 'TAPASH  GHARAMI', '', '0602010', '01112', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(453, 'NAJIA  DALIMI', '', '0602011', '01113', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(454, 'MD.  MAHBUBUR  RAHMAN', '', '0602012', '01114', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(455, 'FAYSAL  AHMED', '', '0602013', '01116', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(456, 'SHUVRA  KUNDU', '', '0602014', '01117', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(457, 'LOVELY  AKTER', '', '0602015', '01118', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(458, 'MD. IMRUL HASAN', '', '0602016', '01119', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(459, 'FEROZA  PARVEEN', '', '0602017', '01121', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(460, 'KABITA  RANI ROY', '', '0602018', '01122', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(461, 'MD. NAIMUR  RAHMAN', '', '0602019', '01123', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(462, 'MD. FAHAD KHAN', '', '0602020', '01124', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(463, 'MD. MAHA MUDUL HASAN', '', '0602021', '01125', 0, '', '', '', '', '', 'Praimary Teachers Training Institute, Satkhira.', '01917491787', 'zikucse@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', 'male', 0, 'cse', '2006-07', 'B+', 0, 'Praimary Teachers Training Institute, Satkhira.', 'Instructor(Computer Science)', ''),
(464, 'MD. JEBUL ISLAM', '', '0602022', '01126', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(465, 'AMIT KARMAKER', '', '0602023', '01127', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(466, 'SALMAN HASAN KHAN', '', '0602024', '01128', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(467, 'PRIANKA ADHIKARY', '', '0602025', '01129', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(468, 'SHAMIMA SULTANA', '', '0602026', '01130', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(469, 'MANAS KUMAR  CHALKROBORTTY', '', '0602027', '01131', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(470, 'MD.MOSHIUR RAHMAN', '', '0602028', '01132', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(471, 'MRINAL  KANTI  GHOSH', '', '0602029', '01134', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(472, 'TUSHER  KUMER  BISWAS', '', '0602030', '01136', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(473, 'RAJIB  DAS', '', '0602031', '01138', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(474, 'MD.SHAHADAT MOLLA', '', '0602032', '01139', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(475, 'MD. ABUBAKAR SIDDIQUE', '', '0602033', '01140', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(476, 'MD. MAHMUDUL HASAN', '', '0602034', '01141', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(477, 'MD. RIDGEWAN KHAN', '', '0602035', '01143', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(478, 'MD. ABDULLA ALL ASIF', '', '0602036', '01321', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 4', '', 0, 'cse', '2006-07', '', 0, '', '', ''),
(479, 'MD.  MOSTAFA  NURANNABI  SHAKIL', '', '0602037', '00906', 0, '', 'M. Keramot Ali Hall (D4)', 'Md. Abul Hossain Sarker', 'Most. Wazeda Begom', '01717976307', 'Dhaka', '01717976307', 'shakilcse9@gmail.com', '08ce975bf1c4871c0dee5a2d2a1300bc', 'Batch 4', 'male', 0, 'cse', '2006-07', 'B+', 0, 'ICT Division', '', 'Programmer'),
(480, 'S.M. MAMUNUR RAHMAN HERA', '', '0702001', '01475', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(481, 'SUMAIYA KABIR', '', '0702002', '01476', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(482, 'NASRIN SULTANA', '', '0702003', '01477', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(483, 'NIRJHAR MANDAL', '', '0702004', '01478', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(484, 'MAHMUDUL HASAN TALUKDER', '', '0702005', '01479', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(485, 'MD. RIAD HOSSAIN', '', '0702006', '01481', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(486, 'FARJANA YESMIN', '', '0702007', '01482', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(487, 'MD. KAMRUZZAMAN ARIF', 'images/student_images/2017-02-17-01-05-19-920.jpg', '0702008', '01483', 0, '', '', '', '', '', '', '01717808165', 'arif.cse009@gmail.com', '53ad086ee43e029cb595e2ba9e071364', 'Batch 5', 'male', 0, 'cse', '2007-08', 'B+', 0, 'Bangladesh Air Force', '', 'Flying Officer '),
(488, 'MD. ABUL HASAN', '', '0702009', '01485', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(489, 'MUNAM SHAHRIAR', '', '0702010', '01487', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(490, 'MD. TANJIM-UR-RAHMAN ESTY', '', '0702011', '01488', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(491, 'SANJOY KUMAR DAS', '', '0702012', '01489', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(492, 'MD, MONIRUZZAMAN', '', '0702013', '01490', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(493, 'SHAYAKH AHMED REZOAN', '', '0702014', '01491', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(494, 'MOST. FARHANA AFRIN', '', '0702015', '01492', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(495, 'MD. HELAL UDDIN', '', '0702016', '01493', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(496, 'SAJOL SAHA', '', '0702017', '01494', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(497, 'NAZNIN AKTER', '', '0702018', '01495', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(498, 'MD. SYFUL ISLAM', '', '0702019', '01496', 0, '', 'Sher-e-Bangla Hall-2', '', '', '', 'Dhaka', '01918288265', 'mahfuzisl@gmail.com', '7ab7fe572032dd40ad7a7e5cac7d2d44', 'Batch 5', 'male', 0, 'cse', '2007-08', 'O+', 0, 'Bangladesh University of Business and Technology (BUBT)', 'Teaching and Research', ''),
(499, 'MD. JULHASH UDDIN SHOEL', '', '0702020', '01498', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(501, 'RAFIZA KHANOM', '', '0702021', '01499', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(502, 'FEROJ AHMED ZEHADI', '', '0702022', '01501', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(503, 'MD. ABDUR RAHMAN KHAN', '', '0702023', '01502', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(504, 'SUMAN CHANDRA BANERJEE', '', '0702024', '01505', 0, '', 'M. Keramot Ali Hall (D4)', 'Gobindra Prosad Banerjee', 'Minoti Rani Banerjee', '01725965812', 'Uttara, Dhaka', '01722933062', 'sbanerjee.cse@gmail.com', 'f673ead0d3c57a17095ab80cbc17f067', 'Batch 5', 'male', 0, 'cse', '2007-08', 'O+', 0, 'Southtech Limited', 'DotNet C#, MVC', ''),
(505, 'MOHTARIMA UMME SALSABIL', '', '0702025', '01506', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(506, 'MD. MAHEDI  HASAN', '', '0702026', '01507', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(507, 'MD. FARHAD HOSSAIN', '', '0702027', '01509', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(508, 'MD. MAHMUDUL HASAN', '', '0702028', '01511', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(509, 'ANJAN DEBNATH', '', '0702029', '01512', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(510, 'MD. SHAH ALAM', '', '0702030', '01513', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(511, 'TAMIM-AL-MAHMUD', '', '0702031', '01514', 0, '', 'M. Keramot Ali Hall (D4)', 'Md. Mohiuddin Hawlader', 'Mosa. Shahida Begum', '01714888903', '132/2, Flat 6C, South Pirer Bagh, Sewrspara, Dhaka', '01710339405', 'tamimmitdu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', 'male', 0, 'cse', '2007-08', 'B+', 0, '66 Green Road, Dhaka', '', ''),
(512, 'ASHEKUR RAHMAN MOLLA', '', '0702032', '01515', 0, '', 'M. Keramot Ali Hall (D4)', 'Nawabul Mokhter', 'Asema Khatun', '01750055333', 'Magbazar,Dhaka', '01722412196', 'asikcse@gmail.com', 'b1fa0218c1040b082e2374a941707c35', 'Batch 5', 'male', 0, 'cse', '2007-08', 'B+', 0, 'SSLWireless', 'Mobile VAS & Application Development', ''),
(513, 'SHEIKH SHAKIR-AL-HASAN', '', '0702033', '01516', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(514, 'AKHI SEN', '', '0702034', '01517', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(515, 'MD. SHARIFUL ISLAM', '', '0702035', '01522', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(516, 'MD. HAFIZ AL ASAD', '', '0702036', '01756', 0, '', 'M. Keramot Ali Hall (D4)', 'Md.Ashraf Uddin Haoladar', 'Hasina Parvin', '01722278204', 'Nalchity,Jhalokathi', '01722899652', 'hafizasad06@gmail.com', '59891d4c9ce25abb456a3de0e5d2b110', 'Batch 5', 'male', 0, 'cse', '2007-08', 'O+', 0, 'Department of ICT,ICT Division, Ministry of post Telecom and IT,Agargoan, Dhaka', '', ''),
(517, 'G. M. RIFAT KABIR', '', '0702037', '01757', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(518, 'MD.  SHAFIQUL  ISLAM', '', '0602039', '01320', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', ''),
(519, 'A. K. M. ZAKARIA', '', '0702040', '01142', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 5', '', 0, 'cse', '2007-08', '', 0, '', '', '');
INSERT INTO `tbl_student` (`student_id`, `student_name`, `student_image`, `student_roll_no`, `student_reg_no`, `session_id`, `student_semester`, `student_hall`, `student_father_name`, `student_mother_name`, `guardian_contact_no`, `student_address`, `student_contact_no`, `student_email`, `student_password`, `student_batch`, `student_gender`, `publication_status`, `student_faculty`, `student_session`, `student_blood_group`, `student_cgpa`, `student_job_location`, `student_expert_area`, `student_designation`) VALUES
(559, ' KAZI  ABDULLAH  AL  MAMUN ', '', '0802001', ' 01823', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(560, ' NAHIDA  HANNAN  BITHE', '', '0802002', '01824', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(561, ' ANIK  BISWAS', '', '0802003', '01825', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(562, ' HAFSA  AKTER  SONIA', '', '0802004', ' 01827', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(563, 'TAPAS  SARKER ', '', '0802005', '01828', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(564, 'SAURAV  DEBNATH ', '', '0802006', '01830', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(565, ' MD.  SOLAIMAN  HOSSAIN', '', '0802007', '01832', 0, '', 'Sher-e-Bangla Hall-2', 'Abdul Jabbar Sheikh', 'Late. Taslima Begum', '01710240987', '!9, Sonatala Lane Bagerhat', '01952475887', 'solupstu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', 'male', 0, 'cse', '2008-09', 'O+', 0, 'Bagerhat', '', ''),
(566, ' MD.  ABDUL  KADIR', '', '0802008', '01833', 0, '', 'Sher-e-Bangla Hall-1', 'Md. Rokib Hossain', '', '', 'East Shewrapara, Mirpur, Dhaka - 1216', '01911683706', 'razu121@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', 'male', 0, 'cse', '2008-09', 'O+', 0, 'Dhaka', 'PHP, MySQL, Oracle 10g, Java, Networking', ''),
(567, ' MD.  MAHFUZAAR  RAHMAN  SARDAR', '', '0802009', '01836', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(568, ' NILADRY  SHEKHAR  RAY', '', '0802010', '01839', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(569, ' KHADIZA  AKHTER', '', '0802011', '01840', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(570, 'MD.  RAJIBUL  ISLAM ', '', '0802012', '01841', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(571, 'TANIA  ISLAM', '', '0802013', '01842', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(572, ' TARIQ  ADNAN', '', '0802014', '01843', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(573, ' MD.  SHAFIUL  AZAM', '', '0802015', '01847', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(574, ' KHAN  AHMED  IMTIAZ  BULBUL', '', '0802016', '01848', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(575, ' NUSRAT  JAHAN', '', '0802017', '01850', 0, '', '', '', '', '', '', '', '', '915e2368dc1e6c3dfde856efff6a2349', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(576, ' SATHI  RANI  BACHHAR', '', '0802018', '01852', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(577, ' TARIQUL  ISLAM', '', '0802019', '01855', 0, '', 'Sher-e-Bangla Hall-1', 'Anisur Rahman', 'Ferdousi Begum', '', 'Barisal', '+8801720494773', 'tariqul.bu.ap@gmail.com', 'a4872acab2794222cedce9681c1c084e', 'Batch 6', 'male', 0, 'cse', '2008-09', 'O+', 0, 'University of Barisal', 'Web Programming', ''),
(578, 'A. S. M.  SHAHARIAR ', '', '0802020', '01856', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(579, ' PRODIP  KUMAR  RAY', '', '0802021', '01857', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(580, ' DIPANITA  SAHA', '', '0802022', '01858', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(581, ' SHAHANARA  HOSSAIN', '', '0802023', '01859', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(582, ' MOHAMMAD  IBRAHIM  KHAN', '', '0802024', '02067', 0, '', 'M. Keramot Ali Hall (D4)', '', '', '', '', '', '', '4faf5a2e243bbb0e98b47fd47a406baf', 'Batch 6', 'male', 0, 'cse', '2008-09', 'A+', 0, 'Dhaka', '', ''),
(583, 'MD.  JAHIDUL  ISLAM ', '', '0802025', '02125', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(584, ' MD.  MEHEDE  HASAN', '', '0802026', '01475', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(585, ' MD.  WALIUL  ISLAM', '', '0802027', '01486', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(586, ' FATEMATUJ  JAHAN  SWARNA', '', '0802028', '01497', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(587, ' SABINA  YASMIN', '', '0802029', '01500', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(588, ' SEKH  MAENUL  ISLAM', '', '0802030', '01503', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(589, ' KHALEDA  MEHRIN', '', '0802031', '01508', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(590, ' TANGELA  AMAN', '', '0802032', '01510', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(591, 'REMEUJ  RASHID   ', '', '0802033', '01518', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(592, ' UJJWAL  ADHIKARY', '', '0802034', '01520', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(593, ' MIR  GULAM  SARWAR ', '', '0802035', '01107', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(594, ' MD.  LOKMAN  HOSSAIN  MALLIK ', '', '0802036', '01135', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(595, ' MD.  SAMIUL  HASAN', '', '0802037', '01854', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(596, ' KHAN  MD.  GOLAM  MOWLA', '', '0802038', '01120', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(597, ' BAPPA  GHOSH', '', '0802038', '01587', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 6', '', 0, 'cse', '2008-09', '', 0, '', '', ''),
(598, '  SOUMITRA  SARKAR', '', '0902002', '02140', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(599, ' RAHUL  DEB  SARDAR', '', '0902003', '02141', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(600, ' MD.  ASHADUZZAMAN ', '', '0902004', '02142', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(601, ' MD. MIZANUR  RAHMAN', 'images/student_images/15871453_1292377740819645_8717091140281016881_n.jpg', '0902005', '02143', 0, '', 'M. Keramot Ali Hall (D4)', 'Md. Lokman Hosen', 'Ferdausi Begum', '01720145358', 'R-2114,  Shahid Smriti Hall, BUET, Palashi, Dhaka-1000', '01770867227', 'engr.mizanbd@ymail.com', '2e51814f9a47ef36011638181ec606c0', 'Batch 7', 'male', 0, 'cse', '2009-10', 'O+', 0, 'Sr. Lecturer and Program Coordinator, Dept. of CSE, Green University of Bangladesh', 'Human-Computer Interaction (HCI), Network and Systems Security, Data Mining, IT for Development.', ''),
(602, ' NOKUL  KUMAR  BISWAS', '', '0902007', '02145', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(603, ' NUSRAT  JAHAN', '', '0902008', ' 02146', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(604, ' NAFISHA  TASNIM', '', '0902009', '02147', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(605, 'S. M. ASHIQUZZAMAN ', '', '0902010', '02148', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(606, ' MD.  FAZLAY  RABBY', '', '0902011', '02149', 0, '', 'Sher-e-Bangla Hall-2', '', '', '', '', '01924217947', 'fazlaycse@gmail.com', 'f7f57bd36770a26096b6b787754c7f37', 'Batch 7', 'male', 0, 'cse', '2009-10', 'O+', 0, 'Motijhil Dhaka', '', ''),
(607, ' GAZI  AZIZUR  RAHMAN', '', '0902012', '02150', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(608, 'LOPA  KHATUN ', '', '0902013', '02151', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(609, 'DOLA  DAS ', '', '0902014', '02155', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(610, ' SARNA  MAJUMDER ', '', '0902015', '02157', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(611, 'BIPASHA  BEPARY ', '', '0902016', '02161', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(612, 'SUKHDEB  CHANDRA  DAS ', '', '0902017', '02163', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(613, 'G.M. SHYFUL  ISLAM', '', '0902018', ' 02164', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(614, 'MST.  SANJIDA  EASMIN', '', '0902019', '02165', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(615, ' MD.  MASHIUR  RAHMAN', '', '0902020', '02166', 0, '', 'M. Keramot Ali Hall (D4)', 'ABDUR RAZZAK HOWLADER', 'AJUFA BEGUM', '01716141267', 'Kaderabad Housing, Mohammadpur, Dhaka-1207', '01911664580', 'mashiur028@gmail.com', 'b44cfca311ae1a5eed1a85b9533b16ff', 'Batch 7', 'male', 0, 'cse', '2009-10', 'AB+', 0, 'Cards Operation Division, Dutch-Bangla Bank Ltd, Head Office,Dhaka', 'Banking and Information Technology', ''),
(616, 'MD.  TARIQUL  ISLAM ', '', '0902021', '02167', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(617, 'MD.  EMON  SARDAR ', '', '0902022', '02168', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(618, ' S. M. JIHANUR  RAHMAN', '', '0902023', ' 02169', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(619, ' SHUVANKAR  PAUL', '', '0902024', ' 02174', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(620, ' MD.  SHARIFUZZAMAN  HERON  KHAN', '', '0902025', '02176', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(621, ' NUSHRAT  JAHAN  BUBLY', '', '0902026', ' 02177', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(622, ' MAHADI  HASAN', '', '0902027', ' 02178', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(623, 'SYED  IMRAN  HOSSAIN ', '', '0902028', ' 02179', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(624, ' JISHNU  SARDAR', '', '0902029', '02180', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(625, 'MD.  SHAMIM  HOSSAIN ', '', '0902030', '02181', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(627, 'ANTOR  DEY ', '', '0902031', '02182', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(628, 'TUHIN  SHUVRA  DAS ', '', '0902032', '02183', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(629, 'FAZLY  RABBI ', '', '0902033', '02184', 0, '', 'Sher-e-Bangla Hall-2', '', '', '', '', '', 'fazlyrabbi77@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', 'male', 0, 'cse', '2009-10', 'B+', 0, 'PDBF HQ, Dhaka', 'PHP, Mobile Apps development, web development', ''),
(630, 'SK. ABDULLAH-AL-MAMUN ', '', '0902034', '02185', 0, '', 'Sher-e-Bangla Hall-2', 'Sk. Abdul Mannan', 'Shafia Jesmin', '', '23/2 south souri,Bagerhat, Khulna,Bangladesh', '+8801751015599', 'auvyauvy@gmail.com', '34819d7beeabb9260a5c854bc85b3e44', 'Batch 7', 'male', 0, 'cse', '2009-10', 'A+', 0, 'Dhaka', 'Java, Phone Aplication', ''),
(631, ' K. M. ASLAM  UDDIN', '', '0902035', '02186', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(632, ' MD.  MASUM  BILLAH', '', '0902036', '02187', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(633, ' ABDUL  KAIUM', '', '0902037', '02188', 0, '', 'M. Keramot Ali Hall (D4)', 'Abdul Mannan', 'Nasima Begum', '01558113973', 'Village# Darichar Baroikhali, Post# Parerhat(Kalibari Bazar)-8502,Thana# Zianagar,District# Pirojpur.', '01750008264', 'a.kaiumcse@gmail.com', 'a2df8fb15bcccc2f28965e1f43caa462', 'Batch 7', 'male', 0, 'cse', '2009-10', 'O+', 0, 'Narayangonj ', 'Networking ', ''),
(634, 'SUBORNA  RANI ', '', '0902038', '02189', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(635, ' ARINDOM  MONDAL', '', '0902039', '02190', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(636, ' MD.  JAKIR  HOSSEN', '', '0902040', '01891', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(637, 'LITAN  SARKER ', '', '0902041', '01834', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(638, 'MANSURA  HASAN  IRAKA ', '', '0902042', '01838', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(639, ' MD.  HASIBUR  RASHID', '', '0902043', '01845', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(640, ' ADITEE  MAZUMDER', '', '0902044', '01860', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(641, 'BIPLAB  CHANDRA  DEBNATH ', '', '0902045', '01861', 0, '', '', '', '', '', '', '', '', '14fa3b1dab53425bc2bdb258dfc16736', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(642, ' KAKALI  RANI  ', '', '0902046', '02057', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 7', '', 0, 'cse', '2009-10', '', 0, '', '', ''),
(643, 'MAJEDA KHANOM ', '', '1102001', '03175', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(644, 'KHAN  ATAUR  RAHMAN ', '', '1102002', '03176', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(645, 'MD. MOAZZEM  HOSSAIN  RIAD', '', '1102005', '03179', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(646, 'ASHIS  KUMAR  SINGHA  ROY', '', '1102007', '03181', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(647, 'MST.  AFRINA  ISLAM', '', '1102008', '03182', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(648, 'ABRAR  LABIB  ZEEM', '', '1102009', '03183', 0, '', '', '', '', '', '', '', '', '', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(649, 'MD.  SAFIKUL  ISLAM', '', '1102010', '03184', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(650, 'MD.  MIRAJ  MAHMUD', '', '1102011', '03185', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(651, 'MD. ARINUL  ISLAM', '', '1102012', '03186', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(652, 'MRINMOYEE  ROY', '', '1102013', '03187', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(653, 'MD. MEHADE  HASAN', '', '1102014', '03188', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(654, 'SHAKTI  CHANDRA  DEY', '', '1102015', '03189', 0, '', 'Sher-e-Bangla Hall-2', 'Gopal Chandra Dey', 'Manju Rani Dey', '', '', '', 'mail2shaktidey@gmail.com', 'f01acd85b5e40e93f565627a8bb8bd98', 'Batch 9', 'male', 0, 'cse', '2011-12', 'AB+', 0, '', '', ''),
(655, 'MD. AL-AMIN  HOSSAIN', '', '1102016', '03190', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(656, 'GOLAM  MAHI UDDIN  ', '', '1102017', '03191', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(657, 'MD.  HASINUL  ISLAM', '', '1102018', '03192', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(658, 'MD. SHOAIB  AKHTER ', '', '1102019', '03193', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(659, 'SIMAB AL AHMMED', '', '1102020', '03194', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(660, 'TUMPA  RANI  DATTA', '', '1102021', '03195', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(661, 'ALI  AHMED  EVAN', '', '1102022', '03196', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(662, 'MD.  SABBIR  HOSSAIN', '', '1102023', '03197', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(663, 'NABONITA  HALDER', '', '1102024', '03198', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(664, 'MD.  MOTIUR  RAHMAN', '', '1102025', '03199', 0, '', 'M. Keramot Ali Hall (D4)', 'Md. Mannan Khan', 'Rijia Begum', '', 'Bashir Uddin Road, Kalabagan, Dhaka-1205', '01755040614', 'motiurcsepstu@gmail.com', '27f783ea353ea9a8b3e14b9a740d20a2', 'Batch 9', 'male', 0, 'cse', '2011-12', 'B+', 0, 'Lecturer, Dhaka International University ', '', ''),
(665, 'MD. ARIFUR  RAHMAN', '', '1102026', '03200', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(666, 'NIGAR  SULTANA', '', '1102027', '03201', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(667, 'MD.  MEHEDI  HASAN  RIDAY', '', '1102028', '03202', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(668, 'TANJILA  ALAM', '', '1102030', '03204', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(669, 'RASAMAY ROY', '', '1102031', '03205', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(670, 'SAMINA HOSSAIN  IFFATH', '', '1102032', '03206', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(671, 'MD. TOUHIDUR  RAHMAN', '', '1102033', '03207', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(672, 'JICO  MARMA', '', '1102035', '03209', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(673, 'MD.  MUSTAFEJUR  RAHMAN', '', '1102037', '03211', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(674, 'MD.  AL- AMIN  MOLLICK', '', '1102038', '03212', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(675, 'SHETU  RANI  GUHA', '', '1102042', '03216', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(676, 'MAITRI  DEBNATH', '', '1102045', '03219', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(677, 'SUMIYA  PARVIN', '', '1102046', '03220', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(678, 'MD. TABASSUM  ALAM  KHAN', '', '1102047', '03221', 0, '', 'M. Keramot Ali Hall (D4)', 'Md. Saiful Alam Khan', 'Zakia Sultana', '01737966531', '', '01737966531', 'tasintsn@gmail.com', '7fcc0502914fd18eb6c3d51ba64c6892', 'Batch 9', 'male', 0, 'cse', '2011-12', 'O+', 0, '', '', ''),
(679, 'RIDWAN  AL-GALIB', '', '1102048', '03222', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(680, 'SUJAN  BISWAS', '', '1102049', '03223', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(681, 'SYED  ZIAD  MAHMUD', '', '1102050', '03224', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(682, 'DILRUBA', '', '1102051', '03225', 0, '', 'Begum Sufia Kamal Hall', 'Md. Serajul Haq', 'Mst. Khadija Begum', '', 'Bauphal, Patuakhali.', '01760647067', 'dilruba1102051@gmail.com', '8277e0910d750195b448797616e091ad', 'Batch 9', 'female', 0, 'cse', '2011-12', 'B+', 0, '', '', ''),
(683, 'NAEM  AHMAD  MISHU', '', '1102053', '03227', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(684, 'MD.  FAZLE  RABBI', '', '1102054', '03228', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(685, 'KHALID  HASAN  TALUKDER', '', '1102055', '03229', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(686, 'S. M. IMTIAZ  HASAN', '', '1102056', '03230', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(687, 'LOKMAN', '', '1102057', '03231', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(688, 'ARIFUL  ISLAM', '', '1102059', '03233', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(689, 'MD. REZAUL  KARIM', '', '1102060', '03234', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(690, 'ANINDYA  DUTI  DHAR', '', '1102061', '03235', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(691, 'MD.  KAWSER  SHEIKH', '', '1102062', '03236', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(692, 'SYED  SADRUL  ULLAH  SAHAD', '', '1102064', '03238', 0, '', 'M. Keramot Ali Hall (D4)', '', '', '', '', '+8801751756987', 'sadrul31@gmail.com', '8e7d5f6e8b7e96d9cd59daa45a86913d', 'Batch 9', 'male', 0, 'cse', '2011-12', '', 0, '', '(~_~)', ''),
(693, 'AJAY  SHAH', '', '1102065', '03506', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(694, 'INDRANI  SARKAR', '', '1002041', '02898', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 9', '', 0, 'cse', '2011-12', '', 0, '', '', ''),
(695, ' JOYDEEP  ROY', '', '1002002', '02859', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(697, ' S.M. SHAFIUZZAMAN', '', '1002003', '02860', 0, '', 'M. Keramot Ali Hall (D4)', 'S. M. Mokarrom Hossain', 'Monoara Begum', '01926130666', '', '', 'shafisami005@gmail.com', 'e168ac413e7dc257b2dc89324320adbd', 'Batch 8', 'male', 0, 'cse', '2010-11', 'A+', 0, '', '', ''),
(698, ' AMIT  MONDOL', '', '1002006', '02863', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(699, 'JHUMA RANI DEY ', '', '1002007', '02864', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(700, 'SIKDER  FAYSAL  AHMED ', '', '1002008', '02865', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(701, ' FARZANA  NAOMI', '', '1002001', '02867', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(702, ' SAIFA  KHANAM  LIZA', '', '1002012', '02869', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(703, 'MD. SHAHA  MUSABBIR  MIRAJ  ', '', '1002013', '02870', 0, '', 'Sher-e-Bangla Hall-1', 'Md. Firoj Kibria', 'Aktar Jahan', '', '', '01520100142', 'cse.miraj.8batch@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', 'male', 0, 'cse', '2010-11', 'B+', 0, '', '', ''),
(704, ' MOINUL  ISLAM  SAYED', '', '1002014', '02871', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(705, ' ARPITA  HOWLADER', '', '1002015', '02872', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(706, ' MD. MASUM  SHEIKH', '', '1002016', '02873', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(707, 'MD. ARAFAT  ALAM  ', '', '1002017', '02874', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(708, 'SYFUNNESA  TULY ', '', '1002019', '02876', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(709, 'SAMRAT  KUMAR  DEY ', '', '1002020', '02877', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(710, 'MD. RAJIB HOWLADER ', '', '1002021', '02878', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(711, ' REJWANA  ISLAM', '', '1002022', '02879', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(712, ' SUBRATA  KUMER  GAIN', '', '1002023', '02880', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(713, ' HANNA  AKHTAR  BABUNI', '', '1002027', '02884', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(714, 'PROMIT  KARMAKER ', '', '1002028', '02885', 0, '', '', '', '', '', '', '', '', '0a623e90283737618e106a93428e6c77', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(715, 'DEBASHISH  HALDER ', '', '1002029', '02886', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(716, 'TANJILA  SALWA ', '', '1002031', '02888', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(717, ' SAMRAT  MISTRY', '', '1002032', '02889', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(718, ' ABDULLAH  OMAR  NASIF', '', '1002033', '02890', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(719, 'MD. MUTARRIF ', '', '1002034', '02891', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(720, 'SYED  SALAUDDIN  MOHAMMAD  TARIQ ', '', '1002035', '02892', 0, '', 'M. Keramot Ali Hall (D4)', 'SYED LIAQUAT ALI', 'SAMIN ARA BEGUM', '01918608220', 'South Badda Bazaar, Gulshan, Dhaka 1212', '01780714716', 'tariq.cse.pstu@gmail.com ', '6b516f05f465833c0f1a2cf5b2c85aea', 'Batch 8', 'male', 0, 'cse', '2010-11', 'A+', 0, 'Baridhara, Dhaka 1212', 'JAVA Enterprise Edition', ''),
(721, ' MD. ABDUL  ALIM  FORAGY', '', '1002036', '02893', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(722, 'RINATH  RUHANA  FERDAUSI   ', '', '1002037', '02894', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(723, ' MD. SHARIFUL  ISLAM ', '', '1002039', '02896', 0, '', 'M. Keramot Ali Hall (D4)', 'Md. Monirul Islam', '', '', 'Present ( Middle Badda, Dhaka)', '+8801747612143, +8801843337958', 'sharifulruhan@gmail.com', 'da503f4272fbfe5bc74e0f774ee00ec0', 'Batch 8', 'male', 0, 'cse', '2010-11', 'B+', 0, 'Student ( MSc. at Dhaka University of Engineering and Technology )', '', ''),
(724, ' MD. SHAMIM  REJA', '', '1002040', '02897', 0, '', 'Sher-e-Bangla Hall-1', 'MD.SHAHJAHAN MOLLA', 'JOYNAB BIBI', '01735836941', 'Middle Badda, Link Road . Dhaka - 1212', '01738711171', 'reja.sebpo@gmail.com', '1dd735a9037ef12188c4a3500165be1f', 'Batch 8', 'male', 0, 'cse', '2010-11', 'O+', 0, 'Service Engine Ltd. Abbas Garden, Mohakhali.Dhaka', 'Digital Ad trafficking ,Branded syndication and Sponsorship Campaign.All devices Video display Operation PHP, HTML5 and CSS,Javascript etc ', ''),
(725, 'MD. ANIKUR  RAHMAN ', '', '1002044', '02901', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(726, ' ARIF  HOSSAIN', '', '1002045', '02902', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(727, ' MD. HASAN  GAZI', '', '1002046', '02903', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(728, 'BARUN  KUMAR BISWAS ', '', '1002048', '02905', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(729, 'MOSTAFIZUR  RAHAMAN ', '', '1002049', '02906', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(730, ' KHAN  NAZMUS  SAKIB', '', '1002050', '02907', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(731, ' MRINMOY  DAS', '', '1002051', '02908', 0, '', 'Sher-e-Bangla Hall-1', 'Nilkanta Das', 'Minoti Das', '', 'Mirpur 1, Dhaka,  Bangladesh', '01521402550', 'cse.mrinmoy@gmail.com', '639264f21f9255c546d650a2358ece6e', 'Batch 8', 'male', 0, 'cse', '2010-11', 'B+', 0, 'Thai Airways International PCL', 'Not expert on anything ', ''),
(732, ' RAFID  ISLAM', '', '1002052', '02909', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(733, ' ISRAT  JAHAN  SHEMU', '', '1002053', '02910', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(734, ' JANNATUL  FERDOUS  ANTARA', '', '1002054', '02911', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(735, 'MOHAMMAD  ZAHID  HASAN ', '', '1002055', '02912', 0, '', 'Sher-e-Bangla Hall-1', '', '', '', 'Dhaka', '01745184127', 'zahid.hasan@dutchbanglabank.com', '01cfcd4f6b8770febfb40cb906715822', 'Batch 8', 'male', 0, 'cse', '2010-11', 'A+', 0, 'Dhaka', 'Unknown', ''),
(736, 'ESRAT  JAHAN ', '', '1002056', '02913', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', ''),
(737, ' OLI  UL  ISLAM', '', '1002057', '02914', 0, '', 'Sher-e-Bangla Hall-1', 'Md.Golam Sarwar', 'Mrs. Momotaz Begum', '01760614049', 'Mirpur, Dhaka', '01744591800', 'oleulislam.ce@gmail.com', 'fd8fbf315b345e40cd76ba1c9fb2d01b', 'Batch 8', 'male', 0, 'cse', '2010-11', 'B+', 0, 'WebHawksIT Ltd.', 'JAVA', ''),
(738, 'MIMO  SAHA ', '', '1002058', '02915', 0, '', 'Sher-e-Bangla Hall-1', 'Biswajit Saha', 'Mukta Saha', '01719385054', 'Hat khola road, Barisal.', '01710744520', 'mmimosaha@gmail.com', 'b4f336111fc6048650030410f988677a', 'Batch 8', 'male', 0, 'cse', '2010-11', 'B+', 0, 'Khulna', 'Android, Php', ''),
(739, 'KHONDOKER ABIR HASAN ', '', '0902001', '02139', 0, '', 'Sher-e-Bangla Hall-1', 'Khondoker Arif Hosain', 'Piara Begum', '', 'Kalatala, Patuakhali', '01717655674', 'abir_hasan90@yahoo.com', '1ad6dbe574020666fee77b1e218c2542', 'Batch 7', 'male', 0, 'cse', '2010-11', 'A+', 0, 'NPI, Wireless gate, Mohakhali, Dhaka', 'Data mining, System Security, ', ''),
(740, 'MANIK  DEBNATH ', '', '0902006', '02144', 0, '', '', '', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Batch 8', '', 0, 'cse', '2010-11', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_file`
--

CREATE TABLE IF NOT EXISTS `tbl_student_file` (
  `file_id` int(10) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `file_location` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author_name` varchar(255) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE IF NOT EXISTS `tbl_teacher` (
  `teacher_id` int(5) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(255) NOT NULL,
  `department_id` int(2) NOT NULL,
  `teacher_designation` varchar(255) NOT NULL,
  `teacher_about` varchar(6000) CHARACTER SET utf8 NOT NULL,
  `teacher_contact_no` varchar(255) NOT NULL,
  `research_area` varchar(2550) CHARACTER SET utf8 NOT NULL,
  `chairman` tinyint(4) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `teacher_image` varchar(255) NOT NULL,
  `teacher_email` varchar(255) NOT NULL,
  `teacher_password` varchar(255) NOT NULL,
  `access_level` tinyint(1) NOT NULL DEFAULT '2',
  `on_leave` tinyint(1) NOT NULL,
  `teacher_education` varchar(3000) CHARACTER SET utf8 NOT NULL,
  `teacher_publication` mediumtext CHARACTER SET utf8 NOT NULL,
  `teacher_research_details` varchar(2550) CHARACTER SET utf8 NOT NULL,
  `teacher_award` varchar(6500) NOT NULL,
  `teacher_link` varchar(2550) CHARACTER SET utf8 NOT NULL,
  `security_question` varchar(2555) NOT NULL,
  `answer` varchar(2555) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`teacher_id`, `teacher_name`, `department_id`, `teacher_designation`, `teacher_about`, `teacher_contact_no`, `research_area`, `chairman`, `publication_status`, `teacher_image`, `teacher_email`, `teacher_password`, `access_level`, `on_leave`, `teacher_education`, `teacher_publication`, `teacher_research_details`, `teacher_award`, `teacher_link`, `security_question`, `answer`) VALUES
(18, 'Mohammad Jamal Hossain', 2, 'Professor', '', '01865102400', '', 0, 1, 'images/teacher_images/imag.png', 'jamalpstu07@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 0, '', '', '', '', '', '', ''),
(24, 'Dr. Syed Md. Galib', 2, 'Associate Professor', '', '+8801781408274 ', 'Broadly Artificial Intelligence.<div>Current interests are on Image processing and Traffic optimization using game theory</div>', 1, 1, 'images/teacher_images/galib_sir1.jpg', 'galib@pstu.ac.bd', '9493025144e1d69ac8325cc6f1df207a', 2, 0, '<ul><li>Doctor of Philosophy (PhD) in ICT<span class="Apple-tab-span"> </span>- January, 2015 &nbsp;- Swinburne University of Technology, Australia</li><li>Master of Science in Computer Engineering -<span class="Apple-tab-span">    </span>October, 2008 - Dalarna University, Sweden</li><li>Bachelor of Science in CSE<span class="Apple-tab-span"> </span>- March, 2006 - Khulna University, Bangladesh</li></ul>', '', '', '', '', '', ''),
(25, 'Md Abdul Masud', 2, 'Associate Professor', '', '+86 13510301944', 'Data Mining, Clustering and Semi-supervised Clustering, Ensemble Learning.', 0, 1, 'images/teacher_images/masud_sir_cit2.jpg', 'masudcit@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 0, '<div>Pursuing PhD in&nbsp;<span >Information and Communication Engineering, Shenzhen University, China.</span></div><div><br></div>M.Sc. in Information and Communication Engineering, Islamic University, Bangladesh.', '', '', '', '', '', ''),
(26, 'Chinmay Bepery', 2, 'Assistant Professor                            ', '', '01922361666', '', 0, 1, 'images/teacher_images/chinmay_sir1.jpg', 'chinmay.cse@pstu.ac.bd ', '827ccb0eea8a706c4c34a16891f84e7b', 2, 0, '', '', '', '', '', 'What is the name of your village?', 'katapitania'),
(27, 'Md. Atikqur Rahaman', 2, 'Assistant Professor', '', '01915114929', '', 0, 1, 'images/teacher_images/atik_sir1.jpg', 'atikqurrahaman@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 2, 0, '', '', '', '', '', '', ''),
(29, 'Moinul Islam Sayed', 2, 'Lecturer                            ', '', '', '', 0, 1, 'images/teacher_images/sayed_sir1.jpg', 'sayed.pstu11@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 0, '', '', '', '', '', '', ''),
(30, 'Dr. Md. Samsuzzaman', 3, 'Associate Professor', '<p>Md. Samsuzzaman was born in Jhenaidah Bangladesh in 1982. He received B.Sc. and M. Sc. Degree in Computer Science and Engineering from Islamic Univrsity Kushtia, Bangladesh in 2005 and 2007, respectively and the Ph.D. degree from the Universiti Kebangsaan.</p>', 'Mobile 01712653210 Off: 348 (Ext)', '<p>i.Antenna Technology</p><p> ii. Telecommunication Engineering <br></p><p>iii. RF Communication Engineering <br></p><p>iv Satellite Communication</p><p> v Microwave Imaging <br></p><p>vi Semantic Web</p>', 1, 1, 'images/teacher_images/A_6350.JPG', 'sobuzcse@gmail.com', '432f2f484443ccafd49842fc62eb9812', 2, 0, '<div align="justify">1.Doctor of Philosophy, PhD. (Telecommunication Engineering, Research on “Development of Circularly Polarized Patch Antenna for Small Satellite”),Universiti Kebangsaan Malaysia, UKM bangi, Selangor D.E., Malaysia,  2015.<br>2.Master of Science, M.Sc., Dept. of Computer Science and Engineering, Research on “Relay Node Selection Technique in Homogeneous Cluster Based Wireless Sensor Network”), Islamic Unievrsity, Kushtia, Bangladesh, August 2007, (first class 2nd).<br>3. Bachelor of Science (Honors), B.Sc., Dept. of Computer Science and Engineering, <br>    Islamic University, Kushtia, Bangladesh, August 2005, (first class 1st)<br><br></div>', '<div align="justify">1.M. Z Mahmud,M.T Islam,M. Samsuzzaman,S. Kibria,N. Misran, Design and Parametric Investigation of Directional Antenna for Microwave Imaging Application,IET Microwaves, Antennas & Propagation,2016 (Accepted).<br>2.M. Rokunuzzaman, M. Samsuzzaman, and M. T. Islam, "Unidirectional Wideband 3-D Antenna for Human Head-Imaging Application," IEEE Antennas and Wireless Propagation Letters, vol. PP, pp. 1-1, 2016. (Indexed in ISI & SCOPUS) (Impact Factor- ) Q2.<br>3.A. Rahman, M. T. Islam, M. Samsuzzaman, M. J. Singh, and M. Akhtaruzzaman, "Preparation and Characterization of Flexible Substrate Material from Phenyl-Thiophene-2-Carbaldehyde Compound," Materials, vol. 9, p. 358, 2016. (Indexed in ISI & SCOPUS) (Impact Factor-2.651) Q1.<br>4.M. Mahmud, S. Kibria, M. Samsuzzaman, N. Misran, and M. Islam, "A New High Performance Hibiscus Petal Pattern Monopole Antenna for UWB Applications," Applied Computational Electromagnetics Society Journal, vol. 31, 2016. ISSN: 1054-4887, (Indexed in ISI & SCOPUS) (Impact factor – 0.759), Q3<br>5.M. Mahmud, M. Islam, and M. Samsuzzaman, "A high performance UWB antenna design for microwave imaging system," Microwave and Optical Technology Letters, vol. 58, pp. 1824-1831, 2016. . (Indexed in ISI & SCOPUS) (Impact Factor-0.623) Q4<br>6.M. Samsuzzaman, M. Islam, J. Mandeep, M. Mahmud, T. Alan, and M. Islam, "Miniaturized dual band Y shaped antenna by high dielectric ceramic filled bio plastic composite material," International Journal of Applied Electromagnetics and Mechanics, pp. 1-10, 2016. Journal of Applied Electromagnetics and Mechanics, 2015. (Indexed in ISI & SCOPUS) (Impact Factor- 0.815) Q3.<br>7.T. Alam, M. Samsuzzaman, M. R. I. Faruque, and M. T. Islam, "A metamaterial unit cell inspired antenna for mobile wireless applications," Microwave and Optical Technology Letters, vol. 58, pp. 263-267, 2016. (Indexed in ISI & SCOPUS) (Impact Factor-0.623) Q4.<br>8.M. Samsuzzaman, M. Z. Mahmud, J. S. Mandeep, M. T. Islam, “Miniaturized Dual Band Y Shaped Antenna by High Dielectric Ceramic Filled Bio Plastic Composite Material”, International Journal of Applied Electromagnetics and Mechanics, vol. In press, 2015, (Indexed in ISI & SCOPUS) (Impact Factor- 0.815) Q3.<br>10.T. Alam, M. T. Islam, M. R. I. Faruque, F. Mansor, H.Arshad, M. Samsuzzaman "A Quadrilateral Shape Broadband Antenna for Wireless Application" International Journal of Applied Electromagnetics and Mechanics, 2015. (Indexed in ISI & SCOPUS) (Impact Factor- 0.815) Q3.<br>11.M. Islam, M. T. Islam, M. Samsuzzaman, M. Faruque, and N. Misran, Microstrip Line-fed Monopole Antenna on an Epoxy-resin reinforced woven-glass material for Super wideband applications, Science and Engineering of Composite Materials, vol. , no. , (Indexed in ISI & SCOPUS) (Impact Factor- 0.515) Q4. (Article in Press)<br>12.M. M. Islam1, M. T. Islam, M. R. I. Faruque, H. Arshad, M. Samsuzzaman, M. I. Hossain, and T. Alam, A Compact Disc-shaped Super Wideband Patch Antenna with a Structure of Parasitic Element, International” Journal of Applied Electromagnetics and Mechanics, 2015. (Indexed in ISI & SCOPUS) (Impact Factor- 0.815) Q3, (Article in Press).<br>13.M. Islam, M. Faruque, M. Islam, and M. Samsuzzaman, "Ultrawideband to super wideband antenna conversion using parasitic elements," ELECTRONICS WORLD, vol. 121, pp. 36-38, 2015. (Indexed in ISI & SCOPUS) (Impact Factor- 0.1) Q4.<br>14.Md. Moinul Islam, Mohammad Tariqul Islam, R. W. Aldhaheri, Md. Samsuzzaman, Mohammad Rashed Iqbal Faruque, “Design of a Compact UWB antenna with a Partial ground Plane on Epoxy Woven Glass Material”, Science and Engineering of Composite Materials, vol. 24, no. 2, (Indexed in ISI & SCOPUS) (Impact Factor- 0.515) Q4.<br>15.Md. Moinul Islam, Mohammad Tariqul Islam, Md. Samsuzzaman, Mohammad Rashed Iqbal Faruque, Norbahiah Misran, “Microstrip Line-fed Fractal Antenna with a High Fidelity Factor for UWB Imaging Applications”, Microwave and Optical Technology Letters, vol. 57, pp. 2580-2585, 2015. (Indexed in ISI & SCOPUS) (Impact Factor-0.623) Q4 .<br>16.M. Samsuzzaman, M. T. Islam, M. K. Nahar, J. S. Mandeep, F. Mansor, and M. M. Islam, "Circularly polarized high gain S band antenna for nanosatellite," International Journal of Applied Electromagnetics and Mechanics, vol. 47, no. 4, pp. 1039-1049, 2015. (Indexed in ISI & SCOPUS) (Impact Factor- 0.815) Q3.<br>17.T. Alam, M. R. I. Faruque, M. T. Islam, and M. Samsuzzaman, "Dual Elliptical Patch Antenna design on Low Cost Epoxy Resin Polymer Substrate material," International Journal of Applied Electromagnetics and Mechanics, vol. In press, 2015. (Indexed in ISI & SCOPUS) (Impact Factor- 0.737) Q3.<br>18.T. Alam, M. Faruque, M. Islam, and M. Samsuzzaman, "Wideband printed patch antenna on low cost epoxy resin polymer substrate," Optoelectronics and Advanced Materials-Rapid Communications, vol. 9, pp. 1058-1063, 2015. (Indexed in ISI & SCOPUS) (Impact Factor-0.449) Q4.<br>19.M. M. Islam, M. T. Islam, M. Samsuzzaman, and M. R. I. Faruque. “Compact metamaterial antenna for UWB applications”. Electronics Letters 51(16), 1222-1224, 2015, (Indexed in ISI & SCOPUS)(Impact Factor-0.930 )Q3.<br>20.M. M. Islam, M. T. Islam, M. R. I. Faruque, M. Samsuzzaman, N. Misran, and H. Arshad, "Microwave Imaging Sensor Using Compact Metamaterial UWB Antenna with a High Correlation Factor," Materials, vol. 8, pp. 4631-4651, 2015, (Indexed in ISI & SCOPUS) (Impact Factor-2.651) Q1.<br>21.M. M. ISLAM, M. T. ISLAM, M. SAMSUZZAMAN, M. R. I. FARUQUE, “A compact monopole antenna with improved bandwidth for Ku band applications,” Journal of Optoelectronics and Advanced Materials, vol. 9, no. 5-6, pp. 831-835, 2015, ISSN 1842-6573. (Indexed in ISI & SCOPUS) (Impact Factor-0.449) Q4.<br>22.Mohammad Tariqul Islam, Md. Moinul Islam, Md. Samsuzzaman, Mohammad Rashed Iqbal Faruque and Norbahiah Misran, “Negative Index Metamaterial Inspired UWB Antenna with an Integration of Complementary SRR and CLS Unit Cells for Microwave Imaging Sensor Applications”, Sensor, 2015., no. 15, pp. 11601-11627, 2015, (Indexed in ISI & SCOPUS) (Impact Factor- 2.08) Q1.<br>23.M. T. Islam, Mengu Cho, M. Samsuzzaman, S. Kibria, “Compact Antenna for Small Satellite Applications”, IEEE Antennas and Propagation Magazine, Vol. 57, No. 2, pp. 30-36, April 2015, (Indexed in ISI & SCOPUS) (Impact Factor- 1.319) Q2.<br>24.M. Samsuzzaman, M. Islam, M. Nahar, J. Mandeep, F. Mansor, and M. Islam, "Circularly polarized high gain S band antenna for nanosatellite," International Journal of Applied Electromagnetics and Mechanics, Vol. 47 pp. 1039-1049, 2015, (Indexed in ISI & SCOPUS) (Impact Factor- 0.737) Q3.<br>25.M. Samsuzzaman, M. T. Islam, S. Kibria, and M. Cho, "A compact circularly polarized high gain S‐band nanosatellite antenna using ramped convergence particle swarm optimization," Microwave and Optical Technology Letters, vol. 57, pp. 1503-1508, 2015, (Indexed in ISI & SCOPUS) (Impact Factor-0.623) Q4.<br>26.M. Samsuzzaman and M. Islam, "A semicircular shaped super wideband patch antenna with high bandwidth dimension ratio," Microwave and Optical Technology Letters, vol. 57, pp. 445-452, 2015, (Indexed in ISI & SCOPUS) (Impact Factor-0.623) Q4.<br>27.M. M. Islam, M. T. Islam, M. Samsuzzaman, M. R. I. Faruque, N. Misran, and M. F. Mansor, "A Miniaturized Antenna with Negative Index Metamaterial Based on Modified SRR and CLS Unit Cell for UWB Microwave Imaging Applications," Materials, vol. 8, pp. 392-407, 2015, (Indexed in ISI & SCOPUS) (Impact Factor-2.651) Q1.<br>28.M. M. Islam, M. T. Islam, M. Samsuzzaman, and M. R. I. Faruque, "Five band‐notched ultrawide band (UWB) antenna loaded with C‐shaped slots," Microwave and Optical Technology Letters, vol. 57, pp. 1470-1475, 2015, ISSN 1098-2760, (Indexed in ISI & SCOPUS) (Impact Factor-0.623) Q4.<br>29.M. Islam, M. Islam, M. Samsuzzaman, and M. Faruque, "A negative index metamaterial antenna for UWB microwave imaging applications," Microwave and Optical Technology Letters, vol. 57, pp. 1352-1361, 2015, ISSN 1098-2760, (Indexed in ISI & SCOPUS) (Impact Factor-0.623) Q4.<br>30.M. Samsuzzaman, M. T. Islam, J. S. Mandeep, M. K. Nahar and M. M. Islam, “Dual wideband N-shaped patch antenna loaded with shorting pin for wireless applications,” Acta Technica, 59, pp. 405-415, 2014. (Indexed in SCOPUS).<br><br></div>', '<br>', '1.The Malaysian Commonwealth Scholarship and Fellowship Plan (CSFP) scholar from September 2012 to August 2015.<br>2.Graduate Research Assistant, Department of Electrical, Electronic and Systems Eng. Faculty of Engineering and Built Environment, Universit', '', 'Enter your most secured password', 'roll'),
(31, 'Md. Kamrul Hasan', 3, 'Associate Professor', '<span style="color: rgb(102, 102, 102); font-family: Georgia, serif; font-size: 16px;">My research interest is the non-invasive blood component analysis using mobile video image. Understanding and delve into the human bio-marker information from video data are my research challenges. I aim to predict non-invasive hemoglobin and glucose level for human&nbsp;using medical image processing techniques.</span>', 'http://www.mscs.mu.edu/~mhasan02', '', 0, 1, 'images/teacher_images/kamrul_sir11.jpg', 'kamrulg@gmail.com', '797c25ebd9923aaa4e9f5b870b82a106', 2, 0, '<div><font face="Arial, Verdana"><span>Ph.D. Candidate in Computational Sciences</span></font></div><div><font face="Arial, Verdana"><span>Marquette University, USA</span></font></div><div><font face="Arial, Verdana"><span><br></span></font></div><div><font face="Arial, Verdana"><span>Masters in Computer Science</span></font></div><div><font face="Arial, Verdana"><span>University of Trento, Italy</span></font></div><div><font face="Arial, Verdana"><span><br></span></font></div><div><font face="Arial, Verdana"><span>BSc in Computer Science and Engineering</span></font></div><div><font face="Arial, Verdana"><span>Khulna University of Engineering and Technology (KUET), Bangladesh</span></font></div>', '', '', '', '', '', ''),
(32, 'Golam Md. Muradul Bashir', 3, 'Associate Professor', '', '01718323601', '', 0, 1, 'images/teacher_images/imag.png', 'murad98csekuet@yahoo.com', '028269af7e43740d8575e325cb2c1cb2', 2, 0, '', '', '', '', '', '', ''),
(33, 'Sajal Saha', 3, 'Lecturer', '', '01736092609', 'Software Engineering, Algorithm Engineering, Machine learning, Data warehousing and Mining, Wireless sensor network.', 0, 1, 'images/teacher_images/Sajal_Saha1.jpg', 'sajal.cse.cce@gmail.com', '621d3969082b6e5af206a4a738a2e6f2', 2, 0, '<b>Masters in IT</b><br><b>Institution:</b> Jahangirnagar University<br><b>Department:</b> Institute of Information Technology (IIT)<br><b>Duration:</b> 1 year<br><b>Year of Completion:</b> 2014<br><b>Result:</b> CGPA 3.97 out of 4.00<br><br><b>Bachelor of Science (B.Sc.) in Computer Science and Engineering</b><br><b>Institution:</b> Patuakhali Science and Technology University<br><b>Department: </b>Computer Science and Engineering<br><b>Duration:</b> 4 years<br><b>Year of Completion:</b> 2012<br><b>Result: </b>First class first (with Honors) CGPA 3.85 out of 4.00 (PSTU Gold Medalist)<br><br><b>Higher Secondary Certificate (H.S.C)</b><br><b>Institution:</b> Amrita Lal Dey College<br><b>Board:</b> Barisal<br><b>Group: </b>Science Group<br><b>Year of Completion:</b> 2007<br><b>Result:</b> GPA 4.90 out of 5.00<br><br><b>Secondary School Certificate (S.S.C)</b><br><b>Institution: </b>St. Alfread’s High School<br><b>Board:</b> Barisal<br><b>Group:</b> Science Group<br><b>Year of Completion:</b> 2005<br><b>Result:</b> GPA 5.00 out of 5.00', '', '<br>', '<ol><li>Prime Minister Gold Medal Award offered by University Grant Commission (UGC) of Bangladesh for good academic result.</li><li>PSTU Gold Medalist for Securing 1st position in B.Sc. CSE in PSTU.</li><li>Dean Awards (Three Times) for GPA above 3.75 in consecutive six semesters (3 years).</li><li>Education Board Scholarship in Intermediate and Junior Scholarship in School.</li></ol>', 'https://www.linkedin.com/in/sajal-saha-6941aa40/', '', ''),
(34, 'Sarna Majumder', 3, 'Lecturer                                                        ', '', '01767265119', '', 0, 1, 'images/teacher_images/sarna_mam1.jpg', 'sarna.majumder90@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 0, '', '', '', '', '', '', ''),
(35, 'Dr. S.M. Taohidul Islam', 4, 'Associate Professor', '', '01719018370', 'i. Seismic signal analysis<div>ii. Soil electric resistivity</div>', 1, 1, 'images/teacher_images/tohid_sir.png', 'staohidul@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 0, '<div>\n\n<table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="left">\n <tbody><tr>\n  <td valign="top" align="left" >\n  <p class="MsoNormal" ><b><span Arial Narrow","sans-serif"">PhD (2013)  University Kebangsaan, Malaysia</span></b></p><p class="MsoNormal" ><b ><span Arial Narrow","sans-serif"">Topics:   Soil properties investigations through Electrical Signal</span></b></p><p class="MsoNormal" ><b ><span Arial Narrow", sans-serif;">Title:   Characterizations of Soil Properties and Profiles Using Electrical Theories and Applications</span></b></p><div>\n\n<table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="left">\n <tbody><tr>\n  <td valign="top" align="left" >\n  <p class="MsoNormal" ><b><span Arial Narrow","sans-serif"">Masters by research (2008-2009) as   full time Research assistant in University Kebangsaan, Malaysia<o:p></o:p></span></b></p><p class="MsoNormal" ><b><span Arial Narrow","sans-serif";mso-fareast-font-family:\nSimSun;mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US;\nmso-fareast-language:ZH-CN;mso-bidi-language:AR-SA">Topics: Seismic Signal Analysis in Geotechnical Investigations</span></b></p><p class="MsoNormal" ><b><span Arial Narrow","sans-serif";mso-fareast-font-family:\nSimSun;mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US; mso-fareast-language:ZH-CN;mso-bidi-language:AR-SA">Title: </span><span lang="EN-MY" Arial Narrow","sans-serif";\nmso-fareast-font-family:SimSun;mso-bidi-font-family:"Times New Roman";\nmso-ansi-language:EN-MY;mso-fareast-language:ZH-CN;mso-bidi-language:AR-SA">Technique\nof multi-channel analysis of surface wave tomography in geotechnical investigations</span></b></p><p class="MsoNormal" ><b><span Arial Narrow","sans-serif";mso-fareast-font-family:\nSimSun;mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US;\nmso-fareast-language:ZH-CN;mso-bidi-language:AR-SA">B.Sc. (ENGG) (2000-2004)\nElectronics and Communication Engineering CGPA – 3.64 out of 4 (secured 1st position) from Khulna University, Bangldesh</span></b></p><p class="MsoNormal" ><b><span Arial Narrow","sans-serif""><br></span></b></p>\n  </td>\n </tr>\n</tbody></table>\n\n</div>\n  </td>\n </tr>\n</tbody></table>\n\n</div>\n\n<br>', '\n<table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="left">\n <tbody><tr>\n  <td valign="top" align="left" >\n  <div ><font face="Arial Narrow, sans-serif"><b><i>Journals</i></b></font></div><p class="MsoNormal" ><span Arial Narrow","sans-serif"">1.\n  Islam, T. , Saha, S. , Evan, A.A , Halder, N. , Dey, S.C. 2016. Monthly   Weather Forecasting through ANN Model: A Case Study in Barisal, Bangladesh. <i><span >International\n  Journal of Advanced Research in Computer and Communication Engineering</span></i>\n   5(6): 1-6.</span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">2. Islam, T.\n  & Chik, Z.,  2015. Improved Performance in Soil Resistivity   Measurement through Nonlinear Data Fitting. <i><span >Sensors\n  &   Transducers </span></i>189 (6):157- 161<i> </i>(\n  ISI,  SCOPUS).<o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">3. Chik, Z., Islam, T., 2015. </span><span Arial Narrow","sans-serif";mso-fareast-language:\n  EN-US;mso-bidi-language:BN-BD">Characterizations of soil profiles through   electric resistivity ratio</span><span Arial Narrow", sans-serif;">. </span><i><span Arial Narrow","sans-serif";   color:blue">Sensors & Transducers </span></i><span Arial Narrow", sans-serif;">187 (4):39- 43<i> </i></span><span Arial Narrow","sans-serif"">( ISI,  SCOPUS).<o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">4. Chik, Z.,Murad, O.F., Islam, T.,\n  2014. Geo-Environmental characterizations in heavy metal and oil contaminated   soil using soil electrical resistivity. <i><span >Advances in Environmental Biology</span></i><span > </span>8(22):138-146 (SCOPUS). <o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">5. Chik, Z., Islam, T. 2014. Soil\n  compaction characterizations through electrical resistivity in field investigations.   <i><span >Information Technology in Geo-Engineering D.G.\n  Toll et al. (Eds.) IOS Press</span></i> 266-271. Doi:\n  10.3233/978-1-61499-417-6-266<o:p></o:p></span></p>\n  <p class="MsoNormal" ><span >6.   </span><span Arial Narrow","sans-serif"">Hossain,\n  MJ, Islam, T., Hasan, K., Hasan, Z., Miraj, M. 2014. A Faster Road Mapping   Technique through Digital Map Matching in Crowdsourcing approach. <i><span >  J. Patuakhali Sci. and Tech. Univ. </span></i>5(2):97-104.</span><span Arial Narrow","sans-serif";mso-fareast-language:EN-US;\n  mso-bidi-language:BN-BD"><o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">7. \n  Islam, T., Chik, Z. 2013. Improved near   surface soil characterizations using multilayer soil resistivity model. <i><span >Geoderma </span></i>209-210: 136-142<i> </i>(Impact\n  Factor 2.318, Q1, Elsevier, ISI,    SCOPUS).</span><span Arial Narrow","sans-serif";\n  mso-fareast-language:EN-US;mso-bidi-language:BN-BD"><o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">8. Islam, T. & Chik, Z. 2013.\n  Correlation between soil resistivity parameters and shear wave velocity in\n  soil characterizations. <i>Accepted by</i>\n  <i><span >Bulletin of\n  Engineering Geology and the Environment</span> </i>(Impact   Factor 0.667, ISI, SCOPUS).</span><span Arial Narrow","sans-serif";mso-fareast-language:EN-US;mso-bidi-language:\n  BN-BD"><o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">9. Chik, Z., Islam, T. 2013. </span><span Arial Narrow","sans-serif";mso-fareast-font-family:\n  "MS Mincho";mso-bidi-font-weight:bold">Performance of Multi-Layer Soil\n  Electric Resistivity Model Comparing With Two-Layer Characterizations in   Geotechnical Investigations. </span><i><span Arial Narrow","sans-serif";mso-fareast-font-family:"MS Mincho";   color:blue">Advanced Materials Research</span></i><i><span Arial Narrow","sans-serif";mso-fareast-font-family:"MS Mincho"">\n  </span></i><span Arial Narrow","sans-serif";\n  mso-fareast-font-family:"MS Mincho";mso-bidi-font-style:italic">655-657   (2013): 1857-1863. doi:10.4028/ www.scientific.net /AMR.655-657.1857</span><span Arial Narrow","sans-serif""> (ISI,   SCOPUS)</span><span Arial Narrow","sans-serif";   mso-fareast-font-family:"MS Mincho";mso-bidi-font-style:italic"> </span><span Arial Narrow","sans-serif";mso-fareast-language:\n  EN-US;mso-bidi-language:BN-BD"><o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">10. T.Islam, Z. Chik, M.M. Mustafa,\n  H. Sanusi 2012. Modeling of Electrical resistivity and maximum dry density in   soil compaction measurement.<i><span > Environmental Earth Sciences</span></i>,DOI\n  10.1007/s12665-012-1573-7 online -Impact Factor 1.059,ISI,SCOPUS).   67(5):1299-1305(impact Factor 1.05; Q1 in Geology) </span><span Arial Narrow","sans-serif";mso-fareast-language:\n  EN-US;mso-bidi-language:BN-BD"><o:p></o:p></span></p>\n  <p class="MsoNormal" ><span class="apple-style-span"><span Arial Narrow","sans-serif"">11.   </span></span><span Arial Narrow","sans-serif"">Islam\n  T, Chik, Z,Mustafa M.M, Sanusi H. 2012. Estimation of soil electrical   properties in a multilayer earth model with boundary element formulation. <i><span >Mathematical\n  Problems in Engineering</span></i>. Art. No. 472457. Q2 Impact Factor 0.77.   ISI,SCOPUS. </span><span Arial Narrow","sans-serif";\n  mso-fareast-language:EN-US;mso-bidi-language:BN-BD"><o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">12. Islam, T., Chik, Z., Mustafa,\n  M.M. & Sanusi, H. 2012. Model with artificial neural network to predict\n  the relationship between the soil resistivity and dry density of compacted   soil. <i><span >Journal\n  of Intelligent and Fuzzy Systems</span></i> 25 (2): 351-357, doi\n  10.3233/IFS-2012-0641  (Impact Factor   0.556, Q3, ISI, SCOPUS).</span><span class="apple-style-span"><span Arial Narrow","sans-serif";mso-fareast-language:\n  EN-US;mso-bidi-language:BN-BD"><o:p></o:p></span></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">13. Islam, T & Chik, Z. &\n  Mustafa, M.M. 2012. Noise Reduction Technique Applied to the Multichannel   Analysis of Surface Waves. <i><span >Acta Geologica Sinica</span></i>  86(5): 1306-1311( Wiley-Blackwell, Impact   factor 1.172, Quartile 2 Journal).</span><span class="apple-style-span"><span Arial Narrow","sans-serif";mso-fareast-language:\n  EN-US;mso-bidi-language:BN-BD"><o:p></o:p></span></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">14. T.Islam, Z. Chik, M.M. Mustafa,\n  H. Sanusi 2012. Faster 2-D representation of geotechnical characteristics   using MASW method.<i><span > Environmental Earth Sciences</span></i>. DOI\n  10.1007/s12665-012-2130-0 online on 29 Nov 2012 -Impact Factor   1.059,ISI,SCOPUS). </span><span Arial Narrow","sans-serif";\n  mso-fareast-language:EN-US;mso-bidi-language:BN-BD"><o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">15. Chik, Z., Islam, T. 2012. </span><span Arial Narrow","sans-serif";mso-fareast-font-family:\n  "MS Mincho"">Finding soil particle size through electrical resistivity in   soil site investigations. </span><i><span Arial Narrow","sans-serif";color:blue">Electronic   Journal of Geotechnical Engineering </span></i><span Arial Narrow","sans-serif";mso-fareast-font-family:"MS Mincho"">17:   1867-1876. (SCOPUS)</span><span class="apple-style-span"><span Arial Narrow","sans-serif";mso-fareast-language:\n  EN-US;mso-bidi-language:BN-BD"><o:p></o:p></span></span></p><div>\n\n<table cellspacing="0" cellpadding="0" hspace="0" vspace="0" align="left">\n <tbody><tr>\n  <td valign="top" align="left" >\n  <p class="MsoNormal" ><span class="apple-style-span"><span Arial Narrow","sans-serif"">16.  Z. Chik, T. Islam 2011. Study of Chemical   Effects on Soil Compaction Characterizations Through Electrical Conductivity<span >. <i>International\n  Journal of Electrochemical Science</i></span>. 6 (2011) 6733 – 6740. (c) 2011\n  by ESG (<a href="http://www.electrochemsci.org/">www.electrochemsci.org</a>)   (ISSN 1452-3981) (Impact factor 3.72)</span></span><span class="apple-style-span"><span Arial Narrow","sans-serif";\n  mso-fareast-language:EN-US;mso-bidi-language:BN-BD"><o:p></o:p></span></span></p>\n  <p class="MsoNormal" ><span class="apple-style-span"><span Arial Narrow", sans-serif; background: white;">17.  S.M. Taohidul Islam, Zamri Chik   2011.Disaster in Bangladesh and management with advanced information system.</span></span><span class="apple-style-span"><i><span Arial Narrow","sans-serif";mso-bidi-font-family:   Arial;color:blue;background:white">Disaster Prevention and Management</span></i></span><span class="apple-style-span"><span Arial Narrow", sans-serif; background: white;">, 20(5):521–530 </span></span><span Arial Narrow","sans-serif"">(SCOPUS and   ISI Indexed) (Impact Factor 0.34).</span><span Arial Narrow","sans-serif";mso-fareast-language:EN-US;\n  mso-bidi-language:BN-BD"><o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">18. Islam, T., & Chik, Z. 2011. Advanced Performance In Geotechnical Investigations Using   Tomography Analysis. <i><span >Environmental Earth Sciences</span></i>,   63(2):291-296.(Springer Link -Impact Factor 1.059, ISI and SCOPUS).</span><span Arial Narrow","sans-serif";mso-fareast-language:\n  EN-US;mso-bidi-language:BN-BD"><o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">19. Chik,\n  Z., Islam, T. & Taha, M.R. 2011. The consistent performance using f-k\n  analysis in geotechnical surface wave    investigations<span >.<i>Tamkang Journal of Science and Engineering</i></span><span >.</span> 14(2):107-114.(ISI and SCOPUS).<o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">20.   Islam, T.,  Chik, Z., <span >Rosyidi, S.A.,  Sanusi, H., \n  Taha, M.R., Mustafa, M.M.</span> 2009. Comparing\n  the performance of Fourier decomposition and Wavelet decomposition for   seismic signal analysis. <i><span >European Journal of Scientific\n  Research</span></i>, 32(3):314-328.( ISI and SCOPUS).<o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">21.   Chik, Z., Islam, T., <span >Mustafa,   M.M.,</span> <span >Sanusi  H.,  Rosyidi, S.A.,  Taha, M.R., </span>2009. </span><span Arial Narrow","sans-serif";mso-bidi-font-family:\n  Vrinda;mso-bidi-language:BN-BD">Surface wave analysis using Morlet Wavelet in   geotechnical investigations</span><span Arial Narrow","sans-serif"">. <i><span >Journal of applied Sciences</span></i>,   9(19):<span > 3491-3501</span>.( ISI   and SCOPUS).</span><span Arial Narrow","sans-serif";\n  mso-bidi-font-family:Vrinda;mso-bidi-language:BN-BD"><o:p></o:p></span></p>\n  <p class="MsoNormal" ><b><i><span Arial Narrow","sans-serif"">International Conferences<o:p></o:p></span></i></b></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">1.     Chik, Z., Islam, T. 2013. </span><span Arial Narrow","sans-serif";mso-bidi-font-family:TimesNewRomanPSMT;\n  mso-fareast-language:EN-US;mso-bidi-language:BN-BD">Near surface soil   characterizations through soil apparent resistivity: a Case Study. </span><span Arial Narrow","sans-serif"">Presented at   </span><span Arial Narrow","sans-serif";\n  mso-bidi-font-family:TimesNewRomanPSMT;mso-fareast-language:EN-US;mso-bidi-language:\n  BN-BD">7th IEEE International Conference on Intelligent Data Acquisition and\n  Advanced Computing Systems: Technology and Applications, 12-14 September\n  2013, Berlin, Germany. <o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">2.  Chik, Z., Islam, T. 2013. Shear wave\n  velocity profile from soil resistivity measurements in geotechnical\n  characterizations. Presented at International Conference of Structural   Engineering & Construction ( ISEC-07), June 18-23, 2013, Honolulu, <span >Hawaii, USA.</span>1. <o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">3. Chik, Z.,\n  Islam, T. 2013. Prediction of landslides using surface wave analysis\n  incorporating with GIS:  a case study\n  in Selangor, Malaysia. Presented at Seventh International Conference on Case\n  Histories in Geotechnical Engineering. April 29- May 4, 2013, Chicago, USA.<o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">4. Chik, Z.,\n  Islam, T. 2012. Obtaining deeper and improved soil profile incorporating\n  apparent resistivity with multi-layer soil characterizations. ITC 2012, Oct\n  30 – Nov 1, 2012 , KualaLampur, Malaysia. <o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">5. Islam,\n  T., Chik, Z., Mustafa, M.M. & Sanusi, H,<i> </i>Expert idea on liquid\n  limit and plastic limit estimation with Soil resistivity profile. Published\n  by International Science and Technology Conference, Istanbul, 7-9\n  December 2011.<o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">6. Islam,\n  T., Chik, Z., Mustafa, M.M. & Sanusi, H,<i> </i>Simple equation guide for multilayer earth structure with soil\n  electrical properties. Published by ICOS-2011, Conference IEEE,  Malaysia, 25-28 September, 2011.<o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">7. Islam,\n  T., Chik, Z., Mustafa, M.M. & Sanusi, H, Technique of surface wave\n  tomography with improved inversion analysis. Published by by IS-AGTG, 1-2\n  December, 2011, Singapore.<o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">8. Chik, Z.,\n  Islam, T., Mustafa, M.M. & Sanusi, H, Soil compaction monitoring using\n  electrical conductivity. Published by IS-AGTG, 1-2 December, 2011, Singapore.<o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">9. Chik, Z.\n  & Islam, T. 2011.<sup> </sup>Faster investigation of shear modulus of\n  soil through wireless networking. Published by Conference World Congress on\n  Engineering (WCE) 2011, 6-8 July, 2011, London, U.K.<o:p></o:p></span></p>\n  <p class="MsoNormal" ><span Arial Narrow","sans-serif"">10. Chik, Z.\n  & Islam, T. 2011.<sup> </sup>Tomography analysis of compacted soil using\n  electrical conductivity. Published by Conference World Congress on\n  Engineering (WCE) 2011, 6-8 July, 2011, London, U.K.<o:p></o:p></span></p>\n  </td>\n </tr>\n</tbody></table>\n </div><p class="MsoNormal" >\n <span Arial Narrow","sans-serif";\nmso-fareast-font-family:SimSun;mso-bidi-font-family:"Times New Roman";\nmso-ansi-language:EN-US;mso-fareast-language:ZH-CN;mso-bidi-language:AR-SA">11.\nIslam, T.,  Chik, Z., Sanusi, H.,\nMustafa, M.M.<sub>,</sub><b> </b>Development\nof a robust soil monitoring system through electrical conductivity.<sub> </sub><b> </b>Engineering\nPostgraduate Conference <st1:stockticker w:st="on">EPC</st1:stockticker>(2010),  Universiti Kebangsaan Malaysia, Bangi 43600,\nSelangor, Malaysia, September 28-29,2010.</span></p>\n  </td>\n </tr>\n</tbody></table>\n\n', '<p class="Address1" align="left"><span times="" new="" roman",="" serif;"="">Google Citation Report (Since 2012): Citations: 86; h-index: 5; i-10 index: 4<o:p></o:p></span></p><p class="MsoNormal"><span>\n <b><span times="" new="" roman",="" serif;"="">Patent</span></b><span times="" new="" roman",="" serif;"="">: PI. 2010002731</span><span times="" new="" roman","serif";mso-fareast-font-family:simsun;="" text-transform:uppercase;mso-ansi-language:en-us;mso-fareast-language:zh-cn;="" mso-bidi-language:ar-sa"="">&nbsp; </span><b><span times="" new="" roman",="" serif;"="">Trademark</span></b><span times="" new="" roman",="" serif;"="">: No. 09008357, Class 42; No. 09008358, Class 9</span></span></p><p class="MsoNormal"><br><span></span></p>', 'Awarded by Malaysian Technology Expo-2013: Gold Medal, Best Award &amp; Special Award for research innovations on landslides possibility detections using seismic signal.<br><br> Awarded by Malaysian Technology Expo-2011 based on research innovations on seismic signal.<br><br> Awarded by Malaysia Technology Expo-2009 concerned with Malaysian Science and Technology Ministry based on new invention and innovation for developed software, GEO-SW@T.<br><br>Awarded by Khulna University (DEANS Award) giving the certificate of DEAN’s list.<br><br> Awarded by Jessore Board for academic excellence.<br><br>Awarded by Bangladesh Scholarship Council for three times furnished by Nippon Foundation, Japan.', '', '', ''),
(36, 'Md. Monibor Rahman', 4, 'Assistant Professor                            ', '', '01915094763', '', 0, 1, 'images/teacher_images/monibur_sir.jpg', 'engr.monibor@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 0, '', '', '', '', '', '', ''),
(37, 'Md. Naimur Rahman', 4, 'Assistant Professor', '', '+8801712442291', '', 0, 1, 'images/teacher_images/naimur_sir.jpg', 'naimur.cse4th@gmail.com', '011b2a466dbf2d5afc30eab5a18a2fd8', 2, 1, '', '', '', '', '', '', ''),
(38, 'Muhammad Masud Rana', 4, ' Lecturer                            ', '', '', '', 0, 1, 'images/teacher_images/masud.jpg', 'masud_eee10@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 0, '', '', '', '', '', '', ''),
(39, 'Dr. Olly Roy Chowdhury', 5, 'Assistant Professor                            ', '', '01716335596', '', 1, 1, 'images/teacher_images/olly_mam.jpg', 'ollyroy18@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 0, '', '', '', '', '', '', ''),
(40, 'Khokon Hossen', 5, 'Associate Professor', '', '+4917667355417', 'Nuclear &nbsp;Physics. Atomic and Molecular Physics.&nbsp;', 0, 1, 'images/teacher_images/khokon.jpg', 'khokon.pme@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 1, '<h><div><font color="#444444" face="Helvetica Neue, Helvetica, Arial, sans-serif"><span>(i) PhD Candidate in Nuclear and Particle Physics, Max Planck Institute for Nuclear Physics, Heidelberg, Germany and University of Santiago de Compostela, Spain.&nbsp;</span></font></div><div><font color="#444444" face="Helvetica Neue, Helvetica, Arial, sans-serif"><span><br></span></font></div><div><div><font face="Arial, Verdana"><span>(ii  Master´s in Nuclear and Particle Physics and their Technological and Medical Application, University of Santiago de Compostela, Spain.</span></font></div><div><font face="Arial, Verdana"><span><br></span></font></div><div><font face="Arial, Verdana"><span>(iii  Master´s in Physics, Jahangirnagar University, Bangladesh&nbsp;</span></font></div><div><font face="Arial, Verdana"><span><br></span></font></div><div><font face="Arial, Verdana"><span>(iv) Bachelor of Science in Physics, &nbsp;Jahangirnagar University, Bangladesh</span></font></div></div></h>', '<div><span>I. &nbsp; Xueguang Ren, Sadek Amami, Khokon Hossen, Esam Ali, ChuanGang Ning, James Colgan, Don Madison, and Alexander Dorn,Phys. Rev. A 95, 022701(2017).</span></div><div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span><br></span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span>II. &nbsp;Khokon Hossen, Alexander Dorn and Xueguang Ren, “Molecular alignment resolved (e, 2e) cross sections for H2 at 38 eV impact energy”. &nbsp;Conference paper of &nbsp;XXIX &nbsp;International Conference on Photonic, Electronic, and Atomic Collisions (ICPEAC), IOP Publishing, Journal of Physics: Conference Series 635(2015) 072080. &nbsp;doi: 10.1088/1742-6596/635/7/072080.</span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span><br></span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span><br></span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span>III. &nbsp;Khokon Hossen, “Analysis of the Performances of Sealed Timing Resistive Plate Chambers (tRPCs)”. International Journal of Physics, Science and Education Publishing, Newark, Delaware -19713, USA. &nbsp;ISSN (Print): 2333-4568, ISSN (Online): 2333-4576, Volume: 2, No. 4, Page: 105-108, 2014.&nbsp;</span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span><br></span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span>IV. &nbsp;Khokon Hossen, “Radiological Content of Brown Nuts by Using a High Resolution Gamma Spectroscopy”. Journal of Advanced Physics, American Scientific Publishers, 26650, The Old Road, Suite 208,Valencia, California 91381-0751, USA. ISSN: 2168-1996 (Print), EISSN: 2168-2003 (online), Volume: 1, No.2, Page: 113-119, 2012.&nbsp;</span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span><br></span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span>V. &nbsp;Khokon Hossen, H.M. Arshad, M.B. Hossain, M.A. Masud and M.J. Hossain, “Ocean Wave Energy Conversion and Wave Energy Calculation”. Bangladesh Journal of Progressive Science and Technology, Bangladesh. ISSN: 1609-5260. Volume: 9 No. 2, Page:233-236, July 2011.</span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span><br></span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span>VI. &nbsp;M.B. Hossain, Khokon Hossen, H.M. Arshad, M.J. Hossain and M.A. Masud, “Effect of viscous dissipation &nbsp;with &nbsp;magneto hydrodynamic flow on the coupling of conduction and free convection along a vertical flat plate”. Bangladesh Journal of Progressive Science and Technology, Bangladesh. ISSN: 1609-5260. Volume: 9 No. 2, Page: 225-228, July 2011.</span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span><br></span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span>VII. &nbsp;M.J. Hossain, Khokon Hossen, H.M. Arshad, M.A. Masud and M.B. Hossain, “Reduction of energy consumption in wireless sensor networks throughout active nodes optimization”. Bangladesh Journal of Progressive Science and Technology, Bangladesh. ISSN: 1609-5260. Volume: 9 No. 2, Page: 229-232, July 2011.&nbsp;</span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span><br></span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span>VIII. &nbsp;Khokon Hossen, H. M. Arshad and M. J. Hossain, “Design and Construction of A Metal Detector circuit and study of Its Working Principle”. Jahangirnagar Physics Studies, Journal of the Department of Physics, Jahangirnagar University, Savar, Dhaka, Bangladesh. ISSN: 1999-6632, Volume: 17, Page: 139-149, 2011.&nbsp;</span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span><br></span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span>IX. &nbsp;M.A. Masud, Tauhidul Islam, Khokon Hossen and M.B. Hossain, “Comparing the impact of fading and noisy channel for radio signal propagation”. Jahangirnagar Physics Studies, Journal of the department of Physics, Jahangirnagar University, Savar, Dhaka, Bangladesh. ISSN: 1999-6632, Volume: 16, Page: 39 -49, 2010.&nbsp;</span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span><br></span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span>X. &nbsp;Md. Rashidul Haque, S.M. Hossain, S.M. Azharul Islam and Khokon Hossen, “Determination of Trace Element Concentrations in Cigarette Tobacco by Instrumental Neutron Activation Analysis(INAA)”, Jahangirnagar Physics Studies, Journal of the Department of Physics, Jahangirnagar University, Savar, Dhaka, Bangladesh. ISSN: 1999-6632, Volume 15, Page: 43-48, 2009.&nbsp;</span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span><br></span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span>XI. &nbsp;Khokon Hossen and H.M Arshad, “Design and Construct ion of A Remote control fan regulator circuit and study of Its Working Principle”. Jahangirnagar Physics Studies, Journal of the Department of Physics, Jahangirnagar University, Savar, Dhaka, Bangladesh. ISSN: 1999-6632, Volume: 15, Page: 61-66, 2009.&nbsp;</span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span><br></span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span>XII. &nbsp;Khokon Hossen, M.M. Rahaman and M.B. Hossain, “Medium and Long-Term Side Effects of Radiation Therapy on Human Body”. Journal of Socioeconomic Research and Development (JSRD), g-Science Publication, Dhaka, Bangladesh.February-2009. ISSN 1813-0348, Volume: 6, Issue-1, Page: 515-519, 2009.&nbsp;</span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span><br></span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span>XIII. &nbsp;Khokon Hossen, M.J. Hossain, M.K.H. Chowdhury, M.H. Bellal and M.M. Rahman, “Multiple Channel Digital Data Transmission over Power Line Carrier Communication”, IJET, g-Science Publication, Dhaka, Bangladesh. ISSN: 1812-7711, Volume: 5, Issue-2, Page: 251-256, 2008.&nbsp;</span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span><br></span></font></div><div times="" new="" roman";="" font-size:="" medium;"=""><font face="Arial, Verdana"><span>XIV. &nbsp;A.K.M. Zakaria, Khokon Hossen and M.A. Saeed Khan, “Study of the Atomic and Magnetic Structure of Spinel Oxide Zn0.6Ni0.4FeCrO4 at Room Temperature using Neutron Diffraction Technique”. Jahangirnagar Journal of Science, Savar, Dhaka. June 2007, Vol.30, No.1, Page: 55 -65, 2007.</span></font></div></div><div><font face="Arial, Verdana"><span><br></span></font></div>', '<div><p class="MsoNoSpacing"><span lang="EN-US" times="" new="" roman","serif";="" mso-ansi-language:en-us"="">Electron-impact ionization of atoms and molecules\nplays an important role in a large range of scientific and practical areas like\nradiation chemistry, reactive plasmas, planetary atmospheres, environment and\nmedical radio-therapy. In case of\nmolecules, the ionization dynamics may populate dissociation states and finally result in positively charged particles and neutral atoms or molecules.Recently, I am doing research on Electron impact ionization of biologically relavent molecules as like&nbsp;<o:p></o:p></span><font face="Arial, Verdana"><span>Hydrogen molecules, Tetrafluoromethane (CF4) &nbsp;and Methane(CH4), Water (H2O) &nbsp;molecules etc.&nbsp;</span></font></p></div>', '<div><span lang="EN-US" times="" new="" roman","serif";mso-fareast-font-family:calibri;="" mso-ansi-language:en-us;mso-fareast-language:en-us;mso-bidi-language:ar-sa"="">(i) I am enjoying a &nbsp;PhD fellowship from Max Planck Institute for Nuclear Physics, Heidelberg, Germany from the period of 01.09.2016 to 31.08.2017 funded by German Government.&nbsp;</span></div><span lang="EN-US" times="" new="" roman","serif";mso-fareast-font-family:calibri;="" mso-ansi-language:en-us;mso-fareast-language:en-us;mso-bidi-language:ar-sa"=""><div><span lang="EN-US" times="" new="" roman","serif";mso-fareast-font-family:calibri;="" mso-ansi-language:en-us;mso-fareast-language:en-us;mso-bidi-language:ar-sa"="">(ii) I have awarded PhD scholarship from Erasmus Mundus Mobilty with Asia(EMMA) from the period of &nbsp;01.09.2013 to 31.01.2016 funded by European Union.&nbsp;</span></div><div><span lang="EN-US" times="" new="" roman","serif";mso-fareast-font-family:calibri;="" mso-ansi-language:en-us;mso-fareast-language:en-us;mso-bidi-language:ar-sa"="">(iii)&nbsp;</span><span times="" new="" roman",="" serif;="" font-size:="" 14.6667px;"="">I have &nbsp;awarded Master''s scholarship from Erasmus Mundus (EXPERTS) &nbsp;from the period of &nbsp;01.09.2011 to 30.07.2012&nbsp;</span><span>funded by European Union.&nbsp;</span></div></span>', '<font face="Arial, Verdana"><span>https //www.mpi-hd.mpg.de/pfeifer/page.php?tag=personal&amp;pers&gt;</span></font>', '', ''),
(41, 'Humaira Takia', 5, 'Assistant Professor                     ', '', '01722501970', '', 0, 1, 'images/teacher_images/takia_mam.jpg', 'humairpme@pstu.ac.bd', '827ccb0eea8a706c4c34a16891f84e7b', 2, 0, '', '', '', '', '', '', ''),
(42, 'Dr. Md. Bellal Hossain', 6, 'Associate Professor                            ', '', '01712642733', 'Numerical Analysis and Fluid Dynamics', 1, 1, 'images/teacher_images/20160727_125149.jpg', 'bellal77pstu@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 0, '', '', '', '', '', '', ''),
(43, 'Muhammad Masudur Rahman', 6, 'Associate Professor                            ', '', '53945893289', '', 0, 1, 'images/teacher_images/imag.png', 'masudur_ju26@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 1, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher_file`
--

CREATE TABLE IF NOT EXISTS `tbl_teacher_file` (
  `file_id` int(10) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `file_location` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author_name` varchar(255) NOT NULL,
  `semester` int(1) NOT NULL,
  `teacher_id` int(12) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_teacher_file`
--

INSERT INTO `tbl_teacher_file` (`file_id`, `file_name`, `course_code`, `file_location`, `publication_status`, `created_date_time`, `author_name`, `semester`, `teacher_id`) VALUES
(1, 'Chapter01 (BBA)', 'CSE 211', 'uploads/teacher_uploads/Chapter_01Lect01.pdf', 1, '2017-01-13 12:28:44', 'Dr. Md. Samsuzzaman', 3, 0),
(2, 'Chapter02 (BBA)', 'CSE 211', 'uploads/teacher_uploads/Chapter_02.pdf', 1, '2017-01-13 12:28:56', 'Dr. Md. Samsuzzaman', 3, 0),
(3, 'Chapter01 (CSE)', 'CCE 111', 'uploads/teacher_uploads/Chapter_01Lect011.pdf', 1, '2017-01-13 12:28:34', 'Dr. Md. Samsuzzaman', 1, 0),
(8, 'Chapter02 (CSE)', 'CCE 211', 'uploads/teacher_uploads/02-Models.pdf', 1, '2017-01-15 17:22:35', 'Dr. Syed Md. Galib', 3, 0),
(9, 'Chapter02 (CSE)', 'CCE 211', 'uploads/teacher_uploads/02-Models1.pdf', 1, '2017-01-15 17:23:58', 'Dr. Syed Md. Galib', 3, 0),
(10, 'Chapter 02', 'CCE 211', 'uploads/teacher_uploads/02-Models2.pdf', 1, '2017-01-15 18:23:01', 'Dr. Md. Samsuzzaman', 3, 0),
(13, 'Chapter03 (CSE)', 'CCE 211', 'uploads/teacher_uploads/Ch_031.pdf', 1, '2017-01-17 06:17:43', 'Dr. Md. Samsuzzaman', 3, 30),
(15, 'Chapter 02', 'CCE 313', 'uploads/teacher_uploads/Chap-03.ppt', 0, '2017-02-12 12:10:15', 'Dr. Md. Samsuzzaman', 5, 30),
(16, 'Chapter 03', 'CCE 313', 'uploads/teacher_uploads/Chap-031.ppt', 1, '2017-02-12 12:11:19', 'Dr. Md. Samsuzzaman', 5, 30),
(17, 'Chapter 05', 'CCE 313', 'uploads/teacher_uploads/Chap-05.ppt', 1, '2017-02-12 12:12:34', 'Dr. Md. Samsuzzaman', 5, 30),
(19, 'Lecture Signal (Chapter 3 part II)', 'CCE 211', 'uploads/teacher_uploads/03-Signals1.pptx', 1, '2017-02-28 05:19:03', 'Dr. Md. Samsuzzaman', 3, 30),
(20, 'lecture Transmission Media', 'CCE 211', 'uploads/teacher_uploads/transmission-media.pptx', 1, '2017-02-28 05:19:58', 'Dr. Md. Samsuzzaman', 3, 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher_notice`
--

CREATE TABLE IF NOT EXISTS `tbl_teacher_notice` (
  `notice_id` int(2) NOT NULL AUTO_INCREMENT,
  `notice_title` varchar(255) NOT NULL,
  `notice_description` varchar(255) NOT NULL,
  `publication_status` int(2) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author_name` varchar(255) NOT NULL,
  `semester_id` int(1) NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ultimate`
--

CREATE TABLE IF NOT EXISTS `tbl_ultimate` (
  `ultimate_id` int(7) NOT NULL AUTO_INCREMENT,
  `student_reg_no` int(10) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `attendence_marks` float NOT NULL,
  `mid_marks` float NOT NULL,
  `final_marks` float NOT NULL,
  `total_marks` float NOT NULL,
  PRIMARY KEY (`ultimate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
