-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 02:16 PM
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
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `admin_type` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `designetion` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `user_activation_status` int(1) NOT NULL,
  `date_of_Birth` datetime NOT NULL,
  `gender` varchar(100) NOT NULL,
  `spiciality_depid` int(10) DEFAULT NULL,
  `doc_image` varchar(100) DEFAULT NULL,
  `staff_image` varchar(255) DEFAULT NULL,
  `join_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `admin_type`, `admin_name`, `admin_email`, `pass`, `confirmpassword`, `designetion`, `phone`, `address`, `city`, `user_activation_status`, `date_of_Birth`, `gender`, `spiciality_depid`, `doc_image`, `staff_image`, `join_date`) VALUES
(1, '', '', 'admin', 'Pixo It', 'admin@gmail.com', 'admin', '', 'Ceo', 1824225928, 'savar', 'dhaka', 1, '0000-00-00 00:00:00', '', 0, '', '', '0000-00-00 00:00:00'),
(2, 'alamin', '', 'employee', 'alamin', 'alamin@gmail.com', 'admin', '', 'doctor', 1824225928, 'dhaka', 'dhaka', 1, '2018-08-07 00:00:00', 'male', 0, 'sdsdsds', '', '2018-08-08 00:00:00'),
(3, 'dfdf', 'gggggggggg', 'employee', 'admin', 'admin@gmail.com', 'admin@123', 'admin@123', '', 1824225928, '', '', 1, '2018-08-07 00:00:00', 'male', 6, 'http://localhost/HospitalManagement/public/assets/doctorimage/Capture4.PNG', NULL, '2018-08-24 00:00:00'),
(4, 'alamin', 'gggggggggg', 'employee', 'admin', 'admin@gmail.com', 'admin@123', 'admin@123', 'doctor', 1824225928, '', '', 1, '2018-08-01 00:00:00', 'male', 1, 'http://localhost/HospitalManagement/public/assets/doctorimage/2.PNG', NULL, '2018-08-02 00:00:00'),
(5, 'alamin', 'gggggggggg', 'employee', 'admin', 'admin@gmail.com', 'admin@123', 'admin@123', 'doctor', 1824225928, '', '', 1, '2018-09-02 00:00:00', 'male', 1, 'http://localhost/HospitalManagement/public/assets/doctorimage/1.PNG', NULL, '2018-08-31 00:00:00'),
(6, 'alamin', 'hossain', 'employee', 'admin@gmail.com', 'admin@gmail.com', 'admin@123', 'admin@123', 'doctor', 1822, '', 'admin', 1, '2018-08-20 00:00:00', 'female', 6, 'http://localhost/HospitalManagement/public/assets/doctorimage/Capture4.PNG', NULL, '2018-08-29 00:00:00'),
(7, 'alamin', 'hossain', 'employee', 'admin', 'alamin@gmail.com', 'admin@123', 'admin@123', 'doctor', 1824225928, 'dhaka', 'admin', 1, '2018-08-08 00:00:00', 'male', 1, 'http://localhost/HospitalManagement/public/assets/doctorimage/Capture3.PNG', NULL, '2018-08-10 00:00:00'),
(8, 'dfdf', 'dddddddddddddddddddd', 'employee', 'admin@gmail.com', 'admin@gmail.com', 'admin', 'admin', 'doctor', 1824225928, 'dhaka', 'admin@gmail.com', 0, '2018-08-14 00:00:00', 'male', 8, 'http://localhost/HospitalManagement/public/assets/doctorimage/Capture3.PNG', NULL, '2018-08-15 00:00:00');

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
  `dep_name` varchar(255) NOT NULL,
  `dep_image` varchar(255) NOT NULL,
  `depertment_description` longtext NOT NULL,
  `dep_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depertment`
--

INSERT INTO `depertment` (`dep_id`, `dep_name`, `dep_image`, `depertment_description`, `dep_status`) VALUES
(1, 'dffd', 'dfdfdf', '', 0),
(6, 'Gynecology', 'http://localhost/HospitalManagement/public/assets/depertment/1.jpg', 'Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born wewill give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure sed rationally encounter consequences that are extremely painful.', 1),
(7, 'Urology', 'http://localhost/HospitalManagement/public/assets/depertment/10.jpg', 'Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born wewill give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure sed rationally encounter consequences that are extremely painful.', 1),
(8, 'Gastrology', 'http://localhost/HospitalManagement/public/assets/depertment/14.jpg', 'Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born wewill give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure sed rationally encounter consequences that are extremely painful.', 1),
(9, 'example', 'fdf', '', 1);

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
  `role` varchar(255) NOT NULL,
  `spcility` varchar(255) NOT NULL,
  `doc_username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `doc_image` varchar(255) NOT NULL,
  `Working_time` date NOT NULL,
  `doc_depid` int(3) NOT NULL,
  `City` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `join_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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

INSERT INTO `doctors` (`doc_id`, `first_name`, `last_name`, `date_of_Birth`, `email`, `gender`, `phone`, `Designation`, `role`, `spcility`, `doc_username`, `pass`, `doc_image`, `Working_time`, `doc_depid`, `City`, `address`, `join_date`, `facebook`, `status`, `tweet`, `instragram`, `linkdin`, `google_plus`) VALUES
(1, 'fdf', '11', '2018-07-03', '', '', '', '', 'employee', '', '', '', '', '0000-00-00', 8, '', '', '2018-07-31 17:12:28', '', 0, '', '', '', ''),
(11, 'alamin', 'hossain', '2018-07-26', 'md.alamin5928@gmail.com', 'male', '01822', '', 'employee', '', 'admin', 'admin@123', 'http://localhost/HospitalManagement/public/assets/doctorimage/8.jpg', '0000-00-00', 6, '', '', '2018-07-31 17:12:32', '', 1, '', '', '', ''),
(12, 'sdsd', 'ds', '2018-06-27', 'admin@gmail.com', 'male', '01824225928', '', 'employee', '', 'admin', 'admin@123', 'http://localhost/HospitalManagement/public/assets/doctorimage/11.jpg', '0000-00-00', 6, '', '', '2018-07-31 17:12:35', '', 1, '', '', '', ''),
(13, 'gfg', 'fgfgf', '2018-07-16', 'fgf', 'fgf', 'fg', '', 'employee', '', '', '', '', '0000-00-00', 1, '', '', '2018-07-31 17:12:37', '', 0, '', '', '', '');

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
(22, 5, 'xx', 'yy'),
(23, 5, 'xxx', 'yyyy'),
(24, 6, 'dfdf', 'm'),
(25, 6, 'ererere', 's2'),
(26, 7, 'dxdss', '575755555555555555555'),
(27, 7, '', ''),
(28, 8, 'dxdss', '575755555555555555555'),
(29, 8, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employ`
--

