<?php
$nim = "0411400500";
$nama = "Muhammad Raihan Alvary";
$umur = "16";
$nilai = "90,75";
$status = "TRUE";

echo "Nim : " . $nim . "<br>";
echo "Nama :" . $nama . "<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
   echo "Status : Aktif";
else 
   echo "Status : Tidak Aktif";
?>