<?php
include '../conn.php';

$id = $_GET['id'];
$eliminar= "DELETE FROM vehiculos WHERE id_vehiculo ='$id'";

$resultado = mysqli_query($cone, $eliminar);

if($resultado){
header("Location: ../../vehiculos.php");
}
else{
    header("Location: ../../404.html");
    echo "F";
}
?>