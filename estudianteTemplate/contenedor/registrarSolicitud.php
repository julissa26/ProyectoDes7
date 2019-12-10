<?php
include ('conexion.php');
include ('../../validar.php');
$user = $_SESSION['user'];

$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$unidadaca = $_POST['unidadaca'];
$nombreeve = $_POST['nombreeve'];
$fechaini = $_POST['fechaini'];
$fechafin = $_POST['fechafin'];
$comentarios =$_POST['comentarios'];
$tipoeve = $_POST['tipoeve'];
$lugarEvento = $_POST['lugarEvento'];
/* $participantes = $_POST['participantes']; */
$montoInscripcion = $_POST['montoInscripcion']; 
$montoGastoViaje = $_POST['montoGastoViaje'];
$montoApoyoEco = $_POST['montoApoyoEcono'];

$categoria = $_POST['categoria'];
$alcance = $_POST['alcance'];

if($_POST['apoyoEspecial'] != ""){
    foreach ($_POST['apoyoEspecial'] as $apoyoEspecial){
        $sql=mysqli_query($conexion, "INSERT INTO ch (apoyoEspecial, nombreEvento) values('".$apoyoEspecial."', '".$nombreeve."' )");
    }
    }



$insertar= mysqli_query($conexion, "INSERT INTO solicitud (nombre, cedula,correo, unidadAcademica,participantes, nombreEvento, estado,fechaInicial, fechaFinal, comentarios, tipoEve, alcanceEve, lugarEvento,montoInscripcion,montoGastoViaje,montoApoyoEco, solicitud) VALUES ('".$nombre."', '".$cedula."','".$user."' ,'".$unidadaca."','".$participantes."','".$nombreeve."','pendiente','".$fechaini."','".$fechafin."','".$comentarios."','".$categoria."','".$alcance."','".$lugarEvento."','".$montoInscripcion."','".$montoGastoViaje."','".$montoGastoViaje."', '1')");
$consulta = mysqli_query($conexion, "SELECT idSolicitud FROM solicitud WHERE cedula = '".$cedula."' AND estado = 'pendiente'");
while($bruh = mysqli_fetch_array($consulta)){
    $id = $bruh['idSolicitud'];
}

if(mysqli_num_rows($consulta)==1){
   /* for($i=0; $i < count($categoria); $i++){
        $bruh = $categoria[$i];
        
    }*/
  //  $sqli=mysqli_query($conexion,"UPDATE solicitud SET tipoEve = '".$categoria."' WHERE idSolicitud = '".$id."'");
  foreach ($_POST['categoria'] as $categoria){
    $sql=mysqli_query($conexion, "UPDATE solicitud SET tipoEve = '".$categoria."' WHERE idSolicitud = '".$id."')");
}

    }






header('Location: home.php');
?>