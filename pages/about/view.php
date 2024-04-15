<?php
// fungsi query untuk menampilkan data dari tabel profil
$query = mysqli_query($mysqli, "SELECT * FROM tb_tentang_kami WHERE id_tentang_kami='1'")
                                or die('Ada kesalahan pada query tampil data about : '.mysqli_error($mysqli));

$data = mysqli_fetch_assoc($query);
?>
<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <br><br>
                <div style="padding: 0 10px;text-align:justify"> 
                    <p style="margin-bottom:5px;font-size:20px"><?php echo $data['judul']; ?></p>
                    <p><?php echo $data['isi']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
