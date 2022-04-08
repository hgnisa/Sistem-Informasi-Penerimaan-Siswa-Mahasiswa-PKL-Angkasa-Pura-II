<?php
include "Controller/class.php";
$nama=$_POST['nama'];
$username= $_POST['username'];
$pass=$_POST['password'];

$insert=new pemesanan;
$insert->Insertuser($nama,$username,$pass);
header('location:../Kepegawaian/login.php');

?>