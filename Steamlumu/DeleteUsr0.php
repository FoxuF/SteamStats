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
          <a  href="homeA.php"><i class="fas fa-home"></i> Inicio</a>
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

        </div>
    </div>
  </div>
  <!--AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA-->
  <?php
  include 'conn.php';
  $Id=$_GET['id'];
  $query="SELECT * FROM sys_Usuarios WHERE idUser='".$Id."'";
  $resultado=sqlsrv_query($conn,$query);
    while ($fila=sqlsrv_fetch_array($resultado)) {
   ?>
   <script type="text/javascript">
      function myfun(){
        alert("This user has been deleted succesfully")
        head("homeA.php")
      }
   </script>
   <div class="container-fluid">
            <div class="text-center">
              <h1>¿Are you sure you want to delete this User?</h1>
            <?php echo "<h3><b>User: </b>",$fila['Nombre'],'</h3><br>'; ?>
            <?php echo "<h3><b>Email: </b>",$fila['Email'],'</h3><br>'; ?>
            <?php echo "<h3><b>Role: </b>",$fila['IDGrupo'],'</h3><br>'; ?>s
            <form method="POST">
              <input onclick="myfun()" class="btn btn-danger" type="submit" name="update" value="Delete"><br>
              <a class="btn btn-primary" href="homeA.php">Back</a>
             </form>
  </div>
  <?php } ?>
  </div>
    <?php
       $IdG=$_GET['id'];
       /*if (isset($name[$key])) {
         // code...
         return $name[$key];
       }else {
         return;
       }*/
       if (isset($_POST['update'])) {


           // code...
           ///$query2="UPDATE Usuario SET Nombre='".$name."', Correo='".$email."' WHERE IdUsuario=".$IdUsuarioG."''";
           $query2="Delete FROM sys_Usuarios WHERE idUser='".$IdG."'";
           //$query2 ="UPDATE Usuario SET Nombre=$name WHERE id=$IdUsuarioG";
           $resultado2 = sqlsrv_query($conn,$query2);
           if ($resultado2) {

           }
           else {
             if( ($errors = sqlsrv_errors() ) != null) {
                       foreach( $errors as $error ) {
                           echo "SQLSTATE Proyecto: ".$error[ 'SQLSTATE']."<br />";
                           echo "code Proyecto: ".$error[ 'code']."<br />";
                           echo "message Proyecto: ".$error[ 'message']."<br />";
                       }
                   }
           }
           if ($name=1) {
             // code...
             //header("location:tables.php");
           }
         }
     ?>
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