CREATE TABLE `employ` (
  `id` int(11) NOT NULL,
  `employ_docid` int(10) NOT NULL,
  `employ_staffid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employ`
--

INSERT INTO `employ` (`id`, `employ_docid`, `employ_staffid`) VALUES
(1, 13, 1),
(2, 12, 5);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(11) NOT NULL,
  `pat_first_name` varchar(255) NOT NULL,
  `pat_last_name` varchar(255) NOT NULL,
  `pat_phone` varchar(255) NOT NULL,
  `enter_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `age` varchar(20) NOT NULL,
  `patient_image` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pat_docid` int(10) NOT NULL,
  `patientsdepid` int(10) NOT NULL,
  `Status` tinyint(4) NOT NULL COMMENT '0 = In-Active, 1 = Active',
  `last_visit` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `pat_first_name`, `pat_last_name`, `pat_phone`, `enter_date`, `age`, `patient_image`, `gender`, `email`, `address`, `pat_docid`, `patientsdepid`, `Status`, `last_visit`) VALUES
(33, 'sdsd', 'sdsds', 'sdsd', '2018-07-29 11:44:35', '32', 'ererer', 'male', 'alamin@gmail.com', 'address', 1, 1, 1, '0000-00-00 00:00:00'),
(35, '', '', '', '2018-07-17 07:44:05', '', '', '', '', '', 1, 1, 0, '0000-00-00 00:00:00'),
(36, 'alamin', 'gggggggggg', '01824225928', '2018-07-29 11:44:40', '32', 'http://localhost/HospitalManagement/public/assets/Patients/1_(1).jpg', 'female', 'admin@gmail.com', 'dhaka', 1, 1, 0, '0000-00-00 00:00:00');

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
  `service_name` int(11) NOT NULL,
  `Payment_methot` int(10) NOT NULL,
  `pay_idstatusid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymentdetails`
--

