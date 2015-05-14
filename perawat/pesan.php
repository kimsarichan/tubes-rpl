	<section id="main-content">
          <section class="wrapper">
	<!-- INPUT MESSAGES -->
          	<div class="row mt">
          		<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Kirim Pesan</h4>
						<hr>
            <?php
            if(isset($_GET['status'])){
              if($_GET['status']=="success"){
                echo "Pesan berhasil terkirim";
              }else if ($_GET['status']=="failed"){
                echo "Pesan gagal terkirim";
              }
            }
            ?>
            <form method="post" action="proses/p_pesan.php">
            <?php
              include "../koneksi.php";
              $selectAdmin=mysql_query("select nip from perawat where otoritas='admin' LIMIT 1");
              $selectKepala=mysql_query("select kepalaruang from ruang where noruang=(select noRuang from perawat where nip='$_SESSION[nip]' LIMIT 1) LIMIT 1 ");
              $dataadmin=mysql_fetch_array($selectAdmin);
              $datakepala=mysql_fetch_array($selectKepala);
            ?>
						<label class="checkbox-inline">
						  <input type="checkbox" id="inlineCheckbox1" name="admin" value="<?php echo $dataadmin[0] ?>"> Admin
						</label>
						<label class="checkbox-inline">
						  <input type="checkbox" id="inlineCheckbox2" name="kepalaRuang" value="<?php echo $datakepala[0] ?>" <?php  if(mysql_num_rows($selectKepala)<1){echo "disabled";} ?> > Kepala Ruangan
						</label>
						<br><br>
                          <textarea type="text" class="form-control " name="pesan" rows="5"></textarea>
                          <br>
                          <button type="submit" class="btn btn-theme05 " style = "width :150px">Send</button>
            </form>
          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
          		
          	</div><!-- /row -->
          </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
          	