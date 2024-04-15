<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-envelope-o icon-title"></i> Pesan
  </h1>
  <ol class="breadcrumb">
    <li><a href="?module=home"><i class="fa fa-home"></i> Beranda </a></li>
    <li class="active"> Pesan </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

    <?php  
    // fungsi untuk menampilkan pesan
    // jika alert = "" (kosong)
    // tampilkan pesan "" (kosong)
    if (empty($_GET['alert'])) {
      echo "";
    } 
    // jika alert = 1
    // tampilkan pesan Sukses "pesan berhasil dihapus"
    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Berhasil!</h4>
              Pesan berhasil dihapus.
            </div>";
    }
    ?>

      <div class="box box-primary">
        <div class="box-body">
          <!-- tampilan tabel pesan -->
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <!-- tampilan tabel header -->
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Nama</th>
                <th class="center">Email</th>
                <th class="center">Pesan</th>
                <th class="center">Tanggal</th>
                <th class="center">Aksi</th>
              </tr>
            </thead>
            <!-- tampilan tabel body -->
            <tbody>
            <?php  
            $no = 1;
            // fungsi query untuk menampilkan data dari tabel pesan
            $query = mysqli_query($mysqli, "SELECT * FROM tb_pesan ORDER BY id_pesan DESC")
                                            or die('Ada kesalahan pada query tampil data pesan: '.mysqli_error($mysqli));

            // tampilkan data
            while ($data = mysqli_fetch_assoc($query)) { 
              $tgl  = substr($data['tanggal'],0,10);
              $exp  = explode('-',$tgl);
              $tanggal = $exp[2]."-".$exp[1]."-".$exp[0];

              if ($data['status']=='y') {
                $warna = "";
              } else {
                $warna = "#fcf8e3";
              }
              // menampilkan isi tabel dari database ke tabel di aplikasi
              echo "<tr style='background:$warna'>
                      <td width='40' class='center'>$no</td>
                      <td width='150'>$data[nama]</td>
                      <td width='120'>$data[email]</td>
                      <td width='300'>$data[pesan]</td>
                      <td width='80' class='center'>$tanggal</td>
                      <td class='center' width='80'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Detail' style='margin-right:5px' class='btn btn-primary btn-sm' href='modules/message/proses.php?act=update_status&id=$data[id_pesan]'>
                              <i style='color:#fff' class='fa fa-search-plus'></i>
                          </a>";
            ?>
                          <a data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm" href="modules/message/proses.php?act=delete&id=<?php echo $data['id_pesan'];?>" onclick="return confirm('Anda yakin ingin menghapus pesan dari <?php echo $data['nama']; ?> ?');">
                              <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                          </a>
            <?php
              echo "    </div>
                      </td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content