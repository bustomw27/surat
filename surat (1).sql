-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 18.04
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `payroll`
--

CREATE TABLE `payroll` (
  `idpayroll` int(12) NOT NULL,
  `tglsurat` date NOT NULL,
  `nosurat` varchar(255) NOT NULL,
  `tglefektif` date NOT NULL,
  `nama` varchar(255) NOT NULL,
  `titlesebelum` varchar(255) NOT NULL,
  `lokasisebelum` varchar(255) NOT NULL,
  `statussebelum` varchar(225) NOT NULL,
  `titlesesudah` varchar(255) NOT NULL,
  `lokasisesudah` varchar(255) NOT NULL,
  `statussesudah` varchar(225) NOT NULL,
  `penandatangan` varchar(255) NOT NULL,
  `jabatanpenandatangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `payroll`
--

INSERT INTO `payroll` (`idpayroll`, `tglsurat`, `nosurat`, `tglefektif`, `nama`, `titlesebelum`, `lokasisebelum`, `statussebelum`, `titlesesudah`, `lokasisesudah`, `statussesudah`, `penandatangan`, `jabatanpenandatangan`) VALUES
(2222, '2020-04-18', '123', '2020-04-17', 'a', 'a', 'a', '0', 'a', '0', '0', 'a', 'a'),
(22222, '2020-04-17', '123', '2020-04-14', 'bustomi wildan', 'admin', 'tangerang', '0', 'admin supv', '0', '0', 'onel hartin', 'hrd'),
(312312312, '2020-04-02', '123', '2020-04-29', 'c', 'c', 'c', '0', 'c', '0', '0', 'c', 'c');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_customer`
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
-- Dumping data untuk tabel `tbl_customer`
--

INSERT INTO `tbl_customer` (`idcustomer`, `codecustomer`, `companyname`, `address01`, `city01`, `address02`, `city02`, `address03`, `city03`, `name01`, `jabatan01`, `name02`, `jabatan02`, `name03`, `jabatan03`, `brand01`, `brand02`, `phone`, `fax`, `email`, `country`, `status`, `note`) VALUES
(3, 'C000001', 'digital mandiri teknologi', 'Jakarta', 'Jakarta', '', 'Jakarta', 'Komplek Mimi TownHouse 2 Blok B5\r\nBedahan Sawangan', 'Jakarta', 'Romadhon', '', 'Moch.', '', 'Moch. Dodik Romadhon', '', 'DMT', '', '082220468952', '', 'mydodikromadhon@gmail.com', 'Indonesia', '1', ''),
(4, 'C000002', 'pt abc', 'Komplek Mimi TownHouse 2 Blok B5\r\nBedahan Sawangan', 'Jakarta', '', 'Jakarta', 'Jakarta', 'Jakarta', 'Teknologi', '', 'Digital', '', 'Digital Mandiri Teknologi', '', 'DMT', '', '082220468952', '', 'development@digitalmandiriteknologi.com', 'Indonesia', '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `idpayroll` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `sex` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_employee`
--

INSERT INTO `tbl_employee` (`idpayroll`, `name`, `branch`, `divisi`, `tittle`, `level`, `sex`) VALUES
(8724, 'Niko Mayhendr1', 'Bogor', 'Marketing New Car', 'CMO UC', 'Officer Junior', 1),
(8725, 'Usman Al Iman', 'Jakarta barat NC', 'Marketing New Car', 'CMO NC', 'Officer Junior', 1),
(8726, 'Usman Al Iman', 'Jakarta barat NC', 'Marketing New Car', 'CMO NC', 'Officer Junior', 1),
(8727, 's', 'Tangerang', 'Operation', 'Admin', 'Officer Junior', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
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
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`iduser`, `fname`, `lname`, `email`, `password`, `position`, `status`) VALUES
(1, 'bustomi', 'wildan', 'bustomw27@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 1),
(2, 'aldin', 'risaldi', 'tes@tes.com', '648132893e7faa38d9e721472c767d3e', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `templatesurat`
--

CREATE TABLE `templatesurat` (
  `idtemplate` int(15) NOT NULL,
  `templatename` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `templateimg` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `templatesurat`
--

INSERT INTO `templatesurat` (`idtemplate`, `templatename`, `note`, `templateimg`, `status`) VALUES
(1, 'b', 'b', 'img002.jpg', 'b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ticket`
--

CREATE TABLE `ticket` (
  `ticketid` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ticket`
--

INSERT INTO `ticket` (`ticketid`, `name`, `email`, `message`) VALUES
(1, 'Bustomi Wildan', 'a@gmail.com', 'aa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`idpayroll`);

--
-- Indeks untuk tabel `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indeks untuk tabel `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`idpayroll`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`iduser`);

--
-- Indeks untuk tabel `templatesurat`
--
ALTER TABLE `templatesurat`
  ADD PRIMARY KEY (`idtemplate`);

--
-- Indeks untuk tabel `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticketid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `payroll`
--
ALTER TABLE `payroll`
  MODIFY `idpayroll` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312312313;

--
-- AUTO_INCREMENT untuk tabel `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `idcustomer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `idpayroll` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8728;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `templatesurat`
--
ALTER TABLE `templatesurat`
  MODIFY `idtemplate` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticketid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
