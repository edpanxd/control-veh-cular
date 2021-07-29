<?php
include '../conn.php';

$id = $_GET['id'];
$url = $_GET['url'];
$eliminar= "DELETE FROM fisico_mecanico WHERE id='$id'";
$resultado = mysqli_query($cone, $eliminar);
if($resultado){
unlink($url);
header("Location: ../../fisico_mecanico.php");
}
else{
    echo $eliminar;
    header("Location: ../../404.html");
}
?>