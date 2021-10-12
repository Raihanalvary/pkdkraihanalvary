<?php
if( isset($_REQUEST['submit']) ){
 
    include('db.php');
 
    $title = $_REQUEST['judul'] ? htmlspecialchars($_REQUEST['judul']) : 'blun ada judul'; //ternary operator
 
    $filename = basename($_FILES['userfile']['name']);
    $uploadfile = $dir_gambar . $filename;
 
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        $query = "INSERT INTO tgambar VALUES('', '$title', '$filename')";
        $query = mysql_query($query);
        if(!$query){
            die( mysql_error() );
        }
        header('Location: galeri.php?j=' . $title);
        exit();
    } else {
        echo "Kemungkinan hacking!\n";
    }
}else{
    echo "Anda kesasaar? kembali ke <a href='index.php'>jalan yang benar</a>";
}
?>