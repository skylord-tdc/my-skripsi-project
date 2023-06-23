-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 28, 2023 at 10:40 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_berita`
--

CREATE TABLE `data_berita` (
  `id` int(11) NOT NULL,
  `slug` text NOT NULL,
  `data_filter` varchar(255) NOT NULL,
  `creator` varchar(255) NOT NULL,
  `date` timestamp NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `level` varchar(60) NOT NULL,
  `foto` text NOT NULL,
  `tipe_gambar` varchar(60) NOT NULL,
  `ukuran_gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_berita`
--

INSERT INTO `data_berita` (`id`, `slug`, `data_filter`, `creator`, `date`, `title`, `content`, `level`, `foto`, `tipe_gambar`, `ukuran_gambar`) VALUES
(1, 'smk-purnama-1-semarang-new-normal-', 'Akademik', 'Thomas Dwi Christiyanto', '2023-02-03 08:30:16', 'SMK Purnama 1 Semarang New Normal ', '<h2><strong>Berikut adalah tata cara pencegahan COVID-19 di halaman sekolah SMK Purnama 1 Semarang:</strong></h2><ol><li>Selalu memakai masker saat berada di dalam dan di luar sekolah</li><li>Menjaga jarak minimal 1 meter dari orang lain</li><li>Mencuci tangan secara teratur menggunakan air dan sabun</li><li>Menghindari kerumunan dan membatasi kontak fisik dengan orang lain</li><li>Mengisi formulir health declaration setiap hari sebelum masuk sekolah</li><li>Melaporkan ke sekolah jika memiliki gejala COVID-19</li><li>Menghormati protokol kesehatan yang diterapkan oleh sekolah</li></ol><p>Penting untuk dicatat bahwa pencegahan COVID-19 harus dilakukan bersama-sama oleh seluruh warga sekolah untuk menjamin keselamatan bersama.</p>', 'Admin', '6091protokol.jpg', 'image/jpeg', 163356),
(3, 'lowongan-cashier-pt-agro-boga-utama-meat-n-fresh', 'Pekerjaan', 'Thomas Dwi Christiyanto', '2023-02-03 08:40:54', 'Lowongan Cashier PT Agro Boga Utama (Meat N Fresh)', '<h3><strong>Cashier</strong></h3><p>Tugas &amp; Tanggung Jawab :</p><ul><li>Melakukan pelayanan jual beli serta packing barang</li><li>Melayani customer yang akan melakukan pembayaran</li><li>Melakukan transaksi keuangan</li><li>Melakukan pencatatan atas semua transaksi</li><li>Membuat laporan transaksi keuangan</li><li>Memberikan informasi produk kepada customer</li><li>Menerima, memeriksa dan mencatat barang yang masuk ke toko</li><li>Menempatkan display produk agar terlihat menarik</li><li>Memastikan kebersihan toko</li></ul><p>Persyaratan :</p><ul><li>Pendidikan minimal SMA atau sederajat, semua jurusan</li><li>Lebih diutamakan memiliki pengalaman minimal 1 tahun sebagai kasir</li><li>Mampu mengoperasikan mesin EDC</li><li>Familiar dengan Microsoft Office (Excel, Word)</li><li>Teliti dan mampu melayani customer dengan baik</li><li>Target &amp; service oriented</li><li>Kounikatif, disiplin dan jujur</li><li>Bersedia ditempatkan di area&nbsp;Tasikmalaya</li></ul><p><a href=\"https://lokerbumn.com/lowongan-cashier-pt-agro-boga-utama/15/2023/\">Tautan</a></p>', 'Admin', '5414LOKER.jpg', 'image/jpeg', 51393);

-- --------------------------------------------------------

--
-- Table structure for table `data_eskul`
--

CREATE TABLE `data_eskul` (
  `id` int(11) NOT NULL,
  `eskul` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tipe_gambar` varchar(60) NOT NULL,
  `ukuran_gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_eskul`
--

INSERT INTO `data_eskul` (`id`, `eskul`, `keterangan`, `foto`, `tipe_gambar`, `ukuran_gambar`) VALUES
(4, 'Pramuka', 'Untuk pembinaan mental & melatih kemandirian siswa.', '7169muhammad-adil-haxy-FVe4S8-unsplash.jpg', 'image/jpeg', 39935),
(5, 'Seni Tari', 'Untuk membina & menumbuhkan kreatifitas & bakat siswa.', '3534prabu-panji-pX8rAtAyy8Q-unsplash.jpg', 'image/jpeg', 155557),
(6, 'Komputer', 'Untuk menambah jam praktek komputer intra sehingga siswa menjadi tenaga terdidik yang kompeten.', '5565flashcom-indonesia-wr6eqJyxWy8-unsplash.jpg', 'image/jpeg', 49883),
(7, 'Outbound', 'Sebagai sarana refreshing, melatih persatuan & kerjasama.', '3107rahadiansyah-g-zumCokMWo-unsplash.jpg', 'image/jpeg', 60517);

-- --------------------------------------------------------

--
-- Table structure for table `data_fasilitas`
--

