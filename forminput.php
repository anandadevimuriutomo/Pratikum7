<!DOCTYPE html>
<html>
<head>
	<title>From Input</title>
</head>
<body>
<form method="post" action="simpan.php"> <!-- membuat form metods-->
	<table>
		<tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" name="nim"></td></tr>
		<tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
		<tr><td>JENIS KELAMIN</td><td>
			<input type="radio" name="jenis_kelamin" value="L">Laki Laki
			<input type="radio" name="jenis_kelamin" value="P">Perempuan
		</td></tr>
		<tr><td>JURUSAN</td><td>
			<select name="jurusan">  <!-- membuat baris dan isi cell jurusan-->
				<option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
				<option value="TEKNIK MESIN">TEKNIK MESIN</option>
				<option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
			</select>
		</td></tr>
		<tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr> <!-- membuat cell dengan teks alamat dan input type text-->
		<tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr><!--membuat input  submit untuk mengirimkan form -->
	</table>
</form>
</body>
</html>