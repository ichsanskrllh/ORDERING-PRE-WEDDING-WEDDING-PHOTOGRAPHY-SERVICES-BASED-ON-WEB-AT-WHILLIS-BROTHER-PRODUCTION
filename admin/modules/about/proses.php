<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../../config/database.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk update
else {
    if (isset($_POST['save'])) {
        if (isset($_POST['id_tentang_kami'])) {
            // ambil data hasil submit dari form
            $id_tentang_kami = mysqli_real_escape_string($mysqli, trim($_POST['id_tentang_kami']));
            $judul    = mysqli_real_escape_string($mysqli, trim($_POST['judul']));
            $isi  = mysqli_real_escape_string($mysqli, trim($_POST['isi']));

            // perintah query untuk mengubah data pada tabel about
            $query = mysqli_query($mysqli, "UPDATE tb_tentang_kami SET judul    = '$judul',
                                                                isi  = '$isi'
                                                          WHERE id_tentang_kami = '$id_tentang_kami'")
                                            or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));
            
            // cek query
            if ($query) {
                // jika berhasil alihkan ke halaman about
                header("location: ../../main.php?module=about");
            }       
        }
    }   
}       
?>