<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link rel="stylesheet" type="text/css" href="estilos/bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<meta charset="utf-8">
	<title>Participar Sofka</title>
</head>
<body>
	<div class="container"> 
<!--inicio menú-->
		<nav class="navbar navbar-light bg-light">
		  <form class="container-fluid justify-content-start">
		    <button class="btn btn-outline-primary me-2" type="button" onclick="location.href='formparticipar.php'">PARTICIPAR</button>
		   <button class="btn btn-outline-danger me-2" type="button" onclick="location.href='formpreguntas.php'">PREGUNTAS</button>
		   <button class="btn btn-outline-success me-2" type="button" onclick="location.href='formhistorico.php'">HISTORICO</button>
		  </form>
		</nav>
<!--fin menú-->

<!--Inicio formulario-->
	<form action="formnivel1.php" method="post">
			<h1 class="h1">Bienvenido al concuros de preguntas y respuestas</h1>
			<div class="md-3 row">
			<label for="nombre" class="col-md-3">Nombre del participante: </label>
			<br>
			<input type="text" name="nombre" class="btn btn-control col-md-4 " id="nombre" placeholder="Escribe tu nombre aqui">
			<input type="submit" name="comenzar" value="Comenzar el reto" class="btn btn-success">
			</div>
		</form>
<!--Fin formulario-->
</div>
</body>
</html>