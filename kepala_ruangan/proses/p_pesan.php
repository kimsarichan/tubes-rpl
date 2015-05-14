<?php
session_start();
include "../../koneksi.php";
$pesan=$_POST['pesan'];
$perawat=$_POST['perawat'];
echo $admin;
echo $kepala;
$insert=mysql_query("insert into pesan values ('','$pesan','$perawat','$_SESSION[nip]',false)");
$url=explode("?",$_SERVER['HTTP_REFERER']);
if($insert){
	header ("Location: $url[0]?pages=kirim_pesan&&status=success");
	echo "berhasil";
}else{
	header ("Location: $url[0]?pages=kirim_pesan&&status=failed");
	echo "gagal";
}

?>