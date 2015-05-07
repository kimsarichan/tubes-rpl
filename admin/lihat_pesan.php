<section id="main-content" style="height:800px">
      <section class="wrapper">
          <div class="col-lg-12">  
            <br><br><br>
                      <form class="form-inline" role="form">
                           <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail2">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Masukan nama pasien">
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
                                  <th>No</th>
                                  <th>Nama Pengirim</th>
                                  <th >Pesan</th>
                                  <th >Status</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                                include"../koneksi.php";
                                $select=mysql_query("select p.pesan,p.status,pe.nama from pesan p join perawat pe on (pe.nip=p.nip_pengirim) where nip_penerima='$_SESSION[nip]' order by idPesan desc");
                                $no=1;
                                while($data=mysql_fetch_array($select)){
                                  echo "<tr>
                                  <td>$no</td>
                                  <td>$data[2]</td>
                                  <td >$data[0]</td>
                                  <td >$data[1]</td>
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
      

    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
