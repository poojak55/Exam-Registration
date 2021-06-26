-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 02:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_work`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `ID` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`ID`, `name`, `email_id`, `designation`, `dob`) VALUES
('aarya', 'Prajith Aarya', 'prajithaarya.cs19@bmsce.ac.in', 'COE staff', '2001-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_details`
--

CREATE TABLE `admin_login_details` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login_details`
--

INSERT INTO `admin_login_details` (`Username`, `Password`) VALUES
('aarya', 'sonu123');

-- --------------------------------------------------------

--
-- Table structure for table `annoncements`
--

CREATE TABLE `annoncements` (
  `date` varchar(25) DEFAULT NULL,
  `id` int(10) NOT NULL,
  `announcement` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `pdf_doc` longblob DEFAULT NULL,
  `adm_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `eighth_sem_sub`
--

CREATE TABLE `eighth_sem_sub` (
  `Date` date NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Code` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eighth_sem_sub`
--

INSERT INTO `eighth_sem_sub` (`Date`, `Name`, `Code`) VALUES
('2021-06-06', 'Green Computing', '21CS8PCGCT'),
('2021-06-08', ' Cloud Computing', '21CS8OECCT'),
('2021-06-08', 'Big Data Analytics', '21CS8OEBDA');

-- --------------------------------------------------------

--
-- Table structure for table `fastsem_registered`
--

CREATE TABLE `fastsem_registered` (
  `USN` char(10) NOT NULL,
  `selected_subjects` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fastsem_registered`
--

INSERT INTO `fastsem_registered` (`USN`, `selected_subjects`) VALUES
('1BM19CS113', 'linear algebra'),
('1BM18CS125', 'Machine Learning'),
('1BM18CS125', 'Cryptography and Network Security'),
('1BM18CS125', 'Natural Language Processing'),
('1BM18CS125', 'Robot Process Automation Design and Development'),
('1BM17CS122', ' Cloud Computing'),
('1BM19CS167', 'Microprocessors and Microcontrollers'),
('1BM19CS167', 'Computer Organization and Architecture'),
('1BM19CS111', 'Theoretical Foundations of Computations'),
('1BM19CS111', 'Database Management Systems'),
('1BM19CS111', 'Constitution of India');

-- --------------------------------------------------------

--
-- Table structure for table `fifth_sem_sub`
--

CREATE TABLE `fifth_sem_sub` (
  `Date` date NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Code` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fifth_sem_sub`
--

INSERT INTO `fifth_sem_sub` (`Date`, `Name`, `Code`) VALUES
('2021-06-06', 'Artificial Intelligence', '20CS5PCAIP'),
('2021-06-08', 'Computer Networks', '20CS5PCCON'),
('2021-06-10', 'Unix Shell and System Programming', '20CS5PCUSP'),
('2021-06-12', 'Software Engineering', '20CS5PCSEG'),
('2021-06-14', 'Software Project Management and Finance', '20CS5HSSPM'),
('2021-06-16', 'Internet of Things', '20CS5PEIOT'),
('2021-06-16', 'Advanced Java and J2EE', '20CS5PEAJJ'),
('2021-06-16', 'Advanced Data Structures', '20CS5PEADS'),
('2021-06-18', 'Advanced Algorithms', '20CS5PEAAG'),
('2021-06-18', 'System Software and Compiler Design', '20CS5PESCD'),
('2021-06-18', 'Advanced Computer Architecture', '20CS5PEACA');

-- --------------------------------------------------------

--
-- Table structure for table `fourth_sem_sub`
--

CREATE TABLE `fourth_sem_sub` (
  `Date` date NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Code` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fourth_sem_sub`
--

INSERT INTO `fourth_sem_sub` (`Date`, `Name`, `Code`) VALUES
('2021-06-06', 'Linear Algebra', '19MA4BSLIA'),
('2021-06-08', 'Theoretical Foundations of Computations', '19CS4PCTFC'),
('2021-06-10', 'Database Management Systems', '19CS4PCDBM'),
('2021-06-12', 'Analysis and Design of Algorithms', '19CS4PCADA'),
('2021-06-14', 'Operating Systems', '19CS4PCOPS'),
('2021-06-12', 'Constituition of India', '19IC3HSCPH/19IC4HSCPH'),
('2021-06-12', 'Constitution of India', '19IC3HSCPH/19IC4HSCPH');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `USN` char(10) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`USN`, `Password`) VALUES
('1BM19CS113', 'aarya'),
('1BM19CS113', 'aarya'),
('1BM19CS113', 'aarya'),
('1BM19CS113', 'aarya'),
('1BM18CS125', 'puneeth'),
('1BM19CS111', 'pooja'),
('1BM17CS122', 'prema'),
('1BM19CS167', 'surya');

-- --------------------------------------------------------

--
-- Table structure for table `otp_gen`
--

CREATE TABLE `otp_gen` (
  `USN` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp_gen`
--

INSERT INTO `otp_gen` (`USN`, `email`, `otp`) VALUES
('1BM19CS160', 'prajithaarya.cs19@bmsce.ac.in', 6074),
('1BM19CS167', 'surya.cs19@bmsce.ac.in', 6826),
('1BM19CS198', 'prajithaarya.cs19@bmsce.ac.in', 3593),
('1BM19CS560', 'prajithaarya.cs19@bmsce.ac.in', 5360);

-- --------------------------------------------------------

--
-- Table structure for table `registered_students`
--

CREATE TABLE `registered_students` (
  `USN` char(10) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Semester` int(1) NOT NULL,
  `Section` char(1) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Email_ID` varchar(50) NOT NULL,
  `Profile_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_students`
--

INSERT INTO `registered_students` (`USN`, `Name`, `Semester`, `Section`, `DOB`, `Email_ID`, `Profile_pic`) VALUES
('1BM17CS122', 'Prema', 8, 'C', '2021-06-09', 'premas.cs17@bmsce.ac.in', 'pic'),
('1BM17CS199', 'anushka', 7, 'B', '1999-08-12', 'anushka.cs19@bmsce.ac.in', 'Profile.png'),
('1BM18CS113', 'karthi', 5, 'A', '2000-11-17', 'karthi.cs19@bmsce.ac.in', 'Profile.png'),
('1BM18CS125', 'Puneeth', 6, 'B', '2021-06-14', 'puneethk.cs18@bmsce.ac.in', 'pic.png'),
('1BM19CS111', 'Pooja', 4, 'A', '2021-06-23', 'poojak.cs19@bmsce.ac.in', 'Profile.png'),
('1BM19CS113', 'Prajith Aarya', 4, 'C', '2001-07-09', 'prajithaarya.cs19@bmsce.ac.in', 'Profile.png'),
('1BM19CS167', 'surya', 3, 'C', '2001-06-05', 'surya.cs19@bmsce.ac.in', 'Profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `sem_registered`
--

CREATE TABLE `sem_registered` (
  `USN` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem_registered`
--

INSERT INTO `sem_registered` (`USN`) VALUES
('1BM17CS122'),
('1BM18CS125'),
('1BM19CS113'),
('1BM19CS167');

-- --------------------------------------------------------

--
-- Table structure for table `sevnth_sem_sub`
--

CREATE TABLE `sevnth_sem_sub` (
  `Date` date NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Code` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sevnth_sem_sub`
--

INSERT INTO `sevnth_sem_sub` (`Date`, `Name`, `Code`) VALUES
('2021-06-06', 'Biology for Engineers ', '21IC7BSBIE'),
('2021-06-08', 'Cyber Law , Forensics and IPR', '21CS7HSCFI'),
('2021-06-08', 'Block Chain', '21CS7PEBLC'),
('2021-06-10', 'NoSQL Database', '21CS7PENSD'),
('2021-06-10', 'Multimedia Computing', '21CS7PEMMC'),
('2021-06-12', 'Distributed Systems', '21CS7PEDIS'),
('2021-06-12', 'Software Architecture and Design Patterns', '21CS7PESDP'),
('2021-06-12', 'Cloud Computing', '21CS7PECCT'),
('2021-06-14', 'Data Science', '21CS7OEDAS'),
('2021-06-14', 'Python Programming', '21CS7OEPYP'),
('2021-06-16', 'Industry Motivated Course', '21CS7PCIMC');

-- --------------------------------------------------------

--
-- Table structure for table `sixth_sem_sub`
--

CREATE TABLE `sixth_sem_sub` (
  `Date` date NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Code` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sixth_sem_sub`
--

INSERT INTO `sixth_sem_sub` (`Date`, `Name`, `Code`) VALUES
('2021-06-06', 'Machine Learning', '20CS6PCMAL'),
('2021-06-08', 'Cryptography and Network Security ', '20CS6PCCNS'),
('2021-06-10', 'Object Oriented Modelling and Design', '20CS6PCOMD'),
('2021-06-12', 'Management and Entrepreneurship', '20CS6HSMGE'),
('2021-06-14', 'Computer Graphics & Visualization', '20CS6PECGV'),
('2021-06-14', 'Big Data Analytics', '20CS6PEBDA'),
('2021-06-14', 'Natural Language Processing', '20CS6PENLP'),
('2021-06-16', 'Java Programming', '20CS6OEJVP'),
('2021-06-16', 'Robot Process Automation Design and Development', '20CS6OERPA');

-- --------------------------------------------------------

--
-- Table structure for table `third_sem_sub`
--

CREATE TABLE `third_sem_sub` (
  `Date` date NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `third_sem_sub`
--

INSERT INTO `third_sem_sub` (`Date`, `Name`, `Code`) VALUES
('2021-06-06', 'Statistics and Discrete Mathematics', '19MA3BSSDM'),
('2021-06-08', 'Microprocessors and Microcontrollers ', '19CS3ESMMC'),
('2021-06-10', 'Object Oriented Java Programming ', '19CS3POOJ'),
('2021-06-12', 'Data Structures', '19CS3PCDST'),
('2021-06-14', 'Computer Organization and Architecture', '19CS3PCCOA'),
('2021-06-16', 'Logic Design', '19CS3PCLOD'),
('2021-06-18', 'Environmental Studies', '19HS3PCEVS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin_login_details`
--
ALTER TABLE `admin_login_details`
  ADD KEY `id_fk` (`Username`);

--
-- Indexes for table `annoncements`
--
ALTER TABLE `annoncements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adm_fk` (`adm_id`);

--
-- Indexes for table `fastsem_registered`
--
ALTER TABLE `fastsem_registered`
  ADD KEY `usn_fk` (`USN`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD KEY `Login_Details_fk0` (`USN`);

--
-- Indexes for table `otp_gen`
--
ALTER TABLE `otp_gen`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `registered_students`
--
ALTER TABLE `registered_students`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `sem_registered`
--
ALTER TABLE `sem_registered`
  ADD KEY `usn_sem_fk` (`USN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annoncements`
--
ALTER TABLE `annoncements`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_login_details`
--
ALTER TABLE `admin_login_details`
  ADD CONSTRAINT `id_fk` FOREIGN KEY (`Username`) REFERENCES `admin_details` (`ID`);

--
-- Constraints for table `annoncements`
--
ALTER TABLE `annoncements`
  ADD CONSTRAINT `adm_fk` FOREIGN KEY (`adm_id`) REFERENCES `admin_details` (`ID`);

--
-- Constraints for table `fastsem_registered`
--
ALTER TABLE `fastsem_registered`
  ADD CONSTRAINT `usn_fk` FOREIGN KEY (`USN`) REFERENCES `registered_students` (`USN`);

--
-- Constraints for table `login_details`
--
ALTER TABLE `login_details`
  ADD CONSTRAINT `Login_Details_fk0` FOREIGN KEY (`USN`) REFERENCES `registered_students` (`USN`);

--
-- Constraints for table `sem_registered`
--
ALTER TABLE `sem_registered`
  ADD CONSTRAINT `usn_sem_fk` FOREIGN KEY (`USN`) REFERENCES `registered_students` (`USN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
