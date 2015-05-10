<section id="main-content" style="height:800px">
<section class="wrapper">
  <h1>Input Jadwal</h1>
  <div class="row mt">
    <div class="col-lg-8">
        <div class="form-panel">
        <?php
            if(isset($_GET['status'])){
                if($_GET['status']=="success"){
                    echo "Input jadwal berhasil";
                }else if($_GET['status']=="failed"){
                    echo "INput jadwal gagal";
                }
            }
        ?>
          <form class="form-horizontal style-form" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div class="form-group">
                    <input type="hidden" name="pages" value="input_perawat_jadwal" />
                    <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                    <div class="input-group date form_date col-sm-8" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style ="margin-left=50px;">
                        <input class="form-control" size="10" type="text" name="tanggal">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <br>
                    
                    <label class="col-sm-2 col-sm-2 control-label">Shift </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="jam">
                                <option value='09:00:00'>9:00-15:00</option>
                                <option value='15:00:00'>15:00-21:00</option>
                                <option value='21:00:00'>21:00-9:00</option>
                        </select>
                    </div>
                    <br><br><br>
                    <label class="col-sm-2 col-sm-2 control-label">Ruang </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="ruang">
                                <?php
                                    include "../koneksi.php";
                                    $select=mysql_query("select * from ruang where kepalaRuang='$_SESSION[nip]'");
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
