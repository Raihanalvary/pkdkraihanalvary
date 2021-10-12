<?php
	include 'koneksi.php';
	date_default_timezone_set('Asia/Jakarta');
    $date=date('Y-m-d H:i:s');
	$data=$_GET['a'];
	$nama=$_GET['b'];
	$absen=$_GET['c'];
	echo $data.$nama.$absen.'*'.$date;
	$q1=mysqli_query($koneksi,"insert into t_datacoba values('','$date','$data','$nama','$absen')");
?>