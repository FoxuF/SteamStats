<?php
require('conn.php');
if (isset($_POST['insert'])) {
$nombre=$_POST["Name"];
$correo=$_POST["Mail"];
$contrasena=$_POST["Password"];
$contrasena=sha1($contrasena);
$id=uniqid();

$query = "INSERT INTO Usuario (Contrasena,Nombre,Correo,Rol) VALUES ('$contrasena','$nombre','$app','$correo','usuario')";
$res=sqlsrv_query($conn,$query);
if ($res) {
 header("location:login.php");
}else {
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
    <script src="https://www.google.com/recaptcha/api.js"></script>


    <!-- <link rel="stylesheet" href="css/styleB.css">-->

  </head>
  <body>
    <nav class="navbar navbar-light bg-dark">
      <a class="p-3 mb-2 navbar-brand text-white " href="./index.html">Steam Stats</a>
      <a class="navbar-brand" href="login.html"> <img src="img/user_icon.png" width="30" height="30" alt=""> </a>
    </nav>

    <div class="container">
      <div class="row d-flex justify-content-center p-5 col-12">
        <form class="user" action="register.php" method="POST">
          <div class="form-group p-3">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control form-control-user" id="exampleFirstName" name="Name"
                placeholder="First Name">
          </div>
          <div class="form-group p-3">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
          </div>
          <div class="form-group p-3">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"name="Password">
          </div>
          <div class="p-5 col-12 text-center">
            <a class="btn btn-primary justify-content-center" href="homeNS.html" role="button">Registrarse</a>
          </div>
          <div class="p-5 col-12 text-center">
            <div class="g-recaptcha" data-sitekey="6LcaDOEcAAAAAMMMjj-8-BQorfN6X5DJIScfRuFz"></div>
            <button class="text-center g-recaptcha" data-sitekey="reCAPTCHA_site_key" data-callback='onSubmit'data-action='submit'>Submit</button>
          </div>
          <input type="submit" name="insert" value="Guardar">
        </form>
      <div class="text-center">
          <a class="small" href="forgot-password.html">Forgot Password?</a>
      </div>
      <div class="text-center">
          <a class="small" href="login.php">Already have an account? Login!</a>
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

    <script src="js/captcha.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>
