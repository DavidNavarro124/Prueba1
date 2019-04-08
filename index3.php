<?php 
    session_start();
    include('conexion.php');
    if(isset($_SESSION["logueado"])){
        header("Location: insertar.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <img src="img/sintitulo.png" alt="logo">
    <div class="container">
    <!--<div class="jumbotron text-center" style="background-color: #999999;">
        <h1> Acceso Data Alumnos UNID </h1>
    </div>-->

    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default" style="background-color: #999999;">
                <div class="panel-heading">
                    <h3 class="panel-title">Ingresa a la plataforma</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" method="post" action="validar.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Usuario" name="email" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Entrar" name="enviar" style="background-color: blue;">
                        </fieldset>
                    </form>
                    <?php 
                    if(isset($_GET["error"])) {
                        echo "<p>Usuario y / o Contraseña erroneos. Intentelo de nuevo.</p>";
                    } 
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
	
<!--
	<h1> Sistema de Actualizacion de datos de Alumnos </h1>
	<p> Actualizacion correo electronico y contraseña <b></b></p>
	<?php
	include("conexion.php");
	$con = conectar();
	echo("Consulta y modificacion de datos personales")
	?>
	<br>
	<br>
	<br>
	<br>
	<a href="insertar.php" target="_self">
	<input type="button" name="button" value="Actualizar ahora">
	</a>-->
</body>
</html