<?php require "permisos/sup.php"?>


<?php
require('conn.php');
session_start();
$IdUsuario=$_SESSION['idUser'];
if (!$IdUsuario) {
header("location:login.php");
}

$consulta="SELECT * From sys_Usuarios Where idUser='".$IdUsuario."'";
$query=sqlsrv_query($conn,$consulta);
if ($query) {
    $datauser = sqlsrv_fetch_array($query);

    $Nombre = $datauser["Nombre"];
    $Email = $datauser["Email"];
    $IDGrupo = $datauser["IDGrupo"];
    $_SESSION["Nombre"]=$Nombre;
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
?>
<?php
 if ($rol=="1") {
    header("location:homeA.php");
   }
  ?>
  <?php
  if ($rol=="2") {
    header("location:homeNS.php");
    }
   ?>
 <?php
 if ($rol=="3") {
   header("location:homeS.php");
   }
  ?>
