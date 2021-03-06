      <section id="main-content">
          <section class="wrapper">
            <h1>Input Pasien</h1>
            <?php
              if(isset($_GET['status'])){
                if($_GET['status']=="success"){
                  echo "Pasien berhasil diinput";
                }elseif ($_GET['status']=="failed") {
                  echo "Pasien gagal diinputkan";
                }elseif ($_GET['status']=="nodata") {
                  echo "Semua form harus diisi";
                }elseif ($_GET['status']=="negativeumur") {
                  echo "Umur tidak boleh kurang dari 0";
                }elseif ($_GET['status']=="namaless3") {
                  echo "Nama minimal harus lebih dari 3 karakter";
                }elseif ($_GET['status']=="namaforbidden") {
                  echo "nama tidak boleh mengandung angka ";
                }elseif ($_GET['status']=="noint") {
                  echo "Umur harus berupa angka";
                }
              }
            ?>
            <div class="row mt">
              <div class="col-lg-8">
                  <div class="form-panel">
                    <form class="form-horizontal style-form" method="post" action="proses/p_input_pasien.php">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input type="nama" class="form-control" name="nama">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Umur </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="umur">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                              <div class="col-sm-10">
                                <select class="form-control" name="jk">
                                    <option value="l" >Laki Laki</option>
                                    <option value="p">Perempuan</option>
                                </select>
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Diagnosis</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="diagnosis">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Ruangan</label>
                              <div class="col-sm-10">
                                   <select class="form-control" name="noruangan">
                                    <?php
                                      include "../koneksi.php";
                                      $select=mysql_query("select noRuang, namaRuang from ruang where kapasitas > 0 ");
                                      while($data=mysql_fetch_array($select)){
                                            echo "<option value='$data[0]' >$data[1]</option>";
                                      }
                                    ?>
                                </select>
                              </div>
                          </div>
                          <button type="submit" class="btn btn-theme05 " style = "width :150px">Apply</button>
                    </form>
                    
                  </div>

              </div>
            </div>

          </div>
          </section>
      </section>
      <!--main content end-->