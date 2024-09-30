<?php

// Definición del array que almacena la información
$datos = [
    'mesesDelAño' => [
        "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
        "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
    ],
    'tableroBarcos' => [
        ["~", "~", "~", "~", "~", "~", "~", "~", "~", "~"],
        ["~", "~", "~", "~", "~", "~", "~", "~", "~", "~"],
        ["~", "~", "~", "~", "~", "~", "~", "~", "~", "~"],
        ["~", "~", "~", "~", "~", "~", "~", "~", "~", "~"],
        ["~", "~", "~", "~", "~", "~", "~", "~", "~", "~"],
        ["~", "~", "~", "~", "~", "~", "~", "~", "~", "~"],
        ["~", "~", "~", "~", "~", "~", "~", "~", "~", "~"],
        ["~", "~", "~", "~", "~", "~", "~", "~", "~", "~"],
        ["~", "~", "~", "~", "~", "~", "~", "~", "~", "~"],
        ["~", "~", "~", "~", "~", "~", "~", "~", "~", "~"]
    ],
    'notasAlumnos' => [
        ["nombre" => "Juan", "nota" => 8.5],
        ["nombre" => "María", "nota" => 9.0],
        ["nombre" => "Luis", "nota" => 7.0],
        ["nombre" => "Ana", "nota" => 6.5],
        ["nombre" => "Pedro", "nota" => 9.5]
    ],
    'verbosIrregulares' => [
        ["verbo" => "be", "pasado" => "was/were", "participio" => "been"],
        ["verbo" => "have", "pasado" => "had", "participio" => "had"],
        ["verbo" => "go", "pasado" => "went", "participio" => "gone"],
        ["verbo" => "do", "pasado" => "did", "participio" => "done"],
        ["verbo" => "see", "pasado" => "saw", "participio" => "seen"]
    ],
    'infoContinentes' => [
        [
            "continente" => "África",
            "paises" => ["Nigeria", "Egipto", "Sudáfrica"],
            "capitales" => ["Abuja", "El Cairo", "Pretoria"],
            "bandera" => "🇳🇬🇪🇬🇿🇦"
        ],
        [
            "continente" => "Asia",
            "paises" => ["China", "India", "Japón"],
            "capitales" => ["Pekín", "Nueva Delhi", "Tokio"],
            "bandera" => "🇨🇳🇮🇳🇯🇵"
        ],
        [
            "continente" => "Europa",
            "paises" => ["España", "Francia", "Alemania"],
            "capitales" => ["Madrid", "París", "Berlín"],
            "bandera" => "🇪🇸🇫🇷🇩🇪"
        ],
        [
            "continente" => "América",
            "paises" => ["EEUU", "Canadá", "México"],
            "capitales" => ["Washington D.C.", "Ottawa", "Ciudad de México"],
            "bandera" => "🇺🇸🇨🇦🇲🇽"
        ],
        [
            "continente" => "Oceanía",
            "paises" => ["Australia", "Nueva Zelanda", "Fiji"],
            "capitales" => ["Canberra", "Wellington", "Suva"],
            "bandera" => "🇦🇺🇳🇿🇫🇯"
        ]
    ]
];

// Función para mostrar la información
function mostrarDatos($datos) {
    echo "Meses del Año:\n";
    echo implode(", ", $datos['mesesDelAño']) . "\n\n";
    
    echo "Tablero para jugar al juego de los barcos:\n";
    foreach ($datos['tableroBarcos'] as $fila) {
        echo implode(" ", $fila) . "\n";
    }
    
    echo "\nNotas de los Alumnos de 2º DAW para el módulo DWES:\n";
    foreach ($datos['notasAlumnos'] as $alumno) {
        echo "{$alumno['nombre']}: {$alumno['nota']}\n";
    }
    
    echo "\nVerbos Irregulares en Inglés:\n";
    foreach ($datos['verbosIrregulares'] as $verbo) {
        echo "{$verbo['verbo']} - Pasado: {$verbo['pasado']}, Participio: {$verbo['participio']}\n";
    }
    
    echo "\nInformación sobre Continentes, Países, Capitales y Banderas:\n";
    foreach ($datos['infoContinentes'] as $info) {
        echo "{$info['continente']}:\n";
        echo "  Países: " . implode(", ", $info['paises']) . "\n";
        echo "  Capitales: " . implode(", ", $info['capitales']) . "\n";
        echo "  Banderas: {$info['bandera']}\n";
    }
}

// Llamar a la función para mostrar los datos
mostrarDatos($datos);

?>
