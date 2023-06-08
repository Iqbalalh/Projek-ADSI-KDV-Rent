-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2023 pada 09.15
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kdv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('6sks', 'adsi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporankeuangan`
--

CREATE TABLE `laporankeuangan` (
  `idLaporan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlahPemasukkan` int(11) NOT NULL,
  `jumlahPengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `idMobil` int(11) NOT NULL,
  `namaMobil` varchar(255) NOT NULL,
  `hargaSewa` int(11) NOT NULL,
  `statusPenyewaan` varchar(255) NOT NULL,
  `kondisiMobil` varchar(255) NOT NULL,
  `viewMobil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`idMobil`, `namaMobil`, `hargaSewa`, `statusPenyewaan`, `kondisiMobil`, `viewMobil`) VALUES
(8, 'ss', 200000, 'sah', 'jelek', 'Screenshot 2023-06-07 101412.png'),
(14, 'Toyota Avanza', 90, 'Tersedia', 'jelek', 'image (10).png'),
(15, 'asdasd', 213123, 'sdasd', 'asasdas', ''),
(17, 'asdas', 0, 'dasd', 'asdasd', '64800d35ddfec.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewa`
--

CREATE TABLE `penyewa` (
  `idPenyewa` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `noTelp` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penyewa`
--

INSERT INTO `penyewa` (`idPenyewa`, `nama`, `noTelp`, `user`, `pass`) VALUES
(1, 'iqbal', '123123', 'iqbal', 'iqbal'),
(2, 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supir`
--

CREATE TABLE `supir` (
  `idSupir` int(11) NOT NULL,
  `namaSupir` varchar(255) NOT NULL,
  `jenisKelamin` varchar(255) NOT NULL,
  `umurSupir` int(11) NOT NULL,
  `statusSupir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `supir`
--

INSERT INTO `supir` (`idSupir`, `namaSupir`, `jenisKelamin`, `umurSupir`, `statusSupir`) VALUES
(5, 'Sanex', 'laki-laki', 80, 'Duda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `idMobil` int(11) NOT NULL,
  `namaMobil` varchar(255) NOT NULL,
  `hargaSewa` int(11) NOT NULL,
  `statusPenyewaan` varchar(255) NOT NULL,
  `kondisiMobil` varchar(255) NOT NULL,
  `viewMobil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksipenyewa`
--

CREATE TABLE `transaksipenyewa` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggalPeminjaman` varchar(30) NOT NULL,
  `tanggalPengembalian` varchar(30) NOT NULL,
  `lamaMeminjam` varchar(30) NOT NULL,
  `jumlahTransaksi` int(11) NOT NULL,
  `konfirmasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksipenyewa`
--

INSERT INTO `transaksipenyewa` (`id`, `nama`, `tanggalPeminjaman`, `tanggalPengembalian`, `lamaMeminjam`, `jumlahTransaksi`, `konfirmasi`) VALUES
(2, 'aldo', '20/20/2023', '21/20/2023', '1', 90000, 'ya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indeks untuk tabel `laporankeuangan`
--
ALTER TABLE `laporankeuangan`
  ADD PRIMARY KEY (`idLaporan`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`idMobil`);

--
-- Indeks untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`idPenyewa`);

--
-- Indeks untuk tabel `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`idSupir`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idMobil`);

--
-- Indeks untuk tabel `transaksipenyewa`
--
ALTER TABLE `transaksipenyewa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporankeuangan`
--
ALTER TABLE `laporankeuangan`
  MODIFY `idLaporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `idMobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `idPenyewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `supir`
--
ALTER TABLE `supir`
  MODIFY `idSupir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idMobil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksipenyewa`
--
ALTER TABLE `transaksipenyewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
