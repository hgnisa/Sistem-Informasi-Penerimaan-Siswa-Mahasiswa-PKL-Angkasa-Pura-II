<?php
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

if (!empty($nama) && !empty($email) && !empty($subject) && !empty($message))
{
	mysqli_query($con, "INSERT INTO kontak(nama,email,subject,message)
		VALUES('$nama','$email','$subject', '$message')");
	header('location:../index.php');

}else
{
	header('location:../tentang.php');
}
?>