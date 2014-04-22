<?php 
include("../lib/sesion.php");
include("../model/miembro.php");

if(isset($_GET["option"]) && $_GET["option"]=="logout"){sesionEnd();header('Location: ../index.php');}

if( !isset($_POST['action']) )
{
	$action = -1;
}else{
	$action = $_POST['action'];
}
switch ($action) {
    case 0:
        $login = logeo($_POST['cuenta'],$_POST['password']);
		if( $login != NULL){
			sesionInit($login[0]['Cuenta'],$login[0]['Nombre']);
			$_SESSION["ID"]=$login[0]['ID'];
			$_SESSION["Nombre"]=$login[0]['Nombre'];
			$_SESSION["Cuenta"]=$login[0]['Cuenta'];
			$_SESSION["Email"]=$login[0]['Email'];
		}
		header('Location: ../index.php');
        break;
    case 1:
        $registro = nuevoMiembro($_POST['cuenta'], $_POST['clave'],$_POST['nombre'], $_POST['email']);
		$login = logeo($_POST['cuenta'],$_POST['clave']);		
        break;
    case 2:
       
        break;
		
	default:
		echo "No se encontraron acciones a realizar";
}

header('Location: ../index.php');
?>