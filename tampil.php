<?php
include '../model/database.php';
$db = new db();
?>
<html lang="en">
<head><center>

</center>
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
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="../css/style.scss">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/rtl.css">
<!--===============================================================================================-->
<a href="https://colorlib.com/wp/templates/"><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.logique.co.id%2Fblog%2F2019%2F08%2F07%2Feksistensi-praktek-dokter-gigi%2F&psig=AOvVaw14FWVAtG6BAsbtwvwNxW0j&ust=1622100394087000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIDhiIzp5vACFQAAAAAdAAAAABAD" alt="Colorlib logo"></a>
<h1 style="text-align:center;">>>Pendaftaran Klinik Gigi<<</h1>
<p style="text-align:center;">Thanks for using our Website<strong></strong>.</p>

<style>
img {
  margin: 0 auto;
  display: block;
  margin-top: 7%;
}
</style>
</head>
<body>
	
	<div class="container">
		<div class="col-md-12">
			<div class="table-wrap">
				<div class="table table-bordered table-dark table-hover">
					
<a href="input.php">Input Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>kode pasien</th>
		<th>Nama pasien</th>
		<th>Umur</th>
		<th>jenis kelamin</th>
		<th>alamat</th>
		<th>keluhan</th>
		<th>dokter</th>
		<th>Aksi</th>
	</tr>
	<?php
	$no = 1;
	foreach ($db->tampil_data() as $x){
		?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['kode_pasient']; ?></td>
		<td><?php echo $x['nama_pasien']; ?></td>
		<td><?php echo $x['umur']; ?></td>
		<td><?php echo $x['jenis_kelamin']; ?></td>
		<td><?php echo $x['alamat']; ?></td>
		<td><?php echo $x['keluhan']; ?></td>
		<td><?php echo $x['dokter']; ?></td>
		<td>
			<a href="edit.php?kode_pasient=<?php echo $x['kode_pasient']; ?>&aksi=edit">Edit</a>
			<a href="../controller/proses.php?kode_pasient=<?php echo $x['kode_pasient']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>
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