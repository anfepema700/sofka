<?php
include "conexion.php";
$identificador=$_POST["conservoid"];
$pregunta =$_POST["pregunta"];
$nivelpregunta=$_POST["nivelpregunta"];
$respuesta1=$_POST["respuesta1"];
$respuesta2=$_POST["respuesta2"];
$respuesta3=$_POST["respuesta3"];
	$respuesta4=$_POST["respuesta4"];
	$respuestacorrecta=$_POST["respuestacorrecta"];

echo "dato: ".$identificador;

$insertar="UPDATE preguntas SET pregunta='$pregunta', nivel='$nivelpregunta', respuesta1='$respuesta1',respuesta2='$respuesta2',respuesta3='$respuesta3',respuesta4='$respuesta4',correcta='$respuestacorrecta' WHERE idpregunta='$identificador'";
$resultado= mysqli_query($conexion,$insertar);
if (!$resultado) {
	echo "Error al grabar";
}else{
	echo "Registro correcto";
}
mysqli_close($conexion);
header("location:../vista/formpreguntas.php");
?>