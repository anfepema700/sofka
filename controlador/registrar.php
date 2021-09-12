<?php
include "conexion.php";

$pregunta =$_POST["pregunta"];
$nivelpregunta=$_POST["nivelpregunta"];
$respuesta1=$_POST["respuesta1"];
$respuesta2=$_POST["respuesta2"];
$respuesta3=$_POST["respuesta3"];
$respuesta4=$_POST["respuesta4"];
$respuestacorrecta=$_POST["respuestacorrecta"];

$insertar="INSERT INTO preguntas(pregunta,nivel, respuesta1, respuesta2, respuesta3, respuesta4, correcta) VALUES ('$pregunta','$nivelpregunta','$respuesta1','$respuesta2','$respuesta3','$respuesta4','$respuestacorrecta')";
$resultado= mysqli_query($conexion,$insertar);
if (!$resultado) {
	echo "Error al grabar";
}else{
	echo "Registro correcto";
}

mysqli_close($conexion);
header("location:../vista/formpreguntas.php");
 
?>