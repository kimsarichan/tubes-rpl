<!DOCTYPE html>
<?php session_start();
include "../koneksi.php";
if(!isset($_SESSION['nip'])){
  echo "Anda belum melakukan login!";
}else{
  if($_SESSION['oto']!="admin"){
    echo "anda bukan perawat biasa";
  }else{
  $query=mysql_query("select * from perawat where nip='".$_SESSION['nip']."' LIMIT 1");
  $data=mysql_fetch_array($query);
  $nama=$data[1];
  $nip=$data[0];
  $tglLahir=$data[2];
  $jk=$data[3];
  $alamat=$data[4];
  $email=$data['email'];
  $jabatan=$data['jabatan'];
  $noTelepon=$data['noTelepon'];
?>
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
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>SIDRA</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->

    <!-- ******
      ****************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->      
        <aside>
                <div id="sidebar"  >
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <table>

                  <tr>
                    <td style="width:10%"></td>
                    <td><p class="left" width="60"><a href="profile.html"><img src="assets/img/ui-sam.jpg"width="60"></a></p></td>
                    <td style="width:10%"></td>
                    <td><h5>Admin </h5></td>
                  </tr>
                  </table>
                    
                  <li class="mt">
                      <a class="<?php if (($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]"){echo "active";}?>" href="index.php">
                          <span>Home</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a  class="<?php if (($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=verifikasi_perawat" or ($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=lihatdata_perawat" ){echo "active";}?>" href="javascript:;"><span> Manajemen Perawat </span></a>
                         <ul class="sub">
                            <li class="<?php if (($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=verifikasi_perawat"){echo "active";}?>"><a   href="index.php?pages=verifikasi_perawat">Verifikasi Perawat</a></li>
                            <li class="<?php if (($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=lihatdata_perawat"){echo "active";}?>"><a   href="index.php?pages=lihatdata_perawat">Lihat  Perawat </a></li>
                          </ul>
                    </li>
                  <li class="sub-menu">
                      <a class="<?php if (($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=input_pasien" or ($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=lihat_pasien" or ($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=grafik_pasien"){echo "active";}?>" href=""> Manajemen Pasien</a>
                         <ul class="sub">
                            <li class="<?php if (($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=input_pasien"){echo "active";}?>"><a  href="index.php?pages=input_pasien">Input Pasien</a></li>
                            <li class="<?php if (($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=grafik_pasien"){echo "active";}?>"><a   href="index.php?pages=grafik_pasien">Grafik Pasien </a></li>
                            <li class="<?php if (($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=lihat_pasien"){echo "active";}?>"><a href="index.php?pages=lihat_pasien">Lihat Pasien </a></li>
                          </ul>
                    </li>
                     <li class="sub-menu">
                      <a  class="<?php if (($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=input_ruangan" or ($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=lihat_ruangan" ){echo "active";}?>" href=""> Manajemen Ruangan </a>
                         <ul class="sub">
                            <li class ="<?php if (($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=input_ruangan"){echo "active";}?>"><a  href="index.php?pages=input_ruangan">Tambah Ruangan</a></li>
                            <li class="<?php if (($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=lihat_ruangan"){echo "active";}?>"><a href="index.php?pages=lihat_ruangan">Lihat Ruangan </a></li>
                          </ul>
                    </li>
                     <li class="sub-menu">
                      <a  class="<?php if (($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=lihat_artikel" or ($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=input_artikel" ){echo "active";}?>" href=""> Artikel</a>
                         <ul class="sub">
                            <li class="<?php if (($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=input_artikel"){echo "active";}?>" ><a  href="index.php?pages=input_artikel">Input Artikel </a></li>
                            <li class="<?php if (($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=lihat_artikel"){echo "active";}?>"><a  href="index.php?pages=lihat_artikel">Lihat Artikel</a></li>
                          </ul>
                    </li>
                    <li class="sub-menu">
                      <a  class="<?php if (($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=lihat_pesan" or ($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=kirim_pesan" ){echo "active";}?>" href=""> Pesan</a>
                         <ul class="sub">
                            <li class="<?php if (($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=kirim_pesan"){echo "active";}?>" ><a  href="index.php?pages=kirim_pesan">Kirim Pesan</a></li>
                            <li class="<?php if (($_SERVER['REQUEST_URI'])== "$_SERVER[PHP_SELF]?pages=lihat_pesan"){echo "active";}?>"><a  href="index.php?pages=lihat_pesan">Lihat Pesan </a></li>
                          </ul>
                    </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      
      <!--sidebar end-->
      <?php
             $pages=isset($_GET['pages']) ? $_GET['pages'] : null;
             switch($pages){
              default:
              include "beranda.php";
              break;
              case "verifikasi_perawat" :
              include "verifikasi_perawat.php";
              break;
               case "ubahdata_perawat" :
              include "ubahdata_perawat.php";
              break;
               case "ubahdata_perawat" :
              include "ubahdata_perawat.php";
              break;
              case "lihat_pesan":
              include "lihat_pesan.php";
              break;
              case "kirim_pesan":
              include "kirim_pesan.php";
              break;
              case "input_pasien":
              include "input_pasien.php";
              break;
              case "ubahdata_perawat_setelahdicari":
              include "ubahdata_perawat_setelahdicari";
              break;
              case "lihat_ruangan":
              include "lihat_ruangan.php";
              break;
              case "input_ruangan":
              include "input_ruangan.php";
              break;
              case "lihat_pasien":
              include "lihat_pasien.php";
              break;
              case "lihatdata_perawat":
              include "lihatdata_perawat.php";
              break;
              case "edit_perawat":
              include "edit_data_perawat.php";
              break;
              case "lihat_profile":
              include "edit_data_perawat.php";
              break;
              case "lihat_sertifikasi":
              include "lihat_sertifikasi.php";
              break;
              case "lihat_artikel":
              include "lihat_artikel.php";
              break;
              case "input_artikel":
              include "input_artikel.php";
              break;

           }
      ?>
      
   
     
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 - Kelompok 5
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
  
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to SIDRA',
            // (string | mandatory) the text inside the notification
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
<?php }
}
?>
