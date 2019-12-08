<?php
include ('../validar.php');
include ('conexion.php');
$user = $_SESSION['user'];
$ced = $_POST['cedula'];


$consulta = mysqli_query($conexion,"SELECT * FROM solicitud WHERE cedula = '".$ced."'");



   if(mysqli_num_rows($consulta)<= 0){
    $idSol = "Estudiante sin ninguna Solicitud.";
    $nombre = '';
    $cedula = '';
    $nombreEvento = '';
    $unidad = '';
    $fechaini = '';
    $fechafin = '';
}  



?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="author" content="Diego Velázquez">
    <meta name="description" content="Smart Agency is a one page responsive Bootstrap 4 template. This is a free open source theme, you can use our theme for any purpose, even commercially. Create amazing websites with this easy to customize template."> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/formulario.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

    <!-- Ionic icons-->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <!--logo de la pestaña -->
    <link rel="shortcut icon" href="assets/images//logo.png" />

    <title>UTP-Proyecto</title>
</head>
<style type="text/css"> 
    table,th,td{
        border:1px solid purple;
        border-collapse: collapse;
               }

    th,td{
        padding: 15px;
        font-size:small;
         }       
</style>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <img src="assets/images/logo14.png" class="logo-brand" alt="logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icon ion-md-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Solicitudes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="solicitudesPendientes.php" id="pendienteSol">Pendientes</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="historialSolicitud.php" id="historialSol">Historial</a>
                        </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sesion
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     
                        <a class="dropdown-item" href="../../salir.php" id="cerrarSesi">Cerrar sesión</a>
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="solicitudes">
        <duv class="container">
                <div class="content-center">
                    <h2 class="margintop-lg">Historial de Solicitudes</h2>
                </div>
            </duv>
            <div class="solicitudes">

                    <table> 
                            <tr>
                                <th> Solicitud:</th>
                                <th><label for="fecha">Fecha: </label></th>
                                <th><label for="estado">Estado: </label></th>
                            </tr>
                            <?php while ($bruh = mysqli_fetch_array($consulta)){?>
                            <tr>
                                <ul>   
                                    <td>
                                        <a href="verSolPendiente.php"><?php echo $nombreEvento= $bruh['nombreEvento'];?></a>
                                    </td>
                                    <td>
                                        <p><label for="fecha"><?php echo $fechaini = $bruh['fechaInicial']; ?> </label></p>
                                    </td>   
                                     <td>
                                        <p><label for="estado"><?php echo $checkeado = $bruh['checkeado'];?> </label></p>
                                    </td>
                                </ul>
                            </tr>
                            <?php }?>
                           
                       
                    </p>
                        </table>
                        <br>
                        <br>
                        <p class="submit">
                        <button><a class="enlace" href="historialSolicitud.php">Volver</a></button>
                       </div>  
                     </section>  
                        <footer class="bgDark">
            <div class="container">
                <img src="assets/images/logo1.png" class="logo-brand" alt="logo">
               <!--  <ul class="list-inline">
                    <li class="list-inline-item footer-menu"><a href="#">Home</a></li>
                    <li class="list-inline-item footer-menu"><a href="#">Faqs</a></li>
                    <li class="list-inline-item footer-menu"><a href="#">Acerca de Nosotros</a></li>
                    <li class="list-inline-item footer-menu"><a href="#">Contacto</a></li>
                </ul>
                 -->
                <small>©2019 All Rights Reserved.</small>
            </div>
        </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>                       