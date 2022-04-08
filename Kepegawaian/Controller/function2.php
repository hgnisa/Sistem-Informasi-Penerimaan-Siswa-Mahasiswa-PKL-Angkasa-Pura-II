<?php
class daftarsaran{
	public $ID;
	public $nama;
	public $email;
	public $subject;
	public $message;
	
	function __construct(){
	$con = mysqli_connect("localhost","root","","spa");
	$this->con=$con;
}


function TampilSatuData2($ID)
{
	$query = mysqli_query($this->con, "SELECT * FROM kontak WHERE ID = '$ID'");
	$saran = mysqli_fetch_object($query);
	$this->ID = $saran->ID;
	$this->nama = $saran->nama;
	$this->email = $saran->email;
	$this->subject = $saran->subject;
	$this->message = $saran->message;

}
function TampilSemua2()
{
	$query = mysqli_query($this->con, "SELECT * FROM kontak");
	$i = 0;
	while($d = mysqli_fetch_array($query))
	{
		$data[$i]['nama'] = $d['nama'];
		$data[$i]['email'] = $d['email'];
		$data[$i]['subject'] = $d['subject'];
		$data[$i]['message'] = $d['message'];
		$data[$i]['ID']= $d ['ID'];
		$i++;
	}
	return $data;
}

function Insertspa ($nama,$email,$alamat,$phone,$servis)
	{
		include "koneksi.php";
		$ok=md5($password);
		$query= mysqli_query($con, "INSERT INTO 
		pemesanan (nama,username,password)
			VALUES('$nama','$username','$ok')");
	}
function Updatespa ($nama,$email,$alamat,$phone,$servis)
	{
		include "koneksi.php";
		$pass= md5($password);
		mysqli_query($con, "UPDATE daftarpesan SET nama = '$nama',email='$email',alamat='$alamat',phone='$phone',servis='$servis' WHERE id ='$id'");
	}

function Insertuser ($nama,$username,$password)
	{
		include "koneksi.php";
		$ok=md5($password);
		$query= mysqli_query($con, "INSERT INTO 
			login (nama,username,password)
			VALUES('$nama','$username','$ok')");
	}
function update($Nama,$Asal,$Jurusan,$Email)
	{
		$ID = $_GET['ID'];
		include "koneksi.php";
		mysqli_query($con, "UPDATE pendaftar SET Nama='$Nama', Asal='$Asal', Jurusan='$Jurusan'
			Email ='$Email' WHERE ID ='$ID'");
	}
function hapus($id){
		include "koneksi.php";
		mysqli_query($con, "DELETE FROM pendaftar WHERE ID ='$ID'");
		header  ('location:../index.php');
		
	}

}
?>