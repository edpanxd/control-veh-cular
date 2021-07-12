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




$insertar_vehiculo = "INSERT INTO vehiculos(marca, submarca, tipo, modelo, color, placas, serie, numero_motor)
VALUES ('$marca', '$submarca', '$tipo', '$modelo', '$color', '$placas', '$serie', '$numero_motor')";

$resultadoV= mysqli_query($cone, $insertar_vehiculo);
if (!$resultadoV) {
    echo  $insertar_vehiculo, $resultadoV ;
} else {
    header('Location:../../vehiculos.php');
}
?>