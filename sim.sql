-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 11:19 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `kd_dosen` char(10) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `alamat_dosen` varchar(255) NOT NULL,
  `kd_mapel` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`kd_dosen`, `nama_dosen`, `alamat_dosen`, `kd_mapel`) VALUES
('d000', '', '', 'm000'),
('D001', 'Andi', 'Jl. Maluku', 'M002'),
('D002', 'Amar', 'Jl. Raya Bogor', 'M009'),
('D003', 'Dedi', 'Jl. Aceh', 'M008'),
('D004', 'Aaripin', 'Jl. Raya Bogor', 'M008'),
('D005', 'Surya', 'Jl. Aceh', 'M007');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kd_jurusan` char(10) NOT NULL,
  `nama_jurusan` char(10) NOT NULL,
  `kd_dosen` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kd_jurusan`, `nama_jurusan`, `kd_dosen`) VALUES
('j000', '', 'd000'),
('J001', 'SENI', 'D003'),
('J002', 'HUKUM', 'D004'),
('J003', 'FIRMA', 'D002'),
('J004', 'TEHNIK', 'D002'),
('J005', 'AK', 'D004');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `kd_mapel` char(10) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kd_mapel`, `nama_mapel`) VALUES
('m000', ''),
('M001', 'IPS'),
('M002', 'PKKWUU'),
('M003', 'IPA'),
('M005', 'PLH'),
('M006', 'PBO'),
('M007', 'PENJAS'),
('M008', 'B INDO'),
('M009', 'PWPB');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(4) NOT NULL,
  `nis` int(9) NOT NULL,
  `kd_dosen` char(10) NOT NULL,
  `nilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nis`, `kd_dosen`, `nilai`) VALUES
(8, 19201049, 'D002', 90),
(10, 19201045, 'D002', 95),
(11, 19201046, 'D001', 100),
(12, 19201044, 'D001', 88),
(14, 19201048, 'D004', 77);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(9) NOT NULL,
  `nama_siswa` varchar(225) NOT NULL,
  `kd_jurusan` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `kd_jurusan`) VALUES
(19201044, 'Rafly', 'J001'),
(19201045, 'Ade', 'J003'),
(19201046, 'Fajar', 'J004'),
(19201048, 'Amel', 'J002'),
(19201049, 'Raka', 'J001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`kd_dosen`),
  ADD KEY `kd_mapel` (`kd_mapel`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kd_jurusan`),
  ADD KEY `kd_dosen` (`kd_dosen`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `kd_dosen` (`kd_dosen`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `kd_jur` (`kd_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`kd_mapel`) REFERENCES `mapel` (`kd_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`kd_dosen`) REFERENCES `dosen` (`kd_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`kd_dosen`) REFERENCES `dosen` (`kd_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`kd_jurusan`) REFERENCES `jurusan` (`kd_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
