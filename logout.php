<?php
session_start();
if(isset($_SESSION['nip'])){
	unset($_SESSION['nip']);
	unset($_SESSION['oto']);
}
$url=explode("/", $_SERVER['PHP_SELF']);
header("Location: http://$_SERVER[HTTP_HOST]/$url[1]");
session_destroy();

?>