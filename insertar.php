<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datos de alumnos </title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-inverse bg-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://www.unid.edu.mx/" ><img class=".logo" src="img/sintitulo.png" alt="logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="insertar.php">Inserta Alumno<span class="sr-only">(current)</span></a></li>
        <li><a href="insertar_contacto.php">Inserta Contacto</a></li>
        <li><a href="mostrar.php">Revisar Alumnos</a></li>
        <li><a href="mostrar_contacto.php">Revisar Contactos</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="salir.php">Cerrar Sesion <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="container">
    <div class="jumbotron text-center" style="background-color: #959595;">
	<?php
	include("conexion.php");
	$con = conectar();
	?>
	<h1>Datos de alumno</h1>
	<p> Agregar datos</p>
	</div>
	<div class="row vertical-offset-100">
	<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
    <div class="panel-heading">
	<form action="" method="post">
		Matricula: <input type="text" name="matricula">
		<br>
		<br>
		Nombre: <input type="text" name="nombre">
		<br>
		<br>
		Apellido paterno: <input type="text" name="apellidos1">
		<br>
		<br>
		Apellido materno: <input type="text" name="apellidos2">
		<br>
		<br>
		Email: <input type="text" name="email">
		<br>
		<br>
		Domicilio: <input type="text" name="domicilio">
		<br>
		<br>
		Celular: <input type="text" name="celular">
		<br>
		<br>
		Telefono de casa: <input type="text" name="telefono">
		<br>
		<br>
		Carrera: <select name="licenciatura">
  					<option value="Ing. Sistemas">Ing. Sistemas</option>
  					<option value="Administracion">Administracion</option>
 					<option value="Contaduri">Contaduria</option>
 					<option value="Diseño Grafico">Diseño Grafico</option>
  					<option value="Derecho">Derecho</option>
 					<option value="Turismo">Turismo</option>
 					<option value="Psicologia">Psicologia</option>
				</select>
		<br>
		<br>
		Cuatrimestre: <select name="cuatrimestre">
  					<option value="1">Primero</option>
  					<option value="2">Segundo</option>
 					<option value="3">Tercero</option>
 					<option value="4">Cuarto</option>
  					<option value="5">Quinto</option>
 					<option value="6">Sexto</option>
 					<option value="7">Septimo</option>
  					<option value="8">Octavo</option>
 					<option value="9">Noveno</option>
				</select>
		<br>
		<br>
		Contraseña: <input type="text" name="password">
		<br>
		<br>
		<input type="submit" value="Enviar Datos">
		<br>
		<br>
		<a href="insertar_contacto.php" target="_self">
	<input type="button" name="button" value="Datos de Contactos">
	</a>
	</form>
	</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>
<!-- Agregar registro a la BD-->
<?php
	if ($_POST) {
		$matricula = $_POST['matricula'];
		$nombre = $_POST['nombre'];
		$primer_Apellido = $_POST['apellidos1'];
		$segundo_Apellido = $_POST['apellidos2'];
		$email = $_POST['email'];
		$domicilio = $_POST['domicilio'];
		$celular = $_POST['celular'];
		$telefono = $_POST['telefono'];
		$licenciatura = $_POST['licenciatura'];
		$cuatrimestre = $_POST['cuatrimestre'];
		$password = $_POST['password'];
		$sql = "INSERT INTO Alumnos  (Matricula, Nombre, PrimerApellido, SegundoApellido, Email, Domicilio, celular, telefono_casa, Licenciatura, Cuatrimestre, password) VALUES ('$matricula', '$nombre', '$primer_Apellido', '$segundo_Apellido', '$email', '$domicilio', '$celular', '$telefono', '$licenciatura', '$cuatrimestre', '$password')";
		if ($con->query($sql) === TRUE) {
			echo "<h2> Nuevo Alumno Registrado </h2>";
		} else {
			echo "Error: " . $sql . "<br>" . $con->error;
		}
		$con->close();
	}
?>