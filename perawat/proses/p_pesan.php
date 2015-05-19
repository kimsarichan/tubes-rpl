<?php
session_start();
include "../../koneksi.php";
$pesan=$_POST['pesan'];
$admin=$_POST['admin'];
$kepala=$_POST['kepalaRuang'];
echo $admin;
echo $kepala;
if($pesan==""){
	header ("Location: $url[0]?pages=kirim_pesan&&status=empty");
}else{
	if(isset($admin)){
		$insert=mysql_query("insert into pesan values ('','$pesan','$admin','$_SESSION[nip]',false)");
		if($insert){ $statusAdmin=true; }else{ $statusAdmin=false; }
	}
	if(isset($kepala)){
		$insert=mysql_query("insert into pesan values ('','$pesan','$kepala','$_SESSION[nip]', false)");
		if($insert){ $statuskepala=true;}else{ $statuskepala=false; }
	}
	$url=explode("?",$_SERVER['HTTP_REFERER']);
	if($statusAdmin or $statuskepala){
		header ("Location: $url[0]?pages=kirim_pesan&&status=success");
		echo "berhasil";
	}else{
		header ("Location: $url[0]?pages=kirim_pesan&&status=failed");
		echo "gagal";
	}
}


?>