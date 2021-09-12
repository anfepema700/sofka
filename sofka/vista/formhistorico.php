<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link rel="stylesheet" type="text/css" href="estilos/bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<meta charset="utf-8">
	<title>Historico Sofka</title>
</head>
<body>

	<?php 
	include("../controlador/conexion.php");
	$preguntas="SELECT * from historico";
	 ?>
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

<!--Fin formulario-->

<!--listado-->
<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Jugador </th>
	      <th scope="col">Puntaje</th>
	      </tr>
	  </thead>
<?php 
$resultado= mysqli_query($conexion,$preguntas);
while ($row =mysqli_fetch_assoc($resultado)){?>


	
	  <tbody>
	    <tr>
	      <td><?php echo $row["idhistorico"];?></th>
	      <td><?php echo $row["jugador"];?></td>
	      <td><?php echo $row["puntaje"];?></td>
<?php } ?>
	      </tr>
	  </tbody>
	</table>
<!--Fin listado-->
</div>
</body>
</html>