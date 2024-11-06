<?php
/**
 * @autor lucia
 * Agenda de contactos
 * Ejemplo de uso de sesiones utilizando un array para manejo de una agenda de contactos
 */

//iniciamos sesion
session_start();

//si no existe la sesion la creamos como un array vacio
if (!isset($_SESSION['contactos'])) {
    $_SESSION["contactos"] = array();
}


if (isset($_POST["enviar"])) {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];

    //añadimos un nuevo elemento al array
    $_SESSION["contactos"][]= array(
        "nombre" => $nombre,
        "email" => $email,
        "telefono" => $telefono,
    );
    
}

$data = $_SESSION["contactos"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Formulario</h2>
    <form action="" method="post">
        Nombre <input type="text" name="nombre" id="nombre">
        Email <input type="email" name="email" id="email">
        Telefono <input type="text" name="telefono" id="telefono">
        <input type="submit" name="enviar" value="enviar">
    </form>
    <h2>Lista de contactos</h2>
   
    <?php
       
    foreach ($data as $clave => $valor) {
        echo $valor['nombre'] . "-" . $valor['email'] . "-" . $valor['telefono'];
        echo "<br/>";
    }
    ?>
 <a href = "cierre.php">Cerrar sesion</a>
    

</body>

</html>