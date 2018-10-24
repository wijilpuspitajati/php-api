<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL</title>
	<link rel="stylesheet" type="text/css" href="tabel.css">
</head>
<body>
	<div class="judul">
		<h1 align="center">Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2 align="center">Menampilkan data dari database</h2>

	</div>

	<h3 align="center">Input data</h3>
	<form action="aksi_input.php" method="post">
		<table align="center">
      <tr>
        <td>ID</td>
        <td><input type="text" name="id"></td>
      </tr>
			<tr>
				<td>Nama Pengguna</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Kata Sandi</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td><input type="text" name="level"></td>
			</tr>
      <tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	
	<h4 align="center"> <a href="index.php">Lihat Semua Data</a></h4>


	</form>
</body>
</html>