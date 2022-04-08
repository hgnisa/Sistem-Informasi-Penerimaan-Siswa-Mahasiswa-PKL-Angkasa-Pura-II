<?php
class pemesanan{
	public $servis;
	public $prices;
	public $fas1;
	public $fas2;
	public $fas3;
	public $fas4;
	public $ru1;
	public $ru2;
	public $ru3;
	public $con;

	function __construct(){

	$con = mysqli_connect("localhost","root","","pkl");
	$this->con=$con;
}
function TampilSatuData($id)
{
	$query = mysqli_query($this->con, "SELECT * FROM pemesanan WHERE id = '$id'");
	$mhs = mysqli_fetch_object($query);
	$this->id= $mhs->id;
	$this->servis = $mhs->servis;
	$this->prices = $mhs->prices;
	$this->fas1= $mhs->fas1;
	$this->fas2 = $mhs->fas2;
	$this->fas3 = $mhs->fas3;
	$this->fas4 = $mhs->fas4;
	$this->ru1= $mhs->ru1;
	$this->ru2 = $mhs->ru2;
	$this->ru3 = $mhs->ru3;
}
function TampilSemua()
{
	$query = mysqli_query($this->con, "SELECT * FROM pemesanan");
	$i = 0;
	while($d = mysqli_fetch_array($query))
	{
		$data[$i]['servis'] = $d['servis'];
		$data[$i]['prices'] = $d['prices'];
		$data[$i]['id']= $d['id'];
		$i++;
	}
	return $data;
}

function Insertspa ($nama,$alama)
	{
		include "Controller/koneksi.php";
		$ok=md5($password);
		$query= mysqli_query($con, "INSERT INTO 
		pemesanan (nama,username,password)
			VALUES('$nama','$username','$ok')");
	}
function Updatespa ($nama,$alamat,$servis,$nohp,$fas1,$fas2,$fas3,$fas4,$ru1,$ru2,$ru3)
	{
		include "Controller/koneksi.php";
		$pass= md5($password);
		mysqli_query($con, "UPDATE pemesanan SET nama = '$nama',alamat='$alamat',servis='servis',nohp='nohp',fas1='$fas1',fas2='$fas2',fas3='$fas3',fas4='$fas4',ru1='$ru1',ru2='$ru2',ru3='$ru3' WHERE id ='$id'");
	}

function Insertuser ($nama,$username,$password)
	{
		include "Controller/koneksi.php";
		$ok=md5($password);
		$query= mysqli_query($con, "INSERT INTO 
			login (nama,username,password)
			VALUES('$nama','$username','$ok')");
	}
function Updateuser ($id,$nama,$username,$password)
	{
		include "Controller/koneksi.php";
		$pass= md5($password);
		mysqli_query($con, "UPDATE pemesanan SET nama = '$nama',username= '$username',
			password ='$pass' WHERE id ='$id'");
	}
function Hapususer ($id){
		include "Controller/koneksi.php";
		mysqli_query($con, "DELETE FROM pemesanan WHERE id ='$id'");
	}

}
?>