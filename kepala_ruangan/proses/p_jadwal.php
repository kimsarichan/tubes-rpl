<?php
include "../../koneksi.php";
	$insert=mysql_query("insert into jadwal (tanggalJam,NIP) values ('$_POST[tanggal]','$_POST[perawat]')");
	$select=mysql_query("select idJadwal from jadwal order by idJadwal desc LIMIT 1");
	$data=mysql_fetch_array($select);
	echo $root[1];
	if($insert){
		echo $data[0];
		echo $_POST['ruang'];
		$insert2=mysql_query("INSERT INTO memiliki (noRuang, idJadwal) VALUES ('$_POST[ruang]', '$data[0]')")or die (mysql_error()) ;
		if($insert2){
			header ("Location: $_SERVER[HTTP_REFERER]&status=success");
		}else{
			header ("Location: $_SERVER[HTTP_REFERER]&status=failed");
		}
	}else{
		header ("Location: $_SERVER[HTTP_REFERER]&status=failed");
?>