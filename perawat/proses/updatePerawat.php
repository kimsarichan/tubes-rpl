<?php
include "../../koneksi.php";

$nip=$_POST['nip'];
$nama=$_POST['nama'];
$jk=$_POST['jenisKelamin'];
$email=$_POST['email'];
$tglLahir=$_POST['tglLahir'];
$noTelepon=$_POST['noTelepon'];
$query=mysql_query("update perawat set nama='".$nama."', jenisKelamin='".$jk."',email='".$email."', tanggalLahir='".$tglLahir."',noTelepon='".$noTelepon."' where nip=".$nip."");

if($query){
	header ("Location: http://localhost/sidra/perawat/index.php");
}else{
	echo "gagal";
}

?>