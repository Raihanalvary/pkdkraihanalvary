<!DOCTYPE HTML
<html>
<title>Login</title>
    <div class="container">
        <?php
        if (isset($_POST['Log in'])) {
        $user = $_POST['Username'];
        $pass = $_POST['Password']; 
        if ($user == "Raihan" && $pass == "aku123") {
         echo "<h2>Login Berhasil</h2>";
        } else {
            echo "<h2>Login Gagal</h2>";
            }
        }
       ?>
    </div>   
</html>     