 <?php
include "conexion.php";
$respuesta=$_POST['respuesta'];
$correcta=$_POST['correcta'];
$puntaje=80;

if ($respuesta==$correcta) 
{
	echo "Ganaste pasas al siguiente nivel";
$insertar="UPDATE historico SET puntaje=100 WHERE idhistorico=(SELECT MAX(idhistorico) FROM historico)";
$resultado= mysqli_query($conexion,$insertar);
	mysqli_close($conexion);
	header("location:../vista/premio.php");	
}else{
	echo "Fallaste";
$sentenciaguardar="INSERT INTO historico(jugador,puntaje) VALUES('$participante','$puntaje')";
$resultado= mysqli_query($conexion,$sentenciaguardar);
	mysqli_close($conexion);
header("location:../index.php");
};
?>