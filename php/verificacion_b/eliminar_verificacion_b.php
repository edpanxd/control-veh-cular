<?php
include '../conn.php';

$id = $_GET['id'];
$url = $_GET['url'];
$eliminar= "DELETE FROM verificacion_b WHERE id='$id'";
$resultado = mysqli_query($cone, $eliminar);

if($resultado){
unlink($url); 

header("Location: ../../verificacion_b.php");
}
else{
    echo "F";
}
?>