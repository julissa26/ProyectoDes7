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
$participantes = $_POST['participantes'];
$montoInscripcion = $_POST['montoInscripcion']; 
$montoGastoViaje = $_POST['montoGastoViaje'];
$montoApoyoEco = $_POST['montoApoyoEco'];
//$alcanceeve = $_POST['alcanceeve'];
//$apoyoEpecial = $_POST['apoyoEspecial'];
//$apoyo = $_POST['apoyo'];

/*if($_POST['apoyoEspecial'] != ""){

    foreach($_POST['apoyoEspecial'] as $apoyoEpecial ,$_POST['apoyo'] as $apoyo){
        $sql=mysqli_query($conexion,"INSERT INTO ch (apoyoEspecial,apoyo, nombreEvento) VALUES ('".$apoyoEpecial."', '".$apoyo."','".$nombreeve."')");
    }
    //if(is_array($_POST['apoyoEspecial'],is_array($_POST['apoyo']))){
       while(list($key,$value,$value1) = each($_POST['apoyoEspecial'])){
            $sql=mysqli_query($conexion,"INSERT INTO ch (apoyoEspecial,apoyo, nombreEvento) VALUES ('".$value."','".$value1."', '".$nombreeve."')");
           
            //$consultaa = mysqli_query($conexion,"SELECT ")
        }*/

    

/*if($_POST['apoyo'] != ""){
    foreach($_POST['apoyo'] as $apoyo){
        echo $apoyo;
        $sqli=mysqli_query($conexion,"INSERT INTO ch1 (apoyo, nombreEvento) VALUES ('".$apoyo."', '".$nombreeve."')");
    }
    //if(is_array($_POST['apoyo'])){
      //  while(list($key,$value) = each($_POST['apoyo'])){
            //AGREGAR UPDATE
           // $sqli = mysqli_query($conexion,"UPDATE ch SET apoyo = '".$apoyo."', nombreEvento = '".$nombreeve."'");
        //   $sqli=mysqli_query($conexion,"INSERT INTO  ch1 (apoyo, nombreEvento) VALUES ('".$value."', '".$nombreeve."')");
            

        }

*/


$insertar= mysqli_query($conexion, "INSERT INTO solicitud (nombre, cedula,correo, unidadAcademica,participantes, nombreEvento, estado,fechaInicial, fechaFinal, comentarios,lugarEvento,montoInscripcion,montoGastoViaje,montoApoyoEco, solicitud) VALUES ('".$nombre."', '".$cedula."','".$user."' ,'".$unidadaca."','".$participantes."','".$nombreeve."','pendiente','".$fechaini."','".$fechafin."','".$comentarios."','".$lugarEvento."','".$montoInscripcion."','".$montoGastoViaje."','".$montoGastoViaje."'1)");


$consulta = mysqli_query($conexion, "SELECT idSolicitud FROM solicitud WHERE cedula = '".$cedula."'");

/* if(mysqli_num_rows($consulta)==1){

if($_POST['apoyoEspecial'] != ""){
    if(is_array($_POST['apoyoEspecial'])){
        while(list($key,$value) = each($_POST['apoyoEspecial'])){
            $sql=$conexion->prepare ("INSERT INTO solicitud (apoyoEspecial) VALUES ('".$value."')");
            $sql->execute();
        }
}
}

if($_POST['apoyo'] != ""){
    if(is_array($_POST['apoyo'])){
        while(list($key,$value) = each($_POST['apoyo'])){
            $sql=$conexion->prepare("INSERT INTO solicitud (apoyo) VALUES ('".$value."')");
            $sql->execute();

        }
}
}
}   */

header('Location: home.php');
?>