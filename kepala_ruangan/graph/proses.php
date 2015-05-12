<?php
mysql_connect("localhost", "root", "");
mysql_select_db("sidra");
 
$arr = array();
$rs = mysql_query("select '<=10' as umur, count(umur) as jumlah from pasien where umur <=10 union 
	select '>10 <=20' as umur, count(umur) as jumlah from pasien where umur>10 and umur<=20  union
	select '>20 <=30' as umur, count(umur) as jumlah from pasien where umur>20 and umur<=30  
	");

while($obj = mysql_fetch_object($rs)) {
	$arr[] = $obj;
}

header("Content-type: application/json"); 

echo "{\"data\":" .json_encode($arr). "}";
?>