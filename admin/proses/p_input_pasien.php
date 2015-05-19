<?php
include "../../koneksi.php";
$nama=$_POST['nama'];
$umur=$_POST['umur'];
$jk=$_POST['jk'];
$diagnosis=$_POST['diagnosis'];
$noruang=$_POST['noruangan'];
$url=explode("?", $_SERVER['HTTP_REFERER']);
if($nama=="" or $umur=="" or $jk=="" or $diagnosis=="" or $noruang==""){
	header("Location: $url[0]?pages=input_pasien&status=nodata");
}elseif($umur<0){
	header("Location: $url[0]?pages=input_pasien&status=negativeumur");
}elseif(!is_numeric($umur)){
	header("Location: $url[0]?pages=input_pasien&status=noint");
}elseif (strlen($nama)<4) {
	header("Location:$base_url[0]?pages=input_pasien&status=namaless3");
}elseif(preg_match('/[0-9]+/', $nama)){
	header("Location:$base_url[0]?pages=input_pasien&status=namaforbidden");
}else{
	$query=mysql_query("insert into pasien values ('', '$nama', '$umur', '$jk','$diagnosis', '$noruang')");
	if($query){
		echo "berhasil";
		header("Location: $url[0]?pages=input_pasien&status=success");
	}else{
		header("Location: $url[0]?pages=input_pasien&status=failed");
	}	
}

?>