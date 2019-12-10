<?php
  include ('contenedor/conexion.php');
  session_start();
  $user = $_POST['user'];
  $contraseña = $_POST['contraseña'];
  

   $consulta = mysqli_query($conexion, "SELECT email, contra FROM usuario WHERE email = '".$user."' AND contra = '".$contraseña."'");

  //validacion de que los datos esten correctos y coincidan con los de la BD
     if ( mysqli_num_rows($consulta) == 1)
     {
          $_SESSION['user']=$user;
          $sulta = mysqli_query($conexion, "SELECT tipo From usuario WHERE email = '".$user."'");

          while($bruh = mysqli_fetch_array($sulta)){
              $tipo = $bruh['tipo'];
          }

          switch($tipo)
          {
            case 1: 
                {
                    header('Location: contenedor/home.php');
                    break;
                }
            case 2:
                {
                    header('Location: ../admins/ADMIN_SECRETARIA/index.php');
                    break;
                }
            case 3:
                {
                    header('Location: ../admins/ADMIN_COMITE/index.php');
                    break;
                }
            case 4:
                {
                    header('Location: ../admins/ADMIN_RECTORIA/index.php');
                    break;
                }        
          }
         
     }
     else{
         header('Location: index.php');
     }

?>