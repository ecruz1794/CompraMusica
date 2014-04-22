<?php 
include("../lib/Conexion.php");

//Cambiar para sql injection
function getMiembro($ID){
	$conexion = new Conexion();
	$conexion->conectarBD();
	$sql='SELECT * FROM cm_miembro where 1=1 ';
	if($ID!=''){
		$sql=$sql.' and Id = ?';
	}
	$stmt = $conexion->prepare($sql);
	if($ID!=''){
		$stmt->bind_param('i', $ID);
	}
	
	$stmt->execute();
	$conexion->closeConexion();
	
	$result = $stmt->get_result();
	//while ($row = $result->fetch_assoc()) {
	// do something with $row
	//}
	return $stmt;
}

//cambiar para sql inhe
function nuevoMiembro($cuenta, $clave,$nombre, $email)
{
	$conexion = new Conexion();
	$conexion->conectarBD();
	$con = $conexion->getConexion();
	
	$sql="Insert into cm_miembro(Nombre, Cuenta, Clave, Saldo, Email, CantidadCompras, Estado)values('".$nombre."','".$cuenta."','".$clave."',0,'".$email."',0,1); SELECT SCOPE_IDENTITY() AS ID;";
	
	
	$stmt = sqlsrv_query($con,$sql);	
	if( $stmt === false) {
		die( print_r( sqlsrv_errors(), true) );
	}
	$result = array();
	$contador=0;
	while( $obj = sqlsrv_fetch_object( $stmt)) {
		$result[$contador]['ID']=$obj->ID;
		$contador++;
	}
	$conexion->closeConexion();
	return $result; //Retorna el ID de la insercion
	
}

function logeo($usuario,$pass){
	$conexion = new Conexion();
	$conexion->conectarBD();
	$con = $conexion->getConexion();
	
	$sql="SELECT * FROM cm_miembro WHERE Cuenta = '".$usuario."' and Clave = '".$pass."'";

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
?>