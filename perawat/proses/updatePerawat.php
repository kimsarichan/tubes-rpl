<?php
include "../../koneksi.php";

$nip=$_POST['nip'];
$nama=$_POST['nama'];
$jk=$_POST['jenisKelamin'];
$email=$_POST['email'];
$tglLahir=$_POST['tglLahir'];
$noTelepon=$_POST['noTelepon'];
$base_url=explode("?", $_SERVER['HTTP_REFERER']);
if($nama=="" or $tglLahir=="" or $jk=="" or $email=="" or $noTelepon==""){
	header("Location: $base_url[0]?pages=edit_data&status=nodata");
}else{
	$query=mysql_query("update perawat set nama='".$nama."', jenisKelamin='".$jk."',email='".$email."', tanggalLahir='".$tglLahir."',noTelepon='".$noTelepon."' where nip='".$nip."'");
	if($query){
		header ("Location: $base_url[0]?pages=edit_data&status=success");
}	else{
		header ("Location: $base_url[0]?pages=edit_data&status=failed");
	}
}




?>