<?php
include "../../koneksi.php";

$nip=$_POST['nip'];
$nama=$_POST['nama'];
$jk=$_POST['jenisKelamin'];
$email=$_POST['email'];
$tglLahir=$_POST['tglLahir'];
$noTelepon=$_POST['noTelepon'];
$alamat=$_POST['alamat'];
$base_url=explode("?", $_SERVER['HTTP_REFERER']);
if($nama=="" or $tglLahir=="" or $jk=="" or $email=="" or $noTelepon==""){
	header("Location: $base_url[0]?pages=edit_data&status=nodata");
}elseif(!is_numeric($noTelepon)){
	header("Location: $base_url[0]?pages=edit_data&status=notint");
}elseif(preg_match('/[0-9]+/', $nama)){
	header("Location:$base_url[0]?pages=edit_data&status=namaforbidden");
}elseif (strlen($nama)<4) {
	header("Location:$base_url[0]?pages=edit_data&status=namaless3");
}elseif (strlen($alamat)<10){
	header("Location:$base_url[0]?pages=edit_data&status=alamatless10");
}else{
	$query=mysql_query("update perawat set nama='".$nama."', jenisKelamin='".$jk."',email='".$email."', tanggalLahir='".$tglLahir."',noTelepon='".$noTelepon."' where nip='".$nip."'");
	if($query){
		header ("Location: $base_url[0]?pages=edit_data&status=success");
}	else{
		header ("Location: $base_url[0]?pages=edit_data&status=failed");
	}
}




?>