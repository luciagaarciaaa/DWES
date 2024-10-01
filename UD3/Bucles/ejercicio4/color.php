<?php
/**@author lucia 
 * @date 30/09/2024
 * Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor
 *hexadecimal que le corresponde. Cada celda será un enlace a una página que
 *mostrará un fondo de pantalla con el color seleccionado. ¿Puedes hacerlo con los
 *conocimientos que tienes? */
// Recibir el parámetro de color desde la URL
$color = isset($_GET['color']) ? $_GET['color'] : '#FFFFFF'; // Color blanco por defecto

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color: <?php echo $color; ?></title>
    <style>
        body {
            background-color: <?php echo $color; ?>;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: white;
            font-family: Arial, sans-serif;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Color: <?php echo $color; ?></h1>
    </div>
</body>
</html>
