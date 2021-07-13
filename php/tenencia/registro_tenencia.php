<?php
include '../conn.php';
//registro de profesores

$id⁪=$_POST["vehiculo"];
$tenencia=$_POST["tenencia"];
$estatus=$_POST["estatus"];
$pago=$_POST["pago"];





$insertar_poliza = "INSERT INTO tenencia(vehiculo_id, tenencia, pago, estatus)
VALUES ('$id⁪', '$tenencia', '$pago', '$estatus')";

$resultadoP= mysqli_query($cone, $insertar_poliza);
if (!$resultadoP) {
    
    echo  $insertar_poliza, $resultadoP;
} else {
    header('Location:../../tenencia.php');
}
?>