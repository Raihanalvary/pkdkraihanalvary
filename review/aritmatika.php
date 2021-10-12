<?php
$bakso = 10000;
$teh = 3000;
$uang_bayar=50000;
$jumlahpesanan=3;
$total=($bakso+$teh)*$jumlahpesanan;
$kembali=($uang_bayar-$total);

echo "Bakso :$bakso/mangkuk<br>";
echo "Teh : $teh/gelas<br>";
echo "Jumlah Pesanan = $jumlahpesanan<br>";
echo "Total Bayar = $total<br>";
echo "Uang Bayar = $uang_bayar<br>";
echo "Kembalian = $kembali<br>";
?>