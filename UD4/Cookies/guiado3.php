<?php 
/** @autor lucia
 *  @date 17/10/2024
 */

 if(isset($_COOKIE["contador"])){
    setcookie("contador",0,time()+3600); 
 }else{
   $valor = $_COOKIE["contador"] + 1;
   setcookie("contador",$valor, time()+3600);
 }
 
 echo $_COOKIE["contador"];

 ?>