-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 08:13 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eform`
--

-- --------------------------------------------------------

--
-- Table structure for table `audits`
--

CREATE TABLE `audits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `formuliri_id` bigint(20) UNSIGNED NOT NULL,
  `opini_akuntan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_AKpublik` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp_AKpublik` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kantor_AKpublik` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp_kantor_AKpublik` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_Kpajak` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp_Kpajak` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kantor_Kpajak` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp_kantor_Kpajak` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datapp46danpp23s`
--

CREATE TABLE `datapp46danpp23s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pp46danpp23_id` bigint(20) UNSIGNED DEFAULT NULL,
  `npwp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_pajak` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peredaran_bruto` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahPPhFinal_dibayar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_hartas`
--

CREATE TABLE `data_hartas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `formuliriv_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kode_harta` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_harta` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_perolehan` year(4) NOT NULL,
  `harta_perolehan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_kels`
--

CREATE TABLE `data_kels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `formuliriv_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_anggota_kel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hubungan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_potong_punguts`
--

CREATE TABLE `data_potong_punguts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `formulirii_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_pemotong` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp_pemotong` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_bupot` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_bupot` date NOT NULL,
  `jenis_pajak` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahPPh_potong` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_utangs`
--

CREATE TABLE `data_utangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `formuliriv_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kode_utang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemberi_pinjaman` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pemberi_pinjaman` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_pinjaman` year(4) NOT NULL,
  `jumlah_pinjaman` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_lahir` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_pelaporan` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembetulan` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formulir_i2_b__details`
--

CREATE TABLE `formulir_i2_b__details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `formuliri2_id` bigint(20) UNSIGNED DEFAULT NULL,
  `formuliri2b_point` bigint(20) UNSIGNED DEFAULT NULL,
  `rupiah_peredaran_usaha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `norma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rupiah_penghasilan_neto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formulir_i2_b__points`
--

CREATE TABLE `formulir_i2_b__points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jenis_usaha` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formulir_i2_b__points`
--

INSERT INTO `formulir_i2_b__points` (`id`, `created_at`, `updated_at`, `jenis_usaha`) VALUES
(1, NULL, NULL, 'DAGANG'),
(2, NULL, NULL, 'INDUSTRI'),
(3, NULL, NULL, 'JASA'),
(4, NULL, NULL, 'PEKERJAAN BEBAS'),
(5, NULL, NULL, 'USAHA LAINNYA');

-- --------------------------------------------------------

--
-- Table structure for table `formulir_i2_s`
--

CREATE TABLE `formulir_i2_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formulir_i2_s`
--

