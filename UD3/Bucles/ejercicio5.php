<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario Mensual</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        td {
            width: 14.28%;
            height: 80px; /* altura de cada celda */
            border: 1px solid #ccc;
            position: relative;
        }
        .hoy {
            background-color: green; /* Día actual en verde */
            color: white;
        }
        .festivo {
            background-color: red; /* Días festivos en rojo */
            color: white;
        }
    </style>
</head>
<body>

<?php
// Variables de mes y año
$mes = 9; // Septiembre
$año = 2024;

// Array de días festivos en Córdoba (personalizado)
$festivos = [
    '2024-09-08', // Día de la Virgen de la Asunción
    '2024-09-24', // Día de la Revolución
];

// Crear el objeto de calendario
$primerDiaDelMes = mktime(0, 0, 0, $mes, 1, $año);
$diasDelMes = date('t', $primerDiaDelMes);
$nombreMes = date('F', $primerDiaDelMes);
$primerDiaDeLaSemana = date('w', $primerDiaDelMes);

// Crear el calendario
echo "<h1>Calendario de $nombreMes $año</h1>";
echo "<table>";
echo "<tr>
        <th>Domingo</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miércoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        <th>Sábado</th>
      </tr>";
echo "<tr>";

// Espacios en blanco hasta el primer día del mes
for ($i = 0; $i < $primerDiaDeLaSemana; $i++) {
    echo "<td></td>";
}

// Mostrar los días del mes
for ($dia = 1; $dia <= $diasDelMes; $dia++) {
    // Verificar si el día es hoy
    $hoy = date('j');
    $hoyMes = date('n');
    $hoyAño = date('Y');
    
    // Variable para la clase CSS
    $claseDia = '';

    // Día actual
    if ($dia == $hoy && $hoyMes == $mes && $hoyAño == $año) {
        $claseDia = 'hoy'; // Día actual
    }

    // Formato correcto para comparar con el array de festivos
    $fechaActual = sprintf("%04d-%02d-%02d", $año, $mes, $dia);
    
    // Día festivo
    if (in_array($fechaActual, $festivos)) {
        $claseDia = 'festivo'; // Día festivo
    }

    // Imprimir el día con la clase correspondiente
    echo "<td class='$claseDia'>$dia</td>";

    // Iniciar una nueva fila cada 7 días
    if (($dia + $primerDiaDeLaSemana) % 7 == 0) {
        echo "</tr><tr>";
    }
}

// Completar el resto de la tabla
while (($dia + $primerDiaDeLaSemana) <= 42) {
    echo "<td></td>";
    $dia++;
}

echo "</tr>";
echo "</table>";
?>

</body>
</html>
