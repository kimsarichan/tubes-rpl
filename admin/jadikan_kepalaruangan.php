<section id="main-content" style="height:800px">
<section class="wrapper">
  <h1>Input Jadwal</h1>
  <div class="row mt">
    <div class="col-lg-8">
        <div class="form-panel">
        <?php
            if(isset($_GET['status'])){
                if($_GET['status']=="success"){
                    echo "Jadikan Kepala Ruangan berhasil";
                }else if($_GET['status']=="failed"){
                    echo "Jadikan Kepala RUangan Gagal";
                }
            }
        ?>
          <form class="form-horizontal style-form" method="POST" action="proses/p_jadikan_kepalaruang.php">
                <div class="form-group">
                    <input type="hidden" name="nip" value="<?php echo $_GET['nip'] ?>" />
                    <label class="col-sm-2 col-sm-2 control-label">Ruang </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="ruang">
                                <?php
                                    include "../koneksi.php";
                                    $select=mysql_query("select * from ruang where kepalaRuang is NULL ");
                                    while($data=mysql_fetch_array($select)){
                                        echo "<option value='$data[0]'>$data[1]</option>";
                                    }
                                ?>
                        </select>
                    </div>
                    <br><br><br>
                </div>
                <button type="submit" class="btn btn-theme05 " style = "width :150px">Lanjutkan</button>
          </form>
        </div>
      </div>
    </div>
    </section>
</section>
