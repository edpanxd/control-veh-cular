<?php
include '../conn.php';

$id = $_GET['id'];
$eliminar= "DELETE FROM fisico_mecanico WHERE id='$id'";

$resultado = mysqli_query($cone, $eliminar);

if($resultado){
header("Location: ../../fisico_mecanico.php");
}
else{
    echo $eliminar;
}
?>