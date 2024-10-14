<?php
/**
 * @author lucia 
 * @date 22/09/2024
 * Porfolio
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
    <title>Mi Portafolio</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            /* El color de fondo será dinámico según la hora */
            background-color: <?php echo obtenerColorFondo(); ?>;
        }
        header {
            width: 100%;
            height: 100px; 
            position: relative;
        }
        header img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Hace que la imagen se ajuste sin deformarse */
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1; /* Envía la imagen al fondo, detrás del contenido */
        }
        .skill-box {
            background-color: <?php echo obtenerColorCuadros(); ?>;
            padding: 10px 20px;
            border-radius: 10px;
            color: white;
            margin: 10px;
            display: inline-block;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- Encabezado -->
    <header>
        <?php
            // Mostrar la imagen de cabecera según la estación del año
            echo '<img src="' . obtenerImagenEstacion() . '" alt="Cabecera de estación">';
        ?>
        <nav>
            <ul>
                <li><a href="#about">Sobre mí</a></li>
                <li><a href="#skills">Habilidades</a></li>
                <li><a href="#projects">Proyectos</a></li>
            </ul>
        </nav>
    </header>

    <!-- Contenedor principal -->
    <div class="container">

        <!-- Sección "Sobre mí" -->
        <section id="about">
            <h2>Sobre mí</h2>
            <p>Hola, soy Lucia, una desarrolladora web apasionada por crear soluciones creativas y eficientes.</p>
            <ul>
                <li>Edad: 20 años</li>
                <li>Estudios previos:
                    <ul>
                        <li>Bachillerato</li>
                        <li>Desarrollo de Aplicaciones Multiplataforma</li>
                        <li>Especialización en Ciberseguridad</li>
                    </ul>
                </li>
            </ul>
            <img src="img/IMG_1800.jpg" alt="Foto de Lucia">
        </section>

        <!-- Sección de habilidades -->
        <section id="skills">
            <h2>Habilidades</h2>
            <ul>
            <div class="skill-box">HTML</div>
            <div class="skill-box">CSS</div>
            <div class="skill-box">JavaScript</div>
            <div class="skill-box">PHP</div>
            <div class="skill-box">MySQL</div>
            </ul>
        </section>

        <!-- Sección de proyectos -->
        <section id="projects">
            <h2>Mis proyectos</h2>
            <div class="project">
                <img src="https://via.placeholder.com/150" alt="Proyecto 1">
                <div>
                    <h3>Proyecto 1</h3>
                    <p>Descripción breve del Proyecto 1.</p>
                </div>
            </div>

            <div class="project">
                <img src="https://via.placeholder.com/150" alt="Proyecto 2">
                <div>
                    <h3>Proyecto 2</h3>
                    <p>Descripción breve del Proyecto 2.</p>
                </div>
            </div>

            <div class="project">
                <img src="https://via.placeholder.com/150" alt="Proyecto 3">
                <div>
                    <h3>Proyecto 3</h3>
                    <p>Descripción breve del Proyecto 3.</p>
                </div>
            </div>
        </section>

    </div>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2024 Lucia. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
