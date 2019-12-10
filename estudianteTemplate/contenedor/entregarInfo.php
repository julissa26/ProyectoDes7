<?php
include ('../../validar.php');
include ('conexion.php');
$user = $_SESSION['user'];

$consulta = mysqli_query($conexion, "SELECT estado FROM solicitud WHERE estado = 'finalizado' AND correo = '".$user."' AND informe = '0'");
    if(mysqli_num_rows($consulta) <= 1)
    {
       
        header('Location: home.php');
    }


$query = mysqli_query($conexion, "SELECT * FROM solicitud WHERE estado = 'finalizado' AND correo = '".$user."'");
while($bruh = mysqli_fetch_array($query)){
    $nombreEve = $bruh['nombreEvento'];
    $fechaIni = $bruh['fechaInicial'];
    $fechaFin = $bruh['fechaFinal'];
    $nombre = $bruh['nombre'];
    /* $participantes = $bruh['participantes']; */
    $lugar = $bruh['lugarEvento'];
}

/* $participantes=""; */


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
    <link rel="stylesheet" href="../assets/css/formulario.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

    <!-- Ionic icons-->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <!--logo de la pestaña -->
    <link rel="shortcut icon" href="../assets/images/logo.png" />

    <title>UTP-Proyecto</title>
</head>


<!-- hacer un if para que esta pagina solo se muestre si la solicitud fue aprobada-->
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
                        <a class="dropdown-item" href="#" id="cerrarSesi">Historial</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="salir.php" id="salir">Cerrar Sesión</a>
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- inicio de formulario -->
        <div class="container" id="formulario">  
            <div class="content-center">
                <h3 class="margintop-lg">Entregar Informe de evento</h3>
            </div>
            <form class="formFinal" name="formFinal" action="registrarInforme.php" method="post" enctype="multipart/form-data"">
                <div class="row">
                    <div class="col-sm-14 col-sm-offset-5 col-md-12 col-md-offset-6">

                        <div class="form-row">
                            <div class="form-group col-md-5">
                            <h4>Datos del Evento</h4>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="nombreEve">Nombre</label>
                                <input id="nombreEve" name="nombreEve" value="<?php echo $nombreEve;?>" type="text" class="form-control" readonly >
                            </div>

                            <div class="form-group col-md-4">
                                <label for="fecha">Fecha de Inicio</label>
                                <input  id="fecha1" name="fechaIni" type="text" value="<?php echo $fechaIni;?>" type="text" class="form-control input-sm" readonly>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="fecha">Fecha de Final</label>
                                <input id="fecha2" name="fechaFin" type="text" value="<?php echo $fechaFin ?>"  type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="lugar">Lugar</label>
                                <input id="lugar" name="lugar" type="text" value="<?php echo $lugar ?>" class="form-control" readonly>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="estudiante">Encargado</label>
                                <input id="estudiante" name="estudiante" type="text" value="<?php echo $nombre ?>" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="Participante">Participante</label>
                                <input id="participante" name="participante" type="text" value="<?php  $participantes ?>" class="form-control" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                            <h4>Aspectos Relevantes</h4>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="resultados">Resultados Obtenidos</label>
                                <input id="resultados" name="resultados" type="text" value="<?php  $participantes ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="conclusiones">Conclusiones</label>
                                <input id="conclusiones" name="conclusiones" type="text" value="<?php  $participantes ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="recomendaciones">Recomendaciones</label>
                                <input id="recomendaciones" name="recomendaciones" type="text" value="<?php  $participantes ?>" class="form-control">
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                            <h4>Anexos</h4>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div class="input-group mb-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" id="imagen" name="imagen" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="imagen">Choose file</label>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div class="input-group mb-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" id="imagen2" name="imagen2" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="imagen2">Choose file</label>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div class="input-group mb-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" id="imagen3" name="imagen3" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="imagen3">Choose file</label>
                                    </div>
                                </div>
                             </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                            <h4>Resumen</h4>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input id="resumen" name="resumen" type="text" class="form-control">
                            </div>
                        </div>
                        <hr>
                            <div class="form-row content-center">
                                <div class="submit">
                                    <button id="registerButton" type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                                </div>
                            </div>
                        

                    </div>
                </div>
            </form>
        </div>
    <!-- final del formulario  -->

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