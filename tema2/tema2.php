<?php
$dia = "viernes";

// Estructura de decisión
switch ($dia) {
    case "lunes":
        echo "Inicio de semana.";
        break;

    case "martes":
    case "miércoles":
    case "jueves":
        echo "Día laboral.";
        break;

    case "viernes":
        echo "¡Por fin es viernes!";
        break;

    case "sábado":
    case "domingo":
        echo "Es fin de semana.";
        break;

    default:
        echo "Día no válido.";
        break;
}
?>