<?php 
include("../lib/Conexion.php");
$conexion = new Conexion();

function getCancion(){
	$conexion->conectarBD();
	$consulta = $conexion->executeQuery("Select * from cm_cancion");
	$conexion->closeConexion();
	return $consulta;
}

function getInterprete()
{
	$conexion->conectarBD();
	$consulta = $conexion->executeQuery("Select * from cm_interprete");
	$conexion->closeConexion();
	return $consulta;
}
?>