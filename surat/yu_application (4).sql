-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 01:58 PM
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
-- Database: `myrep`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_city`
--

CREATE TABLE `m_city` (
  `idcity` int(10) NOT NULL,
  `city` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_city`
--

INSERT INTO `m_city` (`idcity`, `city`) VALUES
(1, 'Jakarta'),
(2, 'Surabaya'),
(3, 'Palu'),
(4, 'Medan'),
(5, 'palembang');

-- --------------------------------------------------------

--
-- Table structure for table `m_fp`
--

CREATE TABLE `m_fp` (
  `id_fp` int(10) NOT NULL,
  `no_fp` varchar(255) NOT NULL,
  `npwp` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_gambar`
--

CREATE TABLE `m_gambar` (
  `id_gambar` int(15) NOT NULL,
  `gambar1` varchar(255) NOT NULL,
  `gambar2` varchar(255) NOT NULL,
  `gambar3` varchar(255) NOT NULL,
  `gambar4` varchar(255) NOT NULL,
  `gambar5` varchar(255) NOT NULL,
  `gambar6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_invoice`
--

CREATE TABLE `m_invoice` (
  `idinvoice` int(15) NOT NULL,
  `noinvoice` varchar(255) NOT NULL,
  `dateinvoice` date NOT NULL,
  `jasa` varchar(255) NOT NULL,
  `ppn` decimal(12,0) NOT NULL,
  `pph` decimal(12,0) NOT NULL,
  `nominal` decimal(12,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_invoice`
--

INSERT INTO `m_invoice` (`idinvoice`, `noinvoice`, `dateinvoice`, `jasa`, `ppn`, `pph`, `nominal`) VALUES
(11, '193/PT-RCM/KW/XII/2019', '2019-12-28', 'Kontrak Baliho Clas Mild ', '10', '2', '11');

-- --------------------------------------------------------

--
-- Table structure for table `m_modul1`
--

CREATE TABLE `m_modul1` (
  `id_modul1` int(15) NOT NULL,
  `judul_modul1` varchar(255) NOT NULL,
  `jan` int(11) NOT NULL,
  `feb` int(11) NOT NULL,
  `mar` int(11) NOT NULL,
  `apr` int(11) NOT NULL,
  `mei` int(11) NOT NULL,
  `jun` int(11) NOT NULL,
  `jul` int(11) NOT NULL,
  `agust` int(11) NOT NULL,
  `sept` int(11) NOT NULL,
  `oktob` int(11) NOT NULL,
  `novem` int(11) NOT NULL,
  `desem` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_modul1`
--

INSERT INTO `m_modul1` (`id_modul1`, `judul_modul1`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `agust`, `sept`, `oktob`, `novem`, `desem`, `jumlah`) VALUES
(1, 'Bilboard, ClassMild, Jl Veteran Palu', 0, 192000000, 0, 0, 0, 0, 0, 192000000, 0, 0, 0, 192000000, 576000000),
(4, 'Billboard, Class Mild, Jl gajah Mada Palu', 0, 104150000, 0, 104150000, 0, 0, 0, 0, 0, 104150000, 0, 0, 312450000);

-- --------------------------------------------------------

--
-- Table structure for table `m_modul2`
--

CREATE TABLE `m_modul2` (
  `id_modul2` int(15) NOT NULL,
  `judul_modul2` varchar(255) NOT NULL,
  `jan` int(11) NOT NULL,
  `feb` int(11) NOT NULL,
  `mar` int(11) NOT NULL,
  `apr` int(11) NOT NULL,
  `mei` int(11) NOT NULL,
  `jun` int(11) NOT NULL,
  `jul` int(11) NOT NULL,
  `agust` int(11) NOT NULL,
  `sept` int(11) NOT NULL,
  `oktob` int(11) NOT NULL,
  `novem` int(11) NOT NULL,
  `desem` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_modul2`
--

INSERT INTO `m_modul2` (`id_modul2`, `judul_modul2`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `agust`, `sept`, `oktob`, `novem`, `desem`, `jumlah`) VALUES
(1, 'Pembayaran Air', 12121, 342, 0, 0, 0, 32, 2432, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_modul3`
--

CREATE TABLE `m_modul3` (
  `id_modul3` int(15) NOT NULL,
  `judul_modul3` varchar(255) NOT NULL,
  `jan` int(11) NOT NULL,
  `feb` int(11) NOT NULL,
  `mar` int(11) NOT NULL,
  `apr` int(11) NOT NULL,
  `mei` int(11) NOT NULL,
  `jun` int(11) NOT NULL,
  `jul` int(11) NOT NULL,
  `agust` int(11) NOT NULL,
  `sept` int(11) NOT NULL,
  `oktob` int(11) NOT NULL,
  `novem` int(11) NOT NULL,
  `desem` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_modul3`
--

INSERT INTO `m_modul3` (`id_modul3`, `judul_modul3`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `agust`, `sept`, `oktob`, `novem`, `desem`, `jumlah`) VALUES
(1, 'Pembayaran Iklan', 12312312, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Pembayaran Iklan', 21, 1, 233232, 292929, 181881, 188, 177, 1661, 1555, 1666, 12888, 199988, 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_modul4`
--

CREATE TABLE `m_modul4` (
  `id_modul4` int(15) NOT NULL,
  `judul_modul4` varchar(255) NOT NULL,
  `jan` int(11) NOT NULL,
  `feb` int(11) NOT NULL,
  `mar` int(11) NOT NULL,
  `apr` int(11) NOT NULL,
  `mei` int(11) NOT NULL,
  `jun` int(11) NOT NULL,
  `jul` int(11) NOT NULL,
  `agust` int(11) NOT NULL,
  `sept` int(11) NOT NULL,
  `oktob` int(11) NOT NULL,
  `novem` int(11) NOT NULL,
  `desem` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_modul4`
--

INSERT INTO `m_modul4` (`id_modul4`, `judul_modul4`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `agust`, `sept`, `oktob`, `novem`, `desem`, `jumlah`) VALUES
(1, 'Pembayaran Iklan', 121212, 212112, 3131, 31313, 6787878, 677878, 666767, 89989, 89899898, 7878, 9090, 878778, 0),
(2, 'Pembayaran Gas', 89898998, 8989989, 78898989, 89898989, 899889, 89899889, 898989, 899898, 989889, 898989, 9898, 988989, 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_negara`
--

CREATE TABLE `m_negara` (
  `idcountry` int(10) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_negara`
--

INSERT INTO `m_negara` (`idcountry`, `country`) VALUES
(1, 'Indonesia'),
(2, 'Malasia');

-- --------------------------------------------------------

--
-- Table structure for table `m_penawaran`
--

CREATE TABLE `m_penawaran` (
  `id_penawaran` int(15) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `namabrand` varchar(255) NOT NULL,
  `jenispengajuan` varchar(255) NOT NULL,
  `jenismedia` varchar(255) NOT NULL,
  `masakontrak` varchar(255) NOT NULL,
  `nominal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_penawaran`
--

INSERT INTO `m_penawaran` (`id_penawaran`, `nomor`, `namabrand`, `jenispengajuan`, `jenismedia`, `masakontrak`, `nominal`) VALUES
(5, '155/PT-RCM/PNW/IV/2018', 'ClasMld', 'Produksi', 'Baliho', '1', '135.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `m_po`
--

CREATE TABLE `m_po` (
  `id_po` int(15) NOT NULL,
  `nopo` varchar(255) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `nokontrak` varchar(255) NOT NULL,
  `nobapp` varchar(255) NOT NULL,
  `invoicedate` varchar(255) NOT NULL,
  `nominal` int(50) NOT NULL,
  `paydate` date NOT NULL,
  `statusbayar` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_po`
--

INSERT INTO `m_po` (`id_po`, `nopo`, `startdate`, `enddate`, `nokontrak`, `nobapp`, `invoicedate`, `nominal`, `paydate`, `statusbayar`) VALUES
(2, '21900000605', '2019-03-06', '2020-03-06', '96/MC/OOH/CLM/PRE/III/2019', '96/OOH96-2-3/CLM/PRE/X/X', '2019-03-03', 55000, '2020-03-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_sp`
--

CREATE TABLE `m_sp` (
  `id_sp` int(10) NOT NULL,
  `namaperusahaan` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `noinvoice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_spk`
--

CREATE TABLE `m_spk` (
  `idmasterspk` int(10) NOT NULL,
  `spktitle` varchar(250) NOT NULL,
  `spkdate` date NOT NULL,
  `spknumber` varchar(50) NOT NULL,
  `total` decimal(15,0) NOT NULL DEFAULT 0,
  `spkto` varchar(250) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_spk`
--

INSERT INTO `m_spk` (`idmasterspk`, `spktitle`, `spkdate`, `spknumber`, `total`, `spkto`, `status`) VALUES
(1, 'PRODUKSI & PASANG BALIHO KELUARA, BAHOOP!', '2019-12-19', '016/PT.RCM/SPK/XII/2019', '6200000', 'Bapak Rustam', 1),
(4, 'SPK Pemasangan / Pembongkaran Vinyl Gambar Bilboard / Baliho', '2019-12-15', '045/PT.RCM/SPK/XI/2019', '1890000', 'pak Utoyo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `idcustomer` int(10) NOT NULL,
  `codecustomer` varchar(10) NOT NULL,
  `companyname` varchar(250) NOT NULL,
  `address01` text NOT NULL,
  `city01` varchar(250) NOT NULL,
  `address02` text NOT NULL,
  `city02` varchar(250) NOT NULL,
  `address03` text NOT NULL,
  `city03` varchar(250) NOT NULL,
  `name01` varchar(250) NOT NULL,
  `jabatan01` varchar(250) NOT NULL,
  `name02` varchar(250) NOT NULL,
  `jabatan02` varchar(250) NOT NULL,
  `name03` varchar(250) NOT NULL,
  `jabatan03` varchar(250) NOT NULL,
  `brand01` varchar(250) NOT NULL,
  `brand02` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`idcustomer`, `codecustomer`, `companyname`, `address01`, `city01`, `address02`, `city02`, `address03`, `city03`, `name01`, `jabatan01`, `name02`, `jabatan02`, `name03`, `jabatan03`, `brand01`, `brand02`, `phone`, `fax`, `email`, `country`, `status`, `note`) VALUES
(3, 'C000001', 'digital mandiri teknologi', 'Jakarta', 'Jakarta', '', 'Jakarta', 'Komplek Mimi TownHouse 2 Blok B5\r\nBedahan Sawangan', 'Jakarta', 'Romadhon', '', 'Moch.', '', 'Moch. Dodik Romadhon', '', 'DMT', '', '082220468952', '', 'mydodikromadhon@gmail.com', 'Indonesia', '1', ''),
(4, 'C000002', 'pt abc', 'Komplek Mimi TownHouse 2 Blok B5\r\nBedahan Sawangan', 'Jakarta', '', 'Jakarta', 'Jakarta', 'Jakarta', 'Teknologi', '', 'Digital', '', 'Digital Mandiri Teknologi', '', 'DMT', '', '082220468952', '', 'development@digitalmandiriteknologi.com', 'Indonesia', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `idmasterinvoice` int(15) NOT NULL,
  `idinvoice` varchar(255) DEFAULT NULL,
  `dateinvoice` date DEFAULT NULL,
  `jasa` varchar(255) DEFAULT NULL,
  `ppn` decimal(10,0) DEFAULT NULL,
  `pph` decimal(10,0) DEFAULT NULL,
  `nominal` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spkdetail`
--

CREATE TABLE `tbl_spkdetail` (
  `idspkdetail` int(12) NOT NULL,
  `idspk` int(12) NOT NULL,
  `lokasi` varchar(250) NOT NULL,
  `tema` text NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `jumlah` decimal(10,0) NOT NULL,
  `spesifikasi` varchar(250) NOT NULL,
  `periode_tayang` date NOT NULL,
  `harga` text NOT NULL,
  `pembayaranvia` varchar(250) NOT NULL,
  `biaya` decimal(10,0) NOT NULL,
  `gambar1` varchar(500) NOT NULL,
  `gambar2` varchar(500) NOT NULL,
  `gambar3` varchar(500) NOT NULL,
  `gambar4` varchar(500) NOT NULL,
  `gambar5` varchar(500) NOT NULL,
  `gambar6` varchar(500) NOT NULL,
  `direktur` varchar(100) NOT NULL DEFAULT 'ANDHY EKASVARA',
  `disetujui` varchar(100) NOT NULL DEFAULT 'SLES',
  `dibuatoleh` varchar(100) NOT NULL DEFAULT 'Iin',
  `diperiksa` varchar(100) NOT NULL DEFAULT 'Hikmah',
  `tanggalapproval` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_spkdetail`
--

INSERT INTO `tbl_spkdetail` (`idspkdetail`, `idspk`, `lokasi`, `tema`, `ukuran`, `jumlah`, `spesifikasi`, `periode_tayang`, `harga`, `pembayaranvia`, `biaya`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `gambar6`, `direktur`, `disetujui`, `dibuatoleh`, `diperiksa`, `tanggalapproval`, `status`) VALUES
(4, 1, 'Palu', '-', '-', '1', '-', '2020-03-31', '0', 'BCA', '0', 'assets/images/01.jpg', 'assets/images/02.jpg', 'assets/images/03.jpg', 'assets/images/04.jpg', 'assets/images/05.jpg', 'assets/images/06.jpg', 'ANDHY EKASVARA', 'SLES', 'Iin', 'Hikmah', '2020-03-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `iduser` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `position` varchar(150) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`iduser`, `fname`, `lname`, `email`, `password`, `position`, `status`) VALUES
(1, 'dodik', 'romadhon', 'mydodikromadhon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 1),
(2, 'aldin', 'risaldi', 'tes@tes.com', '648132893e7faa38d9e721472c767d3e', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_city`
--
ALTER TABLE `m_city`
  ADD PRIMARY KEY (`idcity`);

--
-- Indexes for table `m_fp`
--
ALTER TABLE `m_fp`
  ADD PRIMARY KEY (`id_fp`);

--
-- Indexes for table `m_gambar`
--
ALTER TABLE `m_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `m_invoice`
--
ALTER TABLE `m_invoice`
  ADD PRIMARY KEY (`idinvoice`);

--
-- Indexes for table `m_modul1`
--
ALTER TABLE `m_modul1`
  ADD PRIMARY KEY (`id_modul1`);

--
-- Indexes for table `m_modul2`
--
ALTER TABLE `m_modul2`
  ADD PRIMARY KEY (`id_modul2`);

--
-- Indexes for table `m_modul3`
--
ALTER TABLE `m_modul3`
  ADD PRIMARY KEY (`id_modul3`);

--
-- Indexes for table `m_modul4`
--
ALTER TABLE `m_modul4`
  ADD PRIMARY KEY (`id_modul4`);

--
-- Indexes for table `m_negara`
--
ALTER TABLE `m_negara`
  ADD PRIMARY KEY (`idcountry`);

--
-- Indexes for table `m_penawaran`
--
ALTER TABLE `m_penawaran`
  ADD PRIMARY KEY (`id_penawaran`);

--
-- Indexes for table `m_po`
--
ALTER TABLE `m_po`
  ADD PRIMARY KEY (`id_po`);

--
-- Indexes for table `m_sp`
--
ALTER TABLE `m_sp`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `m_spk`
--
ALTER TABLE `m_spk`
  ADD PRIMARY KEY (`idmasterspk`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`idmasterinvoice`);

--
-- Indexes for table `tbl_spkdetail`
--
ALTER TABLE `tbl_spkdetail`
  ADD PRIMARY KEY (`idspkdetail`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_city`
--
ALTER TABLE `m_city`
  MODIFY `idcity` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_fp`
--
ALTER TABLE `m_fp`
  MODIFY `id_fp` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_gambar`
--
ALTER TABLE `m_gambar`
  MODIFY `id_gambar` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_invoice`
--
ALTER TABLE `m_invoice`
  MODIFY `idinvoice` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `m_modul1`
--
ALTER TABLE `m_modul1`
  MODIFY `id_modul1` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_modul2`
--
ALTER TABLE `m_modul2`
  MODIFY `id_modul2` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_modul3`
--
ALTER TABLE `m_modul3`
  MODIFY `id_modul3` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_modul4`
--
ALTER TABLE `m_modul4`
  MODIFY `id_modul4` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_negara`
--
ALTER TABLE `m_negara`
  MODIFY `idcountry` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_penawaran`
--
ALTER TABLE `m_penawaran`
  MODIFY `id_penawaran` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_po`
--
ALTER TABLE `m_po`
  MODIFY `id_po` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_sp`
--
ALTER TABLE `m_sp`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_spk`
--
ALTER TABLE `m_spk`
  MODIFY `idmasterspk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `idcustomer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `idmasterinvoice` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_spkdetail`
--
ALTER TABLE `tbl_spkdetail`
  MODIFY `idspkdetail` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
