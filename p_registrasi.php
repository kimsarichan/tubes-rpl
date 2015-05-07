<?php
include "koneksi.php";
$nama=$_POST['nama'];
$tanggal=$_POST['tanggal'];
$jenisKelamin=$_POST['jk'];
$noTelepon=$_POST['noTelepon'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$data=mysql_num_rows(mysql_query("select NIP from perawat "));
$dummyId="dummy".$data;
$query=mysql_query("insert into perawat (nip,nama,tanggalLahir,jenisKelamin,alamat,noTelepon,email) values ('$dummyId','$nama','$tanggal','$jenisKelamin','$alamat','$noTelepon','$email')");
if($query){
	echo "berhasil";
}else{
	echo "gagal";
}
?>