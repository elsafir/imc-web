-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Sep 2021 pada 09.29
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
  `email_anggota` varchar(255) NOT NULL,
  `instagram_anggota` varchar(255) NOT NULL,
  `foto_anggota` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `community`
--

INSERT INTO `community` (`id_community`, `id_region`, `nama_anggota`, `id_jabatan`, `email_anggota`, `instagram_anggota`, `foto_anggota`) VALUES
(1, 4, 'Ayamsakit', 1, 'ayamaalalalalla@gmail.com', 'ayamsakit', 'IMG_8673.JPG'),
(2, 2, 'Muhammad Ilyas Arradya', 1, 'ilyas@gmail.com', 'layaaas', '44892a2f-547c-4ebf-bfef-53fa803e7d29.jpg'),
(3, 1, 'Muh. Yusril Hardiansyah. B. S.P', 2, '', '', NULL),
(4, 3, 'Dyaul Mu\'sinat', 3, '', '', NULL),
(5, 1, 'Aqidatul Izzah Ramli', 4, '', '', 'WhatsApp Image 2021-07-04 at 18.09.45.jpeg'),
(8, 2, 'Andi Firmansyah', 2, '', '', NULL),
(9, 2, 'Jhon Edgard', 3, '', '', NULL),
(10, 3, 'Pastop Pasaribu', 2, '', '', NULL),
(13, 4, 'Retno Ekayanti', 8, 'retnoekayanti15@gmail.com', 'reykayanti', NULL),
(17, 4, 'Iqbal Zaenal Muttaqin', 21, '#', '#', '53ae30911bf76d43cc38de850f4417c2.jpg'),
(18, 4, 'Septia Darmawaty', 2, '-', '#', '696dbf1138348e446ab85ba3de2763f1_1.jpg'),
(19, 4, 'Muhammad Faizal Arief Firdaus', 3, ' ', ' ', '53ae30911bf76d43cc38de850f4417c2.jpg'),
(20, 4, 'Puja Saraswati Karosekali', 3, ' ', ' ', NULL),
(21, 4, 'Luthfiana Andriani', 3, ' ', ' ', NULL),
(22, 4, 'Fita Fajria', 20, ' ', ' ', 'aef078234c8e2a4914c648814dc3a01f.jpg'),
(23, 4, 'Renji Eko Sandi', 22, ' ', ' ', '53ae30911bf76d43cc38de850f4417c2.jpg'),
(24, 4, 'Hana Syifarani', 22, ' ', ' ', NULL),
(25, 4, 'Riska Islamiyah', 22, '#', '#', NULL),
(26, 4, 'Maudina Mutiarani', 22, ' ', ' ', NULL),
(27, 4, 'Yuliana Setyowati', 29, ' ', ' ', 'aef078234c8e2a4914c648814dc3a01f_1.jpg'),
(28, 4, 'Eka Nurochmah', 4, ' ', ' ', NULL),
(29, 4, 'Nurul Hikmah ', 4, ' ', ' ', NULL),
(30, 4, 'Cynthia Dewi', 4, ' ', ' ', NULL),
(31, 4, 'Yusenda Dika Armanda Hutama', 23, ' ', ' ', NULL),
(32, 4, 'Putri Ardhiani Marshanda', 23, ' ', ' ', NULL),
(33, 4, 'Muhamad Sabit Munawar', 23, ' ', ' ', NULL),
(34, 4, 'Muhammad Ilyas Arradya', 30, ' ', ' ', NULL),
(35, 4, 'Hanny Mustika Dhea', 1, ' ', ' ', NULL),
(36, 4, 'Riskiadi', 10, ' ', ' ', NULL),
(37, 4, 'Bangkit Surya Wijaya', 31, ' ', ' ', NULL),
(38, 4, 'Nanda David Prasetyo', 11, ' ', ' ', NULL),
(39, 4, 'Aisya Widya Melati', 32, ' ', ' ', NULL),
(40, 4, 'Maria Rachel Nethania', 12, ' ', ' ', NULL),
(41, 4, 'Desra Yanti Gea', 24, ' ', ' ', '696dbf1138348e446ab85ba3de2763f1.jpg'),
(42, 4, 'Zam Zam Jamaludin', 33, ' ', ' ', NULL),
(43, 4, 'Cecep Fauzan Al rifah', 13, ' ', ' ', NULL),
(44, 4, 'Christina Yolantiara Sinaga', 34, ' ', ' ', NULL),
(45, 4, 'Mia Amalia Pramesti', 13, ' ', ' ', NULL),
(46, 4, 'Rizky Ramadhan', 35, ' ', ' ', NULL),
(47, 4, 'Nur Alfi Hasanah', 18, ' ', ' ', NULL),
(48, 4, 'Diajeng Anjalna Gakusha', 5, ' ', ' ', 'f2652c5d472c4bc92fa673e7e3df44a7.jpg'),
(49, 4, 'Rinda Faiz Shabira', 7, ' ', ' ', NULL),
(50, 4, 'Siti Latipah Mtd', 37, ' ', ' ', NULL),
(51, 4, 'Rezha Akbar Pradana', 36, ' ', ' ', '53ae30911bf76d43cc38de850f4417c2_1.jpg'),
(52, 4, 'Jesica Tandian', 6, ' ', ' ', NULL),
(53, 4, 'Putri Armaini', 38, ' ', ' ', 'f2652c5d472c4bc92fa673e7e3df44a7_1.jpg'),
(54, 4, 'Zahra Shaafiya Ektaputri', 39, ' ', ' ', NULL),
(55, 4, 'Fatima Alifha', 9, ' ', ' ', NULL),
(56, 4, 'Lathiifah asma rizqiya', 25, ' ', ' ', NULL),
(57, 4, 'Fadhel Fiddinilhaq', 26, ' ', ' ', NULL),
(58, 4, 'Muhamad Rizki', 27, ' ', ' ', NULL),
(59, 4, 'Alful Laila S', 27, ' ', ' ', NULL),
(60, 4, 'Andrichard Wiliam Saragih', 27, ' ', ' ', NULL),
(61, 4, 'Nabilah Fitri Arisanti', 11, ' ', ' ', NULL),
(62, 4, 'Elizabeth Chrisyan Dewi', 11, ' ', ' ', NULL),
(63, 4, 'Nur Ihsani Afsah Tarihoran', 12, ' ', ' ', NULL),
(64, 4, 'Jahfal Uno Surya Lazuardi', 7, ' ', ' ', NULL),
(65, 4, 'Farros Ghifari', 40, ' ', ' ', NULL),
(66, 4, 'Dyaz Nurul Alif Iskandar', 26, ' ', ' ', NULL),
(67, 4, 'Fakhriza Sidhqi Wafiq Fauzi', 26, ' ', ' ', NULL),
(68, 4, 'Natasya Hikma Kamila', 9, ' ', ' ', NULL),
(69, 4, 'Aurigha Haidar Brabo', 9, ' ', ' ', NULL),
(70, 4, 'Laila Fitriana', 9, ' ', ' ', NULL),
(71, 4, 'Inez Putri Pramono', 9, ' ', ' ', NULL),
(72, 4, 'Zulfa Fitriani Nur Alyza', 9, ' ', ' ', NULL),
(74, 4, 'Muhammad Naufal Ramadhan', 25, '  ', '  ', NULL),
(75, 4, 'Retno Ekayanti', 41, 'retnoekayanti15@gmail.com', 'reykayanti', NULL),
(76, 4, 'Leonyta Anggun Nugroho', 16, ' ', ' ', NULL),
(77, 4, 'Amelia Fadhil Nurlaila', 16, ' ', ' ', NULL),
(78, 4, 'Zuhratul Husna', 16, ' ', ' ', NULL),
(79, 4, 'Liesna Lusyana Nur', 16, ' ', ' ', NULL),
(80, 4, 'Aulia Rahadyanjati Sukarno', 16, ' ', ' ', NULL),
(81, 12, 'Aldo Suhendi', 16, ' ', ' ', NULL),
(82, 4, 'Bella Winelia', 13, ' ', ' ', NULL),
(83, 4, 'Sastri Ayu Wiranitania', 13, ' ', ' ', NULL),
(84, 4, 'Alissa Nur Azizah', 13, ' ', ' ', NULL),
(85, 4, 'Garin Aprilino Matondang', 13, ' ', ' ', NULL),
(86, 4, 'Hajar almasah ayu Ghiffari', 13, ' ', ' ', NULL),
(87, 4, 'Rahartini Purnama Asri', 18, ' ', ' ', NULL),
(88, 4, 'Dinda Ayu Ningsih', 18, ' ', ' ', NULL),
(89, 4, 'Nicholas Wiguna', 18, ' ', ' ', NULL),
(90, 4, 'Uutia Khairia', 18, ' ', ' ', NULL);

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
  `slug_e` varchar(255) NOT NULL,
  `linkdaftar_event` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id_events`, `id_pengguna`, `judul_events`, `detail_events`, `foto_events`, `slug_e`, `linkdaftar_event`, `created_at`, `updated_at`) VALUES
(3, 3, 'ECO TALKS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur harum officia ipsam quasi autem id quisquam laboriosam reiciendis earum facere excepturi atque quam eius aperiam voluptate incidunt, sit, blanditiis nostrum?', 'feed.jpg', 'eco-talks', 'https://www.youtube.com/watch?v=DyDfgMOUjCI&list=RDL4ulcFtlB6I&index=27', NULL, NULL),
(4, 1, 'HTML Events', 'An HTML event can be something the browser does, or something a user does.\r\nHere are some examples of HTML events:\r\n    An HTML web page has finished loading\r\n    An HTML input field was changed\r\n    An HTML button was clicked\r\nOften, when events happen, you may want to do something.\r\nJavaScript lets you execute code when events are detected.\r\nHTML allows event handler attributes, with JavaScript code, to be added to HTML elements.', 'html_2.jpg', 'html-events', 'https://bit.ly/sjoidjdaiodjoaidjoad.com', NULL, NULL),
(12, 2, 'lalaas', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur harum officia ipsam quasi autem id quisquam laboriosam reiciendis earum facere excepturi atque quam eius aperiam voluptate incidunt, sit, blanditiis nostrum?', 'aufa.jpg', 'lalaas', 'https://www.youtube.com/watch?v=DyDfgMOUjCI&list=RDL4ulcFtlB6I&index=27', NULL, NULL),
(18, 1, 'lalaa', 'lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala lala alala ', '', 'lalaa', 'https://www.duniailkom.com/tutorial-php-cara-memotong-atau-mengambil-sebagian-string-fungsi-substr/', NULL, NULL),
(22, 2, 'Test event bandung', 'Test event bandung Test event bandung Test event bandung Test event bandung Test event bandung Test event bandung Test event bandung Test event bandung Test event bandung Test event bandung Test event bandung Test event bandung Test event bandung Test event bandung Test event bandung Test event bandung ', 'feed.jpg', 'test-event-bandung', 'aa', NULL, NULL);

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
(1, 'Regional Coordinator'),
(2, 'General Secretary'),
(3, 'Secretary'),
(4, 'Finance'),
(5, 'Chief Marketing Officer'),
(6, 'Public Relation'),
(7, 'Business Development'),
(8, 'Technology Manager'),
(9, 'Content Manager'),
(10, 'Chief Human Resource Officer'),
(11, 'Human Resource Development'),
(12, 'Human Resource Recruitment'),
(13, 'Economy Project'),
(14, 'Staff of Economy'),
(16, 'Education Project'),
(17, 'Staff of Education'),
(18, 'Social Project'),
(19, 'Staff of Social'),
(20, 'Chief Operating Officer'),
(21, 'Chief Executive Officer'),
(22, 'Organization Development'),
(23, 'Funding'),
(24, 'Chief Project Officer'),
(25, 'Graphic Designer'),
(26, 'Video Editor'),
(27, 'Web Development'),
(28, 'Head Organization Development'),
(29, 'Head Finance'),
(30, 'Head Regional Coordinator'),
(31, 'Head Human Resources Development'),
(32, 'Head Human Resources Recruitment'),
(33, 'Head Education Project'),
(34, 'Head Economy Project'),
(35, 'Head Social Project'),
(36, 'Head Business Development'),
(37, 'Head Public Relation'),
(38, 'Head Media'),
(39, 'PIC Graphic Designer'),
(40, 'PIC Video Editor'),
(41, 'PIC Web Development');

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
(1, 'Edukasi', 'Membantu menjelaskan cara kerja masyarakat, mengeksplorasi segala hal mulai dari pemicu pertumbuhan ekonomi dan penyebab pengangguran hingga apa yang membuat orang bahagia. Informasi ini sangat penting dan dapat digunakan untuk berbagai tujuan. membantu menjelaskan cara kerja masyarakat, mengeksplorasi segala hal mulai dari pemicu pertumbuhan ekonomi dan penyebab pengangguran hingga apa yang membuat orang bahagia. Informasi ini sangat penting dan dapat digunakan untuk berbagai tujuan. membantu menjelaskan cara kerja masyarakat, mengeksplorasi segala hal mulai dari pemicu pertumbuhan ekonomi dan penyebab pengangguran hingga apa yang membuat orang bahagia. Informasi ini sangat penting dan dapat digunakan untuk berbagai tujuan. ', 'edukasi'),
(2, 'Sosial', 'suatu proses pembelajaran yang dilakukan baik secara formal maupun non formal yang bertujuan untuk mendidik, memberikan ilmu pengetahuan, serta mengembangkan potensi diri yang ada dalam diri setiap manusia, kemudian mewujudkan proses pembelajaran tersebut', 'sosial'),
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
(3, 3, 'yusril', '$2y$10$ed3GeI1vFvYilpZSTgzamuLcvDZSyKrCWCjOHt.5staCNQCINK1nC', 'User', 'Aktif'),
(4, 4, 'dyaul', '$2y$10$JRQHPac0c6/yss6gTwltJ.FuR7HV49X50tdJioutxj8l5QLJo5TR.', 'User', 'Aktif'),
(5, 5, 'aqi', '$2y$10$9SmPxOqqCvdR4rR3HU7FdOEHLcCFb8oE6Qsi7m8Vkq7guKMYNaEjG', 'User', 'Tidak Aktif'),
(6, 1, 'andrichardws', '$2y$10$JMJh5PMzdMRoExKHJFWdHulzEj6HT.y4PWW8yvDHmDUbH36E1fkx6', 'Administrator', 'Aktif'),
(7, 8, 'andi', '$2y$10$W9Q06.DRBqV8Mt/vD7Byhe/txO1mo3q61j7qDqkz1yj0aGbYR.8UC', 'User', 'Aktif');

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
(7, 2, 1, 'Pembekalan Masa Kini', 'Memasuki sekolah Taman Kanak-kanak (TK), anak-anak akan mulai diajari membaca. Keterampilan ini sangat penting untuk dikuasai anak karena akan berpengaruh pada proses belajarnya. Belajar membaca anak TK pasti akan didapatkan di sekolah. Namun anak juga harus belajar membaca di rumah di bawah bimbingan Ibu supaya ia bisa cepat menguasainya.', 'vb pelantikan.jpg', 'pembekalan-masa-kini'),
(9, 3, 3, 'Pembagian Makanan Jakarta', 'Vice President Corporate Social Responsibility & Small Medium Entreprise and Private Partnership (CSR SMEPP) Pertamina Arya Dwi Paramita (kedua kanan) bersama Manager CSR Pertamina Dian Hapsari (tengah) membagikan makanan kepada warga di Kelurahan Lagoa, Jakarta Utara. Warga menerima makanan dari Posko Masak, sinergi Satgas Bencana BUMN DKI Jakarta dan Satgas DPR RI. Satgas hadir untuk memenuhi kebutuhan pokok masyarakat yang terimbas kebijakan Covid-19, salah satunya di wilayah Jakarta Utara.', '14063753_638884306273953_5410159303819113362_n.jpg', 'pembagian-makanan-jakarta'),
(10, 3, 3, 'Peningkatan Harga Ekonomi', 'Inflasi merupakan keadaan ekonomi di mana harga-harga barang naik secara terus menerus selama kurun waktu tertentu. Kenaikan harga barang digolongkan secara umum, di mana sebagian besar harga barang khususnya komoditas utama mengalami kenaikan harga. Sedangkan sebagian kecil komoditas yang mengalami penurunan harga. Inflasi biasanya hanya terjadi pada momen-momen tertentu seperti Hari Raya Idul Fitri, Natal, Tahun Baru, maupun momen pesta demokrasi.', 'naik.jpg', 'peningkatan-harga-ekonomi'),
(11, 2, 2, 'Metode Belajar Bagi Tunanetra', 'Pendidikan bagi anak sangatlah krusial dan penting. Pendidikan yang baik dapat merangsang pertumbuhan pengetahuan dan kemampuan anak sedari dini. Setiap anak perlu menerima pendidikannya dengan baik, tak terkecuali anak tunanetra. \r\n\r\nAda banyak contoh seorang penderita tunanetra yang memiliki kelebihan di bidang musik, olahraga, sastra bahkan seni.\r\n\r\nNama-nama seperti Stevie Wonder, Franklin Delano Roosevelt, dan Helen Keller telah diakui dunia melalui bakat dan kepandaian mereka. Mereka menerima pendidikan yang dapat mengasah kemampuan mereka hingga bisa terkenal seperti saat ini. \r\n\r\nPendidikan bagi anak tunanetra cukup berbeda dengan anak-anak pada umumnya.', 'tuna.jpg', 'metode-belajar-bagi-tunanetra'),
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
(2, 'Bandung', 'Bandung adalah Ibukota provinsi dari Jawa Barat. Kota ini terkenal dengan hawanya yang sejuk dan dikelilingi oleh pegunungan. Pada zaman dahulu Bandung dijuluki sebagai Parijs van Java (Paris dari Jawa).\r\nKota Bandung dialiri dua sungai utama, yaitu Sungai Cikapundung dan Sungai Citarum beserta anak-anak sungainya yang pada umumnya mengalir ke arah selatan dan bertemu di Sungai Citarum. Dengan kondisi yang demikian, Bandung Selatan sangat rentan terhadap masalah banjir terutama pada musim hujan.\r\nBandung dikenal akan sejumlah besar bangunan lama berarsitektur Belanda:\r\nDalam kota, warga Bandung biasanya menggunakan angkutan kota atau yang lebih akrab angkot daripada taksi yang lebih mahal. Selain itu, bus kota juga melayani transportasi, umumnya di jalan-jalan besar dan untuk rute-rute yang panjang.\r\n<br><br>\r\nBandung memiliki sebuah bandara internasional, Bandara Husein Sastranegara yang menghubungkan Bandung dengan kota-kota lainnya di Indonesia dan Kuala Lumpur di Malaysia.\r\nBandung juga mempunyai dua stasiun kereta api, yaitu Stasiun Bandung yang melayani rute Bandung-Jakarta (Gambir), Surabaya dan Semarang setiap harinya untuk kelas Bisnis dan Eksekutif dan Stasiun Kiaracondong untuk Kelas Ekonomi.\r\nJembatan Pasupati menghubungkan bagian utara dan timur Bandung melewati lembah Cikapundung. Panjangnya 2,8 km dan lebarnya 30-60 m. Pada 25 Juni 2005 jembatan ini resmi dibuka. Jembatan ini rencananya akan menjadi land mark kota Bandung yang baru.\r\n<br><br>\r\nJalan tol Padaleunyi menghubungkan Padalarang, Cimahi, Bandung sebelah selatan dan Cileunyi. Selanjutnya jalan tol yang menghubungkan Padalarang dan Purwakarta (Cipularang) sudah dibangun, digabungkan dengan Padaleunyi dan dinamai Purbaleunyi. Jalan tersebut mempersingkat perjalanan antara Bandung dan Jakarta. Dengan adanya jalur ini, waktu tempuh Jakarta-Bandung hanya 2,5 jam.\r\n\r\nJalan tol Cileunyi-Sumedang-Dawuan (Cisumdawu) dan Soreang-Pasir Koja juga sedang dipertimbangkan untuk dibangun.', 'b84ae25f1ab45e6f5c37e56c22e11bf1_p.jpeg', '-', 'bandung'),
(3, 'Medan', 'Medan adalah ibu kota provinsi Sumatra Utara, Indonesia. Kota ini merupakan kota terbesar ketiga di Indonesia setelah DKI Jakarta dan Surabaya, serta kota terbesar di luar pulau Jawa. Kota Medan merupakan pintu gerbang wilayah Indonesia bagian barat dengaMedan adalah ibu kota provinsi Sumatra Utara, Indonesia. Kota ini merupakan kota terbesar ketiga di Indonesia setelah DKI Jakarta dan Surabaya, serta kota terbesar di luar pulau Jawa. Kota Medan merupakan pintu gerbang wilayah Indonesia bagian barat dengaMedan adalah ibu kota provinsi Sumatra Utara, Indonesia. Kota ini merupakan kota terbesar ketiga di Indonesia setelah DKI Jakarta dan Surabaya, serta kota terbesar di luar pulau Jawa. Kota Medan merupakan pintu gerbang wilayah Indonesia bagian barat dengaMedan adalah ibu kota provinsi Sumatra Utara, Indonesia. Kota ini merupakan kota terbesar ketiga di Indonesia setelah DKI Jakarta dan Surabaya, serta kota terbesar di luar pulau Jawa. Kota Medan merupakan pintu gerbang wilayah Indonesia bagian barat denga', '5-fakta-menarik-tentang-kota-medan-tanah-kelahiran-bagi-suku-batak.jpg', 'medan', 'medan'),
(4, 'Pusat', 'Pusat adalah tempat yang letaknya di bagian tengah Istana Merdeka letaknya di kota Jakarta 2 titik yang di tengah-tengah benar (dalam bulatan bola, lingkaran, dan sebagainya) bumi lingkaran 3 pusar 4 pokok pangkal atau yang menjadi pumpunan (berbagai-baga', '', NULL, 'pusat'),
(12, 'Surabaya', 'Kota Surabaya adalah ibu kota Provinsi Jawa Timur, Indonesia, sekaligus kota metropolitan terbesar di provinsi tersebut. Surabaya merupakan kota terbesar kedua di Indonesia setelah Jakarta. Kota ini terletak 800 km sebelah timur Jakarta, atau 435 km sebelah barat laut Denpasar, Bali Kota Surabaya adalah ibu kota Provinsi Jawa Timur, Indonesia, sekaligus kota metropolitan terbesar di provinsi tersebut. Surabaya merupakan kota terbesar kedua di Indonesia setelah Jakarta. Kota ini terletak 800 km sebelah timur Jakarta, atau 435 km sebelah barat laut Denpasar, Bali Kota Surabaya adalah ibu kota Provinsi Jawa Timur, Indonesia, sekaligus kota metropolitan terbesar di provinsi tersebut. Surabaya merupakan kota terbesar kedua di Indonesia setelah Jakarta. Kota ini terletak 800 km sebelah timur Jakarta, atau 435 km sebelah barat laut Denpasar, Bali ', '', '-', 'surabaya');

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
  MODIFY `id_community` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id_events` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `jenis_program`
--
ALTER TABLE `jenis_program`
  MODIFY `id_jenis_program` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `region`
--
ALTER TABLE `region`
  MODIFY `id_region` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
