<?php
/**
 * @date 26/09/2024
 * @author Lucia Garcia Diaz
 * 3.Carga fecha de nacimiento en variables y calcula la edad.
 */

// Cargar la fecha de nacimiento en variables
$dia = 25;
$mes = 9;
$anio = 1995;

// Crear un objeto de fecha con la fecha de nacimiento
$fecha_nacimiento = new DateTime("$anio-$mes-$dia");

// Obtener la fecha actual
$fecha_actual = new DateTime();

// Calcular la diferencia entre la fecha actual y la fecha de nacimiento
$edad = $fecha_actual->diff($fecha_nacimiento);

// Mostrar la edad
echo "Tienes " . $edad->y . " años.";
?>
