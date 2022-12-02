-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 10:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuanganku`
--

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `kode_costumer` int(20) NOT NULL,
  `nama_costumer` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `costumer`
--

INSERT INTO `costumer` (`kode_costumer`, `nama_costumer`, `no_telp`, `alamat`) VALUES
(5, 'ainiyyah', '09876543', 'depok'),
(7, 'adam', '09876553', 'bogor'),
(9, 'adul ', '0987663 ', 'depok barat ');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(20) NOT NULL,
  `nama_costumer` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `jumlah_bayar` int(100) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `nama_marketing` varchar(50) NOT NULL,
  `keterangan_bayar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `nama_costumer`, `kategori`, `jumlah_bayar`, `tanggal_bayar`, `nama_marketing`, `keterangan_bayar`) VALUES
(5, 'coba 1 ', 'Instalasi', 30000, '2022-08-09', 'Adam', 'lunas'),
(8, 'qwert ', 'instalasi kabel', 200000, '2022-08-14', 'Adam', 'lunas'),
(9, 'adma ', 'instalsi kabel', 2424, '2022-08-14', 'qwewqwqe', 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `Harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `Harga`) VALUES
(19, 'Instalasi Jaringan LAN OK', 200000),
(24, 'Instalasi Kabel jaringan', 3000000),
(25, 'Instalasi kabel', 2000000),
(29, 'Penggalian lubang', 20000000),
(31, 'Tiang listrik', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `pendapatan`
--

CREATE TABLE `pendapatan` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendapatan`
--

INSERT INTO `pendapatan` (`id`, `tgl`, `keterangan`, `kategori_id`, `jumlah`, `note`) VALUES
(39, '2022-05-27', 'Pendapatan', 20, 200000, 'Membuat landing page untuk Pt.abdi kurnia jaya'),
(40, '2022-05-27', 'Pendapatan', 22, 20000000, 'Membeli lan kabel sepanjang 500 meter'),
(42, '2022-07-01', 'Pengeluaran', 24, 100000, 'Tinta printer habis'),
(43, '2022-07-19', 'Pengeluaran', 20, 500000, 'Update fitur'),
(44, '2022-07-21', 'Pengeluaran', 19, 10000000, 'Menginstal lan'),
(45, '2022-07-21', 'Pendapatan', 22, 10000000, 'Membeli lan kabel'),
(46, '2022-07-21', 'Pendapatan', 26, 4000000, 'pemasangan listrik'),
(48, '2022-07-21', 'Pendapatan', 19, 100000, 'Pembayaran dari project'),
(49, '2022-07-21', 'Pendapatan', 29, 2000000, 'pembayaran dari project penggalian lubang'),
(50, '2022-07-21', 'Pendapatan', 25, 2000000, 'pembayaran dari instalasi kabel'),
(51, '2022-07-21', 'Pendapatan', 24, 20000000, 'pembayaran dari instalasi kabel'),
(52, '2022-07-21', 'Pengeluaran', 19, 10000000, 'membeli kabel lan 200 meter'),
(53, '2022-07-21', 'Pengeluaran', 29, 100000, 'membeli kebutuhan lapangan'),
(54, '2022-08-09', 'Pengeluaran', 29, 400000, 'SEDANG DALAM PENGERJAAN'),
(55, '2022-08-09', 'Pendapatan', 19, 2000000, 'sedang dalam pengerjaan');

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `id` int(10) NOT NULL,
  `tipe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id`, `tipe`) VALUES
(1, 'Pendapatan'),
(2, 'Pengeluaran');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `hak_akses` enum('admin','user') NOT NULL,
  `status` enum('Aktif','Blokir') DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `hak_akses`, `status`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'Administrator', 'admin', 'Aktif'),
(9, 'adam', '1d7c2923c1684726dc23d2901c4d8157', 'adam muhamad dafa', 'admin', 'Aktif'),
(10, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'acong', 'user', 'Blokir'),
(11, 'user123', '6ad14ba9986e3615423dfca256d04e3f', 'marketing', 'user', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`kode_costumer`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sumber` (`kategori_id`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `kode_costumer` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12122;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pendapatan`
--
ALTER TABLE `pendapatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
