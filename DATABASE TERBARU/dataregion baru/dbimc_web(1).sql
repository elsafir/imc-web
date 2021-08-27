-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Agu 2021 pada 15.42
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
(1, 4, 'Ayamsakit', 1, 'IMG_8673.JPG'),
(2, 2, 'Muhammad Ilyas Arradya', 1, NULL),
(3, 1, 'Muh. Yusril Hardiansyah. B. S.P', 2, NULL),
(4, 3, 'Dyaul Mu\'sinat', 3, NULL),
(5, 1, 'Aqidatul Izzah Ramli', 4, 'WhatsApp Image 2021-07-04 at 18.09.45.jpeg'),
(8, 2, 'Andi Firmansyah', 2, NULL),
(9, 2, 'Jhon Edgard', 3, NULL),
(10, 3, 'Pastop Pasaribu', 2, NULL),
(11, 1, 'test anggota', 9, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id_events` int(2) NOT NULL,
  `id_pengguna` int(2) NOT NULL,
  `judul_events` varchar(50) NOT NULL,
  `detail_events` text NOT NULL,
  `foto_events` varchar(50) DEFAULT NULL,
  `slug_e` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id_events`, `id_pengguna`, `judul_events`, `detail_events`, `foto_events`, `slug_e`) VALUES
