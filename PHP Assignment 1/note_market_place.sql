-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 08:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `note_market_place`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `description`, `created_date`, `created_by`, `updated_date`, `updated_by`, `is_active`) VALUES
(1, 'IT', 'IT category', '2021-02-10 10:09:13', 1, NULL, NULL, b'01'),
(2, 'Computer', 'Computer Science', '2021-02-09 07:00:00', 2, NULL, NULL, b'01'),
(3, 'History', 'Bokks related to history', '2021-02-09 08:00:00', 1, NULL, NULL, b'01'),
(4, 'Science', 'Books related to Science', '2021-02-09 08:04:00', 2, NULL, NULL, b'01'),
(5, 'Account', 'Book related to Account', '2021-02-09 06:22:37', 2, NULL, NULL, b'01');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `is_user` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `is_active` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `name`, `email`, `subject`, `comment`, `is_user`, `user_id`, `created_date`, `created_by`, `updated_date`, `updated_by`, `is_active`) VALUES
(1, 'Urvash Bhalala', 'janvibhalala15@gmail.com', 'Purchase Option', 'How to purchase.', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, b'01'),
(2, 'Urvash Bhalala', 'janvibhalala15@gmail.com', 'Purchase Option', 'How to purchase.', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, b'01'),
(3, 'Urvash Bhalala', 'janvibhalala15@gmail.com', 'Purchase Option', 'How to purchase.', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, b'01'),
(4, 'Khyati Joshi', 'khyati@gmail.com', 'my Query', 'Query is here.', 1, 3, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, b'01'),
(16, 'Khyati Joshi', 'khyati@gmail.com', 'Purchase Option', 'My Query is about puchase option', 1, 3, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, b'01'),
(17, 'Khyati Joshi', 'khyati@gmail.com', 'hello dear', 'I have some Query', 1, 3, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, b'01');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `name`, `code`, `created_date`, `created_by`, `updated_date`, `updated_by`, `is_active`) VALUES
(1, 'India', 'IN', '2021-02-11 10:26:07', NULL, NULL, NULL, b'01'),
(2, 'France', 'FR', '2021-02-11 11:26:07', 1, NULL, NULL, b'01'),
(3, 'Italy', 'IT', '2021-03-11 07:21:26', 1, NULL, NULL, b'01'),
(4, 'China', 'CN', '2021-03-11 08:21:26', 1, NULL, NULL, b'01'),
(5, 'Greece', 'GR', '2021-02-11 06:28:20', 1, NULL, NULL, b'01'),
(6, 'Finland', 'FI', '2021-02-11 06:50:20', 1, NULL, NULL, b'01');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `doc_id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `note_id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`doc_id`, `file_path`, `note_id`, `file_name`, `created_date`, `created_by`, `updated_date`, `updated_by`, `is_active`) VALUES
(4, '../../uploads/notes/documents/Tech Max90document.pdf', 13, 'Tech Max90document.pdf', NULL, NULL, NULL, NULL, b'01'),
(5, '../../uploads/notes/documents/C++ Programming915document.pdf', 14, 'C++ Programming915document.pdf', NULL, NULL, NULL, NULL, b'01'),
(6, '../../uploads/notes/documents/GST Billing959document.pdf', 15, 'GST Billing959document.pdf', NULL, NULL, NULL, NULL, b'01'),
(10, '../../uploads/notes/documents/Tech Max354document.pdf', 17, 'Tech Max354document.pdf', NULL, NULL, NULL, NULL, b'01'),
(11, '../../uploads/notes/documents/Basics of Data343document.pdf', 18, 'Basics of Data343document.pdf', NULL, NULL, NULL, NULL, b'01'),
(12, '../../uploads/notes/documents/Basics of Science30document.pdf', 19, 'Basics of Science30document.pdf', NULL, NULL, NULL, NULL, b'01'),
(13, '../../uploads/notes/documents/Manage Account333document.pdf', 20, 'Manage Account333document.pdf', NULL, NULL, NULL, NULL, b'01'),
(14, '../../uploads/notes/documents/C++ Programming336document.pdf', 21, 'C++ Programming336document.pdf', NULL, NULL, NULL, NULL, b'01'),
(15, '../../uploads/notes/documents/Know Your Country363document.pdf', 22, 'Know Your Country363document.pdf', NULL, NULL, NULL, NULL, b'01'),
(16, '../../uploads/notes/documents/Computer Hardware30document.pdf', 23, 'Computer Hardware30document.pdf', NULL, NULL, NULL, NULL, b'01'),
(17, '../../uploads/notes/documents/Hardware Programming35document.pdf', 24, 'Hardware Programming35document.pdf', NULL, NULL, NULL, NULL, b'01'),
(18, '../../uploads/notes/documents/Java Programming332document.pdf', 25, 'Java Programming332document.pdf', NULL, NULL, NULL, NULL, b'01'),
(19, '../../uploads/notes/documents/BDA30document.pdf', 26, 'BDA30document.pdf', NULL, NULL, NULL, NULL, b'01'),
(20, '../../uploads/notes/documents/DBMS32document.pdf', 27, 'DBMS32document.pdf', NULL, NULL, NULL, NULL, b'01'),
(21, '../../uploads/notes/documents/Basics of H/W310document.pdf', 28, 'Basics of H/W310document.pdf', NULL, NULL, NULL, NULL, b'01'),
(22, '../../uploads/notes/documents/Basics of H/W310document.pdf', 29, 'Basics of H/W310document.pdf', NULL, NULL, NULL, NULL, b'01'),
(23, '../../uploads/notes/documents/Basics of H/W310document.pdf', 30, 'Basics of H/W310document.pdf', NULL, NULL, NULL, NULL, b'01'),
(24, '../../uploads/notes/documents/GST Billing332document.pdf', 31, 'GST Billing332document.pdf', NULL, NULL, NULL, NULL, b'01'),
(25, '../../uploads/notes/documents/SPCC39document.pdf', 32, 'SPCC39document.pdf', NULL, NULL, NULL, NULL, b'01'),
(26, '../../uploads/notes/documents/Airtifitial Intelligence38document.pdf', 33, 'Airtifitial Intelligence38document.pdf', NULL, NULL, NULL, NULL, b'01'),
(27, '../../uploads/notes/documents/C Programming1379document.pdf', 35, 'C Programming1379document.pdf', NULL, NULL, NULL, NULL, b'01'),
(28, '../../uploads/notes/documents/Ccomputer Programming30document.pdf', 36, 'Ccomputer Programming30document.pdf', NULL, NULL, NULL, NULL, b'01'),
(29, '../../uploads/notes/documents/GST Billing Methods30document.pdf', 37, 'GST Billing Methods30document.pdf', '2021-03-05 04:54:57', NULL, NULL, NULL, b'01');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `note_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `display_img` varchar(500) DEFAULT NULL,
  `note_type_id` int(11) DEFAULT NULL,
  `number_of_pages` int(11) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `university` varchar(200) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `cource` varchar(100) DEFAULT NULL,
  `cource_code` varchar(100) DEFAULT NULL,
  `professor` varchar(100) DEFAULT NULL,
  `is_paid` bit(1) NOT NULL DEFAULT b'1',
  `price` decimal(10,0) DEFAULT NULL,
  `note_preview` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `action_by` int(11) DEFAULT NULL,
  `admin_remark` varchar(255) DEFAULT NULL,
  `published_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`note_id`, `title`, `category_id`, `display_img`, `note_type_id`, `number_of_pages`, `description`, `university`, `country`, `cource`, `cource_code`, `professor`, `is_paid`, `price`, `note_preview`, `user_id`, `status_id`, `action_by`, `admin_remark`, `published_date`, `created_date`, `created_by`, `updated_date`, `updated_by`, `is_active`) VALUES
