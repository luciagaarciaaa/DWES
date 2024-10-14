<?php 
include ('C:\xampp\htdocs\DWES\config\config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice de ejercicios</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 80%;
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .actividad {
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 5px;
            background-color: #fafafa;
        }
        .actividad h2 {
            margin: 0;
            color: #2a7ae4;
        }
        .actividad p {
            margin: 5px 0;
            color: #555;
        }
        .actividad a {
            text-decoration: none;
            color: #2a7ae4;
            font-weight: bold;
        }
        .actividad a:hover {
            color: #1a5db0;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <h1>Actividades de clase</h1>
        <?php 
        foreach($actividades as $actividad){
            echo "<div class='actividad'>";
            echo "<h2><a href='" . $actividad['url'] . "'>" . htmlspecialchars($actividad['unidad']) . ": " . htmlspecialchars($actividad['actividad']) . "</a></h2>";
            echo "<p>" . htmlspecialchars($actividad['descripcion']) . "</p>";
            echo "</div>";
        }
        ?>
</div>
    
</body>
</html>