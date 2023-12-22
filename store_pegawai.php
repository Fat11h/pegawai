<?php
include 'connection.php';
$nama = $_POST['nama'];
$divisi = $_POST['divisi'];
$email = $_POST['email'];
$nomor = $_POST['nomor'];

$sql = "insert into pegawai(nama,divisi,email,nomor)values('$nama','$divisi','$email','$nomor')";
$query = mysqli_query($mysqli,$sql);
if($query){
header('Location:pegawai.php');
}
else{
echo $mysqli->connect_errno."-".$mysqli->connect_error;
exit();}
?>