<!DOCTYPE html>
<html>
<head>
	<title>Simpan dan Kirim Email</title>
	<meta name="Agung Supeno" content="https://www.agungsupeno.wordpress.com">
</head>
<body>
 
	<h2>FORM INPUT DATA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Tambah data yang nantinya akan disimpan ke database dan dikirim ke email.</h3>
	<form method="post" action="test-1.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="save" value="Tambah"></td>
			</tr>		
		</table>
	</form>
</body>
</html>