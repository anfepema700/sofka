<?php
include "conexion.php";
$participante=$_POST['participante'];
$respuesta=$_POST['respuesta'];
$correcta=$_POST['correcta'];
$puntaje=0;

/*
echo "Participante: ".$participante."<br>";
echo "Respuesta seleccionada: ".$respuesta."<br>";
echo "Correcta: ".$correcta."<br>";
*/
if ($respuesta==$correcta) {
	echo "Ganaste pasas al siguiente nivel";
$sentenciaguardar="INSERT INTO historico(jugador,puntaje) VALUES('$participante',20)";
$resultado= mysqli_query($conexion,$sentenciaguardar);
	mysqli_close($conexion);



	header("location:../vista/formnivel2.php");	
}else{
	echo "Fallaste";

$sentenciaguardar="INSERT INTO historico(jugador,puntaje) VALUES('$participante','$puntaje')";
$resultado= mysqli_query($conexion,$sentenciaguardar);
	mysqli_close($conexion);
header("location:../index.php");
};
?>