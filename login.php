<?php
require_once("models/Cliente.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir datos del formulario de inicio de sesión
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];

        // Verificar credenciales en la base de datos
        $Cliente = Cliente::login($usuario, $contraseña);

        if ($Cliente) {
        // Si el inicio de sesión es exitoso, mostrar el mensaje y el enlace de cerrar sesión
            echo "Inicio de sesión exitoso";
            echo '<a href="inicio.php">Cerrar sesión</a>';
        } else {
        // Si hay un error en la autenticación, mostrar el mensaje de error y el enlace de volver
            echo "Error en la autenticación"; 
            echo '<a href="inicio.php">Volver</a>';
        }
    }
?>

