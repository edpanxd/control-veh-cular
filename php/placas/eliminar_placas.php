<?php
include '../conn.php';

$id = $_GET['id'];
$url = $_GET['url'];
$eliminar= "DELETE FROM placas WHERE id='$id'";

$resultado = mysqli_query($cone, $eliminar);



if($resultado){
    unlink($url);
    header("Location: ../../placas.php");
}
else{
    echo "F";
}
?>