<?php
include "../../koneksi.php";
$jabatan=$_POST['jabatan'];
$masaJabatan=$_POST['masaJabatan'];
$nip=$_POST['nip'];
$tmpnip=$_POST['tmpnip'];
$base_url=explode("?", $_SERVER['HTTP_REFERER']);
$update=mysql_query("update perawat set jabatan='$jabatan', masaJabatan='$masaJabatan', nip='$nip', tanggalMasuk='NOW()' status=true where nip='$tmpnip'");
if($update){
	header ("Location: $base_url[0]?pages=verifikasi_perawat&&status=success");
}else{
	header ("Location: $base_url[0]?pages=verifikasi_perawat&&status=failed");
}
?>