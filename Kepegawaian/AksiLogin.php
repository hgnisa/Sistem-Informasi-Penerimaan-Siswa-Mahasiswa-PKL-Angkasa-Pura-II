<?php
$name=$_POST['username'];
$pass=$_POST['password'];
$n;
$p;

if(empty($name) and !empty($pass))
{
	header('location:Login.php?i=username?');
}
elseif(!empty($name) and empty($pass))
{
	header('location:Login.php?i=password?');
}
elseif($name=="admin" and $pass=="admin")
{
	header('location:index.php');
}
elseif(!empty($name) and !empty($pass))
{
	include "Controller/koneksi.php";
	$cob= md5($pass);
	$sql="SELECT * FROM login WHERE username='$name' and password='$cob'";
	$data=mysqli_query($con,$sql);
	$cek=mysqli_num_rows($data);
	print $cek;
	
	if($cek > 0){
		session_start();
		$_SESSION['username']=$name;
		header('location:../Kepegawaian/index.php');
	}
	else{
		header('location:Login.php?i=gagal');
	}
	
}
else{
	header('location:Login.php?i=null');
}
?> 