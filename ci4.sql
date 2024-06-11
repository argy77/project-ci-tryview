-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2024 pada 10.18
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
  `HisTestIDOrder` varchar(255) DEFAULT NULL,
  `LisTestID` varchar(100) DEFAULT NULL,
  `HisRegNo` varchar(100) DEFAULT NULL,
  `TestName` varchar(100) DEFAULT NULL,
  `Result` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hasil_lab_waynacom`
--

INSERT INTO `hasil_lab_waynacom` (`id`, `orderDateSystem`, `visitNumber`, `LisRegNo`, `HisTestIDOrder`, `LisTestID`, `HisRegNo`, `TestName`, `Result`) VALUES
(1, '2024-05-08', '9999-2024/05/06/000813', '2405060280', 'LAB001', 'K0000050', 'PK202405060247', 'Glukosa Darah Sewaktu', '107'),
(2, '2024-05-08', '9999-2024/05/06/000813', '2405060392', 'LAB002', 'H0000003', 'PK202405060247', 'Hemoglobin', '13.0'),
(3, '2024-05-08', '9999-2024/05/06/000813', '2405060393', 'LAB003', 'H0000005', 'PK202405060247', 'M120-can', '120'),
(4, '2024-05-10', '9999-2024/05/06/000439', '203249252', 'LAB004', 'K000242', 'PK202405060299', 'ABCD', '13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_permintaan_lab_waynacom`
--

CREATE TABLE `item_permintaan_lab_waynacom` (
  `id_item` int(11) NOT NULL,
  `noorder` varchar(255) NOT NULL,
  `OrderItemId` varchar(255) NOT NULL,
  `OrderItemName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `item_permintaan_lab_waynacom`
--

INSERT INTO `item_permintaan_lab_waynacom` (`id_item`, `noorder`, `OrderItemId`, `OrderItemName`) VALUES
(1, 'PK202405060247', 'LAB001', 'PAKET A GDS'),
(2, 'PK202405060247', 'LAB002', 'PAKET B INR'),
(3, 'PK202405060247', 'LAB003', 'PAKET C GDP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan_lab_wynacom`
--

CREATE TABLE `permintaan_lab_wynacom` (
  `id` int(255) NOT NULL,
  `orderDateSystem` date DEFAULT NULL,
  `orderNumber` varchar(255) NOT NULL,
  `patientId` varchar(255) NOT NULL,
  `patientName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `permintaan_lab_wynacom`
--

INSERT INTO `permintaan_lab_wynacom` (`id`, `orderDateSystem`, `orderNumber`, `patientId`, `patientName`) VALUES
(1, '2024-05-08', 'PK202405060247', '256435', 'Rudi Tabooti');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil_lab_waynacom`
--
ALTER TABLE `hasil_lab_waynacom`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `item_permintaan_lab_waynacom`
--
ALTER TABLE `item_permintaan_lab_waynacom`
  ADD PRIMARY KEY (`id_item`);

--
-- Indeks untuk tabel `permintaan_lab_wynacom`
--
ALTER TABLE `permintaan_lab_wynacom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil_lab_waynacom`
--
ALTER TABLE `hasil_lab_waynacom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `item_permintaan_lab_waynacom`
--
ALTER TABLE `item_permintaan_lab_waynacom`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `permintaan_lab_wynacom`
--
ALTER TABLE `permintaan_lab_wynacom`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
