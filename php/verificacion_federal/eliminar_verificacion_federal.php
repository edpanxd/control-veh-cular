<?php
include '../conn.php';

$id = $_GET['id'];
$url = $_GET['url'];
$eliminar= "DELETE FROM verificacion_federal WHERE id='$id'";

$resultado = mysqli_query($cone, $eliminar);

if($resultado){
unlink($url);
header("Location: ../../verificacion_federal.php");
}
else{
    echo "F";
    header("Location: ../../404.html");
}
?>