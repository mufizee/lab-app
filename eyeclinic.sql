-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 22, 2011 at 01:51 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eyeclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE IF NOT EXISTS `bills` (
  `patient_name` varchar(255) NOT NULL,
  `Diagnosis` varchar(255) NOT NULL,
  `prescription1` varchar(255) DEFAULT NULL,
  `prescription2` varchar(255) DEFAULT NULL,
  `prescription3` varchar(255) DEFAULT NULL,
  `prescription4` varchar(255) DEFAULT NULL,
  `prescription5` varchar(255) DEFAULT NULL,
  `prescription6` varchar(255) DEFAULT NULL,
  `prescription7` varchar(255) DEFAULT NULL,
  `prescription8` varchar(255) DEFAULT NULL,
  `prescription9` varchar(255) DEFAULT NULL,
  `prescription10` varchar(255) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `deposit` int(11) DEFAULT NULL,
  `personal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--


-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `personel` varchar(50) NOT NULL,
  `action` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`personel`, `action`, `date`, `time`) VALUES
('2', 'Registered new patient Akumbo Adelaja', '0000-00-00', '2011-07-15 09:52:01'),
('2', 'new patient record for ozoimi Chimma saved', '2011-07-15', '2011-07-15 10:03:23'),
('2', 'Registered new patient Kesantu Chimma', '2011-07-15', '2011-07-15 12:13:52'),
('2', 'new patient record for Kesantu Chimma saved', '2011-07-15', '2011-07-15 12:47:21'),
('4', 'Registered new patient hummbl Sabi', '2011-07-28', '2011-07-28 04:37:38'),
('4', 'Registered new patient Lasu Agara', '2011-07-28', '2011-07-28 04:45:53'),
('4', 'Registered new patient jonse Laya', '2011-07-28', '2011-07-28 04:48:58'),
('1', 'Registered new patient Sabina alaye', '2011-07-30', '2011-07-30 04:25:08');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `cellno` varchar(20) DEFAULT NULL,
  `otherno` varchar(20) DEFAULT NULL,
  `mrno` varchar(50) DEFAULT NULL,
  `hmo_name` varchar(255) DEFAULT NULL,
  `hmo_no` varchar(255) DEFAULT NULL,
  `ref_hospital` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `auth_code` varchar(255) DEFAULT NULL,
  `regTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Month` varchar(255) DEFAULT NULL,
  `bday` int(11) DEFAULT NULL,
  `personel` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `firstname`, `lastname`, `Gender`, `DOB`, `age`, `address`, `occupation`, `cellno`, `otherno`, `mrno`, `hmo_name`, `hmo_no`, `ref_hospital`, `company`, `auth_code`, `regTime`, `Month`, `bday`, `personel`) VALUES
(1, 'Kesantu', 'Leke', 'Female', '1997-01-03', 14, '35, Obembola street', 'Student', '03892849201', '', '', '', '', '', '', '', '2011-07-28 06:27:37', '07', 29, '2'),
(2, 'ozoimi', 'Chimma', 'Female', '1988-07-27', 23, 'Ogba', 'Teacher', '018112918', '', '', '', '', '', '', '', '2011-07-15 09:46:31', NULL, NULL, '2'),
(3, 'Salon', 'loke', 'Female', '1990-01-19', 21, 'Ikoyi, lagos', 'hair dresser', '08035672536', '', '', '', '', '', '', '', '2011-07-28 06:27:14', '07', 28, '2'),
(4, 'Akumbo', 'Adelaja', 'Female', '1981-11-20', 30, 'Adebiya Adeloke street, Ogba', 'Business woman', '0802743849', '', '', '', '', '', '', '', '2011-07-15 09:52:01', NULL, NULL, '2'),
(5, 'Kesantu', 'Chimma', 'Male', '2004-01-10', 7, 'Ogba, Lagos State', 'Teacher', '08023847974', '', '', '', '', '', '', '', '2011-07-15 12:13:52', NULL, NULL, '2'),
(6, 'hummbl', 'Sabi', 'Male', '2000-01-01', 11, 'Ogba', 'Stuby', '01234564433232', '', '', '', '', '', '', '', '2011-07-28 05:57:02', '07', NULL, '4'),
(7, 'Lasu', 'Agara', 'Male', '0000-00-00', 2011, '', '', '032145663', '', '', '', '', '', '', '', '2011-07-28 04:45:53', '', NULL, '4'),
(8, 'jonse', 'Laya', 'Male', '1985-03-08', 26, 'Ogba', 'Servant', '012332', '', 'exe3030', '', '', '', '', '', '2011-07-28 04:48:58', '03', NULL, '4'),
(9, 'Sabina', 'alaye', 'Female', '1981-02-05', 30, 'Oregun', 'Musician', '018112948', '', 'exe20', '', '', '', '', '', '2011-07-30 04:25:08', '02', 5, '1');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `Reciept_no` varchar(255) DEFAULT NULL,
  `MRno` varchar(255) DEFAULT NULL,
  `Time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Date` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `HMO` varchar(255) DEFAULT NULL,
  `HMOno` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Sex` varchar(255) DEFAULT NULL,
  `complaint` text,
  `diagnosisRE` text,
  `diagnosisLE` text,
  `vision_withoutgRE` varchar(255) DEFAULT NULL,
  `vision_withoutgLE` varchar(255) DEFAULT NULL,
  `nearvisionwithout_RE` varchar(255) DEFAULT NULL,
  `nearvisionwithout_LE` varchar(255) DEFAULT NULL,
  `vision_withgRE` varchar(255) DEFAULT NULL,
  `vision_withgLE` varchar(255) DEFAULT NULL,
  `nearvisionwith_RE` varchar(255) DEFAULT NULL,
  `nearvisionwith_LE` varchar(255) DEFAULT NULL,
  `lidsadnexaRE` varchar(255) DEFAULT NULL,
  `lidsadnexaLE` varchar(255) DEFAULT NULL,
  `conjuctivaRE` varchar(255) DEFAULT NULL,
  `conjuctivaLE` varchar(255) DEFAULT NULL,
  `corneaRE` varchar(255) DEFAULT NULL,
  `corneaLE` varchar(255) DEFAULT NULL,
  `ant_chamberRE` varchar(255) DEFAULT NULL,
  `ant_chamberLE` varchar(255) DEFAULT NULL,
  `irisRE` varchar(255) DEFAULT NULL,
  `irisLE` varchar(255) DEFAULT NULL,
  `pupilRE` varchar(255) DEFAULT NULL,
  `pupilLE` varchar(255) DEFAULT NULL,
  `lensRE` varchar(255) DEFAULT NULL,
  `lensLE` varchar(255) DEFAULT NULL,
  `op_mRE` varchar(255) DEFAULT NULL,
  `op_mLE` varchar(255) DEFAULT NULL,
  `tensionRE` varchar(255) DEFAULT NULL,
  `tensionLE` varchar(255) DEFAULT NULL,
  `lacductRE` varchar(255) DEFAULT NULL,
  `lacductLE` varchar(255) DEFAULT NULL,
  `autorefreading_od` varchar(255) DEFAULT NULL,
  `autorefreading_os` varchar(255) DEFAULT NULL,
  `subjectivereading_od` varchar(255) DEFAULT NULL,
  `subjectivereading_os` varchar(255) DEFAULT NULL,
  `nearreading_OD` varchar(255) DEFAULT NULL,
  `nearreading_OS` varchar(255) DEFAULT NULL,
  `fundus_od` varchar(255) DEFAULT NULL,
  `fundus_os` varchar(255) DEFAULT NULL,
  `treatment` text,
  `diabetic` varchar(255) DEFAULT NULL,
  `hypertensive` varchar(255) DEFAULT NULL,
  `asthmatic` varchar(255) DEFAULT NULL,
  `allergies` varchar(255) DEFAULT NULL,
  `cardiac` varchar(255) DEFAULT NULL,
  `others` varchar(255) DEFAULT NULL,
  `urinesugar` varchar(255) DEFAULT NULL,
  `bp` varchar(255) DEFAULT NULL,
  `personel` varchar(50) DEFAULT NULL,
  `bills_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`Reciept_no`, `MRno`, `Time`, `Date`, `name`, `Age`, `HMO`, `HMOno`, `Address`, `Sex`, `complaint`, `diagnosisRE`, `diagnosisLE`, `vision_withoutgRE`, `vision_withoutgLE`, `nearvisionwithout_RE`, `nearvisionwithout_LE`, `vision_withgRE`, `vision_withgLE`, `nearvisionwith_RE`, `nearvisionwith_LE`, `lidsadnexaRE`, `lidsadnexaLE`, `conjuctivaRE`, `conjuctivaLE`, `corneaRE`, `corneaLE`, `ant_chamberRE`, `ant_chamberLE`, `irisRE`, `irisLE`, `pupilRE`, `pupilLE`, `lensRE`, `lensLE`, `op_mRE`, `op_mLE`, `tensionRE`, `tensionLE`, `lacductRE`, `lacductLE`, `autorefreading_od`, `autorefreading_os`, `subjectivereading_od`, `subjectivereading_os`, `nearreading_OD`, `nearreading_OS`, `fundus_od`, `fundus_os`, `treatment`, `diabetic`, `hypertensive`, `asthmatic`, `allergies`, `cardiac`, `others`, `urinesugar`, `bp`, `personel`, `bills_total`) VALUES
('', 'exe10', '0000-00-00 00:00:00', '2011-07-15', 'ozoimi Chimma', 23, '', '', 'Ogba', 'Female', 'Poor sight', 'Left eye retina weak', '', 'No much problems', 'Plenti', NULL, NULL, '2', 'sdff', NULL, NULL, 'sfasdf', 'sdfsdf', 'sdfs', 'sdfsf', 'sfdf', 'sdfdf', 'sdfsd', 'sfsdf', 'sdfsdf', 'sdfsfdf', 'sdfds', 'sfsdf', 'sdfdf', 'sdfdf', '', 'sddsf', 'sdfsdf', 'sdfsf', '', 'sdfsf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsf', 'sdfsf', 'sdfsdf', 'sdfsdf', 'sfsdf', 'dsfsdf', 'sdfsdf', 'sdfsf', 'sdfsdf', 'sdfdsf', 'sdff', '', 'sdfsdf', 'sdfdsf', '2', 10000),
('', 'exe20', '2011-07-15 12:49:44', '2011-07-15', 'Kesantu Chimma', 7, '', '', 'Ogba, Lagos State', 'Male', 'Poor sight', 'Sincinati lacture', 'Not selectorus', '6/36', '6/36', NULL, NULL, '6/6', '6/6', NULL, NULL, '', '', '', '', '', '9/30', '', '', '', '', '60/60', '', '', '', '', '', '', '', '', '', '80/80', '', '', '', '', '', '', '', 'Needs a lot of eye care drugs and antimaladox ', 'Selagosi', '', '', 'Montgomia', '', '', '', '', '2', 0),
('', '', '2011-07-17 20:58:34', '2011-07-17', 'ozoimi Chimma', 23, '', '', 'Ogba', 'Female', 'Poor sight', '', '', '', '', '6/90', '6/90', '', '', '6/900000', '6/9003637', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '60 offset', '60 outset', '', '', 'none inset', 'none subset', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'inter fo', '', '', '2', 0),
('', 'exe3030', '2011-07-29 18:24:57', '0000-00-00', 'jonse Laya', 26, '', '', 'Ogba', 'Male', 'Sick in the head', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 0),
('', 'exe3030', '2011-07-29 18:26:46', '0000-00-00', 'jonse Laya', 26, '', '', 'Ogba', 'Male', 'Wrokin sight', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 0),
('', 'exe3030', '2011-07-29 18:27:41', '0000-00-00', 'jonse Laya', 26, '', '', 'Ogba', 'Male', 'Come here again o', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 0),
('', 'exe3030', '2011-07-29 18:28:55', '2012-01-01', 'jonse Laya', 26, '', '', 'Ogba', 'Male', 'Jojo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 0),
('', '', '2011-07-30 03:42:31', '0000-00-00', 'Kesantu Leke', 14, '', '', '35, Obembola street', 'Female', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) NOT NULL,
  `password` varchar(25) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) NOT NULL,
  `DOB` varchar(25) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `level` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `phone2` varchar(25) DEFAULT NULL,
  `nextofkin` varchar(50) DEFAULT NULL,
  `nokphone` varchar(25) DEFAULT NULL,
  `marritalStats` varchar(25) DEFAULT NULL,
  `spouse` varchar(255) DEFAULT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `DOB`, `Gender`, `level`, `phone`, `phone2`, `nextofkin`, `nokphone`, `marritalStats`, `spouse`, `Time`) VALUES
(1, 'mugu', 'simbi', 'alive', NULL, 'somga', '1990/3/22', 'Female', 'staff', '01113921', NULL, NULL, NULL, NULL, NULL, '2011-07-14 12:21:04'),
(2, 'Grando', 'kool', 'Grando', '', 'Madagasca', '1989/1/1', 'Male', 'staff', '018113916', '', '', '', 'single', '', '2011-07-14 12:30:22'),
(3, 'muna', 'muna', 'muna', '', 'muna', '2012/1/1', 'Male', 'staff', '01113922', '', '', '', 'married', '', '2011-07-24 20:55:27'),
(4, 'china', 'china', 'China', '', 'Ozoemelam', '1987/7/11', 'Female', 'staff', '0922111', '', '', '', 'single', '', '2011-07-25 15:37:24'),
(5, 'Cecemiye', 'love', 'Chinagorom', '', 'Ozoemelam', '//', 'Male', 'staff', '08131162', '', '', '', 'single', '', '2011-07-28 05:19:12'),
(6, 'Kesiena', 'baby', 'Kessy', '', 'Ozoemelam', '//', 'Male', 'staff', '08131162', '', '', '', '', '', '2011-07-28 05:21:46');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `item_name` varchar(255) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `personel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`item_name`, `item_type`, `quantity`, `unit_price`, `personel`) VALUES
('Gucci', '', 5, 15000, ''),
('Bonacchi', 'drug', 4, 20000, ''),
('Polo', 'frames', 2, 12000, ''),
('Eyedrop', 'drug', 20, 3000, ''),
('Designers', 'Glasses', 20, 8000, ''),
('International', 'frames', 5, 2000, '');
