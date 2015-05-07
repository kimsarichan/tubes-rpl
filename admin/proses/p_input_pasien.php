<?php
include "../../koneksi.php";
$nama=$_POST['nama'];
$umur=$_POST['umur'];
$jk=$_POST['jk'];
$diagnosis=$_POST['diagnosis'];
$noruang=$_POST['noruangan'];
$url=explode("&&", $_SERVER['HTTP_REFERER']);
$query=mysql_query("insert into pasien values ('', '$nama', '$umur', '$jk','$diagnosis', '$noruang')");
if($query){
	echo "berhasil";
	header("Location: $url[0]&&status=success");
}else{
	header("Location: $url[0]&&status=failed");
}
?>