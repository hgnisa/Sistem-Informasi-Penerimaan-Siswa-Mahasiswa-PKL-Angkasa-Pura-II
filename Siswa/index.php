<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Angkasa Pura II</title>
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

<body>
<?php
include "header.php";
include "Controller/koneksi.php"
?>

  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Penerimaan<br><span>Praktek Kerja Lapangan</span></h2>
          <div>
            <a href="../Siswa/pengajuan.php" class="btn-get-started scrollto">Ajukan Permohonan</a>
          </div>
        </div>
        <div class="col-md-6 intro-img order-md-last order-first">
		  <br><br>
          &nbsp;&nbsp;&nbsp;
		  <img src="../img/sultan.png" alt="" class="img-fluid" width='500px' height="250px">
        </div>
      </div>
    </div>
  </section>
	
	<header class="section-header">
          <h3>Kuota Tersedia</h3>
          <p>Kuota tersedia dari setiap unit divisi.</p>
    </header>
	<?php
	include "about.php";
	?>
	
	<header class="section-header">
          <h3>Kuota Tersedia</h3>
          <p>Kuota tersedia dari setiap unit divisi.</p>
    </header>
	
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <div class="row counters">
          <div class="col-lg-3 col-6 text-center">
		    <?php
                $query = mysqli_query($con,"SELECT * FROM unit WHERE id = 1"); 
				$n = mysqli_fetch_object($query);
            ?>
            <span data-toggle="counter-up"><?php print $n->kuota;?></span>
            <p><?php print $n->nama;?></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
		    <?php
                $query = mysqli_query($con,"SELECT * FROM unit WHERE id = 2"); 
				$n = mysqli_fetch_object($query);
            ?>
            <span data-toggle="counter-up"><?php print $n->kuota;?></span>
            <p><?php print $n->nama;?></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
		    <?php
                $query = mysqli_query($con,"SELECT * FROM unit WHERE id = 3"); 
				$n = mysqli_fetch_object($query);
            ?>
            <span data-toggle="counter-up"><?php print $n->kuota;?></span>
            <p><?php print $n->nama;?></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
		    <?php
                $query = mysqli_query($con,"SELECT * FROM unit WHERE id = 4"); 
				$n = mysqli_fetch_object($query);
            ?>
            <span data-toggle="counter-up"><?php print $n->kuota;?></span>
            <p><?php print $n->nama;?></p>
          </div>
        </div>
		        <div class="row counters">
          <div class="col-lg-3 col-6 text-center">
		    <?php
                $query = mysqli_query($con,"SELECT * FROM unit WHERE id = 5"); 
				$n = mysqli_fetch_object($query);
            ?>
            <span data-toggle="counter-up"><?php print $n->kuota;?></span>
           <p><?php print $n->nama;?></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
		    <?php
                $query = mysqli_query($con,"SELECT * FROM unit WHERE id = 6"); 
				$n = mysqli_fetch_object($query);
            ?>
            <span data-toggle="counter-up"><?php print $n->kuota;?></span>
            <p><?php print $n->nama;?></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
		    <?php
                $query = mysqli_query($con,"SELECT * FROM unit WHERE id = 7"); 
				$n = mysqli_fetch_object($query);
            ?>
            <span data-toggle="counter-up"><?php print $n->kuota;?></span>
            <p><?php print $n->nama;?></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
		    <?php
                $query = mysqli_query($con,"SELECT * FROM unit WHERE id = 8"); 
				$n = mysqli_fetch_object($query);
            ?>
            <span data-toggle="counter-up"><?php print $n->kuota;?></span>
            <p><?php print $n->nama;?></p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <br><br>

  <footer id="footer" class="section-bg">
  	<?php
	include "contact.php";
	?>
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
