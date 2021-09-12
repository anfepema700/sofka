<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="vista/estilos/estilos.css">
	<link rel="stylesheet" type="text/css" href="vista/estilos/bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<meta charset="utf-8">
	<title>PROYECTO SOFKA</title>
</head>
<body>
<div class="container">
<!--inicio menú-->
	<nav class="navbar navbar-light bg-light">
		  <form class="container-fluid justify-content-start">
		    <button class="btn btn-outline-primary me-2" type="button" onclick="location.href='vista/formparticipar.php'">PARTICIPAR</button>
		   <button class="btn btn-outline-danger me-2" type="button" onclick="location.href='vista/formpreguntas.php'">PREGUNTAS</button>
		   <button class="btn btn-outline-success me-2" type="button" onclick="location.href='vista/formhistorico.php'">HISTORICO</button>
		  </form>
		</nav>
<!--fin menú-->
<!--Inicio formulario-->
	<br><br>
	<form action="vista/formnivel1.php" method="post">
			<h1 class="h1">Bienvenido al concuros de preguntas y respuestas</h1>
			<h3>1. Escribe el nombre del participante</h3>
			<h3>2. Comenzar el reto</h3>
			<br>
			<br>
			<div class="md-3 row">
			<label for="nombre" class="col-md-3">Nombre del participante:  </label>
			<br>
			<input type="text" name="nombre" class="btn btn-control col-md-4 " id="nombre" placeholder="Escribe tu nombre aqui">
			<input type="submit" name="comenzar" value="Comenzar el reto" class="btn btn-success">
			</div>
		</form>
<!--Fin formulario-->
<br><br>
<a href="vista/formparticipar.php" class="">IR AL JUEGO</a><br>
<a href="vista/formpreguntas.php">GESTOR PREGUNTAS</a><br>
<a href="vista/formhistorico.php">HISTORICO</a><br>
<img src="vista/fondo.png">
</div>
</body>
</html>