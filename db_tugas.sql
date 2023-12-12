-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2023 pada 12.55
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tugas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `accident`
--

CREATE TABLE `accident` (
  `id` int(11) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nik` int(25) NOT NULL,
  `telp` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `schedule` date NOT NULL,
  `jalur` varchar(15) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `accident`
--

INSERT INTO `accident` (`id`, `kode`, `nama`, `nik`, `telp`, `tanggal`, `schedule`, `jalur`, `status`) VALUES
(10, '20220621035', 'Herawan', 2147483647, 2147483647, '2023-11-26', '2023-11-27', 'Selo', 'Sakit'),
(11, '20220621035', 'Ade', 2147483647, 2147483647, '2023-12-09', '2023-12-10', 'Selo', 'Hilang'),
(12, '20220621035', 'Herawan', 2147483647, 2147483647, '2023-11-26', '2023-11-27', 'Selo', 'Sakit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `telp_darurat` varchar(25) NOT NULL,
  `jalur` varchar(25) NOT NULL,
  `harga` int(25) NOT NULL,
  `anggota` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `total_harga` varchar(150) NOT NULL,
  `ktp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id`, `kode`, `nama_depan`, `nik`, `alamat`, `jenis_kelamin`, `pekerjaan`, `telp`, `telp_darurat`, `jalur`, `harga`, `anggota`, `tanggal`, `total_harga`, `ktp`) VALUES
(58, '202312111', 'Jumari', '3175091020090007', 'Jl. Tomang Asli No 58  ', 'Pria', 'Karyawan Swasta', '081311542000', '087888709579', 'Pos Pendakian Selo', 75000, 3, '2023-12-23', 'Rp 225.000', ''),
(59, '2023121159', 'Abdullah Fakih', '31750920009280006', 'Jl. Kramat Senen  ', 'Pria', 'Karyawan Swasta', '081298220103', '081294706385', 'Pos Pendakian Wekas', 55000, 5, '2023-12-30', 'Rp 275.000', ''),
(60, '2023121160', 'Anne Arie', '31287009820001', '  Jl. Tomang Asli No 58', 'Wanita', 'Karyawan Swasta', '087882859285', '08788091020', 'Pos Pendakian Cuntel', 65000, 10, '2023-12-31', 'Rp 650.000', ''),
(61, '2023121161', 'Muhamad Zulfahreza', '31720973900012', '  Jl. Sunter Jakarta Utara', 'Pria', 'Karyawan Swasta', '089636731350', '08788091020', 'Pos Pendakian Suwanting', 45000, 4, '2023-12-30', 'Rp 180.000', ''),
(62, '2023121162', 'Wega Satya', '31279792009026', 'Jl. Pasar Baru Senen Jakarta Pusat  ', 'Pria', 'Karyawan Swasta', '081294706385', '087769250654', 'Pos Pendakian Wekas', 55000, 4, '2023-12-24', 'Rp 220.000', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `id_jalur` int(11) NOT NULL,
  `jalur` varchar(25) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`id_jalur`, `jalur`, `price`) VALUES
(1, 'Pos Pendakian Selo', 75000),
(3, 'Pos Pendakian Suwanting', 45000),
(6, 'Pos Pendakian Wekas', 55000),
(7, 'Pos Pendakian Cuntel', 65000),
(8, 'Pos Pendakian Thekelan', 40000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `naik`
--

CREATE TABLE `naik` (
  `id` int(11) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(35) NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jalur` varchar(25) NOT NULL,
  `schedule` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `naik`
--

INSERT INTO `naik` (`id`, `kode`, `nama`, `nik`, `telepon`, `tanggal`, `jalur`, `schedule`) VALUES
(99, '20220621035', 'Herawan', '12121212121212121', '081294706385', '2023-11-26', 'Selo', '2023-11-27'),
(127, '20220621035', 'Ade', '3175091708920007', '081294706385', '2023-12-09', 'Selo', '2023-12-10'),
(128, '20220621035', 'Syamsul', '1213234343535', '0121021332', '2023-12-09', 'Selo', '2023-12-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `turun`
--

CREATE TABLE `turun` (
  `id` int(11) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `belakang` varchar(25) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `schedule` varchar(10) NOT NULL,
  `jalur` varchar(50) NOT NULL,
  `tanggal_turun` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `turun`
--

INSERT INTO `turun` (`id`, `kode`, `nama`, `belakang`, `nik`, `no_telp`, `tanggal`, `schedule`, `jalur`, `tanggal_turun`, `status`) VALUES
(165, '20220621035', 'Muhammad', 'Fadhillah', '1298829882998', '081294706385', '2023-11-26', '2023-11-27', 'Selo', '2023-11-26', ''),
(166, '20220621035', 'Syamsul', 'Arifin', '9829989829997', '081294706385', '2023-11-26', '2023-11-27', 'Selo', '2023-11-26', ''),
(167, '20220621035', 'Thufeil', 'Shobrun', '1234412211111', '081294706385', '2023-11-26', '2023-11-27', 'Selo', '2023-11-26', ''),
(168, '20220621035', 'Dimas ', 'Khsunul', '88981992868788', '081294706385', '2023-11-26', '2023-11-27', 'Selo', '2023-11-26', ''),
(169, '20220621035', 'Wega', 'Satya', '09876543321345', '081294706385', '2023-11-26', '2023-11-27', 'Selo', '2023-11-26', ''),
(170, '20220621035', 'Muhammad', 'Zulfahreza', '1234567890912', '081294706385', '2023-11-26', '2023-11-27', 'Selo', '2023-11-26', ''),
(171, '20220621035', 'Abdullah', 'Fakih', '3175091005920005', '081294706385', '2023-11-26', '2023-11-27', 'Selo', '2023-11-26', ''),
(172, '20220621035', 'Ade', 'Herawan', '3175091708920007', '081294706385', '2023-11-24', '2023-11-25', 'Selo', '2023-11-26', ''),
(173, '20220621035', 'Ade', 'Herawan', '3175091708920007', '081294706385', '2023-11-23', '2023-11-24', 'Selo', '2023-11-26', ''),
(174, '20220621035', 'Herawan', 'Ade', 'Herawan', '081294706385', '2023-11-26', '2023-11-25', 'Selo', '2023-11-26', ''),
(175, '2022062102', 'Anis', 'Baswedan', '127892123411', '09280129378', '2023-11-26', '2023-11-28', 'Thekelan', '2023-11-26', ''),
(176, '2023112510', 'Ganjar', 'Pranowo', '123321123321', '1234567890', '2023-11-26', '2023-11-24', 'Selo', '2023-11-26', ''),
(177, '2023112510', 'Prabowo', 'Subianto', '123456789101112', '0812987608387', '2023-11-26', '2023-11-24', 'Selo', '2023-11-26', ''),
(178, '2023112510', 'Gibran', 'Rakabuming', '1234567891011', '081297605678', '2023-11-26', '2023-11-25', 'Selo', '2023-11-26', ''),
(179, '20220621035', 'Gibran ', 'Rakabumin', '1234112131413', '081294706385', '2023-11-26', '2023-11-25', 'Selo', '2023-11-26', ''),
(180, '20220621035', 'chaerullah', 'chaerullah', '123231314441414', '081294706385', '2023-11-26', '2023-11-27', 'Selo', '2023-11-26', ''),
(181, '20220621035', 'asasas', 'asasas', 'asasas', 'asasas', '2023-11-26', '2023-11-25', 'Selo', '2023-11-26', ''),
(182, '20220621035', 'muhammad', 'zulfahreza', '1229383991299182', '081294706385', '2023-11-26', '2023-11-27', 'Selo', '2023-11-26', ''),
(183, '20220621035', 'Ade', 'Herawan', '3175091708920007', '081294706385', '2023-11-26', '2023-11-25', 'Selo', '2023-11-26', ''),
(184, '1', '1', '1', '1', '1', '0000-00-00', '1', '1', '2023-11-26', ''),
(185, 'Ade', 'Herawan', 'Ade', 'Herawan', '081297605678', '2023-11-26', '2023-11-20', 'Selo', '2023-11-26', ''),
(186, '20220621035', 'Ade', 'Herawan', '1234112131413', '081294706385', '2023-11-26', '2023-11-20', 'Selo', '2023-11-26', ''),
(187, 'Ade', 'Herawan', 'Ade', 'Herawan', '081294706385', '2023-11-26', '2023-11-22', 'Selo', '2023-11-26', ''),
(188, '20220621035', 'asdfghj', 'Herawan', '3175091708920007', '081294706385', '2023-11-26', '2023-11-20', 'Selo', '2023-11-26', ''),
(189, 'Ade', 'Herawan', 'Ade', 'Herawan', '081294706385', '2023-11-26', '2023-11-12', 'Selo', '2023-11-26', ''),
(190, '20220621035', 'Ade', 'Herawan', '3175091708920007', '081294706385', '2023-11-26', '2023-11-23', 'Selo', '2023-11-26', ''),
(191, '20220621035', 'asddd', 'asasas', 'asasas', 'asasas', '2023-11-26', '2023-11-15', 'Selo', '2023-11-26', ''),
(192, '20220621035', 'rahmat', 'iswandi', '1212131313', '081294706385', '2023-11-26', '2023-11-27', 'Selo', '2023-11-26', ''),
(193, '20220621035', 'Sabar', 'Abdullah', '12121342323231313', '081294706385', '2023-11-26', '2023-11-27', 'Selo', '2023-11-26', ''),
(194, '2023112510', 'as', 'asas', 'asas', 'asasa', '2023-11-26', '2023-11-21', 'Selo', '2023-11-26', ''),
(195, '20220621035', 'Agung', 'Ramadhan', '121921200i792928', '081294706385', '2023-11-26', '2023-11-27', 'Selo', '2023-11-26', ''),
(196, '20220621035', 'asasas', 'asasas', 'asasas', 'asasas', '2023-11-26', '2023-11-21', 'Selo', '2023-11-26', ''),
(197, '13740', 'Ade', 'Herawan', 'asasas', '081294706385', '2023-11-26', '2023-11-23', 'Selo', '2023-11-26', ''),
(198, '20220621035', 'wega', 'satya', '1245634242424242', '081294706385', '2023-11-26', '2023-11-27', 'Selo', '2023-11-26', ''),
(199, '20220621035', 'Herawan', 'Ade', 'Herawan', '081294706385', '2023-11-26', '2023-11-26', 'Selo', '2023-11-26', ''),
(200, '20220621035', 'Ade', 'Herawan', '3175091708920007', '081294706385', '2023-11-26', '2023-11-20', 'Selo', '2023-11-26', ''),
(201, '13740', 'asasasa', 'sasas', 'asasas', 'asas', '2023-11-26', '2023-11-19', 'Selo', '2023-11-26', ''),
(202, '20220621035', 'Ade', 'Herawan', '21212121212', '081294706385', '2023-11-26', '2023-11-20', 'Selo', '2023-11-26', ''),
(203, '20220621035', 'Ade', 'Herawan', '3175091708920007', '081294706385', '2023-11-26', '2023-11-20', 'Selo', '2023-11-26', ''),
(204, '20220621035', 'Ade', '', '3175091708920007', '081294706385', '2023-11-26', '2023-11-26', 'Selo', '2023-12-03', ''),
(205, '20220621035', 'Abdullah', '', '1212132494909987', '081294706385', '2023-11-26', '2023-11-27', 'Selo', '2023-12-11', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_login` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_login`, `email`, `password`, `nama`) VALUES
(1, 'adeherawan52@gmail.com', 'adhe123', 'Ade Herawan'),
(2, 'nando@gmail.com', 'nando123', 'Armando Simahate'),
(3, 'reza@gmail.com', 'reza123', 'M. Zulfahreza');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `accident`
--
ALTER TABLE `accident`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_jalur`);

--
-- Indeks untuk tabel `naik`
--
ALTER TABLE `naik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `turun`
--
ALTER TABLE `turun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `accident`
--
ALTER TABLE `accident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `harga`
--
ALTER TABLE `harga`
  MODIFY `id_jalur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `naik`
--
ALTER TABLE `naik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT untuk tabel `turun`
--
ALTER TABLE `turun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
