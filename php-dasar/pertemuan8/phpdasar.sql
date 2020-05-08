-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 09:36 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `npm` char(8) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posters`
--

CREATE TABLE IF NOT EXISTS `posters` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posters`
--

INSERT INTO `posters` (`id`, `title`, `artist`, `price`, `email`, `images`) VALUES
(1, 'Katana', '@murdoko_', 200000, 'mail@mail.com', 'IMG_20190808_204136_712.jpg'),
(2, 'Blah', '@murdoko_', 230000, 'mail@mail.com', 'IMG_20190809_174715_994.jpg'),
(3, 'Sommarfagel', '@murdoko_', 234000, 'mail@mail.com', 'IMG_20191129_200034_012.jpg'),
(4, 'Infinity', '@murdoko_', 500000, 'mail@mail.com', 'IMG_20191130_171652_539.jpg'),
(5, 'Starmachine', '@murdoko_', 190000, 'mail@mail.com', 'IMG_20191201_160449_771.jpg'),
(6, 'Hakuna Matata', '@murdoko_', 300000, 'mail@mail.com', 'IMG_20191202_162611_648.jpg'),
(7, 'Disco', '@murdoko_', 490000, 'mail@mail.com', 'IMG_20200222_011443_842.jpg'),
(8, 'London', '@murdoko_', 380000, 'mail@mail.com', 'IMG_20200222_190516_290.jpg'),
(9, 'Pika pika', '@murdoko_', 290000, 'mail@mail.com', 'IMG_20200224_040344_214.jpg'),
(10, 'Moon', '@murdoko_', 250000, 'mail@mail.com', 'IMG_20200324_130642_536.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posters`
--
ALTER TABLE `posters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posters`
--
ALTER TABLE `posters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
