<!DOCTYPE html>
		<html>
			<head>
				<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
				<link rel="stylesheet" type="text/css" href="../vista/estilos/bootstrap-4.5.0-dist/css/bootstrap.min.css">
				<meta charset="utf-8">
				<title>Preguntas SOFKA</title>
			</head>
<?php
include("conexion.php");
$id=$_GET['id'];
$conservoid=$id;
$sql="SELECT * FROM preguntas WHERE idpregunta='".$id."'";
$resultado=mysqli_query($conexion,$sql);
while ($fila=mysqli_fetch_assoc($resultado)) {
?>
<!--Inicio formulario-->
			<div class="container">
				<form action="actualizar.php" method="post">
						<input type="submit" name="idpregunta" value="<?php echo $fila['idpregunta'] ?>">
						<input type="text" name="conservoid" value="<?php echo($conservoid); ?>">
						<h1 class="h1">Formulario de preguntas y respuestas</h1>
						<input type="submit" name="identificador" value="<?php echo $fila['idpregunta'] ?>">
						<br>
						<div class="mb-3 row">
						<label for="pregunta" class="col-md-3">Pregunta: </label>
						<input type="text" name="pregunta" value="<?php echo $fila['pregunta'] ?>" class="form-control col-md-8" id="pregunta" required="">
						</div>
						<div class="mb-3 row">
						<label for="nivelpregunta" class="form-select-lg col-md-3">Nivel de la pregunta: </label>
						<select class="form-select form-select-lg mb-3 col-md-2" name="nivelpregunta" id="nivelpregunta" value="<?php echo $fila['nivel'] ?>">
						<option><?php echo $fila['nivel'] ?></option>
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
						<input type="text" name="respuesta1" class="form-control col-md-8" id="respuesta1" required="" value="<?php echo $fila['respuesta1'] ?>">
						</div>
						<br>
						<div class="mb-3 row">
						<label for="respuesta2" class="col-md-2">Respuesta #2: </label>
						<input type="text" name="respuesta2" value="<?php echo $fila['respuesta2'] ?>" class="form-control col-md-8" id="respuesta2" required="">
						</div>
						<br>
						<div class="mb-3 row">
						<label for="respuesta3" class="col-md-2">Respuesta #3: </label>
						<input type="text" name="respuesta3" value="<?php echo $fila['respuesta3'] ?>" class=" form-control col-md-8" id="respuesta3" required="">
						</div>
						<br>
						<div class="mb-3 row">
						<label for="respuesta4" class="col-md-2">Respuesta #4: </label>
						<input type="text" name="respuesta4" value="<?php echo $fila['respuesta4'] ?>" class="form-control col-md-8" id="respuesta4" required="">
						</div>
						<br>
						<div class="mb-3 row">
						<label for="respuestacorrecta" class="col-md-3">Respuesta correcta es: </label>
						<select class="form-select col-md-2" name="respuestacorrecta" id="respuestacorrecta" value="<?php echo $fila['correcta'] ?>">
						  <option><?php echo $fila['correcta'] ?></option>	
						  <option value="1">Respuesta #1</option>
						  <option value="2">Respuesta #2</option>
						  <option value="3">Respuesta #3</option>
						  <option value="4">Respuesta #4</option>
						</select>
				</div>
					<input type="submit" name="guardar" value="Actualizar" class="btn btn-warning col-md-2">
			</form>
				<?php }; mysqli_close($conexion);?>
			</div>
<!--fin formulario-->
</html>