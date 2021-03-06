
      <section id="main-content">
          <section class="wrapper">
            <h1>Edit Data</h1>
            <div class="row mt">
              <div class="col-lg-8">
                  <div class="form-panel">
                    <?php
                      if(isset($_GET['status'])){
                        if($_GET['status']=="success"){
                          echo "Data berhasil diubah";
                        }elseif ($_GET['status']=="failed") {
                          echo "Data gagal diubah";
                        }elseif ($_GET['status']=="nodata") {
                          echo "isi bagian yang nama, tanggal, jenis kelamin,email,notelepon,password";
                        }elseif ($_GET['status']=="notint") {
                          echo "Nomor telepon harus diisi dengan angka";
                        }elseif ($_GET['status']=="namaless3") {
                          echo "Nama minimal harus lebih dari 3 karakter";
                        }elseif ($_GET['status']=="namaforbidden") {
                          echo "nama tidak boleh mengandung angka ";
                        }elseif ($_GET['status']=="alamatless10") {
                          echo "alamat harus diisi lebih dari 10 karakter ";
                        }
                      }

                    ?>
                    <form class="form-horizontal style-form" method="post" action="proses/updatePerawat.php">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input type="nama" class="form-control" name="nama" value="<?php echo $nama; ?>">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">NIP</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nip" disabled value="<?php echo $nip; ?>" >
								  <input type="hidden" name="nip" value="<?php echo $nip ?>">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="jenisKelamin" value="<?php echo $jk ?>">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="tglLahir" value="<?php echo $tglLahir; ?>">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Jabatan</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" disabled value="<?php echo $jabatan; ?>">
                              </div>
							                 <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-10">
                              <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">No Telepon</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo $noTelepon; ?>" name="noTelepon">
                              </div>
                          </div>
						 
						  <input type=submit value="Apply" class="btn btn-theme05">
                    </form>
                    
                  </div>

              </div>
            </div>

          </div>
          </section>
      </section>
      <!--main content end-->