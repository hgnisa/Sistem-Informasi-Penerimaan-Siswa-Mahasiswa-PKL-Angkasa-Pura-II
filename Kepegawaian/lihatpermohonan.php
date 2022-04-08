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
	include "header.php";
  ?>
  <br><br>
  <main id="main">
    <section id="about">
      <div class="container">
	    <div class="box">
          <div class="about-content">
		    <h6>Permohonan belum dikonfirmasi :</h6>
		  </div>
		  <table class="table table-condensed table-bordered">
		     <thead>
              <tr>
                <th><center>Nama</th>
                <th><center>Sekolah</th>
                <th><center>Jurusan</th>
                <th><center>Email</th>
                <th><center></th>
                <th><center>Pilihan</th>
              </tr>
            </thead>
            <?php
                $i=0; 
                $query = mysqli_query($con,"select * from pendaftar");
                  while ($m=mysqli_fetch_array($query))
                  {
                    $i++;
            ?>
            <tbody>
              <tr>
                <td> <center><?php print $m['Nama']; ?></center> </td> 
                <td> <center><?php print $m['Asal']; ?></center> </td>
                <td> <center><?php print $m['Jurusan']; ?></center> </td>
                <td> <center><?php print $m['Email']; ?></center> </td>
                <td> <center>...</center> </td>
                <td> <center></i></a>
                      <a href="detailpemohon.php?ID=<?php print $m['ID']?>" class="btn btn-primary btn-sm"><font size=2>Detail</a>
					  <a href="konfirmasipendaftar.php?ID=<?php print $m['ID']?>" class="btn btn-warning btn-sm"><font size=2 color="white">Terima</a>
                      <a href="konfirmasitolak.php?ID=<?php print $m['ID']?>" class="btn btn-danger btn-sm"><font size=2>Tolak</a>
                      </center>
              </tr>
            </tbody>
            <?php
                }
            ?> 
          </table>
		  
		  <img src="../img/badge_header.jpg" width='1111px' height='2px'>
			<div class="about-content">
				<h6>Permohonan sudah dikonfirmasi :</h6>
			</div>
			<table class="table table-condensed table-bordered">
		     <thead>
              <tr>
                <th><center>Nama</th>
                <th><center>Sekolah</th>
                <th><center>Jurusan</th>
                <th><center>Email</th>
                <th><center>Status</th>
              </tr>
            </thead>
            <?php
                $i=0; 
                $query = mysqli_query($con,"select * from konfirmasi");
                  while ($m=mysqli_fetch_array($query))
                  {
                    $i++;
            ?>
            <tbody>
              <tr>
                <td> <center><?php print $m['Nama']; ?></center> </td> 
                <td> <center><?php print $m['Asal']; ?></center> </td>
                <td> <center><?php print $m['Jurusan']; ?></center> </td>
                <td> <center><?php print $m['Email']; ?></center> </td>
                <td> <center><?php print $m['Status']; ?></center> </td>
              </tr>
            </tbody>
            <?php
                }
            ?> 
          </table>
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