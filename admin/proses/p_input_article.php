<?php
session_start();
include "../../koneksi.php";
$isi=$_POST['isi'];
$judul=$_POST['judul'];
$insert=mysql_query("insert into artikel values('','$_SESSION[nip]','$judul',NOW(),'$isi')");
$url=explode("?",$_SERVER['HTTP_REFERER']);
if($judul==""){
	header ("Location: $url[0]?pages=input_artikel&status=judulfailed");
}
if($isi==""){
	header ("Location: $url[0]?pages=input_artikel&status=isifailed");
}
if($insert){
	header ("Location: $url[0]?pages=input_artikel&status=success");
	echo "berhasil";
}else{
	header ("Location: $url[0]?pages=input_artikel&status=failed");
	echo "gagal";
}

?>