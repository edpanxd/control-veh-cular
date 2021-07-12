<?php
include 'conn.php';

$vehiculo = "SELECT * FROM vehiculos";
$ejecutarrol = mysqli_query($cone, $vehiculo);


$tabla = "SELECT * FROM usuarios WHERE rol_id=1";
$resultado = mysqli_query($cone, $tabla);

$tabla = "SELECT * FROM usuarios WHERE rol_id=2";
$resultadou = mysqli_query($cone, $tabla);

$profesor = "SELECT * FROM profesores";
$resultadop = mysqli_query($cone, $profesor);


$licenciatura = "SELECT * FROM licenciatura";
$resultadol = mysqli_query($cone, $licenciatura);

$periodo = "SELECT * FROM periodo";
$resultadoperiodo = mysqli_query($cone, $periodo);

?>