-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 07:44 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_amil`
--

CREATE TABLE IF NOT EXISTS `t_amil` (
`id_amil` int(11) NOT NULL,
  `nama_amil` varchar(30) NOT NULL,
  `no_hp_amil` varchar(14) NOT NULL,
  `alamat_amil` varchar(50) NOT NULL,
  `id_mesjid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_amil`
--

INSERT INTO `t_amil` (`id_amil`, `nama_amil`, `no_hp_amil`, `alamat_amil`, `id_mesjid`) VALUES
(1, 'Sutoyo', '0821123123', 'Jl. Durianni', 2),
(2, 'Mahmud', '0813121321', 'Jl. Pepaya', 3);

-- --------------------------------------------------------

--
-- Table structure for table `t_donasi`
--

CREATE TABLE IF NOT EXISTS `t_donasi` (
`id_donasi` int(11) NOT NULL,
  `nama_donatur` varchar(50) NOT NULL,
  `no_hp_donatur` varchar(14) NOT NULL,
  `alamat_donatur` varchar(100) NOT NULL,
  `tgl_donasi` date NOT NULL,
  `total_donasi` int(11) NOT NULL,
  `bukti_donasi` varchar(250) NOT NULL,
  `tgl_validasi` date NOT NULL,
  `id_amil` int(11) NOT NULL,
  `status_validasi` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_donasi`
--

INSERT INTO `t_donasi` (`id_donasi`, `nama_donatur`, `no_hp_donatur`, `alamat_donatur`, `tgl_donasi`, `total_donasi`, `bukti_donasi`, `tgl_validasi`, `id_amil`, `status_validasi`) VALUES
(1, 'Wayoik', '0823198938123', 'Jl. Melati', '2020-03-11', 45000, './assets/img/bukti_donasi/bukti1.jpeg', '2020-03-12', 2, '1'),
(2, 'Tukimin', '0812983912', 'Jl. Merpati', '2020-03-11', 80000, './assets/img/bukti_donasi/bukti2.jpeg', '2020-03-12', 2, '1'),
(3, 'Sunarto', '0182399123', 'Jl. Naga Sakti', '2020-03-12', 100000, './assets/img/bukti_donasi/bukti3.jpeg', '2020-03-12', 2, '0');

-- --------------------------------------------------------

--
-- Table structure for table `t_infak`
--

