<?php
include ("conexion.php");
$id=$_GET['id'];
echo "Dato".$id;

$eliminar ="DELETE FROM preguntas WHERE idpregunta='$id'";
$resultado= mysqli_query($conexion,$eliminar);
if (!$resultado) {
	echo "Error al grabar";
}else{
	echo "Registro correcto";
}

mysqli_close($conexion);
header("location:../vista/formpreguntas.php");
?>