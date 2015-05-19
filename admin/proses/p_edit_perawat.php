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
$base_url=explode("?", $_SERVER['HTTP_REFERER']);
if($nama=="" or $tanggallahir=="" or $jk=="" or $email=="" or $telepon=="" or $masajabatan=="" or 
	$jabatan==""){
	header("Location: $base_url[0]?pages=edit_perawat&nip=$nip&status=nodata");
}elseif(!is_numeric($telepon)){
	header("Location: $base_url[0]?pages=edit_perawat&nip=$nip&status=notint");
}elseif(preg_match('/[0-9]+/', $nama)){
	header("Location:$base_url[0]?pages=edit_perawat&nip=$nip&status=namaforbidden");
}elseif (strlen($nama)<4) {
	header("Location:$base_url[0]?pages=edit_perawat&nip=$nip&status=namaless3");
}elseif (strlen($alamat)<10){
	header("Location:$base_url[0]?pages=edit_perawat&nip=$nip&status=alamatless10");
}else{
	$update=mysql_query("update perawat set nama='$nama',otoritas='$otoritas', tanggalLahir='$tanggallahir', alamat='$alamat', jeniskelamin='$jk', jabatan='$jabatan', masaJabatan='$masajabatan', noTelepon='$telepon', email='$email' where nip='$nip'");
	if($update){
		header ("Location: $base_url[0]?pages=edit_perawat&&nip=$nip&&status=success");
	}else{
		header ("Location: $base_url[0]?pages=edit_perawat&&nip=$nip&&status=failed");
}
}

?>