<?php   
/**
 * @author lucia
 * @date 03/10/2024
 * Array de paises donde usaremos funciones anónimas
 */

 $aPaises = array(
    array('id' => 'es', 'pais' => 'España', 'capital' => 'Madrid'),
    array('id' => 'it', 'pais' => 'Italia', 'capital' => 'Roma'),
    array('id' => 'fr', 'pais' => 'Francia', 'capital' => 'Paris'), 

 );

//Obtener array
//Opcion1

echo "Opcion 1<br>";
$nombrePaises= array();
foreach($aPaises as $pais){
    $nombrePaises[] = $pais['pais'];
}
print_r ($nombrePaises);

//Opcion 2
//array_map devuelve un array

//$nombrePaises =array_map(function ($pais){ 
//  return $pais['pais'];
//}, $aPaises);
//print_r($nombrePaises);
?>