<!DOCTYPE html>
<html>
    <head>
<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<title>Form Login</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

   </head>

   <body> 
<div class='container'>
  <form action="proseslogin.php" method="post">
  
  <h1><center>Masuk<center></h1>
  <label>Username</label><br>
    <input name="username" type="text"><br>
  <label>Password</label><br>
    <input name="password" type="password"><br>
  <br>
  
  <button><input value="Login" type="submit"> </button>
  <button><input value="Batal" type="reset"></button><br>

  
  </form>
</div>
   </body>
</html>   