<?php
/**
 * @author lucia 
 * @date 30/09/2024
 * Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas
 */
// Generar la cabecera de la tabla
$header = "<tr><th>x</th>";
for ($i = 1; $i <= 10; $i++) {
    $header .= "<th>$i</th>";
}
$header .= "</tr>";

// Generar las filas de la tabla de multiplicar
$filas = "";
for ($i = 1; $i <= 10; $i++) {
    $filas .= "<tr>";
    // Primera columna con el número base
    $filas .= "<th>$i</th>";
    // Generar las multiplicaciones
    for ($j = 1; $j <= 10; $j++) {
        $resultado = $i * $j;
        $filas .= "<td>$resultado</td>";
    }
    $filas .= "</tr>";
}
?>

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
        <?php
        // Mostrar la cabecera de la tabla
        echo $header;
        // Mostrar las filas de la tabla
        echo $filas;
        ?>
    </table>

</body>

</html>