(13, 'Tech Max', 1, '../../uploads/notes/displayPic/Tech Max90profile.jpg', 1, 12, 'Book of Tech max Publication', 'VVP', 'India', 'Computer Cource', '009', NULL, b'0', '0', '../../uploads/notes/notePreview/Tech Max90preview.', 9, 1, NULL, NULL, NULL, '2021-03-01 20:44:02', NULL, NULL, NULL, b'01'),
(14, 'C++ Programming', 2, '../../uploads/notes/displayPic/C++ Programming915profile.jpg', 1, 70, 'Book for C++ Progrraming', 'VVP', 'India', 'C++ Cource', '009', 'C++ Cource', b'1', '15', '../../uploads/notes/notePreview/C++ Programming915preview.pdf', 9, 1, NULL, NULL, NULL, '2021-02-25 17:44:32', NULL, NULL, NULL, b'01'),
(15, 'GST Billing', 3, '../../uploads/notes/displayPic/GST Billing959profile.jpg', 1, 40, 'Book for GST Billing', 'VVP', 'India', 'GST  Cource', '009', 'GST  Cource', b'1', '59', '../../uploads/notes/notePreview/GST Billing959preview.pdf', 9, 3, NULL, NULL, NULL, '2021-02-24 11:44:59', NULL, NULL, NULL, b'01'),
(17, 'Tech Max', 1, '../../uploads/notes/displayPic/Tech Max354profile.jpg', 1, 45, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'Institution on master of computer', 'China', 'computer science', '450990', 'computer science', b'1', '54', '../../uploads/notes/notePreview/Tech Max354preview.pdf', 3, 3, 1, NULL, '2021-03-03 18:29:49', '2021-03-02 06:15:46', NULL, NULL, NULL, b'01'),
(18, 'Basics of Data', 2, '../../uploads/notes/displayPic/Basics of Data343profile.jpg', 1, 76, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'IIT Mumbai', 'India', 'Data science', '60990', 'Data science', b'1', '43', '../../uploads/notes/notePreview/Basics of Data343preview.pdf', 3, 2, NULL, NULL, NULL, '2021-03-02 07:20:18', NULL, NULL, NULL, b'01'),
(19, 'Basics of Science', 4, '../../uploads/notes/displayPic/Basics of Science30profile.jpg', 1, 76, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'IIT Khadakpur', 'India', 'Basic of  science', '6754', 'Basic of  science', b'0', '0', '../../uploads/notes/notePreview/Basics of Science30preview.pdf', 3, 1, NULL, NULL, NULL, '2021-03-02 07:21:33', NULL, NULL, NULL, b'01'),
(20, 'Manage Account', 5, '../../uploads/notes/displayPic/Manage Account333profile.jpg', 1, 13, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'CFA', 'India', 'Account Management', 'C098', 'Account Management', b'1', '33', '../../uploads/notes/notePreview/Manage Account333preview.pdf', 3, 3, 1, NULL, '2021-03-03 10:50:59', '2021-03-02 07:25:56', NULL, NULL, NULL, b'01'),
(21, 'C++ Programming', 2, '../../uploads/notes/displayPic/C++ Programming336profile.jpg', 1, 13, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'VVP', 'India', 'Computer Cource', 'CC098', 'Computer Cource', b'1', '36', '../../uploads/notes/notePreview/C++ Programming336preview.pdf', 3, 1, NULL, NULL, NULL, '2021-03-02 07:24:19', NULL, NULL, NULL, b'01'),
(22, 'Know Your Country', 3, '../../uploads/notes/displayPic/Know Your Country363profile.jpg', 1, 11, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'Arts College', 'India', 'History ', 'HC098', 'History ', b'1', '63', '../../uploads/notes/notePreview/Know Your Country363preview.pdf', 3, 1, NULL, NULL, NULL, '2021-03-02 07:18:59', NULL, NULL, NULL, b'01'),
(23, 'Computer Hardware', 2, '../../uploads/notes/displayPic/Computer Hardware30profile.jpg', 1, 87, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'Darshan Engineering College', 'India', 'Computer Engineering', 'H768', 'Computer Engineering', b'0', '0', '../../uploads/notes/notePreview/Computer Hardware30preview.pdf', 3, 3, NULL, NULL, '2021-03-02 10:28:02', '2021-03-01 10:28:02', NULL, NULL, NULL, b'01'),
(24, 'Hardware Programming', 2, '../../uploads/notes/displayPic/Hardware Programming35profile.jpg', 1, 67, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'Darshan Engineering College', 'India', 'Computer Engineering', 'CH098', 'Computer Engineering', b'1', '5', '../../uploads/notes/notePreview/Hardware Programming35preview.pdf', 3, 1, NULL, NULL, NULL, '2021-02-28 10:20:41', NULL, NULL, NULL, b'01'),
(25, 'Java Programming', 1, '../../uploads/notes/displayPic/Java Programming332profile.jpg', 1, 43, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'USP College', 'Greece', 'IT Engineering', 'IH098', 'IT Engineering', b'1', '32', '../../uploads/notes/notePreview/Java Programming332preview.pdf', 3, 2, NULL, NULL, NULL, '2021-03-03 10:21:05', NULL, NULL, NULL, b'01'),
(26, 'BDA', 1, '../../uploads/notes/displayPic/BDA30profile.jpg', 1, 21, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'D.H Mehta College of Engineering', 'India', 'IT Engineering', 'IU876', 'IT Engineering', b'0', '0', '../../uploads/notes/notePreview/BDA30preview.pdf', 3, 3, NULL, NULL, NULL, '2021-03-01 10:23:42', NULL, NULL, NULL, b'01'),
(27, 'DBMS', 1, '../../uploads/notes/displayPic/DBMS32profile.jpg', 1, 21, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'D.H Mehta College of Engineering', 'India', 'Computer Engineering', 'IU876', 'Computer Engineering', b'1', '2', '../../uploads/notes/notePreview/DBMS32preview.pdf', 3, 3, NULL, NULL, NULL, '2021-02-28 10:24:39', NULL, NULL, NULL, b'01'),
(28, 'Basics of H/W', 2, '../../uploads/notes/displayPic/Basics of H/W310profile.jpg', 1, 21, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'D.H Mehta College of Engineering', 'India', 'EC Engineering', 'IU876', 'EC Engineering', b'1', '10', '../../uploads/notes/notePreview/Basics of H/W310preview.pdf', 3, 2, NULL, NULL, NULL, '2021-03-01 10:25:08', NULL, NULL, NULL, b'01'),
(29, 'Basics of H/W tech', 2, '../../uploads/notes/displayPic/Basics of H/W310profile.jpg', 1, 21, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'D.H Mehta College of Engineering', 'India', 'EC Engineering', 'IU876', 'EC Engineering', b'1', '10', '../../uploads/notes/notePreview/Basics of H/W310preview.pdf', 3, 1, NULL, NULL, NULL, '2021-03-02 10:25:37', NULL, NULL, NULL, b'01'),
(30, 'Basics of H/W', 2, '../../uploads/notes/displayPic/Basics of H/W310profile.jpg', 1, 21, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'D.H Mehta College of Engineering', 'India', 'EC Engineering', 'IU876', 'EC Engineering', b'1', '10', '../../uploads/notes/notePreview/Basics of H/W310preview.pdf', 3, 2, NULL, NULL, NULL, '2021-03-01 10:25:58', NULL, NULL, NULL, b'01'),
(31, 'GST Billing', 5, '../../uploads/notes/displayPic/GST Billing332profile.jpg', 1, 76, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'VVP', 'India', 'Account', 'A3234', 'Account', b'1', '32', '../../uploads/notes/notePreview/GST Billing332preview.pdf', 3, 1, NULL, NULL, NULL, '2021-03-02 09:14:41', NULL, NULL, NULL, b'01'),
(32, 'SPCC', 5, '../../uploads/notes/displayPic/SPCC39profile.jpg', 1, 32, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'Bhalodiya College of Commerce', 'India', 'Account', 'A3234', 'Account', b'1', '9', '../../uploads/notes/notePreview/SPCC39preview.pdf', 3, 1, NULL, NULL, NULL, '2021-03-02 10:14:41', NULL, NULL, NULL, b'01'),
(33, 'Airtifitial Intelligence', 2, '../../uploads/notes/displayPic/Airtifitial Intelligence38profile.jpg', 1, 65, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'VVP', 'India', 'computer science', '450990', 'computer science', b'1', '8', '../../uploads/notes/notePreview/Airtifitial Intelligence38preview.pdf', 3, 3, 1, NULL, '2021-03-03 10:50:13', '2021-03-02 10:50:13', NULL, NULL, NULL, b'01'),
(34, 'C++ Programming1', 2, '../../uploads/notes/displayPic/C++ Programming1378profile.jpg', 1, 23, 'Book for C programming', 'GTU', 'India', 'Computer Engineering', 'CE087', 'Mehul Batt', b'1', '78', '../../uploads/notes/notePreview/C++ Programming1378preview.pdf', 3, 3, 1, NULL, '2021-03-04 09:00:57', '2021-03-03 09:00:57', NULL, NULL, NULL, b'01'),
(35, 'C Programming1', 1, '../../uploads/notes/displayPic/C Programming1379profile.jpg', 1, 87, 'Here is the complete code for the PHP Form Validation', 'VVP', 'India', 'Computer Cource', '60990', 'Computer Cource', b'1', '79', '../../uploads/notes/notePreview/C Programming1379preview.pdf', 3, 1, NULL, NULL, NULL, '2021-03-03 09:13:03', NULL, NULL, NULL, b'01'),
(36, 'Ccomputer Programming', 1, '../../uploads/notes/displayPic/Ccomputer Programming30profile.jpg', 1, 76, 'Here is the complete code for the PHP Form Validation', 'VVP', 'India', 'Computer Cource', '60990', 'Computer Cource', b'0', '0', '../../uploads/notes/notePreview/Ccomputer Programming30preview.pdf', 3, 3, 1, NULL, '2021-03-05 10:12:14', '2021-03-04 09:12:14', NULL, NULL, NULL, b'01'),
(37, 'GST Billing Methods', 5, '../../uploads/notes/displayPic/GST Billing Methods30profile.jpg', 1, 65, 'In publishing and graphic design, Lorem ipsum is a placeholder text', 'CFA', 'India', 'CA', 'C234', 'CA', b'0', '0', '../../uploads/notes/notePreview/GST Billing Methods30preview.pdf', 3, 1, NULL, NULL, NULL, '2021-03-05 04:54:57', NULL, NULL, NULL, b'01');

