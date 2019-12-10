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

//IMAGEN
$imagen = $_FILES['imagen']['name'];
$ruta = $_FILES['imagen']['tmp_name'];
$destino = "fotos/".$imagen;
copy($ruta,$destino);

//IMAGEN2
$imagen2 = $_FILES['imagen']['name'];
$ruta2 = $_FILES['imagen2']['tmp_name'];
$destino2 = "fotos/".$imagen2;
copy2($ruta2,$destino2);

//IMAGEN3
$imagen3 = $_FILES['imagen']['name'];
$ruta2 = $_FILES['imagen3']['tmp_name'];
$destino3 = "fotos/".$imagen3;
copy3($ruta3,$destino3);

$insertar = mysqli_query($conexion, "INSERT INTO informee (idSolicitud,correo, nombreEvento, fechaInicial, fechaFinal,estudiante,cedula, participante, resultados, conclusiones, recomendaciones, imagen, imagen2, imagen3)
VALUES ( '".$idSol."','".$user."','".$nombreeve."','".$fechaini."','".$fechafin."','".$nombre."','".$cedula."', '".$participante."','".$resultados."','".$conclusiones."', '".$recomendaciones."', '".$destino."','".$destino2."','".$destino3."') ");

$query = mysqli_query($conexion,"UPDATE solicitud SET informe = '1' WHERE idSolicitud = '".$idSol."'");
if($insertar){
    echo "Datos ingresados Correctamente";
    header('Location: home.php');
}
?>