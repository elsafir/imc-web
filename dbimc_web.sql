-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2021 pada 19.06
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

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
-- Struktur dari tabel `community`
--

CREATE TABLE `community` (
  `id_community` int(2) NOT NULL,
  `id_region` int(2) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `id_jabatan` int(2) NOT NULL,
  `foto_anggota` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `community`
--

INSERT INTO `community` (`id_community`, `id_region`, `nama_anggota`, `id_jabatan`, `foto_anggota`) VALUES
(1, 4, 'Ayamsakit', 1, NULL),
(2, 2, 'Muhammad Ilyas Arradya', 1, NULL),
(3, 1, 'Muh. Yusril Hardiansyah. B. S.P', 2, NULL),
(4, 3, 'Dyaul Mu\'sinat', 3, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id_events` int(2) NOT NULL,
  `id_pengguna` int(2) NOT NULL,
  `judul_events` varchar(50) NOT NULL,
  `detail_events` text NOT NULL,
  `foto_events` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id_events`, `id_pengguna`, `judul_events`, `detail_events`, `foto_events`) VALUES
(1, 1, 'Festival Indonesia Bangkit', 'Festival Indonesia Bangkit merupakan Events yang diselenggarakan oleh Indonesia Millenial Connect telah menyelenggarakan Event Sharing Virtual Terpanjang dan Terbesar selama 21 hari NONSTOP. \r\nFestival Indonesia Bangkit merupakan Events yang diselenggarakan oleh Indonesia Millenial Connect telah menyelenggarakan Event Sharing Virtual Terpanjang dan Terbesar selama 21 hari NONSTOP. ', 'fib_2.jpeg'),
(2, 2, 'Ngabuburit Dari Rumah', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ullam explicabo magni, sint eligendi accusantium laudantium facere id necessitatibus rem dolore quidem reiciendis, soluta ipsa quisquam, beatae debitis adipisci provident. ', 'aufa.jpg'),
(3, 3, 'ECO TALKS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur harum officia ipsam quasi autem id quisquam laboriosam reiciendis earum facere excepturi atque quam eius aperiam voluptate incidunt, sit, blanditiis nostrum?', 'feed.jpg'),
(4, 1, 'HTML Events', 'An HTML event can be something the browser does, or something a user does.\r\nHere are some examples of HTML events:\r\n    An HTML web page has finished loading\r\n    An HTML input field was changed\r\n    An HTML button was clicked\r\nOften, when events happen, you may want to do something.\r\nJavaScript lets you execute code when events are detected.\r\nHTML allows event handler attributes, with JavaScript code, to be added to HTML elements.', 'html_2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(2) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Regional Manager'),
(2, 'General Secretary'),
(3, 'Vice Secretary'),
(4, 'Financial Manager'),
(5, 'Marketing and Commun'),
(6, 'Public Relation'),
(7, 'Business Development'),
(8, 'Technology Manager'),
(9, 'Content Manager'),
(10, 'Human Resource Manager'),
(11, 'Staff of Human Resource'),
(12, 'Staff of Human Resource'),
(13, 'Economy Project Manager'),
(14, 'Staff of Economy'),
(16, 'Education Project Manager'),
(17, 'Staff of Education'),
(18, 'Social Project Manager'),
(19, 'Staff of Social');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_program`
--

CREATE TABLE `jenis_program` (
  `id_jenis_program` int(2) NOT NULL,
  `jenis_program` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_program`
--

INSERT INTO `jenis_program` (`id_jenis_program`, `jenis_program`) VALUES
(1, 'Sosial'),
(2, 'Edukasi'),
(3, 'Ekonomi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(2) NOT NULL,
  `id_community` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Administrator','User') NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `id_community`, `username`, `password`, `level`, `status`) VALUES
(1, 1, 'admin', '$2y$10$JRQHPac0c6/yss6gTwltJ.FuR7HV49X50tdJioutxj8l5QLJo5TR.', 'Administrator', 'Aktif'),
(2, 2, 'ilyas', '$2y$10$JRQHPac0c6/yss6gTwltJ.FuR7HV49X50tdJioutxj8l5QLJo5TR.', 'User', 'Aktif'),
(3, 3, 'yusril', '$2y$10$JRQHPac0c6/yss6gTwltJ.FuR7HV49X50tdJioutxj8l5QLJo5TR.', 'User', 'Aktif'),
(4, 4, 'dyaul', '$2y$10$JRQHPac0c6/yss6gTwltJ.FuR7HV49X50tdJioutxj8l5QLJo5TR.', 'User', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program`
--

CREATE TABLE `program` (
  `id_program` int(2) NOT NULL,
  `id_jenis_program` int(2) NOT NULL,
  `id_pengguna` int(2) NOT NULL,
  `judul_program` varchar(50) NOT NULL,
  `detail_program` text NOT NULL,
  `foto_program` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `program`
--

INSERT INTO `program` (`id_program`, `id_jenis_program`, `id_pengguna`, `judul_program`, `detail_program`, `foto_program`) VALUES
(1, 1, 1, 'Kemanusiaan', 'KEMANUSIAAN adalah tentang nilai-nilai yang dianut oleh manusia dalam kaitan hubungannya dengan sesama manusia, seperti toleransi, welas-asih, cinta-kasih, tolong-menolong, gotong-royong, mendahulukan kepentingan umum, dan banyak lainnya. Semua nilai-nilai itu adalah antara manusia dengan manusia.', 'manusia.jfif'),
(2, 2, 3, 'Belajar Pemrograman Pemula', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, ullam veniam delectus praesentium, eius unde error fuga impedit sequi maxime voluptatibus aliquid quos dolores alias at et provident odit esse.', 'program.jpg'),
(4, 3, 1, 'Bantuan Massal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, ullam veniam delectus praesentium, eius unde error fuga impedit sequi maxime voluptatibus aliquid quos dolores alias at et provident odit esse.', 'bantu.jfif'),
(5, 1, 1, 'Kemasyarakatan', 'Kegiatan sosial kemasyarakatan adalah kegiatan bersama anggota masyarakat yang bersifat sosial (tidak mencari keuntungan ekonomi) di lingkungan tempat tinggal. Mengikuti kegiatan sosial kemasyarakatan adalah partisipasi/ keikutsertaan (terlibat aktif) seseorang dalam kegiatan sosial kemasyarakatan yang ada di lingkungan tempat tinggal yang masih dalam lingkup RT/RW/Dusun/Desa/Kelurahan.', 'masyarakat.jfif'),
(6, 1, 2, 'Kemiskinan', 'Kemiskinan adalah keadaan saat ketidakmampuan untuk memenuhi kebutuhan dasar seperti makanan, pakaian, tempat berlindung, pendidikan, dan kesehatan. Kemiskinan dapat disebabkan oleh kelangkaan alat pemenuh kebutuhan dasar, ataupun sulitnya akses terhadap pendidikan dan pekerjaan. Kemiskinan merupakan masalah global. Sebagian orang memahami istilah ini secara subyektif dan komparatif, sementara yang lainnya melihatnya dari segi moral dan evaluatif, dan yang lainnya lagi memahaminya dari sudut ilmiah yang telah mapan, dan lain-lain.\r\n\r\nKemiskinan dipahami dalam berbagai cara. Pemahaman utamanya mencakup:\r\n\r\n    Gambaran kekurangan materi, yang biasanya mencakup kebutuhan pangan sehari-hari, sandang, perumahan, dan pelayanan kesehatan. Kemiskinan dalam arti ini dipahami sebagai situasi kelangkaan barang-barang dan pelayanan dasar.\r\n    Gambaran tentang kebutuhan sosial, termasuk keterkucilan sosial, ketergantungan, dan ketidakmampuan untuk berpartisipasi dalam masyarakat. Hal ini termasuk pendidikan dan informasi. Keterkucilan sosial biasanya dibedakan dari kemiskinan, karena hal ini mencakup masalah-masalah politik dan moral, dan tidak dibatasi pada bidang ekonomi. Gambaran kemiskinan jenis ini lebih mudah diatasi daripada dua gambaran yang lainnya.\r\n    Gambaran tentang kurangnya penghasilan dan kekayaan yang memadai. Makna \"memadai\" di sini sangat berbeda-beda melintasi bagian-bagian politik dan ekonomi di seluruh dunia. Gambaran tentang ini dapat diatasi dengan mencari objek penghasilan di luar profesi secara halal. Perkecualian apabila institusi tempatnya bekerja melarang.', 'miskin.jpeg'),
(7, 2, 1, 'Belajar Membaca Bagi Anak', 'Memasuki sekolah Taman Kanak-kanak (TK), anak-anak akan mulai diajari membaca. Keterampilan ini sangat penting untuk dikuasai anak karena akan berpengaruh pada proses belajarnya. Belajar membaca anak TK pasti akan didapatkan di sekolah. Namun anak juga harus belajar membaca di rumah di bawah bimbingan Ibu supaya ia bisa cepat menguasainya.', 'asli.JPG'),
(8, 2, 1, 'Pembekalan Masa Kini', 'Pembekalan dan Latihan\r\nPembekalan ini didasari oleh kondisi ketenagakerjaan Indonesia belum memberikan harapan bagi penurunan angka pengangguran. Peluang kerja yang ada jauh lebih kecil bila dibandingkan dengan jumlah lulusan perguruan tinggi. Akibatnya tingkat persaingan untuk mendapatkan pekerjaan juga semakin tinggi. Oleh karena itu perlu upaya penyiapan lulusan untuk menghadapi dunia kerja. Tujuan dari kegiatan ini adalah (i) Memberikan gambaran umum dunia kerja dan tantangan yang dihadapi, (ii) Memberikan gambaran peluang karir yang dapat dimasuki (karyawan atau wirausahawan), (iii) Tips kiat sukses untuk menembus dunia kerja dan (iv) Sharing pengalaman dengan alumni sukses.\r\n\r\nPelatihan Prepare Your Self to Grasp the Job\r\nPelatihan ini bertujuan (i) Meningkatkan pemahaman peserta mengenai cara-cara sukses memasuki dunia kerja dan (ii) Meningkatkan keterampilan peserta dalam mempersiapkan teknik memasuki dunia kerja (pembuatan surat lamaran, CV/resume, psikotest dan interview). Materi-materi yang disampaikan adalah (i) Kompetensi yang dibutuhkan dunia kerja dan menggali kemampuan diri, (ii) Praktek interview dan konsultasi pribadi, (iii) Penyusunan surat lamaran & CV serta pengantar materi interview dan (iv) Membangun citra diri dan etika profesional\r\n\r\nPelatihan pelatihan pengembangan diri\r\nPelatihan-pelatihan ini dimaksudkan untuk memberikan bekal kepada para mahasiswa dan alumni mengenai kompetensi-kompetensi yang dibutuhkan dunia kerja. Pelatihan-pelatihan yang diberikan adalah (i) Kiat Sukses Merebut Peluang Kerja (ii) Studium General of Leadership .Be a Proactive Leader, (ii) Dream Building For Your Future Career, (iii) English for Job , (iv) Be Ready, Tips for Join The Company dan lain-lain.\r\n\r\nSeminar-seminar Ketenagakerjaan\r\nSeminar-seminar yang dilakukan bertujuan untuk menambah wawasan mahasiswa dan alumni mengenai karir dan ketenagakerjaan terutama di bidang pertanian. Seminar tersebut diantaranya adalah (i) Talk Show .Bila Alumni Bicara, (ii) Pembekalan Karir .I Need A Job, Now What ?!., (iii) Studium General .Pengantar Dunia Kerja & Perintisan Karir., (iv) Sukses Berkarir di Bidang Pertanian dan lain-lain', '14045652_663782173772641_1440152584842038824_n.jpg'),
(9, 3, 3, 'Pembagian Makanan', 'Vice President Corporate Social Responsibility & Small Medium Entreprise and Private Partnership (CSR SMEPP) Pertamina Arya Dwi Paramita (kedua kanan) bersama Manager CSR Pertamina Dian Hapsari (tengah) membagikan makanan kepada warga di Kelurahan Lagoa, Jakarta Utara. Warga menerima makanan dari Posko Masak, sinergi Satgas Bencana BUMN DKI Jakarta dan Satgas DPR RI. Satgas hadir untuk memenuhi kebutuhan pokok masyarakat yang terimbas kebijakan Covid-19, salah satunya di wilayah Jakarta Utara.', '14063753_638884306273953_5410159303819113362_n.jpg'),
(10, 3, 3, 'Peningkatan Harga', 'Inflasi merupakan keadaan ekonomi di mana harga-harga barang naik secara terus menerus selama kurun waktu tertentu. Kenaikan harga barang digolongkan secara umum, di mana sebagian besar harga barang khususnya komoditas utama mengalami kenaikan harga. Sedangkan sebagian kecil komoditas yang mengalami penurunan harga. Inflasi biasanya hanya terjadi pada momen-momen tertentu seperti Hari Raya Idul Fitri, Natal, Tahun Baru, maupun momen pesta demokrasi.', 'naik.jpg'),
(11, 2, 2, 'Metode Pembelajar Bagi Tunanetra', 'Pendidikan bagi anak sangatlah krusial dan penting. Pendidikan yang baik dapat merangsang pertumbuhan pengetahuan dan kemampuan anak sedari dini. Setiap anak perlu menerima pendidikannya dengan baik, tak terkecuali anak tunanetra. \r\n\r\nAda banyak contoh seorang penderita tunanetra yang memiliki kelebihan di bidang musik, olahraga, sastra bahkan seni.\r\n\r\nNama-nama seperti Stevie Wonder, Franklin Delano Roosevelt, dan Helen Keller telah diakui dunia melalui bakat dan kepandaian mereka. Mereka menerima pendidikan yang dapat mengasah kemampuan mereka hingga bisa terkenal seperti saat ini. \r\n\r\nPendidikan bagi anak tunanetra cukup berbeda dengan anak-anak pada umumnya.', 'tuna.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `region`
--

CREATE TABLE `region` (
  `id_region` int(2) NOT NULL,
  `region` varchar(20) NOT NULL,
  `link_web` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `region`
--

INSERT INTO `region` (`id_region`, `region`, `link_web`) VALUES
(1, 'Makassar', NULL),
(2, 'Bandung', NULL),
(3, 'Medan', NULL),
(4, 'Pusat', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`id_community`),
  ADD KEY `id_region` (`id_region`,`id_jabatan`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_events`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `jenis_program`
--
ALTER TABLE `jenis_program`
  ADD PRIMARY KEY (`id_jenis_program`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_community` (`id_community`);

--
-- Indeks untuk tabel `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`),
  ADD KEY `id_jenis_program` (`id_jenis_program`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_region`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `community`
--
ALTER TABLE `community`
  MODIFY `id_community` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id_events` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `jenis_program`
--
ALTER TABLE `jenis_program`
  MODIFY `id_jenis_program` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `region`
--
ALTER TABLE `region`
  MODIFY `id_region` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `community`
--
ALTER TABLE `community`
  ADD CONSTRAINT `community_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id_region`),
  ADD CONSTRAINT `community_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_community`) REFERENCES `community` (`id_community`);

--
-- Ketidakleluasaan untuk tabel `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`id_jenis_program`) REFERENCES `jenis_program` (`id_jenis_program`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
