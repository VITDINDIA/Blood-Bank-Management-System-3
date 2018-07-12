-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2018 at 03:31 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_blood_bank_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_blood_groups`
--

CREATE TABLE `my_blood_groups` (
  `cnt` int(11) NOT NULL,
  `Blood_Groups` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_blood_groups`
--

INSERT INTO `my_blood_groups` (`cnt`, `Blood_Groups`) VALUES
(1, 'A-Positive'),
(2, 'B-Positive'),
(3, 'AB-Positive'),
(4, 'O-Positive'),
(5, 'A-Negative'),
(6, 'B-Negative'),
(7, 'AB-Negative'),
(9, 'O-Negative');

-- --------------------------------------------------------

--
-- Table structure for table `my_hospital`
--

CREATE TABLE `my_hospital` (
  `myemail` varchar(50) NOT NULL,
  `mypassword` varchar(60) NOT NULL,
  `myname` varchar(50) NOT NULL,
  `mycontact` varchar(10) NOT NULL,
  `myurl` varchar(50) NOT NULL,
  `mystreet` varchar(100) NOT NULL,
  `mylandmark` varchar(50) NOT NULL,
  `mycity` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `myflag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_hospital`
--

INSERT INTO `my_hospital` (`myemail`, `mypassword`, `myname`, `mycontact`, `myurl`, `mystreet`, `mylandmark`, `mycity`, `created_at`, `myflag`) VALUES
('abhinav12@gmail.com', 'abhinav12@gmail.com', 'Gurugram Hospital', '9808156144', 'https://www.practo.com/gurgaon/clinic/gurugram-hos', 'Sohna - Gurgaon Road, Badshahpur, Landmark: Opposite Radhakrishna mandir', 'Gurugram Hospital', 'Gurugram', '2018-02-22', 1),
('Fortis@gmail.com', 'Fortis@gmail.com', 'Fortis Memorial Research Institute', '9808156121', 'https://www.fmri.in', 'Sector - 44, Opposite HUDA City Centre', 'Fortis Memorial Research Institute', 'Gurugram', '2018-02-23', 1),
('info@artemishospitals.com', 'info@artemishospitals.com', 'Artemis', '9012112121', 'http://www.artemishospitals.com/artemis/contact_us', 'Sector 51', 'Artemis Hospitals', 'Gurugram', '2018-02-23', 1),
('kailashhealthcare.com@gmail.com', 'kailashhealthcare.com@gmail.com', 'Kailash Health Care', '9808123112', 'http://www.kailashhealthcare.com/Contactus.aspx', 'H-33, Sector- 27, Noida', 'Kailash Health Care', 'Noida', '2018-02-24', 1),
('Medanta@gmail.com', 'Medanta@gmail.com', 'Medanta - The Medicity', '9411222311', 'http://www.medanta.org/gurugram/', 'CH Baktawar Singh Road, Sector 38', 'Medanta - The Medicity', 'Gurugram', '2018-02-23', 1),
('Metroo@gmail.com', 'Metroo@gmail.com', 'Metro Hospital & Heart Institute', '9808156222', 'http://www.metrohospitals.com', 'Metro Hospital & Heart Institute, 47/G - 5, Lal Kurty, Boundry Road', 'Metro Hospital & Heart Institute', 'Meerut', '2018-02-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `my_hospital_blood`
--

CREATE TABLE `my_hospital_blood` (
  `cnt` int(11) NOT NULL,
  `myemail` varchar(60) NOT NULL,
  `mybloodgroup` varchar(30) NOT NULL,
  `myunit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_hospital_blood`
--

INSERT INTO `my_hospital_blood` (`cnt`, `myemail`, `mybloodgroup`, `myunit`) VALUES
(1, 'abhinav12@gmail.com', 'B-Positive', 3),
(4, 'abhinav12@gmail.com', 'O-Positive', 4),
(5, 'abhinav12@gmail.com', 'A-Negative', 8),
(7, 'abhinav12@gmail.com', 'B-Negative', 22),
(9, 'abhinav12@gmail.com', 'A-Positive', 15),
(10, 'Medanta@gmail.com', 'B-Positive', 4),
(11, 'Medanta@gmail.com', 'O-Positive', 6),
(12, 'Medanta@gmail.com', 'AB-Positive', 12),
(13, 'info@artemishospitals.com', 'B-Positive', 3),
(14, 'info@artemishospitals.com', 'O-Positive', 4),
(15, 'info@artemishospitals.com', 'A-Negative', 5),
(16, 'info@artemishospitals.com', 'O-Negative', 6),
(17, 'Fortis@gmail.com', 'B-Positive', 4),
(18, 'Fortis@gmail.com', 'O-Positive', 7),
(19, 'Fortis@gmail.com', 'B-Negative', 12),
(21, 'Fortis@gmail.com', 'AB-Positive', 8),
(22, 'Fortis@gmail.com', 'A-Positive', 15),
(23, 'Fortis@gmail.com', 'AB-Negative', 13),
(24, 'Fortis@gmail.com', 'O-Negative', 4),
(25, 'Fortis@gmail.com', 'A-Negative', 12),
(26, 'Metroo@gmail.com', 'B-Positive', 21),
(27, 'Metroo@gmail.com', 'A-Positive', 9),
(28, 'Metroo@gmail.com', 'AB-Positive', 12),
(29, 'Metroo@gmail.com', 'O-Positive', 28),
(30, 'abhinav12@gmail.com', 'O-Negative', 18),
(31, 'kailashhealthcare.com@gmail.com', 'B-Positive', 4),
(32, 'kailashhealthcare.com@gmail.com', 'AB-Positive', 5),
(33, 'kailashhealthcare.com@gmail.com', 'A-Positive', 6),
(34, 'kailashhealthcare.com@gmail.com', 'A-Negative', 5),
(35, 'kailashhealthcare.com@gmail.com', 'B-Negative', 16);

-- --------------------------------------------------------

--
-- Table structure for table `my_receiver`
--

CREATE TABLE `my_receiver` (
  `myemail` varchar(50) NOT NULL,
  `mypassword` varchar(60) NOT NULL,
  `myname` varchar(50) NOT NULL,
  `mycontact` varchar(10) NOT NULL,
  `mybloodgroup` varchar(30) NOT NULL,
  `mypurpose` varchar(400) NOT NULL,
  `mystreet` varchar(100) NOT NULL,
  `mycity` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `myflag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_receiver`
--

INSERT INTO `my_receiver` (`myemail`, `mypassword`, `myname`, `mycontact`, `mybloodgroup`, `mypurpose`, `mystreet`, `mycity`, `created_at`, `myflag`) VALUES
('abasahinav@gmail.com', 'abasahinav@gmail.com', 'Sapna', '9328156144', 'AB-Positive', 'Mother', 'Vidya Knowledge Park', 'Noida', '2018-02-24', 1),
('abhinav@gmail.com', 'abhinav@gmail.com', 'Abhinav', '9808156144', 'B-Positive', 'Urgent', 'Vidya Knowledge Park', 'Gurugram', '2018-02-23', 1),
('sapan1231@gmail.com', 'sapan1231@gmail.com', 'Sapan Kumar', '9012178088', 'A-Negative', 'Urgent for Mother', 'Vidya Knowledge Park', 'Gurugram', '2018-02-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `my_receiver_request`
--

CREATE TABLE `my_receiver_request` (
  `cnt` int(11) NOT NULL,
  `receiverid` varchar(60) NOT NULL,
  `hopitalid` varchar(60) NOT NULL,
  `mybloodgroup` varchar(30) NOT NULL,
  `myunit` int(10) NOT NULL,
  `myremark` varchar(200) NOT NULL,
  `mystatus` varchar(15) NOT NULL,
  `remark_date` date DEFAULT NULL,
  `post` date NOT NULL,
  `mypurpose` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_receiver_request`
--

INSERT INTO `my_receiver_request` (`cnt`, `receiverid`, `hopitalid`, `mybloodgroup`, `myunit`, `myremark`, `mystatus`, `remark_date`, `post`, `mypurpose`) VALUES
(10, 'abhinav@gmail.com', 'abhinav12@gmail.com', 'A-Positive', 12, 'Only 10 unit is available.', 'Approved', '2018-02-25', '2018-02-24', 'Urgent for Mom'),
(11, 'abhinav@gmail.com', 'Fortis@gmail.com', 'A-Negative', 6, '', 'PENDING', NULL, '2018-02-24', 'Urgent for Mom'),
(12, 'sapan1231@gmail.com', 'Fortis@gmail.com', 'AB-Negative', 9, '', 'PENDING', NULL, '2018-02-24', 'Urgent for Dad'),
(13, 'abasahinav@gmail.com', 'kailashhealthcare.com@gmail.com', 'A-Positive', 4, 'Yes it is available.', 'Approved', '2018-02-24', '2018-02-24', 'Urgent for Mom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_blood_groups`
--
ALTER TABLE `my_blood_groups`
  ADD PRIMARY KEY (`cnt`);

--
-- Indexes for table `my_hospital`
--
ALTER TABLE `my_hospital`
  ADD PRIMARY KEY (`myemail`),
  ADD KEY `mycity` (`mycity`);

--
-- Indexes for table `my_hospital_blood`
--
ALTER TABLE `my_hospital_blood`
  ADD PRIMARY KEY (`cnt`),
  ADD KEY `myemail` (`myemail`);

--
-- Indexes for table `my_receiver`
--
ALTER TABLE `my_receiver`
  ADD PRIMARY KEY (`myemail`);

--
-- Indexes for table `my_receiver_request`
--
ALTER TABLE `my_receiver_request`
  ADD PRIMARY KEY (`cnt`),
  ADD KEY `receiverid` (`receiverid`),
  ADD KEY `hopitalid` (`hopitalid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_blood_groups`
--
ALTER TABLE `my_blood_groups`
  MODIFY `cnt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `my_hospital_blood`
--
ALTER TABLE `my_hospital_blood`
  MODIFY `cnt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `my_receiver_request`
--
ALTER TABLE `my_receiver_request`
  MODIFY `cnt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `my_hospital_blood`
--
ALTER TABLE `my_hospital_blood`
  ADD CONSTRAINT `my_hospital_blood_ibfk_1` FOREIGN KEY (`myemail`) REFERENCES `my_hospital` (`myemail`);

--
-- Constraints for table `my_receiver_request`
--
ALTER TABLE `my_receiver_request`
  ADD CONSTRAINT `my_receiver_request_ibfk_1` FOREIGN KEY (`receiverid`) REFERENCES `my_receiver` (`myemail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
