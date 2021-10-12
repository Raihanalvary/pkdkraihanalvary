<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDEBAR</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
    <div class="side-bar">
      <div class="close-btn">
        <i class="fas fa-times"></i>
      </div>
      <div class="menu">
        <div class="item"><a href="#"><i class="fas fa-desktop"></i>Dashboard</a></div>
        <div class="item">
          <a class="sub-btn"><i class="fas fa-table"></i>Tables<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <a href="#" class="sub-item">Sub Item 01</a>
            <a href="#" class="sub-item">Sub Item 02</a>
            <a href="#" class="sub-item">Sub Item 03</a>
          </div>
        </div>
        <div class="item"><a href="#"><i class="fas fa-th"></i>Forms</a></div>
        <div class="item">
          <a class="sub-btn"><i class="fas fa-cogs"></i>Settings<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <a href="#" class="sub-item">Sub Item 01</a>
            <a href="#" class="sub-item">Sub Item 02</a>
          </div>
        </div>
        <div class="item"><a href="#"><i class="fas fa-info-circle"></i>About</a></div>
      </div>
      <a href="https://api.whatsapp.com/send?phone=62881026566555&text=Hallo%20Sam"><i class="fas fa-envelope"></i>Chat</a>
    </div>
    <section class="main">
      <h1>HELLO GUYSS</h1>
    </section>

    <script type="text/javascript">
    $(document).ready(function(){
      //jquery for toggle sub menus
      $('.sub-btn').click(function(){
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
      });

      //jquery for expand and collapse the sidebar
      $('.menu-btn').click(function(){
        $('.side-bar').addClass('active');
        $('.menu-btn').css("visibility", "hidden");
      });

      $('.close-btn').click(function(){
        $('.side-bar').removeClass('active');
        $('.menu-btn').css("visibility", "visible");
      });
    });
    </script>

  </body>
</html>
