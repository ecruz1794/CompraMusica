<?php 
class sesion{
	function startSesion($user,$name){
		session_start();
		session_name("musica");
		$_SESSION["user"]=$user;
		$_SESSION["name"]=$name;
	}
	
	function sesionEnd(){
		session_destroy();
	}
}
?>