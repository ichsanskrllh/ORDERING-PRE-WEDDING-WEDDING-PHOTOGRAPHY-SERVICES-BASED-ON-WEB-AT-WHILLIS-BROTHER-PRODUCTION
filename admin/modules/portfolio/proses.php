<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../../config/database.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk insert, update, dan delete
else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['save'])) {
            // ambil data hasil submit dari form
            $judul              = mysqli_real_escape_string($mysqli, trim($_POST['judul']));
            
            $nama_file          = $_FILES['foto']['name'];
            $ukuran_file        = $_FILES['foto']['size'];
            $tipe_file          = $_FILES['foto']['type'];
            $tmp_file           = $_FILES['foto']['tmp_name'];
            
            // tentuka extension yang diperbolehkan
            $allowed_extensions = array('jpg','jpeg','png');
            
            // Set path folder tempat menyimpan fotonya
            $path               = "../../../images/portfolio/".$nama_file;
            
            // check extension
            $file               = explode(".", $nama_file);
            $extension          = array_pop($file);

            // Cek apakah tipe file yang diupload sesuai dengan allowed_extensions
            if(in_array($extension, $allowed_extensions)) {
                // Jika tipe file yang diupload sesuai dengan allowed_extensions, lakukan :
                if($ukuran_file <= 1000000) { // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
                    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
                    // Proses upload
                    if(move_uploaded_file($tmp_file, $path)) { // Cek apakah foto berhasil diupload atau tidak
                        // Jika foto berhasil diupload, Lakukan : 
                        // perintah query untuk menyimpan data ke tabel portfolio
                        $query = mysqli_query($mysqli, "INSERT INTO tb_portofolio(judul,foto)
                                                        VALUES('$judul','$nama_file')")
                                                        or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    

                        // cek query
                        if ($query) {
                            // jika berhasil tampilkan pesan berhasil simpan data
                            header("location: ../../main.php?module=portfolio&alert=1");
                        }   
                    } else {
                        // Jika foto gagal diupload, tampilkan pesan gagal upload
                        header("location: ../../main.php?module=portfolio&alert=4");
                    }
                } else {
                    // Jika ukuran file lebih dari 1MB, tampilkan pesan gagal upload
                    header("location: ../../main.php?module=portfolio&alert=5");
                }
            } else {
                // Jika tipe file yang diupload bukan JPG / JPEG / PNG, tampilkan pesan gagal upload
                header("location: ../../main.php?module=portfolio&alert=6");
            }  
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['save'])) {
            if (isset($_POST['id_portofolio'])) {
                // ambil data hasil submit dari form
                $id_portofolio       = mysqli_real_escape_string($mysqli, trim($_POST['id_portofolio']));
                $judul              = mysqli_real_escape_string($mysqli, trim($_POST['judul']));
                
                $nama_file          = $_FILES['foto']['name'];
                $ukuran_file        = $_FILES['foto']['size'];
                $tipe_file          = $_FILES['foto']['type'];
                $tmp_file           = $_FILES['foto']['tmp_name'];
                
                // tentuka extension yang diperbolehkan
                $allowed_extensions = array('jpg','jpeg','png');
                
                // Set path folder tempat menyimpan fotonya
                $path               = "../../../images/portfolio/".$nama_file;
                
                // check extension
                $file               = explode(".", $nama_file);
                $extension          = array_pop($file);

                // jika foto tidak diubah
                if (empty($nama_file)) {
                    // perintah query untuk mengubah data pada tabel portfolio
                    $query = mysqli_query($mysqli, "UPDATE tb_portofolio SET judul        = '$judul'
                                                                      WHERE id_portofolio = '$id_portofolio'")
                                                    or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

                    // cek query
                    if ($query) {
                        // jika berhasil tampilkan pesan berhasil update data
                        header("location: ../../main.php?module=portfolio&alert=2");
                    } 
                }
                // jika foto diubah
                else {
                    // Cek apakah tipe file yang diupload sesuai dengan allowed_extensions
                    if(in_array($extension, $allowed_extensions)) {
                        // Jika tipe file yang diupload sesuai dengan allowed_extensions, lakukan :
                        if($ukuran_file <= 1000000) { // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
                            // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
                            // Proses upload
                            if(move_uploaded_file($tmp_file, $path)) { // Cek apakah foto berhasil diupload atau tidak
                                // Jika foto berhasil diupload, Lakukan : 
                                // perintah query untuk mengubah data pada tabel portfolio
                                $query = mysqli_query($mysqli, "UPDATE tb_portofolio SET judul        = '$judul',
                                                                                        foto        = '$nama_file'
                                                                                  WHERE id_portofolio = '$id_portofolio'")
                                                                or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

                                // cek query
                                if ($query) {
                                    // jika berhasil tampilkan pesan berhasil update data
                                    header("location: ../../main.php?module=portfolio&alert=2");
                                }
                            } else {
                                // Jika foto gagal diupload, tampilkan pesan gagal upload
                                header("location: ../../main.php?module=portfolio&alert=4");
                            }
                        } else {
                            // Jika ukuran file lebih dari 1MB, tampilkan pesan gagal upload
                            header("location: ../../main.php?module=portfolio&alert=5");
                        }
                    } else {
                        // Jika tipe file yang diupload bukan JPG / JPEG / PNG, tampilkan pesan gagal upload
                        header("location: ../../main.php?module=portfolio&alert=6");
                    } 
                }      
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $id_portofolio = $_GET['id'];
    
            // perintah query untuk menghapus data pada tabel portfolio
            $query = mysqli_query($mysqli, "DELETE FROM tb_portofolio WHERE id_portofolio='$id_portofolio'")
                                            or die('Ada kesalahan pada query delete : '.mysqli_error($mysqli));

            // cek hasil query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil delete data
                header("location: ../../main.php?module=portfolio&alert=3");
            }
        }
    }       
}       
?>