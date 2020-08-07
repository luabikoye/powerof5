-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2017 at 04:11 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `powerof5_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `profileupdate`
--

CREATE TABLE IF NOT EXISTS `profileupdate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `geo_id` int(10) NOT NULL,
  `ref` int(10) NOT NULL,
  `ref_user` varchar(80) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `plan` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(111) NOT NULL,
  `state` varchar(111) NOT NULL,
  `country` varchar(100) NOT NULL,
  `zipcode` varchar(111) NOT NULL,
  `mphone` varchar(100) NOT NULL,
  `nomineen` varchar(100) NOT NULL,
  `nomineerel` varchar(100) NOT NULL,
  `bankname` varchar(100) NOT NULL,
  `beneficiary` varchar(100) NOT NULL,
  `acctnbr` varchar(100) NOT NULL,
  `accttype` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `profileupdate`
--

INSERT INTO `profileupdate` (`id`, `date`, `geo_id`, `ref`, `ref_user`, `firstname`, `lastname`, `email`, `username`, `password`, `plan`, `price`, `dob`, `address`, `city`, `state`, `country`, `zipcode`, `mphone`, `nomineen`, `nomineerel`, `bankname`, `beneficiary`, `acctnbr`, `accttype`) VALUES
(1, '0000-00-00', 0, 0, 'LUMI2', 'Olasile', 'Adekoya', '', 'koya', '', '', '', '--', '27 opebi road,', 'ikeja', 'lagod', 'NGA', '23401', '7062330356', 'Olasile Adekoya', 'Grand Son', 'zenith bank', 'Sile Adekoya', '', 'Savings'),
(2, '0000-00-00', 0, 0, 'LUMI1', 'Olasile', 'Adekoya', '', 'sile', '', '', '', '12-09-1990', '27 opebi road,', 'ikeja', 'lagod', 'NGA', '23401', '7062330356', 'Olasile Adekoya', 'Grand Son', 'zenith bank', 'Sile Adekoya', '', 'Current'),
(3, '0000-00-00', 0, 0, 'LUMI1', 'Sile', 'Adekoya', '', 'taju', '', '', '', '21-19-09', 'Plot 3, yetunde owoseni close,\r\noff bello folawiyo crescent', 'ikosi-ketu', 'lagos', 'NGA', '23401', '7062330356', 'Sile Adekoya', 'Father', 'zenith bank', 'Olas Adekoya', '200000000000', 'Current'),
(4, '0000-00-00', 0, 0, 'LUMI2', 'OLUMIDE', '', 'oabikay@yahoo.com', 'oabikay@yahoo.com', 'wfwerfwer', 'premium', '6000', '', '', '', '', '', '', '8023443581', '', '', '', '', '', ''),
(5, '0000-00-00', 0, 0, '', 'OLUMIDE', 'ABIKOYE', 'oabikay@yahoo.com', 'LUMI1', 'olumide', 'premium', '6000', '', '', '', '', '', '', '0803666476', '', '', '', '', '', ''),
(6, '2017-04-26', 1, 1, 'LUMI1', 'OLUMIDE', 'ABIKOYE', 'oabikay@yahoo.com', 'LUMI2', 'olumide', 'premium', '6000', '1991-12-01', '19 oni street', 'surulere', 'LAGOS', 'NGA', '23401', '08023443562', 'OLUMIDE ABIKOYE', 'Father', 'GTB', 'OLUMIDE ABIKOYE', '00124256625', 'Savings'),
(7, '2017-04-26', 2, 1, 'LUMI2', 'Ayinke', 'Balogun', 'lumi@yahoo.com', 'lumi3', 'olu', 'premium', '6000', '1991-12-01', 'asdcasdvasd', 'randle avenue', 'asdasd', 'MAR', '100001', '08023445467', 'asdasdv', 'Grand Mother', 'asdvasdv', 'asdvasdv', 'asdvasd', 'Savings'),
(8, '2017-04-26', 3, 1, 'LUMI2', 'ADBIKOYE', 'DEJI', 'oabikay@yahoo.com', 'LUMI4', 'OLUMIDE', 'classic', '1200', '1991-12-01', 'AV AFVS ', 'randle avenue', 'oshodi/isolo', 'NGA', 'WEV', '0803777', 'WERVWE', 'Other', 'ERVWERV', 'WERV', 'WERV', 'Savings'),
(9, '2017-04-27', 4, 1, 'LUMI2', 'OLUMIDE', 'ABIKOYE', 'OABIKAY@YAHOO.COM', 'lumi49', 'olumide', '', '', '1991-12-01', '19 oni street, surulere lagos', 'Lagos', 'Lalgo', 'NGA', '23401', '08023443561', 'Bayo Atere', 'Daugther', 'GTB', 'OLUMIDE ABIKOYE', '0803888388', 'Savings'),
(10, '2017-05-03', 5, 1, 'LUMI2', 'Kayobo', 'Tolani', 'smoothkido2@yahoo.com', 'smoothkido2@yahoo.com', 'Kayobo', '', '', '1991-12-01', '19 oni street', 'randle avenue', 'Lagos', 'NGA', '100001', '8162238774', 'Francis Okonkwo', 'Mother-in-Law', 'GTB', 'OLUMIDE ABIKOYE', '00124256625', 'Savings'),
(11, '2017-06-15', 6, 2, 'smoothkido2@yahoo.com', 'OLUMIDE', '', 'oabikay@yahoo.com', 'e_samuel_k@yahoo.com', 'olumide', 'premium', '6000', '', '', '', '', '', '', '8023443581', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
