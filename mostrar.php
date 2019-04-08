<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
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
        <li><a href="insertar_contacto.php">Inserta Contacto</a></li>
        <li class="active"><a href="mostrar.php">Revisar Alumnos</a></li>
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
    <h1>Datos de alumno</h1>
    </div>
    </div>


    <div class="container">
    <div class="jumbotron text-center" style="background-color: white;">
 <?php
$enlace = mysqli_connect("localhost", "root", "", "mydb");

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

$q = "SELECT * FROM alumnos ORDER by matricula ASC";
$rs = mysqli_query($enlace, $q);
echo "<table border = '3'> \n"; 
echo "<tr><td>Matricula</td><td>Nombre</td><td>Primer Apellido</td><td>Segundo Apellido</td><td>Email</td><td>Domicilio</td><td>Celular</td><td>Tel Casa</td><td>Carrera</td><td>Cuatrimestre</td><td>Password</td></tr> \n"; 
while ($row = mysqli_fetch_row($rs)) {
		echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td></tr> \n";
		/*echo '<p>'."	|	".$row['idusuario']."	|	".$row['nombre']."	|	".$row['apellido']."	|	".$row['matricula']."	|	".$row['tipo_status']."	|	".'</p>';*/
}
echo "</table> \n"; 
/* cerrar la conexión */
mysqli_close($enlace);
?>
    </div>
    </div>
</body> 
</html> 