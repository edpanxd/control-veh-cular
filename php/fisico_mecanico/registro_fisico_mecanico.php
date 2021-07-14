<?php
include '../conn.php';


$id⁪=$_POST["vehiculo"];
$mecanico=$_POST["mecanico"];
$fecha=$_POST["fecha"];





$insertar_verificacion_m = "INSERT INTO fisico_mecanico(vehiculo_id, mecanico, fecha)
VALUES ('$id⁪', '$mecanico', '$fecha')";

$resultadoP= mysqli_query($cone, $insertar_verificacion_m);
if (!$resultadoP) {
    
    echo  $insertar_verificacion_m, $resultadoP;
} else {
    header('Location:../../fisico_mecanico.php');
}
?>