<?php
session_start();
include "koneksi.php";
$nip=$_POST['nip'];
$password=$_POST['password'];
$query=mysql_query("select * from perawat where nip='$nip' and password='$password' and status=true LIMIT 1");
$data=mysql_fetch_array($query);
$sum=mysql_num_rows($query);
$ex=explode("/", $_SERVER['PHP_SELF']);
if($sum>0){
	$_SESSION['nip']=$nip;
	$_SESSION['oto']=$data['otoritas'];
	if($_SESSION['oto']=="admin"){
		header ("Location:http://$_SERVER[HTTP_HOST]/$ex[1]/admin");	
	}else if($_SESSION['oto']=="kepalaPerawat"){
		header ("Location:http://$_SERVER[HTTP_HOST]/$ex[1]/kepala_perawat");
	}else{
		header ("Location:http://$_SERVER[HTTP_HOST]/$ex[1]/perawat");
	}
}else{
	header("Location:$_SERVER[HTTP_REFERER]?status=failed");
}
?>