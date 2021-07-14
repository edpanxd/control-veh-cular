<?php
include '../conn.php';

$id = $_GET['id'];
$eliminar= "DELETE FROM poliza WHERE id='$id'";

$resultado = mysqli_query($cone, $eliminar);

if($resultado){
header("Location: ../../poliza.php");
}
else{
    echo "F";
}
?>