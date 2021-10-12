<?php
session_start();
$form_error = '';

if (isset($_POST['submit'])){
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
    if($email == 'raihan@smk5.com' AND $password == 'aku123'){

        $_SESSION['email'] = $email;
        header('Location: profil.php');
    }else{


        $form_error = '<p>Password atau email yang kamu masukkan salah</p>';
    }
}

?>

<!DOCTYPE html>
<head>
    <title>Login</title>
</head>
<body>

    <h3>Silahkan Login</h3>

    <form method="POST" action="index.php">
        Email : <input type="email" name="email"><br>
        Password : <input type="password" name="password"><br>
        <?php echo $form_error; ?>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
<?html>	