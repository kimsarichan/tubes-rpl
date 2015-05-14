<section id="main-content" style="height:800px">
      <section class="wrapper">
            <div class="col-lg-12">                     
                      <h4><i class="fa fa-angle-right"></i> Artikel </h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Judul</th>
                                  <th >Lihat</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                                include "../koneksi.php";
                                $url=explode("?",$_SERVER['PHP_SELF']);
                                $select=mysql_query("select*from artikel");
                                $no=1;
                                while($data=mysql_fetch_array($select)){
                                  echo "<tr>
                                      <td>$no</td>
                                      <td>$data[Judul]</td>
                                      <td><a href='$url[0]?pages=detail_artikel&id=$data[0]'>Lihat</a></td>
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