(1, 1, 'Festival Indonesia Bangkit', 'Festival Indonesia Bangkit merupakan Events yang diselenggarakan oleh Indonesia Millenial Connect telah menyelenggarakan Event Sharing Virtual Terpanjang dan Terbesar selama 21 hari NONSTOP. \r\nFestival Indonesia Bangkit merupakan Events yang diselenggarakan oleh Indonesia Millenial Connect telah menyelenggarakan Event Sharing Virtual Terpanjang dan Terbesar selama 21 hari NONSTOP. ', 'fib_2.jpeg', 'festival-indonesia-bangkit'),
(3, 3, 'ECO TALKS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur harum officia ipsam quasi autem id quisquam laboriosam reiciendis earum facere excepturi atque quam eius aperiam voluptate incidunt, sit, blanditiis nostrum?', 'feed.jpg', 'eco-talks'),
(4, 1, 'HTML Events', 'An HTML event can be something the browser does, or something a user does.\r\nHere are some examples of HTML events:\r\n    An HTML web page has finished loading\r\n    An HTML input field was changed\r\n    An HTML button was clicked\r\nOften, when events happen, you may want to do something.\r\nJavaScript lets you execute code when events are detected.\r\nHTML allows event handler attributes, with JavaScript code, to be added to HTML elements.', 'html_2.jpg', 'html-events');

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
  `jenis_program` varchar(20) NOT NULL,
  `tentang_jenis_program` text NOT NULL,
  `slug_js` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_program`
--

INSERT INTO `jenis_program` (`id_jenis_program`, `jenis_program`, `tentang_jenis_program`, `slug_js`) VALUES
(1, 'Sosial', 'membantu menjelaskan cara kerja masyarakat, mengeksplorasi segala hal mulai dari pemicu pertumbuhan ekonomi dan penyebab pengangguran hingga apa yang membuat orang bahagia. Informasi ini sangat penting dan dapat digunakan untuk berbagai tujuan. Antara lai', 'sosial'),
(2, 'Edukasi', 'suatu proses pembelajaran yang dilakukan baik secara formal maupun non formal yang bertujuan untuk mendidik, memberikan ilmu pengetahuan, serta mengembangkan potensi diri yang ada dalam diri setiap manusia, kemudian mewujudkan proses pembelajaran tersebut', 'edukasi'),
(3, 'Ekonomi', 'salah satu cabang ilmu yang mempelajari perilaku serta tindakan manusia dalam memenuhi kebutuhan hidupnya. Tujuan utama keberadaan sistem ekonomi sendiri adalah dapat menciptakan kesejahteraan yang besar serta merata.', 'ekonomi'),
(4, 'Teknologi', ' keseluruhan sarana untuk menyediakan barang-barang yang diperlukan bagi kelangsungan dan kenyamanan hidup manusia. Penggunaan teknologi oleh manusia diawali dengan pengubahan sumber daya alam menjadi alat-alat sederhana. Penemuan prasejarah tentang kemam', 'teknologi');

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
(1, 1, 'admin', '$2y$10$Toa.64Elg8v2sEyb7Y0XYuppKGo1I90MfHz3RalfR5I/D2aIt4I6y', 'Administrator', 'Aktif'),
(2, 2, 'ilyas', '$2y$10$JRQHPac0c6/yss6gTwltJ.FuR7HV49X50tdJioutxj8l5QLJo5TR.', 'User', 'Aktif'),
(3, 3, 'yusril', '$2y$10$JRQHPac0c6/yss6gTwltJ.FuR7HV49X50tdJioutxj8l5QLJo5TR.', 'User', 'Aktif'),
(4, 4, 'dyaul', '$2y$10$JRQHPac0c6/yss6gTwltJ.FuR7HV49X50tdJioutxj8l5QLJo5TR.', 'User', 'Aktif'),
(5, 5, 'aqi', '$2y$10$9SmPxOqqCvdR4rR3HU7FdOEHLcCFb8oE6Qsi7m8Vkq7guKMYNaEjG', 'User', 'Tidak Aktif'),
(6, 1, 'andrichardws', '$2y$10$JMJh5PMzdMRoExKHJFWdHulzEj6HT.y4PWW8yvDHmDUbH36E1fkx6', 'Administrator', 'Aktif'),
(7, 8, 'andi', '$2y$10$Uiz1fJ7mJe7b877dixgTyunQic8ZH0mEZFcrMq3R4H1FLTCQZRvTq', 'User', 'Aktif');

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
  `foto_program` varchar(50) DEFAULT NULL,
  `slug_p` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `program`
--

INSERT INTO `program` (`id_program`, `id_jenis_program`, `id_pengguna`, `judul_program`, `detail_program`, `foto_program`, `slug_p`) VALUES
(1, 1, 1, 'Kemanusiaan', 'KEMANUSIAAN adalah tentang nilai-nilai yang dianut oleh manusia dalam kaitan hubungannya dengan sesama manusia, seperti toleransi, welas-asih, cinta-kasih, tolong-menolong, gotong-royong, mendahulukan kepentingan umum, dan banyak lainnya. Semua nilai-nilai itu adalah antara manusia dengan manusia.', 'manusia.jfif', 'kemanusiaan'),
(2, 2, 3, 'Belajar Pemrograman Pemula', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, ullam veniam delectus praesentium, eius unde error fuga impedit sequi maxime voluptatibus aliquid quos dolores alias at et provident odit esse.', 'program.jpg', 'belajar-pemrograman-pemula'),
(4, 3, 1, 'Bantuan Massal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, ullam veniam delectus praesentium, eius unde error fuga impedit sequi maxime voluptatibus aliquid quos dolores alias at et provident odit esse.', 'bantu.jfif', 'bantuan-massal'),
(5, 1, 1, 'Kemasyarakatan', 'Kegiatan sosial kemasyarakatan adalah kegiatan bersama anggota masyarakat yang bersifat sosial (tidak mencari keuntungan ekonomi) di lingkungan tempat tinggal. Mengikuti kegiatan sosial kemasyarakatan adalah partisipasi/ keikutsertaan (terlibat aktif) seseorang dalam kegiatan sosial kemasyarakatan yang ada di lingkungan tempat tinggal yang masih dalam lingkup RT/RW/Dusun/Desa/Kelurahan.', 'masyarakat.jfif', 'kemasyarakatan'),
(6, 1, 2, 'Kemiskinan', 'Kemiskinan adalah keadaan saat ketidakmampuan untuk memenuhi kebutuhan dasar seperti makanan, pakaian, tempat berlindung, pendidikan, dan kesehatan. Kemiskinan dapat disebabkan oleh kelangkaan alat pemenuh kebutuhan dasar, ataupun sulitnya akses terhadap pendidikan dan pekerjaan. Kemiskinan merupakan masalah global. Sebagian orang memahami istilah ini secara subyektif dan komparatif, sementara yang lainnya melihatnya dari segi moral dan evaluatif, dan yang lainnya lagi memahaminya dari sudut ilmiah yang telah mapan, dan lain-lain.\r\n\r\nKemiskinan dipahami dalam berbagai cara. Pemahaman utamanya mencakup:\r\n\r\n    Gambaran kekurangan materi, yang biasanya mencakup kebutuhan pangan sehari-hari, sandang, perumahan, dan pelayanan kesehatan. Kemiskinan dalam arti ini dipahami sebagai situasi kelangkaan barang-barang dan pelayanan dasar.\r\n    Gambaran tentang kebutuhan sosial, termasuk keterkucilan sosial, ketergantungan, dan ketidakmampuan untuk berpartisipasi dalam masyarakat. Hal ini termasuk pendidikan dan informasi. Keterkucilan sosial biasanya dibedakan dari kemiskinan, karena hal ini mencakup masalah-masalah politik dan moral, dan tidak dibatasi pada bidang ekonomi. Gambaran kemiskinan jenis ini lebih mudah diatasi daripada dua gambaran yang lainnya.\r\n    Gambaran tentang kurangnya penghasilan dan kekayaan yang memadai. Makna \"memadai\" di sini sangat berbeda-beda melintasi bagian-bagian politik dan ekonomi di seluruh dunia. Gambaran tentang ini dapat diatasi dengan mencari objek penghasilan di luar profesi secara halal. Perkecualian apabila institusi tempatnya bekerja melarang.', 'miskin.jpeg', 'kemiskinan'),
(7, 2, 1, 'Belajar Membaca Bagi Anak', 'Memasuki sekolah Taman Kanak-kanak (TK), anak-anak akan mulai diajari membaca. Keterampilan ini sangat penting untuk dikuasai anak karena akan berpengaruh pada proses belajarnya. Belajar membaca anak TK pasti akan didapatkan di sekolah. Namun anak juga harus belajar membaca di rumah di bawah bimbingan Ibu supaya ia bisa cepat menguasainya.', 'vb pelantikan.jpg', 'belajar-membaca-bagi-anak'),
(8, 2, 1, 'Pembekalan Masa Kini', 'Pembekalan dan Latihan\r\nPembekalan ini didasari oleh kondisi ketenagakerjaan Indonesia belum memberikan harapan bagi penurunan angka pengangguran. Peluang kerja yang ada jauh lebih kecil bila dibandingkan dengan jumlah lulusan perguruan tinggi. Akibatnya tingkat persaingan untuk mendapatkan pekerjaan juga semakin tinggi. Oleh karena itu perlu upaya penyiapan lulusan untuk menghadapi dunia kerja. Tujuan dari kegiatan ini adalah (i) Memberikan gambaran umum dunia kerja dan tantangan yang dihadapi, (ii) Memberikan gambaran peluang karir yang dapat dimasuki (karyawan atau wirausahawan), (iii) Tips kiat sukses untuk menembus dunia kerja dan (iv) Sharing pengalaman dengan alumni sukses.\r\n\r\nPelatihan Prepare Your Self to Grasp the Job\r\nPelatihan ini bertujuan (i) Meningkatkan pemahaman peserta mengenai cara-cara sukses memasuki dunia kerja dan (ii) Meningkatkan keterampilan peserta dalam mempersiapkan teknik memasuki dunia kerja (pembuatan surat lamaran, CV/resume, psikotest dan interview). Materi-materi yang disampaikan adalah (i) Kompetensi yang dibutuhkan dunia kerja dan menggali kemampuan diri, (ii) Praktek interview dan konsultasi pribadi, (iii) Penyusunan surat lamaran & CV serta pengantar materi interview dan (iv) Membangun citra diri dan etika profesional\r\n\r\nPelatihan pelatihan pengembangan diri\r\nPelatihan-pelatihan ini dimaksudkan untuk memberikan bekal kepada para mahasiswa dan alumni mengenai kompetensi-kompetensi yang dibutuhkan dunia kerja. Pelatihan-pelatihan yang diberikan adalah (i) Kiat Sukses Merebut Peluang Kerja (ii) Studium General of Leadership .Be a Proactive Leader, (ii) Dream Building For Your Future Career, (iii) English for Job , (iv) Be Ready, Tips for Join The Company dan lain-lain.\r\n\r\nSeminar-seminar Ketenagakerjaan\r\nSeminar-seminar yang dilakukan bertujuan untuk menambah wawasan mahasiswa dan alumni mengenai karir dan ketenagakerjaan terutama di bidang pertanian. Seminar tersebut diantaranya adalah (i) Talk Show .Bila Alumni Bicara, (ii) Pembekalan Karir .I Need A Job, Now What ?!., (iii) Studium General .Pengantar Dunia Kerja & Perintisan Karir., (iv) Sukses Berkarir di Bidang Pertanian dan lain-lain', '14045652_663782173772641_1440152584842038824_n.jpg', 'pembekalan-masa-kini'),
(9, 3, 3, 'Pembagian Makanan', 'Vice President Corporate Social Responsibility & Small Medium Entreprise and Private Partnership (CSR SMEPP) Pertamina Arya Dwi Paramita (kedua kanan) bersama Manager CSR Pertamina Dian Hapsari (tengah) membagikan makanan kepada warga di Kelurahan Lagoa, Jakarta Utara. Warga menerima makanan dari Posko Masak, sinergi Satgas Bencana BUMN DKI Jakarta dan Satgas DPR RI. Satgas hadir untuk memenuhi kebutuhan pokok masyarakat yang terimbas kebijakan Covid-19, salah satunya di wilayah Jakarta Utara.', '14063753_638884306273953_5410159303819113362_n.jpg', 'pembagian-makanan'),
(10, 3, 3, 'Peningkatan Harga', 'Inflasi merupakan keadaan ekonomi di mana harga-harga barang naik secara terus menerus selama kurun waktu tertentu. Kenaikan harga barang digolongkan secara umum, di mana sebagian besar harga barang khususnya komoditas utama mengalami kenaikan harga. Sedangkan sebagian kecil komoditas yang mengalami penurunan harga. Inflasi biasanya hanya terjadi pada momen-momen tertentu seperti Hari Raya Idul Fitri, Natal, Tahun Baru, maupun momen pesta demokrasi.', 'naik.jpg', 'peningkatan-harga'),
(11, 2, 2, 'Metode Pembelajar Bagi Tunanetra', 'Pendidikan bagi anak sangatlah krusial dan penting. Pendidikan yang baik dapat merangsang pertumbuhan pengetahuan dan kemampuan anak sedari dini. Setiap anak perlu menerima pendidikannya dengan baik, tak terkecuali anak tunanetra. \r\n\r\nAda banyak contoh seorang penderita tunanetra yang memiliki kelebihan di bidang musik, olahraga, sastra bahkan seni.\r\n\r\nNama-nama seperti Stevie Wonder, Franklin Delano Roosevelt, dan Helen Keller telah diakui dunia melalui bakat dan kepandaian mereka. Mereka menerima pendidikan yang dapat mengasah kemampuan mereka hingga bisa terkenal seperti saat ini. \r\n\r\nPendidikan bagi anak tunanetra cukup berbeda dengan anak-anak pada umumnya.', 'tuna.jpg', 'metode-pembelajar-bagi-tunanetra'),
(12, 3, 1, 'Pemerintah Ekonomi Kerakyatan', 'Direktur Jenderal Pembangunan dan Pemberdayaan Masyarakat Kemendes Ahmad Erani Yustika mengatakan, konsep ekonomi kerakyatan akan diterapkan lebih konkret. Menurutnya, yang dimaksud konsep ekonomi kerakyatan adalah menerapkan berbagai program ekonomi untuk masyarakat yang terintyegrasi.\r\n\r\nSelama ini, masing-masing pihak memiliki program yang berkaitan dengan masyarakat sendiri-sendiri. Seperti Kemendes yang menyalurkan dana desa, lalu penyaluran Kredit Usaha Rakyat (KUR) melalui perbankan, pengembangan pasar rakyat, program logistik untuk masyarakat, pengembangan Usaha Kecil dan Menengah (UKM) dll.\r\n\r\nNah, supaya menjadi satu kesatuan dan memberi dampak nyata bagi masyarakat, semua program itu akan dibuat dalam satu konsep terintegrasi. \"Kami akan membuat satu percontohan di Brebes,\" kata Erani, Jumat (26/2) di Jakarta.', 'ekom.jpg', 'pemerintah-ekonomi-kerakyatan'),
(13, 2, 2, 'Manfaat Daring di Masa Sekarang', 'Online learning adalah proses belajar mengajar yang memanfaatkan internet dan media digital dalam penyampaian materinya. Metode online learning dianggap lebih dekat dengan generasi pelajar saat ini yang dikenal sangat menyatu dengan produk-produk teknologi. Hal ini merupakan salah satu bentuk digitalisasi dalam dunia pendidikan yang memiliki banyak manfaat.', 'daring_1.jpeg', '');

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
  MODIFY `id_community` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id_events` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `jenis_program`
--
ALTER TABLE `jenis_program`
  MODIFY `id_jenis_program` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `region`
--
ALTER TABLE `region`
  MODIFY `id_region` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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