<?php
include "../../koneksi.php";
$tgljam=$_POST['tanggal']." ".$_POST['jam'];
$id=$_POST['id'];
$select=mysql_query("select * from jadwal where tanggalJam='$tgljam' and nip=(select nip from jadwal where idJadwal=$id)");
$res=mysql_num_rows($select);
$url=explode("?",$_SERVER['HTTP_REFERER']);
echo $tgljam;
if($res>0){
	header("Location: $url[0]?pages=edit_jadwal&id=$nip");
}else{
	$update=mysql_query("update jadwal set tanggalJam='$tgljam' where idJadwal='$id'");
	if($update){
		header("Location: $url[0]?pages=edit_jadwal&id=$nip&status=success");
	}else{
		//header("Location: $url[0]?pages=edit_jadwal&id=$nip&status=failed");
	}
}
?>