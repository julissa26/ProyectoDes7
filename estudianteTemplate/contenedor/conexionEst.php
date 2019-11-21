<?php 
$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "bdestudiante";

$conexionEst =mysqli_connect($host,$usuario,$clave,$bd);


if ($conexion) {

	echo "Conectado correctamente";
}else {
	
	echo "ERROR AL CONECTAR";
}

 ?>