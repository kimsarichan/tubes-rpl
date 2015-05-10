<?php
	include "../../koneksi.php";
	echo $_POST['nip'];
	echo $_POST['ruang'];
	$update=mysql_query("update ruang set kepalaRuang='$_POST[nip]' where noRuang='$_POST[ruang]'");
	$base_url=explode("?", $_SERVER['HTTP_REFERER']);
	$update2=mysql_query("update perawat set otoritas='kepalaRuang' where NIP='$_POST[nip]'");
	
	if($update){
		if($update2){
			header ("Location: $base_url[0]?pages=lihatdata_perawat&status=success");
		}else{
			header ("Location: $base_url[0]?pages=lihatdata_perawat&status=perawatfailed");
		}
	}else{
		header ("Location: $base_url[0]?pages=lihatdata_perawat&status=ruangfailed");
	}
?>