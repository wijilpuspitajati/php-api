<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
	<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
	<div class="judul">
		<h2>Edit data pada database</h2>
	</div>
	<br/>

	<section id="input">
		<form action="aksi_input.php" method="post">
			<div class="form">
				<label>ID</label>
				<input type="text" name="id">
			</div>
			<div class="form">
				<label>Nama Pengguna</label>
				<input type="text" name="username">
			</div>
			<div class="form">
				<label>Kata Sandi</label>
				<input type="password" name="password">
			</div>
			<div class="form">
				<label>Level</label>
				<input type="text" name="level">
			</div>
			<div class="form">
				<label>Nama Lengkap</label>
				<input type="text" name="fullname">
			</div>
			<a href="index.php">Lihat Semua Data</a>
			<div class="form">
				<input type="submit" name="submit"
				value="SUBMIT" class="bg-blue">
			</div>
		</form>
	</section>
</body>
</html>