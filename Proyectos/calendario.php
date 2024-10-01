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
        .festivo, .domingo {
            background-color: red; /* Días festivos y domingos en rojo */
            color: white;
        }
    </style>
</head>
<body>

<?php
// Variables de mes y año
$mes = 2; // Mes de septiembre
$año = 2028;

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

    // Verificación de días festivos en 2024
    if (
        ($dia == 1 && $mes == 1) ||  // Año Nuevo
        ($dia == 6 && $mes == 1) ||  // Reyes
        ($dia == 29 && $mes == 3) || // Viernes Santo
        ($dia == 1 && $mes == 5) ||   // Día del Trabajador
        ($dia == 15 && $mes == 8) ||  // Asunción de la Virgen
        ($dia == 12 && $mes == 10) || // Día de la Hispanidad
        ($dia == 1 && $mes == 11) ||  // Todos los Santos
        ($dia == 6 && $mes == 12) ||  // Día de la Constitución
        ($dia == 8 && $mes == 12) ||  // Inmaculada Concepción
        ($dia == 25 && $mes == 12)    // Navidad
    ) {
        $claseDia = 'festivo'; // Día festivo
    }

    // Comprobación de domingos
    if (($primerDiaDeLaSemana + $dia - 1) % 7 == 0) {
        $claseDia = 'domingo'; // Domingo
    }

    // Imprimir el día con la clase correspondiente
    echo "<td class='$claseDia'>$dia</td>";

    // Iniciar una nueva fila cada 7 días
    if (($primerDiaDeLaSemana + $dia) % 7 == 0) {
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
