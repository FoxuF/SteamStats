<?php require "permisos/SesHandler.php"?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Steam Stats</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleSB.css">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">

    <!-- Favicon and touch icons -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="stylesheet" href="css/styleB.css">-->

  </head>

  <body>
  <div id="wrapper">

    <!-- Sidebar -->
    <nav class="sidebar">

      <!-- close sidebar menu -->
      <div class="dismiss">
        <i class="fas fa-arrow-left"></i>
      </div>

      <div class="logo">
        <h3><a href="homeNS.html"></a></h3>
      </div>

      <ul class="list-unstyled menu-elements">
        <li class="active">
          <a  href="homeNS.php"><i class="fas fa-home"></i> Inicio</a>
        </li>
        <li>
          <a href="pagosNS.php"><i class="fas fa-user"></i> Ser de Pago</a>
        </li>

      </ul>

      <div class="dark-light-buttons">
        <a class="btn btn-primary btn-customized-4 btn-customized-dark" href="#" role="button">Dark</a>
        <a class="btn btn-primary btn-customized-4 btn-customized-light" href="#" role="button">Light</a>
      </div>

    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Dark overlay -->
      <div class="overlay"></div>

      <div class="content">
        <a class="btn btn-primary btn-customized open-menu bg-dark" href="#" role="button">
                    <i class="fas fa-align-left"></i> <span>Menu</span>
                </a>
      </div>
      <nav class="navbar navbar-light bg-dark " style="padding-right: 150px;">
        <a class="p-3 mb-2 navbar-brand text-white" href="homeNS.php"></a>
        <a class=" mb-2 navbar-brand text-white" style="padding-left: 980px;" href="cuentaNS.php"><?php echo $_SESSION["Nombre"]?> <img  src="img/user_icon.png" width="30" height="30"> </a>
        <a class="p-3 mb-2 navbar-brand text-white" style="padding-left: 1100px;" href="logout.php">LogOut</a>
      </nav>

    <div class="container">
      <div class="row">
        <div class=" d-flex justify-content-center p-5 col-12">
          <h1>Cuenta Persona</h1>
        </div>
      </div>
    </div>

    <div class="card">
       <i class="fa-duotone fa-user-alien"></i>
      <h1>John Doe</h1>
      <p class="title">CEO & Founder, Example</p>
      <p>Harvard University</p>
      </div>
      <p><button>Contact</button></p>
    </div>

</div>
</div>




    <script src="js/Sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/js/scripts.js"></script>


  </body>
</html>
