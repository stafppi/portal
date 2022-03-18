-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2022 at 04:15 AM
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
(21, 'test dosen 1', 'bandung', '2022-03-01', 'Laki-Laki', 'Islam', '0938293828', 'tes@gmail.com', 'jl. alamat rumah', 1, '2022-03-15 01:31:56', '2022-03-15 01:31:56'),
(22, 'test dosen 4', 'bandung', '2022-03-04', 'Perempuan', 'Islam', '0938293828', 'tes@gmail.com', 'djeojdwodjwod', 1, '2022-03-17 02:31:48', '2022-03-17 02:31:48');

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
(22, 'test2', 'Jakarta', '2022-03-01', 'Perempuan', 'Islam', '08328332', 'Jl. Melentung', '1', '2022-03-14 23:49:41', '2022-03-16 20:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hapus` smallint(2) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `no_telepon`, `email`, `alamat`, `hapus`, `created_at`, `updated_at`) VALUES
(1, 'Melinda Latika Andriani', 'Nusa Tenggara Timur', '1994-12-06', '', '', '(+62) 246 3675 3514', 'purwanto.santoso@prasetyo.biz.id', 'Gg. Baabur Royan No. 228, Madiun 29584, Kepri', 1, '2022-03-16 17:00:00', NULL),
(2, 'Dirja Waskita M.M.', 'Kalimantan Tengah', '1995-04-18', '', '', '(+62) 353 7008 6527', 'paris86@gmail.co.id', 'Ds. Abdul No. 761, Subulussalam 68537, Sulteng', 1, '2022-03-16 17:00:00', NULL),
(3, 'Genta Palastri', 'Gorontalo', '1989-12-09', '', '', '(+62) 24 1791 450', 'fitriani.prabowo@yahoo.co.id', 'Dk. Baiduri No. 580, Gunungsitoli 34260, Riau', 1, '2022-03-16 17:00:00', NULL),
(4, 'Suci Hariyah', 'Jawa Tengah', '1972-03-22', '', '', '0902 7663 5617', 'uyainah.cakrawangsa@yahoo.co.id', 'Dk. Jambu No. 157, Manado 80988, Lampung', 1, '2022-03-16 17:00:00', NULL),
(5, 'Ghaliyati Vanesa Rahimah', 'Sumatera Selatan', '2016-04-02', '', '', '(+62) 683 8955 5660', 'hsafitri@halimah.tv', 'Gg. Mulyadi No. 413, Semarang 78989, Sumsel', 1, '2022-03-16 17:00:00', NULL),
(6, 'Lanang Jabal Latupono S.Pt', 'Aceh', '1972-04-28', '', '', '0394 8132 552', 'sakura65@iswahyudi.my.id', 'Dk. Bara Tambar No. 133, Malang 20364, Papua', 1, '2022-03-16 17:00:00', NULL),
(7, 'Cemplunk Kusumo S.Psi', 'Kalimantan Selatan', '1987-10-22', '', '', '0721 7155 4875', 'simon.winarsih@rahmawati.org', 'Gg. Zamrud No. 11, Denpasar 87525, Kalteng', 1, '2022-03-16 17:00:00', NULL),
(8, 'Ami Purnawati', 'Sulawesi Selatan', '2007-08-10', '', '', '(+62) 853 2901 678', 'ami85@hartati.go.id', 'Kpg. Jamika No. 598, Gorontalo 52755, Papua', 1, '2022-03-16 17:00:00', NULL),
(9, 'Elma Pudjiastuti S.Pt', 'Bali', '2000-03-10', '', '', '(+62) 893 5765 324', 'chalim@gmail.co.id', 'Jr. Baranang Siang Indah No. 459, Prabumulih 22788, DKI', 1, '2022-03-16 17:00:00', NULL),
(10, 'Hafshah Rahimah', 'Riau', '1972-04-25', '', '', '(+62) 465 2794 640', 'fpermadi@pradana.co', 'Dk. Samanhudi No. 53, Palu 35501, Riau', 1, '2022-03-16 17:00:00', NULL),
(11, 'Zelaya Icha Astuti S.Ked', 'Sulawesi Tenggara', '1976-01-15', '', '', '021 6674 236', 'daliono.widiastuti@yahoo.com', 'Jr. Hang No. 574, Tarakan 91421, DIY', 1, '2022-03-16 17:00:00', NULL),
(12, 'Amelia Kusmawati', 'Kepulauan Riau', '1984-12-16', '', '', '(+62) 225 2983 811', 'talia.mansur@gmail.com', 'Ds. Veteran No. 815, Sabang 30617, Jambi', 1, '2022-03-16 17:00:00', NULL),
(13, 'Daliman Januar', 'DKI Jakarta', '2012-06-13', '', '', '0998 9416 868', 'hakim.kenzie@yahoo.co.id', 'Ki. Kyai Mojo No. 749, Padangpanjang 30130, Sulsel', 1, '2022-03-16 17:00:00', NULL),
(14, 'Murti Simbolon', 'DKI Jakarta', '2021-09-22', '', '', '0418 8086 7211', 'handayani.karman@sihotang.tv', 'Psr. Lumban Tobing No. 323, Tasikmalaya 72534, NTB', 1, '2022-03-16 17:00:00', NULL),
(15, 'Okto Permadi', 'Kepulauan Riau', '1990-05-15', '', '', '(+62) 850 434 165', 'putri65@gmail.com', 'Kpg. Basket No. 663, Administrasi Jakarta Selatan 31053, Riau', 1, '2022-03-16 17:00:00', NULL),
(16, 'Lala Nasyiah', 'Sulawesi Tengah', '1970-10-06', '', '', '(+62) 335 4569 2981', 'panji93@mulyani.asia', 'Gg. R.E. Martadinata No. 264, Kendari 32920, Sulsel', 1, '2022-03-16 17:00:00', NULL),
(17, 'Tirtayasa Samosir', 'Jawa Timur', '2006-02-07', '', '', '(+62) 953 5948 5680', 'tasnim33@yahoo.co.id', 'Jr. Pasirkoja No. 160, Administrasi Jakarta Pusat 72828, Jabar', 1, '2022-03-16 17:00:00', NULL),
(18, 'Kani Agustina', 'Sulawesi Tengah', '1994-07-24', '', '', '(+62) 920 6117 7817', 'owibisono@gmail.co.id', 'Kpg. Gajah Mada No. 56, Kendari 63311, Kalbar', 1, '2022-03-16 17:00:00', NULL);

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

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `no_telepon`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Aurora Almira Lestari M.Farm', 'Jawa Tengah', '2005-12-29', '', '', '(+62) 457 6795 370', 'Kpg. Jend. Sudirman No. 230, Sabang 23570, Maluku', NULL, NULL),
(2, 'Qori Widiastuti S.Farm', 'Maluku', '1971-12-10', '', '', '0348 0763 7677', 'Dk. Labu No. 794, Batam 37494, Sultra', NULL, NULL),
(3, 'Purwanto Pranowo', 'Sumatera Utara', '1975-07-28', '', '', '(+62) 383 2889 349', 'Ki. Tambun No. 140, Parepare 88719, Kepri', NULL, NULL),
(4, 'Uli Uyainah S.E.I', 'Sumatera Selatan', '2013-06-02', '', '', '0542 8643 490', 'Dk. Baranang No. 428, Pekanbaru 43469, Sumsel', NULL, NULL),
(5, 'Karman Elon Siregar S.I.Kom', 'Maluku Utara', '1989-10-22', '', '', '0836 0142 454', 'Psr. Ters. Jakarta No. 546, Blitar 62733, Sumut', NULL, NULL),
(6, 'Yani Dewi Rahimah M.M.', 'Kalimantan Utara', '2006-07-18', '', '', '0841 0385 5705', 'Psr. Kartini No. 758, Tidore Kepulauan 95057, Banten', NULL, NULL),
(7, 'Darmana Winarno', 'Maluku', '1996-02-11', '', '', '0879 0531 169', 'Jr. Bagas Pati No. 73, Bandung 49182, Sumsel', NULL, NULL),
(8, 'Dacin Thamrin S.E.', 'Kalimantan Timur', '1981-01-07', '', '', '024 1382 433', 'Gg. Thamrin No. 166, Palembang 12707, Kaltara', NULL, NULL),
(9, 'Unjani Melani S.Gz', 'Jawa Timur', '2005-11-12', '', '', '(+62) 809 0112 4971', 'Psr. Samanhudi No. 811, Gorontalo 80247, NTB', NULL, NULL),
(10, 'Paiman Rajata', 'Banten', '2014-07-28', '', '', '(+62) 280 9456 9306', 'Gg. Cikutra Barat No. 893, Pariaman 12894, Kaltim', NULL, NULL),
(11, 'Saadat Damanik', 'Sulawesi Selatan', '1986-11-22', '', '', '(+62) 24 5725 1401', 'Psr. Gajah No. 275, Administrasi Jakarta Barat 62227, Jateng', NULL, NULL),
(12, 'Tari Najwa Rahmawati S.Farm', 'Jawa Timur', '1986-02-26', '', '', '(+62) 575 9293 6196', 'Gg. Sukabumi No. 986, Sabang 51813, Kalbar', NULL, NULL),
(13, 'Teguh Siregar', 'Nusa Tenggara Timur', '1980-12-16', '', '', '(+62) 307 4922 1276', 'Ds. Bahagia No. 764, Jambi 78703, Bengkulu', NULL, NULL),
(14, 'Restu Hasanah', 'Kalimantan Selatan', '2015-07-26', '', '', '0447 7494 025', 'Gg. Banal No. 105, Tebing Tinggi 35496, Aceh', NULL, NULL),
(15, 'Mila Eka Winarsih', 'Kalimantan Utara', '1982-01-09', '', '', '0798 7817 445', 'Ds. Suniaraja No. 98, Singkawang 33489, Lampung', NULL, NULL),
(16, 'Juli Kuswandari S.IP', 'Papua', '1993-04-18', '', '', '0416 7800 1161', 'Gg. Jayawijaya No. 459, Dumai 29022, Malut', NULL, NULL),
(17, 'Elvina Kuswandari', 'Kalimantan Utara', '2001-01-16', '', '', '0704 0506 090', 'Dk. Tangkuban Perahu No. 93, Administrasi Jakarta Selatan 67138, Jateng', NULL, NULL),
(18, 'Bakiman Pandu Saputra', 'Gorontalo', '1987-10-03', '', '', '0228 1149 4192', 'Dk. B.Agam 1 No. 875, Makassar 26550, Jatim', NULL, NULL),
(19, 'Harimurti Maulana', 'Sumatera Barat', '1994-08-15', '', '', '(+62) 432 9030 7363', 'Kpg. Bah Jaya No. 878, Jayapura 63920, DIY', NULL, NULL),
(20, 'Oni Hartati', 'Nusa Tenggara Barat', '2001-04-27', '', '', '(+62) 972 8444 707', 'Dk. Baranangsiang No. 441, Dumai 32299, Kalteng', NULL, NULL),
(21, 'Kartika Pratiwi', 'Jawa Timur', '1990-04-14', '', '', '(+62) 270 8286 448', 'Ds. Abdul. Muis No. 849, Lhokseumawe 45468, Riau', NULL, NULL),
(22, 'Prima Wahyudin M.Ak', 'Jawa Timur', '2011-09-09', '', '', '0315 3341 0968', 'Psr. Untung Suropati No. 147, Binjai 83119, Sulut', NULL, NULL),
(23, 'Hartana Halim M.Ak', 'Bengkulu', '1970-01-19', '', '', '0251 8136 531', 'Gg. Ketandan No. 901, Lubuklinggau 80778, Banten', NULL, NULL),
(24, 'Pia Yuni Mardhiyah S.Psi', 'Kepulauan Riau', '2003-06-11', '', '', '(+62) 29 9294 542', 'Dk. Kartini No. 178, Sawahlunto 17518, NTT', NULL, NULL),
(25, 'Sidiq Adhiarja Hidayat', 'Riau', '1973-03-05', '', '', '0458 9173 276', 'Gg. Bhayangkara No. 924, Bogor 63944, Kalbar', NULL, NULL),
(26, 'Jayadi Hutagalung', 'Kalimantan Selatan', '2019-06-30', '', '', '026 1595 179', 'Jln. Sadang Serang No. 560, Sawahlunto 91893, Jatim', NULL, NULL),
(27, 'Heryanto Asmadi Wibowo', 'Maluku Utara', '1983-09-23', '', '', '(+62) 837 9672 2633', 'Jr. Kali No. 344, Serang 97039, Maluku', NULL, NULL),
(28, 'Rama Gatra Megantara M.Kom.', 'Sulawesi Tengah', '1993-10-17', '', '', '0714 8212 9596', 'Psr. Bass No. 285, Bima 82465, Banten', NULL, NULL),
(29, 'Daryani Mustofa', 'Aceh', '2012-06-11', '', '', '0370 4035 0308', 'Kpg. Lada No. 627, Palangka Raya 49541, Jateng', NULL, NULL),
(30, 'Elvina Kezia Wijayanti S.E.I', 'Maluku Utara', '2008-10-05', '', '', '(+62) 28 3741 691', 'Jln. Pattimura No. 854, Tangerang Selatan 56526, Kepri', NULL, NULL),
(31, 'Raditya Uwais', 'Lampung', '1980-02-04', '', '', '(+62) 984 9085 284', 'Ds. Bayam No. 753, Jambi 82345, Jabar', NULL, NULL),
(32, 'Rini Wijayanti', 'Nusa Tenggara Barat', '2012-04-28', '', '', '0354 5129 7743', 'Ki. Baja Raya No. 206, Sorong 55168, Bengkulu', NULL, NULL),
(33, 'Margana Karma Mansur', 'Sulawesi Selatan', '1977-09-27', '', '', '0546 8544 0308', 'Jr. Setiabudhi No. 497, Bandar Lampung 65571, Aceh', NULL, NULL),
(34, 'Yoga Hutasoit', 'Gorontalo', '1972-12-14', '', '', '(+62) 513 5905 1640', 'Dk. Pasirkoja No. 359, Magelang 99998, Sumbar', NULL, NULL),
(35, 'Julia Zalindra Nuraini', 'Kepulauan Bangka Belitung', '2006-04-10', '', '', '0725 3185 576', 'Jr. R.M. Said No. 644, Jambi 76860, Babel', NULL, NULL),
(36, 'Febi Andriani', 'Riau', '1997-11-28', '', '', '(+62) 954 9785 5417', 'Ki. Baik No. 559, Blitar 97160, Bengkulu', NULL, NULL),
(37, 'Septi Laksmiwati', 'Aceh', '2011-11-11', '', '', '0730 2952 807', 'Ds. Bara Tambar No. 257, Ternate 72091, Malut', NULL, NULL),
(38, 'Empluk Firgantoro S.Pd', 'Kalimantan Utara', '1981-10-28', '', '', '0559 5271 2842', 'Kpg. Bacang No. 957, Sabang 66032, Jabar', NULL, NULL),
(39, 'Laila Winarsih S.E.I', 'Papua', '1984-08-09', '', '', '0313 9327 765', 'Ki. Sam Ratulangi No. 257, Mataram 21529, Sulut', NULL, NULL),
(40, 'Slamet Natsir S.T.', 'Sumatera Utara', '2013-03-22', '', '', '(+62) 686 0840 4463', 'Jln. Bakhita No. 604, Mojokerto 27478, Sumbar', NULL, NULL),
(41, 'Banara Marpaung S.Kom', 'DI Yogyakarta', '2013-09-22', '', '', '0659 1625 2324', 'Jln. Acordion No. 261, Tual 17567, Malut', NULL, NULL),
(42, 'Zulaikha Kusmawati', 'Bali', '1980-08-01', '', '', '(+62) 838 911 443', 'Ds. Ekonomi No. 349, Cirebon 64014, Sulsel', NULL, NULL),
(43, 'Dalima Puspita', 'Kalimantan Selatan', '1983-06-29', '', '', '(+62) 370 0407 5728', 'Kpg. Salatiga No. 361, Bogor 76541, Lampung', NULL, NULL),
(44, 'Puspa Rahimah', 'Maluku', '2008-08-16', '', '', '(+62) 488 8945 584', 'Kpg. Bara Tambar No. 52, Gorontalo 91113, Kalsel', NULL, NULL),
(45, 'Xanana Balamantri Wibisono S.T.', 'Nusa Tenggara Barat', '2002-08-23', '', '', '0875 1028 5715', 'Jln. Baranang Siang No. 545, Banjarmasin 74017, Gorontalo', NULL, NULL),
(46, 'Ira Mulyani', 'Sumatera Barat', '1979-05-31', '', '', '021 3819 431', 'Jr. Basket No. 303, Padangsidempuan 75554, Sumsel', NULL, NULL),
(47, 'Setya Utama Wibisono S.Ked', 'Sumatera Selatan', '1982-04-16', '', '', '(+62) 778 3896 448', 'Dk. Otto No. 916, Ambon 45117, NTB', NULL, NULL),
(48, 'Jamil Januar', 'Banten', '2021-03-06', '', '', '(+62) 20 5378 883', 'Psr. Mahakam No. 598, Samarinda 26712, Kalteng', NULL, NULL),
(49, 'Janet Yuniar S.E.I', 'Kepulauan Riau', '2016-04-16', '', '', '(+62) 810 5312 746', 'Gg. Sutoyo No. 126, Ambon 27141, Sulut', NULL, NULL),
(50, 'Cakrabirawa Maryadi', 'Sumatera Selatan', '1999-07-16', '', '', '0322 8225 325', 'Psr. Yoga No. 499, Prabumulih 98777, DIY', NULL, NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
