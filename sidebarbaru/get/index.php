<!DOCTYPE html>
<title>BELAJAR</title>
<?php
$page=$_SERVER['PHP_SELF'];
$waktu='5';
?>
<html>
<head>
    <center>
   <h2>BELAJAR</h2>
   </center>
    <meta http-equiv="refresh" content="5"/>
</head>
<body bgcolor=grey>
   <center><?php
   date_default_timezone_set('Asia/Jakarta');
   echo date('l d-m-Y h:i:s a');?></center
   <br/>
   <center>
   <table border="2" bgcolor=white width=800px>
        <tr>
			 <th width=100px>No</th>
		     <th width=100px>Waktu</th>
			 <th width=100px>Suhu</th>
			 <th width=100px>Kelembapan</th>
			 <th width=100px>Data</th>
		</tr>
     	<?php
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"select * from t_datacoba");
		$nama = mysqli_query($koneksi,"select * from t_datacoba");
		$absen = mysqli_query($koneksi,"select * from t_datacoba");
		while($d = mysqli_fetch_assoc($data)){
		    ?>
			<tr>
			   <td><?php echo $d['id']; ?></td>
			   <td><?php echo $d['waktu']; ?></td>
			   <td><?php echo $d['data']; ?></td>
			   <td><?php echo $d['nama']; ?></td>
			   <td><?php echo $d['absen']; ?></td>
			   
		</tr>	
   		<?php
	    } 
		?>
	<table>
	</center>
</body>
</html>	