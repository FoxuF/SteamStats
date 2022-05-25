<?php
$connectionInfo = array("Database"=>"lumu");
//Ian
$serverName = "DESKTOP-9UFPSE7\SQLEXPRESS";
//$connectionInfo = array( "Database"=>"master");
//BernySonic
$serverName = "";//aqui mete tu conn del Sql
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {


}else{

     die( print_r( sqlsrv_errors(), true));
}

?>
