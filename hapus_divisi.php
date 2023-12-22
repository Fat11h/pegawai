<?php
include 'connection.php';
$id_divisi = $_GET['id'];

$sql = "update divisi set status=-1 where id_divisi='$id_divisi'";
$query = mysqli_query($mysqli,$sql);
if($query){
header('Location:divisi.php');
}
else{
echo $mysqli->connect_errno."-".$mysqli->connect_error;
exit();}
?>