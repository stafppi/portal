-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 06:04 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hapus` smallint(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `no_telepon`, `email`, `alamat`, `hapus`, `created_at`, `updated_at`) VALUES
(1, 'Tira Pudjiastuti', 'Papua', '1972-01-02', 'Perempuan', 'Islam', '(+62) 221 8899 574', 'lailasari.dodo@damanik.desa.id', 'Jr. Moch. Ramdan No. 646, Tidore Kepulauan 31677, Sulut', 1, '2022-03-14 17:00:00', '2022-03-15 02:07:52'),
(2, 'Teddy Gunarto', 'Aceh', '2013-11-28', '', '', '(+62) 720 3670 493', 'rahayu.rika@tamba.biz', 'Dk. Basuki Rahmat  No. 176, Blitar 33590, Sulut', 0, '2022-03-14 17:00:00', '2022-03-15 01:56:23'),
(3, 'Titi Irma Riyanti S.E.', 'Jambi', '2006-10-18', '', '', '(+62) 852 417 748', 'kemba93@tamba.biz.id', 'Jln. Achmad Yani No. 638, Sungai Penuh 79870, Sumut', 0, '2022-03-14 17:00:00', '2022-03-15 02:11:38'),
(4, 'Cahyadi Yoga Pradana', 'Papua', '1982-09-17', '', '', '0749 0455 071', 'sudiati.dwi@hakim.id', 'Jln. Kiaracondong No. 828, Parepare 12046, DKI', 1, '2022-03-14 17:00:00', NULL),
(5, 'Estiono Nasrullah Wibowo S.T.', 'Maluku', '2013-07-07', '', '', '(+62) 834 496 897', 'melinda35@mahendra.co.id', 'Psr. Perintis Kemerdekaan No. 246, Pekanbaru 67542, Bengkulu', 1, '2022-03-14 17:00:00', NULL),
(7, 'Rini Mayasari', 'Nusa Tenggara Timur', '1980-12-20', '', '', '(+62) 503 8333 4025', 'vhardiansyah@gmail.com', 'Ds. Bass No. 922, Samarinda 58468, DKI', 1, '2022-03-14 17:00:00', NULL),
(8, 'Ibun Mujur Manullang', 'Jambi', '2015-11-23', '', '', '(+62) 833 1845 6848', 'vanya32@prabowo.info', 'Jln. Imam Bonjol No. 215, Sungai Penuh 63739, Bengkulu', 1, '2022-03-14 17:00:00', NULL),
(9, 'Bakda Utama', 'Kalimantan Tengah', '1976-04-25', '', '', '(+62) 549 3647 894', 'siregar.hasan@maulana.mil.id', 'Kpg. Sunaryo No. 893, Yogyakarta 96008, Bengkulu', 1, '2022-03-14 17:00:00', NULL),
(10, 'Atmaja Bala Iswahyudi', 'Kalimantan Utara', '2003-12-05', '', '', '0289 6567 786', 'dimaz.agustina@kusmawati.my.id', 'Psr. Bakin No. 817, Jayapura 14607, Kaltim', 1, '2022-03-14 17:00:00', NULL),
(11, 'Jasmani Thamrin', 'Kalimantan Timur', '1978-05-20', '', '', '0920 0378 150', 'manullang.tantri@situmorang.ac.id', 'Ki. Nangka No. 541, Depok 55434, Sulsel', 1, '2022-03-14 17:00:00', NULL),
(12, 'Bancar Jailani', 'Aceh', '1997-11-04', '', '', '0301 6688 9074', 'rachel.lailasari@maulana.info', 'Jr. Abdul Rahmat No. 503, Palangka Raya 88565, Jambi', 1, '2022-03-14 17:00:00', NULL),
(13, 'Vanesa Ira Agustina', 'Kepulauan Bangka Belitung', '2013-01-05', '', '', '0850 739 526', 'winarsih.tari@pratiwi.desa.id', 'Ki. Bayan No. 679, Bandung 58467, Sulteng', 1, '2022-03-14 17:00:00', NULL),
(14, 'Danu Marbun', 'DKI Jakarta', '2012-03-05', '', '', '(+62) 624 6413 2420', 'cemani47@yahoo.co.id', 'Jr. Barasak No. 510, Depok 71665, Kepri', 1, '2022-03-14 17:00:00', NULL),
(15, 'Zaenab Haryanti', 'Nusa Tenggara Barat', '1976-09-29', '', '', '025 4304 687', 'melani.sarah@puspita.web.id', 'Dk. Monginsidi No. 742, Sawahlunto 59797, Kalbar', 1, '2022-03-14 17:00:00', NULL),
(16, 'Asmadi Putu Waskita M.Farm', 'Lampung', '2020-08-09', '', '', '0602 5910 277', 'carla.padmasari@hastuti.name', 'Jr. Kebangkitan Nasional No. 833, Sorong 16576, Kalbar', 1, '2022-03-14 17:00:00', NULL),
(17, 'Cemeti Gangsa Nababan', 'Sulawesi Tenggara', '2011-04-16', '', '', '0571 1969 2232', 'uyainah.maryanto@gmail.com', 'Ki. Dr. Junjunan No. 731, Bekasi 76107, Pabar', 1, '2022-03-14 17:00:00', NULL),
(18, 'Vega Situmorang', 'Kalimantan Timur', '1994-01-20', '', '', '0432 3215 072', 'baktiono.hartati@natsir.biz', 'Psr. Padang No. 2, Pariaman 37154, Sultra', 1, '2022-03-14 17:00:00', NULL),
(19, 'Luis Sirait', 'Sulawesi Selatan', '2014-02-28', '', '', '0752 3350 0742', 'azalea94@mayasari.asia', 'Jln. Ronggowarsito No. 727, Parepare 81392, Sumut', 1, '2022-03-14 17:00:00', NULL),
(20, 'Dinda Nasyiah', 'Kalimantan Utara', '1998-06-02', '', '', '(+62) 248 9842 060', 'suryono.hartana@nasyidah.biz', 'Kpg. Dipatiukur No. 660, Sukabumi 13637, Pabar', 1, '2022-03-14 17:00:00', NULL),
(21, 'test dosen 1', 'bandung', '2022-03-01', 'Laki-Laki', 'Islam', '0938293828', 'tes@gmail.com', 'jl. alamat rumah', 1, '2022-03-15 01:31:56', '2022-03-15 01:31:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `no_telepon`, `alamat`, `delete`, `created_at`, `updated_at`) VALUES
(1, 'Wakiman Kurniawan', 'Jawa Timur', '2007-10-13', 'Laki-Laki', 'Islam', '(+62) 925 1532 547', 'Jln. Umalas No. 569, Pontianak 28310, Sumsel', '1', '2022-03-11 17:00:00', '2022-03-15 02:05:05'),
(3, 'Gantar Saragih', 'Kepulauan Bangka Belitung', '1978-12-21', 'Laki-Laki', 'Islam', '0833 956 166', 'Ds. Jend. A. Yani No. 18, Palu 44626, Banten', '1', '2022-03-11 17:00:00', '2022-03-11 17:00:00'),
(4, 'Slamet Pranowo', 'Kepulauan Bangka Belitung', '2014-08-07', '', '', '(+62) 698 6265 0770', 'Psr. Baranang No. 86, Bogor 73215, Bali', '1', '2022-03-11 17:00:00', NULL),
(6, 'Keisha Padmasari', 'Jawa Barat', '2011-02-12', '', '', '(+62) 374 0265 2291', 'Dk. Haji No. 687, Serang 66525, Jabar', '0', '2022-03-11 17:00:00', '2022-03-14 23:48:52'),
(7, 'Uli Mutia Purwanti', 'Gorontalo', '1984-12-22', '', '', '(+62) 688 4227 0225', 'Dk. Fajar No. 688, Solok 27891, Sumbar', '0', '2022-03-11 17:00:00', '2022-03-13 20:54:15'),
(8, 'Joko Asmuni Prayoga', 'Maluku Utara', '1998-03-06', '', '', '0674 9674 326', 'Psr. Yap Tjwan Bing No. 558, Tidore Kepulauan 78580, Sulut', '1', '2022-03-11 17:00:00', NULL),
(9, 'Prakosa Kuswoyo S.Gz', 'Sulawesi Selatan', '2020-02-24', '', '', '0425 3151 7726', 'Gg. Ters. Jakarta No. 541, Administrasi Jakarta Utara 36787, NTT', '1', '2022-03-11 17:00:00', NULL),
(10, 'Almira Mardhiyah', 'Bengkulu', '1970-10-20', '', '', '(+62) 866 7468 4816', 'Dk. Ters. Jakarta No. 85, Pematangsiantar 45464, Jabar', '1', '2022-03-11 17:00:00', NULL),
(11, 'Queen Mayasari', 'Jawa Tengah', '1983-10-06', '', '', '(+62) 686 8584 1274', 'Dk. Labu No. 549, Singkawang 72802, Gorontalo', '1', '2022-03-11 17:00:00', NULL),
(12, 'Taufan Suryono', 'Aceh', '1994-10-12', '', '', '(+62) 885 3126 7595', 'Jr. Raden No. 209, Padang 93649, DKI', '1', '2022-03-11 17:00:00', NULL),
(13, 'Kalim Maryadi', 'Jambi', '2012-04-11', '', '', '(+62) 929 8525 6347', 'Dk. Kebonjati No. 979, Sibolga 11795, Sumbar', '1', '2022-03-11 17:00:00', NULL),
(14, 'Diah Utami', 'DKI Jakarta', '1998-01-20', 'Perempuan', 'Islam', '(+62) 250 8794 0972', 'Ds. Nakula No. 134, Palu 24422, Kalbar', '1', '2022-03-11 17:00:00', '2022-03-14 17:00:00'),
(15, 'Timbul Praba Pradana', 'Jawa Timur', '1972-12-11', '', '', '(+62) 815 210 705', 'Jln. Antapani Lama No. 37, Banjar 52767, DIY', '1', '2022-03-11 17:00:00', NULL),
(16, 'Garang Siregar', 'Kalimantan Utara', '1999-03-22', '', '', '0881 7030 4118', 'Kpg. Raya Ujungberung No. 891, Bengkulu 58135, Jatim', '1', '2022-03-11 17:00:00', NULL),
(17, 'Paramita Cinta Safitri', 'Lampung', '2012-01-23', '', '', '0993 2249 930', 'Dk. Bak Mandi No. 88, Banjar 22962, Sulut', '1', '2022-03-11 17:00:00', NULL),
(18, 'Candrakanta Suwarno', 'Kepulauan Riau', '1994-01-17', '', '', '(+62) 565 9166 6625', 'Kpg. Aceh No. 66, Surabaya 33590, Babel', '1', '2022-03-11 17:00:00', NULL),
(19, 'Halima Gabriella Wulandari', 'Sumatera Utara', '1970-03-08', '', '', '026 8406 8395', 'Ki. Perintis Kemerdekaan No. 253, Kupang 99383, Sulsel', '1', '2022-03-11 17:00:00', NULL),
(20, 'Jamil Permadi', 'Jambi', '2005-06-29', '', '', '0222 2776 4009', 'Jln. Cut Nyak Dien No. 571, Yogyakarta 80113, Kaltara', '1', '2022-03-11 17:00:00', NULL),
(21, 'test1', 'bandung', '2022-03-01', 'Laki-Laki', 'Islam', '0938293828', 'Jl. Istanma', '1', '2022-03-14 23:39:15', '2022-03-14 23:39:15'),
(22, 'test2', 'Jakarta', '2022-03-01', 'Perempuan', 'Islam', '08328332', 'Jl. Melentung', '1', '2022-03-14 23:49:41', '2022-03-14 23:49:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_03_09_030612_create_karyawan_models_table', 1),
(5, '2022_03_09_094647_create_pegawais_table', 1),
(6, '2022_03_15_034532_create_dosen_models_table', 2),
(7, '2022_03_17_045732_create_mahasiswa_models_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$7dIeZutgG8HmPio.w9ZRbuOvm6u4JONPUBiR2z7xme.lZAs7XiV4.', NULL, '2022-03-14 19:27:58', '2022-03-14 19:27:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
