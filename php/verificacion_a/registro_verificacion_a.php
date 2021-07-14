<?php
include '../conn.php';
//registro de profesores

$id⁪=$_POST["vehiculo"];
$fecha=$_POST["fecha"];
$estatus=$_POST["estatus"];





$insertar_placas = "INSERT INTO verificacion_a(vehiculo_id, fecha, estatus)
VALUES ('$id⁪', '$fecha', '$estatus')";

$resultadoP= mysqli_query($cone, $insertar_placas);
if (!$resultadoP) {
    
    echo  $insertar_placas, $resultadoP;
} else {
    header('Location:../../verificacion_a.php');
}
?>