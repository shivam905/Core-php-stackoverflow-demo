-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2018 at 12:38 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_record`
--

CREATE TABLE `answer_record` (
  `answer_id` int(11) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer_record`
--

INSERT INTO `answer_record` (`answer_id`, `answer`, `user_id`, `category_id`, `question_id`) VALUES
(1, 'markup language', 2, 1, 3),
(2, 'client side scripting language', 2, 3, 4),
(3, 'asrfrewq', 2, 1, 3),
(4, 'jkgkjghj', 2, 1, 6),
(6, 'tfgyufryu', 2, 2, 5),
(9, '23e23', 1, 1, 6),
(10, '21321321', 1, 3, 4),
(11, 'fdsgdrfgd', 1, 4, 1),
(12, 'rtreter', 1, 2, 5),
(30, 'rsedtreter\r\n\r\nrstgrete\r\nerwtretr\r\n\r\n\r\nretretretret', 2, 1, 6),
(31, '123', 2, 1, 3),
(32, '456', 2, 2, 2),
(33, 'ppppp', 2, 4, 1),
(34, '123', 2, 2, 2),
(35, 'hhhh', 1, 1, 6),
(36, 'hiiiiiii', 1, 1, 3),
(37, 'php hypertext preprocessor ', 2, 4, 7),
(46, 'personal home page', 3, 4, 7),
(47, 'it is a styling language', 3, 2, 2),
(48, 'pata nahi.', 1, 5, 9),
(49, 'nvdfhgjfbng\r\nfgdfdgfdgdfg', 1, 5, 10),
(50, 'humko nahi pata', 1, 4, 7),
(53, 'yrthtg\r\n\r\ndfgfdg\r\n\r\nfdgfdgfdg', 1, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'HTML'),
(2, 'CSS'),
(3, 'JAVASCRIPT'),
(4, 'PHP'),
(5, 'JQUERY');

-- --------------------------------------------------------

--
-- Table structure for table `question_record`
--

CREATE TABLE `question_record` (
  `question_id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_record`
--

INSERT INTO `question_record` (`question_id`, `question`, `category_id`, `user_id`) VALUES
(1, 'why we use it ?', 4, 1),
(2, 'what is this ?', 2, 1),
(3, 'html kya hai ?', 1, 1),
(4, 'what is javascript ?', 3, 1),
(5, 'css kya hai ?', 2, 1),
(6, 'abbbbb', 1, 2),
(7, 'what is the full name of php ?', 4, 1),
(9, 'what is the use of jquery ?', 5, 3),
(10, 'setertrewrtew\r\n\r\nsdfds\r\nds\r\n\r\ndsfsdfsdf', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `c_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `first_name`, `last_name`, `dob`, `gender`, `address`, `city`, `qualification`, `mobile_no`, `email_id`, `password`, `c_password`) VALUES
(1, 'shivam', 'kashyap', '1995-02-27', 'male', '112/233 fazalganj', 'kanpur', 'MCA,', '9807993050', 'shivam905@gmail.com', '1234567', '1234567'),
(2, 'rajat', 'singh', '1997-11-25', 'male', 'aliganj', 'lucknow', 'MBA,', '8808665149', 'rajat@gmail.com', '00000000', '00000000'),
(3, 'shikha', 'tripathi', '1994-02-18', 'female', '107/254 jawahar nagar', 'kanpur', 'MBA,', '9044123456', 'shikha@gmail.com', '123123', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_record`
--
ALTER TABLE `answer_record`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `question_record`
--
ALTER TABLE `question_record`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_record`
--
ALTER TABLE `answer_record`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `question_record`
--
ALTER TABLE `question_record`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
