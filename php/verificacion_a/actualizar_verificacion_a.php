<?php
include '../conn.php';
//registro de profesores
$id=$_POST["id"];
$vehiculo=$_POST["vehiculo"];
$vencimiento=$_POST["fecha"];
$estatus=$_POST["estatus"];



$insertar_placas = "UPDATE verificacion_a SET estatus = '$estatus' WHERE id ='$id' ";

$resultadoV= mysqli_query($cone, $insertar_placas);
if (!$resultadoV) {
    header("Location: ../../404.html");
    echo  $insertar_placas, $resultadoV ;
} else {
    header('Location:../../verificacion_a.php');
}
