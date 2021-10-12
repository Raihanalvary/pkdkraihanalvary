<html>
<head>
       <title>Title here!</title>
</head>
<body bgcolor=cyan>
<h1> BUKTI PENDAFTARAN KURSUS ONLINE </h1>
<center>
<marquee behavior="alternate">
<b><i>Jl. Cut Mutiah Bekasi Timur <br></i></b>
</marquee>
<hr color = red>
</center>
<pre>
<?php
$tgl = $_GET['tgl'];
$bln = $_GET['bln'];
$thn = $_GET['thn'];
$tempat = $_GET['tempat'];
$nama = $_GET['nama'];
$alamat= $_GET['alamat'];
$sekolah=$_GET['sekolah'];
$paket = $_GET['paket'];

switch ($paket){
       case "VB Fundamental":
       $harga=350000;
       break;
       case "VB Advance":
       $harga=500000;
       break;
       case "Foxpro":
       $harga=400000;
       break;
       case "Web Pro1":
       $harga=650000;
       break;
      default:
       $harga=500000;
       break;
}
echo "
*** BUKTI PENDAFTARAN KURSUS ONLINE ***
=======================================
Nama           : $nama
Alamat Email   : $alamat
Tempat Lahir   : $tempat

Tgl Lahir      : $tgl-$bln-$thn
Sekolah        : $sekolah
PAket          : $paket
Harganya       : $harga
=======================================<br>
***Terima Kasih Atas Kepercayaan Anda Kepada Kami***";
?>
</pre>
<hr color = red>
<a href = "inputkursus.php">ISI DATA LAGI</a>
</body>
</html>