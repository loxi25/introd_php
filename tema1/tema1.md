# Exposicion 1
## comentarios
###
 Son notas dentro del código que el servidor ignora por completo; sirven para explicar, documentar o aclarar qué hace el programa.

Una sola línea: Se usan dos barras // o una almohadilla #.

Varias líneas: Se encierran entre /* y */.

### variables y constantes
Ambas sirven para guardar informacion, pero funciona de manera distinta:
variables: Son contenedores


# PHP
## Comentarios, variables, constantes
### Comentarios

-----

Son notas dentro del código que el servidor ignora por completo; sirven para explicar, documentar o aclarar qué hace el programa.

Una sola línea: Se usan dos barras // o una almohadilla #.

Varias líneas: Se encierran entre /* y */.


## Variables y Constantes

Ambas sirven para guardar informacion, pero funcionan de forma distinta:

Variables: Son "Contenedores" para datos que puedan cambiar durante la ejecucion.

Siempre empiezan con el signo peso ($) seguido del nombre de la variable. (ejemplo: $edad = 25; )

## Constantes

son valores fijos que NO pueden eliminarse ni modificarse una vez definidos.
se crean usando la funcion "define()" o la palabra clave "const", y a diferencia de las variables, no llevan

## Arrays y Arrays Asociativos
Un array permite almacenar múltiples valores en una sola variable, funcionando como una lista potente.

Arrays (Indexados): Los datos se organizan por posiciones numéricas (índices), que automáticamente empiezan desde el 0.
Por ejemplo, en una lista de frutas, la primera sería la posición 0, la segunda la 1, y así sucesivamente.

Arrays Asociativos: En lugar de usar números, utilizas nombres o "claves" personalizadas para guardar y encontrar los datos.

Se escriben en formato clave → valor (ejemplo: "nombre" => "Ana"). 

Son ideales cuando quieres asociar etiquetas con significado a los valores, como los detalles de un usuario.























# ejemplo 1 


<?php
//esto es un comentario de una linea
# ezto tambien es un comentario
/*
este es un bloque de multiples lineas
*/
?>


# ejemplo 2


<?php
    // esto es un comentario de una linea
    # esto tambien es un comentario

    /*
    esto es un bloque 
    de multiples líneas
    */

    $nombre = "juan";
    $edad = "20";

    echo $nombre; // imprime: juan

?>

# ejemplo 3 
<?php
$frutas = [" manzana ","banano" , "uva" ]

echo $frutas[0]; // imprime : manzana
echo $frutas[2]; // imprime : manzana
?>

# ejemplo 4 
$precioProducto = 100;
$cantidad = 3;
$iva = 0.19; // 19%

$subtotal = $precioProducto * $cantidad; // Multiplicación
$totalConIva = $subtotal * (1 + $iva);

// 2. Incremento
$visitas = 10;
$visitas++; // Ahora es 11

// 3. Comparación e Identidad
$esMismoValor = (100 == "100");   // true (mismo valor)
$esMismoTipo = (100 === "100");   // false (entero vs string)

// 4. Lógicos y Ternario
$tieneDescuento = ($totalConIva > 200 && $visitas > 5); // true
$mensaje = $tieneDescuento ? "¡Tienes descuento!" : "Precio normal";

// 5. Concatenación de cadenas
echo "El total es: $" . $totalConIva . ". " . $mensaje;
?>



![unnamed](img/unnamed.png "unnamed")