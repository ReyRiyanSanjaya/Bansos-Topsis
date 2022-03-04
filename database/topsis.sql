-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2021 pada 18.25
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topsis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `analisa`
--

CREATE TABLE `analisa` (
  `id_analisa` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nik` varchar(64) NOT NULL,
  `nilainya` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `analisa`
--

INSERT INTO `analisa` (`id_analisa`, `id_kriteria`, `nik`, `nilainya`) VALUES
(1, 1, '643634364', '2'),
(2, 2, '643634364', '3'),
(3, 3, '643634364', '4'),
(4, 4, '643634364', '4'),
(5, 5, '643634364', '5'),
(6, 6, '643634364', '2'),
(7, 1, '127454545', '2'),
(8, 2, '127454545', '2'),
(9, 3, '127454545', '2'),
(10, 4, '127454545', '2'),
(11, 5, '127454545', '2'),
(12, 6, '127454545', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `atribut` varchar(50) NOT NULL,
  `bobot_nilai` varchar(50) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `atribut`, `bobot_nilai`, `nama_kriteria`) VALUES
(1, 'benefit', '4', 'Pendidikan tertinggi kepala rumah\r\ntangga'),
(2, 'benefit', '4', 'Jenis dinding tempat tinggal '),
(3, 'benefit', '5', 'Jenis Lantai bangunan'),
(4, 'cost', '3', 'pengeluaran'),
(5, 'cost', '2', 'pendapatan'),
(6, 'benefit', '2', 'pekerjaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(32) NOT NULL,
  `nama` varchar(2000) NOT NULL,
  `no_hp` varchar(500) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `no_hp`, `photo`, `status`) VALUES
(5, 'Baem Maulana', '12424114124', 'default.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kriteria`
--

CREATE TABLE `t_kriteria` (
  `id_tkriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nkriteria` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kriteria`
--

INSERT INTO `t_kriteria` (`id_tkriteria`, `id_kriteria`, `keterangan`, `nkriteria`) VALUES
(1, 1, 'S1', '1'),
(2, 1, 'SMA', '2'),
(3, 1, 'SMP', '3'),
(4, 1, 'SD', '4'),
(5, 1, 'Tidak Bersekolah', '5'),
(6, 2, 'Dinding Batu Bata', '1'),
(7, 2, 'Dinding Tembok yang sudah mulai rusak', '2'),
(8, 2, 'Dinding Kayu', '3'),
(9, 2, 'Dinding Kayu yang sudah mulai rusak', '4'),
(10, 2, 'Bambu', '5'),
(11, 3, 'Keramik', '1'),
(12, 3, 'Semen', '2'),
(13, 3, 'Tanah', '5'),
(16, 4, 'Kurang dari 1 juta', '1'),
(17, 4, 'Kurang dari 2 juta', '2'),
(18, 4, 'Kurang dari 3 juta', '3'),
(19, 4, 'Kurang dari 4 juta', '4'),
(20, 4, 'Kurang dari 5 juta', '5'),
(35, 5, 'Kurang dari 4 juta', '1'),
(36, 5, 'Kurang dari 4 juta', '1'),
(37, 5, 'Kurang dari 3 juta', '2'),
(38, 5, 'Kurang dari 2 juta', '3'),
(39, 5, 'Kurang dari 1 juta', '4'),
(40, 5, 'Tidak ada pemasukan', '5'),
(41, 6, 'Pegawai Negeri Sipil', '1'),
(42, 6, 'Pegawai Negeri Sipil', '1'),
(43, 6, 'Wirausaha', '2'),
(44, 6, 'Karyawan Swasta', '3'),
(45, 6, 'Serabutan', '4'),
(46, 6, 'Tidak Bekerja', '5'),
(47, 3, 'Semen kondisi rusak ', '4'),
(48, 3, 'Semen kondisi rusak ', '3'),
(49, 3, 'Keramik kondisi rusak ', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `alamat` varchar(400) DEFAULT NULL,
  `poto` varchar(128) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nik`, `password`, `nama`, `alamat`, `poto`, `level`) VALUES
(12, '12', '12', 'Harya Syafneldi', 'jL. Pancing', 'default.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `nik` varchar(64) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `id_survey` int(32) DEFAULT NULL,
  `status_survey` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id`, `nik`, `nama`, `alamat`, `photo`, `id_survey`, `status_survey`) VALUES
(1, '643634364', 'Karina Harahap', 'Jl tuasan gg mulyo no38', 'default.jpg', NULL, 'sudah'),
(2, '127454545', 'Harya Syafneldi', 'Jl. Pancing', 'default.jpg', NULL, 'belum');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `analisa`
--
ALTER TABLE `analisa`
  ADD PRIMARY KEY (`id_analisa`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `t_kriteria`
--
ALTER TABLE `t_kriteria`
  ADD PRIMARY KEY (`id_tkriteria`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `analisa`
--
ALTER TABLE `analisa`
  MODIFY `id_analisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `t_kriteria`
--
ALTER TABLE `t_kriteria`
  MODIFY `id_tkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
