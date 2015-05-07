<?php
include "../../koneksi.php";
$nip=$_GET['nip'];
$select=mysql_query("select COUNT(*) as jum from perawat where nip='$nip'");
$url=explode("?",$_SERVER['HTTP_REFERER']);

$data=mysql_fetch_array($select);
if($data[0]>0){
	$delete=mysql_query("delete from perawat where nip='$nip'");

	if($delete){
		header("Location: $url[0]?pages=lihatdata_perawat");
	}else{
		echo "failed";
	}
}else{
	header("Location: $url[0]?pages=lihatdata_perawat&&status=nodata");
}
?>