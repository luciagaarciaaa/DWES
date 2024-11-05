<?php
$base_url ='/Proyectos';

// Definir el array con los archivos y la carpeta
$ejercicios = [
    '/Calendario/calendario.php' => 'Calendario',
    '/Porfolio/index.php' => 'Porfolio',
   
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .ejercicios {
            list-style-type: none;
            padding: 0;
        }
        .ejercicio {
            background-color: #fff;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .ejercicio a {
            text-decoration: none;
            color: #007BFF;
        }
        .ejercicio a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Proyectos</h1>
    <ul class="ejercicios">
        <?php foreach ($ejercicios as $file => $name): ?>
            <li class="ejercicio">
                <a href="<?= htmlspecialchars($base_url . $file); ?>"><?= htmlspecialchars($name); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
