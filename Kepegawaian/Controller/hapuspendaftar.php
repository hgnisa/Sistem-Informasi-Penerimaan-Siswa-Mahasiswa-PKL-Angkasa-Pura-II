<?php
include "koneksi.php";
include "koneksi_copy.php";

$ID = $_GET['ID'];
$query = "SELECT * FROM siswamagang WHERE ID = '$ID'"; // Query untuk menampilkan semua data siswa
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
	$ID = $data['ID'];
	$Nama = $data['Nama'];
	$Asal = $data['Asal'];
	$Jurusan = $data['Jurusan'];
	$Email = $data['Email'];
	$TglMasuk= $data['TglMasuk'];
	$TglSelesai= $data['TglSelesai'];
	$foto = $data['foto'];
	$surat= $data['surat'];
	$Unit = $data['Unit'];
}

$Status = "Selesai";


if (!empty($ID) && !empty($Nama) && !empty($Asal) && !empty($Jurusan) && !empty($Email) && !empty($Unit)){
	mysqli_query($con, "INSERT INTO siswaselesai (Nama,Asal,Jurusan,Email,TglMasuk,TglSelesai,foto,surat,Unit)
			VALUES('$Nama','$Asal','$Jurusan', '$Email', '$TglMasuk', '$TglSelesai', '$foto', '$surat', '$Unit')");
	mysqli_query($con, "DELETE FROM siswamagang WHERE ID = '$ID'");
	header('location:../lihatsiswamagang.php');
}else{
	echo "Maaf, data tidak lengkap tidak bisa dikonfirmasi.";
    echo "<br>Kembali ke halaman <a href='../lihatpermohonan.php'>daftar pengajuan</a>";
}
?>