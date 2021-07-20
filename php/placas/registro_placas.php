<?php
include '../conn.php';
//registro de profesores

$id⁪=$_POST["vehiculo"];
$vencimiento=$_POST["fecha"];
$estatus=$_POST["estatus"];


if($_FILES["archivo"]){
    $nombre_base= basename($_FILES["archivo"]["name"]);
    $nombre_final= date("m-d-y"). "-". date("H-m-s"). "-" . $nombre_base;
    $ruta= "../archivos/". $nombre_final;
    $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
    if ($subirarchivo){

        $insertar_placas = "INSERT INTO placas(vehiculo_id, vencimiento, estatus, archivo)
        VALUES ('$id⁪', '$vencimiento', '$estatus', '$ruta')";
        
        $resultadoP= mysqli_query($cone, $insertar_placas);
        if (!$resultadoP) {
            
            echo  $insertar_placas, $resultadoP;
        } else {
            header('Location:../../placas.php');
        }

    }else{
        echo "error";
    }

}else{
    echo "Archivo no seleccionado";
}



?>