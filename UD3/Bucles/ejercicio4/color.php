
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Seleccionado</title>
    <style>
        body {
            margin: 0;
            height: 100vh; /* Asegura que ocupe toda la altura de la ventana */
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            color: white; /* Color del texto */
        }
        .color-background {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center; /* Centra el texto */
        }
    </style>
</head>
<body>

<?php
// Verifica si se recibió un color a través de la URL
if (isset($_GET['color'])) {
    // Escapa el color para prevenir inyecciones de HTML
    $color = htmlspecialchars($_GET['color']);
   

    // Imprime el div con el color de fondo
    echo "<div class='color-background' style='background-color: $color;'>
            <h1>El color seleccionado es: $color</h1>
          </div>";
} else {
    echo "<h1>No se ha seleccionado ningún color.</h1>";
}
?>

</body>
</html>
