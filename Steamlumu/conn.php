
<?php
$connectionInfo = array("Database"=>"Steam");
//$connectionInfo = array("Database"=>"lumu");

//ian2
//$serverName = "PC-21673";
//berny
//$serverName = "DESKTOP-G46AMN9";
//Ian
$serverName = "DESKTOP-9UFPSE7\SQLEXPRESS";
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {


}else{

     die( print_r( sqlsrv_errors(), true));
}


?>
