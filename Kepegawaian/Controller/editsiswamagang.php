<?php
include "koneksi.php";
$ID = $_GET['ID'];
$Nama = $_POST['Nama'];
$Asal = $_POST['Asal'];
$Jurusan = $_POST['Jurusan'];
$Email = $_POST['Email'];


if (!empty($ID) && !empty($Nama) && !empty($Asal) && !empty($Jurusan) && !empty($Email))
{
mysqli_query($con, "UPDATE siswamagang SET Nama='$Nama', Asal='$Asal',
Jurusan='$Jurusan', Email='$Email' WHERE ID ='$ID'");
header('location:../lihatsiswamagang.php');
}else
{
header('location:../lihatsiswamagang.php');
}
?>