-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Agu 2021 pada 15.32
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbimc_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `region`
--

CREATE TABLE `region` (
  `id_region` int(2) NOT NULL,
  `region` varchar(20) NOT NULL,
  `tentang_region` text NOT NULL,
  `foto_region` varchar(255) NOT NULL,
  `link_web` varchar(20) DEFAULT NULL,
  `slug_r` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `region`
--

INSERT INTO `region` (`id_region`, `region`, `tentang_region`, `foto_region`, `link_web`, `slug_r`) VALUES
(1, 'Makassar', 'Kota Makassar  (Makassar: kadang dieja Macassar, Mangkasar; dari 1971 hingga 1999 secara resmi dikenal  sebagai  Ujungpandang  atau  Ujung Pandang) adalah sebuah  kotamadya  dan sekaligus ibu kota Provinsi Sulawesi Selatan. Kotamadya ini adalah kota terbesar pada  5°8′S 119°25′E Koordinat:  5°8′S 119°25′E, di pesisir barat daya pulau Sulawesi, berhadapan dengan Selat Makassar.\r\n<br><br>\r\nKota Makassar (Macassar, Mangkasar, Ujung Pandang (1971-1999)) adalah salah satu kota metropolitan di Indonesia dan sekaligus sebagai ibu kota provinsi Sulawesi Selatan. Kota Makassar merupakan kota terbesar keempat di Indonesia dan terbesar di Kawasan Timur Indonesia. Sebagai pusat pelayanan di Kawasan Timur Indonesia (KTI), Kota Makassar berperan sebagai pusat perdagangan dan jasa, pusat kegiatan industri, pusat kegiatan pemerintahan, simpul jasa angkutan barang dan penumpang baik darat, laut maupun udara dan pusat pelayanan pendidikan dan kesehatan.\r\n<br><br>\r\nSecara administrasi kota ini terdiri dari 14 kecamatan dan 143 kelurahan. Kota ini berada pada ketinggian antara 0-25 m dari permukaan laut. Penduduk Kota Makassar pada tahun 2000 adalah 1.130.384 jiwa yang terdiri dari lakilaki 557.050 jiwa dan perempuan 573.334 jiwa dengan pertumbuhan rata-rata 1,65 %.', 'makassar.jpg', '-', 'makassar'),
(2, 'Bandung', 'Bandung adalah kota metropolitan terbesar di Provinsi Jawa Barat, sekaligus menjadi ibu kota provinsi tersebut. Kota ini terletak 140 km sebelah tenggara Jakarta, dan merupakan kota terbesar di wilayah Pulau Jawa bagian barat. Sedangkan wilayah Bandung Ra', 'b84ae25f1ab45e6f5c37e56c22e11bf1_p.jpeg', '-', 'bandung'),
(3, 'Medan', 'Medan adalah ibu kota provinsi Sumatra Utara, Indonesia. Kota ini merupakan kota terbesar ketiga di Indonesia setelah DKI Jakarta dan Surabaya, serta kota terbesar di luar pulau Jawa. Kota Medan merupakan pintu gerbang wilayah Indonesia bagian barat dengaMedan adalah ibu kota provinsi Sumatra Utara, Indonesia. Kota ini merupakan kota terbesar ketiga di Indonesia setelah DKI Jakarta dan Surabaya, serta kota terbesar di luar pulau Jawa. Kota Medan merupakan pintu gerbang wilayah Indonesia bagian barat dengaMedan adalah ibu kota provinsi Sumatra Utara, Indonesia. Kota ini merupakan kota terbesar ketiga di Indonesia setelah DKI Jakarta dan Surabaya, serta kota terbesar di luar pulau Jawa. Kota Medan merupakan pintu gerbang wilayah Indonesia bagian barat dengaMedan adalah ibu kota provinsi Sumatra Utara, Indonesia. Kota ini merupakan kota terbesar ketiga di Indonesia setelah DKI Jakarta dan Surabaya, serta kota terbesar di luar pulau Jawa. Kota Medan merupakan pintu gerbang wilayah Indonesia bagian barat denga', '5-fakta-menarik-tentang-kota-medan-tanah-kelahiran-bagi-suku-batak.jpg', 'medan', 'medan'),
(4, 'Pusat', 'Pusat adalah tempat yang letaknya di bagian tengah Istana Merdeka letaknya di kota Jakarta 2 titik yang di tengah-tengah benar (dalam bulatan bola, lingkaran, dan sebagainya) bumi lingkaran 3 pusar 4 pokok pangkal atau yang menjadi pumpunan (berbagai-baga', '', NULL, 'pusat');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_region`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `region`
--
ALTER TABLE `region`
  MODIFY `id_region` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
