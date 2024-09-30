<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paleta de Colores</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Color</th>
            <th>Código Hexadecimal</th>
        </tr>
        <?php
        // Definición de colores y códigos hexadecimales directamente en el bucle
        $colores = [
            'Rojo Anaranjado' => '#FF5733',
            'Verde' => '#33FF57',
            'Azul' => '#3357FF',
            'Amarillo' => '#FFFF33',
            'Rosa' => '#FF33FF',
            'Cian' => '#33FFFF',
            'Naranja' => '#FF8C00',
            'Azul Violeta' => '#8A2BE2',
            'Verde Amarillo' => '#ADFF2F',
            'Rosa Claro' => '#FFC0CB'
        ];

        // Generar filas para cada color usando un bucle for
        $nombreColores = ['Rojo Anaranjado', 'Verde', 'Azul', 'Amarillo', 'Rosa', 'Cian', 'Naranja', 'Azul Violeta', 'Verde Amarillo', 'Rosa Claro'];
        $codigosHex = ['#FF5733', '#33FF57', '#3357FF', '#FFFF33', '#FF33FF', '#33FFFF', '#FF8C00', '#8A2BE2', '#ADFF2F', '#FFC0CB'];

        $totalColores = count($nombreColores); // Total de colores

        // Usar un bucle for para iterar
        for ($i = 0; $i < $totalColores; $i++) {
            $nombre = $nombreColores[$i]; // Obtener el nombre del color
            $hex = $codigosHex[$i]; // Obtener el código hexadecimal

            echo "<tr>";
            echo "<td style='background-color: $hex;'><a href='color.php?color=" . urlencode($hex) . "' style='color: black; text-decoration: none;'>$nombre</a></td>";
            echo "<td>$hex</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
