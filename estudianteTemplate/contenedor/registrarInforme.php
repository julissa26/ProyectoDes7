<?php
include ('conexion.php');
include ('contador.php');


$nombreeve = $_POST['nombreeve'];
$fechaini = $_POST['fechaini'];
$fechafin = $_POST['fechafin'];
$participante = $_POST['participante'];
$resultados = $_POST['resultados'];
$conclusiones = $_POST['conclusiones'];
$recomendaciones = $_POST['recomendaciones'];
echo $_FILES['imagen']['tmp_name'];

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
$imagen3 = $_FILES['imagen3'];

//$consulta = mysqli_query($conexion,"SELECT ")

$insertar = mysqli_query($conexion, "INSERT INTO informe (nombreEvento, fechaInicial, fechaFinal, participante, resultados, conclusiones, recomendaciones, imagen, imagen2, imagen3)
VALUES ('".$nombreeve."','".$fechaini."','".$fechafin."', '".$participante."','".$resultados."','".$conclusiones."', '".$recomendaciones."', '".$nomFoto."', '".$nomFoto2."', '".$nomFoto3."') ");

if($insertar){
    echo "Datos ingresados Correctamente";
}
?>