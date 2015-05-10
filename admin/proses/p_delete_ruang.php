<?php
	include "../../koneksi.php";
	$base_url=explode("?", $_SERVER['HTTP_REFERER']);
	$delete=mysql_query("delete from ruang where noRuang='$_GET[no]'");
	if($delete){
		header ("Location: $base_url[0]?pages=lihat_ruangan&status=success");
	}else{
		header ("Location: $base_url[0]?pages=input_ruangan&status=failed");
	}
?>