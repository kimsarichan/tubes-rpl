<?php
include "koneksi.php";
$nama=$_POST['nama'];
$tanggal=$_POST['tanggal'];
$jenisKelamin=$_POST['jk'];
$noTelepon=$_POST['noTelepon'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$password=$_POST['password'];
$retype=$_POST['retype'];
$base_url=explode("/", $_SERVER['PHP_SELF']);
if($password!=$retype){
	header("Location:http://$_SERVER[HTTP_HOST]/$base_url[1]/registrasi.php?status=wp");
}else{
	if($nama=="" or $tanggal=="" or $jenisKelamin=="" or $email=="" or $noTelepon=="" or $password==""){
		header("Location:http://$_SERVER[HTTP_HOST]/$base_url[1]/registrasi.php?status=nodata");
	}elseif(preg_match('/[0-9]+/', $nama)){
		header("Location:http://$_SERVER[HTTP_HOST]/$base_url[1]/registrasi.php?status=namaforbidden");
	}elseif (strlen($nama)<4) {
		header("Location:http://$_SERVER[HTTP_HOST]/$base_url[1]/registrasi.php?status=namanotenougth");
	}elseif (strlen($password)<6) {
		header("Location:http://$_SERVER[HTTP_HOST]/$base_url[1]/registrasi.php?status=passnotenougth");
	}elseif(preg_match('/[A-Za-z]+/', $noTelepon)){
		header("Location:http://$_SERVER[HTTP_HOST]/$base_url[1]/registrasi.php?status=teleponforbidden");
	}elseif (strlen($alamat)<10){
		header("Location:http://$_SERVER[HTTP_HOST]/$base_url[1]/registrasi.php?status=alamatnotenougth");
	}
	else{
		$data=mysql_num_rows(mysql_query("select NIP from perawat "));
		$dummyId="dummy".$data;
		$query=mysql_query("insert into perawat (nip,nama,tanggalLahir,jenisKelamin,password,noTelepon,email) values ('$dummyId','$nama','$tanggal','$jenisKelamin','$password','$noTelepon','$email')");
		if($query){
			//header("Location:http://$_SERVER[HTTP_HOST]/$base_url[1]/login.php?status=success");
			echo "<script type='text/javascript'>window.alert('Pendaftaran berhasil, silahkan verifikasi akun anda ke admin');window.location='http://$_SERVER[HTTP_HOST]/$base_url[1]/login.php?status=success'</script>";
		}else{
			header("Location:http://$_SERVER[HTTP_HOST]/$base_url[1]/registrasi.php?status=failed");
		}		
	}
}

?>
