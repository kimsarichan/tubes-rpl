<section id="main-content" style="height:800px">
      <section class="wrapper">
            <div class="col-lg-12">    
              <br><br><br>
                      <h4><i class="fa fa-angle-right"></i> Sertifikasi </h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Nama Sertifikasi</th>
                                  <th >Nomor Sertifikasi</th>
                                  <th >Download </th>
                              </tr>
                              </thead>
                              <?php
                                include "../koneksi.php";
                                $no=1;
                                $select=mysql_query("select*from sertifikasi where NIP='$_GET[nip]'");
                                while($data=mysql_fetch_array($select)){
                                  echo "<tr>
                                  <td >$no</td>
                                  <td>$data[2]</td>
                                  <td>$data[1]</td>
                                  <td><a href='../perawat/sertifikasi/$data[1]$_GET[nip].pdf'>Download sertifikasi</a></td>
                                </tr>";
                                $no++;
                                }
                               ?>
                              <tbody>
                              
                          </table>
                          <div class="col-lg-4"></div>  
                          </section>
               </div>
            </div>

        </div>
      

    </section>
</section>
