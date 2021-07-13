<?php
include 'conn.php';

$vehiculo = "SELECT * FROM vehiculos";
$ejecutarrol = mysqli_query($cone, $vehiculo);


$placas2 = "SELECT *
FROM placas INNER JOIN vehiculos on 
placas.vehiculo_id=vehiculos.id_vehiculo";
$placasresultado = mysqli_query($cone, $placas2);

$poliza= "SELECT *
FROM poliza INNER JOIN vehiculos on 
poliza.vehiculo_id=vehiculos.id_vehiculo";
$polizaresultado = mysqli_query($cone, $poliza);

$tenencia="SELECT *
FROM tenencia INNER JOIN vehiculos on 
tenencia.vehiculo_id=vehiculos.id_vehiculo";
$tenenciaresultado = mysqli_query($cone, $tenencia);




$tabla = "SELECT * FROM usuarios WHERE rol_id=2";
$resultadou = mysqli_query($cone, $tabla);

$profesor = "SELECT * FROM profesores";
$resultadop = mysqli_query($cone, $profesor);


$licenciatura = "SELECT * FROM licenciatura";
$resultadol = mysqli_query($cone, $licenciatura);

$periodo = "SELECT * FROM periodo";
$resultadoperiodo = mysqli_query($cone, $periodo);

?>