-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2020 at 10:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siapweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aplikasi`
--

CREATE TABLE `aplikasi` (
  `id` int(11) NOT NULL,
  `aplikasi` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `sektor` varchar(50) NOT NULL,
  `skpdapp` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL,
  `fungsiapp` varchar(300) DEFAULT NULL,
  `kategoriapp` varchar(100) NOT NULL,
  `pengelola` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aplikasi`
--

INSERT INTO `aplikasi` (`id`, `aplikasi`, `link`, `sektor`, `skpdapp`, `status`, `fungsiapp`, `kategoriapp`, `pengelola`) VALUES
(1, 'Simaya', 'simaya.banjarbarukota.go.id', 'Administrasi dan Manajemen Umum', 'Dinas Komunikasi dan Informatika', 'Aktif', 'Sistem Manajemen Administrasi Perkantoran', 'Penunjang SKPD', 'Pusat'),
(2, 'Electronik Giat Pimpinan (EGP)', '', 'Administrasi dan Manajemen Umum', 'Bagian Humas dan Protokol', 'Tidak Aktif', 'Informasi Kegiatan Pimpinan (Walikota, Wakil Walikota, Sekda dan Pimpinan Lainnya)', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(3, 'Silang Online', 'silang.banjarbarukota.go.id', 'Manajemen Keuangan', 'Bagian Pengadaan Barang dan Jasa', 'Aktif', 'Sistem lelang online', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(4, 'JDIH', 'jdih.banjarbarukota.go.id', 'Administrasi dan Manajemen Umum', 'Bagian Hukum', 'Aktif', 'Data Perwali, Perda, dan Propemperda yang terintegrasi', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(5, 'TEPRA', 'monev.lkpp.go.id', 'Manajemen Keuangan', 'Bagian Pengadaan Barang dan Jasa', 'Aktif', 'Sebagai monitoring dan evaluasi realisasi keuangan yang tercapai', 'Layanan Masyarakat', 'Pusat'),
(6, 'Simpanan', '', 'Sosial', 'Bappeda', 'Tidak Aktif', 'Sistem Informasi Penanggulangan Kemiskinan', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(7, 'Aplikasi Data Statistik', '', 'Statistik', 'Bappeda', 'Tidak Aktif', 'Sistem Informasi Data Statistik Bappeda', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(8, 'E - Musrenbang', '', 'Manajemen Keuangan', 'Bappeda', 'Tidak Aktif', 'Usulan musrenbang secara online', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(9, 'SiLOLA DAK', 'dak.bappeda.banjarbarukota.go.id', 'Manajemen Keuangan', 'Bappeda', 'Aktif', 'Sistem Monitoring dan Evaluasi Pengelolaan Dana Alokasi Khusus', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(10, 'Aplikasi Pengelola Kinerja Keuangan', 'apkk.bappeda.banjarbarukota.go.id', 'Manajemen Keuangan', 'Bappeda', 'Aktif', 'Untuk mengelola kinerja keuangan', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(11, 'SIMDA IP', 'simda-ip.bappeda.banjarbarukota.go.id', 'Pekerjaan Umum dan Penataan Ruang', 'Bappeda', 'Aktif', 'Sistem Informasi Manajemen Database Infrastruktur Permukiman', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(12, 'SIMPEG', 'simpeg.bkpp.banjarbarukota.go.id', 'Manajemen Kepegawaian', 'Badan Kepegawaian Pendidikan dan Pelatihan', 'Aktif', 'Sistem Informasi Manajemen Kepegawaian', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(13, 'SIHARKA', 'siharka.menpan.go.id', 'Manajemen Kepegawaian', 'Inspektorat', 'Aktif', 'Sistem Pelaporan Harta Kekayaan ASN', 'Penunjang SKPD', 'Pusat'),
(14, 'SIMDA Keuangan', '', 'Manajemen Keuangan', 'Badan Pengelola Keuangan dan Aset Daerah', 'Aktif', 'Sistem Informasi Manajemen Keuangan', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(15, 'SIKDA NPD', '', 'Manajemen Keuangan', 'Badan Pengelola Keuangan dan Aset Daerah', 'Aktif', 'Nota Permintaan Dana secara elektronik', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(16, 'SIMDA BMD', '', 'Manajemen Keuangan', 'Badan Pengelola Keuangan dan Aset Daerah', 'Aktif', 'Sistem Informasi Manajemen Aset', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(17, 'PBB P2', '', 'Pelayanan', 'Badan Pengelola Pajak dan Retribusi Daerah', 'Aktif', 'Aplikasi Pelayanan Pembayaran PBB', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(18, 'SIPADA Retribusi', '', 'Pelayanan', 'Badan Pengelola Pajak dan Retribusi Daerah', 'Aktif', 'Aplikasi Pelayanan Pembayaran Retribusi', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(19, 'SISMIOP PBB', '', 'Manajemen Keuangan', 'Badan Pengelola Pajak dan Retribusi Daerah', 'Aktif', 'Sistem Informasi dan Manajemen Objek Pajak', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(20, 'Senayan Management', '', 'Perpustakaan', 'Dinas Arsip dan Perpustakaan Daerah', 'Tidak Aktif', 'Untuk manajemen perpustakaan', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(21, 'INLISLITE', 'inlislite.banjarbarukota.go.id', 'Perpustakaan', 'Dinas Arsip dan Perpustakaan Daerah', 'Aktif', 'Sistem Informasi Perpustakaan Terintegrasi', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(22, 'Infonaker', 'diskopukmnaker.banjarbarukota.go.id/infopasarkerja', 'Administrasi dan Manajemen Umum', 'Dinas Koperasi Usaha Kecil Menengah dan Tenaga Kerja', 'Aktif', 'Informasi Tenaga Kerja', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(23, 'ODS', 'nik.depkop.go.id', 'Koperasi, Usaha Kecil dan Menengah', 'Dinas Koperasi Usaha Kecil Menengah dan Tenaga Kerja', 'Aktif', 'Online Data System Koperasi dan UKM', 'Layanan Masyarakat', 'Pusat'),
(24, 'Si Amin Antar BHK', 'diskopukmnaker.banjarbarukota.go.id/SI-AMIN-ANTAR-BHK', 'Koperasi, Usaha Kecil dan Menengah', 'Dinas Koperasi Usaha Kecil Menengah dan Tenaga Kerja', 'Aktif', 'Sistem Administrasi Layanan Pendaftaran Pengantar Badan Hukum Koperasi', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(25, 'Galeri KUMKM', 'diskopukmnaker.banjarbarukota.go.id/galerikumkmbanjarbaru', 'Koperasi, Usaha Kecil dan Menengah', 'Dinas Koperasi Usaha Kecil Menengah dan Tenaga Kerja', 'Aktif', 'E-Commerce Koperasi dan UMKM Banjarbaru', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(26, 'Database UMKM Banjarbaru', '', 'Koperasi, Usaha Kecil dan Menengah', 'Dinas Koperasi Usaha Kecil Menengah dan Tenaga Kerja', 'Aktif', 'Pengelola Database UMKM Banjarbaru', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(27, 'IUMK', '', 'Koperasi, Usaha Kecil dan Menengah', 'Dinas Koperasi Usaha Kecil Menengah dan Tenaga Kerja', 'Aktif', 'Manajemen Izin Usaha Mikro dan Kecil', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(28, 'Sistem Informasi Kebersihan dan Pertamanan', '', 'Lingkungan Hidup', 'Dinas Lingkungan Hidup', 'Aktif', 'Sistem Informasi Kebersihan dan Pertamanan', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(29, 'DAPODIK', 'dapo.dikdasmen.kemdikbud.go.id', 'Pendidikan', 'Dinas Pendidikan', 'Aktif', 'Sistem pendataan skala nasional yang terpadu dan merupakan sumber data utama pendidikan nasional', 'Penunjang SKPD', 'Pusat'),
(30, 'Cek Data Perekaman E-KTP dan Duplikat', '', 'Administrasi Kependudukan dan Pencatatan Sipil', 'Dinas Kependudukan dan Pencatatan Sipil', 'Aktif', 'Untuk Pengecekan data perekaman E-KTP dan duplikat', 'Layanan Masyarakat', 'Pusat'),
(31, 'SIAK', '', 'Administrasi Kependudukan dan Pencatatan Sipil', 'Dinas Kependudukan dan Pencatatan Sipil', 'Aktif', 'Sistem Informasi Administrasi Kependudukan', 'Layanan Masyarakat', 'Pusat'),
(32, 'Pencetakan Surat Keterangan E-KTP', '', 'Administrasi Kependudukan dan Pencatatan Sipil', 'Dinas Kependudukan dan Pencatatan Sipil', 'Aktif', 'Aplikasi untuk Pencetakan Surat Keterangan E-KTP', 'Layanan Masyarakat', 'Pusat'),
(33, 'Aplikasi Perekaman dan Pencetakan E-KTP', '', 'Administrasi Kependudukan dan Pencatatan Sipil', 'Dinas Kependudukan dan Pencatatan Sipil', 'Aktif', 'Aplikasi untuk Perekaman dan Pencetakan E-KTP', 'Layanan Masyarakat', 'Pusat'),
(34, 'APMENTEL', 'apmentel.banjarbarukota.go.id', 'Pekerjaan Umum dan Penataan Ruang', 'Dinas Komunikasi dan Informatika', 'Aktif', 'Layanan Informasi Menara Telekomunikasi', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(35, 'Kriptosoft', '', 'Persandian', 'Dinas Komunikasi dan Informatika', 'Aktif', 'Mengenkripsi dan Mendeskripsi File yang bersifat rahasia', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(36, 'LAPOR', 'lapor.go.id', 'Pelayanan', 'Dinas Komunikasi dan Informatika', 'Aktif', 'Sistem Pengaduan publik secara online', 'Layanan Masyarakat', 'Pusat'),
(37, 'SIRUP', 'sirup.lkpp.go.id', 'Manajemen Keuangan', 'Dinas Komunikasi dan Informatika', 'Aktif', 'Sistem Informasi Rencana Umum Pengadaan', 'Layanan Masyarakat', 'Pusat'),
(38, 'SPSE', 'lpse.lkpp.go.id/eproc4', 'Manajemen Keuangan', 'Dinas Komunikasi dan Informatika', 'Aktif', 'Sistem Pengadaan Secara Elektronik', 'Layanan Masyarakat', 'Pusat'),
(39, 'Sistem Informasi Infrastruktur Pemukiman', '', 'Pekerjaan Umum dan Penataan Ruang', 'Dinas Perumahan dan Pemukiman', 'Aktif', 'Sistem Informasi Infrastruktur Pemukiman', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(40, 'Sistem Informasi Penerangan Jalan Umum (PJU)', 'dkp.banjarbarukota.go.id', 'Pekerjaan Umum dan Penataan Ruang', 'Dinas Perumahan dan Pemukiman', 'Aktif', 'Sistem Informasi Penerangan Jalan Umum (PJU)', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(41, 'SISTEM INFORMASI DATABASE AKTIVITAS USAHA JASA KONSTRUKSI KOTA BANJARBARU', 'webujk.dispupr.banjarbarukota.go.id', 'Pekerjaan Umum dan Penataan Ruang', 'Dinas Pekerjaan Umum dan Penataan Ruang', 'Aktif', 'Sistem Informasi Pembina Jasa Konstruksi', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(42, 'Sistem Informasi Database Sumber Daya Air', 'sda.dispupr.banjarbarukota.go.id', 'Pekerjaan Umum dan Penataan Ruang', 'Dinas Pekerjaan Umum dan Penataan Ruang', 'Aktif', 'Sistem Informasi Database Sumber Daya Air', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(44, 'Sistem Informasi Pelayanan Informasi Pasar', '', 'Sosial', 'Dinas Ketahanan Pangan, Pertanian dan Perikanan', 'Aktif', 'Sistem Informasi Pelayanan Informasi Pasar', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(45, 'ISIKHNAS', 'www.isikhnas.com', 'Administrasi dan Manajemen Umum', 'Dinas Ketahanan Pangan, Pertanian dan Perikanan', 'Aktif', 'Sistem informasi kesehatan hewan Indonesia', 'Penunjang SKPD', 'Pusat'),
(46, 'SIMLUHTAN', 'app2.pertanian.go.id', 'Administrasi dan Manajemen Umum', 'Dinas Ketahanan Pangan, Pertanian dan Perikanan', 'Aktif', 'Sistem Informasi Manajemen Penyuluh Pertanian', 'Penunjang SKPD', 'Pusat'),
(47, 'MPO', 'mpo.psp.pertanian.go.id', 'Administrasi dan Manajemen Umum', 'Dinas Ketahanan Pangan, Pertanian dan Perikanan', 'Aktif', 'Model Pelaporan Online', 'Penunjang SKPD', 'Pusat'),
(48, 'DIGDOK', 'digdok.kec-landasanulin.banjarbarukota.go.id', 'Administrasi dan Manajemen Umum', 'Kecamatan Landasan Ulin', 'Aktif', 'Digital Dokumen', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(49, 'Garmin', '', 'Pertanahan', 'Kelurahan', 'Aktif', 'Sebagai pemetaan tanah', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(50, 'SiRestu (SITU Online)', 'sirestu.kel-komet.banjarbarukota.go.id', 'Koperasi, Usaha Kecil dan Menengah', 'Kelurahan Komet', 'Aktif', 'Aplikasi Pelayanan SITU', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(51, 'Pesulap', 'pesulap.kel-komet.banjarbarukota.go.id', 'Pelayanan', 'Kelurahan Komet', 'Aktif', 'Aplikasi Pelayanan', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(52, 'SILORA', 'silora.kec-bbs.banjarbarukota.go.id', 'Administrasi dan Manajemen Umum', 'Kecamatan Banjarbaru Selatan', 'Aktif', 'Manajemen Aset', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(53, 'PCare BPJS', 'pcare.bpjs-kesehatan.go.id', 'Kesehatan', 'Puskesmas', 'Aktif', 'Aplikasi Pelayanan BPJS', 'Layanan Masyarakat', 'Pusat'),
(54, 'E - Puskesmas', 'aplikasi-puskesmas.com/banjarbaru/login_puskesmas', 'Kesehatan', 'Puskesmas', 'Aktif', 'Manajemen Pasien Puskesmas', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(55, 'SIM RSUD', 'simrs.rsidaman.banjarbarukota.go.id', 'Kesehatan', 'RS Idaman', 'Aktif', 'Sistem Informasi Manajemen Rumah Sakit', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(56, 'SIGARS', 'sigars.rsidaman.banjarbarukota.go.id', 'Kesehatan', 'RS Idaman', 'Aktif', 'Aplikasi Pelayanan Rumah Sakit', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(57, 'APM', 'pendaftaran.rsidaman.banjarbarukota.go.id', 'Kesehatan', 'RS Idaman', 'Aktif', 'Anjungan Pendaftaran Mandiri', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(58, 'Si Abah', 'siabah-banjarbaru.id', 'Manajemen Keuangan', 'Badan Pengelola Keuangan dan Aset Daerah', 'Aktif', 'Sistem Informasi Bantuan Sosial', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(59, 'Layanan Cloud', 'cloud.banjarbarukota.go.id', 'Administrasi dan Manajemen Umum', 'Dinas Komunikasi dan Informatika', 'Aktif', 'Mengelola File secara online di server Banjarbaru', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(60, 'Info Bapokting', 'infobapokting.banjarbarukota.go.id', 'Sosial', 'Dinas Perdagangan', 'Aktif', 'Sistem Informasi Harga Bahan Pokok dan Barang Penting', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(61, 'Kaya Apa Jar Pian', 'play.google.com/store/apps/details?id=id.co.alim.opini', 'Sosial', 'Dinas Komunikasi dan Informatika', 'Aktif', 'Aplikasi Penjaring Opini Publik', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(62, 'Si Mantap', 'play.google.com/store/apps/details?id=go.id.banjarbarukota.simantap', 'Pekerjaan Umum dan Penataan Ruang', 'Dinas Pekerjaan Umum dan Penataan Ruang', 'Aktif', 'Aplikasi Informasi Tata Ruang Kota Banjarbaru', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(63, 'Intan BJB', 'intanbjb.banjarbarukota.go.id', 'Pelayanan', 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu', 'Aktif', 'Perijinan secara online', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(64, 'Sistem Persediaan', 'persediaan.banjarbarukota.go.id', 'Manajemen Keuangan', 'Badan Pengelola Keuangan dan Aset Daerah', 'Aktif', 'Aplikasi mengelola barang persediaan', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(65, 'BATATA', 'batata.banjarbarukota.go.id', 'Administrasi dan Manajemen Umum', 'Bagian Organisasi', 'Aktif', 'SAKIP online', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(66, 'BAGAWI', 'bagawi.banjarbarukota.go.id', 'Manajemen Kepegawaian', 'Badan Kepegawaian Pendidikan dan Pelatihan', 'Aktif', 'Aplikasi Kinerja Pegawai', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(67, 'STMJ', 'stmj.banjarbarukota.go.id', 'Administrasi dan Manajemen Umum', 'Bagian Organisasi', 'Aktif', 'Sistem terintegrasi yang menampilkan rangkaian informasi menyeluruh tentang sebuah jabatan', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(68, 'SIMDA Pendapatan', '', 'Manajemen Keuangan', 'Badan Pengelola Pajak dan Retribusi Daerah', 'Aktif', 'Sebagai Sistem Pendapatan Daerah Online', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(69, 'E - PBB', '', 'Manajemen Keuangan', 'Badan Pengelola Pajak dan Retribusi Daerah', 'Aktif', 'Aplikasi Manajemen Elektronik Pajak Bumi dan Bangunan', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(70, 'E - BPHTB', '', 'Manajemen Keuangan', 'Badan Pengelola Pajak dan Retribusi Daerah', 'Aktif', 'Aplikasi Sistem Informasi Manajemen Elektronik Bea Perolehan Hak Atas Tanah dan Bangunan', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(71, 'SIJAPTI', '', 'Manajemen Kepegawaian', 'Badan Kepegawaian Pendidikan dan Pelatihan', 'Aktif', 'Sistem Informasi Jabatan Pimpinan Tinggi', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(72, 'SAPA', '', 'Manajemen Kepegawaian', 'Badan Kepegawaian Pendidikan dan Pelatihan', 'Aktif', 'Sistem Administrasi Penempatan Aparatur', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(73, 'E - Planning', 'eplanning.banjarbarukota.go.id/eplanning', 'Manajemen Keuangan', 'Bappeda', 'Aktif', 'Sistem Penganggaran secara Elektronik', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(74, 'E - Budgeting', '', 'Manajemen Keuangan', 'Bappeda', 'Aktif', 'Sebagai bentuk akuntabilitas juga transparansi dari pemerintah (daerah) terkait pengelolaan keuangan', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(76, 'Aplikasi Laporan Kerusakan Jalan', 'play.google.com/store/apps/details?id=com.aplikasi.master.lapor&hl=in', 'Pekerjaan Umum dan Penataan Ruang', 'Dinas Pekerjaan Umum dan Penataan Ruang', 'Aktif', 'Sebagai Sarana Pelaporan Kerusakan Jalan', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(77, 'SI DWI', 'dasawisma.banjarbarukota.go.id', 'Administrasi dan Manajemen Umum', 'Dinas Komunikasi dan Informatika', 'Aktif', 'Sistem Informasi Dasawisma PKK Kota Banjarbaru', 'Penunjang SKPD', 'Pemko Banjarbaru'),
(78, 'iBanjarbaru', 'https://play.google.com/store/apps/details?id=mam.reader.ibanjarbaru&hl=in', 'Perpustakaan', 'Dinas Arsip dan Perpustakaan Daerah', 'Aktif', 'Buku Bacaan Digital', 'Layanan Masyarakat', 'Pemko Banjarbaru'),
(79, 'Idaman', 'https://play.google.com/store/apps/details?id=banjarbarukota.go.id.idaman&hl=in', 'Pelayanan', 'Dinas Komunikasi dan Informatika', 'Aktif', 'Portal Aplikasi Publik Kota Banjarbaru', 'Layanan Masyarakat', 'Pemko Banjarbaru');

-- --------------------------------------------------------

--
-- Table structure for table `tabeladmin`
--

CREATE TABLE `tabeladmin` (
  `id` int(11) NOT NULL,
  `namaadminweb` varchar(50) NOT NULL,
  `nohpadminweb` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabeladmin`
--

INSERT INTO `tabeladmin` (`id`, `namaadminweb`, `nohpadminweb`) VALUES
(1, 'Annisa Chairuswa Narfaulin, S.I.Kom', '085959483007'),
(2, 'Rizki M. Fadillah, SE', '085959483007'),
(3, 'Septiatama Aditya Ismawan, S.Kom', '081212567800'),
(4, 'Muhamad Fauzan, A.Md', '08215620666'),
(5, 'Mapi Wahlidi', '085251736135'),
(6, 'YUNUS  ARIYANDIE.H', '081257578338'),
(7, 'Cecep Sunandar, SE', '081348167708'),
(8, 'Herry Susanto, S.Kom', '085247576160'),
(9, 'Agus Syaulannor, A.Md', '082158942777'),
(10, 'Gt. M. Fakhruriza Rakhman, A.Md', '08125113296'),
(11, 'Nor Amalia, A.Md', '081253199696'),
(12, 'Fitriya Anggeriyani, S.Pd', '082354268191'),
(13, 'Abdi Maulana Ansyarie', '085348223531'),
(14, 'Muhammad Hamdani, S.H.I', '081250015648'),
(15, 'M. Rahmadani, S.Pi', '081349646892'),
(16, 'Muhammad Safwan, A.Md', '081347951385'),
(17, 'Samsul Bahri', '085246098473'),
(18, 'Vony Julianti Kiding, S.Kep, MKM', '085252657311'),
(19, 'FATHURRAHMAN, SE', '085211119261'),
(20, 'Bagus Kurniawan, A.Md', '085651212182'),
(21, 'Riduansyah, A.Md', '081255581460'),
(22, 'Diannisa Damayanti, SE', '081349406578'),
(23, 'Nurul Fajar Yanti, A.Md', '0895335065308'),
(24, 'Ahmad Sopian, S.Kom', '089501646227'),
(25, 'Sutikno, S.Kom', '085348356919'),
(26, 'Muhammad Fahmi Arif, S.Kom', '081351353525'),
(28, 'Risma Wahyudi, A.Md', '08115130912'),
(29, 'Denni Herriadi, S.Kom', '082148024805'),
(30, 'M. Antoni Setiawan, S.AP', '081313229038'),
(32, 'Riski Hormalindiana, SE', '082155881314'),
(34, 'Elly Zahratan Noor, S.Kom', '08125079387'),
(35, 'Elsya Istiqomah, S.Pd', '082351759995'),
(36, 'Hernawan', '0811518711'),
(37, 'HUSNUL KHATIMAH, S.Kom', '082255457419'),
(38, 'Febri Riswandi, S.Kom', '085103555898'),
(39, 'DIAN ASTRI RACHMAWATI, A.Md', '085348411312'),
(40, 'Franciscus Yuli Priyoko', '085251252380'),
(41, 'Eko Purwanto, SE', '085248245733'),
(42, 'Maha Ranny Seftiana', '081351443346'),
(43, 'DWIDJO SUSANTO', '085249440333'),
(44, 'Roby Indrajaya', '081346342944'),
(45, 'FATIYAH RAHMATINA, S.Sos.I, MA', '085249822237'),
(46, 'Habib Haryo Utomo, A. Md', '082254978780'),
(47, 'SURIANI, A.Md', '082255619357'),
(48, 'Hendra', '085294909973'),
(49, 'Muhammad Irsyad, S. Kom', '085105134446'),
(50, 'Maya Yunita, A. Md', '081952920007'),
(51, 'Irwandi Hidayat, S. Kom', '081953809111'),
(52, 'Muhammad Husni Mubaraq, S.Pi', '082153454211'),
(53, 'Rahmat Aji Fajar, A. Md', '081285229117'),
(54, 'HERLINAWATI, SE', '0895346881413'),
(55, 'HIZBUL FAIZIN, A. Md', '082254200054'),
(56, 'Rakhmat Hidayat', '081348812126'),
(57, 'Helmi Yadi, S.Sos', '081349581644'),
(58, 'Muhammad Rizky Handrawan', '0895616787870'),
(59, 'Ahmad Rifai', '085100583422'),
(60, 'Edy Joko Soewanto', '085246080148'),
(61, 'Wahyudiannoor, A. Md', '081349407324'),
(62, 'Rakhmad Hidayat', '082350060580'),
(63, 'Hendra', '085248835828'),
(64, 'Atik Iliawati, SE', '082151109691'),
(65, 'HERIANDI,A.Md', '081381466078'),
(67, 'FAKHRIZAL RUSADI, S.Kom, MM', '085249457366'),
(68, 'HAMMIM RIZQON. R', '0895636639608'),
(69, 'AHMAD RAMADHANI, S.Kom', '082353203806'),
(70, 'REZA RENATHA PERMANA P, SE', '081214145588'),
(71, 'HERI YUWANDI, ST', '081254975999'),
(72, 'MAHMUD SYAKIR, S.Kom', '083824060797'),
(73, 'YUNI HELDAWATI', '0895705126336'),
(74, 'LUTHFIANNOOR, S. Kom', '085348231077'),
(76, 'RAYNHAFIE MAULANA YUDHISTIRA, A.Md', '085251638684'),
(77, 'INDRA DARMAWAN, S.Sos', '0818709642'),
(78, 'MUHAMMAD KHAIRINNIZAR, SP', '081254177917'),
(79, 'M. ANTONY SETIAWAN, S.AP', '082240928423'),
(80, 'RAIHANAH, A.Md', '081245772525'),
(81, 'RYAN ADITYA', '085247071475'),
(82, 'MISLINDAWATI BASTIAH, S.Pt', '081348450289'),
(83, 'NINDYANAWATI, A.Md', '08568109123'),
(84, 'RIDWAN ADIFANSYAH', '085247000810'),
(85, 'RONNY MUCHAMMAD RESTU', '085252528008'),
(86, 'MUHAMMAD NOVI ANTORO, A.Md', '081253907346'),
(87, 'ELLYA OCTAVIANI, SE', '085751234579'),
(88, 'Asma Sira Bawi Laras Lestari, A.Md', '081348884097'),
(89, 'NABILA AULIA RAHMI', '082153035654'),
(90, 'ANITA RUSLINA, SE', '085345186999'),
(91, 'LATIFAH', '081250708196'),
(92, 'SORAYA, SH', '081251233444'),
(93, 'M. Fariz Adani', '082353734363');

-- --------------------------------------------------------

--
-- Table structure for table `tabelemail`
--

CREATE TABLE `tabelemail` (
  `id` int(11) NOT NULL,
  `skpd1` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelemail`
--

INSERT INTO `tabelemail` (`id`, `skpd1`, `email`) VALUES
(6, 'BAPPEDA', 'bappeda@banjarbarukota.go.id'),
(7, 'BPKAD', 'bpkad@banjarbarukota.go.id'),
(8, 'BKPP', 'layanan@bkpp.banjarbarukota.go.id'),
(9, 'BPPRD', 'bpprd@banjarbarukota.go.id'),
(10, 'BAKESBANGPOL', 'kesbangpol@banjarbarukota.go.id'),
(11, 'Badan Penanggulangan Bencana Daerah', 'admin@bpbd.banjarbarukota.go.id'),
(12, 'DPRD', 'dprd@banjarbarukota.go.id'),
(13, 'DISDUKCAPIL', 'admincapil@disdukcapil.banjarbarukota.go.id'),
(14, 'Dinas Perhubungan', 'admin@dishub.banjarbarukota.go.id'),
(15, 'Dinas Kesehatan', 'admin@dinkes.banjarbarukota.go.id'),
(16, 'DPMPTSP', 'dpmptsp@banjarbarukota.go.id'),
(17, 'DISPUPR', 'admin@dispupr.banjarbarukota.go.id'),
(18, 'DISKOMINFO', 'kominfobjb@banjarbarukota.go.id'),
(19, 'DISPORABUDPAR', 'admin@disporabudpar.banjarbarukota.go.id'),
(20, 'Dinas Arsip & Perpustakaan Daerah', 'darpusda@banjarbarukota.go.id'),
(21, 'DISPERKIM', 'admin@disperkim.banjarbarukota.go.id'),
(22, 'DKP3', 'dkp3@banjarbarukota.go.id'),
(23, 'DISDALDUKKBPMPPA', 'disdaldukkbpmppa@banjarbarukota.go.id'),
(24, 'Dinas Perdagangan', 'disdag@banjarbarukota.go.id'),
(25, 'Dinas Pendidikan', 'kepegawaian@disdik.banjarbarukota.go.id'),
(26, 'Dinas Sosial', 'dinsos@banjarbarukota.go.id'),
(27, 'Dinas Lingkungan Hidup', 'admin@dlh.banjarbarukota.go.id'),
(28, 'DISKOPUMKMNAKER', 'admin@diskopukmnaker.banjarbarukota.go.id'),
(29, 'Inspektorat', 'inspektorat@banjarbarukota.go.id'),
(30, 'RS Idaman', 'support@rsidaman.banjarbarukota.go.id'),
(31, 'Satpol PP', 'admin@satpolpp.banjarbarukota.go.id'),
(32, 'Bagian Umum Setdako', 'umum@banjarbarukota.go.id'),
(33, 'Bagian Humas Setdako', 'admin@humas.banjarbarukota.go.id'),
(34, 'Bagian Organisasi Setdako', 'organisasi@banjarbarukota.go.id'),
(35, 'Bagian Pemerintahan Setdako', 'pem@banjarbarukota.go.id'),
(36, 'Bagian Kesejahteraan Rakyat Setdako', 'kesra@banjarbarukota.go.id'),
(37, 'Bagian Ekobang Setdako', 'admin@ekobang.banjarbarukota.go.id'),
(38, 'Bagian Hukum Setdako', 'hukum@banjarbarukota.go.id'),
(39, 'Bagian Pengadaan Barang & Jasa Setdako', 'ulp@banjarbarukota.go.id'),
(40, 'Bagian Kerjasama Keagrariaan Setdako', 'kerjasama-keagrariaan@banjarbarukota.go.id'),
(41, 'Kecamatan Banjarbaru Utara', 'admin@kec-bbu.banjarbarukota.go.id'),
(42, 'Kecamatan Banjarbaru Selatan', 'admin@kec-bbs.banjarbarukota.go.id'),
(43, 'Kecamatan Landasan Ulin', 'admin@kec-landasanulin.banjarbarukota.go.id'),
(44, 'Kecamatan Cempaka', 'admin@kec-cempaka.banjarbarukota.go.id'),
(45, 'Kecamatan Liang Anggang', 'kec-lianganggang@banjarbarukota.go.id'),
(46, 'Kelurahan Komet', 'admin@kel-komet.banjarbarukota.go.id'),
(47, 'Kelurahan Loktabat Utara', 'kel-loktabatutara@banjarbarukota.go.id'),
(48, 'Kelurahan Mentaos', 'admin@kel-mentaos.banjarbarukota.go.id'),
(49, 'Kelurahan Sungai Ulin', 'kel-sungaiulin@banjarbarukota.go.id'),
(50, 'Kelurahan Guntung Paikat', 'admin@kel-gtpaikat.banjarbarukota.go.id'),
(51, 'Kelurahan Kemuning', 'kel-kemuning@banjarbarukota.go.id'),
(52, 'Kelurahan Loktabat Selatan', 'kel-loktabatselatan@banjarbarukota.go.id'),
(53, 'Kelurahan Sungai Besar', 'kel-sungaibesar@banjarbarukota.go.id'),
(54, 'Kelurahan Guntung Payung', 'kel-gtpayung@banjarbarukota.go.id'),
(55, 'Kelurahan Guntung Manggis', 'kel-gtmanggis@banjarbarukota.go.id'),
(56, 'Kelurahan Landasan Ulin Timur', 'kel-landasanulintimur@banjarbarukota.go.id'),
(57, 'Kelurahan Syamsudinnoor', 'admin@kel-syamsudinnoor.banjarbarukota.go.id'),
(58, 'Kelurahan Cempaka', 'kel-cempaka@banjarbarukota.go.id'),
(59, 'Kelurahan Sungai Tiung', 'kel-sungaitiung@banjarbarukota.go.id'),
(60, 'Kelurahan Bangkal', 'kel-bangkal@banjarbarukota.go.id'),
(61, 'Kelurahan Palam', 'admin@kel-palam.banjarbarukota.go.id'),
(62, 'Kelurahan Landasan Ulin Utara', 'pem@kel-landasanulinutara.banjarbarukota.go.id'),
(63, 'Kelurahan Landasan Ulin Selatan', 'kel-landasanulinselatan@banjarbarukota.go.id'),
(64, 'Kelurahan Landasan Ulin Tengah', 'admin08@kel-landasanulintengah.banjarbarukota.go.id'),
(65, 'Kelurahan Landasan Ulin Barat', 'kel-landasanulinbarat@banjarbarukota.go.id');

-- --------------------------------------------------------

--
-- Table structure for table `tabeluser`
--

CREATE TABLE `tabeluser` (
  `id` int(11) NOT NULL,
  `namauser` varchar(50) NOT NULL,
  `passworduser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabeluser`
--

INSERT INTO `tabeluser` (`id`, `namauser`, `passworduser`) VALUES
(1, 'orizrizwanna', '418e8ea31cfd485bb5549d2789d37c04'),
(2, 'febri', '4689c75fd0935ff5818d62fd2083ed98');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `skpd` varchar(150) NOT NULL,
  `lastupdate` text NOT NULL,
  `idadmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `domain`, `skpd`, `lastupdate`, `idadmin`) VALUES
(6, 'bkpp.banjarbarukota.go.id', 'Badan Kepegawaian Pendidikan dan Pelatihan', '', 3),
(7, 'bpprd.banjarbarukota.go.id', 'Badan Pengelola Pajak dan Retribusi Daerah', '', 4),
(8, 'bakesbangpol.banjarbarukota.go.id', 'BAKESBANGPOL', '', 5),
(9, 'bpbd.banjarbarukota.go.id', 'Badan Penanggulangan Bencana Daerah', '', 68),
(10, 'disdukcapil.banjarbarukota.go.id', 'Dinas Kependudukan dan Pencatatan Sipil', '', 69),
(11, 'dishub.banjarbarukota.go.id', 'Dinas Perhubungan', '', 70),
(13, 'dpmptsp.banjarbarukota.go.id', 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu', '', 12),
(14, 'dispupr.banjarbarukota.go.id', 'Dinas Pekerjaan Umum dan Penataan Ruang', '', 71),
(15, 'diskominfo.banjarbarukota.go.id', 'Dinas Komunikasi dan Informatika', '', 11),
(17, 'disporabudpar.banjarbarukota.go.id', 'Dinas Pemuda Olahraga Kebudayaan dan Pariwisata', '', 56),
(18, 'darpusda.banjarbarukota.go.id', 'Dinas Arsip dan Perpustakaan Daerah', '', 72),
(19, 'disperkim.banjarbarukota.go.id', 'Dinas Perumahan dan Permukiman', '', 14),
(20, 'dkp3.banjarbarukota.go.id', 'Dinas Ketahanan Pangan Pertanian dan Perikanan', '', 15),
(21, 'disdaldukkbpmppa.banjarbarukota.go.id', 'Dinas Pengendalian Penduduk Keluarga Berencana Pemberdayaan Masyarakat, Perempuan dan Perlindungan Anak', '', 73),
(22, 'disperindag.banjarbarukota.go.id', 'Dinas Perdagangan', '', 17),
(23, 'dinsos.banjarbarukota.go.id', 'Dinas Sosial', '', 74),
(24, 'disdik.banjarbarukota.go.id', 'Dinas Pendidikan', '', 57),
(25, 'dlh.banjarbarukota.go.id', 'Dinas Lingkungan Hidup', '', 58),
(26, 'diskopukmnaker.banjarbarukota.go.id', 'Dinas Koperasi Usaha Kecil Menengah dan Tenaga Kerja', '', 76),
(27, 'dprd.banjarbarukota.go.id', 'Sekretariat Dewan Perwakilan Rakyat Daerah', '', 77),
(28, 'rsidaman.banjarbarukota.go.id', 'Rumah Sakit Daerah Idaman', '', 93),
(29, 'satpolpp.banjarbarukota.go.id', 'Satuan Polisi Pamong Praja', '', 25),
(30, 'umum.banjarbarukota.go.id', 'Bagian Umum', '', 26),
(31, 'humas.banjarbarukota.go.id', 'Bagian Humas', '', 28),
(32, 'organisasi.banjarbarukota.go.id', 'Bagian Organisasi', '', 29),
(33, 'ekobang.banjarbarukota.go.id', 'Bagian Ekobang', '', 32),
(34, 'jdih.banjarbarukota.go.id', 'Bagian Hukum', '', 92),
(35, 'ulp.banjarbarukota.go.id', 'Bagian Pengadaan Barang dan Jasa', '', 34),
(36, 'kerjasamadankeagrariaan.banjarbarukota.go.id', 'Bagian Kerjasama dan Keagrariaan', '', 35),
(37, 'kec-bbu.banjarbarukota.go.id', 'Kecamatan Banjarbaru Utara', '', 81),
(38, 'kec-bbs.banjarbarukota.go.id', 'Kecamatan Banjarbaru Selatan', '', 36),
(39, 'kec-landasanulin.banjarbarukota.go.id', 'Kecamatan Landsan Ulin', '', 64),
(40, 'kec-cempaka.banjarbarukota.go.id', 'Kecamatan Cempaka', '', 38),
(41, 'kec-lianganggang.banjarbarukota.go.id', 'Kecamatan Liang Anggang', '', 39),
(42, 'kel-komet.banjarbarukota.go.id', 'Kelurahan Komet', '', 40),
(43, 'kel-sungaiulin.banjarbarukota.go.id', 'Kelurahan Sungai Ulin', '', 88),
(44, 'kel-kemuning.banjarbarukota.go.id', 'Kelurahan Kemuning', '', 89),
(45, 'kel-loktabatselatan.banjarbarukota.go.id', 'Kelurahan Loktabat Selatan', '', 43),
(46, 'kel-seibesar.banjarbarukota.go.id', 'Kelurahan Sungai Besar', '', 90),
(47, 'kel-gtpayung.banjarbarukota.go.id', 'Kelurahan Guntung Payung', '', 86),
(48, 'kel-gtmanggis.banjarbarukota.go.id', 'Kelurahan Guntung Manggis', '', 46),
(49, 'kel-syamsudinnoor.banjarbarukota.go.id', 'Kelurahan Syamsudin Noor', '', 85),
(50, 'kel-cempaka.banjarbarukota.go.id', 'Kelurahan Cempaka', '', 61),
(51, 'kelsungaitiung.banjarbarukota.go.id', 'Kelurahan Sungai Tiung', '', 49),
(52, 'kel-bangkal.banjarbarukota.go.id', 'Kelurahan Bangkal', '', 91),
(53, 'kel-palam.banjarbarukota.go.id', 'Kelurahan Palam', '', 51),
(54, 'kel-landasanulinselatan.banjarbarukota.go.id', 'Kelurahan Landasan Ulin Selatan', '', 53),
(55, 'kellandasanulintengah.banjarbarukota.go.id', 'Kelurahan Landasan Ulin Tengah', '', 83),
(56, 'kel-mentaos.banjarbarukota.go.id', 'Kelurahan Mentaos', '', 63),
(57, 'bappeda.banjarbarukota.go.id', 'BAPPEDA', '', 67),
(58, 'kel-landasanulinutara.banjarbarukota.go.id', 'Kelurahan Landasan Ulin Utara', '', 65),
(59, 'dinkes.banjarbarukota.go.id	', 'Dinas Kesehatan', '', 18),
(60, 'bpkad.banjarbarukota.go.id', 'BPKAD', '', 62),
(61, 'inspektorat.banjarbarukota.go.id', 'Inspektorat', '', 78),
(62, 'pemerintahan.banjarbarukota.go.id', 'Bagian Pemerintahan', '', 79),
(63, 'kesra.banjarbarukota.go.id', 'Bagian Kesejahteraan Rakyat', '', 80),
(64, 'kel-landasanulinbarat.banjarbarukota.go.id', 'Kelurahan Landasan Ulin Barat', '', 82),
(65, 'kel-landasanulintimur.banjarbarukota.go.id', 'Kelurahan Landasan Ulin Timur', '', 84),
(66, 'kel-loktabatutara.banjarbarukota.go.id', 'Kelurahan Loktabat Utara', '', 87),
(67, 'kel-guntungpaikat.banjarbarukota.go.id', 'Kelurahan Guntung Paikat', '', 42);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aplikasi`
--
ALTER TABLE `aplikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabeladmin`
--
ALTER TABLE `tabeladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabelemail`
--
ALTER TABLE `tabelemail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabeluser`
--
ALTER TABLE `tabeluser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_AdminWebsite` (`idadmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aplikasi`
--
ALTER TABLE `aplikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tabeladmin`
--
ALTER TABLE `tabeladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `tabelemail`
--
ALTER TABLE `tabelemail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tabeluser`
--
ALTER TABLE `tabeluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `website`
--
ALTER TABLE `website`
  ADD CONSTRAINT `FK_AdminWebsite` FOREIGN KEY (`idadmin`) REFERENCES `tabeladmin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
