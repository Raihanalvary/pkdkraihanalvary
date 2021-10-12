<!DOCTYPE html>
<html>
<head>
	<title>Belajar Membuat Web</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body style="background-image:url(kucing.jpg)">
<div class="content">
	<header>
		<h1 class="judul">SELAMAT DATANG DI WEB KAMI </h1>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=tentang">DATA LOG</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "index1.php";
				break;
			case 'tentang':
				include "datalog.php";
				break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "index1.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>