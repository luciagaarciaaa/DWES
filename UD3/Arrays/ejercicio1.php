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
$meses = [
    'Enero',
    'Febrero',
    'Marzo',
    'Abril',
    'Mayo',
    'Junio',
    'Julio',
    'Agosto',
    'Septiembre',
    'Octubre',
    'Noviembre',
    'Diciembre'
];
foreach ($meses as $mes) {
    echo "<li>$mes</li>";
}

$tablero = array_fill(0, 10, array_fill(0, 10, '~'));
foreach ($tablero as $fila) {
    foreach ($fila as $celda) {
        echo "<div>$celda</div>";
    }
}

$notas_alumnos_dwes = [
    'Juan' => 8.5,
    'Ana' => 7.0,
    'Carlos' => 9.2,
    'Maria' => 6.8,
    'Lucia' => 8.2
];
foreach ($notas_alumnos_dwes as $alumno => $nota) {
    echo "<tr><td>$alumno</td><td>$nota</td></tr>";
}


$verbos_irregulares = [
    ['be', 'was/were', 'been'],
    ['begin', 'began', 'begun'],
    ['break', 'broke', 'broken'],
    ['bring', 'brought', 'brought'],
    ['buy', 'bought', 'bought']
];
foreach ($verbos_irregulares as $verbo) {
    echo "<tr><td>{$verbo[0]}</td><td>{$verbo[1]}</td><td>{$verbo[2]}</td></tr>";
}

$informacion_paises = [
    'Europa' => [
        ['país' => 'España', 'capital' => 'Madrid', 'bandera' => '🇪🇸'],
        ['país' => 'Francia', 'capital' => 'París', 'bandera' => '🇫🇷']
    ],
    'Asia' => [
        ['país' => 'Japón', 'capital' => 'Tokio', 'bandera' => '🇯🇵'],
        ['país' => 'China', 'capital' => 'Pekín', 'bandera' => '🇨🇳']
    ]
];
foreach ($informacion_paises as $continente => $paises) {
    echo "<h3>Continente: $continente</h3>";
    echo "<table class='table'>";
    echo "<thead><tr><th>País</th><th>Capital</th><th>Bandera</th></tr></thead><tbody>";
    foreach ($paises as $pais_info) {
        echo "<tr><td>{$pais_info['país']}</td><td>{$pais_info['capital']}</td><td class='flags'>{$pais_info['bandera']}</td></tr>";
    }
    echo "</tbody></table>";
}
?>