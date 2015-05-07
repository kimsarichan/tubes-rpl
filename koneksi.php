<?php
$con=mysql_connect('localhost','root','') or die ("Koneksi Gagal ". mysql_error());
$db=mysql_select_db('sidra',$con) or die ("database tidak ditemukan". mysql_error());


?>