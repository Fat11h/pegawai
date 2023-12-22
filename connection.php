<?php
$databasehost = "localhost";
$databaseusername = "root";
$databasepassword = "";
$databasename = "divisi";

$mysqli = mysqli_connect($databasehost, $databaseusername, $databasepassword, $databasename);
if(!$mysqli){
die("failed to connect".mysqli_connect_error());}
?>