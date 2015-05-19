<?php
include "../../koneksi.php";
$jabatan=$_POST['jabatan'];
$masaJabatan=$_POST['masaJabatan'];
$nip=$_POST['nip'];
$tmpnip=$_POST['tmpnip'];
$ruang=$_POST['ruang'];
$base_url=explode("?", $_SERVER['HTTP_REFERER']);
if($jabatan=="" or $masaJabatan=="" or $nip=="" or $ruang==""){
	header ("Location: $base_url[0]?pages=verifikasi_perawat&&status=emptyfield");
}elseif (preg_match("/[a-zA-Z]+/", $masaJabatan)) {
	header ("Location: $base_url[0]?pages=verifikasi_perawat&&status=masafailed");
}elseif(str_replace(" ", "", $nip)==""){
	header ("Location: $base_url[0]?pages=verifikasi_perawat&&status=whitenip");
}elseif (str_replace(" ", "", $jabatan)=="") {
	header ("Location: $base_url[0]?pages=verifikasi_perawat&&status=whitejabatan");
}else{
	$update=mysql_query("update perawat set jabatan='$jabatan', masaJabatan='$masaJabatan', nip='$nip', tanggalMasuk='NOW()', noRuang='$ruang', status=true where nip='$tmpnip'");
	if($update){
		header ("Location: $base_url[0]?pages=verifikasi_perawat&&status=success");
	}else{
		header ("Location: $base_url[0]?pages=verifikasi_perawat&&status=failed");
	}
}

?>