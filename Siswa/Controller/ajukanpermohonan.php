<?php
// Load file koneksi.php
include "koneksi_copy.php";
// Ambil Data yang Dikirim dari Form
$Nama = $_POST['Nama'];
$Asal = $_POST['Asal'];
$Jurusan= $_POST['Jurusan'];
$Email= $_POST['Email'];
$TglMasuk= $_POST['TglMasuk'];
$Lama=$_POST['Lama'];
$TglSelesai= date('Y-m-d', strtotime('+'.$Lama.' days', strtotime($TglMasuk))); //operasi penjumlahan tanggal sebanyak 6 hari
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$surat= $_FILES['surat']['name'];
$tmp_srt = $_FILES['surat']['tmp_name'];
			$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$nama = $_FILES['surat']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));



// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "../../images/".$fotobaru;
// Proses upload

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$suratbaru = date('dmYHis').$surat;
// Set path folder tempat menyimpan fotonya
$path_srt = "../../images/".$suratbaru;
// Proses upload

if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
	if(move_uploaded_file($tmp, $path)){
		if(move_uploaded_file($tmp_srt, $path_srt)){
		  $query = "INSERT INTO pendaftar(Nama,Asal,Jurusan,Email,TglMasuk,TglSelesai,foto,surat)
								VALUES('$Nama','$Asal','$Jurusan', '$Email', '$TglMasuk', '$TglSelesai','$fotobaru','$suratbaru')";
		  $sql = mysqli_query($connect, $query); 
		}
		if($sql){ 
		header("location:../index.php"); 
		}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='../pengajuan.php'>Kembali Ke Form</a>";
		}
	}else{
	  echo "Maaf, Gambar gagal untuk diupload.";
	  echo "<br><a href='../pengajuan.php'>Kembali Ke Form</a>";
	}
}else{
  echo "Maaf, file yang diupload harus berekstensi jpeg, jpg atau png.";
  echo "<br><a href='../pengajuan.php'>Kembali Ke Form</a>";
}
?>