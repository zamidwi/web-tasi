-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2016 at 08:34 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'zami', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `diskusi`
--

CREATE TABLE IF NOT EXISTS `diskusi` (
  `id` int(11) NOT NULL,
  `kd_kelompok` varchar(10) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `kd_matkul` varchar(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diskusi`
--

INSERT INTO `diskusi` (`id`, `kd_kelompok`, `deskripsi`, `kd_matkul`) VALUES
(1, 'kelompok1', 'Diskusikan Bersmaa kelompok anda pengaruh penggunaan array pada jalannya program!', 'PTI1'),
(2, 'kelompok2', 'Diskuskan dengan kelompok anda tentang penyebab runtime error!', 'PTI1'),
(3, 'kelompok3', 'Diskusikan Bersmaa kelompok anda pengaruh virus pada program!', 'PTI1'),
(4, 'kelompok4', 'Diskusikan Bersmaa kelompok anda pengaruh IDE progam!', 'PTI1');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `id` int(2) NOT NULL,
  `nip` varchar(8) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `nama`, `password`) VALUES
(1, '19970001', 'Dita Widya', '12345678'),
(2, '19970002', 'Lejar Retno', '12345678'),
(3, '19980001', 'Marouane Fellaini', '12345678'),
(4, '19980002', 'Manahati Lestusen', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `hdiskusi`
--

CREATE TABLE IF NOT EXISTS `hdiskusi` (
  `id` int(11) NOT NULL,
  `kd_matkul` varchar(4) NOT NULL,
  `tanggalkirim` date NOT NULL,
  `namafile` varchar(100) NOT NULL,
  `tipefile` varchar(10) NOT NULL,
  `ukuranfile` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `kd_kelompok` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hdiskusi`
--

INSERT INTO `hdiskusi` (`id`, `kd_matkul`, `tanggalkirim`, `namafile`, `tipefile`, `ukuranfile`, `path`, `kd_kelompok`) VALUES
(1, 'PTI1', '2016-11-30', 'MODUL 01.pdf', 'pdf', 793157, 'unggah/MODUL 01.pdf', 'kelompok1');

-- --------------------------------------------------------

--
-- Table structure for table `hdokumen`
--

CREATE TABLE IF NOT EXISTS `hdokumen` (
  `id` int(11) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `kd_matkul` varchar(4) NOT NULL,
  `tanggalkirim` date NOT NULL,
  `namafile` varchar(100) NOT NULL,
  `tipefile` varchar(10) NOT NULL,
  `ukuranfile` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE IF NOT EXISTS `jawaban` (
  `id` int(11) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `kd_matkul` varchar(4) NOT NULL,
  `j1` varchar(1) NOT NULL,
  `j2` varchar(1) NOT NULL,
  `j3` varchar(1) NOT NULL,
  `j4` varchar(1) NOT NULL,
  `j5` varchar(1) NOT NULL,
  `j6` varchar(1) NOT NULL,
  `j7` varchar(1) NOT NULL,
  `j8` varchar(1) NOT NULL,
  `j9` varchar(1) NOT NULL,
  `j10` varchar(1) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `nim`, `jenis`, `kd_matkul`, `j1`, `j2`, `j3`, `j4`, `j5`, `j6`, `j7`, `j8`, `j9`, `j10`, `nilai`) VALUES
(1, '160533602144', 'uts', 'PTI1', 'a', 'c', 'a', 'a', 'a', 'a', 'b', 'c', 'd', 'a', 70);

-- --------------------------------------------------------

--
-- Table structure for table `jawabanuraian`
--

CREATE TABLE IF NOT EXISTS `jawabanuraian` (
  `id` int(11) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `kd_matkul` varchar(4) NOT NULL,
  `uraian` text NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawabanuraian`
--

INSERT INTO `jawabanuraian` (`id`, `nim`, `jenis`, `kd_matkul`, `uraian`, `nilai`) VALUES
(1, '160533602144', 'uas', 'PTI1', 'Routing merupakan proses jaringan yang merupakan penghubung komputer  komponen', 50);

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE IF NOT EXISTS `kelompok` (
  `id` int(11) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `kd_kelompok` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id`, `nim`, `kd_kelompok`) VALUES
(1, '160533602144', 'kelompok1'),
(2, '160533602145', 'kelompok1'),
(3, '160533602146', 'kelompok1'),
(4, '160533602147', 'kelompok1'),
(5, '160533602148', 'kelompok1'),
(6, '160533602149', 'kelompok2'),
(7, '160533602150', 'kelompok2'),
(8, '160533602151', 'kelompok2'),
(9, '160533602152', 'kelompok2'),
(10, '160533602153', 'kelompok2'),
(11, '160533602154', 'kelompok3'),
(12, '160533602155', 'kelompok3'),
(13, '160533602156', 'kelompok3'),
(14, '160533602157', 'kelompok3'),
(15, '160533602158', 'kelompok3'),
(16, '160533602159', 'kelompok4'),
(17, '160533602160', 'kelompok4'),
(18, '160533602161', 'kelompok4'),
(19, '160533602162', 'kelompok4'),
(20, '160533602163', 'kelompok4');

-- --------------------------------------------------------

--
-- Table structure for table `komposisi`
--

CREATE TABLE IF NOT EXISTS `komposisi` (
  `id` int(11) NOT NULL,
  `kd_matkul` varchar(4) NOT NULL,
  `tugas` int(2) NOT NULL,
  `uts` int(2) NOT NULL,
  `uas` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komposisi`
--

INSERT INTO `komposisi` (`id`, `kd_matkul`, `tugas`, `uts`, `uas`) VALUES
(1, 'PTI1', 30, 30, 40);

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE IF NOT EXISTS `krs` (
  `id` int(2) NOT NULL,
  `kd_matkul` varchar(4) NOT NULL,
  `nim` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id`, `kd_matkul`, `nim`) VALUES
(1, 'PTI1', '160533602144'),
(2, 'PTI2', '160533602144'),
(3, 'PTI3', '160533602144');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(2) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `angkatan`, `prodi`, `password`) VALUES
(1, '160533602144', 'Kurt Zouma', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(2, '160533602145', 'Mesut Ozil', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(3, '160533602146', 'Skhodran Mustafi', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(4, '160533602147', 'Salomon Kalou', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(5, '160533602148', 'Azwar Anas', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(6, '160533602149', 'Dwiky Fany', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(7, '160533602150', 'Irfan Fernando', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(8, '160533602151', 'Agus Salim', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(9, '160533602152', 'Ilkay Gundogan', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(10, '160533602153', 'Bacary Sagna', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(11, '160533602154', 'Labile Pogba', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(12, '160533602155', 'Mohamed Elneny', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(13, '160533602156', 'Mohamed Salah', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(14, '160533602157', 'Ngolo Kante', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(15, '160533602158', 'Lailatul Fitriyah', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(16, '160533602159', 'Asyfa Ryhanabilah', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(17, '160533602160', 'Silvi Hardianti', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(18, '160533602161', 'Dirga Maulana', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(19, '160533602162', 'Devin Setiawan', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(20, '160533602163', 'Wahyu Hana', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(21, '160533602164', 'Merdita Guesti', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(22, '160533602165', 'Fera Andriana', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(23, '160533602141', 'Narendro Danang', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(24, '160533602142', 'Faisal Aqil', 2016, 'Pendidikan Teknik Informatika', '12345678'),
(25, '160533602143', 'Ardiansyah', 2016, 'Pendidikan Teknik Informatika', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE IF NOT EXISTS `matkul` (
  `id` int(2) NOT NULL,
  `kd_matkul` varchar(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `sks` int(1) NOT NULL,
  `nip` varchar(8) NOT NULL,
  `ruang` varchar(6) NOT NULL,
  `hari` varchar(6) NOT NULL,
  `jam` varchar(3) NOT NULL,
  `kapasitas` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `kd_matkul`, `nama`, `sks`, `nip`, `ruang`, `hari`, `jam`, `kapasitas`) VALUES
(1, 'PTI1', 'Dasar Pemrograman Komputer', 3, '19970001', 'H5.200', 'Senin', '1-4', 10),
(2, 'PTI2', 'Algoritma Dan Struktur Data', 3, '19970002', 'H5.201', 'Senin', '5-8', 10),
(3, 'PTI3', 'Matematika Diskrit', 3, '19980001', 'H5.202', 'Selasa', '1-4', 10),
(4, 'PTI4', 'Elektronika', 3, '19980001', 'G4.200', 'Selasa', '5-8', 10);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE IF NOT EXISTS `penilaian` (
  `id` int(11) NOT NULL,
  `kd_matkul` varchar(4) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `tugas` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `total` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id`, `kd_matkul`, `nim`, `tugas`, `uts`, `uas`, `total`) VALUES
(1, 'PTI1', '160533602144', 85, 70, 50, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `pilihanganda`
--

CREATE TABLE IF NOT EXISTS `pilihanganda` (
  `id` int(11) NOT NULL,
  `kd_matkul` varchar(4) NOT NULL,
  `nomor` int(11) NOT NULL,
  `soal` varchar(200) NOT NULL,
  `a` varchar(50) NOT NULL,
  `b` varchar(50) NOT NULL,
  `c` varchar(50) NOT NULL,
  `d` varchar(50) NOT NULL,
  `kunci` varchar(1) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilihanganda`
--

INSERT INTO `pilihanganda` (`id`, `kd_matkul`, `nomor`, `soal`, `a`, `b`, `c`, `d`, `kunci`, `tanggal`, `jenis`) VALUES
(1, 'PTI1', 1, 'Dimana letak kota malang?', 'Jatim ', 'Jateng', 'Jabar', 'Banten', 'a', '2016-11-30', 'uts'),
(2, 'PTI1', 2, 'Dimana kita dapat memperoleh makanan?', 'warung', 'toilet', 'halte', 'Jembatan', 'a', '2016-11-30', 'uts'),
(3, 'PTI1', 3, 'Dimana kalian dapat berjemur?', 'Coban', 'Sumber', 'Pantai', 'Goa', 'c', '2016-11-30', 'uts'),
(4, 'PTI1', 4, 'Dimana letak kerajaan singosari?', 'jombang', 'malang', 'ayabarus', 'gresik', 'b', '2016-11-30', 'uts'),
(5, 'PTI1', 5, 'Dimana letak Gazebo cafe warna?', 'Teknik', 'Psikologi', 'Ilmu Sosial', 'Olahraga', 'a', '2016-11-30', 'uts'),
(6, 'PTI1', 6, 'Dimana Kamu lahir?', 'rumah', 'pondok', 'sekolah', 'panti', 'a', '2016-11-30', 'uts'),
(7, 'PTI1', 7, 'Dimana kamu akan membangun rumah?', 'jombang', 'malang', 'kediri', 'surabaya', 'b', '2016-11-30', 'uts'),
(8, 'PTI1', 8, 'Dimana kamu dapat bertemu koala?', 'australia', 'india', 'timor', 'papua', 'c', '2016-11-30', 'uts'),
(9, 'PTI1', 9, 'Dimana letak candi borobudur?', 'magelang', 'jogja', 'pati', 'kudus', 'd', '2016-11-30', 'uts'),
(10, 'PTI1', 10, 'Dimana pondok riski?', 'kencong', 'mojoagung', 'besuki', 'lumajang', 'a', '2016-11-30', 'uts');

-- --------------------------------------------------------

--
-- Table structure for table `spesifikasi`
--

CREATE TABLE IF NOT EXISTS `spesifikasi` (
  `id` int(11) NOT NULL,
  `nip` varchar(8) NOT NULL,
  `kd_matkul` varchar(4) NOT NULL,
  `jmlkelompok` int(1) NOT NULL,
  `jmlmhs` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesifikasi`
--

INSERT INTO `spesifikasi` (`id`, `nip`, `kd_matkul`, `jmlkelompok`, `jmlmhs`) VALUES
(1, '19970001', 'PTI1', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE IF NOT EXISTS `tugas` (
  `id` int(11) NOT NULL,
  `kd_matkul` varchar(4) NOT NULL,
  `soal` varchar(250) NOT NULL,
  `kunci1` varchar(20) NOT NULL,
  `kunci2` varchar(20) NOT NULL,
  `kunci3` varchar(20) NOT NULL,
  `kunci4` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `udokumen`
--

CREATE TABLE IF NOT EXISTS `udokumen` (
  `id` int(11) NOT NULL,
  `kd_matkul` varchar(4) NOT NULL,
  `soal` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `udokumen`
--

INSERT INTO `udokumen` (`id`, `kd_matkul`, `soal`) VALUES
(1, 'PTI1', 'Jelaskan mengapa dalam pembuatan program harus diawali dengan membuat flowchart?');

-- --------------------------------------------------------

--
-- Table structure for table `unduhan`
--

CREATE TABLE IF NOT EXISTS `unduhan` (
  `id` int(2) NOT NULL,
  `kd_matkul` varchar(4) NOT NULL,
  `tanggalkirim` date NOT NULL,
  `namafile` varchar(100) NOT NULL,
  `tipefile` varchar(10) NOT NULL,
  `ukuranfile` int(10) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unduhan`
--

INSERT INTO `unduhan` (`id`, `kd_matkul`, `tanggalkirim`, `namafile`, `tipefile`, `ukuranfile`, `path`) VALUES
(1, 'PTI1', '2016-12-02', 'MODUL 01.pdf', 'pdf', 793157, 'unggah/MODUL 01.pdf'),
(2, 'PTI1', '2016-12-02', 'MODUL 02.pdf', 'pdf', 339475, 'unggah/MODUL 02.pdf'),
(3, 'PTI1', '2016-12-02', 'MODUL 03.pdf', 'pdf', 206971, 'unggah/MODUL 03.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `uraian`
--

CREATE TABLE IF NOT EXISTS `uraian` (
  `id` int(11) NOT NULL,
  `kd_matkul` varchar(4) NOT NULL,
  `nomor` int(11) NOT NULL,
  `soal` varchar(200) NOT NULL,
  `kunci1` varchar(20) NOT NULL,
  `kunci2` varchar(20) NOT NULL,
  `kunci3` varchar(20) NOT NULL,
  `kunci4` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uraian`
--

INSERT INTO `uraian` (`id`, `kd_matkul`, `nomor`, `soal`, `kunci1`, `kunci2`, `kunci3`, `kunci4`, `tanggal`, `jenis`) VALUES
(1, 'PTI1', 1, 'Apa yang dimaksud router', 'alat jaringan', 'komponen', 'penghubung', 'routing', '2016-11-30', 'uas'),
(2, 'PTI1', 2, 'Apa yang dimaksud routing', 'proses', 'jaringan', 'alamat', 'jembatan', '2016-11-30', 'uas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `diskusi`
--
ALTER TABLE `diskusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hdiskusi`
--
ALTER TABLE `hdiskusi`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `kd_kelompok` (`kd_kelompok`);

--
-- Indexes for table `hdokumen`
--
ALTER TABLE `hdokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawabanuraian`
--
ALTER TABLE `jawabanuraian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komposisi`
--
ALTER TABLE `komposisi`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `kd_matkul` (`kd_matkul`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pilihanganda`
--
ALTER TABLE `pilihanganda`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `soal` (`soal`);

--
-- Indexes for table `spesifikasi`
--
ALTER TABLE `spesifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `soal` (`soal`);

--
-- Indexes for table `udokumen`
--
ALTER TABLE `udokumen`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `kd_matkul` (`kd_matkul`);

--
-- Indexes for table `unduhan`
--
ALTER TABLE `unduhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uraian`
--
ALTER TABLE `uraian`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `soal` (`soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `diskusi`
--
ALTER TABLE `diskusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hdiskusi`
--
ALTER TABLE `hdiskusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hdokumen`
--
ALTER TABLE `hdokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jawabanuraian`
--
ALTER TABLE `jawabanuraian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `komposisi`
--
ALTER TABLE `komposisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pilihanganda`
--
ALTER TABLE `pilihanganda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `spesifikasi`
--
ALTER TABLE `spesifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `udokumen`
--
ALTER TABLE `udokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `unduhan`
--
ALTER TABLE `unduhan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `uraian`
--
ALTER TABLE `uraian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
