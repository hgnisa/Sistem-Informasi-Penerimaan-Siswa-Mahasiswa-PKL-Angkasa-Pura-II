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

<body>
    <?php
include "header.php";
?>
<br><br><br>
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="form"> <br><br>
			<div class="about-content">
              <h3>Pengajuan Permohonan</h3><br>
            </div>
				<form method="post" action="Controller/ajukanpermohonan.php" enctype="multipart/form-data">
                <div class="form-group">
				  <font size="2px" color="grey">&nbsp;Masukkan nama lengkap</font>
                  <input type="text" class="form-control" name="Nama" class="form-control" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
				<div class="form-group">
				  <font size="2px" color="grey">&nbsp;Masukkan asal sekolah / perguruan tinggi</font>
                  <input type="text" class="form-control" name="Asal" class="form-control" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
				  <font size="2px" color="grey">&nbsp;Masukkan jurusan</font>
                  <input type="text" class="form-control" name="Jurusan" class="form-control" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
				  <font size="2px" color="grey">&nbsp;Masukkan alamat email</font>
                  <input type="email" class="form-control" name="Email" ata-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
				<div class="form-group">
				  <font size="2px" color="grey">&nbsp;Masukkan tanggal mulai PKL</font>
                  <input type="date" class="form-control" name="TglMasuk" id="TglMasuk" placeholder="Masukan Tanggal Masuk Periode PKL" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
				<div class="form-group">
				  <font size="2px" color="grey">&nbsp;Masukkan lama periode PKL</font>
				  <select class="form-control" name="Lama">
					  <option value="30">1 Bulan</option>
					  <option value="60">2 Bulan</option>
					  <option value="90">3 Bulan</option>
				  </select><div class="validation"></div>
                </div>
				<div class="form-group">
				  <font size="2px" color="grey">&nbsp;Upload pas foto 3 x 4</font>
				  <input type="file" class="form-control" name="foto" placeholder="" />
                  <div class="validation"></div>
                </div>
				<div class="form-group">
				  <font size="2px" color="grey">&nbsp;Upload surat permohonan resmi (ekstensi: .jpg)</font>
                  <input type="file" class="form-control" name="surat" placeholder="" />
                  <div class="validation"></div>
                </div>
                <div id="sendmessage">Your message has been sent. Thank you!</div>
				<div id="errormessage"></div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->
  
  
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


  
  