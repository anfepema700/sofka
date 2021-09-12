<?php
include "conexion.php";
$respuesta=$_POST['respuesta'];
$correcta=$_POST['correcta'];
$puntaje=40;


if ($respuesta==$correcta) {
	echo "Ganaste pasas al siguiente nivel";
$insertar="UPDATE historico SET puntaje=60 WHERE idhistorico=(SELECT MAX(idhistorico) FROM historico)";
$resultado= mysqli_query($conexion,$insertar);
	mysqli_close($conexion);
	header("location:../vista/formnivel4.php");	
}else{
	echo "Fallaste";
$sentenciaguardar="INSERT INTO historico(jugador,puntaje) VALUES('$participante','$puntaje')";
$resultado= mysqli_query($conexion,$sentenciaguardar);
	mysqli_close($conexion);
header("location:../index.php");
};

?>