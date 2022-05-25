<?php
require('conn.php');

$alerta1 = '';
$alerta2 = '';
$alerta3 = '';
if (isset($_POST['insert'])) {

$usuario = $_POST['usuario'];
$password = $_POST['password'];
$UserPassword = SHA1($_POST['password']);

    $consulta = "SELECT * FROM Usuario WHERE Correo = '".$usuario."' ";
    $ejecutar = sqlsrv_query($conn, $consulta);
    if ($ejecutar) {
      $datauser = sqlsrv_fetch_array($ejecutar);
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


$ClaverUser = $datauser['IdUsuario'];
// echo "<script type=\"text/javascript\">alert(\"Clave User: $ClaverUser\");</script>";

$consultaI = "SELECT * FROM Usuario WHERE IdUsuario = '".$ClaverUser."' ";
$ejecutarI = sqlsrv_query($conn, $consultaI);
$datauserI = sqlsrv_fetch_array($ejecutarI);
if ($datauserI) {
if ($datauserI!=NULL) {
    $PasswordBD = $datauserI['Contrasena'];
    // echo "<script type=\"text/javascript\">alert(\"UserPassword: $UserPassword\");</script>";
    // echo "<script type=\"text/javascript\">alert(\"PasswordBD: $PasswordBD\");</script>";
    if (sha1($password) === $PasswordBD) {
        session_start();
        $_SESSION['IdUsuario'] = $ClaverUser;
        echo $_SESSION['IdUsuario'];
        header("location:index.php");
    }
    else {
        $alerta1.="<div class='alert alert-danger alert-dismissible fade show col-md-12' role='alert'>
        <strong>Lo sentimos</strong> Correo o Contraseña incorrecta<a href='#' class='alert-link'>.</a>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";

        }
      }
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
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Steam Stats</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="css/styleB.css">-->

  </head>
  <body>
    <nav class="navbar navbar-light bg-dark">
      <a class="p-3 mb-2 navbar-brand text-white " href="./index.html">Steam Stats</a>
      <a class="navbar-brand" href="login.html"> <img src="img/user_icon.png" width="30" height="30" alt=""> </a>
    </nav>

    <div class="container">
      <div class="row d-flex justify-content-center p-5 col-12">
        <form class="user" method="POST" action="login.php">
          <div class="form-group p-3">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group p-3">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="custom-control custom-checkbox small">
              <input type="checkbox" class="custom-control-input" id="customCheck">
              <label class="custom-control-label" for="customCheck">Remember Me</label>
          </div>
          <div class="p-5 col-12 text-center">
            <a class="btn btn-primary justify-content-center" href="homeNS.html" role="button">Iniciar Sesion</a>
          </div>
          <input type="submit" name="insert" value="Guardar">
        </form>
        <hr>
        <div class="text-center">
            <a class="small" href="register.php">Create an Account!</a>
        </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>
