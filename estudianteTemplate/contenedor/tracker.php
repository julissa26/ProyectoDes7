<?php
include ('../../validar.php');
include ('conexion.php');
$user = $_SESSION['user'];

$consulta = mysqli_query($conexion,"SELECT * FROM solicitud WHERE estado = 'pendiente' AND correo = '".$user."'");

if(mysqli_num_rows($consulta) !== 1)
{
   
    header('Location: home.php');
}

while($bruh = mysqli_fetch_array($consulta)){
    $idSol = $bruh['idSolicitud'];
    $nombre = $bruh['nombre'];
    $cedula = $bruh['cedula'];
    $nombreEvento = $bruh['nombreEvento'];
    $unidad = $bruh['unidadAcademica'];
    $fechaini = $bruh['fechaInicial'];
    $fechafin = $bruh['fechaFinal'];
    $estado = $bruh['estado'];
    $checkeado = $bruh['checkeado'];
}

$consultabruh = mysqli_query($conexion,"SELECT rev_secretaria,rev_comite,rev_rector FROM solicitud WHERE idSolicitud = '".$idSol."' AND estado = 'pendiente' ");

while($bruhh = mysqli_fetch_array($consultabruh)){
    $sec = $bruhh['rev_secretaria'];
    $com = $bruhh['rev_comite'];
    $rec = $bruhh['rev_rector'];
}
if($sec = 1 AND $com != 1 AND $rec != 1){
    $secr= 33.33;
    $comi= 0; 
    $rect =0;

} else if($sec = 1 AND $com = 1 AND $rec != 1){
    $secr= 33.33;
    $comi = 33.33;
    $rect =0;

} else if($sec = 1 AND $com = 1 AND $rec = 1){
    $secr= 33.33;
    $comi = 33.33;
    $rect = 33.33;
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
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="tr.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

    <!-- Ionic icons-->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <!--logo de la pestaña -->
    <link rel="shortcut icon" href="../assets/images/logo.png" />

    <link href="../css/main2.css" rel="stylesheet" />


    <title>UTP-Proyecto</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <img src="../assets/images/logo14.png" class="logo-brand" alt="logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icon ion-md-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Solicitudes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="nuevaSolicitud.php" id="nuevaSol">Nueva Solicitud</a>
                          <a class="dropdown-item" href="tracker.php" id="pendienteSol">Pendientes</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="" id="historialSol">Historial</a>
                        </div>
                </li>

                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Informes 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="entregarInforme.php" id="entregarInfo">Entregar</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#" id="historialInfo">Historial</a>
                        </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sesion
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="perfil.php" id="perfilSesi">Mi Perfil</a>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="salir.php" id="salir">Cerrar Sesión</a>
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <section id="hero">
    <div class="progress">
    <div class="content-center">
       
        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
         <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
        <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </div>
    </section> -->

    
    <div class="content-center">
    <section id="tracker">
        <div class="content-center">
            <h2><?php echo $nombreEvento;?></h2>
        </div>
    
     <div class="progress content-center">
            <div class="progress-bar" role="progressbar" style="width:<?php echo $secr;?>%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">secretaria</div>
            <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $comi;?>%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">Comite</div>
            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $rect;?>%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Rectoria</div>
          
          </div>
          </section>
    
          <h2 class="margintop-lg">Su documento a sido visto por: <?php echo $checkeado; ?></h2>
</div>


<footer class="bgDark">
            <div class="container">
                <small>©2019 Proyecto Semestral - Desarrollo VII.</small>
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