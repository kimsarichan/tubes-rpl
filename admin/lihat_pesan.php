<section id="main-content" style="height:800px">
      <section class="wrapper">
            <div class="col-lg-12">    
                                   
                      <h4><i class="fa fa-angle-right"></i> Pesan </h4>
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
                          </section>
               </div>
            </div>

        </div><!-- /row -->
      

    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
