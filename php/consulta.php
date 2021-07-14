<?php
include 'conn.php';

$vehiculo = "SELECT * FROM vehiculos";
$ejecutarrol = mysqli_query($cone, $vehiculo);

$proveedor = "SELECT * FROM proveedores";
$proveedorresultado = mysqli_query($cone, $proveedor);

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

$verificacion_a= "SELECT *
FROM verificacion_a INNER JOIN vehiculos on 
verificacion_a.vehiculo_id=vehiculos.id_vehiculo";
$verificacion_aresultado= mysqli_query($cone, $verificacion_a);

$verificacion_b= "SELECT *
FROM verificacion_b INNER JOIN vehiculos on 
verificacion_b.vehiculo_id=vehiculos.id_vehiculo";
$verificacion_bresultado= mysqli_query($cone, $verificacion_b);

$verificacion_federal= "SELECT *
FROM verificacion_federal INNER JOIN vehiculos on 
verificacion_federal.vehiculo_id=vehiculos.id_vehiculo";
$verificacion_Fresultado= mysqli_query($cone, $verificacion_federal);

$verificacion_mecanico= "SELECT *
FROM fisico_mecanico INNER JOIN vehiculos on 
fisico_mecanico.vehiculo_id=vehiculos.id_vehiculo";
$verificacion_Mresultado= mysqli_query($cone, $verificacion_mecanico);



$tabla = "SELECT * FROM usuarios WHERE rol_id=2";
$resultadou = mysqli_query($cone, $tabla);

$profesor = "SELECT * FROM profesores";
$resultadop = mysqli_query($cone, $profesor);


$licenciatura = "SELECT * FROM licenciatura";
$resultadol = mysqli_query($cone, $licenciatura);

$periodo = "SELECT * FROM periodo";
$resultadoperiodo = mysqli_query($cone, $periodo);

?>