<!DOCTYPE html>
<html>
<head>
	<title>Simpan dan Kirim Email</title>
	<meta name="Agung Supeno" content="https://www.agungsupeno.wordpress.com">
</head>
<body>
 
	<h2>TAMPIL DATA</h2>
	<br/>
	<a href="tambah.php">+ Tambah Data</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Email</th>
		</tr>
		<?php 
		include 'conn.php';
		$no = 1;
		$row = mysqli_query($koneksi,"SELECT * from data");
		while($r = mysqli_fetch_array($row)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $r['nama']; ?></td>
				<td><?php echo $r['alamat']; ?></td>
				<td><?php echo $r['email']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>