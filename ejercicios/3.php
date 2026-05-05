
Ejercicio 3:
Mostrar las dos primeras letras de los dias de la semana, usando for y un array asociativo.



<?php
$dias = [
    "lunes" => "Lu",
    "martes" => "Ma",
    "miercoles" => "Mi",
    "jueves" => "Ju",
    "viernes" => "Vi",
    "sabado" => "Sa",
    "domingo" => "Do"
];

$keys = array_keys($dias);

for ($i = 0; $i < count($dias); $i++) {
    echo $dias[$keys[$i]] . "<br>";
}
?>