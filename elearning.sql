-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 10:21 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `User_Id` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`User_Id`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `Id` int(11) NOT NULL,
  `Student_id` int(5) DEFAULT NULL,
  `Course_id` int(5) DEFAULT NULL,
  `Module` int(5) DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  `Score` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`Id`, `Student_id`, `Course_id`, `Module`, `url`, `Score`) VALUES
(1, 10, 3, 2, 'http://localhost/ELearning/uploads/assignments/10-3-2.pdf', 5),
(2, 10, 3, 1, 'http://localhost/ELearning/uploads/assignments/10-3-1.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Id` int(11) NOT NULL,
  `Course_Name` varchar(100) DEFAULT NULL,
  `Faculty_Id` int(11) NOT NULL,
  `Description` varchar(350) DEFAULT NULL,
  `No_Modules` int(11) DEFAULT NULL,
  `Enrollment_Start` date DEFAULT NULL,
  `Enrollment_End` date DEFAULT NULL,
  `Course_Start` date DEFAULT '2017-01-01',
  `Course_End` date DEFAULT '2017-12-31',
  `Url` varchar(150) NOT NULL DEFAULT 'http://localhost/ELearning/uploads/Course_logos/notfound.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Id`, `Course_Name`, `Faculty_Id`, `Description`, `No_Modules`, `Enrollment_Start`, `Enrollment_End`, `Course_Start`, `Course_End`, `Url`) VALUES
(1, 'COQT', 1, 'Beginners Course on Computer Oriented Quantitative techniques.', 5, '2017-03-08', '2017-05-01', '2017-03-26', '2017-08-31', 'http://localhost/ELearning/uploads/Course_logos/1.jpg'),
(2, 'Data Structures & Algorithms', 1, 'Beginners course on data structures and algorithms', 5, '2017-03-31', '2017-04-23', '2017-04-30', '2017-08-31', 'http://localhost/ELearning/uploads/Course_logos/2.png'),
(3, 'Network Programming', 3, 'Basic fundamentals of network programming', 4, '2017-04-05', '2017-04-12', '2017-04-20', '2017-04-30', 'http://localhost/ELearning/uploads/Course_logos/3.png'),
(4, 'Internetwork Security', 3, 'Learn more about network security right from the basics.', 5, '2017-04-20', '2017-04-27', '2017-04-29', '2017-06-30', 'http://localhost/ELearning/uploads/Course_logos/4.jpg'),
(5, 'Software Engineering', 3, 'Learn all about the various techniques involved in a complete software development life cycle.', 10, '2017-04-17', '2017-04-30', '2017-04-17', '2017-04-25', 'http://localhost/ELearning/uploads/Course_logos/5.jpg'),
(8, 'dsf', 3, 'sdfdsf', 5, '2017-04-27', '2017-04-29', '2017-01-01', '2017-12-31', 'http://localhost/ELearning/uploads/Course_logos/8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `Id` int(11) NOT NULL,
  `Degree` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`Id`, `Degree`) VALUES
(1, 'BCom'),
(2, 'BSc'),
(3, 'MCA'),
(4, 'MSc'),
(5, 'M.Phil'),
(6, 'MBA'),
(7, 'MCom'),
(8, 'Phd');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `Id` int(11) NOT NULL,
  `Student_Id` int(11) DEFAULT NULL,
  `Course_Id` int(11) DEFAULT NULL,
  `DE` date DEFAULT NULL,
  `stage` varchar(50) NOT NULL DEFAULT 'Module-1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`Id`, `Student_Id`, `Course_Id`, `DE`, `stage`) VALUES
(1, 1, 1, '2017-04-10', 'Module-1'),
(2, 1, 2, '2017-04-10', 'Module-1'),
(3, 1, 3, '2017-04-11', 'Module-1'),
(4, 10, 3, '2017-04-11', 'Module-1'),
(5, 10, 5, '2017-04-18', 'Module-1');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Id` int(11) NOT NULL,
  `First_Name` varchar(15) DEFAULT NULL,
  `Last_Name` varchar(15) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Qualification` varchar(20) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Email_Id` varchar(30) DEFAULT NULL,
  `Active` tinyint(1) NOT NULL,
  `Profile` varchar(200) NOT NULL DEFAULT 'http://localhost/ELearning/images/Profile/profileicon.png',
  `Occupation` varchar(250) NOT NULL DEFAULT 'Not Disclosed',
  `Experience` varchar(200) NOT NULL DEFAULT 'Not Disclosed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Id`, `First_Name`, `Last_Name`, `Password`, `Qualification`, `City`, `Email_Id`, `Active`, `Profile`, `Occupation`, `Experience`) VALUES
