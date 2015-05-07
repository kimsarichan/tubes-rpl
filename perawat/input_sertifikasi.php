<section id="main-content">
          <section class="wrapper">
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  <?php
                      if(isset($_GET['status'])){
                          if($_GET['status']=="success"){
                            echo "Data berhasil diubah";
                          }else if ($_GET['status']=="failed"){
                            echo "data gagal diubah";
                          }
                        }else{
                          echo "";
                        }
                  ?>
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Isi form untuk memperbaharui sertifikasi</h4>
                      <form class="form-horizontal style-form" method="POST" enctype="multipart/form-data" action="proses/p_update_sertifikasi.php">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">nama sertifikasi</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">nomor sertifikasi</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="id">
                              </div>
                              <br><br><br>
                            <div class="col-sm-10">
                              <input type="file" class="form-control"  placeholder="" name="sertifikasi">
                            </div>
                            <br><br><br>
                            <div class="col-sm-10">
                            <input type="submit" class="upload btn btn-theme">
                          </div>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
              </section>
  </section>
