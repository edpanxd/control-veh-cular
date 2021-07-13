<?php
include '../conn.php';
//registro de profesores
$id=$_POST["id"];
$marca=$_POST["marca"];
$submarca=$_POST["submarca"];
$tipo=$_POST["tipo"];
$modelo=$_POST["modelo"];
$color=$_POST["color"];
$placas=$_POST["placas"];
$serie=$_POST["serie"];
$numero_motor=$_POST["numero_motor"];




$insertar_vehiculo = "UPDATE vehiculos SET marca ='$marca', submarca ='$submarca', tipo ='$tipo', modelo ='$modelo', color= '$color', placas = '$placas', serie = '$serie', numero_motor = '$numero_motor' WHERE id_vehiculo ='$id' ";

$resultadoV= mysqli_query($cone, $insertar_vehiculo);
if (!$resultadoV) {
    echo  $insertar_vehiculo, $resultadoV ;
} else {
    header('Location:../../vehiculos.php');
}
