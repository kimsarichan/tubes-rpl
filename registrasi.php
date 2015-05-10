<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>SIDRA</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	<div class ="row">
		  	<div class="col-lg-10" style="margin-left: 600px;">
		  		 <div class="row mt">
	              <div class="col-lg-8">
	                  <div class="form-panel">
	                  	<?php
	                  	if(isset($_GET['status'])){
                          if($_GET['status']=="nodata"){
                            echo "isi bagian yang nama, tanggal, jenis kelaminmemail,notelepon,password";
                          }else if ($_GET['status']=="failed"){
                            echo "Pendaftaran gagal, silahkan coba lagi";
                          }else if ($_GET['status']=="wp"){
                            echo "Password dan konformasi password salah, silahkan coba lagi";
                          }
                        }else{
                          echo "";
                        }
	                  	?>
	                  	<h1>Registrasi </h1>
	                    <form class="form-horizontal style-form" method="post" action="p_registrasi.php">
	                          <div class="form-group">
	                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
	                              <div class="col-sm-10">
	                                  <input type="text" name="nama" class="form-control">
	                              </div>
	                              <br><br><br>
	                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
	                              <div class="col-sm-10">
	                                  <input type="password" name="password" class="form-control">
	                              </div>
	                              <br><br><br>
	                              <label class="col-sm-2 col-sm-2 control-label">Retype Passwod</label>
	                              <div class="col-sm-10">
	                                  <input type="password" name="retype" class="form-control">
	                              </div>
	                              <br><br><br>
	                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
	                              <div class="col-sm-10">
	                                  <input type="text" name="alamat" class="form-control">
	                              </div>
	                              <br><br><br>
	                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
	                              <div class="col-sm-10">
	                                  <input type="text" name="jk" class="form-control">
	                              </div>
	                              <br><br><br>
	                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
	                              <div class="col-sm-10">
	                                  <input type="text" name="email" class="form-control">
	                              </div>
	                              <br><br><br>
	                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
	                              <div class="col-sm-10">
	                                  <input type="text" name="tanggal" class="form-control">
	                              </div>
	                              <br><br><br>
	                              <label class="col-sm-2 col-sm-2 control-label">No Telepon</label>
	                              <div class="col-sm-10">
	                                  <input type="text" name="noTelepon" class="form-control">
	                              </div>
	                          </div>
	                          <button type="submit" class="btn btn-theme03 " style = "width :150px">Apply</button>
	                    </form>
	                    
	                  </div>

              </div>
            </div>

          </div>
		  </div>
		      
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