CREATE TABLE `paymentdetails` (
  `payment_id` int(10) NOT NULL,
  `payment_servicid` int(10) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `rest_amount` varchar(255) NOT NULL
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
-- Table structure for table `service_chart`
--

CREATE TABLE `service_chart` (
  `id` int(10) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `deperment_name` varchar(255) NOT NULL,
  `service_price` varchar(255) NOT NULL,
  `service_status` tinyint(1) NOT NULL COMMENT '1 for active and 0 for inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_chart`
--

INSERT INTO `service_chart` (`id`, `service_type`, `service_name`, `deperment_name`, `service_price`, `service_status`) VALUES
(1, 'Investigation', 'rerer', 'Urology', '250', 0),
(2, 'Investigation', 'asd', 'Urology', '288', 0),
(3, 'Investigation', 'opration', 'Gynecology', '120', 0),
(6, '', '', 'Gynecology', '25', 0),
(11, 'Investigation', 'dfd', 'Gynecology', '258', 0),
(12, 'Investigation', 'dfdf', 'Gynecology', '300', 0),
(13, 'Investigation', 'ghgh', 'Gynecology', '100', 0),
(14, 'Treatments', 'sdsd', 'Gynecology', '250', 0),
(15, 'Treatments', 'sdsd', 'Gynecology', '300', 0),
(16, 'Investigation', 'alamin', 'Gynecology', '700', 0),
(17, 'Investigation', 'gdg', 'Urology', '120', 0),
(18, 'Investigation', 'dfdfdf', 'Urology', '25', 0),
(19, 'Treatments', 'new service', 'Urology', '260', 0),
(20, 'Investigation', 'alamin', 'dffd', '700', 0);

-- --------------------------------------------------------

--
-- Table structure for table `service_fee`
--

CREATE TABLE `service_fee` (
  `servic_id` int(10) NOT NULL,
  `patname_patientid` int(10) DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `enter_date` datetime NOT NULL,
  `age` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `order_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `total_amount` double NOT NULL,
  `taken_byadmin_id` int(10) NOT NULL,
  `payment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `staff_confirmpassword` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `Staff_image` varchar(255) NOT NULL,
  `ages` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `joiningdate` datetime NOT NULL,
  `eduction` text NOT NULL,
  `role` varchar(255) NOT NULL,
  `staff_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `first_name`, `last_name`, `email`, `pass`, `staff_confirmpassword`, `address`, `phone`, `Staff_image`, `ages`, `gender`, `joiningdate`, `eduction`, `role`, `staff_status`) VALUES
(1, ' sr alamn1ghgh', 'hossain', 'alamin@gmail.com', 'admin', '0', 'dhaka', '32', 'http://localhost/HospitalManagement/public/assets/Staff/17800016_1565413556833199_1970750778728872010_n.jpg', 23, 'male', '0000-00-00 00:00:00', '', 'employee', 1),
(5, 'alamin hossin', 'is ', 'ghgh@gmail.com', 'aklima', 'aklima', 'dhaka', '0182422598', 'http://localhost/HospitalManagement/public/assets/Staff/index.jpg', 25, 'male', '2018-07-02 00:00:00', 'bSx', 'employee', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staffdutytime`
--

CREATE TABLE `staffdutytime` (
  `duty_id` int(11) NOT NULL,
  `staff_id` int(10) NOT NULL,
  `overtime` varchar(255) NOT NULL
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
-- Table structure for table `word`
--

CREATE TABLE `word` (
  `word_id` int(10) NOT NULL,
  `word_name` varchar(255) NOT NULL,
  `word_status` tinyint(1) NOT NULL COMMENT '0 = In-Active, 1 = Active',
  `patient_name` varchar(255) NOT NULL,
  `allowDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dischargeDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `word`
--

INSERT INTO `word` (`word_id`, `word_name`, `word_status`, `patient_name`, `allowDate`, `dischargeDate`) VALUES
(1, '205000', 1, '0', '2018-07-26 11:49:00', '0000-00-00 00:00:00'),
(2, '204', 1, '0', '2018-07-26 11:49:00', '0000-00-00 00:00:00'),
(8, '2050', 1, '0', '2018-07-26 11:49:00', '0000-00-00 00:00:00'),
(9, 'w3', 1, '0', '2018-07-26 11:49:00', '0000-00-00 00:00:00'),
(10, 'm23', 0, '0', '2018-07-26 11:49:00', '0000-00-00 00:00:00');

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
  ADD KEY `doctrors_digrees_ibfk_1` (`Degree_Qulificationid`);

--
-- Indexes for table `employ`
--
ALTER TABLE `employ`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `patientsdepid` (`patientsdepid`);

--
-- Indexes for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  ADD PRIMARY KEY (`payment_id`);

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
-- Indexes for table `service_chart`
--
ALTER TABLE `service_chart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deperment_id` (`deperment_name`);

--
-- Indexes for table `service_fee`
--
ALTER TABLE `service_fee`
  ADD PRIMARY KEY (`servic_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `staffdutytime`
--
ALTER TABLE `staffdutytime`
  ADD PRIMARY KEY (`duty_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

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
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `apoinment`
--
ALTER TABLE `apoinment`
  MODIFY `app_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `depertment`
--
ALTER TABLE `depertment`
  MODIFY `dep_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctrors_digrees`
--
ALTER TABLE `doctrors_digrees`
  MODIFY `degre_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `employ`
--
ALTER TABLE `employ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `service_chart`
--
ALTER TABLE `service_chart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `service_fee`
--
ALTER TABLE `service_fee`
  MODIFY `servic_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staffdutytime`
--
ALTER TABLE `staffdutytime`
  MODIFY `duty_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `word`
--
ALTER TABLE `word`
  MODIFY `word_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  ADD CONSTRAINT `doctrors_digrees_ibfk_1` FOREIGN KEY (`Degree_Qulificationid`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_ibfk_3` FOREIGN KEY (`patientsdepid`) REFERENCES `depertment` (`dep_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
