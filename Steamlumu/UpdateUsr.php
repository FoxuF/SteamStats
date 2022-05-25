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
        <a class=" mb-2 navbar-brand text-white" style="padding-left: 980px;" href="homeA.php"><?php echo $_SESSION["Nombre"]?> <img  src="img/user_icon.png" width="30" height="30"> </a>
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
      // code...
   ?>
  <script type="text/javascript">
    function myfun(){
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var role = document.getElementById('role').value;

      if (name === "" || name === null || email === "" || email === null || role === "" || role === null) {
        alert("The user could not be modified");
      } else {
        alert("The user has been modified correctly");
      }
    }
  </script>
  <div class="container-fluid">
    <div>
      <center>
        <form method="POST">
          <div class="form-group">
            <h1>Modify</h1><br>
            <input type="hidden" name="id" value="<?php echo $fila['idUser']?>">
             <label style="float:initial;">Name</label><br>
             <input type="text" class="form-control form-control-user" id="coti" name="Name" value="<?php echo $fila['Nombre']?>" style="width:375px; float:initial;"><br>
             <label style="float:initial;">Email</label><br>
             <input type="text"class="form-control form-control-user" id="status" name="Email"value="<?php echo $fila['Email']?>" style="width:375px; float:initial;"><br>
             <label style="float:initial;">Role</label><br>
             <input type="text" class="form-control form-control-user" id="coti" name="Role" value="<?php echo $fila['IDGrupo']?>" style="width:375px; float:initial;"><br>
             <div class="col">
               <center>
                  <input onclick="myfun()" type="submit" class="btn btn-primary" name="update" value="Save" style="width:180px">
               </center>
             </div>
             <a href="homeA.php"><br>
               <input  class="btn btn-danger" value="Back" style="width:180px">
             </a>
          </div>
         </form>
     </center>
      <?php } ?>
    </div>
      </div>
    <?php
       $IdG=$_GET['id'];

       if (isset($_POST['update'])) {
         $Name=$_POST['Name'];
         $Email=$_POST['Email'];
         $Role=$_POST['Role'];
         if ($Name!=NULL) {
           // code...
           //$query2="UPDATE MateriaPrima SET Nombre='".$name."', Descripcion ='".$desc."', Stock='".$stock."', Precio='".$price."' WHERE IdMateria='".$IdMateriaG."'";
           $query2="UPDATE sys_Usuarios SET Nombre='".$Name."', Email ='".$Email."',IDGrupo='".$Role."' WHERE idUser='".$IdG."'";
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
           if ($Name=1) {
             // code...
             //header("location:tables.php");
           }
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
