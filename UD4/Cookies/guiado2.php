<?php
/**
 *  @autor lucia
 *  @date 17/10/2024
 *Borrar la cookie
*/


if(isset($_COOKIE["cookie"])){
    setcookie("cookie", "hola mundo", time() -60);
    echo "Cookie borrada";
}


?>