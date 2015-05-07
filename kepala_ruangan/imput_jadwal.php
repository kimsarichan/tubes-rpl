<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
<section id="main-content" style="height:800px">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Input Jadwal Perawat</h3>
          <div class="row mt">
            <div class="col-lg-8">
                  <div class="form-panel">
                    <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input type="nama" class="form-control">
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Sebelumnya </label>
                              
                              <div class="col-sm-10">
                                    <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                                        <input type='text' id="datepicker" class="form-control" >
                                    </div>
                                    <p>pink</p>
                            </div>
                            <br><br><br>
                          </div>
                    </form>
                    <button type="button" class="btn btn-theme05 " style = "width :150px">Apply</button>
                  </div>
               </div><!-- /col-lg-9-->
        </div><!-- /row -->

  </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
