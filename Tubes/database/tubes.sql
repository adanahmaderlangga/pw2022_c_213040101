-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 09 Jun 2022 pada 05.56
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas_besar`
--

CREATE TABLE `tugas_besar` (
  `id` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `youtube` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tugas_besar`
--

INSERT INTO `tugas_besar` (`id`, `gambar`, `nama`, `deskripsi`, `youtube`) VALUES
(12, '629c7aff740dahabib novel.jpg', 'Habib Novel bin Muhammad alaydrus', 'Beliau adalah ulama karismatik yang berasal dari indonesia , dengan nama asli habib novel Bin Muhammad alaydrus atau lebih sering disebut habib novel .Berikut saya sertakan juga vidio beliau tentang berpikir  positif', 'https://www.youtube.com/watch?v=CYi_4YH2SCU'),
(42, '629c7a1f12c25629c761b0cad9sule.jpg', 'Ini talk show', 'vidio berikut termasuk dalam kategori film lucu / lawakan yang mana di perani oleh kang sule dan kawan2 ...sesekali cobalah lihat film yang bergenre seperti ini, karena film semacam ini bisa membuat pikiran kita menjadi lebih senang sehingga kita dapat berpikir dengan positif.', 'https://www.youtube.com/watch?v=QDDRfYmc7cY'),
(43, '629c7a6869734relax.jpg', 'mendengarkan musix relaxsasi', 'Bila anda sedang dalam masalah , atau dikejar-kejar oleh dead line . tenang dan santai lah agar pikiran anda bisa tetap bekerja salah satu nya adalah dengan cara mendengarkan musix relax agar otak kita menjadi tenang dan pikiran kita pun menjadi fresh sehingga kita bisa kembali berpikir positif', 'https://www.youtube.com/results?search_query=musix+relax');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(8, 'admin', '$2y$10$b3kOxkgJOtB64AOkkst/Au4T8652LpxVzNQYn9Q9bTSjrpPtHO2Nu'),
(9, 'adan', '$2y$10$c68wpilFrROva6P4nYVGq.1.4RIOY2uSLYoNJRfStqqED0f7DBfT2'),
(10, 'bima', '$2y$10$GQy3c.9tU8Q18bTWfWfqnug4Nd8A93DKdR0vMivUsLsmmPUgOnoBS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tugas_besar`
--
ALTER TABLE `tugas_besar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tugas_besar`
--
ALTER TABLE `tugas_besar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
