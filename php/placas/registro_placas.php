<?php
include '../conn.php';
//registro de profesores

$id⁪=$_POST["vehiculo"];
$vencimiento=$_POST["fecha"];
$estatus=$_POST["estatus"];
$nombre=$_POST["nombre"];


if($_FILES["archivo"]){
    $nombre_base= basename($_FILES["archivo"]["name"]);
    $nombre_final= date("m-d-y"). "-". date("H-m-s"). "-" . $nombre_base;
    $ruta= "../../archivos/placas/". $nombre_final;
    
    
    if ($ruta){

        $insertar_placas = "INSERT INTO placas(vehiculo_id, vencimiento, estatus, nombre, archivo)
        VALUES ('$id⁪', '$vencimiento', '$estatus','$nombre', '$ruta')";
        
        $resultadoP= mysqli_query($cone, $insertar_placas);
        if (!$resultadoP) {
            header("Location: ../../404.html");
            echo  $insertar_placas, $resultadoP;
        } else {
            $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
            header('Location:../../placas.php');
        }

    }else{
        echo "error";
    }

}else{
    echo "Archivo no seleccionado";
}



?>