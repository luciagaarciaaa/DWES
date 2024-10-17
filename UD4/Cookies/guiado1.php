<?php
/**
 * @autor lucia
 * @date 17/10/2024
*Crear una coockie de duracion limitada
*/

//Crear cookie
setcookie("cookie", "hola mundo", time() +60);

echo "Inicio";
echo "<br>";

//Mostrar cookie
if(isset($_COOKIE["cookie"])){
    echo $_COOKIE["cookie"];
}

echo "<br>";
echo "Fin";

?>