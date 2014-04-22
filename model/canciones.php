<?php 
include("../lib/Conexion.php");

function getCancion(){
	$conexion = new Conexion();
	$conexion->conectarBD();
	$con = $conexion->getConexion();
	
	$sql="SELECT * FROM vw_cancionInterprete";

	$stmt = sqlsrv_query($con,$sql);
			
	if( $stmt === false) {
		die( print_r( sqlsrv_errors(), true) );
	}
			
	$result = array();
	$contador=0;
	while( $obj = sqlsrv_fetch_object( $stmt)) {
		$result[$contador]['ID']=$obj->ID;
		$result[$contador]['Nombre']=$obj->Nombre;
		$result[$contador]['Cuenta']=$obj->Cuenta;
		$result[$contador]['Email']=$obj->Email;
		$result[$contador]['Saldo']=$obj->Saldo;
		$result[$contador]['Estado']=$obj->Estado;
		$result[$contador]['CantidadCompras']=$obj->CantidadCompras;
		$contador++;
	}
	$conexion->closeConexion();
	return $result; //Retorna info consulta miembro
}

function getInterprete()
{
	
}
function getCancionesPopulares()
{
	$conexion = new Conexion();
	$conexion->conectarBD();
	$con = $conexion->getConexion();
	
	$sql="SELECT * FROM vw_cancionInterprete where bajadas>0 and totalcompras>0 order by bajadas desc";

	$stmt = sqlsrv_query($con,$sql);
			
	if( $stmt === false) {
		die( print_r( sqlsrv_errors(), true) );
	}
			
	$result = array();
	$contador=0;
	while( $obj = sqlsrv_fetch_object( $stmt)) {
		$result[$contador]['ID']=$obj->id_cancion;
		$result[$contador]['Nombre']=$obj->nombre;
		$result[$contador]['interprete']=$obj->interprete;
		$result[$contador]['bajadas']=$obj->bajadas;
		$result[$contador]['totalcompras']=$obj->totalcompras;
		$contador++;
	}
	$conexion->closeConexion();
	return $result; 
}
function getCancionesAdmin()
{
	$conexion = new Conexion();
	$conexion->conectarBD();
	$con = $conexion->getConexion();
	
	$sql="SELECT * FROM vw_cancionInterprete where PAGINA_INICIAL>0 and FechaInicio<=GETDATE() and FechaFin>=GETDATE() ";

	$stmt = sqlsrv_query($con,$sql);
			
	if( $stmt === false) {
		die( print_r( sqlsrv_errors(), true) );
	}
			
	$result = array();
	$contador=0;
	while( $obj = sqlsrv_fetch_object( $stmt)) {
		$result[$contador]['ID']=$obj->id_cancion;
		$result[$contador]['Nombre']=$obj->nombre;
		$result[$contador]['interprete']=$obj->interprete;
		$result[$contador]['bajadas']=$obj->bajadas;
		$result[$contador]['totalcompras']=$obj->totalcompras;
		$contador++;
	}
	$conexion->closeConexion();
	return $result; 
}
?>