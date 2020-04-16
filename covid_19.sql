-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 05.46
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_19`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar`
--

CREATE TABLE `tb_daftar` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `umur` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id` int(11) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `ya` varchar(30) NOT NULL,
  `tidak` varchar(30) NOT NULL,
  `knc_jawaban` varchar(30) NOT NULL,
  `aktif` enum('ya','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_soal`
--

INSERT INTO `tb_soal` (`id_soal`, `soal`, `ya`, `tidak`, `knc_jawaban`, `aktif`) VALUES
(1, 'Saya Pergi Keluar Rumah', 'ya', 'tidak', 'ya', 'ya'),
(2, 'Saya Menggunakan Trasportasi Umum : Online,Angkot,Bus,Taksi,Kereta Api', 'ya', 'tidak', 'ya', 'ya'),
(3, 'Saya Tidak Memakai Masker pada saat berkumpul dengan orang lain', 'ya', 'tidak', 'ya', 'ya'),
(4, 'Saya berjabat tangan dengan orang lain', 'ya', 'tidak ', 'ya', 'ya'),
(5, 'Saya tidak membersihkan tangan dengan hand sanitizer/ tissue basah sebelum pegang kemudi mobil/motor', 'ya', 'tidak', 'ya', 'ya'),
(6, 'Saya menyentuh benda / uang yang juga disentuh orang lain.', 'ya', 'tidak', 'ya', 'ya'),
(7, 'Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika : belanja, bekerja, belajar, ibadah', 'ya', 'tidak', 'ya', 'ya'),
(8, 'Saya makan diluar rumah', 'ya', 'tidak', 'ya', 'ya'),
(9, 'Saya tidak minum air hangat & cuci tangan dengan sabun setelah tiba di tujuan.', 'ya', 'tidak', 'ya', 'ya'),
(10, 'Saya berada di wilayah kelurahan tempat pasien tertular.', 'ya', 'tidak', 'ya', 'ya'),
(11, 'Saya tidak memasang handsanitizer didepan pintu masuk, untuk bersihkan tangan sebelum pegang gagang (handle) pintu masuk rumah', 'ya', 'tidak', 'ya', 'ya'),
(12, 'Saya tidak mencuci tangan dengan sabun setelah tiba dirumah', 'ya', 'tidak', 'ya', 'ya'),
(13, 'Saya tidak menyediakan : tissue basah/antiseptic,masker,sabun antiseptic bagi keluarga dirumah', 'ya', 'tidak', 'ya', 'ya'),
(14, 'Saya tidak segera merendam baju & celana bekas pakai diluar rumah kedalam air panas/sabun.', 'ya', 'tidak', 'ya', 'ya'),
(15, 'Saya tidak segera mandi keramas setelah saya tiba dirumah.', 'ya', 'tidak', 'ya', 'ya'),
(16, 'Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah.', 'ya', 'tidak', 'ya', 'ya'),
(17, 'Saya dalam sehari tidak kena cahaya matahari minimal 15 menit', 'ya', 'tidak', 'ya', 'ya'),
(18, 'Saya tidak jalan kaki / berolah raga minimal 10 menit dalam sehari ', 'ya', 'tidak', 'ya', 'ya'),
(19, 'Saya jarang minum vitamin C & E, dan kurang tidur', 'ya', 'tidak', 'ya', 'ya'),
(20, 'Usia saya diatas 60 tahun', 'ya', 'tidak', 'ya', 'ya'),
(21, 'Saya mempunyai penyakit : jantung/diabetes/gangguan pernafasan kronik', 'ya', 'tidak', 'ya', 'ya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_daftar`
--
ALTER TABLE `tb_daftar`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_daftar`
--
ALTER TABLE `tb_daftar`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
