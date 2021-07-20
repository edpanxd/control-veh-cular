<?php
include '../conn.php';

$id = $_GET['id'];
$eliminar= "DELETE FROM proveedores WHERE id='$id'";

$resultado = mysqli_query($cone, $eliminar);

if($resultado){
header("Location: ../../proveedor.php");
}
else{
    echo "F";
}
?>