-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2024 pada 18.03
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_lab_waynacom`
--

CREATE TABLE `hasil_lab_waynacom` (
  `id` int(11) NOT NULL,
  `orderDateSystem` date DEFAULT NULL,
  `visitNumber` varchar(200) DEFAULT NULL,
  `LisRegNo` varchar(100) DEFAULT NULL,
  `LisTestID` varchar(100) DEFAULT NULL,
  `HisRegNo` varchar(100) DEFAULT NULL,
  `TestName` varchar(100) DEFAULT NULL,
  `Result` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hasil_lab_waynacom`
--

INSERT INTO `hasil_lab_waynacom` (`id`, `orderDateSystem`, `visitNumber`, `LisRegNo`, `LisTestID`, `HisRegNo`, `TestName`, `Result`) VALUES
(1, '2024-05-08', '9999-2024/05/06/000439', '2405060280', 'K0000050', 'PK202405060147', 'Glukosa Darah Sewaktu', '107'),
(2, '2024-05-08', '9999-2024/05/06/000813', '2405060392', 'H0000003', 'PK202405060247', 'Hemoglobin', '13.0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil_lab_waynacom`
--
ALTER TABLE `hasil_lab_waynacom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil_lab_waynacom`
--
ALTER TABLE `hasil_lab_waynacom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
