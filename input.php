<!DOCTYPE html>
<html lang="en">
<head>
	<title>Input Data</title>
</head>


<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/style.scss">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
<!--===============================================================================================-->
<h1 style="text-align:center;">>>Tambah Pasien<<</h1>
<p style="text-align:center;">Isilah Data dengan Baik dan Benar<strong></strong>.</p>

<style>
img {
  margin: 0 auto;
  display: block;
  margin-top: 7%;
}
</style>
</head>
<body>
	<?php
	include '../model/database.php';
	$db = new db();
	?>	
<div class="container">
		<div class="col-md-12">
			<div class="table-wrap">
				<div class="table table-bordered table-dark table-hover">
	<a href=" tampil.php">kembali</a>					
	<form action="../controller/proses.php?aksi=tambah" method="post">

	<table>
	<tr>
		<td>kode pasien</td>
		<td><input type="text" name="kode_pasient"></td>
	</tr>
	<tr>
		<td>Nama Pasien</td>
		<td><input type="text" name="nama_pasien"></td>
	</tr>
	<tr>
		<td>umur</td>
		<td><input type="text" name="umur"></td>
	</tr>
	<tr>
		<td>jenis kelamin</td>
		<td><input type="text" name="jenis_kelamin"></td>
	</tr>
	<tr>
		<td>alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>keluhan</td>
		<td><input type="text" name="keluhan"></td>
	</tr>
	<tr>
		<td>dokter</td>
		<td><input type="text" name="dokter"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>
</div>
</div>
</div>
</div>

<!--===============================================================================================-->	
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>