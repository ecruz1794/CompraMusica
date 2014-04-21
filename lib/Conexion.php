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
			$this->usuario='root';
			$this->password='';	
			
		}
		
		#Metodo encargado de realizar la coneccion con la base de datos
		function conectarBD()
		{
			#Estilo orientado a objetos ---  new mysqli(servidor, usuario, contraseña, baseDatos)
			#devuelve un identificador de recurso o false si la conexión falla
			$mysqli=new mysqli($this->servidor,$this->usuario,$this->password,$this->basedatos); #Realiza la conexion con la bd  tipo OO
			
			/* verificar la conexion */
			if(mysqli_connect_errno())  #devuelve el codigo de error de la ultima llamada conexion
			{
				echo "<h1>Error al conectar a la base de datos </h1>". mysqli_connect_error(); #devuelve una descripción del último error de conexión
				exit();
			}
			
			$this->conexion=$mysqli;
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
			mysqli_close($this->conexion);
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
