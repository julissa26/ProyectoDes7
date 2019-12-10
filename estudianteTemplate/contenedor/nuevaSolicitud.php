<?php
include ('../../validar.php');
include ('conexion.php');
$user = $_SESSION['user'];

$consulta = mysqli_query($conexion, "SELECT * FROM usuario WHERE  email = '".$user."'");
while($bruh = mysqli_fetch_array($consulta)){

    $nombre = $bruh['nombre'];
    $apellido = $bruh['apellido'];
    $cedula = $bruh['cedula'];
    $email = $bruh['correo'];

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

<body>
    <!-- comienzo del navbar  -->
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
                          <a class="dropdown-item" href="historialSolicitud.php" id="historialSol">Historial</a>
                        </div>
                </li>

                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Informes 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="entregarInforme.php" id="entregarInfo">Entregar</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="historialInforme.php" id="historialInfo">Historial</a>
                        </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sesion
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="perfil.php" id="perfilSesi">Mi Perfil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../../salir.php" id="cerrarSesi">Cerrar sesión</a>
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </nav>
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
                          <a class="dropdown-item" href="historialSolicitud.php" id="historialInfo">Historial</a>
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
    <!-- final del navbar --> 

     <!-- inicio del formulario -->
     <div class="container" id="formulario">  
            <div class="content-center">
                <h3 class="margintop-lg">Nueva Solicitud</h3>
            </div>
            <form class="formFinal" name="formFinal" action="registrarSolicitud.php" method="post">
                <div class="row">
                    <div class="col-sm-14 col-sm-offset-5 col-md-12 col-md-offset-6">
                        <div class="form-row">
                            <div class="form-group col-md-5">
                            <h4>Datos de los Estudiantes</h4>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="inputCity">Nombre Completo</label>
                                <input input id="nombre" name="nombre" value="<?php echo $nombre, $apellido;?>" type="text" class="form-control" readonly >
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Cedula</label>
                                <input id="cedula" name="cedula" value="<?php echo $cedula;?>" type="text" class="form-control input-sm" readonly>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputState">Unidad Academica</label>
                                <input id="unidadaca" name="unidadaca"  type="text" class="form-control">
                                <!-- <select id="inputState" class="form-control">
                                    <option selected>FISC</option>
                                    <option>...</option>
                                </select> -->
                            </div>
                          <!--   
                            <div class="form-group">
                                    <button type="button" name="add" id="add" class="btn btn-info btn-sm">Añadir Participante</button>
                            </div> -->

                        </div>
                        
                        <hr>
                        
                        <div class="form-row">
                            <div class="form-group col-md-5">
                            <h4>Datos del Evento</h4>
                            </div>
                        </div>
                        <br>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombreeve">Nombre del Evento</label>
                                <input id="nombreeve" name="nombreeve" type="text" class="form-control">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="fecha">Fecha Inicial</label>
                                <input  id="fecha" name="fechaini" type="date" class="form-control input-sm">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="fecha">Fecha Final</label>
                                <input id="fecha2" name="fechafin" type="date" class="form-control input-sm">
                            </div>

                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label  for="dirrecion">Lugar</label>
                                <input id="dirrecion" name="lugarEvento" type="text" class="form-control">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="tipoeve" >Categoria</label>
                                <select  id="tipoeve" name="categoria[]" class="form-control">
                                    <option  value="cultural"selected>Cultural</option>
                                    <option  value="deportivo">Deportivo</option>
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="alcenceeve">Alcance</label>
                                <select  id="alcenceeve" name="alcence[]" class="form-control">
                                    <option value="nacional" selected>Nacional</option>
                                    <option value="internacional">Internacional</option>
                                </select>
                            </div>

                        </div>
                    
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputCity">Justificación y Beneficios de la Participación</label>
                                <input name="comentarios" type="text" class="form-control">
                            </div>

                        </div>
                        <hr>
                        
                        <div class="form-row">
                            <div class="form-group col-md-5">
                            <h4>Tipo de Apoyo</h4>
                            </div>
                        </div>
                        <br>

                        <div class="form-row">
                            <div class="form-group">
                                <h5>Apoyo Ofrecido por los Organizadores del Evento</h5>
                            </div>
                    
                            <div class="form-group col-md-10">
                                <div class="form-check">
                                    <input class="form-check-input" name="apoyoEspecial[]" value="Inscripcion" type="checkbox">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Inscripción
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-10">
                                <div class="form-check">
                                    <input class="form-check-input" name="apoyoEspecial[]" value="Hospedaje" type="checkbox">
                                    <label class="form-check-label" for="defaultCheck1">
                                       Hospedaje
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-10">
                                <div class="form-check">
                                    <input class="form-check-input" name="apoyoEspecial[]" value="Manutencion" type="checkbox">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Manutención
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-10">
                                <div class="form-check">
                                    <input class="form-check-input" name="apoyoEspecial[]" value="Gastos de Viaje" type="checkbox">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Gastos de Viaje
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-10">
                                <div class="form-check">
                                    <input class="form-check-input" name="apoyoEspecial[]" value="ApoyoEconoParcial" type="checkbox">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Apoyo Económico Parcial
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Apoyo Solicitado a la Universidad</h5> 
                            </div>
                            <div class="form-group col-md-10">
                                <div class="form-check">
                                <input class="form-check-input" name="apoyoEspecial[]" value="UTPinscripcion" type="checkbox">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Inscripción
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-10">
                                <div class="form-check">
                                    <input class="form-check-input" name="apoyoEspecial[]" value="UTPgastoViaje" type="checkbox">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Gastos de Viaje
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-10">
                                <div class="form-check">
                                    <input class="form-check-input" name="apoyoEspecial[]" value="UTPapoyoEconomico"type="checkbox">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Apoyo Económico
                                    </label>
                                </div>
                            </div>
                            <br>
                            <br>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div class="form-group col-md-5">
                                    <label for="inputCity">Monto Inscripción</label>
                                    <input id="nombreeve" name="montoInscripcion" type="text" class="form-control input-sm">
                                </div>
                                </div>
                                <div class="form-group col-md-12">                                
                                <div class="form-group col-md-5">
                                    <label for="inputEmail4">Monto Gastos de Viaje</label>
                                    <input id="fecha" name="montoGastoViaje" type="text" class="form-control input-sm">
                                </div>
                                </div>
                                <div class="form-group col-md-12">
                                <div class="form-group col-md-5">
                                    <label for="inputEmail4">Monto Apoyo Económico</label>
                                    <input id="fecha" name="montoApoyoEcono" type="text" class="form-control input-sm">
                                </div>
                                </div>
                                <hr>
                        </div>
                        <hr>
                        <div class="form-row content-center">
                            <div class="submit">
                                <button id="registerButton" type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                            </div>
                        </div>
    
                            <div class="form-group">
                                <!-- <form name="add_name" id="add_name"> -->
                                    <div class="table-responsive">
                                        <table class="table table-borderless" id="dynamic_field">
                                            <tr>
                                                <!-- <td><input type="text" name="name[]" placeholder="Nombre Completo" class="form-control name_list" /></td>
                                                <td><input type="text" name="ced[]" placeholder="Cedula" class="form-control name_list" /></td> -->
                                                <!-- <td><button type="button" name="add" id="add" class="btn btn-secondary btn-sm">+</button></td> -->
                                                
                                            </tr>
                                        </table>
                                        <!-- <input type="button" name="submit" id="submit" class="btn btn-success" value="Submit" /> -->
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    
                    </div>
                </div>
            </form>
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