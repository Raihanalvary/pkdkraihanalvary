<?php
$arrNilai = array ("Ani" => 80, "Otim" => 90, "Ana" => 75,"Budi" => 85);
$rata = 
echo "Menampilkan isi array dengan foreach : <br>";
foreach ($arrNilai as $nama => $nilai) {
echo "Nilai $nama = $nilai<br>";
echo "Rata_rata nilai kelas ="
}
reset ($arrNilai);
echo "<br>Menampilkan isi array dengan while dan list : <br>";
while (list ($nama, $nilai) = each($arrNilai)) {
echo "Nilai $nama = $nilai<br>";
}
?>