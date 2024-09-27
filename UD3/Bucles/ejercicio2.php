<?php
/**
 * @date 27/09/2024
 * @author Lucia Garcia Diaz
 * Sumar los 3 primeros números pares.
 */
$sum = 0;
for ($i = 2; $i <= 6; $i += 2) {
    $sum += $i;
}
echo "La suma de los 3 primeros números pares es: " . $sum;
?>
