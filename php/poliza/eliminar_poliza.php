<?php
include '../conn.php';

$id = $_GET['id'];
$url=$_GET['url'];
$eliminar= "DELETE FROM poliza WHERE id='$id'";

$resultado = mysqli_query($cone, $eliminar);

if($resultado){
unlink($url);
header("Location: ../../poliza.php");
}
else{
    echo "F";
    header("Location: ../../404.html");
}
?>