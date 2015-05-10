      <section id="main-content">
          <section class="wrapper">
            <h1>Input Ruangan</h1>
            <div class="row mt">
              <div class="col-lg-8">
                  <div class="form-panel">
                    <?php
                      if(isset($_GET['status'])){
                        if($_GET['status']=="exist"){
                          echo "nomer ruangan sudah ada";
                        }elseif($_GET['status']=="namefailed"){
                          echo "Nama harus diisi";
                        }elseif($_GET['status']=="kapasitasfailed"){
                          echo "Kapasitas harus diisi";
                        }elseif($_GET['status']=="numfailed"){
                          echo "Nomor ruangan harus diisi";
                        }elseif($_GET['status']=="success"){
                          echo "Ruangan berhasil dimasukan";
                        }elseif($_GET['status']=="failed"){
                          echo "Ruangan gagal dimasukan";
                        }
                      }
                      if(isset($_GET['act'])){
                        if($_GET['act']=='edit'){
                          $select=mysql_query("select * from ruang where noRuang='$_GET[num]'");
                          $data=mysql_fetch_array($select);
                          $nama="value='$data[1]'";
                          $no="value='$data[0]'";
                          $kapasitas="value='$data[2]'";
                          $link="proses/p_edit_ruang.php";
                          $hidden="<input type='hidden' name='tmpno' value='$data[0]'>";
                        }
                      }else{
                          $hidden="";
                          $nama="";
                          $no="";
                          $kapasitas="";
                          $link="proses/p_input_ruang.php";
                      }
                    ?>
                    <form class="form-horizontal style-form" method="post" action="<?php echo $link ?>">
                          <?php echo $hidden; ?>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Ruangan</label>
                              <div class="col-sm-10">
                                  <input type="nama" class="form-control" name="no_ruangan" <?php echo $no; ?> >
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Nama Ruangan </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nama_ruangan" <?php echo $nama; ?> >
                              </div>
                              <br><br><br>
                               <label class="col-sm-2 col-sm-2 control-label">Kapasitas</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="kapasitas" <?php echo $kapasitas; ?> >
                              </div>
                              <br><br><br>
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