<?php 
session_start();
session_name("musica");

function sesionInit($user,$name){
	$_SESSION["user"]=$user;
	$_SESSION["name"]=$name;
}

function sesionEnd(){
	session_destroy();
}

function existeSesion(){
	if(isset($_SESSION["user"]))
	{return true;}else{return false;}
}
?>