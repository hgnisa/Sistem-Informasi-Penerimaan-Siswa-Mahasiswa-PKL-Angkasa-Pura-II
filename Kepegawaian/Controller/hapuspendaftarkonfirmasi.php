<?php
include "koneksi.php";
include "function.php";
$ID=$_GET['ID'];

if (!empty($ID)){
	mysqli_query($con, "DELETE FROM pendaftar WHERE ID = '$ID'");
	header('location:../lihatpermohonan.php');
}
ELSE {
	header('location:../lihatpermohonan.php');
}
?>