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

    <section id="hero">
        <duv class="container">
            <div class="content-center">
                <h2 class="margintop-lg">Universidad Tecnologica de Panama</h2>
                <p>Sitio de Solicitud de Apoyo Economico Estudiantil Cultural Accademico para representacion Nacional e Internacional.</p>
                
            </div>
        </duv>
    </section>

    

    <section id="team" class="bgLightGrey">
        <div class="container">
            <div class="content-center">
                <h2>Keep calm, you're in a <b>good company</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum. Suscipit expedita obcaecati
                    nesciunt error ut quidem autem.</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="member-container">
                        <div class="magic-layout isotope" style="position: relative; overflow: hidden; height: 1131px;">
                            <div class="panel panel-default magic-element isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                                <div class="panel-body-heading bg-primary">
                                    <h3 class="pb-title">Line Chart</h3>
                                </div>
                                <div id="chart-line" class="chart" style="position: relative;"><svg height="300" version="1.1" width="436" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.40625px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="43.5" y="260.984375" text-anchor="end" font="10px "Arial"" stroke="none" fill="#34495e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.1640625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M56,260.984375H411" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="43.5" y="201.98828125" text-anchor="end" font="10px "Arial"" stroke="none" fill="#34495e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.16015625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">1,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M56,201.98828125H411" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="43.5" y="142.9921875" text-anchor="end" font="10px "Arial"" stroke="none" fill="#34495e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.15625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M56,142.9921875H411" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="43.5" y="83.99609375" text-anchor="end" font="10px "Arial"" stroke="none" fill="#34495e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.16015625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">3,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M56,83.99609375H411" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="43.5" y="25" text-anchor="end" font="10px "Arial"" stroke="none" fill="#34495e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.1640625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">4,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M56,25H411" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="369.9276572947876" y="273.484375" text-anchor="middle" font="10px "Arial"" stroke="none" fill="#34495e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.0078)"><tspan dy="4.1640625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="308.22405206452515" y="273.484375" text-anchor="middle" font="10px "Arial"" stroke="none" fill="#34495e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.0078)"><tspan dy="4.1640625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text x="246.5204468342626" y="273.484375" text-anchor="middle" font="10px "Arial"" stroke="none" fill="#34495e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.0078)"><tspan dy="4.1640625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><text x="184.6477906307665" y="273.484375" text-anchor="middle" font="10px "Arial"" stroke="none" fill="#34495e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.0078)"><tspan dy="4.1640625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><text x="122.94418540050398" y="273.484375" text-anchor="middle" font="10px "Arial"" stroke="none" fill="#34495e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.0078)"><tspan dy="4.1640625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2007</tspan></text><text x="61.24058017024147" y="273.484375" text-anchor="middle" font="10px "Arial"" stroke="none" fill="#34495e" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.0078)"><tspan dy="4.1640625" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan></text><path fill="none" stroke="#95a5a6" d="M179.40721046052502,224.406796875C194.87537451139906,223.5071064453125,225.81170261314708,221.22157275457423,241.2798666640211,220.80803515625C256.70576797158674,220.39562744207424,287.557570586718,220.955525390625,302.98347189428364,221.103015625C318.40937320184923,221.250505859375,349.26117581698054,221.30172224845467,364.68707712454614,221.98795703125C368.49072402230206,222.15716560782968,376.09801781781385,224.2913444781171,379.9016647155698,224.5247890625C383.78807615230465,224.7633132281171,391.56089902577435,224.18549136953214,395.4473104625092,223.87583203125C399.3354828468819,223.56603238515714,407.11182761562736,222.50417285156252,411.00000000000006,222.04695312500002" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#3498db" d="M56,66.94622265625C71.42590130756562,67.5951796875,102.27770392269689,69.07745654296875,117.70360523026251,69.54205078125C133.12950653782815,70.00664501953125,163.9813091529594,70.00017845043178,179.40721046052502,70.6629765625C194.87537451139906,71.32759055980678,225.81170261314708,74.44554622039587,241.2798666640211,74.85169921875001C256.70576797158674,75.25674250945838,287.557570586718,74.57884228515626,302.98347189428364,73.90776171875001C318.40937320184923,73.23668115234376,349.26117581698054,70.6425548377404,364.68707712454614,69.48305468750002C368.49072402230206,69.1971505408654,376.09801781781385,68.8921345737563,379.9016647155698,68.12614453124999C383.78807615230465,67.34348711281879,391.56089902577435,64.30591695524845,395.4473104625092,63.288464843750006C399.3354828468819,62.27055172087345,407.11182761562736,60.810628906249995,411.00000000000006,59.98468359374999" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="179.40721046052502" cy="224.406796875" r="4" fill="#95a5a6" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="241.2798666640211" cy="220.80803515625" r="4" fill="#95a5a6" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="302.98347189428364" cy="221.103015625" r="4" fill="#95a5a6" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="364.68707712454614" cy="221.98795703125" r="4" fill="#95a5a6" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="379.9016647155698" cy="224.5247890625" r="4" fill="#95a5a6" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="395.4473104625092" cy="223.87583203125" r="4" fill="#95a5a6" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="411.00000000000006" cy="222.04695312500002" r="4" fill="#95a5a6" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="56" cy="66.94622265625" r="4" fill="#3498db" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="117.70360523026251" cy="69.54205078125" r="4" fill="#3498db" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="179.40721046052502" cy="70.6629765625" r="4" fill="#3498db" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="241.2798666640211" cy="74.85169921875001" r="4" fill="#3498db" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="302.98347189428364" cy="73.90776171875001" r="4" fill="#3498db" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="364.68707712454614" cy="69.48305468750002" r="4" fill="#3498db" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="379.9016647155698" cy="68.12614453124999" r="4" fill="#3498db" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="395.4473104625092" cy="63.288464843750006" r="4" fill="#3498db" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="411.00000000000006" cy="59.98468359374999" r="4" fill="#3498db" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 189.2798666640211px; top: 84px; display: none;"><div class="morris-hover-row-label">2008 Q4</div><div class="morris-hover-point" style="color: #3498db">
                        </div><div class="morris-hover-point" style="color: #95a5a6">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="member-container">
                        <div class="member-details">
                           <!-- /panel -->

                           <div class="panel panel-default magic-element isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(471px, 377px, 0px);">
                                <div class="panel-body-heading bg-danger">
                                    <h3 class="pb-title">Donut Chart</h3>
                                </div>
                                <div id="chart-donut" class="chart"><svg height="300" version="1.1" width="436" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.40625px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#3498db" d="M218,243.33333333333331A93.33333333333333,93.33333333333333,0,0,0,311.3333330454699,150.00733038285082" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#3498db" stroke="#ffffff" d="M218,246.33333333333331A96.33333333333333,96.33333333333333,0,0,0,314.3333330362171,150.0075660022996L352.99999958362605,150.01060287519496A135,135,0,0,1,218,285Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#e74c3c" d="M311.3333330454699,150.00733038285082A93.33333333333333,93.33333333333333,0,0,0,144.3054960170495,92.7266973728771" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#e74c3c" stroke="#ffffff" d="M314.3333330362171,150.0075660022996A96.33333333333333,96.33333333333333,0,0,0,141.9367441033118,90.88576978843386L107.45824402557427,64.09004605931564A140,140,0,0,1,357.99999956820477,150.01099557427625Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#2ecc71" d="M144.3054960170495,92.7266973728771A93.33333333333333,93.33333333333333,0,0,0,160.72090959672028,223.69000552099322" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#2ecc71" stroke="#ffffff" d="M141.9367441033118,90.88576978843386A96.33333333333333,96.33333333333333,0,0,0,158.87979597661484,226.05861284131086L135.1498870952561,256.5873294142938A135,135,0,0,1,111.40616388180376,67.15825870005436Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#f39c12" d="M160.72090959672028,223.69000552099322A93.33333333333333,93.33333333333333,0,0,0,217.97067846904892,243.33332872751785" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#f39c12" stroke="#ffffff" d="M158.87979597661484,226.05861284131086A96.33333333333333,96.33333333333333,0,0,0,217.96973599126835,246.3333285794738L217.95758849987433,284.9999933380169A135,135,0,0,1,135.1498870952561,256.5873294142938Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="218" y="140" text-anchor="middle" font="10px "Arial"" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: 800; font-size: 15px; line-height: normal; font-family: Arial;" font-size="15px" font-weight="800" transform="matrix(2.7809,0,0,2.7809,-388.2322,-264.2661)" stroke-width="0.3595982142857143"><tspan dy="5.203125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Frosted</tspan></text><text x="218" y="160" text-anchor="middle" font="10px "Arial"" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 14px; line-height: normal; font-family: Arial;" font-size="14px" transform="matrix(1.9871,0,0,1.9871,-215.1958,-150.2145)" stroke-width="0.5032366071428571"><tspan dy="4.859375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">40%</tspan></text></svg></div>
                            </div><!-- /panel -->
                        </div>
                        <img src="assets/images/member-03.jpg" class="img-fluid" alt="member 3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="divider">
        <div class="container">
            <div class="content-center">
                <h2>Pricing built for <b>every business</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum. Suscipit expedita obcaecati
                    nesciunt error ut quidem autem.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="pricing-container">
                        <div class="plans plan-light">
                            <h4>Starter solution</h4>
                            <h2>$89 <span>/ per month</span></h2>
                            <h4>Per 1 Million Data Points</h4>
                            <ul class="margintop-xs">
                                <li>Integration with Google Analytics</li>
                                <li>Online payments</li>
                                <li>Solution Architect</li>
                                <li>Dedicated Support</li>
                            </ul>
                            <a href="#" class="btn btn-primary full-width margintop-sm">Start now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pricing-container">
                        <div class="plans plan-dark">
                            <h4>Enterprise solution</h4>
                            <h2>$139 <span>/ per month</span></h2>
                            <h4>Per 1 Million Data Points</h4>
                            <ul class="margintop-xs">
                                <li>Integration with Google Analytics</li>
                                <li>Online payments</li>
                                <li>Solution Architect</li>
                                <li>Dedicated Support</li>
                            </ul>
                            <a href="#" class="btn btn-alternate full-width margintop-sm">Start now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--     SECCION DE TESTIMONIOS O COMENTARIOS -->
    <section id="testimonial" class="divider">
        <div class="container">
            <div class="content-center">
                <h2>A few words from <b>our clients…</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.</p>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-container">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.
                            </p>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <img src="assets/images/member-01.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-9 col-9">
                                        <h6>Marissa Mayer</h6>
                                        <span>Yahoo CEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.</p>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <img src="assets/images/member-02.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-9 col-9">
                                        <h6>Marry Barra</h6>
                                        <span>General Motors CEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.</p>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <img src="assets/images/member-03.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-9 col-9">
                                        <h6>Elon Musk</h6>
                                        <span>Tesla CEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <div class="control-button">
                        <i class="icon ion-md-arrow-back"></i>
                    </div>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <div class="control-button">
                        <i class="icon ion-md-arrow-forward"></i>
                    </div>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-- END SECCION DE TESTIMONIOS O COMENTARIOS -->
  

   <!-- AREA DE PREGUNTAS FRECUENTES FAQS -->
   <section class="faqs-area padding-100-50" id="faqs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn">
                    <h2>FAQS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb50 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="box-title">1.Two Very Different Australias?</h3>
                    <p>A Google Docs scam that appears to be widespread began landing in users’ inboxes on Wednesday in what seemed to be a sophisticated phishing.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb50 wow fadeInUp" data-wow-delay="0.2s">
                    <h3 class="box-title">2.What Does Darwin Mean to You?</h3>
                    <p>A Google Docs scam that appears to be widespread began landing in users’ inboxes on Wednesday in what seemed to be a sophisticated phishing.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb50 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="box-title">3.Where Totem Poles Are a Living Art ?</h3>
                    <p>A Google Docs scam that appears to be widespread began landing in users’ inboxes on Wednesday in what seemed to be a sophisticated phishing.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb50 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="box-title">1.Two Very Different Australias?</h3>
                    <p>A Google Docs scam that appears to be widespread began landing in users’ inboxes on Wednesday in what seemed to be a sophisticated phishing.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb50 wow fadeInUp" data-wow-delay="0.2s">
                    <h3 class="box-title">2.What Does Darwin Mean to You?</h3>
                    <p>A Google Docs scam that appears to be widespread began landing in users’ inboxes on Wednesday in what seemed to be a sophisticated phishing.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb50 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="box-title">3.Where Totem Poles Are a Living Art ?</h3>
                    <p>A Google Docs scam that appears to be widespread began landing in users’ inboxes on Wednesday in what seemed to be a sophisticated phishing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

   <!-- END AREA FAQS -->


    <footer class="bgDark">
        <div class="container">
            <img src="assets/images/logo1.png" class="logo-brand" alt="logo">
            <ul class="list-inline">
                <li class="list-inline-item footer-menu"><a href="#">Home</a></li>
                <li class="list-inline-item footer-menu"><a href="#">Faqs</a></li>
                <li class="list-inline-item footer-menu"><a href="#">Acerca de Nosotros</a></li>
                <li class="list-inline-item footer-menu"><a href="#">Contacto</a></li>
            </ul>
            
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