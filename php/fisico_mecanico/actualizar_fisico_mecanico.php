<?php
include '../conn.php';
//registro de profesores
$id=$_POST["id"];
$vehiculo=$_POST["vehiculo"];
$federal=$_POST["federal"];
$vencimiento=$_POST["fecha"];
$estatus=$_POST["estatus"];



$insertar_placas = "UPDATE verificacion_federal SET estatus = '$estatus' WHERE id ='$id' ";

$resultadoV= mysqli_query($cone, $insertar_placas);
if (!$resultadoV) {
    echo  $insertar_placas, $resultadoV ;
    header('Location:../../404.html');
} else {
    header('Location:../../verificacion_federal.php');
}
