<?php
	session_start();
	include('../conexion/datosConexion.php');
	
	//Obtener variables.
	$id=$_REQUEST['id'];
	$valor=$_REQUEST['valor'];
	$campo=$_REQUEST['campo'];
	
	$tabla='ubicaciones';
	$sql=mysqli_query($conexion,"UPDATE ".$tabla." SET ".$campo."='".$valor."' WHERE codUbicacion=".$id);
	
	mysqli_close($conexion);
?>