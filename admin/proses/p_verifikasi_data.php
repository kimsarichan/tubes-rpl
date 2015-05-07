<?php
include "../../koneksi.php";
$jabatan=$_POST['jabatan'];
$masaJabatan=$_POST['masaJabatan'];
$nip=$_POST['nip']
$tmpnip=$_POST['tmpnip'];
$update=mysql_query("update perawat set jabatan='$jabatan', masaJabatan='$masaJabatan', nip='$nip', status=true where nip='$tmpnip'");
if($update){
	echo "berhasil";
}else{
	echo "gagal";
}
?>