-- --------------------------------------------------------

--
-- Table structure for table `order_note`
--

CREATE TABLE `order_note` (
  `order_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `is_allowed_to_download` bit(2) NOT NULL,
  `attachment_path` varchar(255) DEFAULT NULL,
  `is_attachment_downloaded` bit(2) NOT NULL DEFAULT b'0',
  `download_time` datetime NOT NULL,
  `is_paid` bit(2) NOT NULL,
  `purchase_price` decimal(10,0) DEFAULT NULL,
  `note_title` varchar(100) NOT NULL,
  `note_category` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_note`
--

INSERT INTO `order_note` (`order_id`, `seller_id`, `user_id`, `note_id`, `is_allowed_to_download`, `attachment_path`, `is_attachment_downloaded`, `download_time`, `is_paid`, `purchase_price`, `note_title`, `note_category`, `created_date`, `created_by`, `updated_date`, `updated_by`, `is_active`) VALUES
(2, 3, 4, 20, b'01', NULL, b'01', '2021-03-02 10:04:34', b'01', '33', 'Manage Account', 5, '2021-03-02 13:12:12', NULL, NULL, NULL, b'01'),
(3, 3, 5, 20, b'01', NULL, b'01', '2021-03-04 10:04:34', b'01', '33', 'Manage Account', 5, '2021-03-04 13:12:12', NULL, NULL, NULL, b'01'),
(6, 3, 9, 34, b'01', NULL, b'01', '2021-03-05 13:03:03', b'01', '78', 'C++ Programing1', 2, '2021-03-05 10:03:03', NULL, NULL, NULL, b'01'),
(7, 3, 7, 34, b'01', NULL, b'01', '2021-03-04 13:03:03', b'01', '78', 'C++ Programing1', 2, '2021-03-04 10:03:03', NULL, NULL, NULL, b'01'),
(8, 3, 8, 17, b'01', NULL, b'01', '2021-03-02 10:12:13', b'01', '54', 'Tech Max', 1, '2021-03-02 10:12:13', NULL, NULL, NULL, b'01'),
(9, 3, 4, 17, b'01', NULL, b'01', '2021-03-04 10:12:13', b'01', '54', 'Tech Max', 1, '2021-03-04 10:12:13', NULL, NULL, NULL, b'01'),
(10, 3, 4, 17, b'01', NULL, b'01', '2021-03-05 11:12:13', b'01', '54', 'Tech Max', 1, '2021-03-05 11:12:13', NULL, NULL, NULL, b'01'),
(13, 3, 4, 20, b'01', NULL, b'01', '2021-03-01 10:17:44', b'01', '33', 'Manage Account', 5, '2021-03-01 10:17:44', NULL, NULL, NULL, b'01'),
(14, 3, 5, 20, b'01', NULL, b'01', '2021-03-05 10:17:44', b'01', '33', 'Manage Account', 5, '2021-03-05 10:17:44', NULL, NULL, NULL, b'01'),
(15, 3, 6, 27, b'01', NULL, b'01', '2021-03-04 10:20:43', b'01', '2', 'DBMS', 1, '2021-03-04 10:20:43', NULL, NULL, NULL, b'01'),
(16, 3, 5, 27, b'01', NULL, b'01', '2021-03-01 10:20:43', b'01', '2', 'DBMS', 1, '2021-03-01 10:20:43', NULL, NULL, NULL, b'01'),
(17, 3, 7, 27, b'01', NULL, b'01', '2021-03-02 10:20:43', b'01', '2', 'DBMS', 1, '2021-03-02 10:20:43', NULL, NULL, NULL, b'01');

-- --------------------------------------------------------

--
-- Table structure for table `reference_data`
--

CREATE TABLE `reference_data` (
  `reference_id` int(11) NOT NULL,
  `value` varchar(100) NOT NULL,
  `data_value` varchar(100) NOT NULL,
  `ref_category` varchar(100) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `remark_id` int(11) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `against_order_id` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `rating` decimal(10,0) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` bit(2) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status`, `description`, `created_date`, `created_by`, `updated_date`, `updated_by`, `is_active`) VALUES
(1, 'saved', 'note is save by user', '2021-02-12 19:31:25', 1, NULL, NULL, b'01'),
(2, 'InReview', 'note is sent for review', '2021-02-13 19:31:25', 1, NULL, NULL, b'01'),
(3, 'Published', 'published for user', '2021-02-12 19:32:05', 1, NULL, NULL, b'01');

-- --------------------------------------------------------

--
-- Table structure for table `system_configuration`
--

CREATE TABLE `system_configuration` (
  `id` int(11) NOT NULL,
  `item_key` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` bit(2) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` bit(2) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type`, `description`, `created_date`, `created_by`, `updated_date`, `updated_by`, `is_active`) VALUES
(1, 'Text Book', 'It is Text Book', NULL, NULL, NULL, NULL, b'00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(24) NOT NULL,
  `is_email_verfied` bit(2) NOT NULL DEFAULT b'0',
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` bit(2) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `role_id`, `fname`, `lname`, `email`, `password`, `is_email_verfied`, `created_by`, `created_date`, `updated_date`, `updated_by`, `is_active`) VALUES
(1, 3, 'Janvi', 'Bhalala', 'janvibhalala15@gmail.com', 'janviAdmin', b'01', NULL, '2021-02-09 13:24:00', NULL, NULL, b'01'),
(2, 2, 'Admin', 'Admin', 'admin@gmail.com', 'admin', b'01', 1, '2021-02-10 16:24:04', NULL, NULL, b'01'),
(3, 1, 'Khyati', 'Joshi', 'khyati@gmail.com', 'khyati@12', b'01', NULL, '2021-02-11 11:35:46', NULL, NULL, b'01'),
(4, 1, 'Hem', 'Bhagat', 'hem@gmail.com', 'hem@1Bhagat', b'01', NULL, '2021-02-12 15:06:21', NULL, NULL, b'01'),
(5, 1, 'Urvash', 'Patel', 'urvashbhalala72@gmail.com', 'urvash@12', b'01', NULL, '2021-02-15 01:12:26', NULL, NULL, b'01'),
(6, 1, 'Megha ', 'Jotangiya', 'megha@gmail.com', 'megha@12', b'01', NULL, '2021-02-13 08:27:29', NULL, NULL, b'01'),
(7, 1, 'Shital ', 'Sheth', 'sheetal@gmail.com', 'sheetal@12', b'01', NULL, '2021-02-17 11:09:36', NULL, NULL, b'01'),
(8, 1, 'Rohan', 'Raval', 'rohan@gmail.com', 'rohan@123', b'01', NULL, '2021-02-11 07:34:00', NULL, NULL, b'01'),
(9, 1, 'Rahul', 'ghetia', 'rahul@gmail.com', 'rahul@123', b'01', NULL, '2021-02-18 07:34:00', NULL, NULL, b'01'),
(10, 1, 'Reeva', 'Patel ', 'reeva@gmail.com', 'reeva@123', b'01', NULL, NULL, NULL, NULL, b'01'),
(11, 1, 'Niti', 'Modi ', 'Niti@gmail.com', 'Niti@1234', b'01', NULL, NULL, NULL, NULL, b'01'),
(12, 1, 'Janvi', 'Bhalala ', 'janvibhalala1@gmail.com', '2439', b'01', NULL, NULL, NULL, NULL, b'01'),
(13, 1, 'Khushali', 'Sheth ', 'khushali@gmail.com', 'khushali@123', b'01', NULL, NULL, NULL, NULL, b'01'),
(14, 1, 'Sneh', 'ghetiya ', 'sneh@gmail.com', 'sneh@123A', b'01', NULL, NULL, NULL, NULL, b'01'),
(17, 1, 'Janvi', 'Joshi ', 'janvibhalala15@gmail.com', 'janvi2345', b'01', NULL, NULL, NULL, NULL, b'01'),
(20, 1, 'Sonal', 'patel ', 'sonalbenbhalala76@gmail.com', 'sonal123', b'00', NULL, NULL, NULL, NULL, b'01'),
(23, 1, 'Janvi', 'patel ', '17ce034.janvi.bhalala@vvpedulink.ac.in', 'vvpvvp123', b'01', NULL, NULL, NULL, NULL, b'01');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `profile_id` int(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `email2` varchar(100) DEFAULT NULL,
  `country_code` varchar(5) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `profile_pic` varchar(500) DEFAULT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `university` varchar(100) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`profile_id`, `dob`, `gender`, `email2`, `country_code`, `mobile`, `profile_pic`, `address1`, `address2`, `city`, `state`, `zip_code`, `country`, `university`, `college`, `user_id`, `created_date`, `created_by`, `updated_date`, `updated_by`, `is_active`) VALUES
(4, NULL, 1, 'khyati@gmail.com', '+91', '9898767865', '../../uploads/user/Khyati3profile.png', 'Bhim nagat Street 5', 'Pal Road', 'Rajkot', 'Gujarat', '365601', 'India', 'India', 'VVP', 3, '2021-02-17 08:00:00', NULL, NULL, NULL, b'01'),
(5, NULL, 2, 'hem@gmail.com', '+91', '7878976568', '../../uploads/user/Hem4profile.png', 'D 33', 'Shukhnivas colony', 'Amreli', 'Gujarat', '365608', 'India', 'India', 'College', 4, '2021-02-18 13:10:19', NULL, NULL, NULL, b'01'),
(6, NULL, 2, 'urvashbhalala72@gmail.com', '+91', '9787678765', '../../uploads/user/Urvash5profile.png', '55, street 4', 'City Road', 'Surat', 'Gujarat', '360005', 'India', 'India', 'SVIT', 5, '2021-02-15 12:13:00', NULL, NULL, NULL, b'01'),
(7, NULL, 1, 'megha@gmail.com', '+91', '9587865468', '../../uploads/user/Megha6profile.png', 'Shree, Block 12', 'mall Road', 'Surendranagar', 'Gujarat', '330005', 'India', 'India', 'Atmiya', 6, '2021-02-13 11:19:10', NULL, NULL, NULL, b'01'),
(8, NULL, 1, 'sheetal@gmail.com', '+91', '9898787987', '../../uploads/user/Sheetal7profile.png', '89, Green City', 'City Road', 'Surat', 'Gujarat', '360005', 'India', 'India', 'SVIT', 7, '2021-02-15 12:00:00', NULL, NULL, NULL, b'01'),
(9, NULL, 2, 'rohan@gmail.com', '+91', '7898678987', '../../uploads/user/rohal8profile.png', 'Block 23', 'Parijat', 'Rajkot', 'Gujarat', '360005', 'India', 'India', 'Darshan', 8, '2021-02-12 07:21:00', NULL, NULL, NULL, b'01'),
(10, NULL, 2, 'rahul@gmail.com', '+91', '9898767854', '../../uploads/user/Rahul9profile.png', '33, panchvati', 'akshar Marg', 'Amreli', 'Gujarat', '365601', 'India', 'India', 'VVP', 9, '2021-02-19 13:14:34', NULL, NULL, NULL, b'01');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `name`, `description`, `created_date`, `created_by`, `updated_date`, `updated_by`, `is_active`) VALUES
(1, 'member', 'user of website', '2021-02-10 10:09:13', NULL, NULL, NULL, b'01'),
(2, 'Admin', 'It is Sub Admin.', '2021-02-09 10:16:31', NULL, NULL, NULL, b'01'),
(3, 'Supper Admin', 'Admin', '2021-02-08 11:21:48', NULL, NULL, NULL, b'01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`doc_id`),
  ADD UNIQUE KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `note_id` (`note_id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`note_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `note_type_id` (`note_type_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `action_by` (`action_by`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `status` (`status_id`);

--
-- Indexes for table `order_note`
--
ALTER TABLE `order_note`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `seller_id` (`seller_id`),
  ADD KEY `note_id` (`note_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `note_category` (`note_category`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `reference_data`
--
ALTER TABLE `reference_data`
  ADD PRIMARY KEY (`reference_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`remark_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `note_id` (`note_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `note_id` (`note_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`),
  ADD KEY `status_created_by` (`created_by`),
  ADD KEY `status_updated_by` (`updated_by`);

--
-- Indexes for table `system_configuration`
--
ALTER TABLE `system_configuration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `order_note`
--
ALTER TABLE `order_note`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reference_data`
--
ALTER TABLE `reference_data`
  MODIFY `reference_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `remark_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `system_configuration`
--
ALTER TABLE `system_configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `updated_by` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `country`
--
ALTER TABLE `country`
  ADD CONSTRAINT `updated` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `doc_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `doc_updated_by` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_actioned_by` FOREIGN KEY (`action_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `note_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `note_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `note_seller_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `note_status` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `note_type` FOREIGN KEY (`note_type_id`) REFERENCES `type` (`type_id`),
  ADD CONSTRAINT `note_updated_by` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `order_note`
--
ALTER TABLE `order_note`
  ADD CONSTRAINT `order_book_category` FOREIGN KEY (`note_category`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `order_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `order_note_id` FOREIGN KEY (`note_id`) REFERENCES `note` (`note_id`),
  ADD CONSTRAINT `order_seller_id` FOREIGN KEY (`seller_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `order_updated_by` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `order_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `reference_data`
--
ALTER TABLE `reference_data`
  ADD CONSTRAINT `reference_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `reference_updated_by` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `remark`
--
ALTER TABLE `remark`
  ADD CONSTRAINT `remark_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `remark_note_id` FOREIGN KEY (`note_id`) REFERENCES `note` (`note_id`),
  ADD CONSTRAINT `remark_updated_by` FOREIGN KEY (`updated_by`) REFERENCES `user_role` (`role_id`),
  ADD CONSTRAINT `remark_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `review_note_id` FOREIGN KEY (`note_id`) REFERENCES `note` (`note_id`),
  ADD CONSTRAINT `review_order_id` FOREIGN KEY (`order_id`) REFERENCES `order_note` (`order_id`),
  ADD CONSTRAINT `review_updated_by` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `review_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `status_updated_by` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `system_configuration`
--
ALTER TABLE `system_configuration`
  ADD CONSTRAINT `config_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `config_updated_by` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `type_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `type_updated_by` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `user_role` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`),
  ADD CONSTRAINT `user_updated_by` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `profile_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `profile_updated_by` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `profile_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `role_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `role_updated_by` FOREIGN KEY (`updated_by`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
