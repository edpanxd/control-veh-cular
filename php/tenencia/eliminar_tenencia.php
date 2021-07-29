<?php
include '../conn.php';

$id = $_GET['id'];
$url = $_GET['url'];
$eliminar= "DELETE FROM tenencia WHERE id='$id'";

$resultado = mysqli_query($cone, $eliminar);

if($resultado){
unlink($url);
header("Location: ../../tenencia.php");
}
else{
    header("Location: ../../404.html");
    echo "F";
}
?>