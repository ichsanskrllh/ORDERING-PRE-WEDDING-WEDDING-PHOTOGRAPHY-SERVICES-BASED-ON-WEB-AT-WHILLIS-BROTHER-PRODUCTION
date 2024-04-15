<?php
/* panggil file database.php untuk koneksi ke database */
require_once "config/database.php";
/* panggil fungsi untuk format tanggal */
require_once "config/fungsi_tanggal.php";

// fungsi untuk pemanggilan file halaman konten
// jika halaman konten yang dipilih beranda, panggil file view home
if ($_GET['page'] == 'home') {
	include "pages/home/view.php";
}

// jika halaman konten yang dipilih tentang kami, panggil file view about
if ($_GET['page'] == 'about') {
	include "pages/about/view.php";
}

// jika halaman konten yang dipilih jasa & layanan, panggil file view service
if ($_GET['page'] == 'service') {
	include "pages/service/view.php";
}

// jika halaman konten yang dipilih portofolio, panggil file view portfolio
if ($_GET['page'] == 'portfolio') {
	include "pages/portfolio/view.php";
}

// jika halaman konten yang dipilih kontak, panggil file view contact
if ($_GET['page'] == 'contact') {
	include "pages/contact/view.php";
}
?>