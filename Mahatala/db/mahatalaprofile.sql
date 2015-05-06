-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2015 at 04:10 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mahatalaprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `IDclient` int(11) NOT NULL AUTO_INCREMENT,
  `NamaClient` varchar(100) NOT NULL,
  `DeksripsiClients` text,
  `Email` varchar(100) DEFAULT NULL,
  `NomerTelpn` varchar(100) NOT NULL,
  PRIMARY KEY (`IDclient`),
  UNIQUE KEY `NamaClient` (`NamaClient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`IDclient`, `NamaClient`, `DeksripsiClients`, `Email`, `NomerTelpn`) VALUES
(1, 'RSUD Panti Rapih', 'Suspendisse lacinia condimentum enim ut ', 'PantiRapih@gov.id.id', ''),
(2, 'Pak Jajang', 'Suspendisse lacinia condimentum enim ut fermentum. Maecenas nec rutrum elit, rutrum varius erat. Integer a tellus cursus, pellentesque sem ut, vulputate nisl. Cras scelerisque pellentesque ', 'PakjajangCakep@gmail.com', ''),
(3, 'Panti Asuhan', 'asdasdsa', 'krishna.kalvin@gmail.com', ''),
(4, 'Putra', 'Blalablballal', 'putra@gmail.com', ''),
(28, 'Widji', 'Gamescool', 'krishna.kalvin@gmail.com', '08575699090');

-- --------------------------------------------------------

--
-- Table structure for table `emailmasuk`
--

CREATE TABLE IF NOT EXISTS `emailmasuk` (
  `IDusers` int(11) NOT NULL AUTO_INCREMENT,
  `NamaPengirim` varchar(50) NOT NULL,
  `Message` varchar(300) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Subject` int(10) NOT NULL,
  PRIMARY KEY (`IDusers`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `keteranganjobs`
--

CREATE TABLE IF NOT EXISTS `keteranganjobs` (
  `IDs` int(11) NOT NULL AUTO_INCREMENT,
  `IDjobsdata` int(11) NOT NULL,
  `List` varchar(50) NOT NULL,
  PRIMARY KEY (`IDs`),
  KEY `IDjobsdata` (`IDjobsdata`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `keteranganjobs`
--

INSERT INTO `keteranganjobs` (`IDs`, `IDjobsdata`, `List`) VALUES
(1, 3, 'LOL'),
(3, 3, 'Lel'),
(4, 3, 'Lul'),
(5, 3, 'hai'),
(6, 3, 'hai'),
(7, 3, 'oloes'),
(8, 3, 'woles'),
(9, 3, 'OLeh'),
(11, 3, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `mahanet`
--

CREATE TABLE IF NOT EXISTS `mahanet` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(50) NOT NULL,
  `CompanyProf` text NOT NULL,
  `Kota` varchar(100) NOT NULL,
  `Alamat` text NOT NULL,
  `NomerTelpon` varchar(50) NOT NULL,
  `BBM` text NOT NULL,
  `IZIN` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Handphone` varchar(50) NOT NULL,
  `IMG` varchar(80) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mahanet`
--

INSERT INTO `mahanet` (`ID`, `CompanyName`, `CompanyProf`, `Kota`, `Alamat`, `NomerTelpon`, `BBM`, `IZIN`, `Email`, `Handphone`, `IMG`) VALUES
(1, 'CV.Mahatala', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.\r\n\r\nProin laoreet dui felis, ac dictum diam molestie eget. Nunc sodales, est sit amet aliquet aliquam, sem eros congue erat, vel dignissim quam quam quis lorem. Sed dui massa, hendrerit ac risus eu, consectetur interdum orci. Maecenas cursus sapien nec urna hendrerit, id semper dolor finibus. Mauris condimentum nunc quam, sit amet blandit leo vulputate a. Phasellus blandit porttitor erat, eu efficitur metus fermentum id. Praesent eget tortor dolor. Aenean faucibus vestibulum dolor ac sagittis. Praesent congue, lorem non elementum maximus, erat nunc scelerisque ante, et efficitur turpis tellus et lorem. Vivamus sodales laoreet arcu sit amet faucibus. Morbi sed justo vulputate, eleifend erat eu, aliquam quam. Quisque non ante ex. Nullam quis tellus at sem pulvinar ultricies ut ut arcu. Morbi elementum lorem felis, nec pharetra purus commodo at. Pellentesque et ligula sit amet ipsum congue porttitor. In ac suscipit metus.\r\n\r\nPhasellus ultrices dui sit amet nunc molestie, in dignissim orci dignissim. Curabitur iaculis quam est, non tristique augue vestibulum sed. Vestibulum nec tempus lectus. Aliquam erat volutpat. Fusce porttitor urna mauris, quis posuere felis laoreet nec. Cras eu nulla ut dolor laoreet blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam neque tortor, suscipit eu gravida a, imperdiet nec quam. Phasellus sed nibh ut enim ultricies blandit ac nec velit. Vestibulum lacus urna, auctor hendrerit augue a, semper faucibus metus. Pellentesque commodo risus sed tellus tempus semper. Suspendisse potenti. Nulla vitae efficitur risus.\r\n\r\nCras vestibulum sem vitae fringilla tristique. Nunc varius, orci eget auctor commodo, nisi elit luctus est, ut auctor magna lectus eu sapien. Vestibulum porttitor orci lacus, quis dignissim libero tempor ut. Fusce luctus auctor quam, fermentum aliquam dui suscipit vel. Sed ac lacus a sapien commodo feugiat. Nam sagittis enim vitae maximus cursus. Mauris interdum iaculis enim, eget ultricies dolor malesuada sagittis. Fusce eget neque turpis. Pellentesque convallis nisl sit amet ornare lobortis. Maecenas dolor sem, maximus nec tempor nec, venenatis id leo. Duis vehicula ac est sed tempor. Sed lacinia in nisi quis gravida.', 'Yogyakarta', 'Jl. Kepuhsari No. 39C RT 007/RW OO5 Maguwoharjo', '(0274)-3297212', '22AEE78F', 'SIUP : 503/0355/MKR/XI/2011', 'mahnet.jogja@gmail.com', '0878-38-512-707', 'Tulips.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mahatalajobs`
--

CREATE TABLE IF NOT EXISTS `mahatalajobs` (
  `IDjobs` int(11) NOT NULL AUTO_INCREMENT,
  `Kode` enum('WD','NW','SD','EDP') NOT NULL,
  `NamaJobs` varchar(50) NOT NULL,
  `DeskripsiJob` text NOT NULL,
  `Logo` varchar(20) NOT NULL,
  `SampleImage` varchar(50) NOT NULL,
  `SampleImage2` varchar(50) NOT NULL,
  `SampleImage3` varchar(50) NOT NULL,
  PRIMARY KEY (`IDjobs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mahatalajobs`
--

INSERT INTO `mahatalajobs` (`IDjobs`, `Kode`, `NamaJobs`, `DeskripsiJob`, `Logo`, `SampleImage`, `SampleImage2`, `SampleImage3`) VALUES
(1, 'WD', 'Web Desain', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'fa-globe', '1.png', '4.jpg', '2.jpg'),
(2, 'SD', 'Software Developtment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'fa-database', '2.jpg', '1.png', '4.jpg'),
(3, 'NW', 'Networking Solution', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'fa-signal', '3.jpg', '4.jpg', '2.jpg'),
(4, 'EDP', 'Electronic Device Procunument', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'fa-bar-chart', '4.jpg', '2.jpg', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `mahatalajobsdata`
--

CREATE TABLE IF NOT EXISTS `mahatalajobsdata` (
  `IDjobdata` int(11) NOT NULL AUTO_INCREMENT,
  `IDjobs` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `StartForm` int(100) NOT NULL,
  `Booming` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDjobdata`),
  KEY `IDjobs` (`IDjobs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=148 ;

--
-- Dumping data for table `mahatalajobsdata`
--

INSERT INTO `mahatalajobsdata` (`IDjobdata`, `IDjobs`, `Nama`, `StartForm`, `Booming`) VALUES
(1, 2, 'Software Pembuat Keputusan', 900, 0),
(3, 2, 'Softaware Ikan Teri', 900, 0),
(4, 2, 'Softaware Ikan Teri', 900, 0),
(5, 2, 'Softaware Ikan Teri', 900, 0),
(6, 2, 'Softaware Ikan Teri', 900, 0),
(7, 2, 'Softaware Ikan Teri', 900, 0),
(8, 2, 'Softaware Ikan Teri', 900, 0),
(9, 2, 'Softaware Ikan Teri', 900, 0),
(10, 2, 'Softaware Ikan Teri', 900, 0),
(11, 2, 'Softaware Ikan Teri', 900, 0),
(12, 2, 'Softaware Ikan Teri', 900, 0),
(13, 2, 'Softaware Ikan Teri', 900, 0),
(14, 2, 'Softaware Ikan Teri', 900, 0),
(15, 2, 'Softaware Ikan Teri', 900, 0),
(16, 2, 'Softaware Ikan Teri', 900, 0),
(17, 2, 'Softaware Ikan Teri', 900, 0),
(18, 2, 'Softaware Ikan Teri', 900, 0),
(19, 2, 'Software Pembuat Keputusan', 900, 0),
(20, 2, 'Software Pembuat Keputusan', 900, 0),
(21, 2, 'Software Pembuat Keputusan', 900, 0),
(22, 2, 'Software Pembuat Keputusan', 900, 0),
(23, 2, 'Software Pembuat Keputusan', 900, 0),
(24, 2, 'Software Pembuat Keputusan', 900, 0),
(25, 2, 'Software Pembuat Keputusan', 900, 0),
(26, 2, 'Software Pembuat Keputusan', 900, 0),
(27, 2, 'Software Pembuat Keputusan', 900, 0),
(28, 2, 'Software Pembuat Keputusan', 900, 0),
(29, 2, 'Software Pembuat Keputusan', 900, 0),
(30, 2, 'Software Pembuat Keputusan', 900, 0),
(31, 2, 'Software Pembuat Keputusan', 900, 0),
(32, 2, 'Software Pembuat Keputusan', 900, 0),
(33, 2, 'Software Pembuat Keputusan', 900, 0),
(34, 2, 'Software Pembuat Keputusan', 900, 0),
(35, 2, 'Software Pembuat Keputusan', 900, 0),
(36, 2, 'Software Pembuat Keputusan', 900, 0),
(37, 2, 'Software Pembuat Keputusan', 900, 0),
(38, 2, 'Software Pembuat Keputusan', 900, 0),
(39, 2, 'Software Pembuat Keputusan', 900, 0),
(40, 2, 'Software Pembuat Keputusan', 900, 0),
(41, 2, 'Software Pembuat Keputusan', 900, 0),
(42, 2, 'Software Pembuat Keputusan', 900, 0),
(43, 2, 'Software Pembuat Keputusan', 900, 0),
(44, 2, 'Software Pembuat Keputusan', 900, 0),
(45, 2, 'Software Pembuat Keputusan', 900, 0),
(46, 2, 'Software Pembuat Keputusan', 900, 0),
(47, 2, 'Software Pembuat Keputusan', 900, 0),
(48, 2, 'Software Pembuat Keputusan', 900, 0),
(49, 2, 'Software Pembuat Keputusan', 900, 0),
(50, 2, 'Software Pembuat Keputusan', 900, 0),
(51, 2, 'Software Pembuat Keputusan', 900, 0),
(52, 2, 'Software Pembuat Keputusan', 900, 0),
(53, 2, 'Software Pembuat Keputusan', 900, 0),
(54, 2, 'Software Pembuat Keputusan', 900, 0),
(55, 2, 'Software Pembuat Keputusan', 900, 0),
(56, 2, 'Software Pembuat Keputusan', 900, 0),
(57, 2, 'Software Pembuat Keputusan', 900, 0),
(58, 2, 'Software Pembuat Keputusan', 900, 0),
(59, 2, 'Software Pembuat Keputusan', 900, 0),
(60, 2, 'Software Pembuat Keputusan', 900, 0),
(61, 2, 'Software Pembuat Keputusan', 900, 0),
(62, 2, 'Software Pembuat Keputusan', 900, 0),
(63, 2, 'Software Pembuat Keputusan', 900, 0),
(64, 2, 'Software Pembuat Keputusan', 900, 0),
(65, 2, 'Software Pembuat Keputusan', 900, 0),
(66, 2, 'Software Pembuat Keputusan', 900, 0),
(67, 2, 'Software Pembuat Keputusan', 900, 0),
(68, 2, 'Software Pembuat Keputusan', 900, 0),
(69, 2, 'Software Pembuat Keputusan', 900, 0),
(70, 2, 'Software Pembuat Keputusan', 900, 0),
(71, 2, 'Software Pembuat Keputusan', 900, 0),
(72, 2, 'Software Pembuat Keputusan', 900, 0),
(73, 2, 'Software Pembuat Keputusan', 900, 0),
(74, 2, 'Software Pembuat Keputusan', 900, 0),
(75, 2, 'Software Pembuat Keputusan', 900, 0),
(76, 2, 'Software Pembuat Keputusan', 900, 0),
(77, 2, 'Software Pembuat Keputusan', 900, 0),
(78, 2, 'Software Pembuat Keputusan', 900, 0),
(79, 2, 'Software Pembuat Keputusan', 900, 0),
(80, 2, 'Software Pembuat Keputusan', 900, 0),
(81, 2, 'Software Pembuat Keputusan', 900, 0),
(82, 2, 'Software Pembuat Keputusan', 900, 0),
(83, 2, 'Software Pembuat Keputusan', 900, 0),
(84, 2, 'Software Pembuat Keputusan', 900, 0),
(85, 2, 'Software Pembuat Keputusan', 900, 0),
(86, 2, 'Software Pembuat Keputusan', 900, 0),
(87, 2, 'Software Pembuat Keputusan', 900, 0),
(88, 2, 'Software Pembuat Keputusan', 900, 0),
(89, 2, 'Software Pembuat Keputusan', 900, 0),
(90, 2, 'Software Pembuat Keputusan', 900, 0),
(91, 2, 'Software Pembuat Keputusan', 900, 0),
(92, 2, 'Software Pembuat Keputusan', 900, 0),
(93, 2, 'Software Pembuat Keputusan', 900, 0),
(94, 2, 'Software Pembuat Keputusan', 900, 0),
(95, 2, 'Software Pembuat Keputusan', 900, 0),
(96, 2, 'Software Pembuat Keputusan', 900, 0),
(97, 2, 'Software Pembuat Keputusan', 900, 0),
(98, 2, 'Software Pembuat Keputusan', 900, 0),
(99, 2, 'Software Pembuat Keputusan', 900, 0),
(100, 2, 'Software Pembuat Keputusan', 900, 0),
(101, 2, 'Software Pembuat Keputusan', 900, 0),
(102, 2, 'Software Pembuat Keputusan', 900, 0),
(103, 2, 'Software Pembuat Keputusan', 900, 0),
(104, 2, 'Software Pembuat Keputusan', 900, 0),
(105, 2, 'Software Pembuat Keputusan', 900, 0),
(106, 2, 'Software Pembuat Keputusan', 900, 0),
(107, 2, 'Software Pembuat Keputusan', 900, 0),
(108, 2, 'Software Pembuat Keputusan', 900, 0),
(109, 2, 'Software Pembuat Keputusan', 900, 0),
(110, 2, 'Software Pembuat Keputusan', 900, 0),
(111, 2, 'Software Pembuat Keputusan', 900, 0),
(112, 2, 'Software Pembuat Keputusan', 900, 0),
(113, 2, 'Software Pembuat Keputusan', 900, 0),
(114, 2, 'Software Pembuat Keputusan', 900, 0),
(115, 2, 'Software Pembuat Keputusan', 900, 0),
(116, 2, 'Software Pembuat Keputusan', 900, 0),
(117, 2, 'Software Pembuat Keputusan', 900, 0),
(118, 2, 'Software Pembuat Keputusan', 900, 0),
(119, 2, 'Software Pembuat Keputusan', 900, 0),
(120, 2, 'Software Pembuat Keputusan', 900, 0),
(121, 2, 'Software Pembuat Keputusan', 900, 0),
(122, 2, 'Software Pembuat Keputusan', 900, 0),
(123, 2, 'Software Pembuat Keputusan', 900, 0),
(124, 2, 'Software Pembuat Keputusan', 900, 0),
(125, 2, 'Software Pembuat Keputusan', 900, 0),
(126, 2, 'Software Pembuat Keputusan', 900, 0),
(127, 2, 'Software Pembuat Keputusan', 900, 0),
(128, 2, 'Software Pembuat Keputusan', 900, 0),
(129, 2, 'Software Pembuat Keputusan', 900, 0),
(130, 2, 'Software Pembuat Keputusan', 900, 0),
(131, 2, 'Software Pembuat Keputusan', 900, 0),
(132, 2, 'Software Pembuat Keputusan', 900, 0),
(133, 2, 'Software Pembuat Keputusan', 900, 0),
(134, 2, 'Software Pembuat Keputusan', 900, 0),
(135, 2, 'Software Pembuat Keputusan', 900, 0),
(136, 2, 'Software Pembuat Keputusan', 900, 0),
(137, 2, 'Software Pembuat Keputusan', 900, 0),
(138, 2, 'Software Pembuat Keputusan', 900, 0),
(139, 2, 'Software Pembuat Keputusan', 900, 0),
(140, 2, 'Software Pembuat Keputusan', 900, 0),
(141, 2, 'Software Pembuat Keputusan', 900, 0),
(142, 2, 'Software Pembuat Keputusan', 900, 0),
(143, 2, 'Software Pembuat Keputusan', 900, 0),
(144, 2, 'Software Pembuat Keputusan', 900, 0),
(145, 2, 'Software Pembuat Keputusan', 900, 0),
(146, 2, 'Software Pembuat Keputusan', 900, 0),
(147, 2, 'Software Pembuat Keputusan', 900, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orderqueue`
--

CREATE TABLE IF NOT EXISTS `orderqueue` (
  `IDqueu` int(11) NOT NULL AUTO_INCREMENT,
  `Customer` varchar(50) NOT NULL,
  `NamaJob` varchar(50) NOT NULL,
  `DeskripsitJob` text NOT NULL,
  `JenisJob` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Accept` enum('accept','not accept') NOT NULL DEFAULT 'not accept',
  PRIMARY KEY (`IDqueu`),
  KEY `JenisJob` (`JenisJob`),
  KEY `Customer` (`Customer`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orderqueue`
--

INSERT INTO `orderqueue` (`IDqueu`, `Customer`, `NamaJob`, `DeskripsitJob`, `JenisJob`, `Date`, `Accept`) VALUES
(3, 'Widji', 'Pembuatan Software Polantas', 'Kita Berkeinginan untuk membuat software pelaksanaan polantas.', 2, '2015-04-27 03:06:29', 'accept');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `IDproject` int(11) NOT NULL AUTO_INCREMENT,
  `Client` varchar(100) NOT NULL,
  `NamaProject` varchar(50) NOT NULL,
  `DeskripsionClient` text NOT NULL,
  `Location` varchar(50) DEFAULT NULL,
  `JenisJob` int(11) NOT NULL,
  `Status` enum('SELESAI','BELUM SELESAI') NOT NULL DEFAULT 'BELUM SELESAI',
  `ACCEPTED` enum('Accept','Not Accept') NOT NULL DEFAULT 'Not Accept',
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Cover` varchar(30) NOT NULL DEFAULT 'Default.png',
  PRIMARY KEY (`IDproject`),
  KEY `JenisJob` (`JenisJob`),
  KEY `Status` (`Status`),
  KEY `Client` (`Client`),
  KEY `Cover` (`Cover`),
  KEY `Cover_2` (`Cover`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`IDproject`, `Client`, `NamaProject`, `DeskripsionClient`, `Location`, `JenisJob`, `Status`, `ACCEPTED`, `Date`, `Cover`) VALUES
(1, 'RSUD Panti Rapih', 'Pembuatan Website RSUD Panti Rapih', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.\n\nProin laoreet dui felis, ac dictum diam molestie eget. Nunc sodales, est sit amet aliquet aliquam, sem eros congue erat, vel dignissim quam quam quis lorem. Sed dui massa, hendrerit ac risus eu, consectetur interdum orci. Maecenas cursus sapien nec urna hendrerit, id semper dolor finibus. Mauris condimentum nunc quam, sit amet blandit leo vulputate a. Phasellus blandit porttitor erat, eu efficitur metus fermentum id. Praesent eget tortor dolor. Aenean faucibus vestibulum dolor ac sagittis. Praesent congue, lorem non elementum maximus, erat nunc scelerisque ante, et efficitur turpis tellus et lorem. Vivamus sodales laoreet arcu sit amet faucibus. Morbi sed justo vulputate, eleifend erat eu, aliquam quam. Quisque non ante ex. Nullam quis tellus at sem pulvinar ultricies ut ut arcu. Morbi elementum lorem felis, nec pharetra purus commodo at. Pellentesque et ligula sit amet ipsum congue porttitor. In ac suscipit metus.\n\nPhasellus ultrices dui sit amet nunc molestie, in dignissim orci dignissim. Curabitur iaculis quam est, non tristique augue vestibulum sed. Vestibulum nec tempus lectus. Aliquam erat volutpat. Fusce porttitor urna mauris, quis posuere felis laoreet nec. Cras eu nulla ut dolor laoreet blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam neque tortor, suscipit eu gravida a, imperdiet nec quam. Phasellus sed nibh ut enim ultricies blandit ac nec velit. Vestibulum lacus urna, auctor hendrerit augue a, semper faucibus metus. Pellentesque commodo risus sed tellus tempus semper. Suspendisse potenti. Nulla vitae efficitur risus.\n\nCras vestibulum sem vitae fringilla tristique. Nunc varius, orci eget auctor commodo, nisi elit luctus est, ut auctor magna lectus eu sapien. Vestibulum porttitor orci lacus, quis dignissim libero tempor ut. Fusce luctus auctor quam, fermentum aliquam dui suscipit vel. Sed ac lacus a sapien commodo feugiat. Nam sagittis enim vitae maximus cursus. Mauris interdum iaculis enim, eget ultricies dolor malesuada sagittis. Fusce eget neque turpis. Pellentesque convallis nisl sit amet ornare lobortis. Maecenas dolor sem, maximus nec tempor nec, venenatis id leo. Duis vehicula ac est sed tempor. Sed lacinia in nisi quis gravida.', 'Yogya', 2, 'SELESAI', 'Accept', '2015-04-08 00:00:00', 'earth.png'),
(2, 'RSUD Panti Rapih', 'Sistem Kereta PT KAI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'JawaTimur', 2, 'SELESAI', 'Accept', '2015-04-30 00:00:00', 'IMG09.jpg'),
(3, 'RSUD Panti Rapih', 'Sistem Pembangkit Landasan PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'Serang', 1, 'SELESAI', 'Accept', '2015-08-15 00:00:00', 'Penguins.jpg'),
(4, 'Pak Jajang', 'Sistem Permanas Udara PT Angkasa Pura 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ', 'Serang', 1, 'SELESAI', 'Accept', '2015-08-22 00:00:00', 'IMG14.jpg'),
(14, 'RSUD Panti Rapih', 'PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ', 'Serang', 1, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG10.jpg'),
(15, 'RSUD Panti Rapih', 'PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ', 'Serang', 3, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG01.jpg'),
(16, 'Panti Asuhan', 'PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ', 'Serang', 1, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG09.jpg'),
(17, 'RSUD Panti Rapih', 'Angkutan Udara PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'Serang', 4, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG11.jpg'),
(18, 'RSUD Panti Rapih', 'PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ', 'Serang', 3, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG01.jpg'),
(19, 'RSUD Panti Rapih', 'Angkutan Udara PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'Serang', 3, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG06.jpg'),
(20, 'Pak Jajang', 'Angkutan Udara PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'Serang', 3, 'BELUM SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG05.jpg'),
(21, 'RSUD Panti Rapih', 'Angkutan Udara PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'Serang', 3, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG03.jpg'),
(22, 'RSUD Panti Rapih', 'Angkutan Udara PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'Serang', 4, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG07.jpg'),
(23, 'Pak Jajang', 'Angkutan Udara PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'Serang', 4, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG07.jpg'),
(24, 'RSUD Panti Rapih', 'Angkutan Udara PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'Serang', 4, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG07.jpg'),
(25, 'RSUD Panti Rapih', 'PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ', 'Serang', 3, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG01.jpg'),
(26, 'RSUD Panti Rapih', 'PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ', 'Serang', 1, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG01.jpg'),
(27, 'Pak Jajang', 'Angkutan Udara PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'Serang', 4, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG07.jpg'),
(28, 'Pak Jajang', 'Sistem Permanas Udara PT Angkasa Pura 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ', 'Serang', 3, 'SELESAI', 'Accept', '2015-08-22 00:00:00', 'IMG14.jpg'),
(29, 'RSUD Panti Rapih', 'Pembuatan Website RSUD Panti Rapih', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.\r\n\r\nProin laoreet dui felis, ac dictum diam molestie eget. Nunc sodales, est sit amet aliquet aliquam, sem eros congue erat, vel dignissim quam quam quis lorem. Sed dui massa, hendrerit ac risus eu, consectetur interdum orci. Maecenas cursus sapien nec urna hendrerit, id semper dolor finibus. Mauris condimentum nunc quam, sit amet blandit leo vulputate a. Phasellus blandit porttitor erat, eu efficitur metus fermentum id. Praesent eget tortor dolor. Aenean faucibus vestibulum dolor ac sagittis. Praesent congue, lorem non elementum maximus, erat nunc scelerisque ante, et efficitur turpis tellus et lorem. Vivamus sodales laoreet arcu sit amet faucibus. Morbi sed justo vulputate, eleifend erat eu, aliquam quam. Quisque non ante ex. Nullam quis tellus at sem pulvinar ultricies ut ut arcu. Morbi elementum lorem felis, nec pharetra purus commodo at. Pellentesque et ligula sit amet ipsum congue porttitor. In ac suscipit metus.\r\n\r\nPhasellus ultrices dui sit amet nunc molestie, in dignissim orci dignissim. Curabitur iaculis quam est, non tristique augue vestibulum sed. Vestibulum nec tempus lectus. Aliquam erat volutpat. Fusce porttitor urna mauris, quis posuere felis laoreet nec. Cras eu nulla ut dolor laoreet blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam neque tortor, suscipit eu gravida a, imperdiet nec quam. Phasellus sed nibh ut enim ultricies blandit ac nec velit. Vestibulum lacus urna, auctor hendrerit augue a, semper faucibus metus. Pellentesque commodo risus sed tellus tempus semper. Suspendisse potenti. Nulla vitae efficitur risus.\r\n\r\nCras vestibulum sem vitae fringilla tristique. Nunc varius, orci eget auctor commodo, nisi elit luctus est, ut auctor magna lectus eu sapien. Vestibulum porttitor orci lacus, quis dignissim libero tempor ut. Fusce luctus auctor quam, fermentum aliquam dui suscipit vel. Sed ac lacus a sapien commodo feugiat. Nam sagittis enim vitae maximus cursus. Mauris interdum iaculis enim, eget ultricies dolor malesuada sagittis. Fusce eget neque turpis. Pellentesque convallis nisl sit amet ornare lobortis. Maecenas dolor sem, maximus nec tempor nec, venenatis id leo. Duis vehicula ac est sed tempor. Sed lacinia in nisi quis gravida.', 'Yogya', 3, 'SELESAI', 'Accept', '2015-04-08 00:00:00', 'IMG01.jpg'),
(30, 'RSUD Panti Rapih', 'Sistem Pembangkit Landasan PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'Serang', 3, 'SELESAI', 'Accept', '2015-08-15 00:00:00', 'IMG13.jpg'),
(31, 'RSUD Panti Rapih', 'PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ', 'Serang', 3, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG01.jpg'),
(32, 'RSUD Panti Rapih', 'PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ', 'Serang', 3, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG01.jpg'),
(33, 'RSUD Panti Rapih', 'PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ', 'Serang', 3, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG01.jpg'),
(34, 'RSUD Panti Rapih', 'Sistem Kereta PT KAI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'JawaTimur', 2, 'SELESAI', 'Accept', '2015-04-30 00:00:00', '8.jpg'),
(35, 'RSUD Panti Rapih', 'PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ', 'Serang', 1, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG01.jpg'),
(36, 'RSUD Panti Rapih', 'PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ', 'Serang', 1, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG01.jpg'),
(37, 'RSUD Panti Rapih', 'Pembuatan Website RSUD Panti Rapih', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.\r\n\r\nProin laoreet dui felis, ac dictum diam molestie eget. Nunc sodales, est sit amet aliquet aliquam, sem eros congue erat, vel dignissim quam quam quis lorem. Sed dui massa, hendrerit ac risus eu, consectetur interdum orci. Maecenas cursus sapien nec urna hendrerit, id semper dolor finibus. Mauris condimentum nunc quam, sit amet blandit leo vulputate a. Phasellus blandit porttitor erat, eu efficitur metus fermentum id. Praesent eget tortor dolor. Aenean faucibus vestibulum dolor ac sagittis. Praesent congue, lorem non elementum maximus, erat nunc scelerisque ante, et efficitur turpis tellus et lorem. Vivamus sodales laoreet arcu sit amet faucibus. Morbi sed justo vulputate, eleifend erat eu, aliquam quam. Quisque non ante ex. Nullam quis tellus at sem pulvinar ultricies ut ut arcu. Morbi elementum lorem felis, nec pharetra purus commodo at. Pellentesque et ligula sit amet ipsum congue porttitor. In ac suscipit metus.\r\n\r\nPhasellus ultrices dui sit amet nunc molestie, in dignissim orci dignissim. Curabitur iaculis quam est, non tristique augue vestibulum sed. Vestibulum nec tempus lectus. Aliquam erat volutpat. Fusce porttitor urna mauris, quis posuere felis laoreet nec. Cras eu nulla ut dolor laoreet blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam neque tortor, suscipit eu gravida a, imperdiet nec quam. Phasellus sed nibh ut enim ultricies blandit ac nec velit. Vestibulum lacus urna, auctor hendrerit augue a, semper faucibus metus. Pellentesque commodo risus sed tellus tempus semper. Suspendisse potenti. Nulla vitae efficitur risus.\r\n\r\nCras vestibulum sem vitae fringilla tristique. Nunc varius, orci eget auctor commodo, nisi elit luctus est, ut auctor magna lectus eu sapien. Vestibulum porttitor orci lacus, quis dignissim libero tempor ut. Fusce luctus auctor quam, fermentum aliquam dui suscipit vel. Sed ac lacus a sapien commodo feugiat. Nam sagittis enim vitae maximus cursus. Mauris interdum iaculis enim, eget ultricies dolor malesuada sagittis. Fusce eget neque turpis. Pellentesque convallis nisl sit amet ornare lobortis. Maecenas dolor sem, maximus nec tempor nec, venenatis id leo. Duis vehicula ac est sed tempor. Sed lacinia in nisi quis gravida.', 'Yogya', 1, 'SELESAI', 'Accept', '2015-04-08 00:00:00', 'IMG01.jpg'),
(38, 'RSUD Panti Rapih', 'PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ', 'Serang', 1, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG01.jpg'),
(39, 'RSUD Panti Rapih', 'Sistem Pembangkit Landasan PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'Serang', 1, 'SELESAI', 'Accept', '2015-08-15 00:00:00', 'IMG13.jpg'),
(59, 'RSUD Panti Rapih', 'Angkutan Udara PT Angkasa Pura 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'Serang', 4, 'SELESAI', 'Accept', '2015-05-23 00:00:00', 'IMG12.jpg'),
(65, 'Widji', 'Pembuatan Software Polantas', 'Kita Berkeinginan untuk membuat software pelaksanaan polantas.', NULL, 2, 'SELESAI', 'Accept', '2015-04-27 03:06:54', 'home2.png');

-- --------------------------------------------------------

--
-- Table structure for table `projectdata`
--

CREATE TABLE IF NOT EXISTS `projectdata` (
  `IDsdata` int(11) NOT NULL AUTO_INCREMENT,
  `IDproject` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`IDsdata`),
  KEY `IDproject` (`IDproject`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `projectdata`
--

INSERT INTO `projectdata` (`IDsdata`, `IDproject`, `image`) VALUES
(3, 16, 'IMG05.jpg'),
(6, 4, 'IMG03.jpg'),
(12, 3, 'IMG01.jpg'),
(16, 3, 'IMG01.jpg'),
(17, 3, 'IMG01.jpg'),
(18, 1, 'Lighthouse.jpg'),
(19, 1, 'Jellyfish.jpg'),
(20, 1, 'Tulips.jpg'),
(21, 1, 'Koala.jpg'),
(22, 65, '2.jpg'),
(23, 65, '7.jpg'),
(24, 65, '3.jpg'),
(25, 65, '5.jpg'),
(26, 65, '4.jpg'),
(27, 65, '8.jpg'),
(28, 65, 'IMG02.jpg'),
(29, 65, 'IMG11.jpg'),
(30, 65, 'IMG10.jpg'),
(31, 16, '8.jpg'),
(32, 16, 'Desert.jpg'),
(33, 16, 'for-service(software-develop).png'),
(34, 16, '4.jpg'),
(35, 14, '4.jpg'),
(36, 14, '7.jpg'),
(37, 14, 'home.png'),
(38, 14, 'IMG13.jpg'),
(39, 14, 'earth.png'),
(40, 34, '4.jpg'),
(41, 34, 'Chrysanthemum.jpg'),
(42, 34, '8.jpg'),
(43, 34, '8.jpg'),
(44, 34, '5.jpg'),
(45, 34, '3.jpg'),
(48, 23, 'Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE IF NOT EXISTS `testimoni` (
  `IDtestimon` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(20) NOT NULL,
  `UserDeskripsion` varchar(30) NOT NULL,
  `imageUser` varchar(20) NOT NULL,
  `Title` int(11) NOT NULL,
  `Testimon` text NOT NULL,
  `Filter` enum('Diizinkan','Tidak Diizinkan') NOT NULL DEFAULT 'Tidak Diizinkan',
  `TanggalTestimoni` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Barumasuk` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`IDtestimon`),
  KEY `Title` (`Title`),
  KEY `TanggalTestimoni` (`TanggalTestimoni`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`IDtestimon`, `User`, `UserDeskripsion`, `imageUser`, `Title`, `Testimon`, `Filter`, `TanggalTestimoni`, `Barumasuk`) VALUES
(1, 'Diles', 'Mahatala Network Tester Region', 'default.png', 3, 'Dolor sit amet, consectetur adipiscing elit quisque tempus eget diam et lorem a laoreet phasellus ut\nDolor sit amet, consectetur adipiscing elit quisque tempus eget diam et lorem a laoreet phasellus utDolor sit amet, consectetur adipiscing elit quisque tempus eget diam et lorem a laoreet phasellus ut', 'Diizinkan', '2015-04-12 04:44:21', 0),
(2, 'halo', 'adasd', 'default.png', 1, 'asdkasldkjasd', 'Tidak Diizinkan', '2015-04-12 21:51:56', 0),
(3, 'Wiwin', 'Petualang Sejati', 'default.png', 3, 'Dolor sit amet, consectetur adipiscing elit quisque tempus eget diam et lorem a laoreet phasellus ut\nDolor sit amet, consectetur adipiscing elit quisque tempus eget diam et lorem a laoreet phasellus utDolor sit amet, consectetur adipiscing elit quisque tempus eget diam et lorem a laoreet phasellus ut', 'Tidak Diizinkan', '2015-04-12 22:05:44', 0),
(4, 'wiwins', 'OKD', 'default.png', 3, 'OK\n', 'Tidak Diizinkan', '2015-04-12 22:06:25', 0),
(5, 'Hai Win win', 'KSDLSD', 'default.png', 3, 'ASDLAKDLKJAS', 'Tidak Diizinkan', '2015-04-12 22:07:13', 0),
(6, 'Haloo', 'hai', 'default.png', 3, 'asdasd', 'Diizinkan', '2015-04-12 22:08:41', 0),
(7, 'Diles', 'OKI JELLY', 'default.png', 3, 'oeopp', 'Diizinkan', '2015-04-12 22:09:16', 0),
(8, 'halo', 'adasd', 'default.png', 1, 'Dolor sit amet, consectetur adipiscing elit quisque tempus eget diam et lorem a laoreet phasellus ut\nDolor sit amet, consectetur adipiscing elit quisque tempus eget diam et lorem a laoreet phasellus utDolor sit amet, consectetur adipiscing elit quisque tempus eget diam et lorem a laoreet phasellus ut', 'Diizinkan', '2015-04-12 21:51:56', 0),
(9, 'Diles', 'OKI JELLY', 'default.png', 3, 'oeopp', 'Diizinkan', '2015-04-12 22:09:16', 0),
(10, 'Kalvin', 'CEL', 'default.png', 3, 'ADASDSAD', 'Diizinkan', '2015-04-12 23:00:25', 0),
(11, 'OLES', 'OLS', 'default.png', 35, 'LOL', 'Tidak Diizinkan', '2015-04-19 05:00:55', 0),
(12, 'Pak Eko', 'Landasan Udara Merapi', 'default.png', 3, 'Menurut saya project yang mereka buat sangat lah bagus bisa dicek dengan melihat profile dari kinerja mereka di link yang tersedia', 'Diizinkan', '2015-04-25 04:25:09', 0),
(13, 'mhkjh', 'hjkhkjh', 'default.png', 26, 'ghfhjgjkhkl;lkjhgchjkl;khgfdhjk', 'Tidak Diizinkan', '2015-04-25 04:40:04', 0),
(14, 'qweq', 'wqeqwe', 'default.png', 27, 'qweqwe', 'Diizinkan', '2015-04-25 05:50:22', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keteranganjobs`
--
ALTER TABLE `keteranganjobs`
  ADD CONSTRAINT `keteranganjobs_ibfk_1` FOREIGN KEY (`IDjobsdata`) REFERENCES `mahatalajobsdata` (`IDjobdata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahatalajobsdata`
--
ALTER TABLE `mahatalajobsdata`
  ADD CONSTRAINT `mahatalajobsdata_ibfk_1` FOREIGN KEY (`IDjobs`) REFERENCES `mahatalajobs` (`IDjobs`);

--
-- Constraints for table `orderqueue`
--
ALTER TABLE `orderqueue`
  ADD CONSTRAINT `orderqueue_ibfk_1` FOREIGN KEY (`JenisJob`) REFERENCES `mahatalajobs` (`IDjobs`),
  ADD CONSTRAINT `orderqueue_ibfk_2` FOREIGN KEY (`Customer`) REFERENCES `client` (`NamaClient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`JenisJob`) REFERENCES `mahatalajobs` (`IDjobs`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`Client`) REFERENCES `client` (`NamaClient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projectdata`
--
ALTER TABLE `projectdata`
  ADD CONSTRAINT `projectdata_ibfk_1` FOREIGN KEY (`IDproject`) REFERENCES `project` (`IDproject`);

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `testimoni_ibfk_1` FOREIGN KEY (`Title`) REFERENCES `project` (`IDproject`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
