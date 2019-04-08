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
        <li><a href="insertar.php">Inserta Alumno<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="insertar_contacto.php">Inserta Contacto</a></li>
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
	<h1>Contacto de alumno</h1>
	<p> Agregar nuevo contacto de alumno</p>
	</div>
	<div class="row vertical-offset-100">
	<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
    <div class="panel-heading">
	<form action="" method="post" align="left">
		Matricula de Alumno: <input type="text" name="matricula_alumno">
		<br>
		<br>
		Nombre Contacto: <input type="text" name="nombre">
		<br>
		<br>
		Apellido Paterno: <input type="text" name="apellidos1">
		<br>
		<br>
		Apellido Materno: <input type="text" name="apellidos2">
		<br>
		<br>
		Correo: <input type="text" name="Correo">
		<br>
		<br>
		Celular: <input type="text" name="celular">
		<br>
		<br>
		Telefono de casa: <input type="text" name="telefono">
		<br>
		<br>
		<input type="submit" value="Enviar Datos">
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
		$matricula_alumno = $_POST['matricula_alumno'];
		$nombre = $_POST['nombre'];
		$primer_Apellido = $_POST['apellidos1'];
		$segundo_Apellido = $_POST['apellidos2'];
		$Correo = $_POST['Correo'];
		$celular = $_POST['celular'];
		$telefono = $_POST['telefono'];
		$sql = "INSERT INTO contactos  (Matricula_Alumno, Nombre, PrimerApellido, SegundoApellido, TelefonoCasa, Celular, Correo) VALUES ('$matricula_alumno', '$nombre', '$primer_Apellido', '$segundo_Apellido', '$telefono', '$celular', '$Correo')";
		if ($con->query($sql) === TRUE) {
			echo "<h2> Nuevo Contacto Registrado </h2>";
		} else {
			echo "Error: " . $sql . "<br>" . $con->error;
		}
		$con->close();
	}