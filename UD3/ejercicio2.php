<?php
/**
 * @date 26/09/2024
 * @author Lucia Garcia Diaz
 * 2. Carga en variables mes y año e indica el número de días del mes. Utiliza la
 * estructura de control switch
 */
// Cargar el mes y el año en variables
$mes = 2; // Febrero
$anio = 2024; // Año bisiesto

// Inicializar variable para almacenar el número de días
$dias = 0;

// Usar la estructura de control switch para determinar el número de días del mes
switch ($mes) {
    case 1: // Enero
    case 3: // Marzo
    case 5: // Mayo
    case 7: // Julio
    case 8: // Agosto
    case 10: // Octubre
    case 12: // Diciembre
        $dias = 31;
        break;
    
    case 4: // Abril
    case 6: // Junio
    case 9: // Septiembre
    case 11: // Noviembre
        $dias = 30;
        break;
    
    case 2: // Febrero
        // Comprobar si el año es bisiesto
        if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)) {
            $dias = 29; // Año bisiesto
        } else {
            $dias = 28; // Año no bisiesto
        }
        break;
    
    default:
        echo "Mes no válido.";
        exit; // Terminar el script si el mes no es válido
}

// Imprimir el número de días del mes
echo "El mes $mes del año $anio tiene $dias días.";
?>
 