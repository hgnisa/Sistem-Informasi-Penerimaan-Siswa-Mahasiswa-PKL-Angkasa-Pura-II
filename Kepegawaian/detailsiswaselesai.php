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
	include "Controller/koneksi_copy.php";
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
        <table class="table">
		  <thead>
		    <?php
				 $ID = $_GET['ID'];
				 $query = "SELECT * FROM siswaselesai WHERE ID = '$ID'"; // Query untuk menampilkan semua data siswa
				 $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
				 while($data = mysqli_fetch_array($sql)){ 
				?>
				<tr>
                <th width=30px><center>Nama</th>
                <td><center>:</td>
				<td><?php print $data['Nama'];?></td> 
              </tr><tr>
                <th><center>Asal</th>
                <td><center>:</td>
				<td><?php print $data['Asal'];?></td>
              </tr><tr>
                <th><center>Jurusan  </th>
                <td><center>:</td>
				<td><?php print $data['Jurusan'];?></td>
              </tr><tr>
                <th><center>Email</th>
                <td><center>:</td>
				<td><?php print $data['Email'];?></td>
			  </tr><tr>
			  </tr><tr>
                <th><center>Tanggal<br>Mulai</th>
                <td><center>:</td>
				<td><?php print $data['TglMasuk'];?></td>
			  </tr><tr>
			  </tr><tr>
                <th><center>Tanggal Selesai</th>
                <td><center>:</td>
				<td><?php print $data['TglSelesai'];?></td>
			  </tr><tr>
                <th><center>Unit</th>
                <td><center>:</td>
				<td><?php print $data['Unit'];?></td>
			  </tr><tr>
                <th><center>Pas Foto</th>
                <td><center><br><br>:</td>
				<?php
				echo "<td><img src='../images/".$data['foto']."' width='100' height='130'>";
				?>
				&nbsp;&nbsp;<a href='http://localhost/angkasa/images/<?php print $data['foto'];?>' target="_blank" rel="nofollow" class="btn btn-default btn-xs">Lihat Foto</a></td>
			  </tr><tr>
                <th><center>Surat</th>
                <td><center><br><br>:</td>
				<?php
				echo "<td><img src='../images/".$data['surat']."' width='100' height='130'>";
				}?>
				&nbsp;&nbsp;<a href='http://localhost/angkasa/images/<?php print $data['surat'];?>' target="_blank" rel="nofollow" class="btn btn-default btn-xs">Lihat Surat</a></td><br>
			  </tr><tr>
			    <td></td>
			    <td></td>
			    <td><a href="lihatsiswamagang.php" class="btn btn-default btn-lg" align="right"><font size=2>Kembali<i class="fa fa-edit"></i></a></td>
              </tr>
			</thead>
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