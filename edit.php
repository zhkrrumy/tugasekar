<?php 
include '../model/database.php';
$db = new db();
?>
 
<h3>Edit Data Mahasiswa</h3>
 
<form action="../controller/proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['kode_pasient']) as $d){
?>
<table>
	<tr>
		<td>kode pasien</td>
		<td>
			<input type="hidden" name="kode_pasient" value="<?php echo $d['kode_pasient'] ?>">
			<input type="text" name="kode_pasient" value="<?php echo $d['kode_pasient'] ?>">
		</td>
	</tr>
	<tr>
		<td>Nama pasien</td>
		<td>
			<input type="text" name="nama_pasien" value="<?php echo $d['nama_pasien'] ?>">
		</td>
	</tr>
	<tr>
		<td>umur</td>
		<td>
			<input type="text" name="umur" value="<?php echo $d['umur'] ?>">
		</td>
	</tr>
	<tr>
		<td>jenis kelamin</td>
		<td><input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin'] ?>"></td>
	</tr>
	<tr>
		<td>alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>keluhan</td>
		<td>
			<input type="text" name="keluhan" value="<?php echo $d['keluhan'] ?>">
		</td>
	</tr>
	<tr>
		<td>dokter</td>
		<td>
			<input type="text" name="dokter" value="<?php echo $d['dokter'] ?>">
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>