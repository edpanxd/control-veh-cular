<?php
include '../conn.php';
//registro de profesores

$id⁪ = $_POST["vehiculo"];
$fecha = $_POST["fecha"];
$estatus = $_POST["estatus"];


if ($_FILES["archivo"]) {
    $nombre_base = basename($_FILES["archivo"]["name"]);
    $nombre_final = date("m-d-y") . "-" . date("H-m-s") . "-" . $nombre_base;
    $ruta = "../../archivos/verificacion_a/" . $nombre_final;
   
    if ($ruta) {

        $insertar_placas = "INSERT INTO verificacion_a(vehiculo_id, fecha, estatus,archivo)
                                VALUES ('$id⁪', '$fecha', '$estatus', '$ruta')";

        $resultadoP = mysqli_query($cone, $insertar_placas);
        if (!$resultadoP) {

            echo  $insertar_placas, $resultadoP;
        } else {
            $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
            header('Location:../../verificacion_a.php');
        }
    } else {
        echo "error";
    }
} else {
    echo "Archivo no seleccionado";
}
