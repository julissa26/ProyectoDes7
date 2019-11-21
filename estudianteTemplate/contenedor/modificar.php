<?php

include ('conexion.php');
include ('validar.php');

$contraseña = $_POST['contra'];
$contraNueva = $_POST['contraNueva'];
$email = $_POST['email'];
$emailNuevo = $_POST['emailNuevo'];


$consulta= mysqli_query($conexion,"SELECT contra FROM usuario WHERE contra = '".$contraseña."'");

if(mysqli_num_rows($consulta) == 1){
    $consulta2 = mysqli_query($conexion,"UPDATE usuario  contra = '".$contraNueva."' WHERE email ='".$email."'");

    if(empty($emailNuevo)){
        $consulta3 = mysqli_query($conexion, "UPDATE usuario SET contra = '".$contraNueva."' WHERE contra = '".$contraseña."' AND email = '".$email."'");
    }
    if(empty($contraNueva)){
        $consulta4 = mysqli_query($conexion, "UPDATE usuario SET email = '".$emailNuevo."' WHERE email ='".$email."' ");
    }
    if(empty($contraseña) AND empty($email)){
        echo "error, se debe facilitar la contraseña actual y el correo actual para realizar la modificacion.";
        header ('Location: home.php');
    }
    echo "DATOS ACTUALIZADOS";
    header ('Location: perfil.php'); 
}


?>