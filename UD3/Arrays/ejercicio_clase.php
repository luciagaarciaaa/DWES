<?php   
// Definir un array de números enteros
$numeros = [2, 4, 6, 8, 10];

// Usamos array_map con una función anónima para calcular el cuadrado de cada número
$cuadrados = array_map(function($num) {
    return $num * $num; // Calcular el cuadrado
}, $numeros);

// Mostrar el resultado
print_r($cuadrados);
print_r($numeros);

?>
