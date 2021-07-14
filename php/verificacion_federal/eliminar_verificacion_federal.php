<?php
include '../conn.php';

$id = $_GET['id'];
$eliminar= "DELETE FROM verificacion_a WHERE id='$id'";

$resultado = mysqli_query($cone, $eliminar);

if($resultado){
header("Location: ../../verificacion_a.php");
}
else{
    echo "F";
}
?>