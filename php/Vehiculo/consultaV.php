<?php
include 'conn.php';

$vehiculo = "SELECT * FROM vehiculos";
$vehiculos = mysqli_query($cone, $vehiculo);



?>