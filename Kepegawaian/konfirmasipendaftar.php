<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sultan Syarif Kasim II - PKL</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link rel="shortcut icon" type="image/png" href="https://sultansyarifkasim2-airport.co.id/userdata/bandara/3ce153cce6114cddc89f9038d74dac5b.png"/>
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
</head>
<?php
	include "Controller/koneksi.php";
	include "Controller/function.php";
	$pendaftar = new daftarpendaftar;
?>
<body>
  <?php
	include "header.php"
  ?>
  <br><br><br>

  <main id="main">
    <section id="about">
      <div class="container">
        <div class="form col-md-5" >
          <table class="table">
		     <thead>
				 <?php
					$ID = $_GET['ID'];
					$query = mysqli_query($con,"SELECT * FROM pendaftar WHERE ID = '$ID'"); 
					$m = mysqli_fetch_object($query);
				  ?>
				  <?php 
					  include "Controller/koneksi_copy.php";
					  
					  $query = "SELECT * FROM pendaftar WHERE ID = '$ID'"; 
					  $sql = mysqli_query($connect, $query); 
					  
					  while($data = mysqli_fetch_array($sql)){ 
				  ?>
				<div class="about-content">
				   <h4>Konfirmasi penerimaan siswa magang, atas nama : </h4>
				</div>
				<tr><td><?php print $m->Nama;?></td></tr> 
				<tr><td><?php print $m->Asal;?></td></tr> 
				<tr><td><?php print $m->Jurusan;?></td></tr> 
				<tr><td>
					<font size="2px" color="grey">&nbsp;Unit Tujuan: </font>
					  <form method="POST" action="Controller/terima.php?ID=<?php print $ID;?>">
						<div class="form-group">
						  <select class="form-control" name="Unit" width="300px">
								<?php
									$sql_select = "SELECT * FROM unit WHERE kuota > 0";
									$query_select = mysqli_query($con,$sql_select); 				
									while ($d = mysqli_fetch_array($query_select)) {
								?>
								<option value="<?php echo $d['nama'];?>"><?php echo $d['nama']?></option>
								<?php } ?>
						   </select>
						</div>
				</td></tr>
				<?php
				}?>
			    <tr><td><button class="btn btn-info btn-lg" type="submit" align="right"><font size=2>Konfirmasi<i class="fa fa-edit"></i></a></td></tr>
				<tr><td><a href="lihatpermohonan.php" class="btn btn-default btn-lg" align="right"><font size=2>Kembali<i class="fa fa-edit"></i></a><td></tr>
			    </tr>
			  </thead>
            </table>
		  </form>
        </div>
      </section>
    </footer>
  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/mobile-nav/mobile-nav.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/isotope/isotope.pkgd.min.js"></script>
  <script src="../lib/lightbox/js/lightbox.min.js"></script>
  <script src="../contactform/contactform.js"></script>
  <script src="../js/main.js"></script>
</body>
</html>