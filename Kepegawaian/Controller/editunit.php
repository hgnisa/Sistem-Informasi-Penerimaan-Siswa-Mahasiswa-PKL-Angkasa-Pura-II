<?php
include "koneksi.php";

$ID = $_GET['ID'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$kuota = $_POST['kuota'];


if (!empty($ID) && !empty($nama) && !empty($deskripsi) && !empty($kuota))
{
mysqli_query($con, "UPDATE unit SET nama='$nama', deskripsi='$deskripsi',
	kuota='$kuota' WHERE unit.id ='$ID'");
header('location:../bagiandinas.php');
}else
{
echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
echo "<br><a href='../bagiandinas.php'>Kembali Ke Form</a>";
}
?>