<?php 
include 'conexion.php';
session_start();

$correo=$_POST['username'];

$clavemd5=md5($_POST['pass']);

$result = mysqli_query($conexion, "SELECT  * FROM user WHERE email = '$correo' and contra='$clavemd5'");

			
    if ( mysqli_num_rows($result) ==1)
    {
         $_SESSION['username']=$usuario;
        // aqui se pone la pagina principal
        header('Location: paginaprincipal.php');
    }
    else{


        header('Location: ../index.php');
    }



 ?>