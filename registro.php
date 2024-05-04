<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="register.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required><br><br>
        
        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required><br><br>
        
        <button type="submit">Registrarse</button>
    </form>
    <p>¿Ya tienes una cuenta? <a href="inicio.php">Inicia Sesión</a></p>
</body>
</html>
