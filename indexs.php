<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>List Mahasiswa</h2>
<table border="1">
	<tr><th>NO</th><th>NIM</th><th>NAMA</th><th>GENDER</th><th>JURUSAN</th></tr>
	<?php
	include 'koneksi.php'; // memasukan file koneksi
	$mahasiswa=mysqli_query($koneksi, "SELECT * FROM mahasiswa");
	$no=1;// membuat variabel no yang menyimpan nilai 1
	foreach ($mahasiswa as $row) { // buat perulangan
		$jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki-laki';
		echo "<tr> 
		<td>$no</td>
		<td>".$row['nim']."</td>
		<td>".$row['nama']."</td>
		<td>".$row[`jenis_kelamin`]."</td>
		<td>".$row['jurusan']."</td>
		<td>".$row['alamat']."</td>
		</tr>";
		$no++;	//nilai variabel akan bertambah saat perulangan
	}
	?>
</table>
</body>
</html>