<?php
include '../conn.php';

$id = $_GET['id'];
$url = $_GET['url'];
$eliminar= "DELETE FROM verificacion_a WHERE id='$id'";

$resultado = mysqli_query($cone, $eliminar);

if($resultado){
unlink($url);
header("Location: ../../verificacion_a.php");
}
else{
    header("Location: ../../404.html");
    echo "F";
}
?>