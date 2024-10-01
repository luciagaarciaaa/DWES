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
// Función para obtener la imagen según la estación del año
function obtenerImagenEstacion() {
    $mes = date('n'); // Obtener el mes actual (1-12)

    if ($mes >= 3 && $mes <= 5) {
        return 'img/primavera.jpg'; // Imagen de primavera
    } elseif ($mes >= 6 && $mes <= 8) {
        return 'img/verano.jpg'; // Imagen de verano
    } elseif ($mes >= 9 && $mes <= 11) {
        return 'img/otono.jpg'; // Imagen de otoño
    } else {
        return 'img/invierno.jpg'; // Imagen de invierno
    }
}

// Función para obtener el color de fondo según la hora del día
function obtenerColorFondo() {
    $hora = date('H'); // Obtener la hora actual (0-23)

    if ($hora >= 6 && $hora < 12) {
        return '#FFFAE5'; // Mañana - Color claro
    } elseif ($hora >= 12 && $hora < 18) {
        return '#FFE4B5'; // Tarde - Color cálido
    } elseif ($hora >= 18 && $hora < 21) {
        return '#FFDAB9'; // Atardecer - Color suave
    } else {
        return '#2F4F4F'; // Noche - Color oscuro
    }
}

// Función para obtener el color de los cuadros de habilidades basado en el mes y la hora
function obtenerColorCuadros() {
    $hora = date('H');
    $mes = date('n');
    
    // Cambiar el color según la hora del día
    if ($hora >= 6 && $hora < 12) {
        $colorHora = "#A2D5AB"; // Mañana
    } elseif ($hora >= 12 && $hora < 18) {
        $colorHora = "#FFC857"; // Tarde
    } else {
        $colorHora = "#344E41"; // Noche
    }

    // Cambiar el color según el mes del año
    switch ($mes) {
        case 12: case 1: case 2: // Invierno
            $colorMes = "#BBE0E3";
            break;
        case 3: case 4: case 5: // Primavera
            $colorMes = "#A4C639";
            break;
        case 6: case 7: case 8: // Verano
            $colorMes = "#FFD700";
            break;
        case 9: case 10: case 11: // Otoño
            $colorMes = "#FF7F50";
            break;
        default:
            $colorMes = "#FFFFFF"; // Color por defecto
            break;
    }

    // Retornar el color del mes
    return $colorMes; 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: <?php echo obtenerColorFondo(); ?>;
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
    <h1>Arrays</h1>

    <!-- a. Meses del año -->
    <div class="section">
        <h2>Meses del año</h2>
        <ul>
            <?php
            $meses = [
                'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
            ];
            foreach ($meses as $mes) {
                echo "<li>$mes</li>";
            }
            ?>
        </ul>
    </div>

    <!-- b. Tablero para jugar al juego de los barcos -->
    <div class="section">
        <h2>Tablero del juego de los barcos</h2>
        <div class="grid">
            <?php
            $tablero = array_fill(0, 10, array_fill(0, 10, '~'));
            foreach ($tablero as $fila) {
                foreach ($fila as $celda) {
                    echo "<div>$celda</div>";
                }
            }
            ?>
        </div>
    </div>

    <!-- c. Notas de los alumnos de 2º DAW -->
    <div class="section">
        <h2>Notas de los alumnos de 2º DAW en el módulo DWES</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Alumno</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody>
            <?php
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
            ?>
            </tbody>
        </table>
    </div>

    <!-- d. Verbos irregulares en inglés -->
    <div class="section">
        <h2>Verbos irregulares en inglés</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Infinitivo</th>
                    <th>Pasado</th>
                    <th>Participio</th>
                </tr>
            </thead>
            <tbody>
            <?php
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
            ?>
            </tbody>
        </table>
    </div>

    <!-- e. Información sobre continentes, países, capitales y banderas -->
    <div class="section">
        <h2>Información sobre continentes, países, capitales y banderas</h2>
        <?php
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
    </div>

</div>

</body>
</html>
