<?php
include '../conn.php';


$id⁪ = $_POST["vehiculo"];
$federal = $_POST["federal"];
$fecha = $_POST["fecha"];
$estatus = $_POST["estatus"];

if ($_FILES["archivo"]) {
    $nombre_base = basename($_FILES["archivo"]["name"]);
    $nombre_final = date("m-d-y") . "-" . date("H-m-s") . "-" . $nombre_base;
    $ruta = "../../archivos/verificacion_federal/" . $nombre_final;
    
    if ($ruta) {

        $insertar_verificacion_f = "INSERT INTO verificacion_federal(vehiculo_id, federal, fecha, estatus, archivo)
                                        VALUES ('$id⁪', '$federal', '$fecha', '$estatus', '$ruta')";

        $resultadoP = mysqli_query($cone, $insertar_verificacion_f);
        if (!$resultadoP) {
            header("Location: ../../404.html");
            echo  $insertar_verificacion_f, $resultadoP;
        } else {
            header('Location:../../verificacion_federal.php');
            $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
        }
    } else {
        echo "error";
    }
} else {
    echo "Archivo no seleccionado";
}
