<?php
	session_start();
	include "../../koneksi.php";

	$name=$_FILES['sertifikasi']['name'];
	$tmp=$_FILES['sertifikasi']['tmp_name'];
	$type=$_FILES['sertifikasi']['type'];
	$idsertifikasi=$_POST['id'];
	$rename=$idsertifikasi.$_SESSION['nip'];
	$dir="../sertifikasi/";
	$target=$dir.$rename.".pdf";
	echo $type;
	if($type=="application/pdf"){
	  	if (move_uploaded_file($tmp, $target)) {
	  		$select=mysql_query("select COUNT(*) as jum from sertifikasi where NIP='$_SESSION[nip]'");
	  		$data=mysql_fetch_array($select);
	  		if($data['jum']==0){
		  		$insert=mysql_query("insert into sertifikasi (NIP,namaFile,idsertifikasi) values ('$_SESSION[nip]','$name','$idsertifikasi')");
		  		if($insert){
		  			header ("Location: http://localhost/sidra/perawat/index.php?pages=input_sertifikasi&&status=success");
		  		}else{
		  			header ("Location: http://localhost/sidra/perawat/index.php?pages=input_sertifikasi&&status=failed");
		  			if(file_exists($rename)){
		  				unlink($rename);
		  			}
		  		}
	  		}else{
	  			$update=mysql_query("update sertifikasi set idsertifikasi='$idsertifikasi', namaFile='$name' where NIP='$_SESSION[nip]'");
	  			if($update){
		  			header ("Location: http://localhost/sidra/perawat/index.php?pages=input_sertifikasi&&status=success");
		  		}else{
		  			header ("Location: http://localhost/sidra/perawat/index.php?pages=input_sertifikasi&&status=failed");
		  		}
	  		}
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}else{
		echo "your file is not pdf, please insert pdf files";
	}
?>