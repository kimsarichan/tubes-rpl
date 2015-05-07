<?php
session_start();
include "koneksi.php";
$nip=$_POST['nip'];
$password=$_POST['password'];
$query=mysql_query("select * from perawat where nip='$nip' and password='$password'");
$sum=mysql_num_rows($query);
if($sum>0){
	$nip=$_SESSION['nip']=$nip;
	header ("Location:/sidra/Perawat/index.php"); 
	echo "aaaa";
}else{
	echo "NIP dan Password salah !";
}


?>