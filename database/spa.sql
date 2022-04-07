-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 12:49 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spa`
--

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `ID` int(10) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Asal` varchar(100) NOT NULL,
  `Jurusan` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`ID`, `Nama`, `Asal`, `Jurusan`, `Email`, `Status`) VALUES
(49, 'Nanda Dwi Olivia', 'Politeknik Caltex Riau', 'Sistem Informasi', 'dwi16si@mahasiswa.pcr.ac.id', 'Diterima'),
(50, 'Ayu Putri Lestari', 'Politeknik Caltex Riau', 'Sistem Informasi', 'ayu16si@mahasiswa.pcr.ac.id', 'Ditolak'),
(51, 'Nanda Dwi Olivia', 'Politeknik Caltex Riau', 'Sistem Informasi', 'dwi16si@mahasiswa.pcr.ac.id', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `ID` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`ID`, `nama`, `email`, `subject`, `message`) VALUES
(10, 'Nanda Ayu Annisa', 'hgnisa1998@gmail.com', 'APII', 'The Best Smart Connected Airport operator in the region The best smart connected airport operator in the region memiliki makna bahwa bandara-bandara yang dikelola Angkasa Pura II menjadi bandara yang terhubung ke banyak rute atau tujuan baik di dalam maup'),
(11, 'Nanda Ayu Annisa', 'hgnisa1998@gmail.com', 'Angkasa Pura II', 'Kami mendapatkan pesan yang cukup banyak setiap hari. Kami akan membalasnya pesan anda dalam 1-2 hari kerja. Jika anda tidak mendapatkan balasan dari kami dalam 3 hari kerja, silahkan periksa folder spam anda karena balasan kami mungkin masuk ke folder te');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`) VALUES
(2, 'Neng', 'neng', 'b9ed5397f16c073452002a92c4dcc496'),
(3, 'Meta', 'meta', 'e9a23cbc455158951716b440c3d165e0'),
(4, 'Nanda', 'nanda', '859a37720c27b9f70e11b79bab9318fe'),
(6, 'memet', 'memet', 'd3353ed42f3f5dc07015d195dc36bb19'),
(7, 'Nanda', 'nanda', '859a37720c27b9f70e11b79bab9318fe'),
(8, 'nindy', 'nindy', '5d042d4d9db866c7167ea7b3a7bc9a64'),
(9, 'nisa', 'nisa', '5fad30428811fe378fd389cd7659a33c'),
(10, 'aan', 'aan', '4607ed4bd8140e9664875f907f48ae14'),
(11, 'aan', 'aan', '4607ed4bd8140e9664875f907f48ae14'),
(12, 'baba', 'baba', '21661093e56e24cd60b10092005c4ac7'),
(13, 'bani', 'bani', '497a333d611f80dfddb5407f81632a85'),
(14, 'nana', 'nana', '518d5f3401534f5c6c21977f12f60989'),
(19, 'bobo', 'bobo', 'ca2cd2bcc63c4d7c8725577442073dde'),
(20, 'pooh', 'pooh', 'b158274419d6e6dc4c1088cacfd49283'),
(22, 'ucok', 'ucok', '2fc4bfee344471c68b724856b9b6f13d');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `ID` int(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Asal` varchar(50) NOT NULL,
  `Jurusan` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `TglMasuk` date NOT NULL,
  `TglSelesai` date NOT NULL,
  `foto` varchar(200) NOT NULL,
  `surat` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`ID`, `Nama`, `Asal`, `Jurusan`, `Email`, `TglMasuk`, `TglSelesai`, `foto`, `surat`) VALUES
(124, 'Margaretta Eliyopale', 'Politeknik Caltex Riau', 'Sistem Informasi', 'margaretta16si@mahasiswa.pcr.ac.id', '2019-09-09', '2019-12-08', '05122019075532Nanda.JPG', '05122019075532SuratPermohonan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `siswamagang`
--

CREATE TABLE `siswamagang` (
  `ID` int(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Asal` varchar(50) NOT NULL,
  `Jurusan` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `TglMasuk` date NOT NULL,
  `TglSelesai` date NOT NULL,
  `foto` varchar(200) NOT NULL,
  `surat` varchar(200) NOT NULL,
  `Unit` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswaselesai`
--

CREATE TABLE `siswaselesai` (
  `ID` int(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Asal` varchar(50) NOT NULL,
  `Jurusan` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `TglMasuk` date NOT NULL,
  `TglSelesai` date NOT NULL,
  `foto` varchar(200) NOT NULL,
  `surat` varchar(200) NOT NULL,
  `Unit` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswaselesai`
--

INSERT INTO `siswaselesai` (`ID`, `Nama`, `Asal`, `Jurusan`, `Email`, `TglMasuk`, `TglSelesai`, `foto`, `surat`, `Unit`) VALUES
(124, 'Nanda Dwi Olivia', 'Politeknik Caltex Riau', 'Sistem Informasi', 'dwi16si@mahasiswa.pcr.ac.id', '2019-09-09', '2019-12-08', '05122019080015Nanda.JPG', '05122019080015SuratPermohonan.jpg', 'COMM'),
(123, 'Nanda Dwi Olivia', 'PCR', 'Sistem Informasi', 'dwi16si@mahasiswa.pcr.ac.id', '2019-09-09', '2019-12-08', '05122019075029Nanda.JPG', '05122019075029SuratPermohonan.jpg', 'DTE');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `kuota` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `nama`, `deskripsi`, `kuota`) VALUES
(1, 'FIN', '', 1),
(2, 'ACC', 'Akuntansi', 2),
(3, 'COMM', 'Komersil', 2),
(4, 'PKBL', '', 1),
(5, 'DTE', 'Elektronika', 2),
(6, 'PROC', 'PROC', 1),
(7, 'HR & GA', '', 1),
(8, 'TLMP', '', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `siswamagang`
--
ALTER TABLE `siswamagang`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `siswaselesai`
--
ALTER TABLE `siswaselesai`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `siswamagang`
--
ALTER TABLE `siswamagang`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `siswaselesai`
--
ALTER TABLE `siswaselesai`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
