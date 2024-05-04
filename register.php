<?php
    require_once("models/Cliente.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir datos del formulario de registro
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];
        $correo = $_POST["correo"];

        // Insertar nuevo usuario en la base de datos
        if(Cliente::insert($usuario, $contraseña, $correo)) {
            echo "Registro exitoso";
        } else { 
            echo "Error en el registro";
        }
    }
?>
 <a href="inicio.php">iniciar sesion</a>
