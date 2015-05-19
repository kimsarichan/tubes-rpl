<section id="main-content" onload="doOnLoad();">
  <section class="wrapper">
    <div class="col-lg-12">  
      <br><br><br>
               
        </div><!-- /col-lg-12 -->
    	<div class="row ">
    		<div class="col-lg-12">
    			<div class="form-panel">
            	  <h4 class="mb"><i class="fa fa-angle-right"></i> Kirim Pesan</h4>
                <?php
                    if(isset($_GET['status'])){
                      if($_GET['status']=="success"){
                        echo "Pesan berhasil terkirim";
                      }else if ($_GET['status']=="failed"){
                        echo "Pesan gagal terkirim";
                      }else if ($_GET['status']=="empty"){
                        echo "Pesan harus diisi";
                      }
                    }
                ?>
                 <form role="form" method="post" action="proses/p_pesan.php">
                     <div class="form-group">
                        <select id="combo" name="perawat" style="width:230px;">
                          <?php
                            $select=mysql_query("select*from perawat where otoritas<>'admin' and otoritas<>'kepalaRuang' and status=1");
                            while($data=mysql_fetch_array($select)){
                              echo "<option value='$data[0]'>$data[nama]</option>";
                            }
                          ?>
                        </select>
                    </div>
                     <textarea type="text" class="form-control " rows="5" name="pesan"></textarea>
                     <br>
                     <button type="submit" class="btn btn-theme05 " style = "width :150px">Send</button>
                </form>                   
    			</div><!-- /form-panel -->
    		</div><!-- /col-lg-12 -->
  		
  	</div><!-- /row -->
  </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
  	