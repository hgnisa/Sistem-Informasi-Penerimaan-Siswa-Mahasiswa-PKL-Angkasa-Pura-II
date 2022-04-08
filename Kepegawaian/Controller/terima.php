<?php
include "koneksi.php";
include "koneksi_copy.php";

 $tgl=date('d-m-Y');
 echo $tgl;

$ID = $_GET['ID'];
$query = "SELECT * FROM pendaftar WHERE ID = '$ID'"; // Query untuk menampilkan semua data siswa
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
	$tmp_srt = $data['surat']['tmp_name'];
}
$Unit = $_POST['Unit'];
$query2 = mysqli_query($con,"select * from unit where nama = '$Unit'");
			while ($m=mysqli_fetch_array($query2))
			{
				$KuotaAwal=$m['kuota'];
			}
				$jml=1;
				$KuotaAkhir=$KuotaAwal-$jml;
$Status = "Diterima";


if (!empty($ID) && !empty($Nama) && !empty($Asal) && !empty($Jurusan) && !empty($Email) && !empty($Unit)){
	mysqli_query($con, "INSERT INTO konfirmasi(Nama,Asal,Jurusan,Email,Status)
			VALUES('$Nama','$Asal','$Jurusan','$Email','$Status')");
	mysqli_query($con, "INSERT INTO siswamagang (Nama,Asal,Jurusan,Email,TglMasuk,TglSelesai,foto,surat,Unit)
			VALUES('$Nama','$Asal','$Jurusan', '$Email', '$TglMasuk', '$TglSelesai', '$foto', '$surat', '$Unit')");
	mysqli_query($con, "UPDATE unit SET kuota='$KuotaAkhir' WHERE nama ='$Unit'");
	mysqli_query($con, "DELETE FROM pendaftar WHERE ID = '$ID'");
	header('location:../lihatsiswamagang.php');
}else{
	echo "Maaf, data tidak lengkap tidak bisa dikonfirmasi.";
    echo "<br>Kembali ke halaman <a href='../lihatpermohonan.php'>daftar pengajuan</a>";
}