<?php
	include "../../koneksi.php";
	$tmp=$_POST['tmpno'];
	$noruang=$_POST['no_ruangan'];
	$nama=$_POST['nama_ruangan'];
	$kapasitas=$_POST['kapasitas'];
	$base_url=explode("?", $_SERVER['HTTP_REFERER']);
	if($noruang==$tmp){
		$cek="0";
	}else{
		$cek=$noruang;
	}
	$select=mysql_query("select * from ruang where noRuang='$cek'");
	$count=mysql_num_rows($select);
	if($noruang=="0"){
		header ("Location: $base_url[0]?pages=input_ruangan&act=edit&num=$tmp&status=zerofailed");
	}elseif($noruang==""){
		header ("Location: $base_url[0]?pages=input_ruangan&act=edit&num=$tmp&status=numfailed");
	}elseif($nama==""){
		header ("Location: $base_url[0]?pages=input_ruangan&act=edit&num=$tmp&status=namefailed");
	}elseif($kapasitas==""){
		header ("Location: $base_url[0]?pages=input_ruangan&act=edit&num=$tmp&act=edit&num=$tmp&status=kapasitasfailed");
	}else{
		if($count<1){
			$update=mysql_query("update ruang set noRuang='$noruang', namaRuang='$nama', kapasitas='$kapasitas' where noRuang='$tmp'");
			if($update){
				header ("Location: $base_url[0]?pages=input_ruangan&act=edit&num=$noruang&status=success");
			}else{
				echo "gagal";
				header ("Location: $base_url[0]?pages=input_ruangan&act=edit&num=$tmp&status=failed");
			}
		}else{
			echo "gagal nomer";
			header ("Location: $base_url[0]?pages=input_ruangan&act=edit&num=$tmp&status=exist");
		}
	}
?>