<!DOCTYPE html>
<html>
<head>
    <title>PENDAFTARAN</title>
</head>
<body>

	<h2>CRUD DATA PENDAFTARAN</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH DAFTAR</a>
	<br/>
	<br/>
	<table border="1">
	    <tr>
		    <th>No</th>
			<th>Nama</th>
			<th>Nis</th>
			<th>Alamat</th>
			<th>OPSI</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no =1;
		$data = mysqli_query($koneksi,"select * from t_data");
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
		    <td><?php echo $no++; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['nis']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo$d['id']; ?>">EDIT</a>
				<a href="hapus.php?id=<?php echo$d['id']; ?>">HAPUS</a>
			</td>
		</tr>
		<?php
	}
	?>
  </table>
</body>
</html>  