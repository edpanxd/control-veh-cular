<?php
include '../conn.php';
//registro de profesores

$id⁪=$_POST["vehiculo"];
$poliza=$_POST["poliza"];
$seguro=$_POST["seguro"];
$vigencia=$_POST["fecha"];





$insertar_poliza = "INSERT INTO poliza(vehiculo_id, poliza, seguro, vigencia)
VALUES ('$id⁪', '$poliza', '$seguro', '$vigencia')";

$resultadoP= mysqli_query($cone, $insertar_poliza);
if (!$resultadoP) {
    
    echo  $insertar_poliza, $resultadoP,$id;
} else {
    header('Location:../../poliza.php');
}
?>