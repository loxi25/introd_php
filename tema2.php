<?php
$opcion = 3;

// Estructura de decisión con switch
switch ($opcion) {
    case 1:
        echo "Has seleccionado la opción 1: Ver perfil.";
        break;

    case 2:
        echo "Has seleccionado la opción 2: Editar perfil.";
        break;

    case 3:
        echo "Has seleccionado la opción 3: Cerrar sesión.";
        break;

    default:
        echo "Opción no válida.";
        break;
}
?>