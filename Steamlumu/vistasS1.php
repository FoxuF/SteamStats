<?php require "permisos/SesHandler.php"?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Steam Stats</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleSB.css">
    <link rel="icon" href="img/favicon.ico">
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
        <h3><a href="homeNS.php"></a></h3>
      </div>
      <ul class="list-unstyled menu-elements">
        <li class="active">
          <a  href="homeS.php"><i class="fas fa-home"></i> Inicio</a>
        </li>
        <li>
          <a href="vistasS.php"><i class="fa fa-eye"></i> Vistas</a>
        </li>
        <li>
          <a href="pdf.php"><i class="fa fa-file"></i> Report Generator</a>
        </li>
        <li>
          <a href="QueryDynamo.php"><i class="fa fa-search"></i> Dynamic Query</a>
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
        <a class=" mb-2 navbar-brand text-white" style="padding-left: 900px;" href="cuentaNS.php"><?php echo $_SESSION["Nombre"]?> <img  src="img/user_icon.png" width="30" height="30"> </a>
        <a class="p-3 mb-2 navbar-brand text-white" style="padding-left: 1100px;" href="logout.php">LogOut</a>
      </nav>
    <div class="container">
      <div class="row">
        <div class=" d-flex justify-content-center p-5 col-12">
          <h1>Tags</h1>
          <br>
        </div>
    </div>
  </div>
  <!--AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA-->
  <div class="card-body">
      <div class="table-responsive">
          <br>
          <br>
          <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
              <thead class="thead-dark">
                <tr>
                      <th scope="col">appid</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Lanzamiento</th>
                      <th scope="col">Developer</th>
                      <th scope="col">Publisher</th>
                      <!--<th scope="col">Positive Ratings</th>
                      <th scope="col">Negative Ratings</th>
                      <th scope="col">Aver_Playt</th>
                      <th scope="col">Med_Playt</th>
                      <th scope="col">Owners</th>
                      <th scope="col">Precio</th>
                      <th scope="col">Categoria</th>
                      <th scope="col">Generos</th>
                      <th scope="col">Tags</th>-->


                  </tr>
              </thead>
              <tbody>
                      <?php
                    /*require('conn.php');
                    $query = "SELECT TOP(5) * From View_Pago";
                    $validquery=sqlsrv_query($conn, $query);
                      while($fila = sqlsrv_fetch_array($validquery)){
                      $Id =$fila['appid'];
                      $Nombre = utf8_encode($fila['Nombre']);
                      $rdate = $fila['Lanzamiento']->format('d/m/Y');
                      $Dev = $fila['Developer'];
                      $Pub = $fila['Publisher'];
                      $PR = $fila['Pos_Ratt'];
                      $NR = $fila['Neg_Ratt'];
                      $AP = $fila['Aver_Playt'];
                      $MP = $fila['Med_Playt'];
                      $Ow = $fila['Owners'];
                      $Prc = $fila['Precio'];
                      $Cat = $fila['Categoria'];
                      $Gen = $fila['Generos'];
                      $Tag = $fila['Tags'];*/
                      require('conn.php');
                      $query = "SELECT TOP(5) * From objJuegos";
                      $validquery=sqlsrv_query($conn, $query);
                        while($fila = sqlsrv_fetch_array($validquery)){
                        $Id =$fila['appid'];
                        $Nombre = utf8_encode($fila['Nombre']);
                        $rdate = $fila['Lanzamiento']->format('d/m/Y');
                        $Dev = $fila['Developer'];
                        $Pub = $fila['Publisher'];
                      ?>
                      <tr>
                          <td><h5><?php echo $Id;?></h5></td>
                          <td><h5><?php echo utf8_encode($Nombre);?></h4></td>
                          <td><h5><?php echo $rdate;?></h5></td>
                          <td><h5><?php echo $Dev;?></h5></td>
                          <td><h5><?php echo $Pub;?></h5></td>
                      </tr>
                      <?php } ?>
              </tbody>
          </table>
      </div>
      <br>
  </div>
  <!--AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA-->
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
