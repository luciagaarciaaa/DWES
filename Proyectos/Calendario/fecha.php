<?php 
if (isset($_GET['fecha'])) {
    $fecha = $_GET['fecha'];
    echo "<h1>Detalles para la fecha: $fecha</h1>";
} else {
    echo "<h1>No se ha especificado ninguna fecha.</h1>";
}
?>
