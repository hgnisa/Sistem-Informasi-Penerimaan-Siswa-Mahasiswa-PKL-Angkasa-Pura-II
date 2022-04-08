<html>
<head>
  <title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
</head>
<body>
  <h1>Data Siswa</h1>
  <a href="pengajuan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>Foto</th>
    <th>Nama</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "Controller/koneksi_copy.php";
  
  $query = "SELECT * FROM pendaftar"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
    echo "<td>".$data['Nama']."</td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>