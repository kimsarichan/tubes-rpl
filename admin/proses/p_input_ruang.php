<?php
include "../../koneksi.php";

$noruang=$_POST['no_ruangan'];
$nama=$_POST['nama_ruangan'];
$kapasitas=$_POST['kapasitas'];
$base_url=explode("?", $_SERVER['HTTP_REFERER']);
$select=mysql_query("select * from ruang where noRuang='$noruang'");
$count=mysql_num_rows($select);
if($noruang=="0"){
				header ("Location: $base_url[0]?pages=input_ruangan&act=edit&num=$tmp&status=zerofailed");
}
if($noruang==""){
			header ("Location: $base_url[0]?pages=input_ruangan&status=numfailed");
}
if($nama==""){
			header ("Location: $base_url[0]?pages=input_ruangan&status=namefailed");

}
if($kapasitas==""){
			header ("Location: $base_url[0]?pages=input_ruangan&status=kapasitasfailed");

}
if($count<1){
	$insert=mysql_query("insert into ruang values ('$noruang','$nama','$kapasitas', NULL)");
	if($insert){
		header ("Location: $base_url[0]?pages=input_ruangan&status=success");
	}else{
		echo "gagal";
		header ("Location: $base_url[0]?pages=input_ruangan&status=failed");
	}
}else{
		echo "gagal nomer";
		header ("Location: $base_url[0]?pages=input_ruangan&status=exist");
}
?>