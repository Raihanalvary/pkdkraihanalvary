<!DOCTYPE html>
<html>
<head>
     <title>CRUD DATA PENDAFTARAN</title>
</head>
<body>

    <h2></h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA PENDAFTARAN</h3>
	<form method="post" action="tambah_aksi.php">
	    <table>
		    <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nis</td>
				<td><input type="number" name="nis"></td>
			</tr>
			<tr>
                <td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
			    <td></td>
				<td><input type="submit" value="SIMPAN"></td>
		</table>
	</form>
</body>
</html>	