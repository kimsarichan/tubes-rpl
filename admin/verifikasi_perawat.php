<section id="portfolio"  style="height:800px">
      <section class="wrapper">
          <div class="col-lg-12">  
            <br><br><br>
                      <form class="form-inline" role="form" method="get"  action="<?php echo $_SERVER['PHP_SELF']?>">
                           <div class="form-group">
                              <input type="hidden" name="pages" value="verifikasi_perawat">
                              <input type="text" name="nama" class="form-control" id="exampleInputEmail2" placeholder="Masukan nama perawat">
                          </div>
                          <button type="cari" class="btn btn-theme">cari</button>
                      </form>
              </div><!-- /col-lg-12 -->
            <div class="col-lg-12">    
                                   
                      <h4><i class="fa fa-angle-right"></i> Table Perawat </h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Nama Perawat</th>
                                  <th >NIP</th>
                                  <th >Konfirmasi </th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                                include "../koneksi.php";
                                if(isset($_GET['nama'])){
                                $nama=$_GET['nama'];
                                }else{
                                    $nama="";
                                }
                                $select=mysql_query("select*from perawat where status=false and nama like '%$nama%'");
                                $no=1;
                                while($data=mysql_fetch_array($select)){
                                 echo  "<tr>
                                  <td>$no</td>
                                  <td>$data[nama]</td>
                                  <td >$data[NIP]</td>
                                  <td><a href='#tesver' class='portfolio-link' data-toggle='modal'>Verifikasi</a></td>
                              </tr>";   
                              $no++; 
                              }
                              ?>
                              </tbody>
                          </table>
                          <div class="col-lg-4"></div>  
                          </section>
               </div>
            </div>

        </div><!-- /row -->
    <!-- Portfolio Modal 8 -->
    <div class="portfolio-modal modal fade" id="tesever" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>TES</h2>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
