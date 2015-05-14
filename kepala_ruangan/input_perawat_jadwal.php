<section id="main-content" style="height:800px" onload="doOnLoad();">
<section class="wrapper">
  <h1>Input Jadwal</h1>
   <?php
            if(isset($_GET['status'])){
                if($_GET['status']=="success"){
                    echo "Input jadwal berhasil";
                }else if($_GET['status']=="failed"){
                    echo "INput jadwal gagal";
                }
            }
        ?>
  <div class="row mt">
    <div class="col-lg-8">
        <div class="form-panel">
          <form class="form-horizontal style-form" method="post" action="proses/p_jadwal.php">
                <div class="form-group">
                    <?php
                        include "../koneksi.php";
                        $jam=str_replace("%3A", ":", $_GET['jam']);
                        $tanggal=$_GET['tanggal']." ".$jam;
                        echo "<input type='hidden' name='tanggal' value='$tanggal'>";
                        $select=mysql_query("select nip,nama from perawat where otoritas<>'admin' and otoritas<>'kepalaRuang' and noRuang=(select noruang from ruang where kepalaRuang='$_SESSION[nip]' LIMIT 1)");
                        echo "<select id='combo' name='perawat' style='width:230px;'>";
                        $count=0;
                        while($data=mysql_fetch_array($select)){
                            $select2=mysql_query("select nip from jadwal where tanggalJam='$tanggal'");
                            $cek=true;
                            while ($data2=mysql_fetch_array($select2)){
                                if($data2[0]==$data[0]){
                                  $cek=false;
                                }
                            }
                            if($cek){
                              echo "<option value='$data[0]'>$data[nama]</option>";
                              $count++;
                            }
                        }
                        echo "</select>";
                        echo "</div>";
                        if($count<=0){
                          echo "Tidak ada jadwal perawat yang kosong pada $tanggal";
                          $root=explode("/",$_SERVER['PHP_SELF']);
                          $base_url=$_SERVER['HTTP_HOST']."/".$root[1]."/".$root[2];
                          echo "<a href='http://$base_url/index.php?pages=input_jadwal'>Kembali</a>";

                        }else{
                            echo "<button type='submit' class='btn btn-theme05' style = 'width :150px'>Lanjutkan</button>";
                        }
                    ?>
                
                
          </form>
          
        </div>

    </div>
  </div>

</div>



    </section>
</section>