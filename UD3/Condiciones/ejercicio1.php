<?php
/**
 * @date 26/09/2024
 * @author Lucia Garcia Diaz
 * 1. Almacena tres números en variables y escribirlos en pantalla de manera ordenada.
 * 
 *  */ 

// Almacenar tres números en variables
$num1 = 45;
$num2 = 12;
$num3 = 30;

// Comparar y mostrar los números en orden ascendente
// Primer caso: num1 es el menor
if ($num1 <= $num2 && $num1 <= $num3) {
    // Si num2 es menor o igual que num3, el orden es num1, num2, num3
    if ($num2 <= $num3) {
        echo "$num1, $num2, $num3\n";
    } 
    // De lo contrario, el orden es num1, num3, num2
    else {
        echo "$num1, $num3, $num2\n";
    }
} 
// Segundo caso: num2 es el menor
elseif ($num2 <= $num1 && $num2 <= $num3) {
    // Si num1 es menor o igual que num3, el orden es num2, num1, num3
    if ($num1 <= $num3) {
        echo "$num2, $num1, $num3\n";
    } 
    // De lo contrario, el orden es num2, num3, num1
    else {
        echo "$num2, $num3, $num1\n";
    }
} 
// Tercer caso: num3 es el menor
else {
    // Si num1 es menor o igual que num2, el orden es num3, num1, num2
    if ($num1 <= $num2) {
        echo "$num3, $num1, $num2\n";
    } 
    // De lo contrario, el orden es num3, num2, num1
    else {
        echo "$num3, $num2, $num1\n";
    }
}
?>
