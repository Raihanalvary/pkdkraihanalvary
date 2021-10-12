<?php
$nilai1 =90;
if ($nilai1 >= 100) {
     echo "";
}else if ($nilai1 < 70) {
    echo 'Nilai : ' .$nilai1 . '<br> Keterangan = Maaf Anda Tidak Lulus.'; 
} else if ($nilai1 >= 70 && $nilai1 <= 79) {
    echo 'Nilai : ' . $nilai1 . ' <br> Grade = C.  <br> Keterangan = Selamat Anda Lulus. ';
} else if ($nilai1 >= 80 && $nilai1 <= 89) {
    echo 'Nilai : ' . $nilai1 . ' <br> Grade = B.  <br> Keterangan = Selamat Anda Lulus. ';
} else if ($nilai1 >= 90 && $nilai1 <= 100) {
    echo 'Nilai : ' . $nilai1 . ' <br> Grade = A.  <br> Keterangan = Selamat Anda Lulus. ';
   } 
else{
    echo 'Nilai : ' . $nilai1 . 'Maaf Anda Tidak Lulus.';
    }
?>