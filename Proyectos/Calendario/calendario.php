<?php
/**
 * @author lucia
 * @date 30/09/2024
 */
// Obtener la fecha actual
$hoyMes = isset($_POST['month']) ? intval($_POST['month']) : date('n'); // Mes actual
$hoyAno = isset($_POST['year']) ? intval($_POST['year']) : date('Y'); // Año actual

// Array de días festivos
include './config/configuracion.php';

// Crear el objeto de calendario
$primerDiaDelMes = mktime(0, 0, 0, $hoyMes, 1, $hoyAno);
$diasDelMes = date('t', $primerDiaDelMes);
$nombreMes = date('F', $primerDiaDelMes);
$primerDiaDeLaSemana = date('w', $primerDiaDelMes);

// Formulario para seleccionar mes y año
echo "<form method='post' action=''>";
echo "<label for='month'>Mes:</label>";
echo "<select id='month' name='month'>";
for ($m = 1; $m <= 12; $m++) {
    $selected = ($m == $hoyMes) ? "selected" : "";
    echo "<option value='$m' $selected>" . date("F", mktime(0, 0, 0, $m, 1)) . "</option>";
}
echo "</select>";

echo "<label for='year'>Año:</label>";
echo "<select id='year' name='year'>";
for ($y = date('Y') - 5; $y <= date('Y') + 5; $y++) {
    $selected = ($y == $hoyAno) ? "selected" : "";
    echo "<option value='$y' $selected>$y</option>";
}
echo "</select>";

echo "<button type='submit'>Cargar Calendario</button>";
echo "</form>";

// Crear el calendario
echo "<h1>Calendario de $nombreMes $hoyAno</h1>";
echo "<table border='1'>";
echo "<tr>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miércoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        <th>Sábado</th>
        <th>Domingo</th>
       </tr>";
echo "<tr>";

// Espacios en blanco hasta el primer día del mes
for ($i = 0; $i < $primerDiaDeLaSemana; $i++) {
    echo "<td></td>";
}

// Mostrar los días del mes
for ($dia = 1; $dia <= $diasDelMes; $dia++) {
    // Verificar si el día es hoy
    $claseDia = '';
    $colorFestivo = '';

    // Día actual
    if ($dia == date('j') && $hoyMes == date('n') && $hoyAno == date('Y')) {
        $claseDia = 'hoy'; // Día actual
    }

    // Comprobar si el día es festivo
    $fechaActual = "$dia-$hoyMes"; // Formato dia-mes
    $nombreFestivo = '';

    if (array_key_exists($fechaActual, $diasFestivos)) {
        $claseDia = 'festivo'; // Día festivo
        $colorFestivo = $diasFestivos[$fechaActual]['color']; // Color del festivo
        $nombreFestivo = $diasFestivos[$fechaActual]['nombre']; // Nombre del festivo
    }

    // Comprobación de domingos
    if (($primerDiaDeLaSemana + $dia) % 7 == 0) {
        $claseDia = 'domingo'; // Domingo
    }

    // Imprimir el día con la clase correspondiente
    echo "<td class='$claseDia' style='background-color: $colorFestivo;'>";

    // Enlace con la fecha del día
    $fechaEnlace = "$hoyAno-$hoyMes-$dia"; // Formato para la URL
    echo "<a href='fecha.php?fecha=$fechaEnlace' target='_blank' style='color: inherit; text-decoration: none;'>$dia</a>"; // Mostrar el día como enlace

    echo "</td>";

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
echo "<link rel='stylesheet' type='text/css' href='style.css'>";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario Mensual</title>
    <style>
    </style>
</head>
<body>
</body>
</html>
