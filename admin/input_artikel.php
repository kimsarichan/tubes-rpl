<section id="main-content">
  <section class="wrapper">
    <div class="col-lg-12">  
      <br><br><br> 
    </div><!-- /col-lg-12 -->
      <div class="row ">
        <div class="col-lg-12">
          <div class="form-panel">
            <?php
              if(isset($_GET['status'])){
                if($_GET['status']=='judulfailed'){
                  echo "Judul harus diisi";
                }elseif($_GET['status']=='isifailed'){
                  echo "Isi artikel harus diisi";
                }elseif($_GET['status']=='failed'){
                  echo "input artikel gagal";
                }elseif($_GET['status']=='success'){
                  echo "input artikel berhasil";
                }
              }
            ?>
                <h4 class="mb"><i class="fa fa-angle-right"></i> Input Artikel</h4>
                 <form role="form" action="proses/p_input_article.php" method="post">
                     <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Masukan  Judul" name="judul">
                    </div>
                     <textarea type="text" class="form-control " rows="20" placeholder="Konten" name="isi"></textarea>
                     <br>
                     <button type="submit" class="btn btn-theme05 " style = "width :150px">Send</button>
                </form>                   
          </div><!-- /form-panel -->
        </div><!-- /col-lg-12 -->
      
    </div><!-- /row -->
  </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
    
