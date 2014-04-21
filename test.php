<?php
$serverName = "localhost";
$connectionInfo = array( "Database"=>"musica", "UID"=>"sa", "PWD"=>"123");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}
$sql = "INSERT INTO cm_miembro (Nombre, Cuenta, Clave) VALUES ('Roberto', 'rb', 123);";
$stmt = sqlsrv_query( $conn, $sql );

$sql = "SELECT * FROM cm_miembro where id=1;";
$stmt = sqlsrv_query( $conn, $sql );
echo "ins y cons";
echo $stmt;
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}
 
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo $row['Name'].", ".$row['Cuenta']."<br />";
}
 
sqlsrv_free_stmt( $stmt);
 ?>