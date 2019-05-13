-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 Mei 2019 pada 06.55
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unima`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_ad` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `name_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_ad`, `username`, `pass`, `name_lengkap`) VALUES
(1, 'adminika', 'admin12345', 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(3) UNSIGNED NOT NULL DEFAULT '0',
  `judul` varchar(100) NOT NULL DEFAULT '',
  `headline` text NOT NULL,
  `isi` text NOT NULL,
  `pengirim` varchar(15) NOT NULL DEFAULT '',
  `picture` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul`, `headline`, `isi`, `pengirim`, `picture`, `tanggal`, `hits`) VALUES
(1, 2, 'Linux Fact Screen', 'Membuat Langsung Distro Linux', 'LFS digunakan dimana torang boleh mau belajar caranya membuat sistem operasi sendiri dan lain - lain bisa dicari di Google ', 'Dion Montolalu', '', '2016-02-16', 0),
(2, 1, 'Programming C++', 'Dasar C++', 'Perintah include pada header C++ digunakan untuk memanggil library-library yang akan digunakan saat kita melakukan pemrograman C++ . jadi perintah include adalah salah satu yang paling penting dalam Programing C++   ', 'Dion Montolalu', '', '2016-02-16', 0),
(3, 2, 'Programming C++', 'Dasar C++', '<p>C++ adalah Bahasa Pemrograman yang dikembangkan oleh Bjarne Stroshup , bahasa ini menggunakan C Programming sebagai dasar dari bahasa pemrogramannya . Perbedaan besar antara C dan C++ adalah karena bahasa ini sudah mendukung OOP (Object Oriented Programming) , sedangkan C tidak dimana bahasa pemrograman itu masih menggunakan Procedural sebagai dasar utama untuk pembuatan suatu program skala besar.</p>', 'Dion Montolalu', '', '2016-04-19', 0),
(4, 2, 'Pemrograman WEB dengan PHP', 'Bahasa yang sering digunakan programmer untuk membuat suatu web yang dinamis', 'PHP adalah Bahasa Pemrograman yang bersifat Server Side\r\n\r\nPhp dibuat oleh seorang programmer asal swedia .', 'Dion Montolalu', '', '2016-09-11', 0),
(5, 2, 'Budi', 'Budi instal linux', '<p>&nbsp;</p>\r\n<p><img src=\"/e-commerce/ika_admin/kedok_ika//source/12661760_10208553057730160_3232856172857401268_n.jpg\" alt=\"\" width=\"503\" height=\"500\" /></p>\r\n<p>ddddddddddddddddddddddddddddddddddddd</p>', 'Dion Montolalu', '', '2016-09-12', 1),
(6, 2, 'PHP', 'Server Side', '<p>PHPHPHPHPHPHPHPHP</p>', 'Dion Montolalu', 'pend.png', '2016-09-21', 13),
(7, 2, 'UNIMA', 'Salah satu universitas negeri di manado', '<p>UNIMA atau Universitas Samratulangi adalah salah satu universitas negeri yang ada di Sulawesi Utara selain Universitas Negeri Manado</p>', 'Dion Montolalu', '5.png', '2016-09-27', 28),
(8, 2, 'Universitas Negeri Manado', 'Salah satu fakultas yang diunggulkan', '<h5 style=\"text-align: justify;\">&nbsp;</h5>\r\n<p><img style=\"float: left;\" src=\"/e-commerce/ika_admin/kedok_ika//source/12661760_10208553057730160_3232856172857401268_n.jpg\" alt=\"\" width=\"503\" height=\"500\" /></p>', 'Dion Montolalu', '4.png', '2016-09-30', 17),
(9, 2, 'Fakultas Teknik UNIMA', 'Tentang Fakultas Teknik', '<p>Fakultas Teknik Universitas negeri manado</p>', 'Administrator', '8.png', '2016-10-16', 35);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ika`
--

CREATE TABLE `ika` (
  `id_ika` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ika`
--

INSERT INTO `ika` (`id_ika`, `judul`, `isi`) VALUES
(1, 'Penulisan Tesis', 'Belum di-isi'),
(2, 'Bakti Sosial', '<p>Belum di-isi Bakti Sosial</p>'),
(3, 'Sarana & Prasarana', 'Belum di-isi'),
(4, 'Kerja Sama', 'Belum di-isi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(30) DEFAULT '',
  `deskripsi` varchar(200) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`, `deskripsi`) VALUES
(1, 'Tutorial', 'Berisis tentang tutorial-tutorial tentang pemrograman dan basis data-data'),
(2, 'Artikel', 'Berisi tentang berita-berita terbaru dari teknologi informasi yang lagi tren saat ini .'),
(3, 'Kampus', 'berisi tentang informasi yang ada di kampus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `judul`, `isi`) VALUES
(1, 'Alumni', 'Belum di-isi'),
(2, 'Prestasi PPDS', 'Belum di-isi'),
(3, 'Rumah Sakit Jejaring', 'Belum di-isi'),
(4, 'Simposium', 'Belum di-isi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_peng` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_peng`, `judul`, `isi`, `date`, `time`) VALUES
(1, 'Kegiatan kerja bakti di kampus', 'Kepada segenap civitas akademik Bagian anak, diberitahukan masih dalam rangka kegiatan 17an maka akan dilakukan kegiatan bersih-bersih kampus.', '2016-10-02', '04:41:59'),
(2, 'Pengumpulan KRS Online', 'Dalam rangka finalisasi data di tingkat fakultas maka kami minta dengan hormat bagi para mahasiswa dapat bekerjama dengan mengumpulkan KRS masing-masing ke bagian akademik.', '2016-10-03', '17:52:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppds`
--

CREATE TABLE `ppds` (
  `id_pds` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppds`
--

INSERT INTO `ppds` (`id_pds`, `judul`, `isi`) VALUES
(1, 'Tata Cara Pendaftaran', '<p>Belum di-isi</p>'),
(2, 'Syarat Pendaftaran', 'Belum di-isi'),
(3, 'Tahap Penerimaan', 'Belum di-isi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_vm` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_vm`, `judul`, `isi`) VALUES
(1, 'Visi dan Misi & Tujuan', '<h3 style=\"text-align: center;\">VISI</h3>\r\n<p style=\"text-align: center;\">belum di-isi</p>\r\n<p>&nbsp;</p>\r\n<h3 style=\"text-align: center;\">MISI</h3>\r\n<p style=\"text-align: center;\">belum di-isi</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<h3 style=\"text-align: center;\">TUJUAN</h3>\r\n<p style=\"text-align: center;\">belum di-isi</p>'),
(2, 'Struktur Organisasi', '<p>LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sambutan`
--

CREATE TABLE `sambutan` (
  `id` int(11) NOT NULL,
  `oleh` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sambutan`
--

INSERT INTO `sambutan` (`id`, `oleh`, `isi`, `picture`) VALUES
(1, 'Oleh Rektor Unima', 'Untuk tercapai semuanya itu maka perlu dilakukan berbagai macam peningkatan, salah satunya dengan adanya portal web ini. Dengan adanya portal web ini diharapkan dapat lebih meningkatkan mutu pendidikan di Kampus ini, karena lewat portal ini: pelayanan kepada Mahasiswa dapat lebih efisien, baik itu penyampaian informasi dan sebagai sarana komunikasi.', 'ricky.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `UserID` int(25) NOT NULL,
  `Username` varchar(65) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `Entrada` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(100) NOT NULL,
  `online` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visitor`
--

INSERT INTO `visitor` (`id`, `ip`, `tanggal`, `hits`, `online`) VALUES
(1, '::1', '2016-10-24', 0, ''),
(2, '::1', '2016-10-24', 0, ''),
(3, '::1', '2016-10-24', 0, ''),
(4, 'DCM-PC', '2016-10-25', 3, '1477431728');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `ika`
--
ALTER TABLE `ika`
  ADD PRIMARY KEY (`id_ika`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_peng`);

--
-- Indexes for table `ppds`
--
ALTER TABLE `ppds`
  ADD PRIMARY KEY (`id_pds`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_vm`);

--
-- Indexes for table `sambutan`
--
ALTER TABLE `sambutan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ika`
--
ALTER TABLE `ika`
  MODIFY `id_ika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_peng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ppds`
--
ALTER TABLE `ppds`
  MODIFY `id_pds` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_vm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sambutan`
--
ALTER TABLE `sambutan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
