<section id="main-content" style="height:800px">
      <section class="wrapper">
          <div class="col-lg-12">  
            <br><br><br>
                      <form class="form-inline" role="form" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                           <div class="form-group">
                              <input type="hidden" name="pages" value="lihat_pasien">
                              <input type="text" name="nama" class="form-control" id="exampleInputEmail2" placeholder="Masukan nama pasien">
                          </div>
                          <button type="cari" class="btn btn-theme">cari</button>
                      </form>
              </div><!-- /col-lg-12 -->
            <div class="col-lg-12">    
                                   
                      <h4><i class="fa fa-angle-right"></i> Table Pasien </h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>NO</th>
                                  <th>Nama Pasien</th>
                                  <th >Jenis Kelamin</th>
                                  <th >Umur </th>
                                  <th >Diagnosa</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php include "proses/p_lihat_pasien.php"; ?> 
                              </tbody>
                          </table>
                          <div class="col-lg-4"></div>  
                          </section>
               </div>
            </div>

        </div><!-- /row -->
      

    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
