<?php 
/**
 * @autor lucia
 * @date 01/10/2024
 * Crear un script para sumar una serie de números. El número de números a sumar
 * será introducido en un formulario.
 */

// Verificar si se envió el formulario para ingresar los números
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num_elements'])) {
    // Número de elementos introducido por el usuario
    $num_elements = (int)$_POST['num_elements'];

    // Si los números ya fueron ingresados, calcular la suma
    if (isset($_POST['numbers'])) {
        $numbers = $_POST['numbers'];
        $sum = array_sum($numbers);

        // Mostrar la suma total
        echo "<h2>Resultado de la suma</h2>";
        echo "La suma de los números es: " . $sum . "<br><br>";
    } else {
        // Mostrar formulario para ingresar los números
        echo "<h2>Ingrese los números a sumar</h2>";
        echo "<form method='post' action=''>";
        for ($i = 1; $i <= $num_elements; $i++) {
            echo "<label for='number_$i'>Número $i:</label><br>";
            echo "<input type='number' id='number_$i' name='numbers[]' required><br><br>";
        }
        echo "<input type='hidden' name='num_elements' value='$num_elements'>";
        echo "<button type='submit'>Calcular Suma</button>";
        echo "</form>";
    }
} else {
    // Mostrar formulario para seleccionar el número de elementos
    echo "<h2>Suma de Números</h2>";
    echo "<form method='post' action=''>";
    echo "<label for='num_elements'>¿Cuántos números desea sumar?</label><br>";
    echo "<input type='number' id='num_elements' name='num_elements' required><br><br>";
    echo "<button type='submit'>Enviar</button>";
    echo "</form>";
}
?>
