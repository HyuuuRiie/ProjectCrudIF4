-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 05:51 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_mhs` int(11) NOT NULL AUTO_INCREMENT,
  `nobp` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `tmplahir` varchar(25) NOT NULL,
  `tgllahir` date NOT NULL DEFAULT '0000-00-00',
  `jk` char(1) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `foto` text NOT NULL,
  `tglreg` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_mhs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mahasiswa`
--

