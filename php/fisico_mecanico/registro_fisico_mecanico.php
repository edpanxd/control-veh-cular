<?php
include '../conn.php';


$id⁪ = $_POST["vehiculo"];
$mecanico = $_POST["mecanico"];
$fecha = $_POST["fecha"];


if ($_FILES["archivo"]) {
    $nombre_base = basename($_FILES["archivo"]["name"]);
    $nombre_final = date("m-d-y") . "-" . date("H-m-s") . "-" . $nombre_base;
    $ruta = "../../archivos/fisico_mecanico/" . $nombre_final;
    
    if ($ruta) {

        $insertar_verificacion_m = "INSERT INTO fisico_mecanico(vehiculo_id, mecanico, fecha, archivo)
                                        VALUES ('$id⁪', '$mecanico', '$fecha', '$ruta')";

        $resultadoP = mysqli_query($cone, $insertar_verificacion_m);
        if (!$resultadoP) {

            echo  $insertar_verificacion_m, $resultadoP;
        } else {
            $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
            header('Location:../../fisico_mecanico.php');
        }
    } else {
        echo "error";
    }
} else {
    echo "Archivo no seleccionado";
}
