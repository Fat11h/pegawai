<?php
include 'connection.php';
$divisi = $_POST['divisi'];

$sql = "insert into divisi(divisi)values('$divisi')";
$query = mysqli_query($mysqli,$sql);
if($query){
header('Location:divisi.php');
}
else{
echo $mysqli->connect_errno."-".$mysqli->connect_error;
exit();}
?>