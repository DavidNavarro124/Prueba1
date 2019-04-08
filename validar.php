<?php
 
    if(isset($_POST["enviar"])) {
 
        require("conexion.php");
 
            $loginEmail = $_POST["email"];
            $loginPassword = $_POST["password"];
 
            $consulta = "SELECT * FROM alumnos WHERE email='$loginEmail' AND password='$loginPassword'";
 
            if($resultado = $mysqli->query($consulta)) {
                while($row = $resultado->fetch_array()) {
 
                    $userok = $row["email"];
                    $passok = $row["password"];
                }
                $resultado->close();
            }
            $mysqli->close();
 
 
            if(isset($loginEmail) && isset($loginPassword)) {
 
                if($loginEmail == $userok && $loginPassword == $passok) {
 
                    session_start();
                    $_SESSION["logueado"] = TRUE;
                    header("Location: insertar.php");
 
                }
                else {
                    Header("Location: index.php?error=login");
                }
 
            }
 
        } else {
            header("Location: index.php");
        }
 
 ?>