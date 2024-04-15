<?php  
// fungsi untuk pengecekan tampilan form
// jika form add data yang dipilih
if ($_GET['form']=='detail') { ?> 
  <!-- tampilan form add data -->
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-envelope-o"></i> Pesan
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Beranda </a></li>
      <li><a href="?module=message"> Pesan </a></li>
      <li class="active"> Detail </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <br>

        <?php
        // fungsi query untuk menampilkan data dari tabel pesan
        $query = mysqli_query($mysqli, "SELECT * FROM tb_pesan WHERE id_pesan='$_GET[id]'")
                                        or die('Ada kesalahan pada query tampil detail pesan: '.mysqli_error($mysqli));

        while ($data = mysqli_fetch_assoc($query)) { 
          $tgl          = substr($data['tanggal'],0,10);
          $exp          = explode('-',$tgl);
          $tanggal         = $exp[2]."-".$exp[1]."-".$exp[0];
          
          $time         = substr($data['tanggal'],11,8);
        ?>
          <ul class="timeline">
            <li>
              <div class="timeline-item">
                <span class="time">
                  <i class="fa fa-clock-o icon-title"></i> <?php echo $tanggal; ?> <?php echo $time; ?>
                </span>
                <h3 class="timeline-header">
                  <a href="javascript:void(0);"> <i class="fa fa-user icon-title"></i> <?php echo $data['nama']; ?></a> (<?php echo $data['email']; ?>)
                </h3>
                <div class="timeline-body"><?php echo $data['pesan']; ?></div>
              </div>
            </li>
          </ul>
        <?php
        }
        ?>

          <a href="?module=message" class="btn btn-default btn-reset">Kembali</a>

      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
?>