<?php 

session_start();

$usuario = $_SESSION['username'];

if (!isset($usuario)){
	header("location:../index.php");
}else{

	echo "<h1>BIENVINIDO  SI HAS LLEGADO AQUI SIGNIFICA QUE EL LOGIN SIRVE</h1>";

    echo "<a href='salir.php'>Salir</a>";

   
}

	




 ?>