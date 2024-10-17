<?php 
/**
 * @author lucia 
 * @date 11/10/2024
 * Formulario para crear un currículum que incluya: Campos de texto, grupo de
*botones de opción, casilla de verificación, lista de selección única, lista de
*selección múltiple, botón de validación, botón de imagen, botón de reset, etc.
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $genero = isset($_POST['genero']) ? htmlspecialchars($_POST['genero']) : '';
    $habilidades = isset($_POST['habilidades']) ? $_POST['habilidades'] : [];
    $educacion = htmlspecialchars($_POST['educacion']);
    $idiomas = isset($_POST['idiomas']) ? $_POST['idiomas'] : [];


    // Mostrar los datos enviados
    echo "<h2>Datos enviados</h2>";
    echo "Nombre: $nombre<br>";
    echo "Correo: $correo<br>";
    echo "Teléfono: $telefono<br>";
    echo "Género: $genero<br>";
    echo "Habilidades: " . implode(", ", $habilidades) . "<br>";
    echo "Educación: $educacion<br>";
    echo "Idiomas: " . implode(", ", $idiomas) . "<br><br>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Currículum</title>
</head>
<body>

<h2>Formulario para Crear Currículum</h2>

<form method="post" action="">

    <!-- Campos de Texto -->
    <label for="nombre">Nombre Completo:</label><br>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="correo">Correo Electrónico:</label><br>
    <input type="email" id="correo" name="correo" required><br><br>

    <label for="telefono">Teléfono:</label><br>
    <input type="tel" id="telefono" name="telefono" required><br><br>

    <!-- Grupo de Botones de Opción -->
    <label>Género:</label><br>
    <input type="radio" id="masculino" name="genero" value="Masculino">
    <label for="masculino">Masculino</label><br>
    <input type="radio" id="femenino" name="genero" value="Femenino">
    <label for="femenino">Femenino</label><br><br>

    <!-- Casillas de Verificación -->
    <label>Habilidades:</label><br>
    <input type="checkbox" id="php" name="habilidades[]" value="PHP">
    <label for="php">PHP</label><br>
    <input type="checkbox" id="html" name="habilidades[]" value="HTML">
    <label for="html">HTML</label><br>
    <input type="checkbox" id="css" name="habilidades[]" value="CSS">
    <label for="css">CSS</label><br><br>

    <!-- Lista de Selección Única -->
    <label for="educacion">Nivel de Educación:</label><br>
    <select id="educacion" name="educacion">
        <option value="Secundaria">Secundaria</option>
        <option value="Bachiller">Bachiller</option>
        <option value="Carrera">Carrera</option>
        <option value="FP">FP</option>
    </select><br><br>

    <!-- Lista de Selección Múltiple -->
    <label for="idiomas">Idiomas que dominas:</label><br>
    <select id="idiomas" name="idiomas[]" multiple size="4">
        <option value="Español">Español</option>
        <option value="Inglés">Inglés</option>
        <option value="Francés">Francés</option>
        <option value="Alemán">Alemán</option>
    </select><br><br>

    <!-- Botón de Envío y Reset -->
    <label for="imagen">Seleccione una imagen:</label><br>
    <input type="file" name="imagen" id="imagen" accept="image/*"><br><br>
    <button type="submit">Enviar</button>
    <input type="reset" value="Resetear"><br><br>  
</form>
</body>
</html>