CREATE TABLE `data_fasilitas` (
  `id` int(11) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tipe_gambar` varchar(30) NOT NULL,
  `ukuran_gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_fasilitas`
--

INSERT INTO `data_fasilitas` (`id`, `fasilitas`, `foto`, `tipe_gambar`, `ukuran_gambar`) VALUES
(3, 'Praktek Pemasaran (Bussines Center)', '4524myriam-jessier-eveI7MOcSmw-unsplash.jpg', 'image/jpeg', 47707),
(4, 'Praktek Komputer', '5538austin-distel-tLZhFRLj6nY-unsplash.jpg', 'image/jpeg', 48068),
(5, 'Koneksi Internet', '9457thomas-jensen-h3vT1Kp0FxA-unsplash.jpg', 'image/jpeg', 38206);

-- --------------------------------------------------------

--
-- Table structure for table `data_galeri`
--

CREATE TABLE `data_galeri` (
  `id_galeri` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tipe_gambar` varchar(255) NOT NULL,
  `ukuran_gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_galeri`
--

INSERT INTO `data_galeri` (`id_galeri`, `tanggal`, `judul`, `keterangan`, `foto`, `tipe_gambar`, `ukuran_gambar`) VALUES
(22, '2023-02-01 18:23:12', 'Sejarah Indonesia', 'Dra. Sri Umi Saduarti', '2395Dra. Sri Umi Saduarti.jpg', 'image/jpeg', 37737),
(23, '2023-02-01 18:24:31', 'Pendidikan Pancasilan dan Kewarganegaraan', 'Drs. Ujang Noerfaizan, M.Pd', '7851Drs. Ujang Noerfaizan, M.Pd.jpg', 'image/jpeg', 37941),
(25, '2023-02-01 18:26:58', 'Pendidikan Agama Dan Budi Pekerti 1', 'Nurul Huda, S.Ag', '3738Nurul Huda, S.Ag.jpg', 'image/jpeg', 28382),
(26, '2023-02-01 18:27:32', 'Pendidikan Agama Dan Budi Pekerti', 'T. Setijanto, S.Th', '7986T. Setijanto, S.Th.jpg', 'image/jpeg', 62299),
(27, '2023-02-01 18:28:04', 'Bahasa Indonesia', 'Puji Lestari, S.Pd', '7474Puji Lestari, S.Pd.jpg', 'image/jpeg', 47814),
(28, '2023-02-01 18:28:29', 'Matematika', 'Eko Kurniawan, S.Pd', '1165Eko Kurniawan, S.Pd.jpg', 'image/jpeg', 83477),
(29, '2023-02-01 18:29:02', 'Pengolahan Bisnis Ritel', 'Edi Mulyono, S.Pd', '718Edi Mulyono, S.Pd.jpg', 'image/jpeg', 68725),
(30, '2023-02-01 18:29:27', 'Simulasi dan Komunikasi Digital', 'Lulut Dwi Ratna', '5626Lulut Dwi Ratna.jpg', 'image/jpeg', 130064),
(31, '2023-02-01 18:29:50', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', 'Annajmuts Tsaqib', '1962Annajmuts Tsaqib.jpg', 'image/jpeg', 54642),
(32, '2023-02-01 18:30:14', 'Bimbingan Konseling', 'Theresia Elvi N. S.Psi', '1567Theresia Elvi N. S.Psi.jpg', 'image/jpeg', 49999),
(33, '2023-02-01 18:30:38', 'Bahasa Inggris dan Bahasa Asing Lainnya', 'Drs. Slamet Budi Santoso, M.F', '6348Drs. Slamet Budi Santoso, M.F.jpg', 'image/jpeg', 28760),
(34, '2023-02-01 18:30:57', 'Administrasi Transaksi', 'Wiharsih, S.Pd', '2606Wiharsih, S.Pd.jpg', 'image/jpeg', 104678);

-- --------------------------------------------------------

--
-- Table structure for table `data_kegiatan`
--

CREATE TABLE `data_kegiatan` (
  `id` int(11) NOT NULL,
  `slug` text NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `youtube` text,
  `tanggal` timestamp NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tipe_gambar` varchar(30) NOT NULL,
  `ukuran_gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kegiatan`
--

INSERT INTO `data_kegiatan` (`id`, `slug`, `judul`, `isi`, `youtube`, `tanggal`, `foto`, `tipe_gambar`, `ukuran_gambar`) VALUES
(1, 'smk-purnama-rayakan-kemerdekaan-indonesia-hut-ke-77', 'SMK Purnama Rayakan Kemerdekaan Indonesia (HUT) ke-77', '<p>Pada tanggal 17 Agustus, sekolah SMK Purnama 1 Semarang akan menyelenggarakan berbagai aktivitas untuk memperingati Hari Kemerdekaan Indonesia. Kegiatan ini bertujuan untuk mengenang jasa-jasa pahlawan dan memupuk rasa cinta tanah air serta nasionalisme pada generasi muda.</p><p>Berikut adalah agenda aktivitas yang akan dilaksanakan:</p><ul><li>Upacara bendera pada pukul 07:30 WIB di lapangan sekolah.</li><li>Pertunjukan kesenian dan lagu-lagu nasional oleh siswa dan guru.</li><li>Lomba lari estafet dan lomba makan kerupuk untuk siswa kelas X,XI,XII BISNIS DARING DAN PEMASARAN.</li></ul><p>Kami berharap semua siswa dapat turut serta dan memeriahkan acara Hari Kemerdekaan ini. Terima kasih.</p>', 'G3r8-0OoPgA', '2023-02-03 07:13:06', '3870upacara kemerdekaan.jpg', 'image/jpeg', 65949),
(2, 'smk-purnama-1-semarang-mengadakan-acara-workshop-bisnis-marketing', 'SMK Purnama 1 Semarang Mengadakan Acara Workshop Bisnis Marketing', '<p>Sekolah SMK Purnama 1 Semarang mengundang seluruh siswa dan masyarakat untuk mengikuti Workshop Bisnis Marketing pada 12-Febuari-2023 pukul 07:30 WIB. Workshop ini akan dibawakan oleh pemateri berkompeten dalam bidang bisnis dan marketing, dan akan mencakup berbagai materi penting seperti:</p><ul><li>Strategi pemasaran produk dan jasa.</li><li>Analisis pasar dan segmentasi pasar.</li><li>Teknik pemasaran digital dan social media marketing.</li><li>Metode pengembangan bisnis dan manajemen bisnis.</li></ul><p>Workshop ini merupakan kesempatan bagus bagi siswa dan masyarakat untuk menambah wawasan dan memperdalam pengetahuan tentang bisnis dan marketing. Biaya pendaftaran sebesar Rp. 20.000/Orang.</p><p>Untuk informasi dan pendaftaran, silakan menghubungi Lulut Dwi 0858-7864-3363. Kami berharap dapat menyambut keikutsertaan siswa dan masyarakat dalam acara Workshop Bisnis Marketing ini. Terima kasih.</p>', '', '2023-02-03 07:39:41', '8180workshop.jpg', 'image/jpeg', 141368),
(4, 'webinar-creative-digital-marketing-agency', 'WEBINAR â€œCreative Digital Marketing Agencyâ€', '<p>Sekolah SMK Purnama 1 Semarang dengan bangga mengundang seluruh siswa dan masyarakat untuk mengikuti Webinar Topik \"Creative Digital Marketing Agency\" pada 04-Febuari-2023 Jam 09:30 WIB. Webinar ini akan dibawakan oleh pemateri ahli dalam bidang digital marketing dan akan membahas topik-topik penting seperti:</p><ul><li>Konsep dan strategi pemasaran digital.</li><li>Cara membuat kampanye digital marketing yang efektif dan inovatif.</li><li>Teknik pemasaran melalui media sosial dan influencer marketing.</li><li>Metode membangun agensi digital marketing yang sukses.</li></ul><p>Webinar ini merupakan kesempatan bagus bagi siswa dan masyarakat untuk mempelajari dan meningkatkan pengetahuan tentang digital marketing. Pendaftaran dilakukan secara online dan gratis.</p><p>Untuk mendaftar, silakan mengklik tautan <a href=\"https://forms.gle/v7Cwz45rZYvZ1UGJ9\"><strong>Klik Disini</strong></a>. Kami berharap dapat menyambut keikutsertaan siswa dan masyarakat dalam Webinar Topik \"Creative Digital Marketing Agency\" ini. Terima kasih.</p>', '', '2023-02-03 08:01:23', '4969webinar.jpg', 'image/jpeg', 171514),
(6, 'bebas-bertanya-kepada-mas-menteri', 'Bebas bertanya kepada Mas Menteri', '<p>Ikuti informasi pendidikan, kebudayaan, riset, dan teknologi melalui kanal berikut:</p><p>Laman: kemdikbud.go.id</p><p>Twitter: Kemdikbud_RI</p><p>Instagram: kemdikbud.ri</p><p>Facebook: Kemdikbud.RI</p><p>YouTube: KEMENDIKBUD RI</p><p>---</p><p>Sampaikan pengaduan, saran, atau masukan melalui Unit Layanan Terpadu Kemendikbudristek <a href=\"http://ult.kemdikbud.go.id/\"><strong>disini</strong></a></p>', 'SMeSj7_W_mg', '2023-02-03 08:10:22', '8027hqdefault.jpg', 'image/jpeg', 25053),
(7, 'sekolah-smk-purnama-1-semarang-mempersembahkan-acara-spesial-untuk-mengapresiasi-para-guru', 'Sekolah SMK Purnama 1 Semarang Mempersembahkan Acara Spesial Untuk Mengapresiasi Para Guru', '<p>Sekolah SMK Purnama 1 Semarang mempersembahkan acara spesial untuk mengapresiasi para guru pada Sabtu, 25 November 2022. Kami mengundang seluruh siswa, orang tua, dan masyarakat untuk berpartisipasi dalam acara ini.</p><p>Acara Hari Guru kali ini akan menampilkan berbagai hiburan dan penghargaan bagi para guru yang berdedikasi dan berpengalaman. Beberapa acara yang akan diselenggarakan meliputi:</p><ol><li>Sambutan dari Kepala Sekolah dan pimpinan sekolah.</li><li>Pertunjukan musik dan tari oleh siswa.</li><li>Penyampaian penghargaan bagi guru terbaik.</li><li>Pemutaran video dokumentasi sejarah sekolah dan guru.</li><li>Acara makan malam bersama dan permainan sosial.</li></ol><p>Kami berharap dapat menyambut keikutsertaan seluruh siswa, orang tua, dan masyarakat dalam acara Hari Guru ini. Terima kasih.</p>', '', '2023-02-03 08:17:37', '4911hari guru.jpg', 'image/jpeg', 363391);

-- --------------------------------------------------------

--
-- Table structure for table `data_kelas`
--

CREATE TABLE `data_kelas` (
  `id_kls` int(11) NOT NULL,
  `kls` varchar(10) NOT NULL,
  `smstr` varchar(60) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nm_siswa` varchar(255) NOT NULL,
  `thn_angkatan` varchar(60) NOT NULL,
  `kompetensi` varchar(255) NOT NULL,
  `nm_mapel` varchar(255) NOT NULL,
  `thn_pelajaran` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kelas`
--

INSERT INTO `data_kelas` (`id_kls`, `kls`, `smstr`, `nis`, `nm_siswa`, `thn_angkatan`, `kompetensi`, `nm_mapel`, `thn_pelajaran`) VALUES
(1, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(2, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(3, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(4, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(5, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(6, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(7, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(8, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(9, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(10, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(11, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(12, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(13, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(14, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(15, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(16, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(17, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(18, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(20, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(21, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(22, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(23, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(24, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(25, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(26, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(27, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(28, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(29, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(30, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(31, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(32, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(33, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(34, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(35, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(36, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(37, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(38, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(39, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(40, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020'),
(41, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(42, 'X', 'Ganjil', '5397', 'Ary Yuan Kusumaningtyas', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(43, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(44, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(45, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(46, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(47, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(48, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(49, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(50, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(51, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(52, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(53, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(54, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(55, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(56, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(57, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(58, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(59, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(60, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(61, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020'),
(62, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(63, 'X', 'Ganjil', '5398', 'Basofa Titan Bakhtiar', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(64, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(65, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(66, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(67, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(68, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(69, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(70, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(71, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(72, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(73, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(74, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(75, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(76, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(77, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(78, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(79, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(80, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(81, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(82, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020'),
(83, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(84, 'X', 'Ganjil', '5399', 'Eko Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(85, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(86, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(87, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(88, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(89, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(90, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(91, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(92, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(93, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(94, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(95, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(96, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(97, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(98, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(99, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(100, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(101, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(102, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(103, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020'),
(104, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(105, 'X', 'Ganjil', '5400', 'Enjelika Hasna Najla', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(106, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(107, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(108, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(109, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(110, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(111, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(112, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(113, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(114, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(115, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(116, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(117, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(118, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(119, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(120, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(121, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(122, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(123, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(124, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020'),
(125, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(126, 'X', 'Ganjil', '5401', 'Febry Wiyandono', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(127, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(128, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(129, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(130, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(131, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(132, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(133, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(134, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(135, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(136, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(137, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(138, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(139, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(140, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(141, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(142, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(143, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(144, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(145, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020'),
(146, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(147, 'X', 'Ganjil', '5402', 'Ichwan Nur Alim', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(148, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(149, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(150, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(151, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(152, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(153, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(154, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(155, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(156, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(157, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(158, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(159, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(160, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(161, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(162, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(163, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(164, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(165, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(166, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020'),
(167, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(168, 'X', 'Ganjil', '5403', 'Istianah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(169, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(170, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(171, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(172, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(173, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(174, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(175, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(176, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(177, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(178, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(179, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(180, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(181, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(182, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(183, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(184, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(185, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(186, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(187, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020'),
(188, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(189, 'X', 'Ganjil', '5404', 'Khrisna Ardiansyah', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(190, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(191, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(192, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(193, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(194, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(195, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(196, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(197, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(198, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(199, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(200, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(201, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(202, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(203, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(204, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(205, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(206, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(207, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(208, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020'),
(209, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(210, 'X', 'Ganjil', '5405', 'Nunik Setyowahyuni', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(211, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(212, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(213, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(214, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(215, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(216, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(217, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(218, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(219, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(220, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(221, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(222, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(223, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(224, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(225, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(226, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(227, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(228, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(229, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020'),
(230, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(231, 'X', 'Ganjil', '5406', 'Priska Fitriyani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(232, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(233, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(234, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(235, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(236, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(237, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(238, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(239, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(240, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(241, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(242, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(243, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(244, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(245, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(246, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(247, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(248, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(249, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(250, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020'),
(251, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(252, 'X', 'Ganjil', '5407', 'Regita Auryn Pradani', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(253, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(254, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(255, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(256, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(257, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(258, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(259, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(260, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(261, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(262, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(263, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(264, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(265, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(266, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(267, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(268, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(269, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(270, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(271, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020'),
(272, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(273, 'X', 'Ganjil', '5408', 'Reza Paza Pratama', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(274, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(275, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(276, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(277, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(278, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(279, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(280, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(281, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(282, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(283, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(284, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(285, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(286, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(287, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(288, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(289, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(290, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(291, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(292, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020'),
(293, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(294, 'X', 'Ganjil', '5409', 'Rio Subakti', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(295, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(296, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(297, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(298, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(299, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(300, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(301, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(302, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(303, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(304, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(305, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(306, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(307, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(308, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(309, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(310, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(311, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(312, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(313, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020'),
(314, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(315, 'X', 'Ganjil', '5410', 'Risma Jihan Pratiwi', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(316, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(317, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(318, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(319, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(320, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(321, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(322, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(323, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(324, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(325, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(326, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(327, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(328, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(329, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(330, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(331, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(332, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(333, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(334, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020'),
(335, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(336, 'X', 'Ganjil', '5411', 'Satria Pamikat Sukmajati S', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(337, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(338, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(339, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(340, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(341, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(342, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(343, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(344, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(345, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(346, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(347, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(348, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(349, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(350, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(351, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(352, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(353, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(354, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(355, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020'),
(356, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(357, 'X', 'Ganjil', '5412', 'Virgian  Nerazury', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(358, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Agama dan Budi Pekerti', '2019/2020'),
(359, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Pancasilan dan Kewarganegaraan', '2019/2020'),
(360, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Indonesia', '2019/2020'),
(361, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Matematika', '2019/2020'),
(362, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Sejarah Indonesia', '2019/2020'),
(363, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Inggris dan Bahasa Asing Lainnya', '2019/2020'),
(364, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Seni Budaya', '2019/2020'),
(365, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '2019/2020'),
(366, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Simulasi dan Komunikasi Digital', '2019/2020'),
(367, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Ekonomi Bisnis', '2019/2020'),
(368, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Umum', '2019/2020'),
(369, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'IPA', '2019/2020'),
(370, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Marketing', '2019/2020'),
(371, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Perencanaan Bisnis', '2019/2020'),
(372, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Komunikasi Bisnis', '2019/2020'),
(373, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Penataan Produk', '2019/2020'),
(375, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Pengelolaan Bisnis Ritel', '2019/2020'),
(376, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020'),
(377, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Produk Kreatif dan Kewirausahaan', '2019/2020'),
(378, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bahasa Jawa', '2019/2020'),
(379, 'X', 'Ganjil', '5413', 'Yehezkiel Almeyda Taruna V', '2019', 'BISNIS DARING DAN PEMASARAN', 'Bisnis Online', '2019/2020'),
(380, 'X', 'Ganjil', '5396', 'Aar Rakavalry', '2019', 'BISNIS DARING DAN PEMASARAN', 'Administrasi Transaksi', '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `data_nilai`
--

CREATE TABLE `data_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_kls` varchar(100) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `kls` varchar(60) NOT NULL,
  `smstr` varchar(60) NOT NULL,
  `thn_pelajaran` varchar(60) NOT NULL,
  `nm_mapel` varchar(255) NOT NULL,
  `np1` varchar(20) NOT NULL,
  `np2` varchar(20) NOT NULL,
  `np3` varchar(20) NOT NULL,
  `np4` varchar(20) NOT NULL,
  `nptts` varchar(20) NOT NULL,
  `nptas` varchar(20) NOT NULL,
  `nrr` varchar(20) NOT NULL,
  `nap` varchar(20) NOT NULL,
  `gnp` varchar(20) NOT NULL,
  `nk1` varchar(20) NOT NULL,
  `nk2` varchar(20) NOT NULL,
  `nk3` varchar(20) NOT NULL,
  `nk4` varchar(20) NOT NULL,
  `nak` varchar(20) NOT NULL,
  `gnk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_nilai`
--

INSERT INTO `data_nilai` (`id_nilai`, `id_kls`, `nis`, `kls`, `smstr`, `thn_pelajaran`, `nm_mapel`, `np1`, `np2`, `np3`, `np4`, `nptts`, `nptas`, `nrr`, `nap`, `gnp`, `nk1`, `nk2`, `nk3`, `nk4`, `nak`, `gnk`) VALUES
(2, '380', '5396', 'X', 'Ganjil', '2019/2020', 'Administrasi Transaksi', '78', '78', '80', '99', '97', '99', '84', '91', 'Amat Baik', '80', '89', '99', '97', '91', 'Amat Baik'),
(3, '11', '5396', 'X', 'Ganjil', '2019/2020', 'Administrasi Umum', '87', '99', '90', '96', '79', '98', '93', '92', 'Amat Baik', '88', '99', '96', '92', '94', 'Amat Baik'),
(4, '3', '5396', 'X', 'Ganjil', '2019/2020', 'Bahasa Indonesia', '78', '89', '78', '98', '99', '87', '86', '89', 'Baik', '99', '86', '89', '87', '90', 'Amat Baik'),
(5, '6', '5396', 'X', 'Ganjil', '2019/2020', 'Bahasa Inggris dan Bahasa Asing Lainnya', '86', '98', '97', '78', '98', '99', '90', '94', 'Amat Baik', '87', '69', '90', '78', '81', 'Baik'),
(6, '21', '5396', 'X', 'Ganjil', '2019/2020', 'Bahasa Jawa', '98', '77', '89', '87', '99', '94', '88', '92', 'Amat Baik', '87', '89', '87', '97', '90', 'Amat Baik'),
(7, '17', '5396', 'X', 'Ganjil', '2019/2020', 'Bisnis Online', '98', '87', '78', '74', '80', '79', '84', '82', 'Baik', '83', '85', '89', '78', '84', 'Baik'),
(8, '10', '5396', 'X', 'Ganjil', '2019/2020', 'Ekonomi Bisnis', '89', '79', '90', '95', '67', '89', '88', '85', 'Baik', '88', '85', '86', '90', '87', 'Baik'),
(9, '12', '5396', 'X', 'Ganjil', '2019/2020', 'IPA', '90', '97', '93', '91', '86', '89', '93', '91', 'Amat Baik', '87', '86', '84', '89', '87', 'Baik'),
(10, '15', '5396', 'X', 'Ganjil', '2019/2020', 'Komunikasi Bisnis', '89', '87', '99', '67', '98', '87', '86', '88', 'Baik', '79', '84', '89', '93', '86', 'Baik'),
(11, '13', '5396', 'X', 'Ganjil', '2019/2020', 'Marketing', '90', '87', '90', '78', '88', '94', '86', '89', 'Baik', '89', '89', '97', '89', '91', 'Amat Baik'),
(12, '4', '5396', 'X', 'Ganjil', '2019/2020', 'Matematika', '99', '87', '85', '78', '86', '89', '87', '88', 'Baik', '78', '87', '85', '94', '86', 'Baik'),
(13, '16', '5396', 'X', 'Ganjil', '2019/2020', 'Penataan Produk', '89', '78', '90', '78', '77', '75', '84', '80', 'Baik', '76', '89', '76', '93', '84', 'Baik'),
(15, '8', '5396', 'X', 'Ganjil', '2019/2020', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', '89', '86', '88', '81', '72', '79', '86', '81', 'Baik', '91', '94', '95', '93', '93', 'Amat Baik'),
(16, '2', '5396', 'X', 'Ganjil', '2019/2020', 'Pendidikan Pancasilan dan Kewarganegaraan', '89', '92', '94', '97', '98', '96', '93', '95', 'Amat Baik', '87', '97', '97', '91', '93', 'Amat Baik'),
(17, '18', '5396', 'X', 'Ganjil', '2019/2020', 'Pengelolaan Bisnis Ritel', '80', '81', '87', '86', '98', '96', '84', '90', 'Amat Baik', '97', '94', '93', '91', '94', 'Amat Baik'),
(18, '14', '5396', 'X', 'Ganjil', '2019/2020', 'Perencanaan Bisnis', '89', '86', '86', '90', '93', '93', '88', '91', 'Amat Baik', '95', '94', '95', '93', '94', 'Amat Baik'),
(19, '20', '5396', 'X', 'Ganjil', '2019/2020', 'Produk Kreatif dan Kewirausahaan', '78', '81', '82', '81', '89', '90', '81', '85', 'Baik', '91', '94', '95', '95', '94', 'Amat Baik'),
(20, '5', '5396', 'X', 'Ganjil', '2019/2020', 'Sejarah Indonesia', '90', '91', '92', '93', '94', '95', '92', '93', 'Amat Baik', '89', '92', '76', '89', '87', 'Baik'),
(21, '7', '5396', 'X', 'Ganjil', '2019/2020', 'Seni Budaya', '90', '92', '94', '95', '87', '95', '93', '93', 'Amat Baik', '96', '89', '75', '80', '85', 'Baik'),
(22, '9', '5396', 'X', 'Ganjil', '2019/2020', 'Simulasi dan Komunikasi Digital', '90', '87', '87', '82', '81', '75', '87', '82', 'Baik', '85', '75', '67', '79', '77', 'Baik'),
(23, '1', '5396', 'X', 'Ganjil', '2019/2020', 'Pendidikan Agama dan Budi Pekerti', '89', '98', '89', '90', '67', '89', '92', '87', 'Baik', '90', '89', '89', '99', '92', 'Amat Baik'),
(24, '22', '5397', 'X', 'Ganjil', '2019/2020', 'Pendidikan Agama dan Budi Pekerti', '89', '87', '89', '89', '78', '98', '89', '90', 'Amat Baik', '78', '78', '89', '89', '84', 'Baik'),
(27, '31', '5397', 'X', 'Ganjil', '2019/2020', 'Ekonomi Bisnis', '89', '89', '89', '78', '67', '89', '86', '84', 'Baik', '99', '87', '90', '89', '91', 'Amat Baik'),
(28, '52', '5398', 'X', 'Ganjil', '2019/2020', 'Ekonomi Bisnis', '89', '89', '89', '90', '89', '90', '89', '89', 'Baik', '89', '89', '89', '78', '86', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `data_nilai_sikap`
--

CREATE TABLE `data_nilai_sikap` (
  `id_nilai_sikap` int(11) NOT NULL,
  `nm_wali_kelas` varchar(255) NOT NULL,
  `nis_siswa` varchar(255) NOT NULL,
  `kls` varchar(255) NOT NULL,
  `smstr` varchar(255) NOT NULL,
  `thn_pelajaran` varchar(255) NOT NULL,
  `p_spiritual` char(1) NOT NULL,
  `p_sosial` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_nilai_sikap`
--

INSERT INTO `data_nilai_sikap` (`id_nilai_sikap`, `nm_wali_kelas`, `nis_siswa`, `kls`, `smstr`, `thn_pelajaran`, `p_spiritual`, `p_sosial`) VALUES
(2, 'Lulut Dwi Ratna', '5396', 'X', 'Ganjil', '2019/2020', 'B', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengumuman`
--

CREATE TABLE `data_pengumuman` (
  `id` int(11) NOT NULL,
  `slug` text NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tipe_gambar` varchar(30) NOT NULL,
  `ukuran_gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengumuman`
--

INSERT INTO `data_pengumuman` (`id`, `slug`, `judul`, `isi`, `tanggal`, `foto`, `tipe_gambar`, `ukuran_gambar`) VALUES
(1, 'study-tour-bali-2023-smk-purnama-1-semarang', 'Study Tour Bali 2023 (SMK Purnama 1 Semarang)', '<p>Dengan ini kami mengundang seluruh siswa SMK Purnama 1 Semarang untuk mengikuti Study Tour ke Bali pada tanggal [tentukan tanggal]. Kegiatan ini bertujuan untuk mempererat tali persaudaraan antar siswa serta menambah wawasan dan pengalaman baru.</p><p>Sebagai informasi, Study Tour akan melakukan berbagai aktivitas menarik seperti:</p><ol><li>Mengunjungi destinasi wisata seperti Tanah Lot, Uluwatu, dan Tirta Empul.</li><li>Belajar tentang budaya Bali melalui pengalaman berinteraksi dengan masyarakat setempat.</li><li>Menikmati keindahan alam Bali melalui berbagai aktivitas outdoor.</li></ol><p>Biaya perjalanan sudah termasuk transportasi, akomodasi, dan makan selama di Bali. Pendaftaran dibuka mulai tanggal [16-Febuari-2023] sampai [19-Febuari-2023].</p><p>Untuk informasi lebih lanjut dan pendaftaran, silakan menghubungi [tentukan nama dan nomor telepon yang bisa dihubungi].</p><p>Kami berharap dapat menyambut keikutsertaan siswa SMK Purnama 1 Semarang dalam kegiatan Study Tour ini. Terima kasih.</p>', '2023-02-03 06:39:21', '6091STUDY TOUR 2023.jpg', 'image/jpeg', 64311),
(2, 'masuk-sekolah-kembali', 'Masuk Sekolah Kembali', '<p>Dengan ini kami mengumumkan bahwa sekolah SMK Purnama 1 Semarang akan kembali dibuka pada [5-Febuari-2023]. Kami berharap semua siswa sudah mempersiapkan diri dengan baik untuk kembali belajar dan beraktivitas di sekolah.</p><p>Untuk memastikan keselamatan bersama, kami mengimbau semua siswa untuk:</p><ol><li>Mematuhi protokol kesehatan seperti memakai masker, mencuci tangan, dan menjaga jarak sosial.</li><li>Membawa alat tulis dan bahan belajar yang diperlukan.</li><li>Datang tepat waktu dan siap belajar di kelas.</li></ol><p>Kami mengucapkan selamat kembali dan berharap dapat bekerjasama dengan semua siswa untuk memastikan kelancaran proses belajar-mengajar. Terima kasih.</p>', '2023-02-03 06:57:29', '4121masuk sekolah.jpg', 'image/jpeg', 98970);

-- --------------------------------------------------------

--
-- Table structure for table `data_prestasi`
--

CREATE TABLE `data_prestasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tipe_gambar` varchar(30) NOT NULL,
  `ukuran_gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_prestasi`
--

INSERT INTO `data_prestasi` (`id`, `judul`, `isi`, `tanggal`, `foto`, `tipe_gambar`, `ukuran_gambar`) VALUES
(9, 'Juara 1 medali emas Olympiade Bahasa Indonesia.', '<p>pada Tahun 2018</p>', '2023-02-02 11:03:24', '9923OIP.jpeg', 'image/jpeg', 48889),
(10, 'Lolos Debat Bahasa Inggris Tingkat Sudin Pendidikan Wilayah II Jakarta Tengah', '<p>Pada Tahun 2020</p>', '2023-02-02 11:04:10', '6507debat-bahasa-inggris-fariz.jpg', 'image/jpeg', 35438),
(11, 'Juara Kreatvitas Siswa POPA', '<p>Pada Tahun 2020</p>', '2023-02-02 11:04:43', '8831kreativitas-siswa-smk-ciptakan-game-usung-perdamaian-dunia-OXFmm2gtSL.jpg', 'image/jpeg', 76283),
(12, 'Medali Perak OSN', '<p>Pada Tahun 2021</p>', '2023-02-02 11:05:04', '6190R.jpeg', 'image/jpeg', 161367);

-- --------------------------------------------------------

--
-- Table structure for table `data_profil_sekolah`
--

CREATE TABLE `data_profil_sekolah` (
  `id_profil_sekolah` int(11) NOT NULL,
  `nm_sekolah` varchar(255) NOT NULL,
  `status_sekolah` varchar(255) NOT NULL,
  `nss_npsn` varchar(255) NOT NULL,
  `almt_sekolah` text NOT NULL,
  `telp_sekolah` varchar(255) NOT NULL,
  `email_sekolah` varchar(255) NOT NULL,
  `nm_kepsek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_profil_sekolah`
--

INSERT INTO `data_profil_sekolah` (`id_profil_sekolah`, `nm_sekolah`, `status_sekolah`, `nss_npsn`, `almt_sekolah`, `telp_sekolah`, `email_sekolah`, `nm_kepsek`) VALUES
(1, 'SMK Purnama 1 Semarang', '', '344036307012 / 20328989', 'Jl. Jendral Sudirman No. 265 Semarang', '024-7612536', 'smkpurnama1semarang@gmail.com', 'Dra. Risprantini');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa_1`
--

CREATE TABLE `data_siswa_1` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `absen` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `almt` varchar(255) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `kompetensi` varchar(255) NOT NULL,
  `thn_msk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa_1`
--

INSERT INTO `data_siswa_1` (`id_siswa`, `nis`, `absen`, `nama`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jk`, `almt`, `bidang`, `program`, `kompetensi`, `thn_msk`) VALUES
(1, '5396', '1', 'Aar Rakavalry', 'Semarang', '7-Aug-07', 'Islam', 'Laki-Laki', 'Jl. Jenderal Sudirman No.354, Gisikdrono, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50149', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019'),
(2, '5397', '2', 'Ary Yuan Kusumaningtyas', 'Semarang', '4-Apr-07', 'Kristen', 'Perempuan', 'Jl Jend Sudirman Kav 7-8 Wisma Nugra Santana Lt 15Karet Tengsin,Semarang.', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019'),
(3, '5398', '3', 'Basofa Titan Bakhtiar', 'Semarang', '6-Feb-07', 'Islam', 'Laki-Laki', 'Jl. Bukit Wahid Boulevard No.1, Manyaran, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50147', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019'),
(4, '5399', '4', 'Eko Pratama', 'Semarang', '8-Jan-07', 'Islam', 'Laki-Laki', '2998+6CX, Krapyak, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50146', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019'),
(5, '5400', '5', 'Enjelika Hasna Najla', 'Semarang', '12-Jan-07', 'Katolik', 'Perempuan', '29FR+W7J, Jl. Anjasmoro Raya, Karangayu, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50149', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019'),
(6, '5401', '6', 'Febry Wiyandono', 'Semarang', '15-Mar-07', 'Islam', 'Laki-Laki', 'Jl. Jenderal Sudirman No.215, Karangayu, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50149', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019'),
(7, '5402', '7', 'Ichwan Nur Alim', 'Semarang', '18-Aug-07', 'Islam', 'Laki-Laki', 'Jl. Puspowarno Tengah I\" No.52, Salamanmloyo, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50149', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019'),
(8, '5403', '8', 'Istianah', 'Semarang', '30-Apr-07', 'Islam', 'Perempuan', 'Jl. Jenderal Sudirman No.259, Gisikdrono, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50149', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019'),
(9, '5404', '9', 'Khrisna Ardiansyah', 'Semarang', '16-Nov-07', 'Hindu', 'Laki-Laki', 'JL. KH Agus Salim No.34, Gisikdrono, Semarang Barat, Semarang City, Central Java 50149', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019'),
(10, '5405', '10', 'Nunik Setyowahyuni', 'Semarang', '26-Jun-07', 'Islam', 'Perempuan', 'Jl. Jenderal Sudirman No.275, Gisikdrono, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50149', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019'),
(11, '5406', '11', 'Priska Fitriyani', 'Semarang', '17-May-07', 'Islam', 'Perempuan', '297M+JH4, Kalibanteng Kidul, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50149', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019'),
(12, '5407', '12', 'Regita Auryn Pradani', 'Semarang', '27-Oct-07', 'Katolik', 'Perempuan', 'Jl. Puspowarno Tengah I\" No.15, Salamanmloyo, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50149', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019'),
(13, '5408', '13', 'Reza Paza Pratama', 'Semarang', '15-Oct-07', 'Islam', 'Laki-Laki', 'Jl. Nasional 14 No.334, Gisikdrono, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50149', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019'),
(14, '5409', '14', 'Rio Subakti', 'Semarang', '28-Apr-08', 'Islam', 'Laki-Laki', 'Jl. Puspogiwang I No.10, Gisikdrono, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50149', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019'),
(15, '5410', '15', 'Risma Jihan Pratiwi', 'Semarang', '9-Sep-07', 'Islam', 'Perempuan', 'Jl. Kelud Raya No.46c, Petompon, Kec. Gajahmungkur, Kota Semarang, Jawa Tengah 50237', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019'),
(16, '5411', '16', 'Satria Pamikat Sukmajati S', 'Semarang', '18-Sep-08', 'Islam', 'Laki-Laki', 'Jl. Srinindito I, Ngemplak Simongan, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50148', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019'),
(17, '5412', '17', 'Virgian  Nerazury', 'Semarang', '11-Nov-08', 'Kristen', 'Laki-Laki', 'Jl. Abdulrahman Saleh No.1, Kalibanteng Kidul, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50149', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019'),
(18, '5413', '18', 'Yehezkiel Almeyda Taruna V', 'Semarang', '15-Jul-07', 'Kristen', 'Laki-Laki', 'Jl. Meranti Tim. Dalam III No.81, Padangsari, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50263', 'BISNIS DAN MANAJEMEN', 'BISNIS DAN PEMASARAN', 'BISNIS DARING DAN PEMASARAN', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `data_struktur_organisasi`
--

CREATE TABLE `data_struktur_organisasi` (
  `id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tipe_gambar` varchar(30) NOT NULL,
  `ukuran_gambar` int(11) NOT NULL,
  `label` varchar(8) NOT NULL DEFAULT 'SatuKali'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_struktur_organisasi`
--

INSERT INTO `data_struktur_organisasi` (`id`, `tanggal`, `foto`, `tipe_gambar`, `ukuran_gambar`, `label`) VALUES
(2, '2022-08-07 12:20:48', '5164str org.jpg', 'image/jpeg', 127032, 'SatuKali');

-- --------------------------------------------------------

--
-- Table structure for table `data_visi_misi`
--

CREATE TABLE `data_visi_misi` (
  `id` int(11) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_visi_misi`
--

INSERT INTO `data_visi_misi` (`id`, `kategori`, `keterangan`) VALUES
(4, 'Visi', 'Melatih calon tenaga kerja terampil tingkat menengah agar memiliki daya saing dalam bursa tenaga kerja berupa kepribdian yang luhur dan keahlian profesi.'),
(5, 'Misi', 'Menyiapkan peserta didik menjadi insane yang bertakwa kepada Tuhan Yang Maha Esa dan memiliki keterampilan untuk hidup mandiri.'),
(6, 'Misi', 'Menawarkan tamatan dan program latihan dalam bidang pendidikan dan motivasi tingggi di bidang penjualan.');

-- --------------------------------------------------------

--
-- Table structure for table `grup_kelas`
--

CREATE TABLE `grup_kelas` (
  `id_grup` int(11) NOT NULL,
  `guru` varchar(255) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `angkatan` varchar(255) NOT NULL,
  `kompetensi_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grup_kelas`
--

INSERT INTO `grup_kelas` (`id_grup`, `guru`, `mapel`, `kelas`, `angkatan`, `kompetensi_kelas`) VALUES
(3, '14', 'Sejarah Indonesia', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(4, '15', 'Pendidikan Pancasilan dan Kewarganegaraan', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(9, '16', 'Pendidikan Agama dan Budi Pekerti', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(11, '17', 'Bahasa Jawa', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(12, '18', 'Bahasa Indonesia', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(13, '19', 'Matematika', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(14, '20', 'Pengelolaan Bisnis Ritel', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(15, '21', 'Simulasi dan Komunikasi Digital', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(16, '22', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(17, '23', 'Ekonomi Bisnis', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(18, '24', 'Bahasa Inggris dan Bahasa Asing Lainnya', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(19, '25', 'Administrasi Transaksi', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(20, '21', 'Administrasi Umum', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(21, '19', 'Bisnis Online', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(22, '18', 'IPA', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(23, '23', 'Komunikasi Bisnis', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(24, '24', 'Marketing', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(25, '21', 'Penataan Produk', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(26, '20', 'Perencanaan Bisnis', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(27, '23', 'Produk Kreatif dan Kewirausahaan', 'X', '2019', 'BISNIS DARING DAN PEMASARAN'),
(28, '16', 'Seni Budaya', 'X', '2019', 'BISNIS DARING DAN PEMASARAN');

-- --------------------------------------------------------

--
-- Table structure for table `grup_wali_kelas`
--

CREATE TABLE `grup_wali_kelas` (
  `id_wk` int(11) NOT NULL,
  `wali_kls` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `angkatan` varchar(255) NOT NULL,
  `kompetensi_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grup_wali_kelas`
--

INSERT INTO `grup_wali_kelas` (`id_wk`, `wali_kls`, `kelas`, `angkatan`, `kompetensi_kelas`) VALUES
(5, '28', 'X', '2019', 'BISNIS DARING DAN PEMASARAN');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `MPO1` varchar(255) NOT NULL DEFAULT 'kosong',
  `MPO2` varchar(255) NOT NULL DEFAULT 'kosong',
  `MPO3_1` varchar(255) NOT NULL DEFAULT 'kosong',
  `MPO3_2` varchar(255) NOT NULL DEFAULT 'kosong',
  `MPO3_3` varchar(255) NOT NULL DEFAULT 'kosong',
  `MPO4` varchar(255) NOT NULL DEFAULT 'kosong'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `MPO1`, `MPO2`, `MPO3_1`, `MPO3_2`, `MPO3_3`, `MPO4`) VALUES
(1, 'Pendidikan Agama dan Budi Pekerti', 'Seni Budaya', 'Simulasi dan Komunikasi Digital', 'Marketing', 'Penataan Produk', 'Bahasa Jawa'),
(2, 'Pendidikan Pancasilan dan Kewarganegaraan', 'Pendidikan Jasmani, Olah Raga Dan Kesehatan', 'Ekonomi Bisnis', 'Perencanaan Bisnis', 'Bisnis Online', 'kosong'),
(3, 'Bahasa Indonesia', 'kosong', 'Administrasi Umum', 'Komunikasi Bisnis', 'Pengelolaan Bisnis Ritel', 'kosong'),
(4, 'Matematika', 'kosong', 'IPA', 'kosong', 'Administrasi Transaksi', 'kosong'),
(5, 'Sejarah Indonesia', 'kosong', 'kosong', 'kosong', 'Produk Kreatif dan Kewirausahaan', 'kosong'),
(6, 'Bahasa Inggris dan Bahasa Asing Lainnya', 'kosong', 'kosong', 'kosong', 'kosong', 'kosong');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_akun` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `nm` varchar(255) NOT NULL,
  `kelamin` varchar(60) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_akun`, `role`, `nm`, `kelamin`, `username`, `pw`) VALUES
(13, 2, 'Dra. Sri Umi Saduarti', 'P', 'sriumi@kepsek.id', 'sriumi12345'),
(14, 3, 'Dra. Sri Umi Saduarti', 'P', 'sriumi@guru.id', 'sriumi12345'),
(15, 3, 'Drs. Ujang Noerfaizan, M.Pd', 'L', 'ujangno@guru.id', 'ujang12345'),
(16, 3, 'Nurul Huda, S.Ag', 'P', 'nurulhuda@guru.id', 'nurulhuda12345'),
(17, 3, 'T. Setijanto, S.Th', 'L', 'setijanto@guru.id', 'setijanto12345'),
(18, 3, 'Puji Lestari, S.Pd', 'P', 'pujilestari@guru.id', 'pujilestari12345'),
(19, 3, 'Eko Kurniawan, S.Pd', 'L', 'ekokurniawan@guru.id', 'ekokurniawan12345'),
(20, 3, 'Edi Mulyono, S.Pd', 'L', 'edimulyono@guru.id', 'edimulyono12345'),
(21, 3, 'Lulut Dwi Ratna', 'L', 'lulutdr@guru.id', 'lulutdr12345'),
(22, 3, 'Annajmuts Tsaqib', 'L', 'annastsa@guru.id', 'annastsa12345'),
(23, 3, 'Theresia Elvi N. S.Psi', 'P', 'theresiaelvi@guru.id', 'theresiaelvi12345'),
(24, 3, 'Drs. Slamet Budi Santoso, M.F', 'L', 'slametbs@guru.id', 'slametbs12345'),
(25, 3, 'Wiharsih, S.Pd', 'L', 'wiharsih@guru.id', 'wiharsih12345'),
(26, 1, 'Thomas Dwi Christiyanto', 'L', 'admin', 'admin'),
(27, 4, 'Theresia Elvi N. S.Psi', 'P', 'theresiaelvi@walke.id', 'theresiaelvi12345'),
(28, 4, 'Lulut Dwi Ratna', 'L', 'lulutdr@walke.id', 'lulutdr12345'),
(29, 4, 'Eko Kurniawan, S.Pd', 'L', 'ekokurniawan@walke.id', 'ekokurniawan12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_berita`
--
ALTER TABLE `data_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_eskul`
--
ALTER TABLE `data_eskul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_fasilitas`
--
ALTER TABLE `data_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_galeri`
--
ALTER TABLE `data_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kelas`
--
ALTER TABLE `data_kelas`
  ADD PRIMARY KEY (`id_kls`);

--
-- Indexes for table `data_nilai`
--
ALTER TABLE `data_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `data_nilai_sikap`
--
ALTER TABLE `data_nilai_sikap`
  ADD PRIMARY KEY (`id_nilai_sikap`);

--
-- Indexes for table `data_pengumuman`
--
ALTER TABLE `data_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_prestasi`
--
ALTER TABLE `data_prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_profil_sekolah`
--
ALTER TABLE `data_profil_sekolah`
  ADD PRIMARY KEY (`id_profil_sekolah`);

--
-- Indexes for table `data_siswa_1`
--
ALTER TABLE `data_siswa_1`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `data_struktur_organisasi`
--
ALTER TABLE `data_struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_visi_misi`
--
ALTER TABLE `data_visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grup_kelas`
--
ALTER TABLE `grup_kelas`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indexes for table `grup_wali_kelas`
--
ALTER TABLE `grup_wali_kelas`
  ADD PRIMARY KEY (`id_wk`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_akun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_berita`
--
ALTER TABLE `data_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_eskul`
--
ALTER TABLE `data_eskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_fasilitas`
--
ALTER TABLE `data_fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_galeri`
--
ALTER TABLE `data_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_kelas`
--
ALTER TABLE `data_kelas`
  MODIFY `id_kls` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=381;

--
-- AUTO_INCREMENT for table `data_nilai`
--
ALTER TABLE `data_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `data_nilai_sikap`
--
ALTER TABLE `data_nilai_sikap`
  MODIFY `id_nilai_sikap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_pengumuman`
--
ALTER TABLE `data_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_prestasi`
--
ALTER TABLE `data_prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_profil_sekolah`
--
ALTER TABLE `data_profil_sekolah`
  MODIFY `id_profil_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_siswa_1`
--
ALTER TABLE `data_siswa_1`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `data_struktur_organisasi`
--
ALTER TABLE `data_struktur_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_visi_misi`
--
ALTER TABLE `data_visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `grup_kelas`
--
ALTER TABLE `grup_kelas`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `grup_wali_kelas`
--
ALTER TABLE `grup_wali_kelas`
  MODIFY `id_wk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
