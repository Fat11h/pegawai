<?php
include 'connection.php';
$id_pegawai = $_GET['id'];

$sql = "update pegawai set status=-1 where id_pegawai='$id_pegawai'";
$query = mysqli_query($mysqli,$sql);
if($query){
header('Location:pegawai.php');
}
else{
echo $mysqli->connect_errno."-".$mysqli->connect_error;
exit();}
?>