<?php
include '../conn.php';
//registro de profesores
$id=$_POST["id"];
$vehiculo=$_POST["vehiculo"];
$poliza=$_POST["poliza"];
$seguro=$_POST["seguro"];
$vigencia=$_POST["vigencia"];



$insertar_placas = "UPDATE poliza SET seguro = '$seguro' WHERE id ='$id' ";

$resultadoV= mysqli_query($cone, $insertar_placas);
if (!$resultadoV) {
    echo  $insertar_placas, $resultadoV ;
} else {
    header('Location:../../poliza.php');
}
