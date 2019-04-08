<?php
function conectar()
{
	$user = "root";
	$pass = "";
	$server = "localhost";
	$db = "mydb";
	$con = mysqli_connect($server,$user,$pass) or
		die("Error al conectar con la base de 
		datos" .mysql_error);
	mysqli_select_db($con, $db);
	
	return $con;	
}
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "mydb";

    $mysqli = new mysqli($server, $user, $password, $db);
 
    if($mysqli->connect_errno) {
        echo "<b>Fallo al conectar a la BD: </b>" . $mysqli->connect_errno . "---" . $mysqli->connect_error;
    }
 
    return $mysqli;