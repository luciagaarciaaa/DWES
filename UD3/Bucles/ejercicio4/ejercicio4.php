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
        // Definimos algunos colores
        $colores = [
            '#FF5733' => 'Rojo Anaranjado',
            '#33FF57' => 'Verde',
            '#3357FF' => 'Azul',
            '#FFFF33' => 'Amarillo',
            '#FF33FF' => 'Rosa',
            '#33FFFF' => 'Cian',
        ];

        // Generar filas para cada color
        foreach ($colores as $hex => $nombre) {
            echo "<tr>";
            echo "<td style='background-color: $hex;'><a href='color.php?color=" . urlencode($hex) . "' style='color: black; text-decoration: none;'>$nombre</a></td>";
            echo "<td>$hex</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
