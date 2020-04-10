-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2020 at 09:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corona`
--

-- --------------------------------------------------------

--
-- Table structure for table `center_data`
--

CREATE TABLE `center_data` (
  `state` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `center_name` varchar(100) CHARACTER SET latin7 NOT NULL,
  `email_address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `verification_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verified` int(2) NOT NULL DEFAULT 0,
  `postal_code` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `center_data`
--

INSERT INTO `center_data` (`state`, `center_name`, `email_address`, `verification_code`, `password1`, `verified`, `postal_code`) VALUES
('delhi', 'amanhospital', 'tyagi0776@gmail.com', '4a6c481a3f76745e665433dbdd432b3d', 'ccda1683d8c97f8f2dff2ea7d649b42c', 1, 471001),
('uttrakhand', 'anurag hospital', 'anuragsaxena2200@gmail.com', '5241effb2a631e658227ff06eeffd3cd', '81dc9bdb52d04dc20036dbd8313ed055', 1, 110052),
('uttrakhand', 'bhandhari hospital', 'bhandarihospital@gmail.com', 'a11e06058412ea76be795e11919d7642', 'c296539f3286a899d8b3f6632fd62274', 0, 110022),
('Uttarakhand', 'central hospital', 'centralhospitalexample@gmail.com', NULL, NULL, 0, 249401),
('delhi', 'gb-pant', 'gb-pant@gamil.com', 'd16c8bc4f9a685672e6b58e6114b9cdf', '76d80224611fc919a5d54f0ff9fba446', 0, 110029),
('Maharashtra', 'hajariprasad hospital', 'hajariprasadexample@gmail.com', NULL, NULL, 0, 249401),
('Uttarakhand', 'Jivan rekha hospital', 'jivanrekhaexample@gmail.com', NULL, NULL, 0, 244613),
('Hariyana', 'Krishna hospital', 'kirshnahospitalexmpl@gmail.com', NULL, NULL, 0, 121102),
('DELHI', 'LNJP', 'LNJP@gmail.com', NULL, NULL, 0, 11029),
('madhya pradesh', 'Prahlad Hospital', 'prahladprajapat9213@gamil.com', '0e68e2fc5484f551cec1f3a520849217', '827ccb0eea8a706c4c34a16891f84e7b', 0, 550026),
('delhi', 'yashhospital', 'yash.varshney003@gmail.com', '93f9395ca2dcf29afedcee0a2400ac0e', '81dc9bdb52d04dc20036dbd8313ed055', 1, 110044);

-- --------------------------------------------------------

--
-- Table structure for table `patientsform`
--

