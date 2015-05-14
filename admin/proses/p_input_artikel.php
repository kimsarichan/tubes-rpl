<?php
include "../../koneksi.php";
$query2=mysql_query("select nip from perawat where otoritas='admin' LIMIT 1");
$data=mysql_fetch_array($query2);
$nip= $data[0];
$judul=$_POST['judul'];
$isi=$_POST['isi'];
$url=explode("&&", $_SERVER['HTTP_REFERER']);
$query=mysql_query("INSERT INTO `artikel`(`judul`, `tanggal`, `isi`) VALUES ('$nip',$judul',now(),'$isi')");
if($query){
	echo "berhasil";
	header("Location: $url[0]&&status=success");
}else{
	echo "INSERT INTO `artikel`(`id_pengirim`,`judul`, `tanggal`, `isi`) VALUES ('$nip','$judul',now(),'$isi')";

}
?>