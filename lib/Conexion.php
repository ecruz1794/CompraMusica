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
			$this->basedatos='musica_database';
			$this->servidor='localhost';
			$this->usuario='sa';
			$this->password='123';	
			
		}
		
		#Metodo encargado de realizar la coneccion con la base de datos
		function conectarBD()
		{
			try{
				## conexion a sql server...
				$this->conexion = mssql_connect($this->servidor,$this->usuario,$this->password);
				## seleccionamos la base de datos
				mssql_select_db($this->basedatos,$this->conexion);
			} catch (Exception $e) {
				echo "Caught Exception ('{$e->getMessage()}')\n{$e}\n";
			}
			return true;
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
			$result_set = $this->conexion->query($sql);
			return $result_set;
		}
		function getConexion()
		{
			return $this->conexion;
		}
		
		
		function closeConexion()
		{
			mssql_close($this->conexion);
		}
	}
?>
<?php /*
try {
	## conexion a sql server...
	$link=mssql_connect("NABUCODONOSOR","sa","******");
	## seleccionamos la base de datos
	mssql_select_db("DevTroce",$link);
	## generamos el query
	$result=mssql_query("select * from Clientes",$link);
	## recorremos todos los registros
	while($row=mssql_fetch_array($result))
	{
		$counter++; 
		echo ("$counter Nombres: ".$row["Nombres"].", Direccion: " .$row["Direccion"]."<br/>"); 
		echo "<hr>";
	}
} catch (Exception $e) {
    echo "Caught Exception ('{$e->getMessage()}')\n{$e}\n";
}
## cerramos la conexion
mssql_close($link);*/
?>
