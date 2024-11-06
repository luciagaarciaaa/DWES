<?php
/**
 * @author lucia 
 * @date 01/10/2024
 * Crear una aplicación que almacene información de países: nombre capital y
 *bandera. Diseñar un formulario que permita seleccionar un país y nos muestre el
 *nombre de la capital y la bandera.
 */

// Array de países con su capital y bandera
$paises = [
    'España' => ['capital' => 'Madrid', 'bandera' => 'https://upload.wikimedia.org/wikipedia/commons/9/9a/Flag_of_Spain.svg'],
    'Francia' => ['capital' => 'París', 'bandera' => 'https://upload.wikimedia.org/wikipedia/en/c/c3/Flag_of_France.svg'],
    'Alemania' => ['capital' => 'Berlín', 'bandera' => 'https://upload.wikimedia.org/wikipedia/en/b/ba/Flag_of_Germany.svg'],
    'Italia' => ['capital' => 'Roma', 'bandera' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Flag_of_Italy.svg'],
    'México' => ['capital' => 'Ciudad de México', 'bandera' => 'https://upload.wikimedia.org/wikipedia/commons/f/fc/Flag_of_Mexico.svg']
];

$selectedCountry = '';
$capital = '';
$bandera = '';

// Comprobar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedCountry = $_POST['pais'];
    $capital = $paises[$selectedCountry]['capital'];
    $bandera = $paises[$selectedCountry]['bandera'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Países</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            margin-top: 50px;
        }
        .country-info {
            margin-top: 20px;
        }
        .flag {
            width: 150px;
            height: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Selecciona un país</h1>
    <form method="POST" action="">
        <label for="pais">País:</label>
        <select name="pais" id="pais" required>
            <option value="" disabled selected>Seleccione un país</option>
            <?php
            // Rellenar las opciones del select con los países del array
            foreach ($paises as $pais => $info) {
                echo "<option value=\"$pais\"" . ($pais == $selectedCountry ? ' selected' : '') . ">$pais</option>";
            }
            ?>
        </select>
        <br><br>
        <button type="submit">Mostrar Información</button>
    </form>

    <?php if ($selectedCountry): ?>
    <div class="country-info">
        <h2>Información del país seleccionado:</h2>
        <p><strong>País:</strong> <?php echo $selectedCountry; ?></p>
        <p><strong>Capital:</strong> <?php echo $capital; ?></p>
        <p><strong>Bandera:</strong></p>
        <img src="<?php echo $bandera; ?>" alt="Bandera de <?php echo $selectedCountry; ?>" class="flag">
    </div>
    <?php endif; ?>
</div>

</body>
</html>
