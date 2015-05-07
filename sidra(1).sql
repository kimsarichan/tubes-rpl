-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2015 at 08:16 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sidra`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
`idJadwal` int(5) NOT NULL,
  `tanggalJam` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `NIP` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memiliki`
--

CREATE TABLE IF NOT EXISTS `memiliki` (
  `idJadwal` int(5) NOT NULL,
  `idRuang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `idPasien` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `jenisKelamin` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `penyakit` varchar(50) NOT NULL,
  `noRuang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perawat`
--

CREATE TABLE IF NOT EXISTS `perawat` (
  `NIP` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `jenisKelamin` varchar(30) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tanggalMasuk` date NOT NULL,
  `masaJabatan` int(3) NOT NULL,
  `noTelepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `otoritas` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perawat`
--

INSERT INTO `perawat` (`NIP`, `nama`, `tanggalLahir`, `jenisKelamin`, `alamat`, `jabatan`, `password`, `tanggalMasuk`, `masaJabatan`, `noTelepon`, `email`, `otoritas`, `status`) VALUES
('', 'dummy1', '0000-00-00', 'laki-laki', '', '', 'Lol', '0000-00-00', 0, 'aaaaa', 'aaaaa', '', 0),
('1212', 'Farhad', '1995-04-28', 'L', 'awdawd', '', 'aaaaa', '2015-04-07', 2, '085721217822', 'dystratos@gmail.com', 'a', 0),
('dummy2', 'abc', '2015-04-01', 'laki-laki', 'aaa', '', 'Lol', '0000-00-00', 0, 'aaaaa', 'aaaaa', '', 0),
('dummy3', 'abc', '2015-04-01', 'laki-laki', 'aaa', '', 'Lol', '0000-00-00', 0, 'aaaaa', 'aaaaa', '', 0),
('dummy4', 'test', '0000-00-00', '', '', '', '', '0000-00-00', 0, '9876543', 'awdwa', '', 0),
('dummy5', 'test', '0000-00-00', '', '', '', '', '0000-00-00', 0, '9876543', 'awdwa', '', 0),
('dummy6', 'test', '0000-00-00', '', '', '', '', '0000-00-00', 0, '9876543', 'asda', '', 0),
('dummy7', 'test', '0000-00-00', '', '', '', '', '0000-00-00', 0, '9876543', 'asda', '', 0),
('dummy8', 'test', '0000-00-00', 'l', '', '', '', '0000-00-00', 0, '9876543', 'asda', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE IF NOT EXISTS `ruang` (
  `noRuang` int(5) NOT NULL,
  `namaRuang` varchar(30) NOT NULL,
  `kapasitas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sertifikasi`
--

CREATE TABLE IF NOT EXISTS `sertifikasi` (
  `NIP` varchar(15) NOT NULL,
  `idSertifikasi` varchar(20) NOT NULL,
  `namaFile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sertifikasi`
--

INSERT INTO `sertifikasi` (`NIP`, `idSertifikasi`, `namaFile`) VALUES
('', 'rgdr', 'ipi123759.pdf'),
('1212', '', 'INTA Autonomous rice field ope');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`idJadwal`), ADD UNIQUE KEY `NIP` (`NIP`);

--
-- Indexes for table `memiliki`
--
ALTER TABLE `memiliki`
 ADD UNIQUE KEY `idJadwal` (`idJadwal`), ADD UNIQUE KEY `idRuang` (`idRuang`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
 ADD UNIQUE KEY `noRuang` (`noRuang`);

--
-- Indexes for table `perawat`
--
ALTER TABLE `perawat`
 ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
 ADD PRIMARY KEY (`noRuang`);

--
-- Indexes for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
 ADD UNIQUE KEY `NIP` (`NIP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
MODIFY `idJadwal` int(5) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `perawat` (`NIP`);

--
-- Constraints for table `memiliki`
--
ALTER TABLE `memiliki`
ADD CONSTRAINT `memiliki_ibfk_1` FOREIGN KEY (`idJadwal`) REFERENCES `jadwal` (`idJadwal`),
ADD CONSTRAINT `memiliki_ibfk_2` FOREIGN KEY (`idRuang`) REFERENCES `ruang` (`noRuang`);

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`noRuang`) REFERENCES `ruang` (`noRuang`);

--
-- Constraints for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
ADD CONSTRAINT `sertifikasi_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `perawat` (`NIP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
