<?php
include ('conexion.php');
//include ('contador.php');
include ('../../validar.php');
$user = $_SESSION['user'];

$consultaaa = mysqli_query($conexion, "SELECT * FROM solicitud WHERE estado = 'finalizado' AND correo = '".$user."' AND informe = '0'");
    while($bruh=mysqli_fetch_array($consultaaa)){
        $idSol = $bruh['idSolicitud'];
        $nombre = $bruh['nombre'];
        $cedula = $bruh['cedula'];
    }

$nombreeve = $_POST['nombreEve'];
$fechaini = $_POST['fechaIni'];
$fechafin = $_POST['fechaFin'];
$estudiante = $_POST['estudiante'];
$participante = $_POST['participante'];
$resultados = $_POST['resultados'];
$conclusiones = $_POST['conclusiones'];
$recomendaciones = $_POST['recomendaciones'];
$imagen = $_FILES['imagen']['name'];
$ruta = $_FILES['imagen']['tmp_name'];
$destino = "fotos/".$imagen;
copy($ruta,$destino);
/*
$dirSubida = '../fotos/';
$nomFoto = $num. '.jpg';
$urlFoto= $dirSubida . $nomFoto;

move_uploaded_file($_FILES['imagen']['tmp_name'], $urlFoto);


//$imagen = addcslashes(file_get_contents($_FILES['imagen']['tmp_name'])); 
$nomFoto2 = $num. '.jpg';
$urlFoto2= $dirSubida . $nomFoto2;
echo $_FILES['imagen2']['tmp_name'];
move_uploaded_file($_FILES['imagen2']['tmp_name'], $urlFoto);

$nomFoto3 = $num. '.jpg';
$urlFoto3= $dirSubida . $nomFoto3;
echo $_FILES['imagen3']['tmp_name'];
move_uploaded_file($_FILES['imagen3']['tmp_name'], $urlFoto);

$imagen2 = $_FILES['imagen2'];  
$imagen3 = $_FILES['imagen3'];*/

//$consulta = mysqli_query($conexion,"SELECT ")

$insertar = mysqli_query($conexion, "INSERT INTO informee (idSolicitud,correo, nombreEvento, fechaInicial, fechaFinal,estudiante,cedula, participante, resultados, conclusiones, recomendaciones, imagen)
VALUES ( '".$idSol."','".$user."','".$nombreeve."','".$fechaini."','".$fechafin."','".$nombre."','".$cedula."', '".$participante."','".$resultados."','".$conclusiones."', '".$recomendaciones."', '".$destino."') ");

$query = mysqli_query($conexion,"UPDATE solicitud SET informe = '1' WHERE idSolicitud = '".$idSol."'");
if($insertar){
    echo "Datos ingresados Correctamente";
    header('Location: home.php');
}
?>