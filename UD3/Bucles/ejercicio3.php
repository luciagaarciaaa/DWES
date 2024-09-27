<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar del 1 al 10</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f41ae9;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        td:nth-child(odd) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>

    <h2>Tablas de multiplicar del 1 al 10</h2>

    <table>
        <tr>
            <th>x</th>
            <?php
    
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>

        <?php
        // Generar filas y columnas para la tabla de multiplicar
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            // Primera columna con el número base
            echo "<th>$i</th>";
            // Generar las multiplicaciones
            for ($j = 1; $j <= 10; $j++) {
                $resultado = $i * $j;
                echo "<td>$resultado</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>