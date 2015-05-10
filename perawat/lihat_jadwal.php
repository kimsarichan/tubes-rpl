<section id="main-content" style="height:800px">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Jadwal Perawat</h3>
          <div class="row mt">
            <br>
            <div class="col-lg-12">
                      <div class="content-panel">
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Hari</th>
                                  <th>Tanggal</th>
                                  <th >Jam</th>
                                  <th >Ruangan</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                                include "../koneksi.php";
                                $num_rec_per_page=10;
                                if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
                                $start_from = ($page-1) * $num_rec_per_page; 
                                $select=mysql_query("SELECT DAYNAME(tanggaljam) as hari, date_format(tanggaljam, '%e-%M-%Y') as tanggal, date_format(tanggaljam,'%H:%i') as jam, namaruang
                                                    from jadwal join memiliki using (idjadwal)
                                                    join ruang using(noruang)
                                                    where tanggaljam>=NOW() and nip='$_SESSION[nip]' LIMIT $start_from, $num_rec_per_page");
                                $jumlah=mysql_num_rows($select);
                                while($data=mysql_fetch_array($select)){
                                 echo  "<tr>
                                    <td>$data[hari]</td>
                                    <td>$data[tanggal]</td>
                                    <td >$data[jam]</td>
                                    <td >$data[namaruang]</td>
                                  </tr>";
                                }
                              ?>
                              </tbody>
                          </table>
                          <div class="col-lg-4"></div>
                          <?php 
                            $sql = "SELECT DAYNAME(tanggaljam) as hari, date_format(tanggaljam, '%e-%M-%Y') as tanggal, date_format(tanggaljam,'%H:%i') as jam, namaruang
                                    from jadwal join memiliki using (idjadwal)
                                    join ruang using(noruang)
                                    where tanggaljam>=NOW() and nip='$_SESSION[nip]'"; 
                            $rs_result = mysql_query($sql); //run the query
                            $total_records = mysql_num_rows($rs_result);  //count number of records
                            $total_pages = ceil($total_records / $num_rec_per_page); 
                            $url=explode("?",$_SERVER['HTTP_REFERER']);
                            echo "<a href='$url[0]?pages=lihat_jadwal&page=1'>".'First'."</a> "; // Goto 1st page  

                            for ($i=1; $i<=$total_pages; $i++) { 
                              if(!isset($_GET['page'])){
                                echo $i;
                              }else if ($_GET['page']==$i){
                                echo $i;
                              }else{
                                echo "<a href='$url[0]?pages=lihat_jadwal&page=".$i."'>".$i."</a> ";  
                              }
                               
                            }; 
                            echo "<a href='$url[0]?pages=lihat_jadwal&page=$total_pages'>".'Last'."</a> "; // Goto last page
                            ?>
                       
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->

        </div><!-- /row -->
      

    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
