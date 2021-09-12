<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link rel="stylesheet" type="text/css" href="estilos/bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<meta charset="utf-8">
	<title>Pregunta Nivel 1</title>
</head>
<body>
	<div class="container">
			<?php 
			//include "../controlador/nivel1.php";
			include "../controlador/conexion.php";
			$consultanivel1="SELECT * FROM `preguntas` WHERE nivel= 3 order by rand() limit 1";
			$consultatotal=mysqli_query($conexion,$consultanivel1);
			if (!$consultatotal) {
				echo "No hay preguntas para mostrar";
			}else{
				//echo "Bienvenido!! ".$participante;
			while ($row =mysqli_fetch_assoc($consultatotal)){?>
		<form action="../controlador/nivel3.php" method="post">
								<h2>Nivel 3: (20 puntos)</h2>
								<br>
								<h2 class="h2"><?php echo $row["pregunta"];?></h2>
									      <div class="col-md-3 row">
									      <label for="r1" class="col-md-10">¿ <?php echo $row["respuesta1"];?>?</label>
									      <input type="radio" name="respuesta" class="form form-control col-md-2" id="r1" value="1">
									      </div>
									      <br>
									      <div class="col-md-3 row"> 
									      <label for="r2" class="col-md-10">2. <?php echo $row["respuesta2"];?></label><input type="radio" name="respuesta" class="form form-control col-md-2" id="r2" value="2">
								  	      </div>
								  	      <br>
								  	      <div class="col-md-3 row">
								  	      <label for="r3" class="col-md-10">3. <?php echo $row["respuesta3"];?></label><input type="radio" name="respuesta" class="form form-control col-md-2" id="r3" value="3">
								  	      </div>
								  	      <br>
								  	      <div class="col-md-3 row">
									      <label for="r1" class="col-md-10" for="r4">4. <?php echo $row["respuesta4"];?></label><input type="radio" name="respuesta" class="form form-control col-md-2" id="r4" value="4">
									     </div>
									     <br>
									     	<input type="hidden" name="correcta" value="<?php echo $respuesta= $row["correcta"];?>">
									      <?php };}; mysqli_close($conexion);?>
									      <br>
							<input type="submit" name="evaluar" value="Evaluar" class="btn btn-success col-md-2">
		</form>
	</div>
</body>
</html>