CREATE TABLE IF NOT EXISTS `t_infak` (
`id_infak` int(11) NOT NULL,
  `nama_pembayar` varchar(20) NOT NULL,
  `tgl_infak` date NOT NULL,
  `total_infak` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_infak`
--

INSERT INTO `t_infak` (`id_infak`, `nama_pembayar`, `tgl_infak`, `total_infak`) VALUES
(1, 'Hiruzen', '2020-02-03', 4000),
(2, 'Sarutobi', '2020-02-03', 5000),
(3, 'Carlos', '2020-03-02', 150000),
(4, 'Sabiru', '2020-03-05', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `t_kritik_saran`
--

CREATE TABLE IF NOT EXISTS `t_kritik_saran` (
`id_saran` int(11) NOT NULL,
  `tgl_saran` date NOT NULL,
  `nama_saran` varchar(50) NOT NULL,
  `subjek_saran` varchar(200) NOT NULL,
  `saran` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kritik_saran`
--

INSERT INTO `t_kritik_saran` (`id_saran`, `tgl_saran`, `nama_saran`, `subjek_saran`, `saran`) VALUES
(1, '2020-03-06', 'test saran', 'test doang', ' haha hihi'),
(2, '2020-03-06', 'test2', 'hihi', 'huhu hehe'),
(3, '2020-03-11', 'haha', 'asjdasd', 'mxzncmnxc'),
(4, '2020-03-24', 'asdad', 'asdad', 'asdasd'),
(5, '2020-03-24', '', '', ''),
(6, '2020-03-24', 'haha', 'hihi', 'huhuhuhuhu');

-- --------------------------------------------------------

--
-- Table structure for table `t_mesjid`
--

CREATE TABLE IF NOT EXISTS `t_mesjid` (
`id_mesjid` int(11) NOT NULL,
  `nama_mesjid` varchar(20) NOT NULL,
  `alamat_mesjid` varchar(50) NOT NULL,
  `RT` varchar(4) NOT NULL,
  `RW` varchar(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_mesjid`
--

INSERT INTO `t_mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `RT`, `RW`) VALUES
(1, 'Al-Huda', 'Jl. Garuda Sakti', '012', '002'),
(2, 'Baiturrahman', 'Jl. Bawal', '002', '001'),
(3, 'Al-Khairat', 'Jl. Paus', '008', '002'),
(4, 'Al-Jabbar', 'Jl. Simpang Baru', '003', '001');

-- --------------------------------------------------------

--
-- Table structure for table `t_pembayar`
--

CREATE TABLE IF NOT EXISTS `t_pembayar` (
`id_pembayar` int(11) NOT NULL,
  `nama_pembayar` varchar(30) NOT NULL,
  `no_hp_pembayar` varchar(14) NOT NULL,
  `alamat_pembayar` varchar(50) NOT NULL,
  `id_mesjid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pembayar`
--

INSERT INTO `t_pembayar` (`id_pembayar`, `nama_pembayar`, `no_hp_pembayar`, `alamat_pembayar`, `id_mesjid`) VALUES
(1, 'Hiruzen', '01823123', 'Jl. Rajawali', 2),
(2, 'Sarutobi', '2193898123', 'Jl. Pelangi', 3),
(3, 'Minato', '080819289123', 'Jl. Indah Karya', 2),
(4, 'Mizuki', '08129389123', 'Jl. Ambalang', 3),
(5, 'Sabiru', '081823123', 'Jl. Tulip', 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_pembayaran`
--

CREATE TABLE IF NOT EXISTS `t_pembayaran` (
`id_pembayaran` int(11) NOT NULL,
  `id_zakat` int(11) NOT NULL,
  `id_amil` int(11) NOT NULL,
  `id_pembayar` int(11) NOT NULL,
  `tgl_penyerahan` date NOT NULL,
  `pembayaran_beras` double NOT NULL,
  `pembayaran_uang` int(11) NOT NULL,
  `jumlah_tanggungan` int(2) NOT NULL,
  `total_pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pembayaran`
--

INSERT INTO `t_pembayaran` (`id_pembayaran`, `id_zakat`, `id_amil`, `id_pembayar`, `tgl_penyerahan`, `pembayaran_beras`, `pembayaran_uang`, `jumlah_tanggungan`, `total_pembayaran`) VALUES
(1, 5, 2, 1, '2020-02-03', 2.7, 0, 3, '8.1'),
(2, 6, 2, 2, '2020-02-03', 0, 7000, 4, '28000'),
(3, 5, 1, 3, '2020-03-02', 2.5, 0, 5, '12.5'),
(4, 6, 2, 4, '2020-03-05', 0, 8333, 6, '50000'),
(5, 5, 2, 5, '2020-03-05', 0, 15000, 2, '30000');

-- --------------------------------------------------------

--
-- Table structure for table `t_penerima`
--

CREATE TABLE IF NOT EXISTS `t_penerima` (
`id_penerima` int(11) NOT NULL,
  `nama_penerima` varchar(30) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `alamat_penerima` varchar(30) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_penerima`
--

INSERT INTO `t_penerima` (`id_penerima`, `nama_penerima`, `kategori`, `alamat_penerima`, `status`) VALUES
(1, 'Si A', 'Fakir', 'Jl. Jalan', '1'),
(2, 'Si B', 'Fakir', 'Jl. Mawar', '1'),
(3, 'Si C', 'Miskin', 'Jl. Kamboja', '1'),
(4, 'Si D', 'Gharim', 'Jl. Kembang', '1'),
(5, 'Si E', 'Mualaf', 'Jl. Kartama', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_penerimaan`
--

CREATE TABLE IF NOT EXISTS `t_penerimaan` (
`id_penerimaan` int(11) NOT NULL,
  `id_amil` int(11) NOT NULL,
  `id_penerima` int(11) NOT NULL,
  `tgl_penerimaan` date NOT NULL,
  `jumlah_penerimaan_uang` int(11) NOT NULL,
  `jumlah_penerimaan_beras` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_penerimaan`
--

INSERT INTO `t_penerimaan` (`id_penerimaan`, `id_amil`, `id_penerima`, `tgl_penerimaan`, `jumlah_penerimaan_uang`, `jumlah_penerimaan_beras`) VALUES
(1, 1, 1, '2020-03-02', 40000, 0),
(2, 1, 2, '2020-03-02', 40000, 0),
(3, 1, 3, '2020-03-02', 0, 4),
(4, 1, 4, '2020-03-02', 40000, 0),
(5, 1, 5, '2020-03-02', 0, 4),
(6, 1, 6, '2020-03-02', 0, 4),
(7, 1, 1, '2020-03-04', 35000, 0),
(8, 1, 2, '2020-03-04', 0, 3),
(9, 1, 3, '2020-03-04', 0, 3),
(10, 1, 4, '2020-03-04', 35000, 0),
(11, 1, 6, '2020-03-04', 35000, 0),
(12, 2, 1, '2020-03-10', 21600, 4.12),
(13, 2, 2, '2020-03-10', 21600, 4.12),
(14, 2, 3, '2020-03-10', 21600, 4.12),
(15, 2, 5, '2020-03-10', 21600, 4.12),
(16, 2, 6, '2020-03-10', 21600, 4.12),
(17, 2, 1, '2020-03-11', 18000, 3.4333333333333),
(18, 2, 2, '2020-03-11', 18000, 3.4333333333333),
(19, 2, 3, '2020-03-11', 18000, 3.4333333333333),
(20, 2, 4, '2020-03-11', 18000, 3.4333333333333),
(21, 2, 5, '2020-03-11', 18000, 3.4333333333333),
(22, 2, 6, '2020-03-11', 18000, 3.4333333333333);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`username`, `password`, `status`, `level`) VALUES
('admin', 'admin123', 'aktif', 1),
('Mahmud', '0813121321', 'aktif', 2),
('Sutoyo', '0821123123', 'aktif', 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_zakat`
--

CREATE TABLE IF NOT EXISTS `t_zakat` (
`id_zakat` int(11) NOT NULL,
  `jenis_zakat` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_zakat`
--

INSERT INTO `t_zakat` (`id_zakat`, `jenis_zakat`) VALUES
(5, 'Zakat Fitrah'),
(6, 'Zakat Mal'),
(11, 'Zakat Fidiah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_amil`
--
ALTER TABLE `t_amil`
 ADD PRIMARY KEY (`id_amil`);

--
-- Indexes for table `t_donasi`
--
ALTER TABLE `t_donasi`
 ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `t_infak`
--
ALTER TABLE `t_infak`
 ADD PRIMARY KEY (`id_infak`);

--
-- Indexes for table `t_kritik_saran`
--
ALTER TABLE `t_kritik_saran`
 ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `t_mesjid`
--
ALTER TABLE `t_mesjid`
 ADD PRIMARY KEY (`id_mesjid`);

--
-- Indexes for table `t_pembayar`
--
ALTER TABLE `t_pembayar`
 ADD PRIMARY KEY (`id_pembayar`);

--
-- Indexes for table `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
 ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `t_penerima`
--
ALTER TABLE `t_penerima`
 ADD PRIMARY KEY (`id_penerima`);

--
-- Indexes for table `t_penerimaan`
--
ALTER TABLE `t_penerimaan`
 ADD PRIMARY KEY (`id_penerimaan`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `t_zakat`
--
ALTER TABLE `t_zakat`
 ADD PRIMARY KEY (`id_zakat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_amil`
--
ALTER TABLE `t_amil`
MODIFY `id_amil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_donasi`
--
ALTER TABLE `t_donasi`
MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_infak`
--
ALTER TABLE `t_infak`
MODIFY `id_infak` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_kritik_saran`
--
ALTER TABLE `t_kritik_saran`
MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_mesjid`
--
ALTER TABLE `t_mesjid`
MODIFY `id_mesjid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_pembayar`
--
ALTER TABLE `t_pembayar`
MODIFY `id_pembayar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_penerima`
--
ALTER TABLE `t_penerima`
MODIFY `id_penerima` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_penerimaan`
--
ALTER TABLE `t_penerimaan`
MODIFY `id_penerimaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `t_zakat`
--
ALTER TABLE `t_zakat`
MODIFY `id_zakat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
