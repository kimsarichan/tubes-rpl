      <section id="main-content">
          <section class="wrapper">
            <h1>Input Ruangan</h1>
            <div class="row mt">
              <div class="col-lg-8">
                  <div class="form-panel">
                    <form class="form-horizontal style-form" method="post" action="proses/p_input_pasien.php">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Ruangan</label>
                              <div class="col-sm-10">
                                  <input type="nama" class="form-control" name="no_ruangan">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Nama Ruangan </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nama_ruangan">
                              </div>
                              <br><br><br>
                               <label class="col-sm-2 col-sm-2 control-label">Kapasitas</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="kapasitas">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Kepala Ruangan</label>
                              <div class="col-sm-10">
                                <select class="form-control" name="jk">
                                    <option value="" >Perawat A</option>
                                    <option value="">Perawat B</option>
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