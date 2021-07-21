<?php
include '../conn.php';

$id = $_GET['id'];

$pdf = "SELECT * FROM tenencia WHERE id='$id'";

$placasresultado = mysqli_query($cone, $pdf);
     while ($mostrar = mysqli_fetch_array($placasresultado)) {
     header('content-type: application/pdf');
     readfile($mostrar['archivo']);
    }

?>