<?php
/**
 * @author lucia
 * @date 02/10/2024
 */
// Datos de los platos
$platos = [
    'primeros' => [
        [
            'nombre' => 'Ensalada César',
            'precio' => 8.50,
            'foto' => ' img/ensalada.jpg'
        ],
        [
            'nombre' => 'Sopa de Marisco',
            'precio' => 9.00,
            'foto' => 'img/sopa.jpg'
        ],
        [
            'nombre' => 'Tartar de Salmón',
            'precio' => 12.00,
            'foto' => 'img/tartar.jpg'
        ],
    ],
    'segundos' => [
        [
            'nombre' => 'Solomillo de Ternera',
            'precio' => 18.00,
            'foto' => 'img/solomillo.jpg'
        ],
        [
            'nombre' => 'Lubina a la plancha',
            'precio' => 15.00,
            'foto' => 'img/lubinaplancha.jpg'
        ],
        [
            'nombre' => 'Pollo Asado',
            'precio' => 10.00,
            'foto' => 'img/polloasado.jpg'
        ],
        [
            'nombre' => 'Lasaña Vegetariana',
            'precio' => 12.00,
            'foto' => 'img/lasaña.jpg'
        ],
        [
            'nombre' => 'Cordero al horno',
            'precio' => 17.00,
            'foto' => 'img/cordero.jpg'
        ]
    ],
    'postres' => [
        [
            'nombre' => 'Tarta de queso',
            'precio' => 5.00,
            'foto' => 'img/tartaqueso.jpg'
        ],
        [
            'nombre' => 'Helado de chocolate',
            'precio' => 4.50,
            'foto' => 'img/heladochocolate.jpg'
        ],
        [
            'nombre' => 'Flan casero',
            'precio' => 3.50,
            'foto' => 'img/flan.jpg'
        ]
    ]
];

// Función para calcular el precio del menú con el descuento
function calcular_precio_menu($precio_total) {
    $descuento = 0.20; // 20% de descuento
    return $precio_total * (1 - $descuento);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú del Restaurante</title>
    <style>
.menu-section {
    display: flex;
    flex-wrap: wrap;
}
.plato img {
    width: 100%;
    height: auto;
    max-height: 150px;
}
    </style>
</head>

<body>

    <h1>Elige tu Menú</h1>
    <form method="post">
        <!-- Mostrar los primeros platos -->
        <h2>Primeros Platos</h2>
        <div class="menu-section">
            <?php foreach ($platos['primeros'] as $index => $primer): ?>
                <div class="plato">
                    <img src="<?php echo $primer['foto']; ?>" alt="<?php echo $primer['nombre']; ?>">
                    <p><?php echo $primer['nombre']; ?></p>
                    <p>Precio: €<?php echo number_format($primer['precio'], 2); ?></p>
                    <input type="radio" name="primer_plato" value="<?php echo $index; ?>" required> Seleccionar
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Mostrar los segundos platos -->
        <h2>Segundos Platos</h2>
        <div class="menu-section">
            <?php foreach ($platos['segundos'] as $index => $segundo): ?>
                <div class="plato">
                    <img src="<?php echo $segundo['foto']; ?>" alt="<?php echo $segundo['nombre']; ?>">
                    <p><?php echo $segundo['nombre']; ?></p>
                    <p>Precio: €<?php echo number_format($segundo['precio'], 2); ?></p>
                    <input type="radio" name="segundo_plato" value="<?php echo $index; ?>" required> Seleccionar
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Mostrar los postres -->
        <h2>Postres</h2>
        <div class="menu-section">
            <?php foreach ($platos['postres'] as $index => $postre): ?>
                <div class="plato">
                    <img src="<?php echo $postre['foto']; ?>" alt="<?php echo $postre['nombre']; ?>">
                    <p><?php echo $postre['nombre']; ?></p>
                    <p>Precio: €<?php echo number_format($postre['precio'], 2); ?></p>
                    <input type="radio" name="postre" value="<?php echo $index; ?>" required> Seleccionar
                </div>
            <?php endforeach; ?>
        </div>

        <button type="submit">Calcular Precio del Menú</button>
    </form>

    <?php
    // Comprobar si el formulario fue enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtener las selecciones de los platos
        $primerPlatoSeleccionado = $platos['primeros'][intval($_POST['primer_plato'])];
        $segundoPlatoSeleccionado = $platos['segundos'][intval($_POST['segundo_plato'])];
        $postreSeleccionado = $platos['postres'][intval($_POST['postre'])];

        // Calcular el precio total sin descuento
        $precioTotal = $primerPlatoSeleccionado['precio'] + $segundoPlatoSeleccionado['precio'] + $postreSeleccionado['precio'];

        // Calcular el precio con descuento
        $precioConDescuento = calcular_precio_menu($precioTotal);

        // Mostrar el resultado
        echo "<h2>Menú Seleccionado</h2>";
        echo "<p>Primer Plato: " . $primerPlatoSeleccionado['nombre'] . " (€" . number_format($primerPlatoSeleccionado['precio'], 2) . ")</p>";
        echo "<p>Segundo Plato: " . $segundoPlatoSeleccionado['nombre'] . " (€" . number_format($segundoPlatoSeleccionado['precio'], 2) . ")</p>";
        echo "<p>Postre: " . $postreSeleccionado['nombre'] . " (€" . number_format($postreSeleccionado['precio'], 2) . ")</p>";
        echo "<p><strong>Precio Total (sin descuento): €" . number_format($precioTotal, 2) . "</strong></p>";
        echo "<p><strong>Precio con Descuento (20%): €" . number_format($precioConDescuento, 2) . "</strong></p>";
    }
    ?>

</body>
</html>
