<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../../config/database.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk update dan delete
else {
    if ($_GET['act']=='update_status') {
        if (isset($_GET['id'])) {
            // ambil data hasil submit dari form
            $id_pesan = mysqli_real_escape_string($mysqli, trim($_GET['id']));
            $status     = "y";

            // perintah query untuk mengubah data pada tabel pesan
            $query = mysqli_query($mysqli, "UPDATE tb_pesan SET status     = '$status'
                                                            WHERE id_pesan = '$id_pesan'")
                                            or die('Ada kesalahan pada query update status : '.mysqli_error($mysqli));
            
            // cek query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil update data
                header("location: ../../main.php?module=form_message&form=detail&id=$id_pesan");
            }       
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $id_pesan = $_GET['id'];
    
            // perintah query untuk menghapus data pada tabel pesan
            $query = mysqli_query($mysqli, "DELETE FROM tb_pesan WHERE id_pesan='$id_pesan'")
                                            or die('Ada kesalahan pada query delete : '.mysqli_error($mysqli));

            // cek hasil query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil delete data
                header("location: ../../main.php?module=message&alert=1");
            }
        }
    }       
}       
?>