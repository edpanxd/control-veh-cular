<?php
include '../conn.php';
//registro de profesores

$id⁪ = $_POST["vehiculo"];
$tenencia = $_POST["tenencia"];
$estatus = $_POST["estatus"];
$pago = $_POST["pago"];


if ($_FILES["archivo"]) {
    $nombre_base = basename($_FILES["archivo"]["name"]);
    $nombre_final = date("m-d-y") . "-" . date("H-m-s") . "-" . $nombre_base;
    $ruta = "../../archivos/tenencia/" . $nombre_final;
    
    if ($ruta) {

        $insertar_poliza = "INSERT INTO tenencia(vehiculo_id, tenencia, pago, estatus, archivo)
                            VALUES ('$id⁪', '$tenencia', '$pago', '$estatus', '$ruta')";

        $resultadoP = mysqli_query($cone, $insertar_poliza);
        if (!$resultadoP) {

            echo  $insertar_poliza, $resultadoP;
        } else {
            $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
            header('Location:../../tenencia.php');
        }
    } else {
        echo "error";
    }
} else {
    echo "Archivo no seleccionado";
}




