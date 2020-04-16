-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Apr 2020 pada 00.57
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `user` varchar(20) NOT NULL,
  `total` int(11) NOT NULL,
  `potensi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `jk` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama`, `umur`, `jk`) VALUES
(1, 'Fatwa', 'admin', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk`
--

CREATE TABLE `masuk` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `umur` int(11) NOT NULL,
  `jk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masuk`
--

INSERT INTO `masuk` (`id`, `nama`, `umur`, `jk`) VALUES
(27, 'Fikri', 20, 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `pertanyaannya` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `pertanyaannya`) VALUES
(1, 'Saya pergi keluar rumah'),
(2, 'Saya menggunakan transportasi umum: online, angkot, bus, taksi, kereta api'),
(3, 'Saya tidak memakai masker pada saat berkumpul dengan orang lain'),
(4, 'Saya berjabat tangan dengan orang lain'),
(5, 'Saya tidak membersihkan tangan dengan hand sanitizer / tissue basah sebelum pegang kemudi mobil/motor'),
(6, 'Saya menyentuh benda / uang yang juga disentuh orang lain'),
(7, 'Saya tidak menjaga jarak 1.5 meter dengan orang lain ketika: belanja, bekerja, belajar, beribadah'),
(8, 'Saya makan diluar rumah (warung / restaurant)'),
(9, 'Saya tidak minum hangat dan cuci tangan dengan sabun setelah tiba di tujuan'),
(10, 'Saya berada di wilayah kelurahan tempat pasien tertular'),
(11, 'Saya tidak pasang hand sanitizer di depan pintu masuk, untuk bersihkan tangan sebelum pegang gagang (handle) pintu masuk rumah'),
(12, 'Saya tidak mencuci tangan dengan sabun setelah tiba di rumah'),
(13, 'Saya tidak menyediakan: tissue basah/antiseptic, masker, sabun antiseptic bagi keluarga di rumah'),
(14, 'Saya tidak segera merendam baju dan celana bekas pakai di luar rumah kedalam air panas/sabun'),
(15, 'Saya tidak segera mandi keramas setelah saya tiba dirumah'),
(16, 'Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah'),
(17, 'Saya dalam sehari tidak kena cahaya matahari minimal 15 menit'),
(18, 'Saya tidak jalan kaki / berolah raga minimal 30 menit setiap hari'),
(19, 'Saya jarang minum vitamin C dan E, dan kurang tidur'),
(20, 'Usia saya diatas 60 tahun'),
(21, 'Saya mempunyai penyakit: jantung/diabetes/gangguan pernafasan kronik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `jawaban` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `survey`
--

INSERT INTO `survey` (`id`, `user_id`, `jawaban`) VALUES
(11, '24', 21),
(12, '25', 2),
(13, '26', 8),
(14, '27', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
