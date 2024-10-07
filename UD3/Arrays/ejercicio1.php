<?php
/**
 * @author lucia 
 * @date 01/10/2024
 * Definir un array que permita almacenar y mostrar la siguiente información.
 *a. Meses del año.
 *b. Tablero para jugar al juego de los barcos.
 *c. Nota de los alumnos de 2o DAW para el módulo DWES.
 *d. Verbos irregulares en inglés.
 *e. Información sobre continentes, países, capitales y banderas.
 */
// Inicializa los arrays con la información requerida

// a. Meses del año
$meses = [
    "Enero", "Febrero", "Marzo", "Abril", "Mayo", 
    "Junio", "Julio", "Agosto", "Septiembre", 
    "Octubre", "Noviembre", "Diciembre"
];

// b. Tablero para jugar al juego de los barcos
$tablero = [
    [" ", " ", " ", " ", " ", " "],
    [" ", " ", " ", " ", " ", " "],
    [" ", " ", " ", " ", " ", " "],
    [" ", " ", " ", " ", " ", " "],
    [" ", " ", " ", " ", " ", " "],
    [" ", " ", " ", " ", " ", " "]
];

// c. Nota de los alumnos de 2o DAW para el módulo DWES
$notasAlumnos = [
    "Juan" => 8,
    "María" => 7,
    "Pedro" => 6,
    "Laura" => 9,
    "Ana" => 5
];

// d. Verbos irregulares en inglés
$verbosIrregulares = [
    "be" => "was/were",
    "begin" => "began",
    "choose" => "chose",
    "go" => "went",
    "know" => "knew"
];

// e. Información sobre continentes, países, capitales y banderas
$continentes = [
    "Europa" => [
        "España" => ["capital" => "Madrid", "bandera" => "🇪🇸"],
        "Francia" => ["capital" => "París", "bandera" => "🇫🇷"],
        "Alemania" => ["capital" => "Berlín", "bandera" => "🇩🇪"]
    ],
    "América" => [
        "Estados Unidos" => ["capital" => "Washington D.C.", "bandera" => "🇺🇸"],
        "Argentina" => ["capital" => "Buenos Aires", "bandera" => "🇦🇷"],
        "Brasil" => ["capital" => "Brasilia", "bandera" => "🇧🇷"]
    ],
    "Asia" => [
        "Japón" => ["capital" => "Tokio", "bandera" => "🇯🇵"],
        "China" => ["capital" => "Pekín", "bandera" => "🇨🇳"],
        "India" => ["capital" => "Nueva Delhi", "bandera" => "🇮🇳"]
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Variada</title>
</head>
<body>
    <h1>Información Variada</h1>

    <h2>a. Meses del Año</h2>
    <ul>
        <?php foreach ($meses as $mes): ?>
            <li><?= $mes ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>b. Tablero de Barcos</h2>
    <table border="1">
        <?php foreach ($tablero as $fila): ?>
            <tr>
                <?php foreach ($fila as $celda): ?>
                    <td><?= $celda ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>c. Notas de Alumnos de 2º DAW para el Módulo DWES</h2>
    <ul>
        <?php foreach ($notasAlumnos as $alumno => $nota): ?>
            <li><?= $alumno ?>: <?= $nota ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>d. Verbos Irregulares en Inglés</h2>
    <ul>
        <?php foreach ($verbosIrregulares as $verbo => $pasado): ?>
            <li><?= $verbo ?>: <?= $pasado ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>e. Información sobre Continentes, Países, Capitales y Banderas</h2>
    <?php foreach ($continentes as $continente => $paises): ?>
        <h3><?= $continente ?></h3>
        <ul>
            <?php foreach ($paises as $pais => $info): ?>
                <li><?= $pais ?>: Capital - <?= $info['capital'] ?>, Bandera - <?= $info['bandera'] ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</body>
</html>
