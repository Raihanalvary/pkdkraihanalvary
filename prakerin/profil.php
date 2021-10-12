<?php
session_start();


if( empty($_SESSION['email']) ){
	header('Location: index.php');
}

?>

<!DOCTYPE html>
<head>
     <title>Profil</title>
</head>
<body>
    <!-- Menampilkan isi session email -->
    <h3> Hallo Selamat Datang <?php echo $_SESSION['email']; ?> </h3>
</body>
</html>	