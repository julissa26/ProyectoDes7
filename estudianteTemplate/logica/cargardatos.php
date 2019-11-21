<?php

include ('conexion.php');

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$contra=md5($_POST['contra']);
$correo=$_POST['correo'];
$tele=$_POST['telefono'];



echo "sea guardado los datos<br>";

echo '<a href="paginaprincipal.php">ir a la pagina principal</a><br>';

echo '<a href="../index.php"> regresar al login </a>';




$sql ="INSERT INTO user (nombre, apellido,cedula,contra, email, telefono) VALUES ('$nombre', '$apellido','$cedula','$contra','$correo', '$tele' )";
mysqli_query($conexion, $sql);

?>