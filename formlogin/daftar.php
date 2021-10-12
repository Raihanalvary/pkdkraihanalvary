<!DOCTYPE html>

<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  </head>
  <body>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Website <span>Evos</span></h3>
      
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="evos.png" class="profile_image" alt="">
        <h4>Evos Roar</h4>
      </center>
      <a href="daftar.php"><i class="fas fa-desktop"></i><span>Daftar</span></a>
      <a href=ChatApp/index><i class="fas fa-envelope"></i><span>Chat</span></a>
      <a href="login.php"><i class="fas fa-power-off"></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    <div class='container'>
  <form action="prosesdaftar.php" method="post">
  <h1><center>Daftar Baru<center></h1>    

  <label>Username</label> <br>
   <input name="username" type="text"><br>
  <label>Password</label> <br>
   <input name="password" type="password"><br>
   <input name="Daftar" type="submit"><br>
   <input name="Batal" type="reset"><br>
  </form>
</div>
    </div>

   </body>



</html>
