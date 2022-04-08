<?php
include "koneksi.php";
include "koneksi_copy.php";

$ID = $_GET['ID'];
$query = "SELECT * FROM pendaftar WHERE ID = '$ID'"; // Query untuk menampilkan semua data siswa
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
	$ID = $data['ID'];
	$Nama = $data['Nama'];
	$Asal = $data['Asal'];
	$Jurusan = $data['Jurusan'];
	$Email = $data['Email'];
}
$Status = "Ditolak";


if (!empty($ID) && !empty($Nama) && !empty($Asal) && !empty($Jurusan) && !empty($Email))
{
mysqli_query($con, "INSERT INTO konfirmasi(Nama,Asal,Jurusan,Email,Status)
		VALUES('$Nama','$Asal','$Jurusan','$Email','$Status')");
mysqli_query($con, "DELETE FROM pendaftar WHERE ID = '$ID'");
	header('location:../lihatpermohonan.php');
}else
{	
	echo "Maaf, data tidak lengkap tidak bisa dikonfirmasi.";
    echo "<br>Kembali ke halaman <a href='../lihatpermohonan.php'>daftar pengajuan</a>";
}