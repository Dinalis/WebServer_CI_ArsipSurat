-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Mar 2020 pada 02.53
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat_kuis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
--

CREATE TABLE `instansi` (
  `nomor_instansi` int(100) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`nomor_instansi`, `nama_instansi`, `alamat`) VALUES
(110, 'Polsek Malang', 'jln.raya Malang kota No.01'),
(111, 'Polsek Wajak', 'jln.wajak gang1 malang'),
(112, 'Polsek Malang Kabupaten', 'Jln.Klojen no 109 Malang'),
(115, 'polsek suhat', 'jl.soekarno hatta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `no_surat` int(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `isi_ringkasan` varchar(100) NOT NULL,
  `nomor_instansi` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`no_surat`, `tgl_surat`, `isi_ringkasan`, `nomor_instansi`) VALUES
(12, '2020-02-11', 'laporan kenaikan pangkat', 112),
(13, '2020-02-11', 'laporan kenaikkan pangkat', 111),
(112, '2020-03-02', 'pengajuan cuti tahunan', 111);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `kode_surat` int(100) NOT NULL,
  `nomor_instansi` int(100) NOT NULL,
  `no_agenda` int(100) NOT NULL,
  `isi_ringkasan` varchar(100) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_diterima` date NOT NULL,
  `penerima` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`kode_surat`, `nomor_instansi`, `no_agenda`, `isi_ringkasan`, `no_surat`, `tgl_surat`, `tgl_diterima`, `penerima`) VALUES
(231, 110, 23, 'Permohonan Menikah', '112', '2020-02-05', '2020-02-19', 'Hanifah'),
(233, 111, 12, 'Pengajuan', '112', '2020-02-12', '2020-02-25', 'hanifah'),
(235, 112, 112, 'Surat Pindah ', '23', '2020-02-12', '2020-02-29', 'Dina'),
(237, 112, 12332, 'surat tilang', '24', '2020-03-02', '2020-03-02', 'dina lisuardi'),
(238, 110, 238, 'pengajuan cuti tahunan', '239', '2020-03-08', '2020-03-08', 'dina lisuardi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'aktif'),
(2, 'user', 'user', 'user', 'aktif'),
(3, 'tes', 'tes123', 'user', 'Tidak Aktif'),
(4, 'ardan', 'ardan123', 'user', 'Tidak Aktif'),
(5, 'saya', 'saya', 'user', 'Tidak Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`nomor_instansi`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`no_surat`),
  ADD KEY `nomor_instansi` (`nomor_instansi`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`kode_surat`),
  ADD KEY `nomor_instansi` (`nomor_instansi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `nomor_instansi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `no_surat` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `kode_surat` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD CONSTRAINT `surat_keluar_ibfk_1` FOREIGN KEY (`nomor_instansi`) REFERENCES `instansi` (`nomor_instansi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD CONSTRAINT `surat_masuk_ibfk_1` FOREIGN KEY (`nomor_instansi`) REFERENCES `instansi` (`nomor_instansi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
