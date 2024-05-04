<?php
require_once("Cliente.php");

class Auth {
    public static function login($usuario, $contraseña) {
        $conex = new mysqli("localhost", "root", "", "api_rest");

        // Verificar si la conexión fue exitosa
        if ($conex->connect_error) {
            die("Error de conexión: " . $conex->connect_error);
        }

        // Consulta para verificar las credenciales del cliente
        $query = "SELECT * FROM cliente WHERE usuario = ? AND contraseña = ?";
        $statement = $conex->prepare($query);
        $statement->bind_param("ss", $usuario, $contraseña);
        $statement->execute();
        $result = $statement->get_result();

        // Verificar si se encontró un cliente con las credenciales proporcionadas
        if ($result->num_rows === 1) {
            echo"resgistro"
            return true;
        } else {
            echo"no registro"
            return false;
        }

        // Cerrar la conexión y liberar recursos
        $statement->close();
        $conex->close();
    }
}
?>
