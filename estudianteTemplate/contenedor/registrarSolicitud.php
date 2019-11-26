<?php
include ('conexion.php');
include ('../validar.php');

$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$unidadaca = $_POST['unidadaca'];
$nombreeve = $_POST['nombreeve'];
$fechaini = $_POST['fechaini'];
$fechafin = $_POST['fechafin'];
$comentarios =$_POST['comentarios'];
$tipoeve = $_POST['tipoeve'];
//$alcanceeve = $_POST['alcanceeve'];
//$apoyoEpecial = $_POST['apoyoEspecial'];
//$apoyo = $_POST['apoyo'];

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


$insertar= mysqli_query($conexion, "INSERT INTO solicitud (nombre, cedula, unidadAcademica, nombreEvento, fechaInicial, fechaFinal, comentarios, solicitud) VALUES ('".$nombre."', '".$cedula."', '".$unidadaca."','".$nombreeve."','".$fechaini."','".$fechafin."','".$comentarios."',1)");


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

header('Location: ../home.php');
?>