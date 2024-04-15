	<div style="width:650px" class="modal-dialog">
		<div class="modal-content">

			<div class="modal-body">
			<div class="text-right">
				<button type="button" class="btn-close btn-danger" data-dismiss="modal">X</button>
			</div>
			
				<div class="row">
		            <?php
		            require_once "../../config/database.php";

		            $id_portofolio = $_GET['id'];

		            // fungsi query untuk menampilkan data dari tabel portfolio
		            $query = mysqli_query($mysqli, "SELECT * FROM tb_portofolio WHERE id_portofolio='$id_portofolio'")
		                                            or die('Ada kesalahan pada query tampil portfolio : '.mysqli_error($mysqli));

		            $data = mysqli_fetch_assoc($query);
		            ?>
	                <div class="col-sm-12 col-md-12">
	                	<br>
	                    <div class="thumbnail">
	                        <img src="images/portfolio/<?php echo $data['foto']; ?>" alt="Portfolio">
	                        <div class="caption">
	                            <p><?php echo $data['judul']; ?></p>
	                        </div>
	                    </div>
	                </div>
	       		</div>
			</div>	
		</div>
	</div>