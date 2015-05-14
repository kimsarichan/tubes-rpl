<?php
$query=mysql_query("select * from perawat where nip='".$_GET['nip']."' LIMIT 1");
  $data=mysql_fetch_array($query);
  $nama=$data[1];
  $nip=$data[0];
  $tglLahir=$data[2];
  $jk=$data[3];
  $alamat=$data[4];
  $email=$data['email'];
  $jabatan=$data['jabatan'];
  $noTelepon=$data['noTelepon'];
  $alamat=$data['alamat'];
  $masajabatan=$data['masaJabatan'];
?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h1>Edit Data</h1>
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
                }
              }

            ?>
            <div class="row mt">
              <div class="col-lg-8">
                  <div class="form-panel">
                    <form class="form-horizontal style-form" method="post" action="proses/p_edit_Perawat.php">
                      <input type="hidden" name="nip" value="<?php $nip ?>"> 
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
                                  <input type="text" class="form-control" name="jeniskelamin" value="<?php echo $jk ?>">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="tglLahir" value="<?php echo $tglLahir; ?>">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Jabatan</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="jabatan" value="<?php echo $jabatan; ?>">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Masa Jabatan</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="masaJabatan" value="<?php echo $masajabatan; ?>">
                              </div>
                               <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">otoritas</label>
							                <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">No Telepon</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo $noTelepon; ?>" name="telepon">
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
