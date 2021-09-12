<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link rel="stylesheet" type="text/css" href="estilos/bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<meta charset="utf-8">
	<title>Preguntas SOFKA</title>
</head>
<body>

<?php 
	include("../controlador/conexion.php");
	$preguntas="SELECT * from preguntas";
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
<!--inicio formulario-->
	<form class="container" action="../controlador/registrar.php" method="post">
		<h1 class="h1">Formulario de preguntas y respuestas</h1>
		<br>
		<div class="mb-3 row">
		<label for="pregunta" class="col-md-1">Pregunta: </label>
		<textarea type="text" name="pregunta" placeholder="Elabora tu pregunta aqui ¿?" class="form-control col-md-8" id="pregunta" required=""></textarea>
		</div>
		<div class="mb-3 row">
		<label for="nivelpregunta" class="form-select-lg col-md-3">Nivel de la pregunta: </label>
		<select class="form-select form-select-lg mb-3 col-md-2" name="nivelpregunta" id="nivelpregunta">
		  <option value="1">Nivel 1</option>
		  <option value="2">Nivel 2</option>
		  <option value="3">Nivel 3</option>
		  <option value="4">Nivel 4</option>
		  <option value="5">Nivel 5</option>
		</select>
		</div>
		<br>
		<div class="mb-3 row">
		<label for="respuesta1" class="col-md-2">Respuesta #1: </label>
		<input type="text" name="respuesta1" placeholder="Respuesta #1" class="form-control col-md-8" id="respuesta1" required="">
		</div>
		<br>
		<div class="mb-3 row">
		<label for="respuesta2" class="col-md-2">Respuesta #2: </label>
		<input type="text" name="respuesta2" placeholder="Respuesta #2" class="form-control col-md-8" id="respuesta2" required="">
		</div>
		<br>
		<div class="mb-3 row">
		<label for="respuesta3" class="col-md-2">Respuesta #3: </label>
		<input type="text" name="respuesta3" placeholder="Respuesta #3" class=" form-control col-md-8" id="respuesta3" required="">
		</div>
		<br>
		<div class="mb-3 row">
		<label for="respuesta4" class="col-md-2">Respuesta #4: </label>
		<input type="text" name="respuesta4" placeholder="Respuesta #4" class="form-control col-md-8" id="respuesta4" required="">
		</div>
		<br>
		<div class="mb-3 row">
		<label for="respuestacorrecta" class="col-md-3">Respuesta correcta es: </label>
		<select class="form-select col-md-2" name="respuestacorrecta" id="respuestacorrecta">
		  <option value="1">Respuesta #1</option>
		  <option value="2">Respuesta #2</option>
		  <option value="3">Respuesta #3</option>
		  <option value="4">Respuesta #4</option>
		</select>
	</div>
	<input type="submit" name="guardar" value="Guardar" class="btn btn-success col-md-2">
	</form>
	<br>
	<br>
<!--Fin formulario-->

<!--listado-->
	<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Id pregunta</th>
		      <th scope="col">Pregunta: </th>
		      <th scope="col">Nivel de la pregunta</th>
		      <th scope="col">Respuesta 1</th>
		      <th scope="col">Respuesta 2</th>
		      <th scope="col">Respuesta 3</th>
		      <th scope="col">Respuesta 4</th>
		      <th scope="col">Respuesta correcta:</th>
		      <th scope="col">Acciones</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
	$resultado= mysqli_query($conexion,$preguntas);
	while ($row =mysqli_fetch_assoc($resultado)){?>
		    <tr>
		      <td><?php echo $row["idpregunta"];?></td>
		      <td><?php echo $row["pregunta"];?></td>
		      <td><?php echo $row["nivel"];?></td>
		      <td><?php echo $row["respuesta1"];?></td>
		      <td><?php echo $row["respuesta2"];?></td>
	  	      <td><?php echo $row["respuesta3"];?></td>
		      <td><?php echo $row["respuesta4"];?></td>
		      <td><?php echo $row["correcta"];?></td>
		      <td>
		      	<a href="../controlador/editar.php?id=<?php echo $row["idpregunta"];?>">Editar</a>
		      	<a href="../controlador/eliminar.php?id=<?php echo $row["idpregunta"];?>">Eliminar</a>
		      </td>
		       <?php } ?>
		    </tr>
		  </tbody>
		</table>
<!--Fin listado-->
</div>
</body>
</html>