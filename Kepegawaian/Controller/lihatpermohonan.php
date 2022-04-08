<?php
class daftarpendaftar{
	public $Nama;
	public $Asal;
	public $Jurusan;
	public $Email;
	
	function __construct(){
	$con = mysqli_connect("localhost","root","","pkl");
	$this->con=$con;
}
function TampilSatuData1($ID)
{
	$query = mysqli_query($this->con, "SELECT * FROM pendaftar WHERE ID = '$ID'");
	$pendaftar = mysqli_fetch_object($query);
	$this->ID = $pendaftar->ID;
	$this->Nama = $pendaftar->Nama;
	$this->Asal = $pendaftar->Asal;
	$this->Jurusan = $pendaftar->Jurusan;
	$this->Email = $pendaftar->Email;

}
function TampilSemua()
{
	$query = mysqli_query($this->con, "SELECT * FROM pendaftar");
	$i = 0;
	while($d = mysqli_fetch_array($query))
	{
		$data[$i]['Nama'] = $d['Nama'];
		$data[$i]['Asal'] = $d['Asal'];
		$data[$i]['Jurusan'] = $d['Jurusan'];
		$data[$i]['Email'] = $d['Email'];
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
function Updateuser ($id,$nama,$username,$password)
	{
		include "koneksi.php";
		$pass= md5($password);
		mysqli_query($con, "UPDATE daftarpesan SET nama = '$nama',username= '$username',
			password ='$pass' WHERE id ='$id'");
	}
function hapuspendaftar($id){
		include "koneksi.php";
		mysqli_query($con, "DELETE FROM pendaftar WHERE ID ='$id'");
	}

}
?>