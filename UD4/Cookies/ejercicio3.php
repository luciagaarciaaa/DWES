<?php
/**
 * @author lucia
 * @date 17/10/2024
 */
 // Inicializamos variables de error y de campo
 $usernameError = $passwordError = "";
 $username = $password = "";
 
 // Si el formulario ha sido enviado
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $valid = true; // Bandera para controlar si el formulario es válido
 
     // Validar el campo de nombre de usuario
     if (empty($_POST['username'])) {
         $usernameError = "El nombre de usuario es obligatorio";
         $valid = false;
     } else {
         $username = $_POST['username'];
     }
 
     // Validar el campo de contraseña
     if (empty($_POST['password'])) {
         $passwordError = "La contraseña es obligatoria";
         $valid = false;
     } else {
         $password = $_POST['password'];
     }
 
     // Si no hay errores de validación
     if ($valid) {
         // Simulación de un inicio de sesión exitoso sin credenciales de base de datos
         echo "Inicio de sesión exitoso con nombre de usuario: " . htmlspecialchars($username) . " y contraseña: " . htmlspecialchars($password);
 
         // Si el usuario quiere recordar sus credenciales
         if (isset($_POST['remember_me'])) {
             setcookie('username', $username, time() + (86400 * 30), "/"); // Cookie para 30 días
             setcookie('password', $password, time() + (86400 * 30), "/");
         } else {
             // Si no quiere recordar, eliminamos las cookies
             setcookie('username', '', time() - 3600, "/");
             setcookie('password', '', time() - 3600, "/");
         }
 
         // Mostrar mensaje de éxito o redirigir (para mantener los campos después de validación)
         exit; // Si quieres redirigir, puedes usar: header("Location: success.php");
     }
 }
 
 // Comprobamos si se ha hecho clic en el botón para borrar las cookies
 if (isset($_POST['clear_cookies'])) {
     setcookie('username', '', time() - 3600, "/");
     setcookie('password', '', time() - 3600, "/");
     header("Location: " . $_SERVER['PHP_SELF']);
 }
 ?>
 
 <!DOCTYPE html>
 <html lang="es">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Formulario de Login</title>
 </head>
 <body>
     <h2>Login</h2>
     <form action="" method="POST">
         <label for="username">Nombre de usuario:</label><br>
         <input type="text" id="username" name="username" value="<?php 
             // Mantener el valor del campo después de enviar el formulario
             echo !empty($username) ? htmlspecialchars($username) : (isset($_COOKIE['username']) ? htmlspecialchars($_COOKIE['username']) : ''); 
         ?>">
         <span style="color:red"><?php echo $usernameError; ?></span><br><br>
 
         <label for="password">Contraseña:</label><br>
         <input type="password" id="password" name="password" value="<?php 
             // Mantener el valor del campo después de enviar el formulario
             echo !empty($password) ? htmlspecialchars($password) : (isset($_COOKIE['password']) ? htmlspecialchars($_COOKIE['password']) : ''); 
         ?>">
         <span style="color:red"><?php echo $passwordError; ?></span><br><br>
 
         <input type="checkbox" id="remember_me" name="remember_me" <?php 
             // Mantener la opción seleccionada si las cookies existen
             echo isset($_COOKIE['username']) ? 'checked' : ''; 
         ?>>
         <label for="remember_me">Recordar mis datos</label><br><br>
 
         <input type="submit" value="Iniciar sesión">
     </form>
 
     <form action="" method="POST">
         <input type="submit" name="clear_cookies" value="Borrar información almacenada">
     </form>
 </body>
 </html>
 