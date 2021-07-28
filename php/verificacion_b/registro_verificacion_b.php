<?php
include '../conn.php';
//registro de profesores

$id⁪ = $_POST["vehiculo"];
$fecha = $_POST["fecha"];
$estatus = $_POST["estatus"];
$nombre=$_POST["nombre"];
if ($_FILES["archivo"]) {
    $nombre_base = basename($_FILES["archivo"]["name"]);
    $nombre_final = date("m-d-y") . "-" . date("H-m-s") . "-" . $nombre_base;
    $ruta = "../../archivos/verificacion_b/" . $nombre_final;
    
    if ($ruta) {

        $insertar_verificacion_b = "INSERT INTO verificacion_b(vehiculo_id, fecha, estatus,nombre, archivo)
        VALUES ('$id⁪', '$fecha', '$estatus','$nombre', '$ruta')";

        $resultadoP = mysqli_query($cone, $insertar_verificacion_b);
        if (!$resultadoP) {

            echo  $insertar_verificacion_b, $resultadoP;
        } else {
            header('Location:../../verificacion_b.php');
            $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
        }
    } else {
        echo "error";
    }
} else {
    echo "Archivo no seleccionado";
}