(1, 'Renuja R', 'Rajagopal', 'faculty', 'BCom', 'Mumbai', 'renuja_rajagopal@yahoo.com', 0, 'http://localhost/ELearning/images/Profile/profileicon.png', 'Not Disclosed', 'Not Disclosed'),
(2, 'fname', 'lname', 'qwert', 'PhD', 'wqre', 'asdf@adf.va', 0, 'http://localhost/ELearning/images/Profile/profileicon.png', 'Not Disclosed', 'Not Disclosed'),
(3, 'f', 'l', 'abcde', 'MCA', 'Mumbai', 'f@l.c', 0, 'http://localhost/ELearning/images/Profile/profileicon.png', 'Not Disclosed', 'Not Disclosed'),
(4, 'dffd', 'dsfd', 'asdfgh', 'BCom', 'afd', 're@l.c', 0, 'http://localhost/ELearning/images/Profile/profileicon.png', 'Not Disclosed', 'Not Disclosed'),
(5, 'sdf', 'dssd', 'qwerty', 'MSc', 'sdfasd', 'dsf@dsfa.adsf', 0, 'http://localhost/ELearning/images/Profile/profileicon.png', 'Not Disclosed', 'Not Disclosed');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(11) NOT NULL,
  `Actor` varchar(10) DEFAULT NULL,
  `Actor_id` int(11) DEFAULT NULL,
  `Feed` varchar(400) DEFAULT NULL,
  `response` varchar(500) DEFAULT NULL,
  `Posted_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `Actor`, `Actor_id`, `Feed`, `response`, `Posted_date`) VALUES
(1, 'Student', 10, 'Hello', 'Hello there', '2017-04-19'),
(2, 'Faculty', 3, 'Hey     ', 'Good morning', '2017-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `mst_question`
--

CREATE TABLE `mst_question` (
  `que_id` int(5) NOT NULL,
  `test_id` int(5) DEFAULT NULL,
  `que_desc` varchar(150) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_question`
--

