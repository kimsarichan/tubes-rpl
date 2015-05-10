<?php
	session_start();
	include "../../koneksi.php";

	$name=$_FILES['sertifikasi']['name'];
	$tmp=$_FILES['sertifikasi']['tmp_name'];
	$type=$_FILES['sertifikasi']['type'];
	$idsertifikasi=$_POST['id'];
	$nama=$_POST['namaSertifikasi'];
	$rename=$idsertifikasi.$_SESSION['nip'];
	$dir="../sertifikasi/";
	$target=$dir.$rename.".pdf";
	$base_url=explode("?", $_SERVER['HTTP_REFERER']);
	echo $type;
	if($nama==""){
		header ("Location: $base_url[0]?pages=input_sertifikasi&&status=namafailed");
	}
	if($idsertifikasi==""){
		header ("Location: $base_url[0]?pages=input_sertifikasi&&status=idfailed");
	}
	if(empty($_FILES['sertifikasi'])){
		header ("Location: $base_url[0]?pages=input_sertifikasi&&status=filefailed");
	}
	if($type=="application/pdf"){
	  	if (move_uploaded_file($tmp, $target)) {
	  		$select=mysql_query("select COUNT(*) as jum from sertifikasi where NIP='$_SESSION[nip]'");
	  		$data=mysql_fetch_array($select);
		  		$insert=mysql_query("insert into sertifikasi (NIP,namaFile,idsertifikasi,namaSertifikasi) values ('$_SESSION[nip]','$rename','$idsertifikasi','$nama')");
		  		if($insert){
		  			header ("Location: $base_url[0]?pages=input_sertifikasi&&status=success");
		  		}else{
		  			header ("Location: $base_url[0]?pages=input_sertifikasi&&status=failed");
		  			if(file_exists($rename)){
		  				unlink($rename);
		  			}
		  		}
	    } else {
	        header ("Location: $base_url[0]?pages=input_sertifikasi&&status=failed");
	    }
	}else{
		header ("Location: $base_url[0]?pages=input_sertifikasi&&status=wrongfile");
	}
?>