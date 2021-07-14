<?php
include '../conn.php';


$id⁪=$_POST["vehiculo"];
$federal=$_POST["federal"];
$fecha=$_POST["fecha"];
$estatus=$_POST["estatus"];





$insertar_verificacion_f = "INSERT INTO verificacion_federal(vehiculo_id, federal, fecha, estatus)
VALUES ('$id⁪', '$federal', '$fecha', '$estatus')";

$resultadoP= mysqli_query($cone, $insertar_verificacion_f);
if (!$resultadoP) {
    
    echo  $insertar_verificacion_f, $resultadoP;
} else {
    header('Location:../../verificacion_federal.php');
}
?>