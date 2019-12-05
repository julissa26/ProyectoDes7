<?php 
$host = "localhost";
$usuario = "root";
$clave = "";
//nombre de la base de datos

$bd = "amin";

$conexion =mysqli_connect($host,$usuario,$clave,$bd);


if ($conexion) {

	echo "Conectado correctamente";
}else {
	
	echo "no se pudo conectar";
}

 ?>