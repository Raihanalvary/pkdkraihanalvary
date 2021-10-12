<?php
    //membuat koneksi
    $con = mysqli_connect("localhost", "root", "", "diagnosa");

    
    //memasukkan data ke array
        $idaduan       = $_POST['idaduan'];
        $idpelanggan   = $_POST['idpelanggan'];
        $masalah       = $_POST['masalah'];
        $solusi        = $_POST['solusi'];

        $total = count($idaduan);


    //melakukan perulangan input
    for($i=0; $i<$total; $i++){

        mysqli_query($con, "insert into mahasiswa set
            idaduan    = '$idaduan[$i]',
            idpelanggan  = '$idpelanggan[$i]',
            masalah  = '$masalah[$i]',
            solusi = '$solusi[$i]'
        ");
    }

    //kembali ke halaman sebelumnya
    header("location: diagnosa.php");