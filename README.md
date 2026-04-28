# introd_php



estructura de control 
condicion - if , else , elif ....
repeticion - for , while , do while


# ejemplo 1 de condicion 


<?php
$edad = 16;

if ($edad >= 18) {
    echo "Eres mayor de edad";
} else {
    echo "Eres menor de edad";
}
?>


# ejemplo 2 de condicion

<?php
$nota = 85;

// Estructura condicional
if ($nota >= 60) {
    echo "Has aprobado la materia.";
} else {
    echo "Has reprobado la materia.";
}
?>

# ejemplo 3 de condicion

<?php
$usuario = "admin";
$contrasena = "12345";
$activo = true;

// Estructura condicional múltiple
if ($usuario == "admin" && $contrasena == "12345") {
    
    if ($activo) {
        echo "Bienvenido, acceso concedido.";
    } else {
        echo "Tu cuenta está desactivada.";
    }

} else {
    echo "Usuario o contraseña incorrectos.";
}
?>


# ejemplo 4 de condicion

<?php
$usuario = "admin";
$contrasena = "12345";
$activo = true;

// Estructura condicional múltiple
if ($usuario == "admin" && $contrasena == "12345") {
    
    if ($activo) {
        echo "Bienvenido, acceso concedido.";
    } else {
        echo "Tu cuenta está desactivada.";
    }

} else {
    echo "Usuario o contraseña incorrectos.";
}
?>
<?php
$usuario = "Carlos";
$contrasena = "abc123";
$rol = "administrador";
$activo = true;
$intentos = 2;

// Estructura condicional avanzada
if ($usuario == "Carlos" && $contrasena == "abc123") {

    if ($activo) {

        if ($rol == "administrador") {
            echo "Bienvenido, Administrador Carlos.<br>";
            echo "Tienes acceso total al sistema.";
        } elseif ($rol == "editor") {
            echo "Bienvenido, Editor Carlos.<br>";
            echo "Puedes modificar contenido.";
        } else {
            echo "Bienvenido, Usuario Carlos.<br>";
            echo "Tienes acceso limitado.";
        }

    } else {
        echo "La cuenta está desactivada.";
    }

} else {

    if ($intentos < 3) {
        echo "Credenciales incorrectas.<br>";
        echo "Te quedan " . (3 - $intentos) . " intentos.";
    } else {
        echo "Cuenta bloqueada por demasiados intentos fallidos.";
    }

}
?>

#  ejemplo 1 de decision


