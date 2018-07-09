-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 01:19 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitmangementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_type` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `Designetion` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `user_activation_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_type`, `admin_name`, `admin_email`, `pass`, `Designetion`, `phone`, `address`, `city`, `user_activation_status`) VALUES
(1, 'admin', 'Pixo It', 'admin@gmail.com', 'admin', 'Seo', 1824225928, 'savar', 'dhaka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `apoinment`
--

CREATE TABLE `apoinment` (
  `app_id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` int(11) NOT NULL,
  `date_of_Birth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `description` longtext NOT NULL,
  `depertment` int(10) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `serial_no` int(11) NOT NULL,
  `age` int(10) NOT NULL,
  `last_visit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apoinment`
--

INSERT INTO `apoinment` (`app_id`, `first_name`, `last_name`, `date_of_Birth`, `gender`, `email`, `phone`, `description`, `depertment`, `customer_id`, `serial_no`, `age`, `last_visit`) VALUES
(2, 'hgh', 0, '0000-00-00', 'male', 'gfgf', 0, 'gfgf', 3, 0, 0, 0, '2018-07-04 06:45:22'),
(3, 'alamin', 0, '0000-00-00', 'male', 'alamin258000@gmail.com', 1824229, '1222', 2, 0, 1350, 0, '2018-07-04 06:48:01'),
(4, 'hygh', 0, '0000-00-00', 'male', 'ghg', 0, 'ghg', 1, 0, 0, 0, '2018-07-04 06:57:54'),
(5, 'hjhj', 0, '0000-00-00', '', 'jjjjjjjj', 0, 'jjjjjjjjjjjjjj', 3, 0, 0, 0, '2018-07-04 06:59:26'),
(6, 'rtrtrt', 0, '0000-00-00', 'male', 'admin@gmail.com', 18222, 'sdsdddddddddddddddddddd', 4, 0, 25288, 0, '2018-07-04 07:02:12'),
(8, 'dfdf', 0, '0000-00-00', 'male', 'gfg', 0, 'fgfgfgfg', 2, 0, 0, 0, '2018-07-04 07:11:14'),
(9, 'alamin', 0, '2018-07-02', 'male', 'alamin258000@gmail.com', 1824225928, 'www..jin .com', 1, 0, 0, 0, '2018-07-05 04:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `depertment`
--

CREATE TABLE `depertment` (
  `dep_id` int(10) NOT NULL,
  `Dep_name` varchar(255) NOT NULL,
  `dep_image` varchar(255) NOT NULL,
  `dep_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depertment`
--

INSERT INTO `depertment` (`dep_id`, `Dep_name`, `dep_image`, `dep_status`) VALUES
(1, 'Dental', 'fdfdf', 1),
(2, 'physsoo', 'fdfd', 1),
(3, 'example demo 3', 'sdsd', 1),
(4, 'Pixo it service', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doc_id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_Birth` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `spcility` varchar(255) NOT NULL,
  `doc_username` varchar(255) NOT NULL,
  `doc_pass` varchar(255) NOT NULL,
  `doc_image` varchar(255) NOT NULL,
  `Working_time` date NOT NULL,
  `doc_depid` int(3) NOT NULL,
  `City` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `Join_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `facebook` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0 = In-Active, 1 = Active',
  `tweet` varchar(255) NOT NULL,
  `instragram` varchar(255) NOT NULL,
  `linkdin` varchar(255) NOT NULL,
  `google_plus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doc_id`, `first_name`, `last_name`, `date_of_Birth`, `email`, `gender`, `phone`, `Designation`, `spcility`, `doc_username`, `doc_pass`, `doc_image`, `Working_time`, `doc_depid`, `City`, `address`, `Join_date`, `facebook`, `status`, `tweet`, `instragram`, `linkdin`, `google_plus`) VALUES
(1, 'Pxo ', 'It', '2018-07-09', 'admin@gmail.com', 'male', '01824225928', '', '', 'admin@gmail.com', 'admin', 'http://localhost/HospitalManagement/public/assets/doctorimage/4.png', '0000-00-00', 1, '', '', '2018-07-09 15:53:32', 'facebook.com-', 0, 'ww.tweet.com', '', '', 'g ');

-- --------------------------------------------------------

--
-- Table structure for table `doctrors_digrees`
--

CREATE TABLE `doctrors_digrees` (
  `degre_id` int(10) NOT NULL,
  `Degree_Qulificationid` int(10) NOT NULL,
  `Degree_name` varchar(252) NOT NULL,
  `inst_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctrors_digrees`
--

INSERT INTO `doctrors_digrees` (`degre_id`, `Degree_Qulificationid`, `Degree_name`, `inst_name`) VALUES
(1, 1, 'degr1', 'inst1'),
(2, 1, 'deg2`', 'inst2');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(11) NOT NULL,
  `pat_first_name` int(11) NOT NULL,
  `pat_last_name` int(11) NOT NULL,
  `pat_phone` int(11) NOT NULL,
  `enter_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `age` int(10) NOT NULL,
  `ender` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `pat_docid` int(10) NOT NULL,
  `pat_staffid` int(10) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `Pation_name` int(11) NOT NULL,
  `Doctors_name` text NOT NULL,
  `payment_date` date NOT NULL,
  `t_amount` int(11) NOT NULL,
  `dis_count` int(11) NOT NULL,
  `Payment_methot` int(10) NOT NULL,
  `pay_idstatusid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recepdetails`
--

CREATE TABLE `recepdetails` (
  `recep_id` int(10) NOT NULL,
  `recep_patid` int(10) NOT NULL,
  `recep_stastusid` int(10) NOT NULL,
  `recep_doctid` int(10) NOT NULL,
  `recep_wordid` int(10) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  `test_id` int(11) NOT NULL,
  `reecep_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deisasortestreport` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sechudul`
--

CREATE TABLE `sechudul` (
  `schudl_id` int(10) NOT NULL,
  `schudul_time` date NOT NULL,
  `staff_name` int(10) NOT NULL,
  `doc_name` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(10) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `staff_email` varchar(255) NOT NULL,
  `staff_pass` varchar(255) NOT NULL,
  `working_hour` date NOT NULL,
  `staff_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(10) NOT NULL,
  `sequence` varchar(255) NOT NULL,
  `statusTitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `sequence`, `statusTitle`) VALUES
(2, '1', 'pending'),
(3, '2', 'partial '),
(4, '3', 'complete'),
(5, '4', 'cencel');

-- --------------------------------------------------------

--
-- Table structure for table `transmaster`
--

CREATE TABLE `transmaster` (
  `trans_id` int(11) NOT NULL,
  `transate_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `trans_recepid` int(10) NOT NULL,
  `trans_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `word`
--

CREATE TABLE `word` (
  `word_id` int(10) NOT NULL,
  `word_name` varchar(255) NOT NULL,
  `word_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `apoinment`
--
ALTER TABLE `apoinment`
  ADD PRIMARY KEY (`app_id`,`customer_id`),
  ADD KEY `depertment` (`depertment`);

--
-- Indexes for table `depertment`
--
ALTER TABLE `depertment`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `doc_depid` (`doc_depid`);

--
-- Indexes for table `doctrors_digrees`
--
ALTER TABLE `doctrors_digrees`
  ADD PRIMARY KEY (`degre_id`),
  ADD KEY `Degree_Qulificationid` (`Degree_Qulificationid`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `recepdetails`
--
ALTER TABLE `recepdetails`
  ADD PRIMARY KEY (`recep_id`);

--
-- Indexes for table `sechudul`
--
ALTER TABLE `sechudul`
  ADD PRIMARY KEY (`schudl_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `transmaster`
--
ALTER TABLE `transmaster`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `trans_by` (`trans_by`);

--
-- Indexes for table `word`
--
ALTER TABLE `word`
  ADD PRIMARY KEY (`word_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apoinment`
--
ALTER TABLE `apoinment`
  MODIFY `app_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `depertment`
--
ALTER TABLE `depertment`
  MODIFY `dep_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctrors_digrees`
--
ALTER TABLE `doctrors_digrees`
  MODIFY `degre_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recepdetails`
--
ALTER TABLE `recepdetails`
  MODIFY `recep_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sechudul`
--
ALTER TABLE `sechudul`
  MODIFY `schudl_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `word`
--
ALTER TABLE `word`
  MODIFY `word_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apoinment`
--
ALTER TABLE `apoinment`
  ADD CONSTRAINT `apoinment_ibfk_2` FOREIGN KEY (`depertment`) REFERENCES `depertment` (`dep_id`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`doc_depid`) REFERENCES `depertment` (`dep_id`);

--
-- Constraints for table `doctrors_digrees`
--
ALTER TABLE `doctrors_digrees`
  ADD CONSTRAINT `doctrors_digrees_ibfk_1` FOREIGN KEY (`Degree_Qulificationid`) REFERENCES `doctors` (`doc_id`);

--
-- Constraints for table `transmaster`
--
ALTER TABLE `transmaster`
  ADD CONSTRAINT `transmaster_ibfk_1` FOREIGN KEY (`trans_by`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `transmaster_ibfk_2` FOREIGN KEY (`trans_id`) REFERENCES `recepdetails` (`recep_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
