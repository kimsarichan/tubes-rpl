<?php
include "../../koneksi.php";
	$insert=mysql_query("insert into jadwal (tanggalJam,NIP) values ('$_POST[tanggal]','$_POST[perawat]')");
	$data=mysql_fetch_array($select);
	$url=explode("?", $_SERVER['HTTP_REFERER']);
	$ex=explode(" ", $_POST['tanggal']);
	$jam=str_replace(":", "%3A", $ex[1]);
	if($insert){
		header ("Location: $url[0]?pages=input_perawat_jadwal&tanggal=$ex[0]&jam=$jam&status=success");
	}else{
		header ("Location: $url[0]?pages=input_perawat_jadwal&tanggal=$ex[0]&jam=$jam&status=failed");
	}
?>