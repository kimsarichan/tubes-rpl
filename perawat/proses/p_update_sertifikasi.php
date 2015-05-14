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
		echo "harusnya gagal";
	}
	elseif($idsertifikasi==""){
		header ("Location: $base_url[0]?pages=input_sertifikasi&&status=idfailed");
	}
	elseif(empty($_FILES['sertifikasi'])){
		header ("Location: $base_url[0]?pages=input_sertifikasi&&status=filefailed");
		echo "harusnya gagal";
	}else{
		if($type=="application/pdf"){
		  	if (move_uploaded_file($tmp, $target)) {
			  		$insert=mysql_query("insert into sertifikasi values ('$_SESSION[nip]','$idsertifikasi','$nama','$rename')");
			  		if($insert){
			  			header ("Location: $base_url[0]?pages=input_sertifikasi&&status=success");
			  		}else{
			  			header ("Location: $base_url[0]?pages=input_sertifikasi&&status=dbfailed");
			  			if(file_exists($rename)){
			  				unlink($rename);
			  			}
			  		}
		    } else {
		       header ("Location: $base_url[0]?pages=input_sertifikasi&&status=filefailed");
		    }
		}else{
			header ("Location: $base_url[0]?pages=input_sertifikasi&&status=wrongfile");
		}	
}
	
?>