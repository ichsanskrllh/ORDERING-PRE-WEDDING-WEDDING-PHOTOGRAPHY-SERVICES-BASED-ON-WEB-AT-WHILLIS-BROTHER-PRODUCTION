<br><br>

<div class="row">
    <div class="col-lg-12">
        <h2 style="padding-bottom: 20px" class="page-header center">
            Tentang Kami
        </h2>

        <br>
    </div>
    
    <div class="col-lg-4 profesional center">
        <i class="fa fa-camera"></i>
        <h3>Profesional</h3>
        <p>Mampu memahami konsep di bidang fotografi dengan di dukung tim profesional dan tentunya berpengalaman, serta bisa fokus dan konsisten dalam mengerjakan job yang diberikan.</p>
    </div>

    <div class="col-lg-4 friendly center">
        <i class="fa fa-user"></i>
        <h3>Ramah</h3>
        <p>Memberikan ide yang kreatif dalam pelayanan dan hasil jasa, serta harga dan kualitas produk jasa paket kami jauh lebih murah dan profesional.</p>
    </div>

    <div class="col-lg-4 suitable center">
        <i class="fa fa-cog"></i>
        <h3>Terpercaya</h3>
        <p>Mementingkan kepuasan client dan menyelesaikan job sesuai dengan permintaan dari client.</p>
    </div>
</div>

<br><br>

<div class="row">
    <div class="col-lg-12">
        <h2 style="padding-bottom: 20px" class="page-header center">Jasa & Layanan</h2>
    </div>
    <div class="col-md-4">
        <div class="media">
            <div class="pull-left">
                <span class="fa-stack fa-2x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-angle-right fa-stack-1x fa-inverse"></i>
                </span> 
            </div>
            <div class="media-body">
                <h4 class="media-heading" style="font-size:17px">PAKET A PREWEDDING</h4>
                <p style="font-size:17px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp 1.000.000,- </p>
            </div>
        </div>
        <div class="media">
            <div class="pull-left">
                <span class="fa-stack fa-2x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-angle-right fa-stack-1x fa-inverse"></i>
                </span> 
            </div>
            <div class="media-body">
                <h4 class="media-heading" style="font-size:17px">PAKET A WEDDING</h4>
                <p style="font-size:17px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp 1.000.000,- </p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="media">
            <div class="pull-left">
                <span class="fa-stack fa-2x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-angle-right fa-stack-1x fa-inverse"></i>
                </span> 
            </div>
            <div class="media-body">
                <h4 class="media-heading" style="font-size:17px">PAKET B PREWEDDING</h4>
                <p style="font-size:17px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp 1.500.000,- </p>
            </div>
        </div>
        <div class="media">
            <div class="pull-left">
                <span class="fa-stack fa-2x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-angle-right fa-stack-1x fa-inverse"></i>
                </span> 
            </div>
            <div class="media-body">
                <h4 class="media-heading" style="font-size:17px">PAKET B WEDDING</h4>
                <p style="font-size:17px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp 2.000.000,- </p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="media">
            <div class="pull-left">
                <span class="fa-stack fa-2x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-angle-right fa-stack-1x fa-inverse"></i>
                </span> 
            </div>
            <div class="media-body">
                <h4 class="media-heading" style="font-size:17px">PAKET C PREWEDDING</h4>
                <p style="font-size:17px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp 1.800.000,- </p>
            </div>
        </div>
        <div class="media">
            <div class="pull-left">
                <span class="fa-stack fa-2x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-angle-right fa-stack-1x fa-inverse"></i>
                </span> 
            </div>
            <div class="media-body">
                <h4 class="media-heading" style="font-size:17px">PAKET C WEDDING</h4>
                <p style="font-size:17px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp 3.500.000,- </p>
            </div>
        </div>
    </div>
</div>

<br><br>

<div class="row">
    <div class="col-lg-12">
        <h2 style="padding-bottom: 20px" class="page-header center">
            Portofolio
        </h2>

        <br>
    </div>
    
    <div class="row">
        <?php
        // fungsi query untuk menampilkan data dari tabel portfolio
        $query = mysqli_query($mysqli, "SELECT * FROM tb_portofolio ORDER BY id_portofolio DESC LIMIT 6")
                                        or die('Ada kesalahan pada query tampil portfolio : '.mysqli_error($mysqli));

        while($data = mysqli_fetch_assoc($query)) {
        ?>
            <div class="col-sm-4 col-md-4">
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
        ?>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 center">
            <a style="width:150px" href="portfolio" class="btn btn-primary"> Lihat Semua</a>
        </div>
    </div>
</div>

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
