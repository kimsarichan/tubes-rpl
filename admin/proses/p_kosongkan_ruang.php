<?php
	include "../../koneksi.php";
	$select=mysql_query("select noRuang,kepalaRuang from ruang where noRuang='$_GET[ruang]'");
	$update1=mysql_query("update ruang set KepalaRuang=NULL where noRuang='$_GET[ruang]'");
	$base_url=explode("?", $_SERVER['HTTP_REFERER']);
	$data=mysql_fetch_array($select);
	if($update1){
		$update2=mysqL_query("update perawat set otoritas='normal' where NIP='$data[1]'");
		if($update2){
			header ("Location: $base_url[0]?pages=lihat_ruangan&status=success");
		}else{
			header ("Location: $base_url[0]?pages=lihat_ruangan&status=perawatfailed");
		}
	}else{
		header ("Location: $base_url[0]?pages=lihat_ruangan&status=ruangfailed");
	}
	


?>