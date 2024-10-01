<?php
/**
 * @author lucia 
 * @date 30/09/2024
 * Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor
 *hexadecimal que le corresponde. Cada celda será un enlace a una página que
 *mostrará un fondo de pantalla con el color seleccionado. ¿Puedes hacerlo con los
 *conocimientos que tienes?
 */
// Definir el incremento más pequeño para más combinaciones
define('INCREMENTO', 17); // Incremento constante más pequeño para generar más colores

// Función para convertir valores RGB a hexadecimal
function rgbToHex($r, $g, $b) {
    return sprintf("#%02X%02X%02X", $r, $g, $b);
}

// Inicializar una variable para almacenar las filas de la tabla
$tablaColores = '';

// Contador de columnas
$columnas = 8; // Ocho columnas para que se ajuste bien en pantallas anchas
$contadorColumnas = 0;

// Usamos tres bucles para incrementar los componentes RGB
for ($r = 0; $r <= 255; $r += INCREMENTO) {
    for ($g = 0; $g <= 255; $g += INCREMENTO) {
        for ($b = 0; $b <= 255; $b += INCREMENTO) {
            // Generar el valor RGB
            $rgb = "rgb($r, $g, $b)";
            // Convertir a formato hexadecimal
            $hex = rgbToHex($r, $g, $b);

            // Concatenar la celda con el color de fondo a la variable
            $tablaColores .= "<td style='background-color: $hex;'>
                              <a href='color.php?color=" . urlencode($hex) . "'>$hex</a>
                              </td>";

            // Controlar el número de columnas
            $contadorColumnas++;
            if ($contadorColumnas % $columnas == 0) {
                $tablaColores .= "</tr><tr>"; // Nueva fila después de 8 columnas
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paleta de Colores en RGB y Hexadecimal</title>
    <style>
        table {
            width: 100%; /* Ocupa toda la pantalla */
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 1px; /* Reducimos el padding al mínimo */
            text-align: center;
            border: 1px solid #ccc;
        }
        td {
            color: white; /* Texto blanco para que contraste con los colores oscuros */
            font-weight: bold;
            height: 20px; /* Altura mínima */
            width: 20px;  /* Ancho mínimo */
        }
        a {
            color: white;
            text-decoration: none;
            font-size: 8px; /* Hacemos el texto lo más pequeño posible */
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Tabla de Colores en RGB y Hexadecimal</h1>
    <table>
        <tr>
            <th>Color</th>
            <th>Color</th>
            <th>Color</th>
            <th>Color</th>
            <th>Color</th>
            <th>Color</th>
            <th>Color</th>
            <th>Color</th>
        </tr>
        <tr>
            <?php
            // Mostrar la tabla generada
            echo $tablaColores;
            ?>
        </tr>
    </table>
</body>
</html>
