<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="sty.css" type="text/css">
</head>
<body>

<h2>MASUK </h2>

<form action="index.php" method="post">
  <div class="imgcontainer">
    <img src="windah.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="masuk">Masuk</button>
    
</form>

</body>
</html>