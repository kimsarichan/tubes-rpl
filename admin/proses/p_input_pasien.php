<?php
include "../koneksi.php";
$nama=$_POST['nama'];
$umur=$_POST['umur'];
$jk=$_POST['jk'];
$diagnosis=$_POST['diagnosis'];
$noruang=$_POST['noruang'];
$query=mysql_query("insert into pasien values ('', '$nama', '$umur', '$jk','$diagnosis', 'noruang')");
if($query){
	header("Location: $_SERVER[REFERER]");
}else{
	header("Location: $_SERVER[REFERER]");
}
?>