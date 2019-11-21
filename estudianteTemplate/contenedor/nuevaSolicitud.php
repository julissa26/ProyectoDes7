<?php
include ('validar.php');
include ('conexion.php');
$user = $_SESSION['user'];

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
                        <a class="nav-link" href="#hero">Home</a>
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
                        <h2 class="margintop-lg">Nueva Solicitud</h2>
                    </div>
                </duv>
                <form class="formFinal" name="formFinal" action="registrarSolicitud.php" method="post">
                        <fieldset class="step">	
								<legend>INFORMACIÓN DE LOS ESTUDIANTES:</legend>
                            <p>
                                <label for="nombre">NOMBRE: </label><br>
                                <input id="nombre" name="nombre" type="text"/>
                            </p>
                            <p>
                                <label for="cedula">CÉDULA: </label><br>
                                <input id="cedula" name="cedula" placeholder="8-888-8888" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="unidadaca">UNIDAD ACADÉMICA: </label><br>
                                <input id="unidadaca" name="unidadaca" type="text"  />
                            </p>
                             <p>
                                 <br>
                             <button  ><a style="color:black" href="filasdinamicas.html"> Añadir más Estudiantes</a></button>
                              </p>

                        </fieldset>


                        <fieldset class="step">
                            <legend>Datos sobre el Evento</legend>
                            <p>
                                <label for="nombreeve">NOMBRE DEL EVENTO: </label><br>
                                <input id="nombreeve" name="nombreeve" type="text" />
                            </p>
                            <p>
                                <label for="fecha">FECHA INICIAL DEL EVENTO: </label><br>
                                <input id="fecha" name="fechaini" type="text" placeholder="dd/mm/yyyy/"/>
                            </p>
                            <p>
                                <label for="fecha">FECHA FINAL DEL EVENTO: </label><br>
                                <input id="fecha2" name="fechafin" type="text" placeholder="dd/mm/yyyy/" />
                            </p>
                            <p>
                                <label for="justi">JUSTIFICACIÓN Y BENEFICIOS DE LA PARTICIPACIÓN: </label>
                                <textarea name="comentarios" rows="2" cols="30" type="text"></textarea>
                            </p>
                           
                        </fieldset>
                        <fieldset class="step">
                            <legend>TIPO DE EVENTO</legend>
                            <p>
                                <label for="tipoeve">Tipo de Evento</label><br>
                                <select id="tipoeve" name="tipoeve">
                                    <option>CULTURAL</option>
                                    <option>DEPORTIVO</option>
                                 </select>
                            </p>
                            <p>
                                <label for="alcenceeve">Alcance del Evento</label><br>
                                <select id="alcenceeve" name="alcenceeve">
                                    <option value="nacional">NACIONAL</option>
                                    <option value="internacional">INTERNACIONAL</option>
                                 </select>
                            </p>
                            <p>
                                <label for="dirrecion">Especifique Lugar</label><br>                               
                                <input id="dirrecion" name="dirrecion" type="text" />
                            </p>
                             <p>APOYO OFRECIDO POR ORGANIZADORES O PATROCINADORES DEL EVENTO:<br><br>
                            <input type="checkbox" name="apoyoEspecial[]" value="Inscripcion" style="  width: 50px;">INSCRIPCIÓN <br>
                            <input type="checkbox" name="apoyoEspecial[]" value="Hospedaje" style="  width: 50px;">HOSPEDAJE  <br>
                    		<input type="checkbox" name="apoyoEspecial[]" value="Manutencion" style="  width: 50px;">MANUTENCIÓN <br>
               				<input type="checkbox" name="apoyoEspecial[]" value="Gastos de Viaje" style="  width: 50px;">GASTOS DE VIAJE<br>
                            <input type="checkbox" name="apoyoEspecial[]" value="ApoyoEconoParcial"  style="  width: 50px;">APOYO ECONÓMICO PARCIAL</p>

                        </fieldset>
                        <fieldset class="step">
                            <legend>TIPO DE APOYO</legend>
                        
                            <p>
                                APOYO SOLICITADO A UTP:  <br><br>
                                <input type="checkbox" name="apoyo[]" value="inscripcion" style="  width: 50px;">INSCRIPCIÓN <br> 
                                <input type="checkbox" name="apoyo[]" value="gastoViaje " style="  width: 50px;">GASTOS DE VIAJE<br>
                                <input type="checkbox" name="apoyo[]" value="apoyoEconomico " style="  width: 50px;">APOYO ECONÓMICO <br>
                            </p>
                            
                               <p>
                                MONTO DE INSCRIPCIÓN: <br>
                                <input id="nombreeve" name="nombreeve" type="text" style="   width: 112px;"/><br>	
                                 MONTO DE GASTOS DE VIAJE: <br>
                                 <input id="fecha" name="fechaini" type="text" style="   width: 112px;"/><br>
                                 MONTO DE APOYO ECONÓMICO: <br>
                                     <input id="fecha" name="fechaini" type="text"style="    width: 112px;" />
                               </p>

                               
						
                        </fieldset>
						<fieldset class="step">
                            <legend>Enviar Solicitud</legend>
							<p>
								Para confirmar su solicitud por favor precionar el botón
							</p>
                            <p class="submit">
                                <button id="registerButton" type="submit">Enviar</button>
                            </p>
                        </fieldset>
                    </form>
    </section>

    <footer class="bgDark">
            <div class="container">
                <img src="../assets/images/logo1.png" class="logo-brand" alt="logo">
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