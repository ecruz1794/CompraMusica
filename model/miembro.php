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
function nuevoMiembro($cuenta, $clave,$nombre,$saldo, $email)
{
	$conexion = new Conexion();
	$conexion->conectarBD();
	$sql="Insert into cm_miembro(Nombre, Cuenta, Clave, Saldo, Email, CantidadCompra, Estado)values('".$nombre."','".$cuenta."','".$clave."','".$saldo."','".$email."',0,0')";
	$conexion->executeQuery($sql);
	$conexion->closeConexion();
}

function logeo($usuario,$pass){
	$conexion = new Conexion();
	$conexion->conectarBD();
	
	//$stmt = $conexion->executeQuery("SELECT * FROM cm_miembro WHERE usuario = '".$usuario."'clave = '".$pass);
	$sql="Insert into cm_miembro(Nombre, Cuenta, Clave, Saldo, Email, CantidadCompra, Estado)values('".$nombre."','".$cuenta."','".$clave."','".$saldo."','".$email."',0,0')";
	
	$conexion->closeConexion();

	//$result = $stmt->get_result();
	//while ($row = $result->fetch_assoc()) {}
	// do something with $row
	return $stmt;
}
?>