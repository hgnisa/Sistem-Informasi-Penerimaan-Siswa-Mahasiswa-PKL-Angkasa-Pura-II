<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Angkasa Pura II</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="../img/favicon.png" rel="icon">
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
 ?>
 
 <?php
    $ID = $_GET['ID'];
    $sql="SELECT * FROM siswamagang WHERE ID = '$ID'";
    $query =mysqli_query($con,$sql); 
    $m = mysqli_fetch_object($query);
 ?>

<body>
  <header id="header"> 
    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="https://twitter.com/contactap2" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <h3 class="text-light"><a href="#intro" class="scrollto"><span>Angkasa Pura II</span></a></h3>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="pengajuankp.php">Pengajuan PKL</a></li>
          <li class="drop-down"><a href="">Bagian Dinas</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
		 <li><a href="lihatsaran.php">LIHAT SARAN</a></li>
		  <li><a href="login.php">KELUAR</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">
        <div class="row">
            <div class="form">
			  <br><br><br>
              <p>Konfirmasi Hapus Siswa Magang?
			  </p>
            <form method="post" action="Controller/hapuspendaftar.php">
			    <div class="form-group">
                  <input type="text" name="ID" class="form-control" id="ID" value="<?php print $m->ID;?>"/>
                </div>
                <div class="form-group">
                  <input type="text" name="Nama" class="form-control" id="Nama" value="<?php print $m->Nama;?>"/>
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="Asal" id="Asal" value="<?php print $m->Asal;?>"/>
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="Jurusan" id="Jurusan" value="<?php print $m->Jurusan;?>"/>
                  <div class="validation"></div> 
                </div>
                <div class="form-group">
                  <input class="form-control" name="Email" id="Email" value="<?php print $m->Email;?>"></input>
                  <div class="validation"></div>
                </div>
                <div id="sendmessage">Pesan anda telah dikirim. Terimakasih!</div>
                <div id="errormessage"></div>
                <div class="text-center"><button type="submit" title="Send Message">Konfirmasi Hapus</button></div>
				<br><br><br><br><br><br>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
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


  
  