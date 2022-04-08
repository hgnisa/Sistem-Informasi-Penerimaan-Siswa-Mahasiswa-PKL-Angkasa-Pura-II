<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
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
 <?php
    include "header.php";
 ?>
 
<script type="text/javascript">
	$(document).ready( function () {
		$('#tabel').DataTable({
			//paging: false
			//ordering: false
			/*"columnDefs":[
			{
				"targets": [ 2 ],
				"visible": false,
				"searchable": false
			}
			]*/
		});
	});
</script>
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">
        <div class="row">
            <div class="form col-md-6" >
			  <div class="about-content">
		        <h6><i><br><br><br><br><br>Edit data siswa magang:</i></h6>
		      </div>
            <form method="POST" action="Controller/editsiswamagang.php">
			    <div class="form-group">
                  <input type="text" name="ID" class="form-control" id="ID" placeholder="ID" value="<?php print $m->ID;?>"/>
                </div>
                <div class="form-group">
                  <input type="text" name="Nama" class="form-control" id="Nama" placeholder="Masukkan Nama Anda" value="<?php print $m->Nama;?>"/>
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="Asal" id="Asal" placeholder="Masukkan Asal Sekolah / Perguruan Tinggi Anda" value="<?php print $m->Asal;?>"/>
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="Jurusan" id="Jurusan" placeholder="Masukkan Jurusan Anda" value="<?php print $m->Jurusan;?>"/>
                  <div class="validation"></div> 
                </div>
                <div class="form-group">
                  <input class="form-control" name="Email" id="Email" placeholder="Masukkan Email Anda" value="<?php print $m->Email;?>"></input>
                  <div class="validation"></div>
                </div>
				<div class="form-group">
				 <select class="form-control" name="Unit">
                    <?php
						$sql = "SELECT * FROM unit";
						$query = mysqli_query($con,$sql); 				
						while ($d = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?php echo $d['nama'];?>"><?php echo $d['nama'] ?></option>
                    <?php } ?>
                  </select>
				</div>
                <div id="sendmessage">Pesan anda telah dikirim. Terimakasih!</div>
                <div id="errormessage"></div>
                <div class="text-right"><button type="submit" title="Send Message">Edit</button>
                <a href="lihatsiswamagang.php" class="btn btn-default btn-lg" align=left><font size=2>Kembali<i class="fa fa-edit"></i></a></div>
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


<!-- Load JS here for Faster site load =============================-->
<script src="../js/js/jquery-1.10.2.min.js"></script>
<script src="../js/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="../js/js/less-1.5.0.min.js"></script>
<script src="../js/js/jquery.ui.touch-punch.min.js"></script>
<script src="../js/js/bootstrap.min.js"></script>
<script src="../js/js/bootstrap-select.js"></script>
<script src="../js/js/bootstrap-switch.js"></script>
<script src="../js/js/jquery.tagsinput.js"></script>
<script src="../js/js/jquery.placeholder.js"></script>
<script src="../js/js/bootstrap-typeahead.js"></script>
<script src="../js/js/application.js"></script>
<script src="../js/js/moment.min.js"></script>
<script src="../js/js/jquery.dataTables.min.js"></script>
<script src="../js/js/jquery.sortable.js"></script>
<script type="text/javascript" src="../js/js/jquery.gritter.js"></script>
<script src="../js/js/jquery.nicescroll.min.js"></script>
<script src="../js/js/skylo.js"></script>
<script src="../js/js/prettify.min.js"></script>
<script src="../js/js/jquery.noty.js"></script>
<script src="../js/js/bic_calendar.js"></script>
<script src="../js/js/jquery.accordion.js"></script>
<script src="../js/js/theme-options.js"></script>

<script src="../js/js/bootstrap-progressbar.js"></script>
<script src="../js/js/bootstrap-progressbar-custom.js"></script>
<script src="../js/js/bootstrap-colorpicker.min.js"></script>
<script src="../js/js/bootstrap-colorpicker-custom.js"></script>


<!-- Page Script  =============================-->
<script src="../js/js/jquery.mixitup.min.js"></script>
<script src="../js/js/lightbox-2.6.min.js"></script>
<script src="../js/js/gallery-custom.js"></script>

<!-- Core Jquery File  =============================-->
<script src="../js/core.js"></script>
</div>
</body>
</html>


  
  