<?php
// Panggil koneksi database.php untuk koneksi database
require_once "../../config/database.php";

if (isset($_POST['kirim'])) {
    // ambil data hasil submit dari form
    $nama    = mysqli_real_escape_string($mysqli, trim($_POST['nama']));
    $email   = mysqli_real_escape_string($mysqli, trim($_POST['email']));
    $pesan = mysqli_real_escape_string($mysqli, trim($_POST['pesan']));

    // perintah query untuk menyimpan data ke tabel pesan
    $query = mysqli_query($mysqli, "INSERT INTO tb_pesan(nama,email,pesan)
                                    VALUES('$nama','$email','$pesan')")
                                    or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    

    // cek query
    if ($query) {
        // jika berhasil tampilkan pesan berhasil simpan data
        header("location: ../../contact-success");
    }   
}   
?>