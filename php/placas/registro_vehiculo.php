<?php
include '../conn.php';
//registro de profesores

$marca=$_POST["marca"];
$submarca=$_POST["submarca"];
$tipo=$_POST["tipo"];
$modelo=$_POST["modelo"];
$color=$_POST["color"];
$placas=$_POST["placas"];
$serie=$_POST["serie"];
$numero_motor=$_POST["numero_motor"];




$insertar_placas = "INSERT INTO placas(id⁪_vehiculo, vencimiento, estatus)
VALUES ('$id⁪_vehiculo', '$vencimiento', '$estatus')";

$resultadoP= mysqli_query($cone, $insertar_placas);
if (!$resultadoP) {
    echo  $insertar_vehiculo, $resultadoV ;
} else {
    header('Location:../../vehiculos.php');
}
?>