CREATE TABLE `patientsform` (
  `Set` int(11) NOT NULL DEFAULT 1,
  `id` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `age` int(2) NOT NULL,
  `hospitalemailid` varchar(40) COLLATE utf8_bin NOT NULL,
  `status` varchar(20) COLLATE utf8_bin NOT NULL,
  `Predisease` varchar(100) COLLATE utf8_bin NOT NULL,
  `admissiondate` date NOT NULL,
  `methodofinfection` text COLLATE utf8_bin NOT NULL,
  `treatementmethod` text COLLATE utf8_bin NOT NULL,
  `dischargedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `patientsform`
--

INSERT INTO `patientsform` (`Set`, `id`, `name`, `age`, `hospitalemailid`, `status`, `Predisease`, `admissiondate`, `methodofinfection`, `treatementmethod`, `dischargedate`) VALUES
(1, 1000, 'yash', 23, 'yash.varshney003@gmail.com', 'critical', '', '2020-03-25', 'Travel History : GERMANY', 'pcm', NULL),
(1, 1001, 'varsha', 23, 'anuragsaxena2200@gmail.com', 'stage1', '', '2020-04-06', 'came in contact with infextious person', 'CLST', NULL),
(1, 1002, 'yash', 18, 'anuragsaxena2200@gmail.com', 'stage2', '  heart disease', '2020-01-02', '  meet infectious person', '  ventilator', NULL),
(1, 1003, 'yash', 18, 'tyagi0776@gmail.com', 'stage4', '  jgkufkuyf', '2015-12-05', '', '  ugcukcyukctuk', '2021-12-01'),
(1, 1004, 'yash', 18, 'tyagi0776@gmail.com', 'stage1', '  jgkufkuyf', '2015-12-05', '  dckbwoicvubowcdbuos', '  ugcukcyukctuk', NULL),
(1, 1005, 'fatima', 65, 'yash.varshney003@gmail.com', 'stage1', 'Hypertensive heart disease', '2020-04-04', 'Travel History : IRAN', 'naproxen tablet', NULL),
(1, 1006, 'advit', 21, 'jivanrekhaexample@gmail.com', 'discharged', '', '2020-03-03', 'came in contact with infectious person', 'Percogesic', '2020-04-08'),
(1, 1007, 'aarav singh', 43, 'lnjp@gmail.com', 'stage2', '', '2020-03-17', 'came in contact with infectious person', 'Percogesic', NULL),
(1, 1008, 'gaurav', 36, 'bhandarihospital@gmail.com', 'discharged', '', '2020-03-08', 'came in contact with infectious person', 'Ventilator and indomethacin', '2020-04-04'),
(1, 1009, 'yash', 25, 'tyagi0776@gmail.com', 'discharged', '  heart', '2013-04-09', '  dharavi', '  ventilator', '2020-03-12'),
(1, 1010, 'raman sharma', 52, 'lnjp@gmail.com', 'stage2', 'Hypertensive heart disease', '2020-04-08', 'Travel History : CHINA', 'Motrin Suspension', NULL),
(1, 1011, 'aamir raza', 84, 'yash.varshney003@gmail.com', 'stage1', '', '2020-04-04', 'came in contact with infectious person', 'Ventilator and naproxen tablet', NULL),
(1, 1012, 'divya mehta', 53, 'anuragsaxena2200@gmail.com', 'stage2', '', '2020-03-23', 'came in contact with infectious person', 'ibuprofen', NULL),
(1, 1013, 'sumit sethi', 37, 'lnjp@gmail.com', 'stage1', 'Ischemic heart disease', '2020-03-27', 'came in contact with infectious person', 'Percogesic', NULL),
(1, 1014, 'aarti mittal', 24, 'jivanrekhaexample@gmail.com', 'discharged', '', '2020-02-26', 'came in contact with infectious person', 'indomethacin', '2020-03-18'),
(1, 1015, 'shahsui', 28, 'tyagi0776@gmail.com', 'discharged', '  dcecfecf', '2022-10-08', '  daravi', '  chlll', '2020-03-18'),
(1, 1016, 'kapil tiwari', 44, 'yash.varshney003@gmail.com', 'stage1', '', '2020-03-18', 'came in contact with infectious person', 'Indocin', '2020-04-08'),
(1, 1017, 'prabha pal', 45, 'anuragsaxena2200@gmail.com', 'critical', 'Hypertensive heart disease', '2020-03-17', 'came in contact with infectious person', 'Ventilator and naproxen tablet and indomethacin', NULL),
(1, 1018, 'vijay kundra', 49, 'prahladprajapat9213@gamil.com', 'dead', 'Ischemic heart disease', '2020-03-26', 'came in contact with infectious person', 'ibuprofen', '2020-04-06'),
(1, 1019, 'gurmeet singh', 68, 'prahladprajapat9213@gamil.com', 'discharged', '', '2020-03-02', 'came in contact with infectious person', 'naproxen tablet', '2020-03-24'),
(1, 1020, 'kunal kamboj', 31, 'lnjp@gmail.com', 'dead', 'Cerebrovascular disease', '2020-03-26', 'Travel History : IRAN', 'Ventilator and naproxen tablet', '2020-04-08'),
(1, 1021, 'Mayank saini', 38, 'bhandarihospital@gmail.com', 'stage3', '', '2020-03-20', 'Travel History : GERMANY', 'Percogesic and Motrin Suspension', NULL),
(1, 1022, 'himanshu singhal', 35, 'prahladprajapat9213@gamil.com', 'stage1', '', '2020-03-27', 'Travel History : USA', 'ibuprofen', NULL),
(1, 1023, 'kiran tyagi', 19, 'anuragsaxena2200@gmail.com', 'discharged', '', '2020-03-14', 'came in contact with infectious person', 'indomethacin', '2020-04-07'),
(1, 1024, 'archit mehra', 56, 'prahladprajapat9213@gamil.com', 'stage1', '', '2020-04-08', 'came in contact with infectious person', 'ibuprofen', NULL),
(1, 1025, 'hitesh kanan', 66, 'prahladprajapat9213@gamil.com', 'stage1', '', '2020-03-26', 'came in contact with infectious person', 'ibuprofen', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `center_data`
--
ALTER TABLE `center_data`
  ADD PRIMARY KEY (`center_name`,`postal_code`);

--
-- Indexes for table `patientsform`
--
ALTER TABLE `patientsform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patientsform`
--
ALTER TABLE `patientsform`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1026;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
