<?php
include '../conn.php';
//registro de profesores

$nombre=$_POST["nombre"];
$grupo=$_POST["grupo"];
$familia=$_POST["familia"];
$ubicacion=$_POST["ubicacion"];
$contacto=$_POST["contacto"];
$correo=$_POST["correo"];





$insertar_proveedor = "INSERT INTO proveedores(nombre, grupo, familia, ubicacion, contacto, correo)
VALUES ('$nombre', '$grupo', '$familia', '$ubicacion', '$contacto', '$correo')";

$resultadoP= mysqli_query($cone, $insertar_proveedor);
if (!$resultadoP) {
    header("Location: ../../404.html");
    echo  $insertar_proveedor, $resultadoP;
} else {
    header('Location:../../proveedor.php');
}
?>