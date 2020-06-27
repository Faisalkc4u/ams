-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 07:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kucdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `course` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  `date_post` varchar(255) NOT NULL,
  `date_submit` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`course`, `semester`, `subject`, `assignment`, `date_post`, `date_submit`, `id`) VALUES
('Mba', '2', 'math', 'rr', '20-04-10', '2020-04-22', 1),
('MA', '2', 'Data Science', 'Cloud Computing', '2020-05-08', '2020-05-13', 2),
('MSc', '6', 'fa', 'fa', '2020-06-27', '2019-07-26', 3);

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `sno` int(11) NOT NULL,
  `atcourse` varchar(255) DEFAULT NULL,
  `atsem` int(11) DEFAULT NULL,
  `atperiod` int(11) DEFAULT NULL,
  `atsub` varchar(255) DEFAULT NULL,
  `attakenby` int(11) DEFAULT NULL,
  `adno` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`sno`, `atcourse`, `atsem`, `atperiod`, `atsub`, `attakenby`, `adno`, `date`, `status`) VALUES
(80, 'MCA(LE)', 1, 1, 'MCA20', 9, '44', '2020-09-02', 'present'),
(81, 'MCA(LE)', 1, 2, 'MCA20', NULL, '44', '2020-06-19', 'present'),
(82, 'MCA(LE)', 1, 1, 'MCA20', NULL, '44', '2020-06-19', 'absent'),
(85, 'MCA(LE)', 1, 1, 'MCA20', NULL, '44', '2020-06-30', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course` varchar(10) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `semester` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course`, `duration`, `semester`) VALUES
('biometry', '3 yr', 5),
('MCA(LE)', '2 years', 4),
('MCA(R)', '3 years', 6),
('MSc', '2 years', 4);

-- --------------------------------------------------------

--
-- Table structure for table `inmark`
--

