<?php
include '../conn.php';

$id = $_GET['id'];
$eliminar= "DELETE FROM tenencia WHERE id='$id'";

$resultado = mysqli_query($cone, $eliminar);

if($resultado){
header("Location: ../../tenencia.php");
}
else{
    echo "F";
}
?>