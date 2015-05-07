<section id="main-content"  style="height:800px">
      <section class="wrapper">
          <div class="col-lg-12">  
            <br><br><br>
                      <form class="form-inline" role="form" method="get"  action="<?php echo $_SERVER['PHP_SELF']?>">
                           <div class="form-group">
                              <input type="hidden" name="pages" value="verifikasi_perawat">
                              <input type="text" name="nama" class="form-control" id="exampleInputEmail2" placeholder="Masukan nama perawat">
                          </div>
                          <button type="cari" class="btn btn-theme">cari</button>
                      </form>
              </div><!-- /col-lg-12 -->
            <div class="col-lg-12">    
                                   <p>test</p>
                      <h4><i class="fa fa-angle-right"></i> Table Perawat </h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Nama Perawat</th>
                                  <th >NIP</th>
                                  <th >Konfirmasi </th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                                include "../koneksi.php";
                                if(isset($_GET['nama'])){
                                $nama=$_GET['nama'];
                                }else{
                                    $nama="";
                                }
                                $select=mysql_query("select*from perawat where status=false and nama like '%$nama%'");
                                $no=1;
                                while($data=mysql_fetch_array($select)){
                                 echo  "<tr>
                                  <td>$no</td>
                                  <td>$data[nama]</td>
                                  <td >$data[NIP]</td>
                                  <td><a href='#openModal' >Verifikasi</a></td>
                              </tr>";   
                              $no++; 
                              }
                              ?>
                              </tbody>
                          </table>
                          <div class="col-lg-4"></div>  
                          </section>
               </div>
            </div>

        </div><!-- /row -->
   

<div id="openModal" class="modalDialog" tabindex="-1" role="dialog" aria-hidden="true">
  <div>
    <a href="#close" title="Close" class="close">X</a>
    <h2>Verifikasi </h2>
     <div class="row mt">
              <div class="col-lg-8">
                    <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input type="nama" placeholder="perawat n"class="form-control" disabled>
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">NIP</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder="113234532"class="form-control" >
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder="Perempuan"class="form-control"disabled>
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  <input type="text"placeholder="n@gmail.com" class="form-control"disabled>
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                              <div class="col-sm-10">
                                  <input type="text"placeholder="11/11/1996" class="form-control"disabled>
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Jabatan</label>
                              <div class="col-sm-10">
                                  <input type="text"placeholder="perawat UGD" class="form-control"disabled>
                              </div>
                               <br><br><br>
                                <label class="col-sm-2 col-sm-2 control-label">Tanggal Masuk</label>
                              <div class="col-sm-10">
                                  <input type="text"placeholder="8/5/2015" class="form-control">
                              </div>
                               <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Masa Kerja</label>
                              <div class="col-sm-10">
                                  <input type="text"placeholder="" class="form-control">
                              </div>
                               <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Ruangan</label>
                              <div class="col-sm-10">
                                  <input type="text"placeholder="" class="form-control">
                              </div>

                          </div>
                           <button type="button" class="btn btn-theme05 " style = "width :150px">Verifikasi</button>
                    </form>
        </div>
  </div>
</div>
<style type="text/css">
    .modalDialog {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0,0,0,0.8);
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}
.modalDialog:target {
  opacity:1;
  pointer-events: auto;
}

.modalDialog > div {
  width: 800px;
  position: relative;
  margin: 1% auto;
  padding: 5px 20px 13px 20px;
  background: #fff;
}
.close {
  background: #606061;
  color: #FFFFFF;
  line-height: 25px;
  position: absolute;
  right: -12px;
  text-align: center;
  top: -10px;
  width: 24px;
  text-decoration: none;
  font-weight: bold;
  -webkit-border-radius: 12px;
  -moz-border-radius: 12px;
  border-radius: 12px;
  -moz-box-shadow: 1px 1px 3px #000;
  -webkit-box-shadow: 1px 1px 3px #000;
  box-shadow: 1px 1px 3px #000;
}

.close:hover { background: #00d9ff; }
</style>
<script type="text/javascript">
  var dialog = document.getElementById('modalDialog');
  dialog.show();
</script>
    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
