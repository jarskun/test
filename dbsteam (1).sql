-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Agu 2020 pada 10.41
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsteam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_merek` int(11) NOT NULL,
  `sim` varchar(128) NOT NULL,
  `stnk` varchar(128) NOT NULL,
  `bpkb` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'mobil = Rp 30.000.00\r\n'),
(2, 'motor = Rp 20.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_merek` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `sim` int(11) NOT NULL,
  `stnk` int(11) NOT NULL,
  `bpkb` int(11) NOT NULL,
  `date` date NOT NULL,
  `ket` varchar(128) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `user_id`, `id_kategori`, `id_merek`, `nama`, `sim`, `stnk`, `bpkb`, `date`, `ket`, `time`) VALUES
(1, 20, 1, 5, 'fajar salam', 908766655, 654321, 321456, '2020-08-13', 'mobil ini berwarna merah', '00:35:00'),
(2, 28, 1, 5, 'zaman force', 878796, 757567, 3434, '2020-08-06', 'mobil saya berwarna kuning ', '05:14:00'),
(4, 29, 2, 16, 'jarskun', 9886758, 90909, 321456, '2020-08-12', '', '15:36:00'),
(6, 29, 2, 16, 'fajar', 9886758, 90909, 10101001, '2020-08-13', '', '17:54:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merek`
--

CREATE TABLE `merek` (
  `id` int(11) NOT NULL,
  `nama_merek` varchar(119) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `merek`
--

INSERT INTO `merek` (`id`, `nama_merek`) VALUES
(1, 'honda'),
(2, 'toyota'),
(3, 'daihatsu'),
(4, 'nissan'),
(5, 'KIA'),
(6, 'BMW'),
(7, 'isuzu'),
(8, 'suzuki'),
(9, 'datsun'),
(10, 'mitsubitshi'),
(11, 'yamaha'),
(12, 'honda'),
(13, 'kawasaki'),
(14, 'TVS'),
(15, 'piaggio atau vespa'),
(16, 'harley davidson'),
(17, 'ducati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `boking_id` int(11) NOT NULL,
  `tanggal_transaksi` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(245) NOT NULL,
  `password` varchar(245) NOT NULL,
  `nama` varchar(245) DEFAULT NULL,
  `role` enum('admin','user') NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tel` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nama`, `role`, `tanggal`, `alamat`, `no_tel`) VALUES
(25, 'anita@gmail.com', '$2y$10$5AiAMV.DpTrSN3ExSVhaPerx6xuGQjG7P/CxWNdoDdd0HYP2HvYe.', 'anita', 'admin', '2020-09-03', 'kp.panyeredan', 2147483647),
(26, 'mikaela@gmail.com', '$2y$10$X6JxVTDartmPIDbbDfshXeoi9N3/98gQNvoH704C4TJz8vFzkGEA6', 'mikaela', 'user', '2020-08-26', 'kp.vampire', 987654321),
(27, 'yuki@gmail.com', '$2y$10$xsMaleTveu1As14QrzwiLersvtkrZbcRkePdUL6Dh5Gv3P3tN9HWS', 'yuki', 'user', '2020-08-18', 'kp.aoharu', 2147483647),
(28, 'badruzzaman@gmail.com', '$2y$10$e9JkS9oOIcozNn.fsMXTQO1vsKFIXyh/9EVPQ3fyqaFmVVcQCjt1a', 'badruzzman', 'user', '2020-08-13', 'kp.cibalanarik', 2147483647),
(29, 'fajarsalam07@gmail.com', '$2y$10$j2QvEkQIjp0hHut76MwBoOzXMIpMe8mo9Laez0jhPRTaKW4YiEdGa', 'fajar salam', 'user', '2002-08-03', 'KP.PASARSENEN', 2147483647),
(30, 'happy072@gmail.com', '$2y$10$dF4nUPC8oHOa6jH8k9j94Op7CYnkbmRbL5fWkC5xVLEF0HgU22Iqa', 'happy', 'user', '2000-04-12', 'perum cgm', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_merek` (`id_merek`);

--
-- Indeks untuk tabel `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaksi_boking_idx` (`boking_id`),
  ADD KEY `fk_transaksi_user1_idx` (`user_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `merek`
--
ALTER TABLE `merek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `kendaraan_ibfk_2` FOREIGN KEY (`id_merek`) REFERENCES `merek` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_boking` FOREIGN KEY (`boking_id`) REFERENCES `boking` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_transaksi_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
