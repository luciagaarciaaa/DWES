<?php
/**
 * @author lucia
 * @date 30/09/2024
 */
 // Obtener la fecha actual
 $hoy = date('j');      // Día actual
 $hoyMes = date('n');   // Mes actual
 $hoyAño = date('Y');   // Año actual
 
 // Array de días festivos
 $diasFestivos = [
     '1-1' => ['nombre' => 'Año Nuevo', 'tipo' => 'nacional', 'color' => 'red'],
     '6-1' => ['nombre' => 'Reyes', 'tipo' => 'nacional', 'color' => 'red'],
     '29-3' => ['nombre' => 'Viernes Santo', 'tipo' => 'nacional', 'color' => 'red'],
     '1-5' => ['nombre' => 'Día del Trabajador', 'tipo' => 'nacional', 'color' => 'red'],
     '15-8' => ['nombre' => 'Asunción de la Virgen', 'tipo' => 'nacional', 'color' => 'red'],
     '12-10' => ['nombre' => 'Día de la Hispanidad', 'tipo' => 'nacional', 'color' => 'red'],
     '1-11' => ['nombre' => 'Todos los Santos', 'tipo' => 'nacional', 'color' => 'red'],
     '6-12' => ['nombre' => 'Día de la Constitución', 'tipo' => 'nacional', 'color' => 'red'],
     '8-12' => ['nombre' => 'Inmaculada Concepción', 'tipo' => 'nacional', 'color' => 'red'],
     '25-12' => ['nombre' => 'Navidad', 'tipo' => 'nacional', 'color' => 'red'],
     '28-2' => ['nombre' => 'Dia de Andalucía ', 'tipo' => 'comunidad', 'color' => 'blue'], // Ejemplo de festivo de comunidad
     '8-9' => ['nombre' => 'Día de la Virgen de la Sierra', 'tipo' => 'local', 'color' => 'orange'], // Fiesta local
    '24-10' => ['nombre' => 'Fiesta Local de Córdoba', 'tipo' => 'local', 'color' => 'orange'], // Fiesta local 
 ];
 
 // Crear el objeto de calendario
 $primerDiaDelMes = mktime(0, 0, 0, $hoyMes, 1, $hoyAño);
 $diasDelMes = date('t', $primerDiaDelMes);
 $nombreMes = date('F', $primerDiaDelMes);
 $primerDiaDeLaSemana = date('w', $primerDiaDelMes);
 
 // Crear el calendario
 echo "<h1>Calendario de $nombreMes $hoyAño</h1>";
 echo "<table border='1'>";
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
     $claseDia = '';
     $colorFestivo = '';
 
     // Día actual
     if ($dia == $hoy && $hoyMes == date('n') && $hoyAño == date('Y')) {
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
     if (($primerDiaDeLaSemana + $dia - 1) % 7 == 0) {
         $claseDia = 'domingo'; // Domingo
     }
 
     // Imprimir el día con la clase correspondiente
     echo "<td class='$claseDia' style='background-color: $colorFestivo;'>";
 
     // Mostrar el nombre del festivo si corresponde
     if ($nombreFestivo) {
         echo "$nombreFestivo"; // Mostrar el nombre del festivo
     } else {
         echo $dia; // Mostrar el número del día
     }
 
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
 ?>
 
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

</body>
</html>
