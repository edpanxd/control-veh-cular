<?php
include '../conn.php';
//registro de profesores

$id⁪=$_POST["vehiculo"];
$vencimiento=$_POST["fecha"];
$estatus=$_POST["estatus"];





$insertar_placas = "INSERT INTO placas(vehiculo_id, vencimiento, estatus)
VALUES ('$id⁪', '$vencimiento', '$estatus')";

$resultadoP= mysqli_query($cone, $insertar_placas);
if (!$resultadoP) {
    
    echo  $insertar_placas, $resultadoP;
} else {
    header('Location:../../placas.php');
}
?>