INSERT INTO `formulir_i2_s` (`id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formulir_i_i_i_a__details`
--

CREATE TABLE `formulir_i_i_i_a__details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `formulirIII_id` bigint(20) UNSIGNED DEFAULT NULL,
  `formulirIIIA_point` bigint(20) UNSIGNED DEFAULT NULL,
  `rupiah_dsrPengenaan_PajakA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rupiah_PPh_terutang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formulir_i_i_i_a__points`
--

CREATE TABLE `formulir_i_i_i_a__points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jenis_penghasilanA` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formulir_i_i_i_a__points`
--

INSERT INTO `formulir_i_i_i_a__points` (`id`, `created_at`, `updated_at`, `jenis_penghasilanA`) VALUES
(1, NULL, NULL, 'BUNGA DEPOSITO, TABUNGAN, DISKONTO SBI, SURAT BERHARGA NEGARA'),
(2, NULL, NULL, 'BUNGA/DISKONTO OBLIGASI'),
(3, NULL, NULL, 'PENJUALAN SAHAM DI BURSA EFEK'),
(4, NULL, NULL, 'HADIAH UNDIAN'),
(5, NULL, NULL, 'PESANGON, TUNJANGAN HARI TUA DAN TEBUSAN PENSIUN YANG DIBAYAR SEKALIGUS'),
(6, NULL, NULL, 'HONORARIUM ATAS BEBAN APBN / APBD'),
(7, NULL, NULL, 'PENGALIHAN HAK ATAS TANAH DAN/ATAU BANGUNAN'),
(8, NULL, NULL, 'BANGUNAN YANG DITERIMA DALAM RANGKA BANGUNAN GUNA SERAH'),
(9, NULL, NULL, 'SEWA ATAS TANAH DAN/ATAU BANGUNAN'),
(10, NULL, NULL, 'USAHA JASA KONSTRUKSI'),
(11, NULL, NULL, 'PENYALUR/DEALER/AGEN PRODUK BBM'),
(12, NULL, NULL, 'BUNGA SIMPANAN YANG DIBAYARKAN OLEH KOPERASI KEPADA ANGGOTA KOPERASI'),
(13, NULL, NULL, 'PENGHASILAN DARI TRANSAKSI DERIVATIF'),
(14, NULL, NULL, 'DIVIDEN'),
(15, NULL, NULL, 'PENGHASILAN ISTERI DARU SATU PEMBERI KERJA'),
(16, NULL, NULL, 'PENGHASILAN LAIN YANG DIKENAKAN PAJAK FINAL DAN/ATAU BERSIFAT FINAL');

-- --------------------------------------------------------

--
-- Table structure for table `formulir_i_i_i_b__details`
--

CREATE TABLE `formulir_i_i_i_b__details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `formulirIII_id` bigint(20) UNSIGNED DEFAULT NULL,
  `formulirIIIB_point` bigint(20) UNSIGNED DEFAULT NULL,
  `rupiah_dsrPengenaan_PajakB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formulir_i_i_i_b__points`
--

CREATE TABLE `formulir_i_i_i_b__points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jenis_penghasilanB` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formulir_i_i_i_b__points`
--

INSERT INTO `formulir_i_i_i_b__points` (`id`, `created_at`, `updated_at`, `jenis_penghasilanB`) VALUES
(1, NULL, NULL, 'BANTUAN / SUMBANGAN / HIBAH'),
(2, NULL, NULL, 'WARISAN'),
(3, NULL, NULL, 'BAGIAN LABA ANGGOTA PERSEOROAN KOMANDITER TIDAK ATAS SAHAM, PERSEKUTUAN, PERKUMPULAN, FIRMA, KONGSI'),
(4, NULL, NULL, 'KLAIM ASURANSI KESEHATAN, KECELAKAAN, JIWA, DWIGUNA, BEASISWA'),
(5, NULL, NULL, 'BEASISWA'),
(6, NULL, NULL, 'PENGHASILAN LAIN YANG TIDAK TERMASUK OBJEK PAJAK');

-- --------------------------------------------------------

--
-- Table structure for table `formulir_i_i_i_c__details`
--

CREATE TABLE `formulir_i_i_i_c__details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `formulirIII_id` bigint(20) UNSIGNED DEFAULT NULL,
  `formulirIIIC_point` bigint(20) UNSIGNED DEFAULT NULL,
  `rupiah_dsrPengenaan_PajakC` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formulir_i_i_i_c__points`
--

CREATE TABLE `formulir_i_i_i_c__points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jenis_penghasilanC` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formulir_i_i_i_c__points`
--

INSERT INTO `formulir_i_i_i_c__points` (`id`, `created_at`, `updated_at`, `jenis_penghasilanC`) VALUES
(1, NULL, NULL, 'PENGHASILAN NETO ISTERI/SUAMI YANG DIKENAKAN PAJAK SECARA TERPISAH');

-- --------------------------------------------------------

--
-- Table structure for table `formulir_i_i_i_s`
--

CREATE TABLE `formulir_i_i_i_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formulir_i_i_i_s`
--

INSERT INTO `formulir_i_i_i_s` (`id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formulir_i_i_s`
--

CREATE TABLE `formulir_i_i_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formulir_i_i_s`
--

INSERT INTO `formulir_i_i_s` (`id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formulir_i_s`
--

CREATE TABLE `formulir_i_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formulir_i_s`
--

INSERT INTO `formulir_i_s` (`id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formulir_i_v_s`
--

CREATE TABLE `formulir_i_v_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_spts_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formulir_i_v_s`
--

INSERT INTO `formulir_i_v_s` (`id`, `form_spts_id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formulir_i__details`
--

CREATE TABLE `formulir_i__details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `formuliri_id` bigint(20) UNSIGNED DEFAULT NULL,
  `formuliri_point` bigint(20) UNSIGNED DEFAULT NULL,
  `rupiah_JenisPenghasilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formulir_i__points`
--

CREATE TABLE `formulir_i__points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jenis_penghasilan` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formulir_i__points`
--

INSERT INTO `formulir_i__points` (`id`, `created_at`, `updated_at`, `jenis_penghasilan`) VALUES
(1, NULL, NULL, 'PEREDARAN USAHA'),
(2, NULL, NULL, 'HARGA POKOK PENJUALAN'),
(3, NULL, NULL, 'LABA/RUGI BRUTO USAHA'),
(4, NULL, NULL, ' BIAYA USAHA'),
(5, NULL, NULL, ' PENGHASILAN NETO'),
(6, NULL, NULL, 'BIAYA YANG DIBEBANKAN /DIKELUARKAN UNTUK KEPENTINGAN RPIBADI WAJIB PAJAK ATAU ORANG YANG MENJADI TANGGUNGANNYA'),
(7, NULL, NULL, 'PREMI ASURANSI KESEHATAN, ASURANSI KECELAKAAN, ASURANSI JIWA, ASURANSI DWIGUNA, DAN ASURANSI BEASISWA YANG DIBAYAR OLEH WAJIB PAJAK'),
(8, NULL, NULL, 'PENGGANTIAN ATAU IMBALAN SEHUBUNGAN DENGAN PEKERJAAN ATAU JASA YANG DIBERIKAN DALAM BENTUK NATURA ATAU KENIKMATAN'),
(9, NULL, NULL, 'JUMLAH YANG MELEBIHI KEWAJARAN YANG DIBAYARKAN KEPADA PIHAK YANG MEMPUNYAI HUBUNGAN ISTIMEWA SEHUBUNGAN DENGAN PEKERJAAN YANG DILAKUKAN'),
(10, NULL, NULL, 'HARTA YANG DIHIBAHKAN, BANTUAN ATAU SUMBANGAN'),
(11, NULL, NULL, 'PAJAK PENGHASILAN'),
(12, NULL, NULL, 'GAJI YANG DIBAYARKAN KEPADA PEMILIK / ORANG YANG MENJADI TANGGUNGANNYA'),
(13, NULL, NULL, 'SANKSI ADMINISTRASI'),
(14, NULL, NULL, 'SELISIH PENYUSUTAN/AMORTISASI KOMERSIAL DIATAS PENYUSUTAN/AMORTISASI FISIKAL'),
(15, NULL, NULL, 'BIAYA UNTUK MENDAPATKAN, MENAGIH DAN MEMELIHARA PENGHASILAN YANG DIKENAKAN PPh FINAL DAN PENGHASILAN YANG TIDAK TERMASUK OBJEK PAJAK'),
(16, NULL, NULL, 'PENYESUAIAN FISIKAL POSITIF LAINNYA'),
(17, NULL, NULL, 'PENGHASILAN YANG DIKENAKAN PPh FINAL DAN PENGHASILAN YANG TIDAK TERMASUK OBJEK PAJAK TETAPI TERMASUK DALAM PEREDARAN USAHA'),
(18, NULL, NULL, 'SELISIH PENYUSUTAN / AMORTISASI KOMERSIAL DI BAWAH PENYUSUTAN AMORTISASI FISIKAL'),
(19, NULL, NULL, ' PENYUSUTAN FISIKAL NEGATIF LAINNYA');

-- --------------------------------------------------------

--
-- Table structure for table `form_spts`
--

CREATE TABLE `form_spts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tahun` year(4) NOT NULL,
  `status_spt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembetulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_pengiriman_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_spts`
--

INSERT INTO `form_spts` (`id`, `created_at`, `updated_at`, `tahun`, `status_spt`, `pembetulan`, `media_pengiriman_token`) VALUES
(1, '2023-01-19 22:00:21', '2023-01-19 22:00:21', 2022, 'Normal', '0', 'email');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_01_081237_create_forms_table', 1),
(6, '2022_09_05_040656_create_treasures_table', 1),
(7, '2022_11_03_053622_create_formspt_table', 1),
(8, '2022_11_23_124209_create_formulir_i_v_s_table', 1),
(9, '2022_11_23_124317_create_data_hartas_table', 1),
(10, '2022_11_25_030301_create_data_utangs_table', 1),
(11, '2022_12_01_050354_create_data_kels_table', 1),
(12, '2022_12_01_120339_create_formulir_i_i_i_s_table', 1),
(13, '2022_12_01_120519_create_formulir_i_i_i_a__points_table', 1),
(14, '2022_12_01_120949_create_formulir_i_i_i_a__details_table', 1),
(15, '2022_12_06_061939_create_formulir_i_i_s_table', 1),
(16, '2022_12_06_062334_create_data_potong_punguts_table', 1),
(17, '2022_12_07_035138_create_formulir_i_i_i_b__points_table', 1),
(18, '2022_12_07_035201_create_formulir_i_i_i_b__details_table', 1),
(19, '2022_12_08_104657_create_pp46danpp23s_table', 1),
(20, '2022_12_08_105924_create_datapp46danpp23s_table', 1),
(21, '2022_12_19_110105_create_formulir_i_i_i_c__points_table', 1),
(22, '2022_12_19_110500_create_formulir_i_i_i_c__details_table', 1),
(23, '2023_01_09_044010_create_formulir_i_s_table', 1),
(24, '2023_01_09_044526_create_audits_table', 1),
(25, '2023_01_09_052232_create_formulir_i__points_table', 1),
(26, '2023_01_09_052257_create_formulir_i__details_table', 1),
(27, '2023_01_19_045759_create_formulir_i2_s_table', 1),
(28, '2023_01_19_050953_create_formulir_i2_b__points_table', 1),
(29, '2023_01_19_051009_create_formulir_i2_b__details_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pp46danpp23s`
--

CREATE TABLE `pp46danpp23s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `formulirIII_id` bigint(20) UNSIGNED DEFAULT NULL,
  `alamat_wajib_pajak` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `treasures`
--

CREATE TABLE `treasures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_id` bigint(20) UNSIGNED DEFAULT NULL,
  `choice` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_treasure` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acquisition_year` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acquisition_cost` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `npwp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `npwp`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '*Nama Pengguna*', 'emailpengguna@gmail.com', NULL, '$2y$10$Pb53tZEj3SMIwVMxDBpWfedK4P1nmDS0uO8/t29Uw9NlOyrX8gMPi', '111000222999000', NULL, '2023-01-19 21:58:59', '2023-01-19 21:58:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audits`
--
ALTER TABLE `audits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `audits_formuliri_id_foreign` (`formuliri_id`);

--
-- Indexes for table `datapp46danpp23s`
--
ALTER TABLE `datapp46danpp23s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datapp46danpp23s_pp46danpp23_id_foreign` (`pp46danpp23_id`);

--
-- Indexes for table `data_hartas`
--
ALTER TABLE `data_hartas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_hartas_formuliriv_id_foreign` (`formuliriv_id`);

--
-- Indexes for table `data_kels`
--
ALTER TABLE `data_kels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_kels_formuliriv_id_foreign` (`formuliriv_id`);

--
-- Indexes for table `data_potong_punguts`
--
ALTER TABLE `data_potong_punguts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_potong_punguts_formulirii_id_foreign` (`formulirii_id`);

--
-- Indexes for table `data_utangs`
--
ALTER TABLE `data_utangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_utangs_formuliriv_id_foreign` (`formuliriv_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir_i2_b__details`
--
ALTER TABLE `formulir_i2_b__details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formulir_i2_b__details_formuliri2_id_foreign` (`formuliri2_id`),
  ADD KEY `formulir_i2_b__details_formuliri2b_point_foreign` (`formuliri2b_point`);

--
-- Indexes for table `formulir_i2_b__points`
--
ALTER TABLE `formulir_i2_b__points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir_i2_s`
--
ALTER TABLE `formulir_i2_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir_i_i_i_a__details`
--
ALTER TABLE `formulir_i_i_i_a__details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formulir_i_i_i_a__details_formuliriii_id_foreign` (`formulirIII_id`),
  ADD KEY `formulir_i_i_i_a__details_formuliriiia_point_foreign` (`formulirIIIA_point`);

--
-- Indexes for table `formulir_i_i_i_a__points`
--
ALTER TABLE `formulir_i_i_i_a__points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir_i_i_i_b__details`
--
ALTER TABLE `formulir_i_i_i_b__details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formulir_i_i_i_b__details_formuliriii_id_foreign` (`formulirIII_id`),
  ADD KEY `formulir_i_i_i_b__details_formuliriiib_point_foreign` (`formulirIIIB_point`);

--
-- Indexes for table `formulir_i_i_i_b__points`
--
ALTER TABLE `formulir_i_i_i_b__points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir_i_i_i_c__details`
--
ALTER TABLE `formulir_i_i_i_c__details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formulir_i_i_i_c__details_formuliriii_id_foreign` (`formulirIII_id`),
  ADD KEY `formulir_i_i_i_c__details_formuliriiic_point_foreign` (`formulirIIIC_point`);

--
-- Indexes for table `formulir_i_i_i_c__points`
--
ALTER TABLE `formulir_i_i_i_c__points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir_i_i_i_s`
--
ALTER TABLE `formulir_i_i_i_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir_i_i_s`
--
ALTER TABLE `formulir_i_i_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir_i_s`
--
ALTER TABLE `formulir_i_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir_i_v_s`
--
ALTER TABLE `formulir_i_v_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formulir_i_v_s_form_spts_id_foreign` (`form_spts_id`);

--
-- Indexes for table `formulir_i__details`
--
ALTER TABLE `formulir_i__details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formulir_i__details_formuliri_id_foreign` (`formuliri_id`),
  ADD KEY `formulir_i__details_formuliri_point_foreign` (`formuliri_point`);

--
-- Indexes for table `formulir_i__points`
--
ALTER TABLE `formulir_i__points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_spts`
--
ALTER TABLE `form_spts`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pp46danpp23s`
--
ALTER TABLE `pp46danpp23s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pp46danpp23s_formuliriii_id_foreign` (`formulirIII_id`);

--
-- Indexes for table `treasures`
--
ALTER TABLE `treasures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `treasures_form_id_foreign` (`form_id`);

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
-- AUTO_INCREMENT for table `audits`
--
ALTER TABLE `audits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datapp46danpp23s`
--
ALTER TABLE `datapp46danpp23s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_hartas`
--
ALTER TABLE `data_hartas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_kels`
--
ALTER TABLE `data_kels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_potong_punguts`
--
ALTER TABLE `data_potong_punguts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_utangs`
--
ALTER TABLE `data_utangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formulir_i2_b__details`
--
ALTER TABLE `formulir_i2_b__details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `formulir_i2_b__points`
--
ALTER TABLE `formulir_i2_b__points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `formulir_i2_s`
--
ALTER TABLE `formulir_i2_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formulir_i_i_i_a__details`
--
ALTER TABLE `formulir_i_i_i_a__details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `formulir_i_i_i_a__points`
--
ALTER TABLE `formulir_i_i_i_a__points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `formulir_i_i_i_b__details`
--
ALTER TABLE `formulir_i_i_i_b__details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formulir_i_i_i_b__points`
--
ALTER TABLE `formulir_i_i_i_b__points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `formulir_i_i_i_c__details`
--
ALTER TABLE `formulir_i_i_i_c__details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formulir_i_i_i_c__points`
--
ALTER TABLE `formulir_i_i_i_c__points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formulir_i_i_i_s`
--
ALTER TABLE `formulir_i_i_i_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formulir_i_i_s`
--
ALTER TABLE `formulir_i_i_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formulir_i_s`
--
ALTER TABLE `formulir_i_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formulir_i_v_s`
--
ALTER TABLE `formulir_i_v_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formulir_i__details`
--
ALTER TABLE `formulir_i__details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formulir_i__points`
--
ALTER TABLE `formulir_i__points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `form_spts`
--
ALTER TABLE `form_spts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pp46danpp23s`
--
ALTER TABLE `pp46danpp23s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `treasures`
--
ALTER TABLE `treasures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `audits`
--
ALTER TABLE `audits`
  ADD CONSTRAINT `audits_formuliri_id_foreign` FOREIGN KEY (`formuliri_id`) REFERENCES `formulir_i_s` (`id`);

--
-- Constraints for table `datapp46danpp23s`
--
ALTER TABLE `datapp46danpp23s`
  ADD CONSTRAINT `datapp46danpp23s_pp46danpp23_id_foreign` FOREIGN KEY (`pp46danpp23_id`) REFERENCES `pp46danpp23s` (`id`);

--
-- Constraints for table `data_hartas`
--
ALTER TABLE `data_hartas`
  ADD CONSTRAINT `data_hartas_formuliriv_id_foreign` FOREIGN KEY (`formuliriv_id`) REFERENCES `formulir_i_v_s` (`id`);

--
-- Constraints for table `data_kels`
--
ALTER TABLE `data_kels`
  ADD CONSTRAINT `data_kels_formuliriv_id_foreign` FOREIGN KEY (`formuliriv_id`) REFERENCES `formulir_i_v_s` (`id`);

--
-- Constraints for table `data_potong_punguts`
--
ALTER TABLE `data_potong_punguts`
  ADD CONSTRAINT `data_potong_punguts_formulirii_id_foreign` FOREIGN KEY (`formulirii_id`) REFERENCES `formulir_i_i_s` (`id`);

--
-- Constraints for table `data_utangs`
--
ALTER TABLE `data_utangs`
  ADD CONSTRAINT `data_utangs_formuliriv_id_foreign` FOREIGN KEY (`formuliriv_id`) REFERENCES `formulir_i_v_s` (`id`);

--
-- Constraints for table `formulir_i2_b__details`
--
ALTER TABLE `formulir_i2_b__details`
  ADD CONSTRAINT `formulir_i2_b__details_formuliri2_id_foreign` FOREIGN KEY (`formuliri2_id`) REFERENCES `formulir_i2_s` (`id`),
  ADD CONSTRAINT `formulir_i2_b__details_formuliri2b_point_foreign` FOREIGN KEY (`formuliri2b_point`) REFERENCES `formulir_i2_b__points` (`id`);

--
-- Constraints for table `formulir_i_i_i_a__details`
--
ALTER TABLE `formulir_i_i_i_a__details`
  ADD CONSTRAINT `formulir_i_i_i_a__details_formuliriii_id_foreign` FOREIGN KEY (`formulirIII_id`) REFERENCES `formulir_i_i_i_s` (`id`),
  ADD CONSTRAINT `formulir_i_i_i_a__details_formuliriiia_point_foreign` FOREIGN KEY (`formulirIIIA_point`) REFERENCES `formulir_i_i_i_a__points` (`id`);

--
-- Constraints for table `formulir_i_i_i_b__details`
--
ALTER TABLE `formulir_i_i_i_b__details`
  ADD CONSTRAINT `formulir_i_i_i_b__details_formuliriii_id_foreign` FOREIGN KEY (`formulirIII_id`) REFERENCES `formulir_i_i_i_s` (`id`),
  ADD CONSTRAINT `formulir_i_i_i_b__details_formuliriiib_point_foreign` FOREIGN KEY (`formulirIIIB_point`) REFERENCES `formulir_i_i_i_b__points` (`id`);

--
-- Constraints for table `formulir_i_i_i_c__details`
--
ALTER TABLE `formulir_i_i_i_c__details`
  ADD CONSTRAINT `formulir_i_i_i_c__details_formuliriii_id_foreign` FOREIGN KEY (`formulirIII_id`) REFERENCES `formulir_i_i_i_s` (`id`),
  ADD CONSTRAINT `formulir_i_i_i_c__details_formuliriiic_point_foreign` FOREIGN KEY (`formulirIIIC_point`) REFERENCES `formulir_i_i_i_c__points` (`id`);

--
-- Constraints for table `formulir_i_v_s`
--
ALTER TABLE `formulir_i_v_s`
  ADD CONSTRAINT `formulir_i_v_s_form_spts_id_foreign` FOREIGN KEY (`form_spts_id`) REFERENCES `form_spts` (`id`);

--
-- Constraints for table `formulir_i__details`
--
ALTER TABLE `formulir_i__details`
  ADD CONSTRAINT `formulir_i__details_formuliri_id_foreign` FOREIGN KEY (`formuliri_id`) REFERENCES `formulir_i_s` (`id`),
  ADD CONSTRAINT `formulir_i__details_formuliri_point_foreign` FOREIGN KEY (`formuliri_point`) REFERENCES `formulir_i__points` (`id`);

--
-- Constraints for table `pp46danpp23s`
--
ALTER TABLE `pp46danpp23s`
  ADD CONSTRAINT `pp46danpp23s_formuliriii_id_foreign` FOREIGN KEY (`formulirIII_id`) REFERENCES `formulir_i_i_i_s` (`id`);

--
-- Constraints for table `treasures`
--
ALTER TABLE `treasures`
  ADD CONSTRAINT `treasures_form_id_foreign` FOREIGN KEY (`form_id`) REFERENCES `forms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
