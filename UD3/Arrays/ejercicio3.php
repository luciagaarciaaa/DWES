<?php
/**
 * @author lucia 
 * @date 01/10/2024
 * Crear un array con los alumnos de clase y permitir la selección aleatoria de uno de
 * ellos. El resultado debe mostrar nombre y fotografía.
 */
// Función para seleccionar un alumno aleatorio
function seleccionarAlumnoAleatorio($alumnos) {
    return $alumnos[array_rand($alumnos)];
}

// Definir el array de alumnos con su nombre y ruta de la fotografía
$alumnos = [
    ['nombre' => 'Juan García', 'foto' => 'img/juan.jpg'],
    ['nombre' => 'Ana López', 'foto' => 'img/ana.jpg'],
    ['nombre' => 'Carlos Pérez', 'foto' => 'img/carlos.jpg'],
    ['nombre' => 'María Fernández', 'foto' => 'img/maria.jpg'],
    ['nombre' => 'Lucía González', 'foto' => 'img/lucia.jpg']
];

// Selección aleatoria de un alumno
$alumno_seleccionado = seleccionarAlumnoAleatorio($alumnos);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección aleatoria de alumno</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007BFF;
            margin-bottom: 20px;
        }
        img {
            max-width: 150px;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Alumno seleccionado aleatoriamente</h1>

    <!-- Mostrar el nombre y la foto del alumno seleccionado -->
    <img src="<?php echo $alumno_seleccionado['foto']; ?>" alt="<?php echo $alumno_seleccionado['nombre']; ?>" />
    <h2><?php echo $alumno_seleccionado['nombre']; ?></h2>

    <a href="" class="btn">Seleccionar otro alumno</a>
</div>

</body>
</html>
