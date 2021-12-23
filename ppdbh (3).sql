-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2021 pada 11.56
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdbh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Super Admin'),
(2, 'operator', 'Operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 5),
(2, 6),
(2, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'habib@gmail.com', 5, '2021-11-28 23:44:25', 1),
(2, '::1', 'habib@gmail.com', 5, '2021-11-28 23:46:39', 1),
(3, '::1', 'bian@gnail.com', 6, '2021-11-28 23:56:17', 1),
(4, '::1', 'habib@gmail.com', 5, '2021-11-28 23:58:26', 1),
(5, '::1', 'bian@gnail.com', 6, '2021-11-28 23:58:45', 1),
(6, '::1', 'bian@gnail.com', 6, '2021-11-29 00:02:08', 1),
(7, '::1', 'habib@gmail.com', 5, '2021-11-29 00:04:45', 1),
(8, '::1', 'habib@gmail.com', 5, '2021-11-29 00:52:48', 1),
(9, '::1', 'habib@gmail.com', 5, '2021-11-29 01:50:07', 1),
(10, '::1', 'habib@gmail.com', 5, '2021-11-29 01:50:35', 1),
(11, '::1', 'habib@gmail.com', 5, '2021-11-29 02:16:51', 1),
(12, '::1', 'habib@gmail.com', 5, '2021-11-29 06:12:08', 1),
(13, '::1', 'bian', NULL, '2021-11-29 08:30:45', 0),
(14, '::1', 'bian@gnail.com', 6, '2021-11-29 08:30:55', 1),
(15, '::1', 'habib@gmail.com', 5, '2021-11-29 09:07:49', 1),
(16, '::1', 'habib@gmail.com', 5, '2021-11-29 09:51:21', 1),
(17, '::1', 'habib@gmail.com', 5, '2021-11-29 18:00:49', 1),
(18, '::1', 'habib@gmail.com', 5, '2021-11-30 01:32:01', 1),
(19, '::1', 'habib@gmail.com', 5, '2021-11-30 07:59:49', 1),
(20, '::1', 'habib', NULL, '2021-11-30 17:41:34', 0),
(21, '::1', 'habib@gmail.com', 5, '2021-11-30 17:41:45', 1),
(22, '::1', 'habib@gmail.com', 5, '2021-12-01 02:44:30', 1),
(23, '::1', 'habib@gmail.com', 5, '2021-12-01 03:21:26', 1),
(24, '::1', 'habib@gmail.com', 5, '2021-12-01 06:57:15', 1),
(25, '::1', 'habib@gmail.com', 5, '2021-12-02 01:42:41', 1),
(26, '::1', 'habib@gmail.com', 5, '2021-12-02 18:00:20', 1),
(27, '::1', 'habib@gmail.com', 5, '2021-12-04 09:29:04', 1),
(28, '::1', 'habib@gmail.com', 5, '2021-12-05 01:07:13', 1),
(29, '::1', 'habib', NULL, '2021-12-14 06:41:32', 0),
(30, '::1', 'irfan', NULL, '2021-12-14 06:41:38', 0),
(31, '::1', 'admin', NULL, '2021-12-14 06:41:45', 0),
(32, '::1', 'habib@gmail.com', 5, '2021-12-14 06:41:51', 1),
(33, '::1', 'habib@gmail.com', 5, '2021-12-14 06:49:30', 1),
(34, '::1', 'habib@gmail.com', 5, '2021-12-15 03:46:30', 1),
(35, '::1', 'habib', NULL, '2021-12-16 21:07:19', 0),
(36, '::1', 'habib@gmail.com', 5, '2021-12-16 21:07:25', 1),
(37, '::1', 'habib@gmail.com', 5, '2021-12-16 21:14:43', 1),
(38, '::1', 'habib@gmail.com', 5, '2021-12-16 22:53:24', 1),
(39, '::1', 'habib@gmail.com', 5, '2021-12-17 06:07:07', 1),
(40, '::1', 'habib@gmail.com', 5, '2021-12-17 16:48:26', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'user-management', 'Manage All User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `nik` varchar(64) NOT NULL,
  `no_daftar` varchar(32) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `jenis` varchar(11) DEFAULT NULL,
  `nis` varchar(30) DEFAULT NULL,
  `no_kk` varchar(30) DEFAULT NULL,
  `nisn` varchar(30) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `foto` varchar(128) DEFAULT NULL,
  `jenkel` varchar(1) DEFAULT NULL,
  `tempat_lahir` varchar(128) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `npsn_sekolah_pilihan` varchar(15) NOT NULL,
  `sekolah_pilihan` varchar(200) NOT NULL,
  `asal_sekolah` varchar(128) DEFAULT NULL,
  `npsn_asal` varchar(20) DEFAULT NULL,
  `kelas` varchar(11) DEFAULT NULL,
  `jurusan` varchar(11) DEFAULT '',
  `jenjang` varchar(11) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `desa` varchar(128) DEFAULT NULL,
  `kecamatan` varchar(128) DEFAULT NULL,
  `kota` varchar(128) DEFAULT NULL,
  `provinsi` varchar(128) DEFAULT NULL,
  `kode_pos` varchar(6) DEFAULT NULL,
  `transportasi` varchar(128) DEFAULT NULL,
  `no_hp` varchar(16) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `anak_ke` int(2) DEFAULT NULL,
  `saudara` int(11) DEFAULT NULL,
  `tinggi` int(3) DEFAULT NULL,
  `berat` int(3) DEFAULT NULL,
  `status_keluarga` varchar(50) DEFAULT NULL,
  `tinggal` varchar(128) DEFAULT NULL,
  `jarak` varchar(128) DEFAULT NULL,
  `waktu` varchar(128) DEFAULT NULL,
  `nik_ayah` varchar(16) DEFAULT NULL,
  `nama_ayah` varchar(128) DEFAULT NULL,
  `tempat_ayah` varchar(128) DEFAULT NULL,
  `tgl_lahir_ayah` date DEFAULT NULL,
  `status_ayah` varchar(128) DEFAULT NULL,
  `pendidikan_ayah` varchar(128) DEFAULT NULL,
  `pekerjaan_ayah` varchar(128) DEFAULT NULL,
  `penghasilan_ayah` varchar(128) DEFAULT NULL,
  `no_hp_ayah` varchar(16) DEFAULT NULL,
  `nik_ibu` varchar(16) DEFAULT NULL,
  `nama_ibu` varchar(128) DEFAULT NULL,
  `tempat_ibu` varchar(128) DEFAULT NULL,
  `tgl_lahir_ibu` date DEFAULT NULL,
  `status_ibu` varchar(128) DEFAULT NULL,
  `pendidikan_ibu` varchar(128) DEFAULT NULL,
  `pekerjaan_ibu` varchar(128) DEFAULT NULL,
  `penghasilan_ibu` varchar(128) DEFAULT NULL,
  `no_hp_ibu` varchar(16) DEFAULT NULL,
  `nik_wali` varchar(16) DEFAULT NULL,
  `nama_wali` varchar(128) DEFAULT NULL,
  `tempat_wali` varchar(128) DEFAULT NULL,
  `tgl_lahir_wali` date DEFAULT NULL,
  `pendidikan_wali` varchar(50) DEFAULT NULL,
  `pekerjaan_wali` varchar(50) DEFAULT NULL,
  `penghasilan_wali` varchar(50) DEFAULT NULL,
  `no_hp_wali` varchar(16) DEFAULT NULL,
  `no_ijazah` varchar(128) DEFAULT NULL,
  `no_shun` varchar(128) DEFAULT NULL,
  `no_ujian` varchar(128) DEFAULT NULL,
  `no_kip` varchar(30) DEFAULT NULL,
  `file_kip` varchar(256) DEFAULT NULL,
  `file_ktp` varchar(256) DEFAULT NULL,
  `file_kk` varchar(256) DEFAULT NULL,
  `file_ijazah` varchar(256) DEFAULT NULL,
  `file_akte` varchar(256) DEFAULT NULL,
  `file_shun` varchar(256) DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `alasan_keluar` varchar(100) DEFAULT NULL,
  `surat_keluar` varchar(255) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `aktif` int(1) DEFAULT 0,
  `status` int(1) DEFAULT 0,
  `petugas_daftar` varchar(10) DEFAULT NULL,
  `petugas_konfirmasi` varchar(10) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `tgl_konfirmasi` date DEFAULT NULL,
  `baju` varchar(10) DEFAULT NULL,
  `bayar` varchar(100) DEFAULT NULL,
  `online` int(1) DEFAULT 0,
  `password` text DEFAULT NULL,
  `anak_guru` int(1) NOT NULL,
  `anak_yayasan` int(1) NOT NULL,
  `diskon` int(1) NOT NULL,
  `sekolah_katolik` int(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`nik`, `no_daftar`, `id`, `jenis`, `nis`, `no_kk`, `nisn`, `nama_lengkap`, `foto`, `jenkel`, `tempat_lahir`, `tgl_lahir`, `npsn_sekolah_pilihan`, `sekolah_pilihan`, `asal_sekolah`, `npsn_asal`, `kelas`, `jurusan`, `jenjang`, `agama`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `kota`, `provinsi`, `kode_pos`, `transportasi`, `no_hp`, `email`, `anak_ke`, `saudara`, `tinggi`, `berat`, `status_keluarga`, `tinggal`, `jarak`, `waktu`, `nik_ayah`, `nama_ayah`, `tempat_ayah`, `tgl_lahir_ayah`, `status_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `no_hp_ayah`, `nik_ibu`, `nama_ibu`, `tempat_ibu`, `tgl_lahir_ibu`, `status_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `no_hp_ibu`, `nik_wali`, `nama_wali`, `tempat_wali`, `tgl_lahir_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `no_hp_wali`, `no_ijazah`, `no_shun`, `no_ujian`, `no_kip`, `file_kip`, `file_ktp`, `file_kk`, `file_ijazah`, `file_akte`, `file_shun`, `tgl_keluar`, `alasan_keluar`, `surat_keluar`, `level`, `aktif`, `status`, `petugas_daftar`, `petugas_konfirmasi`, `tgl_daftar`, `tgl_konfirmasi`, `baju`, `bayar`, `online`, `password`, `anak_guru`, `anak_yayasan`, `diskon`, `sekolah_katolik`, `created_at`, `updated_at`) VALUES
('12233', 'PPDB2021', 41, NULL, NULL, '1205198668666', '334524244242', 'Irfan Akbari Habibi', NULL, 'L', 'BATANG SERANGAN', '2021-12-30', '', '', 'NHH', NULL, NULL, 'IPA', NULL, 'Islam', 'Jl. Batang Serangan', '0', '0', 'Sei Bamban', 'Batang Serangan', '', 'Sumatera Utara', '20883', NULL, '08465757557', NULL, 1, 3, 166, 60, 'Anak Tiri', 'Bersama Orang Tua', '100', NULL, '120518334234244', 'Walsupriadi', 'Rgerggre', '2021-12-18', NULL, 'S1', NULL, NULL, '082277427033', '12635576565', 'Neti Kurniawati', 'Redgg', '2021-12-21', NULL, 'S1', NULL, NULL, '082248409118', '', '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, '', NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 19:29:49', '2021-12-17 16:59:39'),
('1234', 'PPDB2021', 29, NULL, NULL, NULL, '', 'Budi Kurniawan', NULL, 'L', 'BATANG SERANGAN', '2021-12-03', '', '', 'SMPN 2 PADANG TUALANG', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0822444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-02 19:23:25', '2021-12-02 19:23:25'),
('12345', 'PPDB2021', 30, NULL, NULL, NULL, '', 'Bengga Setiawan', NULL, 'L', 'BATANG SERANGAN', '2021-12-03', '', '', 'SMPN 2 PADANG TUALANG', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3211313', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-02 19:24:00', '2021-12-02 19:24:00'),
('123456', 'PPDB2021', 31, NULL, NULL, NULL, '', 'Abyan Fashah', NULL, 'L', 'BATANG SERANGAN', '2021-12-03', '', '', 'SMPN 2 PADANG PANJANG', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4443224342', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-02 19:24:25', '2021-12-02 19:24:25'),
('12346', 'PPDB2021', 71, NULL, NULL, NULL, '', 'Tdytd', NULL, 'P', 'Tddutui', '2021-12-08', '', '', 'TDUTDD', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '799779', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 20:38:40', '2021-12-16 20:38:40'),
('2232332', 'PPDB2021', 34, NULL, NULL, NULL, '', 'Imjmijmji', NULL, 'L', 'Bggbbfgb', '2021-12-17', '', '', 'JIIJMMJI', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0383288328', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-04 09:33:48', '2021-12-04 09:33:48'),
('3443433', 'PPDB2021', 59, NULL, NULL, NULL, '', 'Irfan Akbari Akbari Habibi', NULL, 'P', 'Batang', '2021-12-14', '', '', 'SEFSEFSEF', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '35533535', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 20:11:36', '2021-12-16 20:11:36'),
('3645774', 'PPDB2021', 63, NULL, NULL, NULL, '', 'Dfgdrgdrg', NULL, 'L', 'Rdgdrgdrg', '2021-12-23', '', '', 'DRGDRGDRG', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '544557', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 20:19:04', '2021-12-16 20:19:04'),
('3664373595975', 'PPDB2021', 67, NULL, NULL, NULL, '', 'Yrdydyd', NULL, 'L', 'Fufiiuiphn', '2021-12-22', '', '', 'TDUTDUD', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '688686', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 20:28:10', '2021-12-16 20:28:10'),
('433555', 'PPDB2021', 35, NULL, NULL, NULL, '', 'Ihinnni', NULL, 'L', 'Ljhu', '2021-12-15', '', '', 'NJNJNUNIJ', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '998989889', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-04 10:13:02', '2021-12-04 10:13:02'),
('43434', 'PPDB2021', 33, NULL, NULL, NULL, '', 'Bdbfbdfbsgsg', NULL, 'L', 'Rdrgrgdrg', '2021-12-03', '', '', 'SMPN 1 STABAT', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '35453355335', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-02 19:57:20', '2021-12-02 19:57:20'),
('4675868657', 'PPDB2021', 76, NULL, NULL, NULL, '', 'Rgeger', NULL, 'L', 'Grdgrdrgrdg', '2021-12-20', '', '', 'REGERGER', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '353353', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 21:06:12', '2021-12-16 21:06:12'),
('5353553', 'PPDB2021', 65, NULL, NULL, NULL, '', 'Dsgdsg', NULL, 'L', 'BATANG SERANGAN', '2021-12-15', '', '', 'SDGSDG', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '455454', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 20:26:15', '2021-12-16 20:26:15'),
('54553353', 'PPDB2021', 75, NULL, NULL, NULL, '', 'Drgdgrddgrrgd', NULL, 'L', 'Eggrge', '2021-12-06', '', '', 'EGEGERG', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '54544', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 21:05:19', '2021-12-16 21:05:19'),
('546475755353', 'PPDB2021', 74, NULL, NULL, NULL, '', 'Rgrrgg', NULL, 'L', 'Ergeegg', '2021-12-22', '', '', 'GGRGGE', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5455454', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 21:04:18', '2021-12-16 21:04:18'),
('557557', 'PPDB2021', 54, NULL, NULL, NULL, '', 'Tftfutf', NULL, 'L', 'Hkvkhkh', '2021-12-07', '', '', 'UIGIGUIUG', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8686866', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 20:05:34', '2021-12-16 20:05:34'),
('56676', 'PPDB2021', 39, NULL, NULL, NULL, '', 'Jhjhhjhb', NULL, 'L', 'Jniniinnuj', '2021-12-29', '', '', 'HJHBHBJJH', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '988989', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-04 10:21:31', '2021-12-04 10:21:31'),
('5747457', 'PPDB2021', 64, NULL, NULL, NULL, '', 'Irfan Akbari Akbari Habibi', NULL, 'L', 'BATANG SERANGAN', '2021-12-22', '', '', 'DRGDRGGD', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '54545', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 20:20:24', '2021-12-16 20:20:24'),
('5775755', 'PPDB2021', 50, NULL, NULL, NULL, '', 'Ytdyd', NULL, 'P', 'Byy', '2021-12-15', '', '', 'YTDYDT', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '788778', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 19:58:49', '2021-12-16 19:58:49'),
('65575478', 'PPDB2021', 55, NULL, NULL, NULL, '', 'Thdtdutd', NULL, 'P', 'Ljukgouj', '2021-12-02', '', '', 'TTFDUF', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7778', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 20:06:46', '2021-12-16 20:06:46'),
('686855', 'PPDB2021', 57, NULL, NULL, NULL, '', 'Tddtytd', NULL, 'L', 'JTFUYG', '2021-12-23', '', '', 'YFIYFFYF', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '799777', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 20:08:09', '2021-12-16 20:08:09'),
('688656435', 'PPDB2021', 42, NULL, NULL, NULL, '', 'Vsddvsd', NULL, 'P', 'Drgdrgrgd', '2021-12-13', '', '', 'ESFEFSE', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4554545', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 19:43:53', '2021-12-16 19:43:53'),
('7676', 'PPDB2021', 40, NULL, NULL, NULL, '', 'Ggvg', NULL, 'L', 'Knnkkn', '2021-12-30', '', '', 'GGGH', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9877789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-04 10:23:33', '2021-12-04 10:23:33'),
('7687688', 'PPDB2021', 52, NULL, NULL, NULL, '', 'Gyigygy', NULL, 'L', 'Yuvvuyv', '2021-12-08', '', '', 'HVJHJH', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6776676', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 20:02:01', '2021-12-16 20:02:01'),
('7796976', 'PPDB2021', 51, NULL, NULL, NULL, '', 'HDHTDYTDH', NULL, 'L', 'Jfhjhfhj', '2021-12-21', '', '', 'JYFJYF', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '66886', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 20:00:26', '2021-12-16 20:00:26'),
('8709878066', 'PPDB2021', 70, NULL, NULL, NULL, '', 'Yruyriyriq', NULL, 'P', 'Ukgkugkug', '2021-12-21', '', '', 'YOUOUT', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '797979', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-16 20:36:04', '2021-12-16 20:36:04'),
('8778787', 'PPDB2021', 37, NULL, NULL, NULL, '', 'Yibyubyu', NULL, 'L', 'Khjhjh', '2021-12-31', '', '', 'YUUYUYBYU', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '89989898', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-04 10:19:07', '2021-12-04 10:19:07'),
('989898', 'PPDB2021', 38, NULL, NULL, NULL, '', 'Hibhbh', NULL, 'L', 'Jkkj', '2021-12-14', '', '', 'IBBHBHU', NULL, NULL, 'IPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '879', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, '2021-12-04 10:20:44', '2021-12-04 10:20:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `device`
--

CREATE TABLE `device` (
  `id_device` int(11) NOT NULL,
  `nama_device` varchar(100) NOT NULL,
  `device_id` varchar(255) DEFAULT NULL,
  `no_hp` varchar(15) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `no_utama` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `device`
--

INSERT INTO `device` (`id_device`, `nama_device`, `device_id`, `no_hp`, `status`, `no_utama`) VALUES
(11, 'habib', '9b40cdd7720990f6631952eb81c4ee9ce617ff29', '082276880570', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` varchar(50) NOT NULL,
  `nama_jurusan` varchar(100) DEFAULT NULL,
  `kuota` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `kuota`, `status`, `updated_at`, `created_at`) VALUES
('IPA', 'ILMU PENGETAHUAN ALAM', 300, 1, '2021-11-30 08:03:54', '2021-11-30 08:03:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(50) DEFAULT NULL,
  `no_kontak` varchar(50) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama_kontak`, `no_kontak`, `status`) VALUES
(1, 'Roy Kurniawan', '081210654', 1),
(8, 'Habibi', '0823456784567', 1),
(9, 'Budi', '09555646464646', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1638160355, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar_baru`
--

CREATE TABLE `pendaftar_baru` (
  `id` int(11) NOT NULL,
  `nik` varchar(35) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `no_hp` varchar(32) DEFAULT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftar_baru`
--

INSERT INTO `pendaftar_baru` (`id`, `nik`, `nama_lengkap`, `asal_sekolah`, `no_hp`, `tempat_lahir`, `tgl_lahir`, `created_at`, `updated_at`, `status`) VALUES
(1, '', 'IRFAN AKBARI HABIBI', 'SMPN 2 PADANG TUALANG', '082276880570', 'BATANG SERANGAN', NULL, NULL, NULL, 1),
(2, '96796696', 'uhuhuuohuo', 'huohuhuhou', NULL, 'houohhou', NULL, '2021-11-29 05:58:33', '2021-11-29 05:58:33', 0),
(3, '779798789', 'huhuhuhu', 'ohuohhuo', '70078087078878', 'kbhbkbkh', NULL, '2021-11-29 06:00:13', '2021-11-29 06:00:13', 0),
(4, '87798798', 'ukhhuhu', 'huohuuhuho', '987987987878', 'jhukhu', '2021-11-29', '2021-11-29 06:01:01', '2021-11-29 06:01:01', 0),
(5, '977987', 'hgkhkhjhk', 'jkhhjkkh', '777997', 'bjkbjkbjkbjk', '2021-11-29', '2021-11-29 06:07:20', '2021-11-29 06:07:20', 0),
(6, '798798798', 'uhhkhjhjk', 'hkhkhkh', '7897898', 'hjhjjkjkk', '2021-11-29', '2021-11-29 06:09:39', '2021-11-29 06:09:39', 0),
(7, '7776876867', 'gygjjhg', 'jghghjh', '9779779798', 'hhkkh', '2021-11-29', '2021-11-29 06:11:35', '2021-11-29 06:11:35', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `pengumuman` text DEFAULT NULL,
  `tgl` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT NULL,
  `jenis` int(1) DEFAULT 0,
  `created_by` varchar(32) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `id_user`, `judul`, `pengumuman`, `tgl`, `created_at`, `jenis`, `created_by`, `updated_at`) VALUES
(2, 5, 'INFORMASI DAFTAR ULA', '<p>ojuoiujbuiouiugoughughiouoguogugughuhoohuoinononiiononinoioni</p>', '2021-12-01 14:09:09', NULL, 2, NULL, '2021-12-01 01:09:09'),
(5, 0, 'Daftar Ulang', '<p>effaf<b>afaeefefffaeaefaefafe<u>aefafefaf</u></b></p>', '2021-11-30 22:05:58', '2021-11-30 09:05:58', 0, 'habib', '2021-11-30 09:05:58'),
(7, 0, 'rttrrtgf', '<p>56ytgfghhghghg</p>', '2021-12-02 15:45:14', '2021-12-02 02:45:14', 0, 'habib', '2021-12-02 02:45:14'),
(8, 0, 'qfw', '<p>qf</p>', '2021-12-02 20:15:35', '2021-12-02 07:15:35', 0, 'habib', '2021-12-02 07:15:35'),
(9, 0, 'imm', '<p>jijiijmijmj</p>', '2021-12-04 22:35:01', '2021-12-04 09:35:01', 0, 'habib', '2021-12-04 09:35:01'),
(10, 0, 'imim', '<p>ijmijimjimj</p>', '2021-12-04 22:36:10', '2021-12-04 09:36:10', 0, 'habib', '2021-12-04 09:36:10'),
(11, 0, 'ubgbgubg', '<p>j hj&nbsp; bj j b</p>', '2021-12-04 22:36:39', '2021-12-04 09:36:39', 0, 'habib', '2021-12-04 09:36:39'),
(12, 0, '4r44r', '<p>frffr</p>', '2021-12-04 22:39:29', '2021-12-04 09:39:29', 0, 'habib', '2021-12-04 09:39:29'),
(14, 0, 'rf', '<p>rf</p>', '2021-12-04 22:45:42', '2021-12-04 09:45:42', 0, 'habib', '2021-12-04 09:45:42'),
(15, 0, 'efeef', '<p>efef</p>', '2021-12-04 22:46:19', '2021-12-04 09:46:19', 0, 'habib', '2021-12-04 09:46:19'),
(16, 0, 'err', '<p>erreer</p>', '2021-12-04 22:47:08', '2021-12-04 09:47:08', 0, 'habib', '2021-12-04 09:47:08'),
(17, 0, 'fefe', '<p>kooj</p>', '2021-12-04 22:47:31', '2021-12-04 09:47:31', 0, 'habib', '2021-12-04 09:47:31'),
(18, 0, 'kmjij', '<p>jijj</p>', '2021-12-04 22:52:17', '2021-12-04 09:52:17', 0, 'habib', '2021-12-04 09:52:17'),
(19, 0, 'tgv', '<p>gtv</p>', '2021-12-04 22:52:57', '2021-12-04 09:52:57', 0, 'habib', '2021-12-04 09:52:57'),
(20, 0, 'tt4f', '<p>t44fttf</p>', '2021-12-04 22:53:47', '2021-12-04 09:53:47', 0, 'habib', '2021-12-04 09:53:47'),
(21, 0, 'rffr', '<p>frfrrf</p>', '2021-12-04 22:55:48', '2021-12-04 09:55:48', 0, 'habib', '2021-12-04 09:55:48'),
(22, 0, 'frfr', '<p>jiijj</p>', '2021-12-04 22:56:33', '2021-12-04 09:56:33', 0, 'habib', '2021-12-04 09:56:33'),
(23, 0, 'edde', '<p>de</p>', '2021-12-04 22:57:17', '2021-12-04 09:57:17', 0, 'habib', '2021-12-04 09:57:17'),
(24, 0, '4r', '<p>4r</p>', '2021-12-04 22:58:21', '2021-12-04 09:58:21', 0, 'habib', '2021-12-04 09:58:21'),
(25, 0, '9imo', '<p>okf</p>', '2021-12-04 23:02:25', '2021-12-04 10:02:25', 0, 'habib', '2021-12-04 10:02:25'),
(26, 0, '5tf', '<p>5tf</p>', '2021-12-04 23:03:32', '2021-12-04 10:03:32', 0, 'habib', '2021-12-04 10:03:32'),
(27, 0, 'frfr', '<p>rf</p>', '2021-12-04 23:07:13', '2021-12-04 10:07:13', 0, 'habib', '2021-12-04 10:07:13'),
(28, 0, 'jjim', '<p>mjiijimj</p>', '2021-12-04 23:08:43', '2021-12-04 10:08:43', 0, 'habib', '2021-12-04 10:08:43'),
(29, 0, 'rffr', '<p>rffrrf</p>', '2021-12-04 23:09:15', '2021-12-04 10:09:15', 0, 'habib', '2021-12-04 10:09:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(1) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `npsn` varchar(30) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `provinsi` varchar(30) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `favicon` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `klikchat` text DEFAULT NULL,
  `livechat` text DEFAULT NULL,
  `nolivechat` varchar(50) DEFAULT NULL,
  `infobayar` text DEFAULT NULL,
  `syarat` text DEFAULT NULL,
  `spp` int(5) NOT NULL,
  `spb` int(5) NOT NULL,
  `jurusan` int(1) NOT NULL,
  `jalur` int(1) NOT NULL,
  `nama_kepsek` varchar(200) NOT NULL,
  `nip_kepsek` varchar(200) NOT NULL,
  `ppdb_open` datetime DEFAULT NULL,
  `ppdb_close` datetime DEFAULT NULL,
  `pembayaran` int(1) NOT NULL,
  `devid_wa` varchar(200) NOT NULL,
  `no_rek` varchar(20) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `nama_rek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id_setting`, `nama_sekolah`, `npsn`, `alamat`, `kota`, `provinsi`, `logo`, `favicon`, `email`, `no_telp`, `klikchat`, `livechat`, `nolivechat`, `infobayar`, `syarat`, `spp`, `spb`, `jurusan`, `jalur`, `nama_kepsek`, `nip_kepsek`, `ppdb_open`, `ppdb_close`, `pembayaran`, `devid_wa`, `no_rek`, `nama_bank`, `nama_rek`) VALUES
(1, 'SMK Habib', '69787351', 'Belakang Masjid Ay-Syakirin', 'Medan', 'Jawa Barat', '5.png', NULL, NULL, NULL, 'Hai+hai', 'Assalamualaikum ', '082276880570', '<p>Silahkan melakukan proses pembayaran melalui No Rekening dibawah ini :</p><p>0000000000000</p><p>A/N SMK HS AGUNG</p><p>BANK NASIONAL INDONESIA</p><p>Setelah melakukan proses pembayaran harap konfirmasikan pembayaran di menu tambah pembayaran.</p><p>setelah itu akan dilakukan pengechekan oleh Panitia PPDB SMK HS AGUNG.</p>', '<p>SYARAT PENDAFTARAN</p><p><br></p><p>1. Harus Naek Kereta</p><p>2. Harus ikut sholawat buk susi</p><p><br></p>', 1234, 5678, 0, 0, 'Sunardi', '1234', '2021-10-20 23:59:00', '2022-10-10 11:00:00', 0, 'b955fcbb16e81', '1234567', 'BANK NASIONAL INDONESIA (BNI)', 'SMK HS AGUNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `full_name` varchar(64) DEFAULT NULL,
  `avatar_pict` varchar(64) NOT NULL DEFAULT 'undraw_profile.svg',
  `address` varchar(255) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `full_name`, `avatar_pict`, `address`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'habib@gmail.com', 'habib', NULL, 'undraw_profile.svg', NULL, '$2y$10$xzQspVHG7.i8l/CS4VDP0uHYbUvgh6q6DvRry7u5ID1siqvFoDHkq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-11-28 23:42:56', '2021-11-28 23:42:56', NULL),
(6, 'bian@gnail.com', 'bian', NULL, 'undraw_profile.svg', NULL, '$2y$10$1P1Yi5UZ2TJ43re4Qg3o6.L9auK7ZFzIkrw3/VPVcjek0afKwSVcq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-11-28 23:49:07', '2021-11-28 23:49:07', NULL),
(7, 'jnnj@jlk.com', 'jnjnj', NULL, 'undraw_profile.svg', NULL, '$2y$10$sWNYRy//V4CtWsumEiQLg.yjy0Lh18TfxzD5YS/CjBf8UJwL0JSjm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-11-29 08:23:07', '2021-11-29 08:23:07', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id_device`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftar_baru`
--
ALTER TABLE `pendaftar_baru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `device`
--
ALTER TABLE `device`
  MODIFY `id_device` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pendaftar_baru`
--
ALTER TABLE `pendaftar_baru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
