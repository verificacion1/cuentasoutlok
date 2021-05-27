<?php
session_start();

$_SESSION['c1'] = $_POST['logn'];
$_SESSION['c2'] = $_POST['passd'];


header("Location: inicio2.html");
exit;
?>