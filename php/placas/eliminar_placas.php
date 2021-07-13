<?php
include '../conn.php';

$id = $_GET['id'];
$eliminar= "DELETE FROM placas WHERE id='$id'";

$resultado = mysqli_query($cone, $eliminar);

if($resultado){
header("Location: ../../placas.php");
}
else{
    echo "F";
}
?>