<?php
include ('../../validar.php');
include ('conexion.php');
$user = $_SESSION['user'];

$consulta = mysqli_query($conexion, "SELECT estado FROM solicitud WHERE estado = 'finalizado' AND correo = '".$user."'");
    if(mysqli_num_rows($consulta) != 1)
    {
       
        header('Location: home.php');
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

    <section id="fomulario">
            <duv class="container">
                    <div class="content-center">
                        <h2 class="margintop-lg">Informe Final</h2>
                    </div>
                </duv>
        <form class="formFinal" name="formFinal" action="registrarInforme.php" method="post" enctype="multipart/form-data">
                        
            <fieldset class="step">
                <legend>Datos sobre el Evento</legend>
                <p>
                    <label for="nombreEve">NOMBRE DEL EVENTO: </label><br>
                    <input id="nombreEve" name="nombreeve" type="text" />
                </p>
                <p>
                    <label for="fecha">FECHA INICIAL DEL EVENTO: </label><br>
                    <input id="fecha1" name="fechaini" type="text" placeholder="dd/mm/yyyy"/>
                </p>
                <p>
                    <label for="fecha">FECHA FINAL DEL EVENTO: </label><br>
                    <input id="fecha2" name="fechafin" type="text" placeholder="dd/mm/yyyy"/>
                </p>
                <p>
                    <label for="lugar">LUGAR DEL EVENTO: </label><br>
                    <input id="lugar" name="lugar" type="text" />
                </p>
                <p>
                    <label for="participante">PARTICIPANTE: </label><br>
                    <input id="participante" name="participante" type="text" />
                </p>
            </fieldset>
            
            <fieldset class="step">
                <legend>ASPECTOS RELEVANTES</legend>
                <p>
                    <label for="resultados">RESULTADOS OBTENIDOS: </label>
                    <textarea name="resultados" rows="2" cols="60"></textarea>
                </p>
                <p>
                    <label for="conclusiones">CONCLUSIONES: </label>
                    <textarea name="conclusiones" rows="2" cols="60"></textarea>
                </p>
                <p>
                    <label for="recomendaciones">RECOMENDACIONES: </label>
                    <textarea name="recomendaciones" rows="2" cols="60"></textarea>
                </p>

            </fieldset>

            <fieldset class="step">
                <legend>ANEXOS</legend>
                <p>
                    <label for="imagen">IMAGEN(1): </label><br>
                    <input id="imagen" name="imagen" type="file" />
                </p>
                <p>
                    <label for="imagen2">IMAGEN(2): </label><br>
                    <input id="imagen2" name="imagen2" type="file" />
                </p>
                <p>
                    <label for="imagen3">IMAGEN(3): </label><br>
                    <input id="imagen3" name="imagen3" type="file" />
                </p>

            </fieldset>

            <fieldset class="step">
                <legend>RESUMEN DEL EVENTO</legend>
                <p>
                    <label for="resumen">RESUMEN: </label>
                    <textarea name="resumen" rows="6" cols="100"></textarea>
                </p>
            </fieldset>

            <fieldset class="step">
                    <legend>Obtener Archivo .pdf</legend>
                    <p class="submit">
                        <button id="registerButton" type="submit">PDF</button>
                    </p>
            </fieldset>

            <fieldset class="step">
                <legend>Confirmar</legend>
                <p class="submit">
                    <button id="registerButton" type="submit">Entregar</button>
                </p>
            </fieldset>
        </form>
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