<?php
/** @author lucia 
 * @date 01/10/2024
 * Indexar los ejercicios mediante un array.
 * */
// Función para mostrar los meses del año
function mostrarMeses() {
    $meses = [
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    ];
    echo "<ul>";
    foreach ($meses as $mes) {
        echo "<li>$mes</li>";
    }
    echo "</ul>";
}

// Función para mostrar el tablero del juego de los barcos
function mostrarTablero() {
    $tablero = array_fill(0, 10, array_fill(0, 10, '~'));
    echo "<div class='grid'>";
    foreach ($tablero as $fila) {
        foreach ($fila as $celda) {
            echo "<div>$celda</div>";
        }
    }
    echo "</div>";
}

// Función para mostrar las notas de los alumnos
function mostrarNotas() {
    $notas_alumnos_dwes = [
        'Juan' => 8.5,
        'Ana' => 7.0,
        'Carlos' => 9.2,
        'Maria' => 6.8,
        'Lucia' => 5.5
    ];
    echo "<table class='table'><thead><tr><th>Alumno</th><th>Nota</th></tr></thead><tbody>";
    foreach ($notas_alumnos_dwes as $alumno => $nota) {
        echo "<tr><td>$alumno</td><td>$nota</td></tr>";
    }
    echo "</tbody></table>";
}

// Función para mostrar los verbos irregulares en inglés
function mostrarVerbosIrregulares() {
    $verbos_irregulares = [
        ['be', 'was/were', 'been'],
        ['begin', 'began', 'begun'],
        ['break', 'broke', 'broken'],
        ['bring', 'brought', 'brought'],
        ['buy', 'bought', 'bought']
    ];
    echo "<table class='table'><thead><tr><th>Infinitivo</th><th>Pasado</th><th>Participio</th></tr></thead><tbody>";
    foreach ($verbos_irregulares as $verbo) {
        echo "<tr><td>{$verbo[0]}</td><td>{$verbo[1]}</td><td>{$verbo[2]}</td></tr>";
    }
    echo "</tbody></table>";
}

// Función para mostrar la información sobre continentes, países, capitales y banderas
function mostrarInformacionPaises() {
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
        echo "<table class='table'><thead><tr><th>País</th><th>Capital</th><th>Bandera</th></tr></thead><tbody>";
        foreach ($paises as $pais_info) {
            echo "<tr><td>{$pais_info['país']}</td><td>{$pais_info['capital']}</td><td class='flags'>{$pais_info['bandera']}</td></tr>";
        }
        echo "</tbody></table>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Indexados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            padding: 20px;
        }
        h1, h2 {
            color: #007BFF;
        }
        h1 {
            border-bottom: 2px solid #ff00e1;
            padding-bottom: 10px;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .section {
            margin-bottom: 30px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .table th {
            background-color: #4400ff;
            color: white;
        }
        .table td {
            background-color: #f9f9f9;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(10, 30px);
            grid-gap: 5px;
            margin-top: 10px;
        }
        .grid div {
            background-color: #00ff8c;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            height: 30px;
            font-weight: bold;
        }
        .flags {
            font-size: 1.5em;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Ejercicios Indexados</h1>

    <?php
    // Definimos el array de ejercicios, donde cada clave es el nombre o número del ejercicio
    $ejercicios = [
        'Ejercicio 1: Meses del año' => 'mostrarMeses',
        'Ejercicio 2: Tablero del juego de los barcos' => 'mostrarTablero',
        'Ejercicio 3: Notas de los alumnos de 2º DAW' => 'mostrarNotas',
        'Ejercicio 4: Verbos irregulares en inglés' => 'mostrarVerbosIrregulares',
        'Ejercicio 5: Información sobre continentes, países, capitales y banderas' => 'mostrarInformacionPaises'
    ];

    // Recorrer el array de ejercicios y mostrar cada uno
    foreach ($ejercicios as $titulo => $funcion) {
        echo "<div class='section'>";
        echo "<h2>$titulo</h2>";
        $funcion(); // Ejecuta la función que contiene el código de cada ejercicio
        echo "</div>";
    }
    ?>

</div>

</body>
</html>
