-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2017 at 01:24 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whillis_brother_production`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_tentang_kami`
--

CREATE TABLE `tb_tentang_kami` (
  `id_tentang_kami` int(1) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tentang_kami`
--

INSERT INTO `tb_tentang_kami` (`id_tentang_kami`, `judul`, `isi`) VALUES
(1, 'About Us', '<p><span style="font-family:tahoma,geneva,sans-serif">Whillis Brother Production atau biasa disingkat W.B.P merupakan sebuah badan usaha yang bergerak dalam bidang layanan jasa fotografi dan videografi. Kami sudah memulai usaha ini sejak Januari 2014 serta didukung oleh tim yang profesional dan tentunya berpengalaman dibidangnya masing-masing, dan kami akan terus fokus dalam bidang tersebut. Kami membangun usaha ini tidak semata mata untuk mencari materi dan menyalurkan hobi kami di bidang fotografi saja, tetapi kami juga ingin memberikan karya terbaik untuk para client kami.</span></p>

<p><span style="font-family:tahoma,geneva,sans-serif">Kami menyediakan layanan Dokumentasi fotografi dan videografi mulai dari foto Prewedding dan Wedding, foto keluarga, foto produk, foto wisuda dan lain sebagainya. Salah satu jasa fotografi yang memiliki banyak peminat, yaitu foto prewedding dan wedding. Target konsumennya yaitu pasangan calon pengantin yang akan mengadakan acara pernikahan.</span></p>

<p><span style="font-family:tahoma,geneva,sans-serif">Selain itu, kami juga menyediakan jasa paket photo studio secara door to door dimana client kami bisa mendapatkan jasa layanan photo studio mini dirumah, dengan harga yang terjangkau dan tentunya bisa disesuaikan dengan dana client yang tersedia.</span></p>

<div><span style="font-size:24px"><span style="font-family:tahoma,geneva,sans-serif">Visi</span></span></div>

<div><span style="font-family:tahoma,geneva,sans-serif">Menjadikan Whillis Brother Production sebagai penyedia jasa foto dan video terbaik dalam memberikan pelayanan dan hasil jasa yang berkualitas dengan harga yang cukup terjangkau.</span></div>

<div>&nbsp;</div>

<div><span style="font-size:24px"><span style="font-family:tahoma,geneva,sans-serif">Misi</span></span></div>

<ol>
	<li>Memberikan pelayanan profesional dan solusi yang terbaik untuk semua kalangan.</li>
	<li>Meningkatkan pelayanan secara berkala sesuai perkembangan.</li>
	<li>Memberikan ide yang kreatif dalam pelayanan dan hasil jasa yang berkualitas dengan harga cukup terjangkau.</li>
	<li>Membangun hubungan yang baik dengan client yang didasarkan atas kepercayaan.</li>
	<li>Mementingkan kepuasan client dan menyelesaikan job sesuai dengan permintaan.</li>
</ol>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `tanggal`, `nama`, `email`, `pesan`, `status`) VALUES
(1, '2022-06-07 23:05:09', 'Kang Ikhsan', 'kangikhsan69@gmail.com', 'Sukses Selalu!', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_portofolio`
--

CREATE TABLE `tb_portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_portofolio`
--

INSERT INTO `tb_portofolio` (`id_portofolio`, `judul`, `foto`) VALUES
(1, 'Pernikahan Iwan & Fira, 28 November 2021', '1.jpg'),
(2, 'Momen foto selfie pada pengantin', '2.jpg'),
(3, 'Foto keluarga mempelai Pria', '3.jpg'),
(4, 'Bagian dari tim kami foto dengan pengantin', '4.jpg'),
(5, 'Organ tunggal pernikahan', '5.jpg'),
(6, 'Foto saat seserahan pernikahan', '6.jpg'),
(7, 'Tim dari Whillis Brother Production', '7.jpg'),
(8, 'Foto sebelum pengambilan video', '8.jpg'),
(9, 'Pengambilan video wawancara para tamu undangan', '9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jasa`
--

CREATE TABLE `tb_jasa` (
  `id_jasa` int(1) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jasa`
--

INSERT INTO `tb_jasa` (`id_jasa`, `judul`, `isi`) VALUES
(1, 'Jasa & Layanan', '<p style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Whillis Brother Production salah satu penyedia jasa foto Prewedding, Wedding, dan segala hal yang berkaitan tentang dokumentasi dengan hasil jasa yang berkualitas dan harga yang cukup murah. Abadikan momen pernikahan anda dan kegiatan anda dalam sebuah foto maupun video dengan menggunakan layanan jasa fotografi baik di luar ruangan maupun dalam ruangan atau gedung. <span style="background-color:rgb(255, 255, 255); color:rgb(68, 68, 68)">Untuk wilayah JABODETABEK tim fotografer kami siap datang membantu anda dalam diskusi dan memberikan contoh hasil fotografi yang menarik dan ideal sesuai permintaan anda.</span> <span style="background-color:rgb(255, 255, 255); color:rgb(68, 68, 68)">Tim kami Siap membantu anda dalam mewujudkan impian anda!</span></span></span></p>

<p style="text-align:center"><span style="font-size:24px"><span style="font-family:tahoma,geneva,sans-serif">PAKET PREWEDDING</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><strong>PAKET A Rp 1.000.000,-</strong></span></p>

<ul>
	<li style="text-align:justify"><span style="font-size:14px">Jasa Foto</span></li>
	<li style="text-align:justify"><span style="font-size:14px">1 Buah DVD / Flashdisk Softcopy Foto</span></li>
	<li style="text-align:justify"><span style="font-size:14px">1 Cetak Foto Ukuran 12R + Frame</span></li>
</ul>

<p style="text-align:justify"><strong><span style="font-size:16px">PAKET B Rp 1.500.000,-</span></strong></p>

<ul>
	<li style="text-align:justify"><span style="font-size:14px">Jasa Foto</span></li>
	<li style="text-align:justify"><span style="font-size:14px">1 Buah DVD / Flashdisk Softcopy Foto</span></li>
	<li style="text-align:justify"><span style="font-size:14px">1 Cetak Foto Ukuran 6R</span></li>
	<li style="text-align:justify"><span style="font-size:14px">2 Cetak Foto Ukuran 12R + Frame</span></li>
</ul>

<p style="text-align:justify"><strong><span style="font-size:16px">PAKET C Rp 1.800.000,-</span></strong></p>

<ul>
	<li style="text-align:justify"><span style="font-size:14px">Jasa Foto + Video</span></li>
	<li style="text-align:justify"><span style="font-size:14px">1 Buah DVD / Flashdisk Softcopy Foto</span></li>
	<li style="text-align:justify"><span style="font-size:14px">1 Cetak Foto Ukuran 6R</span></li>
	<li style="text-align:justify"><span style="font-size:14px">1 Cetak Foto Ukuran 12R + Frame</span></li>
	<li style="text-align:justify"><span style="font-size:14px">Video Cinematic Prewedding</span></li>
</ul>

<p style="text-align:center"><span style="font-size:24px"><span style="font-family:tahoma,geneva,sans-serif">PAKET WEDDING</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><strong>PAKET A Rp 1.000.000,-</strong></span></p>

<ul>
	<li style="text-align:justify"><span style="font-size:14px">Jasa Foto</span></li>
	<li style="text-align:justify"><span style="font-size:14px">1 Buah DVD / Flashdisk Softcopy Foto</span></li>
	<li style="text-align:justify"><span style="font-size:16px"><span style="font-size:14px">1 Cetak Foto Ukuran 12R + Frame</span></span></li>
	<li style="text-align:justify"><span style="font-size:16px"><span style="font-size:14px">1 Hari Acara 8 Jam liputan acara</span></span></li>
</ul>

<p style="text-align:justify"><span style="font-size:16px"><strong>PAKET B Rp 2.000.000,-</strong></span></p>

<ul>
	<li style="text-align:justify"><span style="font-size:14px">Jasa Foto</span></li>
	<li style="text-align:justify"><span style="font-size:14px">1 Buah DVD / Flashdisk Softcopy Foto</span></li>
	<li style="text-align:justify"><span style="font-size:16px"><span style="font-size:14px">1 Album Kolase Ukuran 20 x 30 22 Halaman</span></span></li>
	<li style="text-align:justify"><span style="font-size:16px"><span style="font-size:14px">1 Cetak Foto Ukuran 12R + Frame</span></span></li>
	<li style="text-align:justify"><span style="font-size:16px"><span style="font-size:14px">1 Hari Acara 8 Jam liputan</span></span></li>
</ul>

<p style="text-align:justify"><span style="font-size:16px"><strong>PAKET C Rp 3.500.000,-</strong></span></p>

<ul>
	<li style="text-align:justify"><span style="font-size:14px">Jasa Foto + Video</span></li>
	<li style="text-align:justify"><span style="font-size:16px"><span style="font-size:14px">1 Buah DVD / Flashdisk Softcopy </span></span><span style="font-size:16px"><span style="font-size:14px">Foto</span></span></li>
	<li style="text-align:justify"><span style="font-size:14px">1 Buah DVD / Flashdisk Softcopy Video Jadi</span></li>
	<li style="text-align:justify"><span style="font-size:16px"><span style="font-size:14px">1 Album Kolase Ukuran 40 x 30 22 Halaman</span></span></li>
	<li style="text-align:justify"><span style="font-size:16px"><span style="font-size:14px">1 Cetak Foto Ukuran 12R + Frame</span></span></li>
	<li style="text-align:justify"><span style="font-size:16px"><span style="font-size:14px">1 Hari Acara 8 Jam liputan</span></span></li>
	<li style="text-align:justify"><span style="font-size:16px"><span style="font-size:14px">Video Cinematic Wedding</span></span></li>
</ul>

<p style="text-align:justify">&nbsp;</p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">Syarat dan ketentuan pemesanan, sebagai berikut :</span></span></p>

<ol>
	<li style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Maksimal Pemesanan atau booking H-7 (Sebelum Acara)</span></span></li>
	<li style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Hubungi kami melalui kontak yang telah disediakan dan konfirmasi perihal tanggal, lokasi dan jenis paket yang dipilih</span></span></li>
	<li style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">DP awal minimum sebesar 50% dari harga paket yang tersedia, atau booking tanggal sebesar 10%</span></span></li>
	<li style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Pembayaran DP sebelum acara atau H-7 (Sebelum Acara)</span></span></li>
	<li style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Pembayaran bisa cash atau transfer melalui Rekening <strong>CIMB NIAGA 762623211100 a/n Muhamad Nur Ichsan S</strong></span></span></li>
	<li style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Jika client atau pemesan jasa membatalkan acara, maka uang yang sudah dibayar akan dianggap hangus</span></span></li>
	<li style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Zona jarak khusus daerah wilayah JABODETABEK, pemesanan di luar zona jarak maka akan dikenakan biaya transport atau biaya tambahan</span></span></li>
	<li style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Untuk paket foto prewedding outdoor dan Lokasi wisata yang berbayar, semua biaya HTM atau ongkos masuk tempat wisata di tanggung oleh client</span></span></li>
	<li style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Maksimal pengerjaan editing file foto dan video 5 hari kerja</span></span></li>
	<li style="text-align:justify"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Mohon konfirmasikan perihal alamat penerima dan nomor telepon. Setelah itu flashdisk dan frame foto yang telah di cetak akan dikirim dengan tim kami</span></span></li>
</ol>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'ichsan', '0192023a7bbd73250516f069df18b500', 'Muhamad Nur Ichsan Sukrillah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_tentang_kami`
--
ALTER TABLE `tb_tentang_kami`
  ADD PRIMARY KEY (`id_tentang_kami`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `tb_jasa`
--
ALTER TABLE `tb_jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_tentang_kami`
--
ALTER TABLE `tb_tentang_kami`
  MODIFY `id_tentang_kami` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_jasa`
--
ALTER TABLE `tb_jasa`
  MODIFY `id_jasa` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