CREATE TABLE `inmark` (
  `docId` int(11) NOT NULL,
  `regNo` varchar(20) NOT NULL,
  `course` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `firstin` int(11) NOT NULL,
  `secondin` int(11) NOT NULL,
  `thirdin` int(11) NOT NULL,
  `final` int(11) NOT NULL,
  `assignment` int(11) NOT NULL,
  `seminar` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `min_marks` varchar(255) DEFAULT NULL,
  `max_mark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inmark`
--

INSERT INTO `inmark` (`docId`, `regNo`, `course`, `semester`, `subject`, `firstin`, `secondin`, `thirdin`, `final`, `assignment`, `seminar`, `total`, `min_marks`, `max_mark`) VALUES
(1, '105', 'MCA(R)', '6', 'rff', 2, 2, 0, 0, 2, 2, 2, '2', '2'),
(2, '133', 'Msc', '1', 'rff', 33, 33, 0, 0, 33, 33, 22, '33', '33');

-- --------------------------------------------------------

--
-- Table structure for table `leave_applications`
--

CREATE TABLE `leave_applications` (
  `Id` int(20) NOT NULL,
  `adno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `startdate` varchar(255) NOT NULL,
  `enddate` varchar(255) NOT NULL,
  `no_of_days` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_applications`
--

INSERT INTO `leave_applications` (`Id`, `adno`, `name`, `course`, `semester`, `startdate`, `enddate`, `no_of_days`) VALUES
(1, '121', 'Anoop', 'biometry', 'Semester 2', '2020-05-06', '2020-06-06', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `Type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `pswd`, `Type`) VALUES
(1, 'admin', 'admin', 'admin'),
(5, '321', '1992-03-14', 'Teacher'),
(6, 'athuprem19', '', 'Teacher'),
(8, 'res121', '', 'Student'),
(9, 'res121', '', 'Student'),
(10, 'res121', '', 'Student'),
(11, '45', '123123', 'Student'),
(13, '565665', '2020-03-08', 'Student'),
(15, 'ammu@gmail', '', 'Teacher'),
(16, 'ammu@gmail', '', 'Student'),
(17, '565458531', '2020-03-01', 'Student'),
(18, 'athulyaP@gmail.com', '', 'Teacher'),
(19, '564561', '2020-03-03', 'Teacher'),
(20, '636363', '2020-03-01', 'Teacher'),
(22, '234', '2001-02-08', 'Research_Student'),
(23, '9', 'Wnpf6hcrSLXUC5Y', 'Teacher'),
(25, '1456', '2020-04-29', 'Student'),
(29, '25348', '2019-05-24', 'Student'),
(30, '6555', '2018-05-24', 'Student'),
(31, '54', '2019-05-24', 'Student'),
(33, '333', '0003-03-03', 'Research_Student'),
(43, '234332', '2019-05-25', 'Research_Student');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` int(11) NOT NULL,
  `adno` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `district` varchar(30) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `aadharno` varchar(15) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `guardname` varchar(30) NOT NULL,
  `gphone` varchar(15) NOT NULL,
  `annualincome` varchar(10) NOT NULL,
  `sslcmark` varchar(10) NOT NULL,
  `plustwo` varchar(10) NOT NULL,
  `degreesub` varchar(30) NOT NULL,
  `degreemark` varchar(10) NOT NULL,
  `university` varchar(10) NOT NULL,
  `yearofpass` varchar(5) DEFAULT NULL,
  `yearofdrop` varchar(5) DEFAULT NULL,
  `pgsub` varchar(10) NOT NULL,
  `pgmark` varchar(10) NOT NULL,
  `pguni` varchar(30) NOT NULL,
  `net` varchar(10) NOT NULL,
  `mphilareaspec` varchar(50) NOT NULL,
  `mphilmark` varchar(30) NOT NULL,
  `phdareaspec` varchar(50) NOT NULL,
  `dateofjoin` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `mode` varchar(255) DEFAULT NULL,
  `guid` int(255) DEFAULT NULL,
  `sem` int(2) NOT NULL DEFAULT 1,
  `duration` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `adno`, `name`, `regno`, `dob`, `gender`, `address`, `district`, `nationality`, `phone`, `email`, `aadharno`, `religion`, `caste`, `category`, `guardname`, `gphone`, `annualincome`, `sslcmark`, `plustwo`, `degreesub`, `degreemark`, `university`, `yearofpass`, `yearofdrop`, `pgsub`, `pgmark`, `pguni`, `net`, `mphilareaspec`, `mphilmark`, `phdareaspec`, `dateofjoin`, `course`, `mode`, `guid`, `sem`, `duration`, `status`, `type`) VALUES
(2, 2, 'njnj', '', '1991-01-31', 'Female', '', '', '', '920722022', 'athuprem1997@gmail.com', '', 'Christian', 'RC', 'SC/ST', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', 'MCA(R)', NULL, NULL, 4, '', 'incomplete', 'regular'),
(3, 3, 'ghgh', '', '2020-03-16', 'Female', '', '', '', '920722022', 'athuprem1997@gmail.com', '', 'Christian', 'Latin', 'General', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', 'MCA(R)', NULL, NULL, 4, '', 'incomplete', 'regular'),
(4, 4, 'Athulya ', '', '1997-11-10', 'Female', '', '', '', '920722022', 'athuprem1997@gmail.com', '', 'Hindu', 'Saliya', 'OEC', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '', 'MCA(R)', NULL, NULL, 6, '', 'incomplete', 'regular'),
(5, 5, 'athu', '', '1997-11-10', 'Female', '', '', '', '920722022', 'athuprem1997@gmail.com', '', 'Hindu', 'Saliya', 'OEC', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', 'MCA(R)', NULL, NULL, 4, '', 'incomplete', 'regular'),
(6, 6, 'ghu', '', '2020-03-09', 'Female', '', '', '', '920722022', 'athuprem1997@gmail.com', '', 'Christian', 'Latin', 'OBC', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '', 'MCA(LE)', NULL, NULL, 4, '', 'incomplete', NULL),
(7, 7, 'Athulya ', '', '2020-03-12', 'Female', '', '', '', '920722022', 'athuprem1997@gmail.com', '', 'Hindu', 'Thiyya', 'General', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '', 'MCA(LE)', NULL, NULL, 4, '', 'incomplete', NULL),
(18, 18, 'ghu', '', '2020-03-08', 'Female', '', '', '', '920722022', 'athulyaP@gmail.com', '', '0', '0', '0', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', 'MTech', NULL, NULL, 4, '', 'incomplete', NULL),
(20, 20, 'fdf', '', '2020-03-01', 'Female', '', '', '', '920722022', 'athuprem1997@gmail.com', '', 'Hindu', 'Thattan', 'OEC', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '', 'MCA(LE)', NULL, NULL, 4, '', 'incomplete', NULL),
(21, 21, 'suhaol', '', '2001-02-08', 'Female', '', '', '', '343545455', 'riyagui@gmail.com', '', 'Hindu', 'Latin', 'General', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '2020-05-27', 'Research', NULL, NULL, 4, '', 'incomplete', 'research'),
(22, 22, 'siraj', '', '2020-04-08', 'Female', '', '', '', '3343444451', 'siraj123@gmail.com', '', 'Muslim', 'SC', 'OEC', '', '', '', '', '', '', '', '', NULL, '2020', '', '', '', '', '', '', '', '', 'MCA(R)', NULL, NULL, 4, '', 'incomplete', 'regular'),
(24, 24, 'rithibik', '', '2020-04-29', 'Male', 'M M House,vellai      ', 'Kottayam', 'Albania', '9496517489     ', 'rithwik@gmail.com', '234244', 'Hindu', 'SC', 'OEC', 'wegj   k  k ', '76454433337', '14656', '45%', '78%', 'BCA', '78%', 'kannur', '2020', NULL, '', '', '', '', '', '', '', '2020-05-27', 'MCA(LE)', NULL, NULL, 4, '2 year', 'complete', 'regular'),
(25, 25, 'faisal', '', '9999-01-11', 'Male', '', '', '', '9744373369', 'faisalkc4u@gmail.com', '', 'Muslim', 'SC', 'OBC', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2020-06-25', 'MCA(LE)', NULL, NULL, 4, '2 year', '', NULL),
(26, 26, 'est', '', '2019-12-24', 'Male', '', '', '', '9744373369', 'faisalkc4u@gmail.com', '', 'Hindu', 'Bilava', 'OEC', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2019-04-24', 'MCA(LE)', NULL, NULL, 4, '2 year', '', NULL),
(27, 27, 'fai', '', '2019-12-24', 'Male', '', '', '', '9744373369', 'faisalkc4u@gmail.com', '', 'Hindu', 'Bilava', 'General', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '2019-05-24', 'MCA(R)', NULL, NULL, 5, '2 year', '', NULL),
(28, 28, 'jdgfsgf', '', '2019-05-24', 'Male', '', '', '', '99999999', 'hotteagarden@yahoo.com', '', 'Hindu', 'Bilava', 'General', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2019-05-24', 'MCA(LE)', NULL, NULL, 4, '2 year', '', NULL),
(29, 29, 'ssdjfjv', '', '2018-05-24', 'Male', '', '', '', '87979879798', 'faisalkc4u@gmail.com', '', 'Hindu', 'Bilava', 'General', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2019-05-24', 'MCA(LE)', NULL, NULL, 4, '2 year', '', NULL),
(30, 30, 'akhgf', '', '2019-05-24', 'Male', '', '', '', '9744373369', 'faisalkc4u@gmail.com', '', 'Hindu', 'Bilava', 'General', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2019-05-24', 'MCA(LE)', NULL, NULL, 4, '2 year', '', NULL),
(31, 31, '213', '', '0213-03-23', 'Female', '', '', '', '9744373369', 'faisalkcfaisy', '', 'Hindu', 'Bilava', 'General', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2019-05-24', 'MCA(LE)', NULL, NULL, 4, '2 year', '', NULL),
(32, 32, '3333', '', '0003-03-03', 'Female', '', '', '', '55555', 'faisalkc4u@gmail.com', '', 'Hindu', 'Bilava', 'General', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2019-05-24', 'MCA(LE)', NULL, NULL, 4, '', 'incomplete', 'research'),
(33, 33, '0', '', '0', '0', '', '', '', '0', '0', '', '0', '0', '0', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '0', '0', NULL, NULL, 4, '0', '', NULL),
(34, 34, 'Faisal', '', '2019-07-27', 'Male', '', '', '', '87979879798', 'faisalkc4u@gmail.com', '', 'Hindu', 'Bilava', 'General', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2019-04-25', 'MCA(LE)', NULL, NULL, 4, '2 year', '', NULL),
(35, 35, 'faisal ', '', '11111-01-01', 'Female', '', '', '', '987', 'faisalkc4u@gmail.com', '', 'Hindu', 'Bilava', 'General', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2202-05-25', 'MCA(LE)', NULL, NULL, 4, '2 year', '', NULL),
(36, 36, 'faisal', '', '2020-05-05', 'Female', '', '', '', '987456321', 'faisalkc4u@gmail.com', '', 'Hindu', 'Bilava', 'General', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2019-05-25', 'MCA(LE)', NULL, NULL, 4, '2 year', '', NULL),
(37, 37, 'faisal kc', '', '2020-01-01', 'Female', '', '', '', '987456321', 'faisalkc4u@gmail.com', '', 'Muslim', 'Bilava', 'OBC', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2019-05-25', 'MCA(LE)', NULL, NULL, 4, '2 year', '', NULL),
(38, 38, 'Faisal Kc', '', '2018-01-25', 'Male', '', '', '', '9744373369', 'faisalkc4u@gmail.com', '', 'Hindu', 'Bilava', 'General', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2019-05-25', 'MCA(LE)', NULL, NULL, 4, '', 'incomplete', 'research'),
(39, 39, 'faisal', '', '2020-02-25', 'Male', '', '', '', '9744373369', 'faisalkc4u@gmail.com', '', 'Hindu', 'Bilava', 'General', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2019-05-25', 'MCA(LE)', NULL, NULL, 4, '', 'incomplete', 'research'),
(40, 40, 'faisal', '', '2019-05-25', 'Male', '', '', '', '9744373369', 'faisalkc4u@gmail.com', '', 'Hindu', 'Bilava', 'General', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2019-05-25', 'MCA(LE)', NULL, NULL, 4, '', 'incomplete', 'research'),
(41, 41, 'Faahsgdjhg', '', '2018-05-25', 'Male', '', '', '', '9744373369', 'faisaalkc4u@gmail.com', '', 'Hindu', 'Bilava', 'General', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2019-05-25', 'MCA(R)', NULL, NULL, 6, '', 'incomplete', 'research'),
(42, 42, 'fffffff', '', '2019-05-25', 'Female', '', '', '', '9876543213', 'faisalkcfaisy@ff.c', '', 'Hindu', 'Bilava', 'OBC', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2019-05-24', 'MCA(LE)', NULL, NULL, 4, '', 'incomplete', 'research'),
(43, 43, 'faisal', '', '2020-01-01', 'Male', '', '', '', '9874563210', 'faisalkc4u@gmail.com', '', 'Hindu', 'Bilava', 'General', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2019-05-25', 'MCA(LE)', NULL, NULL, 4, '', 'incomplete', 'research'),
(44, 44, 'Research Student', '', '2020-01-01', 'Male', '', '', '', '123456789', 'faisalkc4u@gmail.com', '', 'Hindu', 'Bilava', 'General', '', '', '', '', '', '', '', '', '2020', NULL, '', '', '', '', '', '', '', '2019-05-25', 'MCA(LE)', 'CS', 0, 1, '', 'incomplete', 'research'),
(45, 54, 'faisal', '', '2020-01-01', 'Male', 'Kerala', 'Kannur', 'Afganistan', '9744373369', 'faisalkc4u@gmail.com', '111', 'Hindu', 'Bilava', 'General', '111', '1111', '1111', '1111', '1', 'BCA', '22', '22', '2222', NULL, '', '', '', '', '', '', '', '2020-04-25', 'MCA(R)', 'CS', 12, 6, '', 'complete', 'research'),
(46, 46, '0', '', '0', '0', '', '', '', '0', '0', '', '0', '0', '0', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '0', '0', NULL, NULL, 1, '', 'incomplete', 'research'),
(47, 47, '0', '', '0', '0', '', '', '', '0', '0', '', '0', '0', '0', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '0', '0', NULL, NULL, 1, '', 'incomplete', 'research'),
(48, 48, '0', '', '0', '0', '', '', '', '0', '0', '', '0', '0', '0', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '0', '0', NULL, NULL, 1, '', 'incomplete', 'research');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subcode` varchar(30) NOT NULL,
  `subname` varchar(60) NOT NULL,
  `course` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subcode`, `subname`, `course`, `semester`) VALUES
('MCA1C01', 'Digital System and Introduction to Microprocessors', 'MCA(R)', '1'),
('MCA2C01', 'Computer Organization', 'MCA(R)', '2');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `tid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` varchar(60) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `district` varchar(20) NOT NULL,
  `nationality` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `aadhar` varchar(15) NOT NULL,
  `qualificn` varchar(30) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `sslcmark` varchar(10) NOT NULL,
  `plustwostream` varchar(50) DEFAULT NULL,
  `plustwomark` varchar(10) NOT NULL,
  `degreestream` varchar(10) NOT NULL,
  `degreemark` varchar(10) NOT NULL,
  `uguniversity` varchar(30) NOT NULL,
  `pgstream` varchar(10) NOT NULL,
  `pgmark` varchar(10) NOT NULL,
  `pguniversity` varchar(50) NOT NULL,
  `net` varchar(50) NOT NULL,
  `otherquali` varchar(500) NOT NULL,
  `mphil` varchar(50) NOT NULL,
  `phd` varchar(50) NOT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `dateofjoin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `tid`, `name`, `dob`, `gender`, `address`, `district`, `nationality`, `phone`, `email`, `aadhar`, `qualificn`, `experience`, `designation`, `status`, `sslcmark`, `plustwostream`, `plustwomark`, `degreestream`, `degreemark`, `uguniversity`, `pgstream`, `pgmark`, `pguniversity`, `net`, `otherquali`, `mphil`, `phd`, `profile`, `dateofjoin`) VALUES
(9, '9', 'athu', '1992-03-14', 'Female', 'Kerala', 'Malappuram', 'Germany', '8592072985', 'athuprem1997@gmail.com', '987456321', 'MSc', '3', 'Associate Professor', 'permanent', '10.0', 'Computer Science', '990', 'BCA', '0', '55', 'MCA', '62', 'fa', 'MCA', 'NA', 'No', 'No', 'complete', NULL),
(10, '565656', 'Athulya ', '1990-07-11', 'Female', '', '', '', '8592072985', 'athulyaP@gmail.com', '', 'MCA', '3', 'Associate Professor', 'Guest', '', '', '', '', '', '', '', '', '', 'MCA', '', '', '', 'incomplete', NULL),
(11, '1234565', 'ghu', '2020-03-08', 'Male', '', '', '', '920722022', 'ammu@gmail.com', '', 'MPhil', '5 year', 'Associate Professor', 'UGC NET', '', '', '', '', '', '', '', '', '', 'JRF', '', '', '', 'incomplete', NULL),
(12, '45446464', 'gghh', '0', 'Female', '', '', '', '920722022', 'ammu@gmail.com', '', 'PhD', '5 year', 'Assistant Professor', 'UGC NET', '', '', '', '', '', '', '', '', '', 'JRF', '', '', '', 'incomplete', NULL),
(13, '9898989', 'fdf', '0', 'Female', '', '', '', '920722022', 'athulyaP@gmail.com', '', 'BTech', '5 year', 'Assistant Professor', 'UGC NET', '', '', '', '', '', '', '', '', '', 'UGC NET', '', '', '', 'incomplete', NULL),
(14, '564561', 'Athulya ', '0', 'Female', '', '', '', '920722022', 'athuprem1997@gmail.com', '', 'MCA', '2', 'Assistant Professor', 'JRF', '', '', '', '', '', '', '', '', '', 'UGC NET', '', '', '', 'incomplete', NULL),
(15, '636363', 'ammu', '0', 'Female', '', '', '', '920722022', 'athuprem1997@gmail.com', '', 'MCA', '5 year', 'Assistant Professor', 'UGC NET', '', '', '', '', '', '', '', '', '', 'UGC NET', '', '', '', 'incomplete', NULL),
(16, '12212', 'Radha', '2020-03-01', 'Male', '', '', '', '920722022', 'ammu@gmail.com', '', 'MSc', '5 year', 'Associate Professor', 'UGC NET', '', '', '', '', '', '', '', '', '', 'JRF', '', '', '', 'incomplete', '2020-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `table_id` int(11) NOT NULL,
  `course` varchar(220) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `weekday` int(1) NOT NULL DEFAULT 1,
  `period` int(1) NOT NULL DEFAULT 1,
  `lecture` int(255) DEFAULT NULL,
  `subject` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`table_id`, `course`, `semester`, `weekday`, `period`, `lecture`, `subject`) VALUES
(1, 'MCA(R)', 1, 1, 1, NULL, 'Project'),
(2, 'MCA(R)', 1, 1, 2, NULL, 'CLoud'),
(3, 'MCA(R)', 1, 2, 1, 9, 'Project'),
(4, 'MCA(R)', 1, 4, 3, 9, 'Cloud'),
(5, 'MCA(R)', 1, 4, 4, 9, 'CLoud');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course`);

--
-- Indexes for table `inmark`
--
ALTER TABLE `inmark`
  ADD PRIMARY KEY (`docId`);

--
-- Indexes for table `leave_applications`
--
ALTER TABLE `leave_applications`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subcode`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`table_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `inmark`
--
ALTER TABLE `inmark`
  MODIFY `docId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leave_applications`
--
ALTER TABLE `leave_applications`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
