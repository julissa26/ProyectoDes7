<?php
include ('../validar.php');
include ('conexion.php');
$user = $_SESSION['user'];
include ('solicitudesPendientes.php');

$relevancia = $_POST['relevancia'];
$procede = $_POST['procede'];
$observaciones = $_POST['observaciones'];
$fecha = $_POST['fecha'];

$consulta5 = mysqli_query($conexion,"SELECT idSolicitud FROM solicitud WHERE idSolicitud = '".$idSol."'");


$consulta6 = $conexion->prepare("UPDATE solicitud SET relevancia = 'alto', observaciones = '".$observaciones."', rev_comite='1', estado = 'comite' WHERE idSolicitud = '".$idSol."'");
$consulta6->execute();
header('Location: index.php');
?>
