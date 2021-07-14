<?php
include '../conn.php';
//registro de profesores
$id=$_POST["id"];
$vehiculo=$_POST["vehiculo"];
$tenencia=$_POST["tenencia"];
$pago=$_POST["pago"];
$estatus=$_POST["estatus"];



$insertar_placas = "UPDATE tenencia SET estatus = '$estatus' WHERE id ='$id' ";

$resultadoV= mysqli_query($cone, $insertar_placas);
if (!$resultadoV) {
    echo  $insertar_placas, $resultadoV ;
} else {
    header('Location:../../tenencia.php');
}
