<?php
include "../../koneksi.php";
$nip=$_POST['nip'];
$nama=$_POST['nama'];
$tanggallahir=$_POST['tglLahir'];
$jk=$_POST['jeniskelamin'];
$alamat=$_POST['alamat'];
$jabatan=$_POST['jabatan'];
$masajabatan=$_POST['masaJabatan'];
$telepon=$_POST['telepon'];
$email=$_POST['email'];
$otoritas=$_POST['otoritas'];
$base_url=explode("?", $_SERVER['HTTP_REFERER']);
$update=mysql_query("update perawat set nama='$nama',otoritas='$otoritas', tanggalLahir='$tanggallahir', alamat='$alamat', jeniskelamin='$jk', jabatan='$jabatan', masaJabatan='$masajabatan', noTelepon='$telepon', email='$email' where nip='$nip'");
if($update){
	header ("Location: $base_url[0]?pages=edit_perawat&&nip=$nip&&status=success");
}else{
	header ("Location: $base_url[0]?pages=edit_perawat&&nip=$nip&&status=failed");
}
?>