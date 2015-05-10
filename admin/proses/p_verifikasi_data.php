<?php
include "../../koneksi.php";
$jabatan=$_POST['jabatan'];
$masaJabatan=$_POST['masaJabatan'];
$nip=$_POST['nip'];
$tmpnip=$_POST['tmpnip'];
$ruang=$_POST['ruang'];
$base_url=explode("?", $_SERVER['HTTP_REFERER']);
$update=mysql_query("update perawat set jabatan='$jabatan', masaJabatan='$masaJabatan', nip='$nip', tanggalMasuk='NOW()', noRuang='$ruang', status=true where nip='$tmpnip'");
if($update){
	echo "berhasil";
	header ("Location: $base_url[0]?pages=verifikasi_perawat&&status=success");
}else{
	echo "gagal";
	header ("Location: $base_url[0]?pages=verifikasi_perawat&&status=failed");
}
?>