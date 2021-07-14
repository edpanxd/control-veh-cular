<?php
include '../conn.php';
//registro de profesores

$id⁪=$_POST["vehiculo"];
$fecha=$_POST["fecha"];
$estatus=$_POST["estatus"];





$insertar_verificacion_b = "INSERT INTO verificacion_b(vehiculo_id, fecha, estatus)
VALUES ('$id⁪', '$fecha', '$estatus')";

$resultadoP= mysqli_query($cone, $insertar_verificacion_b);
if (!$resultadoP) {
    
    echo  $insertar_verificacion_b, $resultadoP;
} else {
    header('Location:../../verificacion_b.php');
}
?>