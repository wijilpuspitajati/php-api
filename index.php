<html>
<head>
  <title>Menampilkan data</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="container">
  	<h2><center>DATA KELAS SAYA</center></h2>
  	<table class="tabel" align="center">
  <tr>
  	<th>ID</th>
  	<th>Nama Pengguna</th>
  	<th>Kata Sandi</th>
  	<th>Level</th>
  	<th>Nama Lengkap</th>
  </tr>
  </div>
  <?php
  include('koneksi.php');
  $sql_tampil ="SELECT * FROM users";
  $peserta=mysqli_query($conn,$sql_tampil);
  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
  	echo'
  	</tr>
  		<td>'.$baris_data['id'].'</td>
  		<td>'.$baris_data['username'].'</td>
  		<td>'.$baris_data['password'].'</td>
  		<td>'.$baris_data['level'].'</td>
  		<td>'.$baris_data['fullname'].'</td>
  	</tr>';
  }
  ?>
</body>
</html>