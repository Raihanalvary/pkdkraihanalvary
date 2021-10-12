<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style type="text/css">
    body{
      background-image:url(back.jpg);
      background-size:cover;
      background-attachment:fixed;
      position:fixed;
    }
    .content{
      background:white;
      width: 40%;
      padding: 40px;
      margin: 100px auto;
    }
    </style>
  </head>
  <body>
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Website <span>Mantap</span></h3>
      </div>
      <div class="right_area">
        <a href="#" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
    <a href="#"><i class="fas fa-bars"></i><span>Menu</span></a>
    <a href="gangguan.php"><i class="fas fa-desktop"></i><span>Gangguan</span></a>  
    </div>
    <!--sidebar end-->
    <div class="content">
  </div>
    
  </body>
</html>  