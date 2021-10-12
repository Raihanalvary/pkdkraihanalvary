<?php
if (isset($_POST['Login'])) {
 $user = $_POST['uname'];
 $pass = $_POST['psw']; 
 if ($user == "admin" && $pass == "admin") {
  header("location:index.php");
 } else {
  echo "<h2>Login Gagal</h2>";
?>