INSERT INTO `mst_question` (`que_id`, `test_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(1, 1, 'Which of the following services use TCP?', 'DHCP', 'SMTP', 'dasfsdf', 'FTP', 3),
(2, 1, 'How are you?', 'Fine', 'Not Fine', 'Okay', 'Very poorly', 2),
(3, 1, 'Number of elements in one dozen?', '10', '12', '17', '20', 2),
(4, 1, 'How is the weather?', 'Sunny', 'Hot', 'Cold', 'Rainy', 2),
(5, 1, 'summa', '1', '2', '10', '14', 2),
(6, 1, 'as', '4', '7', '8', '6', 2),
(7, 1, 'qwer', 'asd', 'ad', 'adf', 'sdaf', 2),
(8, 1, 'fdas', 'fsda', 'sda', 'sadf', 'sda', 2),
(9, 1, 'kghj', 'hjk', 'hgkj', 'hjk', 'jh', 2),
(10, 24, 'trail', 'a', 'b', 'c', 'd', 2),
(11, 24, 'Hello', 'People', 'Guys', 'Friends', 'everyone', 1),
(12, 24, 'Hello', 'H', 'e', 'l', 'l', 2),
(13, 24, 'des', 'asdf', 'fsad', 'dsf', 'dsf', 2),
(14, 25, 'fasd', 'sda', 'dsfa', 'fads', 'sda', 3),
(15, 25, 'dsf', 'asdf', 'dsa', 'safd', 'dafs', 2),
(16, 25, 'fd', 'dfg', 'dfs', 'dfg', 'fdg', 2),
(17, 25, 'df', 'sgd', 'fdg', 'gfd', 'fd', 1),
(18, 24, 'fh', 'hfd', 'gf', 'gfdhgf', 'df', 1),
(19, 25, 'bx', 'bcx', 'vcx', 'bxcv', 'cxv', 1),
(20, 25, 'gf', 'sd', 'dfs', 'fds', 'fsd', 2),
(21, 25, 'hfg', 'fg', 'gf', 'gf', 'f', 1),
(22, 25, 'gfh', 'hdfg', 'fd', 'gf', 'gf', 2),
(23, 1, 'sdaf', 'sad', 'ds', 'asd', 'sdaf', 2),
(24, 24, 'sdaf', 'dsa', 'dsfa', 'sda', 'sdaf', 3),
(25, 25, 'sad', 'dsf', 'adsf', 'sdaf', 'dsfa', 2),
(26, 1, 'dsaf', 'afd', 'sfda', 'asdf', 'afds', 2),
(27, 1, '', '', '', '', '', 1),
(28, 26, 'sdfasd', 'dsf', 'sad', 'asdf', 'dsfa', 2),
(29, 26, 'sdfasd', 'fsda', 'sdf', 'sdf', 'sdf', 2),
(30, 26, 'ffds', 'fs', 'fdsg', 'fdgs', 'sfd', 2),
(31, 1, 'dsf', 'fggf', 'fghhg', 'fgh', 'fd', 1),
(32, 26, 'gfhgh', 'gfdhgd', 'dhd', 'fgdhg', 'hdfdf', 1),
(33, 26, 'fghgfg', 'fghg', 'hgf', 'dg', 'gddg', 2),
(34, 26, 'fghdfgh', 'fghdfhfdg', 'fdghfdg', 'fghfgh', 'ghgdfghdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_result`
--

CREATE TABLE `mst_result` (
  `login` varchar(20) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `score` decimal(3,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_result`
--

INSERT INTO `mst_result` (`login`, `test_id`, `test_date`, `score`) VALUES
('10', 1, '2017-04-12', '1'),
('10', 1, '2017-04-12', '1'),
('10', 1, '2017-04-12', '1'),
('10', 1, '2017-04-12', '1'),
('10', 1, '2017-04-12', '0'),
('10', 1, '2017-04-12', '1'),
('10', 1, '2017-04-12', '1'),
('10', 1, '2017-04-12', '0'),
('10', 1, '2017-04-12', '0'),
('10', 1, '2017-04-12', '3'),
('10', 1, '2017-04-13', '6'),
('10', 1, '2017-04-13', '0'),
('10', 1, '2017-04-13', '6'),
('10', 1, '2017-04-13', '0'),
('10', 1, '2017-04-13', '3'),
('10', 1, '2017-04-13', '3'),
('10', 1, '2017-04-13', '3'),
('10', 1, '2017-04-13', '4'),
('10', 1, '2017-04-13', '3'),
('10', 1, '2017-04-13', '3'),
('10', 1, '2017-04-13', '3'),
('10', 1, '2017-04-13', '4'),
('10', 1, '2017-04-13', '2'),
('10', 1, '2017-04-13', '4'),
('10', 1, '2017-04-13', '3'),
('10', 1, '2017-04-13', '2'),
('10', 1, '2017-04-13', '1'),
('10', 1, '2017-04-13', '1'),
('10', 1, '2017-04-13', '0'),
('10', 24, '2017-04-18', '2'),
('10', 24, '2017-04-18', '2'),
('10', 24, '2017-04-18', '4'),
('10', 24, '2017-04-18', '4'),
('10', 24, '2017-04-18', '1'),
('10', 24, '2017-04-18', '0'),
('10', 24, '2017-04-18', '1'),
('10', 24, '2017-04-18', '2');

-- --------------------------------------------------------

--
-- Table structure for table `mst_test`
--

CREATE TABLE `mst_test` (
  `Id` int(11) NOT NULL,
  `Test_Name` varchar(100) DEFAULT NULL,
  `Subject_id` int(11) DEFAULT NULL,
  `Module` int(5) DEFAULT NULL,
  `Total_Questions` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_test`
--

INSERT INTO `mst_test` (`Id`, `Test_Name`, `Subject_id`, `Module`, `Total_Questions`) VALUES
(1, 'sad', 3, 1, 10),
(24, 'gd', 3, 2, 5),
(25, 'np3', 3, 3, 10),
(26, 'Final test', 3, -5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `mst_useranswer`
--

CREATE TABLE `mst_useranswer` (
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_useranswer`
--

INSERT INTO `mst_useranswer` (`sess_id`, `test_id`, `que_des`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `your_ans`) VALUES
('pgjotqqvmp5iuj2rbrefia40a6', 24, 'trail', 'a', 'b', 'c', 'd', 2, 2),
('pgjotqqvmp5iuj2rbrefia40a6', 24, 'Hello', 'People', 'Guys', 'Friends', 'everyone', 1, 2),
('pgjotqqvmp5iuj2rbrefia40a6', 24, 'des', 'asdf', 'fsad', 'dsf', 'dsf', 2, 3),
('pgjotqqvmp5iuj2rbrefia40a6', 24, '', '', '', '', '', 0, 3),
('pgjotqqvmp5iuj2rbrefia40a6', 24, 'fh', 'hfd', 'gf', 'gfdhgf', 'df', 1, 3),
('pd9kra13nuha3jgmr9k0ifbm35', 24, 'trail', 'a', 'b', 'c', 'd', 2, 2),
('pd9kra13nuha3jgmr9k0ifbm35', 24, 'Hello', 'People', 'Guys', 'Friends', 'everyone', 1, 2),
('pd9kra13nuha3jgmr9k0ifbm35', 24, 'des', 'asdf', 'fsad', 'dsf', 'dsf', 2, 2),
('pd9kra13nuha3jgmr9k0ifbm35', 24, 'fh', 'hfd', 'gf', 'gfdhgf', 'df', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `First_Name` char(20) NOT NULL,
  `Last_Name` char(20) DEFAULT NULL,
  `Email_Id` varchar(40) NOT NULL,
  `Password` varchar(18) NOT NULL,
  `City` char(20) NOT NULL,
  `Degree` char(10) NOT NULL,
  `College` varchar(30) NOT NULL,
  `Profile` varchar(200) NOT NULL DEFAULT 'http://localhost/ELearning/images/Profile/profileicon.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `First_Name`, `Last_Name`, `Email_Id`, `Password`, `City`, `Degree`, `College`, `Profile`) VALUES
(1, 'Renuja', 'Rajagopal', 'rr@l.c', 'student', 'Mumbai', 'MCA', 'SNDT PG Department', 'http://localhost/ELearning/images/Profile/profileicon.png'),
(10, 'r', 'r', 'r@l.c', 'abcde', 'Mumbai', 'MCA', 'adsf', 'http://localhost/ELearning/images/Profile/profileicon.png'),
(11, 'fd', 'fd', 'dfs@l.fd', 'fds', 'fd', 'BCom', 'fd', 'http://localhost/ELearning/images/Profile/profileicon.png'),
(12, 'ssas', 'dsa', 't@l.c', 'adasasd', 'fdg', 'BCom', 'fgd', 'http://localhost/ELearning/images/Profile/profileicon.png'),
(13, 'dsds', 'sdaf', 'dsf@ldsf.sdf', '123456', 'asdf', 'MCA', 'sdfa', 'http://localhost/ELearning/images/Profile/profileicon.png'),
(14, 'fdsa', 'sdaf', 'a@ds.sda', 'asdfgh', 'sdff', 'M.Phil', 'dsf', 'http://localhost/ELearning/images/Profile/profileicon.png');

-- --------------------------------------------------------

--
-- Table structure for table `study_material`
--

CREATE TABLE `study_material` (
  `Id` int(11) NOT NULL,
  `Subject_Id` int(11) DEFAULT NULL,
  `Module_No` int(11) DEFAULT NULL,
  `Module_Title` varchar(100) NOT NULL,
  `Assignment_Question` varchar(1500) NOT NULL,
  `Facult_Id` int(11) DEFAULT NULL,
  `Url` varchar(70) DEFAULT 'http://localhost/ELearning/uploads/notes/NotUploaded.pdf',
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `study_material`
--

INSERT INTO `study_material` (`Id`, `Subject_Id`, `Module_No`, `Module_Title`, `Assignment_Question`, `Facult_Id`, `Url`, `Start_Date`, `End_Date`) VALUES
(8, 3, 1, 'Introduction to network devices', 'Detailed report on all networking devices.                                                                                                            ', 3, 'http://localhost/ELearning/uploads/notes/3-1.pdf', '2017-04-10', '2017-04-26'),
(9, 3, 2, 'Basics of Network Programming', '1) Different types of protocol analyzer<br>\n2) Different types of traffic analyzer<br>\n3) SNMP<br>\n4) TCP', 3, 'http://localhost/ELearning/uploads/notes/3-2.pdf', '2017-04-15', '2017-04-27'),
(10, 4, 1, 'Introduction to Security', 'A Brief report on DES', 3, 'http://localhost/ELearning/uploads/notes/4-1.pdf', '2017-04-25', '2017-04-27'),
(11, 3, 3, 'Topologies in Networking', 'A Brief Report on different types of topologies their advantages and disadvantages.', 3, 'http://localhost/ELearning/uploads/notes/3-3.pdf', '2017-04-11', '2017-04-30'),
(13, 3, 4, 'File system in Linux', 'Description of file system in linux', 3, 'http://localhost/ELearning/uploads/notes/3-4.pdf', '2017-04-12', '2017-05-07'),
(14, 3, -5, 'Final', 'sdfasd', 3, 'http://localhost/ELearning/uploads/notes/3--5.pdf', '2017-04-06', '2017-05-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email_Id` (`Email_Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mst_question`
--
ALTER TABLE `mst_question`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `mst_test`
--
ALTER TABLE `mst_test`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `Email_Id` (`Email_Id`);

--
-- Indexes for table `study_material`
--
ALTER TABLE `study_material`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mst_question`
--
ALTER TABLE `mst_question`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `mst_test`
--
ALTER TABLE `mst_test`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `study_material`
--
ALTER TABLE `study_material`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
