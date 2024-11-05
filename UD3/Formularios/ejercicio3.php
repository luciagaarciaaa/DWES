<?php 
/**
 * @author lucia 
 * @date 01/10/2024
 * Formulario para crear un currículum que incluya: Campos de texto, grupo de
 * botones de opción, casilla de verificación, lista de selección única, lista de
 * selección múltiple, botón de validación, botón de imagen, botón de reset, etc.
 */

// Variable para controlar si se han enviado datos
$datosEnviados = false;
$mensaje = '';

// Verificar si se ha enviado el formulario (usando el método POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $genero = isset($_POST['genero']) ? htmlspecialchars($_POST['genero']) : '';
    $habilidades = isset($_POST['habilidades']) ? $_POST['habilidades'] : [];
    $educacion = htmlspecialchars($_POST['educacion']);
    $idiomas = isset($_POST['idiomas']) ? $_POST['idiomas'] : [];
    
    // Comprobar si se ha subido un archivo
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
        $nombreArchivo = $_FILES['imagen']['name'];
        $tipoArchivo = $_FILES['imagen']['type'];
        $tamanoArchivo = $_FILES['imagen']['size'];
        $archivoTemporal = $_FILES['imagen']['tmp_name'];

        // Definir la carpeta donde se guardará el archivo
        $directorioDestino = "uploads/";

        // Verificar que el archivo es una imagen
        $tiposPermitidos = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($tipoArchivo, $tiposPermitidos)) {
            // Mover el archivo desde el directorio temporal al directorio de destino
            if (move_uploaded_file($archivoTemporal, $directorioDestino . $nombreArchivo)) {
                $mensaje = "La imagen se ha subido correctamente: " . $nombreArchivo;
            } else {
                $mensaje = "Hubo un error al subir la imagen.";
            }
        } else {
            $mensaje = "Solo se permiten imágenes en formato JPG, PNG o GIF.";
        }
    } else {
        $mensaje = "No se ha subido ninguna imagen o hubo un error.";
    }

    // Cambiar el estado a verdadero para ocultar el formulario
    $datosEnviados = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Currículum</title>
    <style>
        /* Estilo para ocultar el formulario cuando los datos han sido enviados */
        <?php if ($datosEnviados): ?>
            form {
                display: none; /* Oculta el formulario */
            }
        <?php endif; ?>
    </style>
</head>
<body>

<h2>Formulario para Crear Currículum</h2>

<!-- Formulario para subir imagen y otros datos -->
<form method="post" action="" enctype="multipart/form-data">
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

<?php if ($datosEnviados): ?>
    <!-- Mostrar los datos enviados -->
    <h2>Datos enviados</h2>
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Correo: <?php echo $correo; ?></p>
    <p>Teléfono: <?php echo $telefono; ?></p>
    <p>Género: <?php echo $genero; ?></p>
    <p>Habilidades: <?php echo implode(", ", $habilidades); ?></p>
    <p>Educación: <?php echo $educacion; ?></p>
    <p>Idiomas: <?php echo implode(", ", $idiomas); ?></p>
    <p><?php echo $mensaje; ?></p>
<?php endif; ?>

</body>
</html>
