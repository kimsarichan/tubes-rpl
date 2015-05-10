<section id="main-content" style="height:800px">
      <section class="wrapper">
            <div class="col-lg-12">    
                  <br><br>
                      <h4><i class="fa fa-angle-right"></i> Table Ruangan </h4>
                          <section id="unseen">
                            <?php
                              if(isset($_GET['status'])){
                                if($_GET['status']=="success"){
                                  echo "Data berhasil dihapus";
                                }else if ($_GET['status']=="failed"){
                                  echo "data gagal dihapus";
                                }
                              }else{
                                echo "";
                              }
                            ?>
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>No Ruangan </th>
                                  <th>Nama Ruangan</th>
                                  <th >Kepala Ruangan </th>
                                  <th >Kapasitas </th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                                include "../koneksi.php";
                                $select=mysql_query("select ruang.noRuang,namaRuang,kapasitas,perawat.nama from ruang left outer join perawat on (kepalaRuang=nip)");
                                $url=explode("?",$_SERVER['PHP_SELF']);
                                $url2=str_replace("index.php", "", $url[0]);
                                while($data=mysql_fetch_array($select)){
                                echo "<tr>
                                  <td>$data[0]</td>
                                  <td>$data[1]</td>
                                  <td>$data[3]</td>
                                  <td>$data[2]</td>
                                  <td><a href='http://$_SERVER[HTTP_HOST]$url[0]?pages=input_ruangan&act=edit&num=$data[0]'>Edit</a> | <a href='http://$_SERVER[HTTP_HOST]".$url2."proses/p_delete_ruang.php?no=$data[0]'>Delete</a> | <a href='http://$_SERVER[HTTP_HOST]".$url2."proses/p_kosongkan_ruang.php?ruang=$data[0]'>Kosongkan dari kepala ruang</a></td>
                                  </tr>
                                  ";
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
