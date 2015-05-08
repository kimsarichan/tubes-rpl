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
	        echo "Sorry, there was an error uploading your file.";
	    }
	}else{
		echo "your file is not pdf, please insert pdf files";
	}
?>