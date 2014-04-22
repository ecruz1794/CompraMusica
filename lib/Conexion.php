<?php
	#Clase conexion se encarga de la conexion directa con la base de datos
	class Conexion
	{
		#Declaracion de variables
		var $conexion;  #Almacena la conexion establecida con la base de datos
		var $basedatos; #Almacena nombre de la base de datos
		var $servidor;  #Almacena el nombre del servidor de la base de datos
		var $usuario;   #Almacena el usuario de la base de datos
		var $password;  #Almacena la contraseña de la base de datos
		
		
		#Metodo constructor que inicializa las variables
		function Conexion()
		{
			$this->basedatos='musica';
			$this->servidor='localhost';
			$this->usuario='sa';
			$this->password='123';	
			
		}
		
		#Metodo encargado de realizar la coneccion con la base de datos
		function conectarBD()
		{
			try{
				## conexion a sql server...
				$connectionInfo = array( "Database"=>$this->basedatos, "UID"=>$this->usuario, "PWD"=>$this->password);
				$this->conexion = $conn = sqlsrv_connect( $this->servidor, $connectionInfo );
				
			} catch (Exception $e) {
				echo "Caught Exception ('{$e->getMessage()}')\n{$e}\n";
			}
			
			if( $this->conexion === false ) {
				die( print_r( sqlsrv_errors(), true));
			}else{ return true;}
		}
		function getServidor()
		{
			return $this->servidor;
		}
		function getBD()
		{
			return $this->basedatos;
		}
		function getUser()
		{
			return $this->usuario;
		}
		function getPassword()
		{
			return $this->password;
		}
		function executeQuery($sql)
		{
			$stmt = sqlsrv_query($this->conexion,$sql);
			
			if( $stmt === false) {
				die( print_r( sqlsrv_errors(), true) );
			}
			// Devolver cada fila como un objeto.
			// Puesto que no se especifica ninguna clase, cada fila devolverá un objeto stdClass.
			// Los nombres de propiedades corresponden a nombres de campo.
			$result = array();
			$contador=0;
			while( $obj = sqlsrv_fetch_object( $stmt)) {
				$result[$contador]['Nombre']=$obj->Nombre;
				$result[$contador]['Cuenta']=$obj->Cuenta;
				$contador++;
			}
			return $result;
		}
		function getConexion()
		{
			return $this->conexion;
		}		
		function closeConexion()
		{
			sqlsrv_close($this->conexion);
		}
	}
?>
