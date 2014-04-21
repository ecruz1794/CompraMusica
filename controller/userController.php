<?php 
include("../lib/sesion.php");
include("../model/miembro.php");

if( !isset($_POST['action']) )
{
	$action = -1;
}else{
	$action = $_POST['action'];
}
switch ($action) {
    case 0:
        $login = logeo($_POST['cuenta'],$_POST['password']);
		var_dump( $login);
		/*while ($row = $result->fetch_assoc()) {
			$session = new session();
			$session->startSession($row["Cuenta"],$row["Nombre"]);
			return true;
		}*/
        break;
    case 1:
        
        break;
    case 2:
       
        break;
		
	default:
		echo "No se encontraron acciones a realizar";
}
?>