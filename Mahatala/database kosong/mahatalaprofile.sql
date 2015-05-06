-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2015 at 09:26 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(1, 'CV Mahatala Network', '                Mahatala Network (MAHNET) merupakan perusahaan yang bergerak dalam bidang Teknologi Informasi. Para pendiri dan staff MAHNET telah berpengalaman dan berdedikasi tinggi sejak tahun 2007 dan hingga kini terus mengembangkan keahlian yang dimiliki guna menghadirkan layanan prioritas tertinggi kepada para client secara profesional.\n\nMAHNET berkompetensi tidak hanya di bidang Networking Solution namun juga dalam Web Design, Electronic Devices Procurement, dan Software Development. Slogan \nTrustworthy IT Partner. yang diusung oleh MAHNET menjadi motivasi dalam berkarya terus menerus hingga mencapai titik akhir kepuasan client bersama MAHNET.\n\n            ', 'Yogyakarta', 'Jl. Kepuhsari No. 39C RT 007/RW OO5 Maguwoharjo', '(0274)-3297212', '22AEE78F', 'SIUP : 503/0355/MKR/XI/2011', 'mahnet.jogja@gmail.com', '0878-38-512-707', 'Tulips.jpg');

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
(1, 'WD', 'Web Desain', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'fa-globe', 'magnus.png', 'redbox.png', 'perfectum.png'),
(2, 'SD', 'Software Developtment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'fa-database', '6.jpg', '1.png', 'Koala.jpg'),
(3, 'NW', 'Networking Solution', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'fa-signal', '8.jpg', '6.jpg', '5.jpg'),
(4, 'EDP', 'Electronic Device Procunument', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate risus ut lacus ultrices, eu euismod arcu vulputate. Donec viverra porta bibendum. Nullam ex est, sodales id semper sagittis, imperdiet sit amet odio. Sed aliquam, tellus sollicitudin euismod convallis, est ligula congue nisi, at finibus odio lorem sed mauris. Etiam condimentum enim orci, ut ultrices sapien faucibus sed. Sed ultrices sit amet arcu eget suscipit. Sed maximus finibus nibh. Quisque convallis fermentum faucibus. Quisque pharetra turpis odio, eget sollicitudin tortor viverra eu. Aenean nec neque convallis, condimentum dolor in, iaculis mi. Nunc quis viverra quam. Quisque egestas nibh sed iaculis ornare. Proin lacinia ligula id sapien ornare, quis ultrices libero cursus. Nam porta, justo eu tristique sagittis, augue est placerat diam, vel sollicitudin arcu nunc in ante. Vivamus justo dolor, aliquam quis justo in, vestibulum convallis lacus. Integer suscipit vulputate volutpat.', 'fa-bar-chart', 'perfectum.png', 'smart.png', '3.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keteranganjobs`
--
ALTER TABLE `keteranganjobs`
  ADD CONSTRAINT `keteranganjobs_ibfk_1` FOREIGN KEY (`IDjobsdata`) REFERENCES `mahatalajobsdata` (`IDjobdata`);

--
-- Constraints for table `mahatalajobsdata`
--
ALTER TABLE `mahatalajobsdata`
  ADD CONSTRAINT `mahatalajobsdata_ibfk_1` FOREIGN KEY (`IDjobs`) REFERENCES `mahatalajobs` (`IDjobs`);

--
-- Constraints for table `orderqueue`
--
ALTER TABLE `orderqueue`
  ADD CONSTRAINT `orderqueue_ibfk_2` FOREIGN KEY (`Customer`) REFERENCES `client` (`NamaClient`),
  ADD CONSTRAINT `orderqueue_ibfk_1` FOREIGN KEY (`JenisJob`) REFERENCES `mahatalajobs` (`IDjobs`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`JenisJob`) REFERENCES `mahatalajobs` (`IDjobs`),
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`Client`) REFERENCES `client` (`NamaClient`);

--
-- Constraints for table `projectdata`
--
ALTER TABLE `projectdata`
  ADD CONSTRAINT `projectdata_ibfk_1` FOREIGN KEY (`IDproject`) REFERENCES `project` (`IDproject`);

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `testimoni_ibfk_1` FOREIGN KEY (`Title`) REFERENCES `project` (`IDproject`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
