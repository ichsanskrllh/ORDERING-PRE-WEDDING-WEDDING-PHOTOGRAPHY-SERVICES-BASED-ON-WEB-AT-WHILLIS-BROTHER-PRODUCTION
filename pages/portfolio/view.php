<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <?php
            /* Pagination */
            $batas = 9;

            $jumlah_record = mysqli_query($mysqli, "SELECT * FROM tb_portofolio")
                                                    or die('Ada kesalahan pada query jumlah_record: '.mysqli_error($mysqli));

            $jumlah  = mysqli_num_rows($jumlah_record);
            $halaman = ceil($jumlah / $batas);
            $page    = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
            $mulai   = ($page - 1) * $batas;
            /*-------------------------------------------------------------------*/

            // fungsi query untuk menampilkan data dari tabel portfolio
            $query = mysqli_query($mysqli, "SELECT * FROM tb_portofolio ORDER BY id_portofolio DESC LIMIT $mulai, $batas")
                                            or die('Ada kesalahan pada query tampil portfolio : '.mysqli_error($mysqli));

            while($data = mysqli_fetch_assoc($query)) {
            ?>
                <div class="col-sm-4 col-md-4">
                    <br><br>
                    <div class="thumbnail">
                        <a data-toggle="modal" class="open_modal" href="#" data-id="<?php echo $data['id_portofolio']; ?>">
                            <img src="images/portfolio/<?php echo $data['foto']; ?>" alt="Portfolio">
                        </a>
                        <div class="caption">
                            <p><?php echo $data['judul']; ?></p>
                        </div>
                    </div>
                </div>
            <?php  
            }

            if (empty($_GET['hal'])) {
                $halaman_aktif = '1';
            } else {
                $halaman_aktif = $_GET['hal'];
            }
            ?>
            <br/>
            <!-- Pagination -->
            <div class="row text-center">
                <div class="col-lg-12">
                    <ul class="pagination">
                    <!-- Button untuk halaman sebelumnya -->
                    <?php 
                    if ($halaman_aktif<='1') { ?>
                        <li class="disabled"> 
                            <a href="">&laquo;</a>
                        </li>
                    <?php
                    } else { ?>
                        <li> 
                            <a href="page-<?php echo $page -1 ?>">&laquo;</a>
                        </li>
                    <?php
                    }
                    ?>

                    <!-- Link halaman 1 2 3 ... -->
                    <?php 
                    for($x=1; $x<=$halaman; $x++) { ?>
                        <li class="">
                            <a href="page-<?php echo $x ?>"><?php echo $x ?></a>
                        </li>
                    <?php
                    }
                    ?>
                    
                    <!-- Button untuk halaman selanjutnya -->
                    <?php 
                    if ($halaman_aktif>=$halaman) { ?>
                        <li class="disabled">
                            <a href="">&raquo;</a>
                        </li>
                    <?php
                    } else { ?>
                        <li>
                            <a href="page-<?php echo $page +1 ?>">&raquo;</a>
                        </li>
                    <?php
                    }
                    ?>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
</div>
<!-- /.row -->

<div id="modal-form" class="modal" tabindex="-1">

</div>

<script type="text/javascript" src="assets/js/jquery.js"></script>

<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("data-id");
           $.ajax({
                   url: "pages/portfolio/modal.php",
                   type: "GET",
                   data : {id: m,},
                   success: function (ajaxData){
                   $("#modal-form").html(ajaxData);
                   $("#modal-form").modal('show',{backdrop: 'true'});
               }
               });
        });
      });
</script>
